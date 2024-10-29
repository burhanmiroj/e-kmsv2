<?php

namespace App\Http\Controllers\Admin\Kegiatan;

use Carbon\Carbon;
use App\Models\Kader;
use App\Models\Pemasukan;
use App\Models\Pengajuan;
use App\Models\DataLansia;
use App\Models\PantauanKMS;
use Illuminate\Support\Str;
use App\Models\PesertaKader;
use Illuminate\Http\Request;
use App\Models\KegiatanLansia;
use App\Models\PesertaKegiatan;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\DataTables\Admin\Kegiatan\KegiatanLansiaDataTable;



class KegiatanLansiaController extends Controller
{
    public function index(KegiatanLansiaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.kegiatanlansia.index');
    }

    public function create()
    {
        return view('pages.admin.lansia.kegiatanlansia.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $thumbnailFileName = Str::random(10) . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/kegiatan-lansia/', $thumbnailFileName);

            KegiatanLansia::create([
                'thumbnail' => $thumbnailFileName,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tanggal_kegiatan' => $request->tanggal_kegiatan,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_selesai' => $request->waktu_selesai,
                'status' => 0,
            ]);
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-kegiatan.datakegiatanlansia.index'))->withToastSuccess('Data tersimpan');
    }
    public function show($id)
    {
        $data = KegiatanLansia::find($id);
        $datakms = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->get();

        return view('pages.admin.lansia.kegiatanlansia.rekapkegiatan', compact('datakms', 'data'));
        // $data = KegiatanLansia::findorFail($id);
        // $data_lansia = DataLansia::get();
        // $data_peserta = PesertaKegiatan::where('kegiatan_lansia_id', $id)->get();
        // $data_kader = Kader::get();
        // $data_peserta_kader = PesertaKader::where('kegiatan_lansia1', $id)->get();

        // return view('pages.admin.lansia.kegiatanlansia.show', ['data' => $data, 'data_lansia' => $data_lansia, 'data_peserta' => $data_peserta, 'data_kader' => $data_kader, 'data_peserta_kader' => $data_peserta_kader]);
    }
    public function edit($id)
    {
        $data = KegiatanLansia::findOrFail($id);
        return view('pages.admin.lansia.kegiatanlansia.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = KegiatanLansia::findOrFail($id);

            if ($request->file('thumbnail')) {
                if (Storage::disk('public')->exists('kegiatan-lansia/' . $data->thumbnail)) {
                    Storage::disk('public')->delete('kegiatan-lansia/' . $data->thumbnail);
                }                

                $thumbnailFileName = Str::random(10) . $request->file('thumbnail')->getClientOriginalName();
                $request->file('thumbnail')->storeAs('public/kegiatan-lansia/', $thumbnailFileName);
            }

            $data->update([
                'thumbnail' => $request->file('thumbnail') ? $thumbnailFileName : $data->thumbnail,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'lokasi' => $request->lokasi,
                'tanggal_kegiatan' => $request->tanggal_kegiatan,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_selesai' => $request->waktu_selesai,
                'status' => 0,
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-kegiatan.datakegiatanlansia.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            $data = KegiatanLansia::find($id);

            if (Storage::disk('public')->exists('kegiatan-lansia/' . $data->thumbnail)) {
                Storage::disk('public')->delete('kegiatan-lansia/' . $data->thumbnail);
            }

            $data->delete($data);
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }

        return redirect(route('admin.data-kegiatan.datakegiatanlansia.index'))->withToastSuccess('Data dihapus');
    }
    
    public function status($id)
    {
        $now = Carbon::now();
        $datakegiatan = KegiatanLansia::find($id);
        $datakegiatan->status = !$datakegiatan->status;
        $datakegiatan->waktu = $now;
        $datakegiatan->save();
        return redirect()->back();
    }
    public function create_peserta(Request $request, $id)
    {
        $kegiatan = KegiatanLansia::where('id', $id)->first();
        PesertaKegiatan::create([
            "kegiatan_lansia_id" => $request->kegiatan_lansia_id,
            "lansia_id" => $request->lansia_id,
            "iuran_wajib" => $request->iuran_wajib,
        ]);
        $kegiatan->jumlah_iuran += (int)$request->iuran_wajib;
        $kegiatan->save();
        return redirect()->back();
    }

    public function hapuslansia($id)
    {
        PesertaKegiatan::where('id', $id)->delete();
        return redirect()->back();
    }

    public function status_peserta($id)
    {
        $datapeserta = PesertaKegiatan::find($id);
        $datapeserta->status = !$datapeserta->status;
        $datapeserta->save();
        return redirect()->back();
    }
    public function create_kader(Request $request, $id)
    {
        $kegiatan = KegiatanLansia::where('id', $id)->first();
        PesertaKader::create([
            "kegiatan_lansia1" => $request->kegiatan_lansia1,
            "kader_id" => $request->kader_id,
        ]);
        $kegiatan->save();

        return redirect()->back();
    }
    public function hapuskader($id)
    {
        PesertaKader::where('id', $id)->delete();
        return redirect()->back();
    }
    public function status_kader($id)
    {
        $datakader = PesertaKader::find($id);
        $datakader->status = !$datakader->status;
        $datakader->save();
        return redirect()->back();
    }
    public function cetakpresensi($id)
    {
        $data =
            KegiatanLansia::where('id', $id)->first();
        $lansia = PesertaKegiatan::where('kegiatan_lansia_id', $id)->get();
        $kader = PesertaKader::where('kegiatan_lansia1', $id)->get();
        $pdf = PDF::loadview('pages.admin.lansia.kegiatanlansia.cetakpresensi', ['data' => $data, 'lansia' => $lansia, 'kader' => $kader]);
        return $pdf->download('Presensi Kegiatan.pdf');
    }

    public function laporankegiatan()
    {
        $max = KegiatanLansia::where('status', '1')->max('waktu');
        $total = KegiatanLansia::where('waktu', $max)->first();
        $total1 = KegiatanLansia::where('status', '1')->sum('jumlah_iuran');
        $data = KegiatanLansia::where('status', '1')->get();
        $dataa = Pengajuan::all();
        $menunggu = Pengajuan::where('status', 0)->sum('jumlah_ajuan');
        $danakeluar = Pengajuan::where('status', 1)->sum('bukti_angka');
        //pemasukan
        $pemasukan = Pemasukan::sum('jumlah');
        //total dana
        $totaldana = $total1 + $pemasukan - $danakeluar;
        $data_kader = Kader::get();
        return view('pages.admin.lansia.kegiatanlansia.laporankegiatan', ['total' => $total, 'total1' => $total1, 'data' => $data, 'dataa' => $dataa, 'menunggu' => $menunggu, "danakeluar" => $danakeluar, "totaldana" => $totaldana, "data_kader" => $data_kader, 'pemasukan' => $pemasukan]);
    }

    public function pengajuan(Request $request)
    {

        Pengajuan::create($request->all());

        return redirect()->back();
    }
    public function hapuspengajuan($id)
    {
        Pengajuan::where('id', $id)->delete();
        return redirect()->back();
    }

    public function status_pengajuan($id)
    {
        $statusajuan = Pengajuan::find($id);
        $statusajuan->status = !$statusajuan->status;
        $statusajuan->save();
        return redirect()->back();
    }
    public function statusakhir_pengajuan($id)
    {
        $statusajuan = Pengajuan::find($id);
        $statusajuan->statusakhir = !$statusajuan->statusakhir;
        $statusajuan->save();
        return redirect()->back();
    }
    public function create_bukti(Request $request, $id)
    {
        $pengajuan = Pengajuan::where('id', $id)->first();
        $pengajuan->bukti_angka = $request->bukti_angka;
        $pengajuan->kembali = $pengajuan->jumlah_ajuan - $pengajuan->bukti_angka;

        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('buktipengajuan/', $request->file('bukti')->getClientOriginalName());
            $pengajuan->bukti = $request->file('bukti')->getClientOriginalName();
        }
        $pengajuan->save();

        return redirect()->back();
    }
    public function detail(Request $request, $id)
    {
        $data = KegiatanLansia::find($id);
        $datakms = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->get();
        return view('pages . admin . lansia . kegiatanlansia . rekapkegiatan', compact('datakms', 'data'));
    }
    public function rekaplansia($id)
    {
        $data = KegiatanLansia::find($id);
        $datakms = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->get();
        $pdf = PDF::loadview('pages.admin.lansia.kegiatanlansia.cetakrekaplansia', ['data' => $data, 'datakms' => $datakms])->setPaper('legal', 'landscape');
        return $pdf->download('Rekap Posyandu Lansia.pdf');
    }

    public function rekapitulasi($id)
    {
        $data = KegiatanLansia::find($id);
        $datakms = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where ('', 'one_lawton')->count();
        $lansia = DataLansia::count();
        
        $dikerjakanolehoranglain = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->count();
        $perlubantuansepanjangwaktu = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->count();
        $perlubantuansesekali = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->count();
        $independenmandiri = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->count();

        $mentalada = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->count();
        $mentaltidakada = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->count();

        $imtlebih = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('indeks_massa_tubuh', 'Berat Lebih')->count();
        $imtnormal = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('indeks_massa_tubuh', 'Normal')->count();
        $imtkurang = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('indeks_massa_tubuh', 'Berat Kurang')->count();

        $tekanantinggi = PantauanKMS::where('tekanan_darah', 'Tinggi')->count();
        $tekanannormal = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('tekanan_darah', 'Normal')->count();
        $tekananrendah = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('tekanan_darah', 'Rendah')->count();

        $hbkurang = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('hemoglobin', 'Kurang')->count();
        $hbnormal = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('hemoglobin', 'Normal')->count();

        $rpositif = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('reduksi_urine', 'Positif')->count();
        $rnormal = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('reduksi_urine', 'Normal')->count();

        $ppositif = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('protein_urine', 'Positif')->count();
        $pnormal = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('protein_urine', 'Normal')->count();

        $tindakan = PantauanKMS::where('tanggal_pemeriksaan', $data->tanggal_kegiatan)->where('tindakan', 'Dirujuk')->count();
        $pdf = PDF::loadview('pages.admin.lansia.kegiatanlansia.rekapitulasi', [
            'data' => $data, 
            'datakms' => $datakms, 
            'lansia' => $lansia, 
            'mentalada' => $mentalada, 
            'mentaltidakada' => $mentaltidakada, 
            'imtlebih' => $imtlebih, 
            'imtnormal' => $imtnormal, 
            'imtkurang' => $imtkurang, 
            'tekanantinggi' => $tekanantinggi, 
            'tekanannormal' => $tekanannormal, 
            'tekananrendah' => $tekananrendah, 
            'hbkurang' => $hbkurang, 
            'hbnormal' => $hbnormal, 
            'rpositif' => $rpositif, 
            'rnormal' => $rnormal, 
            'ppositif' => $ppositif, 
            'pnormal' => $pnormal, 
            'tindakan' => $tindakan,
            'dikerjakanolehoranglain' => $dikerjakanolehoranglain,
            'perlubantuansepanjangwaktu' => $perlubantuansepanjangwaktu,
            'perlubantuansesekali' => $perlubantuansesekali,
            'independenmandiri' => $independenmandiri
        ])->setPaper('Legal');

        // $pdf = PDF::loadview('pages.admin.lansia.kegiatanlansia.rekapitulasi', ['lansia' => $lansia]);
        return $pdf->download('Rekapitulasi Hasil Kegiatan Posyandu Lansia.pdf');
    }
}

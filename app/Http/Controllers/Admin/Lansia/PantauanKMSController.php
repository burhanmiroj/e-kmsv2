<?php

namespace App\Http\Controllers\Admin\Lansia;

use App\DataTables\Admin\Lansia\PantauanKMSDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PantauanKMS;
use App\Models\Kader;
use App\Models\DataLansia;
use App\Models\RujukanLansia;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;


class PantauanKMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PantauanKMSDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.lansia.pantauan-kms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        $kaders = Kader::pluck('nama', 'id');

        return view('pages.admin.lansia.pantauan-kms.add-edit', ['nama_lansia' =>  $nama_lansia, 'kaders' => $kaders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama_lansia1' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }
        
        function getScoreValue($barthel) {
            switch ($barthel) {
                case 2:
                    return 1;
                case 3:
                    return 2;
                case 4:
                    return 3;
                default:
                    return 0;
            }
        }
        
        // ONE BARTHEL
        $one_barthel_value = getScoreValue($request->one_barthel);
        
        // TWO BARTHEL
        $two_barthel_value = getScoreValue($request->two_barthel);
        
        // FOUR BARTHEL
        $four_barthel_value = getScoreValue($request->four_barthel);
        
        // FIVE BARTHEL
        $five_barthel_value = getScoreValue($request->five_barthel);

        // SIX BARTHEL
        $six_barthel_value = getScoreValue($request->six_barthel);

        // SEVEN BARTHEL
        $seven_barthel_value = getScoreValue($request->seven_barthel);

        // EIGTH BARTHEL
        $eight_barthel_value = getScoreValue($request->eight_barthel);

        // NINE BARTHEL
        $nine_barthel_value = getScoreValue($request->nine_barthel);

        // FOUR NUTRISI GIZI
        $four_nutrisigizivalue = getScoreValue($request->four_nutrisigizi);

        try {
            // ALL PANTAUAN KMS
            PantauanKMS::create([
                'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
                'nama_lansia1' => $request->nama_lansia1,
                'kader' => $request->kader,
                'kegiatan_harian' => $request->kegiatan_harian,
                'status_mental' => $request->status_mental,
                'indeks_massa_tubuh' => $request->indeks_massa_tubuh,
                'tb' => $request->tb,
                'bb' => $request->bb,
                'hasil' => $request->hasil,
                'tekanan_darah' => $request->tekanan_darah,
                'sistol' => $request->sistol,
                'diastol' => $request->diastol,
                'dengan_obat' => $request->dengan_obat,
                'nadi' => $request->nadi,
                'hemoglobin' => $request->hemoglobin,
                'g_hemoglobin' => $request->g_hemoglobin,
                'reduksi_urine' => $request->reduksi_urine,
                'jumlahtanda' => $request->jumlahtanda,
                'dengan_obat_reduksi' => $request->dengan_obat_reduksi,
                'protein_urine' => $request->protein_urine,
                'jumlah_tanda' => $request->jumlah_tanda,
                'dengan_obat_protein' => $request->dengan_obat_protein,
                'keluhan' => $request->keluhan,
                'tindakan' => $request->tindakan,
                'status' => $request->status,
                'one_lawton' => $request->one_lawton,
                'two_lawton' => $request->two_lawton,
                'three_lawton' => $request->three_lawton,
                'four_lawton' => $request->four_lawton,
                'five_lawton' => $request->five_lawton,
                'six_lawton' => $request->six_lawton,
                'seven_lawton' => $request->seven_lawton,
                'eight_lawton' => $request->eight_lawton,
                'one_barthel' => $request->one_barthel,
                'two_barthel' => $request->two_barthel,
                'three_barthel' => $request->three_barthel,
                'four_barthel' => $request->four_barthel,
                'five_barthel' => $request->five_barthel,
                'six_barthel' => $request->six_barthel,
                'seven_barthel' => $request->seven_barthel,
                'eight_barthel' => $request->eight_barthel,
                'nine_barthel' => $request->nine_barthel,
                'ten_barthel' => $request->ten_barthel,
                'one_nutrisigizi' => $request->one_nutrisigizi,
                'two_nutrisigizi' => $request->two_nutrisigizi,
                'three_nutrisigizi' => $request->three_nutrisigizi,
                'four_nutrisigizi' => $request->four_nutrisigizi,
                'five_one_nutrisigizi' => $request->five_one_nutrisigizi,
                'five_two_nutrisigizi' => $request->five_two_nutrisigizi,
                'five_three_nutrisigizi' => $request->five_three_nutrisigizi,
                'six_nutrisigizi' => $request->six_nutrisigizi,
                'seven_nutrisigizi' => $request->seven_nutrisigizi,
                'eight_nutrisigizi' => $request->eight_nutrisigizi,
                'nine_nutrisigizi' => $request->nine_nutrisigizi,
                'ten_nutrisigizi' => $request->ten_nutrisigizi,
                // SKOR LAWTON
                'score_one_lawton' => $request->one_lawton < 4 ? 1 : 0,
                'score_two_lawton' => $request->two_lawton < 3 ? 1 : 0,
                'score_three_lawton' => $request->three_lawton < 2 ? 1 : 0,
                'score_four_lawton' => $request->four_lawton < 2 ? 1 : 0,
                'score_five_lawton' => $request->five_lawton < 4 ? 1 : 0,
                'score_six_lawton' => $request->six_lawton < 3 ? 1 : 0,
                'score_seven_lawton' => $request->seven_lawton < 2 ? 1 : 0,
                'score_eight_lawton' => $request->eight_lawton < 3 ? 1 : 0,
                // SKOR BARTHEL
                'score_one_barthel' => $one_barthel_value,
                'score_two_barthel' => $two_barthel_value,
                'score_three_barthel' => $request->three_barthel > 0 ? 1 : 0,
                'score_four_barthel' => $four_barthel_value,
                'score_five_barthel' => $five_barthel_value,
                'score_six_barthel' => $six_barthel_value,
                'score_seven_barthel' => $seven_barthel_value,
                'score_eight_barthel' => $eight_barthel_value,
                'score_nine_barthel' => $nine_barthel_value,
                'score_ten_barthel' => $request->ten_barthel > 0 ? 1 : 0,
                // SKOR NUTRISIGIZI
                'score_one_nutrisigizi' => $request->one_nutrisigizi > 0 ? 1 : 0,
                'score_two_nutrisigizi' => $request->two_nutrisigizi < 1 ? 1 : 0,
                'score_three_nutrisigizi' => $request->three_nutrisigizi < 1 ? 1 : 0,
                'score_four_nutrisigizi' => $four_nutrisigizivalue,
                'score_five_one_nutrisigizi' => $request->five_one_nutrisigizi < 1 ? 1 : 0,
                'score_five_two_nutrisigizi' => $request->five_two_nutrisigizi < 1 ? 1 : 0,
                'score_five_three_nutrisigizi' => $request->five_three_nutrisigizi < 1 ? 1 : 0,
                'score_six_nutrisigizi' => $request->six_nutrisigizi < 1 ? 1 : 0,
                'score_seven_nutrisigizi' => $request->seven_nutrisigizi < 1 ? 1 : 0,
                'score_eight_nutrisigizi' => $request->eight_nutrisigizi < 1 ? 1 : 0,
                'score_nine_nutrisigizi' => $request->nine_nutrisigizi < 1 ? 1 : 0,
                'score_ten_nutrisigizi' => $request->ten_nutrisigizi < 1 ? 1 : 0,
                'score_eleven_nutrisigizi' => $request->eleven_nutrisigizi < 1 ? 1 : 0,
                'score_twelve_nutrisigizi' => $request->twelve_nutrisigizi < 1 ? 1 : 0,
            ]);
        } catch (\Throwable $th) {
            dd($th);

            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.pantauankms.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('pages.admin.lansia.pantauan-kms.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $data = PantauanKMS::findOrFail($id);
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        $kaders = Kader::pluck('nama', 'id');

        return view('pages.admin.lansia.pantauan-kms.add-edit', ['data' => $data, 'nama_lansia' => $nama_lansia, 'kaders' => $kaders]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama_lansia1' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = PantauanKMS::findOrFail($id);

            $data->update($request->all());

            
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-lansia.pantauankms.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            PantauanKMS::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
    //status
    public function status($id)
    {
        $kms = PantauanKMS::find($id);
        $kms->status = 0;
        $kms->save();
        return redirect()->back();
    }

    public function status1($id)
    {
        $kms = PantauanKMS::find($id);
        $kms->status = 1;
        $kms->save();
        return redirect()->back();
    }
    //cetak pertanggal
    public function laporanKMS()
    {
        return view('pages.admin.lansia.pantauan-kms.laporanKMS');
    }

    public function sortir(Request $request)
    {
        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');

        switch ($request->submit) {
            case 'table':

                $data = PantauanKMS::with(['lansia'])->whereBetween('tanggal_pemeriksaan', [$startDate, $endDate])->get();
                
                return view('pages.admin.lansia.pantauan-kms.laporanKMS', compact('data', 'startDate', 'endDate'));

                break;
        }
    }

    public function cetakLaporanKMS($start, $end)
    {
        $startDate = $start;
        $endDate = $end;
        $data = PantauanKMS::get()->whereBetween('tanggal_pemeriksaan', [$startDate, $endDate]);

        $pdf = PDF::loadview('pages.admin.lansia.pantauan-kms.cetaklaporankms', ['data' => $data])->setPaper('legal', 'landscape');
        return $pdf->download('Laporan KMS Lansia.pdf');
    }

    // cetak pernama
    public function laporanDataKMS()
    {
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        //$nama_lansia=PantauanKMS::with('lansia')->get()->pluck('lansia.nama_lansia','id');
        return view('pages.admin.lansia.pantauan-kms.laporandataKMS', ['nama_lansia' => $nama_lansia]);
    }

    public function sortirriwayat(Request $request)
    {
        $data = PantauanKMS::where('nama_lansia1', $request->nama_lansia1)->get();
        // dd($data);
        return redirect()->route('admin.data-lansia.laporandatakmslansia')->with(['data' => $data]);
    }
    public function cetakKMS($id)
    {
        $lansia = PantauanKMS::where('nama_lansia1', $id)->first();
        // $kms = PantauanKMS::where('no_kms', $id)->first();
        $data = PantauanKMS::where('nama_lansia1', $id)->get();
        $pdf = PDF::loadview('pages.admin.lansia.pantauan-kms.cetakkms', ['data' => $data, 'lansia' => $lansia])->setPaper('legal', 'landscape');
        return $pdf->download('KMS Lansia.pdf');
    }
    public function cetakLaporandataKMS($id)
    {
        $lansia = PantauanKMS::where('nama_lansia1', $id)->first();
        // $kms = PantauanKMS::where('no_kms', $id)->first();
        $data = PantauanKMS::where('nama_lansia1', $id)->get();
        $pdf = PDF::loadview('pages.admin.lansia.pantauan-kms.cetakriwayatkms', ['data' => $data, 'lansia' => $lansia])->setPaper('legal', 'landscape');
        return $pdf->download('Riwayat KMS Lansia.pdf');
    }
}

<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RujukanLansia;
use App\Models\Puskesmas;
use App\DataTables\Admin\Transaksi\RujukanLansiaDataTable;
use App\Models\DataLansia;
use App\Models\PantauanKMS;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class RujukanLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RujukanLansiaDataTable $dataTable)
    {
        $rujukan = PantauanKMS::where('status', '1')->get();
        return $dataTable->render('pages.admin.transaksi.rujukanlansia.index', ['rujukan' => $rujukan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        $instansi = Puskesmas::pluck('nama', 'id');
        return view('pages.admin.transaksi.rujukanlansia.add-edit', ['nama_lansia' => $nama_lansia, 'instansi' => $instansi]);
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
                'namalansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            RujukanLansia::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-transaksi.rujukanlansia.index'))->withToastSuccess('Data tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RujukanLansia::findOrFail($id);
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');

        // return view('pages.admin.transaksi.rujukanlansia.showrujukanlansia-pdf', ['data' => $data]);
        $pdf = PDF::loadview(
            'pages.admin.transaksi.rujukanlansia.showrujukanlansia-pdf',
            [
                'no_surat' => $data->no_surat,
                'kepada' => $data->instansi->nama,
                'tanggal_surat' => $data->tanggal_surat,
                'namalansia' => $data->rujukan->nama_lansia,
                'umur' => $data->umur,
                'jeniskelamin' => $data->jeniskelamin,
                'alamat' => $data->alamat,
                'keluhan' => $data->keluhan,
            ]
        );
        return $pdf->download('Rujukan.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RujukanLansia::findOrFail($id);
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        $instansi = Puskesmas::pluck('nama', 'id');
        return view('pages.admin.transaksi.rujukanlansia.edit', ['data' => $data, 'nama_lansia' => $nama_lansia, 'instansi' => $instansi]);
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
                'namalansia' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = RujukanLansia::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.data-transaksi.rujukanlansia.index'))->withToastSuccess('Data tersimpan');
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
            RujukanLansia::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    //status
    public function statuslist($id)
    {
        $statuslist = PantauanKMS::find($id);
        $statuslist->status = 2;
        $statuslist->save();
        return redirect()->back();
    }

    //status
    public function status($id)
    {
        $datarujukan = RujukanLansia::find($id);
        $datarujukan->status = !$datarujukan->status;
        $datarujukan->save();
        return redirect()->back();
    }

    //cetak pertanggal
    public function laporanRujukanLansia()
    {
        return view('pages.admin.transaksi.rujukanlansia.laporanrujukanlansia');
    }

    public function sortir(Request $request)
    {

        $startDate = Str::before($request->tglawal, ' -');
        $endDate = Str::after($request->tglakhir, '- ');
        switch ($request->submit) {
            case 'table':

                $data = RujukanLansia::all()
                    ->whereBetween('tanggal_surat', [$startDate, $endDate])->where('status', '1');

                return view('pages.admin.transaksi.rujukanlansia.laporanrujukanlansia', compact('data', 'startDate', 'endDate'));
                break;
        }
    }

    public function cetakLaporanRujukanLansia($start, $end)
    {

        $startDate = $start;
        $endDate = $end;
        $data = RujukanLansia::all()
            ->whereBetween('tanggal_surat', [$startDate, $endDate])->where('status', '1');

        $pdf = PDF::loadview('pages.admin.transaksi.rujukanlansia.cetakrujukanlansia', ['data' => $data])->setPaper('legal', 'landscape');

        return $pdf->download('Laporan Rujukan Lansia.pdf');
    }
    //cetak pernama
    public function riwayatRujukanLansia()
    {
        $nama_lansia = DataLansia::pluck('nama_lansia', 'id');
        //$nama_lansia=PantauanKMS::with('lansia')->get()->pluck('lansia.nama_lansia','id');
        return view('pages.admin.transaksi.rujukanlansia.riwayatrujukanlansia', ['nama_lansia' => $nama_lansia]);
    }
    public function sortirriwayat(Request $request)
    {
        $data = RujukanLansia::where('namalansia', $request->namalansia)->where('status', '1')->get();
        // dd($data);
        return redirect()->route('admin.data-transaksi.riwayatrujukan')->with(['data' => $data]);
    }
    public function cetakriwayatRujukanLansia($id)
    {
        $lansia = RujukanLansia::where('namalansia', $id)->first();
        $data = RujukanLansia::where('namalansia', $id)->get()->where('status', '1');
        $pdf = PDF::loadview('pages.admin.transaksi.rujukanlansia.cetakriwayatrujukan', ['data' => $data, 'lansia' => $lansia])->setPaper('legal', 'landscape');
        return $pdf->download('Riwayat Rujukan Lansia.pdf');
    }
}

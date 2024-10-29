<?php

namespace App\Http\Controllers\User\UserLansia;

use App\Models\Kader;
use App\Charts\IMTChart;
use App\Models\DataLansia;
use App\Models\PantauanKMS;
use Illuminate\Http\Request;
use App\Models\KeluhanTindakan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use yajra\DataTables\Facades\DataTables;
use App\DataTables\User\Lansia\KMSLansiaDataTable;
use App\Datatables\User\Lansia\RiwayatKeluhanTindakanDataTable;

class KMSLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IMTChart $chart)
    {

        $data = DataLansia::select('id')->where('createable_id', auth()->user()->id)->first()->id;

        $pantauan = PantauanKMS::where('nama_lansia1', $data)->get();
        
        $totalScoreLawton = DB::table('pantauan_kms')
                    ->select(DB::raw('SUM(score_one_lawton + score_two_lawton + score_three_lawton + score_four_lawton + score_five_lawton + score_six_lawton + score_seven_lawton + score_eight_lawton) as total_lawton'))
                    ->first();

        $totalScoreBarthel = DB::table('pantauan_kms')
                    ->select(DB::raw('SUM(score_one_barthel + score_two_barthel + score_three_barthel + score_four_barthel + score_five_barthel + score_six_barthel + score_seven_barthel + score_eight_barthel + score_nine_barthel + score_ten_barthel) as total_barthel'))
                    ->first();

        $totalScoreNutrisiGizi = DB::table('pantauan_kms')
                    ->select(DB::raw('SUM(score_one_nutrisigizi + score_two_nutrisigizi + score_three_nutrisigizi + score_four_nutrisigizi + score_five_one_nutrisigizi + score_five_two_nutrisigizi + score_five_three_nutrisigizi + score_six_nutrisigizi + score_seven_nutrisigizi + score_eight_nutrisigizi + score_nine_nutrisigizi + score_ten_nutrisigizi) as total_nutrisi_gizi'))
                    ->first();

        $data = [
            'pantauan' => $pantauan,
            'totalScoreLawton' => $totalScoreLawton, 
            'totalScoreBarthel' => $totalScoreBarthel, 
            'totalScoreNutrisiGizi' => $totalScoreNutrisiGizi
        ];
                    
        return view('pages.user.lansia.kmslansia.index', $data, ['chart' => $chart->build()]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }
}

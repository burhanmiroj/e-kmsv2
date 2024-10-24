<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class PantauanKMS extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ACTIVE = "aktif";

    protected $table = 'pantauan_kms';

    protected $fillable = [
        'tanggal_pemeriksaan', 
        'nama_lansia1', 
        'kader', 
        'indeks_massa_tubuh', 
        'tb', 
        'bb', 
        'hasil',
        'tekanan_darah',
        'sistol', 
        'diastol', 
        'dengan_obat', 
        'nadi', 
        'hemoglobin', 
        'g_hemoglobin', 
        'reduksi_urine', 
        'jumlahtanda', 
        'dengan_obat_reduksi', 
        'protein_urine', 
        'jumlah_tanda', 
        'dengan_obat_protein', 
        'keluhan', 
        'tindakan',
        // LAWTON 8 PERTANYAAN
        'one_lawton',
        'two_lawton',
        'three_lawton',
        'four_lawton',
        'five_lawton',
        'six_lawton',
        'seven_lawton',
        'eight_lawton',
        'score_one_lawton',
        'score_two_lawton',
        'score_three_lawton',
        'score_four_lawton',
        'score_five_lawton',
        'score_six_lawton',
        'score_seven_lawton',
        'score_eight_lawton',
        // BARTHEL 10 PERTANYAAN
        'one_barthel',
        'two_barthel',
        'three_barthel',
        'four_barthel',
        'five_barthel',
        'six_barthel',
        'seven_barthel',
        'eight_barthel',
        'nine_barthel',
        'ten_barthel',
        'score_one_barthel',
        'score_two_barthel',
        'score_three_barthel',
        'score_four_barthel',
        'score_five_barthel',
        'score_six_barthel',
        'score_seven_barthel',
        'score_eight_barthel',
        'score_nine_barthel',
        'score_ten_barthel',
        // NUTRISI GIZI 10 PERTANYAAN
        'one_nutrisigizi',
        'two_nutrisigizi',
        'three_nutrisigizi',
        'four_nutrisigizi',
        'five_one_nutrisigizi',
        'five_two_nutrisigizi',
        'five_three_nutrisigizi',
        'six_nutrisigizi',
        'seven_nutrisigizi',
        'eight_nutrisigizi',
        'nine_nutrisigizi',
        'ten_nutrisigizi',
        'score_one_nutrisigizi',
        'score_two_nutrisigizi',
        'score_three_nutrisigizi',
        'score_four_nutrisigizi',
        'score_five_one_nutrisigizi',
        'score_five_two_nutrisigizi',
        'score_five_three_nutrisigizi',
        'score_six_nutrisigizi',
        'score_seven_nutrisigizi',
        'score_eight_nutrisigizi',
        'score_nine_nutrisigizi',
        'score_ten_nutrisigizi',
    ];

    public $timestamps = false;

    public function lansia()
    {
        return $this->belongsTo(DataLansia::class, 'nama_lansia1');
    }

    public function kaderposyandu()
    {
        return $this->belongsTo(Kader::class, 'kader');
    }
}
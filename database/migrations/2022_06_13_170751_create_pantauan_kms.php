<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantauanKms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantauan_kms', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_pemeriksaan');
            $table->string('nama_lansia1');
            $table->string('kader');
            $table->string('indeks_massa_tubuh');
            $table->integer('tb');
            $table->string('bb');
            $table->string('hasil');
            $table->string('tekanan_darah');
            $table->string('sistol');
            $table->string('diastol');
            $table->string('dengan_obat')->nullable();;
            $table->string('nadi')->nullable();;
            $table->string('hemoglobin');
            $table->string('g_hemoglobin');
            $table->string('reduksi_urine');
            $table->string('jumlahtanda')->nullable();;
            $table->string('dengan_obat_reduksi')->nullable();
            $table->string('protein_urine');
            $table->string('jumlah_tanda')->nullable();
            $table->string('dengan_obat_protein')->nullable();
            $table->string('keluhan');
            $table->string('tindakan');
            $table->string('status')->default(0);
            // LAWTON
            $table->tinyInteger('one_lawton');
            $table->tinyInteger('two_lawton');
            $table->tinyInteger('three_lawton');
            $table->tinyInteger('four_lawton');
            $table->tinyInteger('five_lawton');
            $table->tinyInteger('six_lawton');
            $table->tinyInteger('seven_lawton');
            $table->tinyInteger('eight_lawton');
            $table->tinyInteger('score_one_lawton');
            $table->tinyInteger('score_two_lawton');
            $table->tinyInteger('score_three_lawton');
            $table->tinyInteger('score_four_lawton');
            $table->tinyInteger('score_five_lawton');
            $table->tinyInteger('score_six_lawton');
            $table->tinyInteger('score_seven_lawton');
            $table->tinyInteger('score_eight_lawton');
            // BARTHEL
            $table->tinyInteger('one_barthel');
            $table->tinyInteger('two_barthel');
            $table->tinyInteger('three_barthel');
            $table->tinyInteger('four_barthel');
            $table->tinyInteger('five_barthel');
            $table->tinyInteger('six_barthel');
            $table->tinyInteger('seven_barthel');
            $table->tinyInteger('eight_barthel');
            $table->tinyInteger('nine_barthel');
            $table->tinyInteger('ten_barthel');
            $table->tinyInteger('score_one_barthel');
            $table->tinyInteger('score_two_barthel');
            $table->tinyInteger('score_three_barthel');
            $table->tinyInteger('score_four_barthel');
            $table->tinyInteger('score_five_barthel');
            $table->tinyInteger('score_six_barthel');
            $table->tinyInteger('score_seven_barthel');
            $table->tinyInteger('score_eight_barthel');
            $table->tinyInteger('score_nine_barthel');
            $table->tinyInteger('score_ten_barthel');
            // NUTRISIGIZI
            $table->tinyInteger('one_nutrisigizi');
            $table->tinyInteger('two_nutrisigizi');
            $table->tinyInteger('three_nutrisigizi');
            $table->tinyInteger('four_nutrisigizi');
            $table->tinyInteger('five_one_nutrisigizi');
            $table->tinyInteger('five_two_nutrisigizi');
            $table->tinyInteger('five_three_nutrisigizi');
            $table->tinyInteger('six_nutrisigizi');
            $table->tinyInteger('seven_nutrisigizi');
            $table->tinyInteger('eight_nutrisigizi');
            $table->tinyInteger('nine_nutrisigizi');
            $table->tinyInteger('ten_nutrisigizi');
            $table->tinyInteger('score_one_nutrisigizi');
            $table->tinyInteger('score_two_nutrisigizi');
            $table->tinyInteger('score_three_nutrisigizi');
            $table->tinyInteger('score_four_nutrisigizi');
            $table->tinyInteger('score_five_one_nutrisigizi');
            $table->tinyInteger('score_five_two_nutrisigizi');
            $table->tinyInteger('score_five_three_nutrisigizi');
            $table->tinyInteger('score_six_nutrisigizi');
            $table->tinyInteger('score_seven_nutrisigizi');
            $table->tinyInteger('score_eight_nutrisigizi');
            $table->tinyInteger('score_nine_nutrisigizi');
            $table->tinyInteger('score_ten_nutrisigizi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pantauan_kms');
    }
}

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
            $table->tinyInteger('one_lawton')->nullable();
            $table->tinyInteger('two_lawton')->nullable();
            $table->tinyInteger('three_lawton')->nullable();
            $table->tinyInteger('four_lawton')->nullable();
            $table->tinyInteger('five_lawton')->nullable();
            $table->tinyInteger('six_lawton')->nullable();
            $table->tinyInteger('seven_lawton')->nullable();
            $table->tinyInteger('eight_lawton')->nullable();
            $table->tinyInteger('score_one_lawton')->nullable();
            $table->tinyInteger('score_two_lawton')->nullable();
            $table->tinyInteger('score_three_lawton')->nullable();
            $table->tinyInteger('score_four_lawton')->nullable();
            $table->tinyInteger('score_five_lawton')->nullable();
            $table->tinyInteger('score_six_lawton')->nullable();
            $table->tinyInteger('score_seven_lawton')->nullable();
            $table->tinyInteger('score_eight_lawton')->nullable();
            // BARTHEL
            $table->tinyInteger('one_barthel')->nullable();
            $table->tinyInteger('two_barthel')->nullable();
            $table->tinyInteger('three_barthel')->nullable();
            $table->tinyInteger('four_barthel')->nullable();
            $table->tinyInteger('five_barthel')->nullable();
            $table->tinyInteger('six_barthel')->nullable();
            $table->tinyInteger('seven_barthel')->nullable();
            $table->tinyInteger('eight_barthel')->nullable();
            $table->tinyInteger('nine_barthel')->nullable();
            $table->tinyInteger('ten_barthel')->nullable();
            $table->tinyInteger('score_one_barthel')->nullable();
            $table->tinyInteger('score_two_barthel')->nullable();
            $table->tinyInteger('score_three_barthel')->nullable();
            $table->tinyInteger('score_four_barthel')->nullable();
            $table->tinyInteger('score_five_barthel')->nullable();
            $table->tinyInteger('score_six_barthel')->nullable();
            $table->tinyInteger('score_seven_barthel')->nullable();
            $table->tinyInteger('score_eight_barthel')->nullable();
            $table->tinyInteger('score_nine_barthel')->nullable();
            $table->tinyInteger('score_ten_barthel')->nullable();
            // NUTRISIGIZI
            $table->tinyInteger('one_nutrisigizi')->nullable();
            $table->tinyInteger('two_nutrisigizi')->nullable();
            $table->tinyInteger('three_nutrisigizi')->nullable();
            $table->tinyInteger('four_nutrisigizi')->nullable();
            $table->tinyInteger('five_one_nutrisigizi')->nullable();
            $table->tinyInteger('five_two_nutrisigizi')->nullable();
            $table->tinyInteger('five_three_nutrisigizi')->nullable();
            $table->tinyInteger('six_nutrisigizi')->nullable();
            $table->tinyInteger('seven_nutrisigizi')->nullable();
            $table->tinyInteger('eight_nutrisigizi')->nullable();
            $table->tinyInteger('nine_nutrisigizi')->nullable();
            $table->tinyInteger('ten_nutrisigizi')->nullable();
            $table->tinyInteger('score_one_nutrisigizi')->nullable();
            $table->tinyInteger('score_two_nutrisigizi')->nullable();
            $table->tinyInteger('score_three_nutrisigizi')->nullable();
            $table->tinyInteger('score_four_nutrisigizi')->nullable();
            $table->tinyInteger('score_five_one_nutrisigizi')->nullable();
            $table->tinyInteger('score_five_two_nutrisigizi')->nullable();
            $table->tinyInteger('score_five_three_nutrisigizi')->nullable();
            $table->tinyInteger('score_six_nutrisigizi')->nullable();
            $table->tinyInteger('score_seven_nutrisigizi')->nullable();
            $table->tinyInteger('score_eight_nutrisigizi')->nullable();
            $table->tinyInteger('score_nine_nutrisigizi')->nullable();
            $table->tinyInteger('score_ten_nutrisigizi')->nullable();
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

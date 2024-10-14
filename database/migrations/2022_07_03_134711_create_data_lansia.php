<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLansia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lansia', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lansia');
            $table->string('foto_lansia')->nullable();
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_kms');
            $table->string('NIK');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('umur');
            $table->string('status_perkawinan');
            $table->string('alamat');
            $table->string('agama');
            $table->string('pendidikan_terakhir');
            $table->string('golongan_darah');
            $table->string('jaminan_kesehatan');

            $table->bigInteger('createable_id')->nullable();
            $table->text('createable_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_lansia');
    }
}

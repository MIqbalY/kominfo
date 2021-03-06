<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_pegawai');
            $table->string('nip', 30)->unique();
            $table->string('satker');
            $table->string('unit_kerja');
            $table->string('jabatan');
            $table->string('nama_atasan');
            $table->string('jabatan_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapegawais');
    }
}

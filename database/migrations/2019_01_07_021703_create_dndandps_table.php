<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDndandpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Datapegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_pegawai');
            $table->string('nip', 30)->unique();
            $table->string('satker');
            $table->string('unit_kerja');
            $table->string('jabatan');
            $table->string('nama_atasan');
            $table->string('jabatan_at');
            $table->text('syarat_jabatan');
            $table->text('kesesuaian');
            $table->text('kkn');
            $table->text('dkk');
        });

        Schema::create('daftarnilais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nip', 30);
            $table->text('pelatihan');
            $table->string('waktu');
            $table->string('kesulitan');
            $table->string('kualitas');
            $table->string('pengaruh');
            $table->string('keseringan');
            $table->string('total');
        });

        Schema::table('daftarnilais', function (Blueprint $table){
            $table
            ->foreign('nip')
            ->references('nip')
            ->On('datapegawai')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Datapegawais');
        Schema::dropIfExists('daftarnilais');
    }
}

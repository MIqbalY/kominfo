<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarnilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarnilais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->foreign('nip')->references('nip')->on('datapegawai');
            $table->timestamps();
            $table->integer('waktu');
            $table->integer('tkesulitan');
            $table->integer('kualitas');
            $table->integer('pengaruh');
            $table->integer('keseringan');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftarnilais');
    }
}

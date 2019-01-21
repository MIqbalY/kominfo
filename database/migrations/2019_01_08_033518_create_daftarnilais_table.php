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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapenilaians', function (Blueprint $table) {
            $table->increments('no_responden')->unique();
            $table->timestamps();
            $table->string('nip', 30);
            $table->text('syarat_jabatan');
            $table->text('kkn');
            $table->text('dkk');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapenilaians');
    }
}

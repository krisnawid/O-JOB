<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->timestamps();

            $table->integer('id_lowongan')->unsigned();
            $table->foreign('id_lowongan')->references('id')->on('lowongan');

            $table->integer('id_pelamar')->unsigned();
            $table->foreign('id_pelamar')->references('id')->on('pelamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamaran');
    }
}

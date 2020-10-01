<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarKeahlianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar_keahlian', function (Blueprint $table) {
            $table->integer('id_pelamar')->unsigned();
            $table->foreign('id_pelamar')->references('id')->on('pelamar');

            $table->integer('id_keahlian')->unsigned();
            $table->foreign('id_keahlian')->references('id')->on('keahlian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamar_keahlian');
    }
}

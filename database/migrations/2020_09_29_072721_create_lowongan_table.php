<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('deskripsi');
            $table->timestamps();

            $table->integer('id_perusahaan')->unsigned();
            $table->foreign('id_perusahaan')->references('id')->on('perusahaan');

            $table->integer('id_kategori')->unsigned();
            $table->foreign('id_kategori')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongan');
    }
}

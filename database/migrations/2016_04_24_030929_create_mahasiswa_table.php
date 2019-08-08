<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 30);
            $table->string('npm', 10);
            $table->integer('fakultas_id')->unsigned();
            $table->integer('prodi_id')->unsigned();
            $table->foreign('fakultas_id')->references('id_fakultas')->on('fakultas');
            $table->foreign('prodi_id')->references('id_prodi')->on('prodi');
            $table->text('alamat');
            $table->string('telp',12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa');
    }
}

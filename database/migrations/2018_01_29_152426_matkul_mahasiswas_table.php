<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatkulMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkul_mahasiswas', function (Blueprint $table) {
            $table->unsignedInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('mahasiswas')->onDelete('CASCADE');
            $table->unsignedInteger('mapel_id');
            $table->foreign('mapel_id')->references('id')->on('mata_kuliahs')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul_mahasiswas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMBarangTable extends Migration
{
    public function up()
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->string('barang_kode', 10)->unique();
            $table->string('barang_nama', 100);
            $table->timestamps();

            // mendefinisikan foreign key pada kolom level_id mengacu pada kolom level_id di table m_level
            $table->foreign('kategoris_id')->references('kategoris_id')->on('m_kategoris');
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_barang');
    }
}

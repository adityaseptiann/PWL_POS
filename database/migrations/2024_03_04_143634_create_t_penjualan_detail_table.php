<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPenjualanDetailTable extends Migration
{
    public function up()
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('penjualan_detail_id');
            $table->unsignedBigInteger('penjualan_id'); // Foreign key ke tabel t_penjualan
            $table->unsignedBigInteger('barang_id'); // Foreign key ke tabel m_barang
            $table->integer('jumlah');
            $table->timestamps();

            // Definisi foreign key yang merujuk ke kolom penjualan_id di tabel t_penjualan
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');

            // Definisi foreign key yang merujuk ke kolom id di tabel m_barang
            $table->foreign('barang_id')->references('id')->on('m_barang');
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
}

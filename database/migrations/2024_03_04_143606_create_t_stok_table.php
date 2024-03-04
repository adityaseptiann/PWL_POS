<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStokTable extends Migration
{
    public function up()
    {
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('barang_id'); // Foreign key ke tabel m_barang
            $table->unsignedBigInteger('user_id'); // Foreign key ke tabel m_user
            $table->integer('jumlah');
            $table->timestamp('tanggal_stok');
            $table->timestamps();

            // Definisi foreign key yang merujuk ke kolom id di tabel m_barang
            $table->foreign('barang_id')->references('id')->on('m_barang');

            // Definisi foreign key yang merujuk ke kolom id di tabel m_user
            $table->foreign('user_id')->references('id')->on('m_user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_stok');
    }
}

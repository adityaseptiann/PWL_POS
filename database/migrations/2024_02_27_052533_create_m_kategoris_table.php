<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKategorisTable extends Migration
{
    public function up()
    {
        Schema::create('m_kategoris', function (Blueprint $table) {
            $table->id('kategoris_id');
            $table->string('kategoris_kode', 10)->unique();
            $table->string('kategoris_nama', 100);
            // Menambahkan kolom 'barang_id' sebagai foreign key
            $table->unsignedBigInteger('barang_id');
            $table->timestamps();

            // Mendefinisikan foreign key pada kolom 'barang_id' mengacu pada kolom 'barang_id' di tabel 'm_barang'
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    public function down()
    {
        Schema::dropIfExists('m_kategoris');
    }
}

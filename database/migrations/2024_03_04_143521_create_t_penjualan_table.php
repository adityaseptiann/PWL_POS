<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPenjualanTable extends Migration
{
    public function up()
    {
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id');
            $table->unsignedBigInteger('user_id'); // Foreign key ke tabel m_user
            $table->string('pembeli', 100);
            $table->string('penjualan_kode', 20)->unique();
            $table->timestamp('penjualan_tanggal');
            $table->timestamps();

            // Definisi foreign key yang merujuk ke kolom id di tabel m_user
            $table->foreign('user_id')->references('id')->on('m_user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_penjualan');
    }
}

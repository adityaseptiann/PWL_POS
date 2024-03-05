<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_barang = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'Laptop', 'harga' => 5000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_nama' => 'Smartphone', 'harga' => 3000000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_nama' => 'Tablet', 'harga' => 2000000],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_nama' => 'TV LED', 'harga' => 4000000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_nama' => 'Kamera DSLR', 'harga' => 6000000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_nama' => 'Kemeja Lengan Panjang', 'harga' => 150000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_nama' => 'Celana Jeans', 'harga' => 250000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_nama' => 'Dress', 'harga' => 200000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_nama' => 'Jaket', 'harga' => 300000],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_nama' => 'Sepatu Sneakers', 'harga' => 400000],
        ];

        DB::table('m_barang')->insert($data_barang);
    }
}

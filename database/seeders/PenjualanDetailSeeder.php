<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_penjualan_detail = [];
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $data_penjualan_detail[] = ['penjualan_id' => $i, 'barang_id' => $j, 'jumlah' => rand(1, 5)];
            }
        }
        DB::table('t_penjualan_detail')->insert($data_penjualan_detail);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_penjualan = [];
        for ($i = 1; $i <= 10; $i++) {
            $data_penjualan[] = [];
        }

        DB::table('t_penjualan')->insert($data_penjualan);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_stok = [];
        for ($i = 1; $i <= 10; $i++) {
        $data_stok[] = ['barang_id' => $i, 'jumlah' => 10];
        }
        DB::table('t_stok')->insert($data_stok);

    }
}

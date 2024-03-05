<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['kategori_id' => 1, 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 2, 'kategori_nama' => 'Pakaian'],
            ['kategori_id' => 3, 'kategori_nama' => 'Makanan'],
            ['kategori_id' => 4, 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 5, 'kategori_nama' => 'Otomotif'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}

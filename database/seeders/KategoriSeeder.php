<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['kategori_kode' => 'ELEC', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'PAKA', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'MAKA', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'MINU', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'RUMH', 'kategori_nama' => 'Peralatan Rumah'],
        ];

        DB::table('m_kategori')->insert($categories);
    }
}

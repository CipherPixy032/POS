<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $barang = [
            ['kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Laptop Asus', 'harga_beli' => 5000000, 'harga_jual' => 5500000],
            ['kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Mouse Wireless', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['kategori_id' => 2, 'barang_kode' => 'B003', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['kategori_id' => 2, 'barang_kode' => 'B004', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['kategori_id' => 3, 'barang_kode' => 'B005', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Beras 5kg', 'harga_beli' => 60000, 'harga_jual' => 70000],
            ['kategori_id' => 4, 'barang_kode' => 'B007', 'barang_nama' => 'Air Mineral 600ml', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['kategori_id' => 4, 'barang_kode' => 'B008', 'barang_nama' => 'Susu Kotak', 'harga_beli' => 7000, 'harga_jual' => 9000],
            ['kategori_id' => 5, 'barang_kode' => 'B009', 'barang_nama' => 'Panci Stainless', 'harga_beli' => 120000, 'harga_jual' => 150000],
            ['kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Setrika Listrik', 'harga_beli' => 200000, 'harga_jual' => 250000],
        ];

        DB::table('m_barang')->insert($barang);
    }
}

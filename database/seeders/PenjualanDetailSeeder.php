<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        // Insert dummy sales detail data
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 101,
                'harga' => 50000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 102,
                'harga' => 75000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 103,
                'harga' => 60000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 104,
                'harga' => 85000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Insert into database
        DB::table('t_penjualan_detail')->insert($data);
    }
}

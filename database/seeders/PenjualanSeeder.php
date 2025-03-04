<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        // Insert dummy sales data
        $data = [
            [
                'pembeli_nama' => 'John Doe',
                'penjualan_tanggal' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'pembeli_nama' => 'Jane Smith',
                'penjualan_tanggal' => Carbon::now()->subDays(1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'pembeli_nama' => 'Michael Johnson',
                'penjualan_tanggal' => Carbon::now()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Insert into database
        DB::table('t_penjualan')->insert($data);
    }
}

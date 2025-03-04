<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks
        Schema::disableForeignKeyConstraints();

        // Valid user IDs from m_user table
        $validUserIds = [1, 2, 3];

        // Stock data (only using existing user IDs)
        $stok = [
            ['barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 50],
            ['barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => Carbon::now()->subDays(1), 'stok_jumlah' => 30],
            ['barang_id' => 3, 'user_id' => 2, 'stok_tanggal' => Carbon::now()->subDays(2), 'stok_jumlah' => 40],
            ['barang_id' => 4, 'user_id' => 2, 'stok_tanggal' => Carbon::now()->subDays(3), 'stok_jumlah' => 20],
            ['barang_id' => 5, 'user_id' => 3, 'stok_tanggal' => Carbon::now()->subDays(4), 'stok_jumlah' => 60],
            ['barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => Carbon::now()->subDays(5), 'stok_jumlah' => 25],
        ];

        // Insert data
        DB::table('t_stok')->insert($stok);

        // Enable foreign key checks
        Schema::enableForeignKeyConstraints();
    }
}

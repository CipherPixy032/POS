<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('t_penjualan')) {
            Schema::create('t_penjualan', function (Blueprint $table) {
                $table->id('penjualan_id');
                $table->string('pembeli_nama', 100);
                $table->dateTime('penjualan_tanggal');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};

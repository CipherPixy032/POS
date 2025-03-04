<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('t_penjualan_detail')) {
            Schema::create('t_penjualan_detail', function (Blueprint $table) {
                $table->id('detail_id');
                $table->foreignId('penjualan_id')->constrained('t_penjualan')->onDelete('cascade');
                $table->foreignId('barang_id')->constrained('m_barang')->onDelete('cascade');
                $table->integer('harga');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};

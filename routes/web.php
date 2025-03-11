<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    // Menampilkan halaman daftar pengguna
    Route::get('/', [UserController::class, 'index']);

    // Mengambil data pengguna dalam format JSON untuk DataTables
    Route::post('/list', [UserController::class, 'list']);

    // Menampilkan halaman form untuk membuat pengguna baru
    Route::get('/create', [UserController::class, 'create']);

    // Menyimpan data pengguna baru
    Route::post('/', [UserController::class, 'store']);

    // Menampilkan detail informasi pengguna berdasarkan ID
    Route::get('/{id}', [UserController::class, 'show']);

    // Menampilkan halaman form untuk mengedit pengguna berdasarkan ID
    Route::get('/{id}/edit', [UserController::class, 'edit']);

    // Menyimpan perubahan data pengguna berdasarkan ID
    Route::put('/{id}', [UserController::class, 'update']);

    // Menghapus data pengguna berdasarkan ID
    Route::delete('/{id}', [UserController::class, 'destroy']);
});



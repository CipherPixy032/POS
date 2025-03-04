<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LevelController;

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products dengan prefix /category/
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Halaman User dengan route parameter {id} dan {name}
Route::get('/user/{id}/{name}', [UserController::class, 'show']);

// Halaman Penjualan (POS)
Route::get('/transaction', [TransactionController::class, 'index']);

// Route tambahan dari gambar
Route::get('/level', [LevelController::class, 'index']);

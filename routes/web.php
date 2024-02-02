<?php

use App\Http\Controllers\KopiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [KopiController::class, 'home'])->name('home');
Route::get('/buy/{id}', [KopiController::class, 'detailProduct']);
Route::get('/buy', [KopiController::class, 'buy']);
Route::get('/product', [KopiController::class, 'product']);
Route::view('/transaksi', 'transaksi');
Route::post('/transaksi_penjualan', [KopiController::class, 'transaksi_penjualan']);
Route::post('/feedback/{id}', [KopiController::class, 'feedback']);
Route::view('/feedback/{id}', 'feedback');

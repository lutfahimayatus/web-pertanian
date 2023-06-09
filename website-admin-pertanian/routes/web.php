<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/login', function () {
//     return view('login/index');
// });

Route::get('/', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/produks', [ProdukController::class, 'index'])->name('produks.index');
Route::get('/dashboard/produks/tambah', [ProdukController::class, 'tambah'])->name('tambah');
Route::post('/create-produk', [ProdukController::class, 'create'])->name('produks.create');
Route::delete('/delete-produk/{id}', [ProdukController::class, 'delete'])->name('produks.delete');
Route::post('/update-produk/{id}', [ProdukController::class, 'update'])->name('produk.update');

Route::get('/dashboard/pemasoks', [PemasokController::class, 'index'])->name('pemasoks.index');
Route::get('/dashboard/pemasoks/tambah', [PemasokController::class, 'tambah'])->name('tambah');
Route::post('/create-pemasok', [PemasokController::class, 'create'])->name('pemasoks.create');
Route::delete('/delete-pemasok/{id}', [PemasokController::class, 'delete'])->name('pemasoks.delete');

Route::get('/dashboard/kotas', [KotaController::class, 'index']);

Route::get('/dashboard/transaksis', [TransaksiController::class, 'index']);
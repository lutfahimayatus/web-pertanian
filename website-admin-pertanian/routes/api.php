<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AndroiAuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/login', [AndroiAuthController::class, 'login']);
Route::post('/register', [AndroiAuthController::class, 'register']);

Route::post('/produk-tambah',[ProdukController::class,'store'])->name('produk_store');
Route::delete('/produk-hapus/{id}',[ProdukController::class,'delete'])->name('produk_delete');
Route::get('/produk-detail/{id}',[ProdukController::class,'show'])->name('produk_show');
Route::put('/produk-update/{id}',[ProdukController::class,'update'])->name('produk_update');

Route::put('/transaksi-update/{id}',[ProdukController::class,'update'])->name('transaksi.update');
Route::get('/transaksi-detail/{id}',[ProdukController::class,'show'])->name('transaksi.show');





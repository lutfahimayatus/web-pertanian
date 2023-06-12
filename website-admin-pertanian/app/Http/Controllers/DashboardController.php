<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\Pemasok;


class DashboardController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $produkCount = Produk::count();
    
        $pemasok = Pemasok::all();
        $pemasokCount = Pemasok::count();
    
        return view('/dashboard/index', compact('produk', 'produkCount', 'pemasok', 'pemasokCount'));
    }
}

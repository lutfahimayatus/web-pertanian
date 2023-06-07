<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class DashboardController extends Controller
{
    public function index()
    {
        $produk = produk::count();

        return view('/dashboard/index', compact('produk'));

    }
}

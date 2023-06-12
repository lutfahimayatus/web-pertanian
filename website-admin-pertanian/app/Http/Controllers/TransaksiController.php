<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = transaksi::all();
        return view('dashboard.transaksis.index', compact('transaksi'));

    }
}

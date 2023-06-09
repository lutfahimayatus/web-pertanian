<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return view("/dashboard/produks/index", compact('produk'));
    }

    public function tambah()
    {
        return view('dashboard/produks/tambah');
    }

    public function create(Request $request)
    {
        $produk=produk::create($request->all());
        return redirect()->route('produks.index');
    }

    public function delete($id)
    {
        $produk=produk::findOrFail($id);
        $produk->delete();
        
        return redirect()->route('produks.index');
    }

    public function show($id)
    {
        $produk=produk::findOrFail($id);
        $produk->show();
        
        return redirect()->route('produks.index');
    }
}

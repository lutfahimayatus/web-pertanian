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
        
        // return redirect()->route('produks.index');
        return response()->json($produk);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi_produk' => 'required',
            'stok' => 'required|numeric',
        ]);

        // Temukan produk berdasarkan ID
        $produk = Produk::find($id);

        if (!$produk) {
            return back()->with('error', 'Produk tidak ditemukan');
        }

        // Update data produk
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->stok = $request->stok;
        $produk->save();

        // return back()->with('success', 'Produk berhasil diperbarui');
        return response()->json($produk);
    }

    
    public function detailProduk($id)
    {
        $produk=produk::findOrFail($id);
        $produk->show();
        
        return redirect()->route('produks.index');
    }
    public function store(Request $request){
            $produk = produk::create($request->all());
            $produk -> save();

            return response()->json($produk);
    }
    public function show($id){
        $produk = produk::FindOrFail($id);
        return response()->json($produk);
    }

}

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

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status_transaksi' => 'required',
        ]);

        // Temukan produk berdasarkan ID
        $transaksi = transaksi::find($id);

        // if (!$transaksi) {
        //     // return back()->with('error', 'Produk tidak ditemukan');
        // }

        // Update data transaksi
        $transaksi->status_transaksi = $request->status_transaksi;
        $transaksi->save();

        // return back()->with('success', 'Produk berhasil diperbarui');
        return response()->json($transaksi);
    }
    public function show($id){
        $transaksi = transaksi::FindOrFail($id);
        return response()->json($transaksi);
    }

}

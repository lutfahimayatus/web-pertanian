<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemasok;

class PemasokController extends Controller
{
    public function index()
    {
        $pemasok = pemasok::all();
        return view('/dashboard/pemasoks/index', compact('pemasok'));
    }

    public function tambah()
    {
        return view('dashboard/pemasoks/tambah');
    }

    public function create(Request $request)
    {
        $pemasok=pemasok::create($request->all());
        return redirect()->route('pemasoks.index');
    }

    public function delete($id)
    {
        $pemasok=pemasok::findOrFail($id);
        $pemasok->delete();
        
        return redirect()->route('pemasoks.index');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_pemasok' => 'required',
            'no_telp' => 'required|numeric',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        // Temukan produk berdasarkan ID
        $pemasok = Pemasok::find($id);

        if (!$pemasok) {
            return back()->with('error', 'Pemasok tidak ditemukan');
        }

        // Update data produk
        $pemasok->nama_pemasok = $request->nama_pemasok;
        $pemasok->no_telp = $request->no_telp;
        $pemasok->email = $request->email;
        $pemasok->alamat = $request->alamat;
        $pemasok->save();

        return back()->with('success', 'Pemasok berhasil diperbarui');
        //return response()->json($alamat);
        //return redirect()->route('pemasoks.index');
    }

    public function detailPemasok($id)
    {
        $pemasok=pemasok::findOrFail($id);
        $pemasok->show();
        
        return redirect()->route('pemasoks.index');
    }
    public function store(Request $request){
            $pemasok = pemasok::create($request->all());
            $pemasok -> save();

            return response()->json($pemasok);
    }
    public function show($id){
        $pemasok = pemasok::FindOrFail($id);
        return response()->json($pemasok);
    }
}

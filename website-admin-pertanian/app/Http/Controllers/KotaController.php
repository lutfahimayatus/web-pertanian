<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kota;

class KotaController extends Controller
{
    public function index()
    {
        $kota = kota::all();
        return view('/dashboard/kotas/index', compact('kota'));
    }

    public function tambah()
    {
        return view('dashboard/kotas/tambah');
    }

    public function create(Request $request)
    {
        $kota=kota::create($request->all());
        return redirect()->route('kotas.index');
    }

    public function delete($id)
    {
        $kota=kota::findOrFail($id);
        $kota->delete();
        
        return redirect()->route('kotas.index');
        // return response()->json($kota);
    }
}

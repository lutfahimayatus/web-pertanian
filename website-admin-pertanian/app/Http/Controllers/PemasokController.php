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
}

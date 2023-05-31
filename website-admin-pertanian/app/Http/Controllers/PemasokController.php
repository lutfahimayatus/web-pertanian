<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasokController extends Controller
{
    public function index()
    {
        return view('/dashboard/pemasoks/index');
    }
}

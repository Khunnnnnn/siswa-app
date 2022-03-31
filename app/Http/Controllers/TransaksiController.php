<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
       return view('metode'); 
    }

    public function show()
    {
        return view('uploadbukti');
    }
}

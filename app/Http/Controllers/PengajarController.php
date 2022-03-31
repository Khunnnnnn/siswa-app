<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function indexadmin()
    {
        return view('admin.pengajar.index', [
            'pengajars' => Pengajar::all(),
        ]);
    }

    public function indexuser()
    {
        return view('mentor', [
            'pengajars' => Pengajar::all(),
        ]);
    }
}

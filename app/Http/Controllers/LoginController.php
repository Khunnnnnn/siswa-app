<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login.login.index',[
            'tittle' => 'Login',
            'active' =>'login'
        
        ]);
    }
    public function authenticate( Request $request)
    {
       $credentials= $request->validate([ 
            'email'=> 'required',
            'password' => 'required'
        ]); //melakukan validasi
        // credentials adalah email dan password

        if(Auth::attempt($credentials)){
            if(auth()->user()->user_level == 'siswa'){
                $request->session()->regenerate();
                return redirect()->intended('/');
            }else{
                $request->session()->regenerate();
                return redirect()->intended('/pelamar');
            }
        } // Jika percobaan login yang dilakukan oleh credentials Berhasil maka diarahkan ke halaman dashboard
            // fungsi regenerate untuk menghindari teknik kejahatan

        return back()->with('loginError','Login Failed!'); // Kalau login gagal kembali ke halaman login

    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
}

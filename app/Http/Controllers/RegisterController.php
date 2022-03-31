<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use App\Models\Pelamar;

class RegisterController extends Controller
{
    public function index ()
    {
        return view ('login.register.index',[

            'tittle' => 'Register',
            'active' =>'register'
        ]);
    }

    public function store(Request $request)
    {
        //mengambil data dan memvalidasi data
        $validatedData= $request->validate([ 
            'nama'=> 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'user_level' => 'required|max:50'

        ]); 

        $validatedData['password']= Hash::make($validatedData['password']);
        User::create($validatedData);

        if($request->user_level=="siswa"){
            $user= User::latest()->first(); 
            Siswa::create([
                'nama_siswa'=>$request->nama,
                'email_siswa'=>$request->email,
                'id_user'=>$user->id
            ]);
        }

        else{
            $user= User::latest()->first(); 
            Pelamar::create([
                'nama_pelamar'=>$request->nama,
                'email_pelamar'=>$request->email,
                'id_user'=>$user->id
            ]);
        }

        return redirect('/login')->with('success','Registration Successfull!!!');
    }
    }


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginDokterController extends Controller
{
    // login dokter
    public function logindokter(){
        return view('logindokter');
    }

    public function registerdokter(){
        return view('registerdokter');
    }

    public function registerdokters(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return \redirect('/login');
    }

    
}

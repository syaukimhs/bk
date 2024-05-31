<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;

class PeriksaController extends Controller
{
    public function periksa(){
        $data = Periksa::all();
        //dd($data);
        return view('periksapasien',compact('data'));
    }
}

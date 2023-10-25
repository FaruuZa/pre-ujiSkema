<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index(){
        return view('kirimData');
    }
    public function tambah(){
        return view('ngirim');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\pemain;

use App\Models\pemainmodel;
use Illuminate\Http\Request;

class pemainController extends Controller
{
    public function index(){
        $data_pemain = pemainmodel::all()->sortByDesc('id');
        $nomor = 0;

        return view('home', compact('data_pemain','nomor'));
    }
}

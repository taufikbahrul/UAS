<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atraksi;
use App\Candi;

class TiketController extends Controller
{
    public function index(Request $request){
        $atraksi = Atraksi::all();
        $candi = Candi::all();
        return view('homepage', compact('atraksi', 'candi'));
    }

}

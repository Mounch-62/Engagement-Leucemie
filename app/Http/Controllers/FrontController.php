<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.base-front');
    }
    public function actualite()
    {
        // recup des données
        return view('front.actualite');
    }
    public function bureau()
    {
        // recup des données
        return view('front.bureau.bureau');
    }
}

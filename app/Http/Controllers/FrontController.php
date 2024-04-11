<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.base-front');
    }
    public function actualite()
    {
        $actualites = Actualite::orderBy('date', 'desc')->get();
        return view('front.actualite', compact('actualites'));
        // recup des données
    }
}

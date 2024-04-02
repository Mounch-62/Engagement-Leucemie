<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Models\Media;

class FrontController extends Controller
{
    public function home()
    {
        $videos = Media::where('type', 'video')->get();
        
        $images = Media::where('type', 'image')->get();
        return view('front.base-front')->with(array('images' => $images))->with(array('videos'=>$videos));
    }
    public function actualite()
    {
        $actualites = Actualite::all();
        return view('front.actualite', compact('actualites'));
        // recup des données
    }
    public function test()
    {
        return view('front.bandeau-inscrit');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\bureau;
use App\Models\Actualite;
use App\Models\Media;

class FrontController extends Controller
{
    public function home()
    {
        $videos = Media::where('type', 'video')->get();
        $images = Media::where('type', 'image')->get();
        return view('front.home')->with(array('images' => $images))->with(array('videos'=>$videos));
    }
    public function actualite()
    {
        $actualites = Actualite::orderBy('date', 'desc')->get();
        return view('front.actualite', compact('actualites'));
    }
    public function test()
    {
        return view('front.bandeau-inscrit');
    }
    public function bureau()
    {
        $personalbureau = Bureau::all();
        return view('front.bureau.bureau', compact('personalbureau'));
    }
}

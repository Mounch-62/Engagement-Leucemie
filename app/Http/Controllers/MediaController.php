<?php

namespace App\Http\Controllers;

use App\Models\media;
use App\Http\Requests\StoremediaRequest;
use App\Http\Requests\UpdatemediaRequest;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function image()
    {
        $images = Media::where('type', 'image')->get();
        return View('front.carousel')->with(array('images'=>$images));
    }
    public function video()
    {
        $videos = Media::where('type', 'video')->get();
        return View('front.video')->with(array('videos'=>$videos));
    }
    public function  backActualite()
    {
        return view('admin.actualite.index');
    }

}
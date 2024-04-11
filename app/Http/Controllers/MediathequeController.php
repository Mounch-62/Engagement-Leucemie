<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Mediatheque;
use App\Http\Requests\StoreMediathequeRequest;
use App\Http\Requests\UpdateMediathequeRequest;
use Illuminate\Http\Request;
use App\Models\Partenaire;

class MediathequeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function saveImage( Request $request){
        try{
            $path = $request->file('image')->store('/public/uploads');
            $url = Storage::url($path);
            
            $mediatheque = new Mediatheque();
            
            $mediatheque->lien = 'app/' . $path;
            $mediatheque->partenaire_id = $request->partenaire_id;
            $mediatheque->save();
            $partenaire = Partenaire::find($request->partenaire_id);
            $idMediatheque = $mediatheque->id;
            try{
                $partenaire->mediatheque_id =  $mediatheque->id;
                $partenaire->save();
            }
            catch(Exception $e){
                return redirect()->route('admin.partenaire')->with('error', "Impossible d'enregistrer l'image");
            }
        }
        catch(\Exception $e){
            return redirect()->route('admin.partenaire')->with('error', "Impossible d'enregistrer l'image");
        }
        return redirect()->route('admin.partenaire')->with('success', "Le logo à été correctement modifié");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediathequeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mediatheque $mediatheque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mediatheque $mediatheque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediathequeRequest $request, Mediatheque $mediatheque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mediatheque $mediatheque)
    {
        //
    }
}

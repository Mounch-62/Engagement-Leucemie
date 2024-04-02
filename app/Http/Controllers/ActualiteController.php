<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('admin.actualite.index', compact('actualites'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.actualite.ajouterActu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newActualite = new Actualite;
        $newActualite->titre = $request->get('titre');
        $newActualite->contenu = $request->get('contenu');
        $newActualite->date = $request->get('date');
        $newActualite->ville = $request->get('ville');
        $newActualite->adresse = $request->get('adresse');
        $newActualite->lieu = $request->get('lieu');
        $newActualite->nombre_inscrit = $request->get('nbInscrit');
        $newActualite->nombre_participant = $request->get('nbParticipant');
        $newActualite->is_visible = $request->get('est_termine') == 'on' ? 1 : 0;
        $newActualite->save();

        return redirect(route('actualite.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($actualite)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($actualite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $actualite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Actualite::destroy($id);

        return redirect()->back();
    }
}

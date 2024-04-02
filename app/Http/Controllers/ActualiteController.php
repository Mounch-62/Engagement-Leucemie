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
        $actualites = Actualite::orderBy('date', 'desc')->get();
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
    public function show($id)
    {
        $actualite = Actualite::find($id);
        return view('admin.actualite.voirActu', compact('actualite'));
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
    public function update(Request $request, Actualite $actualite)
    {
        // Validation des données
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'date' => 'required|date',
            'ville' => 'required|string|max:255',
            'adresse' => 'required|string',
            'lieu' => 'required|string',
            'nbInscrit' => 'required|integer',
            'nbParticipant' => 'required|integer',
            'is_visible' => 'sometimes|boolean'
        ]);

        // Mise à jour de l'actualité
        $actualite->update($validated);

        // Redirection vers la liste des actualités avec un message de succès
        return redirect()->route('admin.actualites.index')->with('success', 'Actualité mise à jour avec succès.');
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

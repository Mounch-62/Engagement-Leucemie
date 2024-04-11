<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'titre' => 'required|min:6|string',
            'contenu' => 'required|min:6|string',
            'date' => 'required|date',
            'ville' => 'required|string|max:255',
            'adresse' => 'required|string',
            'lieu' => 'required|string',
            'nbInscrit' => 'required|integer',
            'nbParticipant' => 'required|integer',
            'is_visible' => 'sometimes|boolean'

        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {

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

            return
                redirect()->route('actualite.index')->with("success", "Actualité créée");
        } catch (\Exception $e) {
            return redirect()->route('base_admin')->with("error", "Problème lors de la création de l'actualité");
        }
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
        $validator = Validator::make($request->all(), [
            'titre' => 'required|min:6|string',
            'contenu' => 'required|min:6|string',
            'date' => 'required|date',
            'ville' => 'required|string|max:255',
            'adresse' => 'required|string|min:6',
            'lieu' => 'required|string|min:6',
            'nbInscrit' => 'required|integer',
            'nbParticipant' => 'required|integer',
            'is_visible' => 'sometimes|boolean'

        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {

            $actualite->titre = $request->input('titre');
            $actualite->contenu = $request->input('contenu');
            $actualite->date = $request->input('date');
            $actualite->ville = $request->input('ville');
            $actualite->adresse = $request->input('adresse');
            $actualite->lieu = $request->input('lieu');
            $actualite->nombre_inscrit = $request->input('nbInscrit');
            $actualite->nombre_participant = $request->input('nbParticipant');
            $actualite->is_visible = $request->input('est_termine') ? 1 : 0;

            // Mise à jour de l'actualité
            $actualite->save();

            // Redirection vers la liste des actualités avec un message de succès
            return
                redirect()->back()->with('success', 'Actualité mise à jour avec succès.');
        } catch (\Exception $e) {
            return redirect()->route('base_admin')->with("error", "Problème lors de la mise à jour de l'actualité");
        }
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

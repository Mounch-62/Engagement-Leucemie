<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use App\Http\Requests\StorePartenaireRequest;
use App\Http\Requests\UpdatePartenaireRequest;
use Illuminate\Http\Request;
use App\Models\Lien;
use App\Models\Mediatheque;
use Illuminate\Support\Facades\Validator;



class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        // $partenaires = $partenaires->mediatheque();
        // $mediatheques = Mediatheque::all();
        // dd($partenaires);
        return view('admin.partenaire.index', compact('partenaires'));
    
    }
    public function partenaire($id){
        $partenaire = Partenaire::find($id);
        $liens = $partenaire->liens;
        return view('admin.partenaire.show-partenaire', compact('partenaire', 'liens'));
    }
    public function editDescriptionPartenaire($id, Request $request){
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $partenaire = Partenaire::find($id);
        $partenaire->description = $request->get('description');
        $partenaire->save();
        return redirect()->route('admin.showPartenaire', $partenaire->id)->with('success', 'La description a bien été modifiée.');
    }
    public function addLink($id, Request $request){
        $partenaire = Partenaire::find($id);
        $link=new Lien();
        $link->nom=$request->get("nom");
        $link->lien=$request->get("lien");
        $link->partenaire_id = $id;
        $link->save();
        return redirect()->route('admin.showPartenaire', $id)->with("success","l'inscription est bien crée");
    }
    public function delete($id){
        Partenaire::destroy($id);
        return redirect()->route('admin.partenaire')->with("success","le partenaire a bien été supprimé");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $partenaire = new Partenaire();
        $partenaire -> nom = $request->get("nom");
        $partenaire -> description = $request->get("description");
        $partenaire -> logo = "../../../public/images/corbeille.svg";
        $partenaire->save();
        return redirect()->route('admin.partenaire')->with("success","le partenaire a bien été ajouté");
    }

    public function editNamePartenaire($id, Request $request){
        $partenaire = Partenaire::find($id);
        $partenaire->nom = $request->get('nom');
        $partenaire->save();
        return redirect()->route('admin.partenaire')->with('success', 'Le nom du partenaire a bien été modifié.');
    }

    public function viewIndex(){
        $partenaires = Partenaire::all();
        return view('front.partenaire.partenaire', compact('partenaires'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartenaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartenaireRequest $request, Partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenaire $partenaire)
    {
        //
    }
}

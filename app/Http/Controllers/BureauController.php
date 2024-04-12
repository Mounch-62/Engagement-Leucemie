<?php

namespace App\Http\Controllers;

use Database\Seeders\BureauSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Bureau;

class BureauController extends Controller
{
    public function index()
    {
        $personalbureau = Bureau::all();
        return view("admin.bureau.index", compact("personalbureau"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'role' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };
        Bureau::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'role' => $request->role,
        ]);
        return redirect()->back()->with('success', 'Adhérent ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $bureaus = Bureau::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'role' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $bureaus->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'photo' => $request->photo,
            'role' => $request->role,
        ]);
        return redirect()->back()->with('success', 'Adhérent mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $bureaus = Bureau::findOrFail($id);
        $bureaus->delete();
        return redirect()->back()->with('success', 'Adhérent supprimé avec succès.');
    }
}

    
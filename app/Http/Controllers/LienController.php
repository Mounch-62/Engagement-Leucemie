<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Http\Requests\StoreLienRequest;
use App\Http\Requests\UpdateLienRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function editLink($id, $idPartenaire, Request $request){
        $validator = Validator::make($request->all(), [
            'lien' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $lien = Lien::find($id);
        $lien->lien = $request->get('lien');
        $lien->save();
        return redirect()->route('admin.showPartenaire', $idPartenaire)->with('success', 'Le lien  a bien été modifié.');
    }
    public function delete($id, $idPartenaire){
        Lien::destroy($id);
        return redirect()->route('admin.showPartenaire', $idPartenaire)->with('success', 'Le lien a bien été supprimé.');
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
    public function store(StoreLienRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lien $lien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lien $lien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLienRequest $request, Lien $lien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lien $lien)
    {
        //
    }
}

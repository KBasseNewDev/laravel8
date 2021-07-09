<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReglementsalaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prime = Reglementsalaire::all();

        return view('reglementsalaires.index', compact('reglementsalaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reglementsalaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'etatReglementsalaire' => 'required|3',
            'dateReglementsalaire' => 'required|3',
            'montantReglementsalaire' => 'required|3'
        ]);

        Reglementsalaire::create([
            'etatReglementsalaire' => $request->etatReglementsalaire,
            'dateReglementsalaire' => $request->dateReglementsalaire,
            'montantReglementsalaire' => $request->montantReglementsalaire
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idReglementsalaire)
    {
        $reglementsalaire = Reglementsalaire::findOrFail($idReglementsalaire);

        return view('reglementsalaires.show', compact('reglementsalaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idReglementsalaire)
    {
        $reglementsalaire = Reglementsalaire::finOrFail($idReglementsalaire);

        return view('reglementsalaires.edit', compact('reglementsalaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idReglementsalaire)
    {
        $this->validate($request, [
            'etatReglementsalaire' => 'required|',
            'dateReglementsalaire' => 'required|',
            'montantReglementsalaire' => 'required|'
        ]);

        $reglementsalaire=Reglementsalaire::finOrFail($idReglementsalaire);

        $reglementsalaire->update([
            'etatReglementsalaire' => $request->etatReglementsalaire,
            'dateReglementsalaire' => $request->dateReglementsalaire,
            'montantReglementsalaire' => $request->montantReglementsalaire,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reglementsalaire::destroy($idReglementsalaire);

        return redirect()->route('');
    }
}
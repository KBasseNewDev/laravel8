<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primes = Groupe::all();

        return view('groupes.index', compact('groupe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groupes.create');
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
            'nomGroupe' => 'required|3',
            'montantBruteGroupe' => 'required|3'
        ]);

        Groupe::create([
            'nomGroupe' => $request->nomGroupe,
            'montantBruteGroupe' => $request->montantBruteGroupe
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idGroupe)
    {
        $groupe = Groupe::findOrFail($idGroupe);

        return view('groupes.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idGroupe)
    {
        $groupe = Groupe::finOrFail($idGroupe);

        return view('groupes.edit', compact('groupe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idGroupe)
    {
        $this->validate($request, [
            'nomGroupe' => 'required|3',
            'montantBruteGroupe' => 'required|3'
        ]);

        $groupe=Groupe::finOrFail($idGroupe);

        $groupe->update([
            'nomGroupe' => $request->nomGroupe,
            'montantBruteGroupe' => $request->montantBruteGroupe
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idGroupe)
    {
        Groupe::destroy($idGroupe);

        return redirect()->route('');
    }
}

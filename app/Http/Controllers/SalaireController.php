<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaire = Salaire::all();

        return view('salaires.index', compact('salaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salaires.create');
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
            'etatSalaire' => 'required|3',
            'periodeSalaire' => 'required|3',
            'baseSalaire' => 'required|',
            'tauxSalaire' => 'required|',
            'gainSalaire' => 'required|',
            'chargeSalaire' => 'required|'
        ]);

        Salaire::create([
            'etatSalaire' => $request->etatSalaire,
            'periodeSalaire' => $request->periodeSalaire,
            'baseSalaire' => $request->baseSalaire,
            'tauxSalaire' => $request->tauxSalaire,
            'gainSalaire' => $request->gainSalaire,
            'chargeSalaire' => $request->chargeSalaire,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idSalaire)
    {
        $slaire = Salaire::findOrFail($idSalaire);

        return view('salaires.show', compact('salaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idSalaire)
    {
        $salaire = Salaire::finOrFail($idSalaire);

        return view('salaires.edit', compact('salaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSalaire)
    {
        $this->validate($request, [
            'etatSalaire' => 'required|3',
            'periodeSalaire' => 'required|3',
            'baseSalaire' => 'required|',
            'tauxSalaire' => 'required|',
            'gainSalaire' => 'required|',
            'chargeSalaire' => 'required|'
        ]);

        $salaire=Salaire::finOrFail($idSalaire);

        $salaire->update([
            'etatSalaire' => $request->etatSalaire,
            'periodeSalaire' => $request->periodeSalaire,
            'baseSalaire' => $request->baseSalaire,
            'tauxSalaire' => $request->tauxSalaire,
            'gainSalaire' => $request->gainSalaire,
            'chargeSalaire' => $request->chargeSalaire,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSalaire)
    {
        Salaire::destroy($idSalaire);

        return redirect()->route('');
    }
}

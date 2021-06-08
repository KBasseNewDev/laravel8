<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::all();

        //dd('index');
        return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create'); 
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
            'nomEmploye' => 'required|nomEmploye',
            'prenomEmploye' => 'required|min:3',
            'dateNaissanve' => 'required|date',
            'telephoneEmploye' => 'required|integer|min:8',
            'matriculeEmploye' => 'required|min:6',
            'professionEmploye' => 'required|min:4',
            'villeEmploye' => 'required|min:4',
            'numerocnpsEmploye' => 'required|min:3',
            'situationMatrimonialeEmploye' => 'required|min:10',
            'emailEmploye' => 'required|email'
        ]);

        Employe::create([
            'nomEmploye' => $request->nomEmploye,
            'prenomEmploye' => $request->prenomEmploye,
            'dateNaissanve' => $request->dateNaissance,
            'telephoneEmploye' => $request->telephoneEmploye,
            'matriculeEmploye' => $request->matriculeEmploye,
            'professionEmploye' => $request->professionEmploye,
            'villeEmploye' => $request->villeEmploye,
            'numerocnpsEmploye' => $request->numerocnpsEmploye,
            'situationMatrimonialeEmploye' => $request->situationMatrimonialeEmploye,
            'emailEmploye' => $request->emailEmploye
        ]);

        Employe::create($request->all());

        return redirect()->route(home)
            ->with('success', 'Employe created succefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEmploye)
    {
        $employes = Employe::findOrFail($idEmploye);

        return view('employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEmploye)
    {
        $employe = Employe::finOrFail($idEmploye);

        return view('employes.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEmploye)
    {
        $this->validate($request, [
            'nomEmploye' => 'required|3',
            'prenomEmploye' => 'required|3',
            'dateNaissanve' => 'required|date',
            'telephoneEmploye' => 'required|integer',
            'matriculeEmploye' => 'required|6',
            'professionEmploye' => 'required|',
            'villeEmploye' => 'required|4',
            'numerocnpsEmploye' => 'required|',
            'situationMatrimonialeEmploye' => 'required|10',
            'emailEmploye' => 'required|email'
        ]);

        $empmoye=Employe::finOrFail($idEmploye);

        $employe->update([
            'nomEmploye' => $request->nomEmploye,
            'prenomEmploye' => $request->prenomEmploye,
            'dateNaissanve' => $request->dateNaissance,
            'telephoneEmploye' => $request->telephoneEmploye,
            'matriculeEmploye' => $request->matriculeEmploye,
            'professionEmploye' => $request->professionEmploye,
            'villeEmploye' => $request->villeEmploye,
            'numerocnpsEmploye' => $request->numerocnpsEmploye,
            'situationMatrimonialeEmploye' => $request->situationMatrimonialeEmploye,
            'emailEmploye' => $request->emailEmploye
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEmploye)
    {
        Employe::destroy($idEmploye);

        return redirect()->route('gereremploye');
    }
}

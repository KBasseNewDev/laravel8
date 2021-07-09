<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

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
            'nomEmploye' => 'required',
            'prenomEmploye' => 'required',
            'dateNaissance' => 'required|date',
            'telephoneEmploye' => 'required|unique:employes',
            'matriculeEmploye' => 'required|unique:employes',
            'professionEmploye' => 'required',
            'villeEmploye' => 'required',
            'dateEmbauche' => 'required',
            'situationMatrimonialeEmploye' => 'required',
            'emailEmploye' => 'required|unique:employes'
        ]);
        

        Employe::create([
            'nomEmploye' => $request->nomEmploye,
            'prenomEmploye' => $request->prenomEmploye,
            'dateNaissance' => $request->dateNaissance,
            'telephoneEmploye' => $request->telephoneEmploye,
            'matriculeEmploye' => $request->matriculeEmploye,
            'professionEmploye' => $request->professionEmploye,
            'villeEmploye' => $request->villeEmploye,
            'dateEmbauche' => $request->dateEmbauche,
            'situationMatrimonialeEmploye' => $request->situationMatrimonialeEmploye,
            'emailEmploye' => $request->emailEmploye
        ]);


        return redirect()->back()
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
        $employe = Employe::findOrFail($idEmploye);

        return view('employes.show', compact('employe'));
        // dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEmploye)
    {
        $employe = Employe::where("idEmploye",$idEmploye)->first();

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
            'nomEmploye' => 'required',
            'prenomEmploye' => 'required',
            'dateNaissance' => 'required|date',
            'telephoneEmploye' => 'required',
            'matriculeEmploye' => 'required',
            'professionEmploye' => 'required',
            'villeEmploye' => 'required',
            'dateEmbauche' => 'required',
            'situationMatrimonialeEmploye' => 'required',
            'emailEmploye' => 'required'
        ]);

        $employes=Employe::findOrFail($idEmploye);

        $employes -> update([
            'nomEmploye' => $request->nomEmploye,
            'prenomEmploye' => $request->prenomEmploye,
            'dateNaissance' => $request->dateNaissance,
            'telephoneEmploye' => $request->telephoneEmploye,
            'matriculeEmploye' => $request->matriculeEmploye,
            'professionEmploye' => $request->professionEmploye,
            'villeEmploye' => $request->villeEmploye,
            'dateEmbauche' => $request->dateEmbauche,
            'situationMatrimonialeEmploye' => $request->situationMatrimonialeEmploye,
            'emailEmploye' => $request->emailEmploye
        ]);
        return redirect()->back()
            ->with('succes', 'Employe modifie succefully');
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

        return redirect()->back();

        // dd('destroy');
    }
}

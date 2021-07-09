<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Salaire;

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
        $periodeSalaire = $request->input('periodeSalaire');
        $baseSalaire = $request->input('baseSalaire');
        $tauxSalaire = $request->input('tauxSalaire');
        $gainSalaire = $request->input('gainSalaire');
        $retenueSalaire = $request->input('retenueSalaire');
        $salaireBrute = $request->input('salaireBrute');
        $netImposable = $request->input('netImposable');
        $chargeSalaire = $request->input('chargeSalaire');
        $avantageNature = $request->input('avantageNature');

        // $Total = 0;
        // for ($i=0; $i <= 2 ; $i++) { 
        //     $Total = $baseSalaire[$i] * $tauxSalaire[$i] + $gainSalaire[$i];
        // }
         // echo $Total;
        // $salaireBrute = 0;
        // $netImposable = 0;
        // $chargeSalaire = 0;
        // $Total = $salaireBrute = $baseSalaire * $tauxSalaire;

        // echo $Total;
        // return redirect()->route('back');
        $baseSalaire = $row['baseSalaire'];
        $tauxSalaire = $row['tauxSalaire'];
        $gainSalaire = $row['gainSalaire'];
        $retenueSalaire = $row['retenueSalaire'];

        $salaireBrute = $baseSalaire * $tauxSalaire + $gainSalaire;

        echo $salaireBrute;


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

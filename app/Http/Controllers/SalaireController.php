<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Salaire;
use App\Models\Employe;
use App\Models\User;

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
        // $salaires = DB::table('salaires')
        //             ->where('employe_id',2)
        //             ->get()->last();
        $salaires = null;
        $employes = DB::table('employes')
                    ->get();
        $data = [
            'ret_credit' => 0,
            'ret_rav' => 0,
            'ret_cotisation' => 0,
            'ret_cac_irpp' => 0,
            'ret_irpp' => 0,
            'ret_fiscal' => 0,
            'prime_old' => 0,
            'prime_technicite' => 0,
            'ind_transport' => 0,
            'ind_logement' => 0
        ];
        return view('salaires.create',[
                'salaires' => $salaires,
                'data' => $data,
                'employes' => $employes
            ]
        );
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
        $heureSup = $request->input('heure_sup');
        $avantageNature = $request->input('avatange_nature');

        $ret_credit = $request->input('ret_credit');
        $ret_rav = $request->input('ret_rav');
        $ret_cotisation = $request->input('ret_cotisation');
        $ret_cac_irpp = $request->input('ret_cac_irpp');
        $ret_irpp = $request->input('ret_irpp');
        $ret_fiscal =$request->input('ret_fiscal');

        $prime_old = $request->input('prime_old');
        $prime_technicite = $request->input('prime_technicite');
        $ind_transport = $request->input('ind_transport');
        $ind_logement = $request->input('ind_logement');

        $array_gain = array($baseSalaire*$tauxSalaire, $prime_old, $prime_technicite, $ind_transport, $ind_logement);
        $array_retenu = array($ret_credit, $ret_rav, $ret_cotisation, $ret_cac_irpp, $ret_irpp, $ret_fiscal);
        
        $gainSalaire = array_sum($array_gain);
        $retenueSalaire = array_sum($array_retenu);
        $chargeSalaire=$retenueSalaire;
        $salaireBrute=$gainSalaire;
        $netImposable=$salaireBrute - $chargeSalaire;
        $netPayer= $netImposable + $heureSup;

        $employe_id =$request->input('employe_id');
        // dd();
        $check_user = DB::table('salaires')
                    ->where('employe_id',1)
                    ->get();
        // dd($check_user->isNotEmpty());
        if(!$check_user->isNotEmpty()){
            DB::table('salaires')->insert([
                ['periodeSalaire' => $periodeSalaire,'baseSalaire' => $baseSalaire,
                'tauxSalaire' => $tauxSalaire,'heureSup' => $heureSup,
                'gainSalaire' => $gainSalaire,'retenueSalaire' => $retenueSalaire,
                'chargeSalaire' => $chargeSalaire,'salaireBrute' => $salaireBrute,
                'netImposable' => $netImposable,'avantageNature' => $avantageNature,
                'netPayer' => $netPayer,'employe_id' => $employe_id],
            ]);
        }else{
            DB::table('salaires')
              ->where('employe_id', $employe_id)
              ->update(
                ['periodeSalaire' => $periodeSalaire,'baseSalaire' => $baseSalaire,
                    'tauxSalaire' => $tauxSalaire,'heureSup' => $heureSup,
                    'gainSalaire' => $gainSalaire,'retenueSalaire' => $retenueSalaire,
                    'chargeSalaire' => $chargeSalaire,'salaireBrute' => $salaireBrute,
                    'netImposable' => $netImposable,'avantageNature' => $avantageNature,
                    'netPayer' => $netPayer,'employe_id' => $employe_id],
              );
        }
        
        // Salaire::create(['periodeSalaire' => $periodeSalaire]);

        $salaires = DB::table('salaires')
                    ->where('employe_id',1)
                    ->get()->last();
        $data = [
            'ret_credit' => $ret_credit,
            'ret_rav' => $ret_rav,
            'ret_cotisation' => $ret_cotisation,
            'ret_cac_irpp' => $ret_cac_irpp,
            'ret_irpp' => $ret_irpp,
            'ret_fiscal' => $ret_fiscal,
            'prime_old' => $prime_old,
            'prime_technicite' => $prime_technicite,
            'ind_transport' => $ind_transport,
            'ind_logement' => $ind_logement
        ];
        
        $employes = DB::table('employes')
                    ->get();
        return view('salaires.create',['salaires'=>$salaires,'data'=>$data, 'employes'=>$employes]);


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

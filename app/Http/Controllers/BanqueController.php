<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banques = Banque::all();

        return view('banques.index', compact('banque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banques.create');
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
            'nomBanque' => 'required|3',
            'villeBanque' => 'required|3',
            'rueBanque' => 'required|',
            'codeBanque' => 'required|3',
        ]);

        Banque::create([
            'nomBanque' => $request->nomBanque,
            'villeBanque' => $request->villeBanque,
            'rueBanque' => $request->rueBanque,
            'codeBanque' => $request->codeBanque
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idBanque)
    {
        $banque = Banque::findOrFail($idBanque);

        return view('banques.show', compact('banque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idBanque)
    {
        $banque = Banque::finOrFail($idBanque);

        return view('banques.edit', compact('banque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idBanque)
    {
        $this->validate($request, [
            'nomBanque' => 'required|3',
            'villeBanque' => 'required|3',
            'rueBanque' => 'required|date',
            'codeBanque' => 'required|3'
        ]);

        $banque=Banque::finOrFail($idBanque);

        $banque->update([
            'nomBanque' => $request->nomBanque,
            'villeBanque' => $request->villeBanque,
            'rueBanque' => $request->rueBanque,
            'codeBanque' => $request->codeBanque
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idBanque)
    {
        Banque::destroy($idBanque);

        return redirect()->route('');
    }
}

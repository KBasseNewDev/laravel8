<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retenue;

class RetenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retenues = Retenue::all();

        return view('retenues.index', compact('retenues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retenues.create');
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
            'nomRetenue' => 'required|unique:retenues',
            'montantRetenue' => 'required'
        ]);

        Retenue::create([
            'nomRetenue' => $request->nomRetenue,
            'montantRetenue' => $request->montantRetenue
        ]);
        return redirect()->back()
            ->with('success', 'Retenue created succefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idRetenue)
    {
        $retenue = Retenue::findOrFail($idRetenue);

        return view('retenues.show', compact('retenue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idRetenue)
    {
        $retenue = Retenue::findOrFail($idRetenue);

        return view('retenues.edit', compact('retenue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idRetenue)
    {
        $this->validate($request, [
            'nomRetenue' => 'required|3',
            'montantRetenue' => 'required|3'
        ]);

        $retenue=Retenue::findOrFail($idRetenue);

        $retenue->update([
            'nomRetenue' => $request->nomRetenue,
            'montantRetenue' => $request->montantRetenue
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRetenue)
    {
        Retenue::destroy($idRetenue);

        return redirect()->route('');
    }
}

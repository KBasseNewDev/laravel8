<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prime = Prime::all();

        return view('primes.index', compact('prime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('primes.create');
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
            'nomPrime' => 'required|3',
            'montantPrime' => 'required|3'
        ]);

        Prime::create([
            'nomPrime' => $request->nomPrime,
            'montantPrime' => $request->montantPrime
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
        $prime = Prime::findOrFail($idPrime);

        return view('primes.show', compact('prime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idPrime)
    {
        $prime = Prime::finOrFail($idPrime);

        return view('primes.edit', compact('prime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPrime)
    {
        $this->validate($request, [
            'nomPrime' => 'required|3',
            'montantPrime' => 'required|3'
        ]);

        $prime=Prime::finOrFail($idPrime);

        $prime->update([
            'nomPrime' => $request->nomPrime,
            'montantPrime' => $request->montantPrime
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPrime)
    {
        Prime::destroy($idPrime);

        return redirect()->route('');
    }
}

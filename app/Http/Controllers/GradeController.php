<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primes = Prime::all();
        
        return view('grades.index', compact('grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.create');
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
            'nomGrade' => 'required|3',
            'codeGrade' => 'required|3'
        ]);

        Grade::create([
            'nomGrade' => $request->nomGrade,
            'codeGrade' => $request->codeGrade
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idGrade)
    {
        $grade = Grade::findOrFail($idGrade);

        return view('grades.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idGrade)
    {
        $grade = Grade::finOrFail($idGrade);

        return view('grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idGrade)
    {
        $this->validate($request, [
            'nomGrade' => 'required|3',
            'codeGrade' => 'required|3'
        ]);

        $grade=Grade::finOrFail($idGrade);

        $grade->update([
            'nomGrade' => $request->nomGrade,
            'codeGrade' => $request->codeGrade
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idGrade)
    {
        Grade::destroy($idGrade);

        return redirect()->route('');
    }
}

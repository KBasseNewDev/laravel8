<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        
        return view('grades.index', compact('grades'));
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
            'nomGrade' => 'required|unique:grades',
            'codeGrade' => 'required|unique:grades',
            'salaireBaseGrade' => 'required'
        ]);
        

        Grade::create([
            'nomGrade' => $request->nomGrade,
            'codeGrade' => $request->codeGrade,
            'salaireBaseGrade' => $request->salaireBaseGrade
        ]);

        return redirect()->back()
            ->with('success', 'Grade created succefully');
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
       $grade = Grade::where("idGrade",$idGrade)->first();

        return view('grades.edite', compact('grade'));
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
            'nomGrade' => 'required',
            'codeGrade' => 'required',
            'salaireBaseGrade' => 'required'
        ]);

        $grade=Grade::findOrFail($idGrade);

        $grade->update([
            'nomGrade' => $request->nomGrade,
            'codeGrade' => $request->codeGrade,
            'salaireBaseGrade' => $request->salaireBaseGrade
        ]);
        return redirect()->back()
            ->with('succes', 'Grade modifie succefully');
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

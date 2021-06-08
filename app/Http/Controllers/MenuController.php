<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();

        return view('menus.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
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
            'nomMenu' => 'required|3',
            'niveauMenu' => 'required|3'
        ]);

        Menu::create([
            'nomMenu' => $request->nomMenu,
            'niveauMenu' => $request->niveauMenu
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idMenu)
    {
        $menu = Menu::findOrFail($idMenu);

        return view('menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idMenu)
    {
        $menu = Menu::finOrFail($idMenu);

        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idMenu)
    {
        $this->validate($request, [
            'nomMenu' => 'required|3',
            'niveauMenu' => 'required|3'
        ]);

        $menu=Menu::finOrFail($idMenu);

        $menu->update([
            'nomMenu' => $request->nomMenu,
            'niveauMenu' => $request->niveauMenu
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idMenu)
    {
        Menu::destroy($idMenu);

        return redirect()->route('');
    }
}

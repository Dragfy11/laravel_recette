<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dessert = Recette::all();
        return view('welcome', compact('desert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desserts = new Recette;
        $desserts->name = $request->input('name');
        $desserts->nbrPersonne = $request->input('nbrPersonne');
        $desserts->duree=$request->input('duree');
        $desserts->difficulte=$request->input('difficulte');
        $desserts->save();
        $desserts->ingredient()->attach($request->ingredient);
        

        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette, $id)
    {
        $dessert = Recette::find($id);
        $ingredient = Ingredient::all();
        return view('editRecette', compact('dessert','ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dessert = Recette::find($id);
        $dessert->name = $request->input('name');
        $dessert->nbrPersonne = $request->input('nbrPersonne');
        $dessert->duree=$request->input('duree');
        $dessert->difficulte=$request->input('difficulte');
        $dessert->save();
        $dessert->ingredient()->detach();
        $dessert->ingredient()->attach($request->ingredient);
        

        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette,$id)
    {
        $dessert = Recette::find($id);
        $dessert->delete();
        return redirect()->route('welcome');
    }
}

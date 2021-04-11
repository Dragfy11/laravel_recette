<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $dessert = Recette::all();
         $ingredient = Ingredient::all();
         return view('welcome', compact('ingredient','dessert'));
     }
}

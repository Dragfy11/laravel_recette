<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return redirect()->back();
});

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::get('/BDD-Ingredient', [IngredientController::class,'index'])->name('IngredientBDD');
Route::get('/create', [RecetteController::class,'create'])->name('createRecette');
Route::get('/createIngredient', [IngredientController::class,'create'])->name('createIngredient');
Route::post('/store', [RecetteController::class,'store'])->name('storeRecette');
Route::post('/storeIngredient', [IngredientController::class,'store'])->name('envoiIngredient');
Route::get('/edit{id}', [RecetteController::class,'edit'])->name('editRecette');
Route::get('/editIngredient/{id}', [IngredientController::class,'edit'])->name('editIngredient');
Route::post('/update{id}', [RecetteController::class,'update'])->name('updateRecette');
Route::post('/updateIngredient/{id}', [IngredientController::class,'update'])->name('updateIngredient');
Route::get('/destroy{id}', [RecetteController::class,'destroy'])->name('destroyRecette');
Route::get('/DestroyIngredient/{id}', [IngredientController::class,'destroy'])->name('destroyIngredient');

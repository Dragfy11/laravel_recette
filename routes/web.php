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
Route::get('/create', [IngredientController::class,'create'])->name('createRecette');
Route::post('/store', [RecetteController::class,'store'])->name('storeRecette');
Route::get('/edit{id}', [RecetteController::class,'edit'])->name('editRecette');
Route::post('/update{id}', [RecetteController::class,'update'])->name('updateRecette');
Route::get('/destroy{id}', [RecetteController::class,'destroy'])->name('destroyRecette');

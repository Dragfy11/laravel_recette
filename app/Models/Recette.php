<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;
    public function ingredient() {
        return $this->belongsToMany(Ingredient::class,'recette_ingredients', 'recette_id','ingredient_id');
    }
}

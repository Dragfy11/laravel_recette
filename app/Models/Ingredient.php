<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public function recette() {
        return $this->belongsToMany(Recette::class,'recette_ingredients', 'recette_id','ingredient_id');
    }
}

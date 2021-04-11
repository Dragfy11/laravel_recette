<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'Mascarpone (250g)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Café noir non sucré (50cl)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Cacao amer (50cl)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Biscuits à la cuillère (24 pièces)',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Oeufs (3 pièces)',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Sucre roux (100g)',
        
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Sucre vanillé (1 sachet)',
        
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Sucre (100g)',
        
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Sel (50g)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Eau (50cl)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Farine (300g)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Chocolat (200g)',
    
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Vanille (2 gousses)',
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Fraise (200g)'
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Pomme (200h)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Banane (200g)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Miel (1 cuillère à soupe)',
            
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Beurre (125g)',
        
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Creme (25cl)',
        ]);
    }
}

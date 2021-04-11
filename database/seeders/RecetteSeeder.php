<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recettes')->insert([
            'name' => 'Tiramisu',
            'nbrPersonne'=>4,
            'duree'=> '15 min',
            'difficulte'=>"bien séparé les blanc et jaunes d'oeuf"
        ]);
        DB::table('recettes')->insert([
            'name' => 'Glace à la vanille',
            'nbrPersonne'=>4,
            'duree'=> '20 min',
            'difficulte'=>'simple'
        ]);
        DB::table('recettes')->insert([
            'name' => 'Omellette au fromage',
            'nbrPersonne'=>2,
            'duree'=> '15 min',
            'difficulte'=>'mettre le fromage en dernier lieu'
        ]);
        DB::table('recettes')->insert([
            'name' => 'Gauffre au chocolat',
            'nbrPersonne'=>4,
            'duree'=> '40 min',
            'difficulte'=>'laisser bien refroidir le chocolat sur la gauffre'
        ]);
        DB::table('recettes')->insert([
            'name' => 'Crepe',
            'nbrPersonne'=>4,
            'duree'=> '15 min',
            'difficulte'=>'la faire retouner de face'
        ]);
        DB::table('recettes')->insert([
            'name' => 'Crepe au nutella',
            'nbrPersonne'=>4,
            'duree'=> '15 min',
            'difficulte'=>'la faire retouner de face'
        ]);
    }
}

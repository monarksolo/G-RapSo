<?php

namespace Database\Seeders;

use App\Models\Projet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Projet::create([
            'suivi_id' => '5545525',
            'titre' => 'Projet test',
            'description' => 'hthtrethynfrfthnrthnrt',
            'date_debut' => '2000-10-20 00:12:25',
            'date_fin' => '2000-10-20 00:12:25',
            'membres_equipe' => 'nom1, nom2, nom3',
        ]);
    }
}

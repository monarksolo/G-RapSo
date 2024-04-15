<?php

namespace Database\Seeders;

use App\Models\Suivi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuiviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Suivi::create([
            'commentaire' => 'Projet test fhntryhnbsrfghh',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Rapport;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RapportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Rapport::create([
            'resume' => 'fgbgsfrbssfrfgfbbssrfgbsbbsbrg',
        ]);
    }
}

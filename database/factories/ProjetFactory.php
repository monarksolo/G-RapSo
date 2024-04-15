<?php

namespace Database\Factories;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projet>
 */
class ProjetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Projet::class;

    public function definition(): array
    {
        return [
            //
            'titre' => fake()->title(),
            'description' => fake()->shuffleString(),
            'date_debut' => fake()->date(),
            'date_fin' => fake()->date(),
            'membres_equipe' => fake()->shuffleString(),
            'suivi_id' => rand(0, 10),
            'rapport_id' => rand(0, 10),
        ];
    }
}

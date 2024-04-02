<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actualite>
 */
class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->word(),
            'contenu' => fake()->paragraph(),
            'nombre_inscrit' => fake()->randomNumber(3),
            'date' => fake()->dateTime(),
            'lieu' => fake()->word(),
            'ville' => fake()->city(),
            'adresse' => fake()->address(),
            'nombre_participant' => fake()->randomNumber(3),
            'is_visible' => fake()->boolean(),

        ];
    }
}

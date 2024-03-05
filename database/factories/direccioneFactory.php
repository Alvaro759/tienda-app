<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\direccione>
 */
class direccioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calle' => fake()->name(),
            'numero' => fake()->numberBetween(0,30),
            'codigoPostal' => fake()->numberBetween(0,50000),
            'provincia' => fake()->name(),
            'pais' => fake()->name(),
        ];
    }
}

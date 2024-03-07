<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
       // Obtener un ID de usuario aleatorio
       $userId = User::inRandomOrder()->first()->id;
            
        return [
            'calle' => fake()->streetName(),
            'numero' => fake()->numberBetween(1,100),
            'codigoPostal' => fake()->postcode(),
            'provincia' => fake()->state(),
            'pais' => fake()->country(),
            'idCliente'=>$userId,
        ];
    }
}

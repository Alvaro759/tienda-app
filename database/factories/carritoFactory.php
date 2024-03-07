<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\carrito>
 */
class carritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idProducto = producto::inRandomOrder()->first()->id;

        return [
            'nombre' => fake()->name(),
            'idProducto' => $idProducto,
        ];
    }
}

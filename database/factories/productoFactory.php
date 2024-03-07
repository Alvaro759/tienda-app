<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\almacene;
use App\Models\categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productoModel>
 */
class productoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idCategoria = categoria::inRandomOrder()->first()->id;
        $idAlmacen = almacene::inRandomOrder()->first()->id;

        return [
            'nombre' => fake()->name(),
            'precio' => fake()->numberBetween(20,1000),
            'stock' => fake()->numberBetween(0,10000),
            'idCategoria' => $idCategoria,
            'idAlmacen' => $idAlmacen,
        ];
    }
}

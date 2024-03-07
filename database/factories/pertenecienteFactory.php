<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\producto;
use App\Models\categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\perteneciente>
 */
class pertenecienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idProducto = producto::inRandomOrder()->first()->id;
        $idCategoria = categoria::inRandomOrder()->first()->id;
        return [
            'idProducto' => $idProducto,
            'idCategoria' => $idCategoria,
        ];
    }
}

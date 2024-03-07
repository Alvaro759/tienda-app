<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\pedido;
use App\Models\producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cantidade>
 */
class cantidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $idPedidos = pedido::inRandomOrder()->first()->id;

       $idProducto = producto::inRandomOrder()->first()->id;

        return [
            'idPedidos' => $idPedidos,
            'idProducto' => $idProducto,
            'cantidad' => fake()->numberBetween(1,1000),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\factura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pedido>
 */
class pedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()->id;
        $idFactura = factura::inRandomOrder()->first()->id;

        return [
            'nombre' => fake()->name(),
            'idUsuario' => $userId,
            'idFactura' => $idFactura,
        ];
    }
}

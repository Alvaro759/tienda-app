<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\direccione;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\factura>
 */
class facturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()->id;
        $idDireccion = direccione::inRandomOrder()->first()->id;
        return [
            'nombre' => fake()->name(),
            'idCliente'=>$userId,
            'idDireccion'=>$idDireccion,
        ];
    }
}

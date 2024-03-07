<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categoria>
 */
class categoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categorias = ['Gaming', 'Portátiles', 'Componentes', 'Monitores', 'Smartphones', 'Televisores'];
        $numAleatorio = random_int(0, 5);
        
        return [
            'nombre' => $categorias[$numAleatorio],
            'descripcion' => fake()->text(),
        ];
    }
}

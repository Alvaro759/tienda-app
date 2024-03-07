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
        $producto = ['iphone 15 Pro Max', 'iPhone 15 Pro', 'iPhone 15 Plus', 'iPhone 15', 'Geforce RTX 3050', 'Geforce RTX 3060', 'Geforce RTX 3070', 'Geforce RTX 3080', 'Geforce RTX 3090', 'LG UltraGear 27GR75Q-B 27"','iphone 14 Pro Max', 'iPhone 14 Pro', 'iPhone 14 Plus', 'iPhone 14', 'Geforce GTX 1050', 'Geforce RTX 2060', 'Geforce RTX 2070', 'Geforce RTX 2080', 'Geforce RTX 2090', 'LG Ultragear 24GQ50F-B 23.8"',];
        $numAleatorio = random_int(0, 19);
        
        return [
            'nombre' => $producto[$numAleatorio],
            'precio' => fake()->numberBetween(20, 1000),
            'stock' => fake()->numberBetween(0, 10000),
            'idCategoria' => $idCategoria,
            'idAlmacen' => $idAlmacen,
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        \App\Models\almacene::factory(20)->create();
        \App\Models\categoria::factory(20)->create();
        \App\Models\producto::factory(20)->create();
        \App\Models\direccione::factory(20)->create();
        \App\Models\carrito::factory(20)->create();
        \App\Models\factura::factory(20)->create();
        \App\Models\pedido::factory(20)->create();
        \App\Models\cantidade::factory(20)->create();
        \App\Models\perteneciente::factory(20)->create();


    }
}

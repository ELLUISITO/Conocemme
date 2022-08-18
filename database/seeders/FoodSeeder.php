<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'food' => 'Alta Cocina'
        ]);
        Food::create([
            'food' => 'Árabe'
        ]);
        Food::create([
            'food' => 'Asiática'
        ]);
        Food::create([
            'food' => 'Café'
        ]);
        Food::create([
            'food' => 'Comida Rápida'
        ]);
        Food::create([
            'food' => 'Desayunos'
        ]);
        Food::create([
            'food' => 'Helados'
        ]);
        Food::create([
            'food' => 'Típica'
        ]);
        Food::create([
            'food' => 'Postres'
        ]);
        Food::create([
            'food' => 'Peruana'
        ]);
        Food::create([
            'food' => 'Sushi'
        ]);
        Food::create([
            'food' => 'Panadería'
        ]);
        Food::create([
            'food' => 'Mexicana'
        ]);
        Food::create([
            'food' => 'China'
        ]);

    }
}

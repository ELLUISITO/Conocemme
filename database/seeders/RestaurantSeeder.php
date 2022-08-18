<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = Restaurant::factory(50)->create();

        foreach ($restaurants as $restaurant) {
            $restaurant->services()->attach([rand(1,3), rand(4,6)]);
            $restaurant->events()->attach([rand(1,4), rand(5,8)]);
            $restaurant->foods()->attach([rand(1,7), rand(8,14)]);
        }
    }
}

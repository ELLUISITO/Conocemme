<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\Ubication;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'address' => $this->faker->address(),
            'neighborhood' => $this->faker->streetName(),
            'restaurant_id' => Restaurant::all()->random()->id,
            'ubication_id' => Ubication::all()->random()->id,
        ];
    }
}

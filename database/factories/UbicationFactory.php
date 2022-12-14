<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UbicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state' => $this->faker->state(),
            'city' => $this->faker->city(),
            'code' => $this->faker->postcode(),

        ];
    }
}

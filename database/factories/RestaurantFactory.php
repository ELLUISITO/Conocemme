<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Service;
use App\Models\Ubication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->sentence(500),
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->domainName(),
            'user_id' => User::all()->random()->id,
        ];
    }
}

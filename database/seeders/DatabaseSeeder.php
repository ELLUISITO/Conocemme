<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Location;
use App\Models\Ubication;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call(UbicationSeeder::class);
        Event::factory(8)->create();
        $this->call(ServiceSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(RestaurantSeeder::class);
        Location::factory(50)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'service' => 'Domicilio'
        ]);
        Service::create([
            'service' => '24/7'
        ]);
        Service::create([
            'service' => 'Parqueadero'
        ]);
        Service::create([
            'service' => 'Reservación'
        ]);
        Service::create([
            'service' => 'Buffet'
        ]);
        Service::create([
            'service' => 'Degustación'
        ]);
    }
}

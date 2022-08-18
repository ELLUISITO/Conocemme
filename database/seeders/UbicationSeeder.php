<?php

namespace Database\Seeders;

use App\Models\Ubication;
use Illuminate\Database\Seeder;

class UbicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ubication::create([
            'state' => 'Valle del Cauca',
            'city' => 'Cali',
            'code' => '762021'
        ]);
        Ubication::create([
            'state' => 'Valle del Cauca',
            'city' => 'Cartago',
            'code' => '762022'
        ]);
        Ubication::create([
            'state' => 'Valle del Cauca',
            'city' => 'Palmira',
            'code' => '762023'
        ]);
        Ubication::create([
            'state' => 'Valle del Cauca',
            'city' => 'Zarzal',
            'code' => '762024'
        ]);
        Ubication::create([
            'state' => 'Valle del Cauca',
            'city' => 'Jamundí',
            'code' => '762025'
        ]);

        Ubication::create([
            'state' => 'Antioquía',
            'city' => 'Medellin',
            'code' => '762021'
        ]);
        Ubication::create([
            'state' => 'Antioquía',
            'city' => 'Envigado',
            'code' => '762022'
        ]);
        Ubication::create([
            'state' => 'Antioquía',
            'city' => 'Rionegro',
            'code' => '762023'
        ]);
        Ubication::create([
            'state' => 'Antioquía',
            'city' => 'Jardín',
            'code' => '762024'
        ]);
        Ubication::create([
            'state' => 'Antioquía',
            'city' => 'Jerico',
            'code' => '762025'
        ]);

        Ubication::create([
            'state' => 'Caldas',
            'city' => 'Pacora',
            'code' => '762021'
        ]);
        Ubication::create([
            'state' => 'Caldas',
            'city' => 'Salamina',
            'code' => '762022'
        ]);
        Ubication::create([
            'state' => 'Caldas',
            'city' => 'Villamaria',
            'code' => '762023'
        ]);
        Ubication::create([
            'state' => 'Caldas',
            'city' => 'Anserma',
            'code' => '762024'
        ]);
        Ubication::create([
            'state' => 'Caldas',
            'city' => 'Manizales',
            'code' => '762025'
        ]);

        Ubication::create([
            'state' => 'Risaralda',
            'city' => 'Pereira',
            'code' => '762021'
        ]);
        Ubication::create([
            'state' => 'Risaralda',
            'city' => 'Marsella',
            'code' => '762022'
        ]);
        Ubication::create([
            'state' => 'Risaralda',
            'city' => 'Guatica',
            'code' => '762023'
        ]);
        Ubication::create([
            'state' => 'Risaralda',
            'city' => 'Balboa',
            'code' => '762024'
        ]);
        Ubication::create([
            'state' => 'Risaralda',
            'city' => 'Apia',
            'code' => '762025'
        ]);

        Ubication::create([
            'state' => 'Cundinamarca',
            'city' => 'Bogotá',
            'code' => '762021'
        ]);
        Ubication::create([
            'state' => 'Cundinamarca',
            'city' => 'Zipaquira',
            'code' => '762022'
        ]);
        Ubication::create([
            'state' => 'Cundinamarca',
            'city' => 'Girardot',
            'code' => '762023'
        ]);
        Ubication::create([
            'state' => 'Cundinamarca',
            'city' => 'Ubate',
            'code' => '762024'
        ]);
        Ubication::create([
            'state' => 'Cundinamarca',
            'city' => 'Soacha',
            'code' => '762025'
        ]);
    }
}

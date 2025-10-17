<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sensor;
use App\Models\Station;

class SensorSeeder extends Seeder
{
    public function run(): void
    {
        $station = Station::first();

        Sensor::create([
            'name' => 'Sensor de Temperatura',
            'code' => 'TMP36-A',
            'status' => true,
            'id_station' => $station->id,
        ]);
    }
}
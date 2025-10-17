<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SensorData;
use App\Models\Sensor;

class SensorDataSeeder extends Seeder
{
    public function run(): void
    {
        $sensor = Sensor::first();

        SensorData::create([
            'value' => 23.5,
            'recorded_at' => now(),
            'id_sensor' => $sensor->id,
        ]);

        SensorData::create([
            'value' => 24.1,
            'recorded_at' => now()->subMinutes(5),
            'id_sensor' => $sensor->id,
        ]);
    }
}
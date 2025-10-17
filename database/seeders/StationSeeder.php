<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    public function run(): void
    {
        Station::create([
            'name' => 'Estación Central',
            'code' => 'EC-001',
            'status' => true,
        ]);
    }
}
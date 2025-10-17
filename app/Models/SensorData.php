<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $table = 'sensor_data';

    protected $fillable = [
        'value',
        'recorded_at',
        'id_sensor',
    ];

    public function sensor()
    {
        return $this->belongsTo(Sensor::class, 'id_sensor');
    }
}
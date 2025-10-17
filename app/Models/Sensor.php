<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensors';

    protected $fillable = [
        'name',
        'code',
        'status',
        'id_station',
    ];

    public function station()
    {
        return $this->belongsTo(Station::class, 'id_station');
    }

    public function data()
    {
        return $this->hasMany(SensorData::class, 'id_sensor');
    }
}
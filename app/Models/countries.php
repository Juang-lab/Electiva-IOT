<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class countries extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function departments(): HasMany
    {
        return $this->hasMany(departament::class, 'id_country');
    }
}
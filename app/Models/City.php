<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function route_from() {
        return $this->hasMany(Route::class, 'from_city_id', 'id');
    }

    public function route_to() {
        return $this->hasMany(Route::class, 'to_city_id', 'id');
    }
}

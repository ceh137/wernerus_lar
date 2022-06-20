<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function city_from() {
        return $this->hasOne(City::class, 'id', 'from_city_id');
    }

    public function city_to() {
        return $this->hasOne(City::class, 'id', 'to_city_id');
    }
}

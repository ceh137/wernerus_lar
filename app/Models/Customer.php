<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telnum',
        'company_id',
        'manager_id'
    ];

    public function company() {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}

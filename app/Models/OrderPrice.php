<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'TT_price',
        'to_addr_price' ,
        'from_addr_price',
        'pac_price',
        'insurance_price',
        'prr_to_addr_price',
        'prr_from_addr_price' ,
        'total'

    ];
}

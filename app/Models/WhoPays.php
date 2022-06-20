<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoPays extends Model
{
    use HasFactory;

    protected $fillable =[
            "TT",
            'to_addr',
            'from_addr',
            'package',
            'insurance',
            'prr_to_addr' ,
            'prr_from_addr' ,
            'total'
    ];
}

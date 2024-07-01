<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrialSupplyForBoat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'volume_m3',
        'start_date',
        'end_date',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseHardRoofCovered extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_m2',
        'start_date',
        'end_date',
    ];
}

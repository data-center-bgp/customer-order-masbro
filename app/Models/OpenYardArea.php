<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenYardArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_m2',
        'start-date',
        'end_date',
    ];
}

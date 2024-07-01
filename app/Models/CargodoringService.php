<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargodoringService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mass_tonne',
        'start_date',
        'end_date',
    ];
}

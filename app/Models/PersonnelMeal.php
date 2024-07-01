<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelMeal extends Model
{
    use HasFactory;

    protected $fillable = [
        'personnel',
        'start_date',
        'end_date',
    ];
}

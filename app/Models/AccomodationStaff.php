<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccomodationStaff extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff',
        'non_staff',
        'start_date',
        'end_date',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'v_position',
        'v_description',
        'v_type',
        'v_start_date',
        'v_end_date',


    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'f_species_name',
        'f_dob',
        'f_gender',
        'f_avg_lifespan',
        'f_dietary_req',
        'f_joindate',
        'f_height',
        'f_weight',
        'f_description',
        'f_image',
        'f_body_temp',
        'f_water_type',
        'f_color_variant',

    ];
}

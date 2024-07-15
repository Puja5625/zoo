<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
    use HasFactory;
    protected $fillable = [
        'b_name',
        'b_species_name',
        'b_dob',
        'b_gender',
        'b_avg_lifespan',
        'b_dietary_req',
        'b_joindate',
        'b_height',
        'b_weight',
        'b_description',
        'b_image',
        'b_nest_const',
        'b_cluth_size',
        'b_wingspan',
        'b_ability_fly',
        'b_color_variant',


    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amphibian extends Model
{
    use HasFactory;
    protected $fillable = [
        'a_name',
        'a_species_name',
        'a_dob',
        'a_gender',
        'a_avg_lifespan',
        'a_dietary_req',
        'a_joindate',
        'a_height',
        'a_weight',
        'a_description',
        'a_image',
        'a_rep_type',
        'a_cluth_size',
        'a_num_offspring',

    ];
}

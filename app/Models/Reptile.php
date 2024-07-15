<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reptile extends Model
{
    use HasFactory;
    protected $fillable = [
        'r_name',
        'r_species_name',
        'r_dob',
        'r_gender',
        'r_avg_lifespan',
        'r_dietary_req',
        'r_joindate',
        'r_height',
        'r_weight',
        'r_description',
        'r_image',
        'r_rep_type',
        'r_cluth_size',
        'r_num_offspring',

    ];
}

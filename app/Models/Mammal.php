<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mammal extends Model
{
    use HasFactory;
    protected $fillable = [
        'm_name',
        'm_species_name',
        'm_dob',
        'm_gender',
        'm_avg_lifespan',
        'm_dietary_req',
        'm_joindate',
        'm_height',
        'm_weight',
        'm_description',
        'm_image',
        'm_gest_period',
        'm_category',
        'm_avg_body_temp',

    ];
}

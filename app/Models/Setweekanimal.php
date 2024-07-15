<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setweekanimal extends Model
{
    use HasFactory;
    protected $fillable = [
        'setweekan_name',
        'setweekan_species_name',
        'setweekan_dob',
        'setweekan_gender',
        'setweekan_joindate',
        'setweekan_description',
        'setweekan_image',

    ];
}

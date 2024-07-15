<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsoranimal extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'sponsor_id',
        'total_price',
        'start_date',
        'end_date',
        'sponsor_animal',
        'signage_photo',
        's_url',
        
       


    ];
}

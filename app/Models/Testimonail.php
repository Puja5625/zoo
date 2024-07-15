<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonail extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_message',
        'sponsor_id',
        
       


    ];
   

    public function sponsors(): BelongsTo
    {
        return $this->belongsTo(Sponsor::class);
    }
}


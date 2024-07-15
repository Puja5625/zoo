<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Application extends Model
{
    use Notifiable;

    use HasFactory;
    protected $fillable = [
        'a_fullname',
        'a_email',
        'a_phone',
        'a_cv',


    ];

}

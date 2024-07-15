<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = [
        's_name',
        's_existing_name',
        's_phone_number',
        's_address',
        's_yearly_revenue',
        's_email',
        's_password',
        's_business_type',

    ];
    public function testimonails(): HasMany
    {
        return $this->hasMany(Testimonail::class,'foreign_key');
    }
    protected $hidden = [
        'v_password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'v_password' => 'hashed',
        ];
    }
}

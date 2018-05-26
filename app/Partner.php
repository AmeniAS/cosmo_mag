<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Partner extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'website',
    ];

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }
}

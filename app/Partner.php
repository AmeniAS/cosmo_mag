<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
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

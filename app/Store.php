<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'address', 'description', 'website', 'longitude', 'latitude', 'zip_code', 'state', 'city'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }
}

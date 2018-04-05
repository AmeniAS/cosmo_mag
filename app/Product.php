<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'quantity',
        'brand_id'
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}

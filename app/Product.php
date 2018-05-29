<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;

    var $searchable = [
        'columns' => [
            'products.name' => 3,
            'products.description' => 2,
            'brands.name' => 1,
        ],
        'joins' => [
            'brands' => ['products.brand_id', 'brands.id']
        ]
    ];

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

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Brand extends Model
{
    use SearchableTrait;

    var $searchable = [
        'columns' => [
            'brands.name' => 3,
            'brands.description' => 2,
            'categories.name' => 1,
        ],
        'joins' => [
            'categories' => ['brands.category_id', 'categories.id']
        ]
    ];

    protected $fillable = [
        'name',
        'description',
        'logo',
        'website',
        'category_id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

    public function favorite_brands()
    {
        return $this->hasMany(FavoriteBrand::class);
    }
}

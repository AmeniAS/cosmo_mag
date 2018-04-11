<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'description',
        'logo',
        'website',
        'category_id'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
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
}

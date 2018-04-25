<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function hasProduct($product_id)
    {
        return (in_array($product_id, $this->products->pluck('id')->toArray())) ? true : false;
    }

    public function addToCart($product_id, $quantity)
    {
        $this->products()->syncWithoutDetaching([$product_id => ['quantity' => $quantity]]);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hasProduct($product_id)
    {
        return (in_array($product_id, $this->products->pluck('id')->toArray())) ? true : false;
    }

    public function addToCart($product_id, $quantity)
    {
        $this->products()->syncWithoutDetaching([$product_id => ['quantity' => $quantity]]);
        //  ($this->products()->find($product_id)->quantity) +
        /*if ($this->hasProduct($product_id))
        {
            $this->products()->syncWithoutDetaching([$product_id => ['quantity' => $quantity]]);
        } else {
            $this->products()->attach([$product_id => ['quantity' => $quantity]]);
        }*/
    }

    public function removeFromCart($product_id)
    {
        $this->products()->detach([$product_id]);
    }
}

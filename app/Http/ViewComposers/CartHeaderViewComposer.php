<?php

namespace App\Http\ViewComposers;

use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class CartHeaderViewComposer
{
    public $cart_products = [];

    public function __construct()
    {
        /*$this->cart_products = Product::orderBy('updated_at', 'desc')
            ->limit(9)
            ->get();*/
        //dd(Auth::guard('web')->user()->cart->products);
        if (Auth::guard('web')->user()->cart) {
            $this->cart_products = Auth::guard('web')->user()->cart->products;
        } else {
            $this->cart_products = new Collection();
        }
    }

    public function compose($view)
    {
        $view->with('cart_products', $this->cart_products);
    }
}
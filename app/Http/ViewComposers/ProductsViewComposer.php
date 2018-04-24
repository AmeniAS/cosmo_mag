<?php

namespace App\Http\ViewComposers;

use App\Product;

class ProductsViewComposer
{
    public $new_products = [];

    public function __construct()
    {
        $this->new_products = Product::orderBy('updated_at', 'desc')
            ->limit(9)
            ->get();
    }

    public function compose($view)
    {
        $view->with('new_products', $this->new_products);
    }
}
<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::with('products')->paginate(5);

        return view('front_views.brands.index', compact('brands'));
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);

        return view('front_views.brands.show', compact('brand'));
    }
}

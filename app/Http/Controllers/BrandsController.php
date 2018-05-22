<?php

namespace App\Http\Controllers;

use App\Brand;
use App\FavoriteBrand;
use App\Http\Repositories\StaticHelpers;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:blogger,web')->only('toggleFavorite');
    }

    public function index()
    {
        $brands = Brand::with('products')->paginate(5);
        $guard_name = StaticHelpers::checkGuard();

        return view('front_views.brands.index', compact('brands', 'guard_name'));
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);

        return view('front_views.brands.show', compact('brand'));
    }

    public function toggleFavorite($brand_id)
    {
        $user = \request()->user();
        $brand = Brand::findOrFail($brand_id);

        if ($user->hasVavoriteBrand($brand_id)) {
            $favorite_brand = $user->brand_favorites
                ->where('brand_id', '=', $brand_id)
                ->first();

            if (! empty($favorite_brand)) {
                $favorite_brand->delete();
            }
        } else {
            $favorite_brand = new FavoriteBrand();

            $favorite_brand->brand_id = $brand_id;
            $user->brand_favorites()->save($favorite_brand);
        }

        return redirect()->back();
    }
}

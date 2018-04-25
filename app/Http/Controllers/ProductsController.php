<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FavoriteProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    protected $guard_name;
    protected $guard_type;

    public function __construct()
    {
        $this->middleware('auth:web,blogger', ['only' => ['toggleFavorite', 'show']]);

        if (Auth::guard('blogger')->check()) {
            $this->guard_name = 'blogger';
            $this->guard_type = 'App\Blogger';
        } elseif (Auth::check()) {
            $this->guard_name = 'web';
            $this->guard_type = 'App\User';
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('home');
        $guard_name = $this->guard_name;

        $product = Product::findOrFail($id);

        return view('front_views.products.show', compact('product', 'guard_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function toggleFavorite($product_id)
    {
        $user = \request()->user();
        $product = Product::findOrFail($product_id);

        if ($user->hasVavoriteProduct($product_id)) {
            $favorite_product = $user->product_favorites
                ->where('product_id', '=', $product_id)
                ->first();

            if (! empty($favorite_product)) {
                $favorite_product->delete();
            }
        } else {
            $favorite_product = new FavoriteProduct();

            $favorite_product->product_id = $product_id;
            $user->product_favorites()->save($favorite_product);
        }

        return redirect()->back();
    }

    public function addToCart(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);
        $user = $request->user();

        $cart = Cart::where('user_id', '=', $user->id)->first();

        if (empty($cart)) {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->save();
        }

        $cart->addToCart($product_id, $request->quantity);

        return redirect()->back();
    }
}

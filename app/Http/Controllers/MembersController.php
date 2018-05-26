<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FavoriteProduct;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MembersController extends Controller
{
    protected $guard_name;
    protected $guard_type;

    public function __construct()
    {
        $this->middleware('auth:web'/*, ['only' => ['toggleFavorite', 'addToCart']]*/);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::guard('web')->user();
        return view('front_views.members.profile', compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_profile(Request $request)
    {
        $user = Auth::guard('web')->user();

        $this->validate($request, [
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id
        ]);

        $user->fill($request->all());
        $user->save();

        Session::flash('alert-success', 'Informations modifiées avec succès');

        return redirect()->back();
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

    public function shipping()
    {
        if (Auth::guard('web')->user()->cart) {
            $shipping_products = Auth::guard('web')->user()->cart->products;
        } else {
            $shipping_products = new Collection();
        }
        return view('front_views.shipping', compact('shipping_products'));
    }
}

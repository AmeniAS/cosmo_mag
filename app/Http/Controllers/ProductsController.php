<?php

namespace App\Http\Controllers;

use App\Cart;
use App\FavoriteProduct;
use App\Http\Repositories\StaticHelpers;
use App\Product;
use App\Review;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    protected $guard_name;
    protected $guard_type;
    /**
     * @var GMaps
     */
    private $maps;

    public function __construct(GMaps $maps)
    {
        $this->middleware('auth:web,blogger', ['only' => ['toggleFavorite', 'addToCart', 'remove_from_cart', 'review']]);
        $this->maps = $maps;
    }

    public function homePage()
    {
        $guard_name = StaticHelpers::checkGuard();
        return view('front_views.home', compact('guard_name'));
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
        $guard_name = StaticHelpers::checkGuard();

        $product = Product::findOrFail($id);

        $stores = $product->stores;

        /***************************************************/

        $config['center'] = '36.8454266, 10.2250155';
        $config['zoom'] = '11';
        $config['map_height'] = '700px';
        $config['geocodeCaching'] = true;
        $this->maps->initialize($config);

        foreach ($stores as $store) {
            $marker = array();
            $marker['position'] = $store->latitude . ', ' . $store->longitude;
            $marker['infowindow_content'] = '<strong>' . $store->name . '</strong>' . '<br>' . $store->address;
            //$marker['onclick'] = 'alert("You just clicked me!!")';

            $this->maps->add_marker($marker);
        }

        $data['map'] = $this->maps->create_map();

        /***************************************************/

        $page_title = $product->name;

        return view('front_views.products.show', compact('product', 'guard_name', 'page_title', 'data'));
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
        /*dd(\request()->user());*/
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

        Session::flash('alert-success', 'Produit ajouté au panier');

        $cart->addToCart($product_id, $request->quantity);

        return redirect()->back();
    }

    public function remove_from_cart(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);
        $user = $request->user();

        $cart = Cart::where('user_id', '=', $user->id)->first();

        $cart->removeFromCart($product->id);

        Session::flash('alert-danger', 'Produit supprimé du panier');

        return redirect()->back();
    }

    public function review(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);

        $user = $request->user();

        Review::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'message' => $request->message
        ]);

        Session::flash('alert-success', 'Votre avis a été ajouté au produit');

        return redirect()->back();
    }

    /*protected function checkGuard()
    {
        if (Auth::guard('blogger')->check()) {
            $this->guard_name = 'blogger';
            $this->guard_type = 'App\Blogger';
        } elseif (Auth::check()) {
            $this->guard_name = 'web';
            $this->guard_type = 'App\User';
        }

        return $this->guard_name;
    }*/
}

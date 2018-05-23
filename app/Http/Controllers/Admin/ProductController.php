<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Notifications\NewProductAdded;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();

        return view('admin.products.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        $logo_url = '';

        if ($request->file('image_file')) {
            $logo_url = $request->file('image_file')->store('uploads/products', 'public');
        }

        $product = Product::create([
            'name' => $request->name,
            'image' => $logo_url,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);

        $subscribers = $product->brand->favorite_brands;

        foreach ($subscribers as $subscriber) {
            $subscriber->brand_favoritable->notify(new NewProductAdded($product));
        }

        return redirect()->route('admin.products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= Product::findOrFail($id);
        $brands = Brand::all();

        return view('admin.products.show', compact('product', 'brands'));
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
        $this->validate($request, [

        ]);
        $product = Product::findOrFail($id);

        $logo_url = '';

        if ($request->file('image_file')) {
            $logo_url = $request->file('image_file')->store('uploads/products', 'public');
        }

        $product->name = $request->name;
        $product->description = $request->description;

        if ($logo_url) {
            $product->image = $logo_url;
        }

        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->price = $request->brand_id;

        $product->save();

        Session::flash('message', 'product moodifé avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        Session::flash('message', 'Product supprimé avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.products.index');
    }
}

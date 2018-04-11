<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Product;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();

        return view('admin.stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stores.create');
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

        // 'name', 'address', 'description', 'website', 'longitude', 'latitude', 'zip_code', 'state', 'city'

        Store::create($request->all());

        Session::flash('message', 'Boutique ajoutée avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.stores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands = Brand::all();
        $products = Product::all();
        $store = Store::findOrFail($id);

        return view('admin.stores.show', compact('store', 'brands', 'products'));
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

        $store = Store::findOrFail($id);

        $store->fill($request->all());

        $store->brands()->sync($request->brand_ids);
        $store->products()->sync($request->product_ids);

        Session::flash('message', 'Boutique modifiée avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::findOrFail($id);

        $store->delete();

        Session::flash('message', 'Boutique supprimée avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.stores.index');
    }
}

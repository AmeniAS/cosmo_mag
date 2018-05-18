<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.brands.create', compact('categories'));
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

        $logo_url = $request->file('logo')->store('uploads/brands', 'public');

        Brand::create([
            'name' => $request->name,
            'logo' => $logo_url,
            'description' => $request->description,
            'website' => $request->website,
            'category_id' => $request->category_id,
        ]);

        Session::flash('message', 'Marque ajoutée avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();

        $brand = Brand::findOrFail($id);

        return view('admin.brands.show', compact('brand', 'categories'));
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

        $brand = Brand::findOrFail($id);

        if ($request->file('logo')) {
            $logo_url = $request->file('logo')->store('uploads/brands', 'public');
            $brand->logo = $logo_url;
        }

        if ($request->name) {
            $brand->name = $request->name;
        }

        if ($request->website) {
            $brand->website = $request->website;
        }

        if ($request->category_id) {
            $brand->category_id = $request->category_id;
        }

        if ($request->description) {
            $brand->description = $request->description;
        }

        $brand->save();

        Session::flash('message', 'Marque moodifée avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.brands.show', $brand->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        $brand->delete();

        Session::flash('message', 'Marque supprimée avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.brands.index');
    }
}
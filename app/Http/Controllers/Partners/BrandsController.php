<?php

namespace App\Http\Controllers\Partners;

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
        $brands = auth()->guard('partenaire')->user()->brands;

        return view('partners_admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('partners_admin.brands.create', compact('categories'));
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
            'name' => 'required',
            'website' => 'required',
            'category_id' => 'required',
            'logo' => 'required',
            'description' => 'required',
        ]);

        $logo_url = 'storage/' . $request->file('logo')->store('uploads/brands', 'public');

        Brand::create([
            'name' => $request->name,
            'logo' => $logo_url,
            'description' => $request->description,
            'website' => $request->website,
            'category_id' => $request->category_id,
        ]);

        Session::flash('alert-success', 'Marque ajoutée avec succès');

        return redirect()->route('partners_admin.brands.index');
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

        return view('partners_admin.brands.show', compact('brand', 'categories'));
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
            'name' => 'required',
            'website' => 'required',
            'category_id' => 'required',
            'description' => 'required',
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

        Session::flash('alert-info', 'Marque moodifée avec succès');

        return redirect()->route('partners_admin.brands.show', $brand->id);
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

        Session::flash('alert-danger', 'Marque supprimée avec succès');

        return redirect()->route('partners_admin.brands.index');
    }
}

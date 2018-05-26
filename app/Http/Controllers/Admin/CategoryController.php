<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create', compact('categories'));
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
            'image' => 'required',
            'description' => 'required',
        ]);

        if ($request->file('image')) {
            $logo_url = 'storage/' . $request->file('image')->store('uploads/categories', 'public');
        }

        Category::create ([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $logo_url,

        ]);

        Session::flash('alert-success', 'Categorie ajoutée avec succès');

        return redirect()->route('admin.categories.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category= Category::findOrFail($id);

        return view('admin.categories.show', compact('category'));
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
            'description' => 'required',
        ]);

        $category = Category::findOrFail($id);

        if ($request->file('logo')) {
            $logo_url = 'storage/' .  $request->file('logo')->store('uploads/categories', 'public');
            $category->image = $logo_url;
        }

        if ($request->name) {
            $category->name = $request->name;
        }

        if ($request->description) {
            $category->description = $request->description;
        }

        $category->save();

        Session::flash('alert-info', 'Categorie modifiée!');

        return redirect()->route('admin.categories.show', $category->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        Session::flash('alert-danger', 'Categorie supprimée avec succès');

        return redirect()->route('admin.categories.index');
    }
}

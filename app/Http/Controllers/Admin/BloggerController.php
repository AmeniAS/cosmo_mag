<?php

namespace App\Http\Controllers\Admin;

use App\Blogger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloggers = Blogger::all();

        return view('admin.bloggers.index', compact('bloggers'));
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
        $blogger = Blogger::findOrFail($id);

        return view('admin.bloggers.show', compact('blogger'));
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
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);
        $blogger = Blogger::findOrFail($id);

        $blogger->name = $request->name;
        $blogger->email = $request->email;
        $blogger->address = $request->address;
        $blogger->phone = $request->phone;

        $blogger->facebook = $request->facebook;
        $blogger->instagram = $request->instagram;
        $blogger->youtube = $request->youtube;

        $blogger->save();

        Session::flash('alert-info', 'Blogueuse moodifée avec succès');

        return redirect()->route('admin.bloggers.show', $blogger->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogger = Blogger::findOrFail($id);

        $blogger->delete();

        Session::flash('alert-danger', 'Blogueuse supprimée avec succès');

        return redirect()->route('admin.bloggers.index');
    }
}

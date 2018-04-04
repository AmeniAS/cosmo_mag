<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partner::all();

        return view('admin.partenaires.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();

        return view('admin.partenaires.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation du formulaire
        $this->validate($request, [

        ]);

        // récupérer une instance de l'user connecté
        //$user = $request->user();

        $partner = Partner::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'website' => $request->website
        ]);

        $partner->brands()->sync([$request->brand_id]);

        Session::flash('message', 'Partenaire ajouté');

        return redirect()->route('admin.partenaires.index');
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
        $partenaire = Partner::findOrFail($id);
        $partner_brands = $partenaire->brands->pluck('id')->all();

        return view('admin.partenaires.show', compact('partenaire', 'brands', 'partner_brands'));
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
        $partenaire = Partner::findOrFail($id);

        $partenaire->email = $request->email;
        $partenaire->website = $request->website;

        $partenaire->brands()->sync([$request->brand_id]);

        $partenaire->save();

        Session::flash('message', 'Partenaire moodifé avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.partenaires.show', $partenaire->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partenaire = Partner::findOrFail($id);

        $partenaire->delete();

        Session::flash('message', 'Partenaire supprimé avec succès');
        Session::flash('alert_type', 'success');

        return redirect()->route('admin.partenaires.index');
    }
}

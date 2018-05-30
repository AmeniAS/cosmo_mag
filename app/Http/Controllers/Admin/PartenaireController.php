<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Mail\PartnerCreated;
use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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
            'website' => 'required',
            'email' => 'required',
            'brand_id' => 'required',
        ]);

        // récupérer une instance de l'user connecté
        //$user = $request->user();

        $partner = new Partner();
        $partner->website = $request->website;
        $partner->email = $request->email;
        $partner->password = str_random(6);

        Mail::to($partner->email)
            ->send(new PartnerCreated($partner));

        $partner->password = bcrypt($partner->password);

        $partner->save();

        /*$partner = Partner::create([
            'email' => $request->email,
            'password' => bcrypt(123456),
            'website' => $request->website
        ]);*/

        $partner->brands()->sync([$request->brand_id]);
        Session::flash('alert-success', 'Partenaire ajouté avec succès');

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
            'website' => 'required',
            'email' => 'required',
            'brand_id' => 'required',
        ]);
        $partenaire = Partner::findOrFail($id);

        $partenaire->email = $request->email;
        $partenaire->website = $request->website;

        $partenaire->brands()->sync([$request->brand_id]);

        $partenaire->save();

        Session::flash('alert-info', 'Partenaire moodifé avec succès');

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

        Session::flash('alert-danger', 'Partenaire supprimé avec succès');

        return redirect()->route('admin.partenaires.index');
    }
}

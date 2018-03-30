<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.partenaires.create');

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

        Partner::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        Session::flash('message', 'Partenaire ajouté');

        return redirect()->route('partenaires.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partenaire = Partner::findOrFail($id);

        return view('admin.partenaires.show', compact('partenaire'));
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

        $partenaire->name = $request->name;
        $partenaire->email = $request->email;

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

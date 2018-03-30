<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Spécifier le "gaurd" pour la restriction
        $this->middleware('auth:partenaire');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partenaire');
    }
}
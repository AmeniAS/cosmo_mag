<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    public function index()
    {
        return view('layouts.admin');
    }

    public function commandes()
    {
        $commandes = Cart::all();
        //dd($commandes);
        return view('admin.vente.commandes', compact('commandes'));
    }
}

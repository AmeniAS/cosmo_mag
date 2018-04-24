<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;
use DrewM\MailChimp\MailChimp;


class HomeController extends Controller
{
    protected $newsletter;

    /**
     * Create a new controller instance.
     *
     * @param Newsletter $newsletter
     */
    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function subscribeNewsletter(Request $request)
    {
        if ( ! ($this->newsletter->isSubscribed($request->email)) ) {
            $this->newsletter->subscribe($request->email);
        }

        return redirect()->back();
    }

    public function sendCampaign(Request $request)
    {
        $this->newsletter->createCampaign(
            'MkConsult',
            'reply_to',
            'subject',
            'html'
        );

        return redirect()->back();
    }

    public function homePage()
    {
        return view('front_views.home');
    }
}

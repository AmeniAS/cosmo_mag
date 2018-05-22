<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

    public function contact()
    {
        $page_title = 'Contact';
        return view('front_views.contact', compact('page_title'));
    }

    public function sendMsg(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Message::create($request->all());

        Session::flash('alert-success', 'Message envoyé avec succès');

        return redirect()->back();

    }

    public function yourAccount()
    {
        return view('front_views.your_account');
    }
}

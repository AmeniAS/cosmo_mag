<?php

namespace App\Http\Controllers\AuthBlogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:blogger')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth_blogger.login');
    }

    public function login(Request $request)
    {
        // Validate form
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Set credentials
        $credentitals = [
            'email' => $request->email,
            'password' => $request->password // Do not hash password
        ];

        $remember = $request->remember ? true : false;

        // Attempt to log Blogger in
        // Specify the guard
        if (Auth::guard('blogger')->attempt($credentitals, $remember)) {

            // If successful, redirect to their intended location
            return redirect()->intended(route('bloggers.profile'));
            // Redirect where they were trying to visit
            // If null, redirect to route('bloggers.home')

        }

        // If unseccessful, redirect back to login form with data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}

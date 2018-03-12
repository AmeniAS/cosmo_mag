<?php

namespace App\Http\Controllers\AuthBlogger;

use App\Blogger;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth_blogger.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $blogger = Blogger::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'birthdate' => $request->birthdate,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $request->image,
            'points' => 0,
            'facebook' => 'facebook',
            'youtube' => 'youtube',
            'instagram' => 'instagram',
        ]);

        Auth::guard('blogger')->login($blogger);

        return redirect()->route('bloggers.home');
    }
}

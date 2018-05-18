<?php

namespace App\Http\Controllers\Auth;

use App\Http\Repositories\StaticHelpers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/members/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthdate' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'image' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data, $img)
    {
        $referer = StaticHelpers::findRefereeByCode($data);

        $code = $referer ? $referer->code : null;
        if ($code) {
            $type = ($referer instanceof User) ? 'user' : 'blogger';
        } else {
            $type = null;
        }


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'birthdate' => $data['birthdate'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'image' => $img,

            'code' => str_random(10),

            'referer_code' => $code,
            'referer_type' => $type,

            'points' => 0,
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $img = $request->file('image')->store('uploads/users', 'public');

        event(new Registered($user = $this->create($request->all(), $img)));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
}

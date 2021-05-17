<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function register(Request $request)
    {
        $emailExists = User::where('email', strtolower($request->email) )->first();
        if ($emailExists) {
            $response['message'] = 'Email is already taken.';
            $response['status'] = 'fail';
            return response()->json($response);
        }
        $user_role = ($request['user'] == 'admin' ? 1:3);

        if($request['user'] == 'admin'){
            $this->redirectTo = '/adminposts';
        }

        $member = User::create([
            'user_type' => $user_role,
            'name' => $request['name'],
            'password' => Hash::make($request['password']),
            'email' => strtolower($request['email']) ,
            'city' => $request['city'],
            'country' => $request['country'],
            'phone' => $request['phone'],
            'isActive' => 1,
            'user_image' => 'avatar.jpeg',
        ]);

        event(new Registered($member));
        $this->guard()->login($member);
//        dd($this->redirectTo);
        return $this->registered($request, $member)
            ?: redirect($this->redirectPath());
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

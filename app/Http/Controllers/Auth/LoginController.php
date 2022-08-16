<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        return '/';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function credentials(Request $request)
    // {
    //   if(is_numeric($request->get('email'))){
    //     return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
    //   }
    //   elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
    //     return ['email' => $request->get('email'), 'password'=>$request->get('password')];
    //   }
    //   return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
    // }

    // public function login(Request $request)
    // {
    //     $inputVal = $request->all();

    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))) {
    //         if (auth()->user()->role == 1) {
    //             return redirect()->route('admin_dashboard');
    //         } else {
    //             return redirect()->route('home');
    //         }
    //     } else {
    //         return redirect()->route('login')
    //             ->with('error', 'Email & Password are incorrect.');
    //     }
    // }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Log;
use App\Mail\WelcomeBackMail;

use App\Models\User;


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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function welcomeBackMail(){
        $user = User::where('id',Auth::user()->id)->first();
        Mail::to($user->email)->send(new WelcomeBackMail($user->name));
        return $this;

     }
    protected function redirectTo()
    {
        // $this->welcomeBackMail();
        if (Auth::check() && Auth::user()->role === '1') {
            return RouteServiceProvider::ADMIN_HOME;

        } elseif (Auth::check() && Auth::user()->role === '2' && Auth::user()->seller_type === 1 ) {
            return RouteServiceProvider::SELLER_HOME;

        }elseif (Auth::check() && Auth::user()->role === '2' && Auth::user()->seller_type === 2 ) {
            return RouteServiceProvider::SELLER_HOME;

        } elseif (Auth::check() && Auth::user()->role === '2' && Auth::user()->seller_type === 3 ) {
            return RouteServiceProvider::SERVICES_HOME;
            
        } elseif (Auth::check() && Auth::user()->role === '2' && Auth::user()->seller_type === 4 ) {
            return RouteServiceProvider::SERVICES_HOME;

        } elseif (Auth::check() && Auth::user()->role === '0' && Auth::user()->seller_type === 0 ) {
        return RouteServiceProvider::HOME;
        }
        else{
            return RouteServiceProvider::HOME;
        }
    
       
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


}

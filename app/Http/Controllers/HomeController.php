<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Verifytoken;
use App\Models\AfgCity;
use App\Mail\WelcomeMail;
use App\Mail\WelcomeBackMail;
use Log;
use Auth;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function welcomeBackMail(){
        $user = User::find(Auth::id())->first();;
        Mail::to($user->email)->send(new WelcomeBackMail($user->name));
        return $this;

     }
    public function index()
    {



        $get_user = User::where('email', auth()->user()->email)->first();
        $user = User::find(Auth::id());
        $afg_cities = AfgCity::get();


        if($get_user->is_activated == 1 && $get_user->role == 0){
        return view('user-module.user-dashboard', compact('user','afg_cities'));

        }elseif($get_user->is_activated == 1 && $get_user->role == 2){
            return view('seller-module.seller-dashboard', compact('user','afg_cities'));
        }else{
            return redirect('/verify-account');
        }
    }

    public function verifyaccount()
    {
        return view('2fa');
    }

    public function useractivation(Request $request)
    {
        $get_token = $request->token;

        $get_token = Verifytoken::where('token', $get_token)->first();

        if($get_token){
            $get_token->is_activated =1;
            $get_token->save();
            $user = User::where('email', $get_token->email)->first();
            $user->is_activated = 1;
            $user->save();
            $getting_token = Verifytoken::where('email', $get_token->email);
            $getting_token->delete();
            return redirect('/home')->with('activated','your account has been activated successfully!');
        }else{
            return redirect('/verify-account')->with('incorect','your OTP is invalid please check your email');

        }

        return view('2fa');
    }

    public function resend(){
        $validToken = rand(10,100..'2022');
        Log::info("valid token is".$validToken);
        $get_token = new Verifytoken();
        $get_token->token =  $validToken;
        $get_token->email =  auth()->user()->email;
        $get_token->save();
        $get_user_email = auth()->user()->email;
        $get_user_name = auth()->user()->name;
        Mail::to($get_user_email)->send(new WelcomeMail($get_user_email,$validToken,$get_user_name));

        return back()->with('activated', 'OTP sent again');

    }
}

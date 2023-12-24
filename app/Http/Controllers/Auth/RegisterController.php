<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Verifytoken;
use App\Mail\WelcomeMail;
use App\Models\Subscriber;
use App\Models\TearmAndCondation;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Log;
use Auth;
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
    protected $redirectTo = RouteServiceProvider::HOME;



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
        $tearms = TearmAndCondation::where('tearm_on', 'register')->orderBy('updated_at', 'desc')->take(1)->get();
        return view('auth.register', compact('tearms'));
    }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data, )
    {

        // dd($data);
        return Validator::make($data, [  
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']         
        ]);
       
    }



    protected function  varication(array $data){

        $validToken = rand(10,100..'2022');
        Log::info("valid token is".$validToken);
        $get_token = new Verifytoken();
        $get_token->token =  $validToken;
        $get_token->email =  $data['email'];
        $get_token->save();
        $get_user_email = $data['email'];
        $get_user_name = $data['name'];
        Mail::to($data['email'])->send(new WelcomeMail($get_user_email,$validToken,$get_user_name));

        return $this;
        
    }

    protected function create(array $data)
    {
      

        // dd($data);
        if(isset($data['subscription'])){
            Subscriber::create([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);
            $create =  User::create([
                'name' => $data['name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            $this->varication($data);

        }else{

            $create =  User::create([
                'name' => $data['name'],
                'role' => $data['role'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            $this->varication($data);

        }

        return $create;
        
     }


}

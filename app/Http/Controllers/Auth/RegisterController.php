<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Subscriber;
use App\Models\TearmAndCondation;
use Illuminate\Foundation\Auth\RegistersUsers;
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

        return Validator::make($data, [  
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']         
        ]);
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

 

    

    protected function create(array $data)
    {
      

        if(isset($data['subscription'])){
            Subscriber::create([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);
            $create =  User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }else{
            $create =  User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

        }

        return $create;
        
     }

    //  public function registerSeller(Request $request)
    //  {
 
    //  //    dd($request->all());
    //      $validatedData = $request->validate([
    //          'name' => 'required',
    //          'email' => 'required|email|unique:users',
    //          'password' => 'required|min:8',
    //      ]);
 
    //      $user = User::create([
    //          'name' => $validatedData['name'],
    //          'email' => $validatedData['email'],
    //          'password' => Hash::make($validatedData['password']),
    //      ]);
 
    //      // Optionally, redirect to another page after successful registration
    //      return redirect('/user/seller/dashboard')->with('success', 'Registration successful!'); // Replace '/dashboard' with the actual URL
    //  }
 


}

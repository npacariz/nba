<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\VerificationEmail;



class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    
    }
    
    public function create()
    {
        return view('user.create');
    }

    public function store()
    {
         

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([

            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'token' => str_random(40)
        ]);       
            
        \Mail::to($user->email)->send(new VerificationEmail($user));

        return redirect('/login')->with('message', 'Visit email to confirm account');
    }


    public function verify(User $user, $token)
    {
       
        if($token === $user->token) {
            $user->update([
                'is_verified' => 1,
                'token' => null
            ]);
         
          return redirect('/login')->with('message', 'Account is confirmed');
        }else if($user->is_verified) {

            return redirect('/login')->with('message', 'This account has already been confirmed');
            
        }
     
        return redirect('/login')->with('message', 'Visit email to confirm account');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }
    public function create()
    {
        return view('user.login');
    }

    public function store()
    {
     
    
        $this->validate( request(),[
            'email' => 'required',
            'password' => 'required'
        ]);
           

        $credentials = request()->only(['email', 'password']);
    
        if(!auth()->attempt($credentials))
        {
            return redirect()->back()->withErrors([
                'message' => 'Bad credentials. Please try again!',
            ]);
        }
        if (!auth()->user()->is_verified) {
            auth()->logout();
            return back()->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        } 
      
        return redirect('/');
    }


    public function destroy()
    {
        Auth()->logout();

        return redirect('/login');
    }
}

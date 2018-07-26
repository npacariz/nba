<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
        $this->middleware('verifyUser')->only('store');
        
    }
    public function create()
    {
        return view('user.login');
    }

    public function store()
    {
     
        $credentials = request()->only(['email', 'password']);
    
        if(!auth()->attempt($credentials))
        {
            return redirect()->back()->withErrors([
                'message' => 'Bad credentials. Please try again!',
            ]);
        }
       
      
        return redirect('/');
    }


    public function destroy()
    {
        Auth()->logout();

        return redirect('/login');
    }
}

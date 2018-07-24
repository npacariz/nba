<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('user.login');
    }

    public function store()
    {
        $this->validate(request(),[
            'email' => 'required',
            'password' => 'required'
        ]);
           

        $credentials = request()->only(['email', 'password']);

        if(!auth()->attempt($credentials))
        {
            return redirect()->back()->withErrors([
                'message' => 'Bad credentials. Please try again!'
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

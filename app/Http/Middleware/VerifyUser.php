<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Closure;
use App\User;

class VerifyUser extends Controller

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
             
       $this->validate( request(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->get('is_verified');
       dd($user);
        if (!$user->is_verified) {
            return redirect('/login')->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }

        return $next($request);
    }
}

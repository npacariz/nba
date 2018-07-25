<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use App\User;

class IsUserVerifyMiddleware

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
        
        $user = User::where('email', $request->email)->first();
       
        if (!$user['is_verified']) {
            return redirect('/login')->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }

        return $next($request);
    }
}

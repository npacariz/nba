<?php

namespace App\Http\Middleware;

use Closure;

class CheckComments
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
        $comments = strtolower(request('content'));
    
        if(preg_match('/\b(hate)\b|\b(idiot)\b|\b(stupid)\b/', $comments)){
            return redirect('/forbidden');
        }
        return $next($request);
    }
}

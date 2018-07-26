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
        $comments = explode(" ",$comments);
        $words = ['hate', 'idiot', 'stupid'];
        
        foreach($words as $word){
            if(in_array($word, $comments)) {
                return redirect('/forbidden');
            }
        }
       
        return $next($request);
    }
}

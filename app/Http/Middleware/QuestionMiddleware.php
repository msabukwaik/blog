<?php

namespace App\Http\Middleware;

use Closure;

class QuestionMiddleware
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
    	if ($request->id <= 10)
	    {
	    	return redirect('/');
	    }

        return $next($request);
    }
}

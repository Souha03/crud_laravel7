<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Patient
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
        // if(Auth::user()->function == 4){
        // return $next($request);
        if(auth()->check() && Auth::user()->role == 4){
        return $next($request);
        
        
        }
        return redirect('login')->with('error',"Tu n'as pas accès à cette page.");
    }
 }
<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

use Closure;
// use Auth;

class Medecin
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
        // if(Auth::user()->function == 2){
        // return $next($request);
        if(auth()->check() && Auth::user()->role == 2){
            return $next($request);
        
        
        }
        return redirect('medecin/login')->with('error',"Tu n'as pas accès à cette page.");
    }
 }
<?php
  
namespace App\Http\Middleware;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Closure;
   
class Admin
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
        if(auth()->check() && Auth::user()->role == 1){
            return $next($request);
        }
   
        return redirect('admin/login')->with('error',"You don't have admin access.");
    }
}
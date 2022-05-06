<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ;
    // = RouteServiceProvider::HOME;
      
    public function redirectTo(){

        switch (Auth::user()->role) {
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/medecin' ;
                return $this->redirectTo;
                break ;

            case 3:
                $this->redirectTo = '/assistantes' ;
                return $this->redirectTo;
                break ;  
                
            case 4:
                $this->redirectTo = '/patients' ;
                return $this->redirectTo;
                break ;     

            default:
                $this->redirectTo = '/login' ;
                return $this->redirectTo;
                
        }
        // $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('home');
        // }

        // return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

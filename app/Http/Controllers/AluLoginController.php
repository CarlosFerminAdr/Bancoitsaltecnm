<?php

namespace App\Http\Controllers;
/*
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
*/
class AluLoginController extends Controller
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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

    /**
     * Actualiza last_login al iniciar session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\User $user
     */
    /*
    public function authenticated(Request $request, $user){
        $user-> created_at = now();
        $user->save();
    }

    public function username()
    {
        return 'ncontrol';
    }
    */
}

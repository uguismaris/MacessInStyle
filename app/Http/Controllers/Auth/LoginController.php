<?php

namespace MacessInStyle\Http\Controllers\Auth;

use MacessInStyle\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function login(Request $request)
    {
        /*$field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$field => $request->input('login')]);

        if ($this->auth->attempt($request->only($field, 'password')))
        {
            return redirect('/');
        }

        return redirect('/login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);*/
        $username = $request->email;
        $password = $request->password; //the input field has name='username' in form

        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            //user sent their email 
            Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            //they sent their username instead 
            Auth::attempt(['username' => $username, 'password' => $password]);
        }

        //was any of those correct ?
        if ( Auth::check() ) {
            echo $username." ".$password;
            //send them where they are going 
            return redirect()->intended('/home');
        }

        //Nope, something wrong during authentication 
        return redirect()->back()->withErrors([
            'credentials' => 'Please, check your credentials'
        ]);
    }

    public function username(){
        return 'username';  
    }
}

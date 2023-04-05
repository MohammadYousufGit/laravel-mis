<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    protected $redirectTo = 'admin/home';

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
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
     public function showLoginForm()
     {
         return view('admin.auth.login');
     }
 
     /**
      * Handle a login request to the application.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
      */
     public function login(Request $request)
     {
         $this->validateLogin($request);
 
       
 
         if ($this->attemptLogin($request)) {
             return $this->sendLoginResponse($request);
         }
 
         // If the login attempt was unsuccessful we will increment the number of attempts
         // to login and redirect the user back to the login form. Of course, when this
         // user surpasses their maximum number of attempts they will get locked out.
         $this->incrementLoginAttempts($request);
 
         return $this->sendFailedLoginResponse($request);
     }
 
 
 
 
     /**
      * Get the needed authorization credentials from the request.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return array
      */
     protected function credentials(Request $request)
     {
         return $request->only($this->username(), 'password');
     }
 
  
 


 
     /**
      * Get the login username to be used by the controller.
      *
      * @return string
      */
     public function username()
     {
         return 'user_name';
     }
 
     /**
      * Log the user out of the application.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function logout(Request $request)
     {
         $this->guard()->logout();
 
         $request->session()->invalidate();
 
         return redirect('/admin/login');
     }
 
     /**
      * Get the guard to be used during authentication.
      *
      * @return \Illuminate\Contracts\Auth\StatefulGuard
      */
     protected function guard()
     {
         return Auth::guard('admin');
     }
}

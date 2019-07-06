<?php

namespace App\Http\Controllers\AuthBimbel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:bimbel')->except('logout');
    }

    public function showLoginForm(){
        return view('auth_bimbel.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => '2'
        ];

        if (Auth::guard('bimbel')->attempt($credential, $request->remember)){

            /*if (Auth::user()->status == '0' && Auth::user()->status == '1'){
                return redirect()->back()->withInput($request->only('email', 'remember'))->with('reg', 'Silahkan Menunggu Dikonfirmasi Oleh Developers');
            }*/
            return redirect()->intended(route('dashboard.bimbel'));

        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('bimbel')->logout();
        return redirect('/');
    }
}

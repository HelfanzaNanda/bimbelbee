<?php

namespace App\Http\Controllers\AuthBimbel;

use App\Http\Controllers\Controller;
use App\UserBimbel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:bimbel');
    }

    public function showRegisterForm(){
        return view('auth_bimbel.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*protected function create(array $data)
    {
        return UserBimbel::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }*/


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:user_bimbels',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $avatar = $request->file('avatar');
        $name = time().'.'.$avatar->getClientOriginalExtension();
        $path = public_path('/uploads/user bimbel');
        $avatar->move($path, $name);

        $ubimbel = new UserBimbel();
        $ubimbel->name = $request->name;
        $ubimbel->email = $request->email;
        $ubimbel->password = bcrypt($request->password);
        $ubimbel->avatar = $name;
        $ubimbel->status = '1';
        $ubimbel->deleted_at = '1';
        $ubimbel->save();
        /*auth()->login($ubimbel);*/
        return redirect()->route('bimbel.login')->with('reg', 'Silahkan Menunggu Dikonfirmasi Oleh Developers');
    }
}

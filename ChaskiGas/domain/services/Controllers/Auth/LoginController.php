<?php

namespace ChaskiGas\Http\Controllers\Auth;

use ChaskiGas\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only'=>'showLoginForm']);
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login()
    {
        $credentials =$this->validate(request(),[
            'email' =>'email|required|string',
            'password'=>'required|string'

        ]);
        
        if(Auth::attempt($credentials))
        {
            return redirect()->route('index');
        }
        return back()
        ->withErrors(['email'=>trans('auth.failed')])
        ->withInput(request(['email']));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

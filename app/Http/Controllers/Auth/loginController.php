<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    // 
    public function index(){
        return view('pages.auth.login');
    }

    public function store(Request $request){

        // validate
        $this->validate($request, [
            'email'=>'required|email|max:50',
             'password'=>'required'
        ]);

        // authenticate
        if (!auth()->attempt($request->only('email','password'))){
            return back()->with('status', 'invalid login details');
        }

        // redirect
        return redirect()->route('dashboard')->with('login', 'Congratulations! You are registered and logged in successfully');


    }
}

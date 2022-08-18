<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest');   
    }

    public function index()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request){

        // validation
         $this->validate($request, [
             'email'=>'required|email|max:255',
             'password'=>'required|confirmed',
             'firstName'=>'required|max:255',
             'lastName'=>'required|max:255',
             'churchBranch'=>'required'
         ]);    

        // store
        try{
        User::create([ 
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'churchBranch'=>$request->churchBranch,
        ]);
        }
        catch(Exception $e){
            return back()->with('status', 'Email already used! Use another one');
        }

        // sign
        // redirect
        return redirect()->route('login')->with('status', 'Already registered! now login');

        }
}

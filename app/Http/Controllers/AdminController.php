<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index(){
        return view('pages.auth.admin_login');
    }
    public function store(Request $request){

        $check = $request->all();

        if(Auth::guard('admin')->attempt(['email'=>$check['email'], 'password' => $check['password']])){
            return redirect()->route('admin_dashboard');
        }

        else{
            return back()->with('status', 'invalid details');
        }
    }

    public function dashboard(){
    
        $users = User::get();
        return view('admin_dashboard', [
            'users' => $users
        ]);
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect()->route('admin_login')->with('status', 'Logout sucess! Welcome again');
    }

    public function register(){
        return view('pages.auth.admin_register');
    }

    public function admin_register(Request $request){
        // validate
        $this->validate($request, [
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',
            'firstName'=>'required|max:255',
            'lastName'=>'required|max:255'
        ]);

        // store
        Admin::create([
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
        ]);

        // redirect
        return redirect()->route('admin_login')->with('status', 'Administrator Registered! Now login!');
    }
}

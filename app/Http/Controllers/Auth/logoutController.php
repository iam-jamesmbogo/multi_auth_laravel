<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    public function store(Request $request){
        // to actually logout
        //Auth::logout();
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        // $request->session()->regenerateToken;

        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (Request $request){
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);
        if(Auth::attempt($request->only('email', 'password'), $request->remember)){
            if(Auth::user()->role == 'user') return redirect('/user');
            return redirect('dashboard');
        }
        return back()->with('failed', 'Password atau email salah');
    }

    public function register (Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|max:50|min:8', 
            'confirm_password' => 'required|max:50|min:8|same:password', 
        ]);

        $request['status'] = "verify";
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('/user');
    }

    public function logout(){
        Auth::logout(Auth::user());
        return redirect('/login');
    }
}

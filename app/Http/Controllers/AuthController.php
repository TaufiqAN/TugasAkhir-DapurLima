<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login (Request $request){
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
        ]);

        if(Auth::attempt($request->only('email', 'password'), $request->remember)){
            $user = Auth::user();
            
            if ($user->role == 'admin') {
                return redirect()->route('dashboard'); 
            } elseif ($user->role == 'user') {
                return redirect()->route('/');
            }
        }
        return back()->with('failed', 'Password atau email salah');
    }

    public function register (Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|max:50|min:8', 
            'confirm_password' => 'required|max:50|min:8|same:password', 
        ]);

        $request['status'] = "active";
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('/')->with('success', 'Kini kamu bisa menyimpan resep-resep lezat favoritmu!');
    }

    public function google_redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function google_callback(){ 
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::whereEmail($googleUser->email)->first();
        if (!$user){
            $user = User::create([
                'name' => $googleUser->name, 
                'email' => $googleUser->email, 
                'password' => Hash::make(Str::random(24)),
                'status' => 'active']);
        }
        if ($user->status == 'banned'){
            return redirect('/login')->with('failed, Akun anda telah dibanned');
        }

        Auth::login($user);
        return redirect('/');
    }

    public function logout(){
        Auth::logout(Auth::user());
        return redirect('/login');
    }
}

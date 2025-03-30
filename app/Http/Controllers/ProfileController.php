<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $savedResep = $user->saves()->latest()->take(2)->get(); 
        return view('profile.show', compact('user', 'savedResep'));
    }

    public function savedResep()
    {
        $user = Auth::user();
        $savedResep = Save::where('user_id', $user->id)->with('resep')->get();

        return view('profile.profile', compact('savedResep'));
    }
}  
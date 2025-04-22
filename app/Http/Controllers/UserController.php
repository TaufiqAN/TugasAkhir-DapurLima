<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('admin.users', compact('users'));
    }

    public function destroy(User $user)
    {
        if (Auth::id() === $user->id) {
            return back()->with('error', 'Tidak dapat menghapus akun sendiri😔');
        }

        $user->delete();

        return back()->with('success', 'User berhasil dihapus.');
    }
}

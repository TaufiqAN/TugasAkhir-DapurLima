<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    //
    public function saveResep($resepId)
    {
        $user = Auth::user();
        $existingSave = Save::where('user_id', $user->id)
                        ->where('resep_id', $resepId)
                        ->first();

        if ($existingSave) {
            $existingSave->delete(); // Jika sudah disimpan, hapus dari daftar save
            return response()->json(['status' => 'unsaved']);
        } else {
            Save::create([
            'user_id' => $user->id,
            'resep_id' => $resepId
        ]);
        return response()->json(['status' => 'saved']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'jumlahUser' => User::count(),
            'jumlahResep' => Resep::count(),
            'jumlahKategori' => Kategori::count(),
            'jumlahUlasan' => Review::count(),
            'resepTerbaru' => Resep::latest()->take(5)->get(),
            'reviews' => Review::latest()->with(['user', 'resep'])->take(3)->get(),

        ]);
    }
}

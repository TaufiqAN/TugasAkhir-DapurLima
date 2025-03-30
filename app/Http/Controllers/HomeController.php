<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $allKategori = Kategori::all();
        $allResep = Resep::latest()->take(4)->get();
        return view('welcome', compact('allKategori', 'allResep'));
    }
}

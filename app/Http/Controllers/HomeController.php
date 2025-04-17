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
        $allResep = Resep::latest()->take(6)->get();

        $resepPopuler = Resep::withCount('reviews')
            ->with('reviews')->get()
            ->sortByDesc(function ($resep) {
                return $resep->total_rating;
            })
            ->take(4);

        return view('welcome', compact('allKategori', 'allResep', 'resepPopuler'));
    }

    // public function populer()
    // {
    //     $resepPopuler = Resep::withCount('reviews')
    //         ->with('reviews')->get()
    //         ->sortByDesc(function ($resep) {
    //             return $resep->total_rating;
    //         })
    //         ->take(4);

    //     $allResep = Resep::latest()->get();

    //     return view('welcome', compact('resepPopuler', 'allResep'));
    // }
}

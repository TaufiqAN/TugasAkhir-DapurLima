<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use Illuminate\Http\Request;

class UserResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function all()
    {
        $allResep = Resep::latest()->paginate(10);
        return view('resep.semua', compact('allResep'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resep $resep)
    {
        $allResep = Resep::latest()->paginate(3);
        $resep->load('reviews.user'); 
        return view('makanan.detail', compact('resep', 'allResep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function kategori($slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $reseps = Resep::where('kategori_id', $kategori->id)->latest()->paginate(12);

        return view('resep.semua_kategori', compact('reseps', 'kategori'));
    }
}

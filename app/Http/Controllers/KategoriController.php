<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allKategori = Kategori::withCount('resep')->get();
        return view('kategori.index', compact('allKategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
        $validatedData = $request->validate([
            'nama_kategori' => 'required|max:50',
            'background_color' => 'required|string|max:7',
            'image' => 'required|image|mimes:png,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('kategori', 'public');
        }

        // Save data
        Kategori::create($validatedData);

        return redirect()->route('kategori.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
         // validasi
         $validatedData = $request->validate([
            'nama_kategori' => 'required|max:50',
            'background_color' => 'string|max:7',
            'image' => 'image|mimes:png,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($kategori->image) {
                Storage::disk('public')->delete($kategori->image);
            }

            $validatedData['image'] = $request->file('image')->store('kategori', 'public');
        }

        // update data
        $kategori->update($validatedData);

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'User berhasil dihapus.');

    }
}

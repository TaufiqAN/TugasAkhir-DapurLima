<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResepController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allResep = Resep::latest()->get();
        return view('resep.index', compact('allResep'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('resep.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validasi
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg',
        //     'nama_resep' => 'required|max:50',
        //     'deskripsi' => 'required|string',
        //     'kesulitan' => 'required|integer',
        //     'waktu' => 'required|integer',
        //     'porsi' => 'required|string',
        //     'bahan' => 'required|array',
        //     'cara_membuat' => 'required|array',
        //     'kategori_id' => 'required',
        // ]);

        $imagePath = $request->file('image')->store('recipes', 'public');

        Resep::create([
            'nama_resep' => $request->nama_resep,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,

            'waktu' => $request->waktu,
            'porsi' => $request->porsi,
            'kesulitan' => $request->kesulitan,
            'bahan' => json_encode($request->bahan),
            'cara_membuat' => json_encode($request->cara_membuat),
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('resep.index')->with('success', 'Resep berhasil disimpan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Resep $resep)
    {
        return view('resep.show', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resep $resep)
    {
        $kategori = Kategori::all();
        return view('resep.edit', compact('resep', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resep $resep)
    {
        // //  // validasi
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        //     'nama_resep' => 'required|max:250',
        //     'deskripsi' => 'required|string',
        //     'kesulitan' => 'required|integer',
        //     'waktu' => 'required|integer',
        //     'porsi' => 'required|string',
        //     'bahan' => 'required|array',
        //     'cara_membuat' => 'required|array',
        //     'kategori_id' => 'required',
        // ]);

        if ($request->hasFile('image')) {
            if ($resep->image) {
                Storage::delete('public/' . $resep->image);
            }
            
            $imagePath = $request->file('image')->store('images', 'public');
            $resep->image = $imagePath;
        }

    if ($request->has('tambah_bahan')) {
        $bahan = json_decode($resep->bahan, true) ?? []; 
        $bahan[] = ""; 
        $resep->bahan = json_encode($bahan);
        $resep->save();
        return redirect()->back();
    }

    if ($request->has('hapus_bahan')) {
        $bahan = json_decode($resep->bahan, true) ?? [];
        unset($bahan[$request->hapus_bahan]); 
        $resep->bahan = json_encode(array_values($bahan)); 
        $resep->save();
        return redirect()->back();
    }

    if ($request->has('tambah_cara')) {
        $cara = json_decode($resep->cara_membuat, true) ?? [];
        $cara[] = "";
        $resep->cara_membuat = json_encode($cara);
        $resep->save();
        return redirect()->back();
    }

    if ($request->has('hapus_cara')) {
        $cara = json_decode($resep->cara_membuat, true) ?? [];
        unset($cara[$request->hapus_cara]);
        $resep->cara_membuat = json_encode(array_values($cara));
        $resep->save();
        return redirect()->back();
    }

    $resep->update([
        'nama_resep' => $request->nama_resep,
        'deskripsi' => $request->deskripsi,
        'waktu' => $request->waktu,
        'porsi' => $request->porsi,
        'kesulitan' => $request->kesulitan,
        'kategori_id' => $request->kategori_id,
        'bahan' => json_encode($request->bahan),
        'cara_membuat' => json_encode($request->cara_membuat),
    ]);

    return redirect()->route('resep.index')->with('success', 'Resep berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resep $resep)
    {
        $resep->delete();
        return redirect()->route('resep.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->query('q');
        $resep = Resep::where('nama_resep', 'like', '%' . $keyword . '%')->get(); 

        return view('resep.search', compact('resep', 'keyword')); 
    }
}

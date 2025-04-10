<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Resep $resep) 
    {
        $request->validate([
            'resep_id' => 'required|exists:reseps,id',
            'ulasan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::create([
            'resep_id' => $request->resep_id,
            'user_id' => Auth::id(),
            'ulasan' => $request->ulasan,
            'rating' => $request->rating,
        ]);
        
        return response()->json($review->load('user'));
    }

    public function index($resep_id)
    {
        $reviews = Review::where('resep_id', $resep_id)->with('user')->latest()->get();
        return response()->json($reviews);
    }
    
}

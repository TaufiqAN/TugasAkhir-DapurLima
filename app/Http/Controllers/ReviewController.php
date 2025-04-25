<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function daftar()
    {
        $reviews = Review::with(['user', 'resep'])
            ->latest()
            ->paginate(10);

        return view('admin.reviews', compact('reviews'));
    }

    public function destroy(Review $review)
    {
        $user =Auth::user();

        if ($user->role === 'admin') {
            $review->delete();
            return redirect()->back()->with('success', 'Ulasan berhasil dihapus oleh admin.');
        }
    
        // Kalau bukan admin, hanya boleh hapus ulasan miliknya sendiri
        if ($review->user_id === $user->id) {
            $review->delete();
            return redirect()->back()->with('success', 'Ulasan kamu berhasil dihapus.');
        }

        $review->delete();

        return back()->with('success', 'Ulasan berhasil dihapus.');
    }


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


    public function ReviewLike(Review $review)
    {
        $user = Auth::user();

        if ($review->LikedBy($user)) {
            $user->likeReview()->detach($review->id);
            $liked = false;
        } else {
            $user->likeReview()->attach($review->id);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked,
            'count' => $review->likes()->count(),
        ]);
    }
    
}

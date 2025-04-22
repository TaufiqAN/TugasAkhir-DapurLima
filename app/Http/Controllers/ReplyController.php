<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'review_id' => 'required|exists:reviews,id',
            'content' => 'required|string|min:3',
        ]);

        $reply = Reply::create([
            'review_id' => $request->review_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        $reply->load('user');

        return response()->json([
            'id' => $reply->id,
            'content' => $reply->content,
            'created_at' => $reply->created_at->toDateTimeString(),
            'user' => [
                'id' => $reply->user->id,
                'name' => $reply->user->name,
            ]
        ]);
    }

    public function loadReply($reviewId)
    {
        $reply = Reply::where('review_id', $reviewId)->with('user')->get();
        return response()->json($reply);
    }
}

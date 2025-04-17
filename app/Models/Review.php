<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'user_id', 
        'resep_id', 
        'rating', 
        'ulasan'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function resep() 
    {
        return $this->belongsTo(Resep::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    // Review Like //
    public function likes()
    {
        return $this->hasMany(ReviewLike::class);
    }
    
    public function LikedBy($user)
    {
        return $this->likes()->where('user_id', $user->id)->exists();
    }
    
}

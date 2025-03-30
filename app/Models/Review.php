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
}

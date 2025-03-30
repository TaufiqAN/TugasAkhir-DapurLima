<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resep extends Model
{
    //
    protected $fillable = [
        'image',	
        'nama_resep',
        'deskripsi',
        'kesulitan',
        'waktu',
        'porsi',
        'bahan',
        'cara_membuat',
        'kategori_id'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsto(Kategori::class,'kategori_id');
    }

    public function user()
    {
        return $this->hasMany(Save::class, 'resep_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}


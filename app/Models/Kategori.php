<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    //
    protected $fillable = [
        'nama_kategori',
        'slug',
        'background_color',
        'image',
    ];

    public function resep(): HasMany
    {
        return $this->hasMany(Resep::class, 'kategori_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($kategori) {
            if (empty($kategori->slug)) {
                $kategori->slug = Str::slug($kategori->nama_kategori);
            }
        });
    }
}

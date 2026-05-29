<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'ringkasan',
        'isi',
        'thumbnail',
        'file_attachment'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->judul);
        });
    }
}

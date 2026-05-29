<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'gambar', 'tanggal', 'lokasi'];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function isUpcoming(): bool
    {
        return $this->tanggal->isFuture();
    }
}

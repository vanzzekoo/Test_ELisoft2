<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'judul',
        'konten',
        'status_publish',
        'tanggal_publikasi',
    ];

    public function scopePublished($query)
    {
        return $query->where('status_publish', 'Publish')->whereNotNull('tanggal_publikasi');
    }
}

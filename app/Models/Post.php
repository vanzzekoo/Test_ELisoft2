<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['thumbnail', 'judul', 'konten', 'status_publish', 'tanggal_publikasi'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

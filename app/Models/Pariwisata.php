<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug_url',
        'deskripsi',
        'lokasi',
        'harga',
        'image'
    ];
}

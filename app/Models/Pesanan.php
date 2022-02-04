<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pariwisata_id',
        'invoice',
        'name',
        'email',
        'telepon',
        'pesan',
        'jk',
        'tiket',
        'payment',
        'status',
        'image'
    ];
}

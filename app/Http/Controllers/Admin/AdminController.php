<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pariwisata;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_pariwisata = Pariwisata::all()->count();
        $total_pesanan = Pesanan::all()->count();
        return view('backend.admin.index', compact('total_pariwisata', 'total_pesanan'));
    }
}

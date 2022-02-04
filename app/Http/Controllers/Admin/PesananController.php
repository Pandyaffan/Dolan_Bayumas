<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $data = Pesanan::join('pariwisatas', 'pesanans.pariwisata_id', '=', 'pariwisatas.id')->get(['pesanans.*','pariwisatas.title','pesanans.id as idpesanan']);
        return view('backend.pesanan.index', compact('data'));
    }

    public function destroy($id)
    {
        $data = Pesanan::find($id);
        if (empty($data->image)) {
            # jika gambar tidak ada maka
            $data->delete();
        } else {
            # jika ada gambar maka
            $before_image = public_path('bukti/' . $data->image);
            unlink($before_image);
            $data->delete();
        }
        
        return redirect()->route('pesanan')->with('success', 'data telah terhapus');
        // dd($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Pariwisata;
use App\Models\Payment;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $data = Pariwisata::all();
        $galery = Galery::all();
        return view('home.index', compact('data', 'galery'));
    }

    public function detail($slug_url)
    {
        $data = Pariwisata::where('slug_url', $slug_url)->first();
        if (empty($data)) {
            # jika data kosong maka
            return redirect()->route('index');
        } else {
            # jika data ada maka
            return view('home.detail', compact('data'));
        }
        
    }

    public function pesan($slug_url)
    {
        $data = Pariwisata::where('slug_url', $slug_url)->first();
        if (empty($data)) {
            # jika data kosong maka
            return redirect()->route('index');
        } else {
            # jika data ada maka
            return view('home.pesan', compact('data'));
        }
        
    }

    public function konfirmasi($slug_url, Request $request)
    {
        $data = Pariwisata::where('slug_url', $slug_url)->first();
        if (empty($data)) {
            # jika data kosong maka
            return redirect()->route('index');
        } else {
            # jika data ada maka
            $request->validate([
                'name' => 'required',
                'jk' => 'required',
                'email' => 'required',
                'telepon' =>'required',
                'tanggal' => 'required',
                'tiket' =>'required'
            ]);

            $id = Pesanan::create([
                'pariwisata_id' => $data->id,
                'invoice' => Str::random(8),
                'name' => $request->name,
                'jk' => $request->jk,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'pesan' => $request->tanggal,
                'tiket' => $request->tiket
            ]);
            $go = Pesanan::find($id->id);
            // dd($request->all());
            return redirect()->route('bayarin', $go->invoice);
        }
        
    }

    public function bayar($invoice, Request $request)
    {
        $data = Pesanan::where('invoice', $invoice)->first();
        if (empty($data)) {
            # jika data kosong maka
            return redirect()->route('index');
        } else {
            # jika data ada maka
            $request->validate([
                'bank' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg',
            ]);
            $poster = time() . '.' . $request->image->extension();
            $data->update([
                'payment' => $request->bank,
                'image' => $poster,
                'status' => 'success'
            ]);
            $request->image->move(public_path('bukti/'), $poster);
            return redirect()->route('success');
        }
    }
    public function bayarin($invoice)
    {
        $data = Pesanan::where('invoice', $invoice)->first();
        if (empty($data)) {
            # jika data kosong maka
            return redirect()->route('index');
        } else {
            # jika data ada maka
            $payment = Payment::all();
            return view('home.bayar', compact('data', 'payment'));
        }
    }

    public function success()
    {
        return view('home.success');
    }
}

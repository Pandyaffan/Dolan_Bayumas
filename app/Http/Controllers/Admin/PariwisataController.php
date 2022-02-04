<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pariwisata;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pariwisata::all();
        return view('backend.pariwisata.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pariwisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'lokasi' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $poster = time() . '.' . $request->image->extension();

        Pariwisata::create([
            'title' => $request->title,
            'slug_url' => str_replace('-', ' ', $request->title),
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'lokasi' => $request->lokasi,
            'image' => $poster
        ]);

        $request->image->move(public_path('wisata/'), $poster);
        return redirect()->route('pariwisata.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pariwisata::find($id);
        return view('backend.pariwisata.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pariwisata::find($id);

        if ($request->image == '') {

            $request->validate([
                'title' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
                'lokasi' => 'required',
            ]);
            
            # jika tidak ada request image maka
            
            $data->update([
                'title' => $request->title,
                'slug_url' => str_replace(' ','-', $request->title),
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'lokasi' => $request->lokasi,
            ]);
            return redirect()->route('pariwisata.index');

        } else {
            # jika ada maka
            $request->validate([
                'title' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
                'lokasi' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg',
            ]);

            // ================= hapus image dulu ======================
            $before_image = public_path('wisata/' . $data->image);
            unlink($before_image);

            $poster = time() . '.' . $request->image->extension();

            $data->update([
                'title' => $request->title,
                'slug_url' => str_replace(' ','-', $request->title),
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'lokasi' => $request->lokasi,
                'image' => $poster
            ]);
            
            $request->image->move(public_path('wisata/'), $poster);
            return redirect()->route('pariwisata.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pariwisata::find($id);
        $before_image = public_path('wisata/' . $data->image);
        unlink($before_image);
        $data->delete();

        return redirect()->route('pariwisata.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Galery::all();
        return view('backend.galery.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galery.create');
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
            'desc' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $poster = time() . '.' . $request->image->extension();

        Galery::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $poster
        ]);

        $request->image->move(public_path('galery/'), $poster);
        return redirect()->route('galery.index')->with('success', 'Galery Telah di Tambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Galery::find($id);
        return view('backend.galery.edit', compact('data'));
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
        $data = Galery::find($id);

        if ($request->image == '') {

            $request->validate([
                'title' => 'required',
                'desc' => 'required',
            ]);

            # jika tidak ada request image maka

            $data->update([
                'title' => $request->title,
                'desc' => $request->desc,
            ]);
            return redirect()->route('galery.index')->with('success', 'Galery Telah diupdate');
        } else {
            # jika ada maka
            $request->validate([
                'title' => 'required',
                'desc' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg',
            ]);

            // ================= hapus image dulu ======================
            $before_image = public_path('galery/' . $data->image);
            unlink($before_image);

            $poster = time() . '.' . $request->image->extension();

            $data->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'image' => $poster
            ]);

            $request->image->move(public_path('wisata/'), $poster);
            return redirect()->route('galery.index')->with('success', 'Galery Telah diupdate');
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
        $data = Galery::find($id);
        $before_image = public_path('galery/' . $data->image);
        unlink($before_image);
        $data->delete();

        return redirect()->route('galery.index')->with('success', 'data telah terhapus');
    }
}

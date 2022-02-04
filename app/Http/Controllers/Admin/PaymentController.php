<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Payment::all();
        return view('backend.payment.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.payment.create');
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
            'bank' => 'required',
            'norek' => 'required',
            'name' => 'required'
        ]);

        Payment::create([
            'name' => $request->name,
            'norek' => $request->norek,
            'bank' => $request->bank
        ]);

        return redirect()->route('payment.index');
    }

    public function destroy($id)
    {
        Payment::find($id)->delete();
        return redirect()->route('payment.index')->with('success', 'data terhapus');
    }
}

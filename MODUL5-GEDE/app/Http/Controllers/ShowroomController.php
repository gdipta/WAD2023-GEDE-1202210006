<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Apps\Models\Showroom;

class ShowroomController extends Controller
{
    public function create()
    {
        return view('showroom.create');
    }

    public function index()
    {
        $showroom = Showroom::all();
        return view('showroom.index', compact('showroom'));
    }

    public function store(Request $request)
    {
        Showroom::create([
            'nama_mobil' => $request->name,
            'brand_mobil' => $request->brand,
            'warna_mobil' => $request->warna,
            'tipe_mobil' => $request->tipe,
        ]);

        return redirect()->route('showroom.index');
    }
}

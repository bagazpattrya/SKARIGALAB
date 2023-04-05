<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::all();
        return view('barang', ['barang' => $barang]);
    }

    public function add()
    {
        return view('barang-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:barang'
        ]);
        //dd($request->all());
        $category = Barang::create($request->all());
        return redirect('barang')->with('status', 'Barang Berhasil Ditambahkan!');
    }
}

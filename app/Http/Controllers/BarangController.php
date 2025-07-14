<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $qurey = Barang::latest()->paginate(10);
        return view('barang.index', compact('qurey'));
    }
    public function create()
    {
        return view('barang.create');


    }
    public function store(Request $request)
    {
        $qurey = Barang::create([
            'nama_barang' => $request->nama_barang,
            'nama_merek' => $request->nama_merek,
            'harga' => $request->harga,

        ]);
        return redirect()->route('barang.index')->with('message', 'berhasil di tambah');

    }
    public function destroy($id)
    {
        $qurey = Barang::where('id', '=', $id)->delete();
        return redirect()->route('barang.index')->with('message', 'berhasil di hapus');
    }
    public function edit($id)
    {
        $qurey = Barang::where('id', '=', $id)->first();
        return view('barang.edit', compact('qurey'));


    }



    public function update(Request $request, $id)
    {
        $qurey = Barang::where('id', $id)
            ->update([
                'nama_barang' => $request->nama_barang,
                'nama_merek' => $request->nama_merek,
                'harga' => $request->harga,
            ]);
        return redirect()->route('barang.index')->with('message', 'berhasil di update');
    }

}

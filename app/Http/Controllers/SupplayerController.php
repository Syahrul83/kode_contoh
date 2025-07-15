<?php

namespace App\Http\Controllers;

use App\Models\Supplayer;
use Illuminate\Http\Request;

class SupplayerController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $qurey = Supplayer::latest()->paginate(10);
        return view('supplayer.index', compact('qurey'));
    }
    public function create()
    {
        return view('supplayer.create');


    }
    public function store(Request $request)
    {
        Supplayer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'bidang' => $request->bidang,
            'id_supplayer' => $request->id_supplayer,

        ]);
        return redirect()->route('supplayer.index')->with('message', 'berhasil di tambah');

    }
    public function destroy($id)
    {
        Supplayer::where('id', '=', $id)->delete();
        return redirect()->route('supplayer.index')->with('message', 'berhasil di hapus');
    }
    public function edit($id)
    {
        $qurey = Supplayer::where('id', '=', $id)->first();
        return view('supplayer.edit', compact('qurey'));


    }



    public function update(Request $request, $id)
    {
        Supplayer::where('id', '=', $id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'bidang' => $request->bidang,
                'id_supplayer' => $request->id_supplayer,

            ]);
        return redirect()->route('supplayer.index')->with('message', 'berhasil di update');

    }

}

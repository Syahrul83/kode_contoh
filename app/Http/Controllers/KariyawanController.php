<?php

namespace App\Http\Controllers;

use App\Models\Kariyawan;
use Illuminate\Http\Request;

class KariyawanController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $qurey = Kariyawan::latest()->paginate(10);
        return view('kariyawan.index', compact('qurey'));
    }
    public function create()
    {
        return view('kariyawan.create');


    }
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $qurey = Kariyawan::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'tgl_lahir' => $request->tgl_lahir,
            'image' => 'images/' . $imageName,

        ]);
        return redirect()->route('kariyawan.index')->with('message', 'berhasil di tambah');

    }
    public function destroy($id)
    {
        $qurey = Kariyawan::where('id', '=', $id)->delete();
        return redirect()->route('kariyawan.index')->with('message', 'berhasil di hapus');
    }
    public function edit($id)
    {
        $qurey = Kariyawan::where('id', '=', $id)->first();
        return view('kariyawan.edit', compact('qurey'));


    }



    public function update(Request $request, $id)
    {

        if ($request->image == null) {
            $qurey = Kariyawan::where('id', '=', $id)
                ->update([
                    'nama' => $request->nama,
                    'nip' => $request->nip,
                    'tgl_lahir' => $request->tgl_lahir,

                ]);
        } else {


            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $qurey = Kariyawan::where('id', '=', $id)
                ->update([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'tgl_lahir' => $request->tgl_lahir,
                'image' => 'images/' . $imageName,

            ]);
        }



        return redirect()->route('kariyawan.index')->with('message', 'berhasil di update');

    }
}

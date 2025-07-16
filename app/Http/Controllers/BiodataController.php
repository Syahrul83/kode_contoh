<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {

        $data = Biodata::latest()->paginate(10);
        return view('biodata.index', compact('data'));
    }


    public function create()
    {
        return view('biodata.create');

    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'nullable|string|max:255',
        ]);

        Biodata::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('biodata.index')->with('message', 'Biodata created successfully.');
    }


    public function edit($id)
    {
        $data = Biodata::where('id', '=', $id)->first();
        return view('biodata.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'nullable|string|max:255',
        ]);

        Biodata::where('id', '=', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('biodata.index')->with('message', 'Biodata updated successfully.');
    }

    public function destroy($id)
    {
        Biodata::where('id', '=', $id)->delete();
        return redirect()->route('biodata.index')->with('message', 'Biodata deleted successfully.');
    }


}

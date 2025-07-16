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

    // sebelum pake image
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'umur' => 'required|integer|min:0',
    //         'alamat' => 'nullable|string|max:255',
    //     ]);

    //     Biodata::create([
    //         'nama' => $request->nama,
    //         'umur' => $request->umur,
    //         'alamat' => $request->alamat,
    //     ]);

    //     return redirect()->route('biodata.index')->with('message', 'Biodata created successfully.');
    // }



    // store method with image upload
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gambar'), $imageName);
            $data['image'] = 'gambar/' . $imageName;
        }

        Biodata::create($data);

        return redirect()->route('biodata.index')->with('message', 'Biodata created successfully.');
    }


    public function edit($id)
    {
        $data = Biodata::where('id', '=', $id)->first();
        return view('biodata.edit', compact('data'));
    }

    // sebelum pake image
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'umur' => 'required|integer|min:0',
    //         'alamat' => 'nullable|string|max:255',
    //     ]);

    //     Biodata::where('id', '=', $id)->update([
    //         'nama' => $request->nama,
    //         'umur' => $request->umur,
    //         'alamat' => $request->alamat,
    //     ]);

    //     return redirect()->route('biodata.index')->with('message', 'Biodata updated successfully.');
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gambar'), $imageName);
            $data['image'] = 'gambar/' . $imageName;
        }

        Biodata::where('id', '=', $id)->update($data);

        return redirect()->route('biodata.index')->with('message', 'Biodata updated successfully.');
    }

    public function destroy($id)
    {
        Biodata::where('id', '=', $id)->delete();

        return redirect()->route('biodata.index')->with('message', 'Biodata deleted successfully.');
    }


}

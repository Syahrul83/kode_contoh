<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::latest()->paginate(10);
        return view('user.index', compact('data'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('message', 'berhasil di tambah');
    }

    public function destroy($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->route('user.index')->with('message', 'berhasil di hapus');
    }


    public function edit($id)
    {
        $data = User::find($id);
        return view('user.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6',
        ]);

        if ($request->password == null) {
            User::where('id', '=', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
        } else {
            User::where('id', '=', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
        }
        return redirect()->route('user.index')->with('message', 'berhasil di update');
    }
}

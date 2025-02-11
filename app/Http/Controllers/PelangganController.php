<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $qurey =Konsumen::latest()->paginate(10);
        return view('konsumen.index' , compact('qurey'));
    }
    public function create()
    { 
        return view('konsumen.create' );


    }
    public function store(Request $request)
    { 
        $qurey=Konsumen::create([
            'nama_konsumen'=>$request->nama_konsumen,
            'nama_kontak'=>$request->nama_kontak,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
             'kode_pos'=>$request->kode_pos, 
             'negara'=>$request->negara,
              'status'=>$request->status
        ]);
        return redirect()->route('pelanggan.index')->with('message', 'berhasil di tambah');

    }
    public function destroy($id){
        $qurey=Konsumen::where('id','=',$id)->delete();
        return redirect()->route('pelanggan.index')->with('message', 'berhasil di hapus');
     }
     public function edit($id)
     {  $qurey=Konsumen::where('id','=',$id)->first();
         return view('konsumen.edit',compact('qurey') );
 
 
     }


     
     public function update(Request $request,$id)
     { 
         
            $qurey=Konsumen::where('id','=',$id)
        ->update([
             'nama_konsumen'=>$request->nama_konsumen,
             'nama_kontak'=>$request->nama_kontak,
             'alamat'=>$request->alamat,
             'kota'=>$request->kota,
              'kode_pos'=>$request->kode_pos, 
              'negara'=>$request->negara,
               'status'=>$request->status
         ]);
         return redirect()->route('pelanggan.index')->with('message', 'berhasil di update');
 
     }






    }

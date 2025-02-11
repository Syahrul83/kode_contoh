<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use App\Http\ObatControllers;

class ObatController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $qurey =Obat::latest()->paginate(10);
        return view('obat.index' , compact('qurey'));
    }
    public function create()
    { 
        return view('obat.create' );


    }
    public function store(Request $request)
    { 
        $qurey=Obat::create([
            'nama_obat'=>$request->nama_obat,
            'merek'=>$request->merek,
            'supplayer'=>$request->supplayer,
            'jumlah'=>$request->jumlah,
            'tanggal_exp'=>$request->tanggal_exp,
             
        ]);
        return redirect()->route('obat.index')->with('message', 'berhasil di tambah');

    }
    public function destroy($id){
        $qurey=Obat::where('id','=',$id)->delete();
        return redirect()->route('obat.index')->with('message', 'berhasil di hapus');
     }
     public function edit($id)
     {  $qurey=Obat::where('id','=',$id)->first();
         return view('obat.edit',compact('qurey') );
 
 
     }


     
     public function update(Request $request,$id)
     { 
         
            $qurey=Obat::where('id','=',$id)
        ->update([
             'nama_obat'=>$request->nama_obat,
             'merek'=>$request->merek,
             'supplayer'=>$request->supplayer,
             'jumlah'=>$request->jumlah,
             'tanggal_exp'=>$request->tanggal_exp,
              
         ]);
         return redirect()->route('obat.index')->with('message', 'berhasil di update');
 
     }
}


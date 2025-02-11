<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsumenController extends Controller
{
    public function konsumen(){
    //    $qurey = DB::select('SELECT  DISTINCT negara FROM konsumens');
    //    $qurey =Konsumen::all();
    // $qurey =Konsumen::select('nama_konsumen')->get(); 
    // $qurey =Konsumen::distinct()->get(['negara']);
    //fungsi get adalah mengambil data banyak klo first untuk mengambil 1 data
// $qurey= Konsumen::orderBy('negara' ,'asc')->get()->toArray();
//  $qurey =Konsumen::where('status','like','j%')
            // ->get();
//  $qurey=Konsumen::where('nama_konsumen' ,'like','k%')
                //  ->orWhere('nama_konsumen','like','a%')
                //  ->get() ;  
        //   $qurey=Konsumen::where('negara' ,'!=','usa')
        //   ->get()->toArray();
        //   $qurey=Konsumen::create([
        //     'nama_konsumen'=>'surya',
        //     'nama_kontak'=>'urya',
        //     'alamat'=>'jln.banggirs',
        //     'kota'=>'samarinda',
        //     'kode_pos'=>'00000000',
        //     'negara'=>'indonesia',
        //     'status'=>'pelajar'
        
        //   ]);
        // $qurey=Konsumen::where('id','=','1')
        // ->update([
        //     'nama_konsumen'=>'surya',
        //     'nama_kontak'=>'urya',
        //     'alamat'=>'jln.banggirs',
        //     'kota'=>'samarinda',
        //     'kode_pos'=>'00000000',
        //     'negara'=>'indonesia',
        //     'status'=>'pelajar'
        
        //   ]);
        $qurey=Konsumen::where('id','=','8')->delete();
       dd($qurey);
    }
}

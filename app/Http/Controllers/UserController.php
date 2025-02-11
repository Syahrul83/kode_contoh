<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $qurey =User::latest()->paginate(10);
        return view('user.index' , compact('qurey'));
    }
    public function create()
    { 
        return view('user.create' );


    }
    public function store(Request $request)
    { 
        $qurey=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
           
            
        ]);
        return redirect()->route('user.index')->with('message', 'berhasil di tambah');

    }
    public function destroy($id){
        $qurey=User::where('id','=',$id)->delete();
        return redirect()->route('user.index')->with('message', 'berhasil di hapus');
     }
     public function edit($id)
     {  $qurey=User::where('id','=',$id)->first();
         return view('user.edit',compact('qurey') );
 
 
     }


     
     public function update(Request $request,$id)
     { 
        if ($request->password == null) {
            $qurey=User::where('id','=',$id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                
                
                
             ]);
        } else {
            $qurey=User::where('id','=',$id)
            ->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                
                
             ]);
        }
        
          
         return redirect()->route('user.index')->with('message', 'berhasil di update');
 
     }

}

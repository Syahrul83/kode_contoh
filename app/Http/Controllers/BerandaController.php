<?php

namespace App\Http\Controllers;

use App\Models\Kariyawan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // $qurey =Konsumen::all();
        $slide = Kariyawan::all();
        return view('beranda', compact('slide'));
    }
}

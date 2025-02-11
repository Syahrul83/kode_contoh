<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    use HasFactory;
    protected $fillable= ['nama_konsumen',
'nama_kontak', 'alamat', 'kota', 'kode_pos', 'negara', 'status'];
}

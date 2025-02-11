<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplayer extends Model
{
    use HasFactory;
    protected $fillable= ['nama',
    'alamat' ,'bidang' ,'id_supplayer'];
}

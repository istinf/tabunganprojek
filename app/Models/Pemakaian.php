<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemakaian extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis','nama','rombel','rayon','jumlah_uang_masuk','uang_keluar','total_uang','keterangan','tanggal'
        ];
        
}

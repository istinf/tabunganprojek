<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    protected $fillable = [
         'nama','nis','rombel','rayon','uang_masuk', 'total_uang','tanggal'
        ];
        
}

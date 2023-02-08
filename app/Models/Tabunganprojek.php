<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabunganprojek extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis', 'nama', 'rombel','rayon', 'tahun_ajaran','jenis_kelamin','jumlah_nominal_tabungan'
        ];
        }


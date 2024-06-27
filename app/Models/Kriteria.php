<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $table ='criterias';
    protected $fillable = [
        'nama_kriteria',
        'kode_kriteria',
        'bobot',
        'tipe'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    protected $table = 'criterias';
    protected $fillable = [
        'nama_kriteria',
        'kode_kriteria',
        'bobot',
        'tipe'
    ];
    public $timestamps = false;
}

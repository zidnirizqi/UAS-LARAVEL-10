<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatifs';
    protected $fillable = [
        'nama_perusahaan',
        'C1','C2','C3','C4','C5'
    ];
}

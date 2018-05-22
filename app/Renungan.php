<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renungan extends Model
{
    protected $fillable = [
        'id','ayat_emas', 'gambar', 'judul', 'ayat', 'isi', 'sumber',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanian extends Model
{
    protected $fillable = [
        'produk',
        'bulan',
        'terakhir',
        'persentase',
        'perubahan',
    ];
}

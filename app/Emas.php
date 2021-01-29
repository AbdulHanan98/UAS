<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emas extends Model
{
    protected $fillable = [
        'produk',
        'bulan',
        'terakhir',
        'persentase',
        'perubahan',
    ];
}

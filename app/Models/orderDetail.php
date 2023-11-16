<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_baju', 'nama_pelanggan', 'no_hp', 'dewasa', 'anak', 'tgl_pengambilan', 'tgl_pengembalian', 'status',
    ];
}

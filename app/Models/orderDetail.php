<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'kode_baju', 'nama_pelanggan', 'no_hp', 'dewasa', 'anak', 'tgl_pengambilan', 'tgl_pengembalian', 'status',
    ];
    
    public function clothes(){
        return $this->belongsTo(Clothes::class, 'kode_baju', 'kode_baju');
    }
}
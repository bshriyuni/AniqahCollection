<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'users_id', 'alamat', 'kode_baju', 'nama_lengkap', 'no_hp', 'jumlah_pesanan', 'total_harga', 'tgl_pengambilan', 'tgl_pengembalian', 'status',
    ];
    
    public function clothes(){
        return $this->belongsTo(Clothes::class, 'kode_baju', 'kode_baju');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'nama_lengkap', 'alamat','no_hp', 'kode_baju', 'jumlah_pesanan', 'total_harga' ,'tgl_pengambilan', 'tgl_pengembalian','pembayaran', 'status',
    ];
    
    public function clothes(){
        return $this->belongsTo(clothes::class, 'kode_baju', 'kode_baju');
    }
}
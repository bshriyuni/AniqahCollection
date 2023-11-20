<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;
    protected $table = 'clothes';
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'kode_baju', 
        'deskripsi', 
        'gambar', 
        'jumlah_dewasa',
        'jumlah_anak', 
        'syarat_ketentuan', 
        'harga'
    ];
}

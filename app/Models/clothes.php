<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clothes extends Model
{
    use HasFactory;
    protected $table = 'clothes';

    protected $fillable = [
        'kode_baju', 
        'deskripsi', 
        'foto', 
        'kategori_baju', 
        'syarat_ketentuan', 
        'harga',
        'jumlah_stok'
    ];
}

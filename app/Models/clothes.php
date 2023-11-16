<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;
    protected $table = 'clothes';

    protected $fillable = [
        'kode_baju', 
        'deskripsi', 
        'foto', 
        'jumlah_dewasa',
        'jumlah_anak', 
        'syarat_ketentuan', 
        'harga'
    ];
}

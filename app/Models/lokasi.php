<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasis'; // Sesuaikan nama tabel di database

    protected $fillable = [
        'id',
        'nama_jalan',
        'kota_prov',
        'negara',
        'latitude',
        'longitude'
    ];

    public $incrementing = true;
    protected $primaryKey = 'id';
}

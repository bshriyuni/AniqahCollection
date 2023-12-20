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
        'stok',
        'deskripsi', 
        'SnK', 
        'harga',
        'gambar', 
    ];
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'kode_baju', 'id');
    }
    protected static function booted() {
        static::deleting(function ($clothing) {
            // Delete related order_details
            $clothing->orderDetails()->delete();
        });
    }
}
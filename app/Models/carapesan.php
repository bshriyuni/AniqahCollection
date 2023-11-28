<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carapesan extends Model
{
    use HasFactory;

    protected $table = 'carapesans';

    protected $fillable = [
        'id',
        'no',
        'step',
    ];

    public $incrementing = true;
    protected $primaryKey = 'id';
}

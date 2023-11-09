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
        'step1',
        'step2',
        'step3',
        'step4',
        'step5'
    ];

    public $incrementing = true;
    protected $primaryKey = 'id';
}

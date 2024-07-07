<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_sesi',
        'sesi',
        'pukul'
    ];

    protected $table = 'sesi';
}

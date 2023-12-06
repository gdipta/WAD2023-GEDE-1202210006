<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;
    public $table = 'Showroom';
    protected $filltable = [
        'nama_mobil',
        'brand_mobil',
        'warna_mobil',
        'tipe_mobil',
        'created_at',
        'updated_at',
    ];
}

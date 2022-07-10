<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_varian extends Model
{
    protected $table = "artikel";
    protected $fillable = [
        'id',
        'produk_id',
        'varian',
        'harga'
    ];
}

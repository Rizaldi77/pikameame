<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_foto extends Model
{
    protected $table = "list_foto";
    protected $fillable = [
        'id',
        'produk_id',
        'nama_foto'
    ];
}

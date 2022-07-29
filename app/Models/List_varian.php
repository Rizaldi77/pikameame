<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_varian extends Model
{
    protected $table = "list_varian";
    protected $fillable = [
        'id',
        'produk_id',
        'varian',
        'harga'
    ];

    public function list_foto()
    {
        return $this->hasMany('App\Models\list_foto');
    }
}

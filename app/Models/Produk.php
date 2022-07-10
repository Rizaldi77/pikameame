<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $fillable = [
        'id',
        'nama',
        'admin_id',
        'deskripsi',
        'jml_foto',
        'jml_varian',
        'jml_jual'
    ];

    public function list_foto(): HasMany
    {
        return $this->hasMany(Team::class, 'id', 'produk_id');
    }
    public function list_varian(): HasMany
    {
        return $this->hasMany(Team::class, 'id', 'produk_id');
    }
}

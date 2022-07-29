<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_foto extends Model
{
    protected $table = "list_foto";
    protected $fillable = [
        'id',
        'varian_id',
        'nama_foto'
    ];

    public function list_varian()
    {
        return $this->beLongsTo('App\Models\list_varian');
    }
}

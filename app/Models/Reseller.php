<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    protected $table = "reseller";
    protected $fillable = [
        'id',
        'nama_lengkap',
        'admin_id',
        'no_hp',
        'domisili',
        'akun_ig',
        'email'
    ];
}

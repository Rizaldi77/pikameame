<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $fillable = [
        'id',
        'username',
        'password'
    ];

    public function reseller(): HasMany
    {
        return $this->hasMany(Team::class, 'id', 'admin_id');
    }
    public function produk(): HasMany
    {
        return $this->hasMany(Team::class, 'id', 'admin_id');
    }
    public function artikel(): HasMany
    {
        return $this->hasMany(Team::class, 'id', 'admin_id');
    }
}

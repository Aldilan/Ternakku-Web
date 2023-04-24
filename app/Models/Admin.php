<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, HasUuids;

    protected $table = 'admins';
    protected $fillable = [
        'username', 'password', 'nama_pengguna', 'email', 'no_telp', 'level'
    ];
}

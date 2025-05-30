<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // kalau admin login
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    public $incrementing = false; // karena bukan auto-increment
    protected $keyType = 'string'; // primary key berupa string

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password'];

    // Jika kamu tidak mau timestamps, bisa tambah:
    // public $timestamps = false;
}

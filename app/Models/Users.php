<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Tambahkan properti fillable sesuai kolom table

    protected $fillable = [
        'id',
        'nama_lengkap',
        'email',
        'password',
        'tanggal_lahir',
        'umur',
        'jenis_kelamin',
        'foto_profil',
        'website',
        'biografi',
    ];
}

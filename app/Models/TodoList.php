<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    // Tambahkan properti fillable sesuai kolom table

    protected $fillable = [
        'nama',
        'tugas',
        'deadline',
        'status',
    ];
}

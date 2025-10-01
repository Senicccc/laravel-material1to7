<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;

    // Nama tabel yang dipakai
    protected $table = 'karyawan';

    // Field yang boleh diisi (mass assignment)
    protected $fillable = ['nama', 'jabatan', 'umur'];
}
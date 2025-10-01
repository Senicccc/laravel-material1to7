<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    has
    protected $table = 'karyawan';
    protected $fillable = ['nama', 'jabatan', 'umur'];
}
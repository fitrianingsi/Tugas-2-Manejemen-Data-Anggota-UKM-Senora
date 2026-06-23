<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'divisi_id',
        'nama',
        'nim',
        'jabatan',
        'angkatan',
        'status_keanggotaan'
    ];
}
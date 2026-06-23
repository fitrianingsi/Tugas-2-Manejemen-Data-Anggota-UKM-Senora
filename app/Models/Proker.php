<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proker extends Model
{
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}

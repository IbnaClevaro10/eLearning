<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;

class Sub_kelas extends Model
{
    protected $fillable = ['kelas_id', 'nama_sub'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}


<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\Sub_kelas;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nama_siswa', 'nis','username','kelas_id', 'sub_kelas_id'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    public function subkel()
    {
        return $this->belongsTo(Sub_kelas::class, 'sub_kelas_id', 'id');
    }
}

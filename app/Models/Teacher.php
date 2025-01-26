<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = ['nama_guru', 'nuptk', 'username', 'password', 'mapel_id', 'tugas_id', 'soal_id'];
}

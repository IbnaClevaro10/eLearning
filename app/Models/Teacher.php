<?php

namespace App\Models;

use App\Models\Mapel;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
  protected $fillable = ['nama_guru', 'nuptk', 'username', 'password', 'mapel_id'];
  public function mapel()
  {
      return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
  }
}

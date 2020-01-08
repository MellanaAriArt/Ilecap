<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugas_dosen extends Model
{
    protected $table = "tugas_dosen";
    protected $guarded = [''];
    public function dosen()
    {
        return $this->belongsTo('App\dosen','dosen_id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\kelas','kelas_id');
    }
    public function data_tugas_mahasiswa()
    {
        return $this->hasMany('App\data_tugas_mahasiswa','id_tugas','id');
    }
}

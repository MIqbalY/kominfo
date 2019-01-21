<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapegawai extends Model
{
    protected $fillable = [
        'nama_pegawai', 'nip', 'satker', 'unit_kerja', 'jabatan', 'nama_atasan', 'jabatan_at', 'syarat_jabatan', 'kesesuaian', 'kkn', 'dkk',
    ];


    protected $table = 'datapegawais';

    // public function daftarnilai()
    // {
    // 	return $this->hasMany('App\Daftarnilai');
    // }

}

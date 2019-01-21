<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftarnilai extends Model
{
    protected $fillable = [
        'nip','waktu', 'tkesulitan', 'kualitas', 'pengaruh', 'keseringan', 'total',
    ];
protected $table = 'daftarnilais';

// public function Datapegawai()
// {
// 	return $this->belongsTo('App\Datapegawai');
// }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapenilaian extends Model
{
    protected $fillable = ['nip','syarat_jabatan', 'kkn', 'dkk'];

    protected $casts = [
    	'syarat_jabatan' => 'array',
    	'kkn' => 'array',
    	'dkk' => 'array',
    ];


    // public function callPegawai()
    // {
    // 	return $this->belongsTo('App\Datapegawai');
    // }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswas extends Model
{
    protected $table = 'mahasiswas';
    
    protected $fillable = ['nama', 'nis', 'guru_id', 'kelas_id'];

    public function wali()
    {
    	return $this->hasOne('App\walis', 'siswa_id');
    }

    public function dosen()
    {
    	return $this->belongsTo('App\dosens', 'guru_id');
    }

    public function matkul()
    {
    	return $this->belongsToMany('App\mata_kuliahs', 'matkul_mahasiswas', 'siswa_id', 'mapel_id');
    }

    public function jurusans()
    {
    	return $this->belongsTo('App\jurusans', 'kelas_id');
    }
}

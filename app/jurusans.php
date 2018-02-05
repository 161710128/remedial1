<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusans extends Model
{
	protected $table = 'jurusans';
    protected $fillable = ['nama_jurusan'];

    public function mahasiswa()
    {
    	return $this->hasMany('App\mahasiswas', 'kelas_id');
    }
}

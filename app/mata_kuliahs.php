<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mata_kuliahs extends Model
{
	protected $table = 'mata_kuliahs';
    protected $fillable = ['nama_matkul', 'kkm'];

    public function mata_kuliah()
    {
    	return $this->belongsToMany('App\mahasiswas', 'matkul_mahasiswas', 'mapel_id', 'siswa_id');
    }
}

<?php

use Illuminate\Database\Seeder;
use App\dosens;
use App\jurusans;
use App\mahasiswas;
use App\mata_kuliahs;
use App\walis;

class relasiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = jurusans::create(['nama_jurusan'=>'informatika']);
        
        $matkul = mata_kuliahs::create(['nama_matkul'=>'informatika', 'kkm'=>76]);

        $dosen = dosens::create(['nama'=>'Yulianti', 'nipd'=>'1234567890', 'alamat'=>'jl.cibuntu', 'mata_kuliah'=>'informatika']);
        
        $novay = mahasiswas::create(['nama'=>'Noviyanto Rachmadi', 'nis'=>'1015015072', 'guru_id'=>$dosen->id, 'kelas_id'=>$jurusan->id]);
        $dije = mahasiswas::create(['nama'=>'Djaffar', 'nis'=>'1015015088', 'guru_id'=>$dosen->id, 'kelas_id'=>$jurusan->id]);
        $ayu = mahasiswas::create(['nama'=>'Puji Rahayu', 'nis'=>'1015015078', 'guru_id'=>$dosen->id, 'kelas_id'=>$jurusan->id]);

        walis::create(['nama'=>'Achmad S', 'alamat'=>'jl.sempit', 'siswa_id'=>$novay->id]);

        walis::create(['nama'=>'Entahlah', 'alamat'=>'jl.cihideung','siswa_id'=>$dije->id]);

        walis::create(['nama'=>'Arianto', 'alamat'=>'jl.cibaduyut','siswa_id'=>$ayu->id]);

        $novay->matkul()->attach($matkul->id);
		$dije->matkul()->attach($matkul->id);
		$ayu->matkul()->attach($matkul->id);
    }
}
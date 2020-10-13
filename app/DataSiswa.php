<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = "data_siswas";
    protected $fillable = ['nama_siswa', 'kelas', 'alamat', 'telepon', 'kodepos'];

    public function hobby()
    {
        return $this->hasMany('App\Hobby');
    }
}

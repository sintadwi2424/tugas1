<?php

namespace App\Imports;

use App\DataSiswa;
use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DataSiswa([
            'nama_siswa' => $row[1],
            'kelas' => $row[2],
            'alamat' => $row[3],
            'telepon' => $row[4],
            'kodepos' => $row[5],
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SiswaImport;
use App\DataSiswa;
use App\Hobby;
use Illuminate\Support\Facades\Session;

class Siswacontroller extends Controller
{
    public function index()
    {
        $siswa = DataSiswa::all();
        return view('index', compact('siswa'));
    }
    public function import(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        // import data
        Excel::import(new SiswaImport, public_path('/file_siswa/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/');
    }

    public function tampildata()
    {
        $data = DataSiswa::all();

        return view('siswa.tampil', ['data' => $data]);
    }
}

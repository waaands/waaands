<?php

namespace App\Http\Controllers;

class MatakuliahController extends Controller
{
    public function index()
    {
        return 'Menampilkan data matakuliah';
    }

    public function show($kode = '')
    {
        if ($kode == '') {
            return 'Masukkan kode matakuliah!';
        }

        return 'Anda mengakses matakuliah '.$kode;
    }
}
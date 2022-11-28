<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index($nama, $gender)
    {
        return view("PertemuanKetiga.hii")->with([
            'nama'   => $nama,
            'gender' => $gender,
            'waktu'  => date('H:m:s')
        ]);
    }

    public function file1() {
        return view('PertemuanKedua.File1');
    }

    public function file2() {
        return view('PertemuanKedua.File2');
    }

    public function file3() {
        return view('PertemuanKedua.File3');
    }

    public function file4() {
        return view('PertemuanKedua.File4');
    }

    public function file5() {
        return view('PertemuanKedua.File5');
    }
}

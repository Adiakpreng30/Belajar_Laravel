<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        return view ('matakuliah.index') ;
    }

    public function show($kode=null)
    {
        if ($kode == 'ST445') {
            return view('matakuliah.show');
        }else {
            return "Masukkan nvskhbjgbjfb kode matakuliah";
        }
    }
}

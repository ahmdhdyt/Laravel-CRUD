<?php

namespace App\Http\Controllers;

use App\Mahasiswa; 
use illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
     $mahasiswa = Mahasiswa::all();
     return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }
}
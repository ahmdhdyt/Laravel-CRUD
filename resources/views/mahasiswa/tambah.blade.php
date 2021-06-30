@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data Mahasiswa</div>

            <div class="card-body">
                <form action="#" method="POST" class="form-item" enctype="multipart/form-data">
                <div class="form-group">
                <label for="npm">NPM</label>
                <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM Mahasiswa">
            </div>
            <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa">
            </div>
                <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                </div>
                <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Tanggal Lahir">
                </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control">
                <option name="L">Laki - Laki</option>
                <option name="P">Perempuan</option>
                </select>
            </div>
                <div class="form-group">
                <label for="hp">Telpon</label>
                <input type="text" name="hp" class="form-control" placeholder="Masukkan No Telpon">
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <button type="submit" class="btn-sm btn-primary" name="simpan">Simpan</button>
                <button type="reset" class="btn-sm btn-warning" >Batal</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
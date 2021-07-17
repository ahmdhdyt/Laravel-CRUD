@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('updt.nilai', $nilai->id) }}" method="post" class="form-item">
                @csrf 
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                                            @foreach($mahasiswa as $mhs)
                                                <option value="{{$mhs->id}}" {{$nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }}>{{$mhs->user->name}}</option>    
                                            @endforeach
                                    </select>
                            </div>
                            <div class="col col-md-6">
                                <label for="">Nilai</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                                            @foreach($makul as $mk)
                                                <option value="{{$mk->id}}" {{$nilai->makul_id == $mk->id ? 'selected' : '' }}>{{$mk->nama_makul}}</option>    
                                            @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col col-md-2">
                                <label for="">Nilai</label>
                                <input type="number" name="nilai" value="{{ is_null ($nilai) ? '' : $nilai->nilai }}" class="form-control" placeholder="Masukkan Nilai Mahasiswa">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-sm btn-success" name="simpan">Simpan</button>
                                <a href="{{ route('nilai') }}" class="btn btn-sm btn-light ">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

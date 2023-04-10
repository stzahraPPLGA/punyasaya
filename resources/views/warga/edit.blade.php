@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{ $warga->nama }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" id="exampleInputEmail1" value="{{ $warga->nik }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">No. KK</label>
        <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" value="{{ $warga->no_kk }}" aria-describedby="emailHelp">
    </div>

    <select class="form-select mb-2" name="jenis_kelamin"><br>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>

    <div>
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="8">{{ $warga->alamat }}</textarea><br>
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Update">
</form>
</div>
@endsection
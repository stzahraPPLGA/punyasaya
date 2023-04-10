@extends('layouts.master')

@section('content')
<div class="container">
<h1>Create Warga</h1>

<form action="/warga/store" method="POST">
    @csrf
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">No. KK</label>
        <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <select class="form-select mb-2" name="jenis_kelamin"><br>
        <option selected class="d-none" value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>

    <div>
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="8"></textarea><br>
    </div>

    <input type="submit" name="submit" value="Save" class="btn btn-primary">
</form>
</div>
@endsection
@extends('layout/admin')

@section('konten')
<a href="/pideo" class="btn btn-secondary" >Kembali</a>
    <form method="post" action="/pideo" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_pideo" class="form-label">Judul Video</label>
            <input type="text" class="form-control" id="nama_pideo" name="nama_pideo" value="{{Session::get('nama_pideo')}}" >
        </div>
        <div class="mb-3">
            <label for="deskripsi_pideo" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi_pideo" name="deskripsi_pideo" value="{{Session::get('deskripsi_pideo')}}">
        </div>
        <div class="mb-3">
            <label for="foto_pideo" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto_pideo" name="foto_pideo" >
        </div>
        <div class="mb-3">
            <label for="pideo" class="form-label">Video</label>
            <input type="file" class="form-control" id="pideo" name="pideo" >
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Upload </button>
        </div>
    </form>
@endsection


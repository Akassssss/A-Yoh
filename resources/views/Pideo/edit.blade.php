@extends('layout/admin')

@section('konten')
    <a href="/pideo" class="btn btn-secondary" >Kembali</a>
    <form method="post" action="{{'/pideo/'.$data->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Judul Pideo : {{$data->nama_pideo}} </h1>
        </div>
        <div class="mb-3">
            <label for="nama_pideo" class="form-label">Judul</label>
            <input type="text" class="form-control" id="nama_pideo" name="nama_pideo" value="{{$data->nama_pideo   }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi_pideo" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi_pideo" name="deskripsi_pideo" value="{{$data->deskripsi_pideo   }}">
        </div>
        @if ($data->foto_pideo)
            <div class="mb-3">
                <img style="max-width :50px; max-height :50px" src="{{url('foto').'/'.$data->foto_pideo}}" >
            </div>
        @endif
        <div class="mb-3">
            <label for="foto_pideo" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto_pideo" name="foto_pideo" >
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Upload </button>
        </div>
    </form>
@endsection



@extends('layout/admin')

@section('konten')
    <a href="/produk" class="btn btn-secondary" >Kembali</a>
    <form method="post" action="{{'/produk/'.$data->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Judul Produk : {{$data->nama_product}} </h1>
        </div>
        <div class="mb-3">
            <label for="harga_product" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga_product" name="harga_product" value="{{$data->harga_product}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi_product" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi_product" name="deskripsi_product" value="{{$data->deskripsi_product   }}">
        </div>
        @if ($data->foto_product)
            <div class="mb-3">
                <img style="max-width :50px; max-height :50px" src="{{url('foto').'/'.$data->foto_product}}" >
            </div>
        @endif
        <div class="mb-3">
            <label for="foto_product" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto_product" name="foto_product" >
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Upload </button>
        </div>
    </form>
@endsection
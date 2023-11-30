@extends('layout/admin')

@section('konten')
    <form method="post" action="/produk" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_product" class="form-label">Judul Produk</label>
            <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{Session::get('nama_product')}}" >
        </div>
        <div class="mb-3">
            <label for="harga_product" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga_product" name="harga_product" value="{{Session::get('harga_product')}}">
        </div>
        <div class="mb-3">
            <label for="deskripsi_product" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi_product" name="deskripsi_product" value="{{Session::get('deskripsi_product')}}">
        </div>
        <div class="mb-3">
            <label for="foto_product" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto_product" name="foto_product" >
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Upload </button>
        </div>
    </form>
@endsection
@extends('layout/admin')

@section('konten')
    <a href="/beli" class="btn btn-secondary" >Kembali</a>
    <form method="post" action="{{'/beli/'.$data->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Judul Produk : {{$data->title}} </h1>
        </div>
        
        <div class="mb-3">
            <label for="delivery_status" class="form-label">Status</label>
            <input type="text" class="form-control" id="delivery_status" name="delivery_status" value="{{$data->delivery_status   }}">
        </div>
        <div class="mb-3">
            <label for="resi" class="form-label">Resi</label>
            <input type="text" class="form-control" id="resi" name="resi" value="{{$data->resi   }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Upload </button>
        </div>
    </form>
@endsection
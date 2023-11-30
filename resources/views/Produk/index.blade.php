@extends('layout/admin')

@section('konten')
    <a href="/produk/create" class="btn btn-primary">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Id</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto_product)
                            <img style="max-width :50px; max-height :50px" src="{{url('foto').'/'.$item->foto_product}}" />
                        @endif
                    </td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_product}}</td>
                    <td>{{$item->harga_product}}</td>
                    <td>{{$item->deskripsi_product}}</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="{{url('produk/'.$item->id.'/edit')}}"> Edit </a>
                        <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="{{'/produk/'.$item->id}}" 
                            method='post'> 
                            @csrf 
                            @method('DELETE') 
                            <button class="btn btn-danger" type="submit">Hapus</button></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection
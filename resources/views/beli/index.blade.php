@extends('layout/admin')

@section('konten')
    <a href="/produk/create" class="btn btn-primary">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Pengorder</th>
                <th>Judul</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Resi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->image)
                            <img style="max-width :50px; max-height :50px" src="{{url('foto').'/'.$item->image}}" />
                        @endif
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->delivery_status}}</td>
                    <td>{{$item->resi}}</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="{{url('beli/'.$item->id.'/edit')}}"> Edit </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection
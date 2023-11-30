@extends('layout/admin')

@section('konten')
    <a href="/pideo/create" class="btn btn-primary">Tambah Video</a>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Id</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto_pideo)
                            <img style="max-width :50px; max-height :50px" src="{{url('foto').'/'.$item->foto_pideo}}" />
                        @endif
                    </td>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama_pideo}}</td>
                    <td>{{$item->deskripsi_pideo}}</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href="{{url('pideo/'.$item->id.'/edit')}}"> Edit </a>
                        <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="{{'/pideo/'.$item->id}}" 
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
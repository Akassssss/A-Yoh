@extends('layout/aplikasi')

@section('konten')
        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach($data as $item) 
            <div class="col">
              <a href="{{url('merch/'.$item->id.'/edit')}}" style="text-decoration: none">
                <div class="card">
                <img src= "{{url('foto').'/'.$item->foto_product}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->nama_product}}</h5>
                  <p class="card-text">Rp. {{$item->harga_product}}</p>
                </div>
              </div>
             </a>
            </div>
            @endforeach
        </div>
@endsection
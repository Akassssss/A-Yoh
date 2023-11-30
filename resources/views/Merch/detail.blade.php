<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <script src = "./js/script.js"></script>
    <link rel = "stylesheet" type="text/css" href="/Assets/productstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <center>

        @include('alert/pesannb')
    </center>
    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "{{url('foto').'/'.$data->foto_product}}" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "{{url('foto').'/'.$data->foto_product}}"></div>
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name">{{$data->nama_product}}</span>
                    <span class = "product-price"> Rp. {{$data->harga_product}}</span>
                    <p class = "product-description">{{$data->deskripsi_product}}.</p>
                    <form action="{{url('merch/add_cart/'.$data->id)}}" method="POST" class="btn-groups" >
                        @csrf
                        <div class = "btn-groups"> 
                            <button  type = "submit" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>
                            <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                        </div>
                    </form>
                    {{-- <div class = "btn-groups"> 
                        <button onclick="window.location.href = '{{url('merch/add_cart/'.$data->id)}}'" method="POST" type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    

    
</body>
</html>
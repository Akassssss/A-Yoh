<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
              <a class="nav-link" href="/produk">Produk</a>
              <a class="nav-link" href="/pideo">Video</a>
              <a class="nav-link" href="/beli">Order</a>
              <a class="nav-link" href="/home">A-yoh</a>
              {{-- <a class="nav-link">Disabled</a> --}}
            </div>
          </div>
        </div>
      </nav>
    <div class="container py-5">
        @include('alert/pesan')
        @yield('konten')
    </div>
    
</body>
</html>
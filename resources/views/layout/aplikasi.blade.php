<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        /* Lebar scrollbar */
        ::-webkit-scrollbar {
        width: 1px;
        }

        /* Track (bagian latar belakang) scrollbar */
        ::-webkit-scrollbar-track {
        background: #f1f1f1;
        }

        /* Thumb (bagian yang dapat di-scroll) scrollbar */
        ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 0.5px;
        }

        /* Mengatur warna saat thumb dihover */
        ::-webkit-scrollbar-thumb:hover {
        background: #555;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        @include('alert/pesan')
        @yield('konten')
    </div>
    
</body>
</html>
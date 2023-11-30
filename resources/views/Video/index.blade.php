<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "./js/script.js"></script>
    <link rel="stylesheet" href="./Assets/stylee.css">
</head>
<body>
    <div class="videos">
      <section class="video-section">
          @foreach ($data as $item)
          <article class="video-container" >
            <a href = "{{ url('video/'.$item->id.'/watch') }}">
                <img class="thumbnail-image" src="{{ url('foto').'/'.$item->foto_pideo }}" />
            </a>
            <div class="video-bottom-section">
                <div class="video-details">
                    <a href="#" class="video-title">{{ $item->nama_pideo }}</a>
                    <a href="#" class="video-channel-name">{{ $item->deskripsi_pideo }}</a>
                    <a href="#" class="video-channel-name">{{ $item->count}} View </a>
                    <div class="video-metadata">
                        <span>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </article>
          @endforeach
        </section>
      </div>
      <script>
        function changeParentWindow(event) {
            event.preventDefault();
            var url = event.target.getAttribute('href');
            window.parent.location.href = url;
        }
    </script>
</body>
</html>
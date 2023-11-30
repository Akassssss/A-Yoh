<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src = "./js/script.js"></script>
    <link rel="stylesheet" href="./Assets/merchstyle.css">
</head>
<body>
  @foreach($data as $item)
  
  <div class="videos"  style="display: inline-flex">
    <section class="video-section">
      <article class="video-container">
        <a href="#" class="thumbnail">
          <img class="thumbnail-image" src="./Assets/Images/baju.jpg"/>
        </a>
        <div class="video-bottom-section">
          <div class="video-details">
            <a href="#" class="video-title">{{$item->nama_product}}</a>
            <a href="#" class="video-channel-name">Description</a>
            <div class="video-metadata">
              <span>1 week ago</span>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>

  @endforeach
    {{-- <div class="videos">
        <section class="video-section">
          <article class="video-container" onclick="kepro()">
            <a href="#" class="thumbnail">
              <img class="thumbnail-image" src="./Assets/Images/baju.jpg"/>
            </a>
            <div class="video-bottom-section">
              <div class="video-details">
                <a href="#" class="video-title">Merch Title</a>
                <a href="#" class="video-channel-name">Description</a>
                <div class="video-metadata">
                  <span>1 week ago</span>
                </div>
              </div>
            </div>
          </article>
        </section>
      </div> --}}
      
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>A-Yoh</title>
  <link rel="stylesheet" href="./Assets/stylee.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/b54e017a6a.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <header>
        <nav id = "navbar">
                <div class="logo"><a href="#about-us"> A-Yoh</a></div>
                <div style="padding-left: 1300px;"></div>
                <div class="profile">
                  <div class="icon_wrap">
                    <i class="material-icons">person</i>
                  </div>
                  <div class="sub-menu-wrap">
                    <div class="sub-menu">

                    </div>
                  </div>
                </div>
        </nav>
    </header>
  </div>

  
  <!-- <div class="categories">
    <div class="pidio">Video</div>
    <div class="merch">Merch</div>
  </div>
  
  <iframe src="video.html" style="border:none;" title="Iframe Example" class="konteng"></iframe>
   -->
  


</body>
</html>


nav{
    display: flex;
    padding: 1rem;
    background-color:  #bbe1ac;
    margin: 0;
    overflow: hidden;
    transition: 1s;
    height: 70px;
    position: fixed;
    width: 100%;
    top:0;
    z-index: 1;
  }
  a{
    text-decoration: none;
    color: #000;
  }
  
  .logo{
    font-size: 32px ;
    margin-left: 12px;
    color: #a1ef8b;
    text-align: center;
    text-decoration: none;
    font-style: normal;
  }
  
  .profile i.material-icons{
    font-size: 48px;
    color: #000000;
  }
  
  /* ==-====-===-==== */
  
  
  .sub-menu-wrap{
    z-index: 2;
    position: absolute;
    top: 100%;
    right: 10%;
    width: 100px;
  }
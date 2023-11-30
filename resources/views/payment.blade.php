<!DOCTYPE html>
<html>
<head>
  <title>A-Yoh</title>
  <link rel="stylesheet" href="./Assets/cart.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/b54e017a6a.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src = "./js/script.js"></script>
	<script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
	</script>
</head>

<body style="background-color:#ffff ">
  <div class="wrapper">
    <header>
      @include('alert/pesan')
      <div class="navbar">
        <div class="navbar_left">
          <div class="logo">
            <a href="/home">A-Yoh {{Auth::user()->name}}</a>
          </div>
        </div>
    
        <div class="navbar_right">
          <div class="profile">
            <div class="icon_wrap">
              <span class="name"> </span>
              <i class="fas fa-chevron-down"></i>
            </div>
    
            <div class="profile_dd" style="z-index: 2;">
              <ul class="profile_ul" >
                <li><a class="address" href="/profile"><span class="picon"><i class="fa-solid fa-user"></i></span>Profile</a></li>
                <li><a class="address" href="/cart"><span class="picon"><i class="fa-solid fa-cart-shopping"></i></span>Cart</a></li>
                <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
                <li><a class="logout" href="/logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class="page no1">
    <div class="deox">
        <div class="hvae" role="main">
            <div style="display: contents;">
                <div class="b7">
                    <div class="_66h">
                        <h1 class="sbc">Payment</h1>
                        <div class="zpt">Silahkan scan QRIS untuk melakukan pembayaran</div>
                    </div>
                    <img class="Tengah" src="./Assets/Images/qr.png" width="500px">
                </div>
            </div>
        </div>
    </div>
</div>   

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>A-Yoh</title>
  <link rel="stylesheet" href="./Assets/stylee.css">
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
      function kepro(){
        return window.location.href ="./product.html"
      }

      function kevid(){
          return window.location.href ="{{ url('/pideo') }}"
      }   
      function video() {
          var newSrc ="{{ url('/video') }}";
          document.getElementById("MyFrame").src=newSrc; 
      }
      function merch() {
          document.getElementById("MyFrame").src="{{ url('/merch') }}"; 
      }
      
   
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    
    
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
                <li><a class="settings" href="/detailorder"><span class="picon"><i class="fas fa-cog"></i></span>Order</a></li>
                <li><a class="logout" href="/logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>

  
  <div class="categories">
    <div class="pidio" onclick="video()">Video</div>
    <div class="merch" onclick="merch()">Merch</div>
  </div>
  <!-- <div class="konteng">
    <iframe src="video.html" style="border:none;" title="Iframe Example" allowfullscreen ></iframe>
  </div> -->
  
  <iframe src="{{ url('/video') }}" style="border:none;" title="Iframe Example" class="konteng"   ></iframe>

  



</body>

</html>
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
      <div class="navbar">
        <div class="navbar_left">
          <div class="logo">
            <a href="/home">A-Yoh {{Auth::user()->name}}</a>
          </div>
        </div>
    
        <div class="navbar_right">
          <div class="profile">
            <div class="icon_wrap"> 
              <span class="name"></span>
              <i class="fas fa-chevron-down"></i>
            </div>
    
            <div class="profile_dd" style="z-index: 2;">
              <ul class="profile_ul" >
                <li><a class="address" href="/profile"><span class="picon"><i class="fa-solid fa-user"></i></span>Profile</a></li>
                <li><a class="address" href="/cart"><span class="picon"><i class="fa-solid fa-cart-shopping"></i></span>Cart</a></li>
                <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
                <li><a class="logout" href="/login"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="./Assets/Images/images.png">
                    <div>
                        <p>Black Tshirt</p>
                        <small>Price: Rp200.000</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td>Rp200.000</td>
        </tr>
        
    </table>


    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>Rp 800.000</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rp 8.000</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rp 808.000</td>
            </tr>
        </table>
    </div>
    <button class="btnFill"  onclick="window.location.href = 'payment.blade.php';">Checkout</button>
    
   



</div>    

</body>
</html>
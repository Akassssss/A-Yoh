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
<?php 
function getFormattedNumber(
    $value,
    $style = NumberFormatter::DECIMAL,
    $precision = 2,
    $groupingUsed = true,
    $currencyCode = 'IDR',
) {
    $formatter = new NumberFormatter($locale, $style);
    $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, $precision);
    $formatter->setAttribute(NumberFormatter::GROUPING_USED, $groupingUsed);
    if ($style == NumberFormatter::CURRENCY) {
        $formatter->setTextAttribute(NumberFormatter::CURRENCY_CODE, $currencyCode);
    }

    return $formatter->format($value);
}
 ?>

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
                <li><a class="settings" href="/detailorder"><span class="picon"><i class="fas fa-cog"></i></span>Order</a></li>
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

        <?php $totalprice=0; ?>
        @foreach ($cart as $cart)
            
       
        <tr>
            <td>
                <div class="cart-info">
                    <img src = "{{url('foto').'/'.$cart->image}}">
                    <div>
                        <p>{{$cart->title}}</p>
                      
                        <a href="{{url('remove_cart', $cart->id)}}" onclick="return confirm('You Sure ?')">Remove</a>
                    </div>
                </div>
            </td>
            <td>Rp {{ number_format($cart->price, 0, ',', '.') }}</td>
        </tr>
        <?php $totalprice= $totalprice+$cart->price; ?>
        @endforeach  
    </table>


    <div class="total-price">
      <table>
          <tr>
              <td>Total</td>
              <td>Rp {{ number_format($totalprice, 0, ',', '.') }}</td>
          </tr>
          <tr>
              <?php $tax = $totalprice / 100; ?>
              <td>Tax</td>
              <td>Rp {{ number_format($tax, 0, ',', '.') }}</td>
          </tr>
          <?php $totalprice += $tax; ?>
          <tr>
              <td>Total</td>
              <td>Rp {{ number_format($totalprice, 0, ',', '.') }}</td>
          </tr>
      </table>
  </div>
  
  </div>    
  <a href="{{url('order')}}"><button class="btnFill">Checkout</button></a>
  

</body>
</html> 
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
                  <li><a class="settings" href="/detailorder"><span class="picon"><i class="fas fa-cog"></i></span>Order</a></li>
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
                        <h1 class="sbc">Profile</h1>
                        <div class="zpt">Kelola Informasi profil anda untuk mengontrol dan mengamankan akun anda</div>
                    </div>
                    <div class="rgp">
                        <div class="volt">
                          <form method="post" action="{{'/add_address/'.Auth::user()->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                                <table class="zj">
                                    <tr>
                                        <td class="esp">
                                            <label>Username</label>
                                        </td>
                                        <td class="tm">
                                            <div class="_0z">
                                            <div class="ux">{{Auth::user()->name}}</div>
                                            <button class="dj"></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="esp">
                                            <label>Alamat</label>
                                        </td>
                                        <td class="tm">
                                            <div>
                                                <div class="w5">
                                                    <input id="alamat" class="u4 zk" type="alamat" autocomplete="off" name="alamat" value="">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="esp">
                                            <label>Password</label>
                                        </td>
                                        <td class="tm">
                                            <div>
                                                <div class="w5">
                                                    <input id="password" class="u4 zk" type="password" autocomplete="off" name="password" value="********">
                                                </div>
                                                <button type="submit" class="btn btn-solid-primary btn--m btn--inline btn-solid-primary--disabled" aria-disabled="true">Konfirmasi</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   

</body>
</html>
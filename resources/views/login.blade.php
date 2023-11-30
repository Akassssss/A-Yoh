<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Assets/stylelogin.css">
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>
</head>
<body>
    
    
    <div class="form-container">
        


        <div class="form-body">
            @include('alert/pesan')
            

            <form action="/login/signin" class="the-form" method="POST">
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ Session::get('email') }}" placeholder="Enter your email"  >
                

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"  >
                

                <input type="submit" value="Log In">

            </form>

        </div><!-- FORM BODY-->

        <div class="form-footer">
            <div>
                <span>Don't have an account?</span> <a href="/register">Sign Up</a>
            </div>
        </div><!-- FORM FOOTER -->

    </div><!-- FORM CONTAINER -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="./Assets/registerstyle.css">
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="home">
        @csrf
        <h3>Pay Here</h3>

        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="email">
        
        <div class="qr"> </div>


        <button>Register</button>
    </form>
</body>
</html>
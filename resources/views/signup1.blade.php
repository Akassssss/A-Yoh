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
    <form action="create" method="POST">
        @csrf
        <h3>Register Here</h3>

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Username" value="{{ Session::get('name') }}" id="name">

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email" value="{{ Session::get('email') }}" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <label for="password">Re-Enter Password</label>
        <input type="password" name="password_confirmation" placeholder="Password" id="password">

        <button>Register</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/auth/login/style.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="con-login">
        <div class="imagelogin">
            <img src="{{ asset('images/auth/IMG-LOG.png') }}" alt="login" class="img-log">
         </div>  
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h1 class="title-log">Login</h1>
            <p class="ket-log">Belom punya akun? <span><a href="#">Buat akun</a></span></p>
            <p class="ket-input-email">Email</p>
            <input type="text" name="email" placeholder="email" class="input-email">
            <p class="ket-input-password">Password</p>
            <input type="password" name="password" placeholder="password" class="input-password">
            <button type="submit" class="btn-submit">Login</button>
        </form>
    </div>
</body>
</html>
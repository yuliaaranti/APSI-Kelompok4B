<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST" id="loginForm">
            @csrf
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            @if ($errors->has('login'))
            <div style="color: red;" class="error">{{ $errors->first('login') }}</div>
            @endif
            <br>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Masukkan alamat email yang valid.");
                event.preventDefault();
                return;
            }

            // if (password.length < 8 || !/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
            //     alert("Password harus terdiri dari minimal 8 karakter dan mengandung setidaknya satu huruf dan satu angka.");
            //     event.preventDefault();
            //     return;
            // }

        });
    </script>
</body>



<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        border-radius: 19px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 70px;
        width: 350px;
        text-align: center;
    }

    .form-container {
        padding: 20px;
    }

    h2 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-bottom: 2px solid #333;
        outline: none;
        transition: border-bottom 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
        border-bottom: 2px solid #888;
    }

    button[type="submit"] {
        font-family: 'Poppins', sans-serif;
        background-color: #555;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }


    button:hover {
        background-color: #222;
    }

    p {
        margin-top: 20px;
    }

    a {
        text-decoration: none;
        color: #333;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 Cileungsi E-Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/login.css">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <img src="/assets/img/logo/logo.png" alt="School Logo" class="logo">
            <h1>SELAMAT DATANG</h1>
            <p>Masuk untuk mengakses halaman</p>
            <form action="login" method="POST">
                <label for="username">Email/Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Email/Username" required>

                <label for="password">Kata sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>

                <div class="options">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="">Forgot password</a>
                </div>

                <button type="submit" class="btn">Sign in</button>
            </form>
            <p class="contact-admin">Saya tidak punya akun? <a href="#">Hubungi Admin!</a></p>
        </div>
        <div class="right-panel">
            <div class="overlay">
                <img src="/assets/img/logo/logo2.png" alt="School Logo" class="logo">
                <h2>SMPN 2 CILEUNGSI</h2>
                <p>E-LEARNING</p>
            </div>
        </div>
    </div>
</body>
</html>

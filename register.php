<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Daftar</h1>
            <form method="POST" action="prosesregister.php">

                <label>Username</label>
                <br>
                <input name="username" type="text" required>
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required>
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="text" required>
                <br>
                <button>Daftar</button>
                <p> Sudah punya akun?
                    <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
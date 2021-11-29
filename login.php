<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <h1>Login</h1>
        <form method="POST" action="proseslogin.php">

        <label>Username</label>
        <br>
        <input name="username" type="text" required>
        <br>
        <label>Password</label>
        <br>
        <input name="password" type="password" required>
        <br>

        <button>Log In</button>
            
        <p> Belum punya akun?
        <a href="register.php">Daftar di sini</a>
        </p>
        </form>
        </div>
    </body>
    
</html>
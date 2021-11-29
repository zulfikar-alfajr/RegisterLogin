<?php
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM pendaftaran 
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
      echo "<h1>Selamat Datang, ".$username."!</h1>";
}else{
      echo "<h2>Username atau Password Salah. Ulangi !</h2>";
}
?>
<?php
include "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql = "INSERT INTO pendaftaran (username, password, email)
      VALUES ('$username', '$password', '$email')";

if (mysqli_query($conn, $sql)) {
      echo "<h1>Anda Berhasil Mendaftar dengan indentitas berikut : <br>
      Username : $username <br>
      Password : $password <br>
      Email : $email</h1>
      <a href='login.php'>Kembali Login</h1>";
} else {
      echo "Pendaftaran Gagal : ". mysqli_error($conn);
}
?>
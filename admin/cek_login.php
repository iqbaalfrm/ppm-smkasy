<?php
session_start();
include "koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];

$login = mysqli_query(
  $koneksi,
  "SELECT * FROM user WHERE username='$username' AND password='$password'"
);

$cek = mysqli_num_rows($login);

if ($cek > 0) {
  $data = mysqli_fetch_assoc($login);
  $_SESSION["nama"] = $data["nama"];
  $_SESSION["level"] = "Pengguna";
  header("location:index.php");
} else {
  header("location:index.php?pesan=gagal");
}
?>

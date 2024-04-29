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
  header("location:admin/index.php");
} else {
  header("location:login.php?pesan=gagal");
}
?>

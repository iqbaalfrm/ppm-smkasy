<?php
// Mengatur koneksi ke database
$host = "localhost"; // Lokasi server MySQL, bisa juga berupa alamat IP
$username = "root"; // Nama pengguna MySQL
$password = ""; // Kata sandi MySQL (dibiarkan kosong karena Anda menggunakan kata sandi kosong)
$database = "smkasy"; // Nama database yang ingin Anda hubungkan

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi apakah berhasil atau tidak
if (mysqli_connect_errno()) {
  // Jika koneksi gagal, tampilkan pesan kesalahan
  echo "Koneksi database gagal: " . mysqli_connect_error();
  // Anda juga dapat menambahkan kode lain di sini untuk menangani kesalahan koneksi, seperti mengakhiri eksekusi skrip
  exit();
}
?>

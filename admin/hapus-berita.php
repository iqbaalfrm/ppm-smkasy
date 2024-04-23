<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
  include "koneksi.php";
  
  // Ambil id berita yang akan dihapus
  $id_berita = $_GET['id'];

  // Query untuk menghapus berita berdasarkan ID
  $query = "DELETE FROM berita WHERE id = $id_berita";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // Jika berhasil dihapus, redirect ke halaman daftar berita
    header("Location: berita.php");
    exit();
  } else {
    // Jika gagal hapus, tampilkan pesan error
    echo "Gagal menghapus berita.";
  }

  // Tutup koneksi
  mysqli_close($koneksi);
} else {
  // Jika tidak ada parameter ID berita, redirect ke halaman daftar berita
  header("Location: berita.php");
  exit();
}
?>

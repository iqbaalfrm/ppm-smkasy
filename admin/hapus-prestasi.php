<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}

include "../koneksi.php";

// Proses penghapusan prestasi jika parameter id ada
if(isset($_GET["id"]) && !empty($_GET["id"])) {
  $id = $_GET["id"];

  // Hapus data prestasi dari database
  $sql_hapus = mysqli_query($koneksi, "DELETE FROM prestasi WHERE id = '$id'");
  if($sql_hapus) {
    // Jika berhasil dihapus, redirect kembali ke halaman daftar prestasi
    header("location:prestasi.php");
    exit();
  } else {
    // Jika terjadi kesalahan saat menghapus, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
    exit();
  }
} else {
  // Jika tidak ada parameter id, redirect ke halaman daftar prestasi
  header("location:prestasi.php");
  exit();
}
?>

<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $judul = $_POST["judul"];
  $deskripsi = $_POST["deskripsi"];
  
  // Menghandle upload gambar
  $gambar = $_FILES["gambar"];
  $namaFile = $gambar["name"];
  $ukuranFile = $gambar["size"];
  $tmpFile = $gambar["tmp_name"];
  $error = $gambar["error"];

  // Cek apakah ada file yang diupload
  if ($error === 4) {
    // Jika tidak ada file yang diupload
    echo "Silakan pilih gambar terlebih dahulu.";
  } else {
    // Jika ada file yang diupload
    $ekstensiValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // Cek ekstensi file
    if (!in_array($ekstensiGambar, $ekstensiValid)) {
      echo "Ekstensi file yang diupload tidak valid.";
    } else {
      // Cek ukuran file (dalam byte)
      if ($ukuranFile > 2000000) {
        echo "Ukuran file terlalu besar. Maksimal 2MB.";
      } else {
        // Generate nama file baru agar tidak ada nama file yang sama
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // Pindahkan file yang diupload ke folder uploads
        move_uploaded_file($tmpFile, 'dist/img/uploads/berita' . $namaFileBaru);

        // Insert data ke database
        $query = "INSERT INTO berita (judul, tanggal, deskripsi, gambar) VALUES ('$judul', NOW(), '$deskripsi', '$namaFileBaru')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
          // Redirect ke halaman berita.php setelah berhasil
          header("location: berita.php");
          exit();
        } else {
          echo "Gagal menambahkan berita. Silakan coba lagi.";
        }
      }
    }
  }
}

?>

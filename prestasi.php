<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juara Lomba</title>
  <title>SMK ASY-SYAMSURIYYAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/fav2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
  <?php include('dependensi.php');?>
  <style>
    table {
      width: 100%;
      max-width: 1100px; /* Menentukan lebar maksimum tabel */
      border-collapse: collapse;
      margin : 0 auto;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
      
    }

    th {
      background-color: #379237;
      color: white;
    }
  </style>
</head>

<body>

<!-- ======= Header ======= -->
<?php include('header.php'); ?>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Beranda</a></li>
          <li>Prestasi</li>
          </ol>
      </div>
    </section><!-- End Breadcrumbs -->
    <?php 
    // Sambungkan ke database Anda di sini
    include 'koneksi.php';

    // Lakukan query untuk mendapatkan data prestasi
    $query = "SELECT prestasi,tahun, deskripsi FROM prestasi";
    // Jalankan query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
      // Jika berhasil, mulai looping untuk menampilkan data dalam tabel
      ?>
      <table>
        <thead>
          <tr>
            <th style="text-align: center;">Prestasi</th>
            <th style="text-align: center;">Tahun</th>
            <th style="text-align: center;">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Loop melalui setiap baris hasil query
            while ($row = mysqli_fetch_assoc($result)) {
              // Tampilkan data sebagai baris dalam tabel
              echo "<tr>";
              echo "<td style='text-align: center;'>" . $row['prestasi'] . "</td>";
              echo "<td style='text-align: center;'>" . $row['tahun'] . "</td>";
              echo "<td style='text-align: center;'>" . $row['deskripsi'] . "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
      <?php
    } else {
      // Jika query gagal, tampilkan pesan error
      echo "Query gagal dieksekusi.";
    }
  ?>  

    <!-- footer Section -->
    <?php include "sections/klien.php"; ?>
    <!-- Section footer end -->


  <!-- footer Section -->
  <?php include "footer.php"; ?>
    <!-- Section footer end -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>

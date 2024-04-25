<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
  <link href="assets/css/style.css" rel="stylesheet">

  <?php include('dependensi.php');?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php
     include "header.php";
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Galeri</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">
          <?php
            // Buat koneksi ke database
            include "koneksi.php";

            // Query untuk mengambil data gambar dari tabel galeri
            $query = "SELECT * FROM galeri";
            $result = mysqli_query($koneksi, $query);

            // Loop untuk menampilkan gambar dalam card
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="col-xl-3 col-lg-4 col-md-6">';
              echo '<div class="gallery-item">';
              echo '<a href="admin/dist/img/uploads/' . $row['gambar'] . '" class="gallery-lightbox" data-gall="gallery-item">';
              echo '<img src="admin/dist/img/uploads/' . $row['gambar'] . '" class="img-fluid" alt="">';
              echo '</a>';
              echo '</div>';
              echo '</div>';
            }

            // Tutup koneksi
            mysqli_close($koneksi);
          ?>
        </div>
      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Clients Section ======= -->
    <?php include "sections/klien.php"; ?>
    <!-- ======= End Clients Section ======= -->

    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- footer end -->

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK ASY-SYAMSURIYYAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <?php include('dependensi.php'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "header.php"; ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>berita</li>
        </ol>
        <h2>Berita Terbaru</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 posts-list">
          <?php
          // Buat koneksi ke database
          $koneksi = mysqli_connect("localhost", "root", "", "smkasy");

          // Periksa koneksi
          if (mysqli_connect_errno()) {
            echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
            exit();
          }

          // Query untuk mengambil data berita
          $query = "SELECT * FROM berita";
          $result = mysqli_query($koneksi, $query);

          // Periksa apakah ada hasil
          if (mysqli_num_rows($result) > 0) {
            // Loop melalui setiap baris hasil
            while ($row = mysqli_fetch_assoc($result)) {
              // Ambil data yang Anda butuhkan
              $id_berita = $row['id'];
              $judul = $row['judul'];
              $tanggal = $row['tanggal'];
              $gambar = "assets/img/paskib.jpeg"; // Path gambar dari lokal
              // Tampilkan data berita dalam format card
              echo "<div class='col-xl-4 col-md-6'>";
              echo "<article>";
              echo "<div class='post-img'>";
              echo "<img src='$gambar' alt='$judul' class='img-fluid'>";
              echo "</div>";
              echo "<p class='post-category'>Berita</p>";
              echo "<h2 class='title'><a href='blog-details.php?id=$id_berita'>$judul</a></h2>";
              echo "<div class='post-meta'>";
              echo "<p class='post-date'><time datetime='2022-01-01'>$tanggal</time></p>";
              echo "</div>";
              echo "</article>";
              echo "</div>";
            }
          } else {
            echo "Tidak ada berita yang ditemukan.";
          }

          // Tutup koneksi
          mysqli_close($koneksi);
          ?>
        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->
      </div>
    </section><!-- End Blog Section -->

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

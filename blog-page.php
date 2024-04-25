<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK ASY-SYAMSURIYYAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

  <?php include('dependensi.php'); ?>
  <style>
    /* CSS untuk ukuran card tetap */
    .fixed-card-height .card {
      height: 450px; /* Sesuaikan dengan ukuran yang diinginkan */
    }
    .fixed-card-height .card-body {
      overflow: hidden;
    }
    .fixed-card-height .card-body p {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 3; /* Jumlah baris teks yang ingin ditampilkan */
      -webkit-box-orient: vertical;
    }
  </style>
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
        <div class="row gy-4 posts-list fixed-card-height"> <!-- Tambahkan class fixed-card-height -->
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
              $gambar = $row['gambar']; // Kolom gambar dari database

              // Tambahkan base URL untuk path gambar
              $imagePath = "admin/dist/img/uploads/" . $gambar;
              // Tampilkan data berita dalam format card
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card'>";
              echo "<img src='$imagePath' class='card-img-top' alt='$judul' />";
              echo "<div class='card-body'>";
              echo "<h5 class='card-title'>$judul</h5>";
              echo "<p class='card-text'>$tanggal</p>";
              echo "<a href='blog-details.php?id=$id_berita' class='btn btn-primary'>Baca Selengkapnya</a>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
          } else {
            echo "Tidak ada berita yang ditemukan.";
          }

          // Tutup koneksi
          mysqli_close($koneksi);
          ?>
        </div><!-- End blog posts list -->
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

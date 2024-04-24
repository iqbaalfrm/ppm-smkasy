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

  <?php include('dependensi.php');?>
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
          <li>Berita</li>
        </ol>
        <h2>Detail Berita</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-12">
            <article class="blog-details">
              <?php
              // Buat koneksi ke database
              $koneksi = mysqli_connect("localhost", "root", "", "smkasy");

              // Periksa koneksi
              if (mysqli_connect_errno()) {
                echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
                exit();
              }

              // Periksa apakah ada parameter ID berita yang dikirim melalui URL
              if (isset($_GET['id'])) {
                $id_berita = $_GET['id'];

                // Query untuk mengambil data berita berdasarkan ID
                $query = "SELECT * FROM berita WHERE id = $id_berita";
                $result = mysqli_query($koneksi, $query);

                // Periksa apakah ada hasil
                if (mysqli_num_rows($result) > 0) {
                  // Ambil data berita
                  $row = mysqli_fetch_assoc($result);
                  $judul = $row['judul'];
                  $tanggal = $row['tanggal'];
                  $gambar = $row['gambar'];
                  $deskripsi = $row['deskripsi'];

                  // Tampilkan detail berita
                  echo "<div class='post-img'>";
                  echo "<img src='$gambar' alt='' class='img-fluid'>";
                  echo "</div>";
                  echo "<h2 class='title'>$judul</h2>";
                  echo "<div class='meta-top'>";
                  echo "<ul>";
                  echo "<li class='d-flex align-items-center'><i class='bi bi-clock'></i> <time datetime='2020-01-01'>$tanggal</time></li>";
                  echo "</ul>";
                  echo "</div><!-- End meta top -->";
                  echo "<div class='content'>";
                  echo "<p>$deskripsi</p>";
                  echo "</div><!-- End post content -->";
                } else {
                  echo "Berita tidak ditemukan.";
                }
              } else {
                echo "Parameter ID berita tidak ditemukan.";
              }

              // Tutup koneksi
              mysqli_close($koneksi);
              ?>
            </article><!-- End blog post -->
          </div>
        </div>
      </div>
    </section><!-- End Blog Details Section -->

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

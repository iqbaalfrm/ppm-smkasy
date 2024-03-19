<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>SMK ASY-SYAMSURIYYAH</title>

  <!-- Favicons -->
  <link href="assets/img/fav2.png" rel="icon">
  <link href="assets/img/icon-apple.png" rel="icon-apple">

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
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php');?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php include('hero.php');?>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Sambutan Section ======= -->
    <?php include('sambutan.php');?>
    <!-- End sambutan Section -->

    <!-- ======= Services Section ======= -->
    <?php include('jurusan_index.php');?>
    <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <?php include('kenapa_kami.php');?>
    <!-- End Why Us Section -->

    <!-- ======= Disini nanti apa terserah ======= -->
    <section class="latest_news_area p_120" id="berita">
          <div class="container">
            <div class="main_title2">
              <center><h2>Berita</h2></center>
            </div>
            <div class="latest_news_inner row">
              <?php
              include "koneksi.php";
              $sql = mysqli_query(
                $koneksi,
                "SELECT * FROM berita ORDER BY tanggal DESC",
              );
              while ($data = mysqli_fetch_array($sql)): ?>
              <div class="col-lg-4">
                <div class="l_news_item">
                  <a class="date" href="#"><?= $data["tanggal"] ?></a>
                  <a href="#"><img src="login/dashboard/images/<?= $data[
                    "gambar"
                  ] ?>" width="320" height="231">
                    <h4><?= $data["judul"] ?></h4></a><p>
                    <?= $data[
                      "deskripsi"
                    ] ?>
                  </p>
                </div>
              </div>
              <?php endwhile;
              ?>
            </div>
          </div>
        </section>
    <!--  End Disini nanti apa terserah -->

    <!-- ======= Disini nanti apa terserah ======= -->
    <!-- Your Disini nanti apa terserah content goes here -->
    <!-- End Disini nanti apa terserah -->

    <!-- ======= alumni Section ======= -->
    <?php include('alumni.php');?>
    <!-- End alumni Section -->

    <!-- ======= Clients Section ======= -->
    <?php include('klien.php');?>
    <!-- End Clients Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->

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

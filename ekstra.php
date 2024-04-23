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
          <li>Ekstrakurikuler</li>
        </ol>
        <h2>Ekstrakurikuler</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <?php
include "koneksi.php";

if ($koneksi) {
  $sql = mysqli_query($koneksi, "SELECT * FROM ekstra");
  if ($sql) {
?>
    <section id="section-extracurricular" class="section">
      <div class="container">
        <div class="row">
          <?php while ($data = mysqli_fetch_array($sql)) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="card">
                <img src="admin/dist/img/uploads/<?php echo $data['gambar']; ?>" class="card-img-top" alt="<?php echo $data['nama']; ?>" width="300" height="300">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                  <p class="card-text"><?php echo $data['deskripsi']; ?></p>
                  <a href="#!" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  <?php
  } else {
    echo "Query error: " . mysqli_error($koneksi);
  }
} else {
  echo "Failed to connect to database.";
}
?>



      <!-- ======= Clients Section ======= -->
      <?php include "sections/klien.php"; ?>
      <!-- ======= End Clients Section ======= -->

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

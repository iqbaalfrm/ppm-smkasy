<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SMK ASY-SYAMSURIYYAH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon2.png" rel="icon">
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
  <style>
    /* Style untuk membuat card sama tinggi */
    .card {
      height: 100%;
    }

    /* Style untuk card body */
    .card-body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    /* Style untuk judul */
    .card-title {
      flex: 1;
    }

    /* Style untuk deskripsi */
    .card-text {
      flex: 2;
    }

    /* Style untuk gambar */
    .card-img-top {
      height: 200px; /* Atur tinggi gambar */
      object-fit: cover; /* Scale gambar */
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

    <!-- ======= Portfolio Details Section ======= -->
    <section id="section-extracurricular">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="extracurricular-section">
              <div class="card-deck">
                <div class="container">
                  <div class="row mt-4">
                    <?php
                    // Include koneksi ke database
                    include "koneksi.php";

                    // Query untuk mengambil data prestasi
                    $sql = "SELECT * FROM prestasi";
                    $result = mysqli_query($koneksi, $sql);

                    // Cek apakah ada data
                    if (mysqli_num_rows($result) > 0) {
                      // Loop untuk setiap data prestasi
                      while ($row = mysqli_fetch_assoc($result)) {
                        // Tambahkan base URL untuk path gambar
                        $imagePath = "admin/dist/img/uploads/" . $row['gambar'];
                    ?>
                        <div class="col-md-4 mb-4">
                          <div class="card">
                            <img src="<?php echo $imagePath; ?>" class="card-img-top" alt="<?php echo $row['nama']; ?>" />
                            <div class="card-body">
                              <!-- Gunakan judul dan deskripsi dari database -->
                              <h5 class="card-title"><?php echo $row['nama']; ?></h5>
                              <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                            </div>
                          </div>
                        </div>
                    <?php
                      }
                    } else {
                      echo "Tidak ada data prestasi.";
                    }

                    // Jangan lupa tutup koneksi
                    mysqli_close($koneksi);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Details Section -->

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

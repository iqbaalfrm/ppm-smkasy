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
    <section id="section-extracurricular">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="extracurricular-section">
              <div class="card-deck">
                <div class="container">
                  <div class="row mt-4">
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                      <div class="col-md-4 mb-4">
                        <div class="card">
                          <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="assets/img/test.jpeg" class="img-fluid" />
                            <a href="#!">
                              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Card title <?php echo $i; ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
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

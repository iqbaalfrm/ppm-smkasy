<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK ASY-SYAMSURIYYAH</title>
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
</head>
<body>
  <!-- Header -->
  <?php include('header.php');?>

  <main id="main">
    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Beranda</a></li>
          <li>Tentang RPL</li>
        </ol>
        <h2>Rekayasa Perangkat Lunak</h2>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Portfolio Details Section -->
    <section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="mb-4 header-blog">
                            Berita Terkini
                            <p id="placeholder-result" style="display: none;">Hasil untuk pencarian : <span></span></p>
                        </h2>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="input-group">
                            <input type="text" name="key" class="form-control" placeholder="Cari">
                            <div class="input-group-append">
                                <button class="btn btn-main" id="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" id="loading-section">
                        <div class="text-center">
                            <h3 class="text-center">Memuat....</h3>
                        </div>
                    </div>
                </div>
                <div class="row" id="blog-content"></div>
                <div class="row">
                    <div class="col-sm-12 text-center" style="display: none;">
                        <button type="button" id="btn-loadmore" class="btn btn-loadmore btn-main">Muat Lebih Banyak</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h5>Berita Terpopuler</h5>
                <ul class="side-nav-news">
                                        <li>
                        <a href="http://www.smkn-13bdg.sch.id/blog/cara-pendaftaran-ppdb-online-2021-jenjang-smk">Cara Pendaftaran PPDB Online 2021 Jenjang SMK</a>
                        <span class="news-thumb-release-date" data-date="2021-05-20 18:28:14"><i class="far fa-clock"></i> 2 Tahun lalu</span>
                    </li>
                                        <li>
                        <a href="http://www.smkn-13bdg.sch.id/blog/sosialisasi-ppdb-2021-smkn-13-bandung">Sosialisasi PPDB 2021 SMKN 13 Bandung</a>
                        <span class="news-thumb-release-date" data-date="2021-06-03 09:59:30"><i class="far fa-clock"></i> 2 Tahun lalu</span>
                    </li>
                                        <li>
                        <a href="http://www.smkn-13bdg.sch.id/blog/pengumuman-ppdb-tahap-1">Pengumuman PPDB Tahap 1</a>
                        <span class="news-thumb-release-date" data-date="2021-06-21 19:33:18"><i class="far fa-clock"></i> 2 Tahun lalu</span>
                    </li>
                                        <li>
                        <a href="http://www.smkn-13bdg.sch.id/blog/prosedur-standar-operasional-ppdb-smkn-13-bandung">Prosedur Standar Operasional PPDB SMKN 13 Bandung</a>
                        <span class="news-thumb-release-date" data-date="2020-06-06 17:34:16"><i class="far fa-clock"></i> 3 Tahun lalu</span>
                    </li>
                                        <li>
                        <a href="http://www.smkn-13bdg.sch.id/blog/jadwal-ppdb-jabar-2021">Jadwal PPDB Jabar 2021</a>
                        <span class="news-thumb-release-date" data-date="2021-05-21 18:55:06"><i class="far fa-clock"></i> 2 Tahun lalu</span>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
</section>

    <!-- End Portfolio Details Section -->

    <!-- Clients Section -->
    <?php include('klien.php');?>
    <!-- End Clients Section -->
  </main>

  <!-- Footer -->
  <?php include('footer.php');?>

  <!-- Back to Top Button -->
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <style>
    /*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  border-radius: 4px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(16, 110, 234, 0.15);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 30px;
  right: 0;
  opacity: 0;
  transition: ease-in-out 0.3s;
  text-align: center;
}

.team .member .social a {
  transition: color 0.3s;
  color: #222222;
  margin: 0 3px;
  padding-top: 7px;
  border-radius: 4px;
  width: 36px;
  height: 36px;
  background: rgba(16, 110, 234, 0.8);
  display: inline-block;
  transition: ease-in-out 0.3s;
  color: #fff;
}

.team .member .social a:hover {
  background: #3b8af2;
}

.team .member .social i {
  font-size: 18px;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #222222;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
  bottom: 15px;
}



  </style>
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
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
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
          <li>Profil Tenaga Pendidik</li>
          </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <?php
    // Sambungkan ke database Anda di sini
    include 'koneksi.php';

    // Lakukan query untuk mendapatkan data nama dan gambar dari tabel guru
    $query = "SELECT nama, gambar FROM guru";
    // Jalankan query
    $result = mysqli_query($koneksi, $query);
?>

<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Profil Guru <span>dan</span> Tenaga Pendidik</h3>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <?php
                // Periksa apakah query berhasil dieksekusi
                if ($result && mysqli_num_rows($result) > 0) {
                    // Loop melalui setiap baris hasil query
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Tampilkan data sebagai anggota dalam struktur HTML
            ?>
<div class="col-lg-3 col-md-6 d-flex align-items-stretch filter-app" data-aos="fade-up" data-aos-delay="100">
    <div class="member">
        <div class="member-img">
            <!-- Tampilkan gambar guru -->
            <img src="admin/dist/img/uploads/guru<?php echo $row['gambar']; ?>" class="card-img-top" width="300" height="300">
        </div>
        <div class="member-info">
            <!-- Tampilkan nama guru -->
            <h4><?php echo $row['nama']; ?></h4>
            <!-- Tambahkan informasi tambahan jika diperlukan -->
        </div>
    </div>
</div>

            <?php
                    }
                } else {
                    // Jika query tidak mengembalikan hasil atau tidak berhasil dieksekusi, tampilkan pesan kesalahan atau tindakan yang sesuai
                    echo "Tidak ada data guru yang ditemukan.";
                }
            ?>
        </div>
    </div>
</section>
<!-- End Team Section -->


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
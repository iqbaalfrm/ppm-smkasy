<!DOCTYPE html>
<html lang="en">
  <style>
 .blog .blog-details {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 10px;
    max-width: 100%;
    margin-bottom: 30px; /* Sesuaikan nilai margin-bottom sesuai kebutuhan */
}

.blog .blog-details .post-img {
  margin: -30px -30px 20px -30px;
  overflow: hidden;
  border-radius: 10px 10px 0 0;
}

.blog .blog-details .title {
  font-size: 28px;
  font-weight: 700;
  padding: 0;
  margin: 20px 0 0 0;
  color: var(--color-default);
}

.blog .blog-details .content {
  margin-top: 20px;
}

.blog .blog-details .content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .blog-details .content blockquote {
  overflow: hidden;
  background-color: rgba(34, 34, 34, 0.06);
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .blog-details .content blockquote p {
  color: var(--color-default);
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .blog-details .content blockquote:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: var(--color-secondary);
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .blog-details .meta-top {
  margin-top: 20px;
  color: #6c757d;
}

.blog .blog-details .meta-top ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog .blog-details .meta-top ul li+li {
  padding-left: 20px;
}

.blog .blog-details .meta-top i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
  color: var(--color-primary);
}

.blog .blog-details .meta-top a {
  color: #6c757d;
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog .blog-details .meta-bottom {
  padding-top: 10px;
  border-top: 1px solid rgba(34, 34, 34, 0.15);
}

.blog .blog-details .meta-bottom i {
  color: #555555;
  display: inline;
}

.blog .blog-details .meta-bottom a {
  color: rgba(34, 34, 34, 0.8);
  transition: 0.3s;
}

.blog .blog-details .meta-bottom a:hover {
  color: var(--color-primary);
}

.blog .blog-details .meta-bottom .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .cats li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .tags li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags li+li::before {
  padding-right: 6px;
  color: var(--color-default);
  content: ",";
}

.blog .blog-details .meta-bottom .share {
  font-size: 16px;
}

.blog .blog-details .meta-bottom .share i {
  padding-left: 5px;
}

.blog .post-author {
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

.blog .post-author img {
  max-width: 120px;
  margin-right: 20px;
}

.blog .post-author h4 {
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
  color: var(--color-default);
}

.blog .post-author .social-links {
  margin: 0 10px 10px 0;
}

.blog .post-author .social-links a {
  color: rgba(34, 34, 34, 0.5);
  margin-right: 5px;
}

.blog .post-author p {
  font-style: italic;
  color: rgba(108, 117, 125, 0.8);
  margin-bottom: 0;
}


  </style>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK ASY-SYAMSURIYYAH
  </title>
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
          <li>Berita</li>
        </ol>
        <h2>Detail Berita</h2>

      </div>
    </section><!-- End Breadcrumbs -->

      <!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-14">
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
    
       
    <?php
     include "sections/klien.php";
    ?>
      <!-- ======= End Clients Section ======= -->
  <!-- footer -->
      <?php
      include "footer.php";
      ?>
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
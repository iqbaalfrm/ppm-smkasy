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
  <!-- Custom CSS for Recent Blog Posts Section -->
  <style>
    .recent-posts .container {
      padding-top: 20px;
      padding-bottom: 20px;
    }
    .recent-posts .section-header {
      margin-bottom: 20px;
      text-align: center;
      color: #14781e;
    }
    .recent-posts article {
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      padding: 15px;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 20px;
    }
    .recent-posts .post-img {
      max-height: 180px;
      margin: -15px -15px 15px -15px;
      overflow: hidden;
    }
    .recent-posts .post-category {
      font-size: 16px;
      color: #6f6f6f;
      margin-bottom: 10px;
    }
    .recent-posts .title {
      font-size: 22px;
      font-weight: 700;
      padding: 0;
      margin: 0 0 20px 0;
    }
    .recent-posts .title a {
      color: var(--color-default);
      transition: 0.3s;
    }
    .recent-posts .title a:hover {
      color: var(--color-primary);
    }
    .recent-posts .post-author-img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 15px;
      object-fit: cover;
    }
    .recent-posts .post-author {
      font-weight: 600;
      margin-bottom: 5px;
    }
    .recent-posts .post-date {
      font-size: 14px;
      color: #3c3c3c;
      margin-bottom: 0;
    }
  </style>
</head>
<body>

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-posts" class="recent-posts sections-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>Berita Terbaru</h3>
      <p>Ikuti terus informasi terbaru tentang SMK Asy Syamsuriyyah.</p>
    </div>
    <div class="row gy-4">
      <!-- PHP Code for Recent Blog Posts -->
      <?php
        // Buat koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "smkasy");

        // Periksa koneksi
        if (mysqli_connect_errno()) {
            echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
            exit();
        }

        // Query untuk mengambil 3 berita terbaru dari database
        $query = "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 3";
        $result = mysqli_query($koneksi, $query);

        // Periksa apakah ada hasil
        if (mysqli_num_rows($result) > 0) {
            // Tampilkan berita
            while ($row = mysqli_fetch_assoc($result)) {
                $judul = $row['judul'];
                $tanggal = $row['tanggal'];
                $gambar = "assets/img/paskib.jpeg"; // Path gambar dari lokal
                $deskripsi = $row['deskripsi'];

                echo "<div class='col-xl-4 col-md-4'>";
                echo "<article>";
                echo "<div class='post-img'>";
                echo "<img src='$gambar' alt='' class='img-fluid'>";
                echo "</div>";
                echo "<p class='post-category'>Kategori Berita</p>";
                echo "<h2 class='title'><a href='blog-details.html'>$judul</a></h2>";
                echo "<div class='d-flex align-items-center'>";
                echo "<p class='post-date'><time datetime='$tanggal'>$tanggal</time></p>";
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
      <!-- End PHP Code for Recent Blog Posts -->
    </div><!-- End recent posts list -->
  </div>
</section><!-- End Recent Blog Posts Section -->

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

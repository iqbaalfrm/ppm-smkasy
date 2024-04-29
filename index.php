  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>SMK ASY-SYAMSURIYYAH</title>
    <?php include('dependensi.php'); ?>
  </head>
  <body>
    <!-- ======= Header ======= -->
    <?php include('header.php');?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-items-center" data-aos="fade-up">
            <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100"  style="margin-top: -125px;">
                <h2>“Bertaqwa, Berkarakter, dan Mandiri”</h2>
                <div>
                    <a href="https://drive.google.com/file/d/1oXcIG5wu5GhyaMHhxky_piid1QJeVVKp/view?usp=sharing" class="btn-get-started scrollto">Daftar Sekarang!</a>
                </div>
            </div>

            <div class="col-lg-6 intro-img order-lg-last order-first text-center" data-aos="zoom-out" data-aos-delay="200" style="margin-top: 0px; margin-bottom: 125px;">
                <img src="assets\img\hero.png" alt="" class="img-fluid" style="max-height: 450px;">
            </div>
        </div>
    </div>
</section>

    <!-- End Hero -->

    <main id="main">

      <!-- ======= Unggulan Section ======= -->
      <?php include('sections/pesantren.php'); ?>
      <!-- End Unggulan Section -->


      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3>PROGRAM KEAHLIAN</h3>
      <p><b>SMK Asy Syamsuriyyah</b> memiliki tiga program keahlian.</p>
    </header>

    <div class="row g-5">
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
        <a href="tkr.php">  
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="bi bi-gear" style="color: #ff689b;"></i></div>
            <h4 class="title" style="color: black;">TEKNIK KENDARAAN RINGAN</h4>
            <p class="description" style="color: black;">TKR merupakan Kompetensi Keahlian dari spesifikasi bidang keahlian Teknik otomotif dimana TKR lebih menitik beratkan pada kendaraan kecil sampai berat seperti mobil dan sejenisnya.</p>   
          </div>
        </a>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <a href="rpl.php">
          <div class="box">
            <div class="icon" style="background: #fff0da;"><i class="bi bi-cpu" style="color: #e98e06;"></i></div>
            <h4 class="title" style="color: black;">REKAYASA PERANGKAT LUNAK</h4>
            <p class="description" style="color: black;">Program Studi Rekayasa Perangkat Lunak (RPL) adalah sebuah bidang studi di dunia pendidikan yang fokus pada pengembangan, perancangan, dan pengujian perangkat lunak.</p>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <a href="mm.php">
          <div class="box">
            <div class="icon" style="background: #e6fdfc;"><i class="bi bi-camera" style="color: #3fcdc7;"></i></div>
            <h4 class="title" style="color: black;">DESAIN KOMUNIKASI VISUAL</h4>
            <p class="description" style="color: black;">Desain Komunikasi Visual (DKV) mempelajari tentang cara-cara untuk menciptakan dan mengomunikasikan ide, informasi, dan konsep melalui elemen-elemen visual seperti gambar, grafik, dan tipografi.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
      <!-- End Services Section -->

      <!-- ======= Why Us Section ======= -->
      <?php include('sections/kenapa_kami.php');?>
      <!-- End Why Us Section -->

      <!-- ======= Blog Section ======= -->
      <?php include('blog.php');?>
      <!-- End Blog Section -->

      <!-- ======= Disini nanti apa terserah ======= -->
      <!-- Your Disini nanti apa terserah content goes here -->
      <!-- End Disini nanti apa terserah -->

      <!-- ======= Alumni Section ======= -->
      <?php include('sections/alumni.php');?>
      <!-- End Alumni Section -->

      <!-- ======= Clients Section ======= -->
      <?php include('sections/klien.php');?>
      <!-- End Clients Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('footer.php'); ?>
    <!-- End Footer -->

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


    <!-- Hamburger Menu Script -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const select = (el, all = false) => {
          el = el.trim();
          if (all) {
            return [...document.querySelectorAll(el)];
          } else {
            return document.querySelector(el);
          }
        };

        const on = (type, el, listener, all = false) => {
          let selectEl = select(el, all);
          if (selectEl) {
            if (all) {
              selectEl.forEach((e) => e.addEventListener(type, listener));
            } else {
              selectEl.addEventListener(type, listener);
            }
          }
        };

        on("click", ".mobile-nav-toggle", function (e) {
          const navbar = select("#navbar");
          navbar.classList.toggle("navbar-mobile");
          this.classList.toggle("bi-list");
          this.classList.toggle("bi-x");
        });
      });
    </script>
  </body>
  </html>

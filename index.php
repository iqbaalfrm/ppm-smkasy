<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>SMK ASY-SYAMSURIYYAH</title>

 <?php include('dependensi.php');?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php');?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php include('sections/hero.php');?>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Unggulan Section ======= -->
    <?php include('sections/pesantren.php'); ?>
    <!-- End Unggulan Section -->

    <!-- ======= Services Section ======= -->
    <?php include('sections/jurusan_index.php');?>
    <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <?php include('sections/kenapa_kami.php');?>
    <!-- End Why Us Section -->

    <!-- ======= Disini nanti apa terserah ======= -->
    <?php include('blog.php');?>
    <!--  End Disini nanti apa terserah -->

    <!-- ======= Disini nanti apa terserah ======= -->
    <!-- Your Disini nanti apa terserah content goes here -->
    <!-- End Disini nanti apa terserah -->

    <!-- ======= alumni Section ======= -->
    <?php include('sections/alumni.php');?>
    <!-- End alumni Section -->

    <!-- ======= Clients Section ======= -->
    <?php include('sections/klien.php');?>
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
        select("#navbar").classList.toggle("navbar-mobile");
        this.classList.toggle("bi-list");
        this.classList.toggle("bi-x");
      });
    });
  </script>

</body>

</html>

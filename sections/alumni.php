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
    /* Alumni Card Styling */
    .alumni-item {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .alumni-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 0 auto 15px; /* Center the image */
      display: block;
    }

    .alumni-item h3 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }

    .alumni-item h4 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #777;
    }

    .alumni-item p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }
  </style>
</head>
<body>

<!-- ======= Alumni Section ======= -->
<section id="alumni" class="alumni">
  <div class="container" data-aos="zoom-in">
    <header class="section-header text-center">
      <h3>Kata Alumni</h3>
    </header>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="swiper-container alumni-slider" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="alumni-item">
                <img src="assets/img/testimonial-1.jpg" class="alumni-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="alumni-item">
                <img src="assets/img/testimonial-2.jpg" class="alumni-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="alumni-item">
                <img src="assets/img/testimonial-2.jpg" class="alumni-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<!-- Swiper Initialization Script -->
<script>
  var swiper = new Swiper('.alumni-slider', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>

</body>
</html>

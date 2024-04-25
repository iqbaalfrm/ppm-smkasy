<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    .contact .info-container {
  background-color: var(--color-primary);
  height: 100%;
  padding: 20px;
  border-radius: 10px 0 0 10px;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
}

.contact .info-item {
  width: 100%;
  background-color: #379237;
  margin-bottom: 20px;
  padding: 20px;
  border-radius: 10px;
  color: #fff;
}

.contact .info-item:last-child {
  margin-bottom: 0;
}

.contact .info-item i {
  font-size: 20px;
  color: #fff;
  float: left;
  width: 44px;
  height: 44px;
  background-color: rgba(255, 255, 255, 0.2);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  margin-right: 15px;
}

.contact .info-item h4 {
  padding: 0;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 5px;
}

.contact .info-item p {
  padding: 0;
  margin-bottom: 0;
  font-size: 14px;
}

.contact .info-item:hover i {
  background: #fff;
  color: var(--color-primary);
}

.contact .php-email-form {
  width: 100%;
  height: 100%;
  background: #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 0 10px 10px 0;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email],
.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form input[type=text]:focus,
.contact .php-email-form input[type=email]:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #379237;
  border: 0;
  padding: 14px 45px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}





@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMK ASY-SYAMSURIYYAH</title>
  <?php include('dependensi.php');?>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <!-- Favicons -->

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

  

  <!-- =======================================================
  * Template Name: Rapid
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a href="index.html">Beranda</a></li>
          <li>Kontak</li>
        </ol>


      </div>
    </section><!-- End Breadcrumbs -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Lokasi:</h4>
                  <p>Jalan Raya Pebatan-Rengaspendawa Km 7, Jagalempeni, Kec. Wanasari, Kab. Brebes Prov. Jawa Tengah</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>smk.asyamsuriyyah@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telepon:</h4>
                  <ul>
                    <li>+62 857 4777 791 (M. Hasbi Affandi)</li>
                    <li>+62 857 0145 379 (Zainul Ma'arif)</li>
                  </ul>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Jam Kerja:</h4>
                  <p>Senin - Sabtu : 07.00 - 14.00</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder=" Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Pesan Anda" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

      <!-- ======= Clients Section ======= -->
    
       
    <?php
     include "sections/klien.php";
    ?>
      <!-- ======= End Clients Section ======= -->
 
      <!-- footer Section -->
      <?php
      include "footer.php";
      ?>
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
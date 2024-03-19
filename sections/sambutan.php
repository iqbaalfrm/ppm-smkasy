<section id="sambutan" class="sambutan">

<div class="container" data-aos="fade-up">
  <div class="row">

    <div class="col-lg-5 col-md-6">
      <div class="sambutan-img" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/sambutan-img.jpg" alt="">
      </div>
    </div>

    <div class="col-lg-7 col-md-6">
      <div class="sambutan-content" data-aos="fade-left" data-aos-delay="100">
      <?php
              include "koneksi.php";
              $sambutan = mysqli_query(
                $koneksi,
                "SELECT * FROM sambutan",
              );
              $data = mysqli_fetch_array($sambutan);
              ?>
      <h1>Sambutan Kepala Sekolah</h1>
      <?= $data["sambutan"] ?>
        <ul>
          <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

</section>
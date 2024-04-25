<section id="why-us" class="why-us">
  <div class="container-fluid" data-aos="fade-up">
    <!-- Content here if needed -->
  </div>

  <div class="container">
    <div class="row counters justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="301" data-purecounter-duration="1" class="purecounter"></span>
        <p><b>Jumlah Siswa</b></p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
        <p><b>Jumlah Tenaga Pendidik</b></p>
      </div>

      <!-- Counter Section for Total Prestasi -->
      <div class="col-lg-3 col-6 text-center">
        <?php
        // Include koneksi ke database
        include "koneksi.php";

        // Query untuk mengambil data prestasi
        $sql = "SELECT COUNT(*) as total FROM prestasi";
        $result = mysqli_query($koneksi, $sql);

        // Ambil jumlah total prestasi dari hasil query
        $row = mysqli_fetch_assoc($result);
        $totalPrestasi = $row['total'];

        // Jangan lupa tutup koneksi
        mysqli_close($koneksi);
        ?>
        <span data-purecounter-start="0" data-purecounter-end="<?php echo $totalPrestasi; ?>" data-purecounter-duration="1" class="purecounter"></span>
        <p><b>Jumlah Prestasi yang Diperoleh</b></p>
      </div>
      <!-- End Counter Section for Total Prestasi -->

    </div>
  </div>
</section>

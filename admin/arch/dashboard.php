<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- Card Berita -->
      <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <?php
              // Mengambil jumlah berita dari database (misalnya tabel berita)
              $query_berita = "SELECT COUNT(*) AS total_berita FROM berita";
              $result_berita = mysqli_query($koneksi, $query_berita);
              $row_berita = mysqli_fetch_assoc($result_berita);
              $total_berita = $row_berita['total_berita'];
            ?>
            <h3><?php echo $total_berita; ?></h3>
            <p>Berita</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- Card Prestasi -->
      <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <?php
              // Mengambil jumlah prestasi dari database (misalnya tabel prestasi)
              $query_prestasi = "SELECT COUNT(*) AS total_prestasi FROM prestasi";
              $result_prestasi = mysqli_query($koneksi, $query_prestasi);
              $row_prestasi = mysqli_fetch_assoc($result_prestasi);
              $total_prestasi = $row_prestasi['total_prestasi'];
            ?>
            <h3><?php echo $total_prestasi; ?></h3>
            <p>Prestasi</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <!-- Card Guru -->
      <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <?php
              // Mengambil jumlah guru dari database (misalnya tabel guru)
              $query_guru = "SELECT COUNT(*) AS total_guru FROM guru";
              $result_guru = mysqli_query($koneksi, $query_guru);
              $row_guru = mysqli_fetch_assoc($result_guru);
              $total_guru = $row_guru['total_guru'];
            ?>
            <h3><?php echo $total_guru; ?></h3>
            <p>Guru</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

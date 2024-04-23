<head>
 <?php include('dependensi.php');?>
</head>
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">
      
      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/header.png" alt="" class="img-fluid"></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Beranda</a></li>
          <li class="dropdown">
            <a href="#"><span>Profil Sekolah</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="tentang-kami.php">Tentang Kami</a></li>
              <li><a href="tendik.php">Profil Tenaga Pendidik</a></li>
              <li><a href="prestasi.php">Prestasi</a></li>
              <li><a href="kontak.php">Kontak</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown">
                <a href="#"><span>Profil Jurusan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="tkr.php">Teknik Kendaraan Ringan</a></li>
                  <li><a href="rpl.php">Rekayasa Perangkat Lunak</a></li>
                  <li><a href="mm.php">Desain Komunikasi Visual</a></li>
                </ul>
              </li>
              <li><a href="ekstra.php">Ekstrakurikuler</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <a href="blog-page.php"><span>Berita</span></i></a>
              <li><a href="galeri.php">Galeri</a></li>
            </ul>
          </li>
          <li class="bkk">
            <a href="bkk.php"><span>BKK</span></a>
          
          </li>
          <button class="scrollto btn-ppdb round" onclick="window.location.href='ppdb.php'">PPDB</button>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      </header>
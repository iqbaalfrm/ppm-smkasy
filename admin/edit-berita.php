<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}

include "koneksi.php";

// Ambil ID berita dari URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];

  // Query untuk mengambil data berita berdasarkan ID
  $query = "SELECT * FROM berita WHERE id = $id";
  $result = mysqli_query($koneksi, $query);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $judul = $row['judul'];
    $deskripsi = $row['deskripsi'];
    $gambar = $row['gambar'];
  } else {
    // Jika tidak ada berita dengan ID tersebut
    echo "Berita tidak ditemukan.";
    exit();
  }
} else {
  // Jika ID tidak valid atau tidak ada
  echo "ID berita tidak valid.";
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $judul = $_POST["judul"];
  $deskripsi = $_POST["deskripsi"];
  
  // Menghandle upload gambar
  if (!empty($_FILES["gambar"]["name"])) {
    $gambar = $_FILES["gambar"];
    $namaFile = $gambar["name"];
    $ukuranFile = $gambar["size"];
    $tmpFile = $gambar["tmp_name"];
    $error = $gambar["error"];

    // Cek apakah ada file yang diupload
    if ($error === 4) {
      // Jika tidak ada file yang diupload
      echo "Silakan pilih gambar terlebih dahulu.";
    } else {
      // Jika ada file yang diupload
      $ekstensiValid = ['jpg', 'jpeg', 'png', 'gif'];
      $ekstensiGambar = explode('.', $namaFile);
      $ekstensiGambar = strtolower(end($ekstensiGambar));

      // Cek ekstensi file
      if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "Ekstensi file yang diupload tidak valid.";
      } else {
        // Cek ukuran file (dalam byte)
        if ($ukuranFile > 2000000) {
          echo "Ukuran file terlalu besar. Maksimal 2MB.";
        } else {
          // Generate nama file baru agar tidak ada nama file yang sama
          $namaFileBaru = uniqid();
          $namaFileBaru .= '.';
          $namaFileBaru .= $ekstensiGambar;

          // Pindahkan file yang diupload ke folder uploads
          move_uploaded_file($tmpFile, 'dist/img/uploads/' . $namaFileBaru);

          // Update data ke database
          $query = "UPDATE berita SET judul = '$judul', deskripsi = '$deskripsi', gambar = '$namaFileBaru' WHERE id = $id";
          $result = mysqli_query($koneksi, $query);

          if ($result) {
            // Redirect ke halaman berita.php setelah berhasil
            header("location: berita.php");
            exit();
          } else {
            echo "Gagal mengupdate berita. Silakan coba lagi.";
          }
        }
      }
    }
  } else {
    // Jika tidak ada gambar yang diupload, tetap gunakan gambar yang sudah ada
    // Update data ke database
    $query = "UPDATE berita SET judul = '$judul', deskripsi = '$deskripsi' WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      // Redirect ke halaman berita.php setelah berhasil
      header("location: berita.php");
      exit();
    } else {
      echo "Gagal mengupdate berita. Silakan coba lagi.";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Berita</title>
  <style>
    .brand-link {
      display: block;
      text-align: center;
    }
  
    .brand-text {
      display: inline-block;
    }
    
    .nav-link {
      display: flex;
      align-items: center;
    }

    .nav-link .menu-text {
      margin-left: 10px; /* Sesuaikan jarak sesuai kebutuhan */
    }
  </style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Beranda</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <span class="brand-text font-weight-light">SMK ASY-SYAMSURIYYAH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["nama"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php include('menu.php');?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Berita</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $deskripsi; ?></textarea>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <br>
                <img src="dist/img/uploads/<?php echo $gambar; ?>" alt="gambar" width="200">
                <br><br>
                <input type="file" id="gambar" name="gambar">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include('arch/footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}

include "../koneksi.php";

// Proses form jika ada data yang dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data yang dikirimkan melalui form
  $nama = $_POST["nama"];
  $jabatan = $_POST["jabatan"];

  // Proses upload gambar
  $gambar = null;
  if (isset($_FILES['gambar'])) {
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $file_type = $_FILES['gambar']['type'];
    $file_error = $_FILES['gambar']['error'];

    // Cek apakah file sudah diupload
    if ($file_error === 0) {
      $extensions = array("jpeg", "jpg", "png");

      // Ambil ekstensi file
      $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

      // Cek apakah ekstensi file sesuai dengan yang diizinkan
      if (in_array($file_ext, $extensions)) {
        // Generate nama unik untuk file
        $gambar = uniqid() . '.' . $file_ext;

        // Pindahkan file ke folder uploads
        move_uploaded_file($file_tmp, "dist/img/uploads/guru" . $gambar);
      } else {
        echo "Ekstensi file tidak diizinkan, hanya ekstensi jpeg, jpg, dan png yang diperbolehkan.";
      }
    } else {
      echo "Terjadi kesalahan saat upload file.";
    }
  }

  // Query SQL untuk menyimpan data ke database
  $query = "INSERT INTO guru (nama, jabatan, gambar) VALUES ('$nama', '$jabatan', '$gambar')";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    // Redirect ke halaman daftar ekstrakurikuler jika berhasil
    header("location: guru.php");
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Tambah Ekstrakurikuler</title>
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
            <h3 class="card-title">Tambah Ekstrakurikuler</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Ekstrakurikuler</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Ekstrakurikuler" required>
              </div>
              <div class="form-group">
                <label for="jabatan">jabatan</label>
                <textarea class="form-control" id="jabatan" name="jabatan" rows="3" placeholder="Masukkan jabatan" required></textarea>
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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
<script src="dist/js/adminlte.js"></script>
</body>
</html>

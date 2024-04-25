<?php
session_start();
if (!isset($_SESSION["level"]) || empty($_SESSION["level"])) {
  header("location:../../index.php?pesan=alert");
  exit(); // penting untuk menghentikan eksekusi kode setelah header
}

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data yang dikirimkan melalui form
  $deskripsi = $_POST["deskripsi"];

  // Query untuk memasukkan data ke dalam tabel
  $sql = "INSERT INTO prestasi (deskripsi) VALUES ('$deskripsi')";
  $result = mysqli_query($koneksi, $sql);

  if ($result) {
    header("location: prestasi.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Tambah Prestasi</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <style>
    .brand-link {
      display: block;
      text-align: center;
    }
  
    .brand-text {
      display: inline-block;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .tombol_tambah {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .tombol_tambah:hover {
      background-color: #45a049;
    }

  </style>
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
            <h3 class="card-title">Tambah Prestasi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="deskripsi">Prestasi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" class="form-control" required></textarea>
              </div>
              <button type="submit" class="tombol_tambah">Tambah Prestasi</button>
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
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

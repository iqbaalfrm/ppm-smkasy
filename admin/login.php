<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .kotak_login {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .kotak_login h2 {
      text-align: center;
      margin-top: 0;
    }

    .tulisan_login {
      text-align: center;
      font-size: 16px;
      margin-bottom: 20px;
    }

    .form_login {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

  .tombol_login {
    margin-bottom: 10px; /* Jarak bawah */
  }

    .tombol_login, .tombol_reset {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .tombol_login {
      background-color: #007bff;
      color: #fff;
    }

    .tombol_reset {
      background-color: #ccc;
      color: #000;
    }

    .tombol_login:hover, .tombol_reset:hover {
      background-color: #0056b3;
    }

    .alert {
      background-color: #f8d7da;
      color: #721c24;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #f5c6cb;
      border-radius: 4px;
    }

    .berhasil {
      background-color: #d4edda;
      color: #155724;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #c3e6cb;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <?php 
    if (isset($_GET["pesan"])) {
      if ($_GET["pesan"] == "gagal") {
        echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
      } elseif ($_GET["pesan"] == "logout") {
        echo "<div class='berhasil'>Anda berhasil logout!</div>";
      } else {
        echo "<div class='alert'>Anda belum login!</div>";
      }
    } 
  ?>
  <div class="kotak_login">
  <h2>
  <img src="logo.png" alt="Logo" style="width: 150px; height: 150px; vertical-align: middle;">
</h2>
    <p class="tulisan_login">Silahkan Login</p>
    <form action="cek_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username.." required="required" autofocus>
      <label>Password</label>
      <input type="password" name="password" class="form_login" placeholder="Password.." required="required">
      <hr>
      <input type="submit" class="tombol_login" value="MASUK">
      <a href="../index.php"><input type="button" class="tombol_reset" value="KEMBALI"></a>
    </form>
  </div>
</body>
</html>

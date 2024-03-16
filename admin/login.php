<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    
    .h-custom {
      height: calc(100% - 73px);
    }
    
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
</head>
<body>
  <?php if (isset($_GET["pesan"])) {
   if ($_GET["pesan"] == "gagal") {
     echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
   } elseif ($_GET["pesan"] == "logout") {
     echo "<div class=berhasil>Anda berhasil logout!</div>";
   } else {
     echo "<div class='alert'>Anda belum login!</div>";
   }
 } ?>
  <br><br>
  <div class="kotak_login">
		<center><h2>Halaman Login</h2></center><hr>
		<p class="tulisan_login">Silahkan Login</p>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username.." required="required" autofocus>
			<label>Password</label>
			<input type="p	assword" name="password" class="form_login" placeholder="Password.." required="required"><hr>
			<input type="submit" class="tombol_login" value="LOGIN">&nbsp;
			<a href="../index.php"><input type="button" class="tombol_reset" value="BACK"></a>
		<br/>
		<br/>
		</form>
	</div>
</body>
</html>
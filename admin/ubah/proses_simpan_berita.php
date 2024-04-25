<?php
include "../koneksi.php";

// Ambil data yang dikirimkan melalui form
$id = $_POST["id"];
$judul = $_POST["judul"];
$tanggal = $_POST["tanggal"];
$deskripsi = $_POST["deskripsi"];

// Periksa apakah ada file gambar yang diunggah
if ($_FILES["gambar"]["name"]) {
    // Jika ada, proses upload gambar baru
    $gambar = $_FILES["gambar"]["name"];
    $tmp = $_FILES["gambar"]["tmp_name"];
    $fotobaru = date("dmYHis") . $gambar;
    $path = "../../dist/img/$fotobaru"; // Ubah jalur tujuan sesuai dengan lokasi direktori yang Anda inginkan

    // Pindahkan file gambar baru ke folder tujuan
   // Ubah jalur tujuan sesuai dengan lokasi direktori yang Anda inginkan
$path = "../../dist/img/$fotobaru"; 

// Pindahkan file gambar baru ke folder tujuan
if (move_uploaded_file($tmp, $path)) {
    // Jika berhasil diupload, update data berita dengan gambar baru
    // Perbarui variabel $fotobaru untuk menyertakan jalur lengkap
    $fotobaru = "dist/img/$fotobaru";
    $query = "UPDATE berita SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi', gambar='$fotobaru' WHERE id='$id'";

    } else {
        // Jika gagal mengupload gambar, tampilkan pesan error
        echo "Maaf, gambar gagal untuk diupload";
        echo "<br><a href='form_ubah_berita.php?id=$id'>Kembali ke Form</a>";
        exit(); // Hentikan eksekusi skrip
    }
} else {
    // Jika tidak ada file gambar yang diunggah, update data berita tanpa mengubah gambar
    $query = "UPDATE berita SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi' WHERE id='$id'";
}

// Jalankan kueri untuk melakukan update data berita
$sql = mysqli_query($koneksi, $query);

// Periksa apakah kueri berhasil dijalankan
if ($sql) {
    // Jika berhasil, arahkan kembali ke halaman berita
    header("location:../berita.php?pesan=sukses");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='form_ubah_berita.php?id=$id'>Kembali ke Form</a>";
}
?>
<?php
include "../koneksi.php";

// Ambil data yang dikirimkan melalui form
$id = $_POST["id"];
$judul = $_POST["judul"];
$tanggal = $_POST["tanggal"];
$deskripsi = $_POST["deskripsi"];

// Periksa apakah ada file gambar yang diunggah
if ($_FILES["gambar"]["name"]) {
    // Jika ada, proses upload gambar baru
    $gambar = $_FILES["gambar"]["name"];
    $tmp = $_FILES["gambar"]["tmp_name"];
    $fotobaru = date("dmYHis") . $gambar;
    $path = "../../dist/img/$fotobaru"; // Ubah jalur tujuan sesuai dengan lokasi direktori yang Anda inginkan

    // Pindahkan file gambar baru ke folder tujuan
    if (move_uploaded_file($tmp, $path)) {
        // Jika berhasil diupload, update data berita dengan gambar baru
        $query = "UPDATE berita SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi', gambar='$fotobaru' WHERE id='$id'";
    } else {
        // Jika gagal mengupload gambar, tampilkan pesan error
        echo "Maaf, gambar gagal untuk diupload";
        echo "<br><a href='form_ubah_berita.php?id=$id'>Kembali ke Form</a>";
        exit(); // Hentikan eksekusi skrip
    }
} else {
    // Jika tidak ada file gambar yang diunggah, update data berita tanpa mengubah gambar
    $query = "UPDATE berita SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi' WHERE id='$id'";
}

// Jalankan kueri untuk melakukan update data berita
$sql = mysqli_query($koneksi, $query);

// Periksa apakah kueri berhasil dijalankan
if ($sql) {
    // Jika berhasil, arahkan kembali ke halaman berita
    header("location:../berita.php?pesan=sukses");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='form_ubah_berita.php?id=$id'>Kembali ke Form</a>";
}
?>

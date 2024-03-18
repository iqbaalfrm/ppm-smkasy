-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2024 pada 04.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkasy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `deskripsi`, `gambar`) VALUES
(4, 'Akmal tercyduck jumatan online lagi', '2019-10-04', 'Pada hari jumat 4/10/2019, seorang siswa bernama Akmal Abdussyukur tercyduck sedang Jumatan Online di suatu warnet', '10102019035645causes-1.jpg'),
(5, 'Pemrov Jabar Sediakan Pendidikan Layanan Khusus di LPKA Kelas II Bandung 2', '2019-10-18', '<p>Pemerintah Provinsi Jawa Barat melalui Dinas Pendidikan Provinsi Jabar menggelar Pendidikan formal bagi anak usia sekolah yang bermasalah dengan hukum.</p>', '171020190345163.jpg'),
(6, 'Mahad Aly, Mengembalikan Pendidikan Asli Indonesia', '2019-10-14', '<p>Sejak tahun 2016, setelah Menteri Agama RI meresmikan penyelenggaraan sejumlah satuan pendidikan Mahad Aly di beberapa pesantren</p>', '171020190401401571271936.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id` int(11) NOT NULL,
  `sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id`, `sambutan`) VALUES
(1, '<p><strong>Assalamualaikum, Wr. Wb.</strong><br />Puji dan syukur kami panjatkan kehadirat Allah SWT yang masih melimpahkan berbagai Rahmat dan Nikmat-Nya, terutama nikmat umur, kesehatan serta nikmat kesempatan sehingga kita dapat menjalankan aktifitas kita sehari-hari, khususnya bagi SMK Negeri 7 Baleendah masih dapat beraktifitas memajukan peserta didik untuk mencapai tujuan yang diinginkan.<br />SMK Negeri 7 Baleendah terus berupaya untuk meningkatkan pelayanan informasi terhadap seluruh komponen sekolah baik itu pendidik, siswa, maupun masyarakat. Salah satu upaya yang dilakukan sekolah yaitu memilikinya jaringan internet dan website dengan tujuan:<br />1. Adanya interaktif internal sekolah (Kepala sekolah, pendidik, peserta didik, dan orang tua siswa serta komite sekolah).<br />2. Terjadinya interaktif eksternal sekolah dengan dunia luar.<br />3. Pemanfaatan teknologi dan informasi yang semakin cepat untuk peningkatan pembelajaran.<br />4. Penyampaian informasi dari sekolah ke orang tua siswa dan komite ataupun dengan pihak lain yang terkait.<br />5. Mempercepat penyampaian informasi, saran, masukan tanpa harus bertatap muka diantara warga sekolah dan dunia luar.<br />Akhirnya kami berharap dengan adanya website ini diharapkan agar warga sekolah dapat mengambil manfaat sebesar-besarnya demi memajukan sekolah dan peningkatan mutu pendidikan. Selamat bergabung di website SMK Negeri 7 Baleendah, kritik dan saran yang membangun sangat kami harapkan.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'admin2', 'admin234', 'Iqbal Firmansyah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

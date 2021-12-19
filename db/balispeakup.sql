-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2021 pada 06.34
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsp2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama_kabupaten`, `tanggal_dibuat`) VALUES
(1, 'Denpasar', '2021-12-07 23:48:42'),
(5, 'Badung', '2021-12-09 13:17:11'),
(6, 'Bangli', '2021-12-09 13:17:23'),
(7, 'Buleleng', '2021-12-09 13:17:33'),
(8, 'Gianyar', '2021-12-09 13:17:39'),
(9, 'Jembrana', '2021-12-09 13:17:47'),
(10, 'Karangasem', '2021-12-09 13:18:12'),
(11, 'Klungkung', '2021-12-09 13:18:22'),
(12, 'Tabanan', '2021-12-09 13:18:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_laporan`
--

CREATE TABLE `kategori_laporan` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi_kategori` longtext NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_laporan`
--

INSERT INTO `kategori_laporan` (`id`, `nama_kategori`, `deskripsi_kategori`, `tanggal_dibuat`) VALUES
(1, 'Penyekapan', 'Penyekapan adalah salah satu aksi kejahatan yang kerap dilakukan penjahat dengan berbagai motif dalam menjalan aksinya mulai dari asmara sama perdagangan manusia.', '2021-12-07 23:58:51'),
(2, 'KDRT', 'Tindakan kekerasan di dalam rumah tangga contohnya pemukulan terhadap suami/istri', '2021-12-08 01:45:06'),
(4, 'Bullying', 'Merupakan segala bentuk penindasan atau kekerasan yang dilakukan dengan sengaja oleh satu orang atau sekelompok orang yang lebih kuat atau berkuasa terhadap orang lain, dengan tujuan untuk menyakiti dan dilakukan secara terus menerus', '2021-12-09 12:38:03'),
(5, 'Kekerasan Seksual', 'Suatu tindakan atau perbuatan yang dilakukan oleh seseorang yang merendahkan, menghina, atau tindakan yang lainnya terhadap orang lain yang menyerang tubuh korban yang bersangkutan secara paksa dengan hasrat seksual seseorang dan atau fungsi reproduksi yang dilakukan secara paksa', '2021-12-09 13:12:46'),
(6, 'Penyiksaan', 'Merupakan perbuatan yang dilakukan dengan sengaja, yang menimbulkan rasa sakit, baik penderitaan jasmani atau rohani', '2021-12-09 13:16:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_user`
--

CREATE TABLE `laporan_user` (
  `laporan_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama_korban` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `alamat` tinytext NOT NULL,
  `detail_laporan` mediumtext NOT NULL,
  `file_laporan` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `sifat_laporan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_user`
--

INSERT INTO `laporan_user` (`laporan_id`, `id_user`, `kategori`, `nama_korban`, `kabupaten`, `alamat`, `detail_laporan`, `file_laporan`, `tanggal_dibuat`, `status`, `sifat_laporan`) VALUES
(8, 1, 2, 'jsdkcs', 'Denpasar', 'baajs', 'ajsxjab', '7cb68eb215ddd4ed94b14b1ed59d366a.jpg', '2021-12-16 11:56:12', NULL, 'rahasia'),
(9, 1, 4, 'saksad', 'Bangli', 'nazxajbsjs', 'asjxak', '', '2021-12-16 12:00:27', 'Selesai diproses', 'anonim'),
(10, 1, 5, 'mskam', 'Bangli', 'jsxaiia', 'sxianjiia', '9f8316535aa6b3e9222cb7995f7be91f.jpg', '2021-12-16 12:01:07', NULL, 'tampilkan'),
(11, 1, 1, 'sxzc', 'Badung', 'sscxzsc', 'sxczsc', '', '2021-12-17 14:06:05', NULL, 'sxzc'),
(12, 1, 2, 'xzxz', 'Denpasar', 'sxczcssxz', 'axs', '', '2021-12-17 14:06:49', 'Sedang diproses', 'anonim'),
(13, 1, 6, 'nbkn', 'Badung', 'mnkkk', 'bhbkjojn', '', '2021-12-18 14:27:08', 'Selesai diproses', 'anonim'),
(14, 1, 2, ' mkllml', 'Denpasar', 'bhbjhbk', 'njnknj', '', '2021-12-18 14:27:27', NULL, ' mkllml'),
(15, 1, 4, 'n nkk', 'Jembrana', 'mnkn kn', 'n  jkkj jnk', '', '2021-12-18 14:27:46', NULL, 'rahasia'),
(16, 1, 4, ' mkmll', 'Buleleng', ' nm nk m', ' nmnk', '', '2021-12-18 14:28:04', 'Selesai diproses', 'anonim'),
(17, 1, 4, 'mm,ml', 'Buleleng', ' ,mklnlkml', 'bjhbjhbkjn', '', '2021-12-18 14:30:37', 'Sedang diproses', 'mm,ml'),
(18, 1, 4, 'mnk', 'Gianyar', 'nk', 'ksdadk', '', '2021-12-19 05:21:35', NULL, 'rahasia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_laporan`
--

CREATE TABLE `status_laporan` (
  `id_status` int(11) NOT NULL,
  `laporan_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `tanggal_remark` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_laporan`
--

INSERT INTO `status_laporan` (`id_status`, `laporan_id`, `status`, `remark`, `tanggal_remark`) VALUES
(1, 1, 'Sedang diproses', 'njjh', '2021-12-08 01:27:01'),
(2, 1, 'Selesai diproses', 'done', '2021-12-08 01:36:15'),
(3, 4, 'Sedang diproses', 'bhv', '2021-12-08 11:57:57'),
(4, 4, 'Selesai diproses', 'bjbhj', '2021-12-08 11:58:26'),
(5, 6, 'Sedang diproses', 'sedang diproses', '2021-12-09 12:36:33'),
(6, 6, 'Selesai diproses', 'sudah selesai', '2021-12-09 12:37:02'),
(7, 5, 'Selesai diproses', 'a', '2021-12-09 12:39:02'),
(8, 9, 'Selesai diproses', 'bjknk', '2021-12-16 12:10:36'),
(9, 2, 'Selesai diproses', 'xcz', '2021-12-19 05:24:36'),
(10, 12, 'Sedang diproses', 'n mn', '2021-12-19 05:25:00'),
(11, 16, 'Selesai diproses', 'kklknk', '2021-12-19 05:26:43'),
(12, 17, 'Sedang diproses', 'scsdfds', '2021-12-19 05:26:59'),
(13, 13, 'Selesai diproses', 'nmm', '2021-12-19 05:27:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nomor_telp` bigint(13) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `tanggal_regis` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `password`, `nomor_telp`, `kabupaten`, `alamat`, `tanggal_regis`, `status`) VALUES
(1, 'latiras', 'latiras123@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 'Denpasar', 'www', '2021-12-07 23:47:19', 1),
(2, 'aa123', 'aa123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'Denpasar', 'cxzxss', '2021-12-08 11:10:29', 1),
(3, 'juan', 'junker6.jd@gmail.com', '202cb962ac59075b964b07152d234b70', 81298505259, 'jakarta', 'kp. tanah merah atas', '2021-12-09 12:32:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_user`
--
ALTER TABLE `laporan_user`
  ADD PRIMARY KEY (`laporan_id`);

--
-- Indeks untuk tabel `status_laporan`
--
ALTER TABLE `status_laporan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporan_user`
--
ALTER TABLE `laporan_user`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `status_laporan`
--
ALTER TABLE `status_laporan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

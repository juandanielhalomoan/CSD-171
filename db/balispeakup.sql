-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 02:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balispeakup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
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
-- Table structure for table `kategori_laporan`
--

CREATE TABLE `kategori_laporan` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `deskripsi_kategori` longtext NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_laporan`
--

INSERT INTO `kategori_laporan` (`id`, `nama_kategori`, `deskripsi_kategori`, `tanggal_dibuat`) VALUES
(1, 'Penyekapan', 'Penyekapan adalah salah satu aksi kejahatan yang kerap dilakukan penjahat dengan berbagai motif dalam menjalan aksinya mulai dari asmara sama perdagangan manusia.', '2021-12-07 23:58:51'),
(2, 'KDRT', 'Tindakan kekerasan di dalam rumah tangga contohnya pemukulan terhadap suami/istri', '2021-12-08 01:45:06'),
(4, 'bullying', 'Merupakan segala bentuk penindasan atau kekerasan yang dilakukan dengan sengaja oleh satu orang atau sekelompok orang yang lebih kuat atau berkuasa terhadap orang lain, dengan tujuan untuk menyakiti dan dilakukan secara terus menerus', '2021-12-09 12:38:03'),
(5, 'Kekerasan Seksual', 'Suatu tindakan atau perbuatan yang dilakukan oleh seseorang yang merendahkan, menghina, atau tindakan yang lainnya terhadap orang lain yang menyerang tubuh korban yang bersangkutan secara paksa dengan hasrat seksual seseorang dan atau fungsi reproduksi yang dilakukan secara paksa', '2021-12-09 13:12:46'),
(6, 'Penyiksaan', 'Merupakan perbuatan yang dilakukan dengan sengaja, yang menimbulkan rasa sakit, baik penderitaan jasmani atau rohani', '2021-12-09 13:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_user`
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
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_user`
--

INSERT INTO `laporan_user` (`laporan_id`, `id_user`, `kategori`, `nama_korban`, `kabupaten`, `alamat`, `detail_laporan`, `file_laporan`, `tanggal_dibuat`, `status`) VALUES
(1, 1, 1, 'nama korban', 'Denpasar', '', 'lorem ipsum', '7cb68eb215ddd4ed94b14b1ed59d366a.jpg', '2021-12-07 23:59:54', 'Selesai diproses'),
(2, 1, 1, 'iszx', 'Denpasar', 'xcjd', 'hdscb', '0f76d6a9d4dbc4b621d8d4d003d39caa.jpg', '2021-12-08 00:11:26', NULL),
(3, 2, 1, 'aa', 'Denpasar', 'aaa', 'aaa', '7cb68eb215ddd4ed94b14b1ed59d366a.jpg', '2021-12-08 11:21:55', NULL),
(4, 2, 2, 'sxzz', 'Denpasar', 'sdx', 'asz', '', '2021-12-08 11:28:05', 'Selesai diproses'),
(5, 2, 1, 'xzA', 'Denpasar', 'xcs', 'sa', '', '2021-12-08 11:30:45', 'Selesai diproses'),
(6, 3, 1, 'daniel', 'Denpasar', 'kp.tanah merah', 'hari ini aku mendapat kekerasan', '', '2021-12-09 12:33:45', 'Selesai diproses');

-- --------------------------------------------------------

--
-- Table structure for table `status_laporan`
--

CREATE TABLE `status_laporan` (
  `id_status` int(11) NOT NULL,
  `laporan_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `tanggal_remark` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_laporan`
--

INSERT INTO `status_laporan` (`id_status`, `laporan_id`, `status`, `remark`, `tanggal_remark`) VALUES
(1, 1, 'Sedang diproses', 'njjh', '2021-12-08 01:27:01'),
(2, 1, 'Selesai diproses', 'done', '2021-12-08 01:36:15'),
(3, 4, 'Sedang diproses', 'bhv', '2021-12-08 11:57:57'),
(4, 4, 'Selesai diproses', 'bjbhj', '2021-12-08 11:58:26'),
(5, 6, 'Sedang diproses', 'sedang diproses', '2021-12-09 12:36:33'),
(6, 6, 'Selesai diproses', 'sudah selesai', '2021-12-09 12:37:02'),
(7, 5, 'Selesai diproses', 'a', '2021-12-09 12:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `password`, `nomor_telp`, `kabupaten`, `alamat`, `tanggal_regis`, `status`) VALUES
(1, 'latiras', 'latiras123@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 'Denpasar', 'wwww', '2021-12-07 23:47:19', 1),
(2, 'aa123', 'aa123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'Denpasar', 'cxzxss', '2021-12-08 11:10:29', 1),
(3, 'juan', 'junker6.jd@gmail.com', '202cb962ac59075b964b07152d234b70', 81298505259, 'jakarta', 'kp. tanah merah atas', '2021-12-09 12:32:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_user`
--
ALTER TABLE `laporan_user`
  ADD PRIMARY KEY (`laporan_id`);

--
-- Indexes for table `status_laporan`
--
ALTER TABLE `status_laporan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laporan_user`
--
ALTER TABLE `laporan_user`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status_laporan`
--
ALTER TABLE `status_laporan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

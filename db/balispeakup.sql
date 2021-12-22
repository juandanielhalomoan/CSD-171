-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 03:44 PM
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
(4, 'Bullying', 'Merupakan segala bentuk penindasan atau kekerasan yang dilakukan dengan sengaja oleh satu orang atau sekelompok orang yang lebih kuat atau berkuasa terhadap orang lain, dengan tujuan untuk menyakiti dan dilakukan secara terus menerus', '2021-12-09 12:38:03'),
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
  `status` varchar(50) DEFAULT NULL,
  `sifat_laporan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_user`
--

INSERT INTO `laporan_user` (`laporan_id`, `id_user`, `kategori`, `nama_korban`, `kabupaten`, `alamat`, `detail_laporan`, `file_laporan`, `tanggal_dibuat`, `status`, `sifat_laporan`) VALUES
(19, 4, 1, 'jodi kurniawan', 'Denpasar', 'jl pidada lX no1', 'Tolong di tindak lanjuti mengenai korban penyekapan di jl pidada lX no1', 'penyekapan.jpg', '2021-12-22 12:36:27', 'Selesai diproses', 'jodi kurniawan'),
(20, 9, 2, 'Naomi Juliana', 'Badung', 'jl badung merdeka Xll', 'Ada seorang ibu rumah tangga bernama Mariam yang tidak mampu menahan tangis dikarenakan disiksa oleh suami,  Saya sungguh miris melihat ini, tolong ditanggapi pak', 'penyiksaan.jpg', '2021-12-22 14:04:15', 'Sedang diproses', 'Naomi Juliana'),
(21, 5, 4, 'Arkan Wijdan', 'Bangli', 'jl Bangli llV no3', 'Tolong saya pak/bu saya dibully oleh teman sekelas saya dikarenakan saya tidak memberikan contekan ulangan akhir sekolah, setiap saya di sekolah saya selalu dipukuli dan dirundung tolong bantu saya', 'bullying.jpg', '2021-12-22 14:10:39', 'Sedang diproses', 'Arkan Wijdan'),
(22, 6, 5, 'Reza Septian', 'Buleleng', 'jl Buleleng park no89', 'waktu itu saya ditawari oleh om\" berusia 40 tahun dia mengiming imingi uang senilai 100 rb,jika saya menuruti permintaanya. setelah saya menuruti permintaan tersebut saya dibawa ke tempat sepi dan dilecehkan secara brutal tolong sayaaa', '', '2021-12-22 14:14:38', 'Selesai diproses', 'Reza Septian'),
(23, 7, 6, 'Alpi syahdan', 'Gianyar', 'jl Gianyar no19', 'Saya mengeluhkan mengenai tindak kekerasan ayah saya terhadap saya. karena setiap dia pulang kerumah dalam keadaan mabuk, saya selalu dipukuli oleh dia ', '', '2021-12-22 14:19:58', 'Selesai diproses', 'Alpi syahdan'),
(24, 8, 2, 'Rio Prasetyo', 'Jembrana', 'jl Jembrana', 'Setiap orang tua saya berkelahi, saya selalu dipukuli oleh ibu saya karena dia sangat membeci ayah saya dan melepaskan hasrat emosi kepada saya', '', '2021-12-22 14:21:49', 'Selesai diproses', 'Rio Prasetyo'),
(25, 10, 5, 'Remida Agustina', 'Karangasem', 'jl Karangasem no3', 'Saya mengeluhkan tindak pelecehan terhadap ayah tiri saya, ketika ibu saya bekerja saya dan ayah tiri saya dirumah dan dia selalu menggoda saya dan memberikan sentuhan fisik ke area sensitif', '', '2021-12-22 14:24:50', 'Sedang diproses', 'Remida Agustina'),
(26, 10, 6, 'Andini septiani', 'Karangasem', 'jl Karangasem no44', 'Kepada Yth, tolong ditindak lanjuti mengenai penyiksaan seorang anak berusia 6 tahun di jln karangasem, dia dipaksa oleh orang tuanya untuk setiap hari mengemis dan mencuri. selesai bekerja dia wajib menyetorkan hasilnya kepada ayahnya', '', '2021-12-22 14:30:45', 'Sedang diproses', 'anonim'),
(27, 3, 4, 'Juan Daniel', 'Klungkung', 'jl Klungkung asem no2', 'Tolong bantu saya menangani tindak kekerasan teman sekolah saya, setiap saya dateng kesekolah saya selalu dipalak uang sebesar 3000 bahkan parahnya saya selalu menjadi bahan suruhan untuk mengikuti setiap perintah yang dia berikan, jika saya menolaknya saya selalu dipukuli ', '', '2021-12-22 14:33:52', 'Selesai diproses', 'Juan Daniel'),
(28, 12, 5, 'Adang Pirman', 'Tabanan', 'jl Tabanan Merdeka no2', 'Tolong bantu saya mengenai orang aneh yang ada dipos rw08, ketika saya melewati tempat tersebut saya selalu diminta untuk berbuat aneh kepada pelaku tersebut', '', '2021-12-22 14:38:49', 'Selesai diproses', 'anonim'),
(29, 11, 1, 'Eisent Hower', 'Tabanan', 'jl Tabanan Atas no4', 'ada seorang anak berusia 9 tahun dia culik oleh 3 orang dan membawanya menggunakan mobil kijang inova no platnya DK6558, tolong di tindak lanjuti mengenai korban penyekapan di daerah tabanan atas,', '', '2021-12-22 14:42:07', 'Sedang diproses', 'anonim');

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
(7, 5, 'Selesai diproses', 'a', '2021-12-09 12:39:02'),
(8, 9, 'Selesai diproses', 'bjknk', '2021-12-16 12:10:36'),
(9, 2, 'Selesai diproses', 'xcz', '2021-12-19 05:24:36'),
(10, 12, 'Sedang diproses', 'n mn', '2021-12-19 05:25:00'),
(11, 16, 'Selesai diproses', 'kklknk', '2021-12-19 05:26:43'),
(12, 17, 'Sedang diproses', 'scsdfds', '2021-12-19 05:26:59'),
(13, 13, 'Selesai diproses', 'nmm', '2021-12-19 05:27:19'),
(14, 19, 'Selesai diproses', 'makasih', '2021-12-22 12:37:47'),
(15, 20, 'Sedang diproses', 'terima kasih atas pelaporannya', '2021-12-22 14:05:02'),
(16, 21, 'Sedang diproses', 'sedang diproses', '2021-12-22 14:11:55'),
(17, 22, 'Selesai diproses', 'sudah diproses', '2021-12-22 14:15:06'),
(18, 23, 'Selesai diproses', 'sudah diproses', '2021-12-22 14:25:17'),
(19, 24, 'Selesai diproses', 'sudah diproses', '2021-12-22 14:25:35'),
(20, 25, 'Sedang diproses', 'sedang diproses', '2021-12-22 14:25:49'),
(21, 26, 'Sedang diproses', 'sedang ditindak lanjuti', '2021-12-22 14:31:06'),
(22, 27, 'Selesai diproses', 'selesai diproses', '2021-12-22 14:34:44'),
(23, 28, 'Selesai diproses', 'sudah diproses', '2021-12-22 14:42:39'),
(24, 29, 'Sedang diproses', 'sedang diproses', '2021-12-22 14:42:54');

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
(1, 'latiras', 'latiras123@gmail.com', '202cb962ac59075b964b07152d234b70', 123, 'Denpasar', 'www', '2021-12-07 23:47:19', 1),
(2, 'aa123', 'aa123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234, 'Denpasar', 'cxzxss', '2021-12-08 11:10:29', 1),
(3, 'juan', 'junker6.jd@gmail.com', '202cb962ac59075b964b07152d234b70', 81298505259, 'jakarta', 'kp. tanah merah atas', '2021-12-09 12:32:48', 1),
(4, 'Jodi Kurniawan', 'jodikurniawan@gmail.com', '202cb962ac59075b964b07152d234b70', 8127846577, NULL, NULL, '2021-12-22 12:28:51', 1),
(5, 'ArkanWijdan', 'arkanwijdan@gmail.com', '202cb962ac59075b964b07152d234b70', 83746628172, NULL, NULL, '2021-12-22 12:29:16', 1),
(6, 'RezaSeptian', 'rezaseptian@gmail.com', '202cb962ac59075b964b07152d234b70', 876652374612, NULL, NULL, '2021-12-22 12:29:40', 1),
(7, 'AlpiSyahdan', 'alpisyahdan@gmail.com', '202cb962ac59075b964b07152d234b70', 87263551243, NULL, NULL, '2021-12-22 12:30:23', 1),
(8, 'RioPrasetyo', 'rioprasetyo@gmail.com', '202cb962ac59075b964b07152d234b70', 8374656123, NULL, NULL, '2021-12-22 12:30:58', 1),
(9, 'NaomiJuliana', 'naomijuliana@gmail.com', '202cb962ac59075b964b07152d234b70', 87763145, NULL, NULL, '2021-12-22 12:31:22', 1),
(10, 'RemidaAgustina', 'remidaagustina@gmail.com', '202cb962ac59075b964b07152d234b70', 891341321, NULL, NULL, '2021-12-22 14:22:42', 1),
(11, 'EisentHower', 'eisenthower@gmail.com', '202cb962ac59075b964b07152d234b70', 8931124124, NULL, NULL, '2021-12-22 14:35:41', 1),
(12, 'AdangPirman', 'adangpirman@gmail.com', '202cb962ac59075b964b07152d234b70', 831741212, NULL, NULL, '2021-12-22 14:37:21', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laporan_user`
--
ALTER TABLE `laporan_user`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `status_laporan`
--
ALTER TABLE `status_laporan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

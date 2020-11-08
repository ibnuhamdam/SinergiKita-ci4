-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinergikita`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `Id_toko` varchar(100) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Deskripsi` varchar(600) NOT NULL,
  `Harga` varchar(25) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `Gambar` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `Id_toko`, `Nama`, `Deskripsi`, `Harga`, `Kategori`, `Slug`, `Gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Madu23102020-gCfDRksxLy', 'Kaos Striped hijaus', 'Kaos striped berbahan cotton combad 3s yang nyaman dipakain', '125.000', 'makanan', 'madu-hutan-sumatra', '1603678458_d0e3edc91db781840ce5.png', '2020-10-25 14:16:53', '2020-10-26 13:33:31', '2020-10-26 09:52:04'),
(2, 'Madu23102020-gCfDRksxLy', 'Ini Madu', 'Kaos striped berbahan cotton combad 3s yang nyaman dipakain', '125.000', 'makanan', NULL, NULL, '2020-10-26 11:27:52', '2020-10-26 14:18:31', '2020-10-26 14:18:31'),
(3, 'Madu23102020-gCfDRksxLy', 'Kaos Striped Biasa', 'Kaos striped berbahan cotton combad 3s yang nyaman dipakain', '45.000', 'makanan', 'baju-polos-cotton-combad', NULL, '2020-10-26 11:40:07', '2020-10-26 14:18:25', '2020-10-26 14:18:25'),
(4, 'Madu23102020-gCfDRksxLy', 'Kaos Striped hijaus', 'Kaos striped berbahan cotton combad 3s yang nyaman dipakain', '55.000', 'makanan', 'kaos-striped-hijau', '1603687774_6ef01a7a77634c7278df.png', '2020-10-26 11:49:34', '2020-10-26 13:59:58', NULL),
(5, 'Madu23102020-gCfDRksxLy', 'Kaos Multi Warna Combed', 'Kaos dengan multi warna yang sangat cool bagi pria, yuk dibeli gan/sist', '40.000', 'makanan', 'kaos-multi-warna-combed', '1603696695_4d267b60c8551ebdc71f.png', '2020-10-26 14:18:15', '2020-10-26 14:18:15', NULL),
(6, 'Madu23102020-gCfDRksxLy', 'Kaos Polos POLO', 'Dijual kaos polo motif warna putih, namun belum ada fotonya nih', '80.000', 'pakaian', 'kaos-polos-polo', NULL, '2020-10-26 14:23:11', '2020-10-26 14:23:11', NULL),
(57, 'qui70141168-molestiaeminima', 'Rika Andriani', 'Distinctio officiis quas minus aliquam in illo natus cumque. Modi optio aut voluptatem doloribus voluptatem enim voluptas. Velit explicabo voluptatibus eaque consectetur velit omnis cumque. Tenetur saepe earum omnis ut.', '665.000', 'alat', 'rika-andriani', NULL, '1971-03-08 05:47:22', '2020-10-26 04:17:56', NULL),
(58, 'qui70141168-molestiaeminima', 'Bella Yuniar S.Gz', 'Vel alias nihil ullam veritatis aliquam et architecto. Natus cupiditate et quod voluptatem deleniti. Voluptatum iste velit in id voluptas praesentium rerum.', '927.000', 'pakaian', 'bella-yuniar-sgz', NULL, '2015-11-09 11:03:18', '2020-10-26 04:17:56', NULL),
(59, 'qui70141168-molestiaeminima', 'Eko Natsir', 'Ut culpa velit sint earum ut. Architecto ipsa et dolorem quas eveniet minima aut. Ad blanditiis eos vitae reprehenderit ut aspernatur nostrum.', '950.000', 'pakaian', 'eko-natsir', NULL, '1999-05-21 10:06:24', '2020-10-26 04:17:56', NULL),
(60, 'qui70141168-molestiaeminima', 'Asirwanda Sirait M.Kom.', 'Recusandae labore et asperiores voluptas cum iusto recusandae perferendis. Dignissimos quis perferendis consectetur est quia aliquam. Ut pariatur ut assumenda deserunt. Esse reiciendis maiores dolorem eum deleniti natus quas.', '207.000', 'pakaian', 'asirwanda-sirait-mkom', NULL, '2009-09-04 10:44:07', '2020-10-26 04:17:56', NULL),
(61, 'qui70141168-molestiaeminima', 'Talia Halimah M.Farm', 'Culpa modi repudiandae culpa eum tempora. Distinctio vel aliquam voluptatem libero. Voluptatem eum quidem sed perspiciatis eveniet quas quis. Quia eos libero exercitationem iusto. Eos et omnis optio ad rerum eos doloribus.', '264.000', 'kesehatan', 'talia-halimah-mfarm', NULL, '1988-12-17 06:33:10', '2020-10-26 04:17:56', NULL),
(62, 'qui70141168-molestiaeminima', 'Puspa Hartati', 'Quisquam earum minus aut repudiandae consequatur iure. Quos ipsa nisi et veritatis fuga minima. Et rerum laborum rerum exercitationem voluptas nobis quidem. Magnam ab incidunt rem reprehenderit voluptate omnis sunt. Tempore magnam voluptates repudiandae non odio.', '981.000', 'kesehatan', 'puspa-hartati', NULL, '1970-08-25 10:50:58', '2020-10-26 04:17:56', NULL),
(63, 'qui70141168-molestiaeminima', 'Harto Simbolon', 'Sunt tenetur veniam sunt ut cumque ut. Delectus corrupti ad alias voluptate laudantium deleniti nihil eos. Est molestias temporibus placeat cum sit. Molestiae aut quo ullam et.', '820.000', 'penyewaan', 'harto-simbolon', NULL, '2013-04-03 18:09:52', '2020-10-26 04:17:56', NULL),
(64, 'qui70141168-molestiaeminima', 'Elvina Wulandari', 'Sed distinctio et sed enim non aut. Animi et quos officiis est laborum et ut. Enim quos et voluptas maiores.', '604.000', 'penyewaan', 'elvina-wulandari', NULL, '2003-03-04 05:02:24', '2020-10-26 04:17:56', NULL),
(65, 'qui70141168-molestiaeminima', 'Adiarja Okto Siregar M.Pd', 'Est quasi omnis architecto est iusto dolores aut est. Dolor eos unde blanditiis. A illum est placeat recusandae aliquid velit itaque.', '443.000', 'kesehatan', 'adiarja-okto-siregar-mpd', NULL, '1994-04-28 15:27:10', '2020-10-26 04:17:56', NULL),
(66, 'qui70141168-molestiaeminima', 'Saiful Pranowo', 'Optio repellendus accusantium voluptatem deleniti qui adipisci sit. Aut ea sunt debitis natus inventore quod. Voluptatum tempore culpa quos. Id laborum iste ratione culpa eum ea accusantium nam.', '961.000', 'penyewaan', 'saiful-pranowo', NULL, '2020-08-15 05:46:01', '2020-10-26 04:17:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'makanan', '2020-11-02 01:17:16', '2020-11-02 01:17:16'),
(2, 'pakaian', '2020-11-02 01:17:44', '2020-11-02 01:17:44'),
(3, 'sayuran', '2020-11-02 01:17:53', '2020-11-02 01:17:53'),
(4, 'elektronik', '2020-11-02 01:18:01', '2020-11-02 01:18:01'),
(5, 'kesehatan', '2020-11-02 01:18:12', '2020-11-02 01:18:12'),
(6, 'alat', '2020-11-02 01:18:22', '2020-11-02 01:18:22'),
(7, 'penyewaan', '2020-11-02 01:18:30', '2020-11-02 01:18:30'),
(8, 'lainnya', '2020-11-02 01:18:37', '2020-11-02 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(100) NOT NULL,
  `Id_toko` varchar(100) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Deskripsi` varchar(600) DEFAULT NULL,
  `Alamat` varchar(355) NOT NULL,
  `Image_logo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `Id_toko`, `Nama`, `Deskripsi`, `Alamat`, `Image_logo`, `created_at`, `updated_at`) VALUES
(1, 'Madu23102020-gCfDRksxLy', 'Madu Lezat Basari', 'madu lezat nikmat mantap besara l asd asdakda okaysh kak', 'Sampangan, Semarang', '1603609748_973fdb8009ec6d537602.jpg', '2020-10-23 22:49:54', '2020-10-26 14:00:24'),
(2, 'aut84882485-eteaque', 'Wani Pudjiastuti', 'Voluptatum quia dolore recusandae explicabo expedita. Qui esse aut fugit delectus pariatur maxime. Minima voluptatem aperiam totam commodi est id.', 'Ds. Wahid No. 710, Tual 34046, DIY', NULL, '2012-12-08 20:49:22', '2020-10-26 04:10:09'),
(3, 'odit8909957-sedtempora', 'Kani Wastuti', 'Accusantium dolores commodi ducimus atque adipisci quia animi sequi. Fugiat sed iste qui. Cumque eaque temporibus tempore sit quibusdam. Necessitatibus ipsam hic vero magni velit harum ut.', 'Jln. Rajawali Barat No. 796, Tangerang 19453, SulTra', NULL, '1994-09-20 17:37:26', '2020-10-26 04:10:09'),
(4, 'Wacan26102020-gCfDRksxLy', 'Irma Widiastuti', 'Sapiente earum a et necessitatibus numquam. Sit excepturi et distinctio amet iste voluptatem exercitationem. Sit voluptates id enim voluptatibus ducimus.', 'Gg. Katamso No. 572, Mojokerto 37824, SulBar', NULL, '2015-07-17 03:57:03', '2020-10-26 04:10:09'),
(5, 'perferendis85867633-corporispariatur', 'Cinta Rahimah', 'Corrupti quia et voluptates itaque. Velit repellendus modi corporis provident. Qui rem sit veniam.', 'Kpg. Banda No. 640, Bukittinggi 25000, KalTeng', NULL, '2004-05-15 12:38:02', '2020-10-26 04:10:09'),
(6, 'qui70141168-molestiaeminima', 'Kalim Widodo', 'Corrupti sed voluptate enim sapiente minus adipisci. Quia fugiat illum quis voluptatem voluptatem dolore non. Sint mollitia velit officia voluptatum voluptatem.', 'Psr. Yoga No. 733, Bogor 24720, KalTeng', NULL, '1994-04-03 18:01:28', '2020-10-26 04:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_user` int(255) NOT NULL,
  `Id_toko` varchar(100) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `No_ktp` int(16) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_handphone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_user`, `Id_toko`, `Nama`, `Email`, `Password`, `No_ktp`, `Alamat`, `No_handphone`, `created_at`, `updated_at`) VALUES
(1, 'Madu23102020-gCfDRksxLy', 'Wacana', 'bas@asd.com', 'basari', 2147483647, 'Sampangan, Semarang', '85727633969', '2020-10-23 22:49:54', '2020-10-26 14:18:56'),
(2, 'Wacan26102020-gCfDRksxLy', 'Ibnu Hamdam', 'Ibnu.hamdam16@gmail.com', 'ibnuhamdamms', 2147483647, 'Gonilan Asri Pabelan', '872662535212', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Wacan26102020-aSgTgjdyAs', 'Ismail Syai', 'Ismail@gmail.com', 'ismail', 2147483647, 'Langenharjo', '8762662535212', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'qui70141168-molestiaeminima', 'Shania Hasanah', 'dodo06@gmail.co.id', '7&Aj\"m', 85567982, 'Gg. Bagas Pati No. 885, Pematangsiantar 32308, Lampung', '85727633969', '2004-02-19 05:28:18', '2020-10-26 03:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `Id_toko` varchar(255) NOT NULL,
  `Id_barang` int(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `Id_toko`, `Id_barang`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Madu23102020-gCfDRksxLy', 64, '2020-11-05 21:08:34', '2020-11-06 02:34:30', '2020-11-06 02:34:30'),
(2, 'Madu23102020-gCfDRksxLy', 4, '2020-11-06 01:31:28', '2020-11-06 01:31:28', '0000-00-00 00:00:00'),
(3, 'Madu23102020-gCfDRksxLy', 5, '2020-11-06 01:36:44', '2020-11-06 01:36:44', '0000-00-00 00:00:00'),
(5, 'Madu23102020-gCfDRksxLy', 60, '2020-11-06 02:36:06', '2020-11-06 02:36:06', '0000-00-00 00:00:00'),
(6, 'Madu23102020-gCfDRksxLy', 65, '2020-11-06 02:37:23', '2020-11-06 02:37:32', '2020-11-06 02:37:32'),
(7, 'Madu23102020-gCfDRksxLy', 65, '2020-11-06 02:41:46', '2020-11-06 02:41:46', '0000-00-00 00:00:00'),
(8, 'Madu23102020-gCfDRksxLy', 58, '2020-11-06 02:41:59', '2020-11-06 02:41:59', '0000-00-00 00:00:00'),
(9, 'Madu23102020-gCfDRksxLy', 66, '2020-11-06 02:42:13', '2020-11-06 02:44:28', '2020-11-06 02:44:28'),
(10, 'Madu23102020-gCfDRksxLy', 6, '2020-11-06 02:42:20', '2020-11-06 02:44:26', '2020-11-06 02:44:26'),
(11, 'Madu23102020-gCfDRksxLy', 64, '2020-11-06 02:43:41', '2020-11-06 02:44:24', '2020-11-06 02:44:24'),
(12, 'qui70141168-molestiaeminima', 4, '2020-11-06 02:59:48', '2020-11-06 02:59:48', '0000-00-00 00:00:00'),
(13, 'qui70141168-molestiaeminima', 58, '2020-11-06 03:21:58', '2020-11-06 03:22:11', '2020-11-06 03:22:11'),
(14, 'qui70141168-molestiaeminima', 60, '2020-11-06 03:22:19', '2020-11-06 03:29:45', '2020-11-06 03:29:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`),
  ADD UNIQUE KEY `Id_toko` (`Id_toko`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

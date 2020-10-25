-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 03:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `Id_toko`, `Nama`, `Deskripsi`, `Harga`, `Kategori`, `Slug`, `Gambar`, `created_at`, `updated_at`) VALUES
(1, 'Madu23102020-gCfDRksxLy', 'Madu Hutan Sumatra', 'Madu Hutan asli sumatra, hanya dengan 115.000 anda bisa mendapatkan 1 madu hutan asli sumatra', '126.000', 'Makanan', 'madu-hutan-sumatra', '1603636864_e5ed278dec63a09666c9.jpg', '2020-10-25 14:16:53', '2020-10-25 09:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Madu23102020-gCfDRksxLy', 'Madu Lezat Basari', 'madu lezat nikmat mantap besara l asd asdakda okaysh', 'Sampangan, Semarang', '1603609748_973fdb8009ec6d537602.jpg', '2020-10-23 22:49:54', '2020-10-25 02:15:30');

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
(1, 'Madu23102020-gCfDRksxLy', 'Madu Lezat Basari', 'bas@asd.com', 'basari', 2147483647, 'Sampangan, Semarang', '085727633969', '2020-10-23 22:49:54', '2020-10-25 01:05:28'),
(4, '', 'Madu Lezat Basari', '', '', 0, 'Sampangan, Semarang', '', '2020-10-25 00:54:49', '2020-10-25 01:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Id_wishlist` int(11) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`Id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Id_wishlist` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 05:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` int(11) NOT NULL,
  `Foto_Admin` longblob NOT NULL,
  `Nama_Depan_Admin` varchar(50) NOT NULL,
  `Nama_Belakang_Admin` varchar(50) NOT NULL,
  `Email_Admin` varchar(50) NOT NULL,
  `Nama_Pengguna_Admin` varchar(50) NOT NULL,
  `Kata_Sandi_Admin` varchar(100) NOT NULL,
  `Konfirmasi_Kata_Sandi_Admin` varchar(100) NOT NULL,
  `No_Telepon_Admin` varchar(20) NOT NULL,
  `Alamat_Admin` text NOT NULL,
  `Peran_Admin` enum('Super Admin','Admin') NOT NULL,
  `Status_Verifikasi_Admin` enum('Terverifikasi','Belum Terverifikasi') NOT NULL,
  `Token_Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Foto_Admin`, `Nama_Depan_Admin`, `Nama_Belakang_Admin`, `Email_Admin`, `Nama_Pengguna_Admin`, `Kata_Sandi_Admin`, `Konfirmasi_Kata_Sandi_Admin`, `No_Telepon_Admin`, `Alamat_Admin`, `Peran_Admin`, `Status_Verifikasi_Admin`, `Token_Admin`) VALUES
(12, 0x363635633833393936396136302e6a706567, 'Salsa', 'Cantik', 'sandro@gmail.com', 'Istri Saya', '$2y$10$WLuwLy3arRyflD/9Je/32.rBxwkpuQkDE0Yd6Dmn6ugvU2EPO3AnC', '$2y$10$WLuwLy3arRyflD/9Je/32.rBxwkpuQkDE0Yd6Dmn6ugvU2EPO3AnC', '+62 821-7655-4321', 'Hotel Bintang Lima', 'Super Admin', 'Belum Terverifikasi', 76704869),
(13, 0x363635633863386230333363342e6a7067, 'Sandro', 'Anugrah', 'sandro21@gmail.com', 'Sandro', '$2y$10$TyrbLQLuad0dMukpkYz9luHN.myy/SRIU7b5tz.hSnh.zCQuDhfGi', '$2y$10$TyrbLQLuad0dMukpkYz9luHN.myy/SRIU7b5tz.hSnh.zCQuDhfGi', '+62 822-2345-678', 'Batujajar', 'Super Admin', 'Belum Terverifikasi', 47940000);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `ID_Berita` int(11) NOT NULL,
  `Gambar_Berita` longblob NOT NULL,
  `Judul_Berita` varchar(50) NOT NULL,
  `Deskripsi_Berita` text NOT NULL,
  `Tanggal_Berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `ID_Jasa` int(11) NOT NULL,
  `Gambar_Jasa` longblob NOT NULL,
  `Nama_Jasa` varchar(50) NOT NULL,
  `Deskripsi_Jasa` text NOT NULL,
  `Harga_Jasa` int(11) NOT NULL,
  `Stok_Jasa` int(11) NOT NULL,
  `Nomor_Rekening_Jasa` int(20) NOT NULL,
  `Status_Tersedia_Jasa` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`ID_Jasa`, `Gambar_Jasa`, `Nama_Jasa`, `Deskripsi_Jasa`, `Harga_Jasa`, `Stok_Jasa`, `Nomor_Rekening_Jasa`, `Status_Tersedia_Jasa`) VALUES
(1, 0x6a6173615f363635633864343164396161312e706e67, 'asds', 'axsc', 999999, 99, 654546, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID_Pengguna` int(11) NOT NULL,
  `Foto_Pengguna` longblob NOT NULL,
  `Nama_Depan_Pengguna` varchar(50) NOT NULL,
  `Nama_Belakang_Pengguna` varchar(50) NOT NULL,
  `Nama_Pengguna` varchar(50) NOT NULL,
  `Email_Pengguna` varchar(50) NOT NULL,
  `Kata_Sandi_Pengguna` varchar(100) NOT NULL,
  `Konfirmasi_Kata_Sandi_Pengguna` varchar(100) NOT NULL,
  `No_Telepon_Pengguna` varchar(20) NOT NULL,
  `Alamat_Pengguna` text NOT NULL,
  `Status_Verifikasi_Pengguna` enum('Tervirifikasi','Belum Terverifikasi') NOT NULL,
  `Token_Pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID_Pengguna`, `Foto_Pengguna`, `Nama_Depan_Pengguna`, `Nama_Belakang_Pengguna`, `Nama_Pengguna`, `Email_Pengguna`, `Kata_Sandi_Pengguna`, `Konfirmasi_Kata_Sandi_Pengguna`, `No_Telepon_Pengguna`, `Alamat_Pengguna`, `Status_Verifikasi_Pengguna`, `Token_Pengguna`) VALUES
(6, 0x2e2e2f75706c6f6164732f363635633862386330616461642e6a706567, 'k', 'k', 'k', 'k@gmail.com', '$2y$10$qn56UPt8gQc7SCE7nd3GY.l7g3yAeLUHsU4uZg/MgqatsfODiiZVq', '$2y$10$qn56UPt8gQc7SCE7nd3GY.l7g3yAeLUHsU4uZg/MgqatsfODiiZVq', '+62 822-1234-8765', 'k', 'Belum Terverifikasi', 34336058);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_Produk` int(11) NOT NULL,
  `Gambar_Produk` longblob NOT NULL,
  `Nama_Produk` varchar(50) NOT NULL,
  `Deskripsi_Produk` text NOT NULL,
  `Harga_Produk` int(11) NOT NULL,
  `Stok_Produk` int(11) NOT NULL,
  `Nomor_Rekening_Produk` int(20) NOT NULL,
  `Status_Tersedia_Produk` enum('Tersedia','Tidak Tersedia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_Produk`, `Gambar_Produk`, `Nama_Produk`, `Deskripsi_Produk`, `Harga_Produk`, `Stok_Produk`, `Nomor_Rekening_Produk`, `Status_Tersedia_Produk`) VALUES
(6, 0x70726f64756b5f363635633935613935653061622e6a706567, 'Salsa', 'Dijual Khusus Sandro', 10000, 1, 827384283, 'Tersedia'),
(8, 0x70726f64756b5f363635636165356238326365332e6a706567, 'Cantik', 'Ga Dijual', 12000, 2, 38582738, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `spanduk`
--

CREATE TABLE `spanduk` (
  `ID_Spanduk` int(11) NOT NULL,
  `Gambar_Spanduk` longblob NOT NULL,
  `Nama_Spanduk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spanduk`
--

INSERT INTO `spanduk` (`ID_Spanduk`, `Gambar_Spanduk`, `Nama_Spanduk`) VALUES
(1, 0x7370616e64756b5f363635633835353563623063362e706e67, 'sddfgf');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `ID_Testimoni` int(11) NOT NULL,
  `Nama_Testimoni` varchar(50) NOT NULL,
  `Pesan_Testimoni` text NOT NULL,
  `Status_Testimoni` enum('Penjual','Pembeli') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_Transaksi` int(11) NOT NULL,
  `ID_Pengguna` int(11) DEFAULT NULL,
  `ID_Jasa` int(11) DEFAULT NULL,
  `ID_Produk` int(11) DEFAULT NULL,
  `Upload_Bukti_Pembayaran_Transaksi` longblob NOT NULL,
  `Kuantitas_Transaksi` varchar(11) NOT NULL,
  `Total_Transaksi` int(11) NOT NULL,
  `Status_Transaksi` enum('Lunas','Belum Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`ID_Berita`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`ID_Jasa`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID_Pengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_Produk`);

--
-- Indexes for table `spanduk`
--
ALTER TABLE `spanduk`
  ADD PRIMARY KEY (`ID_Spanduk`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`ID_Testimoni`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_Transaksi`),
  ADD KEY `ID_Pengguna` (`ID_Pengguna`),
  ADD KEY `ID_Jasa` (`ID_Jasa`),
  ADD KEY `ID_Produk` (`ID_Produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID_Berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `ID_Jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID_Pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_Produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spanduk`
--
ALTER TABLE `spanduk`
  MODIFY `ID_Spanduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `ID_Testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_Transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`ID_Jasa`) REFERENCES `jasa` (`ID_Jasa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`ID_Produk`) REFERENCES `produk` (`ID_Produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`ID_Pengguna`) REFERENCES `pengguna` (`ID_Pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

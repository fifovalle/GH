-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 07:58 AM
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
(20, 0x41646d696e5f363637333939343034343165622e6a7067, 'Naufal', 'FIFA', 'fifanaufal10@gmail.com', 'fifovalle', '$2y$10$DK9PLU13o7TKIxjCXYeIIuWdH0pG3mnjyZPA0Ukzm60CWNOU.wajm', '$2y$10$DK9PLU13o7TKIxjCXYeIIuWdH0pG3mnjyZPA0Ukzm60CWNOU.wajm', '+62 812-2365-2490', 'Batujajar', 'Super Admin', 'Terverifikasi', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `ID_Pengiriman` int(11) NOT NULL,
  `Jasa_Pengiriman` enum('Dikirim Oleh Penjual') NOT NULL,
  `Batas_Pengiriman` enum('1 KG','2 KG','3 KG','4 KG','5 KG') NOT NULL,
  `Jarak_Pengiriman` enum('1 KM','2 KM','3 KM','4 KM','5 KM') NOT NULL,
  `Total_Pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`ID_Pengiriman`, `Jasa_Pengiriman`, `Batas_Pengiriman`, `Jarak_Pengiriman`, `Total_Pengiriman`) VALUES
(7, 'Dikirim Oleh Penjual', '1 KG', '1 KM', 5000),
(8, 'Dikirim Oleh Penjual', '1 KG', '2 KM', 10000);

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

-- --------------------------------------------------------

--
-- Table structure for table `spanduk`
--

CREATE TABLE `spanduk` (
  `ID_Spanduk` int(11) NOT NULL,
  `Gambar_Spanduk` longblob NOT NULL,
  `Nama_Spanduk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`ID_Testimoni`, `Nama_Testimoni`, `Pesan_Testimoni`, `Status_Testimoni`) VALUES
(5, 'gibranNgepott55', 'Anjayyyyyy', 'Pembeli');

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
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`ID_Pengiriman`);

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
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID_Berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `ID_Jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID_Pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `ID_Pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_Produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spanduk`
--
ALTER TABLE `spanduk`
  MODIFY `ID_Spanduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `ID_Testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

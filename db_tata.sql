-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 01:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `id_arsip` int(6) NOT NULL,
  `kode_arsip` char(5) NOT NULL,
  `no_arsip` char(5) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pegawai`
--

CREATE TABLE `tb_detail_pegawai` (
  `id_detail_pegawai` int(10) NOT NULL,
  `id_pegawai` int(6) NOT NULL,
  `id_jabatan` int(6) NOT NULL,
  `id_level` int(6) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(10) NOT NULL,
  `id_pengajuan` int(10) NOT NULL,
  `status` enum('Ditanda Tangani','Belum Ditanda Tangani','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(6) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Kepala BSPJI Samarinda'),
(2, 'Pembina Industri Ahli Muda'),
(3, 'Kepala'),
(9, 'Asesor Manajemen Mutu Industri Ahli Madya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id_jenis` int(6) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(6) NOT NULL,
  `nama_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(6) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nip` char(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` char(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanda_tangan`
--

CREATE TABLE `tb_penanda_tangan` (
  `id_penanda_tangan` int(6) NOT NULL,
  `id_pegawai` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(10) NOT NULL,
  `id_tujuan` int(10) NOT NULL,
  `id_jenis` int(6) NOT NULL,
  `id_arsip` int(6) NOT NULL,
  `id_penanda_tangan` int(6) NOT NULL,
  `id_detail_pegawai` int(10) NOT NULL,
  `tgl_diajukan` date NOT NULL,
  `tgl_surat` date NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_persetujuan`
--

CREATE TABLE `tb_persetujuan` (
  `id_persetujuan` int(10) NOT NULL,
  `id_invoice` int(10) NOT NULL,
  `tgl_disetujui` date NOT NULL,
  `no_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `id_tujuan` int(10) NOT NULL,
  `nama_tujuan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `contact_person` char(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `tb_detail_pegawai`
--
ALTER TABLE `tb_detail_pegawai`
  ADD PRIMARY KEY (`id_detail_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_penanda_tangan`
--
ALTER TABLE `tb_penanda_tangan`
  ADD PRIMARY KEY (`id_penanda_tangan`),
  ADD KEY `id_jabatan` (`id_pegawai`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_tujuan` (`id_tujuan`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_arsip` (`id_arsip`),
  ADD KEY `id_penanda_tangan` (`id_penanda_tangan`),
  ADD KEY `id_pegawai` (`id_detail_pegawai`);

--
-- Indexes for table `tb_persetujuan`
--
ALTER TABLE `tb_persetujuan`
  ADD PRIMARY KEY (`id_persetujuan`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indexes for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  MODIFY `id_arsip` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_pegawai`
--
ALTER TABLE `tb_detail_pegawai`
  MODIFY `id_detail_pegawai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id_jenis` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penanda_tangan`
--
ALTER TABLE `tb_penanda_tangan`
  MODIFY `id_penanda_tangan` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_persetujuan`
--
ALTER TABLE `tb_persetujuan`
  MODIFY `id_persetujuan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  MODIFY `id_tujuan` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_pegawai`
--
ALTER TABLE `tb_detail_pegawai`
  ADD CONSTRAINT `tb_detail_pegawai_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`),
  ADD CONSTRAINT `tb_detail_pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `tb_detail_pegawai_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD CONSTRAINT `tb_invoice_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `tb_pengajuan` (`id_pengajuan`);

--
-- Constraints for table `tb_penanda_tangan`
--
ALTER TABLE `tb_penanda_tangan`
  ADD CONSTRAINT `tb_penanda_tangan_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`id_tujuan`) REFERENCES `tb_tujuan` (`id_tujuan`),
  ADD CONSTRAINT `tb_pengajuan_ibfk_3` FOREIGN KEY (`id_arsip`) REFERENCES `tb_arsip` (`id_arsip`),
  ADD CONSTRAINT `tb_pengajuan_ibfk_4` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis` (`id_jenis`),
  ADD CONSTRAINT `tb_pengajuan_ibfk_5` FOREIGN KEY (`id_penanda_tangan`) REFERENCES `tb_penanda_tangan` (`id_penanda_tangan`),
  ADD CONSTRAINT `tb_pengajuan_ibfk_6` FOREIGN KEY (`id_detail_pegawai`) REFERENCES `tb_detail_pegawai` (`id_detail_pegawai`);

--
-- Constraints for table `tb_persetujuan`
--
ALTER TABLE `tb_persetujuan`
  ADD CONSTRAINT `tb_persetujuan_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id_invoice`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

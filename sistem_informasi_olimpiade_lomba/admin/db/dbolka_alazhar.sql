-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 06:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbolka_alazhar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gurupendamping`
--

CREATE TABLE `tb_gurupendamping` (
  `id_gurupendamping` varchar(4) NOT NULL,
  `nama_gp` varchar(50) NOT NULL,
  `email_gp` varchar(30) NOT NULL,
  `no_telpgp` varchar(22) NOT NULL,
  `bidang_kompetisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_juri`
--

CREATE TABLE `tb_juri` (
  `id_juri` varchar(4) NOT NULL,
  `nama_juri` varchar(50) NOT NULL,
  `email_juri` varchar(75) NOT NULL,
  `no_telpjuri` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(4) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kompetisi`
--

CREATE TABLE `tb_kompetisi` (
  `id_kompetisi` varchar(3) NOT NULL,
  `nama_kompetisi` varchar(100) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` varchar(2) NOT NULL,
  `id_kompetisi` varchar(2) NOT NULL,
  `no_pes` varchar(8) NOT NULL,
  `id_juri` varchar(4) NOT NULL,
  `nilai1` int(3) NOT NULL,
  `ket_n1` varchar(50) NOT NULL,
  `nilai2` int(3) NOT NULL,
  `ket_n2` varchar(50) NOT NULL,
  `nilai3` int(3) NOT NULL,
  `ket_n3` varchar(50) NOT NULL,
  `jml_nilai` int(3) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `wkt_input` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `no_pes` varchar(8) NOT NULL,
  `id_kompetisi` varchar(2) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_gurupendamping` varchar(4) NOT NULL,
  `tanggal_reg` varchar(20) NOT NULL,
  `waktu_reg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` varchar(4) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `asal_sd` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gurupendamping`
--
ALTER TABLE `tb_gurupendamping`
  ADD PRIMARY KEY (`id_gurupendamping`);

--
-- Indexes for table `tb_juri`
--
ALTER TABLE `tb_juri`
  ADD PRIMARY KEY (`id_juri`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_kompetisi`
--
ALTER TABLE `tb_kompetisi`
  ADD PRIMARY KEY (`id_kompetisi`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kompetisi` (`id_kompetisi`),
  ADD KEY `no_pes` (`no_pes`),
  ADD KEY `id_juri` (`id_juri`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`no_pes`),
  ADD KEY `id_kompetisi` (`id_kompetisi`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_gurupendamping` (`id_gurupendamping`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_kompetisi`) REFERENCES `tb_kompetisi` (`id_kompetisi`),
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_juri`) REFERENCES `tb_juri` (`id_juri`),
  ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`no_pes`) REFERENCES `tb_registrasi` (`no_pes`);

--
-- Constraints for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD CONSTRAINT `tb_registrasi_ibfk_1` FOREIGN KEY (`id_kompetisi`) REFERENCES `tb_kompetisi` (`id_kompetisi`),
  ADD CONSTRAINT `tb_registrasi_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `tb_siswa` (`nisn`),
  ADD CONSTRAINT `tb_registrasi_ibfk_3` FOREIGN KEY (`id_gurupendamping`) REFERENCES `tb_gurupendamping` (`id_gurupendamping`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

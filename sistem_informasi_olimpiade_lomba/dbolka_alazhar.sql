-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 11:19 AM
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
  `id_kategori` varchar(4) NOT NULL
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

--
-- Dumping data for table `tb_juri`
--

INSERT INTO `tb_juri` (`id_juri`, `nama_juri`, `email_juri`, `no_telpjuri`) VALUES
('IJ01', 'Adelina Pane', 'adel@gmail.com', '0123456789'),
('IJ02', 'Ramini', 'mini@yahoo.com', '9876543210'),
('IJ03', 'Adha Ibnu', 'adha@gmail.com', '982356741');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
('IKA01', 'Lomba'),
('IKA02', 'Olimpiade');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
('IKE01', '7 A'),
('IKE02', '7 B'),
('IKE03', '7 C'),
('IKE04', '7 D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kompetisi`
--

CREATE TABLE `tb_kompetisi` (
  `id_kompetisi` varchar(6) NOT NULL,
  `nama_kompetisi` varchar(100) NOT NULL,
  `id_kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kompetisi`
--

INSERT INTO `tb_kompetisi` (`id_kompetisi`, `nama_kompetisi`, `id_kategori`) VALUES
('IKO001', 'Matematika', 'IKA01'),
('IKO002', 'Inggris', 'IKA01');

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

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `status`, `email`, `no_hp`) VALUES
(1, 'danang', 'admin1234', 'aktif', '', ''),
(2, 'wildan', 'admin12', 'aktif', '', '');

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
  `id_kelas` varchar(6) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `asal_sd` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nis`, `nama_siswa`, `id_kelas`, `tempat_lahir`, `tanggal_lahir`, `asal_sd`, `foto`) VALUES
('123456789', '12345678', 'jhon', 'IKE04', 'Depok', '03/04/2008', 'SD Al Fikri', '16012021165753-learn-2.jpg');

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
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

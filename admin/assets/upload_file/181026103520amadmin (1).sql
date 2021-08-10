-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 09:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `input1`
--

CREATE TABLE IF NOT EXISTS `input1` (
  `judultra` varchar(50) COLLATE ascii_bin NOT NULL,
  `lembaga` varchar(10) COLLATE ascii_bin NOT NULL,
  `trainer` varchar(15) COLLATE ascii_bin NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(20) COLLATE ascii_bin NOT NULL,
  `nama` varchar(15) COLLATE ascii_bin NOT NULL,
  `nik` int(8) NOT NULL,
  `jabatan` varchar(15) COLLATE ascii_bin NOT NULL,
  `bagian` varchar(15) COLLATE ascii_bin NOT NULL,
  `nilaipre` int(3) NOT NULL,
  `katpre` varchar(12) COLLATE ascii_bin NOT NULL,
  `nilaipost` int(3) NOT NULL,
  `katpost` varchar(12) COLLATE ascii_bin NOT NULL,
  `idtra` varchar(10) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`idtra`),
  KEY `judultra` (`judultra`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `input1`
--

INSERT INTO `input1` (`judultra`, `lembaga`, `trainer`, `tanggal`, `lokasi`, `nama`, `nik`, `jabatan`, `bagian`, `nilaipre`, `katpre`, `nilaipost`, `katpost`, `idtra`) VALUES
('P', 'Internal', 'd', '2018-03-26', 'ds', 's', 4343, 'sds', '', 0, '', 0, '', 'IDTRA001'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 90, '', 98, '', 'IDTRA002'),
('asasa', 'Internal', 'sasa', '2018-04-11', 'Ruang Nias', 'Ardi Rahmadani', 4343, 'dsd', 'dsds', 45, '', 65, '', 'IDTRA003'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA004'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA005'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA006'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA007'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA008'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA009'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA010'),
('', 'Internal', '', '0000-00-00', '', '', 0, '', '', 0, '', 0, '', 'IDTRA011'),
('Pemeriksaan Bahan Baku', 'Internal', 'Pak Nasir', '2018-04-19', 'Ruang Nias', 'Ikhsan Bakhri', 32323, 'Manager', 'IT Analys', 100, '', 100, '', 'IDTRA012'),
('Pemeriksaan Bahan Baku', 'Eksternal', 'Pak Nasir', '2018-04-11', 'Ruang Nias', 'Ikhsan Bakhri', 32323, 'Manager', 'HRD', 100, '', 11, '', 'IDTRA013'),
('cadas', 'Internal', 'czxczx', '2018-03-27', 'dsds', 'Ikhsan', 43242, 'Staff', 'cscs', 32, '', 43, '', 'IDTRA014'),
('dsd', 'Eksternal', 'czxczx', '2018-04-18', 'ds', 'Ikhsan Bakhri', 32323, 'Manager', 'HRD', 32, '', 90, '', 'IDTRA015'),
('ddfd', 'Internal', 'sds', '2018-03-28', 'sadas', 'Ikhsan', 43242, 'Staff', 'dsds', 43, '', 43, '', 'IDTRA016'),
('Ardi', 'Eksternal', 'Gagas', '2018-04-17', 'R. Sumatra', 'Omed', 5343, 'dsds', 'dfdf', 23, '', 54, '', 'IDTRA017'),
('dsds', 'Eksternal', 'css', '2018-04-11', 'cascsa', 'cxcz', 4343, 'cxcx', 'cxc', 21, '', 21, '', 'IDTRA018'),
('fxvxcv', 'Eksternal', 'xvcv', '2323-03-31', 'czxz', 'cc', 423, 'xzcxz', ' xz ', 32, '', 43, '', 'IDTRA019'),
('ddsd', 'Internal', 'cxc', '0232-03-31', 'xzx', 'dsds', 3232, 'cxcx', 'ccz', 90, '', 90, '', 'IDTRA020'),
('sds', 'Eksternal', 'zczc', '1111-02-22', 'xcxc', 'ss', 3232, 'xcx', 'cxc', 90, '', 90, '', 'IDTRA021'),
('dsds', 'Eksternal', 'dsds', '2018-04-10', 'ccx', 'xxz', 321, 'dzxz', 'cxcx', 90, '', 90, '', 'IDTRA022'),
('sdsf', 'Internal', 'fdfd', '2018-04-16', 'scxcx', 'cxcx', 4343, 'dcdcd', 'cxcx', 77, '', 35, '', 'IDTRA023'),
('dsdsd', 'Internal', 'dsds', '2018-04-03', 'xzxz', 'cxzc', 34234, 'zx ', 'HRD', 43, '', 43, '', 'IDTRA024'),
('cxzczx', 'Internal', 'zxzxz', '2018-04-18', 'xasxcz', 'cxzcz', 4232, 'zx', 'xzc', 24, '', 90, '', 'IDTRA025'),
('dsds', 'Internal', 'xZX', '2018-04-09', 'ddas', 'xaxz', 32323, 'sdsa', 'xzxz', 32, '', 32, '', 'IDTRA026'),
('sdsds', 'Eksternal', 'dsds', '2018-04-10', 'saa', 'sasa', 3232, 'sa', 'xzxz', 89, '', 90, '', 'IDTRA027'),
('dsds', 'Eksternal', 'dsds', '2018-04-03', 'xxz', 'xzxz', 3232, 'Staff', 'HRD', 32, '', 100, '', 'IDTRA028'),
('cadas', 'Eksternal', 'dsds', '2018-03-27', 'sadas', 'Ikhsan', 43242, 'Staff', 'cscs', 90, '', 100, '', 'IDTRA029'),
('cadas', 'Eksternal', 'dsds', '2018-04-10', 'ds', 'Ikhsan Bakhri', 32323, 'Staff', 'cscs', 32, '', 54, '', 'IDTRA030'),
('dsds', 'Internal', 'xsxz', '2018-04-03', 'xzxz', 'xzxz', 0, 'zxz', 'HRD', 11, '', 90, '', 'IDTRA031'),
('dss', 'Eksternal', 'xcx', '2018-04-11', 'dscx', 'Ikhsan Bakhri', 3232, 'Staff', 'cscs', 90, '', 90, '', 'IDTRA032'),
('Pembukuan', 'Eksternal', 'dsds', '2018-04-09', 'sadas', 'Ikhsan', 43242, 'Manager', 'dsds', 100, '', 100, '', 'IDTRA033'),
('Pemeriksaan Bahan Baku', 'Internal', 'czxczx', '2018-03-27', 'ds', 'Ikhsan', 32323, 'Staff', 'cscs', 100, '', 90, '', 'IDTRA034'),
('cadas', 'Internal', 'dsds', '2018-03-27', 'Ruang Nias', 'Ikhsan Bakhri', 43242, 'Manager', 'HRD', 32, '', 54, '', 'IDTRA035'),
('Pembukuan', 'Internal', 'fdsfsd', '2018-04-02', 'sadas', 'Ikhsan', 43242, 'Staff', 'cscs', 32, '', 43, '', 'IDTRA036'),
('sds', 'Internal', 'xczc', '2018-04-11', 'xzxz', 'xzxz', 435465, '5454', 'xcx', 45, '', 43, '', 'IDTRA037'),
('432', 'Eksternal', 'xsda', '2018-04-12', 'xzxz', 'zxz', 4343, 'xzxz', 'cscs', 90, '', 100, '', 'IDTRA038'),
('cadas', 'Eksternal', 'dsds', '2018-04-04', 'Ruang Nias', 'Ikhsan Bakhri', 43242, 'aku', 'cscs', 90, '', 99, '', 'IDTRA039'),
('dsds', 'Eksternal', 'dsds', '2018-04-04', 'xzxz', 'Ikhsan Bakhri', 32323, 'Staff', 'HRD', 100, '', 54, '', 'IDTRA040'),
('Pembukuan', 'Internal', 'dsds', '2018-04-05', 'ds', 'Ikhsan Bakhri', 43242, 'Manager', 'cscs', 32, '', 100, '', 'IDTRA041'),
('Pembukuan', 'Internal', 'Pak Nasir', '2018-03-29', 'sadas', 'Ikhsan', 43242, 'Staff', 'HRD', 90, '', 100, '', 'IDTRA042'),
('Pembukuan', 'Internal', 'czxczx', '2018-04-04', 'ds', 'Ikhsan Bakhri', 32323, 'Manager', 'cscs', 43, '', 43, '', 'IDTRA043'),
('dsds', 'Internal', 'dsds', '2018-04-11', 'sadas', 'Ikhsan Bakhri', 43242, 'Staff', 'cscs', 32, '', 90, '', 'IDTRA044'),
('Pembukuan', 'Internal', 'dsds', '2018-04-09', 'Ruang Nias', 'Ikhsan', 32323, 'Manager', 'dsds', 90, '', 90, '', 'IDTRA045'),
('Pembukuan', 'Eksternal', 'dsds', '2018-04-10', 'sadas', 'Ikhsan Bakhri', 43242, 'ewew', 'dsds', 11, '', 100, '', 'IDTRA046'),
('dsds', 'Internal', 'Pak Nasir', '2018-04-03', 'xzxz', 'Ikhsan', 43242, 'Manager', 'dsds', 100, '', 90, '', 'IDTRA047'),
('dsds', 'Internal', 'dsds', '2018-03-29', 'xzxz', 'Ikhsan Bakhri', 43242, 'Staff', 'HRD', 32, '', 43, '', 'IDTRA048'),
('Pembukuan', 'Eksternal', 'Pak Nasir', '2018-03-27', 'sadas', 'Ikhsan', 43242, 'Staff', 'cscs', 90, '', 90, '', 'IDTRA049'),
('dsds', 'Internal', 'dsds', '2018-04-03', 'xzxz', 'Ikhsan Bakhri', 43242, 'Manager', 'HRD', 43, '', 100, '', 'IDTRA050'),
('cadas', 'Internal', 'Pak Nasir', '2018-04-17', 'ds', 'Ikhsan Bakhri', 43242, 'Staff', 'cscs', 43, '', 100, '', 'IDTRA051'),
('cadas', 'Internal', 'Pak Nasir', '2018-04-03', 'ds', 'Ikhsan Bakhri', 43242, 'Manager', 'HRD', 32, '', 100, '', 'IDTRA052'),
('Pembukuan', 'Internal', 'dsds', '2018-04-12', 'ds', 'Ikhsan Bakhri', 3232, 'Staff', 'cscs', 43, '', 100, '', 'IDTRA053'),
('dsds', 'Internal', 'dsds', '2018-04-16', 'sadas', 'Ikhsan', 32323, 'Manager', 'HRD', 90, '', 100, '', 'IDTRA054'),
('Pembukuan', 'Internal', 'fdsfsd', '2018-04-04', 'Ruang Nias', 'Ikhsan', 43242, 'Staff', 'HRD', 90, '', 90, '', 'IDTRA055'),
('Pembukuan', 'Internal', 'dsds', '2018-04-05', 'ds', 'Ikhsan', 43242, 'Staff', 'HRD', 43, '', 100, '', 'IDTRA056'),
('dsds', 'Internal', 'Pak Nasir', '2018-04-11', 'Ruang Nias', 'Ikhsan Bakhri', 43242, 'Staff', 'HRD', 32, '', 100, '', 'IDTRA057'),
('dsds', 'Eksternal', 'Pak Nasir', '2018-04-19', 'Ruang Nias', 'Ikhsan', 43242, 'Staff', 'cscs', 90, '', 100, '', 'IDTRA058'),
('Pembukuan', 'Internal', 'czxczx', '2018-03-31', 'Ruang Nias', 'Ikhsan Bakhri', 4343, 'Manager', 'cscs', 90, '', 100, '', 'IDTRA059'),
('Pembukuan', 'Internal', 'czxczx', '2018-04-12', 'sadas', 'Ikhsan Bakhri', 43242, 'Manager', 'HRD', 90, '', 11, '', 'IDTRA060'),
('cadas', 'Eksternal', 'dsds', '2018-03-28', 'ds', 'Ikhsan Bakhri', 32323, 'Staff', 'HRD', 43, '', 100, '', 'IDTRA061'),
('cadas', 'Internal', 'czxczx', '2018-04-11', 'sadas', 'Ikhsan Bakhri', 3232, 'Staff', 'cscs', 90, '', 54, '', 'IDTRA062'),
('dsds', 'Internal', 'czxczx', '2018-04-11', 'sadas', 'Ikhsan Bakhri', 43242, 'Manager', 'HRD', 90, '', 90, '', 'IDTRA063'),
('Pemeriksaan Bahan Baku', 'Eksternal', 'Pak Nasir', '2018-04-07', 'ds', 'Ikhsan Bakhri', 43242, 'Staff', 'HRD', 32, '', 100, '', 'IDTRA064'),
('Pembukuan', 'Internal', 'dsds', '2018-04-11', 'sadas', 'Ikhsan Bakhri', 32323, 'Staff', 'HRD', 43, '', 100, '', 'IDTRA065'),
('Pembukuan', 'Internal', 'dsds', '2018-04-11', 'sadas', 'isasasa', 0, 'zxz', 'xzxz', 90, '', 100, '', 'IDTRA066'),
('cadas', 'Internal', 'Pak Nasir', '2018-04-04', 'sadas', 'Ikhsan Bakhri', 43242, 'Staff', 'HRD', 90, '', 100, '', 'IDTRA067'),
('cadas', 'Internal', 'Pak Nasir', '2018-04-11', 'Ruang Nias', 'Ikhsan Bakhri', 32323, 'Manager', 'HRD', 90, '', 90, '', 'IDTRA068'),
('Ardi', 'Internal', 'xzz', '2018-04-03', 'xz', 'xzx', 4343, 'cxcx', 'xzxz', 90, '', 90, '', 'IDTRA069'),
('sdsds', 'Eksternal', 'dsds', '2018-04-11', 'dsd', 'Ikhsan Bakhri', 32323, 'aku', 'dsds', 100, '', 100, '', 'IDTRA070'),
('Pembukuan', 'Internal', 'Pak Nasir', '2018-04-17', 'ds', 'Ikhsan', 32323, 'Staff', 'cscs', 32, '', 90, '', 'IDTRA071'),
('Pembukuan', 'Internal', 'Pak Nasir', '2018-04-10', 'xzxz', 'Ikhsan', 32323, 'Manager', 'HRD', 90, '', 90, '', 'IDTRA072'),
('dsds', 'Eksternal', 'Pak Nasir', '2018-04-11', 'Ruang Nias', 'Ikhsan Bakhri', 32323, 'Manager', 'HRD', 90, '', 100, '', 'IDTRA073'),
('Pembukuan', 'Internal', 'dsds', '2018-04-17', 'ds', 'Ikhsan', 32323, 'Manager', 'cscs', 90, '', 90, '', 'IDTRA074'),
('dsds', 'Internal', 'Pak Nasir', '2018-04-09', 'Ruang Nias', 'Ikhsan Bakhri', 43242, 'Manager', 'HRD', 90, '', 43, '', 'IDTRA075'),
('dsds', 'Internal', 'dsds', '2018-04-02', 'ds', 'Ikhsan', 43242, 'aku', 'HRD', 90, '', 90, '', 'IDTRA076'),
('dsds', 'Eksternal', 'czxczx', '2018-04-13', 'ds', 'Ikhsan Bakhri', 32323, 'Manager', 'cscs', 43, '', 90, '', 'IDTRA077'),
('cadas', 'Internal', 'Pak Nasir', '2018-04-11', 'sadas', 'Ikhsan Bakhri', 43242, 'Staff', 'dsds', 43, '', 43, '', 'IDTRA078'),
('Buku Tahunan', 'Internal', 'Pak Nasir', '2018-04-11', 'sadas', 'Gagas Pandu Wib', 32742, 'HRD', 'HRD', 90, '', 90, '', 'IDTRA079'),
('Bubuk Coklat', 'Internal', 'Pak Welly', '2018-04-11', 'Ruang Nias', 'Katiman', 32582, 'Manager', 'Purchasing', 100, '', 100, '', 'IDTRA080'),
('Nasi Padang', 'Internal', 'Pak Nasir', '2018-04-12', 'Ruang Sulawesi', 'Ikhsan Bakhri', 78494, 'Manager', 'HRD', 90, '', 90, '', 'IDTRA081'),
('Pembukuan', 'Internal', 'dfd', '2018-04-11', 'Ruang Nias', 'Ikhsan Bakhri', 43242, 'Manager', 'cscs', 92, '', 90, '', 'IDTRA082');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_2` (`username`,`password`,`nama`),
  UNIQUE KEY `username_3` (`username`,`password`,`nama`),
  UNIQUE KEY `nama` (`nama`),
  FULLTEXT KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(3, 'adminbt', '15de41bb3e2d23e8b5c36614f57d68b1', 'Nasir'),
(2, 'ardi', '0264391c340e4d3cbba430cee7836eaf', 'ardi'),
(1, 'ikhsan', '21232f297a57a5a743894a0e4a801fc3', 'Ikhsan Bakhri');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2021 pada 09.26
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` bigint(19) UNSIGNED NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` bigint(13) NOT NULL,
  `status` enum('aktif','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama`, `jk`, `alamat`, `no_tlp`, `status`) VALUES
(201200002, 'Arifin', 'pria', 'Jl. Kampung Utan Cibitung - Be', 2147483647, 'aktif'),
(201500001, 'Hasbunallah', 'pria', 'Kp. Wangkal Rt.03 / Rw. 07 desa kalijaya cikarang', 2147483647, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(4) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `nip` bigint(19) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`, `nama_kelas`, `nip`, `tahun_ajaran`, `jurusan`) VALUES
(1, 'X', 'Kelas A', 201200002, '2015/2016', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(4) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `id_pelajaran` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nis` bigint(20) NOT NULL,
  `nilai_uts` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `semester`, `id_pelajaran`, `id_kelas`, `nip`, `nis`, `nilai_uts`, `nilai_uas`, `keterangan`) VALUES
(3, 'ganjil', 1, 1, 201200002, 2014001, 100, 90, 'Bagus'),
(4, 'genap', 1, 1, 201500001, 2014002, 80, 90, 'Tingkatkan lagi belajarmu'),
(7, 'ganjil', 1, 1, 201200002, 2014001, 80, 90, 'Tingkatkan lagi belajarmu'),
(9, 'ganjil', 1, 1, 201200002, 2014002, 100, 90, 'Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `id_pelajaran` int(4) NOT NULL,
  `nama_pelajaran` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`id_pelajaran`, `nama_pelajaran`, `keterangan`) VALUES
(1, 'Matematika', 'Wajib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(19) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('pria','wanita') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lhr` varchar(30) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` bigint(13) NOT NULL,
  `tahun_angkatan` int(4) NOT NULL,
  `status` enum('aktif','lulus','keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `jk`, `agama`, `tempat_lhr`, `tanggal_lhr`, `alamat`, `no_tlp`, `tahun_angkatan`, `status`) VALUES
('2014001', 'Anton Sugianto', 'pria', 'Islam', 'Bekasi', '1997-07-09', 'Jl. Pilar Timur Rt.03 Rw.08 Cikarang Kota', 2147483647, 2015, 'aktif'),
('2014002', 'Tri Sulistiawati', 'wanita', 'Islam', 'Tangerang', '1997-02-12', 'Jl. Lapang Bola 2, Cirebon Kota', 2147483647, 2015, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` bigint(19) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'Admina', 'admin'),
(111, '111', '111', 'test', 'guru'),
(111111, '111111', '111111', 'test', 'siswa'),
(2014001, '2014001', '2014001', 'Anton Sugianto', 'siswa'),
(2014002, '2014002', '2014002', 'Tri Sulistiawati', 'siswa'),
(201200002, '201200002', '201200002', 'Arifin', 'guru'),
(201500001, '201500001', '201500001', 'Hasbunallah', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `nip_2` (`nip`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `nip` bigint(19) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201500002;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `id_pelajaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(19) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201500002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

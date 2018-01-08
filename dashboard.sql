-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28 Des 2017 pada 15.32
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iuran`
--

CREATE TABLE `iuran` (
  `id_instansi` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `iuran_dibayar` int(100) NOT NULL,
  `target_bayar` int(100) NOT NULL,
  `setoran_iuran_terakhir` date NOT NULL,
  `tunggakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iuran`
--

INSERT INTO `iuran` (`id_instansi`, `instansi`, `iuran_dibayar`, `target_bayar`, `setoran_iuran_terakhir`, `tunggakan`) VALUES
('t001', 'telkom', 1000, 2000, '2017-12-21', 'belum lunas'),
('t002', 'dapen', 2000, 2000, '2017-12-05', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(100) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk`
--

CREATE TABLE `sk` (
  `nik` int(100) NOT NULL,
  `nama_pensiun` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `batas_proses` date NOT NULL,
  `jenis_sk` varchar(100) NOT NULL,
  `status_proses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sk`
--

INSERT INTO `sk` (`nik`, `nama_pensiun`, `instansi`, `tgl_pengajuan`, `batas_proses`, `jenis_sk`, `status_proses`) VALUES
(1403206, 'dian', 'telkom', '2017-12-01', '2017-12-31', 'janda/duda', 'sedang diproses'),
(1403207, 'mira', 'dapen', '2017-12-08', '2017-12-25', 'normal', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tangguhan`
--

CREATE TABLE `tangguhan` (
  `nik` int(100) NOT NULL,
  `nama_pensiun` varchar(100) NOT NULL,
  `jenis_tangguhan` varchar(100) NOT NULL,
  `total_manfaat_ditangguhkan` varchar(100) NOT NULL,
  `tgl_awal_tangguhan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tangguhan`
--
ALTER TABLE `tangguhan`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

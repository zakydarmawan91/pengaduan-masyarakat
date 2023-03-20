-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2023 pada 05.47
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Kendaraan dan lalu lintas'),
(2, 'Kesehatan\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `username`, `password`, `telp`) VALUES
(28, '123', 'dsfdf', 'dgdgs', '$2y$10$MPXqmyl9AAFZdD/D0WMLK.YOySq5ccjSsEqNHTf1U2BjGUMaKYLRy', '08686678'),
(29, '431423', 'zada', 'dsadasdasd', '$2y$10$h5iBPqTF5bnAqVRQ5ECMvuEpX2P3AQt88zm2CjUaZxtBibYxNx0Eq', '23423423'),
(30, '123', 'dims', 'dims', '$2y$10$YXxgzMnUQkrEbU1dWZHFwu/VLSruePKcKCHp8ffmUQUBk4cxWiiQG', '086779'),
(31, '123', 'dimas', 'iqto', '$2y$10$vKOqrdhQgi/H7FEXceup7eDLxxhUxHMX3JsS5W3lwAe1vH/2U8Jqy', '086786734'),
(32, '6585768567585', 'dhdthtde', 'dtryhrjr', '$2y$10$7wVRpgzLgth6wRvQOAFKpeWVv5sAjbHMa4VhQZSDdgob1ZqYKKDLq', '5467578564754'),
(33, '5355664537564', 'tono', 'tono', '$2y$10$wkbnx9j2VZ/5C3AogzCd/uibQ1G3xq01Z963lTWvfLtgnNQzJkX.a', '0853435456745'),
(34, '453623636545474', 'eee', 'eee', '$2y$10$u8jcEjr89XCqspPi1vVp8epRm.mygGg/P/Os/n5ii.OP3TtsgYZCm', '08344556655'),
(35, '123', 'tono', 'tono', '$2y$10$3QRpEQmjRMfRN0hkEtJIS.44iHhKxR1cy4jzGKLx4ory/E4f0w3F6', '123'),
(36, '123', 'af', 'af', '$2y$10$kLSqb9O3Pxl7H791xCvueeE5yeSwPRTaKExIqKnAtQmXGHECce/OC', '123'),
(37, '11', 'eee', 'df', '$2y$10$/tOeDV8XvSPVZ4EZ8nPCqOwTJ3hwmwGQjqKUClgT8nFiAwnaaY9nS', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(9, 0, '2023-02-22', '', 'apa aja', '1-removebg-preview1.png', '0'),
(10, 0, '2023-02-14', '', 'ya aja', '5ryhr56tiu54re.PNG', '0'),
(11, 0, '2023-02-28', '', 'yaya', 'Capture2.PNG', '0'),
(12, 0, '2023-02-02', '', 'ghchgcfghf', '1-removebg-preview2.png', '0'),
(13, 0, '2023-02-26', '', 'aduin', 'aaaa.PNG', '0'),
(14, 0, '2023-02-08', '', 'r', 'Screenshot_(8).png', '0'),
(15, 0, '2023-02-20', '', 'okk', 'Screenshot_(8)1.png', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `id_petugas`, `nama`, `username`, `password`, `telp`, `level`) VALUES
(1, 0, 'asdasd', 'azada', '$2y$10$/bYScCYVo1xx3eq/92mDpOiPS', '213213213', 'admin'),
(2, 0, 'fsfdresf', 'asxdas', '$2y$10$2oELBkpWST4bYQugftOj9OWM5', '6577', 'admin'),
(3, 0, 'tono', 'tonooo', '$2y$10$w7E3rl498tb70UPuMD0jt..tX', '123123123', 'admin'),
(4, 0, 'tono', 'asdasdas', '$2y$10$/5yiRcXj5myRdieShGOznOKhq', '2313123', 'admin'),
(5, 0, 'budi', 'budiman', '$2y$10$6L45LMKaSOuy1wpYcWUo.OGTR87/UOBc.gCyjYNwLu31uI3wH9RQ.', '1231231231', 'admin'),
(6, 0, 'haris', 'haris', '$2y$10$jgJh7pcw7kAdc2CsoBtxYeBKNU39XyP85B9a/hWcCMsltxBc8ckeK', '123123123', 'admin'),
(7, 0, 'dims', 'dimas', '$2y$10$F6MpqGwXO2fJ5Ho/G/sEK.2ipqdbS9iI49PlsjxyMJ1clX0TCehXC', '0893849348', 'admin'),
(8, 0, 'oke', 'okss', '$2y$10$aUvTgJxUK8Dl9VBT77UP8O1cVTARMwbBrFRFPcfmp4GiDbkcMAc4m', '08723124', 'admin'),
(9, 0, 'saja', 'saja', '$2y$10$rBhZrtN4epDWML2RFeCCHeHz3QxRjP0C/Z08Uac1q/c68rbzsdjuC', '08345345', 'admin'),
(10, 0, 'asd', 'asd', '$2y$10$ES0SqnpnDYpfCASk2NQqXuF/zsd/Oulu/EfuoP5vHJPZA42voqef.', '123', 'admin'),
(11, 0, 'tonoo', 'tonoo', '$2y$10$9OTNsWbHYppu2cNElicM7ecQzzqlA9X9JT3wNa.k/O/7gRF8MBgga', '123123', 'admin'),
(12, 0, 'dimas iqto', 'dimas', '$2y$10$3cBnYPd7zzDMbYTi5jKyAOY4Lzomm1GuIR5.rD0PrjgF0RrBNCTXW', '0854547547', 'admin'),
(13, 0, 'dhdthtde', 'sdgsd', '$2y$10$p7lBXiPVIxxfH9RVLKiqLe0jegVs4fF/kT128idqLPNmuZMjo/XR2', '0856846745334', 'admin'),
(14, 0, 'tono', 'tono', '$2y$10$eSLDRJb1Vh9X2Xjt89qGFOc/6oBqWgwEJh8BucNKF0iRT0DiYaW/a', '567476446445', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subkategori`
--

INSERT INTO `subkategori` (`id`, `id_kategori`, `subkategori`) VALUES
(1, 0, 'Parkir Sembarangan'),
(2, 0, 'Penyakit menular');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id` int(11) NOT NULL,
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

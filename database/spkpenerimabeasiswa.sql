-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2024 pada 14.23
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkpenerimabeasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_User` int(15) NOT NULL,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_User`, `username`, `password`) VALUES
(1, 'adminsekolah', 'c5a9c89e63451dfcd9f6b6d07f4c9fd0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `ID_Alter` int(15) NOT NULL,
  `Nama_Siswa` varchar(100) DEFAULT NULL,
  `Jenis_Kelamin` varchar(100) DEFAULT NULL,
  `Kelas` varchar(100) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_alternatif`
--

INSERT INTO `data_alternatif` (`ID_Alter`, `Nama_Siswa`, `Jenis_Kelamin`, `Kelas`, `Alamat`) VALUES
(15, 'Aisya', 'Perempuan', 'Kelas 1', 'Jakarta'),
(16, 'Fajril', 'Laki-laki', 'Kelas 1', 'Lampung'),
(17, 'Nizam', 'Laki-laki', 'Kelas 1', 'Lampung'),
(18, 'Umar', 'Laki-laki', 'Kelas 1', 'Lampung'),
(19, 'Aulia', 'Perempuan', 'Kelas 1', 'Purwokerto'),
(20, 'Royan', 'Perempuan', 'Kelas 1', 'Bandung'),
(21, 'Rafa', 'Laki-laki', 'Kelas 1', 'Jakarta'),
(22, 'Nadia', 'Perempuan', 'Kelas 1', 'Jakarta'),
(23, 'Riswan', 'Laki-laki', 'Kelas 1', 'Bandung'),
(24, 'Azriel', 'Laki-laki', 'Kelas 1', 'Bandung'),
(25, 'Adam', 'Laki-laki', 'Kelas 1', 'Jakarta'),
(26, 'Yunita', 'Perempuan', 'Kelas 1', 'Lampung'),
(27, 'Anggi', 'Perempuan', 'Kelas 1', 'Lampung'),
(28, 'Tiara', 'Perempuan', 'Kelas 1', 'Jakarta'),
(29, 'Nida', 'Perempuan', 'Kelas 1', 'Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `ID_Kriteria` int(15) NOT NULL,
  `Nama_Kriteria` varchar(100) DEFAULT NULL,
  `Nilai_Bobot` int(11) DEFAULT NULL,
  `Atribut` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kriteria`
--

INSERT INTO `data_kriteria` (`ID_Kriteria`, `Nama_Kriteria`, `Nilai_Bobot`, `Atribut`) VALUES
(17, 'Jumlah Hapalan Surat Pendek', 40, 'Benefit'),
(18, 'Makrijul Huruf', 30, 'Benefit'),
(19, 'Ketepatan Tajwid', 20, 'Benefit'),
(20, 'Surat Keterangan Tidak Mampu', 10, 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penilaian`
--

CREATE TABLE `data_penilaian` (
  `ID_Penilaian` int(15) NOT NULL,
  `ID_Alter` int(15) DEFAULT NULL,
  `ID_Kriteria` int(15) DEFAULT NULL,
  `Nilai` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penilaian`
--

INSERT INTO `data_penilaian` (`ID_Penilaian`, `ID_Alter`, `ID_Kriteria`, `Nilai`) VALUES
(1, 15, 17, 100),
(2, 15, 18, 88),
(3, 15, 19, 88),
(4, 15, 20, 85),
(5, 16, 17, 100),
(6, 16, 18, 90),
(7, 16, 19, 92),
(8, 16, 20, 85),
(9, 17, 17, 100),
(10, 17, 18, 88),
(11, 17, 19, 80),
(12, 17, 20, 86),
(13, 18, 17, 100),
(14, 18, 18, 88),
(15, 18, 19, 80),
(16, 18, 20, 78),
(17, 19, 17, 100),
(18, 19, 18, 80),
(19, 19, 19, 80),
(20, 19, 20, 76),
(21, 20, 17, 100),
(22, 20, 18, 88),
(23, 20, 19, 92),
(24, 20, 20, 85),
(25, 21, 17, 100),
(26, 21, 18, 88),
(27, 21, 19, 80),
(28, 21, 20, 80),
(29, 22, 17, 100),
(30, 22, 18, 86),
(31, 22, 19, 90),
(32, 22, 20, 85),
(33, 23, 17, 100),
(34, 23, 18, 90),
(35, 23, 19, 88),
(36, 23, 20, 80),
(37, 24, 17, 100),
(38, 24, 18, 88),
(39, 24, 19, 88),
(40, 24, 20, 78),
(41, 25, 17, 100),
(42, 25, 18, 88),
(43, 25, 19, 84),
(44, 25, 20, 85),
(45, 26, 17, 100),
(46, 26, 18, 88),
(47, 26, 19, 84),
(48, 26, 20, 85),
(49, 27, 17, 100),
(50, 27, 18, 84),
(51, 27, 19, 84),
(52, 27, 20, 80),
(53, 28, 17, 100),
(54, 28, 18, 84),
(55, 28, 19, 80),
(56, 28, 20, 78),
(57, 29, 17, 100),
(58, 29, 18, 90),
(59, 29, 19, 88),
(60, 29, 20, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_normalisasi`
--

CREATE TABLE `hasil_normalisasi` (
  `ID_Norm` int(15) NOT NULL,
  `ID_Alter` int(15) DEFAULT NULL,
  `ID_Kriteria` int(15) DEFAULT NULL,
  `Hasil_Norm` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_preferensi`
--

CREATE TABLE `hasil_preferensi` (
  `ID_Pref` int(15) NOT NULL,
  `ID_Alter` int(15) DEFAULT NULL,
  `hasil_pref` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`ID_Alter`);

--
-- Indeks untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`ID_Kriteria`);

--
-- Indeks untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD PRIMARY KEY (`ID_Penilaian`),
  ADD KEY `data_penilaian_FK_1` (`ID_Alter`),
  ADD KEY `data_penilaian_FK` (`ID_Kriteria`);

--
-- Indeks untuk tabel `hasil_normalisasi`
--
ALTER TABLE `hasil_normalisasi`
  ADD PRIMARY KEY (`ID_Norm`),
  ADD KEY `hasil_normalisasi_FK` (`ID_Alter`),
  ADD KEY `hasil_normalisasi_FK_1` (`ID_Kriteria`);

--
-- Indeks untuk tabel `hasil_preferensi`
--
ALTER TABLE `hasil_preferensi`
  ADD PRIMARY KEY (`ID_Pref`),
  ADD KEY `hasil_preferensi_FK` (`ID_Alter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_User` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  MODIFY `ID_Alter` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  MODIFY `ID_Kriteria` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  MODIFY `ID_Penilaian` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `hasil_normalisasi`
--
ALTER TABLE `hasil_normalisasi`
  MODIFY `ID_Norm` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_preferensi`
--
ALTER TABLE `hasil_preferensi`
  MODIFY `ID_Pref` int(15) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD CONSTRAINT `data_penilaian_FK` FOREIGN KEY (`ID_Kriteria`) REFERENCES `data_kriteria` (`ID_Kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_penilaian_FK_1` FOREIGN KEY (`ID_Alter`) REFERENCES `data_alternatif` (`ID_Alter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_normalisasi`
--
ALTER TABLE `hasil_normalisasi`
  ADD CONSTRAINT `hasil_normalisasi_FK` FOREIGN KEY (`ID_Alter`) REFERENCES `data_alternatif` (`ID_Alter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_normalisasi_FK_1` FOREIGN KEY (`ID_Kriteria`) REFERENCES `data_kriteria` (`ID_Kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_preferensi`
--
ALTER TABLE `hasil_preferensi`
  ADD CONSTRAINT `hasil_preferensi_FK` FOREIGN KEY (`ID_Alter`) REFERENCES `data_alternatif` (`ID_Alter`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Mei 2018 pada 01.40
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `simrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `departemen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id`, `departemen`) VALUES
(2, 'Kebersihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE IF NOT EXISTS `gedung` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `gedung` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`id`, `gedung`) VALUES
(2, 'Operasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Dokter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE IF NOT EXISTS `jenjang` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `jenjang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`id`, `jenjang`) VALUES
(1, 'Poliklinik'),
(3, 'Pertama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `foto`, `hak_akses`, `date_created`) VALUES
(1, 'irsyad', '123', 'Hussain Irsyad', '', 'admin', '2018-05-09 09:11:00'),
(2, 'icca', '123', 'Hussain Irsyad', '', 'dokter', '2018-05-09 09:34:10'),
(3, 'hussain', '123', 'Irsyad Hussain', '', 'staff', '2018-05-07 05:23:03'),
(4, 'muhammad', '123', 'Irsyad Hussain', '', 'keuangan', '2018-05-02 11:38:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `no_rekamedis` varchar(90) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_menikah` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `no_rekamedis`, `nama_pasien`, `jk`, `goldar`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `agama`, `telpon`, `pekerjaan`, `status_menikah`) VALUES
(2, '90118273654', 'Irsyad', 'Laki-Laki', 'B', 'Makassar', '1997-07-26', 'Rosniah', 'Katangka', 'Islam', '08999026825', 'PNS', 'Belum Menikah'),
(4, '90118273654', 'Irsyad', 'Laki-Laki', 'A', 'Makassar', '3333-03-31', 'Rosniah', 'Katangka', 'Kristen Protestan', '08999026825', 'PNS', 'Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `poliklinik` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `poliklinik`
--

INSERT INTO `poliklinik` (`id`, `poliklinik`) VALUES
(1, 'Poli Gigi Susu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `ruang` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `ruang`) VALUES
(2, 'Mawar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesialis`
--

CREATE TABLE IF NOT EXISTS `spesialis` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `spesialis` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `spesialis`
--

INSERT INTO `spesialis` (`id`, `spesialis`) VALUES
(1, 'Kulit');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

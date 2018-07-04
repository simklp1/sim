-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2018 pada 08.46
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
  `id_jabatan` int(50) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Direktur Rumah Sakit'),
(3, 'Dokter'),
(4, 'Suster');

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `kode` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `deskripsi` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(2, 1, 'Obat Dalam', 'hahahahahahahahahahahahahahahahhaahhaa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `foto`, `hak_akses`, `date_created`) VALUES
(1, 'irsyad', '123', 'Hussain Irsyad', 'foto.jpg', 'admin', '2018-05-09 09:11:00'),
(2, 'arham', '123', 'Arham Affandi', 'foto2.jpg', 'dokter', '2018-05-09 09:34:10'),
(3, 'ahmad', '123', 'Ahmad Muhtadin', 'foto3.jpg', 'staff', '2018-05-07 05:23:03'),
(4, 'majid', '123', 'Abd. Majid', 'foto4.jpg', 'keuangan', '2018-05-02 11:38:43'),
(5, 'ardi', '123', 'Ardiansyah', 'foto5.jpg', 'dokter', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `kode` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `deskripsi` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(2, 6, 'Sanmol', 'yayayayaayyayayayayayayayayyayaay');

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
  `no_bpjs` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_menikah` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `no_rekamedis`, `nama_pasien`, `jk`, `goldar`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `agama`, `no_bpjs`, `telpon`, `pekerjaan`, `status_menikah`) VALUES
(2, '90118273654', 'Irsyad', 'Laki-Laki', 'B', 'Makassar', '1997-07-26', 'Rosniah', 'Katangka', 'Islam', '909090990', '08999026825', 'PNS', 'Belum Menikah'),
(4, '90118273654', 'Irsyad', 'Laki-Laki', 'A', 'Makassar', '3333-03-31', 'Rosniah', 'Katangka', 'Kristen Protestan', '6060606060', '08999026825', 'PNS', 'Menikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `id_jabatan` varchar(50) NOT NULL,
  `pangkat` varchar(5) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `ktp`, `id_jabatan`, `pangkat`, `alamat`, `telpon`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`) VALUES
(12, 'Hussain Irsyad', '09090', 'Dokter', '4AS', 'BTN Manggarupi', '08999026825', 'Makassar', '1997-07-26', 'Islam', 'S1'),
(14, 'Majid', '7986796996', 'Direktur Rumah Sakit', '5BD', 'x', '08999026825', 'Makassar', '1996-01-09', 'Islam', 'S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pensiun`
--

CREATE TABLE IF NOT EXISTS `pensiun` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_pensiun` date NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pensiun`
--

INSERT INTO `pensiun` (`id`, `nama`, `alamat`, `tanggal_lahir`, `tanggal_pensiun`, `deskripsi`) VALUES
(1, 'Majid', '', '0000-00-00', '2018-07-01', 'fahfah'),
(3, 'Hussain Irsyad', '', '0000-00-00', '2018-07-02', 'sfsgdsdgdgdsg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pj`
--

CREATE TABLE IF NOT EXISTS `pj` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `kode` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pj`
--

INSERT INTO `pj` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(2, 1, 'Hussain', 'papapapapapapapapapapapa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id`, `ruang`) VALUES
(2, 'Melati'),
(3, 'Kamboja');

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

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Sep 2018 pada 09.30
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estimasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpha_bawang_merah`
--

CREATE TABLE `alpha_bawang_merah` (
  `delta_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alpha_bawang_merah`
--

INSERT INTO `alpha_bawang_merah` (`delta_alpha`) VALUES
(-12.8866),
(-10.0913),
(-13.5964),
(-12.0437),
(40.5111),
(100),
(61.6718),
(-81.0035),
(-76.4241),
(-15.1834),
(12.8223),
(-13.7174),
(5.18184),
(14.7052);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpha_beras`
--

CREATE TABLE `alpha_beras` (
  `delta_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alpha_beras`
--

INSERT INTO `alpha_beras` (`delta_alpha`) VALUES
(4.19962),
(-10.5335),
(-15.4071),
(-18.2014),
(4.50292),
(29.8602),
(22.3995),
(-2.62171),
(-38.5014),
(-1.45304),
(-2.19557),
(8.7775),
(13.051),
(6.5826);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpha_cabe_besar`
--

CREATE TABLE `alpha_cabe_besar` (
  `delta_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alpha_cabe_besar`
--

INSERT INTO `alpha_cabe_besar` (`delta_alpha`) VALUES
(-1),
(0.2025),
(-0.171222),
(-0.246551),
(1),
(1),
(1),
(-0.348024),
(-0.532765),
(-0.0390657),
(-0.41024),
(-0.0769368),
(-0.126034),
(-0.234872);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpha_cabe_rawit`
--

CREATE TABLE `alpha_cabe_rawit` (
  `delta_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alpha_cabe_rawit`
--

INSERT INTO `alpha_cabe_rawit` (`delta_alpha`) VALUES
(-85.4991),
(-7.63454),
(8.55812),
(-33.6235),
(86.171),
(100),
(82.1397),
(-39.754),
(-100),
(-27.8585),
(5.45969),
(14.306),
(1.92688),
(-3.9929);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpha_jagung`
--

CREATE TABLE `alpha_jagung` (
  `delta_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alpha_jagung`
--

INSERT INTO `alpha_jagung` (`delta_alpha`) VALUES
(41.9121),
(-10.1145),
(-15.1964),
(-22.7848),
(-9.48779),
(1.05267),
(8.69653),
(7.03406),
(-47.7645),
(27.5606),
(-6.64386),
(-31.357),
(-3.91295),
(61.3757);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alpha_kedelai`
--

CREATE TABLE `alpha_kedelai` (
  `delta_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alpha_kedelai`
--

INSERT INTO `alpha_kedelai` (`delta_alpha`) VALUES
(-0.000339853),
(0.217081),
(-0.723094),
(-0.499116),
(-0.276904),
(-0.0620596),
(-0.204093),
(0.403792),
(-0.673764),
(0.45657),
(0.313928),
(-0.314751),
(2.10981),
(-0.703303);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bawang_merah`
--

CREATE TABLE `bawang_merah` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` int(5) DEFAULT NULL,
  `jml_penduduk` int(7) DEFAULT NULL,
  `luas_sawah` int(6) DEFAULT NULL,
  `produksi` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bawang_merah`
--

INSERT INTO `bawang_merah` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 1427, 2322625, 102219, 92015),
(2005, 880, 2342599, 102219, 80276),
(2006, 1113, 2362746, 109150, 90233),
(2007, 898, 2383065, 103089, 67154),
(2008, 863, 2403559, 100958, 67448),
(2009, 828, 2424230, 98827, 67741),
(2010, 716, 2451997, 99764, 49628),
(2011, 598, 2471990, 98174, 4943),
(2012, 910, 2490878, 98174, 5584),
(2013, 940, 2508698, 96585, 9535),
(2014, 804, 2527087, 96565, 7095),
(2015, 3019, 2544315, 95656, 7831),
(2016, 2739, 2560675, 106392, 35078),
(2017, 2754, 2576596, 110187, 41259);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beras`
--

CREATE TABLE `beras` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` int(5) DEFAULT NULL,
  `jml_penduduk` int(7) DEFAULT NULL,
  `luas_sawah` int(5) DEFAULT NULL,
  `produksi` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `beras`
--

INSERT INTO `beras` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 61714, 2322625, 47983, 354172),
(2005, 61257, 2342599, 47902, 351847),
(2006, 63988, 2362746, 47403, 366271),
(2007, 64219, 2383065, 45888, 368509),
(2008, 66526, 2403559, 47704, 409258),
(2009, 68832, 2424230, 49519, 450006),
(2010, 67536, 2451997, 49522, 450685),
(2011, 68558, 2471990, 49498, 445033),
(2012, 62277, 2490878, 49498, 400235),
(2013, 68594, 2508698, 49474, 461291),
(2014, 68248, 2527087, 47681, 461306),
(2015, 70289, 2544315, 45888, 478930),
(2016, 74443, 2560675, 45888, 505138),
(2017, 71172, 2576596, 45888, 493793);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabe_besar`
--

CREATE TABLE `cabe_besar` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` int(5) DEFAULT NULL,
  `jml_penduduk` int(7) DEFAULT NULL,
  `luas_sawah` int(6) DEFAULT NULL,
  `produksi` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cabe_besar`
--

INSERT INTO `cabe_besar` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 1112, 2322625, 102219, 40664),
(2005, 1390, 2342599, 102219, 81184),
(2006, 1236, 2362746, 109150, 70219),
(2007, 1291, 2383065, 103089, 64749),
(2008, 1427, 2403559, 100958, 113505),
(2009, 1562, 2424230, 98827, 162261),
(2010, 1608, 2451997, 99764, 175338),
(2011, 2113, 2471990, 98174, 20970),
(2012, 1943, 2490878, 98174, 21755),
(2013, 2249, 2508698, 96585, 25020),
(2014, 2044, 2527087, 96565, 21581),
(2015, 2282, 2544315, 95656, 22042),
(2016, 2240, 2560675, 106392, 22434),
(2017, 2062, 2576596, 110187, 27189);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabe_rawit`
--

CREATE TABLE `cabe_rawit` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` int(5) DEFAULT NULL,
  `jml_penduduk` int(7) DEFAULT NULL,
  `luas_sawah` int(6) DEFAULT NULL,
  `produksi` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `cabe_rawit`
--

INSERT INTO `cabe_rawit` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 1016, 2322625, 102219, 45856),
(2005, 965, 2342599, 102219, 77483),
(2006, 957, 2362746, 109150, 85583),
(2007, 1133, 2383065, 103089, 58750),
(2008, 1368, 2403559, 100958, 86290),
(2009, 1603, 2424230, 98827, 113829),
(2010, 990, 2451997, 99764, 116337),
(2011, 1811, 2471990, 98174, 20131),
(2012, 1543, 2490878, 98174, 15057),
(2013, 1994, 2508698, 96585, 17550),
(2014, 2299, 2527087, 96565, 18557),
(2015, 3044, 2544315, 95656, 22316),
(2016, 3362, 2560675, 106392, 24372),
(2017, 4350, 2576596, 110187, 59975);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataall`
--

CREATE TABLE `dataall` (
  `tahun` int(11) NOT NULL,
  `luas_tanam` int(11) NOT NULL,
  `jml_penduduk` int(11) NOT NULL,
  `luas_lahan` int(11) NOT NULL,
  `produksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataall`
--

INSERT INTO `dataall` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_lahan`, `produksi`) VALUES
(1, 61714, 2322625, 47983, 354172),
(2, 61257, 2342599, 47902, 351847),
(3, 63988, 2362746, 47403, 366271),
(4, 64219, 2383065, 45888, 368509),
(5, 66526, 2403559, 47704, 409258),
(6, 68832, 2424230, 49519, 450006),
(7, 67536, 2451997, 49522, 450685),
(8, 68558, 2471990, 49498, 445033),
(9, 62277, 2490878, 49498, 400235),
(10, 68594, 2508698, 49474, 461291),
(11, 68248, 2527087, 47681, 461306),
(12, 70289, 2544315, 45888, 478930),
(13, 74443, 2560675, 45888, 505138),
(14, 71172, 2576596, 45888, 493793);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jagung`
--

CREATE TABLE `jagung` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` int(5) DEFAULT NULL,
  `jml_penduduk` int(11) DEFAULT NULL,
  `luas_sawah` int(11) DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jagung`
--

INSERT INTO `jagung` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 71627, 2322625, 47983, 307058),
(2005, 68098, 2342599, 47902, 277415),
(2006, 63860, 2362746, 47403, 265361),
(2007, 56804, 2383065, 45888, 240445),
(2008, 60853, 2403559, 47704, 268303),
(2009, 64902, 2424230, 49519, 296160),
(2010, 60408, 2451997, 49522, 291327),
(2011, 61150, 2471990, 49498, 297306),
(2012, 50989, 2490878, 49498, 245570),
(2013, 56043, 2508698, 49474, 297667),
(2014, 52596, 2527087, 47681, 271113),
(2015, 48445, 2544315, 45888, 247150),
(2016, 57913, 2560675, 45888, 295340),
(2017, 46972, 2576596, 45888, 289192);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedelai`
--

CREATE TABLE `kedelai` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` int(5) DEFAULT NULL,
  `jml_penduduk` int(7) DEFAULT NULL,
  `luas_sawah` int(5) DEFAULT NULL,
  `produksi` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kedelai`
--

INSERT INTO `kedelai` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 201, 2322625, 47983, 276),
(2005, 110, 2342599, 47902, 225),
(2006, 131, 2362746, 47403, 134),
(2007, 382, 2383065, 45888, 391),
(2008, 603, 2403559, 47704, 626),
(2009, 823, 2424230, 49519, 861),
(2010, 751, 2451997, 49522, 781),
(2011, 545, 2471990, 49498, 677),
(2012, 115, 2490878, 49498, 143),
(2013, 503, 2508698, 49474, 653),
(2014, 331, 2527087, 47681, 490),
(2015, 290, 2544315, 45888, 359),
(2016, 602, 2560675, 45888, 964),
(2017, 68, 2576596, 45888, 117);

-- --------------------------------------------------------

--
-- Struktur dari tabel `padi`
--

CREATE TABLE `padi` (
  `tahun` int(4) NOT NULL,
  `luas_tanam` float DEFAULT NULL,
  `jml_penduduk` float DEFAULT NULL,
  `luas_sawah` float DEFAULT NULL,
  `produksi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `padi`
--

INSERT INTO `padi` (`tahun`, `luas_tanam`, `jml_penduduk`, `luas_sawah`, `produksi`) VALUES
(2004, 201, 2322620, 47983, 276),
(2005, 110, 2342600, 47902, 225),
(2006, 131, 2362750, 47403, 134),
(2007, 382, 2383060, 45888, 391),
(2008, 603, 2403560, 47704, 626),
(2009, 823, 2424230, 49519, 861),
(2010, 751, 2452000, 49522, 781),
(2011, 545, 2471990, 49498, 677),
(2012, 115, 2490880, 49498, 143),
(2013, 503, 2508700, 49474, 653),
(2014, 331, 2527090, 47681, 490),
(2015, 290, 2544320, 45888, 359),
(2016, 602, 2560680, 45888, 964),
(2017, 68, 2576600, 45888, 117);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bawang_merah`
--
ALTER TABLE `bawang_merah`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `beras`
--
ALTER TABLE `beras`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `cabe_besar`
--
ALTER TABLE `cabe_besar`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `cabe_rawit`
--
ALTER TABLE `cabe_rawit`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `dataall`
--
ALTER TABLE `dataall`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `jagung`
--
ALTER TABLE `jagung`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `kedelai`
--
ALTER TABLE `kedelai`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `padi`
--
ALTER TABLE `padi`
  ADD PRIMARY KEY (`tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

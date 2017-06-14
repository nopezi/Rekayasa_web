-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 14 Jun 2017 pada 15.10
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab_imun`
--

CREATE TABLE IF NOT EXISTS `lab_imun` (
`id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_awal` int(50) NOT NULL,
  `kadaluarsa` varchar(50) NOT NULL,
  `jumlah_akhir` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lab_imun`
--

INSERT INTO `lab_imun` (`id`, `nama_barang`, `jumlah_awal`, `kadaluarsa`, `jumlah_akhir`, `satuan`) VALUES
(2, 'Malaria Ag P.F/Pan', 9, '10/1/2017', '8', 'Buah\r'),
(3, 'HIV Dipstik (Anti HIV-2)', 89, '9/1/2006', '80', 'Buah\r'),
(4, 'Anti HIV-1/2 Cassete', 19, '5/1/2014', '7', 'Buah\r'),
(5, 'RPR', 144, '2/1/2013', '127', 'Buah\r'),
(6, 'ASO', 34, '9/1/2016', '27', 'Buah\r'),
(7, 'CRP', 28, '4/1/2017', '20', 'Buah\r'),
(8, 'RF', 68, '4/1/2014', '55', 'Buah\r'),
(9, 'SD HIV-1/2 3.0', 1, '5/1/2014', '1', 'Pack\r'),
(10, 'Micropath HD', 25, '11/1/2010', '20,5', 'Mililiter\r'),
(11, 'Micropath OC', 16, '5/1/2010', '16,5', 'Mililiter\r'),
(12, 'Micropath Hb', 27, '1/1/2011', '19,5', 'Mililiter\r'),
(13, 'Micropath Ha', 26, '2/1/2011', '20,5', 'Mililiter\r'),
(14, 'Micropath OD', 24, '2/1/2011', '14,5', 'Mililiter\r'),
(15, 'Micropath OB', 25, '6/1/2015', '20,5', 'Mililiter\r'),
(16, 'Micropath Salmonella Ha', 2, '4/1/2008', '2', 'Mililiter\r'),
(17, 'Antigen Salmonella paratyphi O-A', 5, '3/1/2013', '3,5', 'Mililiter\r'),
(18, 'Antigen Salmonella paratyphi O-B', 1, '3/1/2010', '1', 'Mililiter\r'),
(19, 'Antigen Salmonella paratyphi O-C', 2, '3/1/2013', '2', 'Mililiter\r'),
(20, 'Antigen H-A', 2, '3/1/2013', '2', 'Mililiter\r'),
(21, 'Antigen H-B', 3, '3/1/2013', '2', 'Mililiter\r'),
(22, 'Antigen H-C', 2, '3/1/2013', '2', 'Mililiter\r'),
(23, 'Antigen H', 2, '4/1/2013', '2', 'Mililiter\r'),
(24, 'Betatex Direct Plus', 2, '3/1/2016', '2', 'Pack\r'),
(25, 'VDRL', 1, '11/1/2011', '1', 'Pack\r'),
(26, 'TPHA Test', 1, '1/1/2017', '1', 'Pack\r'),
(27, 'GOT (ASAT)', 1, '3/1/2011', '1', 'Pack\r'),
(28, 'HCG Agglutination (Fertitex Mono?)', 1, '7/1/2016', '1', 'Pack\r'),
(29, 'HBsAg Test Strip ', 46, '11/1/2013', '39', 'Buah\r'),
(30, 'Syphilis TPHA Liquid', 1, '10/1/2008', '1', 'Pack\r'),
(31, 'CRP Reagen SET', 1, '7/1/2010', '1', 'Pack\r'),
(32, 'Anti A Monoclonal', 1, '8/1/2012', '1', 'Pack\r'),
(33, 'HIV Ultra Test Device', 16, '6/1/2014', '11', 'Buah\r'),
(34, 'COC Rapid Test Cassete', 21, '11/1/2014', '16', 'Buah\r'),
(35, 'MET Rapid Test Cassete', 10, '9/1/2015', '7', 'Buah\r'),
(36, 'CRP-Q Rapid Test', 8, '1/1/2019', '7', 'Buah\r'),
(37, 'HBsAg ', 17, '8/1/2013', '11', 'Buah\r'),
(38, 'Anti HIV-1/2 Cassete', 5, '12/1/2010', '2', 'Buah\r'),
(39, 'HIV 1 dan 2 Antibody', 68, '3/1/2013', '48', 'Buah\r'),
(40, 'HIV Serum/Plasma', 60, '12/1/2010', '53', 'Buah\r'),
(41, 'Micropath HC', 23, '12/1/2013', '17,5', 'Mililiter\r'),
(42, 'Micropath OA', 26, '3/1/2011', '20', 'Mililiter\r'),
(43, 'IMMUTREP Carbon Antigen', 14, '11/1/2014', '10', 'Mililiter\r'),
(44, 'Micropath Salmonella H-C', 2, '2/1/2008', '1', 'Mililiter\r'),
(45, 'Micropath Salmonella O-D', 2, '3/1/2008', '2', 'Mililiter\r'),
(46, 'Micropath Salmonella O-C', 3, '2/1/2008', '2', 'Mililiter\r'),
(47, 'Salmonella typhi O', 3, '4/1/2013', '2', 'Mililiter\r'),
(48, 'Salmonella typhi O-C', 3, '3/1/2017', '2', 'Mililiter\r'),
(49, 'Salmonella typhi H-A', 2, '2/1/2010', '1', 'Mililiter\r'),
(50, 'Salmonella typhi H-C', 2, '2/1/2010', '1', 'Mililiter\r'),
(51, 'Salmonella typhi H-B', 2, '3/1/2010', '1', 'Mililiter\r'),
(52, 'Salmonella typhi O-B', 2, '3/1/2017', '1', 'Mililiter\r'),
(53, 'Salmonella typhi H', 1, '2/1/2010', '1', 'Mililiter\r'),
(54, 'VDRL Carbon Antigen', 5, '5/1/2013', '4', 'Mililiter\r'),
(55, 'Salmonella typhi O', 6, '8/1/2014', '4', 'Mililiter\r'),
(56, 'Salmonella typhi H', 8, '8/1/2014', '5', 'Mililiter\r'),
(57, 'Salmonella H paratyphi b', 8, '8/1/2014', '5', 'Mililiter\r'),
(58, 'Salmonella O paratyphi b', 5, '7/1/2014', '3', 'Mililiter\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab_parasit`
--

CREATE TABLE IF NOT EXISTS `lab_parasit` (
`id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_awal` int(50) NOT NULL,
  `kadaluarsa` varchar(50) NOT NULL,
  `jumlah_akhir` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lab_parasit`
--

INSERT INTO `lab_parasit` (`id`, `nama_barang`, `jumlah_awal`, `kadaluarsa`, `jumlah_akhir`, `satuan`) VALUES
(2, 'Entelan', 300, '30/04/2014', '270', 'Mililiter'),
(3, 'Xylol\r\n', 4, '7/5/2018', '3,8', 'Liter'),
(4, 'Methanol\r\n', 2, '30/5/2015', '1,4', 'Liter'),
(5, 'KOH\r\n', 1, '31/03/2015', '0,78', 'Kilogram'),
(6, 'SDA\r\n', 1, '31/03/2016', '0,65', 'Kilogram'),
(7, 'Giemsa\r\n', 1, '31/01/2016', '0,81', 'Liter'),
(8, 'Eosin\r\n', 75, '30/06/2020', '56', 'Gram'),
(9, 'Formalin\r\n', 2, '30/05/2016', '1,76', 'Liter'),
(10, 'Eter\r\n', 1, '31/05/2015', '0,68', 'Liter'),
(11, 'Malachite Green\r\n', 25, '31/12/2010', '18', 'Gram'),
(12, 'Methilen Blue\r\n', 25, '20/02/2029', '16', 'Gram'),
(13, 'Parafin\r\n', 1, '6/2/2017', '0,73', 'Gram'),
(18, 'Imersi', 600, '31/3/2014', '579', 'Mililiter'),
(19, 'baju gam1s', 200, '100', '200', 'kilometer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `telepon`
--

CREATE TABLE IF NOT EXISTS `telepon` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `telepon`
--

INSERT INTO `telepon` (`id`, `nama`, `nomor`) VALUES
(1, 'Alpha', '085711111111'),
(2, 'Beta', '085722222222'),
(3, 'Gamma', '085744444444'),
(4, 'Delta', '085733333333'),
(5, 'Terra', '085711111155'),
(6, 'Giga', '085711111166'),
(7, 'Nano', '085766666666'),
(8, 'Penta', '085766662222'),
(9, 'Golf', '085766663333'),
(10, 'Yotta', '085766667777'),
(11, 'Mega', '085766660000'),
(12, 'Quad', '085766665555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_imun`
--
ALTER TABLE `lab_imun`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_parasit`
--
ALTER TABLE `lab_parasit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telepon`
--
ALTER TABLE `telepon`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lab_imun`
--
ALTER TABLE `lab_imun`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `lab_parasit`
--
ALTER TABLE `lab_parasit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `telepon`
--
ALTER TABLE `telepon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

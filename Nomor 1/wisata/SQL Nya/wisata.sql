-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 10:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(37) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rizki', '3e089c076bf1ec3a8332280ee35c28d4');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Wisata Alam'),
(2, 'Bangunan'),
(3, 'Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(2) NOT NULL,
  `nama` varchar(18) NOT NULL,
  `subject` varchar(28) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `subject`, `isi`) VALUES
(1, 'rizki', 'Kurang Bagus', 'Perbaiki Lagi'),
(2, 'nano', 'Bad Design', 'Kurang Persiapan\r\n'),
(3, 'nano', 'Bad Design', 'Kurang Persiapan\r\n'),
(4, 'rizki', 'Kurang Bagus', 'aaa'),
(5, 'jur1', 'Nguji', 'Bravo'),
(6, 'jur1', 'air bersih', 'd'),
(7, 'j3', 'coba diperbaiki', 'layout kurang menarik'),
(8, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(3) NOT NULL,
  `nama_wisata` varchar(15) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `konten` text NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `gambar`, `konten`, `id_kategori`, `tgl_upload`) VALUES
(2, 'Curug Gede', 'curugbayan.jpg', 'Curug Bayan banyak dikunjungi oleh wisatawan dalam negri ,Curug Bayan merupakan wisata alam yang indah', 1, '2018-09-29'),
(3, 'Curug Cipendok', 'curugcipendok.jpg', 'Curug Cipendok Adalah curug yang lumyan tinggi , banyak di minati oleh para wisatawan yang suka dengan curug. dengan udara yang segar setiap paginya membuat suasana menjadi baik', 1, '2018-09-29'),
(5, 'Curug Gomblang', 'curuggomblang.jpg', 'Curug gomblang Adalah curug yang lumyan tinggi , banyak di minati oleh para wisatawan yang suka dengan curug. dengan udara yang segar setiap paginya membuat suasana menjadi baik', 1, '2018-09-29'),
(6, 'Bakso', 'bakso.jpg', 'Bakso adalah makanan favorit para masyarakat yang suka nongkrong di warung kaki lima', 3, '2018-09-29'),
(7, 'Getuk', 'getuk.jpg', 'Getuk Adalah Makanan khas dari sokaraja yang berbentuk bulat dengan rasa gula jawa. makanan ini sangat diminati oleh wisatawan ataupun masyarakat setempat', 3, '2018-09-29'),
(8, 'Mendoan', 'mendoan.jpg', 'Mendoan adalah gorengan dari bahan kedelai,yang orang suka makan mendoan di barengi dengan secangkir kopi hitam', 3, '2018-09-29'),
(9, 'Hotel Aston', 'aston.jpg', 'Hotel Aston sebuah Hotel megah yang ada di purwokerto, banyak wisatawan yang menginap di hotel aston. jika melihat ke utara ada pemandagan gunung slamet yang indah. ', 2, '2018-09-29'),
(10, 'Hotel Santika', 'santika.jpg', 'Hotel Santika adalah sebuah Hotel megah. banyak wisatawan yang menginap di hotel santika, Si Suguhi dengan pemandangan pantai di sekitar hotel. ', 2, '2018-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

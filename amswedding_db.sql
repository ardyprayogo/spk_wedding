-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 06:59 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amswedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `nama_admin`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('test', '098f6bcd4621d373cade4e832627b4f6', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` varchar(20) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `password`, `email`, `no_telp`, `alamat`) VALUES
('ardy.prayogo', 'ardy prayogo', '098f6bcd4621d373cade4e832627b4f6', 'ardy.prayogo@yahoo.com', '123456', 'jl. amwmamnsmdnamsndba nasmndmasndmn ma no. 456213 kel. kamwkansd kec. kandwkn jakarta selatan'),
('faisal.akbar', 'faisal akbar', '81dc9bdb52d04dc20036dbd8313ed055', '123@mail.com', '12345', 'jl. jakarta barat'),
('test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@mail.com', '1234', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `catering` varchar(500) NOT NULL,
  `harga_catering` int(11) NOT NULL,
  `dekorasi` varchar(500) NOT NULL,
  `harga_dekorasi` int(11) NOT NULL,
  `dokumentasi` varchar(500) NOT NULL,
  `harga_dokumentasi` int(11) NOT NULL,
  `rias` varchar(500) NOT NULL,
  `harga_rias` int(11) NOT NULL,
  `tamu` varchar(500) NOT NULL,
  `harga_undangan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `catering`, `harga_catering`, `dekorasi`, `harga_dekorasi`, `dokumentasi`, `harga_dokumentasi`, `rias`, `harga_rias`, `tamu`, `harga_undangan`) VALUES
(11, 'paket 1', '-Buffee Resepsi 400 porsi\r\n-Aneka buah\r\n-Aneka pudding', 18000000, '-Pelaminan+dekorasi\r\n-Bunga+standing flower 2 buah\r\n-Kotak Angpao 2 buah \r\n-Small flower saat akad nikah', 14000000, '-Foto 1 album kolase 16 halaman\r\n-Video shooting', 3000000, '-Baju + aksesoris pengantin\r\n-Rias orang tua ibu + kain 2 buah\r\n-Rias orang tua bapak + baju 2 buah\r\n-Rias penerima tamu 4 buah', 10000000, '500', 250000),
(12, 'paket 2', '-Buffee Resepsi 500 porsi\r\n-Aneka buah\r\n-Aneka pudding\r\n-Aneka Softdrink', 16000000, '-Pelaminan+dekorasi\r\n-Bunga+standing flower 2 buah\r\n-Gazebo pergola\r\n-Kotak Angpao 2 buah ', 25000000, '-Foto 1 album kolase 18 halaman\r\n-Video shooting', 2500000, '-Baju + aksesoris pengantin\r\n-Rias orang tua ibu + kain 2 buah\r\n-Rias orang tua bapak + baju 2 buah\r\n-Rias penerima tamu 4 buah', 15000000, '500', 350000),
(13, 'paket 3', '-Buffee Resepsi 500 porsi\r\n-Gubukan 2 macam\r\n-Aneka buah\r\n-Aneka pudding\r\n-Aneka Softdrink', 17000000, '-Pelaminan+dekorasi\r\n-Bunga+standing flower 3 buah\r\n-Gazebo pergola\r\n-Kotak Angpao 2 buah \r\n-Small flower dimeja pnerima tamu', 20000000, '-Foto 1 album kolase 20 halaman\r\n-Video shooting', 4000000, '-Baju + aksesoris pengantin\r\n-Rias orang tua ibu + kain 2 buah\r\n-Rias orang tua bapak + baju 2 buah\r\n-Rias penerima tamu 4 buah', 25000000, '500', 450000),
(14, 'paket 4', '-Buffee Resepsi 500 porsi\r\n-Gubukan 3 macam\r\n-Aneka buah\r\n-Aneka pudding\r\n-Aneka Softdrink\r\n-Air minum', 15000000, '-Pelaminan+dekorasi\r\n-Bunga+standing flower 3 buah\r\n-Gazebo pergola\r\n-Kotak Angpao 2 buah \r\n-Standing ilalang dipanggung musik dan belakang penerima tamu\r\n-Standing lamp 4 buah', 15000000, '-Foto 1 album kolase 20 halaman\r\n-Video shooting\r\n-Foto kanvas 30*20 1 buah', 7000000, '-Baju + aksesoris pengantin\r\n-Rias orang tua ibu + kain 2 buah\r\n-Rias orang tua bapak + baju 2 buah\r\n-Rias penerima tamu 4 buah', 20000000, '500', 550000),
(15, 'paket 5', '-Buffee Resepsi 900 porsi\r\n-Gubukan 4 macam\r\n-Aneka buah\r\n-Aneka pudding\r\n-Aneka Softdrink\r\n-Air minum\r\n-Aneka Juice', 19000000, '-Pelaminan+dekorasi\r\n-Bunga+standing flower 3 buah\r\n-Gazebo kayu\r\n-Kotak Angpao 4 buah \r\n-Standing ilalang dipanggung musik dan belakang penerima tamu\r\n-Standing lamp 6 buah\r\n-Dekorasi photobooth 4 spot\r\n-Pergola daun dan bunga juntai', 18000000, '-Foto 1 album kolase 22 halaman\r\n-Video shooting\r\n-Foto kanvas 40*30 1 buah', 5000000, '-Baju + aksesoris pengantin\r\n-Rias orang tua ibu + kain 2 buah\r\n-Rias orang tua bapak + baju 2 buah\r\n-Rias penerima tamu 4 buah\r\n-Rias among tamu 4 buah', 17000000, '500', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_member` varchar(20) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_acara` date NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_paket`, `id_member`, `tanggal_pesan`, `tanggal_acara`, `status_pemesanan`) VALUES
(2, 11, 'test', '2018-09-07', '2018-09-30', 'batal'),
(4, 11, 'ardy.prayogo', '2018-09-12', '2018-09-29', 'batal'),
(5, 11, 'ardy.prayogo', '2018-09-12', '2018-12-27', 'sukses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_member` (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

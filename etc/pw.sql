-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 11:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `tahun_angkatan` int(11) NOT NULL,
  `nama_angkatan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `tahun_angkatan`, `nama_angkatan`) VALUES
(14, 2014, 'Assembly'),
(15, 2015, 'Binary'),
(16, 2016, 'Cyber');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `nama` varchar(40) NOT NULL,
  `panggilan` varchar(15) NOT NULL,
  `npm` varchar(13) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` varchar(20) DEFAULT NULL,
  `hobi` varchar(30) DEFAULT NULL,
  `makananfav` varchar(25) DEFAULT NULL,
  `bendafav` varchar(25) DEFAULT NULL,
  `warnafav` varchar(25) DEFAULT NULL,
  `musikfav` varchar(25) DEFAULT NULL,
  `filmfav` varchar(25) DEFAULT NULL,
  `gamefav` varchar(25) DEFAULT NULL,
  `bukufav` varchar(25) DEFAULT NULL,
  `prestasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`nama`, `panggilan`, `npm`, `id_angkatan`, `tempatlahir`, `tanggallahir`, `hobi`, `makananfav`, `bendafav`, `warnafav`, `musikfav`, `filmfav`, `gamefav`, `bukufav`, `prestasi`) VALUES
('Diki', 'Diki', '140810140072', 14, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Fajar Adiyansyah Rahiq', 'Fajar', '140810160006', 16, 'Baso', '-', 'Basket', 'Sate', 'PC', 'Biru', 'EDM', 'Anime', 'ML', 'Ensiklopedia', 'Forum Pelajar Indonesia'),
('Afifah Kho\'eriah', 'Ifa', '140810160008', 16, 'Cirebon', '-', 'Nonton Film', 'Semua', '-', '-', '-', '-', '-', '-', 'Banyak'),
('Reynaldi Noer Rizki', 'Rey', '140810160010', 16, 'Jakarta', '3 September 1998', 'Nonton tv series', '-', '-', 'biru', '-', '-', '-', '-', '-'),
('Sachi Hongo', 'Sachi', '140810160014', 16, 'Jakarta', '31 Mei 1999', 'Jalan-jalan', 'Nasi Padang', '-', 'Merah', 'Rock', '-', '-', '-', '-'),
('Fikri Ikhsan', 'Fikri', '140810160016', 16, 'Padang', '4 Februari 1998', 'Jalan-jalan', 'Makanan Khas Minang', 'Jaket, Topi, HP', 'Biru, Abu-abu, Putih', 'Pop, K-Pop', 'Animasi, Misteri, Petuala', 'Ultimate Ninja Storm', '-', '-'),
('Hasna Karimah', 'Hasna', '140810160020', 16, 'Tangerang', '15 September 1998', 'Ngoding', 'Apa Aja', '-', 'Pink', 'Yang selow-selow (Piano)', 'Horror', 'Snake', 'Hujan di Bulan Juni', 'Banyak!'),
('Paquita Putri Ramadhani', 'Paqu', '140810160024', 16, 'Cimahi', '7 Januari 1998', 'Olahraga, Nonton Film / Drama', 'Ayam Goreng', 'Laptop', 'Biru Muda', 'Pop', 'Lucy', 'CS', 'Twilight', '-'),
('Muhammad Fahmi Irfananda', 'Fahmi', '140810160028', 16, 'Pekalongan', '10 April 1998', 'Ngoding, Baca', 'Nasi Goreng', 'Kasur', 'Abu-biru', '-', '-', '-', 'Self Driving : Rhenald Ka', '-'),
('Muhammad Faizin Ahsan', 'Faizin', '140810160032', 16, 'Bandung', '11 September 1998', 'Tidur, Ngoding, Nonton Film', 'Ayam Sambel Hejo', '-', '-', '-', 'Habibie dan Ainun 2', '-', 'Percy Jackson Books', '-'),
('Satrio Sadrakh Allesandro', 'Satrio', '140810160038', 16, 'Bandung', '16 Agustus 1997', 'PC gaming, Baca Novel', 'Nasi Goreng', 'Kacamata', 'Biru', 'Senbonzakura', 'Saving Private Ryan', 'COD MW series', 'Laskar Pelangi', '-'),
('Baby Cattleya Gustina Permatagama', 'Mbe', '140810160048', 16, 'Bandung', '18 November 1998', 'Driving', 'Ayam', 'Komputer', 'Biru', 'Pop - Rock', 'Kartun', 'GTA', 'Matematika', '-'),
('Beryl Cleary Hermanto', 'Beryl', '140810160060', 16, 'Cimahi', '26 Desember 1999', 'Main Game, Nonton Anime, Baca ', 'Masakan Ikan Tuna', 'Harddisk', 'Ungu', 'Something Just Like This ', 'Grisaia Series', '-', 'Mawar Jepang', '-'),
('Muhammad Islam Taufikurahman', 'Islam', '140810160062', 16, 'Bandung', '23 Juni 1998', 'Game Sport', 'Rendang', 'Laptop', 'Merah', 'Pop-Rock', 'Harry Potter', 'Pro Evo', 'Nightmare\'s Academy', 'Juara Harapan Qiroah TK Istiqomah Bandung'),
('Bariq Mbani', 'Bariq', '140810160064', 16, 'Cimahi', '23 Agustus 1997', 'Nongkrong Bareng Temen', 'Roti Bakar, Martabak', 'Ikat Rambut', 'Abu-abu', 'SOAD, PATD', 'Sumiati', 'DoTA', 'Modul Praktikum', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `npm` varchar(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`npm`, `nama`, `pass`) VALUES
('140810140072', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `id_angkatan` (`id_angkatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npm`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user-a` FOREIGN KEY (`npm`) REFERENCES `person` (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

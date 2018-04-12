-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2018 pada 02.39
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eaternity`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambarp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`no`, `id`, `namaproduk`, `deskripsi`, `harga`, `gambarp`) VALUES
(1, 5, 'Kalimilk cookies', '', 16000, 'P1A.jpg'),
(2, 5, 'Kalimilk Strawberry', '', 15000, 'P1B.jpg'),
(3, 5, 'Kalimilk Vanilla', '', 16000, 'P1C.jpg'),
(4, 6, 'Mie/Kwetiau/Bihun Manusiawi (1 Porsi)', '', 12000, 'P2A.jpg'),
(5, 6, 'Mie/Kwetiau/Bihun Gajah (2 porsi)', '', 18000, 'P2B.jpg'),
(6, 6, 'Mie/Kwetiau/Bihun Gorilla (3 Porsi)', '', 25000, 'P2C.jpg'),
(7, 7, 'Pizza (smoke beef, beef sausage, chiken sausage)', '', 23000, 'P3A.jpg'),
(8, 7, 'Calzone (smoke beef, chicken and beef sausage)', '', 20000, 'P3B.jpg'),
(9, 7, 'Fried Chicken', '', 14000, 'P3C.jpg'),
(10, 8, 'Nasi Lemak Komplit', '', 28000, 'P4A.jpg'),
(11, 8, 'Nasi Briyani Ayam', '', 28000, 'P4B.jpg'),
(12, 8, 'Tom Yum Ayam', '', 22000, 'P4C.jpg'),
(13, 9, 'Mie Aceh', '', 17000, 'P5A.jpg'),
(14, 9, 'Nasi Goreng Kambing', '', 24000, 'P5B.jpg'),
(15, 9, 'Nasi Rendang Ayam', '', 18000, 'P5C.jpg'),
(16, 10, 'Favorit Set', '', 48000, 'P6A.jpg'),
(17, 10, 'Premium Set', '', 59000, 'P6B.jpg'),
(18, 10, 'Premium Set Seafood', '', 58000, 'P6C.jpg'),
(19, 11, 'Scrummy Coklat', '', 55000, 'P7A.jpg'),
(20, 11, 'Scrummy Keju', '', 58000, 'P7B.jpg'),
(21, 11, 'Scrummy Taro', '', 55000, 'P7C.jpg'),
(22, 12, 'Paha Bawah Barbeque', '', 13000, 'P8A.jpg'),
(23, 12, 'Dada Barbeque', '', 17000, 'P8B.jpg'),
(24, 12, 'Paha Atas Barbeque', '', 15000, 'P8C.jpg'),
(25, 13, 'Katsu Eguro Bento', '', 24000, 'P9A.jpg'),
(26, 13, 'Fish Katsu Bento', '', 25000, 'P9B.jpg'),
(27, 13, 'Chicken Katsu Bento', '', 24000, 'P9C.jpg'),
(28, 14, 'Rice Bowl Lidah Blackpepper', '', 32000, 'P10A.jpg'),
(29, 14, 'Hainan Duck', '', 43000, 'P10B.jpg'),
(30, 14, 'Pasta Chicken', '', 32000, 'P10C.jpg'),
(31, 15, 'Nasi Gudeg Krecek Telur', '', 15000, 'P11A.jpg'),
(32, 15, 'Nasi Gudeg Krecek Ayam Telur', '', 27000, 'P11B.jpg'),
(33, 15, 'Nasi Gudeg Telur Tahu', '', 17000, 'P11C.jpg'),
(34, 16, 'Paket Big Mac', '', 45000, 'P12A.jpg'),
(35, 16, 'Paket Double Cheeseburger', '', 44000, 'P12B.jpg'),
(36, 16, 'McFlurry', '', 11000, 'P12C.jpg'),
(37, 17, 'Rice Bowl Ayam Wokubelanga', '', 17000, 'P13A.jpg'),
(38, 17, 'Rice Bowl Salted Egg with Chicken', '', 18000, 'P13B.jpg'),
(39, 17, 'Happy Mushroom', '', 13000, 'P13C.jpg'),
(40, 18, 'Martabak 8 Rasa', '', 70000, 'P14A.jpg'),
(41, 18, 'Martabak 4 Rasa', '', 55000, 'P14B.jpg'),
(42, 18, 'Martabak Reguler', '', 30000, 'P14C.jpg'),
(43, 19, 'Crispy Butter Chicken Skin', '', 25000, 'P15A.jpg'),
(44, 19, 'Spicy Salted Crispy Chicken Skin', '', 24000, 'P15B.jpg'),
(45, 19, 'Ceker Dowerrr', '', 19000, 'P15C.jpg'),
(46, 20, 'Double Dave''s Single Burger', '', 63000, 'P16A.jpg'),
(47, 20, 'Chili Cheese Fries', '', 44000, 'P16B.jpg'),
(48, 20, 'Cheese Beefanator', '', 36000, 'P16C.jpg'),
(49, 21, 'Katsu Mentai', '', 25000, 'P17A.jpg'),
(50, 21, 'Spicy Creamy Volcano Roll', '', 50000, 'P17B.jpg'),
(51, 21, 'Chicken Teriyaki Don Buri', '', 24000, 'P17C.jpg'),
(52, 22, 'Pizza Smoked Beef', '', 20000, 'P18A.jpg'),
(53, 22, 'Chicken Katsu', '', 16000, 'P18B.jpg'),
(54, 22, 'Beef Blackpepper', '', 17000, 'P18C.jpg'),
(55, 23, 'Kombo Chochicks', '', 35000, 'P19A.jpg'),
(56, 23, 'Super Besar 1 Original Chicken', '', 31000, 'P19B.jpg'),
(57, 23, 'Combo Zuper Crunch', '', 33000, 'P19C.jpg'),
(58, 24, 'Lenjer', '', 9000, 'P20A.jpg'),
(59, 24, 'Kapal Selam', '', 16000, 'P20B.jpg'),
(60, 24, 'Kulit', '', 9000, 'P20C.jpg'),
(66, 24, 'Susu Putih', '', 5000, 'file_1511854336.jpg'),
(67, 23, 'Nasi Putih', '', 3000, 'file_1511854770.png'),
(68, 22, 'Cumi Bakar', '', 45000, 'file_1511855412.jpg'),
(69, 23, 'Ayam Goreng Spesial', '', 23000, 'file_1511855561.jpg'),
(70, 22, 'air putih', '', 500, 'file_1511856213.png'),
(71, 15, 'Cumi Nikmat', 'Menggugah selera dengan cumi nikmat resep kami', 50000, 'file_1513495495.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahmakan`
--

CREATE TABLE `rumahmakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumahmakan`
--

INSERT INTO `rumahmakan` (`id`, `nama`, `alamat`, `telp`, `gambar`) VALUES
(5, 'Kalimilk Kaliurang', 'Jl. Kaliurang KM 4,9, Depok, Yogyakarta', '09:00-22:45', 'R1.jpg'),
(6, 'Mie Lampung Uno', 'Jl. Kaliurang KM 4,5 Depok, Yogyakarta', '07:00-21:30', 'R2.jpg'),
(7, 'Glen’s pizza', 'Jl. Kaliurang KM 5.6, Depok, Yogyakarta', '07:00-11:00', 'R3.jpg'),
(8, 'Rempah Asia', 'Jl. Kaliurang KM 5, Depok, Yogyakarta', '09:00-01:00', 'R4.jpg'),
(9, 'Bungong Jeumpa', 'Jl. Kaliurang KM 5 ,depok, yogyakarta', '24 hrs', 'R5.jpg'),
(10, 'Hoka-Hoka Bento ', 'Jl. Kaliurang KM 5.5, Depok, Yogyakarta', '24 hrs', 'R6.jpg'),
(11, 'Jogja Scrummy', 'Ruko Cakra, jl. Kaliurang KM 5,2 no 44, Depok, Yogyakarta', '07:00-21:30', 'R7.jpg'),
(12, 'Hatchick Fried Chicken', 'Jl. Pandega Marta 99D, Mlati, Yogyakarta', '11:00-21:00', 'R8.jpg'),
(13, 'Katsu-Katsu ', 'Jl. Kaliurang KM 6.2, no 56A, Mlati, Yogyakarta', '10:00-21:00', 'R9.jpg'),
(14, 'Dixie Easy Dinning', 'Jl. Affandi no. 40 B, Depok, Yogyakarta', '10:00-23:59', 'R10.jpg'),
(15, 'Gudeg Yu Djum', 'Jl. AM Sanagi no 93, Tegolrejo Yogyakarta', '06:00-20:00', 'R11.jpg'),
(16, 'Mc Donalds', 'Jl. Kaliurang KM 5, Depok, Yogyakarta', '24 hrs', 'R12.jpg'),
(17, 'Tlekem', 'Jl. Pandega Marta no 78, Mlati, Yogyakarta', '11:00-20:00', 'R13.jpg'),
(18, 'Martabak Pandega', 'Jl. Pandega Marta no 29, Depok, Sleman, Yogyakarta', '16:00-22:00', 'R14.jpg'),
(19, 'Bong Kopitown Express', 'Jl Sagan No.4 Gondokusuman, Yogyakarta', '10:00-23:59', 'R15.jpg'),
(20, 'Wendy’s ', 'Hartono Mall, Lower Ground, Jl. Ring Road Utara, Depok, Yogyakarta', '10:00-21:00', 'R16.jpg'),
(21, 'Ichiban Sushi', 'Hartono Mall Lower Ground, Jl. Ring Road Utara, Depok, Yogyakarta', '10:00-22:00', 'R17.jpg'),
(22, 'MK Café', 'Jl. C. Simanjuntak no 70, Gondokusuman, Yogyakarta', '09:00-22:15', 'R18.jpg'),
(23, 'Kentuky Fried Chicken', 'Jl. C. Simanjuntakno 78 A, Gondokusuman,Yogyakarta', '07:00-21:45', 'R19.jpg'),
(24, 'Pempek ny Kamto', 'Jl. Affandi no 31, Depok,Yogyakarta', '09:00-20:30', 'R20.jpg'),
(25, 'Rumah Makan Pinggir Pantai', 'Jl Parangtritis KM 10 Yogyakarta', '086753690099', 'file_1513495362.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `rumahmakan`
--
ALTER TABLE `rumahmakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

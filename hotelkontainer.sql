-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 01:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelkontainer`
--
CREATE DATABASE IF NOT EXISTS `hotelkontainer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotelkontainer`;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
  `Kodecheckout` int(6) NOT NULL,
  `Kodecin` int(6) NOT NULL,
  `Tglcheckout` datetime NOT NULL DEFAULT current_timestamp(),
  `grandtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `Kodecust` int(6) NOT NULL,
  `fk_userid` int(11) DEFAULT NULL,
  `Nama` varchar(20) NOT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `Asal` varchar(15) DEFAULT NULL,
  `Telepon` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Kodecust`, `fk_userid`, `Nama`, `NIK`, `Asal`, `Telepon`) VALUES
(9, 19, 'alexcj', '7657546546545', 'Surabaya', '034238585435'),
(13, NULL, 'michael evan', '7657546546545', 'Surabaya', '5646546');

-- --------------------------------------------------------

--
-- Table structure for table `detailfas`
--

DROP TABLE IF EXISTS `detailfas`;
CREATE TABLE `detailfas` (
  `Kodedetailfas` int(8) NOT NULL,
  `Kodeusefas` int(6) NOT NULL,
  `Kodefasilitas` varchar(6) NOT NULL,
  `Jumlah` int(3) NOT NULL,
  `Harga` int(6) NOT NULL,
  `Subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detailmenu`
--

DROP TABLE IF EXISTS `detailmenu`;
CREATE TABLE `detailmenu` (
  `Kodedetailmenu` int(11) NOT NULL,
  `Kodemenu` varchar(6) NOT NULL,
  `Jumlah` int(3) NOT NULL,
  `Harga` int(6) NOT NULL,
  `Subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailmenu`
--

INSERT INTO `detailmenu` (`Kodedetailmenu`, `Kodemenu`, `Jumlah`, `Harga`, `Subtotal`) VALUES
(11, 'M002', 1, 20000, 20000),
(12, 'M005', 1, 22000, 22000),
(13, 'M005', 1, 22000, 22000),
(14, 'M005', 1, 22000, 22000),
(15, 'M002', 1, 20000, 20000),
(16, 'M005', 1, 22000, 22000),
(17, 'M005', 1, 22000, 22000),
(18, 'M005', 1, 22000, 22000),
(19, 'M005', 1, 22000, 22000),
(20, 'M005', 1, 22000, 22000),
(21, 'M005', 1, 22000, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE `fasilitas` (
  `Kodefasilitas` varchar(4) NOT NULL,
  `Namafasilitas` varchar(20) NOT NULL,
  `Jumlah` int(3) NOT NULL,
  `Harga` int(6) NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0 = enable; 1 = disable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`Kodefasilitas`, `Namafasilitas`, `Jumlah`, `Harga`, `is_active`) VALUES
('F001', 'KASUR', 5, 50000, 0),
('F002', 'HANDUK', 10, 15000, 0),
('F003', 'SANDAL KAMAR', 10, 10000, 0),
('F004', 'SELIMUT', 10, 25000, 0),
('F005', 'SHAMPOO', 10, 5000, 0),
('F006', 'SABUN', 10, 5000, 0),
('F007', 'hanger', 13, 30000, 0),
('F008', 'sabun mandi', 30, 40000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hcheckin`
--

DROP TABLE IF EXISTS `hcheckin`;
CREATE TABLE `hcheckin` (
  `Kodecin` int(6) NOT NULL,
  `Kodecust` int(6) NOT NULL,
  `Tglcin` date NOT NULL,
  `Tipekamar` varchar(10) DEFAULT NULL,
  `Jamcin` timestamp NOT NULL DEFAULT current_timestamp(),
  `NoKamar` varchar(4) DEFAULT NULL,
  `Tglcout` date NOT NULL,
  `Status` int(1) NOT NULL,
  `Subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hcheckin`
--

INSERT INTO `hcheckin` (`Kodecin`, `Kodecust`, `Tglcin`, `Tipekamar`, `Jamcin`, `NoKamar`, `Tglcout`, `Status`, `Subtotal`) VALUES
(11, 13, '2022-06-02', 'S01', '2023-01-13 06:56:04', 'S118', '2022-06-03', 1, 110000);

-- --------------------------------------------------------

--
-- Table structure for table `jeniskamar`
--

DROP TABLE IF EXISTS `jeniskamar`;
CREATE TABLE `jeniskamar` (
  `Kodejenis` varchar(3) NOT NULL,
  `Namajenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeniskamar`
--

INSERT INTO `jeniskamar` (`Kodejenis`, `Namajenis`) VALUES
('D01', 'DELUXE'),
('S01', 'STANDARD');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

DROP TABLE IF EXISTS `kamar`;
CREATE TABLE `kamar` (
  `Nokamar` varchar(4) NOT NULL,
  `Kodejenis` varchar(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `Status` varchar(1) NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0 = enable; 1 = disable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`Nokamar`, `Kodejenis`, `harga`, `Status`, `is_active`) VALUES
('F301', 'D01', 175000, '0', 0),
('F302', 'D01', 175000, '1', 0),
('F303', 'D01', 175000, '1', 0),
('F304', 'D01', 175000, '1', 0),
('F305', 'D01', 175000, '1', 0),
('F306', 'D01', 175000, '1', 0),
('F307', 'D01', 175000, '1', 0),
('F308', 'D01', 175000, '1', 0),
('F309', 'D01', 175000, '1', 0),
('F310', 'D01', 175000, '1', 0),
('F311', 'D01', 175000, '1', 0),
('F312', 'D01', 175000, '1', 0),
('F313', 'D01', 175000, '1', 0),
('F314', 'D01', 175000, '1', 0),
('F315', 'D01', 175000, '1', 0),
('F316', 'D01', 175000, '1', 0),
('F317', 'D01', 175000, '1', 0),
('F318', 'D01', 175000, '1', 0),
('F319', 'D01', 175000, '1', 0),
('F320', 'D01', 175000, '1', 0),
('F321', 'D01', 175000, '1', 0),
('F322', 'D01', 175000, '1', 0),
('F323', 'D01', 175000, '1', 0),
('F324', 'D01', 175000, '1', 0),
('F325', 'D01', 175000, '1', 0),
('F401', 'D01', 175000, '1', 0),
('F402', 'D01', 175000, '0', 0),
('F403', 'D01', 175000, '1', 0),
('F404', 'D01', 175000, '1', 0),
('F405', 'D01', 175000, '1', 0),
('F406', 'D01', 175000, '1', 0),
('F407', 'D01', 175000, '1', 0),
('F408', 'D01', 175000, '1', 0),
('F409', 'D01', 175000, '1', 0),
('F410', 'D01', 175000, '1', 0),
('F411', 'D01', 175000, '1', 0),
('F412', 'D01', 175000, '1', 0),
('F413', 'D01', 175000, '1', 0),
('F414', 'D01', 175000, '1', 0),
('F415', 'D01', 175000, '1', 0),
('F416', 'D01', 175000, '1', 0),
('F417', 'D01', 175000, '1', 0),
('F418', 'D01', 175000, '1', 0),
('F419', 'D01', 175000, '1', 0),
('F420', 'D01', 175000, '1', 0),
('F421', 'D01', 175000, '1', 0),
('F422', 'D01', 175000, '1', 0),
('F423', 'D01', 175000, '1', 0),
('F424', 'D01', 175000, '1', 0),
('F425', 'D01', 175000, '1', 0),
('F426', 'D01', 200000, '1', 0),
('S101', 'S01', 110000, '1', 0),
('S102', 'S01', 110000, '1', 0),
('S103', 'S01', 110000, '1', 0),
('S104', 'S01', 110000, '1', 0),
('S105', 'S01', 110000, '1', 0),
('S106', 'S01', 110000, '1', 0),
('S107', 'S01', 110000, '1', 0),
('S108', 'S01', 110000, '1', 0),
('S109', 'S01', 110000, '1', 0),
('S110', 'S01', 110000, '1', 0),
('S111', 'S01', 110000, '1', 0),
('S112', 'S01', 110000, '1', 0),
('S113', 'S01', 110000, '1', 0),
('S114', 'S01', 110000, '1', 0),
('S115', 'S01', 110000, '1', 0),
('S116', 'S01', 110000, '1', 0),
('S117', 'S01', 110000, '1', 0),
('S118', 'S01', 110000, '0', 0),
('S119', 'S01', 110000, '1', 0),
('S120', 'S01', 110000, '0', 0),
('S121', 'S01', 110000, '1', 0),
('S122', 'S01', 110000, '1', 0),
('S123', 'S01', 110000, '1', 0),
('S124', 'S01', 110000, '1', 0),
('S125', 'S01', 110000, '1', 0),
('S201', 'S01', 110000, '1', 0),
('S202', 'S01', 110000, '1', 0),
('S203', 'S01', 110000, '1', 0),
('S204', 'S01', 110000, '1', 0),
('S205', 'S01', 110000, '1', 0),
('S206', 'S01', 110000, '1', 0),
('S207', 'S01', 110000, '1', 0),
('S208', 'S01', 110000, '1', 0),
('S209', 'S01', 110000, '1', 0),
('S210', 'S01', 110000, '1', 0),
('S211', 'S01', 110000, '1', 0),
('S212', 'S01', 110000, '1', 0),
('S213', 'S01', 110000, '1', 0),
('S214', 'S01', 110000, '1', 0),
('S215', 'S01', 110000, '1', 0),
('S216', 'S01', 110000, '1', 0),
('S217', 'S01', 110000, '1', 0),
('S218', 'S01', 110000, '1', 0),
('S219', 'S01', 110000, '1', 0),
('S220', 'S01', 110000, '1', 0),
('S221', 'S01', 110000, '1', 0),
('S222', 'S01', 110000, '1', 0),
('S223', 'S01', 110000, '1', 0),
('S224', 'S01', 110000, '1', 0),
('S225', 'S01', 110000, '1', 0),
('S226', 'S01', 110000, '1', 0),
('S227', 'S01', 300000, '0', 0),
('S228', 'S01', 110000, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategorimenu`
--

DROP TABLE IF EXISTS `kategorimenu`;
CREATE TABLE `kategorimenu` (
  `Kodekategorimenu` varchar(6) NOT NULL,
  `kategorimenu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorimenu`
--

INSERT INTO `kategorimenu` (`Kodekategorimenu`, `kategorimenu`) VALUES
('KM001', 'appetizer'),
('KM002', 'main course'),
('KM003', 'dessert'),
('KM004', 'beverages');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `Kodemenu` varchar(6) NOT NULL,
  `Kodekategorimenu` varchar(6) NOT NULL,
  `Harga` int(6) NOT NULL,
  `Namamenu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Kodemenu`, `Kodekategorimenu`, `Harga`, `Namamenu`) VALUES
('M001', 'KM001', 20000, 'telur mata sapi'),
('M002', 'KM001', 20000, 'omelet'),
('M003', 'KM001', 35000, 'mushroom cream soup'),
('M004', 'KM001', 23000, 'roti bakar'),
('M005', 'KM001', 22000, 'bubur ayam'),
('M006', 'KM002', 25000, 'pecel'),
('M007', 'KM002', 30000, 'soto'),
('M008', 'KM002', 32000, 'rawon'),
('M009', 'KM002', 60000, 'sop Iga'),
('M010', 'KM002', 25000, 'tahu tek'),
('M011', 'KM002', 40000, 'rendang'),
('M012', 'KM002', 22000, 'krengsengan'),
('M013', 'KM002', 20000, 'omelet'),
('M014', 'KM002', 20000, 'rujak'),
('M015', 'KM002', 22000, 'gado gado'),
('M016', 'KM002', 35000, 'nasi goreng'),
('M017', 'KM002', 110000, 'steak'),
('M018', 'KM002', 55000, 'smoked beef'),
('M019', 'KM002', 45000, 'roast chicken brest'),
('M020', 'KM002', 38000, 'spaghetti carbonara'),
('M021', 'KM002', 44000, 'beef burger'),
('M022', 'KM002', 35000, 'mie goreng'),
('M023', 'KM002', 76000, 'roasted duck'),
('M024', 'KM002', 33000, 'ayam penyet'),
('M025', 'KM002', 27590, 'pangsit mie ayam'),
('M026', 'KM002', 42000, 'tomyam'),
('M027', 'KM002', 90000, 'ikan kerapu bakar'),
('M028', 'KM002', 58000, 'gurami asam manis'),
('M029', 'KM002', 30000, 'capjay'),
('M030', 'KM002', 35000, 'kare ayam'),
('M031', 'KM003', 28000, 'pudding'),
('M032', 'KM003', 45000, 'es krim'),
('M033', 'KM003', 37000, 'salad'),
('M034', 'KM004', 15000, 'es teh manis'),
('M035', 'KM004', 15000, 'teh manis hangat'),
('M036', 'KM004', 15000, 'teh tawar hangat'),
('M037', 'KM004', 15000, 'es teh tawar'),
('M038', 'KM004', 27000, 'milkshake stroberi'),
('M039', 'KM004', 24000, 'cookies n cream'),
('M040', 'KM004', 28000, 'es kopi susu regal'),
('M041', 'KM004', 23000, 'es cappucino'),
('M042', 'KM004', 20000, 'espresso'),
('M043', 'KM004', 22000, 'green tea'),
('M044', 'KM004', 22000, 'milk tea'),
('M045', 'KM004', 25000, 'cheese tea'),
('M046', 'KM004', 22000, 'ice lemon tea'),
('M047', 'KM004', 24000, 'taro milk tea'),
('M048', 'KM004', 24000, 'hot chocolate marsmallow'),
('M049', 'KM004', 22000, 'es kopi susu gula aren'),
('M050', 'KM004', 10000, 'air putih');

-- --------------------------------------------------------

--
-- Table structure for table `transaksimenu`
--

DROP TABLE IF EXISTS `transaksimenu`;
CREATE TABLE `transaksimenu` (
  `Kodetransmenu` int(6) NOT NULL,
  `Kodedetailmenu` int(8) NOT NULL,
  `Tgltransmenu` date NOT NULL,
  `grandtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usefas`
--

DROP TABLE IF EXISTS `usefas`;
CREATE TABLE `usefas` (
  `Kodeusefas` int(6) NOT NULL,
  `Kodecust` int(6) NOT NULL,
  `Subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usemenu`
--

DROP TABLE IF EXISTS `usemenu`;
CREATE TABLE `usemenu` (
  `Kodeusemenu` int(6) NOT NULL,
  `Kodecust` int(6) NOT NULL,
  `Subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0 = ban, 1 = unban'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `password`, `nama`, `role`, `is_active`) VALUES
(1, 'benauguere@gmail.com', 'abc123', 'BEN AUGUERE', 'admin', 1),
(2, 'alexjibran@gmail.com', 'abc123', 'ALEXANDER JIBRAN', 'resepsionis', 1),
(3, 'bagasta@gmail.com', 'abc123', 'YOHANES BAGASTA', 'resepsionis', 1),
(4, 'budiesta@gmail.com', 'abc123', 'AGUSTAN BUDIESTA', 'resepsionis', 1),
(5, 'michaelevan@gmail.com', 'abc123', 'MICHAEL EVAN', 'resto', 1),
(6, 'brian@gmail.com', 'abc123', 'RICH BRIAN', 'resto', 1),
(8, 'evanmich23@gmail.com', 'abc123', 'evanmichg', 'resepsionis', 1),
(19, 'jibran@gmail.com', 'abc123', 'alexcj', 'customer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE `voucher` (
  `kode` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `potongan` int(6) NOT NULL,
  `tglAwal` date NOT NULL,
  `tglAkhir` date NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 = finished, 1 = ongoing',
  `kuota` int(11) NOT NULL,
  `is_active` int(1) NOT NULL COMMENT '0 = enable; 1 = disable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`kode`, `nama`, `potongan`, `tglAwal`, `tglAkhir`, `status`, `kuota`, `is_active`) VALUES
('V001', 'black friday', 100000, '2022-05-19', '2022-05-27', 1, 50, 0),
('V002', 'easter egg', 75000, '2022-05-23', '2022-05-28', 1, 24, 0),
('V003', 'sharppoint', 33000, '2022-06-01', '2022-07-08', 1, 15, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`Kodecheckout`),
  ADD KEY `Kodecin` (`Kodecin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Kodecust`),
  ADD KEY `fk_userid` (`fk_userid`);

--
-- Indexes for table `detailfas`
--
ALTER TABLE `detailfas`
  ADD PRIMARY KEY (`Kodedetailfas`),
  ADD KEY `Kodeusefas` (`Kodeusefas`),
  ADD KEY `Kodefasilitas` (`Kodefasilitas`);

--
-- Indexes for table `detailmenu`
--
ALTER TABLE `detailmenu`
  ADD PRIMARY KEY (`Kodedetailmenu`),
  ADD KEY `Kodemenu` (`Kodemenu`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`Kodefasilitas`);

--
-- Indexes for table `hcheckin`
--
ALTER TABLE `hcheckin`
  ADD PRIMARY KEY (`Kodecin`),
  ADD KEY `Kodecust` (`Kodecust`);

--
-- Indexes for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
  ADD PRIMARY KEY (`Kodejenis`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`Nokamar`),
  ADD KEY `Kodejenis` (`Kodejenis`);

--
-- Indexes for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  ADD PRIMARY KEY (`Kodekategorimenu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Kodemenu`),
  ADD KEY `Kodekategorimenu` (`Kodekategorimenu`);

--
-- Indexes for table `transaksimenu`
--
ALTER TABLE `transaksimenu`
  ADD PRIMARY KEY (`Kodetransmenu`),
  ADD KEY `Kodedetailmenu` (`Kodedetailmenu`);

--
-- Indexes for table `usefas`
--
ALTER TABLE `usefas`
  ADD PRIMARY KEY (`Kodeusefas`),
  ADD KEY `Kodecust` (`Kodecust`);

--
-- Indexes for table `usemenu`
--
ALTER TABLE `usemenu`
  ADD PRIMARY KEY (`Kodeusemenu`),
  ADD KEY `Kodecust` (`Kodecust`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `Kodecheckout` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Kodecust` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detailfas`
--
ALTER TABLE `detailfas`
  MODIFY `Kodedetailfas` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailmenu`
--
ALTER TABLE `detailmenu`
  MODIFY `Kodedetailmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `hcheckin`
--
ALTER TABLE `hcheckin`
  MODIFY `Kodecin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksimenu`
--
ALTER TABLE `transaksimenu`
  MODIFY `Kodetransmenu` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usefas`
--
ALTER TABLE `usefas`
  MODIFY `Kodeusefas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usemenu`
--
ALTER TABLE `usemenu`
  MODIFY `Kodeusemenu` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`Kodecin`) REFERENCES `hcheckin` (`Kodecin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`fk_userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailfas`
--
ALTER TABLE `detailfas`
  ADD CONSTRAINT `detailfas_ibfk_1` FOREIGN KEY (`Kodeusefas`) REFERENCES `usefas` (`Kodeusefas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailfas_ibfk_2` FOREIGN KEY (`Kodefasilitas`) REFERENCES `fasilitas` (`Kodefasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailmenu`
--
ALTER TABLE `detailmenu`
  ADD CONSTRAINT `detailmenu_ibfk_2` FOREIGN KEY (`Kodemenu`) REFERENCES `menu` (`Kodemenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hcheckin`
--
ALTER TABLE `hcheckin`
  ADD CONSTRAINT `hcheckin_ibfk_1` FOREIGN KEY (`Kodecust`) REFERENCES `customer` (`Kodecust`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`Kodejenis`) REFERENCES `jeniskamar` (`Kodejenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`Kodekategorimenu`) REFERENCES `kategorimenu` (`Kodekategorimenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksimenu`
--
ALTER TABLE `transaksimenu`
  ADD CONSTRAINT `transaksimenu_ibfk_1` FOREIGN KEY (`Kodedetailmenu`) REFERENCES `detailmenu` (`Kodedetailmenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usefas`
--
ALTER TABLE `usefas`
  ADD CONSTRAINT `usefas_ibfk_1` FOREIGN KEY (`Kodecust`) REFERENCES `customer` (`Kodecust`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usemenu`
--
ALTER TABLE `usemenu`
  ADD CONSTRAINT `usemenu_ibfk_1` FOREIGN KEY (`Kodecust`) REFERENCES `customer` (`Kodecust`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

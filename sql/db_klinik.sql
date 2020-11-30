-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 10:40 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nodokter` int(11) NOT NULL,
  `namadokter` text DEFAULT NULL,
  `jk` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` text DEFAULT NULL,
  `telp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `spesialis` text DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nodokter`, `namadokter`, `jk`, `tgl_lahir`, `email`, `telp`, `alamat`, `spesialis`, `tarif`) VALUES
(200, 'SUGIHARTO', 'L', '1970-10-20', 'sugiharto@gmail.com', '082234501987', 'BEKASI', 'GIGI', 200000),
(201, 'SUHARTINI', 'P', '1971-10-20', 'suhartini@gmail.com', '082234501980', 'BEKASI', 'KULIT', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nopasien` int(11) NOT NULL,
  `namapasien` text DEFAULT NULL,
  `jk` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` text DEFAULT NULL,
  `telp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nopasien`, `namapasien`, `jk`, `tgl_lahir`, `agama`, `telp`, `alamat`) VALUES
(1, 'Disebud', 'L', '1998-02-10', 'Islam', '082218231488', 'Pekanbaru'),
(2, 'Niyuna', 'P', '2000-10-28', 'Islam', '083830082299', 'Lampung'),
(300, 'Diya', 'L', '2020-10-20', 'ISLAM', '082218231488', 'Pekanbaru');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `norekam` int(11) NOT NULL,
  `tgl_rekam` date DEFAULT NULL,
  `nopasien` int(11) DEFAULT NULL,
  `nodokter` int(11) DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `diagnosa` text DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`norekam`, `tgl_rekam`, `nopasien`, `nodokter`, `keluhan`, `diagnosa`, `biaya`) VALUES
(1000, '2020-11-20', 1, 200, 'MCU', 'TEST', 200000),
(1001, '2020-11-21', 2, 201, 'DONOR', 'DARAH', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nodokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nopasien`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`norekam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

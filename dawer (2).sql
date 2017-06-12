-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 03:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dawer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `telpon` int(14) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `telpon`, `password`) VALUES
('1', 'yuan', 'surbaya', 89009, '2a42613437652b16f9f978848f2dbc31');

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_agen` varchar(10) NOT NULL,
  `nma_agen` varchar(20) NOT NULL,
  `alamat_agen` varchar(40) NOT NULL,
  `telp_agen` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id_agen`, `nma_agen`, `alamat_agen`, `telp_agen`) VALUES
('1', 'maju jaya', 'surabya', 12);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nm_barang` varchar(30) DEFAULT NULL,
  `hrg_barang` int(9) DEFAULT NULL,
  `stok_brg` int(9) DEFAULT NULL,
  `id_supp` varchar(10) DEFAULT NULL,
  `waktu_masuk` date DEFAULT NULL,
  `waktu_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nm_barang`, `hrg_barang`, `stok_brg`, `id_supp`, `waktu_masuk`, `waktu_keluar`) VALUES
('3', 'bantal', 10000, 100, '1', '2017-06-15', '2017-06-22'),
('93729', 'tong', 12000, 321, '1', '2017-06-02', '2017-06-16'),
('B01', 'hvs 70g', 25000, 500, '1', '2017-05-24', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengirim`
--

CREATE TABLE `detail_pengirim` (
  `id` varchar(10) DEFAULT NULL,
  `id_barang` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pengirim`
--

INSERT INTO `detail_pengirim` (`id`, `id_barang`) VALUES
('ss4', 'B01'),
('14', '3');

-- --------------------------------------------------------

--
-- Table structure for table `detail_terima`
--

CREATE TABLE `detail_terima` (
  `id_terima` varchar(10) DEFAULT NULL,
  `id_barang` varchar(10) DEFAULT NULL,
  `jumlah` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_terima`
--

INSERT INTO `detail_terima` (`id_terima`, `id_barang`, `jumlah`) VALUES
('ss1', '3', '15');

-- --------------------------------------------------------

--
-- Table structure for table `pengirim`
--

CREATE TABLE `pengirim` (
  `id_pengirim` varchar(10) NOT NULL,
  `id_sopir` varchar(10) DEFAULT NULL,
  `id_agen` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengirim`
--

INSERT INTO `pengirim` (`id_pengirim`, `id_sopir`, `id_agen`) VALUES
('14', '12345', '1'),
('ss4', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `id_sopir` varchar(10) NOT NULL,
  `nma_sopir` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `telpon` char(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id_sopir`, `nma_sopir`, `alamat`, `tgl_lahir`, `telpon`) VALUES
('1', 'hosen', 'madura', '2017-06-06', '12345'),
('12345', 'yuan', 'surabaya', '2017-06-08', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supp` varchar(10) NOT NULL,
  `nm_supp` varchar(10) DEFAULT NULL,
  `alamat_supp` varchar(10) DEFAULT NULL,
  `telp_supp` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supp`, `nm_supp`, `alamat_supp`, `telp_supp`) VALUES
('003', 'hosen', 'jalan ngin', 2147483644),
('1', 'indah', 'tangerang', 890798798);

-- --------------------------------------------------------

--
-- Table structure for table `terima`
--

CREATE TABLE `terima` (
  `id_terima` varchar(10) NOT NULL,
  `id_supp` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terima`
--

INSERT INTO `terima` (`id_terima`, `id_supp`) VALUES
('ss1', '003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_agen`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pengirim`
--
ALTER TABLE `pengirim`
  ADD PRIMARY KEY (`id_pengirim`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`id_sopir`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supp`);

--
-- Indexes for table `terima`
--
ALTER TABLE `terima`
  ADD PRIMARY KEY (`id_terima`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

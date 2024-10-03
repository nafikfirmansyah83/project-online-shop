-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 06:16 AM
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
-- Database: `project-uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(32) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `lokasi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_barang`, `nama_barang`, `harga`, `lokasi`) VALUES
('TR125006', 'Tas Ransel', 'Rp 135.000', 'tas-ransel'),
('TC010806', 'Tas Carrier', 'Rp 259.000', 'tas-carrier'),
('MG011506', 'Matras Gulung', 'Rp 25.000', 'matras-gulung'),
('SB012106', 'Sleeping bag', 'Rp 79.000', 'sleeping-bag'),
('KP012506', 'Kompor Portable', 'Rp 90.000', 'kompor-portable'),
('CS012906', 'Cooking Set', 'Rp 195.000', 'cooking-set'),
('TC013206', 'Tenda Camping', 'Rp 194.550', 'tenda-camping'),
('GP013706', 'Gas Portable', 'Rp 14.500', 'gas-portable');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

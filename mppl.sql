-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 12:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL DEFAULT 'admin',
  `Password` varchar(20) NOT NULL DEFAULT '123456',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE IF NOT EXISTS `cabang` (
  `kode_cabang` varchar(20) NOT NULL,
  `kota` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_customer` text NOT NULL,
  `email_customer` varchar(20) NOT NULL,
  `notelp_customer` varchar(20) NOT NULL,
  `alamat_customer` varchar(50) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `ID_Feedback` varchar(20) NOT NULL,
  `Pesan` varchar(400) NOT NULL,
  PRIMARY KEY (`ID_Feedback`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID_Menu` varchar(20) NOT NULL,
  `Nama_Menu` varchar(20) NOT NULL,
  `Harga` varchar(10) NOT NULL,
  `foto` blob NOT NULL,
  PRIMARY KEY (`ID_Menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

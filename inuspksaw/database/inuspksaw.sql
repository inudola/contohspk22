-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2014 at 02:27 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inuspksaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ipk` float NOT NULL,
  `penghasilan` float NOT NULL,
  `tanggungan` float NOT NULL,
  `semester` float NOT NULL,
  `prestasi` float NOT NULL,
  `prestasinon` float NOT NULL,
  `hasil_akhir` float NOT NULL,
  `status` enum('Dapat_Beasiswa','Tidak_Dapat') NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`nim`, `nama`, `ipk`, `penghasilan`, `tanggungan`, `semester`, `prestasi`, `prestasinon`, `hasil_akhir`, `status`) VALUES
(0, '', 0, 0, 0, 0, 0, 0, 0, 'Dapat_Beasiswa'),
(798, '24f', 79, 87, 98, 798, 79, 8798, 0, 'Dapat_Beasiswa'),
(4005, 'dola', 80, 80, 80, 80, 80, 80, 0, 'Dapat_Beasiswa'),
(12313, 'jagoan', 4, 200000, 5, 4, 80, 80, 0, 'Dapat_Beasiswa'),
(76876, 'bastard', 87, 7, 7, 7, 7, 7, 0, 'Dapat_Beasiswa'),
(204141, 'wisnut', 4, 4, 4, 4, 4, 4, 0, 'Dapat_Beasiswa'),
(213124, 'wisnuuuuu', 3, 3242340, 4, 4, 4, 4, 0, 'Dapat_Beasiswa'),
(786876, 'babadol', 876, 7, 76, 76, 76, 76, 0, 'Dapat_Beasiswa'),
(878787, 'maiypppp', 87, 8, 78, 78, 77, 78, 0, 'Dapat_Beasiswa'),
(20414141, 'bana', 4, 50000, 4, 5, 80, 80, 0, 'Dapat_Beasiswa'),
(23012301, 'dodol', 1, 5000000, 2, 5, 50, 50, 0, 'Dapat_Beasiswa'),
(23333332, 'inu', 3, 400000, 4, 6, 80, 80, 0, 'Dapat_Beasiswa'),
(123012103, 'dia dapat', 3, 200000, 3, 5, 90, 90, 0, 'Dapat_Beasiswa'),
(201114155, 'mauwo', 4, 4, 4, 4, 4, 4, 0, 'Dapat_Beasiswa'),
(201141557, 'ini coba margin', 4, 4, 4, 4, 4, 4, 0, 'Dapat_Beasiswa'),
(2000141225, 'inu test baris', 3, 300000, 3, 3, 80, 80, 0, 'Dapat_Beasiswa'),
(2011141557, 'Muhammad wisnu', 3, 200000, 4, 4, 80, 80, 0, 'Dapat_Beasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `bipk` int(11) NOT NULL,
  `bpenghasilan` int(11) NOT NULL,
  `btanggungan` int(11) NOT NULL,
  `bsemester` int(11) NOT NULL,
  `bprestasi` int(11) NOT NULL,
  `bprestasinon` int(11) NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `bipk`, `bpenghasilan`, `btanggungan`, `bsemester`, `bprestasi`, `bprestasinon`) VALUES
(19, 25, 5, 10, 10, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE IF NOT EXISTS `normalisasi` (
  `nim1` int(11) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `ipk1` float NOT NULL,
  `penghasilan1` float NOT NULL,
  `tanggungan1` float NOT NULL,
  `semester1` float NOT NULL,
  `prestasi1` float NOT NULL,
  `prestasinon1` float NOT NULL,
  `hasil_akhir` float NOT NULL,
  `status` enum('Dapat_Beasiswa','Tidak_Dapat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `id_session`) VALUES
('inu', '55f4972812fcc92a5715385e7564daea', 'Administrator', 'inu@engineer.com', '08567570750', 'admin', 'N', 'h4oluccjflgegdccp3a70hlq77');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

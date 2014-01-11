-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2014 at 06:25 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--  
-- Database: `arkennet_info_bandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto_menu`
--

CREATE TABLE IF NOT EXISTS `foto_menu` (
  `id` int(10) unsigned NOT NULL,
  `id_menu` int(10) unsigned DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_tempat`
--

CREATE TABLE IF NOT EXISTS `foto_tempat` (
  `id` int(10) unsigned NOT NULL,
  `id_tempat` int(10) unsigned DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tempat` (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak_patner`
--

CREATE TABLE IF NOT EXISTS `kontak_patner` (
  `id` int(10) unsigned NOT NULL,
  `id_patner` int(10) unsigned DEFAULT NULL,
  `no_tlpn` varchar(50) DEFAULT NULL,
  `operator` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_patner` (`id_patner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL,
  `id_tempat` int(10) unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tempat` (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_taxonomi`
--

CREATE TABLE IF NOT EXISTS `menu_taxonomi` (
  `id_menu` int(10) unsigned NOT NULL,
  `id_taxonomi` int(10) unsigned NOT NULL,
  `review` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_menu`,`id_taxonomi`),
  KEY `rkey` (`id_menu`),
  KEY `id_taxonomi` (`id_taxonomi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oprsional`
--

CREATE TABLE IF NOT EXISTS `oprsional` (
  `id` int(10) unsigned NOT NULL,
  `id_tempat` int(10) unsigned DEFAULT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jum''at','Sabtu','Minggu') DEFAULT NULL,
  `buka` time DEFAULT NULL,
  `tutup` time DEFAULT NULL,
  `istirahat` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tempat` (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patner`
--

CREATE TABLE IF NOT EXISTS `patner` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id_user` int(10) unsigned NOT NULL,
  `id_tempat` int(10) unsigned NOT NULL,
  `review` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_user`,`id_tempat`),
  KEY `rkey` (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taxonomi`
--

CREATE TABLE IF NOT EXISTS `taxonomi` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `alamat` varchar(255) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_patner`
--

CREATE TABLE IF NOT EXISTS `tempat_patner` (
  `id_patner` int(10) unsigned NOT NULL,
  `id_tempat` int(10) unsigned NOT NULL,
  `review` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_patner`,`id_tempat`),
  KEY `rkey` (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_taxonomi`
--

CREATE TABLE IF NOT EXISTS `tempat_taxonomi` (
  `id_tempat` int(10) unsigned NOT NULL,
  `id_taxonomi` int(10) unsigned NOT NULL,
  `review` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_taxonomi`,`id_tempat`),
  KEY `rkey` (`id_tempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto_menu`
--
ALTER TABLE `foto_menu`
  ADD CONSTRAINT `foto_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto_tempat`
--
ALTER TABLE `foto_tempat`
  ADD CONSTRAINT `foto_tempat_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontak_patner`
--
ALTER TABLE `kontak_patner`
  ADD CONSTRAINT `kontak_patner_ibfk_1` FOREIGN KEY (`id_patner`) REFERENCES `patner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_taxonomi`
--
ALTER TABLE `menu_taxonomi`
  ADD CONSTRAINT `menu_taxonomi_ibfk_1` FOREIGN KEY (`id_taxonomi`) REFERENCES `taxonomi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_taxonomi_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `oprsional`
--
ALTER TABLE `oprsional`
  ADD CONSTRAINT `oprsional_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tempat_patner`
--
ALTER TABLE `tempat_patner`
  ADD CONSTRAINT `tempat_patner_ibfk_1` FOREIGN KEY (`id_patner`) REFERENCES `patner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tempat_patner_ibfk_2` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tempat_taxonomi`
--
ALTER TABLE `tempat_taxonomi`
  ADD CONSTRAINT `tempat_taxonomi_ibfk_1` FOREIGN KEY (`id_taxonomi`) REFERENCES `taxonomi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tempat_taxonomi_ibfk_2` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

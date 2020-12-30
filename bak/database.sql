-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table smartxl.tbl_attributes
CREATE TABLE IF NOT EXISTS `tbl_attributes` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Code` varchar(255),
  `Name` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Validation` varchar(255) DEFAULT NULL,
  `isRequired` tinyint(1) DEFAULT NULL,
  `isUnique` tinyint(1) DEFAULT NULL,
  `isFilterable` tinyint(1) DEFAULT NULL,
  `isConfigurable` tinyint(1) DEFAULT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `Code` (`Code`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table smartxl.tbl_attributes: 2 rows
/*!40000 ALTER TABLE `tbl_attributes` DISABLE KEYS */;
INSERT INTO `tbl_attributes` (`uid`, `Code`, `Name`, `Type`, `Validation`, `isRequired`, `isUnique`, `isFilterable`, `isConfigurable`, `Created_at`, `Updated_at`) VALUES
	(12, 'clr', 'Color', 'select', '', 0, 0, 0, 0, '2020-12-17 19:09:29', '2020-12-17 19:09:29'),
	(14, 'sze', 'Size', 'select', '', 0, 0, 0, 0, '2020-12-18 14:15:46', '2020-12-18 14:35:42');
/*!40000 ALTER TABLE `tbl_attributes` ENABLE KEYS */;

-- Dumping structure for table smartxl.tbl_attribute_opt
CREATE TABLE IF NOT EXISTS `tbl_attribute_opt` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Attr_id` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(50) DEFAULT NULL,
  `Slug` varchar(50) DEFAULT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table smartxl.tbl_attribute_opt: 0 rows
/*!40000 ALTER TABLE `tbl_attribute_opt` DISABLE KEYS */;
INSERT INTO `tbl_attribute_opt` (`uid`, `Attr_id`, `Name`, `Slug`, `Created_at`, `Updated_at`) VALUES
	(12, 12, 'Red', 'red', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(13, 12, 'Blue', 'blue', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(14, 14, 'Xtra Large', 'large', '0000-00-00 00:00:00', '2020-12-18 18:45:44'),
	(15, 14, 'Medium', 'small', '2020-12-18 18:33:06', '2020-12-18 18:49:03');
/*!40000 ALTER TABLE `tbl_attribute_opt` ENABLE KEYS */;

-- Dumping structure for table smartxl.tbl_categories
CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Slug` varchar(50) DEFAULT NULL,
  `Parent_id` int(11) DEFAULT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table smartxl.tbl_categories: 4 rows
/*!40000 ALTER TABLE `tbl_categories` DISABLE KEYS */;
INSERT INTO `tbl_categories` (`uid`, `Name`, `Slug`, `Parent_id`, `Created_at`, `Updated_at`) VALUES
	(1, 'Pakaian Pria Asli', 'pakaian-pria', NULL, '0000-00-00 00:00:00', '2020-12-17 15:16:59'),
	(2, 'Pakaian Wanita', 'pakaian-wanita', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 'Jam tangan Pria', NULL, NULL, '2020-12-17 14:50:24', '2020-12-17 15:51:10'),
	(11, 'Jam tangan wanita', NULL, NULL, '2020-12-17 15:51:01', '2020-12-17 15:51:01');
/*!40000 ALTER TABLE `tbl_categories` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

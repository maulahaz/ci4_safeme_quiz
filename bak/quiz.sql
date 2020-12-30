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


-- Dumping database structure for xlpe
CREATE DATABASE IF NOT EXISTS `xlpe` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `xlpe`;

-- Dumping structure for table xlpe.tbl_quiz_quest
CREATE TABLE IF NOT EXISTS `tbl_quiz_quest` (
  `Quest_id` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Quiz_level` int(11) NOT NULL DEFAULT '2',
  `Exam_id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Quest_title` varchar(255) NOT NULL,
  `The_answer` varchar(255) NOT NULL,
  `Answer_opt` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `Created_at` datetime DEFAULT NULL,
  `Updated_by` varchar(50) DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`Quest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table xlpe.tbl_quiz_quest: ~17 rows (approximately)
DELETE FROM `tbl_quiz_quest`;
/*!40000 ALTER TABLE `tbl_quiz_quest` DISABLE KEYS */;
INSERT INTO `tbl_quiz_quest` (`Quest_id`, `Category`, `Quiz_level`, `Exam_id`, `Type`, `Quest_title`, `The_answer`, `Answer_opt`, `isActive`, `Created_at`, `Updated_by`, `Updated_at`) VALUES
	(1, 'Area-2', 2, 1, 'Multioption', 'Test Question No.1', 'Explanation Answer of Question no.1', 3, 1, NULL, NULL, NULL),
	(2, 'Area-2', 2, 1, 'Multianswer', 'Test Question No.2', 'Explanation Answer of Question no.2', 2, 1, NULL, NULL, NULL),
	(3, 'Area-9', 2, 2, 'Multioption', 'Test Question No.3', 'Explanation Answer of Question no.3', 4, 1, NULL, NULL, NULL),
	(4, 'Area-9', 2, 2, 'Truefalse', 'Is it True or False', 'Yes it is a TRUE answer', 1, 1, NULL, NULL, NULL),
	(5, 'Area-1', 2, 1, 'Multioption', 'What kind of water that use in Eye Wash & Safety Shower Station?', 'Potable water is used for all safety shower/eye-wash stations throughout the facility.', 3, 1, NULL, NULL, NULL),
	(6, 'Area-1', 2, 1, 'Multioption', 'Each utility station mostly is equipped with this thing except...', 'Each utility station mostly is equipped Utility Air, LP Demin Water, HP Demin Water and Central Vacuum', 3, 1, NULL, NULL, NULL),
	(7, 'Area-1', 2, 1, 'Multioption', 'The Vacuum system will automatically shut-down if more than ..... outlets are being used simultaneously.', 'The Vacuum system will automatically shut-down if more than 2 outlets are being used simultaneously.', 0, 1, NULL, NULL, NULL),
	(8, 'Area-1', 2, 1, 'Multioption', 'Where Service Water is utilized in XLPE Plant ?', 'Necessary to allow the molten polymer to harden when it comes in contact with the service water', 4, 1, NULL, NULL, NULL),
	(9, 'Area-1', 2, 1, 'Multioption', 'Where Nitrogen is utilized in XLPE Plant ?', 'Nitrogen is utilized in the following areas: *)Additive feeders; *)Resin and Copolymer feeders; *)Extruder hopper; *)Extruder service station', 0, 1, NULL, NULL, NULL),
	(10, 'Area-1', 2, 1, 'Multioption', 'What is the different between Plant Air and Instrument Air ?', 'Instrument air is provided from the distribution point to the XLPE plant; instrument air is filtered at the plant distribution header with a 10µm filter element. Unlike plant air, that is not filtered; instrument air should be used wherever the possibilit', 3, 1, NULL, NULL, NULL),
	(11, 'Area-1', 2, 1, 'Multioption', 'What is the pressure of Low Pressure Steam', 'Pressure of Low Pressure Steam is around 4 Bg, mostly 4.1-4.3 Bg', 2, 1, NULL, NULL, NULL),
	(12, 'Area-1', 2, 1, 'Multioption', 'What is the temperature of Low Pressure Steam', 'Temperature of Low Pressure Steam is around 155 degC', 1, 1, NULL, NULL, NULL),
	(13, 'Area-1', 2, 1, 'Multioption', 'What is the first equipment that receive LP-Steam from ISBL', 'LP-Steam from ISBL goes to NF-010 to separate/filterate Steam from it is impurities', 0, 1, NULL, NULL, NULL),
	(14, 'Area-1', 2, 1, 'Multioption', 'What is operating temperature for Hot Water Washing of Silo\'s', 'To do Hot Water Washing of Silo\'s the recommended temperature is 60°C', 3, 1, NULL, NULL, NULL),
	(15, 'Area-1', 2, 1, 'Multioption', 'Why do we need Purge Air in the Tank?', 'Purge air system provides slightly positive pressure to the tanks. Particle ingress which would contribute to contamination can be prevented.', 1, 1, NULL, NULL, NULL),
	(16, 'Area-1', 2, 1, 'Multioption', 'It\'s system is to provide Hot Water for maintaining temperature in Peroxide Unit', 'Jacket Hot Water System is to provide Hot Water for maintaining temperature in Peroxide Unit', 0, 1, NULL, NULL, NULL),
	(17, 'DCS', 2, 0, 'Multioption', 'Q DCS1', 'Ex DC1', 4, 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `tbl_quiz_quest` ENABLE KEYS */;

-- Dumping structure for table xlpe.tbl_quiz_quest_opt
CREATE TABLE IF NOT EXISTS `tbl_quiz_quest_opt` (
  `Opt_id` int(11) NOT NULL AUTO_INCREMENT,
  `Quest_id` int(11) NOT NULL,
  `Opt_num` int(11) NOT NULL,
  `Opt_title` varchar(255) NOT NULL,
  `isCorrect` tinyint(4) NOT NULL,
  PRIMARY KEY (`Opt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

-- Dumping data for table xlpe.tbl_quiz_quest_opt: ~66 rows (approximately)
DELETE FROM `tbl_quiz_quest_opt`;
/*!40000 ALTER TABLE `tbl_quiz_quest_opt` DISABLE KEYS */;
INSERT INTO `tbl_quiz_quest_opt` (`Opt_id`, `Quest_id`, `Opt_num`, `Opt_title`, `isCorrect`) VALUES
	(1, 3, 1, 'Soal-3 Option Answer-1', 0),
	(2, 3, 2, 'Soal-3 Option Answer-2', 0),
	(3, 3, 3, 'Soal-3 Option Answer-3', 1),
	(4, 3, 4, 'Soal-3 Option Answer-4', 0),
	(5, 1, 1, 'Option Answer-1', 1),
	(6, 1, 2, 'Option Answer-2', 0),
	(7, 1, 3, 'Option Answer-3', 0),
	(8, 1, 4, 'Option Answer-4', 0),
	(9, 2, 1, 'Soal-2 Option Answer-1', 0),
	(10, 2, 2, 'Soal-2 Option Answer-2', 1),
	(11, 2, 3, 'Soal-2 Option Answer-3', 1),
	(12, 2, 4, 'Soal-2 Option Answer-4', 0),
	(13, 4, 1, 'True', 1),
	(14, 4, 2, 'False', 0),
	(15, 5, 1, 'Demineralized Water', 0),
	(16, 5, 2, 'Chilled Water', 0),
	(17, 5, 3, 'Cooling Water', 0),
	(18, 5, 4, 'Potable Water', 1),
	(19, 6, 1, 'Nitrogen', 1),
	(20, 6, 2, 'Utility Air', 0),
	(21, 6, 3, 'LP Demin Water', 0),
	(22, 6, 4, 'Central Vacuum', 0),
	(23, 7, 1, '1', 0),
	(24, 7, 2, '2', 1),
	(25, 7, 3, '3', 0),
	(26, 7, 4, '4', 0),
	(27, 8, 1, 'Jacket Hot Water', 0),
	(28, 8, 2, 'Water Tempering Unit', 0),
	(29, 8, 3, 'Cooling Water System', 0),
	(30, 8, 4, 'Extruder Startup Sump', 1),
	(31, 9, 1, 'Seal in Additive feeders', 1),
	(32, 9, 2, 'To operate Control Valve', 0),
	(33, 9, 3, 'Seal in Slurry pumps to avoid contamination', 0),
	(34, 9, 4, 'Inflation Air system', 0),
	(35, 10, 1, 'Plant Air is filtered air', 0),
	(36, 10, 2, 'Instrument Air is filtered air', 1),
	(37, 10, 3, 'Plant Air is heated air', 0),
	(38, 10, 4, 'Instrument Air is heated air', 0),
	(39, 11, 1, '1 Bg', 0),
	(40, 11, 2, '2 Bg', 0),
	(41, 11, 3, '4 Bg', 1),
	(42, 11, 4, '6 Bg', 0),
	(43, 12, 1, '105 degC', 0),
	(44, 12, 2, '155 degC', 1),
	(45, 12, 3, '175 degC', 0),
	(46, 12, 4, '205 degC', 0),
	(47, 13, 1, 'NF-010', 1),
	(48, 13, 2, 'HE-101', 0),
	(49, 13, 3, 'NF-001', 0),
	(50, 13, 4, 'VV-110', 0),
	(51, 14, 1, '30°C', 0),
	(52, 14, 2, '40°C', 0),
	(53, 14, 3, '50°C', 0),
	(54, 14, 4, '60°C', 1),
	(55, 15, 1, 'To cool down the Tank', 0),
	(56, 15, 2, 'To have slightly positive pressure to the Tank', 1),
	(57, 15, 3, 'To heat up the Tank', 0),
	(58, 15, 4, 'To prevent bad Odor in the Tank', 0),
	(59, 16, 1, 'Jacket Hot Water System', 1),
	(60, 16, 2, 'Heating Water System', 0),
	(61, 16, 3, 'Steam Condensate System', 0),
	(62, 16, 4, 'Hydraulic Conveying System', 0),
	(71, 17, 1, '11', 0),
	(72, 17, 2, '22', 0),
	(73, 17, 3, '33', 0),
	(74, 17, 4, '44', 1);
/*!40000 ALTER TABLE `tbl_quiz_quest_opt` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

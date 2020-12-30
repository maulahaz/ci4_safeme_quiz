-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 08:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safeme`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `uid` int(11) NOT NULL,
  `Usr_id` varchar(20) NOT NULL,
  `Usr_pwd` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Nickname` varchar(10) NOT NULL,
  `Birth_dt` date NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Role_id` varchar(5) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Phone1` varchar(20) NOT NULL,
  `Phone2` varchar(20) NOT NULL,
  `Phone_ext` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Updated_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`uid`, `Usr_id`, `Usr_pwd`, `Name`, `Nickname`, `Birth_dt`, `Position`, `Role_id`, `isActive`, `Email`, `Photo`, `Phone1`, `Phone2`, `Phone_ext`, `Address`, `Updated_dtm`) VALUES
(1, 'brw00096', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ramachandran Lokaiah', 'Rama', '0000-00-00', 'XLPE-Operation Mgr', '4', 1, 'ramachandran.lokaiah@borouge.com', '', '505627360', '', '785225', '+919789054667 and +9', '2020-07-13 14:03:38'),
(2, 'brw00158', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Mohamed Hanifa M Ali', 'Ali', '0000-00-00', 'Shift Controller', '2', 1, 'mohamed.hanifa@borouge.com', '', '505467091', '28762392', '', '', '2020-07-13 14:03:38'),
(3, 'brw00463', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Kulaifikh Naser Al Hajri', '', '0000-00-00', 'LDPE-Operation Mgr', '4', 1, 'kulaifikh.alhajri@borouge.com', '', '504469050', '', '85222', '', '2020-07-13 14:03:38'),
(4, 'brw00693', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ahmed Tareq Yousif Al Ansari', 'Ansari', '0000-00-00', 'Shift Controller', '2', 1, 'ahmed.alansari@borouge.com', '', '505119991', '505119991', '', '501666772', '2020-07-13 14:03:38'),
(5, 'brw00764', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Joseph Roy Diwa', '', '0000-00-00', 'Day Team Controller', '2', 1, 'joseph.diwa@borouge.com', '', '507803745', '', '85288', '', '2020-07-13 14:03:38'),
(6, 'brw00983', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Salem Rashed Alnaqbi', '', '0000-00-00', 'Shift Controller', '2', 1, 'Salem.alnaqabi@borouge.com', '', '507185511', '', '', '', '2020-07-13 14:03:38'),
(7, 'brw02036', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ahmed Belal Mohamed', '', '0000-00-00', 'Day Operator', '1', 0, 'Ahmed.Mohamed@borouge.com', '', '507064666', '', '85154', '', '2020-07-13 14:03:38'),
(8, 'brw02067', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Paritosh Haldar', '', '0000-00-00', 'Process Trainer', '2', 1, 'paritosh.haldar@borouge.com', '', '566123729', '', '85244', '', '2020-07-13 14:03:38'),
(9, 'brw02098', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Soni Yusup Komar Suriadji', '', '0000-00-00', 'Shift Controller', '2', 1, 'soni.suriadji@borouge.com', '', '561975841', '567342774', '', '622678457605', '2020-07-13 14:03:38'),
(10, 'brw02125', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ismail Bin B Mohamed', '', '0000-00-00', 'Shift Controller', '2', 1, 'ismail.mohamed@borouge.com', '', '562369685', '', '', '', '2020-07-13 14:03:38'),
(11, 'brw02162', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Kalpeshkumar K Dadhania', '', '0000-00-00', 'Operator', '1', 1, 'kalpeshkumar.dadhania@borouge.com', '', '567734210', '', '', '919662545562', '2020-07-13 14:03:38'),
(12, 'brw02199', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Semar Abdul Khader Syed', '', '0000-00-00', 'Office Administrator', '1', 0, 'semar.syed@borouge.com', '', '504120450', '', '85190', '', '2020-07-13 14:03:38'),
(13, 'brw02206', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Kalpesh Pagariya', '', '0000-00-00', 'Eng Prod', '3', 1, 'kalpesh.pagariya@borouge.com', '', '567942743', '', '', '', '2020-07-13 14:03:38'),
(14, 'brw02239', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Nuraine Binti Iberahim', '', '0000-00-00', 'Process Control Eng  ', '3', 1, 'nuraine.iberahim@borouge.com', '', '508259048', '562685582', '', '60123887922', '2020-07-13 14:03:38'),
(15, 'brw02245', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Shibu Karunakaran', '', '0000-00-00', 'Eng Prod', '3', 1, 'shibu.karunakaran@borouge.com', '', '561330529', '', '', '', '2020-07-13 14:03:38'),
(16, 'brw02248', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Abhilash Vadakkedath S', '', '0000-00-00', 'Shift Controller', '2', 1, 'abhilash.sivasankarannair@borouge.com', '', '501216960', '28768725', '', '918592912081', '2020-07-13 14:03:38'),
(17, 'brw02256', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Gopalkumar Krishnalal Vyas', '', '0000-00-00', 'Operator', '1', 1, 'gopalkumar.krishnalalvyas@borouge.com', '', '562898117', '', '', 'IND-00919427950343', '2020-07-13 14:03:38'),
(18, 'brw02307', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ralph Navarro Diaz', '', '0000-00-00', 'Operator', '1', 1, 'ralph.diaz@borouge.com', '', '562681584', '28768145', '', '639228012056', '2020-07-13 14:03:38'),
(19, 'brw02308', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Zenrio Ryan Borbon', '', '0000-00-00', 'Operator', '1', 1, 'zenrio.borbon@borouge.com', '', '562681560', '', '', '639192836358', '2020-07-13 14:03:38'),
(20, 'brw02316', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Manuel Nunez Manzano', '', '0000-00-00', 'Operator', '1', 0, 'manuel.manzano@borouge.com', '', '502290130', '', '', '', '2020-07-13 14:03:38'),
(21, 'brw02334', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Abdulla Salem Al Ameri', '', '0000-00-00', 'Operator', '1', 1, 'abdulla.alameri2@borouge.com', '', '507749947', '', '', '', '2020-07-13 14:03:38'),
(22, 'brw02335', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Musleh Saleh Al Sayari', '', '0000-00-00', 'Operator', '1', 0, 'musleh.alsayari@borouge.com', '', '501175524', '', '', '', '2020-07-13 14:03:38'),
(23, 'brw02336', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ahmed Fayez Al Wahedi', '', '0000-00-00', 'Operator', '1', 1, 'ahmed.alwahedi@borouge.com', '', '503172007', '', '', '', '2020-07-13 14:03:38'),
(24, 'brw02356', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Robert John Shingare', '', '0000-00-00', 'HSE Coordinator', '2', 0, 'robert.shingare@borouge.com', '', '562681576', '', '85192', '', '2020-07-13 14:03:38'),
(25, 'brw02366', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Maulana Hazmi', 'Hazmi', '0000-00-00', 'Operator', '1', 1, 'maulana.hazmi@borouge.com', '', '562681844', '', '', '', '2020-07-13 14:03:38'),
(26, 'brw02371', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Samir Kumar Patel ', '', '0000-00-00', 'Operator', '1', 1, 'samirkumar.patel@borouge.com', '', '562681841', '28768197', '', '918128817577', '2020-07-13 14:03:38'),
(27, 'brw02380', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Bjorn Villaflor Fernandez', '', '0000-00-00', 'Operator', '1', 1, 'bjorn.fernandez@borouge.com', '', '566913092', '', '', '', '2020-07-13 14:03:38'),
(28, 'brw02386', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ronald Sevilla Torrico', '', '0000-00-00', 'Operator', '1', 1, 'ronald.torrico@borouge.com', '', '566914291', '', '', '', '2020-07-13 14:03:38'),
(29, 'brw02390', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Syed Ahmed', '', '0000-00-00', 'Operator', '1', 1, 'syed.mohamed@borouge.com', '', '507904711', '', '', '', '2020-07-13 14:03:38'),
(30, 'brw02396', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Antil Kiritbhai Patel', '', '0000-00-00', 'Operator', '1', 1, 'antil.patel@borouge.com', '', '566901296', '28768124', '', '0091 9979891029', '2020-07-13 14:03:38'),
(31, 'brw02399', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Paresh Laxman Savaliya', '', '0000-00-00', 'Operator', '1', 1, 'paresh.savaliya@borouge.com', '', '566901289', '', '', '919979294600', '2020-07-13 14:03:38'),
(32, 'brw02405', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Dave Singayen Germo', '', '0000-00-00', 'Operator', '1', 1, 'dave.germo@borouge.com', '', '566901296', '28764030', '', '639103575403', '2020-07-13 14:03:38'),
(33, 'brw02412', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Muardi Bn Sumpono', '', '0000-00-00', 'Operator', '1', 1, 'muardi.pawirodiharjo@borouge.com', '', '563483577', '', '', '628121351947', '2020-07-13 14:03:38'),
(34, 'brw02430', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'MihirKumar Dinesh Patel', '', '0000-00-00', 'Operator', '1', 1, 'mihirkumar.patel@borouge.com', '', '563198863', '28768064', '', 'IND-00919724007614', '2020-07-13 14:03:38'),
(35, 'brw02448', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Mohd. Kamal Bin Jais', '', '0000-00-00', 'Operator', '1', 1, 'mohd.jais@borouge.com', '', '562127365', '', '', '60127433233', '2020-07-13 14:03:38'),
(36, 'brw02470', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Laurence delos Reyes', '', '0000-00-00', 'Operator', '1', 1, 'laurence.reyes@borouge.com', '', '563198349', '563198349', '', '639275139876', '2020-07-13 14:03:38'),
(37, 'brw02474', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ahmad Hasan Ali Chitra', '', '0000-00-00', 'Operator', '1', 1, 'ahmad.chitra@borouge.com', '', '562127365', '28768068', '', '6287871241909', '2020-07-13 14:03:38'),
(38, 'brw02496', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Constantin Negreci', '', '0000-00-00', 'Day Operator', '1', 0, 'constantin.negreci@borouge.com', '', '503199305', '', '85152', '', '2020-07-13 14:03:38'),
(39, 'brw02771', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Hasmukhkumar Z Patel', '', '0000-00-00', 'Operator', '1', 1, 'hasmukhkumar.patel@borouge.com', '', '507068394', '507068394', '', '919998004757', '2020-07-13 14:03:38'),
(40, 'brw02829', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ali Salem Ali Al Hosani', '', '0000-00-00', 'Operator (U/D)', '1', 0, 'ali.alhosani3@borouge.com', '', '507614771', '', '', '', '2020-07-13 14:03:38'),
(41, 'brw03053', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Abdulla M Al Hammadi', '', '0000-00-00', 'Operator (U/D)', '1', 0, 'Abdulla.AlHammadi5@borouge.com', '', '0', '', '', '', '2020-07-13 14:03:38'),
(42, 'brw03194', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Khaled A M S Alkouri', '', '0000-00-00', 'Operator (U/D)', '1', 0, 'Khaled.AlKouri@borouge.com', '', '522396807', '', '', '', '2020-07-13 14:03:38'),
(43, 'brw03198', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Mohamed Arif Alameri', '', '0000-00-00', 'Operator (U/D)', '1', 0, 'Mohamed.AlAmeri5@borouge.com', '', '502633313', '', '', '', '2020-07-13 14:03:38'),
(44, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Tareq Al Azri', '', '0000-00-00', 'Operator', '1', 1, '', '', '0', '', '', '', '2020-07-13 14:03:38'),
(45, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Hamad Al Shamsi', '', '0000-00-00', 'Operator', '1', 1, '', '', '0', '0501861617-Father', '', '0507038580 new mob.', '2020-07-13 14:03:38'),
(46, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Abdullah Alfazari', '', '0000-00-00', 'Eng Prod (U/D)', '3', 1, '', '', '501709180', '', '', '', '2020-07-13 14:03:38'),
(47, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Fahad Almsalami', '', '0000-00-00', 'Operator', '1', 1, '', '', '0', '0506607090-Uncle', '', '', '2020-07-13 14:03:38'),
(48, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Mohd. Jaib Bin Ismail', '', '0000-00-00', 'Operator', '1', 0, '', '', '0', '', '', '60167607574', '2020-07-13 14:03:38'),
(49, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Ali Al Menhali', '', '0000-00-00', 'Operator', '1', 1, '', '', '0', '', '', '', '2020-07-13 14:03:38'),
(50, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Nasir Al Hosani', '', '0000-00-00', 'Operator', '1', 1, '', '', '506772672', '506281808', '', '', '2020-07-13 14:03:38'),
(51, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Mohamed Al Kalbani', '', '0000-00-00', 'Operator', '1', 1, '', '', '0', '509992109', '', '', '2020-07-13 14:03:38'),
(52, 'brw10001', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Mohamed Al Katheeri', '', '0000-00-00', 'Operator', '1', 1, '', '', '0', '0528006033-Father', '', '501128204', '2020-07-13 14:03:38'),
(53, 'brw90000', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Admin of XLPE', 'admin', '0000-00-00', 'Web Administrator', '5', 1, 'admin@xlpe.com', '', '555555555', '2888888', '88888', '88888', '2020-07-13 14:03:38'),
(54, 'brw90236', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Marc Theo De Vleeschhauwer', '', '0000-00-00', 'XLPE-Operation Mgr', '4', 0, 'marc.vleeschhauwer@borouge.com', '', '566136321', '', '', '32475755889', '2020-07-13 14:03:38'),
(55, 'brw90248', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Paul Vinken', '', '0000-00-00', 'SU Lead Eng', '4', 0, 'paul.vinken@borouge.com', '', '566106360', '', '', '', '2020-07-13 14:03:38'),
(56, 'brw90251', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Jan Sacker', '', '0000-00-00', 'SU Specialist', '4', 0, 'jan.sacker@borouge.com', '', '502421784', '', '', '', '2020-07-13 14:03:38'),
(57, 'brw90266', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Paulus Berg', '', '0000-00-00', 'Lead Eng- OpEX', '4', 0, 'paulus.berg@borouge.com', '', '561553086', '', '85233', '', '2020-07-13 14:03:38'),
(58, 'brw90286', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Asa Bjork', '', '0000-00-00', 'SU Specialist', '3', 0, 'asa.bjork@borouge.com', '', '562072275', '', '', '', '2020-07-13 14:03:38'),
(59, 'brw90287', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Roland Lucien Martha Poppe', '', '0000-00-00', 'SU Specialist', '4', 0, 'roland.poppe@borouge.com', '', '562078456', '', '', '', '2020-07-13 14:03:38'),
(60, 'brw90314', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Erik Joseph M Stoffijn', '', '0000-00-00', 'SU Specialist', '3', 0, 'erik.stoffijn@borouge.com', '', '562890780', '', '', '', '2020-07-13 14:03:38'),
(61, 'brw90331', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Dirk Maria G Breugelmans', '', '0000-00-00', 'SU Panel Operator', '2', 0, 'dirk.breugelmans2@borouge.com', '', '561963500', '', '', '', '2020-07-13 14:03:38'),
(62, 'brw90332', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Bo Linus Broberg', '', '0000-00-00', 'SU Panel Operator', '2', 0, 'bo.broberg@borouge.com', '', '562127397', '', '', '', '2020-07-13 14:03:38'),
(63, 'brw90335', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Emil Christer Ekelund', '', '0000-00-00', 'SU Panel Operator', '2', 0, 'emil.ekelund2@borouge.com', '', '562127387', '', '', '', '2020-07-13 14:03:38'),
(64, 'brw90374', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Gauthier Hanquet', '', '0000-00-00', 'VP, Specialty Polymers', '4', 0, 'Gauthier.Hanquet@borouge.com', '', '567280436', '', '74421', '', '2020-07-13 14:03:38'),
(65, 'test', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'User Test', '', '0000-00-00', 'User Tester', '4', 1, '', '', '0', '', '', '', '2020-07-13 14:03:38'),
(66, 'user', 'aafdc23870ecbcd3d557b6423a8982134e17927e', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '2020-07-13 13:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keyregs`
--

CREATE TABLE `tbl_keyregs` (
  `uid` int(11) NOT NULL,
  `Keyreg_type1` tinyint(1) NOT NULL,
  `Keyreg_type2` tinyint(1) NOT NULL,
  `Keyreg_type3` tinyint(1) NOT NULL,
  `Keyreg_type` varchar(50) NOT NULL,
  `Reason` text NOT NULL,
  `Taken_dtm` datetime NOT NULL,
  `Taken_by` varchar(20) NOT NULL,
  `Return_dtm` datetime NOT NULL,
  `Return_by` varchar(20) NOT NULL,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keyregs`
--

INSERT INTO `tbl_keyregs` (`uid`, `Keyreg_type1`, `Keyreg_type2`, `Keyreg_type3`, `Keyreg_type`, `Reason`, `Taken_dtm`, `Taken_by`, `Return_dtm`, `Return_by`, `Notes`) VALUES
(1, 1, 0, 0, 'MOS,Other', 'Test1234234 dghdfh d', '2018-06-07 05:00:00', 'brw09981', '2018-06-08 12:00:00', 'brw09981', 'Test1'),
(2, 1, 1, 0, 'MOS,Other', 'Test2', '2019-02-07 07:02:00', 'Test2', '2019-02-08 06:32:00', 'Test2', 'Test2'),
(3, 0, 0, 0, 'MOS,Engineer', 'Bypassing LI-2301', '2020-07-12 05:53:00', 'brw01010', '2020-07-12 10:54:00', 'brw01010', 'To avoid LAHH'),
(4, 0, 0, 0, 'Other', 'Testing only', '2018-06-08 14:00:00', 'brw02206', '2018-06-08 16:50:00', 'brw02206', 'Testing only'),
(5, 0, 0, 0, 'MOS,Other', 'Bypassing TI-1301', '2020-07-12 13:55:00', 'brw00983', '2020-07-13 04:56:00', 'brw00983', 'Bypassing TI-1301');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permits`
--

CREATE TABLE `tbl_permits` (
  `uid` int(11) NOT NULL,
  `Permit_dt` date NOT NULL,
  `Valid_from` time NOT NULL,
  `Valid_to` time NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `num` (`uid`);

--
-- Indexes for table `tbl_keyregs`
--
ALTER TABLE `tbl_keyregs`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_keyregs`
--
ALTER TABLE `tbl_keyregs`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

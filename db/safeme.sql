-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 02:25 PM
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
(25, 'brw02366', 'aafdc23870ecbcd3d557b6423a8982134e17927e', 'Maulana Hazmi', 'Hazmi ', '0000-00-00', 'Operator', '1', 1, 'maulana.hazmi@borouge.com', '', '0562681844', '0563723995', '', 'RHC#3', '2020-12-24 13:00:41'),
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
(66, 'user', 'aafdc23870ecbcd3d557b6423a8982134e17927e', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '2020-07-13 13:54:04'),
(67, '', '', 'Maulana Hazmi', 'Hazmi', '0000-00-00', '', '', 0, 'maulana.hazmi@borouge.com', '', '562681844', 'sd', '', 'sd', '2020-12-24 10:29:48'),
(68, '', '', 'Maulana Hazmi', 'Hazmi', '0000-00-00', '', '', 0, 'maulana.hazmi@borouge.com', '', '562681844', 'sd', '', 'sd', '2020-12-24 10:30:20'),
(69, '', '', 'Maulana', 'Hazmi', '0000-00-00', '', '', 0, 'maulana.hazmi@borouge.com', '', '0562681844', '', '', '', '2020-12-24 10:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_depts`
--

CREATE TABLE `tbl_depts` (
  `uid` int(11) NOT NULL,
  `Dept_uid` varchar(4) NOT NULL,
  `Dept_code` int(2) NOT NULL,
  `Dept_name` varchar(50) NOT NULL,
  `Dept_mngr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_depts`
--

INSERT INTO `tbl_depts` (`uid`, `Dept_uid`, `Dept_code`, `Dept_name`, `Dept_mngr`) VALUES
(1, 'XL01', 46, 'XLPE', 'brw00096'),
(2, 'LD01', 43, 'LDPE', 'brw00097'),
(3, 'PP34', 36, 'PP 3/4', 'brw00102'),
(4, 'UO12', 12, 'U&O 1/2', 'brw00103');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gas_tests`
--

CREATE TABLE `tbl_gas_tests` (
  `uid` int(11) NOT NULL,
  `Permit_uid` varchar(10) NOT NULL,
  `Executor` varchar(50) NOT NULL,
  `Date` datetime NOT NULL,
  `Gas` varchar(50) NOT NULL,
  `Value` int(11) NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gas_tests`
--

INSERT INTO `tbl_gas_tests` (`uid`, `Permit_uid`, `Executor`, `Date`, `Gas`, `Value`, `Notes`) VALUES
(1, 'XL1-123456', 'brw02345', '2020-07-21 04:20:30', 'O2', 22, ''),
(2, 'XL1-123456', 'brw02345', '2020-07-21 04:20:30', 'N2', 78, ''),
(3, 'XL1-123457', 'brw02325', '2020-07-20 04:20:30', 'O2', 22, ''),
(4, 'XL1-123499', 'brw02399', '2020-07-19 04:20:30', 'S', 0, ''),
(5, 'XL1-123499', 'brw02399', '2020-07-19 04:20:30', 'NO3', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iccs`
--

CREATE TABLE `tbl_iccs` (
  `uid` int(11) NOT NULL,
  `ICC_uid` varchar(10) NOT NULL,
  `Created_dt` datetime NOT NULL,
  `Equipment` varchar(10) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Descr` varchar(255) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Approver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_iccs`
--

INSERT INTO `tbl_iccs` (`uid`, `ICC_uid`, `Created_dt`, `Equipment`, `Area`, `Title`, `Descr`, `Location`, `Status`, `Author`, `Approver`) VALUES
(1, 'IC-1234567', '2020-05-19 08:16:00', '46-TK-3212', 'Soaking', 'Replace TI-311 Temperature Element', 'Replace TI-311 Temperature Element, Replace with new one', 'Area-3/2F', 'Closed', 'brw90221', 'brw02248'),
(2, 'IC-1234568', '2020-05-18 00:00:00', 'EX-100', 'Compounding', 'Cleaning Extr sump Pit', 'Cleaning Extr sump Pit', 'Area-2/Extr', 'Closed', 'brw00248', 'brw02248'),
(3, 'IC-1234401', '2020-05-19 08:16:00', 'PC-001', '', 'PM Job of PC-001', 'Monthly  PM Job of PC-001 by Mechanical            ', '', 'Live', 'brw90221', 'brw02254'),
(5, 'IC-1234402', '2020-05-18 08:27:00', 'TI-1001', '', 'Check TI-1001', 'Check TI-1001 Check TI-1001 Check TI-1001 Check TI-1001', '', 'Live', 'brw02528', 'brw02148'),
(6, 'IC-1234403', '2020-05-10 08:25:00', 'PSV-132564', '', 'Check PSV23123', 'Check PSV23123 Check PSV23123 Check PSV23123Check PSV23123 ', '', 'Draft', 'brw90221', 'brw02248'),
(7, 'IC-1234404', '2020-05-02 17:16:00', 'AA-303', '', 'TCA AA-303 Cleaning', 'TCA AA-303 Cleaning By OLPA Team', '', 'Draft', 'brw90286', 'brw02248'),
(19, 'XL1-000008', '2020-07-27 15:08:46', 'TK-003', '', 'TEst-8', 'TEst-8 TEst-8 TEst-8 TEst-8', '46/3', 'Draft', '', ''),
(21, 'ICC-000020', '2020-07-29 12:33:22', 'NF-313', '46/3', 'NF-313 Filter replacement', 'Replace with new Filter', '', 'Draft', '', ''),
(22, 'ICC-000022', '2020-07-29 14:50:54', 'TK-152', '46/1', 'Inspect TK-152', 'Leak inspection using boroscope', '', 'Live', '', ''),
(23, 'ICC-000023', '2020-07-29 14:59:49', 'PC-009', '46/0', 'PM Job PC-009', 'Monthly insection by Mech PC-009', '', 'Draft', '', ''),
(24, 'ICC-000024', '2020-07-29 15:05:18', 'XV-3211', '46/3', 'Stroke check XV-3211', 'Monthly checking by Instr, low repsonse issue', '', 'Draft', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_icc_details`
--

CREATE TABLE `tbl_icc_details` (
  `uid` int(11) NOT NULL,
  `ICC_uid` varchar(10) NOT NULL,
  `Tag_uid` varchar(10) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Method` varchar(255) NOT NULL,
  `Iso_descr` varchar(255) NOT NULL,
  `Iso_state` varchar(255) NOT NULL,
  `Deiso_state` varchar(255) NOT NULL,
  `Padlock` varchar(10) NOT NULL,
  `Placed_by` varchar(10) NOT NULL,
  `Placed_dt` date NOT NULL,
  `Removed_by` varchar(10) NOT NULL,
  `Removed_dt` date NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_icc_details`
--

INSERT INTO `tbl_icc_details` (`uid`, `ICC_uid`, `Tag_uid`, `Category`, `Method`, `Iso_descr`, `Iso_state`, `Deiso_state`, `Padlock`, `Placed_by`, `Placed_dt`, `Removed_by`, `Removed_dt`, `Notes`) VALUES
(1, 'IC-1234567', 'HV-1245', 'Operation', 'Close', 'Level-3', 'Close valve', 'Open valve', '-', '', '0000-00-00', '', '0000-00-00', ''),
(2, 'IC-1234567', 'PM-001', 'Electrical', 'Level-1 isolation', 'Level-3', 'Locked out & Tagged out', 'Unlocked', 'EL-1245', '', '0000-00-00', '', '0000-00-00', ''),
(27, 'XL1-000008', 'HV-0098', '', 'Close', 'Discharge', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(28, 'XL1-000008', 'HV-0090', '', 'Open', 'Suction', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(29, 'IC-1234567', 'HV-1245', '', 'Open', 'Vent', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(30, 'IC-1234567', 'PM-001', '', 'Level-1 isolation', 'Drain', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(31, 'ICC-000020', 'HV-3130', '', 'Close', 'Outlet', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(32, 'ICC-000020', 'HV-3131', '', 'Close', 'Inlet', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(33, 'ICC-000022', 'HV-001', '', 'Close', '', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(34, 'ICC-000022', 'HV-006', '', 'Open', '', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(35, 'ICC-000023', 'HV-0630', '', 'Closed Valve', 'Outlet Pump XY', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(36, 'ICC-000023', 'HV-0630', '', 'Closed Valve', 'Outlet Pump XY', '', '', '', '', '0000-00-00', '', '0000-00-00', ''),
(46, 'ICC-000024', 'HV-8989', '', 'Electrical Isolation (L3)', 'PM JOb', '', '', '', '', '0000-00-00', '', '0000-00-00', '');

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
(3, 0, 0, 0, 'MOS,Engineer', 'Bypassing LI-2301', '2020-07-12 05:53:00', 'brw01010', '2020-07-12 10:54:00', 'brw01010', 'To avoid LAHH'),
(5, 0, 0, 0, 'MOS,Other', 'Bypassing TI-1301', '2020-07-12 13:55:00', 'brw02829', '2020-07-13 05:00:00', 'brw02308', 'Bypassing TI-1301'),
(6, 0, 0, 0, 'Engineer,Other', 'Bypassing LI-2301', '2020-07-31 07:20:00', 'brw02206', '2020-07-31 11:15:00', 'brw02256', 'To avoid LAHH-2301 causing tripping Extruder'),
(7, 0, 0, 0, 'MOS', 'Bypassing LI-2301', '2020-10-01 21:13:00', 'brw02125', '2020-10-02 22:16:00', 'brw02334', 'test 1 ot to 2 oct'),
(8, 0, 0, 0, 'MOS,Other', 'Bypassing LI-2301', '2020-12-15 16:22:00', 'brw00158', '2020-12-16 04:25:00', 'brw02308', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaves`
--

CREATE TABLE `tbl_leaves` (
  `uid` int(11) NOT NULL,
  `Emp_id` varchar(10) NOT NULL,
  `From_dt` date NOT NULL,
  `Until_dt` date NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leaves`
--

INSERT INTO `tbl_leaves` (`uid`, `Emp_id`, `From_dt`, `Until_dt`, `Type`, `Notes`) VALUES
(1, 'brw02366', '2020-09-01', '2020-09-05', 'Annual', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overtime`
--

CREATE TABLE `tbl_overtime` (
  `uid` int(11) NOT NULL,
  `usr_ID` varchar(20) NOT NULL,
  `ot_date_from` int(11) NOT NULL,
  `ot_date_to` int(11) NOT NULL,
  `ot_category` varchar(20) NOT NULL,
  `ot_reason` varchar(255) NOT NULL DEFAULT '0',
  `Notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_overtime`
--

INSERT INTO `tbl_overtime` (`uid`, `usr_ID`, `ot_date_from`, `ot_date_to`, `ot_category`, `ot_reason`, `Notes`) VALUES
(15, 'brw02350', 1548457200, 1548457200, '250%', 'Shutdown activities', NULL),
(18, 'brw02350', 1547946000, 1547989200, '400%', 'Turn around activities', NULL),
(19, 'brw02300', 1548676800, 1548687600, '150%', 'Training coverage', NULL),
(20, 'brw02300', 1548610200, 1548653400, '250%', 'Turn around activities', NULL),
(25, 'admin', 1546383600, 1546470000, '100%', 'Annual leave coverage', NULL),
(26, 'brw02366', 1546556400, 1546650000, '100%', 'Annual leave coverage', NULL),
(27, 'brw02366', 1557226800, 1557262800, '100%', 'Annual leave coverage', NULL),
(29, 'brw02350', 1566059400, 1566102600, '100%', 'Annual leave coverage', NULL),
(31, 'brw02350', 1566750600, 1566793800, '100%', 'Annual leave coverage', NULL),
(33, 'admin', 1584486000, 1584547200, '100%', 'Annual leave coverage', 'test'),
(34, 'brw02366', 1597674600, 1597717800, '400%', 'Others', 'Indonesia Independence Day'),
(35, 'brw02366', 1596594600, 1596637800, '150%', 'Shutdown activities', 'Test'),
(36, 'brw02366', 1596853800, 1596897000, '100%', 'Turn around activities', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permits`
--

CREATE TABLE `tbl_permits` (
  `uid` int(11) NOT NULL,
  `Permit_uid` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Valid_from` datetime NOT NULL,
  `Valid_until` datetime NOT NULL,
  `Tag_uid` varchar(10) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Descr` varchar(255) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Receiver` varchar(50) NOT NULL,
  `Issuer` varchar(50) NOT NULL,
  `Originator` varchar(50) NOT NULL,
  `ICC_uid` varchar(10) NOT NULL,
  `Attach1` varchar(50) NOT NULL,
  `Attach2` varchar(50) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Modified_by` varchar(20) NOT NULL,
  `Modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_permits`
--

INSERT INTO `tbl_permits` (`uid`, `Permit_uid`, `Type`, `Date`, `Valid_from`, `Valid_until`, `Tag_uid`, `Area`, `Title`, `Descr`, `Location`, `Status`, `Receiver`, `Issuer`, `Originator`, `ICC_uid`, `Attach1`, `Attach2`, `Created_at`, `Modified_by`, `Modified_at`) VALUES
(1, 'XL1-123456', 'COLD', '2020-05-19', '2020-07-15 09:00:00', '2020-07-15 17:00:00', 'NF-311B ', 'Soaking', 'Replace NF-311B Filter Element', 'Replace NF-311B Filter Element with new filter', 'Area-3/2F', 'Closed', 'Therapong', 'Mohamad Ali', 'Dave', 'ICC-123454', 'PID-123425', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(2, 'XL1-123235', 'HOT', '2020-05-18', '2020-07-15 06:00:00', '2020-07-15 14:00:00', 'EX-100', 'Compounding', 'Cleaning Extr sump Pit', 'Cleaning Extr sump Pit', 'Area-2/Extr', 'Closed', 'Ghanesh', 'Ismail', 'Muardi', '', 'PID-500231', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, 'XL1-123458', 'CONFINED', '0000-00-00', '2020-07-18 12:35:00', '2020-07-19 06:30:00', 'PC-001', '', 'PM Job of PC-001', 'Monthly  PM Job of PC-001 by Mechanical            ', '', 'Live', 'Teraphong', 'M.Ali', 'Dave', '--', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(6, 'XL1-000006', 'COLD', '0000-00-00', '2020-07-20 01:14:00', '2020-07-20 06:30:00', 'TI-1001', '', 'Check TI-1001', 'Check TI-1001 Check TI-1001 Check TI-1001 Check TI-1001', '', 'Live', 'Edison', 'M. Ali', 'Maulana', '-', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(7, 'XL1-000007', 'COLD', '0000-00-00', '2020-07-20 03:08:00', '2020-07-20 03:31:00', 'PSV-132564', '', 'Check PSV23123', 'Check PSV23123 Check PSV23123 Check PSV23123Check PSV23123 ', '', 'Draft', 'urtu', 'ytriu', 'iryiri', '-', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(8, 'XL1-000008', 'COLD', '0000-00-00', '2020-07-21 22:53:00', '2020-07-21 23:20:00', 'AA-303', '', 'TCA AA-303 Cleaning', 'TCA AA-303 Cleaning By OLPA Team', '', 'Draft', 'brw90286', 'brw02248', 'brw02307', '-', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(9, '', 'COLD', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'Permit perbaikan Gelas', 'Permit perbaikan Gelas', '', 'Live', '', '', '', '', '', '', '2020-12-24 22:58:14', '', '2020-12-24 22:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_answer_opt`
--

CREATE TABLE `tbl_quiz_answer_opt` (
  `Opt_id` int(11) NOT NULL,
  `Quest_id` int(11) NOT NULL,
  `Opt_num` int(11) NOT NULL,
  `Opt_title` varchar(255) NOT NULL,
  `isCorrect` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz_answer_opt`
--

INSERT INTO `tbl_quiz_answer_opt` (`Opt_id`, `Quest_id`, `Opt_num`, `Opt_title`, `isCorrect`) VALUES
(1, 3, 1, 'Soal-3 Option Answer-1', 0),
(2, 3, 2, 'Soal-3 Option Answer-2', 0),
(3, 3, 3, 'Soal-3 Option Answer-3', 1),
(5, 1, 1, 'Option Answer-1', 1),
(6, 1, 2, 'Option Answer-2', 0),
(7, 1, 3, 'Option Answer-3', 0),
(15, 5, 1, 'Demineralized Water', 1),
(16, 5, 2, 'Chilled Water', 1),
(17, 5, 3, 'Cooling Water', 0),
(18, 7, 1, 'Test-1', 1),
(19, 7, 2, 'Test-2', 0),
(20, 7, 3, 'Test-3', 0),
(21, 9, 1, 'Test-1', 1),
(22, 9, 2, 'Test-2', 0),
(23, 9, 3, 'Test-3', 0),
(24, 10, 1, 'Option Answer-1', 1),
(25, 10, 2, 'Option Answer-2', 0),
(26, 10, 3, 'Option Answer-3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_cat`
--

CREATE TABLE `tbl_quiz_cat` (
  `uid` int(11) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_quest`
--

CREATE TABLE `tbl_quiz_quest` (
  `Quest_id` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Quiz_level` int(11) NOT NULL DEFAULT '2',
  `Exam_id` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL DEFAULT 'Multioption',
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Answer_opt` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `Created_by` varchar(50) NOT NULL,
  `Created_dtm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz_quest`
--

INSERT INTO `tbl_quiz_quest` (`Quest_id`, `Category`, `Quiz_level`, `Exam_id`, `Type`, `Question`, `Answer`, `Answer_opt`, `isActive`, `Created_by`, `Created_dtm`) VALUES
(1, 'Area-2', 2, 1, 'MultiOption', 'Test Question No.1', 'Explanation Answer of Question no.1', 2, 1, '', '0000-00-00 00:00:00'),
(3, 'Area-9', 2, 2, 'MultiOption', 'Test Question No.3', 'Explanation Answer of Question no.3', 1, 1, '', '0000-00-00 00:00:00'),
(5, 'Area-1', 2, 1, 'MultiOption', 'What kind of water that use in Eye Wash & Safety Shower Station?', 'Potable water is used for all safety shower/eye-wash stations throughout the facility.', 3, 1, '', '0000-00-00 00:00:00'),
(7, 'Area-3', 2, 0, 'MultiOption', 'Question of Q3 ', 'A3', 0, 1, '', '0000-00-00 00:00:00'),
(9, 'Area-9', 1, 0, 'MultiOption', 'Quest-9 Quest-9', 'Answer-9 Answer-9', 0, 1, '', '0000-00-00 00:00:00'),
(10, 'Area-1', 2, 0, 'MultiOption', 'Test 5', 'Test 5', 0, 1, '', '0000-00-00 00:00:00');

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
-- Indexes for table `tbl_depts`
--
ALTER TABLE `tbl_depts`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_gas_tests`
--
ALTER TABLE `tbl_gas_tests`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_iccs`
--
ALTER TABLE `tbl_iccs`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_icc_details`
--
ALTER TABLE `tbl_icc_details`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_keyregs`
--
ALTER TABLE `tbl_keyregs`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_permits`
--
ALTER TABLE `tbl_permits`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_quiz_answer_opt`
--
ALTER TABLE `tbl_quiz_answer_opt`
  ADD PRIMARY KEY (`Opt_id`);

--
-- Indexes for table `tbl_quiz_cat`
--
ALTER TABLE `tbl_quiz_cat`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_quiz_quest`
--
ALTER TABLE `tbl_quiz_quest`
  ADD PRIMARY KEY (`Quest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_depts`
--
ALTER TABLE `tbl_depts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gas_tests`
--
ALTER TABLE `tbl_gas_tests`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_iccs`
--
ALTER TABLE `tbl_iccs`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_icc_details`
--
ALTER TABLE `tbl_icc_details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_keyregs`
--
ALTER TABLE `tbl_keyregs`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_permits`
--
ALTER TABLE `tbl_permits`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_quiz_answer_opt`
--
ALTER TABLE `tbl_quiz_answer_opt`
  MODIFY `Opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_quiz_quest`
--
ALTER TABLE `tbl_quiz_quest`
  MODIFY `Quest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

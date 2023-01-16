-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 05:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `cat_name`) VALUES
(1, '', 'Barangay Sagrada Events\r\n'),
(2, '', 'Barangay Sagrada Events\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `images`) VALUES
(1, 'anna', 'b1efe2bdd8.jpg'),
(2, 'anna', 'fbe9168cf7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `image`) VALUES
(1, '1667108106374_miguela.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `category` varchar(500) NOT NULL,
  `descrip` varchar(2000) NOT NULL,
  `url` varchar(500) NOT NULL,
  `tdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category`, `descrip`, `url`, `tdate`) VALUES
(3, 'Feeding Program', 'Program of Barangay Sagradra', 'The Feeding Program took care of malnourished children, pregnant mothers, tuberculosis patients and elderly people are given feedings until they regain weight.  When the Social Center started in 1983, the Volunteers discovered that majority of the children were malnourished and many had severe malnutrition.Feeding\r\n\r\nThe Social Center started the feeding center, mothers’ classes for health instructions, gave nutritional supplement and taught mothers to prepare low cost, nutritional food alternative herbal medicines through cooking demonstrations.\r\n\r\nThe BP kitchen with its Catering Services addresses the nutrition program of the beneficiaries of the SAAD, BPLC, and the Nutrition/Feeding Program.  The catering service ensures that BP offers safe and healthy food to its beneficiaries.\r\n\r\nFeeding Program\r\nFeeding Program\r\nThen the mothers started an initiative in their own areas to cook for their children.  They contributed money, went to market, cook the food, prepared the meal, served the children and fixed everything in turn.  After some years, the Social Center able to eliminate severe malnutrition in the community.', 'feedngp.gmail.com', 'Jan 26 2023');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `header_logo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `facebook` varchar(2000) DEFAULT NULL,
  `twitter` varchar(2000) DEFAULT NULL,
  `linkedin` varchar(2000) DEFAULT NULL,
  `instagram` varchar(2000) DEFAULT NULL,
  `youtube` varchar(2000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `map` varchar(3000) DEFAULT NULL,
  `phonea` varchar(220) NOT NULL,
  `phoneb` varchar(200) NOT NULL,
  `phonec` varchar(50) NOT NULL,
  `phoned` varchar(20) NOT NULL,
  `phonee` varchar(50) NOT NULL,
  `phonef` varchar(50) NOT NULL,
  `phoneg` varchar(50) NOT NULL,
  `phoneh` varchar(50) NOT NULL,
  `objective` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `goal` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `header_logo`, `email`, `phone`, `phone2`, `footer_logo`, `date`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `address`, `map`, `phonea`, `phoneb`, `phonec`, `phoned`, `phonee`, `phonef`, `phoneg`, `phoneh`, `objective`, `mission`, `vision`, `goal`) VALUES
(1, 's.png', 'Sagradafamilia@gmail.com', '09778564241', '+91 9899 007 899', 's.png', 'Wed 09 Dec 2020', '#', '#', '#', '#', '#', 'Zone 3,  Centro street Barangay Sagrada Buhi', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <iframe src=\"https://satellites.pro/Buhi_map.Philippines#13.431720,123.520446,15\" width=\"100%\" height=\"700\" frameborder=\"0\"></iframe>                                                                                                                                                                                                                                                                                                                                                                                                                          ', '0977-856-4241 ', '0977-856-4241 / 0947-145-451', '098687453', '09886', '092345678910', '09124355251', '09876543212', '09778564241', 'To inform our constituents of Hazards Within our Barangay by putting EWS Signages and Training of the leaders and Residents as well on how to be prepared when disasteroccur as well planed routes and Prepared Goods to respond the needs of the affected people and a livelihood programs and seminars to overcome Trauma and poverty', 'To deliever the basic services to our constituents effectively and effeciently, particulary.\r\nThe Chidren - To Prepare them in thier Schooling, \r\nThe Family - To provide them to live in a healthy and happy Homes, \r\nThe Community - A Community Which is environmental friendly, drug free, God fearing, peaceful, safe and a progressive Sagrada Familia', 'A council that is Independent, efficient and worthy of public trust and Confidence educate and maintain proper communication and relay Disaster management to the constituents to lessen its vulnerabilities', 'A community based Barangay,\r\nMalnurition and Poverty Reduction,\r\nGender Equality,\r\nenvironmental protection,\r\nPeace and Unity,\r\nCitizen Participation,\r\nMalnurition and Poverty Reduction,\r\nYouth and Sports development,\r\nCalamities and awareness,\r\nContent and Happines');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL,
  `archiveStatus` int(20) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblactivity`
--

INSERT INTO `tblactivity` (`id`, `dateofactivity`, `activity`, `description`, `archiveStatus`, `statusArchive`) VALUES
(4, '2022-11-07', 'check up', 'mnnfr', 0, 1),
(5, '2022-11-21', 'feeding program', 'uhvfkvkjv', 0, 1),
(6, '2023-06-28', 'anna', '8888usqk', 0, 1),
(7, '0000-00-00', 'ionoj00oni', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblactivityphoto`
--

INSERT INTO `tblactivityphoto` (`id`, `activityid`, `filename`) VALUES
(1, 3, '1666071309831a.jpeg'),
(3, 5, '1667452829967map.jpg'),
(4, 6, '1667458129435logo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `dateRecorded` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `actionTaken` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `yearRecorded`, `dateRecorded`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `page`, `paddress`, `pcontact`, `complaint`, `actionTaken`, `sStatus`, `locationOfIncidence`, `recordedby`) VALUES
(1, '2022', '2022-07-22', 'alcantara, anna capa', 20, 'monte', 976352482, '1', 22, 'monte', 9342789, '', '1st Option', 'Solved', 'monte', 'admin'),
(2, '2022', '2022-10-18', 'alcantara, anna', 25, 'monte', 89877, '14', 22, 'monte', 78900000, ',jkgu', '2nd Option', 'Unsolved', 'monte', 'admin'),
(3, '2022', '2022-10-20', 'alcantara, anna capa', 22, 'monte', 9876, '17', 23, 'monte', 997, 'mbhbjh', '1st Option', 'Unsolved', 'monte', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblbstaff`
--

CREATE TABLE `tblbstaff` (
  `id` int(11) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `statusArchive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbstaff`
--

INSERT INTO `tblbstaff` (`id`, `sPosition`, `fname`, `mname`, `lname`, `username`, `password`, `statusArchive`) VALUES
(12, 'khyline Alcantara Dela Cruz', 'Khy', 'Prollmante', 'Pescuela', 'khy', '$2y$10$sj92YstDuF13rC35Ohp3Gu0CWFO1RErKakPR9S1QdUjQ6yDkpIEAq', '1'),
(23, 'Kagawad(Tourism)', 'My', 'The middle name', 'Token', 'username', '$2y$10$J3W/b2r4SNZrsiax8KSNc.fk9Tr08lQgIbw1fINBeyYGyhY5PqJMy', '1'),
(24, 'Kagawad(Public Safety)', 'Roberto', 'Manalo', 'Lotto', 'user', '$2y$10$B8mhJAp/CGp1QRl.TD3thefGur5l3tHXSfSQDAgPhArYzZ74GLKBy', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblbulletin`
--

CREATE TABLE `tblbulletin` (
  `image` text NOT NULL,
  `descrtption` varchar(220) NOT NULL,
  `images` text NOT NULL,
  `info` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbulletin`
--

INSERT INTO `tblbulletin` (`image`, `descrtption`, `images`, `info`) VALUES
('a.jpg', 'mjshajkbdkaduavjs', 'a.jpg', 'sjbdkadfbkd'),
('a.jpg', 'mjshajkbdkaduavjs', 'a.jpg', 'sjbdkadfbkd');

-- --------------------------------------------------------

--
-- Table structure for table `tblcensus`
--

CREATE TABLE `tblcensus` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `archiveStatus` int(20) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcensus`
--

INSERT INTO `tblcensus` (`id`, `name`, `fname`, `mname`, `lname`, `username`, `password`, `archiveStatus`, `statusArchive`) VALUES
(9, '', 'dfgdg', 'dfgd', 'xcvxcv', 'dsfg', 'Yes', 0, 1),
(10, '', 'Jerico', 'wala', 'Infante', 'shit', '$2y$10$XK3/r5gaQ8V/NecnPXMS6uMCqhXN1IerEDzrXHUeoz0', 0, NULL),
(12, '', 'Jerico', 'wala', 'Infante', 'the username', '$2y$10$FSKfFxolpNf7Zr0QWrQOeuxiUHuBuIEjMgz2I0ZCjRi', 0, NULL),
(13, '', 'Jerico', 'wala', 'Infante', 'yeay', '$2y$10$eXeUZA06g2yL.HTZgg18keXTtvi10Tw4a3CEdEKNHia', 0, NULL),
(14, '', 'how', 'how', 'how', 'khyline', '$2y$10$B8mhJAp/CGp1QRl.TD3thefGur5l3tHXSfSQDAgPhArYzZ74GLKBy', 0, NULL),
(15, '', 'Jerico', 'none', 'Infante', 'echodunchie', '$2y$10$Wdxn.8L5cje7vvBhj7w/gejF7IJ5jgwCoRw5Uj2b5w9hjgfp9ODQe', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `archiveStatus` int(20) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL,
  `claimStatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `residentid`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`, `archiveStatus`, `statusArchive`, `claimStatus`) VALUES
(84, 0, 54, '', 'Educational', 0, 0, '2023-01-09', 'felrose', 'Approved', 0, 1, ''),
(85, 0, 57, '', 'Financial Assistance', 0, 0, '2023-01-09', 'felrose', 'Approved', 0, 1, ''),
(86, 0, 56, '', 'Educational', 0, 0, '2023-01-09', 'felrose', 'Approved', 0, 1, ''),
(87, 0, 61, '', 'Financial Assistance', 0, 0, '2023-01-09', 'felrose', 'Approved', 0, 1, ''),
(88, 0, 63, '', 'Educational', 0, 0, '2023-01-09', 'felrose', 'Approved', 0, 1, ''),
(89, 0, 57, '', 't', 0, 0, '2023-01-11', 'felrose', 'Approved', 0, NULL, ''),
(90, 0, 61, '', 'ghn', 0, 0, '2023-01-11', 'felrose', 'Approved', 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblformeroff`
--

CREATE TABLE `tblformeroff` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `sPosition` int(11) NOT NULL,
  `completeName` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblformeroff`
--

INSERT INTO `tblformeroff` (`id`, `year`, `sPosition`, `completeName`, `image`) VALUES
(0, 2000, 0, 'Hon. Amado F. Ramboyong', '1666843352220_beauty_20220926173425_polarr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL,
  `archiveStatus` int(20) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblhousehold`
--

INSERT INTO `tblhousehold` (`id`, `householdno`, `zone`, `totalhouseholdmembers`, `headoffamily`, `archiveStatus`, `statusArchive`) VALUES
(17, 368, '1', 0, '', 0, NULL),
(18, 234, '2', 0, '', 0, NULL),
(19, 999, '2', 0, '', 0, NULL),
(20, 678, '4', 0, '', 0, NULL),
(21, 987, '5', 0, '', 0, NULL),
(22, 123, '6', 0, '', 0, NULL),
(23, 468, '2', 0, '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblindigency`
--

CREATE TABLE `tblindigency` (
  `id` int(11) NOT NULL,
  `indigencyNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL,
  `claimStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblindigency`
--

INSERT INTO `tblindigency` (`id`, `indigencyNo`, `residentid`, `purpose`, `dateRecorded`, `recordedBy`, `status`, `statusArchive`, `claimStatus`) VALUES
(53, 0, 56, 'Educational', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(54, 0, 58, 'Financial Assistance', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(55, 0, 61, 'Educational', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(56, 0, 59, 'Educational', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(57, 0, 54, 'Financial Assistance', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(58, 0, 57, 'nothing', '2023-01-11', 'felrose', 'Approved', NULL, ''),
(59, 0, 60, 'sdf', '2023-01-11', 'felrose', 'Approved', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(251, 'Administrator', '2022-10-22 20:19:04', 'Update Tax Ordinance '),
(252, 'Administrator', '2022-10-22 20:44:13', 'Update Tax Ordinance '),
(253, 'Administrator', '2022-10-22 20:48:03', 'Update Tax Ordinance '),
(254, 'Administrator', '2022-10-22 20:50:00', 'Update Tax Ordinance '),
(255, 'Administrator', '2022-10-22 20:50:06', 'Update Tax Ordinance '),
(256, 'Administrator', '2022-10-22 20:53:09', 'Update Tax Ordinance '),
(257, 'Administrator', '2022-10-22 20:53:17', 'Update Tax Ordinance '),
(258, 'Administrator', '2022-10-22 20:58:41', 'Update Tax Ordinance '),
(259, 'Administrator', '2022-10-22 20:58:46', 'Update Tax Ordinance '),
(260, 'Administrator', '2022-10-22 20:59:20', 'Update Tax Ordinance '),
(261, 'Administrator', '2022-10-22 20:59:27', 'Update Tax Ordinance '),
(262, 'Administrator', '2022-10-22 21:00:50', 'Update Tax Ordinance '),
(263, 'Administrator', '2022-10-22 21:00:57', 'Update Tax Ordinance '),
(264, 'Administrator', '2022-10-22 21:03:30', 'Update Tax Ordinance '),
(265, 'Administrator', '2022-10-22 21:03:36', 'Update Tax Ordinance '),
(266, 'Administrator', '2022-10-22 21:06:42', 'Update Tax Ordinance '),
(267, 'Administrator', '2022-10-22 21:06:43', 'Update Tax Ordinance '),
(268, 'Administrator', '2022-10-22 21:06:48', 'Update Tax Ordinance '),
(269, 'Administrator', '2022-10-22 21:06:48', 'Update Tax Ordinance '),
(270, 'Administrator', '2022-10-22 21:08:12', 'Update Tax Ordinance '),
(271, 'Administrator', '2022-10-22 21:08:12', 'Update Tax Ordinance '),
(272, 'Administrator', '2022-10-22 21:09:46', 'Update Tax Ordinance '),
(273, 'Administrator', '2022-10-22 21:09:46', 'Update Tax Ordinance '),
(274, 'Administrator', '2022-10-22 21:14:10', 'Update Tax Ordinance '),
(275, 'Administrator', '2022-10-22 21:14:10', 'Update Tax Ordinance '),
(276, 'Administrator', '2022-10-22 21:14:17', 'Update Tax Ordinance '),
(277, 'Administrator', '2022-10-22 21:14:17', 'Update Tax Ordinance '),
(278, 'Administrator', '2022-10-22 21:39:12', 'Update Tax Ordinance '),
(279, 'Administrator', '2022-10-22 21:39:19', 'Update Tax Ordinance '),
(280, 'Administrator', '2022-10-23 10:58:00', 'Update Tax Ordinance '),
(281, 'Administrator', '2022-10-23 10:58:07', 'Update Tax Ordinance '),
(282, 'Administrator', '2022-10-23 20:38:03', 'Update Tax Ordinance '),
(283, 'Administrator', '2022-10-23 21:17:41', 'Updated 0977-856-4241 '),
(284, 'Administrator', '2022-10-23 21:22:38', 'Updated 0977-856-4241 '),
(285, 'Administrator', '2022-10-23 22:24:44', 'Updated 0977-856-4241 '),
(286, 'Administrator', '2022-10-23 22:24:58', 'Updated 0977-856-4241 '),
(287, 'Administrator', '2022-10-23 22:28:58', 'Updated 0977-856-4241 '),
(288, 'Administrator', '2022-10-23 22:29:22', 'Updated 0977-856-4241 '),
(289, 'Administrator', '2022-10-23 22:29:45', 'Updated 0977-856-4241 '),
(290, 'Administrator', '2022-10-23 22:30:01', 'Updated 0977-856-4241 '),
(291, 'Administrator', '2022-10-23 22:30:17', 'Updated 0977-856-4241 '),
(292, 'Administrator', '2022-10-23 22:30:26', 'Updated 0977-856-4241 '),
(293, 'Administrator', '2022-10-23 22:32:34', 'Updated 0977-856-4241 '),
(294, 'Administrator', '2022-10-23 22:32:48', 'Updated 0977-856-4241 '),
(295, 'Administrator', '2022-10-23 23:02:19', 'Updated 0977-856-4241 '),
(296, 'Administrator', '2022-10-23 23:13:41', 'Updated 0977-856-4241 '),
(297, 'Administrator', '2022-10-25 10:29:58', 'Added Official named alcantara, anna marie'),
(298, 'Administrator', '2022-10-25 10:30:43', 'Added Official named alcantara, anna marie'),
(299, 'Administrator', '2022-10-25 20:55:50', 'Added Resident named Rosero, freya '),
(300, 'Administrator', '2022-10-25 20:56:45', 'Added Resident named Rosero, freya '),
(301, 'Administrator', '2022-10-25 20:56:53', 'Added Resident named Rosero, freya '),
(302, 'Administrator', '2022-10-25 20:57:38', 'Added Resident named Rosero, freya '),
(303, 'Administrator', '2022-10-25 20:57:44', 'Added Resident named Rosero, freya '),
(304, 'Administrator', '2022-10-25 20:58:26', 'Added Resident named afante, Leamne Kate '),
(305, 'Administrator', '2022-10-25 20:59:52', 'Added Resident named Rosero, Leamne Kate '),
(306, 'Administrator', '2022-10-25 21:04:20', 'Added Resident named Malaca, nonoy '),
(307, 'Administrator', '2022-10-25 21:05:43', 'Added Resident named Malaca, nonoy '),
(308, 'Administrator', '2022-10-25 21:07:29', 'Added Resident named catina, nonoy '),
(309, 'Administrator', '2022-10-25 21:10:09', 'Added Resident named catina, Leamne Kate '),
(310, 'Administrator', '2022-10-25 21:13:38', 'Added Resident named catina, freya '),
(311, 'Administrator', '2022-10-25 21:14:58', 'Added Resident named catina, freya '),
(312, 'Administrator', '2022-10-25 21:15:36', 'Update Resident named catina, freya '),
(313, 'Administrator', '2022-10-25 21:18:30', 'Update Official named Hon.'),
(314, 'Administrator', '2022-10-25 21:52:09', 'Added Official named alcantara, anna marie'),
(315, 'Administrator', '2022-10-25 21:54:21', 'Added Official named Ma.felrose C. Sarto'),
(316, 'Administrator', '2022-10-25 21:54:39', 'Update Official named Ma.felrose C. Sarto'),
(317, 'Administrator', '2022-10-25 21:55:33', 'Update Official named Ma.felrose C. Sarto'),
(318, 'Administrator', '2022-10-25 21:55:55', 'Update Official named Ma.felrose C. Sarto'),
(319, 'Administrator', '2022-10-25 22:02:38', 'Update Official named Hon. Dores S. Fabrega'),
(320, 'Administrator', '2022-10-25 22:02:52', 'Update Official named Hon. Dores S. Fabrega'),
(321, 'Administrator', '2022-10-25 22:03:33', 'Added Official named alcantara, anna marie'),
(322, 'Administrator', '2022-10-25 22:05:35', 'Added Official named jhbkjabz'),
(323, 'Administrator', '2022-10-25 22:07:45', 'Added Resident named Rosero, jeremy '),
(324, 'Administrator', '2022-10-25 22:09:02', 'Update Resident named Rosero, jeremy '),
(325, 'Administrator', '2022-10-25 22:17:59', 'Added Official named jomar aguilar'),
(326, 'Administrator', '2022-10-25 22:37:11', 'Added Official named alcantara, anna marie'),
(327, 'Administrator', '2022-10-25 22:38:26', 'Added Official named alcantara, anna marie'),
(328, 'Administrator', '2022-10-26 05:22:43', 'Added Resident named catina, nonoy '),
(329, 'Administrator', '2022-10-26 05:23:30', 'Added Official named jomar '),
(330, 'Administrator', '2022-10-26 07:11:31', 'Added Official named alcantara, anna marie'),
(331, 'Administrator', '2022-10-26 07:24:04', 'Added Official named Ma.felrose C. Sarto'),
(332, 'Administrator', '2022-10-26 07:25:08', 'Added Official named Ma.felrose C. Sarto'),
(333, 'Administrator', '2022-10-26 07:25:30', 'Added Official named Ma.felrose C. Sarto'),
(334, 'Administrator', '2022-10-26 07:25:46', 'Update Official named Ma.felrose C. Sarto'),
(335, 'Administrator', '2022-10-26 07:27:20', 'Update Official named Ma.felrose C. Sarto'),
(336, 'Administrator', '2022-10-26 07:27:30', 'Update Official named Ma.felrose C. Sarto'),
(337, 'Administrator', '2022-10-26 22:06:07', 'Added Official named jomar aguilar'),
(338, 'Administrator', '2022-10-26 22:08:48', 'Added Official named alcantara, anna marie'),
(339, 'Administrator', '2022-10-26 22:09:09', 'Update Official named Ma.felrose C. Sarto'),
(340, 'Administrator', '2022-10-27 11:02:32', 'Added former Official named '),
(341, 'Administrator', '2022-10-27 11:08:10', 'Update former Official named Hon. Amado F. Ramboyong'),
(342, 'Administrator', '2022-10-27 17:41:08', 'Updated 0977-856-4241 '),
(343, 'Administrator', '2022-10-28 13:22:10', 'Updated 0977-856-4241 '),
(344, 'Administrator', '2022-10-28 13:34:57', 'Updated 0977-856-4241 '),
(345, 'Administrator', '2022-10-28 13:46:43', 'Updated 0977-856-4241 '),
(346, 'Administrator', '2022-10-28 13:55:34', 'Updated 0977-856-4241 '),
(347, 'Administrator', '2022-10-28 13:56:32', 'Updated 0977-856-4241 '),
(348, 'Administrator', '2022-10-28 13:58:46', 'Updated 0977-856-4241 '),
(349, 'Administrator', '2022-10-30 11:01:47', 'Updated 0977-856-4241 '),
(350, 'Administrator', '2022-10-30 11:07:08', 'Updated 0977-856-4241 '),
(351, 'Administrator', '2022-10-30 11:08:09', 'Updated 0977-856-4241 '),
(352, 'Administrator', '2022-10-30 11:09:00', 'Updated 0977-856-4241 '),
(353, 'Administrator', '2022-10-30 11:24:29', 'Updated 0977-856-4241 '),
(354, 'Administrator', '2022-10-30 11:28:40', 'Updated 0977-856-4241 '),
(355, 'Administrator', '2022-10-30 12:35:06', 'Added Official named Hon. Miguela M. Martinez'),
(356, 'Administrator', '2022-10-30 12:38:59', 'Added Official named Hon. Dores S. Fabrega'),
(357, 'Administrator', '2022-10-30 12:39:21', 'Update Official named Hon. Dores S. Fabrega'),
(358, 'Administrator', '2022-10-30 12:41:31', 'Added Official named Hon. Anita O. Morada'),
(359, 'Administrator', '2022-10-30 12:42:46', 'Added Official named Hon. Amado F. Ramboyong'),
(360, 'Administrator', '2022-10-30 12:44:51', 'Added Official named Hon. Arnold Silverio T. San Antonio'),
(361, 'Administrator', '2022-10-30 12:46:04', 'Added Official named Hon. Facundo P. Zaballa'),
(362, 'Administrator', '2022-10-30 12:47:37', 'Added Official named Hon. Laarni C. Sarto'),
(363, 'Administrator', '2022-10-30 12:48:50', 'Added Official named Hon. Efren A. Levina'),
(364, 'Administrator', '2022-10-30 12:50:13', 'Added Official named Jeffrey A. Sarto'),
(365, 'Administrator', '2022-10-30 12:51:37', 'Added Official named Ma. Felrose C. Sarto'),
(366, 'Administrator', '2022-10-30 12:52:50', 'Added Official named Noemy N. Fabcricante'),
(367, 'Administrator', '2022-10-31 13:58:27', 'Updated 0977-856-4241 '),
(368, 'Administrator', '2022-11-02 16:13:59', 'Updated 0977-856-4241 '),
(369, 'Administrator', '2022-11-02 16:14:00', 'Updated 0977-856-4241 '),
(370, 'Administrator', '2022-11-03 10:27:31', 'Added Activity check up'),
(371, 'Administrator', '2022-11-03 12:20:29', 'Added Activity feeding program'),
(372, 'Administrator', '2022-11-03 13:48:47', 'Added Activity anna'),
(373, 'anna', '2022-11-03 13:50:30', 'Added Activity ionoj00oni'),
(374, 'Administrator', '2022-11-07 11:02:29', 'Update Resident named Templonuevo, Rolly Babia'),
(375, 'Administrator', '2022-11-08 11:16:47', 'Added Resident named gabrillo, beb '),
(376, 'Administrator', '2022-11-09 09:54:52', 'Added Official named jomar aguilar'),
(377, 'Administrator', '2022-11-09 10:16:01', 'Update Resident named obumani, divine nicole '),
(378, 'Administrator', '2022-11-09 10:16:49', 'Update Resident named Templonuevo, Rolly Babia'),
(379, 'Administrator', '2022-11-09 10:18:16', 'Added Household Number 789'),
(380, 'Administrator', '2022-11-09 10:22:41', 'Added Official named '),
(381, 'Administrator', '2022-11-09 10:37:03', 'Added Resident named kezia,  '),
(382, 'Administrator', '2022-11-10 14:22:23', 'Added Staff with name of alcantara, ana'),
(383, 'Administrator', '2022-11-10 14:23:41', 'Update Staff with name of alcantara, ana'),
(384, 'Administrator', '2022-11-10 14:23:57', 'Update Staff with name of alcantara, ana'),
(385, 'Administrator', '2022-11-10 14:24:05', 'Update Staff with name of alcantara, ana'),
(386, 'Administrator', '2022-11-10 14:24:29', 'Added Staff with name of alcantara, ana'),
(387, 'Administrator', '2022-11-10 14:26:45', 'Added Staff with name of zxcv'),
(388, 'zxcv', '2022-11-10 14:41:40', 'Update Resident named kezia, velasco '),
(389, 'Administrator', '2022-11-10 23:27:18', 'Added  Name alcantara, ana'),
(390, 'Administrator', '2022-11-10 23:33:07', 'Added  Name alcantara, ana'),
(391, 'Administrator', '2022-11-10 23:34:16', 'Update name  '),
(392, 'Census', '2022-11-10 23:41:17', 'Added Resident named aislinn, freya '),
(393, 'Administrator', '2022-11-12 13:05:07', 'Added Staff with name of alcantara, ana'),
(394, 'alcantara, ana', '2022-11-12 22:07:58', 'Update Resident named Templonuevo, Rolly Babia'),
(395, 'alcantara, ana', '2022-11-12 22:21:27', 'Added Resident named , beb '),
(396, 'alcantara, ana', '2022-11-12 22:23:13', 'Added Resident named required, Leamne Kate '),
(397, 'alcantara, ana', '2022-11-12 22:23:48', 'Added Resident named ,  '),
(398, 'Administrator', '2022-11-13 22:55:52', 'Added Household Number 1'),
(399, 'Administrator', '2022-11-18 11:11:32', 'Added Staff with name of '),
(400, 'Administrator', '2022-11-18 12:26:21', 'Added Resident named anna, anna capa'),
(401, 'Administrator', '2022-11-18 12:26:42', 'Update Resident named anna, anna capa'),
(402, 'Administrator', '2022-11-25 19:50:58', 'Added Staff with name of Burger'),
(403, 'Administrator', '2022-11-25 19:51:01', 'Added Staff with name of Burger'),
(404, 'Administrator', '2022-11-25 19:57:53', 'Added Staff with name of , , .'),
(405, 'Administrator', '2022-11-25 19:58:46', 'Added Staff with name of Burger, Sponsor, .'),
(406, 'Administrator', '2022-11-25 19:59:04', 'Update Staff with name of Burger'),
(407, 'Administrator', '2022-11-25 20:02:44', 'Update Staff with name of Burger, Sponsor, Onion'),
(408, 'Administrator', '2022-11-25 20:03:11', 'Update Staff with name of Burger, Sponsor, '),
(409, 'Administrator', '2022-11-25 20:05:42', 'Update Staff with name of Burger, Sponsor, '),
(410, 'Administrator', '2022-11-25 20:05:47', 'Update Staff with name of Burger, Sponsor, 11'),
(411, 'Administrator', '2022-11-25 20:06:04', 'Update Staff with name of Burger, Sponsor, Onion'),
(412, 'Administrator', '2022-11-25 20:13:59', 'Added Staff with name of McDick, Onion, .'),
(413, 'Administrator', '2022-11-25 20:14:13', 'Update Staff with name of McDick, Onion, Garlic'),
(414, 'Administrator', '2022-11-25 20:28:14', 'Added Resident named Burger, Sponsor n.a'),
(415, 'Administrator', '2022-11-25 20:30:09', 'Update Resident named Burger, Sponsor n.a'),
(416, 'Administrator', '2022-11-25 20:43:42', 'Update Resident named Burger, Sponsor n.a'),
(417, 'Administrator', '2022-11-25 20:43:49', 'Update Resident named Burger, Sponsor n.a'),
(418, 'Administrator', '2022-11-25 20:43:57', 'Update Resident named anna, anna capa'),
(419, 'Administrator', '2022-11-26 20:46:48', 'Update Resident named Burger, Sponsor n.a'),
(420, 'Administrator', '2022-11-26 20:46:53', 'Update Resident named Burger, Sponsor n.a'),
(421, 'Administrator', '2022-11-26 20:49:30', 'Update Resident named anna, anna capa'),
(422, 'Administrator', '2022-11-26 21:09:24', 'Update Resident named anna, anna capa'),
(423, 'Administrator', '2022-11-26 21:09:29', 'Update Resident named anna, anna capa'),
(424, 'Administrator', '2022-11-26 21:17:41', 'Added Resident named Burger, Sponsor n.a'),
(425, 'Administrator', '2022-11-26 21:19:12', 'Added Resident named Burger, Sponsor 11'),
(426, 'Administrator', '2022-11-26 21:19:19', 'Added Resident named Burger, Sponsor 11'),
(427, 'Administrator', '2022-11-26 21:22:37', 'Added Resident named Burger, Sponsor 11'),
(428, 'Administrator', '2022-11-26 21:22:40', 'Added Resident named Burger, Sponsor 11'),
(429, 'Administrator', '2022-11-26 21:23:20', 'Added Resident named Burger, Sponsor 44'),
(430, 'Administrator', '2022-11-26 21:24:13', 'Added Resident named Burger, Sponsor 11'),
(431, 'Administrator', '2022-11-26 21:25:18', 'Added Resident named Burger, Sponsor 11'),
(432, 'Administrator', '2022-11-26 21:29:01', 'Added Resident named Burger, Sponsor n.a'),
(433, 'Administrator', '2022-11-26 21:34:55', 'Added Resident named Burger, Sponsor n.a'),
(434, 'Administrator', '2022-11-26 21:35:42', 'Added Resident named Burger, Sponsor n.a'),
(435, 'Administrator', '2022-11-26 21:35:57', 'Update Resident named Burger, Sponsor n.a'),
(436, 'Administrator', '2022-11-26 21:37:12', 'Update Resident named Burger, Sponsor n.a'),
(437, 'Administrator', '2022-11-26 21:37:25', 'Update Resident named Burger, Sponsor n.a'),
(438, 'Administrator', '2022-11-26 21:37:31', 'Update Resident named Burger, Sponsor n.a'),
(439, 'Administrator', '2022-11-27 21:36:46', 'Update Residency with Residency number of 4'),
(440, 'Administrator', '2022-11-27 21:36:51', 'Update Residency with Residency number of 4'),
(441, 'Administrator', '2022-11-27 21:39:05', 'Added residency with residency number of 2'),
(442, 'Administrator', '2022-11-27 21:44:21', 'Added indigency with indigency number of 11'),
(443, 'Administrator', '2022-11-27 21:44:30', 'Update Indigency with Indigency number of 11'),
(444, 'Administrator', '2022-11-28 01:35:03', 'Update Clearance with clearance number of 9'),
(445, 'Administrator', '2022-11-28 01:36:10', 'Update Clearance with clearance number of 23'),
(446, 'Administrator', '2022-11-28 01:39:02', 'Update Clearance with clearance number of 23'),
(447, 'Administrator', '2022-11-28 01:39:46', 'Update Clearance with clearance number of 23'),
(448, 'Administrator', '2022-11-28 01:40:03', 'Update Clearance with clearance number of 9'),
(449, 'Administrator', '2022-11-28 01:44:52', 'Update Clearance with clearance number of 9'),
(450, 'Administrator', '2022-11-28 01:44:57', 'Update Clearance with clearance number of 9'),
(451, 'Administrator', '2022-11-28 01:45:02', 'Update Clearance with clearance number of 23'),
(452, 'Administrator', '2022-11-28 01:45:08', 'Update Clearance with clearance number of 9'),
(453, 'Administrator', '2022-11-28 01:46:52', 'Added Household Number 3'),
(454, 'Administrator', '2022-11-28 01:48:42', 'Update Household Number 3'),
(455, 'Administrator', '2022-11-28 01:53:11', 'Update Resident named Burger, Sponsor capa'),
(456, 'Administrator', '2022-11-28 01:53:24', 'Update Resident named Burger, Sponsor capa'),
(457, 'Administrator', '2022-11-28 01:57:33', 'Update Resident named Burger, Sponsor capa'),
(458, 'Administrator', '2022-11-28 01:57:39', 'Update Resident named Burger, Sponsor capa'),
(459, 'Administrator', '2022-11-28 01:58:48', 'Update Resident named Burger, Sponsor capa'),
(460, 'Administrator', '2022-11-28 01:58:55', 'Update Resident named Burger, Sponsor capa'),
(461, 'Administrator', '2022-11-28 21:36:38', 'Added Resident named catina, anna Alcantara'),
(462, 'Administrator', '2022-11-28 21:42:01', 'Added Resident named catina, anna Alcantara'),
(463, 'Administrator', '2022-11-28 21:50:06', 'Added Resident named catina, anna Alcantara'),
(464, 'Administrator', '2022-11-28 21:57:12', 'Added Staff with name of , , .'),
(465, 'Administrator', '2022-11-28 22:01:49', 'Added Staff with name of gabrillo, beb, capa.'),
(466, 'Administrator', '2022-11-28 22:25:17', 'Added  Name alcantara, ana'),
(467, 'Administrator', '2022-11-28 22:26:28', 'Added  Name mjbkmvkvj'),
(468, 'Administrator', '2022-11-28 22:38:01', 'Update name  '),
(469, 'Administrator', '2022-11-28 22:40:50', 'Added  Name baniel, marie'),
(470, 'Administrator', '2022-11-28 22:42:17', 'Added  Name baniel, marie'),
(471, 'Administrator', '2022-11-28 22:42:30', 'Update name  '),
(472, 'Administrator', '2022-11-28 22:42:45', 'Update name  '),
(473, 'Administrator', '2022-11-28 22:43:27', 'Update name  '),
(474, 'Administrator', '2022-11-28 22:43:57', 'Update name  '),
(475, 'Administrator', '2022-11-28 23:34:50', 'Added Official named anna'),
(476, 'Administrator', '2022-11-28 23:36:20', 'Added Official named '),
(477, 'Administrator', '2022-11-29 00:16:30', 'Added  Name alcantara, ana'),
(478, 'Administrator', '2022-11-29 00:30:04', 'Added  Name alcantara, ana'),
(479, 'Administrator', '2022-11-29 00:33:29', 'Added  Name alcantara, ana'),
(480, 'Administrator', '2022-11-29 00:38:38', 'Added  Name alcantara, ana'),
(481, 'Administrator', '2022-11-29 00:38:51', 'Added  Name alcantara,han'),
(482, 'Administrator', '2022-11-29 01:04:27', 'Update Resident named catina, anna Alcantara'),
(483, 'Administrator', '2022-11-29 09:43:41', 'Added Official named Alcantara, Anna Marie C. '),
(484, 'Administrator', '2022-11-29 10:10:02', 'Added  Name baniel, heart marie'),
(485, 'Administrator', '2022-11-29 10:12:51', 'Added  Name baniel, heart marie'),
(486, 'Administrator', '2022-11-29 10:19:51', 'Added  Name baniel, heart marie'),
(487, 'Administrator', '2022-11-29 10:20:02', 'Added  Name baniel, marie'),
(488, 'Administrator', '2022-11-29 10:25:00', 'Added  Name baniel, marie'),
(489, 'Administrator', '2022-11-29 10:25:21', 'Added  Name baniel, marie'),
(490, 'Administrator', '2022-11-29 10:28:57', 'Added  Name baniel, marie'),
(491, 'Administrator', '2022-11-29 10:29:24', 'Added  Name Cernechez, Editha'),
(492, 'Administrator', '2022-11-29 10:30:35', 'Added  Name alcantara, ana'),
(493, 'Administrator', '2022-11-29 10:34:47', 'Added  Name Cernechez, aaa'),
(494, 'Administrator', '2022-11-29 10:36:31', 'Added  Name Cernechez, aaa'),
(495, 'Administrator', '2022-11-29 10:37:36', 'Added  Name Cernechez, aaa'),
(496, 'Administrator', '2022-11-29 10:38:58', 'Added  Name Cernechez, aaa'),
(497, 'Administrator', '2022-11-29 10:39:12', 'Added  Name Cernechez, aaa'),
(498, 'Administrator', '2022-11-29 10:39:25', 'Added  Name baniel, heart marie'),
(499, 'Administrator', '2022-11-29 10:39:57', 'Added  Name baniel, heart marie'),
(500, 'Administrator', '2022-11-29 12:02:45', 'Added  Name Cernechez, Editha'),
(501, 'Administrator', '2022-11-29 12:03:02', 'Added  Name Cernechez, Editha'),
(502, 'Administrator', '2022-11-29 12:24:19', 'Added  Name alcantara, ana'),
(503, 'Administrator', '2022-11-29 12:27:06', 'Added  Name khyline Alcantara Dela Cruz'),
(504, 'Administrator', '2022-11-29 12:32:12', 'Added  Name baniel, heart marie'),
(505, 'Administrator', '2022-11-30 10:02:34', 'Added Resident named Alcantara, Khiel Daniel Capa'),
(506, 'Administrator', '2022-11-30 13:18:10', 'Added Clearance with clearance name of 34'),
(507, 'Administrator', '2022-11-30 13:18:38', 'Added Clearance with clearance name of 35'),
(508, 'Administrator', '2022-11-30 13:23:44', 'Update Clearance with clearance name of education'),
(509, 'Administrator', '2022-11-30 13:52:12', 'Added indigency with indigency name of 35'),
(510, 'Administrator', '2022-11-30 14:01:28', 'Added indigency with indigency name of 30'),
(511, 'Administrator', '2022-11-30 14:03:20', 'Added Clearance with clearance name of 35'),
(512, 'Administrator', '2022-11-30 14:20:59', 'Added Clearance with clearance name of 30'),
(513, 'Administrator', '2022-11-30 14:22:31', 'Added indigency with indigency name of 34'),
(514, 'Administrator', '2022-11-30 14:28:50', 'Added indigency with indigency name of 35'),
(515, 'Administrator', '2022-11-30 15:50:17', 'Update Clearance with clearance name of education'),
(516, 'Administrator', '2022-11-30 15:52:43', 'Update Indigencywith indigency name of education'),
(517, 'Administrator', '2022-11-30 16:42:01', 'Update Clearance with clearance name of education'),
(518, 'Administrator', '2022-11-30 17:40:54', 'Added residency with residency number of 5'),
(519, 'Administrator', '2022-12-01 14:06:55', 'Added Indigency with indigency name of 34'),
(520, 'Administrator', '2022-12-01 14:07:44', 'Added Indigency with indigency name of 30'),
(521, 'Administrator', '2022-12-01 20:13:04', 'Added residency with residency name of 30'),
(522, 'Administrator', '2022-12-01 20:14:17', 'Added residency with residency name of 35'),
(523, 'Administrator', '2022-12-01 22:03:12', 'Update Resident named Alcantara, Khiel Daniel Capa'),
(524, 'Administrator', '2022-12-01 22:03:33', 'Update Resident named catina, anna Alcantara'),
(525, 'Administrator', '2022-12-01 22:03:55', 'Update Resident named Burger, Sponsor capa'),
(526, 'Administrator', '2022-12-01 22:16:12', 'Added residencywith residency name of 34'),
(527, 'Administrator', '2022-12-01 22:34:04', 'Added residencywith residency name of 30'),
(528, 'Administrator', '2022-12-04 11:48:50', 'Added Resident named Torres, Jed Rodil'),
(529, 'Administrator', '2022-12-05 18:37:50', 'Added Resident named Rosero, Kate Alcantara'),
(530, 'Administrator', '2022-12-05 18:40:32', 'Update Resident named Rosero, Kate Alcantara'),
(531, 'Administrator', '2022-12-05 18:40:39', 'Update Resident named Burger, Sponsor capa'),
(532, 'Administrator', '2022-12-05 18:41:05', 'Update Resident named Alcantara, Khiel Daniel Capa'),
(533, 'Administrator', '2022-12-05 18:41:13', 'Update Resident named Torres, Jed Rodil'),
(534, 'Administrator', '2022-12-05 18:43:41', 'Added Resident named gabrillo, beb Alcantara'),
(535, 'Administrator', '2022-12-05 18:45:50', 'Added Resident named Reyes, Lyn Cinco'),
(536, 'Administrator', '2022-12-05 18:47:35', 'Added Resident named Malaca, leanne capa'),
(537, 'Administrator', '2022-12-05 19:08:48', 'Update Resident named Burger, Sponsor capa'),
(538, 'Administrator', '2022-12-05 19:10:04', 'Update Resident named Rosero, Kate Alcantara'),
(539, 'Administrator', '2022-12-05 19:36:23', 'Added Resident named catina, beb Cinco'),
(540, 'Administrator', '2022-12-06 04:37:12', 'Added Resident named Sy, Sam '),
(541, 'Administrator', '2022-12-06 04:38:27', 'Update Resident named Sy, Sam '),
(542, 'Administrator', '2022-12-11 22:14:23', 'Update Clearance with clearance name of for education'),
(543, 'Administrator', '2022-12-16 11:11:06', 'Updated 0977-856-4241 '),
(544, 'Administrator', '2022-12-16 11:46:00', 'Update title  Sagrada Feeding Program'),
(545, 'Administrator', '2022-12-16 11:46:10', 'Update title  Sagrada Feeding Program'),
(546, 'Administrator', '2022-12-16 11:47:03', 'Update title  Sagrada Feeding Progra'),
(547, 'Administrator', '2022-12-16 11:52:23', 'Updated Dental'),
(548, 'Administrator', '2022-12-16 11:54:32', 'Updated Dental'),
(549, 'Administrator', '2022-12-16 11:55:26', 'Updated Feeding Program'),
(550, 'Administrator', '2022-12-16 11:56:00', 'Updated Feeding Program'),
(551, 'Administrator', '2022-12-16 12:17:25', 'Updated Feeding Program'),
(552, 'Administrator', '2022-12-16 12:17:53', 'Updated Feeding Program'),
(553, 'Administrator', '2022-12-18 08:46:20', 'Added Resident named De Leon, Mccoy '),
(554, 'Administrator', '2022-12-18 09:32:10', 'Added Resident named Beno, Leonard '),
(555, 'Administrator', '2022-12-18 09:45:51', 'Added Resident named Gabrillo, Cessy '),
(556, 'Administrator', '2022-12-18 22:00:32', 'Added Resident named Montemayor, Loren '),
(557, 'Administrator', '2022-12-19 08:39:59', 'Added Indigency with indigency name of 40'),
(558, 'Administrator', '2022-12-19 09:00:28', 'Update Resident named Burger, Sponsor Capa'),
(559, 'Administrator', '2022-12-19 09:00:46', 'Update Resident named Gabrillo, Beb Alcantara'),
(560, 'Administrator', '2022-12-19 09:00:58', 'Update Resident named Catina, Beb Cinco'),
(561, 'Administrator', '2022-12-19 09:01:31', 'Update Resident named Gabrillo, Cessy '),
(562, 'Administrator', '2022-12-19 09:01:57', 'Update Resident named Gabrillo, Cessy '),
(563, 'Administrator', '2022-12-19 09:02:26', 'Update Resident named Catina, Beb Cinco'),
(564, 'Administrator', '2022-12-19 09:02:42', 'Added Indigency with indigency name of 42'),
(565, 'Administrator', '2022-12-19 09:03:01', 'Added Indigency with indigency name of 45'),
(566, 'Administrator', '2022-12-19 09:03:16', 'Added Indigency with indigency name of 43'),
(567, 'Administrator', '2022-12-19 09:03:34', 'Added Indigency with indigency name of 44'),
(568, 'Administrator', '2022-12-19 09:03:52', 'Added Indigency with indigency name of 36'),
(569, 'Administrator', '2022-12-19 09:05:17', 'Added Clearance with clearance name of 37'),
(570, 'Administrator', '2022-12-19 09:05:28', 'Added Clearance with clearance name of 40'),
(571, 'Administrator', '2022-12-19 09:05:39', 'Added Clearance with clearance name of 45'),
(572, 'Administrator', '2022-12-19 09:05:54', 'Added Clearance with clearance name of 42'),
(573, 'Administrator', '2022-12-19 09:06:04', 'Added Clearance with clearance name of 30'),
(574, 'Administrator', '2022-12-19 09:06:15', 'Added Clearance with clearance name of 39'),
(575, 'Administrator', '2022-12-19 09:06:26', 'Added Clearance with clearance name of 37'),
(576, 'Administrator', '2022-12-19 09:06:45', 'Added residencywith residency name of 37'),
(577, 'Administrator', '2022-12-19 09:07:04', 'Added residencywith residency name of 35'),
(578, 'Administrator', '2022-12-19 09:07:13', 'Added residencywith residency name of 40'),
(579, 'Administrator', '2022-12-19 09:07:25', 'Added residencywith residency name of 38'),
(580, 'Administrator', '2022-12-19 09:07:37', 'Added residencywith residency name of 46'),
(581, 'Administrator', '2022-12-19 09:07:46', 'Added residencywith residency name of 39'),
(582, 'Administrator', '2022-12-19 09:07:57', 'Added residencywith residency name of 36'),
(583, 'Administrator', '2022-12-23 19:16:19', 'Update Resident named Vargas, Beb Cinco'),
(584, 'Administrator', '2022-12-23 20:03:16', 'Added Household Number 444'),
(585, 'Administrator', '2022-12-24 10:15:45', 'Added Official named Ma.felrose C. Sarto'),
(586, 'Administrator', '2023-01-04 19:38:21', 'Added Official named Pros'),
(587, 'Administrator', '2023-01-04 19:38:45', 'Added Official named asdasd'),
(588, 'Administrator', '2023-01-05 00:04:00', 'Added Resident named lala, lala '),
(589, 'Administrator', '2023-01-05 12:27:07', 'Added Resident named asdasdasd, asd asdasd'),
(590, 'Administrator', '2023-01-05 12:27:59', 'Added Household Number 512'),
(591, 'Administrator', '2023-01-05 12:35:55', 'Added Household Number 7427'),
(592, 'Administrator', '2023-01-05 12:37:32', 'Added Resident named jhAGSJHG, JHASGDHJAS JAHSGDHJASG'),
(593, 'Administrator', '2023-01-05 12:38:30', 'Added Resident named asd, dfgfdg dfgd'),
(594, 'Administrator', '2023-01-05 12:47:04', 'Added Household Number 4156'),
(595, 'Administrator', '2023-01-05 13:27:47', 'Added Household Number 4125'),
(596, 'Administrator', '2023-01-05 13:27:54', 'Added Household Number 22224'),
(597, 'Administrator', '2023-01-05 13:27:59', 'Added Household Number 414141'),
(598, 'Administrator', '2023-01-05 13:28:56', 'Added Household Number 902390923'),
(599, 'Administrator', '2023-01-05 13:29:40', 'Added Resident named kRINGKK, KJAHSDKJAH KJAHSDKJSH'),
(600, 'Administrator', '2023-01-05 13:44:49', 'Added Household Number 41523'),
(601, 'Administrator', '2023-01-05 13:46:22', 'Added Household Number 8972893789'),
(602, 'Administrator', '2023-01-05 13:49:37', 'Added Resident named mmmmm, mmm '),
(603, 'Administrator', '2023-01-05 13:50:33', 'Added Household Number 999'),
(604, 'Administrator', '2023-01-05 13:51:50', 'Added Resident named mm, mm '),
(605, 'Administrator', '2023-01-05 13:59:35', 'Added Resident named jhAGSJHG, JHASGDHJAS '),
(606, 'Administrator', '2023-01-07 17:06:35', 'Added Official named anna'),
(607, 'Administrator', '2023-01-09 00:52:30', 'Added Household Number 368'),
(608, 'Administrator', '2023-01-09 00:52:41', 'Added Household Number 234'),
(609, 'Administrator', '2023-01-09 00:55:08', 'Added Resident named Alcantara, Anna Capa'),
(610, 'Administrator', '2023-01-09 01:24:31', 'Added Resident named Capa, Marie Alcantara'),
(611, 'Administrator', '2023-01-09 01:27:57', 'Added Resident named Beno, John Monte'),
(612, 'Administrator', '2023-01-09 01:39:54', 'Added Resident named Alcantara, Freya '),
(613, 'Administrator', '2023-01-09 01:44:01', 'Added Resident named Beno, Anna '),
(614, 'Administrator', '2023-01-09 01:44:12', 'Update Resident named Beno, John Monte'),
(615, 'Administrator', '2023-01-09 01:44:50', 'Update Resident named Beno, John Monte'),
(616, 'Administrator', '2023-01-09 01:48:42', 'Added Resident named Alcantara, han '),
(617, 'Administrator', '2023-01-09 01:50:45', 'Added Resident named Beno, Manon '),
(618, 'Administrator', '2023-01-09 01:53:04', 'Added Resident named Beno, Manon '),
(619, 'Administrator', '2023-01-09 01:53:24', 'Added Household Number 999'),
(620, 'Administrator', '2023-01-09 01:56:20', 'Added Resident named Padilla, Marc '),
(621, 'Administrator', '2023-01-09 01:56:36', 'Added Household Number 678'),
(622, 'Administrator', '2023-01-09 02:00:03', 'Added Resident named Reyes, Margie '),
(623, 'Administrator', '2023-01-09 02:00:25', 'Added Household Number 987'),
(624, 'Administrator', '2023-01-09 02:02:26', 'Added Resident named Reyes, Nika '),
(625, 'Administrator', '2023-01-09 02:04:52', 'Added Resident named Cernechez, may '),
(626, 'Administrator', '2023-01-09 02:06:15', 'Added Indigency with indigency name of 56'),
(627, 'Administrator', '2023-01-09 02:06:37', 'Added Indigency with indigency name of 58'),
(628, 'Administrator', '2023-01-09 02:07:29', 'Added Indigency with indigency name of 61'),
(629, 'Administrator', '2023-01-09 02:07:38', 'Added Indigency with indigency name of 59'),
(630, 'Administrator', '2023-01-09 02:07:50', 'Added Indigency with indigency name of 54'),
(631, 'Administrator', '2023-01-09 02:08:02', 'Added Clearance with clearance name of 54'),
(632, 'Administrator', '2023-01-09 02:08:10', 'Added Clearance with clearance name of 57'),
(633, 'Administrator', '2023-01-09 02:08:18', 'Added Clearance with clearance name of 56'),
(634, 'Administrator', '2023-01-09 02:08:29', 'Added Clearance with clearance name of 61'),
(635, 'Administrator', '2023-01-09 02:08:38', 'Added Clearance with clearance name of 63'),
(636, 'Administrator', '2023-01-09 02:09:00', 'Added residencywith residency name of 56'),
(637, 'Administrator', '2023-01-09 02:09:07', 'Added residencywith residency name of 54'),
(638, 'Administrator', '2023-01-09 02:09:28', 'Added residencywith residency name of 58'),
(639, 'Administrator', '2023-01-09 02:09:39', 'Added residencywith residency name of 61'),
(640, 'Administrator', '2023-01-09 02:09:51', 'Added residencywith residency name of 62'),
(641, 'Administrator', '2023-01-09 02:10:14', 'Update Official named Pros'),
(642, 'Administrator', '2023-01-09 02:11:08', 'Update Official named Monteclaro, Joseph Villa'),
(643, 'Administrator', '2023-01-09 02:12:00', 'Update Official named Alcantara, Hanna Capa'),
(644, 'Administrator', '2023-01-09 02:13:35', 'Update Official named Del Valle, John Ramos'),
(645, 'Administrator', '2023-01-09 02:14:03', 'Update Official named Monteclaro, Joseph Villa'),
(646, 'Administrator', '2023-01-09 08:52:47', 'Added Household Number 123'),
(647, 'Administrator', '2023-01-09 10:41:56', 'Added Resident named Capa, Jay '),
(648, 'Administrator', '2023-01-09 10:43:57', 'Added Resident named Capa, Anna '),
(649, 'Administrator', '2023-01-09 10:48:41', 'Added Official named Nieva, Jake'),
(650, 'Administrator', '2023-01-09 10:50:22', 'Added Household Number 368'),
(651, 'Administrator', '2023-01-09 10:50:41', 'Added Household Number 468'),
(652, 'Administrator', '2023-01-11 18:23:48', 'Added Clearance with clearance name of 57'),
(653, 'Administrator', '2023-01-11 18:25:40', 'Added residencywith residency name of 60'),
(654, 'Administrator', '2023-01-11 18:31:54', 'Added residencywith residency name of 60'),
(655, 'Administrator', '2023-01-11 18:32:19', 'Added residencywith residency name of 58'),
(656, 'Administrator', '2023-01-11 18:34:37', 'Added residencywith residency name of 57'),
(657, 'Administrator', '2023-01-11 18:35:49', 'Added residencywith residency name of '),
(658, 'Administrator', '2023-01-11 18:35:56', 'Added residencywith residency name of 60'),
(659, 'Administrator', '2023-01-11 18:39:38', 'Added Indigency with indigency name of 57'),
(660, 'Administrator', '2023-01-11 18:40:47', 'Added Indigency with indigency name of 60'),
(661, 'Administrator', '2023-01-11 18:40:57', 'Added Clearance with clearance name of 61'),
(662, 'Administrator', '2023-01-12 07:46:43', 'Added residencywith residency name of 64'),
(663, 'Administrator', '2023-01-12 14:54:49', 'Update Official named Nieva, Jake'),
(664, 'Administrator', '2023-01-12 14:54:55', 'Update Official named Nieva, Jake'),
(665, 'Administrator', '2023-01-12 15:36:59', 'Update Official named Del Valle, John Ramos'),
(666, 'Administrator', '2023-01-12 15:41:32', 'Added  Name Echo'),
(667, 'Administrator', '2023-01-12 15:43:55', 'Added  Name Jerico Infante'),
(668, 'Administrator', '2023-01-12 15:44:06', 'Added  Name Jerico Infante'),
(669, 'Administrator', '2023-01-12 15:54:12', 'Update name  '),
(670, 'Administrator', '2023-01-12 15:54:44', 'Update name  '),
(671, 'Administrator', '2023-01-12 15:54:49', 'Update name  '),
(672, 'Administrator', '2023-01-12 15:55:25', 'Update name  '),
(673, 'Administrator', '2023-01-12 15:56:21', 'Update name  '),
(674, 'Administrator', '2023-01-12 16:54:09', 'Update name  '),
(675, 'Administrator', '2023-01-12 17:11:31', 'Update name  '),
(676, 'Administrator', '2023-01-12 17:11:38', 'Update name  '),
(677, 'Administrator', '2023-01-12 17:11:45', 'Update name  '),
(678, 'Administrator', '2023-01-12 17:11:51', 'Update name  '),
(679, 'Administrator', '2023-01-12 17:15:06', 'Update name  '),
(680, 'Administrator', '2023-01-12 17:15:09', 'Update name  '),
(681, 'Administrator', '2023-01-12 17:15:14', 'Update name  '),
(682, 'Administrator', '2023-01-12 17:15:42', 'Update name  '),
(683, 'Administrator', '2023-01-12 17:17:05', 'Update name  '),
(684, 'Administrator', '2023-01-12 17:17:09', 'Update name  '),
(685, 'Administrator', '2023-01-12 17:17:49', 'Added  Name My Token'),
(686, 'Administrator', '2023-01-12 17:17:56', 'Update name  '),
(687, 'Administrator', '2023-01-12 17:18:05', 'Update name  '),
(688, 'Administrator', '2023-01-12 17:45:07', 'Added  Name s'),
(689, 'Administrator', '2023-01-12 17:46:02', 'Added  Name s'),
(690, 'Administrator', '2023-01-12 17:46:25', 'Added  Name s'),
(691, 'Administrator', '2023-01-12 17:46:53', 'Added  Name '),
(692, 'Administrator', '2023-01-12 17:48:43', 'Added  Name '),
(693, 'Administrator', '2023-01-12 17:50:10', 'Added  Name The Yes First Name The Lastname'),
(694, 'Administrator', '2023-01-12 17:50:57', 'Added  Name The Yes First Name The Lastname'),
(695, 'Administrator', '2023-01-12 17:58:49', 'Added  Name The Yes First Name The Lastname'),
(696, 'Administrator', '2023-01-12 18:00:02', 'Added  Name The Yes First Name The Lastname'),
(697, 'Administrator', '2023-01-12 18:01:16', 'Added  Name The Yes First Name The Lastname'),
(698, 'Administrator', '2023-01-12 18:04:44', 'Added  Name The Yes First Name The Lastname'),
(699, 'Administrator', '2023-01-12 18:04:57', 'Added  Name Jerico Infante'),
(700, 'Administrator', '2023-01-12 18:05:20', 'Added  Name Jerico Infante'),
(701, 'Administrator', '2023-01-12 18:05:27', 'Added  Name My Token'),
(702, 'Administrator', '2023-01-12 18:05:57', 'Added  Name My Token'),
(703, 'Administrator', '2023-01-12 18:06:08', 'Added  Name The Yes First Name The Lastname'),
(704, 'Administrator', '2023-01-12 18:06:16', 'Added  Name My Token'),
(705, 'Administrator', '2023-01-12 18:19:31', 'Update Resident named Alcantara, Anna Capa'),
(706, 'Administrator', '2023-01-12 18:19:42', 'Update Resident named Alcantara, Anna Capa'),
(707, 'Administrator', '2023-01-12 18:32:42', 'Update name   '),
(708, 'Administrator', '2023-01-12 18:32:48', 'Update name   '),
(709, 'Administrator', '2023-01-12 18:32:56', 'Update name   '),
(710, 'Administrator', '2023-01-12 18:33:44', 'Update name   '),
(711, 'Administrator', '2023-01-12 18:33:50', 'Update name   '),
(712, 'Administrator', '2023-01-12 18:34:11', 'Update name   '),
(713, 'Administrator', '2023-01-12 18:34:20', 'Update name   '),
(714, 'Administrator', '2023-01-12 18:34:30', 'Update name   '),
(715, 'Administrator', '2023-01-12 18:35:06', 'Update name   '),
(716, 'Administrator', '2023-01-12 18:35:16', 'Update name   '),
(717, 'Administrator', '2023-01-12 18:35:27', 'Update name   '),
(718, 'Administrator', '2023-01-12 18:36:52', 'Update name  My Token'),
(719, 'Administrator', '2023-01-12 18:36:57', 'Update name  The Yes First Name The Lastname'),
(720, 'Administrator', '2023-01-12 18:37:18', 'Update name  Myff Token'),
(721, 'Administrator', '2023-01-12 18:37:40', 'Update name  Myff Token'),
(722, 'Administrator', '2023-01-12 18:37:53', 'Update name  Myff Token'),
(723, 'Administrator', '2023-01-12 18:38:04', 'Update name   '),
(724, 'Administrator', '2023-01-12 18:39:43', 'Update name   '),
(725, 'Administrator', '2023-01-12 18:39:47', 'Update name   '),
(726, 'Administrator', '2023-01-12 18:39:51', 'Update name   '),
(727, 'Administrator', '2023-01-12 18:45:03', 'Update name  Myff Token'),
(728, 'Administrator', '2023-01-12 18:45:07', 'Update name  The Yes First Name The Lastnamecc'),
(729, 'Administrator', '2023-01-12 19:01:24', 'Update name  My Token'),
(730, 'Administrator', '2023-01-12 20:10:13', 'Update Official named Del Valle, John Ramos'),
(731, 'Administrator', '2023-01-12 20:25:55', 'Update name  '),
(732, 'Administrator', '2023-01-12 20:26:01', 'Update name  '),
(733, 'Administrator', '2023-01-12 20:29:04', 'Added  Name Myff The middle name Token'),
(734, 'Administrator', '2023-01-12 20:29:15', 'Added  Name asdfasdf'),
(735, 'Administrator', '2023-01-12 20:30:57', 'Added  Name '),
(736, 'Administrator', '2023-01-12 20:33:42', 'Added  Name asdf'),
(737, 'Administrator', '2023-01-12 20:34:38', 'Added  Name '),
(738, 'Administrator', '2023-01-12 20:34:48', 'Added  Name '),
(739, 'Administrator', '2023-01-12 20:35:11', 'Added  Name '),
(740, 'Administrator', '2023-01-12 20:35:25', 'Update name  '),
(741, 'Administrator', '2023-01-12 21:06:50', 'Added Tax ordinance Blotter Fee'),
(742, 'Administrator', '2023-01-12 21:07:01', 'Update Tax Ordinance Blotter Fee'),
(743, 'Administrator', '2023-01-12 21:07:07', 'Update Tax Ordinance Blotter Fee'),
(744, 'Administrator', '2023-01-14 14:47:58', 'Update name  Khy Pescuela'),
(745, 'Administrator', '2023-01-14 16:04:20', 'Added  Name Roberto Lotto'),
(746, 'Administrator', '2023-01-14 16:04:41', 'Update name  Roberto Lotto'),
(747, 'Administrator', '2023-01-14 16:25:58', 'Update name  Roberto Lotto'),
(748, 'Administrator', '2023-01-14 16:26:04', 'Update name  Roberto Lotto'),
(749, 'Administrator', '2023-01-14 17:06:33', 'Added  Name '),
(750, 'Administrator', '2023-01-14 17:09:00', 'Added  Name '),
(751, 'Administrator', '2023-01-14 17:20:49', 'Added  Name '),
(752, 'Administrator', '2023-01-14 17:21:10', 'Added  Name '),
(753, 'Administrator', '2023-01-14 17:30:54', 'Update Resident named Capa, Marie Alcantara'),
(754, 'Administrator', '2023-01-14 17:33:45', 'Update name  '),
(755, 'Administrator', '2023-01-14 17:35:40', 'Update name  '),
(756, 'Administrator', '2023-01-14 17:37:14', 'Update name  '),
(757, 'Administrator', '2023-01-14 17:37:41', 'Update name  '),
(758, 'Administrator', '2023-01-14 18:14:09', 'Update name  '),
(759, 'Administrator', '2023-01-14 18:16:27', 'Update name  '),
(760, 'Administrator', '2023-01-14 18:22:12', 'Update name  '),
(761, 'Administrator', '2023-01-14 18:26:19', 'Update name  '),
(762, 'Administrator', '2023-01-14 18:32:57', 'Update name  '),
(763, 'Administrator', '2023-01-14 18:43:27', 'Update name  Roberto Lotto'),
(764, 'Administrator', '2023-01-14 20:12:49', 'Update name  My Token'),
(765, 'Administrator', '2023-01-14 20:13:42', 'Update name  My Token'),
(766, 'Administrator', '2023-01-14 20:17:45', 'Update name  '),
(767, 'Administrator', '2023-01-14 20:19:52', 'Update name  '),
(768, 'Administrator', '2023-01-14 20:21:23', 'Added  Name '),
(769, 'Administrator', '2023-01-15 07:24:39', 'Added  Name '),
(770, 'Administrator', '2023-01-15 07:30:56', 'Added Resident named Infante, Jerico none'),
(771, 'Administrator', '2023-01-15 07:34:29', 'Update Resident named Infante, Jerico none'),
(772, 'Administrator', '2023-01-15 07:40:15', 'Update Resident named Infante, Jerico none'),
(773, 'Administrator', '2023-01-15 07:42:33', 'Update Resident named Infante, Jerico none'),
(774, 'Administrator', '2023-01-15 07:43:51', 'Update Resident named Infante, Jerico none'),
(775, 'Administrator', '2023-01-15 07:50:07', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(776, 'Administrator', '2023-01-15 07:58:46', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(777, 'Administrator', '2023-01-15 08:02:29', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(778, 'Administrator', '2023-01-15 08:02:35', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(779, 'Administrator', '2023-01-15 08:02:47', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(780, 'Administrator', '2023-01-15 08:03:13', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(781, 'Administrator', '2023-01-15 08:03:29', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(782, 'Administrator', '2023-01-15 08:04:05', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(783, 'Administrator', '2023-01-15 08:04:39', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(784, 'Administrator', '2023-01-15 08:05:45', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(785, 'Administrator', '2023-01-15 08:06:35', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(786, 'Administrator', '2023-01-15 08:07:02', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(787, 'Administrator', '2023-01-15 08:07:30', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(788, 'Administrator', '2023-01-15 08:09:16', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(789, 'Administrator', '2023-01-15 08:11:48', 'Added Resident named Prollamante, Ylain Jorge Pescuela'),
(790, 'Administrator', '2023-01-15 08:15:47', 'Update Resident named Prollamante, Ylain Jorge Pescuela'),
(791, 'Administrator', '2023-01-15 08:19:19', 'Update Resident named Prollamante, Ylain Jorge Pescuela'),
(792, 'Administrator', '2023-01-15 08:24:01', 'Update Resident named Prollamante, Ylain Jorge Pescuela'),
(793, 'Administrator', '2023-01-15 15:12:20', 'Added Household Number 2'),
(794, 'Administrator', '2023-01-16 08:13:39', 'Added Household Number 555');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE `tblmessage` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(220) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `sPosition` varchar(50) NOT NULL,
  `completeName` text NOT NULL,
  `pcontact` varchar(20) NOT NULL,
  `paddress` text NOT NULL,
  `image` text NOT NULL,
  `termStart` date NOT NULL,
  `termEnd` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `archiveStatus` int(20) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `lname`, `fname`, `mname`, `sPosition`, `completeName`, `pcontact`, `paddress`, `image`, `termStart`, `termEnd`, `status`, `archiveStatus`, `statusArchive`) VALUES
(52, '', '', '', 'captain', 'Del Valle, John Ramos', '097655566', 'Sagrada Familia', '1673201615721_8.jpg', '2024-01-01', '2023-02-01', '', 0, 1),
(54, '', '', '', 'kagawad_tourism', 'Alcantara, Hanna Capa', '09876567896', 'Monte Calvario', '1673201520580_3.jpg', '2023-01-01', '2023-01-17', '', 0, 1),
(55, '', '', '', 'kagawad_budgetfinance', 'Nieva, Jake', '09876567897', 'Sagrada Familia', '1673232521178_10.jpg', '2023-01-09', '2023-01-30', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `businessName` text NOT NULL,
  `businessAddress` text NOT NULL,
  `typeOfBusiness` varchar(50) NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `residentid`, `businessName`, `businessAddress`, `typeOfBusiness`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(3, 11, 'annamarie', 'monte calvario', 'Hybrid Business', 789, 60, '2022-10-11', 'jerald', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblresidency`
--

CREATE TABLE `tblresidency` (
  `id` int(11) NOT NULL,
  `residencyNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `sor` varchar(100) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL,
  `claimStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblresidency`
--

INSERT INTO `tblresidency` (`id`, `residencyNo`, `residentid`, `sor`, `dateRecorded`, `recordedBy`, `status`, `statusArchive`, `claimStatus`) VALUES
(37, 0, 56, 'Educational', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(38, 0, 54, 'Educational', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(39, 0, 58, 'Financial Asisstance', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(40, 0, 61, 'Financial Asisstance', '2023-01-09', 'felrose', 'Approved', NULL, ''),
(48, 0, 64, 'Financial Assistance', '2023-01-12', 'felrose', 'Approved', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `householdno` int(11) NOT NULL,
  `totalhouseholdmembers` varchar(200) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bplace` text NOT NULL,
  `age` int(11) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `zone` varchar(5) NOT NULL,
  `totalhousehold` int(5) NOT NULL,
  `relationtohead` varchar(50) NOT NULL,
  `civilstatus` varchar(20) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `es` varchar(220) NOT NULL,
  `differentlyabledperson` varchar(220) NOT NULL,
  `monthlyincome` int(12) NOT NULL,
  `householdnum` int(11) NOT NULL,
  `lengthofstay` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `highestEducationalAttainment` varchar(50) NOT NULL,
  `landOwnershipStatus` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `lname`, `householdno`, `totalhouseholdmembers`, `fname`, `mname`, `bdate`, `mobile_number`, `email`, `bplace`, `age`, `barangay`, `zone`, `totalhousehold`, `relationtohead`, `civilstatus`, `occupation`, `es`, `differentlyabledperson`, `monthlyincome`, `householdnum`, `lengthofstay`, `religion`, `nationality`, `gender`, `highestEducationalAttainment`, `landOwnershipStatus`, `remarks`, `image`, `username`, `password`) VALUES
(54, 'Alcantara', 368, '', 'Anna', 'Capa', '2000-02-07', '09876543456', 'anna@gmail.com', 'Monte Calvario', 22, 'Bongsuran', '1', 0, '', 'widowed', '', '', '', 40000, 368, 10, 'Catholic', 'Filipino', 'Male', 'No schooling completed', '', '', '1673196908686_3.jpg', 'ana', 'ana'),
(55, 'Capa', 368, '', 'Marie', 'Alcantara', '1999-11-01', '0987543575', 'capa@gmail.com', 'Quezon City', 23, 'Bongsuran', '1', 0, '', 'Married', '', '', '', 20000, 368, 12, 'Catholic', 'Filipino', 'Male', 'No schooling completed', '', '', '1673198671711_2.jpg', 'capa', '$2y$10$IWX5KXeJrutbuUSpUtZWReo5uFPCqYcxHj7Nenf.zYG'),
(56, 'Beno', 234, '', 'John', 'Monte', '1998-06-09', '09976647', 'john@gmail.com', 'Makati ', 24, 'Bongsuran', '1', 0, 'on', 'Married', '', '', '', 30000, 234, 11, 'Catholic', 'Filipino', 'Employ', 'No schooling completed', '', '', '1673198877925_7.jpg', 'john', 'john'),
(57, 'Alcantara', 368, '', 'Freya', '', '2000-03-12', '09876545678', 'freya@gmail.com', 'Monte Calvario', 22, 'Bongsuran', '1', 0, 'no', 'single', 'Programmer', '', 'Normal', 50000, 368, 12, 'Catholic', 'Filipino', 'Employ', 'Master’s degree', '', '', '1673199594461_4.jpg', 'ya', 'ya'),
(58, 'Beno', 234, '', 'Anna', '', '2000-01-08', '0987434564', 'anna@gmail.com', 'Monte Calvario', 23, 'Centro', '3', 0, 'no', 'Married', 'Designer', '', 'Breast-Feeding Mother', 40000, 234, 12, 'Catholic', 'Filipino', 'Employ', 'Master’s degree', '', '', '1673199841017_n.jpg', 'ann', 'ann'),
(59, 'Alcantara', 368, '', 'han', '', '2000-01-04', '0987665443', 'anna@gmail.com', 'Monte Calvario', 23, 'Bongsuran', '1', 0, 'yes', 'single', 'Programmer', '', 'Normal', 6000, 368, 12, 'Catholic', 'Filipino', 'Employ', 'Vocational', '', '', '1673200122292_2.jpg', 'han', 'han'),
(61, 'Padilla', 999, '', 'Marc', '', '1960-08-09', '09876434567', 'mark@gmail.com', 'Monte Calvario', 62, 'Minuro', '2', 0, 'yes', 'divorced', 'teacher', '', 'Normal', 20000, 999, 13, 'Catholic', 'Filipino', 'Employ', 'College, undergrad', '', '', '1673200580095_8.jpg', 'marc', 'marc'),
(62, 'Reyes', 678, '', 'Margie', '', '1999-12-24', '09876554355', 'marg@gmail.com', 'San Rafael', 23, 'Minuro', '2', 0, 'yes', 'Married', 'Architect', '', 'Normal', 40000, 678, 12, 'Catholic', 'Filipino', 'Employ', 'Vocational', '', '', '1673200803316_id_picture_edit_1x1_2x2_for_sc_1662655268_808a19ee_progressive.jpg', 'marg', 'marg'),
(63, 'Reyes', 987, '', 'Nika', '', '1998-08-09', '09876543212', 'nik@gmail.com', 'Monte Calvario', 24, 'Cagmanok', '5', 0, 'no', 'single', 'student', '', 'Normal', 1, 987, 12, 'Catholic', 'Filipino', 'Studen', 'College, undergrad', '', '', '1673200946429_4.jpg', 'nik', 'nik'),
(65, 'Capa', 368, '', 'Anna', '', '2000-05-31', '09876543456', 'anna@gmail.com', 'Monte Calvario', 22, 'Minuro', '2', 0, 'no', 'Married', 'Programmer', '', 'Normal', 30000, 368, 12, 'Catholic', 'Filipino', 'Employ', 'High school graduate', '', '', '1673232237204_n.jpg', 'jayan', 'jayan'),
(66, 'Infante', 368, '', 'Jerico', 'none', '2023-01-03', '19153653125', 'echodunchie@gmail.com', 'Ys', 0, 'Bongsuran', '1', 0, '', 'Married', '', '', '', 1231, 368, 3, 'Roman Catholic', 'Fil', 'Male', 'No schooling completed', '', '', 'default.png', 'ress', '$2y$10$em08lUWbwI7FUIp5bOfaaeHC5XhwMJO9xI2Lsp1lKF0'),
(68, 'Prollamante', 368, '', 'Ylain Jorge', 'Pescuela', '2023-01-05', '19153653125', 'echodunchie@gmail.com', 'Ys', 0, 'Bongsuran', '1', 0, '', 'Married', '', '', '', 123, 368, 1, 'Roman Catholic', 'Fil', 'Male', 'No schooling completed', '', '', 'default.png', 'jorge', '$2y$10$m6TV0uOP5t9VG9tkofl.HeJ3njdP83I4Whg.lcX/1YtteM.set4iO');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `archiveStatus` int(20) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`id`, `username`, `password`, `archiveStatus`, `statusArchive`, `fname`, `mname`, `lname`) VALUES
(17, '0000', '0000', 0, NULL, 'beb', 'capa', 'gabrillo');

-- --------------------------------------------------------

--
-- Table structure for table `tbltax`
--

CREATE TABLE `tbltax` (
  `id` int(11) NOT NULL,
  `Purposes` varchar(220) NOT NULL,
  `fees` varchar(50) NOT NULL,
  `statusArchive` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltax`
--

INSERT INTO `tbltax` (`id`, `Purposes`, `fees`, `statusArchive`) VALUES
(4, 'Barangay Clearance and Certification - Employment', '100', 1),
(5, 'Barangay Clearance and Certification - Residency', '100', 1),
(6, 'Barangay Clearance and Certification - Loan Purposes', '100', 1),
(7, 'Barangay Clearance and Certification - Electrification', '100', 1),
(8, 'Barangay Clearance and Certification - Others', '100', 1),
(9, 'Outdoor Advertisements - Illuminated', '200/year', 1),
(10, 'Outdoor Advertisements - Non - Illuminated', '200/year', 1),
(11, 'Outdoor Advertisements - Short term advertisement(tarpaulin and the like)', '100/month', 1),
(12, 'Business clearance - Sari-Sari Store', '150', 1),
(13, 'Business clearance - Cellphone, Gadget Stores and the like', '150', 1),
(14, 'Business clearance - Computer Shops and the like', '150', 1),
(15, 'Business clearance - Vehicle services, Auto Repair shop and the like', '150', 1),
(16, 'Business clearance - Restaurants, Canteen and the like', '150', 1),
(17, 'Business clearance - Furniture shops, Appliances store and the like', '150', 1),
(18, 'Business clearance - Gasoline Station and the like', '300', 1),
(19, 'Business Clearance - Educational Institution (private)', '300', 1),
(20, 'Business clearance - Private Cemeteries ', '300', 1),
(21, 'Business clearance - Videoke Bars and the like', '300', 1),
(22, 'Business Clearance - Financial Institutions (Loading Companies)', '300', 1),
(23, 'Business clearance - Stock pile of sand and Gravel', '300', 1),
(24, 'Business clearance - Construction Supplies and the like', '300', 1),
(25, 'Business clearance - others', '150', 1),
(26, 'Summon Fee', '100', 1),
(28, 'Certificate to file Action', '100', 1),
(31, 'Blotter Fee', '50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(3, 'felrose', '$2y$10$B8mhJAp/CGp1QRl.TD3thefGur5l3tHXSfSQDAgPhArYzZ74GLKBy', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `descrip` varchar(10000) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `designation`, `descrip`, `img`, `url`, `date`, `status`) VALUES
(1, 'James Smith', 'PR Manager', '', '1190809899user-4-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0'),
(2, 'Jill Peterson', 'Tour Consultant', '', '495717868user-3-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0'),
(3, 'Peter McMillan', 'Travel Agent', '', '1112007742user-2-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0'),
(4, 'Diana Robinson', 'Founder, Owner', '', '696952815user-1-118x118.jpg', NULL, 'Mon 11 Jan 2021', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbstaff`
--
ALTER TABLE `tblbstaff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblcensus`
--
ALTER TABLE `tblcensus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclearance`
--
ALTER TABLE `tblclearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblindigency`
--
ALTER TABLE `tblindigency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmessage`
--
ALTER TABLE `tblmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficial`
--
ALTER TABLE `tblofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresidency`
--
ALTER TABLE `tblresidency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltax`
--
ALTER TABLE `tbltax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblactivityphoto`
--
ALTER TABLE `tblactivityphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblbstaff`
--
ALTER TABLE `tblbstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblcensus`
--
ALTER TABLE `tblcensus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblclearance`
--
ALTER TABLE `tblclearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tblhousehold`
--
ALTER TABLE `tblhousehold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblindigency`
--
ALTER TABLE `tblindigency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=795;

--
-- AUTO_INCREMENT for table `tblmessage`
--
ALTER TABLE `tblmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblofficial`
--
ALTER TABLE `tblofficial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblresidency`
--
ALTER TABLE `tblresidency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbltax`
--
ALTER TABLE `tbltax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

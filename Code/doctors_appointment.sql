-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 02:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web18_xhajdari17`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(50) NOT NULL,
  `app_email` varchar(50) NOT NULL,
  `app_phone` int(15) NOT NULL,
  `doct_id` int(60) NOT NULL,
  `app_date` varchar(25) NOT NULL,
  `app_time` time NOT NULL,
  `app_msg` varchar(500) NOT NULL,
  `isread` int(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL COMMENT '0-Booked,1-Cancle, 2-Visited',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`app_id`, `app_name`, `app_email`, `app_phone`, `doct_id`, `app_date`, `app_time`, `app_msg`, `isread`, `status`, `timestamp`) VALUES
(69, 'Ela', 'ela@gmail.com', 789654, 40, '06.22.2020', '18:03:59', 'hey', 0, 1, '2020-06-23 16:08:15'),
(111, 'Alba', 'Alba@gmail.com', 2147483647, 41, '08/05/2020', '12:00:00', 'Zbardhim dhembesh', 0, 2, '2018-07-20 04:02:02'),
(112, 'Genta', 'genta@gmail.com', 2147483647, 41, '07/29/2020', '11:30:00', 'Need an appointment soon.', 0, 0, '2018-07-28 13:23:09'),
(113, 'Oni', 'oni@gmail.com', 2147483647, 42, '07/29/2020', '11:30:00', 'Hello', 0, 0, '2018-07-28 13:24:50'),
(114, 'Xhesi', '291106776625', 2147483647, 43, '22/8/2018', '11:00:00', 'Hello', 0, 0, '2018-08-21 21:22:35'),
(115, 'Jona', 'jona@hotmail.com', 2147483647, 44, '06/11/2020', '03:15:00', 'How are you?', 0, 0, '2018-08-06 05:04:41'),
(116, 'Dona', 'dona@gmail.com', 2147483647, 45, '06/10/2020', '10:00:00', 'HEY', 0, 0, '2018-08-17 08:16:21'),
(117, 'Besi', 'besi@gmail.com', 2147483647, 46, '02/02/2020', '11:15:00', 'hey', 0, 0, '2018-09-07 11:12:22'),
(118, 'Lona', 'lona@gmail.com', 2147483647, 44, '04/04/2020', '10:45:00', 'Hello', 0, 0, '2018-09-08 08:28:23'),
(119, 'Beni', '2020-06-24 00:47:38', 2147483647, 45, '07/07/2020', '02:00:00', 'hey', 0, 0, '2018-09-09 02:22:07'),
(120, 'Ledi', 'ledi@gmail.com', 2147483647, 43, '08/08/2020', '10:00:00', 'Hii', 0, 0, '2018-09-29 19:53:57'),
(122, 'Soni', 'soni@gmail.com', 89456, 46, '03/05/2020', '18:03:59', 'See you', 1, 1, '2020-06-23 16:05:35'),
(124, 'Klevi', 'klevi@gmail.com', 789654, 42, '06.22.2020', '18:03:59', 'See you!', 0, 1, '2020-06-23 16:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_list`
--

CREATE TABLE `doctor_list` (
  `did` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `speciality` varchar(1000) NOT NULL,
  `fees` decimal(20,0) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `clinic_ids` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_list`
--

INSERT INTO `doctor_list` (`did`, `name`, `image`, `speciality`, `fees`, `description`, `clinic_ids`) VALUES
(40, 'Dr. Nina Hoxha', 'doc10.jpg', 'Orthodontist', '600', 'Generally speaking, orthodontists are concerned with righting misaligned teeth, jaw bones, and other supporting facial structures for both cosmetic and functional reasons. This means they work to improve people’s bites by designing custom oral hardware such as braces, clear dental alignment trays, mouthguards, headgear, retainers, and facemasks that correct developmental issues.', '0'),
(41, 'Dr. Agron Lusha', 'doc1.jpg', 'Periodontist', '1500', 'Gums are the focus of periodontistry, and periodontists are concerned with preventing, diagnosing, and treating various gum issues. This can include treating extreme gum inflammation and pain, diagnosing and treating extreme gum disease (also known as periodontal disease), installing dental implants, and performing cosmetic skin grafting on gums. ', '1,2'),
(42, 'Dr. Nina Visha', 'sdoctor3.jpg', 'Pediatric Dentist', '250', 'Pediatric dentists will guide children and teens through their dental growth and development utilizing their training from infant oral health exams to space management after the premature loss of a primary tooth. They also offer other oral health related care like special counseling on nutrition, advice on teeth grinding, and discouragement of thumb and finger sucking.', '22'),
(43, 'Dr. Vilma Masha', 'doc7.jpg', 'Prosthodontist', '450', 'As their title suggests, prosthodontists are responsible for providing oral prostheses that replace damaged, decayed, or missing teeth. Oral prostheses are false teeth appliances and include crowns, bridges, dentures, tooth implants, and veneers. These teeth replacements are often both cosmetic and functional as they can greatly improve the ability to chew, bite, and speak effectively and safely. ', '23'),
(44, 'Dr. Nora Mala', 'doc8.png', 'Endodontist', '400', 'The inner part of the tooth, which is protected by the tooth’s hard enamel and inner layer of dentin, is found below the gumline and is known as the pulp. It is soft and made up of sensitive living tissue and is the part of the tooth that endodontists focus on. The pulp of the tooth can become damaged, inflamed, or rotten through injury, trauma, or decay and thus needs to be treated or removed. ', '32'),
(45, 'Dr. Alma Myja', 'doc6.jpg', 'General dentist\r\n', '250', 'A general dentist is also known as a family dentist and takes care of your oral health on a regular basis. This is the most common type of dentist and the majority of their work revolves around important preventative oral care. This includes regular dental cleanings, dental X-rays, and educating patients about proper at-home oral care. ', '33'),
(46, 'Dr. Noel Domi', 'doc11.jpg', 'Periodontist', '254', 'Gums are the focus of periodontistry, and periodontists are concerned with preventing, diagnosing, and treating various gum issues. This can include treating extreme gum inflammation and pain, diagnosing and treating extreme gum disease (also known as periodontal disease), installing dental implants, and performing cosmetic skin grafting on gums.', '4');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s-description` varchar(300) NOT NULL,
  `s_price` varchar(100) NOT NULL,
  `service_type` enum('dental_services','cosmetic_dentistry','oral_health') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `s_name`, `s-description`, `s_price`, `service_type`) VALUES
(1, 'Emergency Dental Care', 'khnfv,jdf', 'depends', 'dental_services'),
(2, 'Tooth Extraction', 'heqje dhembi', '3000 ALL', 'dental_services'),
(3, 'Teeth Whitening', 'Zbardhim', '7000 ALL', 'cosmetic_dentistry'),
(4, 'Invisalign', 'Maskerina', '1200-1600 EURO', 'cosmetic_dentistry'),
(5, 'Cavities', 'Karies', '4000 ALL', 'oral_health'),
(6, 'Gum Disease', 'Semundje e misherave te dhembeve', '6000-7000 ALL', 'oral_health'),
(7, 'mbushje', 'Mbushje dhembi', '785', 'dental_services'),
(8, 'mbushje', 'Mbushje dhembi', '785', 'dental_services'),
(9, 'Invisilign', 'Drejtim dhembesh\r\n', '1200', 'dental_services'),
(10, 'mbushje', 'Mbushje dhembi', '785', 'dental_services'),
(11, 'Whitening', 'Zbardhim dhembi', '785', 'dental_services');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fbid` int(11) NOT NULL,
  `fbname` varchar(50) DEFAULT NULL,
  `fbphone` varchar(15) DEFAULT NULL,
  `fbemail` varchar(50) DEFAULT NULL,
  `fbsubject` varchar(150) DEFAULT NULL,
  `fbmessage` varchar(500) DEFAULT NULL,
  `fbproductid` varchar(50) DEFAULT NULL,
  `fbtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fbid`, `fbname`, `fbphone`, `fbemail`, `fbsubject`, `fbmessage`, `fbproductid`, `fbtime`) VALUES
(7, 'Vikas Jain', '123123123', 'neelesh1222@gmail.com', 'test subject', 'erwe', NULL, '2018-05-19 09:14:49'),
(8, 'Neelesh', '123123123', 'nkp@gmail.com', 'testt', 'ttt', NULL, '2019-04-30 03:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logindetails`
--

CREATE TABLE `tbl_logindetails` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pass` varchar(20) DEFAULT NULL,
  `user_type` enum('1-Patient','2-Receptionist','3-Admin','4-Economist','5-Dentist') DEFAULT NULL COMMENT '1-User, 2-Employee, 3-Admin ',
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0-disable, 1-active',
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logindetails`
--

INSERT INTO `tbl_logindetails` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_type`, `status`, `createDate`) VALUES
(6, 'Ina', 'ina@gmail.com', 'ina123', '1-Patient', 1, '2020-05-20 06:32:55'),
(7, 'Tea', 'tea@gmail.com', 'tea123', '1-Patient', 1, '2020-05-04 07:31:30'),
(8, 'tomi', 'tomi@gmail.com', 'tomi123', '1-Patient', 1, '2020-05-12 11:04:59'),
(9, 'Fiorela', 'fiorelai@gmail.com', 'f123', '2-Receptionist', 1, '2020-05-19 07:26:25'),
(10, 'Admin', 'admin@gmail.com', '123', '3-Admin', 1, '2018-05-19 07:47:19'),
(11, 'Nora', 'nora@gmail.com', 'nora123', '5-Dentist', 1, '2019-08-07 14:17:30'),
(41, 'Vilma', 'vilma@gmail.com', 'vilma', '5-Dentist', 1, '2020-06-23 14:51:37'),
(42, 'Bora', 'bora@gmail.com', 'bora123', '5-Dentist', 1, '2019-08-08 12:56:26'),
(44, 'Xhoana', 'xhoana@gmail.com', 'xhoana', '5-Dentist', 1, '0000-00-00 00:00:00'),
(45, 'Noel', 'noel@gmail.com', 'noel123', '5-Dentist', 1, '0000-00-00 00:00:00'),
(46, 'Blina', 'blina@gmail.com', 'blina123', '5-Dentist', 1, '2018-04-25 10:03:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `doctor_list`
--
ALTER TABLE `doctor_list`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `tbl_logindetails`
--
ALTER TABLE `tbl_logindetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_logindetails`
--
ALTER TABLE `tbl_logindetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

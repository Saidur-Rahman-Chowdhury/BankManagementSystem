-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 08:21 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `net_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` char(25) DEFAULT NULL,
  `pwd` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary1`
--

CREATE TABLE `beneficiary1` (
  `benef_id` int(11) NOT NULL,
  `benef_cust_id` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `account_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary2`
--

CREATE TABLE `beneficiary2` (
  `benef_id` int(11) NOT NULL,
  `benef_cust_id` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `account_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `nid_no` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `nearby_branch` varchar(50) DEFAULT NULL,
  `account_no` int(11) DEFAULT NULL,
  `card_no` varchar(20) DEFAULT NULL,
  `pin` int(4) DEFAULT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `card_lock` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `gender`, `dob`, `nid_no`, `email`, `phone_no`, `address`, `branch`, `nearby_branch`, `account_no`, `card_no`, `pin`, `uname`, `pwd`, `approved`, `card_lock`) VALUES
(1, 'Jaqueline', 'Fernadez', 'Male', '0000-00-00', '19992690815000203', 'mdsoad@gmail.com', '+8801681130445', 'Dhaka Bangladesh', 'Banani', 'Banani', 13080432, '1234567812345678', 1234, 'soad12', '1234', 1, 0),
(2, 'Pritthika', 'Dhar', 'Female', '1998-09-02', '12344321', 'pritthikadhar@gmail.com', '+8801725683936', 'D Block, Basundhara', 'Bashundhara', 'Basundhara', 13884791, '1122334455667788', 1234, 'pri_1998', 'pri_1998', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` int(11) NOT NULL,
  `trans_id` int(11) DEFAULT NULL,
  `amount` bigint(20) NOT NULL DEFAULT 0,
  `mobile` varchar(15) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `deli_id` int(11) NOT NULL,
  `job_status` int(11) DEFAULT 0,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `otp` int(11) NOT NULL DEFAULT 4321
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_status` int(11) NOT NULL DEFAULT 0,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`id`, `name`, `branch`, `phone`, `email`, `job_status`, `uname`, `pwd`) VALUES
(2, 'Saidur', 'Banani', '+8801734415134', 'saidur@gmail.com', 1, 'saidur', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `created`) VALUES
(1, 'Hello World !', '2017-09-06 15:45:25'),
(2, 'The First News !', '2017-09-06 15:45:55'),
(3, 'Increasing Interest Rates !', '2017-09-06 15:46:21'),
(4, 'GST on banking', '2017-11-19 16:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `news_body`
--

CREATE TABLE `news_body` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_body`
--

INSERT INTO `news_body` (`id`, `body`) VALUES
(1, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(2, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, 'This is to inform that as of today interest rates will increase by 4.6% on loans and decrease by 5.8% on deposits. Effective immediately. '),
(4, 'This is to inform that GST shall be applied on all usages of :\r\n1. Credit Cards\r\n2. Debit Cards\r\n3. Internet Banking\r\nat a nominal (nationally applied) rate of 18%.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `passbook1`
--

CREATE TABLE `passbook1` (
  `trans_id` int(11) NOT NULL,
  `trans_date` datetime DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook1`
--

INSERT INTO `passbook1` (`trans_id`, `trans_date`, `remarks`, `debit`, `credit`, `balance`) VALUES
(1, '2020-01-09 02:15:41', 'Opening Balance', 0, 11651516, 11651516),
(2, '2021-12-04 23:57:40', 'Opening Balance', 0, 0, 0),
(3, '2021-12-05 00:07:27', 'Cash Deposit', 0, 0, 100),
(4, '2021-12-05 00:07:46', 'Cash Deposit', 0, 0, 1000),
(5, '2021-12-05 00:08:54', 'Cash Deposit', 0, 0, 10000),
(6, '2021-12-05 00:15:28', 'Cash Deposit', 0, 0, 10000),
(7, '2021-12-05 00:16:44', 'Cash Deposit', 0, 0, 10000),
(8, '2021-12-11 01:08:31', 'Cash to Self', 1000, 0, 9000),
(9, '2021-12-11 01:08:43', 'Cash Deposit', 0, 1000, 10000),
(10, '2021-12-11 01:53:07', 'Cash to Self', 1000, 0, 9000),
(11, '2021-12-11 01:54:42', 'Cash to Self', 1000, 0, 8000),
(12, '2021-12-11 01:56:32', 'Cash Deposit', 0, 13100, 21100),
(13, '2021-12-11 14:22:37', 'Cash to Self', 1000, 0, 20100),
(14, '2021-12-11 14:22:44', 'Cash Deposit', 0, 1000, 21100),
(15, '2021-12-12 02:05:24', 'Cash to Self', 1000, 0, 20100),
(16, '2021-12-18 12:22:06', 'Cash Deposit', 0, 1000, 21100),
(17, '2021-12-18 12:26:30', 'Cash Deposit', 0, 1000, 22100),
(18, '2021-12-18 12:27:04', 'Cash Deposit', 0, 1000, 23100),
(19, '2021-12-18 12:40:39', 'Cash Deposit', 0, 1000, 24100),
(20, '2021-12-18 12:42:43', 'Cash Deposit', 0, 1000, 25100),
(21, '2021-12-18 12:43:23', 'Cash Deposit', 0, 1000, 26100),
(22, '2021-12-18 12:43:55', 'Cash Deposit', 0, 1000, 27100),
(23, '2021-12-18 12:45:08', 'Cash Deposit', 0, 1000, 28100),
(24, '2021-12-18 12:45:22', 'Cash Deposit', 0, 1000, 29100),
(25, '2021-12-18 12:53:17', 'Cash Deposit', 0, 1000, 30100),
(26, '2021-12-18 12:57:49', 'Cash to Self', 1000, 0, 29100),
(27, '2021-12-18 12:59:01', 'Cash Deposit', 0, 1000, 30100),
(28, '2021-12-18 12:59:05', 'Cash to Self', 1000, 0, 29100),
(29, '2021-12-18 23:16:55', 'Cash to Self', 1000, 0, 28100),
(30, '2021-12-18 23:20:32', 'Cash to Self', 1000, 0, 27100),
(31, '2021-12-18 23:26:36', 'Cash to Self', 1000, 0, 26100),
(32, '2021-12-18 23:26:56', 'Cash to Self', 1000, 0, 25100),
(33, '2021-12-18 23:36:54', 'Cash to Self', 1000, 0, 24100),
(34, '2021-12-18 23:43:22', 'Cash Deposit', 0, 13100, 37200),
(35, '2021-12-18 23:43:27', 'Cash to Self', 1000, 0, 36200),
(36, '2021-12-18 23:50:09', 'Cash to Self', 1000, 0, 35200),
(37, '2021-12-19 00:19:54', 'Cash to Self', 1000, 0, 34200),
(38, '2021-12-19 01:08:40', 'Cash to Self', 1000, 0, 33200),
(39, '2021-12-19 01:09:08', 'Cash to Self', 1000, 0, 32200),
(40, '2021-12-19 01:31:17', 'Cash to Self', 1000, 0, 31200),
(41, '2021-12-25 01:49:43', 'Cash to Self', 1000, 0, 30200),
(42, '2021-12-25 01:51:06', 'Cash to Self', 1000, 0, 29200),
(43, '2021-12-25 01:51:23', 'Cash to Self', 1000, 0, 28200),
(44, '2021-12-25 01:51:49', 'Cash to Self', 1000, 0, 27200),
(45, '2021-12-25 02:56:48', 'Cash to Self', 1000, 0, 26200),
(46, '2021-12-25 02:58:21', 'Cash to Self', 1000, 0, 25200),
(47, '2021-12-25 03:02:50', 'Cash to Self', 1000, 0, 24200),
(48, '2021-12-26 00:16:39', 'Cash Deposit', 0, 1000, 25200),
(49, '2021-12-26 00:16:47', 'Cash to Self', 1000, 0, 24200),
(50, '2021-12-26 00:18:02', 'Cash to Self', 1000, 0, 23200),
(51, '2021-12-26 00:18:25', 'Cash to Self', 1000, 0, 22200),
(52, '2021-12-26 00:27:45', 'Cash to Self', 1000, 0, 21200),
(53, '2021-12-26 00:29:51', 'Cash to Self', 1000, 0, 20200),
(54, '2021-12-26 00:30:06', 'Cash to Self', 2000, 0, 18200),
(55, '2022-01-05 21:07:54', 'Mobile Recharge', 100, 0, 18100),
(56, '2022-01-05 21:08:15', 'Mobile Recharge', 100, 0, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `passbook2`
--

CREATE TABLE `passbook2` (
  `trans_id` int(11) NOT NULL,
  `trans_date` datetime DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook2`
--

INSERT INTO `passbook2` (`trans_id`, `trans_date`, `remarks`, `debit`, `credit`, `balance`) VALUES
(1, '2021-12-26 00:33:37', 'Opening Balance', 0, 0, 0),
(2, '2021-12-26 00:35:46', 'Cash Deposit', 0, 0, 20000),
(3, '2021-12-26 00:41:36', 'Cash to Self', 1000, 0, 19000),
(4, '2021-12-26 00:55:16', 'Cash to Self', 1000, 0, 18000),
(5, '2021-12-26 01:50:40', 'Cash to Self', 0, 0, 18000),
(6, '2021-12-26 01:51:34', 'Cash to Self', 1000, 0, 17000),
(7, '2021-12-26 01:55:07', 'Cash to Self', 0, 0, 17000),
(8, '2021-12-26 01:58:09', 'Cash to Self', 2000, 0, 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  ADD PRIMARY KEY (`benef_id`),
  ADD UNIQUE KEY `benef_cust_id` (`benef_cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `beneficiary2`
--
ALTER TABLE `beneficiary2`
  ADD PRIMARY KEY (`benef_id`),
  ADD UNIQUE KEY `benef_cust_id` (`benef_cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `aadhar_no` (`nid_no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_body`
--
ALTER TABLE `news_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passbook1`
--
ALTER TABLE `passbook1`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `passbook2`
--
ALTER TABLE `passbook2`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beneficiary1`
--
ALTER TABLE `beneficiary1`
  MODIFY `benef_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiary2`
--
ALTER TABLE `beneficiary2`
  MODIFY `benef_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `deliveryman`
--
ALTER TABLE `deliveryman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_body`
--
ALTER TABLE `news_body`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passbook1`
--
ALTER TABLE `passbook1`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `passbook2`
--
ALTER TABLE `passbook2`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 09:56 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online shopping`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `average` (IN `average` INT)  NO SQL
select sum(amount) into average from cart_details$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Divya', '1234567'),
('Gowsiya', '7654321');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `purchaser_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`purchaser_id`, `product_name`, `amount`) VALUES
(456, 'bangles', 344),
(30, 'dress', 500),
(11, 'ear phone', 500),
(30, 'rings', 600),
(432, 'watch', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `purchaser_name` varchar(20) NOT NULL,
  `purchaser_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`purchaser_name`, `purchaser_id`, `password`, `mobile_no`, `address`) VALUES
('qswd', 0, '5674', 89765456, 'gjkm'),
('cit', 11, '11', 1234, 'sdf'),
('qswd', 20, '68975', 89765456, 'gjkm'),
('divya', 30, 'divya', 56789, 'erty'),
('xyz', 123, '123', 56789, 'sdf'),
('qswd', 200, '5674', 89765456, 'gjkm'),
('preksha', 203, 'preksha', 9909893256, 'Tumkur'),
('aaaa', 500, '123456789', 987654321, 'dfgtkjigt'),
('ghyt', 700, '34567', 6789765456, 'hjy njk ghn'),
('abcd', 8575, '12345', 786546789, 'ng bhjgf hjj');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `product_name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`product_name`, `amount`, `percentage`) VALUES
('bag', 500, 450),
('ear phone', 500, 450),
('kurtha', 1000, 900),
('perfume', 500, 450),
('ring', 1000, 900),
('watch', 900, 810);

--
-- Triggers `offers`
--
DELIMITER $$
CREATE TRIGGER `percentage` BEFORE INSERT ON `offers` FOR EACH ROW set new.percentage=new.amount*0.9
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_name` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_name`, `product_id`, `price`) VALUES
('bangles', 21, 344),
('dress', 124, 600),
('ear rings', 20, 300),
('perfume', 25, 500),
('shoe', 19, 600),
('watch', 10, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `purchaser_login`
--

CREATE TABLE `purchaser_login` (
  `purchaser_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaser_login`
--

INSERT INTO `purchaser_login` (`purchaser_id`, `password`) VALUES
(1234, '56789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`password`) USING BTREE;

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_name`),
  ADD KEY `foreign key` (`product_name`,`purchaser_id`) USING BTREE;

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`purchaser_id`,`password`) USING BTREE;

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`product_name`,`amount`,`percentage`) USING BTREE,
  ADD KEY `foreign key` (`product_name`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_name`,`product_id`);

--
-- Indexes for table `purchaser_login`
--
ALTER TABLE `purchaser_login`
  ADD PRIMARY KEY (`purchaser_id`,`password`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

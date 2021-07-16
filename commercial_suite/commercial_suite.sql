-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 06:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commercial_suite`
--
CREATE DATABASE IF NOT EXISTS `commercial_suite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `commercial_suite`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pwd`) VALUES
('admin', '123'),
('owner', '123');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_title` varchar(30) NOT NULL,
  `shop_o_id` int(11) NOT NULL,
  `add_desc` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_on` datetime NOT NULL,
  `add_status` varchar(30) NOT NULL,
  PRIMARY KEY (`add_id`),
  KEY `shop_o_id` (`shop_o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`add_id`, `add_title`, `shop_o_id`, `add_desc`, `image`, `posted_on`, `add_status`) VALUES
(1, 'star fancy', 3, 'jewellery and access', '79728-p1.jpg', '2019-03-27 19:19:20', 'REQUESTED'),
(2, 'ss groups', 3, 'wholesale shoping', '15873-g1.jpg', '2019-03-27 19:21:19', 'REQUESTED'),
(3, 'deesa medicals', 3, 'chemistis and druggist', '70875-g7.jpg', '2019-03-27 19:22:17', 'REQUESTED'),
(4, 'star fancy', 3, 'branded only and fixed rate', '53657-banner2.jpg', '2019-03-28 15:06:19', 'REQUESTED'),
(5, 'mn and groups', 3, 'traders and retailers', '22547-banner2.jpg', '2019-03-28 15:07:10', 'REQUESTED'),
(6, 'jwelone', 3, 'all range of gold,diamond and platinum collections.', '17160-footer.jpg', '2019-03-28 18:48:31', 'REQUESTED');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE IF NOT EXISTS `apartment` (
  `apartment_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_name` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `apartment_address` varchar(80) NOT NULL,
  `apartment_contact` bigint(20) NOT NULL,
  `builder_name` varchar(30) NOT NULL,
  `apartment_desc` longtext NOT NULL,
  `num_floor` int(11) NOT NULL,
  `num_slot_parking` int(11) NOT NULL,
  PRIMARY KEY (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_id`, `apartment_name`, `image`, `apartment_address`, `apartment_contact`, `builder_name`, `apartment_desc`, `num_floor`, `num_slot_parking`) VALUES
(24, 'skyhigh', '42312-g6.jpg', 'kankanady', 7894561230, 'raj    ', 'located near father muller hospital    ', 5, 20);

-- --------------------------------------------------------

--
-- Table structure for table `apartment_staff`
--

CREATE TABLE IF NOT EXISTS `apartment_staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `staff_no` varchar(30) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `staff_type` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `staff_image` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `staff_status` varchar(30) NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `apartment_staff`
--

INSERT INTO `apartment_staff` (`staff_id`, `apartment_id`, `staff_no`, `staff_name`, `contact`, `staff_type`, `address`, `gender`, `staff_image`, `salary`, `doj`, `dob`, `age`, `staff_status`) VALUES
(1, 24, 'ST01', 'cirus', 9900887763, 'WatchMan', 'valencia kankanady', 'male', '22662-53842-team1.jpg', 250, '2018-12-05', '1990-01-09', 29, 'assigned'),
(2, 24, 'ST02', 'amalash', 7656789438, 'Maid', 'kankanady', 'male', '64911-team1.jpg', 250.5, '2010-06-22', '1989-02-20', 30, 'assigned'),
(3, 24, 'ST03', 'raj', 7656789438, 'Manager', 'valencia', 'male', '85359-team1.jpg', 300, '2009-06-22', '1987-01-20', 32, 'assigned'),
(4, 24, 'ST04', 'heerapa', 8989745412, 'Maid', 'neermarga manglore', 'male', '48923-team3.jpg', 250.5, '2016-08-06', '1990-04-15', 28, 'assigned'),
(6, 24, 'ST06', 'harish', 4512078541, 'WatchMan', 'neermarga-mangalore', 'male', '83423-team5.jpg', 275, '2017-10-27', '1985-10-26', 33, 'assigned'),
(9, 24, 'ST07', 'rama', 7656789438, 'Maid', 'sedrfgtyuj', 'male', '29351-team1.jpg', 250.5, '2019-08-23', '1998-07-15', 20, 'assigned');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_id` int(11) NOT NULL,
  `book_by` varchar(50) NOT NULL,
  `book_for` date NOT NULL,
  `booked_on` date NOT NULL,
  `from_time` varchar(10) NOT NULL,
  `to_time` varchar(10) NOT NULL,
  `book_comment` longtext NOT NULL,
  `event` varchar(30) NOT NULL,
  `book_status` varchar(30) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `hall_id`, `book_by`, `book_for`, `booked_on`, `from_time`, `to_time`, `book_comment`, `event`, `book_status`) VALUES
(2, 9, 'riya', '2019-03-15', '2019-03-13', '12:00', '16:00', 'cfvgbhnj', 'Birthday Party', 'booked'),
(6, 9, 'Rochie', '2019-03-20', '2019-03-13', '12:00', '17:00', 'dcfvgbhyujio', 'Naming Ceremony', 'booked'),
(7, 9, 'Veena', '2019-03-30', '2019-03-26', '08:00', '21:00', 'sfsfrdyhtu', 'Birthday Party', 'booked'),
(8, 9, 'Veena', '2019-03-30', '2019-03-27', '11:00', '17:00', 'dsfrgthyjhgbv', 'Birthday Party', 'booked'),
(10, 9, 'SUMA', '2019-04-04', '2019-03-27', '09:00', '19:00', 'gytfghjuujnm', 'Birthday Party', 'booked'),
(11, 9, 'Rochie', '2019-04-04', '2019-03-31', '20:00', '23:00', '15th birthday of suma', 'Birthday Party', 'booked'),
(12, 9, 'ranger', '2019-04-05', '2019-03-31', '09:00', '12:00', 'dfceegggth', 'Naming Ceremony', 'booked'),
(13, 9, 'ranger', '2019-04-05', '2019-04-01', '18:00', '22:00', '16th birthday of meera', 'Birthday Party', 'booked'),
(14, 9, 'Rochie', '2019-04-20', '2019-04-11', '12:00', '17:00', 'xdfcgvbhmn', 'Birthday Party', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'SUMA', 'suma@gmail.com', 'fgthyuio'),
(2, 'frgthyu', 'riyhar26@gmail.com', 'dert5y6u78i9oooijhg'),
(3, 'vanak', 'vk@gmail.com', 'location?'),
(4, 'vanak', 'vk@gmail.com', 'location?');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `event_title` varchar(30) NOT NULL,
  `event_desc` longtext NOT NULL,
  `venue` varchar(30) NOT NULL,
  `event_date` datetime NOT NULL,
  `posted_on` date NOT NULL,
  `event_status` varchar(30) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `apartment_id` (`apartment_id`),
  KEY `apartment_id_2` (`apartment_id`),
  KEY `apartment_id_3` (`apartment_id`),
  KEY `apartment_id_4` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `apartment_id`, `event_title`, `event_desc`, `venue`, `event_date`, `posted_on`, `event_status`) VALUES
(1, 24, 'asd', 'farwell', 'morgans gate', '2019-03-22 12:00:00', '2019-03-07', 'posted'),
(2, 24, 'conference', 'officers and vips', 'mallikatte', '2019-01-01 09:00:00', '2019-03-28', 'posted'),
(3, 24, 'conference', 'officers and vips', 'mallikatte', '2019-01-01 09:00:00', '2019-03-28', 'posted');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE IF NOT EXISTS `floor` (
  `floor_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `total_shop` int(11) NOT NULL,
  `floor_status` varchar(20) NOT NULL,
  PRIMARY KEY (`floor_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`floor_id`, `apartment_id`, `floor_no`, `total_shop`, `floor_status`) VALUES
(5, 24, 1, 3, 'available'),
(6, 24, 0, 3, 'available'),
(7, 24, 2, 7, 'available'),
(8, 24, 4, 9, 'available'),
(9, 24, 3, 5, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `hall_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `hall_name` varchar(20) NOT NULL,
  `hall_type` varchar(20) NOT NULL,
  `capacity` int(20) NOT NULL,
  `hall_desc` longtext NOT NULL,
  `per_hour_charges` double NOT NULL,
  PRIMARY KEY (`hall_id`),
  KEY `apartment_id` (`apartment_id`),
  KEY `apartment_id_2` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `apartment_id`, `hall_name`, `hall_type`, `capacity`, `hall_desc`, `per_hour_charges`) VALUES
(9, 24, 'hawai', 'AC', 500, 'dj''s are not allowed after 10:30. and function exceeding the booked time costs rs.500 per each half an hour', 500);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `maintenance_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `purchase_charge` double NOT NULL,
  `per_sq_feet_charge` double NOT NULL,
  `up_date` date NOT NULL,
  PRIMARY KEY (`maintenance_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`maintenance_id`, `apartment_id`, `purchase_charge`, `per_sq_feet_charge`, `up_date`) VALUES
(9, 24, 20.5, 10.5, '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_bill`
--

CREATE TABLE IF NOT EXISTS `maintenance_bill` (
  `mbill_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `bill_date` date NOT NULL,
  `month` varchar(15) NOT NULL,
  `shop_no` varchar(30) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `total_area` varchar(20) NOT NULL,
  `per_sq_feet` double NOT NULL,
  `ele_new_read` double NOT NULL,
  `ele_old_read` double NOT NULL,
  `total_read` double NOT NULL,
  `rate_per_unit` double NOT NULL,
  `maintenance_charge` double NOT NULL,
  `ele_charge` double NOT NULL,
  `water_charge` double NOT NULL,
  `other_charge` double NOT NULL,
  `old_bal` double NOT NULL,
  `total_amt` double NOT NULL,
  `maintenance_status` varchar(30) NOT NULL DEFAULT 'not_generated',
  PRIMARY KEY (`mbill_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `maintenance_bill`
--

INSERT INTO `maintenance_bill` (`mbill_id`, `shop_id`, `bill_no`, `bill_date`, `month`, `shop_no`, `shop_name`, `total_area`, `per_sq_feet`, `ele_new_read`, `ele_old_read`, `total_read`, `rate_per_unit`, `maintenance_charge`, `ele_charge`, `water_charge`, `other_charge`, `old_bal`, `total_amt`, `maintenance_status`) VALUES
(6, 11, '18001', '2019-03-30', 'February', 'SHOP101', 'reliance', '689', 10.5, 1677, 1577, 100, 10.7, 7234.5, 1070, 90, 0, 0, 8394.5, 'paid'),
(7, 12, '18002', '2019-03-31', 'February', 'SHOP102', 'toy shop', '189.00', 10.5, 1677, 1577, 100, 10.7, 1984.5, 1070, 90, 0, 0, 3144.5, 'paid'),
(8, 11, '18003', '2019-04-07', 'March', 'SHOP101', 'reliance', '689', 10.5, 1677, 1577, 100, 0, 7234.5, 1070, 90, 10, 0, 8414.5, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE IF NOT EXISTS `parking` (
  `park_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `vehicle_number` varchar(15) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`park_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`park_id`, `apartment_id`, `vehicle_number`, `check_in`, `check_out`, `status`) VALUES
(55, 24, 'KA19MD5419', '2019-03-30 10:11:24', '2019-03-30 10:11:29', 'checkout'),
(56, 24, 'KA19EZ6886', '2019-03-27 10:12:10', '2019-03-27 19:27:21', 'checkout'),
(57, 24, 'tn19aj1239', '2019-03-28 15:08:15', '2019-03-28 16:31:04', 'checkout'),
(58, 24, 'ka23ta2010', '2019-03-28 15:08:39', '2019-03-28 21:32:03', 'checkout'),
(59, 24, 'ka19cm0420', '2019-03-28 15:08:56', '2019-03-28 16:31:39', 'checkout'),
(60, 24, 'ka12ha23', '2019-03-28 15:09:11', '2019-03-28 19:31:52', 'checkout'),
(61, 24, 'KA19MD5419', '2019-03-29 09:30:19', '2019-03-29 09:30:30', 'checkout'),
(62, 24, 'KA19EE9490', '2019-03-16 09:32:43', '2019-03-16 21:33:00', 'checkout'),
(63, 24, 'KA19EE9490', '2019-03-29 10:07:19', '0000-00-00 00:00:00', 'checkin'),
(64, 24, 'KA19MD5419', '2019-03-31 16:24:30', '0000-00-00 00:00:00', 'checkin'),
(65, 24, 'KA19EZ6886', '2019-03-31 16:24:40', '2019-03-31 16:24:51', 'checkout'),
(66, 24, 'KA19EE9490', '2019-03-31 16:24:47', '0000-00-00 00:00:00', 'checkin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_o_id` int(11) NOT NULL,
  `paid_month` varchar(30) NOT NULL,
  `paid_for` varchar(30) NOT NULL,
  `paid_amt` double NOT NULL,
  `balance` double NOT NULL,
  `paid_date` date NOT NULL,
  `pay_status` varchar(30) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `shop_o_id` (`shop_o_id`),
  KEY `shop_id` (`shop_o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `shop_o_id`, `paid_month`, `paid_for`, `paid_amt`, `balance`, `paid_date`, `pay_status`) VALUES
(1, 3, 'March', 'RENT', 3000, 21000, '2019-04-08', 'paid'),
(2, 3, 'March', 'MAINTENANCE', 8000, 394.5, '2019-04-11', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `sent_by` varchar(30) NOT NULL,
  `query` longtext NOT NULL,
  `sent_date` datetime NOT NULL,
  `query_status` varchar(20) NOT NULL,
  `reply` longtext NOT NULL,
  `reply_date` datetime NOT NULL,
  PRIMARY KEY (`q_id`),
  KEY `shop_o_id` (`apartment_id`),
  KEY `shop_o_id_2` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`q_id`, `apartment_id`, `sent_by`, `query`, `sent_date`, `query_status`, `reply`, `reply_date`) VALUES
(3, 24, 'reliance', 'sdefrgthy', '2019-03-25 19:11:26', 'replied', 'dzsaffjjh', '2019-03-25 19:15:25'),
(4, 24, 'reliance', 'lift problem?', '2019-03-27 19:24:36', 'sent', '', '0000-00-00 00:00:00'),
(5, 24, 'reliance', 'workers shortage?', '2019-03-28 18:49:30', 'sent', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_o_id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `review` longtext NOT NULL,
  `review_date` date NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `shop_o_id` (`shop_o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `shop_o_id`, `uname`, `review`, `review_date`) VALUES
(7, 3, 'max', 'good facilities', '2019-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `floor` varchar(10) NOT NULL,
  `shop_no` varchar(20) NOT NULL,
  `sq-feet` varchar(10) NOT NULL,
  `shop_cost` double NOT NULL,
  `shop_status` varchar(20) NOT NULL,
  PRIMARY KEY (`shop_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `apartment_id`, `floor`, `shop_no`, `sq-feet`, `shop_cost`, `shop_status`) VALUES
(11, 24, '1', 'SHOP101', '689', 14124.5, 'allocated'),
(12, 24, '1', 'SHOP102', '189.00', 3496.5, 'allocated'),
(13, 24, '3', 'SHOP301', '45', 562.5, 'allocated'),
(14, 24, '1', 'SHOP103', '200', 3700, 'allocated'),
(15, 24, '3', 'SHOP302', '100', 1250, 'allocated'),
(16, 24, '3', 'SHOP303', '78', 975, 'available'),
(17, 24, '4', 'SHOP401', '456', 2052, 'available'),
(18, 24, '2', 'SHOP201', '741', 12226.5, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `shop_owners`
--

CREATE TABLE IF NOT EXISTS `shop_owners` (
  `shop_o_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `shop_type` varchar(30) NOT NULL,
  `shop_name` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `owner_contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `shop_cat` varchar(30) NOT NULL,
  `other_info` varchar(20) NOT NULL,
  `occ_date` date NOT NULL,
  `shop_desc` longtext NOT NULL,
  `con_enddate` date NOT NULL,
  `shop_status` varchar(20) NOT NULL,
  `notify` varchar(20) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`shop_o_id`),
  KEY `shop_id` (`shop_id`),
  KEY `shop_id_2` (`shop_id`),
  KEY `shop_id_3` (`shop_id`),
  KEY `shop_id_4` (`shop_id`),
  KEY `shop_id_5` (`shop_id`),
  KEY `shop_id_6` (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shop_owners`
--

INSERT INTO `shop_owners` (`shop_o_id`, `shop_id`, `shop_type`, `shop_name`, `owner`, `owner_contact`, `email`, `pwd`, `shop_cat`, `other_info`, `occ_date`, `shop_desc`, `con_enddate`, `shop_status`, `notify`) VALUES
(3, 11, 'RENT', 'reliance', 'marterd', 8762714189, 'max@gmail.com', '123', 'Showroom', '', '2019-02-20', '     commercial only', '2019-03-30', 'occupied', 'notified'),
(4, 12, 'OWNED', 'toy shop', 'tom', 6364679663, 'ichi@gmail.com', 'ichitha', 'Showroom', '', '2017-10-18', 'toys from age 3 to 9', '2019-04-04', 'occupied', 'no'),
(5, 14, 'OWNED', 'happy feet', 'riya', 9480346552, 'riya@gmail.com', 'riya', 'Showroom', '', '2011-09-25', 'avaliable all type of foot wear to all type of people', '2019-04-08', 'occupied', 'no'),
(6, 15, 'LEASE', 'dress palace', 'sithara', 8762714189, 'sith@gmail.com', 'sithu', 'Showroom', '', '2014-07-25', 'avaliable all kind of dress materials', '2019-05-05', 'occupied', 'no'),
(7, 13, 'OWNED', 'food kingdom', 'rownak', 6478120365, 'ro@gmail.com', 'food', 'Others', 'hotel', '2017-08-04', 'indian,chinese,tandoori dishes are avaliable', '2019-08-20', 'occupied', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `shop_rent`
--

CREATE TABLE IF NOT EXISTS `shop_rent` (
  `shop_r_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_o_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `agree_type` varchar(30) NOT NULL,
  `per_month_rent` double NOT NULL,
  `total_lease` double NOT NULL,
  `advance` double NOT NULL,
  `agree_sdate` date NOT NULL,
  `agree_edate` date NOT NULL,
  PRIMARY KEY (`shop_r_id`),
  KEY `shop_id` (`shop_o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `shop_rent`
--

INSERT INTO `shop_rent` (`shop_r_id`, `shop_o_id`, `name`, `contact`, `email`, `agree_type`, `per_month_rent`, `total_lease`, `advance`, `agree_sdate`, `agree_edate`) VALUES
(5, 3, 'max', 8765434564, 'max@gmail.com', 'RENT', 24000, 0, 30000, '2019-02-27', '2020-04-04'),
(6, 6, 'SANDESH', 7458961230, 'satr@gmail.com', 'LEASE', 0, 20450, 30000, '2016-10-05', '2021-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE IF NOT EXISTS `staff_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`attendance_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`attendance_id`, `staff_id`, `date_time`, `status`) VALUES
(59, 1, '2019-03-25 10:11:31', 'present'),
(60, 3, '2019-03-25 10:11:38', 'present'),
(61, 1, '2019-03-25 22:17:01', 'present'),
(63, 2, '2019-03-25 10:57:59', 'absent'),
(64, 1, '2019-03-27 19:27:06', 'absent'),
(65, 2, '2019-03-27 19:27:06', 'absent'),
(66, 3, '2019-03-27 19:27:06', 'absent'),
(67, 2, '2019-03-28 15:07:55', 'absent'),
(68, 1, '2019-03-28 15:07:55', 'absent'),
(69, 3, '2019-03-28 15:07:55', 'absent'),
(70, 4, '2019-03-28 15:07:55', 'absent'),
(71, 1, '2019-03-16 09:33:16', 'present'),
(72, 3, '2019-03-16 09:33:19', 'present'),
(73, 6, '2019-03-16 09:33:22', 'present'),
(74, 1, '2019-03-16 21:33:41', 'present'),
(75, 2, '2019-03-16 21:33:44', 'absent'),
(76, 4, '2019-03-16 21:33:44', 'absent'),
(77, 1, '2019-03-29 09:34:02', 'present'),
(78, 4, '2019-03-29 09:34:21', 'present'),
(79, 1, '2019-03-29 10:11:40', 'present'),
(80, 3, '2019-03-29 10:11:45', 'present'),
(81, 3, '2019-03-29 21:15:27', 'present'),
(87, 1, '2019-03-31 10:35:45', 'present'),
(88, 3, '2019-03-31 10:37:55', 'present'),
(90, 2, '2019-03-31 16:56:53', 'absent'),
(91, 4, '2019-03-31 16:56:53', 'absent'),
(92, 9, '2019-03-31 16:56:53', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `staff_day_salary`
--

CREATE TABLE IF NOT EXISTS `staff_day_salary` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `per_day_salary` double NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`sal_id`),
  KEY `staff_id` (`apartment_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `staff_day_salary`
--

INSERT INTO `staff_day_salary` (`sal_id`, `apartment_id`, `type`, `per_day_salary`, `status`) VALUES
(9, 24, 'Manager', 300, 'FIXED'),
(10, 24, 'Maid', 250.5, 'FIXED'),
(11, 24, 'WatchMan', 275, 'FIXED');

-- --------------------------------------------------------

--
-- Table structure for table `staff_salary`
--

CREATE TABLE IF NOT EXISTS `staff_salary` (
  `salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `paid_leaves` int(11) NOT NULL,
  `present` varchar(10) NOT NULL,
  `absent` varchar(10) NOT NULL,
  `deduction_days` int(11) NOT NULL,
  `deduction` double NOT NULL,
  `total_sal` double NOT NULL,
  `sal_no` varchar(30) NOT NULL,
  PRIMARY KEY (`salary_id`),
  KEY `apartment_id` (`staff_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `staff_salary`
--

INSERT INTO `staff_salary` (`salary_id`, `staff_id`, `month`, `paid_leaves`, `present`, `absent`, `deduction_days`, `deduction`, `total_sal`, `sal_no`) VALUES
(1, 1, '03', 2, '2', '0', 0, 0, 7750, 'SL001'),
(2, 2, '03', 2, '0', '1', 0, 0, 7765.5, 'SL002'),
(3, 3, '03', 2, '1', '0', 0, 0, 9300, 'SL003'),
(4, 4, '03', 2, '1', '2', 0, 0, 7765.5, 'SL004'),
(5, 6, '03', 2, '1', '0', 0, 0, 8525, 'SL005'),
(6, 9, '03', 2, '0', '0', 0, 0, 7765.5, 'SL006');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `apartment_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `apartment_id` (`apartment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `apartment_id`, `username`, `pwd`) VALUES
(2, 24, 'manager', '123');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `from_time` varchar(10) NOT NULL,
  `to_time` varchar(10) NOT NULL,
  `duty` varchar(150) NOT NULL,
  `work_status` varchar(30) NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`work_id`),
  KEY `staff_id` (`staff_id`),
  KEY `staff_id_2` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `staff_id`, `from_time`, `to_time`, `duty`, `work_status`, `assign_date`) VALUES
(2, 2, '09:00', '18:30', 'sweeping', 'assigned', '2019-03-01'),
(3, 1, '08:00', '20:00', 'DAY SHIFT', 'assigned', '2019-03-31'),
(4, 3, '09:00', '20:00', 'managing complex', 'assigned', '2019-03-03'),
(5, 4, '09:00', '17:00', 'cleaning', 'assigned', '2019-03-31'),
(6, 6, '20:00', '08:00', 'night shift', 'assigned', '2019-03-31'),
(9, 9, '06:00', '18:00', 'cleaning', 'assigned', '2019-03-30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`shop_o_id`) REFERENCES `shop_owners` (`shop_o_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `apartment_staff`
--
ALTER TABLE `apartment_staff`
  ADD CONSTRAINT `apartment_staff_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `floor`
--
ALTER TABLE `floor`
  ADD CONSTRAINT `floor_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `hall_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance_bill`
--
ALTER TABLE `maintenance_bill`
  ADD CONSTRAINT `maintenance_bill_ibfk_2` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parking`
--
ALTER TABLE `parking`
  ADD CONSTRAINT `parking_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`shop_o_id`) REFERENCES `shop_owners` (`shop_o_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`shop_o_id`) REFERENCES `shop_owners` (`shop_o_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_owners`
--
ALTER TABLE `shop_owners`
  ADD CONSTRAINT `shop_owners_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_rent`
--
ALTER TABLE `shop_rent`
  ADD CONSTRAINT `shop_rent_ibfk_1` FOREIGN KEY (`shop_o_id`) REFERENCES `shop_owners` (`shop_o_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD CONSTRAINT `staff_attendance_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `apartment_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_day_salary`
--
ALTER TABLE `staff_day_salary`
  ADD CONSTRAINT `staff_day_salary_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_salary`
--
ALTER TABLE `staff_salary`
  ADD CONSTRAINT `staff_salary_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `apartment_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`apartment_id`) REFERENCES `apartment` (`apartment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `apartment_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

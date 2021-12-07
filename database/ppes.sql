-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 07:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppes`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(407, 'Jonremus', '2016-12-11 09:04:25', 'Add Department Avatar DC'),
(408, 'Jonremus', '2016-12-11 10:35:57', 'Return Item  hp to location id 17'),
(409, 'Jonremus', '2016-12-11 11:54:25', 'Return Item  linovo to location id 18'),
(410, 'Jonremus', '2016-12-11 14:31:06', 'Return Item  acer to location id 19'),
(411, '', '2016-12-11 15:08:33', 'Add Client User oting'),
(412, '', '2016-12-11 15:32:21', 'Add Client User oting'),
(413, '', '2016-12-11 15:41:36', 'Edit Technical User oting'),
(414, '', '2016-12-11 15:41:42', 'Edit Technical User oting1'),
(415, '', '2016-12-11 16:03:41', 'Add System User oting'),
(416, '', '2016-12-11 16:10:57', 'Edit system User Jon Remus1'),
(417, '', '2016-12-11 16:11:10', 'Edit system User Jon Remus'),
(418, '', '2016-12-11 16:11:49', 'Add System User oting'),
(419, 'Jonremus', '2016-12-11 17:50:41', 'Return Item  hp to location id 17'),
(420, 'Jonremus', '2016-12-11 17:59:04', 'Return Item  linovo to location id 19'),
(421, 'Jonremus', '2016-12-13 14:20:53', 'Return Item  hp to location id 21'),
(422, 'Jonremus', '2016-12-18 12:25:41', 'Return Item  hp to location id 17'),
(423, 'Jonremus', '2016-12-18 12:35:08', 'Return Item  linovo to location id 19'),
(424, 'Jonremus', '2016-12-18 12:40:19', 'Return Item  linovo to location id 17'),
(425, 'Jonremus', '2016-12-18 12:45:57', 'Return Item  acer to location id 21'),
(426, 'Jonremus', '2016-12-18 13:52:03', 'Return Item  hp to location id 17'),
(427, 'Jonremus', '2016-12-18 14:18:26', 'Return Item  hp to location id 21'),
(428, 'Jonremus', '2016-12-18 14:19:51', 'Return Item  linovo to location id 18'),
(429, 'Jonremus', '2016-12-18 14:25:50', 'Return Item  linovo to location id 18'),
(430, 'Jonremus', '2016-12-18 14:26:15', 'Return Item  acer to location id 19'),
(431, 'Jonremus', '2016-12-18 14:32:41', 'Return Item  acer to location id 21'),
(432, 'Jonremus', '2016-12-23 11:00:17', 'Return Item  hp to location id 19'),
(433, 'Jonremus', '2016-12-23 11:04:50', 'Return Item  linovo to location id 18'),
(434, 'Jonremus', '2016-12-23 13:09:41', 'Return Item  hp to location id 17'),
(435, 'Jonremus', '2016-12-23 14:01:46', 'Return Item  hp to location id 21'),
(436, 'Jonremus', '2016-12-23 14:51:01', 'Return Item  hp to location id 17'),
(437, 'Jonremus', '2016-12-23 14:54:24', 'Return Item  hp to location id 18'),
(438, 'Jonremus', '2016-12-23 14:57:27', 'Return Item  hp to location id 21'),
(439, 'Jonremus', '2016-12-23 14:59:43', 'Return Item  linovo to location id 21'),
(440, 'Jonremus', '2016-12-23 14:59:50', 'Return Item  hp to location id 18'),
(441, 'Jonremus', '2016-12-23 15:23:52', 'Return Item  linovo to location id 17'),
(442, 'Jonremus', '2016-12-28 09:38:12', 'Return Item  hp to location id 18'),
(443, 'Jonremus', '2016-12-28 09:44:18', 'Return Item  acer to location id 21'),
(444, 'Jonremus', '2016-12-28 09:55:05', 'Return Item  hp to location id 19'),
(445, 'Jonremus', '2016-12-28 09:55:12', 'Return Item  acer to location id 17'),
(446, 'Jonremus', '2016-12-28 09:57:53', 'Return Item  acer to location id 19'),
(447, 'Jonremus', '2016-12-28 09:59:30', 'Return Item  hp to location id 17'),
(448, 'Jonremus', '2016-12-28 10:30:34', 'Return Item  hp to location id 17'),
(449, 'Jonremus', '2016-12-28 10:31:28', 'Return Item  linovo to location id 19'),
(450, 'Jonremus', '2016-12-28 13:51:37', 'Return Item  acer to location id 17'),
(451, 'Jonremus', '2016-12-28 13:52:52', 'Return Item  hp to location id 21'),
(452, 'Jonremus', '2016-12-29 09:01:18', 'Add device Detail id '),
(453, 'Jonremus', '2016-12-29 09:01:40', 'Add device Detail id '),
(454, 'Jonremus', '2016-12-29 09:02:02', 'Add device Detail id '),
(455, 'Jonremus', '2016-12-29 09:04:55', 'Return Item  hp to location id 17'),
(456, 'Jonremus', '2016-12-29 17:12:07', 'Edit device info linovo'),
(457, 'Jonremus', '2016-12-29 17:12:14', 'Edit device info hp'),
(458, 'Jonremus', '2016-12-29 17:53:54', 'Return Item  hp to location id 17'),
(459, 'Jonremus', '2016-12-30 14:59:47', 'Return Item  linovo to location id 17'),
(460, 'Jonremus', '2016-12-30 15:01:05', 'Return Item  hp to location id 17'),
(461, 'Jonremus', '2016-12-30 15:16:54', 'Return Item  hp to location id 17'),
(462, 'Jonremus', '2016-12-30 17:00:30', 'Add Employee Manolo,n.,Bernadino'),
(463, 'Jonremus', '2016-12-31 08:58:27', 'Add device Detail id '),
(464, 'Jonremus', '2017-01-05 10:46:04', 'Return Item  linovo to location id 17'),
(465, 'Jonremus', '2017-01-05 10:47:43', 'Return Item  acer to location id 18'),
(466, 'Jonremus', '2017-01-05 11:28:55', 'Return Item  hp to location id 21'),
(467, 'Jonremus', '2017-01-05 11:29:04', 'Return Item  dell to location id 17'),
(468, 'Jonremus', '2017-01-05 12:33:12', 'Return Item  dell to location id 19'),
(469, 'Jonremus', '2017-01-06 11:28:26', 'Return Item  dell to location id 19'),
(470, 'Jonremus', '2017-01-10 13:37:18', 'Return Item  hp to location id 18'),
(471, 'Jonremus', '2017-01-10 13:56:55', 'Edit device info linovo1');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `employee_id_no` varchar(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `position` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `employee_id_no`, `firstname`, `middlename`, `lastname`, `type`, `contact_no`, `position`) VALUES
(1, 'C76763', 'Jonremus', 'R.', 'Sevellejo', 'Regular', '09060683543', 'DCO'),
(3, 'C76762', 'Jeffrey', 'none', 'Guerrero', 'Regular', '0912437675', 'DCO'),
(4, 'r5672', 'Manolo', 'n.', 'Bernadino', 'Regular', '091233476', 'DCO leads');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(128) NOT NULL,
  `dep_name` varchar(128) NOT NULL,
  `thumbnails` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `thumbnails`) VALUES
(17, 'Indra Sistemas', ' uploads/rbc5.jpg'),
(18, 'GTP1 Pioneer', ' uploads/rbc5.jpg'),
(19, 'bayantelDC', 'uploads/devices1.jpg'),
(21, 'Avatar DC', 'uploads/devices1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_serial` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_brand` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_serial`, `item_name`, `item_brand`, `item_description`, `item_status`) VALUES
(26, 1234, 'acer', 'intel', '<p>black</p>\r\n', 'New'),
(27, 2134, 'linovo1', 'i54', '<p>white</p>\r\n', 'In-Used'),
(28, 4532, 'hp', 'hpe12', '<p>gold</p>\r\n', 'Good condition'),
(29, 1209456, 'dell', 'dell21', '<p>blue</p>\r\n', 'Good condition');

-- --------------------------------------------------------

--
-- Table structure for table `release_details`
--

CREATE TABLE `release_details` (
  `release_details_id` int(11) NOT NULL,
  `dep_id` int(128) NOT NULL,
  `item_id` int(11) NOT NULL,
  `release_id` int(11) NOT NULL,
  `release_status` varchar(128) NOT NULL,
  `remarks` varchar(128) NOT NULL,
  `date_return` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `release_details`
--

INSERT INTO `release_details` (`release_details_id`, `dep_id`, `item_id`, `release_id`, `release_status`, `remarks`, `date_return`) VALUES
(129, 19, 29, 140, 'Returned', ' / Brand new', '2017-01-06 11:28:26'),
(130, 17, 29, 141, 'pending', '/ Re-used', '0000-00-00 00:00:00'),
(131, 21, 27, 142, 'pending', ' / Brand new', '0000-00-00 00:00:00'),
(132, 18, 28, 143, 'Returned', ' / Brand new', '2017-01-10 13:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_release`
--

CREATE TABLE `tbl_release` (
  `release_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date_borrow` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_release`
--

INSERT INTO `tbl_release` (`release_id`, `client_id`, `date_borrow`) VALUES
(140, 1, '2017-01-06 11:28:13'),
(141, 4, '2017-01-06 12:28:39'),
(142, 3, '2017-01-07 18:00:52'),
(143, 4, '2017-01-10 13:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `technical_user`
--

CREATE TABLE `technical_user` (
  `tech_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_user`
--

INSERT INTO `technical_user` (`tech_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(2, 'chito', 'user', 'oting1', 'tianzon', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `transaction_history_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `client_id` int(11) NOT NULL,
  `release_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`transaction_history_id`, `item_id`, `action`, `client_id`, `release_id`, `admin_name`, `date_added`) VALUES
(164, 25, 'Borrowing Item', 1, 54, ' ', '2016-12-10 15:47:29'),
(165, 24, 'Borrowing Item', 3, 55, ' ', '2016-12-10 15:48:39'),
(166, 25, 'Borrowing Item', 1, 56, ' ', '2016-12-10 15:55:37'),
(167, 24, 'Borrowing Item', 3, 57, ' ', '2016-12-11 09:02:17'),
(168, 23, 'Borrowing Item', 1, 58, ' ', '2016-12-11 10:35:34'),
(169, 25, 'Borrowing Item', 1, 59, 'Jonremus', '2016-12-11 17:50:25'),
(170, 24, 'Borrowing Item', 1, 60, 'Jonremus', '2016-12-11 17:58:45'),
(171, 24, 'Borrowing Item', 3, 61, 'Jonremus', '2016-12-13 13:56:39'),
(172, 25, 'Borrowing Item', 1, 62, 'Jonremus', '2016-12-13 14:20:20'),
(173, 25, 'Borrowing Item', 3, 63, 'Jonremus', '2016-12-13 14:21:45'),
(174, 25, 'Borrowing Item', 1, 64, 'Jonremus', '2016-12-13 16:14:46'),
(175, 25, 'Borrowing Item', 1, 65, 'Jonremus', '2016-12-13 16:33:53'),
(176, 25, 'Borrowing Item', 1, 69, 'Jonremus', '2016-12-13 16:48:21'),
(177, 25, 'Borrowing Item', 1, 70, 'Jonremus', '2016-12-13 16:52:03'),
(178, 25, 'Borrowing Item', 1, 71, 'Jonremus', '2016-12-13 16:57:56'),
(179, 25, 'Borrowing Item', 1, 72, 'Jonremus', '2016-12-13 16:59:35'),
(180, 25, 'Borrowing Item', 1, 76, 'Jonremus', '2016-12-13 17:19:01'),
(181, 25, 'Borrowing Item', 1, 77, 'Jonremus', '2016-12-13 17:36:11'),
(182, 25, 'Borrowing Item', 1, 78, 'Jonremus', '2016-12-18 11:54:35'),
(183, 25, 'Borrowing Item', 1, 79, 'Jonremus', '2016-12-18 12:18:40'),
(184, 25, 'Borrowing Item', 1, 80, 'Jonremus', '2016-12-18 12:21:51'),
(185, 25, 'Borrowing Item', 3, 81, 'Jonremus', '2016-12-18 12:23:29'),
(186, 25, 'Borrowing Item', 1, 82, 'Jonremus', '2016-12-18 12:25:34'),
(187, 24, 'Borrowing Item', 3, 83, 'Jonremus', '2016-12-18 12:34:54'),
(188, 24, 'Borrowing Item', 1, 84, 'Jonremus', '2016-12-18 12:35:25'),
(189, 23, 'Borrowing Item', 3, 85, 'Jonremus', '2016-12-18 12:45:49'),
(190, 23, 'Borrowing Item', 3, 86, 'Jonremus', '2016-12-18 12:46:12'),
(191, 25, 'Borrowing Item', 1, 87, 'Jonremus', '2016-12-18 12:47:51'),
(192, 25, 'Borrowing Item', 3, 88, 'Jonremus', '2016-12-18 13:53:46'),
(193, 24, 'Borrowing Item', 1, 89, 'Jonremus', '2016-12-18 14:19:45'),
(194, 24, 'Borrowing Item', 3, 90, 'Jonremus', '2016-12-18 14:21:49'),
(195, 24, 'Borrowing Item', 1, 91, 'Jonremus', '2016-12-18 14:25:34'),
(196, 23, 'Borrowing Item', 3, 92, 'Jonremus', '2016-12-18 14:26:10'),
(197, 23, 'Borrowing Item', 1, 93, 'Jonremus', '2016-12-18 14:27:50'),
(198, 23, 'Borrowing Item', 3, 94, 'Jonremus', '2016-12-18 14:41:27'),
(199, 23, 'Borrowing Item', 1, 95, 'Jonremus', '2016-12-18 14:54:07'),
(200, 23, 'Borrowing Item', 3, 96, 'Jonremus', '2016-12-18 15:20:49'),
(201, 23, 'Borrowing Item', 3, 97, 'Jonremus', '2016-12-18 15:39:34'),
(202, 23, 'Borrowing Item', 1, 98, 'Jonremus', '2016-12-23 10:46:19'),
(203, 25, 'Borrowing Item', 1, 99, 'Jonremus', '2016-12-23 11:00:05'),
(204, 25, 'Borrowing Item', 1, 100, 'Jonremus', '2016-12-23 11:00:30'),
(205, 24, 'Borrowing Item', 3, 101, 'Jonremus', '2016-12-23 11:03:32'),
(206, 25, 'Borrowing Item', 3, 102, 'Jonremus', '2016-12-23 13:30:09'),
(207, 25, 'Borrowing Item', 1, 103, 'Jonremus', '2016-12-23 14:50:55'),
(208, 25, 'Borrowing Item', 1, 104, 'Jonremus', '2016-12-23 14:52:55'),
(209, 25, 'Borrowing Item', 3, 105, 'Jonremus', '2016-12-23 14:55:30'),
(210, 25, 'Borrowing Item', 1, 106, 'Jonremus', '2016-12-23 14:59:17'),
(211, 24, 'Borrowing Item', 3, 107, 'Jonremus', '2016-12-23 14:59:31'),
(212, 24, 'Borrowing Item', 3, 108, 'Jonremus', '2016-12-23 15:04:33'),
(213, 25, 'Borrowing Item', 3, 109, 'Jonremus', '2016-12-23 15:24:10'),
(214, 25, 'Borrowing Item', 1, 110, 'Jonremus', '2016-12-25 17:42:57'),
(215, 0, 'Borrowing Item', 3, 111, 'Jonremus', '2016-12-28 09:34:18'),
(216, 0, 'Borrowing Item', 1, 112, 'Jonremus', '2016-12-28 09:36:20'),
(217, 25, 'Borrowing Item', 1, 113, 'Jonremus', '2016-12-28 09:37:39'),
(218, 23, 'Borrowing Item', 3, 114, 'Jonremus', '2016-12-28 09:44:11'),
(219, 23, 'Borrowing Item', 1, 115, 'Jonremus', '2016-12-28 09:44:44'),
(220, 25, 'Borrowing Item', 3, 116, 'Jonremus', '2016-12-28 09:54:35'),
(221, 23, 'Borrowing Item', 1, 117, 'Jonremus', '2016-12-28 09:57:17'),
(222, 25, 'Borrowing Item', 3, 118, 'Jonremus', '2016-12-28 09:58:49'),
(223, 25, 'Borrowing Item', 1, 119, 'Jonremus', '2016-12-28 10:30:28'),
(224, 24, 'Borrowing Item', 3, 120, 'Jonremus', '2016-12-28 10:30:53'),
(225, 23, 'Borrowing Item', 1, 121, 'Jonremus', '2016-12-28 11:26:12'),
(226, 25, 'Borrowing Item', 3, 122, 'Jonremus', '2016-12-28 13:51:50'),
(227, 23, 'Borrowing Item', 3, 123, 'Jonremus', '2016-12-28 13:53:12'),
(228, 28, 'Borrowing Item', 1, 124, 'Jonremus', '2016-12-29 09:02:49'),
(229, 28, 'Borrowing Item', 3, 125, 'Jonremus', '2016-12-29 09:05:08'),
(230, 28, 'Borrowing Item', 1, 126, 'Jonremus', '2016-12-29 16:56:23'),
(231, 27, 'Borrowing Item', 3, 127, 'Jonremus', '2016-12-29 17:53:17'),
(232, 28, 'Borrowing Item', 3, 128, 'Jonremus', '2016-12-30 14:49:21'),
(233, 28, 'Borrowing Item', 1, 129, 'Jonremus', '2016-12-30 15:00:49'),
(234, 28, 'Borrowing Item', 3, 130, 'Jonremus', '2016-12-30 15:01:21'),
(235, 27, 'Borrowing Item', 1, 131, 'Jonremus', '2016-12-30 15:14:47'),
(236, 26, 'Borrowing Item', 4, 132, 'Jonremus', '2016-12-30 17:00:43'),
(237, 28, 'Borrowing Item', 4, 133, 'Jonremus', '2016-12-31 08:52:19'),
(238, 26, 'Borrowing Item', 4, 134, 'Jonremus', '2017-01-05 10:48:23'),
(239, 29, 'Borrowing Item', 3, 135, 'Jonremus', '2017-01-05 11:20:05'),
(240, 29, 'Borrowing Item', 1, 136, 'Jonremus', '2017-01-05 11:23:45'),
(241, 28, 'Borrowing Item', 4, 137, 'Jonremus', '2017-01-05 11:28:48'),
(242, 26, 'Borrowing Item', 1, 138, 'Jonremus', '2017-01-05 11:29:25'),
(243, 29, 'Borrowing Item', 3, 139, 'Jonremus', '2017-01-05 11:30:31'),
(244, 29, 'Borrowing Item', 1, 140, 'Jonremus', '2017-01-06 11:28:13'),
(245, 29, 'Borrowing Item', 4, 141, 'Jonremus', '2017-01-06 12:28:39'),
(246, 27, 'Borrowing Item', 3, 142, 'Jonremus', '2017-01-07 18:00:52'),
(247, 28, 'Borrowing Item', 4, 143, 'Jonremus', '2017-01-10 13:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminthumbnails` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'Jon Remus', '', 'Sevellejo', 'Jonremus', 'admin', 'uploads/mangekyou_sharingan__madara_by_dragonofbrainstorms-d53bvqn.jpg'),
(3, 'oting', 'H.', 'tianzon', 'chito', 'admin', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `user_id` int(128) NOT NULL,
  `tech_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`, `tech_id`) VALUES
(223, 'jonremus', '2016-12-11 11:02:41', '', 1, 0),
(224, 'jonremus', '2016-12-11 13:04:08', '', 1, 0),
(225, 'jonremus', '2016-12-11 15:51:47', '', 1, 0),
(226, 'chito', '2016-12-11 16:12:00', '', 3, 0),
(227, 'Jonremus', '2016-12-11 17:22:39', '', 1, 0),
(228, 'Jonremus', '2016-12-18 11:46:10', '', 1, 0),
(229, 'Jonremus', '2016-12-23 10:40:19', '', 1, 0),
(230, 'Jonremus', '2016-12-30 12:07:14', '', 1, 0),
(231, 'Jonremus', '2017-01-05 10:38:15', '', 1, 0),
(232, 'Jonremus', '2017-01-06 17:25:51', '', 1, 0),
(233, 'Jonremus', '2017-01-07 13:52:23', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `release_details`
--
ALTER TABLE `release_details`
  ADD PRIMARY KEY (`release_details_id`);

--
-- Indexes for table `tbl_release`
--
ALTER TABLE `tbl_release`
  ADD PRIMARY KEY (`release_id`);

--
-- Indexes for table `technical_user`
--
ALTER TABLE `technical_user`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`transaction_history_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `release_details`
--
ALTER TABLE `release_details`
  MODIFY `release_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `tbl_release`
--
ALTER TABLE `tbl_release`
  MODIFY `release_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `technical_user`
--
ALTER TABLE `technical_user`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `transaction_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

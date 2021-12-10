-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 01:44 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(471, 'Jonremus', '2017-01-10 13:56:55', 'Edit device info linovo1'),
(472, 'Jonremus', '2021-11-01 11:19:44', 'Edit system User Jonard  Caralde'),
(473, 'Jonard', '2021-11-01 13:57:41', 'Edit system User oting tianzon'),
(474, 'Jonard', '2021-11-01 14:21:37', 'Add Guest User Linlyn Canape'),
(475, 'Jonard', '2021-11-01 20:22:26', 'Edit Employee Jonremus,R.,Sevellejo'),
(476, 'Jonard', '2021-11-01 20:27:51', 'Edit Employee Jonremus,R.,Sevellejo'),
(477, 'chito', '2021-12-08 18:12:24', 'Add Item test tet'),
(478, 'chito', '2021-12-08 18:12:46', 'Edit item info test 0'),
(479, 'chito', '2021-12-08 18:14:35', 'Edit item info test 435546'),
(480, 'chito', '2021-12-08 18:36:34', 'Add Item tsdf dfgsdfges'),
(481, 'chito', '2021-12-08 18:39:30', 'Add Item asdfsdaf asdfasdf'),
(482, 'chito', '2021-12-08 19:12:18', 'Add Department HSE'),
(483, 'chito', '2021-12-09 19:54:34', 'Add Employee KIM,GOMEZ,TABILON'),
(484, 'chito', '2021-12-09 20:31:29', 'Add Product   '),
(485, 'chito', '2021-12-09 20:32:48', 'Add Product ACER-3567 Acer vPro i7 8gen Acer'),
(486, 'chito', '2021-12-09 20:49:42', 'Edit item info ACER-3567x Acer vPro i7 8genx'),
(487, 'chito', '2021-12-09 20:49:49', 'Edit item info ACER-3567 Acer vPro i7 8gen'),
(488, 'chito', '2021-12-09 20:58:13', 'Add Product BND-LONG-REAM Bondpaper Long Ream Hard Copy'),
(489, 'chito', '2021-12-09 21:17:42', 'Add Receiver product_id:<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:xampphtdocssfcinventoryadminproduct_receiver_add.php'),
(490, 'chito', '2021-12-09 21:42:29', 'Edit Product BND-LONG-REAM Bondpaper Long Ream'),
(491, 'chito', '2021-12-09 21:42:40', 'Edit Product BND-LONG-REAM Bondpaper Long Ream'),
(492, 'chito', '2021-12-09 21:42:51', 'Edit Product BND-LONG-REAM Bondpaper Long Ream'),
(493, 'chito', '2021-12-09 21:44:16', 'Add Receiver product_id:<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:xampphtdocssfcinventoryadminproduct_receiver_add.php'),
(494, 'chito', '2021-12-09 21:45:15', 'Add Receiver product_id:3, qty:15, serial:'),
(495, 'chito', '2021-12-09 21:45:31', 'Delete Receiver id:2'),
(496, 'chito', '2021-12-09 22:37:03', 'Realeasing product_id:3, qty:12, serial:'),
(497, 'chito', '2021-12-09 22:57:30', 'Change release status id:0, status:released'),
(498, 'chito', '2021-12-09 22:59:49', 'Change release status id:0, status:ready'),
(499, 'chito', '2021-12-09 23:00:08', 'Change release status id:0, status:released');

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
(5, '123', 'KIM', 'GOMEZ', 'TABILON', 'Regular', '09675743804', 'T1');

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
(22, 'HSE', 'uploads/super_admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_serial` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_qty` varchar(20) DEFAULT NULL,
  `item_brand` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_serial`, `item_name`, `item_qty`, `item_brand`, `item_description`, `item_status`, `created_at`) VALUES
(26, 1234, 'acer', '1', 'intel', '<p>black</p>\r\n', 'New', '2021-12-08 00:00:00'),
(27, 2134, 'linovo1', '1', 'i54', '<p>white</p>\r\n', 'In-Used', '2021-12-08 00:00:00'),
(28, 4532, 'hp', '1', 'hpe12', '<p>gold</p>\r\n', 'Good condition', '2021-12-08 00:00:00'),
(29, 1209456, 'dell', '1', 'dell21', '<p>blue</p>\r\n', 'Good condition', '2021-12-08 00:00:00'),
(30, 435546, 'test', '2', 'tet', '<p>reresdf</p>\r\n', 'New', '2021-12-08 00:00:00'),
(32, 123, 'asdfsdaf', '1', 'asdfasdf', '<p>asdasd</p>\r\n', 'New', '2021-12-08 18:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brand` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sku`, `name`, `description`, `brand`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(2, 'ACER-3567', 'Acer vPro i7 8gen', '<p>Acer vPro i7 8gen</p>\r\n', 'Acer', 'chito', '2021-12-09 20:32:48', 'chito', '2021-12-09 01:49:49'),
(3, 'BND-LONG-REAM', 'Bondpaper Long Ream', '<p>Hard Copy Paper Short Long A4 Size Bond Paper Per Ream 500 Sheets</p>\r\n', 'Hard Copy', 'chito', '2021-12-09 20:58:13', 'chito', '2021-12-09 02:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_receiver`
--

CREATE TABLE `product_receiver` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'new',
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_receiver`
--

INSERT INTO `product_receiver` (`id`, `product_id`, `qty`, `serial`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 2, '1', 'C1DFTFGH', 'new', 'chito', '2021-12-09 21:17:42', '', NULL),
(3, 3, '15', '', 'new', 'chito', '2021-12-09 21:45:15', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_release`
--

CREATE TABLE `product_release` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `serial` varchar(255) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'ready',
  `created_by` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_release`
--

INSERT INTO `product_release` (`id`, `product_id`, `qty`, `serial`, `employee_id`, `department_id`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 3, 12, '', 5, 22, 'released', 'chito', '2021-12-09 22:37:03', 'chito', '2021-12-09 04:00:08');

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
(2, 'chito', 'user', 'oting1', 'tianzon', 'images/NO-IMAGE-AVAILABLE.jpg'),
(3, 'linlyn', '12345', 'Linlyn', 'Canape', 'images/NO-IMAGE-AVAILABLE.jpg');

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
(1, 'Jonard ', '', 'Caralde', 'Jonard', 'admin', 'uploads/67871301_102610277769024_2361316626420203520_n.jpg'),
(3, 'oting', '', 'tianzon', 'chito', 'admin', 'images/NO-IMAGE-AVAILABLE.jpg');

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
(223, 'jonremus', '2016-12-11 11:02:41', '2021-11-01', 1, 0),
(224, 'jonremus', '2016-12-11 13:04:08', '2021-11-01', 1, 0),
(225, 'jonremus', '2016-12-11 15:51:47', '2021-11-01', 1, 0),
(226, 'chito', '2016-12-11 16:12:00', '', 3, 0),
(227, 'Jonremus', '2016-12-11 17:22:39', '2021-11-01', 1, 0),
(228, 'Jonremus', '2016-12-18 11:46:10', '2021-11-01', 1, 0),
(229, 'Jonremus', '2016-12-23 10:40:19', '2021-11-01', 1, 0),
(230, 'Jonremus', '2016-12-30 12:07:14', '2021-11-01', 1, 0),
(231, 'Jonremus', '2017-01-05 10:38:15', '2021-11-01', 1, 0),
(232, 'Jonremus', '2017-01-06 17:25:51', '2021-11-01', 1, 0),
(233, 'Jonremus', '2017-01-07 13:52:23', '2021-11-01', 1, 0),
(234, 'Jonremus', '2021-11-01 09:15:09', '2021-11-01', 1, 0),
(235, 'Jonremus', '2021-11-01 10:15:23', '2021-11-01', 1, 0),
(236, 'Jonremus', '2021-11-01 11:16:36', '2021-11-01', 1, 0),
(237, 'Jonard', '2021-11-01 11:20:16', '2021-11-01', 1, 0),
(238, 'Jonard', '2021-11-01 11:25:59', '2021-11-01', 1, 0),
(239, 'chito', '2021-11-01 11:57:37', '', 0, 2),
(240, 'chito', '2021-11-01 13:48:53', '', 0, 2),
(241, 'Jonard', '2021-11-01 13:49:01', '2021-11-01', 1, 0),
(242, 'Jonard', '2021-11-01 13:54:57', '2021-11-01', 1, 0),
(243, 'Jonard', '2021-11-01 13:55:37', '2021-11-01', 1, 0),
(244, 'chito', '2021-11-01 13:57:57', '', 0, 2),
(245, 'Jonard', '2021-11-01 13:58:12', '2021-11-01', 1, 0),
(246, 'linlyn', '2021-11-01 14:21:58', '', 0, 3),
(247, 'Jonard', '2021-11-01 20:16:17', '2021-11-01', 1, 0),
(248, 'Jonard', '2021-11-01 20:31:26', '', 1, 0),
(249, 'chito', '2021-12-07 13:10:36', '', 3, 0),
(250, 'chito', '2021-12-08 18:00:26', '', 3, 0),
(251, 'chito', '2021-12-09 19:43:17', '', 3, 0);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_receiver`
--
ALTER TABLE `product_receiver`
  ADD PRIMARY KEY (`id`,`updated_by`);

--
-- Indexes for table `product_release`
--
ALTER TABLE `product_release`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_receiver`
--
ALTER TABLE `product_receiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 12:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundary_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity_name` text NOT NULL,
  `User_name` text NOT NULL,
  `User_Role` text NOT NULL,
  `PC_info` text NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity_name`, `User_name`, `User_Role`, `PC_info`, `date`) VALUES
(1, 'Edit id #12', 'Asad', 'Supervisor', 'DESKTOP-Q93HLQI', 'Monday 6th of September 2021 03:26:38 PM'),
(2, 'New Customer Added', '', '', 'DESKTOP-Q93HLQI', 'Monday 6th of September 2021 05:09:16 PM'),
(3, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Monday 6th of September 2021 05:09:45 PM'),
(4, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Monday 6th of September 2021 05:10:09 PM'),
(5, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 12:34:53 PM'),
(6, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 12:35:02 PM'),
(7, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 12:59:56 PM'),
(8, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 12:59:57 PM'),
(9, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 01:00:04 PM'),
(10, 'New user Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 01:55:41 PM'),
(11, 'User Edit ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:24:22 PM'),
(12, 'User Deleted ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:24:50 PM'),
(13, 'User Edit ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:25:15 PM'),
(14, 'Add order ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:27:41 PM'),
(15, 'Edit order ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:28:21 PM'),
(16, 'Edit order ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:28:36 PM'),
(17, 'Edit order ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:28:49 PM'),
(18, 'Edit order ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:29:12 PM'),
(19, 'Delete order ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:29:51 PM'),
(20, 'New Customer Added', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:33:28 PM'),
(21, 'Edit Customer ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:33:54 PM'),
(22, 'Add Service ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:38:28 PM'),
(23, 'Edit Customer ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 03:51:04 PM'),
(24, 'Add Services ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 04:02:40 PM'),
(25, 'Edit Role ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 04:03:46 PM'),
(26, 'Delete Role ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 04:05:02 PM'),
(27, 'User Deleted ', 'user', 'supervisor', 'DESKTOP-Q93HLQI', 'Wednesday 8th of September 2021 04:47:09 PM'),
(28, 'Add Service ', 'admin', 'admin', 'DESKTOP-LL5M0RC', 'Sunday 19th of September 2021 09:39:56 AM'),
(29, 'Add Service ', 'admin', 'admin', 'DESKTOP-LL5M0RC', 'Sunday 19th of September 2021 11:34:43 AM'),
(30, 'Add Service ', 'admin', 'admin', 'DESKTOP-LL5M0RC', 'Sunday 19th of September 2021 12:07:45 PM'),
(31, 'Add Service ', 'admin', 'admin', 'DESKTOP-LL5M0RC', 'Sunday 19th of September 2021 12:20:26 PM'),
(32, 'Add Service ', 'admin', 'admin', 'DESKTOP-LL5M0RC', 'Monday 27th of September 2021 06:16:04 AM'),
(33, 'Edit Role ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Tuesday 28th of September 2021 02:26:19 PM'),
(34, 'Add Service ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Tuesday 28th of September 2021 02:27:33 PM'),
(35, 'Add Service ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Tuesday 28th of September 2021 03:22:03 PM'),
(36, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:27:05 PM'),
(37, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:32:34 PM'),
(38, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:32:52 PM'),
(39, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:37:41 PM'),
(40, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:37:57 PM'),
(41, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:53:31 PM'),
(42, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:53:31 PM'),
(43, 'Add Service ', 'admin', 'admin', 'DESKTOP-MHR8KKG', 'Sunday 24th of October 2021 01:53:48 PM'),
(44, 'Add Service ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 11th of November 2021 06:05:10 PM'),
(45, 'Add Service ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 11th of November 2021 06:30:04 PM'),
(46, 'Add Service ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 11th of November 2021 06:42:04 PM'),
(47, 'Add Role ', 'admin', 'admin', 'DESKTOP-Q93HLQI', 'Saturday 13th of November 2021 07:31:19 PM'),
(48, 'User Edit ', 'admin', 'admin', 'lab209-PC21', 'Tuesday 16th of November 2021 02:15:51 PM'),
(49, 'User Edit ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 06:48:05 PM'),
(50, 'User Deleted ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 06:48:14 PM'),
(51, 'Edit Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 07:15:25 PM'),
(52, 'Delete Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 07:15:34 PM'),
(53, 'Delete Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 07:15:42 PM'),
(54, 'Delete Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 07:15:52 PM'),
(55, 'Edit Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 07:16:08 PM'),
(56, 'Delete Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 07:47:48 PM'),
(57, 'New Customer Added', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:18:48 PM'),
(58, 'New Customer Added', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:19:14 PM'),
(59, 'Edit Customer ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:20:49 PM'),
(60, 'New Customer Added', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:23:20 PM'),
(61, 'Edit Role ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:24:53 PM'),
(62, 'Edit Role ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:25:03 PM'),
(63, 'Delete Role ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:25:13 PM'),
(64, 'Add Role ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:25:30 PM'),
(65, 'Edit Services ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:27:21 PM'),
(66, 'Delete Service ', 'admin', 'admin', 'DESKTOP-U9955PU', 'Thursday 18th of November 2021 08:27:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'asif@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'N', 'B', 'Male', '2018-11-26', '9423979339', 'karachi', 'unr_harrypotter_171212_1815_34k5k.png', '2018-04-30', 1),
(5, 'user', 'ali@gmail.com', 'bbcff4db4d8057800d59a68224efd87e545fa1512dfc3ef68298283fbb3b6358', 'Akash', 'ahire', 'Male', '1991-01-01', '9423979339', 'ddd', '70520.png', '2020-08-16', 2),
(8, 'user', 'rizwan@gmail.com', 'b36de449b69f93258d633ad7686a4348ad496035cfbcee0e326b2c55e2cbd1ce', 'Rizwan', 'khan', 'Male', '2021-07-07', '3430042926', 'sas\r\ndd', 'ZLOGO.png', '2021-08-29', 2),
(9, 'user', 'alahmed@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'Ali', 'Ahmed', 'Male', '2021-09-01', '0311329182', 'defence', 'ELL.jpg', '2021-09-05', 4),
(10, 'user', 'faisal@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'Faizan', 'Iqbal', 'Male', '2021-04-28', '3113291827', 'defence', 'handwirtting.jpg', '2021-09-06', 4),
(11, 'user', 'faisal@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'Faizanraz', 'Ahmed', 'Male', '2021-01-04', '3113291827', 'dwwdwedw', 'handwirtting.jpg', '2021-09-06', 4),
(13, 'user', 'shahzad@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'shahzad', 'Malik', 'Male', '2021-08-18', '3113291827', 'aadada', 'WhatsApp Image 2021-09-04 at 3.34.50 PM.jpeg', '2021-09-06', 3),
(15, 'user', 'shakeel@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'shakeel', 'Iqbal', 'Male', '2021-08-29', '3113291827', 'saxasasas', 'transcript2.jpeg', '2021-09-06', 4),
(16, 'user', 'wamiq@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'wamiq', 'Ahmed', 'Male', '2021-08-29', '3113291827', 'dssdsds', 'Transcript1.jpeg', '2021-09-06', 3),
(17, 'user', 'shabbir@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'shabbir', 'Ahmed', 'Male', '2021-08-30', '3113291827', 'eeewewe', '7.png', '2021-09-08', 3),
(18, 'user', 'ali@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'Alia', 'begum', 'Female', '2021-08-30', '3113291827', 'gulshan', '', '2021-09-08', 3),
(19, 'user', 'farhan@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'farhan', 'Ahmed', 'Male', '2021-08-30', '3113291827', 'efrffvrt', 'sid.jfif', '2021-09-08', 4),
(20, 'user', 'dsadsaasdsdio@gmail.com', '792728f582f80ba004d3400e99f8fb7be07d21c68f2fc583a3d63f951ad82707', 'ubaid', 'mallu', 'Male', '2021-11-02', '3113291827', 'sadsdsa', 'images.jfif', '2021-09-08', 2),
(21, 'user', 'dsadsaasdsdioss@gmail.com', '6edb8c8658e3028bcfd5ec67e59e941334e507a96bd401ba3b6b7ba4746ae09d', 'ubaid', 'mallu', 'Male', '2021-11-02', '3113291827', 'sadsdsa', 'images.jfif', '2021-09-08', 2),
(22, 'user', 'dsaddddsaasdsdioss@gmail.com', 'f7af981f25ab1e9cf6b04a6c72119062dafd22039789bf295181f95a63ddc87c', 'ubaid', 'mallu', 'Male', '2021-11-02', '3113291827', 'sadsdsa', 'images.jfif', '2021-09-08', 2),
(23, 'user', 'dsaddddsssaasdsdioss@gmail.com', 'dd1009e72c3f73ad78bf289e5602b1bdea838e1814630bcf5803d0f31bea445e', 'ubaid', 'mallu', 'Male', '2021-11-02', '3113291827', 'sadsdsa', 'images.jfif', '2021-09-08', 2),
(24, 'user', 'dsaddddsssfaasdsdioss@gmail.co', 'd25b8f27296a5a8093bbdac2ecf9d2b6b5615164bf72d38525677ab4287fecdb', 'ubaid', 'mallu', 'Male', '2021-11-02', '3113291827', 'sadsdsa', 'images.jfif', '2021-09-08', 2),
(25, 'user', 'jawaid@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'jawaid', 'Ahmed', 'Male', '2021-08-29', '3113291827', 'qqqqe', 'images.jfif', '2021-09-08', 3),
(28, 'user', 'jawaid@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'jawaid', 'Ahmed', 'Male', '2021-08-29', '3113291827', 'qqqqe', 'images.jfif', '2021-09-08', 3),
(30, 'user', 'jawaid@gmail.com', '0390024610415f44c9d5ca4a01dd96bb09fc95e6450bfd740a9a4cf4abcc8130', 'jawaid', 'Ahmed', 'Male', '2021-08-29', '3113291827', 'qqqqe', 'images.jfif', '2021-09-08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `assign_rack`
--

CREATE TABLE `assign_rack` (
  `id` int(11) NOT NULL,
  `rack_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_rack`
--

INSERT INTO `assign_rack` (`id`, `rack_id`, `order_id`, `status`) VALUES
(1, 1, 14, 'True'),
(2, 3, 13, 'True'),
(3, 2, 12, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `contact`, `address`) VALUES
(14, 'Johnny', 'Smith', '0912345678', 'Sample Address'),
(16, 'iqbal', 'mahar', '3430042926', 'saadi town'),
(17, 'Shahzaib', 'Ahmed', '3113291827', 'qwqeqeqwerqerq');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `contact`, `address`) VALUES
(1, 'Hamza', 'Iqbal', '3242343432', 'Mehmoodabad'),
(3, 'Eddie', 'Brock', '0213546487', 'Sanfransisco\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website`
--

CREATE TABLE `manage_website` (
  `id` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_website`
--

INSERT INTO `manage_website` (`id`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, 'A1 Clean', 'A1 Clean', 'A1 Clean (Neww).png', 'AA Company', 'DOLLAR', 'â‚¹', 'A1 Clean (Neww).png', 'A1 Clean (Neww).png', '1091 - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `Delivery_status` varchar(60) NOT NULL DEFAULT 'done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `user_id`, `date`, `time`, `invoice`, `Delivery_status`) VALUES
(5, '2250', 1, '2021-11-10', '2021-11-11 01:00:22', 'E-00E548', 'Done'),
(6, '6600', 1, '2021-11-10', '2021-11-11 01:11:01', 'E-00A263', 'Done'),
(7, '500', 1, '2021-11-10', '2021-11-11 01:12:49', 'E-006745', 'Done'),
(8, '1400', 1, '2021-11-10', '2021-11-11 01:16:20', 'E-00BBD7', 'Done'),
(9, '400', 1, '2021-11-10', '2021-11-11 01:16:43', 'E-003425', 'Done'),
(10, '200', 1, '2021-11-10', '2021-11-11 01:34:11', 'E-00BBC3', 'Done'),
(11, '200', 1, '2021-11-10', '2021-11-11 01:34:26', 'E-009B41', 'Done'),
(12, '1150', 1, '2021-11-10', '2021-11-11 01:48:50', 'E-00C1C6', 'Done'),
(13, '250', 1, '2021-11-10', '2021-11-11 01:49:32', 'E-00C358', 'Done'),
(15, '60000', 1, '2021-11-11', '2021-11-11 07:46:26', 'E-006BF8', 'Done'),
(16, '230', 1, '2021-11-13', '2021-11-13 04:17:39', 'E-008DC1', 'Done'),
(17, '560', 1, '2021-11-13', '2021-11-13 07:44:58', 'E-00A638', 'Done'),
(18, '180', 1, '2021-11-13', '2021-11-13 07:46:10', 'E-006CFE', 'Done'),
(19, '240', 1, '2021-11-13', '2021-11-13 07:48:27', 'E-00D499', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `pname`, `price`, `qty`, `amount`, `order_id`) VALUES
(1, 'Capri', '40', 5, '200', 5),
(2, 'Total repair 5', '200', 10, '2000', 5),
(3, 'lux small', '50', 1, '50', 5),
(4, 'Capri', '40', 20, '800', 6),
(5, 'Total repair 5', '200', 9, '1800', 6),
(6, 'lux small', '50', 80, '4000', 6),
(7, 'lux small', '50', 10, '500', 7),
(8, 'lux small', '50', 20, '1000', 8),
(9, 'Capri', '40', 10, '400', 8),
(10, 'Capri', '40', 10, '400', 9),
(11, 'Total repair 5', '200', 1, '200', 10),
(12, 'Total repair 5', '200', 1, '200', 11),
(13, 'lux small', '50', 15, '750', 12),
(14, 'Capri', '40', 10, '400', 12),
(15, 'lux small', '50', 5, '250', 13),
(16, 'rollpessing', '2000', 5, '10000', 15),
(17, 'lux small', '50', 3, '150', 16),
(18, 'Capri', '40', 2, '80', 16),
(19, 'Dove  total', '200', 2, '400', 17),
(20, 'Pantene', '80', 2, '160', 17),
(21, 'Capri', '40', 2, '80', 18),
(22, 'lux small', '50', 2, '100', 18),
(23, 'Capri', '40', 6, '240', 19);

-- --------------------------------------------------------

--
-- Table structure for table `rack`
--

CREATE TABLE `rack` (
  `id` int(11) NOT NULL,
  `rack_no` varchar(50) NOT NULL,
  `rack_status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rack`
--

INSERT INTO `rack` (`id`, `rack_no`, `rack_status`) VALUES
(1, '1', 'True'),
(2, '2', 'True'),
(3, '3', 'True'),
(4, '4', 'True'),
(5, '5', 'True'),
(6, '6', 'True'),
(7, '7', 'True'),
(8, '8', 'True'),
(9, '9', 'True'),
(10, '10', 'True'),
(11, '11', 'True'),
(12, '12', 'True'),
(13, '13', 'True'),
(14, '14', 'True'),
(15, '15', 'True'),
(16, '16', 'True'),
(17, '17', 'True'),
(18, '18', 'True'),
(19, '19', 'True'),
(20, '20', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `per_price` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `p_name`, `per_price`, `qtn`, `brand`, `category`) VALUES
(1, 'Total repair 5', 200, 6, 'Loreal', 'shampoo'),
(2, 'lux small', 50, 33, 'Lux', 'soap'),
(3, 'lux small', 50, 12, 'Lux', 'soap'),
(4, 'Capri', 40, 15, 'Capri', 'soap');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `prize` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `sname`, `prize`) VALUES
(4, 'washing', '60'),
(14, 'rollpessing', '160'),
(15, 'ironing', '100'),
(16, 'Ironing', '20'),
(20, 'abc', '55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_config`
--

CREATE TABLE `tbl_email_config` (
  `e_id` int(21) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_config`
--

INSERT INTO `tbl_email_config` (`e_id`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, 'hello', 'mail.gmail.com', 587, 'asifmahar786786@gmail.com', 'asifinnnocent1', 'sdsad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(2, 'manager', 'manager'),
(3, 'employee', 'employee'),
(11, 'Sub Admin', 'sub Admin'),
(12, 'supervisor', 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `order_code` varchar(70) NOT NULL,
  `prizes` varchar(50) NOT NULL,
  `delivery date` date NOT NULL,
  `delivery_status` tinyint(4) NOT NULL,
  `todays_date` date NOT NULL,
  `Payment_Method` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `uid`, `order_code`, `prizes`, `delivery date`, `delivery_status`, `todays_date`, `Payment_Method`) VALUES
(36, 17, 'XXX47199', '100', '2021-10-28', 0, '2021-10-24', 'cash on delivery'),
(37, 16, 'XXX40148', '840', '2021-10-29', 0, '2021-10-24', 'cash on delivery'),
(39, 17, 'XXX21735', '420', '2021-10-30', 0, '2021-10-24', 'cash on delivery'),
(40, 17, 'XXX24033', '910', '2021-10-29', 0, '2021-10-24', 'cash on delivery'),
(41, 14, 'XXX14744', '910', '2021-10-27', 0, '2021-10-24', 'Debit Cart');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `operation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`id`, `name`, `display_name`, `operation`) VALUES
(1, 'manage_user', 'Manage User', 'manage_user'),
(2, 'add_user', 'Add User', 'add_user'),
(3, 'edit_user', 'Edit User', 'edit_user'),
(4, 'delete_user', 'Delete User', 'delete_user'),
(5, 'add_order', 'add order', 'add_order'),
(6, 'edit_order', 'edit order', 'edit_order'),
(7, 'delete_order', 'delete order', 'delete_order'),
(8, 'edit_custome', 'edit_customer', 'edit_customer'),
(9, 'delete_customer', 'delete_customer', 'delete_customer'),
(10, 'add_services', 'add_services', 'add_services'),
(11, 'delete_services', 'delete_services', 'delete_services'),
(12, 'Add_customer', 'Add customer', 'Add customer'),
(13, 'manage_website', 'manage website', 'manage website'),
(14, 'Views_Reports', 'Views Reports', 'Views Reports'),
(15, 'edit_services', 'edit services', 'edit services'),
(16, 'Activity', 'Activity', 'Activity'),
(17, 'add_rack', 'add_rack', 'add_rack'),
(18, 'assign_rack', 'assign_rack', 'assign_rack'),
(19, 'add_stock', 'add_stock', 'add_stock'),
(20, 'delete_stock', 'delete_stock', 'delete_stock'),
(21, 'add_purchase', 'add_purchase', 'add_purchase'),
(22, 'view_role', 'view_role', 'view_role'),
(23, 'assign_role', 'assign_role', 'assign_role'),
(24, 'view_purchase', 'view_purchase', 'view_purchase'),
(25, 'sale', 'sale', 'sale'),
(26, 'orders_list', 'orders_list', 'orders_list'),
(27, 'view_services', 'view_services', 'view_services'),
(28, 'wishlist', 'wishlist', 'wishlist'),
(29, 'wishlist_orders', 'wishlist_orders', 'wishlist_orders');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_role`
--

CREATE TABLE `tbl_permission_role` (
  `id` int(30) NOT NULL,
  `permission_id` int(30) NOT NULL,
  `role_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_role`
--

INSERT INTO `tbl_permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(23, 8, 3),
(24, 10, 3),
(39, 1, 5),
(40, 2, 5),
(41, 3, 5),
(42, 4, 5),
(43, 5, 5),
(44, 6, 5),
(45, 7, 5),
(46, 8, 5),
(47, 9, 5),
(48, 10, 5),
(49, 11, 5),
(58, 17, 1),
(73, 12, 1),
(74, 13, 1),
(75, 14, 1),
(79, 15, 1),
(104, 16, 1),
(107, 5, 10),
(108, 9, 10),
(109, 5, 4),
(110, 1, 1),
(111, 18, 1),
(113, 19, 1),
(114, 20, 1),
(115, 21, 1),
(116, 1, 11),
(117, 2, 11),
(118, 3, 11),
(119, 4, 11),
(120, 5, 11),
(121, 6, 11),
(122, 7, 11),
(123, 8, 11),
(124, 9, 11),
(125, 10, 11),
(126, 11, 11),
(127, 12, 11),
(128, 13, 11),
(129, 14, 11),
(130, 15, 11),
(131, 17, 11),
(132, 18, 11),
(133, 19, 11),
(134, 20, 11),
(135, 21, 11),
(151, 1, 2),
(152, 2, 2),
(153, 3, 2),
(154, 4, 2),
(155, 5, 2),
(156, 6, 2),
(157, 7, 2),
(158, 8, 2),
(159, 9, 2),
(160, 10, 2),
(161, 11, 2),
(162, 12, 2),
(163, 13, 2),
(164, 14, 2),
(165, 16, 2),
(166, 22, 1),
(167, 23, 1),
(168, 24, 1),
(169, 25, 1),
(170, 26, 1),
(171, 27, 1),
(172, 28, 1),
(173, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `per_price` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purchase`
--

INSERT INTO `tbl_purchase` (`id`, `p_name`, `per_price`, `qtn`, `brand`, `category`) VALUES
(2, 'lux small', 50, 10, 'Lux', 'soap'),
(3, 'lux small', 50, 10, 'Lux', 'soap'),
(4, 'lux small', 50, 1, 'Lux', 'soap'),
(5, 'lux Large', 80, 3, 'Lux', 'soap'),
(6, 'lux small', 50, 1, 'Lux', 'soap'),
(7, 'lux small', 50, 50, 'Lux', 'soap'),
(8, 'lux small', 50, 1, 'Lux', 'soap'),
(9, 'lux small', 50, 4, 'Lux', 'soap'),
(10, 'lux small', 50, 30, 'Lux', 'soap'),
(11, 'lux small', 50, 2, 'Lux', 'soap'),
(12, 'lux small', 50, 4, 'Lux', 'soap'),
(13, 'lux small', 50, 6, 'Lux', 'soap'),
(14, 'lux small', 50, 7, 'Lux', 'soap'),
(15, 'lux small', 50, 5, 'Lux', 'soap'),
(16, 'lux small', 50, 9, 'Lux', 'soap'),
(17, 'lux small', 50, 8, 'Lux', 'soap'),
(18, 'lux small', 50, 7, 'Lux', 'soap'),
(19, 'Total repair 5', 200, 5, 'Loreal', 'shampoo'),
(20, 'Total repair 5', 200, 3, 'Loreal', 'shampoo'),
(21, 'Total repair 5', 200, 4, 'Loreal', 'shampoo'),
(22, 'Total repair 5', 200, 5, 'Loreal', 'shampoo'),
(23, 'Total repair 5', 200, 6, 'Loreal', 'shampoo'),
(24, 'lux small', 50, 33, 'Lux', 'soap'),
(25, 'lux small', 50, 10, 'Lux', 'soap'),
(26, 'lux small', 50, 45, 'Lux', 'soap'),
(27, 'Capri', 40, 10, 'Capri', 'soap'),
(28, 'Pantene', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_config`
--

CREATE TABLE `tbl_sms_config` (
  `smsid` int(20) NOT NULL,
  `senderid` int(20) NOT NULL,
  `sms_username` varchar(30) NOT NULL,
  `sms_password` varchar(20) NOT NULL,
  `auth_key` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms_config`
--

INSERT INTO `tbl_sms_config` (`smsid`, `senderid`, `sms_username`, `sms_password`, `auth_key`) VALUES
(1, 101, 'username', 'password', 'authkey');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `per_price` int(11) NOT NULL,
  `qtn` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Available',
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price_express` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`id`, `p_name`, `per_price`, `qtn`, `status`, `category`, `brand`, `price_express`) VALUES
(1, 'lux large', 50, 10, 'Available', 'soap', 'Lux', ''),
(3, 'Total repair 5', 200, 18, 'Available', 'shampoo', 'Loreal', '200'),
(4, 'Capri', 40, 0, 'Available', 'soap', 'Capri', ''),
(5, 'Pantene', 80, 10, 'Available', 'Shampoo', 'Pantene', '80'),
(6, 'Dove  total', 200, 10, 'Available', 'shampoo', 'Dove', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_order`
--

CREATE TABLE `wishlist_order` (
  `id` int(11) NOT NULL,
  `total` varchar(50) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist_order`
--

INSERT INTO `wishlist_order` (`id`, `total`, `invoice`, `date`, `time`, `user`, `status`) VALUES
(1, '16000', 'E-001903', '2021-11-11', '2021-11-11 08:06:17', 1, 'Done'),
(3, '100000', 'E-0012FF', '2021-11-11', '2021-11-11 08:38:03', 1, 'Done'),
(4, '100000', 'E-0074FE', '2021-11-11', '2021-11-11 08:38:38', 1, 'Done'),
(5, '100000', 'E-003F94', '2021-11-11', '2021-11-11 08:39:32', 1, 'Done'),
(6, '110000', 'E-00588D', '2021-11-11', '2021-11-11 08:40:16', 1, 'Done'),
(7, '110000', 'E-004A2E', '2021-11-11', '2021-11-11 08:40:44', 1, 'Done'),
(8, '16600', 'E-002278', '2021-11-11', '2021-11-11 08:49:09', 1, 'Done'),
(9, '28000', 'E-0061CE', '2021-11-11', '2021-11-11 08:50:52', 1, 'Done'),
(10, '88000', 'E-00AC15', '2021-11-11', '2021-11-11 08:52:23', 1, 'Done'),
(11, '18000', 'E-005DC3', '2021-11-11', '2021-11-11 08:53:29', 1, 'Done'),
(12, '16000', 'E-00CD9F', '2021-11-11', '2021-11-11 10:48:33', 1, 'Done'),
(13, '600', 'E-002F6C', '2021-11-13', '2021-11-13 04:37:03', 1, 'Done'),
(14, '80', 'E-00425B', '2021-11-13', '2021-11-13 07:50:10', 1, 'Done'),
(15, '18000', 'E-00F598', '2021-11-17', '2021-11-17 07:32:52', 1, 'Done'),
(16, '12400', 'E-001E31', '2021-11-17', '2021-11-17 07:41:40', 1, 'Done'),
(17, '14000', 'E-001994', '2021-11-17', '2021-11-17 07:49:17', 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `wish_details`
--

CREATE TABLE `wish_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wish_details`
--

INSERT INTO `wish_details` (`id`, `name`, `price`, `qty`, `amount`, `oid`) VALUES
(1, 'rollpessing', '2000', 6, '12000', 1),
(2, 'xyz', '800', 5, '4000', 1),
(3, 'Ironing', '20000', 5, '100000', 3),
(4, 'Ironing', '20000', 5, '100000', 4),
(5, 'Ironing', '20000', 5, '100000', 5),
(6, 'Ironing', '20000', 5, '100000', 6),
(7, 'Ironing', '20000', 5, '100000', 7),
(8, 'ironing', '800', 5, '4000', 8),
(9, 'washing', '800', 9, '7200', 8),
(10, 'xyz', '600', 9, '5400', 8),
(11, 'Ironing', '800', 5, '4000', 9),
(12, 'ironing', '2000', 6, '12000', 9),
(13, 'washing', '2000', 6, '12000', 9),
(14, 'Ironing', '20000', 2, '40000', 10),
(15, 'washing', '2000', 4, '8000', 10),
(16, 'abc', '20000', 2, '40000', 10),
(17, 'xyz', '2000', 5, '10000', 11),
(18, 'abc', '800', 5, '4000', 11),
(19, 'washing', '800', 5, '4000', 11),
(20, 'ironing', '2000', 6, '12000', 12),
(21, 'washing', '800', 5, '4000', 12),
(22, 'washing', '300', 2, '600', 13),
(23, 'washing', '40', 2, '80', 14),
(24, 'rollpessing', '2000', 7, '14000', 15),
(25, 'washing', '800', 5, '4000', 15),
(26, 'abc', '5000', 2, '10000', 16),
(27, 'xyz', '800', 3, '2400', 16),
(28, 'Ironing', '2000', 2, '4000', 17),
(29, 'abc', '5000', 2, '10000', 17);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_rack`
--
ALTER TABLE `assign_rack`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rack_id` (`rack_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `rack`
--
ALTER TABLE `rack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist_order`
--
ALTER TABLE `wishlist_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_details`
--
ALTER TABLE `wish_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `assign_rack`
--
ALTER TABLE `assign_rack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rack`
--
ALTER TABLE `rack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_permission_role`
--
ALTER TABLE `tbl_permission_role`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist_order`
--
ALTER TABLE `wishlist_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wish_details`
--
ALTER TABLE `wish_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

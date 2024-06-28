-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 03:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahutk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `name`, `password`) VALUES
(1, 'admin@rahtuk.om', 'Rahtuk', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `total` float NOT NULL,
  `qun` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `order_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `item_id`, `project_id`, `date`, `time`, `total`, `qun`, `state`, `order_id`) VALUES
(3, '19', 15, 0, '09/12/2020', '11:23 PM', 20, 2, 'Decline', '11'),
(4, '20', 15, 0, '09/12/2020', '11:28 PM', 10, 1, 'Accepted', '12'),
(6, 'c555301bfa205b7f6964f4ee657d03ee', 16, 0, '10/12/2020', '04:34 PM', 120, 2, '', ''),
(7, 'c555301bfa205b7f6964f4ee657d03ee', 15, 0, '10/12/2020', '04:35 PM', 20, 2, '', ''),
(10, 'c555301bfa205b7f6964f4ee657d03ee', 16, 0, '10/12/2020', '04:55 PM', 120, 2, '', ''),
(11, 'c555301bfa205b7f6964f4ee657d03ee', 15, 0, '10/12/2020', '05:26 PM', 30, 3, '', ''),
(12, '8dbc0c578f51c373bac1d7df4ececb13', 15, 0, '10/12/2020', '05:28 PM', 20, 2, '', ''),
(13, '16', 15, 0, '10/12/2020', '05:35 PM', 20, 2, 'Accepted', '13'),
(14, '38e8a996e042e76ff023b40c55d6346f', 15, 0, '10/12/2020', '05:36 PM', 20, 2, '', ''),
(15, '81764563dbdc632c58a572cf09da91ef', 15, 0, '10/12/2020', '05:48 PM', 20, 2, '', ''),
(16, '22', 15, 0, '10/12/2020', '06:22 PM', 20, 2, 'Waiting', '14'),
(35, '24', 16, 0, '13/12/2020', '07:57 PM', 180, 3, '', ''),
(36, '24', 15, 0, '13/12/2020', '07:57 PM', 20, 2, '', ''),
(37, 'd8a95af784dc3bbd9c59d48b7758d122', 16, 0, '13/12/2020', '08:42 PM', 120, 2, '', ''),
(38, 'cfd1e983313f8ebcaeafce2ec17df015', 16, 0, '13/12/2020', '08:49 PM', 120, 2, '', ''),
(40, '16', 16, 0, '16/12/2020', '08:36 PM', 52, 2, 'Accepted', '15'),
(42, '16', 15, 0, '17/12/2020', '06:19 PM', 30, 3, 'Decline', '15'),
(43, '16', 17, 0, '17/12/2020', '06:19 PM', 40, 4, 'Decline', '15'),
(44, '16', 18, 0, '17/12/2020', '06:20 PM', 8, 2, 'Accepted', '15'),
(45, '16', 16, 0, '18/12/2020', '06:16 AM', 300, 5, 'Waiting', '16'),
(46, '16', 16, 0, '18/12/2020', '06:52 AM', 180, 3, 'Accepted', '17'),
(47, '16', 15, 0, '18/12/2020', '06:53 AM', 40, 4, 'Accepted', '17'),
(48, '16', 17, 0, '18/12/2020', '07:15 AM', 20, 2, 'Accepted', '18'),
(49, '16', 16, 0, '18/12/2020', '07:50 AM', 240, 4, 'Waiting', '19'),
(50, '16', 16, 0, '18/12/2020', '07:52 AM', 120, 2, 'Waiting', '20'),
(51, '16', 16, 0, '18/12/2020', '08:15 AM', 60, 1, 'Accepted', '21'),
(52, '16', 15, 0, '18/12/2020', '08:46 AM', 20, 2, 'Accepted', '21'),
(53, '16', 16, 0, '18/12/2020', '09:45 AM', 180, 3, 'Accepted', '22'),
(54, '16', 15, 0, '18/12/2020', '09:45 AM', 20, 2, 'Accepted', '22'),
(55, '16', 16, 0, '18/12/2020', '09:51 AM', 300, 5, 'Accepted', '23'),
(56, '16', 15, 0, '18/12/2020', '09:52 AM', 30, 3, 'Accepted', '23'),
(57, '16', 16, 0, '18/12/2020', '09:57 AM', 180, 3, 'Accepted', '24'),
(58, '16', 15, 0, '18/12/2020', '09:58 AM', 30, 3, 'Decline', '25'),
(59, '16', 15, 0, '18/12/2020', '10:00 AM', 20, 2, 'Decline', '26'),
(60, '16', 16, 0, '18/12/2020', '10:00 AM', 420, 7, 'Decline', '26'),
(61, '16', 16, 0, '18/12/2020', '10:14 AM', 180, 3, 'Decline', '27'),
(62, '16', 15, 0, '18/12/2020', '10:14 AM', 100, 10, 'Decline', '27'),
(63, '16', 16, 0, '18/12/2020', '11:29 AM', 180, 3, 'Waiting', '28'),
(64, '16', 15, 0, '18/12/2020', '11:37 AM', 80, 8, 'Waiting', '29'),
(65, '16', 15, 0, '18/12/2020', '12:16 PM', 10, 1, 'Accepted', '30'),
(67, '26', 19, 0, '18/12/2020', '02:49 PM', 195, 3, 'Accepted', '31'),
(68, '26', 17, 0, '18/12/2020', '02:54 PM', 21, 2, 'Accepted', '32'),
(71, '32157e4d757ca2538d378bc6d0d4b4f4', 18, 0, '30/12/2020', '01:01 AM', 88, 22, '', ''),
(75, '32157e4d757ca2538d378bc6d0d4b4f4', 27, 0, '30/12/2020', '02:09 AM', 31.5, 3, '', ''),
(80, '1f2cc66289eb04e4b303f930478dc101', 17, 0, '16/04/2024', '02:52 AM', 30, 3, '', ''),
(82, '27', 1, 0, '10/06/2024', '05:19 AM', 5, 1, 'Waiting', '33'),
(84, '29', 1, 0, '10/06/2024', '07:15 AM', 10, 2, 'Accepted', '35'),
(85, '34', 1, 0, '10/06/2024', '08:13 AM', 5, 1, 'Accepted', '36'),
(90, '36', 1, 0, '10/06/2024', '05:50 PM', 5, 1, 'Accepted', '38'),
(91, '37', 1, 0, '10/06/2024', '05:54 PM', 10, 2, 'Accepted', '39');

-- --------------------------------------------------------

--
-- Table structure for table `categoryies`
--

CREATE TABLE `categoryies` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categoryies`
--

INSERT INTO `categoryies` (`id`, `order`, `title`, `description`, `image_url`) VALUES
(29, 1, 'Cleaning Services', 'Sparkling clean, every time.', 'clean.d29ae2965cc2b19d61e9847bc87b512d.jpg'),
(30, 2, 'Cooking  Services', 'Delicious meals, always ready.', 'cook.0177fb359d800cf5173e68a85d39b3b6.jpg'),
(31, 3, 'Baby Setter  Services', 'Trustworthy care, happy kids.', 'baby.446ca7a003a1c7b4d9bc922efbd055aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `id` int(11) NOT NULL,
  `user_id` longtext NOT NULL,
  `item_id` int(80) NOT NULL,
  `cat_id` int(80) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`id`, `user_id`, `item_id`, `cat_id`, `date`, `time`) VALUES
(4, '34', 1, 29, '10/06/2024', '06:33 AM'),
(8, '37', 1, 29, '10/06/2024', '04:19 PM');

-- --------------------------------------------------------

--
-- Table structure for table `mailist`
--

CREATE TABLE `mailist` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mailist`
--

INSERT INTO `mailist` (`id`, `email`) VALUES
(9, 'monther.alhosni@gmail.com'),
(11, 'monther.alhosni14@gmail.com'),
(13, 'monther.alhosni44@gmail.com'),
(14, 'monther.alhosni2@gmail.com'),
(16, 'rzan@gmail.com'),
(17, 'm200@gmail.com'),
(18, 'monther.alhosni3333@gmail.com'),
(23, 'monther.alhosni88@gmail.com'),
(24, 'mm@gmail.com'),
(25, 'zz@gmail.com'),
(26, 'ii@gmail.com'),
(27, 'monther.alho@gmail.com'),
(28, 'mon1@gmail.com'),
(29, '44@gmail.com'),
(30, '3safeerom@gmail.com'),
(31, 'nn3445@gmail.com'),
(33, 'monther@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers_images`
--

CREATE TABLE `offers_images` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `offer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `state` text NOT NULL,
  `user_id` text NOT NULL,
  `msg` longtext NOT NULL,
  `items_id` text NOT NULL,
  `msg_date` text NOT NULL,
  `msg_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `state`, `user_id`, `msg`, `items_id`, `msg_date`, `msg_time`) VALUES
(1, '', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '137', '08/12/2020', '10:15 PM'),
(2, '', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '70', '08/12/2020', '10:25 PM'),
(3, 'Accepted', '16', '', '2', '09/12/2020', '05:14 PM'),
(4, 'Accepted', '16', '', '1', '09/12/2020', '05:20 PM'),
(12, 'Accepted', '20', 'هلا حبي', '1', '09/12/2020', '11:29 PM'),
(18, 'Accepted', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '1', '18/12/2020', '07:15 AM'),
(21, 'Accepted', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '2', '18/12/2020', '09:40 AM'),
(22, 'Accepted', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '2', '18/12/2020', '09:47 AM'),
(23, 'Accepted', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '2', '18/12/2020', '09:55 AM'),
(24, 'Accepted', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '1', '18/12/2020', '09:57 AM'),
(25, 'Accepted', '16', 'لم يتم إدخال ملاحظات في هذا الطلب', '1', '18/12/2020', '09:58 AM'),
(31, 'Accepted', '26', 'لم يتم إدخال ملاحظات في هذا الطلب', '1', '18/12/2020', '02:49 PM'),
(34, 'Accepted', '28', '.', '1', '10/06/2024', '06:51 AM'),
(35, 'Accepted', '29', 'No notes were entered in this order.', '1', '10/06/2024', '07:15 AM'),
(36, 'Accepted', '34', 'No notes entered for this order', '1', '10/06/2024', '08:13 AM'),
(38, 'Accepted', '36', '10 am', '1', '10/06/2024', '05:50 PM'),
(39, 'Accepted', '37', 'No notes entered for this order', '1', '10/06/2024', '05:54 PM');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `descrption` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `available` int(200) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `price`, `descrption`, `cat_id`, `user_id`, `offer_id`, `available`, `link`) VALUES
(1, 'Afrah Gool', 5, '5 OMR per hour.', 29, 0, 0, 8, '0');

-- --------------------------------------------------------

--
-- Table structure for table `services_images`
--

CREATE TABLE `services_images` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services_images`
--

INSERT INTO `services_images` (`id`, `url`, `service_id`) VALUES
(1, 'Screenshot 2024-06-10 041955.b7efad0929b997e4153ed4b15d631de3.png', 1),
(2, 'Screenshot 2024-06-10 041955.c5c572ac3d89f47e6968e65111fdea6f.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryies`
--
ALTER TABLE `categoryies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailist`
--
ALTER TABLE `mailist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers_images`
--
ALTER TABLE `offers_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_images`
--
ALTER TABLE `services_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `categoryies`
--
ALTER TABLE `categoryies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mailist`
--
ALTER TABLE `mailist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers_images`
--
ALTER TABLE `offers_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services_images`
--
ALTER TABLE `services_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

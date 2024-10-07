-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2024 at 02:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `member_id` int NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `points` int NOT NULL,
  `account_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`member_id`, `member_name`, `points`, `account_id`) VALUES
(1, '123', 123, 1),
(2, 'Nabil', 111, 2),
(3, 'Nabildzr', 1, 3),
(5, '111', 1111, 4),
(6, '12312', 13123, 5),
(7, '123123', 13212, 6),
(8, '1231', 23131, 7),
(11, '111', 11, 8),
(12, '111', 11, 9),
(14, '12312', 31231, 10),
(16, '1231', 1313, 11),
(17, '123123', 1231, 12),
(18, '312123', 312, 13),
(19, '321', 32131, 14),
(21, '13232', 13231, 15),
(23, '132', 31231, 16),
(25, '132132', 3212332, 17),
(27, '1231', 31231, 18),
(28, '333', 33, 19),
(29, '333', 33, 20),
(30, '1231313', 3123, 21),
(32, '1231', 3123, 22),
(34, '12312313', 1231, 23),
(35, '1231', 2313, 24),
(37, '111', 11, 25),
(38, '555', 555, 26),
(39, '1231', 23121, 27),
(40, '13231', 132, 28),
(42, '12313', 333, 29),
(43, '12313', 313, 30),
(44, '12313', 33, 31),
(45, '11', 111, 32),
(46, '11', 11, 33),
(47, '3131', 31313, 34),
(48, '333', 33, 35),
(49, '44', 44, 36),
(50, '15', 15151, 37),
(51, '1', 11, 38),
(52, '1321', 3123, 39),
(53, '858', 88, 40),
(54, '333', 33, 41),
(55, '5125152', 15, 42),
(56, '12', 212, 43),
(57, '13', 13123132, 44),
(58, '444', 44, 45),
(59, '444', 44, 46),
(60, '12412', 14, 47),
(61, '444', 44, 48),
(62, '4142', 144, 49),
(63, '1414', 141, 50),
(64, '3', 3, 51),
(65, '4', 4, 52),
(66, '12', 1212, 53),
(67, '33', 3, 54),
(68, '44', 4, 55),
(69, '3', 1, 56),
(70, '11', 111, 57),
(71, '111', 1111, 58),
(72, '12414', 1121, 59),
(73, '2222444', 4444, 60);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Steak & Ribs','Seafood') NOT NULL,
  `category` enum('Main Dishes','Side Snacks','Drinks') NOT NULL,
  `price` decimal(19,4) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `name`, `type`, `category`, `price`, `description`, `image_url`) VALUES
('H0001', 'Vanilla Late', 'Seafood', 'Drinks', 8.5000, 'Lorem Ipsum Dolor Sit Amet. Doekaoaaa', 'https://i.pinimg.com/originals/36/9e/bc/369ebc12a5e43cebafe4692927111032.gif'),
('H0002', 'Matcha', 'Steak & Ribs', 'Drinks', 8.5000, '1111', ''),
('h12', '2211', 'Steak & Ribs', 'Side Snacks', 122.3333, 'waw', 'https://i.pinimg.com/236x/8d/4d/fb/8d4dfbb2d375bea31c3897f05813e03f.jpg'),
('h13', '2211', 'Seafood', 'Side Snacks', 11.5550, 'waw banget', 'https://i.pinimg.com/originals/06/a9/02/06a90224389e61f070918a8136efedfd.gif'),
('h15', '2211', 'Seafood', 'Side Snacks', 55.0000, '111', 'https://i.pinimg.com/originals/75/2f/9a/752f9a8a0d8c330a10af3d31423d0cb8.gif');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staff_role` enum('Waiter','Chef','Manager') NOT NULL,
  `account_id` int NOT NULL,
  `register_date` date DEFAULT NULL,
  `staff_phone` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_email`, `staff_name`, `password`, `staff_role`, `account_id`, `register_date`, `staff_phone`) VALUES
(2, 'aw', 'ope', '$2y$10$l6dzY/KltYPoLljRewaiGuj4pQFAfAGcEFhd.2N6IvErBnFvk8sSi', 'Manager', 2, '2024-10-17', 123),
(3, 'staff', 'opes', '$2y$10$6kKfj3cFKPuQ3nZICDldg.LchfnA5qs/vyZivtFaG.ugGKv5OyUb6', 'Manager', 3, '2024-09-30', 12345),
(4, 'nabil', 'admin', '$2y$10$ku45nBq8UN.hqXRqYU0uHOjgiJvDyMmXOgyUNDTScGmrailQmB/sq', 'Waiter', 4, '2024-10-02', 12312313),
(5, '1241421', 'gagal', '$2y$10$Z05sV8AN.xEcPK7CgkwZLeH7w2NJn/kEDP0xyKnL5YHZe/O844l8O', 'Chef', 5, '2024-10-16', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

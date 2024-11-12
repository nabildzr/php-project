-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2024 at 12:22 AM
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
-- Database: `db_restaurant_v1.5`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `register_date` date NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `email`, `register_date`, `phone_number`, `password`) VALUES
(2, 'nabildzikrika@gmail.com', '2312-12-31', '1231123', '$2y$10$CgF.utIyb/f.T.g0T1MD7uhMEaeT56J7z.LfWxeWXdExL2uYatstW'),
(3, '42342', '1233-02-04', '244', '$2y$10$qMeDUtXEcH9VhbEhPFlYx.wrK3uS/vMWkIjROUZSU6rTjq45paZcy'),
(4, '132123', '0031-12-21', '123132', '$2y$10$6rM1rOtg3IMdUjO3b7uS6Ooevmi8up.wVjZhgIyspuwoO1R5fT7Ua'),
(5, '123', '0023-12-31', '1221', '$2y$10$IU0DEoJuVVUiEU8Z29MP3OJYjlLenUpsB3kmLeLuqvdQZwk.CrGaK'),
(6, '123', '0023-12-31', '1221', '$2y$10$kBZxddAKYwV1ZozYEn62seEQhIlzUa5n0c5p70Ot3Ou0fVwWyED7S'),
(7, '123', '0123-12-03', '1231231', '$2y$10$5pkwWm4k.B4.RepB28Tv8udaJtqK5RQ5mR.K3qJXLSKC8JvcGOtxW'),
(8, '123', '0123-12-03', '1231231', '$2y$10$Q8XnTb9Xj72NlBtbXlVLUupN4ErBC4zBWCifLUrFSobYr65gQN7GK'),
(9, '124', '0124-12-04', '124124', '$2y$10$pcORq/AkHlQ5yZh2qD/mh.gNoRc1UCLdZLMXRBHzMgSbRxaeXpaTC'),
(11, 'nabildzikrika@gmail.com', '2312-12-31', '1231123', '202cb962ac59075b964b07152d234b70'),
(12, 'admin@gmail.com', '0312-02-11', '', '$2y$10$uFfYZ2dM9xxeS0R.AVc4KOOBX79JFzquCCMLPZKlOoB96IOVWj8tS'),
(13, '132123', '0031-12-21', '123132', '$2y$10$BixKX948dCNanYX0AV.f.O2BLUnLRfxEdBomzQ1SaV7Vju5I4SPV2'),
(35, '124124', '1221-12-04', '12412', '$2y$10$2Is5iQoO9atv8SBKLxt/UOpz9zcdmuYJm..WhAsHyMSKXk9fz0UGG'),
(38, 'nabil', '0222-12-31', '12312', '$2y$10$0IH5LMwpgw1/DjrFZZWCC.9fbhZLjWjkCIv9ZmtXXcRLUDQWzIqWG'),
(39, '124', '1241-12-04', '12412', '$2y$10$aVAv65e7D4.fmUR69JjhTebi0cGr1pFY1Y3kWacAG42NYW8cJsru6'),
(44, '124', '0124-12-04', '124124', '$2y$10$VEpveGQXIGECvqUlCzUwSOqmnbTj9Srp2mvWESr1p6qHFw7TtQp72'),
(46, '123', '0031-12-31', '123', '$2y$10$SzqIS5QV18pEgKyD0RiA2OYSfXrXNbGQ94B1PLRoNzdb0DW1J3c7e'),
(48, '124', '1222-12-04', '12412424', '$2y$10$e5ZCOGUsx80fHi/rJXk2c.cTMdDh8jCxgKTaneFWiuxCDE8OTvgZy'),
(49, '5675', '7567-05-06', '575675', '$2y$10$0Zt0zqUg1KmiioaebEnj7ewrIm4fkH2cRbareBYssgIggt5PMUl.i'),
(51, 'nabildzikrika@gmail.com', '1312-12-22', '1231231', '$2y$10$wB4MapOmu2gS6RKkhaNLduwciISElaOFhxKBYVlYUCel.FVMHrati'),
(52, '1', '1111-11-11', '1111', '202cb962ac59075b964b07152d234b70'),
(53, '123123', '2024-10-27', NULL, '$2y$10$CehMA/AOpUEtJw6vtGANDupgNk3eaaEl3oScKVM8BlLhMw7lh8C0O'),
(54, 'admin@gmail.com', '2024-10-27', NULL, '$2y$10$IKWXi9hwmIMBcUvhkj/rVOqS01mnxfcX0VuGpWaCiLXSsKGs/wICK'),
(55, '123', '2024-10-27', NULL, '$2y$10$HkFf31kr1QA6E4Z7XWn.vuVvFvRc9xFCAZpC0IIs.4UnqWCyA.9W6'),
(56, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$CyOHwTi.krFMfx5fnrYYjuoZPC5ZnOxT9pBTPA8Nafw4IoCwcdV9K'),
(57, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$TSXRjYw6jY0AVyAf12WgLuO.8heaXKn5GAZerKusS/zEb105Ebu0u'),
(58, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$QiXTh.fSuQXeddISk7i.0euiSYOrjKUiPtgdgmDgFGLI1pkZVNrka'),
(59, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$yKCAtNS6pHwnYP4Te1OMCuU4HKkO..AQlnBQjCh3.zeAtc/sT7FR2'),
(60, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$Eapo6LKYm7hMXxjf78.VaOzgRlUkK/Xq/4wAbWeL6I3bvHMf4uURW'),
(61, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$XQo7Db8ct7ktCvd4d5gI.O1w6YH3b8.HmS.kthx6YhOHdayem/Bii'),
(62, 'sumba@gmail.com', '2024-10-27', '', '123'),
(63, 'gigi@gmail.com', '2024-10-28', NULL, '$2y$10$SActWIc2Iq4oVPecCrlSqu/5VpC//MVwW1/FeBpi8XjTmD..O2b0i'),
(64, 'nabildzr@gmail.com', '0312-02-12', '', '$2y$10$Yxyk5SxRHg2epinXU8XzkO.AmK6ZNPIx6kCAQNm53P1pxFaFaK342'),
(65, 'nabildzrS@gmail.com', '0123-03-12', '23451', '$2y$10$6VeNjPuUGtMOfvD1wQtnyuYo.cjMKPVrbgm8YBWuLHj72Z4EtOWda'),
(66, 'gaga@gmail.com', '2024-10-29', NULL, '$2y$10$NaeBXogTznCNk5Wj91hvcOwwwA6K3fdFi7ws25sBr9EAnDxP9AAyC'),
(67, 'admin@gmail.com', '0312-02-11', '', '555'),
(68, 'ium@bahrian.xyz', '0312-03-12', '123', '$2y$10$Ckk9JqP1zGrX7BXiPEvgNO47m8IH34p4.WRz7sQegSyo.1IDwId22'),
(69, 'qwe', '0132-03-12', '123123123', '$2y$10$ePwo1UGJTLZraJHjm0sb2.7fR3PmSSwvpWhfQrPhZlML1vKlTk/1q'),
(70, 'qwe', '0132-03-12', '123123123', '$2y$10$pU663v1XzkqBQW/LKyaoQO5icK337j0Ka/HO3dexA4621xhDFyucm'),
(71, '', '0234-04-23', '234', '$2y$10$8GsqUkx8S9xJAWNYy5aYte6aXTg4YFde2KKLT2p8qlUkrruJvQCeu'),
(72, 'random@a.com', '0231-12-31', '1231', '$2y$10$JpQfFmwAjjeRNx8hTdIU/OUxwMBsUvrcu4JqqeimV9Iv0JwfyHSda'),
(73, '12345', '1212-12-31', '12345', '$2y$10$9mGq1z4bazD19X9swbKpJ.ciaIO/t35AFajKoPmCr4VAqM2xFWBXi'),
(74, 'nnabildzr@gmail.com', '2312-12-31', '123123', '$2y$10$mgfutEra3rDQ3KHQ81SBZekNAcq3PVMV3CL7NjuSVbMleWsKK8tXK'),
(75, 'admin@gmail.com', '0021-12-31', '12312', '$2y$10$0EhnW0HaLFKZQVG2a98jZOrVFOfYAIANYWtclhn4DuxFC2O4dwMCi'),
(76, 'dzikrika@gmail.com', '2024-11-03', '', '$2y$10$EoHOenZq/qvW8X6XD1HGveO/SrCJt8HHN2zHKB5AiFsrV2lTwKVPK'),
(77, 'admin@gmail.com', '0002-12-31', '12345', '$2y$10$5xooGqAehDuwaYQTEPlZE.a3T.eyH3oZNLzCmYzCrOl72sjP6UZaq'),
(78, 'giga@gmail.com', '0231-12-31', '1231231', '$2y$10$Kugd3SLHvGMPNW5IbO6GFe6ZQsSCkdPP40m9D3XTfB8nqrsK6.dgO');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int NOT NULL,
  `staff_id` int NOT NULL,
  `member_id` int NOT NULL,
  `reservation_id` int NOT NULL,
  `table_id` int NOT NULL,
  `card_id` int NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bill_time` datetime NOT NULL,
  `payment_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_items`
--

CREATE TABLE `bill_items` (
  `bill_item_id` int NOT NULL,
  `bill_id` int NOT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card_payments`
--

CREATE TABLE `card_payments` (
  `card_id` int NOT NULL,
  `account_holder_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `card_number` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `expiry_date` varchar(7) COLLATE utf8mb4_general_ci NOT NULL,
  `security_code` varchar(3) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `member_id` int DEFAULT NULL,
  `purchased` tinyint(1) DEFAULT NULL,
  `status` enum('success','failed','waiting') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `account_id` int DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `kitchen_id` int NOT NULL,
  `table_id` int DEFAULT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `time_submitted` datetime DEFAULT NULL,
  `time_ended` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `member_id` int NOT NULL,
  `member_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `points` int DEFAULT NULL,
  `account_id` int DEFAULT NULL,
  `member_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`member_id`, `member_name`, `points`, `account_id`, `member_image`) VALUES
(1, '567567', 567, 49, NULL),
(2, 'nabil', 1000, 51, NULL),
(3, '1', 1, 52, NULL),
(4, '123', NULL, 53, NULL),
(5, 'Nabils', NULL, 54, NULL),
(6, '123', NULL, 55, NULL),
(7, 'nabil', NULL, 56, NULL),
(8, 'anjay', NULL, 57, NULL),
(9, '33', NULL, 58, NULL),
(10, '334', NULL, 59, NULL),
(11, '3345', NULL, 60, NULL),
(12, '1123', NULL, 61, NULL),
(13, 'sumbanjay', NULL, 62, NULL),
(14, 'gigi', NULL, 63, NULL),
(15, 'billsw2s', 1000, 64, '67209e6bef383.png'),
(16, 'nabil', NULL, 66, NULL),
(17, 'dzr', 123, 68, NULL),
(18, 'qwe', 1231, 70, NULL),
(19, 'john', 1321, 72, NULL),
(20, 'bill', 1234, 73, NULL),
(21, 'bil', 12312, 74, NULL),
(22, 'Nabil', 12341, 75, NULL),
(23, 'Nabildzr', NULL, 76, '67276862217da.png'),
(24, 'nabil', 12312, 78, '67310f6ce3737.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_type` enum('Chicken Pizza','Beef Burger','Pasta Sushi','Seafoods','Beef Barbeque','Drinks & Juice') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_category` enum('Main Dishes','Side Snacks','Drinks') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_price` decimal(19,4) NOT NULL,
  `item_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `discount_status` tinyint DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_type`, `item_category`, `item_price`, `item_description`, `item_image`, `discount_status`, `discount`) VALUES
('BBQ01', 'Vegetarian', 'Beef Barbeque', 'Main Dishes', 150000.0000, 'Cuisine Meal Health Food', '671db7ed5eb18.png', 1, 24.00),
('P01', 'Brief Pizza', 'Chicken Pizza', 'Main Dishes', 100000.0000, 'Barbecue Italian cuisine pizza', '671db6f1023da.png', 1, 24.00),
('P03', 'Sushi Pizza', 'Chicken Pizza', 'Main Dishes', 160000.0000, 'Japanese Cuisine Chicken', '671db85ad4ad3.png', 1, 24.00),
('PS01', 'Pasta Salad', 'Pasta Sushi', 'Main Dishes', 80000.0000, 'Chow mien Fried noodles', '671db7568e2b5.png', 1, 24.00),
('PS02', 'Chicken Pasta', 'Pasta Sushi', 'Main Dishes', 125000.0000, 'Berbecue Cuisine Gyro Pasta', '671db92a4108a.png', 1, 24.00);

-- --------------------------------------------------------

--
-- Table structure for table `menu_description`
--

CREATE TABLE `menu_description` (
  `item_description_id` int NOT NULL,
  `item_id` varchar(6) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `calories` int DEFAULT NULL,
  `Protein` int DEFAULT NULL,
  `carboidrates` int DEFAULT NULL,
  `fat` int DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `halal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_reviews`
--

CREATE TABLE `menu_reviews` (
  `review_id` int NOT NULL,
  `item_id` varchar(6) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `member_id` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_sales`
--

CREATE TABLE `menu_sales` (
  `sale_id` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity_sold` int DEFAULT NULL,
  `total_sale_amount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int NOT NULL,
  `member_id` int DEFAULT NULL,
  `member_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `table_id` int DEFAULT NULL,
  `reservation_time` time DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `head_count` int DEFAULT NULL,
  `special_request` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `member_id`, `member_name`, `table_id`, `reservation_time`, `reservation_date`, `head_count`, `special_request`) VALUES
(1220244, 24, 'nabil', 4, '12:00:00', '2024-11-23', 911, '123123');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_tables`
--

CREATE TABLE `restaurant_tables` (
  `table_id` int NOT NULL,
  `capacity` int DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant_tables`
--

INSERT INTO `restaurant_tables` (`table_id`, `capacity`, `is_available`) VALUES
(2, 12, 1),
(3, 4, 1),
(4, 911, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int NOT NULL,
  `staff_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `staff_role` enum('Waiter','Chef','Manager') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` int NOT NULL,
  `staff_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_role`, `account_id`, `staff_image`) VALUES
(9, 'waww', 'Waiter', 44, NULL),
(11, 'administrASSS', 'Manager', 65, '673098828c0d0.png'),
(12, 'gagas', 'Manager', 67, '6721bbedab756.png'),
(15, '234234', 'Manager', 71, NULL),
(16, 'admin', 'Manager', 77, '672771a01f487.png');

-- --------------------------------------------------------

--
-- Table structure for table `table_availability`
--

CREATE TABLE `table_availability` (
  `availability_id` int NOT NULL,
  `table_id` int DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_time` time DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_availability`
--

INSERT INTO `table_availability` (`availability_id`, `table_id`, `reservation_date`, `reservation_time`, `status`) VALUES
(1220244, 4, '2024-11-23', '12:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD UNIQUE KEY `staff_id` (`staff_id`),
  ADD UNIQUE KEY `member_id` (`member_id`),
  ADD UNIQUE KEY `reservation_id` (`reservation_id`),
  ADD UNIQUE KEY `table_id` (`table_id`),
  ADD UNIQUE KEY `card_id` (`card_id`);

--
-- Indexes for table `bill_items`
--
ALTER TABLE `bill_items`
  ADD PRIMARY KEY (`bill_item_id`),
  ADD UNIQUE KEY `bill_id` (`bill_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `card_payments`
--
ALTER TABLE `card_payments`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`kitchen_id`),
  ADD UNIQUE KEY `table_id` (`table_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `account_id` (`account_id`),
  ADD KEY `member_name` (`member_name`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `menu_description`
--
ALTER TABLE `menu_description`
  ADD PRIMARY KEY (`item_description_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `menu_reviews`
--
ALTER TABLE `menu_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD UNIQUE KEY `member_id` (`member_id`),
  ADD UNIQUE KEY `item_id_2` (`item_id`);

--
-- Indexes for table `menu_sales`
--
ALTER TABLE `menu_sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD UNIQUE KEY `table_id` (`table_id`),
  ADD UNIQUE KEY `member_name` (`member_name`),
  ADD UNIQUE KEY `member_id` (`member_id`),
  ADD UNIQUE KEY `member_name_2` (`member_name`);

--
-- Indexes for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- Indexes for table `table_availability`
--
ALTER TABLE `table_availability`
  ADD PRIMARY KEY (`availability_id`),
  ADD UNIQUE KEY `table_id` (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_items`
--
ALTER TABLE `bill_items`
  MODIFY `bill_item_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `card_payments`
--
ALTER TABLE `card_payments`
  MODIFY `card_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `kitchen_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `menu_reviews`
--
ALTER TABLE `menu_reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1520244;

--
-- AUTO_INCREMENT for table `restaurant_tables`
--
ALTER TABLE `restaurant_tables`
  MODIFY `table_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table_availability`
--
ALTER TABLE `table_availability`
  MODIFY `availability_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1320244;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `card_payments` (`card_id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `bills_ibfk_3` FOREIGN KEY (`member_id`) REFERENCES `memberships` (`member_id`),
  ADD CONSTRAINT `bills_ibfk_4` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bills_ibfk_5` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_items`
--
ALTER TABLE `bill_items`
  ADD CONSTRAINT `bill_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`),
  ADD CONSTRAINT `bill_items_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`bill_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `memberships` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD CONSTRAINT `kitchen_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`),
  ADD CONSTRAINT `kitchen_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `menu_description`
--
ALTER TABLE `menu_description`
  ADD CONSTRAINT `menu_description_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_reviews`
--
ALTER TABLE `menu_reviews`
  ADD CONSTRAINT `menu_reviews_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_reviews_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `memberships` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_sales`
--
ALTER TABLE `menu_sales`
  ADD CONSTRAINT `menu_sales_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `memberships` (`member_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `table_availability`
--
ALTER TABLE `table_availability`
  ADD CONSTRAINT `table_availability_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `restaurant_tables` (`table_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2024 at 01:23 AM
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
-- Database: `db_restaurant_v1.1`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `email`, `register_date`, `phone_number`, `password`) VALUES
(1, '', '3331-12-12', '', '$2y$10$KSYH.axoXsOobDmOajVo6OZFPZ8jU1MvLp2TL.r.8FrcUNgctTkRq'),
(2, 'nabildzikrika@gmail.com', '2312-12-31', '1231123', '$2y$10$CgF.utIyb/f.T.g0T1MD7uhMEaeT56J7z.LfWxeWXdExL2uYatstW'),
(3, '42342', '1233-02-04', '244', '$2y$10$qMeDUtXEcH9VhbEhPFlYx.wrK3uS/vMWkIjROUZSU6rTjq45paZcy'),
(4, '132123', '0031-12-21', '123132', '$2y$10$6rM1rOtg3IMdUjO3b7uS6Ooevmi8up.wVjZhgIyspuwoO1R5fT7Ua'),
(5, '123', '0023-12-31', '1221', '$2y$10$IU0DEoJuVVUiEU8Z29MP3OJYjlLenUpsB3kmLeLuqvdQZwk.CrGaK'),
(6, '123', '0023-12-31', '1221', '$2y$10$kBZxddAKYwV1ZozYEn62seEQhIlzUa5n0c5p70Ot3Ou0fVwWyED7S'),
(7, '123', '0123-12-03', '1231231', '$2y$10$5pkwWm4k.B4.RepB28Tv8udaJtqK5RQ5mR.K3qJXLSKC8JvcGOtxW'),
(8, '123', '0123-12-03', '1231231', '$2y$10$Q8XnTb9Xj72NlBtbXlVLUupN4ErBC4zBWCifLUrFSobYr65gQN7GK'),
(9, '124', '0124-12-04', '124124', '$2y$10$pcORq/AkHlQ5yZh2qD/mh.gNoRc1UCLdZLMXRBHzMgSbRxaeXpaTC'),
(11, 'nabildzikrika@gmail.com', '2312-12-31', '1231123', '$2y$10$MOFOufwvBMs795YVToU8KO1BbSBAspfvYxYW8ouQ8qBmfXZZgbFsq'),
(12, 'nabil', '1212-12-22', '12312', '$2y$10$uFfYZ2dM9xxeS0R.AVc4KOOBX79JFzquCCMLPZKlOoB96IOVWj8tS'),
(13, '132123', '0031-12-21', '123132', '$2y$10$BixKX948dCNanYX0AV.f.O2BLUnLRfxEdBomzQ1SaV7Vju5I4SPV2'),
(35, '124124', '1221-12-04', '12412', '$2y$10$2Is5iQoO9atv8SBKLxt/UOpz9zcdmuYJm..WhAsHyMSKXk9fz0UGG'),
(38, 'nabil', '0222-12-31', '12312', '$2y$10$0IH5LMwpgw1/DjrFZZWCC.9fbhZLjWjkCIv9ZmtXXcRLUDQWzIqWG'),
(39, '124', '1241-12-04', '12412', '$2y$10$aVAv65e7D4.fmUR69JjhTebi0cGr1pFY1Y3kWacAG42NYW8cJsru6'),
(44, '124', '0124-12-04', '124124', '$2y$10$VEpveGQXIGECvqUlCzUwSOqmnbTj9Srp2mvWESr1p6qHFw7TtQp72'),
(46, '123', '0031-12-31', '123', '$2y$10$SzqIS5QV18pEgKyD0RiA2OYSfXrXNbGQ94B1PLRoNzdb0DW1J3c7e'),
(48, '124', '1222-12-04', '12412424', '$2y$10$e5ZCOGUsx80fHi/rJXk2c.cTMdDh8jCxgKTaneFWiuxCDE8OTvgZy'),
(49, '5675', '7567-05-06', '575675', '$2y$10$0Zt0zqUg1KmiioaebEnj7ewrIm4fkH2cRbareBYssgIggt5PMUl.i'),
(50, '56', '5676-05-06', '567567', '$2y$10$I2HS9F0rxj1Toc2c3t4wvuZixCYFlEHO564X7NTE1EQlykpBFCI1S'),
(51, 'nabildzikrika@gmail.com', '1312-12-22', '1231231', '$2y$10$wB4MapOmu2gS6RKkhaNLduwciISElaOFhxKBYVlYUCel.FVMHrati'),
(52, '1', '1111-11-11', '1111', '$2y$10$Ksph3KvMWgZ6Gu2xrq5UqeEsNuwBHNympFXeH3xhNo1Kq57b5SQ5.'),
(53, '123123', '2024-10-27', NULL, '$2y$10$CehMA/AOpUEtJw6vtGANDupgNk3eaaEl3oScKVM8BlLhMw7lh8C0O'),
(54, 'admin@gmail.com', '2024-10-27', NULL, '$2y$10$IKWXi9hwmIMBcUvhkj/rVOqS01mnxfcX0VuGpWaCiLXSsKGs/wICK'),
(55, '123', '2024-10-27', NULL, '$2y$10$HkFf31kr1QA6E4Z7XWn.vuVvFvRc9xFCAZpC0IIs.4UnqWCyA.9W6'),
(56, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$CyOHwTi.krFMfx5fnrYYjuoZPC5ZnOxT9pBTPA8Nafw4IoCwcdV9K'),
(57, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$TSXRjYw6jY0AVyAf12WgLuO.8heaXKn5GAZerKusS/zEb105Ebu0u'),
(58, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$QiXTh.fSuQXeddISk7i.0euiSYOrjKUiPtgdgmDgFGLI1pkZVNrka'),
(59, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$yKCAtNS6pHwnYP4Te1OMCuU4HKkO..AQlnBQjCh3.zeAtc/sT7FR2'),
(60, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$Eapo6LKYm7hMXxjf78.VaOzgRlUkK/Xq/4wAbWeL6I3bvHMf4uURW'),
(61, 'nabildzikrika@gmail.com', '2024-10-27', NULL, '$2y$10$XQo7Db8ct7ktCvd4d5gI.O1w6YH3b8.HmS.kthx6YhOHdayem/Bii'),
(62, 'sumba@gmail.com', '2024-10-27', NULL, '$2y$10$HNBI09d.LkzwEV91hPppFO1k2dgzV0Q.HmTZIyw4l0IP.LPFckWsG');

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
  `payment_method` varchar(255) NOT NULL,
  `bill_time` datetime NOT NULL,
  `payment_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_items`
--

CREATE TABLE `bill_items` (
  `bill_item_id` int NOT NULL,
  `bill_id` int NOT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card_payments`
--

CREATE TABLE `card_payments` (
  `card_id` int NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiry_date` varchar(7) NOT NULL,
  `security_code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `member_id` int NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `points` int DEFAULT NULL,
  `account_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`member_id`, `member_name`, `points`, `account_id`) VALUES
(1, '567567', 567, 49),
(2, 'nabil', 1000, 51),
(3, '1', 1, 52),
(4, '123', NULL, 53),
(5, 'Nabils', NULL, 54),
(6, '123', NULL, 55),
(7, 'nabil', NULL, 56),
(8, 'anjay', NULL, 57),
(9, '33', NULL, 58),
(10, '334', NULL, 59),
(11, '3345', NULL, 60),
(12, '1123', NULL, 61),
(13, 'sumba', NULL, 62);

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
  `item_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_type`, `item_category`, `item_price`, `item_description`, `item_image`) VALUES
('BBQ01', 'Vegetarian', 'Beef Barbeque', 'Main Dishes', 150000.0000, 'Cuisine Meal Health Food', '671db7ed5eb18.png'),
('P01', 'Brief Pizza', 'Chicken Pizza', 'Main Dishes', 100000.0000, 'Barbecue Italian cuisine pizza', '671db6f1023da.png'),
('P03', 'Sushi Pizza', 'Chicken Pizza', 'Main Dishes', 160000.0000, 'Japanese Cuisine Chicken', '671db85ad4ad3.png'),
('PS01', 'Pasta Salad', 'Pasta Sushi', 'Main Dishes', 80000.0000, 'Chow mien Fried noodles', '671db7568e2b5.png'),
('PS02', 'Chicken Pasta', 'Pasta Sushi', 'Main Dishes', 125000.0000, 'Berbecue Cuisine Gyro Pasta', '671db92a4108a.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sales`
--

CREATE TABLE `menu_sales` (
  `sale_id` varchar(11) NOT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity_sold` int DEFAULT NULL,
  `total_sale_amount` int DEFAULT NULL,
  `discount_status` tinyint NOT NULL,
  `discount` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu_sales`
--

INSERT INTO `menu_sales` (`sale_id`, `item_id`, `quantity_sold`, `total_sale_amount`, `discount_status`, `discount`) VALUES
('26R63w9A4Du', 'P01', NULL, NULL, 1, 24.00),
('HjmjNmvdvwm', 'PS02', NULL, NULL, 1, 24.00),
('rUxyn0z96zS', 'PS01', NULL, NULL, 1, 24.00),
('wZoZENtHE0E', 'P03', NULL, NULL, 1, 24.00),
('yRk3JV0jkI5', 'BBQ01', NULL, NULL, 1, 24.00);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int NOT NULL,
  `staff_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `staff_role` enum('Waiter','Chef','Manager') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_role`, `account_id`) VALUES
(9, 'waww', 'Waiter', 44),
(10, '567', 'Chef', 50);

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
-- Indexes for table `menu_sales`
--
ALTER TABLE `menu_sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `card_payments` (`card_id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `bills_ibfk_3` FOREIGN KEY (`member_id`) REFERENCES `memberships` (`member_id`);

--
-- Constraints for table `bill_items`
--
ALTER TABLE `bill_items`
  ADD CONSTRAINT `bill_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`),
  ADD CONSTRAINT `bill_items_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`bill_id`);

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `menu_sales`
--
ALTER TABLE `menu_sales`
  ADD CONSTRAINT `menu_sales_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

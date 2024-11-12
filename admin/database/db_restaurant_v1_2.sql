-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2024 at 01:11 AM
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
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `email`, `register_date`, `phone_number`, `password`) VALUES
(1, '', '3331-12-12', '', '$2y$10$KSYH.axoXsOobDmOajVo6OZFPZ8jU1MvLp2TL.r.8FrcUNgctTkRq'),
(2, 'asdasd', '2312-12-31', '2131', '$2y$10$CgF.utIyb/f.T.g0T1MD7uhMEaeT56J7z.LfWxeWXdExL2uYatstW'),
(3, '42342', '1233-02-04', '244', '$2y$10$qMeDUtXEcH9VhbEhPFlYx.wrK3uS/vMWkIjROUZSU6rTjq45paZcy'),
(4, '132123', '0031-12-21', '123132', '$2y$10$6rM1rOtg3IMdUjO3b7uS6Ooevmi8up.wVjZhgIyspuwoO1R5fT7Ua'),
(5, '123', '0023-12-31', '1221', '$2y$10$IU0DEoJuVVUiEU8Z29MP3OJYjlLenUpsB3kmLeLuqvdQZwk.CrGaK'),
(6, '123', '0023-12-31', '1221', '$2y$10$kBZxddAKYwV1ZozYEn62seEQhIlzUa5n0c5p70Ot3Ou0fVwWyED7S'),
(7, '123', '0123-12-03', '1231231', '$2y$10$5pkwWm4k.B4.RepB28Tv8udaJtqK5RQ5mR.K3qJXLSKC8JvcGOtxW'),
(8, '123', '0123-12-03', '1231231', '$2y$10$Q8XnTb9Xj72NlBtbXlVLUupN4ErBC4zBWCifLUrFSobYr65gQN7GK'),
(9, '13', '2313-12-31', '333', '$2y$10$pcORq/AkHlQ5yZh2qD/mh.gNoRc1UCLdZLMXRBHzMgSbRxaeXpaTC'),
(10, '13', '2313-12-31', '333', '$2y$10$T1S4SoLqv9P60tYb4rvj3OTG5OTr.7r8Fi5gIpyKksP9XkWsEGzWu'),
(11, 'nabildzikrika@gmail.com', '2312-12-31', '1231123', '$2y$10$MOFOufwvBMs795YVToU8KO1BbSBAspfvYxYW8ouQ8qBmfXZZgbFsq'),
(12, 'nabil', '1212-12-22', '12312', '$2y$10$uFfYZ2dM9xxeS0R.AVc4KOOBX79JFzquCCMLPZKlOoB96IOVWj8tS'),
(13, '132123', '0031-12-21', '123132', '$2y$10$BixKX948dCNanYX0AV.f.O2BLUnLRfxEdBomzQ1SaV7Vju5I4SPV2');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int UNSIGNED NOT NULL,
  `image_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image_data` longblob NOT NULL,
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `member_id` int NOT NULL,
  `member_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `points` int NOT NULL,
  `account_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`member_id`, `member_name`, `points`, `account_id`) VALUES
(2, '123132', 131, 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_type` enum('Steak and Ribs','Seafood') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_category` enum('Main Dishes','Side Snacks','Drinks') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_price` decimal(19,4) NOT NULL,
  `item_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_type`, `item_category`, `item_price`, `item_description`, `item_image`) VALUES
('111', '11', 'Seafood', 'Side Snacks', 12312.0000, '1111', '670c9b2ab84e9.jpeg'),
('123', '123131', 'Steak and Ribs', 'Side Snacks', 121241.0000, '412124', '670dcd0997823.png'),
('12412', '241421', 'Seafood', 'Main Dishes', 124142.0000, '124141', '670d2316aa44e.png'),
('124124', '4124124', 'Seafood', 'Side Snacks', 124142.0000, '41241241', '670dcc8decb03.gif'),
('4124', '41', 'Seafood', 'Side Snacks', 124124.0000, '124142', '670d1a4654b7e.jpeg'),
('r12', '4124', 'Seafood', 'Side Snacks', 1244.0000, '412412', '670d1f802bb94.jpeg'),
('XC1', '1241', 'Seafood', 'Main Dishes', 124124.0000, '412442', '670cbcdd31a72.jpg');

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
(1, '123132', 'Waiter', 9),
(2, 'admin', 'Chef', 11),
(3, 'operator', 'Chef', 12),
(4, '123', 'Waiter', 13);

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

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
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`);

--
-- Constraints for table `memberships`
--
ALTER TABLE `memberships`
  ADD CONSTRAINT `memberships_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

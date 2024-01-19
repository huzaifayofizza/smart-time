-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 10:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `categroy`
--

CREATE TABLE `categroy` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categroy`
--

INSERT INTO `categroy` (`category_id`, `category_name`) VALUES
(2, 'Omega SA'),
(3, 'Patek Philippe'),
(4, 'Audemars Piguet'),
(5, 'Vacheron Constantin'),
(6, 'IWC Schaffhausen');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_order_id` int(11) NOT NULL,
  `item_prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `order_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_img`, `prod_price`, `prod_cate_id`) VALUES
(3, 'omega sa', 'Luxury and precision; symbol of status and craftsmanship.', 'assets/images/1.png', 120, 2),
(4, 'omega sa', 'Swiss luxury watchmaker known for precision and innovation', 'assets/images/2.png', 130, 2),
(6, 'omega sa', 'Swiss brand combining sportiness with style popular among athletes', 'assets/images/3.png', 190, 2),
(7, 'omega sa', 'Japanese brand with a focus on innovation offers a wide range of watches', 'assets/images/4.png', 200, 2),
(8, 'omega sa', 'Japanese brand known for eco-friendly technologies; diverse watch range', 'assets/images/5.png', 210, 2),
(9, 'Patek philippe', 'Japanese brand; diverse range from affordable to high-tech timepieces.', 'assets/images/6.png', 230, 3),
(10, 'Patek philippe', 'American brand blending with function stylish watches at accessible prices', 'assets/images/8.png', 170, 3),
(11, 'Patek philippe', 'Swiss brand known for pilot watches and chronographs; precision and durability', 'assets/images/7.png', 160, 3),
(12, 'Patek philippe', 'Italian luxury watchmaker bold and distinctive designs robust aesthetic', 'assets/images/10.png', 300, 3),
(13, 'Patek philippe', 'Timeless elegance wrist  bound', 'assets/images/11.png', 120, 3),
(14, 'audemars piguet', 'Embrace every moment, adorned in precision', 'assets/images/12.png', 150, 4),
(16, 'audemars piguet', 'Chronicles of style, narrated by seconds.', 'assets/images/13.png', 140, 4),
(17, 'audemars piguet', 'Beyond timekeeping, a symphony of craftsmanship.', 'assets/images/14.png', 190, 4),
(18, 'audemars piguet', 'Wristwear that whispers stories of timeless grace.', 'assets/images/15.png', 200, 4),
(19, 'audemars piguet', 'In a world of seconds, make yours unforgettable.', 'assets/images/17.png', 180, 4),
(20, 'vacheron constantin', 'Crafted for moments that stand the test of time.', 'assets/images/19.png', 200, 5),
(21, 'vacheron constantin', 'Where artistry meets functionality wrist poetry unfolds', 'assets/images/20.png', 240, 5),
(22, 'vacheron constantin', 'Sculpting time, one tick at a time', 'assets/images/21.png', 300, 5),
(23, 'vacheron constantin', 'Journey through time, clad in refined aesthetics', 'assets/images/22.png', 500, 5),
(24, 'vacheron constantin', 'Wear the legacy, carry the minutes with poise', 'assets/images/23.png', 450, 5),
(25, 'IWC schaffhausen', 'Timepieces that transcend trends, marking milestones', 'assets/images/9.png', 200, 6),
(27, 'IWC schaffhausen', 'Adorn your wrist, embrace the art of precision', 'assets/images/25.png', 300, 6),
(28, 'IWC schaffhausen', 'Style that ticks, sophistication that tocks', 'assets/images/24.png', 160, 6),
(29, 'IWC schaffhausen', 'A symphony of gears, orchestrating elegance', 'assets/images/26.png', 290, 6);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role_id`) VALUES
(6, 'admin', 'admin123@gmail.com', 'admin123', 1),
(7, 'huzaifa', 'huzaifa123@gmail.com', 'huzaifa123', 2),
(8, 'huzaifa', 'huzaifa123@gmail.com', 'huzaifa123', 2),
(9, 'huzaifa', 'huzaifa123@gmail.com', 'huzaifa123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categroy`
--
ALTER TABLE `categroy`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_order_id` (`item_order_id`),
  ADD KEY `items_ibfk_2` (`item_prod_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_user_id` (`order_user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `uniqe_product_desc` (`product_desc`) USING HASH,
  ADD KEY `Foreign key` (`prod_cate_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categroy`
--
ALTER TABLE `categroy`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`item_order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`item_prod_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`prod_cate_id`) REFERENCES `categroy` (`category_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

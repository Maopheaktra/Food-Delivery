-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Mar 11, 2024 at 03:35 AM
=======
-- Generation Time: Mar 10, 2024 at 04:02 PM
>>>>>>> change_password
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfood`
--

CREATE TABLE `addfood` (
  `add_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(225) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `cate_img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `description`, `name`, `cate_img`) VALUES
<<<<<<< HEAD
(1, 'no', 'Breakfast', 'Breakfast.png'),
(2, 'for breakfast', 'Burger', 'Burger.png'),
(3, '', 'Pizza', 'Pizza.png'),
(4, 'Good ', 'Salad', 'Salad.png'),
(5, 'The most popular food in the world', 'Sandwich', 'Sandwich.png');
=======
(1, 'no', 'Fast food', ''),
(2, 'for breakfast', 'Breakfast', ''),
(3, '', 'Chinese Food', ''),
(4, 'Good ', 'Banana', ''),
(5, 'The most popular food in the world', 'Cambodia Food', '');
>>>>>>> change_password

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `contents` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `date`, `user_id`, `restaurant_id`, `contents`) VALUES
(1, '2024-03-10 01:58:48', 6, 5, 'Good restaurant'),
(2, '2024-03-10 08:16:16', 9, 5, 'I\'m Rady.');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<<<<<<< HEAD
--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `user_id`, `restaurant_id`) VALUES
(1, 6, 5);

=======
>>>>>>> change_password
-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `Food_id` int(10) UNSIGNED NOT NULL,
  `Foodname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`Food_id`, `Foodname`, `description`, `price`, `category_id`) VALUES
(1, 'Bread', 'no', '23', 1),
(2, 'beef', 'no', '23', 1),
(3, 'Bay Cha', 'Fast delivery for customer', '5', 2),
(6, 'Chinese Noodle', '', '3', 3),
(7, 'Quo deserunt vel rer', 'Excepteur consequatu', '881', 4),
(8, 'Fried Noodle', 'Good service', '4', 2),
(11, 'Qui et facere adipis', 'no', '6', 2),
(12, 'Tempor reprehenderit', 'Quia aperiam qui ten', '4', 4),
<<<<<<< HEAD
(13, 'Khmer Sandwich', '', '1', 5),
(14, 'Thai Sandwich', '', '2', 5);
=======
(13, 'Somlor kako', 'the best food in Kompong Thom Province', '1', 5),
(14, 'Somlor kari', 'not description', '2', 5),
(15, 'Khmer noodle', 'no description', '3', 5);
>>>>>>> change_password

-- --------------------------------------------------------

--
-- Table structure for table `notificatins`
--

CREATE TABLE `notificatins` (
  `notification_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetail_id` int(11) UNSIGNED NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `action` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderDetail_id`, `foodname`, `user_id`, `quantity`, `restaurant_id`, `total_price`, `action`, `time`) VALUES
<<<<<<< HEAD
(1, 'Bay Cha', 6, 1, 2, '5', 1, '2024-03-06 08:07:46'),
=======
(1, 'Bay Cha', 6, 1, 2, '5', 0, '2024-03-06 08:07:46'),
>>>>>>> change_password
(2, 'Somlor kako', 6, 4, 5, '4', 3, '2024-03-06 07:57:23'),
(3, 'Khmer noodle', 6, 1, 5, '3', 0, '2024-03-08 01:28:46'),
(4, 'Somlor kari', 6, 3, 5, '6', 0, '2024-03-08 01:28:46'),
(5, 'Somlor kako', 6, 3, 5, '3', 0, '2024-03-08 01:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `deliver_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(10) UNSIGNED NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `time_open` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_close` varchar(11) DEFAULT NULL,
  `res_img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `address`, `time_open`, `description`, `user_id`, `time_close`, `res_img`) VALUES
(1, 'RTK BEEFE', 'Phnom Penh', '08:30', 'No', 2, '19:00', 'trending1.png'),
(2, 'Lk', 'Borey sorla 371, Sensok, PP', '09:00', 'Sell food 24hr', 3, '22:54', 'trending1.png'),
(3, 'IT FOOD ', 'Pnc, Tropang Chhuk, Obek kaorm, Phnom Penh', '16:00', 'Please support my new Restuarant. Thank you😘', 4, '23:00', 'trending1.png'),
(4, 'SN-KompongChhnang', 'KompongChhnang', '07:00', 'ឆ្ងាញ់ ស្អាត អនាម័យល្អ គឺមាននៅ SN-KompongChhnang', 5, '10:00', 'trending1.png'),
<<<<<<< HEAD
(5, 'Kompong Thom Restaurant', 'Kompong Thom, Tank kok', '08:30', 'The restaurant has a lot of food.', 7, '17:30', 'IMG-65edd7f1a02667.05645755.png');
=======
(5, 'Tank kok Restaurant', 'Kompong Thom, Tank kok', '08:30', 'The restaurant has a lot of food.', 7, '17:30', 'IMG-65edca3828ed37.14728843.jpg');
>>>>>>> change_password

-- --------------------------------------------------------

--
-- Table structure for table `res_categories`
--

CREATE TABLE `res_categories` (
  `res_categoryID` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_categories`
--

INSERT INTO `res_categories` (`res_categoryID`, `restaurant_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
<<<<<<< HEAD
(5, 5, 5),
(6, 5, 6),
(7, 5, 7);
=======
(5, 5, 5);
>>>>>>> change_password

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_type`) VALUES
(1, 'Customer'),
(2, 'Owner'),
(3, 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `phoneNumber` varchar(225) DEFAULT NULL,
  `user_img` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `role_id`, `phoneNumber`, `user_img`) VALUES
<<<<<<< HEAD
(1, 'Voeun Chanthou', 'voeunchanthou74@gmail.com', '$2y$10$s7.TGlhtLgsFjpXB5ctrTueT5n6mjkgpjJRwCU7BEk9FJcj3Ys0tC', 'M', 4, '070898032', 'IMG-65ede9fd0e1407.79484555.jpg'),
=======
(1, 'Voeun Chanthou', 'voeunchanthou74@gmail.com', '$2y$10$s7.TGlhtLgsFjpXB5ctrTueT5n6mjkgpjJRwCU7BEk9FJcj3Ys0tC', 'M', 4, '070898032', 'IMG-65e7bd26e36c93.04288160.jpg'),
>>>>>>> change_password
(2, 'ROEURN', 'roeurnkaki@gmail.com', '$2y$10$njj3WOjG3bgI4BcYHiIS/e8G15rpXLTFo5iLKPlyCq88yJ9bxpnO2', 'M', 2, '0719163052', 'IMG-65d9f4f69e5411.43011126.jpg'),
(3, 'Pheaktra', 'pheaktra.mao@student.passerellesnumeriques.org', '$2y$10$IX2ZOlGPYEzMT/BBpRKXuOUbtkq.U9I6hh/6a.1D5iJDkYmUFxeTa', 'F', 2, '0886461253', 'IMG-65d9f4f69e5411.43011126.jpg'),
(4, 'Chuon Veasna', 'chuonveasna500@gmail.com', '$2y$10$8oEy56N6/IPzE2QAQLq97eYTRgdCE9ihhQYKu54QCn4GQbQ1Z4zM6', 'M', 2, '0718911019', 'IMG-65d9f4f69e5411.43011126.jpg'),
(5, 'SreyNuch', 'sreynuchthoeun94@gmail.com', '$2y$10$cdtwlcSoO.FDG7KnjvM71uTZywP4zMRAPxMGFGyYT7tnVOG3Upviq', 'F', 2, '0319612352', 'IMG-65d9f4f69e5411.43011126.jpg'),
(6, 'Roth', 'roth@gmail.com', '$2y$10$A/G4TqYveELs2M02sEk8PO2CIxwj5A47qYl/TpObHzmzO8SUGOrQO', 'M', 1, '0747939554', 'IMG-65e7c0f96bb044.66271487.jpg'),
(7, 'sothea', 'sothea@gmail.com', '$2y$10$Gpx1v0Z3hRk/Ssc23ViCEO7nFUz4EjLMhjsvPk5omSV/SWilfwLsS', 'M', 2, '089903043', 'IMG-65d9f4f69e5411.43011126.jpg'),
<<<<<<< HEAD
(9, 'Rady', 'rady@gmail.com', '$2y$10$UAGaOBkwUe1/afDNLTnWQ.OQVqR5KF4mxYKMXGIm9QPpaHzdru1DK', 'M', 1, '09876545', 'IMG-65edb284915d97.99013425.jpg');
=======
(9, 'rady', 'rady@gmail.com', '$2y$10$UAGaOBkwUe1/afDNLTnWQ.OQVqR5KF4mxYKMXGIm9QPpaHzdru1DK', 'M', 1, '09876545', 'IMG-65edb284915d97.99013425.jpg');
>>>>>>> change_password

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_user_id_index` (`user_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `favorites_user_id_index` (`user_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`Food_id`),
  ADD KEY `foods_category_id_index` (`category_id`);

--
-- Indexes for table `notificatins`
--
ALTER TABLE `notificatins`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `notificatins_comment_id_index` (`comment_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetail_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_user_id_index` (`user_id`),
  ADD KEY `orders_deliver_id_index` (`deliver_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `res_categories`
--
ALTER TABLE `res_categories`
  ADD PRIMARY KEY (`res_categoryID`),
  ADD KEY `res_categories_restaurant_id_index` (`restaurant_id`),
  ADD KEY `res_categories_category_id_index` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
<<<<<<< HEAD
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> change_password

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
<<<<<<< HEAD
  MODIFY `favorite_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `favorite_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
>>>>>>> change_password

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `Food_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notificatins`
--
ALTER TABLE `notificatins`
  MODIFY `notification_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetail_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `res_categories`
--
ALTER TABLE `res_categories`
  MODIFY `res_categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

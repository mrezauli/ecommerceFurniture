-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 09:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercefurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Mobile_Number` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Customer_Name`, `Address`, `Mobile_Number`, `Quantity`) VALUES
(1, 'po', 'po', 'po', 55),
(2, 'user', 'sadarghat', '0123456789', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Upload_Product_Image` varchar(255) NOT NULL,
  `Token` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Product_Name`, `Price`, `Category`, `Description`, `Upload_Product_Image`, `Token`, `unique_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(84, 'oppo', 289, 'Laptop', 'most ', '02968726b74.jpg', 1, '4fc283f8b33', '2017-11-07 21:03:50', '2017-11-08 03:03:35', '0000-00-00 00:00:00'),
(85, 'liop', 985632, 'AC', 'pop', '94ed9efb7c9.png', 1, '94ed9efb7c9', '2017-11-08 08:10:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'lg', 1234565, 'Mobile', 'lg', 'fb72230c0c1.jpg', 1, 'fb72230c0c1', '2017-11-08 08:12:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'hbfb', 878978, 'Laptop', 'jjkjn', 'cd55b249424.jpg', 0, 'cd55b249424', '2017-11-08 08:14:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `is_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `is_admin`, `is_user`) VALUES
(1, 'con', 'con', 'con', 0, 0),
(2, 'admin', 'admin', 'admin', 1, 0),
(3, 'koi', 'koi', 'koi', 0, 0),
(4, 'jon', 'jon', 'jon', 0, 0),
(5, 'lop', 'lop', 'lop', 0, 0),
(6, 'hi', 'hi', 'hi', 0, 0),
(7, 'user', 'user', 'user', 0, 1),
(8, 'po', 'po', 'po', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

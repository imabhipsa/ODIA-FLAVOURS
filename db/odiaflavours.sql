-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 10:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odiaflavours`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `name`, `mobile`, `email`, `address`, `order_id`) VALUES
(1, 'cheni', '2147483647', 'tooth@gmail.com', 'Durgapur,Barabati\r\nDharmasala', 11),
(2, 'ghh', '7606059808', 'tooth@gmail.com', 'Durgapur,Barabati\r\nDharmasala', 1),
(3, '12345', '7606059808', 'ashirbadapanigrahi@gmail.com', 'Durgapur,Barabati\r\nDharmasala', 4),
(5, 'cheni', '7606059808', 'ashirbadapanigrahi@gmail.com', 'Durgapur,Barabati\r\nDharmasala', 11),
(6, 'cheni', '7606059808', 'ashirbadapanigrahi@gmail.com', 'Durgapur,Barabati\r\nDharmasala', 17);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `description`, `img`) VALUES
(1, 'biriyani', 'veg', '130', '', 'images\\products\\biriyani.jpg'),
(2, 'chicken', 'nonveg', '100', '', 'images\\products\\chicken masala.jpg'),
(3, 'mushrooms', 'veg', '100', '', 'images\\products\\mushroom.jpg'),
(4, 'chili chicken', 'nonveg', '150', '', 'images\\products\\chili chicken.jpg'),
(5, 'chomin', 'fastfood', '40', '', 'images\\products\\chomin.jpg'),
(6, 'idli sambar', 'fastfood', '25', '', 'images\\products\\idli.jpg'),
(7, 'dalma', 'veg', '25', '', 'images\\products\\dalma.jpg'),
(8, 'matar paneer', 'veg', '70', '', 'images\\products\\Mutter-Paneer-GettyImages-670907161-58d00a633df78c3c4f3b9bb2.jpg'),
(9, 'veg thali', 'veg', '100', '', 'images\\products\\CVRICE1.jpg'),
(11, 'masala aloo', 'veg', '20', '', 'images\\products\\masala aloo.jpg'),
(12, 'pakhala thali', 'veg', '70', '', 'images\\products\\Pakhalabhata.jpg'),
(13, 'salad', 'veg', '15', '', 'images\\products\\salad.jpg'),
(14, 'saga vaja', 'veg', '20', '', 'images\\products\\sagavaja.jpg'),
(16, 'masala prawn', 'nonveg', '150', '', 'images\\products\\chingudi.jpg'),
(17, 'egg masala', 'nonveg', '50', '', 'images\\products\\egg masala.jpg'),
(18, 'chicken biriyani', 'nonveg', '200', '', 'images\\products\\Chicken-Biryani.jpg'),
(19, 'chicken pakora', 'nonveg', '70', '', 'images\\products\\pakoda.jpg'),
(20, 'fish curry', 'nonveg', '70', '', 'images\\products\\fishcurry.jpg'),
(21, 'mutton biriyani', 'nonveg', '300', '', 'images\\products\\mutton.webp'),
(22, 'egg roll', 'fastfood', '50', '', 'images\\products\\eggroll.jpg'),
(23, 'dahibara', 'fastfood', '30', '', 'images\\products\\dahibara.jpg'),
(24, 'bara ghuguni', 'fastfood', '25', '', 'images\\products\\bara.jpg'),
(25, 'puri', 'fastfood', '25', '', 'images\\products\\puri.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'abhi@gmaul.com', 'abhi'),
(2, 'gudu@gmail.com', 'gudud'),
(3, 'abguu@gmail.com', '4567'),
(4, 'abguu@gmail.com', '4567'),
(5, 'abhipsapanigrahi7@gmail.com', 'happyme'),
(6, 'abhipsa@gmail.com', '45456'),
(7, '', '7787');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

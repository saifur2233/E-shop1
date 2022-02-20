-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 05:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `uname`, `pass`, `email`, `fullname`, `mobile`) VALUES
(1, 'saif', '1234', 'saif@gmail.com', 'Saifur Rahman', '01838082983'),
(2, 'saifur', '12345678', 'saifur@gmail.com', 'Saifur Rahman', '01838082983'),
(3, 'akash', '1234', 'saifur@gmail.com', 'Saifur Rahman', '01838082983');

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE `all_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(8) NOT NULL,
  `quantity` varchar(4) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `product_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`product_id`, `product_name`, `price`, `quantity`, `categories`, `product_img`) VALUES
(1, 'Red Shirt', '500', '12', 'hot_deals', 'images/1.png'),
(2, 'Music Speaker', '1230', '12', 'hot_deals', 'images/2.png'),
(3, 'Blue Shirt', '800', '10', 'hot_deals', 'images/3.png'),
(4, 'Bluetooth Speaker', '1230', '12', 'hot_deals', 'images/4.png'),
(5, 'Stylist Sunglass', '700', '12', 'hot_deals', 'images/5.png'),
(6, 'Blue Color Bag', '1000', '9', 'hot_deals', 'images/6.png'),
(7, 'T-Shirt', '700', '12', 'new_collection', 'images/7.png'),
(8, 'Bluetooth Headphone', '700', '12', 'new_collection', 'images/8.png'),
(9, 'New Shirt', '800', '10', 'new_collection ', 'images/9.png'),
(10, 'Black T-Shirt', '300', '15', 'new_collection', 'images/10.png'),
(11, 'Small Light+Bluetooth ', '800', '10', 'new_collection ', 'images/11.png'),
(17, 'Blue Color Bag', '1000', '9', 'new_collection ', 'images/6.png');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order`
--

CREATE TABLE `confirm_order` (
  `id` int(11) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `paymethod` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `transactionId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm_order`
--

INSERT INTO `confirm_order` (`id`, `fullname`, `phone`, `city`, `zip`, `address`, `paymethod`, `mobile`, `transactionId`) VALUES
(4, 'saifur', '01309080748', 'comilla', '1230', 'chouddagram, cumilla', 'nagad', '01309080748', 'as2235445FDA76'),
(7, 'Priyo', '6622050764', 'Tupelo', '38801', '336  Oxford Court,Tupelo,Mississippi,USA', 'nagad', '6622050764', 'ASDF235454');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `fname`, `lname`, `email`, `phone`, `message`) VALUES
(1, 'saifur', 'rahman', 'saifurnstuiit223344@gmail.com', '01309080748', 'hi i am saifur. i have a question about of this website. '),
(2, 'saifur', 'rahman', 'fazla223344@gmail.com', '01309080748', 'First, you need to create four Files: HTML, CSS, JavaScript & PHP files. After creating these files just paste the following codes into your file. You can also download the source code files of this Contact Form in PHP & JavaScript from the given download button.');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_info`
--

CREATE TABLE `shipping_info` (
  `id` int(11) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `paymethod` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `transactionId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_info`
--

INSERT INTO `shipping_info` (`id`, `fullname`, `phone`, `city`, `zip`, `address`, `paymethod`, `mobile`, `transactionId`) VALUES
(1, 'saifur', '01309080748', 'comilla', '1230', 'chouddagram, cumilla', 'nagad', '01309080748', 'as2235445FDA76'),
(3, 'saifur', '01309080748', 'comilla', '1230', 'chouddagram, cumilla', 'nagad', '01309080748', 'as2235445FDA76'),
(5, 'Samy', '6622050764', 'Tupelo', '38801', '336  dhaka, bangladesh', 'bkash', '6622050764', 'ASdR01309080748');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `mobile`, `password`) VALUES
(1, 'saifurnstuiit223344@gmail.com', 'saif', '6622050764', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'technologymagazine23@gmail.com', 'saifur', '6622050764', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_products`
--
ALTER TABLE `all_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `confirm_order`
--
ALTER TABLE `confirm_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_info`
--
ALTER TABLE `shipping_info`
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
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_products`
--
ALTER TABLE `all_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `confirm_order`
--
ALTER TABLE `confirm_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_info`
--
ALTER TABLE `shipping_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

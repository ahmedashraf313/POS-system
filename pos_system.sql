-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2017 at 08:42 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'cameras'),
(6, 'computers'),
(4, 'laptops'),
(1, 'mobiles'),
(5, 'televisions');

-- --------------------------------------------------------

--
-- Table structure for table `date_formats`
--

CREATE TABLE `date_formats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `format` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_formats`
--

INSERT INTO `date_formats` (`id`, `name`, `format`) VALUES
(1, 'dd-mm-yyyy', 'd-m-Y'),
(2, 'dd/mm/yyyy', 'd/m/Y'),
(3, 'mm-dd-yyyy', 'm-d-Y'),
(4, 'mm/dd/yyyy', 'm/d/Y'),
(5, 'yyyy-mm-dd', 'Y-m-d'),
(6, 'yyyy/mm/dd', 'Y/m/d'),
(7, 'dd-mm-yy', 'd-m-y'),
(8, 'dd/mm/yy', 'd/m/y'),
(9, 'mm-dd-yy', 'm-d-y'),
(10, 'mm/dd/yy', 'm/d/y'),
(11, 'yy-mm-dd', 'y-m-d'),
(12, 'yy/mm/dd', 'y/m/d');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL DEFAULT '0',
  `tax` int(11) NOT NULL DEFAULT '0',
  `description` varchar(1000) NOT NULL DEFAULT '0',
  `color` varchar(100) NOT NULL DEFAULT '0',
  `size` varchar(100) NOT NULL DEFAULT '0',
  `seller_id` int(11) NOT NULL DEFAULT '1',
  `purchased_times` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cat_id`, `quantity`, `price`, `discount`, `tax`, `description`, `color`, `size`, `seller_id`, `purchased_times`) VALUES
(1, 'samsung s5', 1, 0, 0, 0, 0, '0', '0', '0', 1, 0),
(3, 'iphone 5s', 1, 1, 0, 0, 0, '0', '0', '0', 1, 0),
(4, 'iphone 6', 1, 1, 0, 0, 0, '0', '0', '0', 2, 0),
(5, 'huwai', 1, 1, 0, 0, 0, '0', '0', '0', 1, 0),
(6, 'ahmed ashraf', 2, 1, 0, 0, 0, '0', '0', '0', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `customer_id`, `seller_id`, `date`, `time`) VALUES
(1, 1, 1, 1, '2017-12-02', '03:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL,
  `date_format` int(11) NOT NULL,
  `display` varchar(100) NOT NULL,
  `tax_rate` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `language`, `date_format`, `display`, `tax_rate`, `discount`) VALUES
(1, 'english', 1, 'both', '200', '100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'seller',
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `type`, `email`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'ahmed ashraf', '$2y$10$HaJ9djub.wcWYS2OVvHJA.0fgrhZhZogposhy3za9t2KdjipTUJe6', 'admin', 'ahmed.ashraf199635@gmail.com', '2017-11-27 00:56:00', '2017-11-27 23:19:17', 'rzI80D7Ylhe0A02dIENCV7fv6NRFwoXXoJx3oqD3pDikkiO0zm9yoyrlNxG5'),
(2, 'ahmed ashraf', '$2y$10$zzDeU1hdduECyc0BTosh3e.r5bGbgWvK/ddnC/oicNIfm3RTk9z7y', 'seller', 'ahmed.ashraf199635@yahoo.com', '2017-12-04 05:25:33', '2017-12-04 03:24:50', 'n2osjVmf5Jj3PDRLqSF1dWtD79c0JpTcKjoVpTcfDqKJ0akFIrvqI8uWzZ1k'),
(3, 'ahmed ashraf', '$2y$10$DryZV2.eYOWOE5bsm47ymu00W.h005wg6Ad5UWvqc3ONUWHk1Quti', 'manager', 'ahmed.ashraf@gmail.com', '2017-12-04 05:26:52', '2017-12-04 03:25:55', 'Ev8LBBSDcK96oXol3XpEwJc69Vw4e77kvQJc4j1TODykUfoqyLFaSl0vxDxZ'),
(4, 'ahmed ashraf', '$2y$10$WS1GFHxvN2g9TqGGnQ0oeejjZwZKJefIYKxERbGwc7.mwNr0IP0sq', 'seller', 'ahmed@gmail.com', '2017-12-17 15:25:15', '2017-12-04 03:27:21', 'qmmQPbH8Ll9XdUAFw45MY686yvj8FZo2NZh7ry92vuO8QsdjwEtRG27inTXK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `date_formats`
--
ALTER TABLE `date_formats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `date_formats`
--
ALTER TABLE `date_formats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2019 at 08:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(13, '::1', 1, 'Medium'),
(14, '::1', 1, 'Small'),
(10, '::1', 3, 'Medium'),
(9, '::1', 3, 'Medium'),
(12, '::1', 4, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'MEN', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(2, 'WOMEN', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, 'KIDS', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(4, 'OTHERS', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_conatct` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(7, 1, 1, '2019-11-28 04:54:22', 'Men\'s Printed Fashion Jackets Korean Style', 'product1.jpg', 'product2.jpg', 'product3.jpg', 300, 'this is a product', 'software'),
(8, 1, 1, '2019-11-28 06:00:11', 'Men\'s Printed Fashion Jackets Korean Style', 'product3.jpg', 'product2.jpg', 'product3.jpg', 300, 'this is a product', 'software'),
(9, 2, 2, '2019-11-30 07:44:57', 'Men\'s Printed Fashion Jackets Korean Style', 'accessory1.jpg', 'product5.jpg', 'product2.jpg', 300, 'gufy', 'software'),
(10, 4, 4, '2019-11-30 07:40:14', 'Men\'s Printed Fashion Jackets Korean Style', 'coat1.jpg', 'product5.jpg', 'product3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(11, 1, 1, '2019-11-30 07:25:39', 'Men\'s Printed Fashion Jackets Korean Style', 'product5.jpg', 'product5.jpg', 'product3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(12, 1, 1, '2019-11-28 06:02:30', 'Men\'s Printed Fashion Jackets Korean Style', 'product6.jpg', 'product5.jpg', 'product3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(13, 3, 1, '2019-11-30 07:24:19', 'Men\'s Printed Fashion Jackets Korean Style', 'shoes1.jpg', 'shoes2.jpg', 'shoes3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(14, 3, 1, '2019-11-30 07:25:05', 'Men\'s Printed Fashion Jackets Korean Style', 'shoes2.jpg', 'shoes1.jpg', 'shoes3.jpg', 300, 'this is a product', 'software'),
(15, 3, 1, '2019-11-30 07:25:27', 'Men\'s Printed Fashion Jackets Korean Style', 'shoes3.jpg', 'shoes2.jpg', 'shoes1.jpg', 300, 'this is a product', 'software'),
(16, 5, 4, '2019-11-30 07:32:17', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt2.jpg', 't-shirt5.jpg', 't-shirt3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(17, 5, 4, '2019-11-30 07:38:04', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt4.jpg', 't-shirt5.jpg', 't-shirt3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(18, 5, 4, '2019-11-30 07:32:25', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt3.jpg', 't-shirt5.jpg', 't-shirt3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(19, 5, 4, '2019-11-30 07:36:46', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt2.jpg', 't-shirt5.jpg', 't-shirt3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(20, 5, 4, '2019-11-30 07:32:31', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt5.jpg', 't-shirt5.jpg', 't-shirt3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(21, 5, 4, '2019-11-30 07:35:26', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt1.jpg', 't-shirt6.jpg', 't-shirt3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(23, 4, 4, '2019-11-30 07:40:14', 'Men\'s Printed Fashion Jackets Korean Style', 'coat2.jpg', 'product5.jpg', 'product3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(24, 4, 4, '2019-11-30 07:40:14', 'Men\'s Printed Fashion Jackets Korean Style', 'coat3.jpg', 'product5.jpg', 'product3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(25, 4, 4, '2019-11-30 07:40:14', 'Men\'s Printed Fashion Jackets Korean Style', 'coat4.jpg', 'product5.jpg', 'product3.jpg', 300, '<p>thid is nsi</p>', 'data'),
(26, 2, 2, '2019-11-30 07:44:57', 'Men\'s Printed Fashion Jackets Korean Style', 'accessory3.jpg', 'product5.jpg', 'product2.jpg', 300, 'gufy', 'software'),
(27, 1, 2, '2019-11-30 07:44:57', 'Men\'s Printed Fashion Jackets Korean Style', 'product1.jpg', 'product5.jpg', 'product2.jpg', 300, 'gufy', 'software'),
(28, 3, 2, '2019-11-30 07:44:57', 'Men\'s Printed Fashion Jackets Korean Style', 'shoes1.jpg', 'product5.jpg', 'product2.jpg', 300, 'gufy', 'software'),
(29, 5, 2, '2019-11-30 07:44:57', 'Men\'s Printed Fashion Jackets Korean Style', 't-shirt1.jpg', 'product5.jpg', 'product2.jpg', 300, 'gufy', 'software'),
(30, 3, 1, '2019-11-30 07:25:27', 'Men\'s Printed Fashion Jackets Korean Style', 'shoes3.jpg', 'shoes2.jpg', 'shoes1.jpg', 300, 'this is a product', 'software');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(11) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(2, 'Accessories', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, 'Shoes', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(4, 'Coats', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(5, 'T-Shirts', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(1, 'slider number 1', 'slider1.jpg'),
(2, 'slider number 2', 'slider5.jpg'),
(3, 'slider number 3', 'slider6.jpg'),
(4, 'slider number 4', 'slider7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

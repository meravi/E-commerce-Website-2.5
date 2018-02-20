-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 06:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepdevjd_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(12) NOT NULL,
  `ProName` varchar(150) CHARACTER SET utf8 NOT NULL,
  `ProNewPrice` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ProOldPrice` int(50) DEFAULT NULL,
  `ProCat` varchar(400) CHARACTER SET utf8 NOT NULL,
  `ProBrand` varchar(400) CHARACTER SET utf8 NOT NULL,
  `ProOverview` varchar(2500) CHARACTER SET utf8 NOT NULL,
  `ProImage` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `ProName`, `ProNewPrice`, `ProOldPrice`, `ProCat`, `ProBrand`, `ProOverview`, `ProImage`) VALUES
(90, 'Women 3', '1457', 1489, 'WOMEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'l3.jpg'),
(91, 'Women 4', '1890', 2000, 'WOMEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'l4.jpg'),
(92, 'Women 5', '1200', 2400, 'WOMEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'l5.jpg'),
(93, 'Women 6', '1788', 1980, 'WOMEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'l6.jpg'),
(94, 'broadway 1', '1400', 2800, 'BROADWAY', 'Latest Men Bags', 'fdfdfdfdf', 'l1.jpg'),
(88, 'Men 6', '1988', 2500, 'MEN', 'Latest Men Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '6.jpg'),
(89, 'Women 2', '1456', 1789, 'WOMEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'l2.jpg'),
(85, 'men 3', '1650', 1780, 'MEN', 'Latest Men Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3.jpg'),
(86, 'Men 4', '1360', 1790, 'MEN', 'Latest Men Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '4.jpg'),
(87, 'Men 5', '1645', 1878, 'MEN', 'Latest Men Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5.jpg'),
(84, 'Men 2', '1480', 1650, 'MEN', 'Latest Men Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2.jpg'),
(83, 'Women 1', '1500', 1700, 'WOMEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'l1.jpg'),
(82, 'Men 1', '1450', 1780, 'MEN', 'Latest Women Bags', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(12) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'ravi@ravi', 'ravi');

-- --------------------------------------------------------

--
-- Table structure for table `pro_brand`
--

CREATE TABLE `pro_brand` (
  `id` int(12) NOT NULL,
  `brand` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_brand`
--

INSERT INTO `pro_brand` (`id`, `brand`) VALUES
(10, 'Latest Men Bags'),
(11, 'Latest Women Bags');

-- --------------------------------------------------------

--
-- Table structure for table `pro_cat`
--

CREATE TABLE `pro_cat` (
  `id` int(12) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_cat`
--

INSERT INTO `pro_cat` (`id`, `category`) VALUES
(13, 'WOMEN'),
(12, 'MEN');

-- --------------------------------------------------------

--
-- Table structure for table `pro_order`
--

CREATE TABLE `pro_order` (
  `id` int(12) NOT NULL,
  `pid` int(12) NOT NULL,
  `p_qty` int(12) NOT NULL,
  `Price` int(12) NOT NULL,
  `TotalPrice` int(12) NOT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_order`
--

INSERT INTO `pro_order` (`id`, `pid`, `p_qty`, `Price`, `TotalPrice`, `fullname`, `address`, `phone`, `email`) VALUES
(12, 41, 1, 200, 200, 'ram', 'tinkune', '988885555', 'ram@gmail.com'),
(10, 41, 5, 200, 1000, 'raa', 'raa', '3233', 'dsd@fsd'),
(11, 43, 1, 1200, 1200, 'john ', 'tinkune ', '98122222', 'john@gmail.com'),
(13, 41, 1, 200, 200, 'ass', 'aasss', '1455', 'aaa@aa'),
(14, 60, 1, 1202, 1202, 'ass', 'aasss', '1455', 'aaa@aa'),
(15, 46, 1, 1200, 1200, 'new name', 'tinkune', '9888', 'new@d'),
(16, 78, 1, 1540, 1540, 'meme', 'tinkune', '9888788', 'meme@gmail.com'),
(17, 91, 5, 1890, 9450, 'Ravi Khadka', 'Lokanthali', '980000000', 'khadkaravi170@gmail.com'),
(18, 88, 1, 1988, 1988, 'Ravi Khadka', 'Lokanthali', '980000000', 'khadkaravi170@gmail.com'),
(19, 84, 1, 1480, 1480, 'Test Buyer', 'Bhaktapur', '01222222', 'test@gmail.com'),
(20, 91, 5, 1890, 9450, 'broadway', 'tinkune', '988885', 'bro@gmail.com'),
(21, 93, 1, 1788, 1788, 'broadway', 'tinkune', '988885', 'bro@gmail.com'),
(22, 88, 5, 1988, 9940, 'asdf', 'lokan', '9888', 'testtt@fdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(12) NOT NULL,
  `pid` int(12) NOT NULL,
  `p_qty` int(12) NOT NULL,
  `Price` varchar(100) DEFAULT NULL,
  `TotalPrice` varchar(500) NOT NULL,
  `ProSize` varchar(500) NOT NULL,
  `sid` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`id`, `pid`, `p_qty`, `Price`, `TotalPrice`, `ProSize`, `sid`) VALUES
(150, 83, 1, '1500', '1500', 'llll', '29j4vveica95kmljcqueqhu5q2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_brand`
--
ALTER TABLE `pro_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_cat`
--
ALTER TABLE `pro_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_order`
--
ALTER TABLE `pro_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pro_brand`
--
ALTER TABLE `pro_brand`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pro_cat`
--
ALTER TABLE `pro_cat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pro_order`
--
ALTER TABLE `pro_order`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

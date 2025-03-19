-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2023 at 01:30 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

-- DROP TABLE IF EXISTS `admin`;
-- CREATE TABLE IF NOT EXISTS `admin` (
--   `id` int(100) NOT NULL AUTO_INCREMENT,
--   `name` varchar(100) NOT NULL,
--   `email` varchar(100) NOT NULL,
--   `password` varchar(100) NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --
-- -- Dumping data for table `admin`
-- --

-- INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
-- (1, 'admin01', 'admin01@gmail.com', '23bce2980a5d0ae01bebd9b5dc9c8e4998203fb7');

-- --------------------------------------------------------

--
-- Table structure for table `donate_orders`
--

DROP TABLE IF EXISTS `donate_orders`;
CREATE TABLE IF NOT EXISTS `donate_orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_orders`
--

INSERT INTO `donate_orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`) VALUES
(1, 5, 'Heshan Siriwardhane', '0714081819', 'heshan@gmail.com', 'credit card', 'Matara', 'Rice & Curry', 100, '11-Jan-2023');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `price`, `image`) VALUES
(3, 'Green Porridge', 20, 'd1.jpg'),
(6, 'String Hoppers', 25, 'd2.jpg'),
(7, 'Fruits', 35, 'd4.jpg'),
(8, 'Vegetables', 40, 'd11.jpg'),
(9, 'Grains', 40, 'd7.jpg'),
(10, 'Milk & Dairy Foods', 40, 'd6.jpg'),
(11, 'Potatoes', 30, 'd10.jpg'),
(12, 'Protein Foods', 45, 'd13.jpg'),
(13, 'Starchy Foods', 30, 'd5.jpg'),
(14, 'Bread/ Other Foods', 35, 'd8.jpg'),
(15, 'Fast Foods', 60, 'd9.jpg'),
(16, 'Rice & Curry', 50, 'd12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `d_cart`
--

DROP TABLE IF EXISTS `d_cart`;
CREATE TABLE IF NOT EXISTS `d_cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d_cart`
--

INSERT INTO `d_cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(16, 1, 'String Hoppers', 25, 2, 'd2.jpg'),
(23, 5, 'Grains', 40, 3, 'd7.jpg'),
(25, 5, 'Protein Foods', 45, 3, 'd13.jpg'),
(26, 7, 'String Hoppers', 25, 100, 'd2.jpg'),
(28, 7, 'Grains', 40, 2, 'd7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

-- DROP TABLE IF EXISTS `fund`;
-- CREATE TABLE IF NOT EXISTS `fund` (
--   `id` int(100) NOT NULL AUTO_INCREMENT,
--   `amount` int(100) NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --
-- -- Dumping data for table `fund`
-- --

-- INSERT INTO `fund` (`id`, `amount`) VALUES
-- (1, 100),
-- (2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `menu_orders`
--

DROP TABLE IF EXISTS `menu_orders`;
CREATE TABLE IF NOT EXISTS `menu_orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_orders`
--

INSERT INTO `menu_orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`) VALUES
(1, 1, 'ttt', '6', 'heshan@gmail.com', 'cash on delivery', 'flat no. 6, fff, ee, Estonia - 44', ', Pizza (1) , Burger (2) ', 2901, '10-Jan-2023'),
(3, 1, 'ty', '6', 'heshan@gmail.com', 'cash on delivery', 'flat no. 5, gg, gg, Guernsey - 6', ', Burger (2) ', 1700, '10-Jan-2023');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(7, 5, 'Heshan Siriwardhane', 'heshan@gmail.com', 775678, 'Good Work');

-- --------------------------------------------------------

--
-- Table structure for table `money_donate`
--

DROP TABLE IF EXISTS `money_donate`;
CREATE TABLE IF NOT EXISTS `money_donate` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money_donate`
--

INSERT INTO `money_donate` (`id`, `user_id`, `name`, `email`, `number`, `amount`, `method`) VALUES
(1, 5, 'tt', 'tt@gmail.com', 56, 500, 'cash on delivery'),
(2, 5, 'ggg', 'gg@gmail.com', 556, 500, 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `m_cart`
--

DROP TABLE IF EXISTS `m_cart`;
CREATE TABLE IF NOT EXISTS `m_cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_cart`
--

INSERT INTO `m_cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(10, 5, 'Pasta', 450, 3, 'm12.jpg'),
(11, 5, 'Bakery Foods', 300, 1, 'm1.jpg'),
(12, 7, 'Rice & Curry', 350, 3, 'mm4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(1, 'Pizza', 1400, 'm2.jpeg'),
(2, 'Burger', 850, 'm3.jpeg'),
(3, 'Kottu', 550, 'm6.jpg'),
(4, 'Fried Rice', 500, 'mm5.jpg'),
(5, 'Pasta', 450, 'm12.jpg'),
(6, 'Noodles', 400, 'm7.jpg'),
(7, 'Biriyani', 750, 'mm11.jpg'),
(8, 'Cookies', 300, 'm8.jpg'),
(9, 'Cakes', 1500, 'm9.jpg'),
(10, 'Beverages', 500, 'm10.jpg'),
(11, 'Bakery Foods', 300, 'm1.jpg'),
(12, 'Rice & Curry', 350, 'mm4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `address`, `password`, `user_type`) VALUES
(2, 'admin1', 'admin@gmail.com', 0, '', '5c33ac5a54d19c225ba33f333539dce9', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

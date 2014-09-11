-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2014 at 06:37 PM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Ready2Serve`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `salesman_id` int(11) NOT NULL,
  `order_datetime` datetime NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `salesman_id` (`salesman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_line_item`
--

CREATE TABLE IF NOT EXISTS `order_line_item` (
  `order_line_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` double NOT NULL,
  PRIMARY KEY (`order_line_item_id`),
  UNIQUE KEY `order_id_product_id_unique` (`order_id`,`product_id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `person_type` enum('Admin','Salesperson') NOT NULL,
  PRIMARY KEY (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `username`, `password`, `name`, `address`, `phone_number`, `person_type`) VALUES
(3, 'sales_man', '€¹hß¥I¯“|òU—i«x2¢', 'Salesman1', 'House Number 123 , Street 15, City XYZ.', '0300-34565465', 'Salesperson'),
(4, 'admin_man', '€ÜðÃoß‰w»RyÊÅ\\Á', 'admin1', 'House Number 546 , Street 88, City JHG.', '0300-85491561', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` enum('item','deal') NOT NULL,
  `is_product_available` enum('TRUE','FALSE') NOT NULL,
  `is_product_oderable` enum('TRUE','FALSE') NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type`, `is_product_available`, `is_product_oderable`, `product_description`, `product_price`) VALUES
(1, 'item', 'TRUE', 'TRUE', 'Regular drink ', 30),
(2, 'item', 'TRUE', 'TRUE', 'Large   drink', 50),
(3, 'item', 'TRUE', 'TRUE', '1.5 L   drink', 90),
(4, 'item', 'TRUE', 'TRUE', 'Jumbo   drink ', 120),
(5, 'item', 'TRUE', 'TRUE', '(Chicken Piece)/Nuggets', 25),
(6, 'item', 'TRUE', 'TRUE', 'Regular/shami Burger', 70),
(7, 'item', 'TRUE', 'TRUE', 'Cheese Burger', 90),
(8, 'item', 'TRUE', 'TRUE', 'Zinger Burger', 100),
(9, 'item', 'TRUE', 'TRUE', 'Fries small', 50),
(10, 'item', 'TRUE', 'TRUE', 'Fries medium', 70),
(11, 'item', 'TRUE', 'TRUE', 'Fries Large', 100),
(12, 'item', 'TRUE', 'TRUE', 'Pizza Small', 80),
(13, 'item', 'TRUE', 'TRUE', 'Pizza Medium ', 80),
(14, 'item', 'TRUE', 'TRUE', 'Pizza Large ', 180),
(15, 'item', 'TRUE', 'FALSE', 'Toy', 0),
(16, 'item', 'TRUE', 'FALSE', 'Ketchup Bottle', 0),
(17, 'deal', 'TRUE', 'TRUE', 'Happy Meal Small', 150),
(18, 'deal', 'TRUE', 'TRUE', 'Happy Meal Large', 250);

-- --------------------------------------------------------

--
-- Table structure for table `product_contains_products`
--

CREATE TABLE IF NOT EXISTS `product_contains_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `contained_product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`contained_product_id`),
  KEY `contained_product_id` (`contained_product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `product_contains_products`
--

INSERT INTO `product_contains_products` (`product_id`, `contained_product_id`, `quantity`) VALUES
(17, 1, 1),
(17, 6, 1),
(17, 9, 1),
(18, 2, 1),
(18, 7, 1),
(18, 9, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`salesman_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_line_item`
--
ALTER TABLE `order_line_item`
  ADD CONSTRAINT `order_line_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_line_item_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_contains_products`
--
ALTER TABLE `product_contains_products`
  ADD CONSTRAINT `product_contains_products_ibfk_2` FOREIGN KEY (`contained_product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_contains_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

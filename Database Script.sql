-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2014 at 03:18 PM
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
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `salesman_id` int(11) unsigned NOT NULL,
  `order_datetime` datetime NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `salesman_id` (`salesman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_line_item`
--

CREATE TABLE IF NOT EXISTS `order_line_item` (
  `order_line_item_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `unit_price` float NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  `discount` float NOT NULL,
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
  `person_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text,
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
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_type` enum('item','deal') NOT NULL,
  `is_product_available` enum('yes','no') NOT NULL,
  `is_product_oderable` enum('yes','no') NOT NULL,
  `product_description` text NOT NULL,
  `product_price` float NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Table structure for table `product_contains_products`
--

CREATE TABLE IF NOT EXISTS `product_contains_products` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contained_product_id` int(11) unsigned NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`contained_product_id`),
  KEY `contained_product_id` (`contained_product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`salesman_id`) REFERENCES `person` (`person_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

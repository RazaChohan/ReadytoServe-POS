-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2014 at 01:27 PM
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

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `salesman_id`, `order_datetime`) VALUES
(5, 3, '2014-09-01 09:00:00'),
(6, 3, '2014-09-01 12:00:00'),
(7, 3, '2014-09-09 12:00:00'),
(8, 3, '2014-09-09 14:00:00');

--
-- Dumping data for table `order_line_item`
--

INSERT INTO `order_line_item` (`order_line_item_id`, `order_id`, `product_id`, `unit_price`, `quantity`, `discount`) VALUES
(1, 5, 1, 30, 2, 0),
(2, 5, 7, 90, 2, 0),
(3, 6, 18, 250, 1, 0),
(4, 6, 6, 70, 2, 0),
(5, 7, 4, 120, 4, 0),
(6, 7, 9, 50, 1, 0),
(7, 8, 6, 70, 2, 0),
(8, 8, 14, 180, 2, 0),
(9, 8, 11, 100, 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

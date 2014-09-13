-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2014 at 04:39 PM
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
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type`, `is_product_available`, `is_product_oderable`, `product_description`, `product_price`) VALUES
(1, 'item', '', '', 'Regular drink ', 30),
(2, 'item', '', '', 'Large   drink', 50),
(3, 'item', '', '', '1.5 L   drink', 90),
(4, 'item', '', '', 'Jumbo   drink ', 120),
(5, 'item', '', '', '(Chicken Piece)/Nuggets', 25),
(6, 'item', '', '', 'Regular/shami Burger', 70),
(7, 'item', '', '', 'Cheese Burger', 90),
(8, 'item', '', '', 'Zinger Burger', 100),
(9, 'item', '', '', 'Fries small', 50),
(10, 'item', '', '', 'Fries medium', 70),
(11, 'item', '', '', 'Fries Large', 100),
(12, 'item', '', '', 'Pizza Small', 80),
(13, 'item', '', '', 'Pizza Medium ', 80),
(14, 'item', '', '', 'Pizza Large ', 180),
(15, 'item', '', '', 'Toy', 0),
(16, 'item', '', '', 'Ketchup Bottle', 0),
(17, 'deal', '', '', 'Happy Meal Small', 150),
(18, 'deal', '', '', 'Happy Meal Large', 250);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2023 at 06:10 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHYSIO_DATA`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `Email` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Account`
--

INSERT INTO `Account` (`Email`, `pass`) VALUES
('aaaa', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `Delivery_Address`
--

CREATE TABLE `Delivery_Address` (
  `Address_id` varchar(10) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `postal_code` varchar(5) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `inventory_id` varchar(15) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `product_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(15) NOT NULL,
  `image_url` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`product_id`, `name`, `description`, `category`, `price`, `image_url`, `brand`) VALUES
('12Plans', 'Table', 'Tables 1 & 2 Plans', '', '', '', ''),
('34Plans', 'Tables', 'Tables 3 & 4 Plans', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Subproduct`
--

CREATE TABLE `Subproduct` (
  `Series` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Subproduct`
--

INSERT INTO `Subproduct` (`Series`, `Name`, `Description`) VALUES
('FGT3187A', 'TABLE 3 PLANS PLATEAU JAMBIER PROCLIVE TÊTIÈRE PLEINE – ESPACE', 'Catégorie : ESPACE\r\nÉtiquettes : Kinesitherapie, Rééducation Fonctionnelle, Série 87.'),
('FGS3287A', 'TABLE 3 PLANS PLATEAU JAMBIER PROCLIVE TÊTIÈRE PLEINE – SANTEO', 'Catégorie : SANTEO\r\nÉtiquettes : Kinesitherapie, Série 87.');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

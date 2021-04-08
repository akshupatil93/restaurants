-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 09:05 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_restaurants`
--

CREATE TABLE `list_restaurants` (
  `res_id` int(30) NOT NULL,
  `res_name` varchar(50) NOT NULL,
  `res_mobile` varchar(50) NOT NULL,
  `res_cuisine` varchar(30) NOT NULL,
  `res_website` varchar(50) NOT NULL,
  `res_address` varchar(50) DEFAULT NULL,
  `res_state` varchar(50) NOT NULL,
  `res_pincode` varchar(20) NOT NULL,
  `res_menus` varchar(300) NOT NULL,
  `res_img` varchar(100) NOT NULL,
  `res_location` varchar(1000) NOT NULL,
  `resvered4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_restaurants`
--

INSERT INTO `list_restaurants` (`res_id`, `res_name`, `res_mobile`, `res_cuisine`, `res_website`, `res_address`, `res_state`, `res_pincode`, `res_menus`, `res_img`, `res_location`, `resvered4`) VALUES
(1, 'Brunch And Munch', '9876543210', 'Indian', 'www.bandm.com', 'Nagarbhavi 2nd Stage Bangalore', 'Karnataka', '560072', 'hotel1menu', 'bighotel1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62203.00593763933!2d77.5406972894757!3d12.991804717031185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae167db2a3915d%3A0xcba1a1019be2a772!2sThe%2013th%20Floor!5e0!3m2!1sen!2sin!4v1617805892487!5m2!1sen!2sin\"', 0),
(2, 'The 13th Floor', '1234567890', 'Italian', '13thfloor.in', 'church street 13th Main Road, Banagalore', 'Karnataka', '560072', 'hotel2menu', 'bighotel3', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62203.00593763933!2d77.5406972894757!3d12.991804717031185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae167db2a3915d%3A0xcba1a1019be2a772!2sThe%2013th%20Floor!5e0!3m2!1sen!2sin!4v1617805892487!5m2!1sen!2sin\"', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_restaurants`
--
ALTER TABLE `list_restaurants`
  ADD PRIMARY KEY (`res_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_restaurants`
--
ALTER TABLE `list_restaurants`
  MODIFY `res_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

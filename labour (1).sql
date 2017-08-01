-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2017 at 11:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

CREATE TABLE `labour` (
  `labour_id` int(15) NOT NULL,
  `labour_category_id` int(15) NOT NULL,
  `labour_first_name` varchar(255) NOT NULL,
  `labour_last_name` varchar(255) NOT NULL,
  `labour_govt_id` varchar(20) NOT NULL,
  `labour_phone` text NOT NULL,
  `labour_state` varchar(255) NOT NULL,
  `labour_address` varchar(255) NOT NULL,
  `labour_email` varchar(255) NOT NULL,
  `labour_status` varchar(255) CHARACTER SET swe7 NOT NULL,
  `labour_creation_date` text NOT NULL,
  `labour_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour`
--

INSERT INTO `labour` (`labour_id`, `labour_category_id`, `labour_first_name`, `labour_last_name`, `labour_govt_id`, `labour_phone`, `labour_state`, `labour_address`, `labour_email`, `labour_status`, `labour_creation_date`, `labour_image`) VALUES
(1, 2, 'Umer', 'Hurrah', '2147483647', '9902312948', 'Jammu And Kashmir', '5th Cross B Channasandra Kasturi Nagar', 'umerfat@gmail.com', 'publish', 'July 16, 2017', 'avatar9.jpg'),
(2, 1, 'ajaz', 'Kohli', '909978676', '0', '', '', '', 'publish', 'July 16, 2017', 'default_profile_photo.png'),
(4, 2, 'Mir', 'Bilal', '2147483647', '2147483647', '', 'Srinagar', '{labour_email}', 'publish', 'July 18, 2017', 'umerhurrah.jpg'),
(5, 1, 'xyz', 'abc', '89999999', '89777', '', 'karnataka', '', 'publish', 'July 23, 2017', 'desktop-year-of-the-tiger-images-wallpaper.jp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labour`
--
ALTER TABLE `labour`
  ADD PRIMARY KEY (`labour_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labour`
--
ALTER TABLE `labour`
  MODIFY `labour_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

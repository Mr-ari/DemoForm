-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2019 at 06:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DemoForm`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ten_board` varchar(10) NOT NULL,
  `tw_board` varchar(10) NOT NULL,
  `ten_year` int(5) NOT NULL,
  `tw_year` int(5) NOT NULL,
  `ten_marks` varchar(10) NOT NULL,
  `tw_marks` varchar(10) NOT NULL,
  `photo_loc` varchar(200) NOT NULL,
  `signature_loc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `dob`, `gender`, `address`, `phone`, `email`, `ten_board`, `tw_board`, `ten_year`, `tw_year`, `ten_marks`, `tw_marks`, `photo_loc`, `signature_loc`) VALUES
(1, '', '8787-07-07', 'Male', 'ksksk', '78778', 'sdjsdjs@huh', 'CBSC', 'CBSC', 544, 545, '4545', '5454', 'ankanff.jpg', '0'),
(3, 'hashahashw', '0445-05-04', 'Female', '87454dkdsddsk', '78777', 'dss@kskdskds', 'CBSC', 'CBSC', 7878, 44, '787778', '78778', 'ankanff.jpg', 'IMG-20190710-WA0001.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

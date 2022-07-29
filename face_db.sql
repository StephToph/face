-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 03:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `face_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `fa_image`
--

CREATE TABLE `fa_image` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pics` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fa_image`
--

INSERT INTO `fa_image` (`id`, `user_id`, `pics`) VALUES
(3, 1, 'assets/images/users/614b2b562af60.png');

-- --------------------------------------------------------

--
-- Table structure for table `fa_user`
--

CREATE TABLE `fa_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `last_logged` datetime NOT NULL,
  `dept` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `matric_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fa_user`
--

INSERT INTO `fa_user` (`id`, `name`, `gender`, `email`, `phone`, `img_id`, `status`, `last_logged`, `dept`, `level`, `matric_no`) VALUES
(1, 'adeagbo oluwatofunmi stephen', 'Male', 'lagosoffice@gmail.com', '07031549500', 3, 0, '0000-00-00 00:00:00', 'Accounting', '200', 'NCSF/20/0002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fa_image`
--
ALTER TABLE `fa_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fa_user`
--
ALTER TABLE `fa_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fa_image`
--
ALTER TABLE `fa_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fa_user`
--
ALTER TABLE `fa_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 10:28 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_and_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `mobile` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL,
  `update_at` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `username`, `mobile`, `fullname`, `is_active`, `update_at`) VALUES
(1, 'test@gmail.com', '$2y$10$xOHWh0BAeqcYtAwme5FeGeN5D4vZb2QzJbBTOH3k5i5B1hQbueLbu', '0000-00-00 00:00:00', 'Test', 1234567890, '', 1, 1630051783),
(2, 'Test@gmail.co', '$2y$10$DkGh9BaiofH/LS7colvyfumn.D43lW/ES3E4Fkhou.2PCz.lfGnXi', '0000-00-00 00:00:00', 'Testgg', 1234567890, '', 1, 1630057766),
(3, 'urvashi@gmail.com', '$2y$10$PVk893rNTF3tVCzDBZuqMuYQ.MzqjSXONsLv9bRXGTMon.RkOKNPi', '0000-00-00 00:00:00', 'xxx', 1234561234, '', 1, 1630059013);

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `ui_pk_id` int(11) NOT NULL,
  `user_fk_id` int(11) NOT NULL,
  `caption` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`ui_pk_id`, `user_fk_id`, `caption`, `location`, `file_name`, `created_at`, `update_at`) VALUES
(1, 1, 'jk', 'dddd', 'Screenshot_(2).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'jk', 'dddd', 'Screenshot_(2)1.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'thid ', 'Delhi', 'Screenshot_(12).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'sadasd', 'Bangalore', 'Screenshot_(3).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`ui_pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `ui_pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

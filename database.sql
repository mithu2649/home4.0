-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 10:21 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codewithpandey_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(255) NOT NULL,
  `user_id` bigint(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `act_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `id` bigint(255) NOT NULL,
  `app_name` varchar(255) NOT NULL,
  `room_id` bigint(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`id`, `app_name`, `room_id`, `status`, `icon`) VALUES
(1, 'Light Bulb 1', 1, 'on', 'fa-lightbulb-o'),
(2, 'Light Bulb 2', 1, 'on', 'fa-lightbulb-o'),
(3, 'Fan', 1, 'off', 'fa-fan'),
(4, 'Plug', 1, 'off', 'fa-plug'),
(5, 'Light Bulb 1', 2, 'off', 'fa-lightbulb-o'),
(6, 'Light Bulb 2', 2, 'off', 'fa-lightbulb-o'),
(7, 'Fan', 2, 'off', 'fa-fan'),
(8, 'Plug', 2, 'off', 'fa-plug'),
(9, 'Light Bulb', 3, 'off', 'fa-lightbulb-o'),
(10, 'Fan', 3, 'off', 'fa-fan'),
(11, 'Television', 3, 'off', 'fa-television'),
(12, 'Plug', 3, 'off', 'fa-plug'),
(13, 'Light Bulb', 4, 'off', 'fa-lightbulb-o'),
(14, 'Exhaust Fan', 4, 'off', 'fa-afn'),
(15, 'Light Bulb', 5, 'off', 'fa-lightbulb-o'),
(16, 'Exhaust Fan', 5, 'off', 'fa-fan');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(255) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `appliances` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `icon`) VALUES
(1, 'Room 1', 'fa-bed'),
(2, 'Room 2', 'fa-bed'),
(3, 'Hall Room', 'fa-couch'),
(4, 'Kitchen', 'fa-utensils'),
(5, 'Bathroom', 'fa-bath');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `app_allowed` varchar(255) NOT NULL,
  `plan_allowed` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `last_loggedin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `device_id`, `app_allowed`, `plan_allowed`, `status`, `last_loggedin`) VALUES
(1, 'pandey', 'abhishekap2001@gmail.com', 'f362bd6883b7f4d5d02efcebd874900f6994f39c', 'admin', '44b0a734a29f8e2d887775662425bee2031bced2', '', '', '', '2020-02-23 09:13:36'),
(2, 'debjeet', 'debjeet194@gmail.com', 'f362bd6883b7f4d5d02efcebd874900f6994f39c', 'admin', 'dd10b4cf73792bdadbe4214b63c540f0a14ed5ff', '', '', '', '2020-02-23 09:17:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

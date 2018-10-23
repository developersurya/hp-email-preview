-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2018 at 10:57 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `template_uploads`
--

CREATE TABLE `template_uploads` (
  `id` int(11) NOT NULL,
  `template_name` varchar(100) NOT NULL,
  `template_url` varchar(5000) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `template_uploads`
--

INSERT INTO `template_uploads` (`id`, `template_name`, `template_url`, `user`, `date`) VALUES
(24, 'Email template one', 'index15297737436771703885b2e7eafde98f.html', '', '0000-00-00 00:00:00'),
(25, 'Email template two', 'index15297738156149015125b2e7ef7b8cd3.html', '', '0000-00-00 00:00:00'),
(26, 'Sample email html', 'index152977388310884652375b2e7f3b17e23.html', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `joined`) VALUES
(3, 'test', '51abb9636078defbf888d8457a7c76f85c8f114c', '', 'beta tester', '0000-00-00 00:00:00'),
(4, 'admin', 'efacc4001e857f7eba4ae781c2932dedf843865e', '', 'Admin', '0000-00-00 00:00:00'),
(5, 'user', 'c73ba2982c55b7ead0e4098a92f722bdb3a3b3d8', '', 'User', '2018-06-23 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `template_uploads`
--
ALTER TABLE `template_uploads`
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
-- AUTO_INCREMENT for table `template_uploads`
--
ALTER TABLE `template_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

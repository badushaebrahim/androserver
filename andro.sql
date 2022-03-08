-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 06:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andro`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgholder`
--

CREATE TABLE `msgholder` (
  `msg` text NOT NULL,
  `senterid` int(11) NOT NULL,
  `reciverid` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `prodname` text NOT NULL,
  `sentername` text NOT NULL,
  `msgid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msgholder`
--

INSERT INTO `msgholder` (`msg`, `senterid`, `reciverid`, `prodid`, `prodname`, `sentername`, `msgid`) VALUES
('Messagehello', 1, 94, 14, 'makes', 'badu', 1),
('hi bro ', 94, 1, 14, 'makes', 'bar', 2),
('hello', 94, 2, 12, 'jake', 'bar', 3),
('hello', 94, 2, 12, 'jake', 'bar', 4),
('hellobro', 94, 2, 12, 'jake', 'bar', 5),
('this is test', 94, 2, 12, 'jake', 'bar', 6),
('this', 94, 2, 12, 'jake', 'bar', 7),
('ramaen', 94, 2, 12, 'jake', 'bar', 8);

-- --------------------------------------------------------

--
-- Table structure for table `sellings`
--

CREATE TABLE `sellings` (
  `type` text NOT NULL,
  `Listing_title` text NOT NULL,
  `imagelink` text NOT NULL,
  `long_details` text NOT NULL,
  `contactno` text NOT NULL,
  `latitude` float NOT NULL,
  `longi` float NOT NULL,
  `address` text NOT NULL,
  `sellerid` int(11) NOT NULL,
  `Lid` int(11) NOT NULL,
  `expected_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellings`
--

INSERT INTO `sellings` (`type`, `Listing_title`, `imagelink`, `long_details`, `contactno`, `latitude`, `longi`, `address`, `sellerid`, `Lid`, `expected_price`) VALUES
('', 'this is', 'IMG1226935336.jpg', 'awas', '', 0, 1, '', 0, 1, '0'),
('Service', 'mks', 'IMG1427615680.jpg', 'brk', '', 0, 1, '', 0, 2, '0'),
('Product', 'pros', 'IMG720018741.jpg', 'pros', '', 0, 1, '', 0, 3, '4566'),
('Product', 'ma', 'IMG1116199797.jpg', 'ma', '', 0, 0, '', 1, 4, '45'),
('Product', 'mr', 'IMG5982683.jpg', 'mr', '', 0, 12, '', 1, 5, '12'),
('Product', '12', 'IMG1921125742.jpg', '12', '', 0, 0, '', 1, 6, '6'),
('Product', 'tu', 'IMG398210056.jpg', 'tu', '', 0, 0, '', 1, 7, '99'),
('Product', 'ashwin', 'IMG1315157420.jpg', 'bab', '95446600', 0, 0, '', 1, 8, '6'),
('Product', 'add', 'IMG1406132153.jpg', 'add', '95446600', 0, 0, 'oorapra house chowara po', 1, 9, '5'),
('Product', 'tapa', 'IMG717945658.jpg', 'tapa', '95446600', 10.5642, 75.1657, 'oorapra house chowara po', 1, 10, '77'),
('Service', 'ser', 'IMG1887239032.jpg', 'serv', '95446600', 10.5642, 75.1657, 'oorapra house chowara po', 1, 11, '6'),
('Product', 'jake', 'IMG267382299.jpg', 'jake', '9746097187', 10.1545, 75.155, 'this is at my home', 2, 12, '66'),
('Product', 'ulst', 'IMG2019043933.jpg', 'story', '8943586297', 10.1545, 75.155, 'thi is ults', 6, 13, '78'),
('Product', 'makes', 'IMG337371152.jpg', 'mak', '95769481388', 10.1037, 76.3635, 'thi is address of 123', 94, 14, '8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `Number` text NOT NULL,
  `address` text NOT NULL,
  `lat` float NOT NULL,
  `longi` float NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `Number`, `address`, `lat`, `longi`, `uid`) VALUES
('badu', 'bad@g.com', 'badusha112', '95446600', 'oorapra house chowara po', 10.5642, 75.1657, 1),
('badu', 'jake@j.com', 'badusha112', '9746097187', 'this is at my home', 10.1545, 75.155, 2),
('', 'bad@g2.com', 'badusha112', '954465464', 'this', 10.1545, 75.155, 3),
('', 'bad@g2.com', 'badusha112', '954465464', 'this', 10.1545, 75.155, 4),
('new', 'bb@b.com', 'badbadbad', '9544655941', 'thi is my address', 10.1545, 75.155, 5),
('bar', 'b@b.com', '12345678', '95769481388', 'thi is address of 123', 10.1037, 76.3635, 94);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgholder`
--
ALTER TABLE `msgholder`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `sellings`
--
ALTER TABLE `sellings`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgholder`
--
ALTER TABLE `msgholder`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sellings`
--
ALTER TABLE `sellings`
  MODIFY `Lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

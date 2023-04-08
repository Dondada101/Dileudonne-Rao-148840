-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 10:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(150) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `uemail`, `upassword`) VALUES
(1, 'Martha', 'martha@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'mary', 'mary@gmail.com', 'bccba03c3c554d853d824026f12db874'),
(3, 'james', 'james@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'koome', 'koome@gmail.com', '$2y$10$qsQ3tsFdpHfRUOKh2OZvR.9g1OUkvpnlTSOmQxHuYdDLh.Qy.OC/W'),
(5, 'koome', 'koomee@gmail.com', '$2y$10$9uqMLoGgksirR1eQVjv1nehfaKefQoNZ8Tuq2khdB9C5NM56JITeO'),
(6, 'koome', 'kome@gmail.com', '$2y$10$R2ZgmCXTbDN4Xc2Ys4bu.OHk9UST22ynfcLBx6aFHatek5Pn7xkwa'),
(7, 'Sam', 'samantha@gmail.com', '$2y$10$QJBboAVY/YLjOQPiueK.XurtmE5C4cP/p/ei.w3N8P9IH0AIDP49y'),
(8, 'Friday', 'friday@gmail.com', '$2y$10$PgNWwN0PIxo.8ELPzAzLhO54Dm5o.BWrelwqhQNgTuDZV1QK5CVoS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uemail` (`uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

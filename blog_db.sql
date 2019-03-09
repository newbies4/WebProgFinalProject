-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 04:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8929336_blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'ASP', '2019-03-09 09:57:34', '2019-03-09 12:07:59'),
(14, 'SQL', '2019-03-09 11:05:49', '2019-03-09 11:05:49'),
(15, 'PHP', '2019-03-09 12:06:05', '2019-03-09 12:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `content`, `author`, `created_at`, `updated_at`) VALUES
(5, 14, 'Controlling Infinite Recursion', 'The following example uses the flights table (see the CREATE RECURSIVE VIEW/REPLACE\r\nRECURSIVE VIEW topic “The Concept of Recursion” in SQL Data Definition Language\r\nDetailed Topics) to indicate a method for limiting the possibility of infinitely recursive\r\nprocessing of cyclic data:\r\nCREATE RECURSIVE VIEW reachable_from (destination, cost, depth) AS (\r\nSELECT root.destination, root.cost, 0 AS depth\r\nFROM flights AS root\r\nWHERE root.source = ‘Paris’\r\nUNION ALL\r\nSELECT out.destination, in.cost + out.cost, in.depth + 1 AS depth\r\nFROM reachable_from AS in, flights AS out\r\nWHERE in.destination = out.source\r\nAND in.depth <= 20);\r\nThis recursive view is written to be queried by the following SELECT statement:\r\nSELECT *\r\nFROM reachable_from;\r\nIn this example, the variable depth is used as a counter, initialized to 0 within the seed query\r\nfor the recursive view definition and incremented by 1 within the recursive query for the\r\ndefinition.\r\nThe AND condition of the WHERE clause then tests the counter to ensure that it never\r\nexceeds a value of 20. Because the depth counter was initialized to 0, this condition limits the\r\nrecursion to 21 cycles.', 'Jumong', '2019-03-09 11:06:14', '0000-00-00 00:00:00'),
(6, 14, 'Dropping PARTITION Statistics', 'The following DROP STATISTICS request drops statistics on the PARTITION column only\r\nfrom the PPI table named table_1:\r\nDROP STATISTICS ON table_1 COLUMN PARTITION;\r\nThe following DROP STATISTICS request drops statistics on the column named column_1\r\nand the PARTITION column from the PPI table named table_2:\r\nDROP STATISTICS ON table_2 COLUMN (column_1, PARTITION);\r\nThe following table-level DROP STATISTICS request drops all the statistics, including\r\nPARTITION statistics, from the PPI table named table_3:\r\nDROP STATISTICS ON table_3;', 'Jumong', '2019-03-09 11:07:23', '0000-00-00 00:00:00'),
(7, 13, 'ost Title', 'Post ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost Content', 'adfdafasfPost Author', '2019-03-09 13:37:55', '2019-03-09 15:06:09'),
(8, 15, 'Controlling Infinite Recursion', 'The following example uses the flights table (see the CREATE RECURSIVE VIEW/REPLACE\r\nRECURSIVE VIEW topic “The Concept of Recursion” in SQL Data Definition Language\r\nDetailed Topics) to indicate a method for limiting the possibility of infinitely recursive\r\nprocessing of cyclic data:\r\nCREATE RECURSIVE VIEW reachable_from (destination, cost, depth) AS (\r\nSELECT root.destination, root.cost, 0 AS depth\r\nFROM flights AS root\r\nWHERE root.source = ‘Paris’\r\nUNION ALL\r\nSELECT out.destination, in.cost + out.cost, in.depth + 1 AS depth\r\nFROM reachable_from AS in, flights AS out\r\nWHERE in.destination = out.source\r\nAND in.depth <= 20);\r\nThis recursive view is written to be queried by the following SELECT statement:\r\nSELECT *\r\nFROM reachable_from;\r\nIn this example, the variable depth is used as a counter, initialized to 0 within the seed query\r\nfor the recursive view definition and incremented by 1 within the recursive query for the\r\ndefinition.\r\nThe AND condition of the WHERE clause then tests the counter to ensure that it never\r\nexceeds a value of 20. Because the depth counter was initialized to 0, this condition limits the\r\nrecursion to 21 cycles.', 'Jumong', '2019-03-09 15:01:53', '0000-00-00 00:00:00'),
(9, 13, 'Edit Post', 'Post ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost ContentPost Content', 'Post Author', '2019-03-09 15:02:13', '2019-03-09 15:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Haidir', 'Hassan', 'haidir', 'password', 'haidir@gmail.com', 1, '2019-03-08 15:20:04', '2019-03-08 15:20:04'),
(2, 'Haidir', 'Hassan', 'admin', 'password', 'hhahaha@gmail.com', 1, '2019-03-09 15:22:21', '2019-03-09 15:22:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

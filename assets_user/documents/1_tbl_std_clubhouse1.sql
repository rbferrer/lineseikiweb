-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 08:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maiya_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_clubhouse`
--

CREATE TABLE `tbl_std_clubhouse` (
  `id` mediumint(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `edit_date` datetime NOT NULL,
  `edit_user` mediumint(11) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `name` tinytext NOT NULL,
  `status` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_std_clubhouse`
--

INSERT INTO `tbl_std_clubhouse` (`id`, `create_date`, `edit_date`, `edit_user`, `is_deleted`, `name`, `status`) VALUES
(1, '2024-05-21 13:23:54', '2024-05-21 13:23:54', 1, 0, 'test', 'Active'),
(2, '2024-05-21 13:29:43', '2024-05-21 13:29:43', 1, 0, 'test1', 'Active'),
(3, '2024-05-21 13:37:14', '2024-05-21 13:37:14', 1, 0, 'test2', 'Active'),
(4, '2024-05-21 13:40:27', '2024-05-21 13:40:27', 1, 0, 'test3', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_std_clubhouse`
--
ALTER TABLE `tbl_std_clubhouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_std_clubhouse`
--
ALTER TABLE `tbl_std_clubhouse`
  MODIFY `id` mediumint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

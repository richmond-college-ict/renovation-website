-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 04, 2025 at 09:46 PM
-- Server version: 8.0.42
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bxvhsavv_rcp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'RUSIRU THAMARA', 'admin@gmail.com', 'testing', 'yes working ');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `cost` text NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `cost`, `img`) VALUES
(1, 'Kannagara Auditorium', 'painting of interior and exterior walls', '-', '3.jpg'),
(2, 'play area of primary section', 'laying rubber carpet and fixing releavant equipments', 'Rs. 2,500,000.00', 'WhatsApp Image 2025-02-17 at 19.09.05.jpeg'),
(3, 'Scout den undertaken by past scout Association ✔', '-', '-', '../img/7.jpg'),
(4, 'Grade 11 building and grade 9-11 head office ✔', 'Renvation undertaken by 97 batch RCOBA', '-', '../img/8.jpg'),
(5, 'Special Unit for Special need building', 'painting on exterior walls', ' Rs. 200,000', '../img/4.jpg'),
(6, 'Kannangara Auditorium sound system', '-', 'Rs. 800,000', '../img/5.jpg'),
(7, 'Kannangara Auditorium light system and panel board', '-', 'Rs. 200,000', '../img/5.jpg'),
(8, 'Kannangara Auditorium - renovation of stage', '-', 'Rs. 1,000,000', '../img/5.jpg'),
(9, 'Purchasing a Duplo machine', '-', 'Rs. 1,500,000.00', '11.jpg'),
(10, 'Sneath Ground Pavilion', 'Painting of interior and exterior in Sneath Ground Pavilion', 'Estimated Cost-', '../img/rich_5.jpg'),
(11, 'Main Staff Room', 'Interior and Exterior wall Painting, Renovation of Doors and windows, Wash room renovations and make a proper water disposal system.', '-', '../img/WhatsApp Image 2025-02-25 at 09.37.04.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, ' ', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

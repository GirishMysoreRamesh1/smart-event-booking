-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2025 at 01:41 AM
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
-- Database: `event_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `event_id`, `booking_date`) VALUES
(1, 1, 1, '2025-07-29 15:19:46'),
(2, 1, 2, '2025-07-29 15:19:46'),
(3, 3, 1, '2025-07-29 20:54:31'),
(4, 3, 2, '2025-07-29 21:41:00'),
(5, 6, 2, '2025-07-29 21:46:58'),
(6, 8, 5, '2025-07-29 21:51:47'),
(7, 8, 2, '2025-07-29 21:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `location` varchar(150) DEFAULT NULL,
  `capacity` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `title`, `description`, `event_date`, `event_time`, `location`, `capacity`, `created_by`, `created_at`) VALUES
(1, 'Tech Talk: AI in 2025', 'A discussion on the role of AI in shaping future industries.', '2025-08-20', '14:00:00', 'Auditorium A', 100, 2, '2025-07-29 15:19:46'),
(2, 'Art Workshop: Watercolors', 'Hands-on session exploring watercolor painting techniques.', '2025-08-22', '10:30:00', 'Studio Room 3', 30, 2, '2025-07-29 15:19:46'),
(4, 'Sport Spirit: How to kick start your sports carrier', NULL, '2025-08-14', '16:00:00', 'Open Gallery 1', 40, 4, '2025-07-29 20:41:02'),
(5, 'Motivational Event', NULL, '2025-08-14', '16:05:00', 'Auditorium A', 20, 7, '2025-07-29 21:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Alice Johnson', 'alice@example.com', '$2y$10$Sh02rOfYWem1aLZLp0jvXuzkGOX6rKoEpX9mWZYAtYbzW2c0YxVPe', 'user', '2025-07-29 15:19:46'),
(2, 'Bob Smith', 'bob@example.com', '$2y$10$R2etAnkPNHHM852JHkbcieu06oBbCWUxMlbMgScX.jmqffeUBazFC', 'admin', '2025-07-29 15:19:46'),
(3, 'Aron Shell', 'aron.shell@gmail.com', '$2y$10$Aa/LZ6IgYNA.8WKPUUD2MO//2RZemh3npU3jhFtOT0bYx.o3Ewa8W', 'user', '2025-07-29 20:16:26'),
(4, 'Rick Grime', 'rick01@gmail.com', '$2y$10$H7vgl4YnEyhYW8rni3njMO37rvm1Nq0G9sD7M8NzQj7rR/FAFSDZ6', 'admin', '2025-07-29 20:17:17'),
(5, 'Mery Jane', 'mery01@gmail.com', '$2y$10$GV.p94R1iInQ/66WCu03/undUva28GDL8eGhG8/li1jANht6SqT3a', 'admin', '2025-07-29 21:45:27'),
(6, 'Martin Jane', 'jane.martin@gmail.com', '$2y$10$BC5ia8tLIAkAKrxL33KfquDqZIlExTXiPekQVnsEiXcijMRBZ2Ha.', 'user', '2025-07-29 21:46:40'),
(7, 'Carol Jane', 'carol@gmail.com', '$2y$10$IZB3qyVi3I9aNTTIUPWwPe0Ma3JanWiy64am0qoBCnlCRqKAypy.m', 'admin', '2025-07-29 21:49:51'),
(8, 'Ron Martin', 'martin@gmail.com', '$2y$10$7zMcI6W2ruoSeCHwUOR.seZ2WjceOmVeVc552r1p3RPyChWj7AdC6', 'user', '2025-07-29 21:51:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

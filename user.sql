-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2022 at 09:09 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `email` varchar(225) NOT NULL,
  `location` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `spot` varchar(255) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`email`, `location`, `day`, `spot`, `status`) VALUES
('user1@test.com', 'sjt', 'mon', '5', 0),
('user1@test.com', 'sjt', 'tue', '1', 0),
('user1@test.com', 'sjt', 'wed', '3', 0),
('user1@test.com', 'sjt', 'thu', '6', 0),
('user1@test.com', 'sjt', 'fri', '20', 0),
('user1@test.com', 'sjt', 'sat', '20', 0),
('user1@test.com', 'sjt', 'sun', '13', 0),
('user1@test.com', 'tt', 'mon', '1', 0),
('user1@test.com', 'tt', 'tue', '9', 0),
('user1@test.com', 'tt', 'wed', '14', 0),
('user1@test.com', 'tt', 'thu', '13', 0),
('user1@test.com', 'tt', 'fri', '8', 0),
('user1@test.com', 'tt', 'sat', '3', 0),
('user1@test.com', 'tt', 'sat', '9', 0),
('user1@test.com', 'tt', 'sun', '16', 0),
('user1@test.com', 'mb', 'mon', '3', 0),
('user1@test.com', 'mb', 'tue', '8', 0),
('user1@test.com', 'mb', 'wed', '19', 0),
('user1@test.com', 'mb', 'thu', '10', 0),
('user1@test.com', 'mb', 'sun', '15', 0),
('user1@test.com', 'mh', 'mon', '6', 0),
('user1@test.com', 'mh', 'tue', '10', 0),
('user1@test.com', 'mh', 'wed', '14', 0),
('user1@test.com', 'mh', 'thu', '18', 0),
('user1@test.com', 'mh', 'fri', '11', 0),
('user1@test.com', 'mh', 'sat', '10', 0),
('user1@test.com', 'mh', 'sun', '16', 0),
('user2@test.com', 'sjt', 'mon', '8', 0),
('user2@test.com', 'sjt', 'wed', '18', 0),
('user2@test.com', 'sjt', 'fri', '13', 0),
('user2@test.com', 'sjt', 'sun', '6', 0),
('user2@test.com', 'tt', 'mon', '17', 0),
('user2@test.com', 'tt', 'wed', '19', 0),
('user2@test.com', 'tt', 'fri', '9', 0),
('user2@test.com', 'tt', 'sun', '2', 0),
('user2@test.com', 'mb', 'mon', '14', 0),
('user2@test.com', 'mb', 'wed', '5', 0),
('user2@test.com', 'mb', 'fri', '13', 0),
('user2@test.com', 'mb', 'sun', '8', 0),
('user2@test.com', 'mh', 'mon', '3', 0),
('user2@test.com', 'mh', 'wed', '19', 0),
('user2@test.com', 'mh', 'fri', '10', 0),
('user2@test.com', 'mh', 'sun', '10', 0),
('user3@test.com', 'sjt', 'tue', '15', 0),
('user3@test.com', 'sjt', 'thu', '18', 0),
('user3@test.com', 'sjt', 'sat', '9', 0),
('user3@test.com', 'tt', 'tue', '3', 0),
('user3@test.com', 'tt', 'thu', '15', 2),
('user3@test.com', 'tt', 'sat', '19', 0),
('user3@test.com', 'mb', 'tue', '12', 0),
('user3@test.com', 'tt', 'thu', '17', 0),
('user3@test.com', 'mb', 'sat', '4', 0),
('user3@test.com', 'mh', 'tue', '16', 0),
('user3@test.com', 'mh', 'thu', '14', 0),
('user3@test.com', 'mh', 'sat', '12', 0),
('user4@test.com', 'sjt', 'mon', '16', 0),
('user4@test.com', 'sjt', 'sat', '4', 0),
('user4@test.com', 'tt', 'wed', '6', 0),
('user4@test.com', 'mb', 'tue', '4', 0),
('user4@test.com', 'mb', 'sat', '18', 1),
('user4@test.com', 'mh', 'tue', '1', 0),
('user4@test.com', 'mh', 'sat', '7', 0),
('user6@test.com', 'sjt', 'wed', '6', 2),
('user6@test.com', 'tt', 'fri', '6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `address` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `VNo` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `token`, `status`, `address`, `VNo`) VALUES
(3, 'user1', 'user1@test.com', '24c9e15e52afc47c225b757e7bee1f9d', '2072a41888cd53df067f7cc4b04355fc', 1, 'nepal', 'xz12'),
(4, 'user2', 'user2@test.com', '7e58d63b60197ceb55a1c487989a3720', '08e85f98853e13b17e61148dc54ef805', 1, 'vit', 'ab12'),
(5, 'user3', 'user3@test.com', '92877af70a45fd6a2ed7fe81e1236b78', 'e66156628e0a04cc28afd23a108efe71', 1, 'Delhi', 'pq21'),
(6, 'user4', 'user4@test.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'ea547aa278ef476bf170b6002f0031a6', 1, 'chennia', 'ka56'),
(7, 'user6', 'user6@test.com', 'affec3b64cf90492377a8114c86fc093', 'e30efcd706d777018743a6acff836e04', 1, 'vit', 'HR26DK8337'),
(8, 'u1', 'u1@u1.com', 'e4774cdda0793f86414e8b9140bb6db4', '113f725d04e32f966ec1c46a9652e788', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `email` varchar(225) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`email`, `feedback`) VALUES
('user1@test.com', 'test feedback\r\n'),
('user2@test.com', 'test f2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

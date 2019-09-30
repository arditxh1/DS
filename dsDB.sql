-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `code_projekte`
--

CREATE TABLE `code_projekte` (
  `id` int(11) NOT NULL,
  `Emri` varchar(100) NOT NULL,
  `Short` varchar(200) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_id` int(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'code',
  `Review` int(12) NOT NULL DEFAULT 11,
  `badges` varchar(50) NOT NULL DEFAULT 'none',
  `approved` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code_projekte`
--

INSERT INTO `code_projekte` (`id`, `Emri`, `Short`, `Link`, `username`, `user_id`, `type`, `Review`, `badges`, `approved`) VALUES
(7, 'Egg Man', 'Its about an egg man.', 'https://studio.code.org/projects/gamelab/kSGLMkZvZX1mvyyVvJT5qKigdWOentqvWE5RS0CjJQk', 'Arditxh3', 53, 'code', 11, 'none', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `idOfPr` int(11) NOT NULL,
  `TypeOfPr` varchar(30) NOT NULL,
  `Mesage` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `receiver_id` int(255) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idOfPr`, `TypeOfPr`, `Mesage`, `user_id`, `time`, `username`, `receiver_id`, `checked`) VALUES
(209, 8, 'scratch', 'Keq e ki bo', 8, 'September 30 at 16:32', 'arditxh2', 53, 1),
(210, 8, 'scratch', 'Nice bug', 8, 'September 30 at 16:32', 'arditxh2', 53, 1),
(211, 8, 'scratch', 'wow', 8, 'September 30 at 16:36', 'arditxh2', 53, 1),
(212, 8, 'scratch', 'Pse spo vjen toast', 8, 'September 30 at 16:41', 'arditxh2', 53, 1),
(213, 8, 'scratch', 'Nice', 8, 'September 30 at 16:43', 'arditxh2', 53, 1),
(214, 8, 'scratch', 'nice', 8, 'September 30 at 16:43', 'arditxh2', 53, 1),
(215, 8, 'scratch', 'Nice', 8, 'September 30 at 16:43', 'arditxh2', 53, 1),
(216, 8, 'scratch', 'Nice', 8, 'September 30 at 16:43', 'arditxh2', 53, 1),
(217, 8, 'scratch', 'nice', 8, 'September 30 at 16:43', 'arditxh2', 53, 1),
(218, 8, 'scratch', 'Nice', 8, 'September 30 at 17:5', 'arditxh2', 53, 1),
(219, 8, 'scratch', 'wow', 8, 'September 30 at 17:5', 'arditxh2', 53, 1),
(220, 8, 'scratch', 'nice', 8, 'September 30 at 17:5', 'arditxh2', 53, 1),
(221, 8, 'scratch', 'Nice', 8, 'September 30 at 17:7', 'arditxh2', 53, 1),
(222, 8, 'scratch', 'Nicer', 8, 'September 30 at 17:7', 'arditxh2', 53, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kodu_projekte`
--

CREATE TABLE `kodu_projekte` (
  `id` int(11) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Short` varchar(80) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'kodu',
  `Review` int(12) NOT NULL DEFAULT 11,
  `badges` varchar(50) NOT NULL DEFAULT 'none',
  `approved` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kodu_projekte`
--

INSERT INTO `kodu_projekte` (`id`, `Emri`, `Short`, `File`, `Link`, `user_id`, `username`, `type`, `Review`, `badges`, `approved`) VALUES
(10, 'Oktapode', 'Kjo loje nevoitet per qe oktapodet te hane dy peshq kurse peshqit e medhenje ne ', 'uploads/5d921eb343df15.19789367.kodu', '', 53, 'arditxh3', 'kodu', 11, 'none', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projekete_app`
--

CREATE TABLE `projekete_app` (
  `id` int(11) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `Short` varchar(80) NOT NULL,
  `Full` varchar(500) NOT NULL,
  `SCR` varchar(100) NOT NULL,
  `Icon` varchar(100) NOT NULL,
  `CD` varchar(100) NOT NULL,
  `APK` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Review` int(12) NOT NULL DEFAULT 11,
  `user_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'app',
  `badges` varchar(50) NOT NULL DEFAULT 'none',
  `approved` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `Review` int(11) NOT NULL DEFAULT 11,
  `PrId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `OwnerId` int(11) NOT NULL,
  `RevType` varchar(50) NOT NULL,
  `checked` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scratch_projekte`
--

CREATE TABLE `scratch_projekte` (
  `id` int(11) NOT NULL,
  `Emri` varchar(100) NOT NULL,
  `Short` varchar(200) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_id` int(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'scratch',
  `Review` int(12) NOT NULL DEFAULT 11,
  `badges` varchar(50) NOT NULL DEFAULT 'none',
  `approved` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scratch_projekte`
--

INSERT INTO `scratch_projekte` (`id`, `Emri`, `Short`, `Link`, `username`, `user_id`, `type`, `Review`, `badges`, `approved`) VALUES
(8, 'Plantera', 'Select a type of plant then place the plant of your choice on a location.', 'https://scratch.mit.edu/projects/322001543/', 'Arditxh3', 53, 'scratch', 11, 'idea,code,design', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stencyl_projekte`
--

CREATE TABLE `stencyl_projekte` (
  `id` int(11) NOT NULL,
  `Emri` varchar(70) NOT NULL,
  `Short` varchar(150) NOT NULL,
  `SCR` varchar(100) NOT NULL,
  `File` varchar(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'stencyl',
  `Review` int(12) NOT NULL DEFAULT 11,
  `badges` varchar(50) NOT NULL DEFAULT 'none',
  `approved` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stencyl_projekte`
--

INSERT INTO `stencyl_projekte` (`id`, `Emri`, `Short`, `SCR`, `File`, `user_id`, `username`, `type`, `Review`, `badges`, `approved`) VALUES
(4, 'Enemy Follower and Enemy', 'Enemy Follower and Enemy enemy Follower and Enemy.', 'uploads/5d9220094671c9.35148578.png', 'uploads/5d9220093f7aa4.25876570.stencyl', 53, 'arditxh3', 'stencyl', 11, 'none', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`) VALUES
(8, 'Arditxh2', 'ardit.xhafer@hotmail', '$2y$10$nI6Xlst3FuTjUjz9MgPRFONqF0jIuL3I0no.d1m7W7MU7GCZVOdxi', 'admin'),
(53, 'Arditxh3', 'ardit.xhaferi@hotmai', '$2y$10$rJLgadZLtOhOgtIdycL8cOrWjX4yaN4JzLRImCISikoJd8b32iaYG', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `web_projekte`
--

CREATE TABLE `web_projekte` (
  `id` int(11) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Short` varchar(80) NOT NULL,
  `Full` varchar(300) NOT NULL,
  `File` varchar(100) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `screenshot` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'web',
  `Review` int(12) NOT NULL DEFAULT 11,
  `badges` varchar(50) NOT NULL DEFAULT 'none',
  `approved` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `code_projekte`
--
ALTER TABLE `code_projekte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kodu_projekte`
--
ALTER TABLE `kodu_projekte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projekete_app`
--
ALTER TABLE `projekete_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scratch_projekte`
--
ALTER TABLE `scratch_projekte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stencyl_projekte`
--
ALTER TABLE `stencyl_projekte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_projekte`
--
ALTER TABLE `web_projekte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code_projekte`
--
ALTER TABLE `code_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `kodu_projekte`
--
ALTER TABLE `kodu_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projekete_app`
--
ALTER TABLE `projekete_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `scratch_projekte`
--
ALTER TABLE `scratch_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stencyl_projekte`
--
ALTER TABLE `stencyl_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `web_projekte`
--
ALTER TABLE `web_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

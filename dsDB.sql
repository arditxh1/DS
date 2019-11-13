-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 10:11 PM
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
(8, 'Pug Wrestling', 'Wrestle ur pugs have fun but be safe!', 'https://studio.code.org/projects/gamelab/VeGRJyPN1f5PNwKyL0XK0OHS8U-EwpvM2CJWWVV9z9s', 'arditxh1', 54, 'code', 11, 'none', 1),
(9, 'Egg Man', 'Egg man', 'https://studio.code.org/projects/gamelab/kSGLMkZvZX1mvyyVvJT5qKigdWOentqvWE5RS0CjJQk', 'arditxh3', 55, 'code', 11, 'none', 0),
(10, 'Egg Man', 'egg man', 'https://studio.code.org/projects/gamelab/kSGLMkZvZX1mvyyVvJT5qKigdWOentqvWE5RS0CjJQk', 'arditxh3', 55, 'code', 11, 'none', 0),
(11, 'Egg Man', 'egg man', 'https://studio.code.org/projects/gamelab/kSGLMkZvZX1mvyyVvJT5qKigdWOentqvWE5RS0CjJQk', 'arditxh3', 55, 'code', 11, 'none', 0),
(12, 'Egg Man', 'egg man', 'https://studio.code.org/projects/gamelab/kSGLMkZvZX1mvyyVvJT5qKigdWOentqvWE5RS0CjJQk', 'arditxh3', 55, 'code', 11, 'none', 0),
(13, 'Egg Man', 'egg man', 'https://studio.code.org/projects/gamelab/kSGLMkZvZX1mvyyVvJT5qKigdWOentqvWE5RS0CjJQk', 'arditxh3', 55, 'code', 11, 'none', 0);

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
(11, 'Mini challanges', ' Ne kete loj ti duhet te kryesh disa mini challenges . Ndryshe challengs jan te ', 'uploads/5db05317d58a87.07194202.kodu', 'https://worlds.kodugamelab.com/world/EiMYp0jxa0GxzXl3sR4QhA==', 54, 'arditxh1', 'kodu', 11, 'none', 1);

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

--
-- Dumping data for table `projekete_app`
--

INSERT INTO `projekete_app` (`id`, `Emri`, `Short`, `Full`, `SCR`, `Icon`, `CD`, `APK`, `username`, `Review`, `user_id`, `type`, `badges`, `approved`) VALUES
(45, 'Testi i Arritshmerri', 'Ushtrime dhe Teste Per Testin e Arritshmerise', 'Ky aplikacione eshte qe te ndihmoje per testin e arritshmerise ne klasen e 9.Ka 6 lende dhe cdo lende i ka peraferisht deri ne 4 teste.Cdo test i ka deri ne 10 pytje dhe pytjet jane prej testeve te kaluara.', 'uploads/5db057f0c19a62.61347764.png', 'uploads/5db057f0c1ca58.65739589.png', 'uploads/5db057f0c1fa15.76083802.png', 'uploads/5db057f0c21f07.64834235.apk', 'arditxh3', 11, 55, 'app', 'none', 1);

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
  `checked` int(5) NOT NULL DEFAULT 0,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `Review`, `PrId`, `UserId`, `OwnerId`, `RevType`, `checked`, `time`) VALUES
(79, 10, 4, 54, 55, 'html_projekte', 1, 'October 23 at 15:42'),
(80, 5, 45, 54, 55, 'app_projekte', 1, 'October 23 at 15:42'),
(81, 4, 9, 55, 54, 'scratch_projekte', 0, 'October 23 at 15:42');

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
(9, 'Racing Game', 'You need to be pretty dumb to not realize how to play it. Have fun!', 'https://scratch.mit.edu/projects/193497406/', 'arditxh1', 54, 'scratch', 11, 'none', 1);

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
(6, 'Pong Starter', 'Pong is one of the earliest arcade video games. It is a table tennis sports game', 'uploads/5db05450202898.77836798.png', 'uploads/5db054501ff419.54377708.stencyl', 55, 'arditxh3', 'stencyl', 11, 'none', 1);

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
(54, 'arditxh1', 'ardit.xhaferi@hotmai', '$2y$10$jEXsbte7lbo4E0hX.ORgneyDZavoqRWUqo6gjMOmFATYErk1neGPu', 'user'),
(55, 'arditxh3', 'ardit.xhaferi1@hotma', '$2y$10$.jjTE06V6KKTIATXyK4QH..xB.ARaE8ozUcG.dt4Tt/FwZeOAgDO6', 'user');

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
-- Dumping data for table `web_projekte`
--

INSERT INTO `web_projekte` (`id`, `Emri`, `Short`, `Full`, `File`, `Link`, `user_id`, `username`, `screenshot`, `type`, `Review`, `badges`, `approved`) VALUES
(4, 'Percentage of teamwork', 'This website is about calculating the % of teamwork. Every group member has 100%', 'This website is about calculating the % of teamwork. Every group member has 100% and will divide that to all the other members and in the end, we will find % how much does the group think each individual member worked.', 'uploads/5db05862135872.58172979.zip', '', 55, 'arditxh3', 'uploads/5db05862138b55.97680069.png', 'web', 11, 'none', 1);

-- --------------------------------------------------------

--
-- Table structure for table `yearly_data`
--

CREATE TABLE `yearly_data` (
  `January` int(100) NOT NULL,
  `February` int(100) NOT NULL,
  `March` int(100) NOT NULL,
  `April` int(100) NOT NULL,
  `May` int(100) NOT NULL,
  `June` int(100) NOT NULL,
  `July` int(100) NOT NULL,
  `August` int(100) NOT NULL,
  `September` int(100) NOT NULL,
  `October` int(100) NOT NULL,
  `November` int(100) NOT NULL,
  `December` int(100) NOT NULL,
  `Projekt_Type` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yearly_data`
--

INSERT INTO `yearly_data` (`January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`, `Projekt_Type`, `id`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'App', 1),
(1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Code', 2),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Kodu', 3),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Scratch', 4),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Stencyl', 5),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Web', 6);

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
-- Indexes for table `yearly_data`
--
ALTER TABLE `yearly_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Projekt_Type` (`Projekt_Type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `code_projekte`
--
ALTER TABLE `code_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `kodu_projekte`
--
ALTER TABLE `kodu_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projekete_app`
--
ALTER TABLE `projekete_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `scratch_projekte`
--
ALTER TABLE `scratch_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stencyl_projekte`
--
ALTER TABLE `stencyl_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `web_projekte`
--
ALTER TABLE `web_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `yearly_data`
--
ALTER TABLE `yearly_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

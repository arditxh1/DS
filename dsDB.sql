-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 04:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `approved` int(10) NOT NULL DEFAULT 0,
  `ncf` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `approved` int(10) NOT NULL DEFAULT 0,
  `ncf` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `approved` int(10) NOT NULL DEFAULT 0,
  `ncf` int(10) NOT NULL DEFAULT 0
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
  `checked` int(5) NOT NULL DEFAULT 0,
  `time` varchar(50) NOT NULL
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
  `approved` int(10) NOT NULL DEFAULT 0,
  `ncf` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `approved` int(10) NOT NULL DEFAULT 0,
  `ncf` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(8, 'Arditxh2', 'ardit.xhafer@hotmail', '$2y$10$nI6Xlst3FuTjUjz9MgPRFONqF0jIuL3I0no.d1m7W7MU7GCZVOdxi', 'admin');

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
  `approved` int(10) NOT NULL DEFAULT 0,
  `ncf` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'Code', 2),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `kodu_projekte`
--
ALTER TABLE `kodu_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projekete_app`
--
ALTER TABLE `projekete_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `scratch_projekte`
--
ALTER TABLE `scratch_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stencyl_projekte`
--
ALTER TABLE `stencyl_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `web_projekte`
--
ALTER TABLE `web_projekte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yearly_data`
--
ALTER TABLE `yearly_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

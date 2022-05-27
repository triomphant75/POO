-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 08:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_scolaire_l2`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `filiere` varchar(20) NOT NULL,
  `niveau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `date_cours` date NOT NULL,
  `heure_debut` varchar(10) NOT NULL,
  `heure_fin` varchar(10) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `professeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professeur_module`
--

CREATE TABLE `professeur_module` (
  `module_id` int(11) NOT NULL,
  `professeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `grade` varchar(25) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `quartier` varchar(100) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classe_id` (`classe_id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `professeur_id` (`professeur_id`),
  ADD KEY `module_id_2` (`module_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Indexes for table `professeur_module`
--
ALTER TABLE `professeur_module`
  ADD KEY `module_id` (`module_id`),
  ADD KEY `professeur_id` (`professeur_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`classe_id`) REFERENCES `classe` (`id`),
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `cours_ibfk_3` FOREIGN KEY (`professeur_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `professeur_module`
--
ALTER TABLE `professeur_module`
  ADD CONSTRAINT `professeur_module_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `professeur_module_ibfk_2` FOREIGN KEY (`professeur_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2021 at 11:08 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10156642_car`
--
CREATE DATABASE IF NOT EXISTS `id10156642_car` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id10156642_car`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `repassword`, `status`) VALUES
('akash', 'akash123', '', '', ''),
('bipeen kumar', '123', 'bkcse906049@gmail.com', '123', ''),
('shan', '12345', 'shantanusk.sk@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `sl.no` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`sl.no`, `model`) VALUES
('1', 'Ford'),
('2', 'Mercedes'),
('3', 'Audi'),
('4', 'Suzuki'),
('5', 'BMW'),
('6', 'Chevrolet'),
('7', 'Honda'),
('8', 'lamborghini'),
('9', 'land rover'),
('10', 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `model_name`
--

CREATE TABLE `model_name` (
  `sl.no` varchar(50) NOT NULL,
  `model_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_name`
--

INSERT INTO `model_name` (`sl.no`, `model_name`) VALUES
('1', 'Ford Mustang'),
('1', 'Ford Eco Sport'),
('1', 'Ford Figo'),
('1', 'Ford Aspire'),
('1', 'Ford Freestyle'),
('1', 'Endeavour'),
('2', 'Mercedes-Benz C-class'),
('2', 'Mercedes-Benz E-class'),
('2', 'Mercedes-Benz Gla'),
('2', 'Mercedes-Benz Gls'),
('2', 'Mercedes-Benz A-class'),
('2', 'Mercedes-Benz CLA'),
('2', 'Mercedes-Benz V-class'),
('2', 'Mercedes-Benz S-Class'),
('2', 'Mercedes-Benz AMZ GT'),
('2', 'Mercedes-Benz GLC Coupe'),
('3', 'audi r8'),
('3', 'audi a4'),
('3', 'audi a6'),
('3', 'audi q5'),
('3', 'audi a5'),
('3', 'audi q7'),
('4', 'Suzuki Sx4'),
('4', 'Suzuki Baleno'),
('4', 'Suzuki swift'),
('4', 'Suzuki Ertiga'),
('4', 'Suzuki Dzire'),
('4', 'Suzuki Alto 800'),
('5', 'BMW X5'),
('5', 'BMW x6'),
('5', 'BMW x4'),
('5', 'BMW X2'),
('5', 'BMW 7 series'),
('5', 'BMW 6 series'),
('6', 'cevrolet beat'),
('6', 'cevrolet aveo'),
('6', 'chevrolet captiva'),
('6', 'chevrolet cruze'),
('6', 'chevrolet enjoy'),
('6', 'chevrolet spark'),
('6', 'chevrolet tavera'),
('6', 'chevrolet sail'),
('7', 'Honda Civic'),
('7', 'Honda CV-R'),
('7', 'Honda WR-'),
('7', 'Honda BR-V'),
('7', 'Honda City'),
('7', 'Honda Brio'),
('7', 'Honda Amaze'),
('8', 'lamborgini URS'),
('8', 'Lamborgini Aventador'),
('8', 'lamborgini Huracan'),
('8', 'Lamborgini centanario'),
('8', 'lamborgini Estoque'),
('8', 'Lamborgini centanario roacster'),
('9', 'land rover range rover'),
('9', 'land rover discovery'),
('9', 'land rover discovery sport'),
('9', 'land rover range rover velar'),
('10', 'toyota pirus'),
('10', 'toyota camry'),
('10', 'toyota fortuner'),
('10', 'toyata yaris'),
('10', 'toyota etios'),
('10', 'toyota liva');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `dob`, `password`) VALUES
(1, 'SHAN', 'shan@gmail.com', '7717746843', '1997-03-16', 'shan'),
(2, 'shantanu yadav', 'shan@gmail.com', '7717746843', '1997-03-16', 'shan@16');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

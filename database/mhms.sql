-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2025 at 07:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `verification` varchar(15) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `rmb` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `verification`, `status`, `phone`, `rmb`) VALUES
(7, 'Rizel Mulle Bracero', 'rizelbrace4421awdwa22@gmail.com', '$2y$10$5AmAcVChNO7HK8d.dPJYs.2dX7QRBiHB9uxtGc/XoVtfVfrtioqDi', NULL, 'Administrator', '2147483647', NULL),
(8, 'Rizel Mulle Bracero', 'rizelbrace442121awdwa22@gmail.com', '$2y$10$uwFhdhadRI3iA3ft.rn/EOHwEwymrDpfUNLg8BN/9BLLKq4/kcNJO', NULL, 'Administrator', '09512014897', NULL),
(9, 'Rizel Mulle Bracero', 'rizel@gmail.com', '$2y$10$RKTL4H.WAmm8L5MTDyUdTuafI8cPLtW5rfKQ9kqKVdWePgId2.mxe', NULL, 'Administrator', '09512014897', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patients_id` int(11) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `appointment_details` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patients_id`, `appointment_date`, `appointment_time`, `appointment_details`, `status`) VALUES
(4, 17, '2025-12-12', '12:12:00', 'awd', NULL),
(5, 17, '2025-12-12', '12:31:00', 'awdawdw', NULL),
(6, 18, '2026-12-12', '12:31:00', '123123', NULL),
(7, 18, '2026-12-12', '12:31:00', 'rizel', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verification` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `btype` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `email`, `phone`, `birthdate`, `password`, `created_at`, `verification`, `profile_image`, `btype`) VALUES
(17, 'Rizel1', 'Bracero1', 'rizel@gmail.com', '09123456789', '2023-02-02', '$2y$10$5xKB6i.ZjWc03oev8NGH.eNJbwD0VE3XmZHaTady4BSFq4p90Jpi6', '2025-04-27 00:50:11', NULL, 'profile_680d883635a5e4.45223682.png', ''),
(18, 'gwapo', 'ko', 'rizelbrace442@gmail.com', '09123456789', '2003-12-12', '$2y$10$TAWjz3D.Er.yKuvAr9TWB.lHmHTqVTjzkee2vpBAeJItAo5xaHlVe', '2025-04-27 03:05:23', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 06:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `total_patient` int(15) NOT NULL,
  `active_patient` int(15) NOT NULL DEFAULT 0,
  `discharged` int(15) NOT NULL DEFAULT 0,
  `total_recovered` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`total_patient`, `active_patient`, `discharged`, `total_recovered`) VALUES
(3, 1, 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(4) NOT NULL,
  `MDSE` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `BG` varchar(10) DEFAULT NULL,
  `A_Doctor` varchar(30) DEFAULT NULL,
  `symptoms` varchar(30) DEFAULT NULL,
  `diagnosis` varchar(30) DEFAULT NULL,
  `medicines` varchar(30) DEFAULT NULL,
  `admission` varchar(5) DEFAULT NULL,
  `stayed_days` int(3) DEFAULT NULL,
  `WCPday` int(5) DEFAULT NULL,
  `totalWC` int(10) DEFAULT NULL,
  `doctor_fee` int(10) DEFAULT NULL,
  `service_fee` int(10) DEFAULT NULL,
  `total_bill` int(15) DEFAULT NULL,
  `Last_Updated_Date` date DEFAULT NULL,
  `discharged_date` date DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `date`, `time`, `name`, `address`, `phone`, `age`, `MDSE`, `gender`, `BG`, `A_Doctor`, `symptoms`, `diagnosis`, `medicines`, `admission`, `stayed_days`, `WCPday`, `totalWC`, `doctor_fee`, `service_fee`, `total_bill`, `Last_Updated_Date`, `discharged_date`, `status`) VALUES
(1, '2023-06-02', '22:38:47', 'prac.php', '', '2147483647', 34, 'gr', 'M', 'A', ' n', NULL, 'h', NULL, NULL, 45, 45, 2025, 98, 65, 2188, '2023-06-03', '2023-07-06', 'discharged'),
(2, '2023-06-02', '22:43:10', 'sagar shinde', 'masalga', '9876543210', 20, 'nothing buddy', 'M', 'A', 'sagasrwallah', 'guruji', 'kjn', 'nothing', 'Y', 5, 2, 10, 3, 4, 17, '2023-06-03', NULL, ''),
(3, '2023-06-04', '00:24:03', 'sagar', 'M.S. Bidve Engg ,Latur,oswadi, Maharashtra', '987654321', 20, 'nothing', 'M', 'A', NULL, NULL, NULL, NULL, NULL, 23, 34, 782, 34, 4, 820, '2023-06-04', '0000-00-00', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`total_patient`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

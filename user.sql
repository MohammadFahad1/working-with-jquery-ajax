-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`) VALUES
(1, 'Md. Fahad Monshi', 'fahad4bangladesh@gmail.com'),
(8, 'Hasib Hasan', 'hasan@gmail.com'),
(10, 'Kaium Islam', 'kaium@yahoo.com'),
(11, 'Jibon Chowdhury', 'jibon@yahoo.com'),
(13, 'Saiful Biswas', 'saiful@gmail.com'),
(14, 'Afsar Ali', 'afsar@gmail.com'),
(15, 'Mutalab Munshi', 'mutalab@gmail.com'),
(16, 'Carryminati', 'carry@gmail.com'),
(17, 'Jubayer Rahman', 'jubayer@gmail.com'),
(18, 'Irfan Khan', 'irfan@gmail.com'),
(19, 'Sabbir Ahmed', 'sabbir@gmail.com'),
(20, 'Shakib Al Hasan', 'shakib@gmail.com'),
(21, 'Rahman Chowdhury', 'rahman@gmail.com'),
(22, 'Sarfaraz Ahmed', 'sarfaraz@gmail.com'),
(23, 'Ashraf Goni', 'goni@gmail.com'),
(24, 'Runa Laila', 'runa@gmail.com'),
(25, 'Mosharof Hossain Munshi Mukul', 'mukul@gmail.com'),
(26, 'Nagar Baul James', 'james@gmail.com'),
(28, 'Sehrish Kumar', 'sehrish@gmail.com'),
(29, 'Samiul Karim', 'samiul@gmail.com'),
(33, 'Ataur Rahman', 'ataur@gmail.com'),
(34, 'Kubra Khan', 'kubra@yahoo.com'),
(37, 'Sonakshi Sinha', 'sonakshi@gmail.com'),
(38, 'Sohana Thakur', 'sohana@gmail.com'),
(39, 'Jalalur Rahman', 'jalal@gmail.com'),
(40, 'Sanaul Islam', 'sanaul@gmail.com'),
(41, 'Jabed Haque', 'Jabed@gmail.com'),
(42, 'Marwa Mohammad ', 'marwa@gmail.com'),
(43, 'Sumaiya Masood', 'sumaiya@gmail.com'),
(45, 'Raghuveer Yadav', 'raghu@gmail.com'),
(50, 'Sharafat Karim Ayna', 'Ayna@gmail.com'),
(51, 'Bayna Kore Ayna', 'bayna@gmail.com'),
(60, 'Masum Haider', 'masum@gmail.com'),
(86, 'Rashida Khatun', 'rashida@gmail.com'),
(92, 'Jaydev Yadav', 'yadav@gmail.com'),
(104, 'Rocky Handsome', 'rocky@gmail.com'),
(129, 'Amitabh Reza Chowdhury', 'reza@gmail.com'),
(159, 'Ajay Nagar', 'nagar@gmail.com'),
(162, 'Rabbil Hasan', 'rabbil@gmail.com'),
(163, 'Learn with Sumith', 'sumith@gmail.com'),
(164, 'Stack Learner', 'stack@gmail.com'),
(165, 'Saiful Azam', 'azam@gmail.com'),
(166, 'Abdur Rashid', 'rashid@gmail.com'),
(168, 'Chanchal Chowdhury', 'chanchal@gmail.com'),
(169, 'Boris Johnson', 'boris@gmail.com'),
(175, 'Hande Ercel', 'arcel@gmail.com'),
(215, 'Javed Karim', 'javed@gmail.com'),
(217, 'Rafiqul Islam Raj', 'raj@gmail.com'),
(219, 'Elias Hossain', 'elias@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

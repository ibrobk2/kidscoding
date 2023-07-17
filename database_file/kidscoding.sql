-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 04:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidscoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `v3`
--

CREATE TABLE `v3` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `kid_name` varchar(100) NOT NULL,
  `parent_phone` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v3`
--

INSERT INTO `v3` (`id`, `parent_name`, `kid_name`, `parent_phone`, `address`, `email`, `amount`, `reference`, `created_on`) VALUES
(1, 'Ibrahim', 'Yusuf', '', 'No. 8 Makama Road Bakori', '', '25000', 'BKR708536678', '2023-07-16 17:57:07'),
(2, 'Yusuf', 'Ibrahim', '', 'No. 8 Makama Road Bakori.', 'ibrobk@yahoo.com', '25000', 'PSS-KC233140590', '2023-07-16 18:39:46'),
(3, 'Maryam', 'Husna Bugaje', '08089889888', 'KOFAR KAURA KATSINA', 'maryamdamagum08@gmail.com', '25000', 'PSS-KC263619517', '2023-07-16 18:43:15'),
(4, 'Mustapha', 'Masanawa', '07032746812', 'Masanawa Katsina', 'masanawa@gmail.com', '25000', 'PSS-KC929216492', '2023-07-16 18:59:53'),
(5, 'Aminu Rabiu', 'Yusuf Lawal', '09088776786', 'Kofar Marusa ', 'aminurabiu@gmail.com', '25000', 'PSS-KC160077673', '2023-07-16 19:59:17'),
(6, 'Ibrahim Sani', 'Yusuf Ibrahim', '08135363778', 'No. 8 Makama Road Bakori', 'ibrobk@gmail.com', '25000', 'PSS-KC347042067', '2023-07-17 10:22:47'),
(7, 'Ibrahim Sani', 'Yusuf Ibrahim', '08135363778', 'No. 8 Makama Road Bakori', 'ibrobk@gmail.com', '25000', 'PSS-KC672948186', '2023-07-17 11:21:50'),
(8, 'Kabir Sani', 'Yusuf Kabir', '08135363778', 'No. 12 GRA Katsina', 'ibrobk@gmail.com', '25000', 'PSS-KC332786940', '2023-07-17 11:42:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `v3`
--
ALTER TABLE `v3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `v3`
--
ALTER TABLE `v3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

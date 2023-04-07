-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 01:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `video` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `title`, `description`, `video`, `price`, `address`, `image`) VALUES
(1, '2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur at ad eius placeat provident sint assumenda enim recusandae nihil omnis possimus voluptatem accusantium magnam quae adipisci quo eos obcaecati, excepturi minus fugit! Temporibus enim delectus excepturi doloremque minima. Aliquam fugit praesentium harum velit ut ea tempore eaque tempora cupiditate! Quam nostrum odio quibusdam. Sit placeat inventore iusto adipisci nobis numquam.', 'videos/642ff885ca5c96.69906671.mp4', '200000', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'images/642ff885ca0108.37167492.jpeg'),
(2, '0', 'lorem ipsum', 'videos/642ffa739c52f6.41835936.mp4', '2000000', 'Ikoyi,Lagos', 'images/642ffa739c0375.25936173.jpeg'),
(3, 'Smart Home', 'lorem ipsum', 'videos/642ffba087ac62.07214266.mp4', '9000000', 'Sagamu,Ogun', 'images/642ffba08776e4.54847282.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

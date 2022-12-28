-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:18 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snoopyfy`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `dob`, `image`, `category`) VALUES
(1, 'Wizkid', 'Born in 1997', 'wizkid.png', 'top_artists'),
(2, 'Arijit Singh', 'Born in 1994', 'arijit.png', 'top_artists'),
(3, 'Selena Gomez', 'Born in 1987', 'selena.png', 'top_artists'),
(4, 'Billie Eilish', 'Born in 1998', 'billie.png', 'top_artists');

-- --------------------------------------------------------

--
-- Table structure for table `top_result`
--

CREATE TABLE `top_result` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_result`
--

INSERT INTO `top_result` (`id`, `name`, `category`, `image`, `title`) VALUES
(1, 'Wizkid', 'Artist', 'wizkid.png', 'top_result'),
(2, 'Wild \'n\' free', 'Song', 'ts2.png', 'top_result'),
(3, 'Wiseman', 'Album', 'ts3.png', 'top_result'),
(4, 'Duckling', 'Album', 'ts4.png', 'top_result'),
(5, 'Wizzer', 'Artist', 'ts5.png', 'top_result'),
(6, 'Terminator', 'Asake', 'song1.png', 'song'),
(7, 'Under the Influence', 'Christ Brown', 'song2.png', 'song'),
(8, 'Trenchous Twins', 'Drake', 'song3.png', 'song'),
(9, 'Fashionova', 'Blaqbones', 'song4.png', 'song'),
(10, 'Electricity', 'Davido', 'song5.png', 'song'),
(11, 'Terminator', 'Asake', 'album1.png', 'album'),
(12, 'Under the Influence', 'Chris Brown', 'album2.png', 'album'),
(13, 'Trenchous Twins', 'Drake', 'album3.png', 'album'),
(14, 'Fashionova', 'Blagbones', 'album4.png', 'album'),
(15, 'Electricity', 'Davido', 'album5.png', 'album');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_result`
--
ALTER TABLE `top_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_result`
--
ALTER TABLE `top_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

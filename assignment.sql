-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2019 at 07:42 AM
-- Server version: 5.6.44
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpooln_cplng`
--

-- --------------------------------------------------------

--
-- Table structure for table `driverscplng`
--

CREATE TABLE `driverscplng` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(32) NOT NULL,
  `active` datetime(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driverscplng`
--

INSERT INTO `driverscplng` (`id`, `name`, `username`, `email`, `password`, `token`, `active`, `address`, `dob`) VALUES
(1, 'UCHE IROBUNDA', 'irobunda', 'irobundauche@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '', '0000-00-00 00:00:00.000000', '12 ASHAOLU STREET,OFF AKILO ROAD.', '12/05/2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `active` datetime(6) NOT NULL,
  `token` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `address`, `dob`, `active`, `token`, `password`) VALUES
(1, '', 'ww', 'h@h.com', '', '', '0000-00-00 00:00:00.000000', '', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'UCHE IROBUNDA', 'uche', 'irobundauche@gmail.com', '12 ASHAOLU STREET,OFF AKILO ROAD.', '12/05/2018', '0000-00-00 00:00:00.000000', '', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'Oluchi Irobunda ', 'Oluchee', 'Missusoluchi@gmail.com', '12 Ashaolu Street, Ogba ', '06/08/2019', '0000-00-00 00:00:00.000000', '', 'df276495b1c97cf27840822cbe5c0e1a'),
(5, 'Uche Irobunda', 'uche', 'uche.irobunda@ng.multicjoice.com', 'no 12 Ashaolu Street, Off Aklo Road, Ogba- Agege, Lagps State, Nigeria', '04/03/2019', '0000-00-00 00:00:00.000000', '', '25f9e794323b453885f5181f1b624d0b'),
(6, 'toyin', 'toyin', 'irobundauche@yahoo.com', 'no 32 providence street, lekki , lagos state', '04/30/2019', '0000-00-00 00:00:00.000000', '', '25f9e794323b453885f5181f1b624d0b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driverscplng`
--
ALTER TABLE `driverscplng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driverscplng`
--
ALTER TABLE `driverscplng`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

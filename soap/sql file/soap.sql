-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 08:55 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soap`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `des` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `rem` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`des`, `date`, `rem`, `total`, `sn`) VALUES
('koothiparai', '2018-12-11', 10200, 10200, 1),
('koothiparai', '2018-12-11', 10200, 10200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `soap` int(11) NOT NULL,
  `clinic` int(11) NOT NULL,
  `washing` int(11) NOT NULL,
  `manjal` int(11) NOT NULL,
  `pathi` int(11) NOT NULL,
  `tthul` int(11) NOT NULL,
  `des` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`soap`, `clinic`, `washing`, `manjal`, `pathi`, `tthul`, `des`, `date`) VALUES
(2, 3, 1, 5, 6, 3, 'koothiparai', '2018-12-10'),
(0, 0, 0, 0, 0, 0, 'koothiparai', '2018-12-11'),
(5, 3, 2, 4, 5, 1, 'koothiparai', '2018-12-17'),
(5, 1, 5, 2, 3, 4, 'koothiparai', '2019-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `boxrubees`
--

CREATE TABLE `boxrubees` (
  `soap` int(11) NOT NULL,
  `clinic` int(11) NOT NULL,
  `washing` int(11) NOT NULL,
  `manjal` int(11) NOT NULL,
  `pathi` int(11) NOT NULL,
  `tthul` int(11) NOT NULL,
  `des` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxrubees`
--

INSERT INTO `boxrubees` (`soap`, `clinic`, `washing`, `manjal`, `pathi`, `tthul`, `des`, `date`, `total`, `sn`) VALUES
(5, 5, 3, 4, 1, 3, 'koothiparai', '2018-11-08', 5034, 1),
(1020, 720, 510, 750, 600, 540, 'koothiparai', '2018-12-10', 4140, 2),
(2550, 720, 1020, 600, 500, 180, 'koothiparai', '2018-12-17', 5570, 3),
(2550, 240, 2550, 300, 300, 720, 'koothiparai', '2019-01-14', 6660, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `un` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`un`, `pw`, `des`) VALUES
('sathish', 'sk123', 'koothiparai');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `soap` int(11) NOT NULL,
  `washing` int(11) NOT NULL,
  `clinic` int(11) NOT NULL,
  `manjal` int(11) NOT NULL,
  `pathi` int(11) NOT NULL,
  `tthul` int(11) NOT NULL,
  `des` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`date`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `boxrubees`
--
ALTER TABLE `boxrubees`
  ADD PRIMARY KEY (`date`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`un`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

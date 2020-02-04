-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 11:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `id` int(10) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `ssn` varchar(15) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `salary` int(10) NOT NULL,
  `homeaddress` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_record`
--

INSERT INTO `emp_record` (`id`, `ename`, `ssn`, `dept`, `salary`, `homeaddress`) VALUES
(1, 'Patrick', '3763636', 'IT', 36400, 'Nyeri'),
(2, 'Alex', '7335259', 'Marketing', 735300, 'Meru'),
(3, 'John', '3636368', 'Finance', 47630, 'Nakuru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

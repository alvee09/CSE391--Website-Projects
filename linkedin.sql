-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 06:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkedin`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `emp_status` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `skills_1` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `phone`, `email`, `education`, `emp_status`, `location`, `company`, `designation`, `skills_1`, `username`, `password`) VALUES
(1, 'Alvee Rahman', '14/1', '017177', 'alvee09@yahoo.com', 'CSE, MSC', 'employed', 'dhaka', 'Google Inc.', 'Software Engineer', 'PHP MySQL', 'alvee', '123'),
(2, 'Nawab Goni', 'gandaria', '016161', 'nawabi.bhog@gmail.com', 'Economics', 'Employed', 'Chittagong', 'BRAC University', 'Cleaner', 'PHP MySQL', 'nawab', '123'),
(3, 'Mir Dhruba', 'its gang, narayangang', '016161', '123@dhruba.com', 'CSE', 'employed', 'Sylhet', 'Google Inc.', 'Software Engineer', 'PHP MySQL', 'dhruba', '123'),
(4, 'Aaraf Rahman', '1', '01010', '123@aaraf.com', 'O\'level', 'Unemployed', 'Dhaka', '', '', 'PHP MySQL', 'aaraf', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `recruiting` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `name`, `sector`, `contact`, `email`, `address`, `recruiting`, `username`, `password`) VALUES
(1, 'Google Inc.', 'it', '01919', '1@gmail.com', 'USA', 'Yes', 'google', '123');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `post` varchar(100) NOT NULL,
  `skills1` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `responsibility` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `appt_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `comp_id`, `post`, `skills1`, `description`, `responsibility`, `location`, `education`, `salary`, `appt_deadline`) VALUES
(1, 1, 'Engineer', 'Web Programming', 'get the job done', 0, 'dhaka', 'CSE, MBBS', '100000', '2018-09-01'),
(2, 1, 'Sweeper', 'Ghor mucha', 'regular', 0, 'chittagong', 'Bsc in CSE with a CGPA of 3.9+', '20000', '2018-07-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

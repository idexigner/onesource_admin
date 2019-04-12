-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 10:43 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual_wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `actual_expense`
--

CREATE TABLE `actual_expense` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_source` varchar(255) NOT NULL,
  `e_expense` varchar(255) NOT NULL,
  `e_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actual_expense`
--

INSERT INTO `actual_expense` (`e_id`, `e_title`, `e_source`, `e_expense`, `e_details`) VALUES
(1, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(7, 'ad', 'sdjb', '200', 'asdjb'),
(8, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(9, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(10, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(11, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(12, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(13, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(14, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(15, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(16, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(17, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files'),
(18, 'Expense 3', 'Project File Printing', '3000', 'Need to print project files');

-- --------------------------------------------------------

--
-- Table structure for table `actual_income`
--

CREATE TABLE `actual_income` (
  `i_id` int(11) NOT NULL,
  `i_title` varchar(255) NOT NULL,
  `i_source` varchar(255) NOT NULL,
  `i_income` varchar(255) NOT NULL,
  `i_details` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actual_income`
--

INSERT INTO `actual_income` (`i_id`, `i_title`, `i_source`, `i_income`, `i_details`) VALUES
(3, 'Office', 'Office', '18000', 'Office Income'),
(2, 'Android Project', 'Sir Nadeem', '10000', 'Need to collect payment for project completion'),
(4, 'Careem Car', 'Careem Office', '15000', 'Collect profit from careem office');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `b_id` int(11) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_total_budget` varchar(255) NOT NULL,
  `b_remaining_budget` varchar(255) NOT NULL,
  `b_start_date` date NOT NULL,
  `b_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`b_id`, `b_title`, `b_total_budget`, `b_remaining_budget`, `b_start_date`, `b_end_date`) VALUES
(5, 'Buy Car', '25000', '19000', '2018-07-05', '2018-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_source` varchar(255) NOT NULL,
  `e_type` varchar(255) NOT NULL,
  `e_expected_expense` varchar(255) NOT NULL,
  `e_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`e_id`, `e_title`, `e_source`, `e_type`, `e_expected_expense`, `e_details`) VALUES
(1, 'title', 'source', 'type', 'expected_expense', 'details'),
(2, 'title', 'source', 'type', 'expected_expense', 'details'),
(3, 'Hba', 'Ajja', 'cash', '800', 'Hajaja\n'),
(4, 'Expense 3', 'Project File Printing', 'cash', '3000', 'Need to print project files');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `i_id` int(11) NOT NULL,
  `i_title` varchar(255) NOT NULL,
  `i_source` varchar(255) NOT NULL,
  `i_type` varchar(255) NOT NULL,
  `i_expected_income` varchar(255) NOT NULL,
  `i_details` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`i_id`, `i_title`, `i_source`, `i_type`, `i_expected_income`, `i_details`) VALUES
(1, 'Home Rent', 'Nadeem', 'Cash', '20000', 'Take rent from 1st portion of my home'),
(2, 'Careem Car', 'Careem Office', 'Checque', '15000', 'Collect profit from careem office'),
(3, 'Basic Salary', 'Office', 'Bank Transfer', '35000', 'Collect salary from office'),
(4, 'Android Project', 'Sir Nadeem', 'cash', '10000', 'Need to collect payment for project completion'),
(5, 'Office', 'Office', 'cheque', '18000', 'Office Income');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `pass`, `email`, `contact`) VALUES
(1, 'hk', '123', 'hk@', '12345668'),
(2, 'Has', '123', 'hkk@', '44u754r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actual_expense`
--
ALTER TABLE `actual_expense`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `actual_income`
--
ALTER TABLE `actual_income`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actual_expense`
--
ALTER TABLE `actual_expense`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `actual_income`
--
ALTER TABLE `actual_income`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

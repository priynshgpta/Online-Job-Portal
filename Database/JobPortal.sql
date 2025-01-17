-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 03:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(20) NOT NULL,
  `adm_name` varchar(100) NOT NULL,
  `adm_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_name`, `adm_pass`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `apply_id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `date_applied` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `eid` int(20) NOT NULL,
  `log_id` int(20) NOT NULL,
  `ename` varchar(100) DEFAULT NULL,
  `etype` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `executive` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`eid`, `log_id`, `ename`, `etype`, `industry`, `address`, `pincode`, `executive`, `phone`, `location`, `profile`, `logo`) VALUES
(1, 18, 'Infosys Pvt Ltd', 'Company', 'Software Services', 'Infosys,\r\nIT Zone,\r\n4 - BE,\r\nBangalore', '458796', 'Ajith', '9145512345', 'India,Karnataka,Bengaluru', 'Infosys is a global leader in consulting, technology, and outsourcing and next-generation services. We enable clients in more than 50 countries to outperform the competition and stay ahead of the innovation curve.', 'Infosys Pvt Ltd1.jpg'),
(2, 23, 'Microsoft', 'Company', 'Software Services', 'Microsoft, Bangalore, Karnataka', '456987', 'Arun', '78945612332', 'India,Karnataka,Bommasandra', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `company_name` varchar(30) NOT NULL,
  `jobid` int(20) NOT NULL,
  `eid` int(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `jobdesc` varchar(700) NOT NULL,
  `vacno` int(20) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `basicpay` varchar(100) DEFAULT NULL,
  `fnarea` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `ugqual` varchar(100) DEFAULT NULL,
  `pgqual` varchar(100) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `postdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`company_name`, `jobid`, `eid`, `title`, `jobdesc`, `vacno`, `experience`, `basicpay`, `fnarea`, `location`, `industry`, `ugqual`, `pgqual`, `profile`, `postdate`) VALUES
('Microsoft', 4, 2, 'Web Developer', 'Development of interactive websites at microfost', 5, '3', 'Rs 25000', 'Web Development', 'India,Kerala,Ernakulam', 'Software Services', 'B.Tech/B.E.', 'Not Pursuing Post Graduation', 'Knowledge in ASP.NET, SQL server', '16-04-16'),
('Social Sage', 5, 1, 'Social Media Manager', 'Need a Social Media Manager for our Company.', 2, '2', '3', NULL, 'Mumbai', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `user_id` int(20) NOT NULL,
  `log_id` int(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `basic_edu` varchar(100) DEFAULT NULL,
  `master_edu` varchar(100) DEFAULT NULL,
  `other_qual` varchar(100) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `Resume` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`user_id`, `log_id`, `name`, `phone`, `location`, `experience`, `skills`, `basic_edu`, `master_edu`, `other_qual`, `dob`, `Resume`, `photo`) VALUES
(7, 14, 'Priyansh Gupta', '9561124775', 'Mumbai, Maharashtra, India', '5', 'Python, Java', 'Not Pursuing Graduation', 'Not Pursuing Post Graduation', NULL, NULL, NULL, 'priyansh.jpg'),
(9, 21, 'abc', '1234567890', 'Iceland,Austurland,Bakkafjor ur', '1', 'sjndsnn,mnkjlnlnl  jnn ', 'B.A', 'CA', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `email`, `password`, `usertype`, `status`) VALUES
(14, 'priyansh@gmail.com', 'pg123456', 'jobseeker', 1),
(18, 'info@infosys.com', 'infosys@123', 'employer', 0),
(21, 'abc@gmail.com', 'abc@123', 'jobseeker', 1),
(23, 'info@microsoft.com', 'microsoft@123', 'employer', 1),
(26, 'socialsage@gmail.com', '123456', 'employer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `selection`
--

CREATE TABLE `selection` (
  `sel_id` int(20) NOT NULL,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`apply_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `eid` (`eid`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `log_id` (`log_id`),
  ADD KEY `log_id_2` (`log_id`);

--
-- Indexes for table `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`sel_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `apply_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `selection`
--
ALTER TABLE `selection`
  MODIFY `sel_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `fk_empid` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`user_id`) REFERENCES `jobseeker` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer`
--
ALTER TABLE `employer`
  ADD CONSTRAINT `fk_log_id` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `fk_eid` FOREIGN KEY (`eid`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD CONSTRAINT `fk_login` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `jobseeker` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_name` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_name`, `password`) VALUES
('admin', 'c93ccd78b2076528346216b3b2f701e6');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `user_name` varchar(30) NOT NULL,
  `id` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `messages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`user_name`, `id`, `email`, `messages`) VALUES
('baljinder', 2, 'baljinder123@gmail.com', 'pekka hogya'),
('shubham', 1, 'shubham123@gmail.com', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `user_name` varchar(30) NOT NULL,
  `id` bigint(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `specialist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `user_name` varchar(30) NOT NULL,
  `id` bigint(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `type` enum('patient','doctor') NOT NULL DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`user_name`, `id`, `contact`, `e_mail`, `password`, `type`) VALUES
('1', 12, 1111111111, '1@gmail.com', '202cb962ac59075b964b07152d234b70', 'patient'),
('2', 13, 2111111111, '1@gmail.com', '202cb962ac59075b964b07152d234b70', 'patient'),
('3', 15, 2222222222, '2@gamil.com', '202cb962ac59075b964b07152d234b70', 'patient'),
('agam', 4, 6535423665, 'agam123@gmail.com', 'ec6d28daed73bc7ee6262cc2615dc9ab', 'patient'),
('baljinder', 5, 9652412358, 'baljinder123@gmail.com', '202cb962ac59075b964b07152d234b70', 'doctor'),
('gourav_kochar', 3, 7000000646, 'gourav52542365@gmail.com', '367b7f3c37c2d3ec2bef8662aa30c569', 'doctor'),
('jishu', 6, 5432456874, 'jishu123@gmail.com', 'fc5941934be1d98fa779685127ad2b11', 'patient'),
('mahinder_kumar', 2, 9863846178, 'msgw2536uh@gmail.com', 'e68cbb2c05cff4735de9d52f20b09db0', 'patient'),
('mahinder_singh', 1, 2536458795, 'msgwugwgnbsiuh@gmail.com', 'df66078910c9fbb83ce850cb0c5c4fcb', 'patient'),
('q', 11, 9999999999, 'q@gamil.com', '94b8cea57c49a3007225a0c70c475450', 'patient'),
('tushar', 17, 9696969696, 'tushar@gmail.com', '1ef28aa38d478898a07f7c82fc74ed99', 'patient'),
('w', 16, 9999999999, 'w@gmail.com', 'f8862b27f1c17f14c690205d04507a30', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `user_name` varchar(30) NOT NULL,
  `id` bigint(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_of_disease` enum('bodypain','brain','heart','accidents') NOT NULL,
  `request_date` date NOT NULL,
  `doctar_alloted` varchar(20) NOT NULL,
  `doctar_username` varchar(20) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`user_name`, `id`, `firstname`, `lastname`, `gender`, `address`, `type_of_disease`, `request_date`, `doctar_alloted`, `doctar_username`, `DOB`) VALUES
('agam', 1, 'agam', 'kumar', 'male', 'st.no-1 ward no-1,bathinda', 'bodypain', '2021-12-31', 'gourav_kochar', 'gourav_kochar', '2001-01-01'),
('tushar', 13, 'tushar', 'garg', 'male', 'st no.1,ward no.1,bathinda', 'heart', '1992-07-02', 'gourav_kochar', 'gourav_kochar', '2021-12-31'),
('w', 12, 'w', 'e', 'female', 'fberavbfbdsngdsn', 'heart', '2021-12-29', 'baljinder', 'baljinder', '2000-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`user_name`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `patient_bed_no` (`email`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`user_name`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`user_name`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`user_name`) USING BTREE,
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `dusernameConstraint` (`doctar_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD CONSTRAINT `dusername` FOREIGN KEY (`user_name`) REFERENCES `login_info` (`user_name`);

--
-- Constraints for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD CONSTRAINT `dusernameConstraint` FOREIGN KEY (`doctar_username`) REFERENCES `login_info` (`user_name`),
  ADD CONSTRAINT `usernameConstraint` FOREIGN KEY (`user_name`) REFERENCES `login_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 12:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_age` int(11) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_basic_sal` int(11) NOT NULL,
  `emp_allowns` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_age`, `emp_address`, `emp_basic_sal`, `emp_allowns`) VALUES
(1, 'wwddeewqf', 0, 'ef', 0, 0),
(2, 'wwddeewqf', 0, 'ef', 0, 0),
(3, 'wwddeewqf', 0, 'ef', 0, 0),
(4, 'wwddeewqf', 0, 'ef', 0, 0),
(5, 'wwddeewqf', 0, 'ef', 0, 0),
(6, 'wwddeewqf', 0, 'ef', 0, 0),
(7, 'wwddeewqf', 0, 'ef', 0, 0),
(8, 'wwddeewqf', 0, 'ef', 0, 0),
(9, 'wwddeewqf', 0, 'ef', 0, 0),
(10, '', 0, '', 0, 0),
(11, '11', 22, '22', 223, 32),
(12, '11', 22, '22', 223, 32),
(13, '', 0, '', 0, 0),
(14, '', 0, '', 0, 0),
(15, '', 0, '', 0, 0),
(16, 'qww', 0, 'ww', 0, 0),
(17, 'asdasd', 0, '22', 121, 1),
(18, 'zdc', 0, 'dv', 1333, 212),
(19, 'sac', 0, '', 123, 222),
(20, 'sac', 0, 'asc', 123, 222),
(21, 'sdasdd', 122, 'ssda', 122, 23),
(22, 'asda', 122, 'asca', 122, 22),
(23, 'adsad', 12, 'dsda', 122, 1313),
(24, 'edw', 4, 'edf', 22, 22),
(25, 'asdasf', 11331, 'adsefa', 124234, 124421),
(26, 'shan', 12, 'asfa', 12, 12),
(27, 'kamal', 32, 'sdvf', 1, 2),
(28, 'asda', 12, 'asDa', 12, 23),
(29, 'dzfs', 123, 'saFA', 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_details`
--

CREATE TABLE `tbl_employee_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  `basic_salary` double NOT NULL,
  `allowns` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee_details`
--

INSERT INTO `tbl_employee_details` (`id`, `first_name`, `last_name`, `full_name`, `address`, `contact_number`, `email`, `age`, `nic`, `profile_image`, `basic_salary`, `allowns`) VALUES
(86, 'Shan', 'dahanayaka', 'Shan dahanayaka', 'Dahanayaka niwasa', '+94715746038', 'smsdahanayaka@gmail.com', 0, '971623829v', 'http://localhost/employee-managment/uploads/Temporary_Licence6.jpg', 120000, 5000),
(87, 'nuwan', 'alahakon', 'Shan dahanayaka', 'Dahanayaka niwasa', '+94715746038', 'nuwan@gmail.com', 0, '971532658v', '../uploads/Screenshot_2024-02-09_205329.png', 20000, 200),
(88, 'sandali', 'amarawera', 'sandasli amaraweera', '285/5, sudarshana mawatha', '+94715746038', 'smsdaha1111nayaka@gmail.com', 0, '1111111', '../uploads/Screenshot_(1).png', 110000, 2300),
(89, 'sewwandi', 'perera', 'Shan dahanayakasewwandi perera', 'sewwandi niwasa', '+94715746456', 'sewwandi@gmail.com', 0, '20023245612', '../uploads/images_(1).jpg', 30000, 2000),
(90, 'piyumi', 'perera', 'sewwandi perera', 'sewwandi niwasa', '+94715746456', 'sewwandi@gmail.com', 0, '20023245612', '../uploads/images_(1).jpg', 30000, 2000),
(91, 'kamal', 'dananjaya', 'kamaldananjaya', 'kamal 285,malabe', '+94715746038', 'kamal@gmail.com', 0, '2323878658v', '../uploads/download.jpg', 10000, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tbl_employee_details`
--
ALTER TABLE `tbl_employee_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_employee_details`
--
ALTER TABLE `tbl_employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 11:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_id` int(11) NOT NULL,
  `Course_Title` varchar(30) NOT NULL,
  `Credit_hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `D_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `office_hour`
--

CREATE TABLE `office_hour` (
  `T_id` int(11) NOT NULL,
  `Ts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Middle_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Mother_name` varchar(30) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Pr_house_no` int(11) NOT NULL,
  `Pr_location` varchar(30) NOT NULL,
  `Pr_village` varchar(30) NOT NULL,
  `Pr_Thana` varchar(30) NOT NULL,
  `Pr_District` varchar(30) NOT NULL,
  `Pr_Post_Code` int(11) NOT NULL,
  `Pe_house_no` int(11) NOT NULL,
  `Pe_location` varchar(30) NOT NULL,
  `Pe_Village` varchar(30) NOT NULL,
  `Pe_Thana` varchar(30) NOT NULL,
  `Pe_District` varchar(30) NOT NULL,
  `Pe_Post_Code` varchar(30) NOT NULL,
  `Jsc_Institute` varchar(30) NOT NULL,
  `Jsc_Board` varchar(30) NOT NULL,
  `Jsc_Year` int(11) NOT NULL,
  `Jsc_Result` varchar(30) NOT NULL,
  `Ssc_Institute` varchar(30) NOT NULL,
  `Ssc_Board` varchar(30) NOT NULL,
  `Ssc_Year` int(11) NOT NULL,
  `Ssc_Result` varchar(30) NOT NULL,
  `Hsc_Institute` varchar(30) NOT NULL,
  `Hsc_Board` varchar(30) NOT NULL,
  `Hsc_Year` int(11) NOT NULL,
  `Hsc_Result` varchar(30) NOT NULL,
  `stdnt_status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `First_name`, `Middle_name`, `Last_name`, `Mother_name`, `Father_name`, `DOB`, `Pr_house_no`, `Pr_location`, `Pr_village`, `Pr_Thana`, `Pr_District`, `Pr_Post_Code`, `Pe_house_no`, `Pe_location`, `Pe_Village`, `Pe_Thana`, `Pe_District`, `Pe_Post_Code`, `Jsc_Institute`, `Jsc_Board`, `Jsc_Year`, `Jsc_Result`, `Ssc_Institute`, `Ssc_Board`, `Ssc_Year`, `Ssc_Result`, `Hsc_Institute`, `Hsc_Board`, `Hsc_Year`, `Hsc_Result`, `stdnt_status`) VALUES
(8, 'Mr Rony', 'Hamza', 'Rony', 'Mrs.XYZ', 'Mr.ABC', '2018-12-17', 67, 'Uttara', 'Sector2', 'Uttara', 'Dhaka', 87787, 454, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '656545', 'ABC', 'Dhaka', 1971, '3.5', 'DEF', 'Dhaka', 1975, '3.88', 'ASD', 'Dhaka', 1990, '4', 1),
(10, 'MD.FAYSAL', 'AHMMED', 'TANIM', 'MRS.GYGYYG', 'MD.GHJGJHGJH', '2018-12-27', 56, 'DHAKA', 'Sector10', 'DHAKA', 'DHAKA', 7800, 59, 'DHAKA', 'DHAKA', 'DHAKA', 'DHAKA', '8900', 'DHS', 'JESSOR', 1971, '5.00', 'DHS', 'JESSOR', 1975, '4.98', 'MUDIK', 'JESSOR', 1990, '4.99', 1),
(11, 'Mr Rony', 'HOSSAIN', 'Rony', 'MRS.GYGYYG', 'Mr.ABC', '0000-00-00', 0, '', '', '', '', 0, 0, '', '', '', '', '', 'ABC', 'Dhaka', 2056, '6.00', 'DHS', 'JESSOR', 2078, '5.00', 'ASD', 'Dhaka', 2090, '5.50', 1),
(13, 'Mr Rony', '', '', '', '', '0000-00-00', 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 0, '', '', '', 0, '', '', '', 0, '', 1),
(14, 'Mr.mamun', 'AHMMED', 'RAFI', 'Mrs.XYZ', 'MD.GHJGJHGJH', '2018-12-19', 8, 'Uttara', 'Sector2', 'Uttara', 'DHAKA', 77878, 6, 'DHAKA', 'Dhaka', 'DHAKA', 'Dhaka', '78787', 'ABC', 'Dhaka', 1971, '6', 'DHS', 'Dhaka', 1975, '6', 'ASD', 'Dhaka', 1990, '3', 1),
(15, 'MR Abdullah', 'AHMMED', 'RAFI', 'Mrs.XYZ', 'Mr.ABC', '2018-12-21', 7, 'Uttara', 'Sector2', 'Uttara', 'Dhaka', 78888, 56, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', '67', 'ABC', 'Dhaka', 1971, '3.5', 'DEF', 'Dhaka', 2078, '3.88', 'ASD', 'JESSOR', 1990, '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teaher`
--

CREATE TABLE `teaher` (
  `T_ID` int(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Middle_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Mother_name` varchar(30) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Pr_house_no` int(11) NOT NULL,
  `Pr_location` varchar(30) NOT NULL,
  `Pr_village` varchar(30) NOT NULL,
  `Pr_Thana` varchar(30) NOT NULL,
  `Pr_District` varchar(30) NOT NULL,
  `Pr_Post_Code` int(11) NOT NULL,
  `Pe_house_no` int(11) NOT NULL,
  `Pe_location` varchar(30) NOT NULL,
  `Pe_Village` varchar(30) NOT NULL,
  `Pe_Thana` varchar(30) NOT NULL,
  `Pe_District` varchar(30) NOT NULL,
  `Pe_Post_Code` varchar(30) NOT NULL,
  `Jsc_Institute` varchar(30) NOT NULL,
  `Jsc_Board` varchar(30) NOT NULL,
  `Jsc_Year` int(11) NOT NULL,
  `Jsc_Result` varchar(30) NOT NULL,
  `Ssc_Institute` varchar(30) NOT NULL,
  `Ssc_Board` varchar(30) NOT NULL,
  `Ssc_Year` int(11) NOT NULL,
  `Ssc_Result` varchar(30) NOT NULL,
  `Hsc_Institute` varchar(30) NOT NULL,
  `Hsc_Board` varchar(30) NOT NULL,
  `Hsc_Year` int(11) NOT NULL,
  `Hsc_Result` varchar(30) NOT NULL,
  `BSC_major` varchar(100) NOT NULL,
  `BSC_minor` varchar(100) NOT NULL,
  `BSC_institute` varchar(100) NOT NULL,
  `BSC_year` int(11) NOT NULL,
  `BSC_result` varchar(100) NOT NULL,
  `MSC_major` varchar(100) NOT NULL,
  `MSC_minor` varchar(100) NOT NULL,
  `MSC_institute` varchar(100) NOT NULL,
  `MSC_year` int(11) NOT NULL,
  `MSC_result` varchar(100) NOT NULL,
  `PHD_major` varchar(100) NOT NULL,
  `PHD_minor` varchar(100) NOT NULL,
  `PHD_institute` varchar(100) NOT NULL,
  `PHD_year` int(11) NOT NULL,
  `PHD_result` varchar(100) NOT NULL,
  `Lecturer_organization` varchar(100) NOT NULL,
  `Lecturer_time_from` varchar(100) NOT NULL,
  `Lecturer_time_to` varchar(100) NOT NULL,
  `Lecturer_remarks` varchar(100) NOT NULL,
  `Assistant_professor_organization` varchar(100) NOT NULL,
  `Assistant_professor_time_from` varchar(100) NOT NULL,
  `Assistant_professor_time_to` varchar(100) NOT NULL,
  `Assistant_professor_remarks` varchar(100) NOT NULL,
  `Associate_professor_organization` varchar(100) NOT NULL,
  `Associate_professor_time_from` varchar(100) NOT NULL,
  `Associate_professor_time_to` varchar(100) NOT NULL,
  `Associate_professor_remarks` varchar(100) NOT NULL,
  `professor_organization` varchar(100) NOT NULL,
  `professor_time_from` varchar(100) NOT NULL,
  `professor_time_to` varchar(100) NOT NULL,
  `professor_remarks` varchar(100) NOT NULL,
  `post_doc_organiztion` varchar(100) NOT NULL,
  `post_doc_time_from` varchar(100) NOT NULL,
  `post_doc_time_to` varchar(100) NOT NULL,
  `post_doc_remaks` varchar(100) NOT NULL,
  `Research_Authors` varchar(100) NOT NULL,
  `Research_Type` varchar(100) NOT NULL,
  `Research_Pubinfo` varchar(100) NOT NULL,
  `Research_Page` varchar(100) NOT NULL,
  `Research_year` int(11) NOT NULL,
  `Graduate_Degree` varchar(100) NOT NULL,
  `Graduate_Thesis_title` varchar(100) NOT NULL,
  `Graduate_Research` varchar(100) NOT NULL,
  `Graduate_Month` varchar(100) NOT NULL,
  `Graduate_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `Ts_id` int(11) NOT NULL,
  `From_time` varchar(30) NOT NULL,
  `To_Time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_mail`, `u_password`, `status`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `office_hour`
--
ALTER TABLE `office_hour`
  ADD PRIMARY KEY (`T_id`,`Ts_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teaher`
--
ALTER TABLE `teaher`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`Ts_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teaher`
--
ALTER TABLE `teaher`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

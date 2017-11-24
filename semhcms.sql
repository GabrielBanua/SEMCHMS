-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 01:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `semhcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adult`
--

CREATE TABLE IF NOT EXISTS `adult` (
  `ADULT_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PHY_HEALTH` text NOT NULL,
  `MENT_EMO_HEAl` text NOT NULL,
  `SIG_INJ` text NOT NULL,
  `SMOKE` text NOT NULL,
  `ALCO_DRUGS` text NOT NULL,
  `ASSIST_DEV` text NOT NULL,
  `PERS_ASSIST` text NOT NULL,
  `MARITAL_STAT` text NOT NULL,
  `YEARS_FE` int(2) NOT NULL,
  `DOM_HAND` text NOT NULL,
  `CB_HEALTH_COND` text NOT NULL,
  `TU_HEALTH_COND` text NOT NULL,
  `PMI_ID` int(5) NOT NULL,
  PRIMARY KEY (`ADULT_ID`),
  KEY `PMI_ID` (`PMI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `adult`
--

INSERT INTO `adult` (`ADULT_ID`, `PHY_HEALTH`, `MENT_EMO_HEAl`, `SIG_INJ`, `SMOKE`, `ALCO_DRUGS`, `ASSIST_DEV`, `PERS_ASSIST`, `MARITAL_STAT`, `YEARS_FE`, `DOM_HAND`, `CB_HEALTH_COND`, `TU_HEALTH_COND`, `PMI_ID`) VALUES
(7, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 0, 'asd', 'asd', 'asd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `P_ID` int(5) NOT NULL AUTO_INCREMENT,
  `P_LNAME` text NOT NULL,
  `P_FNAME` text NOT NULL,
  `P_MNAME` text NOT NULL,
  `P_GNDR` text NOT NULL,
  `P_BDATE` date NOT NULL,
  `P_AGE` int(2) NOT NULL,
  `P_TEMP` decimal(2,0) NOT NULL,
  `P_WGHT` decimal(4,0) NOT NULL,
  `P_HGHT` varchar(4) NOT NULL,
  `P_TYPE` text NOT NULL,
  `P_ADD` text NOT NULL,
  `P_CN` varchar(13) NOT NULL,
  `P_OCCU` text NOT NULL,
  `P_REL` text NOT NULL,
  `P_CVL_STAT` text NOT NULL,
  `DATE_REG` date NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_LNAME`, `P_FNAME`, `P_MNAME`, `P_GNDR`, `P_BDATE`, `P_AGE`, `P_TEMP`, `P_WGHT`, `P_HGHT`, `P_TYPE`, `P_ADD`, `P_CN`, `P_OCCU`, `P_REL`, `P_CVL_STAT`, `DATE_REG`) VALUES
(3, 'Banua', 'Gabriel Francis', 'Madrista ', 'Male', '1997-10-11', 20, '80', '175', '36.5', 'Adult', 'Samaka Village Canlaon City', '09096771375', 'Student', 'Catholic', 'Single', '2017-11-13'),
(4, 'Bayon-on', 'Alson John', 'R', 'Male', '1997-04-18', 20, '80', '175', '36.5', 'Adult', 'Banago Bacolod City', '09096771375', 'Student', 'Catholic', 'Single', '2017-11-13'),
(5, 'Rubiato', 'Alec', 'L', 'Male', '1997-11-11', 20, '80', '167', '36.5', 'Adult', 'Banago Bacolod City', '09096771375', 'Student', 'Catholic', 'Single', '2017-11-13'),
(6, 'Yanson', 'Alvin', 'L', 'Male', '1997-10-12', 20, '80', '180', '36.6', 'Adult', 'Bacolod City Negros Occidental', '09096771375', 'Student', 'Catholic', 'Single', '2017-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medical_issue`
--

CREATE TABLE IF NOT EXISTS `patient_medical_issue` (
  `PMI_ID` int(5) NOT NULL AUTO_INCREMENT,
  `PP_HEATH` text NOT NULL,
  `TRMT` text NOT NULL,
  `MEDCT` text NOT NULL,
  `DISE_DISO` text NOT NULL,
  `HPTL` text NOT NULL,
  `P_ID` int(5) NOT NULL,
  PRIMARY KEY (`PMI_ID`),
  KEY `P_ID` (`P_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient_medical_issue`
--

INSERT INTO `patient_medical_issue` (`PMI_ID`, `PP_HEATH`, `TRMT`, `MEDCT`, `DISE_DISO`, `HPTL`, `P_ID`) VALUES
(1, '', '', 'Yes', 'Yes', 'No', 4),
(2, 'Fever', 'YES', 'YES', 'NO', 'NO', 5),
(3, 'asd', 'asd', 'asd', 'asd', 'asd', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Firstname` text NOT NULL,
  `Middlename` text NOT NULL,
  `Lastname` text NOT NULL,
  `Gender` text NOT NULL,
  `Position` text NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `User_id` (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Password`, `Firstname`, `Middlename`, `Lastname`, `Gender`, `Position`) VALUES
(1, 'Gabriel1011', 'gabgab', 'Gabriel Francis', 'Banua', 'Madrista', 'Male', 'Admin'),
(2, 'Angel052917', 'AngelGabriel', 'Angel', 'T', 'Gabutero', 'Female', 'Admin'),
(3, 'Alz123', 'alson123', 'Alson', 'R', 'Bayon-on', 'Male', 'Doctor');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adult`
--
ALTER TABLE `adult`
  ADD CONSTRAINT `adult_ibfk_1` FOREIGN KEY (`PMI_ID`) REFERENCES `patient_medical_issue` (`PMI_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `patient_medical_issue`
--
ALTER TABLE `patient_medical_issue`
  ADD CONSTRAINT `patient_medical_issue_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `patient` (`P_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 07:39 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpo`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE IF NOT EXISTS `company_profile` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `site` varchar(250) NOT NULL,
  `positions` varchar(250) NOT NULL,
  `intakes` int(250) NOT NULL,
  `salary` int(11) NOT NULL,
  `com_date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `name`, `site`, `positions`, `intakes`, `salary`, `com_date`, `status`) VALUES
(4, 'Barclays', 'www.home.barclays', 'Analyst', 20, 14, '2017-10-31', 0),
(5, 'veritas', 'www.VeritasPvt.Limt.com', 'JAVA+PYTHON', 12, 9, '2017-11-08', 0),
(6, 'NICE', 'www.nicesys.com', 'DEVELOPER', 12, 7, '2017-10-27', 0),
(7, 'TCS', 'www.tscnextstep.com', 'DEVELOPER', 70, 4, '2017-10-28', 0),
(8, 'INFOSYS', 'www.wwww', 'JAVA', 12, 5, '2017-10-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id1` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `disc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id1`, `id`, `year`, `company_name`, `disc`) VALUES
(1, 1, '2015-1017', 'Google', 'I did intern in Google this two year.Lot of services like ANdroid,ML etc.One of the best experience i got ever.So thanx Google.'),
(2, 1, '2017', 'Silicon Valley', 'Currently working in Silicon valley in USA as Data science worker and recently got promotion for senior Data science worker.'),
(3, 1, '2ws', 'sads', 'sdsdsdsdssddsd'),
(4, 1, '28828', 'dhbdhdbb', 'bsbdbbddbddbs'),
(5, 1, '28828', 'dhbdhdbb', 'bsbdbbddbddbs');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `email`, `phone`) VALUES
(1, 'a', 'a', 'a', 'a@gmail.com', 909090);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `idprofile` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`idprofile`, `id`, `about`, `address`, `website`, `photo`) VALUES
(1, 1, '											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis.\r\n', 'Bidri,Kolhapur', 'www.ritz.com', 'Capture.png');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `idproject` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `team` int(11) NOT NULL,
  `exp` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`idproject`, `id`, `title`, `team`, `exp`) VALUES
(1, 1, 'ONLINE CODING PLATFORM', 5, 'This is coding platform to judge yourself in coding skills.');

-- --------------------------------------------------------

--
-- Table structure for table `registeruser`
--

CREATE TABLE IF NOT EXISTS `registeruser` (
  `idregister` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `cpi` float NOT NULL,
  `fresher` tinyint(1) NOT NULL,
  `name` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeruser`
--

INSERT INTO `registeruser` (`idregister`, `id`, `year`, `branch`, `cpi`, `fresher`, `name`, `resume`) VALUES
(5, 6, '4', 'cse', 0, 0, 'a', 'comments.sql');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`idprofile`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`idproject`);

--
-- Indexes for table `registeruser`
--
ALTER TABLE `registeruser`
  ADD PRIMARY KEY (`idregister`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id1` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `idprofile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `idproject` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registeruser`
--
ALTER TABLE `registeruser`
  MODIFY `idregister` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

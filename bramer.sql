-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2023 at 08:26 AM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panogfdq_bf`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'NEW_kicks05');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `apply` varchar(1000) NOT NULL,
  `phone2` varchar(1000) NOT NULL,
  `addr2` varchar(1100) NOT NULL,
  `footer` varchar(1500) NOT NULL,
  `currency` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `image`, `name`, `addr`, `phone`, `email`, `email2`, `url`, `country`, `apply`, `phone2`, `addr2`, `footer`, `currency`) VALUES
(36, '1548155508.jpg', 'Bramer Financial Inc.', '15 Devere Dr. Guelph, ON N1G 2T1, Canada\r\n', '+1 587 200-7906', 'info@bramerfinancialinc.com', 'contact@bramerfinancial.com', 'bramerfinancialinc.com', 'Canada', 'form.jotform.com/231704763602351', '+14168480304', '15 Devere Dr. Guelph, ON N1G 2T1, Canada\n', 'Bramer Financial Inc. is licensed as a  federal corporation in Ontario, incorporated with Canada Business Corporations Act. | Date of Incorporation - 2004-03-05', 'USD$');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `dur` varchar(50) NOT NULL,
  `coldate` varchar(50) NOT NULL,
  `paydate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remark` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `name`, `rank`, `cid`, `phone`, `type`, `amt`, `rate`, `dur`, `coldate`, `paydate`, `status`, `remark`) VALUES
(65, '1687363180.png', 'Fisher Fresh', 'Nwanne Ave. Jamaica Busstop', 'BAPA4UG9', '0987879809', 'Fresh Loan', '$200,000', '5%', '10 years', 'Japan', '20/10/2030', 'Under Review', 'Fresh loan shark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

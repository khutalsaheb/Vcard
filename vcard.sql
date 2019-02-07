-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 04:01 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flix`
--

-- --------------------------------------------------------

--
-- Table structure for table `vcard`
--

CREATE TABLE `vcard` (
  `id` int(11) NOT NULL,
  `card_token` varchar(10000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `v_deg` varchar(100) NOT NULL,
  `v_image` varchar(1000) NOT NULL,
  `v_mobile` varchar(15) NOT NULL,
  `v_email` varchar(50) NOT NULL,
  `v_skype` varchar(100) NOT NULL,
  `v_website` varchar(100) NOT NULL,
  `v_address` varchar(1000) NOT NULL,
  `v_what` varchar(15) NOT NULL,
  `v_facebook` varchar(100) NOT NULL,
  `v_twitter` varchar(100) NOT NULL,
  `v_google` varchar(100) NOT NULL,
  `v_insta` varchar(100) NOT NULL,
  `v_linkedin` varchar(200) NOT NULL,
  `v_me` varchar(100) NOT NULL,
  `v_sharelink` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcard`
--

INSERT INTO `vcard` (`id`, `card_token`, `name`, `v_deg`, `v_image`, `v_mobile`, `v_email`, `v_skype`, `v_website`, `v_address`, `v_what`, `v_facebook`, `v_twitter`, `v_google`, `v_insta`, `v_linkedin`, `v_me`, `v_sharelink`, `status`) VALUES
(1, 'ef9f9ed148adb0e1ad10de8fa2084a3c', 'sandeas', 'computer engg dfdfsfsdfsd', 'http://127.0.0.1/Cards/uploads/1.png', '9999999999', 'sss@gmail.voc', 'v_skype hhhhh', 'googorl.comvdfdffdgd', 'punedfgdfgdfgdgdfgdfbcbcb', '111111verrtre46', 'sandeshkhutalvxcvxcxc', 'skvxcv', 'hellogooglevxcv', 'khutalsahebvxcvcx', 'linkmesandeshvcxvcxv', 'itsme', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vcard`
--
ALTER TABLE `vcard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vcard`
--
ALTER TABLE `vcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

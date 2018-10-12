-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 06:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `shields`
--

CREATE TABLE IF NOT EXISTS `shields` (
  `Name` varchar(30) NOT NULL,
  `Max_Cap` int(11) NOT NULL,
  `Regen` int(11) NOT NULL,
  `Bleed` int(11) NOT NULL,
  `Link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shields`
--

INSERT INTO `shields` (`Name`, `Max_Cap`, `Regen`, `Bleed`, `Link`) VALUES
('Covariant', 20, 15, 10, ''),
('Regenerative', 15, 25, 10, ''),
('Paratrinic', 35, 5, 10, ''),
('Resilient', 15, 15, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Uname` varchar(20) NOT NULL,
  `Pword` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User info table, not their ships';

-- --------------------------------------------------------

--
-- Table structure for table `u_ships`
--

CREATE TABLE IF NOT EXISTS `u_ships` (
  `Uname` varchar(20) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Sreg` varchar(20) NOT NULL,
  `Wep1` varchar(20) NOT NULL,
  `Wep2` varchar(20) NOT NULL,
  `Wep3` varchar(20) NOT NULL,
  `Wep4` varchar(20) NOT NULL,
  `Wep5` varchar(20) NOT NULL,
  `Wep6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Relates user to ship';

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE IF NOT EXISTS `weapons` (
  `Name` varchar(50) NOT NULL,
  `DMG` int(11) NOT NULL,
  `ROF` int(11) NOT NULL,
  `PEN` int(11) NOT NULL,
  `EFA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`Name`, `DMG`, `ROF`, `PEN`, `EFA`) VALUES
('Arrays', 5, 5, 5, 180),
('Cannons', 10, 2, 10, 45),
('Dual Beam Banks', 3, 15, 5, 90),
('Photons', 40, 10, 15, 90),
('Quantum', 60, 5, 20, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

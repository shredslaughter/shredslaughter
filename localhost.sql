-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2010 at 11:48 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ss`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `news` text NOT NULL,
  `object` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `month`, `day`, `news`, `object`) VALUES
(1, 'Bam Boom', 6, '22', 'NEW LONDON, Conn. – Someday, the secrets of fireflies or glowing sea plankton could save an American soldier in battle, a Navy SEAL on a dive or a military pilot landing after a mission.\r\nThat''s the hope behind a growing field of military-sponsored research into bioluminescence, a phenomenon that''s under the microscope in laboratories around the country.', 'http://localhost/images/css images/cooldesign.jpg'),
(2, 'Test Title', 7, '08', 'A possible military use of bioluminescence would be creating biodegradable landing zone markers that helicopters can spot even as wind from their rotors kicks up dirt.\r\nThe military could also develop bioluminescent "friend vs. foe" identification markers and security systems, and methods to track weapons and supplies on the battlefield.\r\nFirst described around 500 B.C. by the Greek philosopher Anaximenes, bioluminescence is familiar by its sight — if not its name — to children catching fireflies and to divers entranced by lanternfish and other sea life', 'http://localhost/images/css images/cooldesign.jpg');

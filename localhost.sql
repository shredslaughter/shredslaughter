-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2010 at 11:07 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `month`, `day`, `news`, `object`) VALUES
(1, 'Bam Boom', 6, '22', 'NEW LONDON, Conn. – Someday, the secrets of fireflies or glowing sea plankton could save an American soldier in battle, a Navy SEAL on a dive or a military pilot landing after a mission.\r\nThat''s the hope behind a growing field of military-sponsored research into bioluminescence, a phenomenon that''s under the microscope in laboratories around the country.', 'http://localhost/images/css images/SS_logo60percent.png'),
(2, 'Test Title', 7, '08', 'A possible military use of bioluminescence would be creating biodegradable landing zone markers that helicopters can spot even as wind from their rotors kicks up dirt.\r\nThe military could also develop bioluminescent "friend vs. foe" identification markers and security systems, and methods to track weapons and supplies on the battlefield.\r\nFirst described around 500 B.C. by the Greek philosopher Anaximenes, bioluminescence is familiar by its sight — if not its name — to children catching fireflies and to divers entranced by lanternfish and other sea life', 'http://www.youtube.com/watch?v=DvhACg9wR1g'),
(3, 'snowboarding', 2, '31', 'Democratic New Hampshire Gov. John Lynch rolled to renomination for a fourth term, and he will face John Stephen,', 'http://blog.eun.org/lickhillgoesfrench/upload/snowboard-mont-blanc.jpg'),
(4, 'Lets get Blank', 8, '01', 'WASHINGTON – Tea party-supported candidates in New Hampshire and Delaware seized early leads over establishment-backed rivals in Republican senatorial races Tuesday, the finale to a primary season marked by economic recession and political upheaval.\r\nIn New Hampshire, Ovide Lamontagne was gaining 52 percent of the vote to 32 percent for former Attorney Genera\r\n', 'http://snowboarding-skiing.com/wp-content/uploads/2009/05/snowboarding3.jpg'),
(5, 'Another Title', 12, '10', 'The U.S. National Hurricane Center in Miami says the storm is expected to strengthen, and its center could be over the Yucatan on Wednesday.', 'http://www.shredoutcancer.org/wp-content/uploads/2009/05/shred-out-cancer-boarder-logo.jpg'),
(6, 'DubStar', 8, '17', 'The folks at Insure.com also say that ill-advised Facebook postings increasingly can get your insurance cancelled or cause you to pay dramatically more for everything from auto to life insurance coverage. By now almost everybody knows that those drunken party photos could cost you a job, too.', 'http://dubster.co.uk/snowboard/snowboard_toon.jpg'),
(7, 'Summit Part 2', 11, '21', 'There may be a better way to say "Rob me, please" than posting something along the lines of: "Count-down to Maui! Two days and Ritz Carlton, here we come!" on Twitter. But it''s hard to think of one. Post the photos on Facebook when you return, if you like. But don''t invite criminals in by telling them specifically when you''ll be gone.', 'http://rexburgoutdoors.com/outdoor1/headerimages/snowboard2.jpg');

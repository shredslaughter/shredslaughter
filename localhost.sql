-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2010 at 07:07 PM
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
CREATE DATABASE `ss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ss`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `news` text NOT NULL,
  `object` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `month`, `day`, `news`, `object`) VALUES
(1, 'Working Title', 6, 22, 'What appealed to Norton about the tiny liberal arts college were the sweeping trees, the vast expanses of green and the way classic Gothic architecture blends in with the Midwestern-style houses on campus. "It''s like the old part of campus has taken in its surroundings instead of alienating them," she says. "It feels like the campus is really part of Ohio."', 'http://localhost/images/css images/cooldesign.jpg'),
(2, 'This Bam Boom', 5, 8, 'What appealed to Norton about the tiny liberal arts college were the sweeping trees, the vast expanses of green and the way classic Gothic architecture blends in with the Midwestern-style houses on campus. "It''s like the old part of campus has taken in its surroundings instead of alienating them," she says. "It feels like the campus is really part of Ohio."', 'http://localhost/images/css images/cooldesign.jpg');

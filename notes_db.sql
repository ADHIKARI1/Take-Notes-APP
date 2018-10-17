-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2018 at 07:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notes_db`
--
CREATE DATABASE IF NOT EXISTS `notes_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `notes_db`;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_title` varchar(255) NOT NULL,
  `note_body` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `note_title`, `note_body`, `date_created`, `date_updated`, `user_id`) VALUES
(1, 'Meeting', '<p>@ 10.00 PM, WTC</p>', '2018-10-08 18:10:04', '2018-10-12 01:42:28', 2),
(2, 'saturday meetup', 'SQL meetup', '2018-10-08 18:10:04', '2018-10-08 18:10:04', 1),
(15, 'Movie', '<p><strong>6.30</strong> @ savoy</p>', '2018-10-12 07:12:52', '2018-10-12 01:43:05', 2),
(16, 'Seminar', '<p><strong>12.00 O</strong>'' clock, <em>city center</em></p>', '2018-10-12 07:16:52', '2018-10-12 01:48:06', 0),
(17, 'Trip- Meemure', '<p>2018/12/28 , wuth gang</p>', '2018-10-12 07:17:42', '2018-10-12 07:17:42', 0),
(18, 'Cinema', '<p>Venom- savoy</p>', '2018-10-12 07:19:37', '2018-10-12 07:19:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `register_date`) VALUES
(1, 'samithaadikari@gmail.com ', '123456', '2018-10-08 18:09:07'),
(2, 'saf@gmail.com', '$2y$12$XBRHbFt0J3WWU8gV.lCDfO9QU1qAMagq5kujDwPfh9GvRsMo7wKfi', '2018-10-09 16:36:04'),
(5, 'saf@gmail.com', '$2y$12$2MoRSueAbf7aN5GLkyYHkOb/FoVu/7NxtgapuKVaihyYyse1iF9kO', '2018-10-09 16:41:02'),
(6, 'saf@gmail.com', '$2y$12$AeuMpdGH0lIMSf01BmhbVeUB1YiS.fGfCEq4R5VO7kpAciqAYPDsK', '2018-10-09 16:42:04'),
(7, 'admin@gmail.com', '$2y$12$UL.RiwmbyTwSTpyjqAdy3.n.h9w8LnsKfih0FGUs2H/eZNh/HFm12', '2018-10-12 07:16:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

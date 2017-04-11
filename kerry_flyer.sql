-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2017 at 05:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerry_flyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'Sinead Maher', 'sineadm3@gmail.com', 'sinead_maher', 'sineadmaher');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `full_name`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'TJ Nelligan', '', 'tj_nelligan', 'tjnelligan'),
(2, 'John O Donoghue', '', 'john_o_donoghue', 'johnodonoghue'),
(3, 'Donal Forde', '', 'donal_forde', 'donalforde'),
(4, 'Pat Galvin', '', 'pat_galvin', 'patgalvin'),
(5, 'Michael Shanahan', '', 'michael_shanahan', 'michaelshanahan'),
(6, 'John Fitzgerald', '', 'john_fitzgerald', 'johnfitzgerald'),
(7, 'Danny O Sullivan', '', 'danny_o_sullivan', 'dannyosullivan'),
(8, 'Jimmy Kearney', '', 'jimmy_kearney', 'jimmykearney'),
(9, 'Matt O Donoghue', '', 'matt_o_donoghue', 'mattodonoghue'),
(10, 'Frank Neylon', '', 'frank_neylon', 'frankneylon'),
(11, 'Michael Nolan', '', 'michael_nolan', 'michaelnolan'),
(12, 'Tommy Templeman', '', 'tommy_templeman', 'tommytempleman'),
(13, 'Michael Brosnan', '', 'michael_brosnan', 'michaelbrosnan'),
(14, 'Charlie Nelligan', '', 'charlie_nelligan', 'charlienelligan'),
(15, 'Breda Breen', '', 'breda_breen', 'bredabreen'),
(16, 'Anthony Walsh', '', 'anthony_walsh', 'anthonywalsh'),
(17, 'James Clifford', '', 'james_clifford', 'jamesclifford'),
(18, 'Gerard Brosnan', '', 'gerard_brosnan', 'gerardbrosnan'),
(19, 'Gerry Lenihan', '', 'gerry_lenihan', 'gerrylenihan'),
(20, 'Neil Crowley', '', 'neil_crowley', 'neilcrowley');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `vehicle_no` text NOT NULL,
  `driver` text NOT NULL,
  `route_name` text NOT NULL,
  `route_no` varchar(11) NOT NULL,
  `passenger_no` int(11) NOT NULL,
  `time` time NOT NULL,
  `passenger_assist` text NOT NULL,
  `access_req` text NOT NULL,
  `monday` varchar(10) NOT NULL,
  `tuesday` varchar(10) NOT NULL,
  `wednesday` varchar(10) NOT NULL,
  `thursday` varchar(10) NOT NULL,
  `friday` varchar(10) NOT NULL,
  `saturday` varchar(10) NOT NULL,
  `sunday` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `vehicle_no`, `driver`, `route_name`, `route_no`, `passenger_no`, `time`, `passenger_assist`, `access_req`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '142-KE-1', 'Michael Shanahan', 'St Francis / Beaufort (PU)', '5761', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(2, '142-KE-1', 'Michael Shanahan', 'St Francis / Beaufort (Return)', '5761', 0, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(3, '09-KE-1823', 'Neil Crowley', 'Brosna Cordal - Castleisland (PU)', 'C402', 0, '09:10:00', 'Marie Scollard', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(4, '142-KE-1', 'Michael Shanahan', 'Scartaglin - Castleisland (PU)', 'C401', 0, '09:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(5, '142-KE-1', 'Michael Shanahan', 'Brosna Cordal - Castleisland (PU)', 'C402', 0, '09:10:00', '', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(6, '142-KE-1', 'Michael Shanahan', 'Fires Scart Cross Currow - Castleisland (PU)', 'C403', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(7, '142-KE-1', 'Michael Shanahan', 'Castleisland Area Cordal (PU)', 'C404', 0, '15:00:00', '', '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
(8, '142-KE-1', 'Michael Shanahan', 'Knocknagoshel - CDC Long Run (PU)', 'C405', 0, '10:30:00', '', '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
(9, '142-KE-1', 'Michael Shanahan', 'Firies - Tralee (PU)', 'R2', 0, '11:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(10, '09-KE-1823', 'Neil Crowley', 'John Prendergast (Return)', '', 1, '08:15:00', 'Marie Scollard', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(11, '09-KE-1823', 'Neil Crowley', 'Brosna Cordal - Castleisland (Return)', 'C402', 0, '09:10:00', 'Marie Scollard', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(12, '09-KE-1823', 'Neil Crowley', 'Scart Cross Currow - Castleisland (PU)', 'C403', 0, '09:30:00', 'Marie Scollard', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(13, '09-KE-1823', 'Neil Crowley', 'Scart Cross Currow - Castleisland (Return)', 'C403', 0, '15:30:00', 'Marie Scollard', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(14, '09-KE-1823', 'Neil Crowley', 'Scartaglen - Castleisland (PU)', 'R7', 0, '09:00:00', 'Marie Scollard', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(15, '09-KE-1823', 'Neil Crowley', 'John Prendergast (Return)', '', 0, '15:30:00', 'Marie Scollard', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(16, '09-KE-1823', 'Neil Crowley', 'Castleisland Area Cordal (PU)', 'C404', 0, '15:30:00', 'Marie Scollard', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(17, '09-KE-1823', 'Anthony Walsh', 'Lucas and Clara', '', 2, '07:50:00', '', '', 'no', 'no', 'no ', 'no', 'no', 'no', 'no'),
(18, '09-KE-1823', 'Anthony Walsh', 'John Prendergast (PU)', '', 1, '08:15:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(19, '09-KE-1823', 'Anthony Walsh', 'Jeremiah O Connor (PU)', '', 1, '08:45:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(20, '09-KE-1823', 'Anthony Walsh', 'Edel Sheehan (PU)', '', 1, '09:00:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(21, '09-KE-1823', 'Anthony Walsh', 'Tadgh Foley (PU)', '', 1, '10:15:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(22, '09-KE-1823', 'Anthony Walsh', 'Tadgh Foley (Return)', '', 1, '14:00:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(23, '09-KE-1823', 'Anthony Walsh', 'Knocknagoshel - Castleisland (Return)', '', 1, '15:15:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(24, '08-WH-8750', 'John O Donoghue', 'Ballyroe - Nano Nagle (PU)', '5686', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(25, '08-WH-8750', 'John O Donoghue', 'Ballyroe - Nano Nagle (Return)', '5686', 0, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(26, '08-WH-8750', 'John O Donoghue', 'Lucas and Clara (Return)', '', 0, '00:00:04', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(27, '08-WH-8750', 'John O Donoghue', 'Edel Sheehan (Return)', '', 0, '13:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(28, '08-WH-8746', 'Danny O Sullivan', 'Killarney - Tralee (Return)', '5781', 0, '15:00:00', '', '', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no'),
(29, '08-WH-8746', 'Charlie Nelligan', 'Killarney - Tralee (Return)', '5781', 0, '15:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(30, '08-WH-8746', 'Danny O Sullivan', 'Killarney - Tralee (PU)', '5781', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(31, '06-KY-10170', 'TJ Nelligan', 'Carrick/ Fossa (Return)', '5341', 1, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(32, '06-KY-10170', 'TJ Nelligan', 'Carrick/ Fossa (PU)', '5341', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(34, '06-KY-10170', 'John Fitzgerald', 'Duagh Day Care (PU)', 'S229', 0, '09:30:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(35, '06-KY-10170', 'John Fitzgerald', 'Duagh Day Care', 'S229', 0, '15:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(36, '06-KY-10170', 'John Fitzgerald', 'Scarttaglen - Castleisland (Return)', 'R7', 0, '13:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(37, '06-KY-10170', 'John Fitzgerald', 'Mhuire gan Small', '', 0, '14:20:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(38, '06-KY-10170', 'TJ Nelligan', 'Scart Cross Currow (Return)', 'C403', 0, '15:30:00', '', '', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(39, '06-KY-10170', 'TJ Nelligan', 'Castleisland Area Cordal (Return)', 'C404', 0, '15:30:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(40, '06-KY-10170', 'TJ Nelligan', 'Knocknagoshel - Castleisland town (Return)', 'C405', 0, '15:15:00', '', '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
(41, '06-KY-10170', 'TJ Nelligan', 'Tadgh Foley (PU)', '', 0, '10:15:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(42, '06-KY-10170', 'TJ Nelligan', 'Brosna Cordal - Castleisland (Return)', 'C402', 0, '15:30:00', '', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(43, '06-KY-10052', 'Charlie Nelligan', 'Lucas and Clara (PU)', '', 2, '07:50:00', '', '', 'yes ', 'no ', 'no', 'no ', 'no', 'no', 'no'),
(44, '06-KY-10052', 'Charlie Nelligan', 'John Prendergast (PU)', '', 1, '08:15:00', '', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(45, '06-KY-10052', 'Anthony Walsh', 'John Prendergast (PU)', '', 1, '08:15:00', '', '', 'no ', 'no ', 'yes', 'yes', 'no', 'no', 'no'),
(46, '06-KY-10052', 'Charlie Nelligan', 'John Prendergast (Return)', '', 1, '15:30:00', '', '', 'no', 'no ', 'no', 'no', 'yes', 'no', 'no'),
(47, '06-KY-10052', 'Charlie Nelligan', 'Jeremiah O Connor (PU)', '', 1, '08:45:00', '', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(48, '06-KY-10052', 'Anthony Walsh', 'Jeremiah O Connor (PU)', '', 1, '08:45:00', '', '', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no'),
(49, '06-KY-10052', 'Charlie Nelligan', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(50, '06-KY-10052', 'Anthony Walsh', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no'),
(51, '06-KY-10052', 'Breda Breen', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(52, '06-KY-10052', 'Charlie Nelligan', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:30:00', '', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(53, '06-KY-10052', 'Tommy Templeman', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:30:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(54, '06-KY-10052', 'Anthony Walsh', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:30:00', '', '', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no'),
(55, '06-KY-10052', 'Breda Breen', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:00:00', '', '', 'no', 'no', 'no', 'no', 'no', 'yes', 'no'),
(56, '06-KY-10052', 'Tommy Templeman', 'Tadgh Foley (Return)', '', 0, '14:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(57, '06-KY-10052', 'Anthony Walsh', 'Lucas and Clara (PU)', '', 0, '07:50:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(58, '06-KY-10052', 'Anthony Walsh', 'Jeremiah O Connor (Return)', '', 1, '16:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(59, '06-KY-10052', 'Anthony Walsh', 'Tadgh Foley (Return)', '', 0, '14:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(60, '06-KY-10052', 'Anthony Walsh', 'Marie O Sullivan (Return)', '', 0, '14:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(61, '06-KY-10052', 'Anthony Walsh', 'Scartaglen - Castleisland (Return)', 'R7', 0, '13:00:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(62, '06-KY-10052', 'Anthony Walsh', 'Margret Enright (Return)', '', 0, '14:40:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(63, '06-KY-10052', 'Anthony Walsh', 'Victor (Return)', '', 0, '14:40:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(64, '06-KY-10052', 'Charlie Nelligan', 'Castlemaine to Killarney (Return)', 'R16', 1, '13:00:00', '', '', 'no', 'no ', 'no', 'no', 'yes', 'no', 'no'),
(65, '04-CE-2034', 'Michael Nolan', 'Asdee - Tralee (PU)', '5782', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(66, '04-CE-2034', 'Michael Nolan', 'Asdee - Tralee (Return)', '5782', 0, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(67, '04-CE-2034', 'Michael Nolan', 'Jeremiah O Connor (Return)', '', 0, '16:30:00', '', '', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no'),
(68, '99-MO-4660', 'TJ Nelligan', 'Carrick/Fossa', '5341', 0, '07:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(69, '99-MO-4660', 'TJ Nelligan', 'Carrick/Fossa (Return)', '5341', 0, '15:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(70, '99-MO-4660', 'TJ Nelligan', 'Scartaglin - Castleisland (Return)', 'C401', 0, '15:15:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(71, '99-MO-4660', 'Gerry Lenihan', 'Edel Sheehan (PU)', '', 0, '09:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(72, '99-MO-4660', 'James Clifford', 'Edel Sheehan (PU)', '', 0, '09:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(73, '99-MO-4660', 'James Clifford', 'Edel Sheehan (Return)', '', 0, '15:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(74, '99-MO-4660', 'Gerry Lenihan', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(75, '99-MO-4660', 'Gerry Lenihan', 'Baile Mhuire DCC (Return)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(78, '06-KY-10052', 'Breda Breen', 'Sinead O Callaghan (PU)', '304', 1, '09:00:00', 'Sinead Maher', 'She a lazy bitch ', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(79, '06-KY-10170', 'TJ Nelligan', 'Test Route', 'c333', 1, '09:30:00', 'Ex', 'None', 'no', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `routestwo`
--

CREATE TABLE `routestwo` (
  `id` int(11) NOT NULL,
  `vehicle_no` text NOT NULL,
  `driver` text NOT NULL,
  `route_name` text NOT NULL,
  `route_no` varchar(11) NOT NULL,
  `passenger_no` int(11) NOT NULL,
  `time` time NOT NULL,
  `passenger_assist` text NOT NULL,
  `access_req` text NOT NULL,
  `monday` varchar(10) NOT NULL,
  `tuesday` varchar(10) NOT NULL,
  `wednesday` varchar(10) NOT NULL,
  `thursday` varchar(10) NOT NULL,
  `friday` varchar(10) NOT NULL,
  `saturday` varchar(10) NOT NULL,
  `sunday` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routestwo`
--

INSERT INTO `routestwo` (`id`, `vehicle_no`, `driver`, `route_name`, `route_no`, `passenger_no`, `time`, `passenger_assist`, `access_req`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '142-KE-1', 'Donal Forde', 'St Francis / Beaufort (PU)', '5761', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(2, '142-KE-1', 'Donal Forde', 'St Francis / Beaufort (Return)', '5761', 0, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(3, '09-KE-1823', 'Jimmy Kearney', 'Brosna Cordal - Castleisland (PU)', 'C402', 0, '09:10:00', 'Marie Scollard', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(4, '142-KE-1', 'Donal Forde', 'Scartaglin - Castleisland (PU)', 'C401', 0, '09:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(5, '142-KE-1', 'Donal Forde', 'Brosna Cordal - Castleisland (PU)', 'C402', 0, '09:10:00', '', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(6, '142-KE-1', 'Donal Forde', 'Fires Scart Cross Currow - Castleisland (PU)', 'C403', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(7, '142-KE-1', 'Donal Forde', 'Castleisland Area Cordal (PU)', 'C404', 0, '15:00:00', '', '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
(8, '142-KE-1', 'Donal Forde', 'Knocknagoshel - CDC Long Run (PU)', 'C405', 0, '10:30:00', '', '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
(9, '142-KE-1', 'Donal Forde', 'Firies - Tralee (PU)', 'R2', 0, '11:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(10, '09-KE-1823', 'Jimmy Kearney', 'John Prendergast (Return)', '', 1, '08:15:00', 'Marie Scollard', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(11, '09-KE-1823', 'Jimmy Kearney', 'Brosna Cordal - Castleisland (Return)', 'C402', 0, '09:10:00', 'Marie Scollard', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(12, '09-KE-1823', 'Jimmy Kearney', 'Scart Cross Currow - Castleisland (PU)', 'C403', 0, '09:30:00', 'Marie Scollard', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(13, '09-KE-1823', 'Jimmy Kearney', 'Scart Cross Currow - Castleisland (Return)', 'C403', 0, '15:30:00', 'Marie Scollard', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(14, '09-KE-1823', 'Jimmy Kearney', 'Scartaglen - Castleisland (PU)', 'R7', 0, '09:00:00', 'Marie Scollard', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(15, '09-KE-1823', 'Jimmy Kearney', 'John Prendergast (Return)', '', 0, '15:30:00', 'Marie Scollard', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(16, '09-KE-1823', 'Jimmy Kearney', 'Castleisland Area Cordal (PU)', 'C404', 0, '15:30:00', 'Marie Scollard', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(17, '09-KE-1823', 'Anthony Walsh', 'Lucas and Clara', '', 2, '07:50:00', '', '', 'no', 'no', 'no ', 'no', 'no', 'no', 'no'),
(18, '09-KE-1823', 'Anthony Walsh', 'John Prendergast (PU)', '', 1, '08:15:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(19, '09-KE-1823', 'Anthony Walsh', 'Jeremiah O Connor (PU)', '', 1, '08:45:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(20, '09-KE-1823', 'Anthony Walsh', 'Edel Sheehan (PU)', '', 1, '09:00:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(21, '09-KE-1823', 'Anthony Walsh', 'Tadgh Foley (PU)', '', 1, '10:15:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(22, '09-KE-1823', 'Anthony Walsh', 'Tadgh Foley (Return)', '', 1, '14:00:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(23, '09-KE-1823', 'Anthony Walsh', 'Knocknagoshel - Castleisland (Return)', '', 1, '15:15:00', '', '', 'no', 'no', 'no ', 'no', 'yes', 'no', 'no'),
(24, '08-WH-8750', 'John O Donoghue', 'Ballyroe - Nano Nagle (PU)', '5686', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(25, '08-WH-8750', 'John O Donoghue', 'Ballyroe - Nano Nagle (Return)', '5686', 0, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(26, '08-WH-8750', 'John O Donoghue', 'Lucas and Clara (Return)', '', 0, '00:00:04', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(27, '08-WH-8750', 'John O Donoghue', 'Edel Sheehan (Return)', '', 0, '13:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(28, '08-WH-8746', 'Danny O Sullivan', 'Killarney - Tralee (Return)', '5781', 0, '15:00:00', '', '', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no'),
(29, '08-WH-8746', 'Charlie Nelligan', 'Killarney - Tralee (Return)', '5781', 0, '15:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(30, '08-WH-8746', 'Danny O Sullivan', 'Killarney - Tralee (PU)', '5781', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(31, '06-KY-10170', 'Pat Galvin', 'Carrick/ Fossa (Return)', '5341', 1, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(32, '06-KY-10170', 'Pat Galvin', 'Carrick/ Fossa (PU)', '5341', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(34, '06-KY-10170', 'John Fitzgerald', 'Duagh Day Care (PU)', 'S229', 0, '09:30:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(35, '06-KY-10170', 'John Fitzgerald', 'Duagh Day Care', 'S229', 0, '15:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(36, '06-KY-10170', 'John Fitzgerald', 'Scarttaglen - Castleisland (Return)', 'R7', 0, '13:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(37, '06-KY-10170', 'John Fitzgerald', 'Mhuire gan Small', '', 0, '14:20:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(38, '06-KY-10170', 'Pat Galvin', 'Scart Cross Currow (Return)', 'C403', 0, '15:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(39, '06-KY-10170', 'Pat Galvin', 'Castleisland Area Cordal (Return)', 'C404', 0, '15:30:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(40, '06-KY-10170', 'Pat Galvin', 'Knocknagoshel - Castleisland town (Return)', 'C405', 0, '15:15:00', '', '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no'),
(41, '06-KY-10170', 'Pat Galvin', 'Tadgh Foley (PU)', '', 0, '10:15:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(42, '06-KY-10170', 'Pat Galvin', 'Brosna Cordal - Castleisland (Return)', 'C402', 0, '15:30:00', '', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(43, '06-KY-10052', 'Charlie Nelligan', 'Lucas and Clara (PU)', '', 2, '07:50:00', '', '', 'yes ', 'no ', 'no', 'no ', 'no', 'no', 'no'),
(44, '06-KY-10052', 'Charlie Nelligan', 'John Prendergast (PU)', '', 1, '08:15:00', '', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(45, '06-KY-10052', 'Anthony Walsh', 'John Prendergast (PU)', '', 1, '08:15:00', '', '', 'no ', 'no ', 'yes', 'yes', 'no', 'no', 'no'),
(46, '06-KY-10052', 'Charlie Nelligan', 'John Prendergast (Return)', '', 1, '15:30:00', '', '', 'no', 'no ', 'no', 'no', 'yes', 'no', 'no'),
(47, '06-KY-10052', 'Charlie Nelligan', 'Jeremiah O Connor (PU)', '', 1, '08:45:00', '', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(48, '06-KY-10052', 'Anthony Walsh', 'Jeremiah O Connor (PU)', '', 1, '08:45:00', '', '', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no'),
(49, '06-KY-10052', 'Charlie Nelligan', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no'),
(50, '06-KY-10052', 'Anthony Walsh', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no'),
(51, '06-KY-10052', 'Breda Breen', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'no', 'no', 'no', 'yes', 'no'),
(52, '06-KY-10052', 'Charlie Nelligan', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:30:00', '', '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no'),
(53, '06-KY-10052', 'Tommy Templeman', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:30:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(54, '06-KY-10052', 'Anthony Walsh', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:30:00', '', '', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no'),
(55, '06-KY-10052', 'Breda Breen', 'Baile Mhuire DCC (Return)', 'C425', 0, '15:00:00', '', '', 'no', 'no', 'no', 'no', 'no', 'yes', 'no'),
(56, '06-KY-10052', 'Tommy Templeman', 'Tadgh Foley (Return)', '', 0, '14:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(57, '06-KY-10052', 'Anthony Walsh', 'Lucas and Clara (PU)', '', 0, '07:50:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(58, '06-KY-10052', 'Anthony Walsh', 'Jeremiah O Connor (Return)', '', 1, '16:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(59, '06-KY-10052', 'Anthony Walsh', 'Tadgh Foley (Return)', '', 0, '14:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(60, '06-KY-10052', 'Anthony Walsh', 'Marie O Sullivan (Return)', '', 0, '14:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(61, '06-KY-10052', 'Anthony Walsh', 'Scartaglen - Castleisland (Return)', 'R7', 0, '13:00:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(62, '06-KY-10052', 'Anthony Walsh', 'Margret Enright (Return)', '', 0, '14:40:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(63, '06-KY-10052', 'Anthony Walsh', 'Victor (Return)', '', 0, '14:40:00', '', '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no'),
(64, '06-KY-10052', 'Charlie Nelligan', 'Castlemaine to Killarney (Return)', 'R16', 1, '13:00:00', '', '', 'no', 'no ', 'no', 'no', 'yes', 'no', 'no'),
(65, '04-CE-2034', 'Michael Nolan', 'Asdee - Tralee (PU)', '5782', 0, '07:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(66, '04-CE-2034', 'Michael Nolan', 'Asdee - Tralee (Return)', '5782', 0, '15:00:00', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(67, '04-CE-2034', 'Michael Nolan', 'Jeremiah O Connor (Return)', '', 0, '16:30:00', '', '', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'no'),
(68, '99-MO-4660', 'TJ Nelligan', 'Carrick/Fossa', '5341', 0, '07:00:00', '', '', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(69, '99-MO-4660', 'TJ Nelligan', 'Carrick/Fossa (Return)', '5341', 0, '15:00:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(70, '99-MO-4660', 'TJ Nelligan', 'Scartaglin - Castleisland (Return)', 'C401', 0, '15:15:00', '', '', 'no', 'yes', 'no', 'no', 'no', 'no', 'no'),
(71, '99-MO-4660', 'Gerry Lenihan', 'Edel Sheehan (PU)', '', 0, '09:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(72, '99-MO-4660', 'James Clifford', 'Edel Sheehan (PU)', '', 0, '09:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(73, '99-MO-4660', 'James Clifford', 'Edel Sheehan (Return)', '', 0, '15:00:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(74, '99-MO-4660', 'Gerry Lenihan', 'Baile Mhuire DCC (PU)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no'),
(75, '99-MO-4660', 'Gerry Lenihan', 'Baile Mhuire DCC (Return)', 'C425', 0, '09:30:00', '', '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routestwo`
--
ALTER TABLE `routestwo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `routestwo`
--
ALTER TABLE `routestwo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

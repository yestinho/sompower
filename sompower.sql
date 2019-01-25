-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 12:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assing`
--

-- --------------------------------------------------------

--
-- Table structure for table `sompower`
--

CREATE TABLE `sompower` (
  `id` int(11) NOT NULL,
  `Taariikh` date NOT NULL,
  `Magaca_Macmiilka` varchar(30) NOT NULL,
  `Tell_macmiilka` int(11) DEFAULT NULL,
  `Laanta` varchar(30) DEFAULT NULL,
  `Aaga` varchar(30) DEFAULT NULL,
  `Calaamada` varchar(30) DEFAULT NULL,
  `Supply_No` varchar(30) NOT NULL,
  `Goobta_Macmiilka` varchar(30) DEFAULT NULL,
  `Nooca_dabgalinta` varchar(30) DEFAULT NULL,
  `Damiinul_Maal` varchar(30) DEFAULT NULL,
  `Tell` int(11) DEFAULT NULL,
  `Numberka_Saacada` varchar(30) DEFAULT NULL,
  `Akhriska_Saacada` varchar(30) DEFAULT NULL,
  `Magaca_xidhaha` varchar(30) DEFAULT NULL,
  `Taariikhda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sompower`
--

INSERT INTO `sompower` (`id`, `Taariikh`, `Magaca_Macmiilka`, `Tell_macmiilka`, `Laanta`, `Aaga`, `Calaamada`, `Supply_No`, `Goobta_Macmiilka`, `Nooca_dabgalinta`, `Damiinul_Maal`, `Tell`, `Numberka_Saacada`, `Akhriska_Saacada`, `Magaca_xidhaha`, `Taariikhda`) VALUES
(1, '2018-01-27', 'xasan warsame', 634787328, 'xero awr', 'isgoyska xero awr', 'kasoo horjeedka sareeye ', '8984898', 'meherad', '3phase', 'xaaji ahmed', 676364, '664', '0000', 'yuusuf', '2018-01-30'),
(2, '2018-01-27', 'cali  daahir', 647346, 'gantaalaha', '150 street', 'kasoo horjeedka main campus ', '9000', 'meherad', '3phase', 'Ahmed', 621212, '663', '0001', 'cismaan cumar', '2018-01-29'),
(3, '2018-01-27', 'farxaan aadan', 767646, 'gantaalaha', 'xerada agteeda', 'masjid ka woqooyi', '6676', 'guri', '1phase', 'cumar aadan', 6326323, '665', '0023', 'yuusuf daahir', '2018-01-26'),
(4, '2018-01-27', 'warsame nuur', 6323766, 'sheedaha', 'mishinka ', 'siijeed ka buurta mishiinka', '6776', 'guri', '1phase', 'khaalid mahamed', 636764, '666', '0055', 'cali dheere', '2018-01-27'),
(5, '2018-01-27', 'fuaad xuseen', 767467, 'jigjigayar', 'isgoyska total', 'kasoo horjeedka telesom', '66763', 'meherad', '3phase', 'xasan warsame', 676676, '632', '0231', 'farxaan gaab', '2018-01-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sompower`
--
ALTER TABLE `sompower`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sompower`
--
ALTER TABLE `sompower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

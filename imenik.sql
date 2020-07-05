-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2020 at 08:37 PM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imenik`
--

-- --------------------------------------------------------

--
-- Table structure for table `imenik`
--

CREATE TABLE `imenik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `godina` year(4) NOT NULL,
  `slika` text NOT NULL,
  `unos` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imenik`
--

INSERT INTO `imenik` (`id`, `ime`, `godina`, `slika`, `unos`) VALUES
(1, 'PHP', 1998, '<a href=\"https://www.propono.hr/wp-content/uploads/2016/03/PHP-logo.svg.png\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.propono.hr/wp-content/uploads/2016/03/PHP-logo.svg.png</a>', '2020-07-05 09:25:09'),
(2, 'vertrigo', 2000, '<a href=\"https://www.vswamp.com/logo.png\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.vswamp.com/logo.png</a>', '2020-07-05 09:34:42'),
(3, 'Java', 2010, '<a href=\"https://logos-download.com/wp-content/uploads/2016/10/Java_logo_icon.png\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://logos-download.com/wp-content/uploads/2016/10/Java_logo_icon.png</a>', '2020-07-05 09:34:42'),
(4, 'JavaScript', 2020, '<a href=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1024px-Unofficial_JavaScript_logo_2.svg.png\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1024px-Unofficial_JavaScript_logo_2.svg.png</a>', '2020-07-05 09:37:01'),
(5, 'HTML', 2019, '<a href=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/512px-HTML5_logo_and_wordmark.svg.png\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/512px-HTML5_logo_and_wordmark.svg.png</a>', '2020-07-05 09:37:01'),
(6, 'CSS', 2009, '<a href=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/544px-CSS3_logo_and_wordmark.svg.png\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/544px-CSS3_logo_and_wordmark.svg.png</a>', '2020-07-05 09:37:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imenik`
--
ALTER TABLE `imenik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imenik`
--
ALTER TABLE `imenik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

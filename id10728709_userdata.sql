-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2020 at 12:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10728709_userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `anscount`
--

CREATE TABLE `anscount` (
  `count` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anscount`
--

INSERT INTO `anscount` (`count`, `name`) VALUES
(2, 1),
(0, 2),
(0, 3),
(0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answer` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `image`, `name`) VALUES
(4, 'Answers is the nothing is the.', '', 1),
(3, 'jaysingh', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(1, 'Jaysingh'),
(2, 'Hey jay this is your friend jj gandu');

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `user` int(11) NOT NULL,
  `connect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`user`, `connect`) VALUES
(2, 1),
(1, 2),
(5, 1),
(1, 5),
(1, 1),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `id` int(11) NOT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`id`, `image`, `about`) VALUES
(1, 'special thali.jpg', 'Indian Special Thali'),
(2, 'normal_thali.jpg', 'North Indian normal Thali'),
(3, 'paneer.jpg', 'paneer tikka wrap'),
(4, 'hakka.jpg', 'vegetables hakka noodles');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `password`, `email`, `number`, `image`) VALUES
(1, 'jaysingh', 'jaysingh', 'singhjay18587@gmail.com', '9131730983', 'IMG_20191010_155445.jpg'),
(2, 'JJ ', 'Jay', 'jjyouheardthefirstname@gmail.com', '9131730983', 'images.jpeg.jpg'),
(3, 'Satyam patidar ', 'satyam', 'singh@gmail.com', '9131730983', ''),
(4, 'Satyam patidar ', 'satyam', 'singh@gmail.com', '9131730983', ''),
(5, 'ankush', 'ankush', 'ankushkushvaha200@gmail.com', '9131730983', 'Screenshot_20191016_200227.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `no` int(11) NOT NULL,
  `message` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `frd` int(11) NOT NULL,
  `self` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`no`, `message`, `frd`, `self`) VALUES
(1, 'Kya', 1, 2),
(2, 'ja', 1, 2),
(3, 'kaha h', 1, 2),
(4, 'jjjj', 1, 2),
(5, 'ko', 1, 2),
(6, '', 1, 3),
(7, '', 3, 4),
(8, '', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `image`, `name`) VALUES
(1, 'JJ gandu hain', '', 1),
(2, 'JJ gandu hain', 'IMG_20190921_001939.jpg', 1),
(3, '', '', 2),
(4, 'Fuhgjvk', '', 2),
(5, 'Ankush kushwaha kushwaha', '', 1),
(6, 'Ankush son', '', 5),
(7, 'Ankush son', '', 5),
(8, 'Ankush kushwaha kushwaha', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `reply` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply`) VALUES
(2, 'Thik'),
(2, 'How is my little jay'),
(2, 'Thik hai'),
(2, 'kaha h abhi tu'),
(2, 'kahi nahi');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `no` int(11) NOT NULL,
  `reply` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`no`, `reply`) VALUES
(2, 'thik'),
(3, 'ghar'),
(6, 'Hi'),
(8, 'How is my little jay'),
(7, 'Hi'),
(6, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `singh`
--

CREATE TABLE `singh` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(15) NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `singh`
--

INSERT INTO `singh` (`id`, `username`, `email`, `number`, `password`) VALUES
(7, 'singhjay18587', '8435875334@gmail.com', 8868968, 'jgsgu'),
(8, 'fhjjkgf', '56686@gmail.com', 866558, 'ruiggfhu'),
(9, 'Bsjjsvjs', 'skk@gmail.com', 9464694, 'gshsu'),
(10, 'fhssjhsgsususigwh', 'cshissggsjs@gmail.com', 45404604, 'gwuwgv'),
(11, 'fhssj', 'ggsjs@gmail.com', 8469, 'hejeh'),
(12, 'Ramji yadav', 'ramjiyadav200101gmail.com', 939928011, ''),
(13, 'Ramji yadav', 'ramjiyadav200101gmail.com', 939928011, ''),
(14, 'jaysingh', 'kallavarunsai2001@gmail.com', 43535353, 'dgrertg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `video`) VALUES
(1, 'funny.mp4'),
(2, 'funny moment with friend s.mp4'),
(3, 'cute child love eyes.mp4'),
(4, 'truth of humans.mp4'),
(5, 'friend importance in life.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(78) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(77) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `image`) VALUES
(1, 'jaysingh', '8435875334', '', ''),
(2, 'Satyam ', '9131730983', '', ''),
(3, 'Pankaj', '9436275284', '', ''),
(4, 'JJ ', '7777777777', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singh`
--
ALTER TABLE `singh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `singh`
--
ALTER TABLE `singh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

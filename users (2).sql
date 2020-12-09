-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 08:22 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bname`, `authorname`, `price`, `image`, `category`) VALUES
(1, 'THE DIARY OF A YOUNG GIRL', 'ANNE FRANK', 499, 'css/images/Biography/annefrank.jpg', 'BIOGRAPHY'),
(2, 'AUDACITY OF HOPE', 'BARACK OBAMA', 999, 'css/images/Biography/decisionpoints.jpg', 'BIOGRAPHY'),
(3, 'BET ME', 'JENNIFER CRUSIE', 499, 'css/images/Romantic/betme.jpg', 'ROMANCE'),
(4, 'BLACK ICE', 'ANNE STUART', 999, 'css/images/Romantic/blackice.jpg', 'ROMANCE'),
(5, 'the davinci code', 'dan brown', 499, 'css/images/big1.jpg', 'thriller'),
(6, 'mein kampf', 'adolf hitler', 999, 'css/images/big2.jpg', 'biography'),
(7, '2 states', 'chetan bhagat', 389, 'css/images/big3.jpg', 'romance'),
(8, '50 shades of grey', 'e.l. james', 999, 'css/images/big4.jpg', 'romance'),
(9, 'the fault in our stars', 'john green', 699, 'css/images/big5.jpg', 'romance'),
(10, 'mutation', 'robin cook', 389, 'css/images/big6.jpg', 'thriller'),
(11, 'wings of fire', 'abdul kalam', 999, 'css/images/big7.jpg', 'biography'),
(12, 'steve jobs', 'Walter Issacson', 999, 'css/images/big8.jpg', 'biography'),
(13, 'the age of vikings', 'Anders Winroth', 499, 'css/images/big9.jpg', 'thriller'),
(14, 'FLOWERS FROM THE STORM', 'LAURA KINSALE', 999, 'css/images/Romantic/flower.jpg', 'ROMANCE'),
(15, 'GONE WITH THE WIND', 'MARGARET MITCHELL', 699, 'css/images/Romantic/gone.jpg', 'ROMANCE'),
(16, 'LORD OF SCOUNDRELS', 'LORETTA CHASE', 389, 'css/images/Romantic/lord.jpg', 'ROMANCE'),
(17, 'LOVER AWAKENED', 'J.R.WARD', 999, 'css/images/Romantic/lover.jpg', 'ROMANCE'),
(18, 'NAKED IN DEATH', 'J.D. ROBB', 999, 'css/images/Romantic/naked.jpg', 'ROMANCE'),
(19, 'THE VISCOUNT WHO LOVED ME', 'JULIA QUINN', 499, 'css/images/Romantic/viscount.jpg', 'ROMANCE'),
(20, 'THE COLOR OF MAGIC', 'TERRY PRATCHETT', 499, 'css/images/Comedy/colorofmagic.jpg', 'COMEDY'),
(21, 'A DIRTY JOB', 'CHRISTOPHER MOORE', 999, 'css/images/Comedy/dirtyjob.jpg', 'COMEDY'),
(22, 'GOOD OMENS', 'TERRY PRATCHETT', 389, 'css/images/Comedy/goodomens.jpg', 'COMEDY'),
(23, 'HITCHHIKER GUIDE TO THE GALAXY', 'DOUGLAS ADAMS', 999, 'css/images/Comedy/hitchhikers.jpg', 'COMEDY'),
(24, 'THE IMPORTANCE OF BEING EARNEST', 'OSCAR WILDE', 699, 'css/images/Comedy/importance.jpg', 'COMEDY'),
(25, 'ME TALK PRETTY ONE DAY', 'DAVID SEDARIS', 999, 'css/images/Comedy/metalk.jpg', 'COMEDY');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartno` int(11) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartno`, `customername`, `pro_id`, `bookname`, `author`, `price`) VALUES
(33, 'rajesh', 8, '50 shades of grey', 'e.l. james', 999),
(37, 'KAUSHAL', 13, 'the age of vikings', 'Anders Winroth', 499),
(38, 'dhiraj', 7, '2 states', 'chetan bhagat', 389),
(44, 'dhiraj', 12, 'steve jobs', 'Walter Issacson', 999),
(45, 'harsh', 4, 'BLACK ICE', 'ANNE STUART', 999),
(46, 'harsh', 4, 'BLACK ICE', 'ANNE STUART', 999),
(47, 'harsh', 4, 'BLACK ICE', 'ANNE STUART', 999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pswd`, `emailid`, `mobile`, `address`) VALUES
('aditya', '123', '', '0', ''),
('arth', '1234', 'no', '123456', 'ghatkopar'),
('dhiraj', '1234', 'nothing', '9786421', 'mulund'),
('harsh', '1234', 'fhy', '158495', 'virar'),
('kaushal', '1234', 'savla.kaushal@gmail.com', '9773323950', 'sion'),
('keval', '1234', 'nothing', '12', 's'),
('nishay', '1234', 'no', '256456', 'thane'),
('priyank', '1234', 'fef', '156945', 'mulund'),
('rajesh', '123456', 'rajesh@gmail.com', '97733235', 'sion'),
('rashila', 'rashila!@#$', 'kaushal.savla@gmail.com', '8879699305', '11,ratan bldg,sion gandhi market');

-- --------------------------------------------------------

--
-- Table structure for table `users_books`
--

CREATE TABLE IF NOT EXISTS `users_books` (
  `cid` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `bookid` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_books`
--

INSERT INTO `users_books` (`cid`, `userid`, `bookid`, `price`) VALUES
(1, 'aditya', 1, 499),
(2, 'aditya', 2, 999),
(3, 'kaushal', 3, 499),
(4, 'nishay', 4, 999),
(5, 'kaushal', 3, 999),
(6, 'nishay', 3, 999),
(12, 'rashila', 5, 0),
(13, 'priyank', 6, 0),
(14, 'rashila', 5, 0),
(15, 'priyank', 6, 0),
(16, 'harsh', 7, 999),
(17, 'arth', 8, 469),
(18, 'kaushal', 9, 455),
(19, 'priyank', 10, 265),
(20, 'rashila', 11, 999),
(21, 'harsh', 12, 899),
(22, 'kaushal', 13, 799),
(45, 'aditya', 7, 389),
(60, 'aditya', 5, 499),
(61, 'aditya', 5, 499),
(62, 'aditya', 5, 499),
(63, 'aditya', 5, 499),
(64, 'aditya', 5, 499),
(65, 'aditya', 5, 499),
(66, 'aditya', 5, 499),
(67, 'aditya', 5, 499),
(68, 'aditya', 2, 999),
(69, 'aditya', 2, 999),
(70, 'aditya', 4, 999),
(71, 'aditya', 4, 999),
(72, 'aditya', 10, 389),
(73, 'aditya', 10, 389),
(74, 'aditya', 10, 389),
(75, 'aditya', 10, 389),
(76, 'aditya', 13, 499),
(77, 'aditya', 7, 389),
(78, 'aditya', 7, 389),
(79, 'kaushal', 13, 499),
(80, 'harsh', 6, 999),
(81, 'harsh', 6, 999),
(82, 'harsh', 6, 999),
(83, 'harsh', 6, 999),
(84, 'harsh', 6, 999),
(85, 'harsh', 6, 999),
(86, 'harsh', 6, 999),
(87, 'harsh', 6, 999),
(88, 'harsh', 6, 999),
(89, 'harsh', 6, 999),
(90, 'harsh', 6, 999),
(91, 'harsh', 6, 999),
(92, 'harsh', 6, 999),
(93, 'harsh', 6, 999),
(94, 'harsh', 6, 999),
(95, 'harsh', 6, 999),
(96, 'harsh', 6, 999),
(97, 'harsh', 6, 999),
(98, 'harsh', 10, 389),
(99, 'harsh', 10, 389),
(100, 'harsh', 10, 389),
(101, 'harsh', 10, 389),
(102, 'harsh', 10, 389),
(103, 'harsh', 6, 999),
(104, 'harsh', 12, 999),
(105, 'harsh', 12, 999),
(106, 'harsh', 12, 999),
(107, 'harsh', 12, 999),
(108, 'harsh', 6, 999),
(109, 'harsh', 6, 999),
(110, 'harsh', 4, 999),
(111, 'harsh', 12, 999),
(112, 'harsh', 3, 499),
(113, 'kaushal', 1, 499),
(114, 'kaushal', 11, 999),
(115, 'kaushal', 11, 999),
(116, 'kaushal', 7, 389),
(117, 'kaushal', 7, 389),
(118, 'kaushal', 7, 389),
(119, 'kaushal', 3, 499),
(120, 'kaushal', 3, 499),
(121, 'kaushal', 1, 499),
(122, 'kaushal', 7, 389),
(123, 'kaushal', 2, 999),
(124, 'kaushal', 2, 999),
(126, 'rajesh', 12, 999),
(127, 'rajesh', 8, 999),
(128, 'rashila', 14, 999),
(129, 'rashila', 15, 699),
(130, 'keval', 16, 389),
(131, 'keval', 17, 999),
(132, 'rajesh', 18, 999),
(133, 'rajesh', 29, 499),
(134, 'priyank', 20, 499),
(135, 'priyank', 21, 999),
(136, 'nishay', 22, 389),
(137, 'nishay', 23, 999),
(138, 'arth', 24, 699),
(139, 'arth', 25, 999),
(141, 'KAUSHAL', 15, 699),
(142, 'KAUSHAL', 6, 999),
(143, 'KAUSHAL', 13, 499),
(144, 'dhiraj', 7, 389),
(145, 'dhiraj', 8, 999),
(146, 'dhiraj', 8, 999),
(147, 'dhiraj', 8, 999),
(148, 'dhiraj', 8, 999),
(149, 'dhiraj', 8, 999),
(150, 'dhiraj', 12, 999),
(151, 'harsh', 4, 999),
(152, 'harsh', 4, 999),
(153, 'harsh', 4, 999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartno`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `customername` (`customername`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users_books`
--
ALTER TABLE `users_books`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `userid_2` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users_books`
--
ALTER TABLE `users_books`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `books` (`bid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`customername`) REFERENCES `users` (`username`);

--
-- Constraints for table `users_books`
--
ALTER TABLE `users_books`
  ADD CONSTRAINT `users_books_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

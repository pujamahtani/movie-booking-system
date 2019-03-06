-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 12:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `certification` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `users_rating` float NOT NULL,
  `critics_rating` float NOT NULL,
  `img_extension` varchar(255) NOT NULL,
  `movie_link` varchar(255) NOT NULL,
  `movie_desc` varchar(255) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `release_date`, `certification`, `genre`, `format`, `duration`, `director`, `cast`, `language`, `users_rating`, `critics_rating`, `img_extension`, `movie_link`, `movie_desc`, `is_deleted`) VALUES
(1, 'Venom', '2018-10-05', 'UA', 'ACTION', '3D', '3 HOURS', 'ABC', 'TOM HARDY', 'ENGLISH', 4, 4.3, '', '', '', 1),
(2, 'BAHUBALI', '2016-09-09', 'UA', 'ACTION', '3D', '2:45 HOURS', 'SS RAJAMOULI', 'PRABHAS,RANA DAGUBATTI', 'HINDI', 4, 4, '', '', '', 1),
(3, 'RAM LEELA', '2017-01-06', 'UA', 'DRAMA', '2D', '2:50 HOURS', 'SANJAY LEELA BHANSALI', 'DEEEPIKA PADUKONE,RANVEER SINGH', 'HINDI', 4.3, 4, '', '', '', 1),
(4, 'GOLD', '2018-09-21', 'UA', 'SUSPENSE', '2D', '3 HOURS', 'XYZ', 'AKSAHY KUMAR', 'HINDI', 4.5, 4.3, '', '', '', 1),
(5, 'Race3', '0000-00-00', 'UA', 'ACTION', '2D', '3 HOURS', 'Remo DSouza', 'Salman Khan,Anil Kapoor,Jacqueline Fernandez,Bobby Deol.', 'Hindi', 3, 2.5, '', '', '', 1),
(9, 'Andhadun', '0000-00-00', 'UA', 'Thriller', '2D', '3 HOURS', 'ABC', 'Ayushman Khurana,Radhika Apte', 'Hindi', 4, 4, 'png', '', '', 1),
(10, 'Andhadun', '2018-10-05', 'UA', 'Thriller', '2D', '3 HOURS', 'Sriram Ragahavan', 'Ayushman Khurana,Radhika Apte', 'Hindi', 4, 4, 'jpg', 'https://www.youtube.com/embed/2iVYI99VGaw', 'A blind singer, absolutely brilliant on piano, has mild manners and electric fingers. He gets the highest tip in the history of the club he plays at. When he is told about it, he says he is saving up so as to have enough money to go to London one day. \r\n\r', 0),
(11, 'Sui Dhaaga', '2018-09-27', 'UA', 'Drama', '2D', '3 Hours 11 Minutes', 'Sharat Katariya', 'Anushka Sharma, Varun Dhawan', 'Hindi', 3, 3, 'jpg', 'https://www.youtube.com/embed/VUe3p23AJMo', 'An unemployed small-town man defies all odds and naysayers and starts his own garment business.', 0),
(12, 'Stree', '2018-09-21', 'UA', 'Horror,Comedy', '2D', '2 Hour 9 Min', 'Amar Kaushik', 'Rajkumar Rao, Shraddha Kapoor', 'Hindi', 3, 4, 'jpg', 'https://www.youtube.com/embed/gzeaGcLLl_A', 'A town is held in the grip of terror by tales of a mysterious woman who calls men by their name and then abducts them, leaving their clothes behind.', 0),
(13, 'Loveyatri', '2018-10-09', 'UA', 'Romantic, Drama', '2D', '2 Hour 11 Min', 'Abhiraj Minawala', 'Ayush Sharma, Warina Hussain', 'Hindi', 3.5, 4, 'jpg', 'https://www.youtube.com/embed/NCC6izqds04', 'Romance blossoms between young Sushrut and Michelle when they meet during the festival of Navratri. When Michelle returns home to the United Kingdom, Sushrut embarks on an adventurous journey through a strange land to win back the woman he loves.', 0),
(14, 'Venom', '2018-10-05', 'UA', 'SCI-FI', '3D', '2 Hours 40 mins', 'Ruben Fleischer', 'Tom Hardy', 'English', 4, 2.5, 'jpg', 'https://www.youtube.com/embed/xLCn88bfW1o', 'Eddie Brock, a journalist, stumbles upon a story that lands him in big trouble, and he becomes the host to an alien Symbiote, which in turn gives him unimaginable powers. Bringing Marvels one of the most enigmatic, complex, and badass characters to the bi', 0),
(15, 'Badhai Ho', '2018-10-19', 'UA', 'COMEDY', '2D', '3 Hours 15 mins', 'Amit Sharma', 'Aysuhman Khurana, Sanya Malhotra', 'Hindi', 4.5, 3.5, 'jpg', 'https://www.youtube.com/embed/unAljCZMQYw', 'When his middle-aged parents announce the news of an untimely pregnancy, Nakul is far from thrilled. Not only does he find the situation a bit awkward, but there is also the peril of public embarrassment. Can he come to terms with the odd plight his famil', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_mode` int(11) NOT NULL,
  `pay_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `user_id`, `amount`, `pay_mode`, `pay_date`) VALUES
(1, 2, 220, 1, '2018-10-12 00:00:00'),
(2, 3, 240, 2, '2018-10-10 00:00:00'),
(3, 2, 200, 2, '2018-10-20 03:03:08'),
(4, 2, 200, 2, '2018-10-20 03:06:43'),
(5, 2, 200, 2, '2018-10-20 03:07:17'),
(6, 2, 200, 2, '2018-10-20 03:20:29'),
(7, 2, 400, 1, '2018-10-20 08:56:58'),
(8, 1, 660, 1, '2018-10-20 09:31:25'),
(9, 4, 280, 1, '2018-10-20 09:38:30'),
(10, 2, 600, 1, '2018-10-23 13:28:06'),
(11, 2, 600, 1, '2018-10-23 13:30:25'),
(12, 2, 440, 1, '2018-10-24 10:59:58'),
(13, 2, 600, 1, '2018-12-02 21:18:31'),
(14, 2, 600, 1, '2018-12-02 21:18:35'),
(15, 2, 600, 1, '2019-02-18 22:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `screen_id` int(11) NOT NULL,
  `screen_no` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`screen_id`, `screen_no`, `capacity`, `theatre_id`) VALUES
(1, 1, 120, 1),
(2, 2, 140, 1),
(3, 3, 120, 1),
(4, 1, 100, 2),
(5, 2, 120, 2),
(6, 1, 120, 4),
(7, 2, 120, 4);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `seat_name` varchar(255) NOT NULL,
  `is_reserved` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `screen_id`, `show_id`, `seat_name`, `is_reserved`) VALUES
(5, 5, 7, 'A6', 1),
(6, 5, 7, 'A7', 1),
(7, 5, 7, 'A11', 1),
(11, 2, 6, 'A1', 1),
(12, 2, 6, 'A2', 1),
(13, 2, 6, 'A3', 1),
(14, 4, 8, 'A8', 1),
(15, 4, 8, 'A9', 1),
(16, 1, 9, 'A10', 1),
(17, 1, 9, 'A11', 1),
(18, 1, 9, 'A11', 1),
(19, 1, 9, 'A12', 1),
(20, 1, 9, 'A1', 1),
(21, 4, 8, 'A2', 1),
(22, 5, 7, 'D10', 1),
(23, 5, 7, 'D11', 1),
(24, 1, 9, 'A4', 1),
(25, 1, 9, 'E12', 1),
(26, 3, 13, 'A10', 1),
(27, 3, 13, 'A11', 1),
(28, 3, 13, 'A12', 1),
(29, 4, 11, 'A2', 1),
(30, 4, 11, 'B2', 1),
(31, 1, 9, 'C1', 1),
(32, 1, 9, 'C2', 1),
(33, 1, 9, 'C3', 1),
(34, 1, 9, 'C1', 1),
(35, 1, 9, 'C2', 1),
(36, 1, 9, 'C3', 1),
(37, 1, 9, 'C1', 1),
(38, 1, 9, 'C2', 1),
(39, 1, 9, 'C3', 1),
(40, 5, 7, 'A4', 1),
(41, 5, 7, 'A5', 1),
(42, 5, 7, 'A4', 1),
(43, 5, 7, 'A5', 1),
(44, 1, 9, 'A2', 1),
(45, 1, 9, 'A3', 1),
(46, 1, 9, 'A4', 1),
(47, 1, 9, 'A2', 1),
(48, 1, 9, 'A3', 1),
(49, 1, 9, 'A4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `show_time` time NOT NULL,
  `show_date` date NOT NULL,
  `movie_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `show_time`, `show_date`, `movie_id`, `screen_id`, `theatre_id`, `price`, `is_deleted`) VALUES
(1, '03:00:00', '0000-00-00', 1, 1, 1, 200, 1),
(2, '04:30:00', '0000-00-00', 2, 2, 1, 180, 1),
(3, '03:30:00', '0000-00-00', 5, 5, 2, 200, 1),
(5, '05:20:00', '2018-09-02', 4, 6, 4, 160, 1),
(6, '05:45:00', '2018-10-20', 11, 2, 1, 200, 0),
(7, '08:15:00', '2018-10-20', 11, 5, 2, 220, 0),
(8, '06:20:00', '2018-09-21', 12, 4, 2, 200, 0),
(9, '05:50:00', '2018-09-29', 10, 1, 1, 200, 0),
(10, '07:10:00', '2018-10-22', 15, 1, 1, 180, 0),
(11, '09:30:00', '2018-10-21', 14, 4, 2, 140, 0),
(12, '06:45:00', '2018-10-21', 13, 6, 4, 120, 0),
(13, '10:15:00', '2018-10-22', 15, 3, 1, 220, 0);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int(11) NOT NULL,
  `theatre_name` varchar(255) NOT NULL,
  `theatre_city` varchar(255) NOT NULL,
  `theatre_loc` varchar(255) NOT NULL,
  `no_of_screens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatre_id`, `theatre_name`, `theatre_city`, `theatre_loc`, `no_of_screens`) VALUES
(1, 'PVR', 'THANE', 'MANPADA', 3),
(2, 'CINEMAX', 'KALYAN', 'KHADAKPADA', 2),
(4, 'CINEPOLIS', 'THANE', 'SANPADA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `show_id`, `payment_id`, `seat_id`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 9, 5, 20),
(4, 8, 6, 21),
(5, 7, 0, 22),
(6, 7, 0, 23),
(7, 9, 7, 24),
(8, 9, 7, 25),
(9, 13, 8, 26),
(10, 13, 8, 27),
(11, 13, 8, 28),
(12, 11, 9, 29),
(13, 11, 9, 30),
(14, 9, 10, 31),
(15, 9, 10, 32),
(16, 9, 10, 33),
(17, 9, 11, 31),
(18, 9, 11, 32),
(19, 9, 11, 33),
(20, 7, 12, 40),
(21, 7, 12, 41),
(22, 9, 13, 44),
(23, 9, 13, 45),
(24, 9, 13, 24),
(25, 9, 14, 44),
(26, 9, 14, 45),
(27, 9, 14, 24),
(28, 9, 15, 44),
(29, 9, 15, 45),
(30, 9, 15, 24);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`) VALUES
(1, 'poomahtani@gmail.com', 'pujamahtani'),
(2, 'chirag@gmail.com', 'chirag@123'),
(3, 'dhiraj@gmail.com', 'dhiraj@123'),
(4, 'karan@gmail.com', 'karan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`screen_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `screen`
--
ALTER TABLE `screen`
  MODIFY `screen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

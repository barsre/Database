-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 10:34 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating site`
--

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `like_id` int(6) NOT NULL,
  `like_to` varchar(60) NOT NULL,
  `like_from` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`like_id`, `like_to`, `like_from`) VALUES
(1, 'Natasha Romanova', 'Bruce Banner'),
(2, 'Gamora', 'Thor Odinson'),
(3, 'Natasha Romanova', 'Steve Rogers'),
(4, 'Tony Stark', 'Gamora'),
(5, 'Tony Stark', 'Natasha Romanova'),
(6, 'Natasha Romanova', 'Tony Stark'),
(7, 'Clint Barton', 'Tony Stark'),
(8, 'Clint Barton', 'Tony Stark'),
(9, 'Clint Barton', 'Tony Stark');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(6) NOT NULL,
  `message_from` varchar(60) NOT NULL,
  `message_to` varchar(60) NOT NULL,
  `mes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_from`, `message_to`, `mes`) VALUES
(1, 'Bruce Banner', 'Natasha Romanova', 'U wanna go out some day?'),
(2, 'Natasha Romanova', 'Bruce Banner', 'Ofcourse! We are freinds right?'),
(3, 'Bruce Banner', 'Natasha Romanova', 'Yes'),
(4, 'Bruce Banner', 'Natasha Romanova', 'We are freinds'),
(5, 'Thor Odinson', 'Tony Stark', 'There is not a lot of females on this page huh?'),
(6, 'Thor Odinson', 'Gamora', 'Hello there woman. I am the mighty Thor. Son of Odin and God of Thunder! Can get I get to meet you in person?'),
(7, 'Thor Odinson', 'Tony Stark', 'I found this green female. Now im just waiting for an answer.'),
(8, 'Tony Stark', 'Thor Odinson', 'Good luck with that.'),
(9, 'Thor Odinson', 'Gamora', 'Hello there woman. I am the mighty Thor. Son of Odin and God of Thunder!'),
(10, 'Thor Odinson', 'Tony Stark', 'I do not think her E mail is working.'),
(11, 'Bruce Banner', 'Tony Stark', 'I don\'t think Nat sees me as more than a freind.'),
(12, 'Tony Stark', 'Bruce Banner', 'I couldn\'t really care less.'),
(19, 'Tony Stark', 'Bruce Banner', 'Okay... im sorry'),
(20, 'Tony Stark', 'Gamora', 'Hey!'),
(21, 'Tony Stark', 'Bruce Banner', 'Plz.. big guy');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(6) NOT NULL,
  `name` varchar(60) NOT NULL,
  `alias` varchar(60) NOT NULL,
  `image` varchar(200) NOT NULL,
  `age` int(5) NOT NULL,
  `about` text NOT NULL,
  `power` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `name`, `alias`, `image`, `age`, `about`, `power`) VALUES
(1, 'Tony Stark', 'Iron Man', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/e/e9/Iron_Man_AIW_Profile.jpg/revision/latest/scale-to-width-down/350?cb=20180416145400', 33, 'Everything I\'ve done, everything I\'ll do today, everything I\'ll ever do, I do to protect this world. When I put on this armor, I took on more power than any human was ever intended to have... and maybe more responsibility than my heart can truly bear. But today. I will do my job. I will protect you. No matter what it takes.', 'Power Suit. Intelligens.'),
(2, 'Natasha Romanova', 'Black Widow', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/5/50/Black_Widow_AIW_Profile.jpg/revision/latest/scale-to-width-down/349?cb=20180416150130', 33, 'After everything that happened with S.H.I.E.L.D., during my little hiatus, I went back to Russia and tried to find my parents. Two little graves linked by a chain fence. I pulled some weeds and left some flowers. We have what we have when we have it.', 'Assassin'),
(3, 'Bruce Banner', 'The Hulk', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/c/c3/Hulk_AIW_Profile.jpg/revision/latest/scale-to-width-down/349?cb=20180416150258', 38, 'The angrier I get the stronger I get! I’m the strongest one there is! Hulk Smash!', 'Growing in size and gaining incredible strength, when angry.'),
(4, 'Clint Barton', 'Hawkeye', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/6/6f/CW_Textless_Shield_Poster_02.jpg/revision/latest/scale-to-width-down/350?cb=20180417151836', 32, 'Just can\'t seem to miss.', 'Good with bow and arrow.'),
(5, 'Thor Odinson', 'Thor', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/4/45/Thor_AIW_Profile.jpg/revision/latest/scale-to-width-down/349?cb=20180416145829', 1634, 'I choose to run towards my problems, and not away from them, because that\'s... because that\'s what heroes do.', 'God of thunder.'),
(6, 'Steven Rogers', 'Captain America', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/6/66/Captain_America_AIW_Profile.jpg/revision/latest/scale-to-width-down/349?cb=20180416145505', 99, 'This job... we try to save as many people as we can. Sometimes that doesn\'t mean everybody, but if we can\'t find a way to live with that, next time maybe nobody can be saved.', 'Enhanced strength, reflexes and skin.'),
(7, 'Gamora', 'Gamora', 'https://vignette.wikia.nocookie.net/marvelcinematicuniverse/images/6/61/Gamora_AIW_Profile.jpg/revision/latest/scale-to-width-down/349?cb=20180416150544', 27, 'I have spent most of my life surrounded by my enemies. I will be grateful to die among my friends.', 'Fighting skills');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `like_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

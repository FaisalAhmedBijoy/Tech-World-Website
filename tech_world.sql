-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 08:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech world`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CAT_ID` int(3) NOT NULL,
  `CAT_TITLE` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CAT_ID`, `CAT_TITLE`) VALUES
(1, 'Mobile'),
(2, 'Computer'),
(3, 'Laptop'),
(35, 'Graphics'),
(37, 'Hardware'),
(38, 'Games'),
(39, 'Operating Systems'),
(40, 'Windows'),
(41, 'Linux'),
(42, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_date`) VALUES
(8, 2, 'Faisal', 'faisal.cse16.kuet@gmail.com', 'Matha nosto', '2019-05-05'),
(9, 9, 'wo', 'wow@mail.com', 'wowowowoow', '2019-05-05'),
(10, 2, 'Mala', 'mala@gmail.com', 'she is very much beaututiful ever us seen', '2019-05-05'),
(11, 2, 'vdfvfdvd', 'faisal.cse16.kuet@gmail.com', 'vvsdvdsvsdv', '2019-05-05'),
(12, 2, 'vdfvfdvd', 'faisal.cse16.kuet@gmail.com', 'vvsdvdsvsdv', '2019-05-05'),
(13, 2, 'edcd', 'faisal.cse16.kuet@gmail.com', 'dcd', '2019-05-10'),
(14, 12, 'Faisal', 'faisal.cse16.kuet@gmail.com', 'Nice Girl ', '2019-05-12'),
(15, 16, 'Bijioy', 'abir@gmail.com', 'xnsaxnsajxnsxnsajxnjsa', '2019-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(2, 38, 'Start again Race again with Need For Speed Most Wanted', 'NFS corporation', '2019-04-16', 'download (4).jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?', 'NFS', 7, 'published', 46),
(9, 38, 'Winter is coming in PUBG', 'PUBG', '2019-05-04', 'download (2).jpg', '2012 was a great year for IPv6 – and now it’s time to continue building on that momentum.  Have you deployed IPv6 yet for your network(s)? Is your website accessible over IPv6?  Are your DNS entries available over IPv6?', 'PUBG', 10, 'published', 1),
(10, 1, 'Xiomi Note 7 Pro on the Market now', 'Xaomi ', '2019-05-04', '2pyM.png', 'Department of Computer Science and Engineering of KUET, started its academic activities from September 26, 1999 with the aim of quality education as well as cutting edge researches in the branches of Computer Science and Engineering. The department regularly offers postgraduate (M.Sc. and Ph.D.) and undergraduate (B.Sc.) programs. Only top ranked brilliant students are enrolled in this department through a competitive admission test. At present, yearly intake of this department is around 160 including 120 fixed undergraduate intakes. The department has well equipped different laboratories and a System Development Centre to increase the expertise of students practically along with theoretical knowledge', 'Xiomi', 10, '', 4),
(12, 1, 'Samsung A20 new Mobile only 15k', 'Samsung', '2019-05-11', '2lAY.jpg', 'This content is awesome  post ever i seen', 'samsung', 3, 'published', 2),
(13, 38, 'Assassin Creed in Stadia', 'Ubisoft', '2019-05-11', 'header.jpg', 'According to a reliable source, the colors in question are coral and blue - they will make way for new green and lavender-like shade. Interestingly, the renders that surfaced the other day show the handset in blue, yellow, white and red.\r\n\r\nIt\'s cool to see Apple departing from its boring black and white scheme even if it\'s only for its \"budget\" handset. We will see if the new green and lavender colors win over many iPhone buyers.', 'Ubisoft', 3, 'published', 2),
(14, 2, 'Microsoft new Computer in the Market', 'Microsoft', '2019-05-11', 'a5e69e8c-ce8e-4c44-bed9-62c5f93c5ad9_1.1cb03caf7d00a7581f0b74d96dea4578.jpeg', 'One of the key features of the iPhone XR is the wide range of bright colors and Apple is reportedly working on further improving that in its successor. Two new paint jobs will be coming to replace two of the current ones.', 'computer', 3, 'published', 0),
(15, 3, 'HP core i5 now 50L', 'HP', '2019-05-11', 'HP.jpg', 'One of the key features of the iPhone XR is the wide range of bright colors and Apple is reportedly working on further improving that in its successor. Two new paint jobs will be coming to replace two of the current ones.', 'HP', 3, 'published', 0),
(16, 35, 'Gigabyte-rx-570-aorus-4gb-graphics-card', 'Gigabyte', '2019-05-11', 'graphics.jpeg', 'Database Lab\r\n\r\n13 June : A1 & B1 First Project show \r\n\r\n16 June : A2 & B2 First Project show \r\n\r\n20 June: Lab Test \r\n\r\n23 June: Final Project show \r\n\r\n24 -27 June :  Lab Quiz\r\n', 'graphics', 6, 'published', 8),
(17, 37, 'Computer Hardwire', 'Microsoft', '2019-05-11', 'download (5).jpg', 'Database Lab\r\n\r\n13 June : A1 & B1 First Project show \r\n\r\n16 June : A2 & B2 First Project show \r\n\r\n20 June: Lab Test \r\n\r\n23 June: Final Project show \r\n\r\n24 -27 June :  Lab Quiz\r\n', 'Hardwire', 4, 'published', 4),
(18, 41, 'Linux Kali version release', 'Linux corporation', '2019-05-11', 'linux-penguin-security-100694867-large.jpg', 'Database Lab\r\n\r\n13 June : A1 & B1 First Project show \r\n\r\n16 June : A2 & B2 First Project show \r\n\r\n20 June: Lab Test \r\n\r\n23 June: Final Project show \r\n\r\n24 -27 June :  Lab Quiz\r\n', 'linux', 3, 'published', 0),
(19, 40, 'Windows 10 pro release', 'Microsoft', '2019-05-11', 'download (6).jpg', 'One of the key features of the iPhone XR is the wide range of bright colors and Apple is reportedly working on further improving that in its successor. Two new paint jobs will be coming to replace two of the current ones.', '10', 5, 'published', 3),
(20, 41, 'Google  Assistant Come soon', 'Dipto Sourav', '2019-05-13', '46244406_709846022728715_2484391315173801984_n.jpg', 'Google is a most tech giant Company in the world', 'Google', 0, 'draft', 0),
(21, 1, 'NFS Racing games', 'NFS corporation', '2019-05-13', 'images.jpg', '5G is expected to have a transformative effect on digital connectivity and power the rise of IoT devices, driverless cars, data transfer and the consumer tech of the future.', 'NFS', 0, 'draft', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_passward` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_passward`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `mobile_number`) VALUES
(1, 'Edwin', 'hhtrhtrh', 'Faisal', 'Faisal', 'faisal.cse16.kuet@gmail.com', '2.jpg', '01742177562'),
(2, 'police', 'KU', 'abir', 'abir', 'joy@gmail.com', '1041931_most-beautiful-girls-in-the-world-hd-pics_1280x1024_h.jpg', '01687650858'),
(4, 'tech boy', 'KUET', 'porosh', 'porosh', 'porosh@gmial.com', '43-shutterstock_212688532.jpg', ''),
(5, 'police', 'csdcds', 'Faisal', 'Faisal', 'faisal.cse16.kuet@gmail.com', '46497908_2458832264213295_2149741301854109696_n.jpg', ''),
(7, 'faisal', '01623155000', 'Faisal', 'Ahmed', 'faisal.cse16.kuet@gmail.com', 'faisal.jpg', ''),
(11, 'shajol', '016231', 'Shajol', 'Shajol', 'shajol@gmail.com', '50155025_2110821458956418_71118452194017280_n.jpg', ''),
(13, 'FABKUET', '01623155000', 'Faisal', 'Faisal', 'faisal.cse16.kuet@gmail.com', '49767938_768340023535000_1051849301950464000_n.jpg', '1623155000'),
(20, 'tech boy', 'fbdbfdbdf', 'Faisal', 'Ahmed', 'faisal.cse16.kuet@gmail.com', '48277970_2379087205710034_8916162260351582208_n.jpg', '1623155000'),
(21, 'Mr Khan', 'khan', 'Nain', 'Khan', 'khan@gmail.com', '', '01742042042'),
(22, 'Yamin', 'khan', 'yamin', 'Khan', 'khan@gmail.com', '', '01687650858'),
(23, 'saikan', 'suman', 'suman', 'ahmed', 'suman@gmail.com', '', '0174164655');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CAT_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

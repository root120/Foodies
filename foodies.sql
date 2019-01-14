-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 03:52 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `ow_id` int(11) NOT NULL,
  `ow_name` varchar(100) NOT NULL,
  `ow_email` varchar(100) NOT NULL,
  `ow_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`ow_id`, `ow_name`, `ow_email`, `ow_password`) VALUES
(1, 'shuvo', 'shuvo@domain.com', '123456'),
(2, 'steve', 'steve@mail.com', '12232242'),
(3, 'tareq', 't@t.com', '243vbgf');

-- --------------------------------------------------------

--
-- Table structure for table `restaurents`
--

CREATE TABLE `restaurents` (
  `res_id` int(4) NOT NULL,
  `owner_id` int(6) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `res_desc` text NOT NULL,
  `res_address` text NOT NULL,
  `res_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurents`
--

INSERT INTO `restaurents` (`res_id`, `owner_id`, `res_name`, `res_desc`, `res_address`, `res_image`) VALUES
(1, 1, 'bhujon bari restaurant', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Address: Jallarpar Road, Zindabazar, Sylhet', 'res1.jpg'),
(2, 2, 'woondaal restaurant', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Address:Purbo-Zindabazar, Sylhet', 'res4.jpg'),
(5, 3, 'Dingee Restaurant', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Address:Amborkhana, Sylhet', '278655a1b05bbdc377.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `Id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`Id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Foysol', 'Shuvo', 'foysolahmedshuvo@gmail.com', '63a9f0ea7bb98050796b649e85481845'),
(2, 'Towhidul', 'Islam', 'towhidulislam1234@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(3, 'priojeet', 'priyom', 'priojeet333@gmail.com', '123456'),
(4, 'Shafayet Ahmed', 'Hridoy', 'abc@gmail.com', 'abcd'),
(5, 'juman', 'Ahmed', 'juman@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Islam', 'Rafat', 'foysolahmedshuv@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_posts`
--

CREATE TABLE `tbl_user_posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_posts`
--

INSERT INTO `tbl_user_posts` (`post_id`, `user_id`, `post`, `image`, `date`) VALUES
(8, 5, 'test', '0', '2017-11-29 06:12:37'),
(2, 1, 'this is 2nd post', '275885a1d09930f53b.jpg', '2017-11-29 05:18:19'),
(3, 1, 'khana chara jibon chole na . Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '485a1d0b8336ed8.jpg', '0000-00-00 00:00:00'),
(4, 1, 'Aij Exam vala oise .. ', '257695a1d1ad3c4907.jpg', '0000-00-00 00:00:00'),
(6, 5, 'asdasdsad', '0', '2017-11-29 05:56:32'),
(7, 5, '', '176465a1e413876937.jpg', '2017-11-29 06:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `users_posts`
--

CREATE TABLE `users_posts` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `post` text NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_posts`
--

INSERT INTO `users_posts` (`id`, `user_id`, `post`, `post_img`, `date`) VALUES
(1, 2, 'sdfsdf', 'img_name', '2017-11-15 05:17:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`ow_id`);

--
-- Indexes for table `restaurents`
--
ALTER TABLE `restaurents`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_user_posts`
--
ALTER TABLE `tbl_user_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users_posts`
--
ALTER TABLE `users_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `ow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `restaurents`
--
ALTER TABLE `restaurents`
  MODIFY `res_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user_posts`
--
ALTER TABLE `tbl_user_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_posts`
--
ALTER TABLE `users_posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

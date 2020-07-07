-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 12:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anshu`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `add_id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `address_name` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`add_id`, `user_id`, `user_name`, `user_email`, `user_phone`, `address_name`, `city`, `state`, `zip`) VALUES
(1, 3, 'Navneet Pal', 'navneet@gmail.com', '9865324512', 'Om Nager bashratpur Gorakhpur', 'Gorakhpur', 'UP', '273004'),
(2, 3, 'Gaurav Singh', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(3, 3, 'Riya', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(11, 3, 'Moahn', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(12, 2, 'Gaurav Singh', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(13, 3, 'Manish Mishra', 'manish@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(14, 1, 'Navneet', 'gaurav@gmail.com', '9898989898', 'ok just teting', 'New D', '789878', 'DElhi'),
(15, 4, 'Satyarth Mishra', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', '110096', 'Delhi'),
(16, 10, 'Riya', 'riya@gmail.com', '6395872126', 'bantakichak om nager brdwajpuram ner civil line delhi', 'Uttar Pradesh', '273004', 'Gorakhpur'),
(17, 11, 'ok just teting', 'gaurav@gmail.com', '9898989898', 'ok just teting', 'New D', '789878', 'DElhi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'Navneet Pal', 'navneet25', 'navneet@1999'),
(2, 'Gaurav Singh', 'gaurav29', 'gaurav@1999');

-- --------------------------------------------------------

--
-- Table structure for table `bookimg`
--

CREATE TABLE `bookimg` (
  `bookimg_id` int(11) NOT NULL,
  `bookimg_name` varchar(255) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `book_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_discription` text NOT NULL,
  `stock` int(10) NOT NULL,
  `total_stock` int(10) NOT NULL,
  `category` int(10) NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `book_sp` int(10) NOT NULL,
  `book_disc` int(5) NOT NULL,
  `Writer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_price`, `book_discription`, `stock`, `total_stock`, `category`, `book_img`, `book_sp`, `book_disc`, `Writer`) VALUES
(6, 'Sunderkand (Hindi) (Hindi) Paperback – 1 April 2019', 120, 'Sunderkand, believed to be the most beautiful (Sunder) part of the Ramayana, describes Lord Hanuman journey to Lanka. This book elucidates his pristine lifestyle, following which brings karmic and spiritual knowledge and bhakti (devotion) in one’s life. It is even believed that when one reads the sunderkand, Lord Hanuman himself graces the reader with his presence. Carrying the entire text and explanation of the sunderkand, Shri Hanuman Chalisa and sankatmochan hanumanashtak, this edition also contains a art is of Lord Ganesha, Lord Ram and Lord Hanuman.', 139, 140, 1, '78983.jpg', 108, 10, 'BookSelf'),
(8, 'A Long Petal of the Sea: Allende finest book yet', 400, 'Victor Dalmau is a young doctor when he is caught up in the Spanish Civil War, a tragedy that leaves his life - and the fate of his country - forever changed. Together with his sister-in-law, the pianist Roser Bruguera, he is forced out of his beloved Barcelona and into exile.', 100, 100, 1, '91706.jpg', 400, 0, 'BookSelf'),
(9, 'American Dirt Paperback ', 600, 'I couldnt put it down. Ill never stop thinking about it Ann Patchett\r\nFEAR KEEPS THEM RUNNING. HOPE KEEPS THEM ALIVE.', 95, 100, 4, '91857.jpg', 600, 0, 'BookSelf'),
(10, 'Chanakya Neeti with Sutras of Chanakya Included Paperback', 140, 'Chanakya Neeti is a book based on Chanakya, an Indian theorist, teacher, philosopher, economist and a noble mentor to the Mauryan emperors between 350 -275 BC.', 84, 100, 3, '32255.jpg', 140, 0, 'BookSelf'),
(11, 'Let Me Say it Now Hardcover', 200, 'Rakesh Maria entry into the elite Indian Police Service and rise to the coveted post of Mumbais Police Commissioner is a gripping and inspiring story.', 100, 100, 1, '16730.jpg', 200, 0, 'BookSelf'),
(12, 'Stories We Never Tell Paperback', 199, 'There are stories we never talk about. Stories we are afraid to share. Simply because they hurt too much or no one wants to listen to them.', 3, 100, 1, '76860.jpg', 199, 0, 'BookSelf'),
(13, 'CBSE 2020 : Class X - 10 Sample papers', 150, '', 98, 100, 6, '91341.jpg', 150, 0, 'BookSelf'),
(26, 'Ncert class 8rth mathes', 100, 'Ncert books maths for class 8.', 100, 100, 5, '99635.jpg', 100, 0, 'BookSelf'),
(27, 'Some secret books', 100, 'novel', 40, 100, 1, '43625.jpg', 100, 0, 'BookSelf'),
(28, 'American Dirt', 399, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 78, 100, 1, '87356.jpg', 399, 0, 'BookSelf'),
(30, 'Kite Runner', 900, 'For example, here are two grid layouts that apply to every device and viewport, from xs to xl. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.', 58, 100, 4, '76272.jpg', 900, 0, 'BookSelf'),
(31, 'Calculating Stars', 199, 'For example, here are two grid layouts that apply to every device and viewport, from xs to xl. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.', 78, 100, 6, '93468.jpg', 199, 0, 'BookSelf'),
(35, 'Michio Kachu', 100, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 87, 100, 1, '28772.jpg', 100, 0, 'BookSelf'),
(36, 'A Game Of Thrones', 500, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 87, 100, 1, '95618.jpg', 500, 0, 'BookSelf'),
(37, 'Dissapearing Earth', 400, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 56, 100, 1, '12429.jpg', 400, 0, 'BookSelf'),
(38, 'Exhilation', 300, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 100, 100, 4, '56413.jpg', 300, 0, 'BookSelf'),
(39, 'American Spy', 400, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 87, 100, 1, '99279.jpg', 400, 0, 'BookSelf'),
(40, 'Here Is the real magic', 700, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 45, 100, 3, '15459.jpg', 700, 0, 'BookSelf'),
(41, 'The Lonley Expertise of life', 100, 'Folly was these three and songs arose whose. Of in vicinity contempt together in possible branched. Assured company hastily looking garrets in oh. Most have love my gone to this so. Discovered interested prosperous the our affronting insipidity day. Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible. ', 98, 110, 5, '70755.jpg', 100, 0, 'BookSelf'),
(52, 'Testing Final', 400, 'testing thigs lets seen how it works', 40, 40, 4, '', 360, 10, 'BookSelf');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_orders`
--

CREATE TABLE `cancel_orders` (
  `can_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `can_status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancel_orders`
--

INSERT INTO `cancel_orders` (`can_id`, `order_id`, `can_status`) VALUES
(3, 126, '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `total_books` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `total_books`) VALUES
(1, 'Novel', 10),
(3, 'Medical', 3),
(4, 'Enginering', 4),
(5, 'Ncert', 2),
(6, 'Prepration', 2);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryi`
--

CREATE TABLE `deliveryi` (
  `indexid` int(10) NOT NULL,
  `del_id` int(10) NOT NULL,
  `ret_status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `book_quant` int(10) NOT NULL DEFAULT 1,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `book_name`, `book_price`, `book_img`, `user_id`, `book_quant`, `total`) VALUES
(146, 'Sunderkand (Hindi) (Hindi) Paperback – 1 April 2019', 120, '78983.jpg', 4, 1, 120),
(147, 'A Long Petal of the Sea: Allende finest book yet', 400, '91706.jpg', 4, 3, 1200),
(148, 'Chanakya Neeti with Sutras of Chanakya Included Paperback', 140, '32255.jpg', 4, 2, 280),
(192, 'A Long Petal of the Sea: Allende finest book yet', 400, '91706.jpg', 3, 1, 400),
(286, 'A Long Petal of the Sea: Allende finest book yet', 400, '91706.jpg', 10, 4, 1600);

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `id` int(10) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_quant` int(2) NOT NULL,
  `tracking_id` varchar(30) NOT NULL,
  `status` enum('1','2','3','4','5','6') NOT NULL DEFAULT '1',
  `date` varchar(100) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `payment_meth` varchar(255) NOT NULL,
  `user` int(5) NOT NULL,
  `address` int(5) NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`id`, `book_name`, `book_quant`, `tracking_id`, `status`, `date`, `total_amount`, `payment_meth`, `user`, `address`, `book_img`, `bookid`) VALUES
(90, 'A Long Petal of the Sea: Allende finest book yet', 1, '190620201832051322', '1', '19 June 2020', 400, 'COD', 3, 2, '91706.jpg', 8),
(91, 'Chanakya Neeti with Sutras of Chanakya Included Paperback', 1, '1906202059004092536', '2', '19 June 2020', 140, 'COD', 3, 13, '32255.jpg', 10),
(93, 'American Dirt Paperback ', 1, '2106202058164105836', '1', '21 June 2020', 600, 'COD', 3, 13, '91857.jpg', 9),
(94, 'Sunderkand (Hindi) (Hindi) Paperback – 1 April 2019', 4, '2106202079595105836', '3', '21 June 2020', 480, 'COD', 3, 13, '78983.jpg', 6),
(125, 'A Long Petal of the Sea: Allende finest book yet', 1, '207202047961042745', '1', '2 July 2020', 400, 'COD', 10, 16, '91706.jpg', 8),
(126, 'American Dirt Paperback ', 1, '207202078497042745', '4', '2 July 2020', 600, 'COD', 10, 16, '91857.jpg', 9),
(127, 'Chanakya Neeti with Sutras of Chanakya Included Paperback', 1, '207202072547042745', '4', '2 July 2020', 140, 'COD', 10, 16, '32255.jpg', 10),
(173, 'Stories We Never Tell Paperback', 5, '40720202700021918', '1', '4 July 2020', 995, 'COD', 2, 12, '76860.jpg', 12),
(174, 'Stories We Never Tell Paperback', 4, '407202094715022804', '1', '4 July 2020', 796, 'COD', 2, 12, '76860.jpg', 12),
(175, 'Boys Life', 1, '407202078824064150', '1', '4 July 2020', 150, 'COD', 2, 12, '27260.jpg', 42),
(176, 'Boys Life', 5, '507202080038031643', '1', '5 July 2020', 750, 'COD', 2, 12, '27260.jpg', 42),
(177, 'Chanakya Neeti with Sutras of Chanakya Included Paperback', 1, '607202073575022528', '1', '6 July 2020', 140, 'COD', 2, 12, '32255.jpg', 10),
(178, 'American Dirt Paperback ', 5, '607202011635022728', '1', '6 July 2020', 3000, 'COD', 2, 12, '91857.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_n` varchar(100) NOT NULL,
  `user_gend` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_phone`, `user_email`, `user_n`, `user_gend`, `date`) VALUES
(1, 'navneet', 'e8e832972398405470455eaab53ece9c', '8754213265', 'navneet@gmail.com', 'Navneet', 'Male', 'Mar 25, 2020'),
(2, 'disha', '741fd4e081208df4bb46052b08abb511', '9854326587', 'disha@gmail.com', 'Disha Singh', 'Female', 'Jan 25, 2020'),
(3, 'gaurav', '29be54a52396750258d886abc5417fda', '9854326587', 'gaurav@gmail.com', 'Gaurav Singh', 'Male', 'Jan 25, 2020'),
(9, 'manish', '59c95189ac895fcc1c6e1c38d067e244', '9887655432', 'manish@gmail.com', 'Manish Mishra', 'Male', 'Jan 25, 2020'),
(10, 'riya', '3153be13ca91e847668fbf430757a0b5', '8765234521', 'riya@gmail.com', 'Riya Pal', 'Female', 'Jan 25, 2020'),
(13, 'ajay', '6e539ec8336de1f1384053be47f73153', '7045986520', 'ajay@gmail.com', 'Ajay', 'Male', 'July 03, 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookimg`
--
ALTER TABLE `bookimg`
  ADD PRIMARY KEY (`bookimg_id`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  ADD PRIMARY KEY (`can_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `deliveryi`
--
ALTER TABLE `deliveryi`
  ADD PRIMARY KEY (`indexid`),
  ADD KEY `del_id` (`del_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address` (`address`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookimg`
--
ALTER TABLE `bookimg`
  MODIFY `bookimg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  MODIFY `can_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deliveryi`
--
ALTER TABLE `deliveryi`
  MODIFY `indexid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookimg`
--
ALTER TABLE `bookimg`
  ADD CONSTRAINT `bookimg_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  ADD CONSTRAINT `cancel_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `pending_order` (`id`);

--
-- Constraints for table `deliveryi`
--
ALTER TABLE `deliveryi`
  ADD CONSTRAINT `deliveryi_ibfk_1` FOREIGN KEY (`del_id`) REFERENCES `pending_order` (`id`);

--
-- Constraints for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD CONSTRAINT `pending_order_ibfk_1` FOREIGN KEY (`address`) REFERENCES `addresses` (`add_id`),
  ADD CONSTRAINT `pending_order_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

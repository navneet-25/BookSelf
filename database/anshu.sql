-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 07:23 PM
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
(10, 3, 'Riya', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(11, 3, 'Moahn', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(12, 2, 'Gaurav Singh', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(13, 3, 'Manish Mishra', 'manish@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', 'Delhi', '110096'),
(14, 1, 'Navneet', 'gaurav@gmail.com', '9898989898', 'ok just teting', 'New D', '789878', 'DElhi'),
(15, 4, 'Satyarth Mishra', 'gaurav@gmail.com', '8896455261', 'B320 Sangam Gali near Rajput genral store', 'New Delhi', '110096', 'Delhi');

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
(1, 'Navneet', 'navneet25', 'navneet@1999'),
(2, 'Gaurav', 'gaurav29', 'gaurav@1999');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `book_name` longtext NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_discription` text NOT NULL,
  `stock` int(10) NOT NULL,
  `category` int(10) NOT NULL,
  `book_img` varchar(255) NOT NULL,
  `book_sp` int(10) NOT NULL,
  `book_disc` int(5) NOT NULL,
  `Writer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_price`, `book_discription`, `stock`, `category`, `book_img`, `book_sp`, `book_disc`, `Writer`) VALUES
(6, 'Sunderkand (Hindi) (Hindi) Paperback – 1 April 2019', 120, 'Sunderkand, believed to be the most beautiful (Sunder) part of the Ramayana, describes Lord Hanuman journey to Lanka. This book elucidates his pristine lifestyle, following which brings karmic and spiritual knowledge and bhakti (devotion) in one’s life. It is even believed that when one reads the sunderkand, Lord Hanuman himself graces the reader with his presence. Carrying the entire text and explanation of the sunderkand, Shri Hanuman Chalisa and sankatmochan hanumanashtak, this edition also contains a art is of Lord Ganesha, Lord Ram and Lord Hanuman.', 100, 1, '78983.jpg', 0, 0, ''),
(8, 'A Long Petal of the Sea: Allende finest book yet', 400, 'Victor Dalmau is a young doctor when he is caught up in the Spanish Civil War, a tragedy that leaves his life - and the fate of his country - forever changed. Together with his sister-in-law, the pianist Roser Bruguera, he is forced out of his beloved Barcelona and into exile.', 50, 1, '91706.jpg', 0, 0, ''),
(9, 'American Dirt Paperback ', 600, 'I couldnt put it down. Ill never stop thinking about it Ann Patchett\r\nFEAR KEEPS THEM RUNNING. HOPE KEEPS THEM ALIVE.', 25, 4, '91857.jpg', 0, 0, ''),
(10, 'Chanakya Neeti with Sutras of Chanakya Included Paperback', 140, 'Chanakya Neeti is a book based on Chanakya, an Indian theorist, teacher, philosopher, economist and a noble mentor to the Mauryan emperors between 350 -275 BC.', 90, 3, '32255.jpg', 0, 0, ''),
(11, 'Let Me Say it Now Hardcover', 200, 'Rakesh Maria entry into the elite Indian Police Service and rise to the coveted post of Mumbais Police Commissioner is a gripping and inspiring story.', 50, 1, '16730.jpg', 0, 0, ''),
(12, 'Stories We Never Tell Paperback', 199, 'There are stories we never talk about. Stories we are afraid to share. Simply because they hurt too much or no one wants to listen to them.', 20, 1, '76860.jpg', 0, 0, ''),
(13, 'CBSE 2020 : Class X - 10 Sample papers', 150, '', 100, 6, '91341.jpg', 0, 0, ''),
(25, 'ok2', 10, '', 10, 1, '', 0, 0, '');

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
(1, 'Novel', 5),
(3, 'Medical', 1),
(4, 'Enginering', 1),
(5, 'Ncert', 0),
(6, 'Prepration', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `tracking_id` int(30) NOT NULL,
  `delivery_date` varchar(100) NOT NULL,
  `status` enum('1','2','3') NOT NULL
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
(165, 'American Dirt Paperback ', 600, '91857.jpg', 3, 3, 1800),
(166, 'CBSE 2020 : Class X - 10 Sample papers', 150, '91341.jpg', 3, 5, 750);

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `id` int(10) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_quant` int(2) NOT NULL,
  `tracking_id` varchar(30) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '1',
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
(67, 'Sunderkand (Hindi) (Hindi) Paperback – 1 April 2019', 1, '1306202093308125050', '1', '13 June 2020', 120, 'COD', 2, 12, '78983.jpg', 6),
(68, 'A Long Petal of the Sea: Allende finest book yet', 1, '1306202089359125050', '1', '13 June 2020', 400, 'COD', 2, 12, '91706.jpg', 8),
(69, 'American Dirt Paperback ', 1, '1306202013829125050', '1', '13 June 2020', 600, 'COD', 2, 12, '91857.jpg', 9),
(70, 'A Long Petal of the Sea: Allende finest book yet', 1, '1306202012511125220', '1', '13 June 2020', 400, 'COD', 2, 12, '91706.jpg', 8),
(71, 'American Dirt Paperback ', 1, '1306202060365125423', '1', '13 June 2020', 600, 'COD', 3, 1, '91857.jpg', 9),
(72, 'CBSE 2020 : Class X - 10 Sample papers', 1, '1306202014589125423', '1', '13 June 2020', 150, 'COD', 3, 1, '91341.jpg', 13),
(73, 'Stories We Never Tell Paperback', 1, '1306202016058125423', '1', '13 June 2020', 199, 'COD', 3, 1, '76860.jpg', 12),
(74, 'A Long Petal of the Sea: Allende finest book yet', 3, '1306202030971125513', '1', '13 June 2020', 1200, 'COD', 3, 10, '91706.jpg', 8);

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
  `user_n` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_phone`, `user_email`, `user_n`) VALUES
(1, 'navneet25', 'navneet', '8754213265', 'navneet@gmail.com', 'Navneet'),
(2, 'disha', 'disha', '9854326587', 'disha@gmail.com', 'Disha Singh'),
(3, 'gaurav', 'gaurav', '9854326587', 'gaurav@gmail.com', 'Gaurav Singh'),
(4, 'satyarth', 'satyarth', '9832659832', 'satyarth@gmail.com', 'Satyarth Mishra');

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
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

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
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`cat_id`);

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

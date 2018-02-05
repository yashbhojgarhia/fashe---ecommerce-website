-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 10:20 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_author`, `blog_name`, `blog_content`, `blog_image`) VALUES
(7, 'slkng', 'sdlk', 'Limitations of the xml Data Type\r\nThe following limitations apply to the xml data type:\r\n\r\nCannot be used as a subtype of a sql_variant instance\r\nDoes not support casting or converting to either text or ntext.\r\nDoes not support the following column and table constraints: \r\nPRIMARY KEY/ FOREIGN KEY\r\nUNIQUE\r\nCOLLATE\r\nXML provides its own encoding. Collations apply to string types only. The xml data type is not a string type. However, it does have string representation and allows casting to and from string data types.\r\nRULE\r\nCannot be compared or sorted. This means an xml data type cannot be used in a GROUP BY statement.\r\nCannot be used in Distributed Partitioned Views. \r\nIt can be created in a materialized view. The materialized view cannot be based on an xml data type method. However, it can be cast to an XML schema collection that is different from the xml type column in the base table.\r\nCannot be used as a parameter to any scalar, built-in functions other than ISNULL, COALESCE, and DATALENGTH.\r\nCannot be used as a key column in an index. However, it can be included as data in a clustered index or explicitly added to a nonclustered index by using the INCLUDE keyword when the nonclustered index is created.\r\nThe XML de', 'meric-tuna-186605.jpg'),
(9, 'R. Ashwin', 'Tips For Effective Farming', 'Limitations of the xml Data Type\r\nThe following limitations apply to the xml data type:\r\n\r\nCannot be used as a subtype of a sql_variant instance\r\nDoes not support casting or converting to either text or ntext.\r\nDoes not support the following column and table constraints: \r\nPRIMARY KEY/ FOREIGN KEY\r\nUNIQUE\r\nCOLLATE\r\nXML provides its own encoding. Collations apply to string types only. The xml data type is not a string type. However, it does have string representation and allows casting to and from string data types.\r\nRULE\r\nCannot be compared or sorted. This means an xml data type cannot be used in a GROUP BY statement.\r\nCannot be used in Distributed Partitioned Views. \r\nIt can be created in a materialized view. The materialized view cannot be based on an xml data type method. However, it can be cast to an XML schema collection that is different from the xml type column in the base table.\r\nCannot be used as a parameter to any scalar, built-in functions other than ISNULL, COALESCE, and DATALENGTH.\r\nCannot be used as a key column in an index. However, it can be included as data in a clustered index or explicitly added to a nonclustered index by using the INCLUDE keyword when the nonclustered index is created.', 'PNAhaar-Plant_Nutrition-Vanproz_large.jpg'),
(10, 'Y. Rao', 'Disease: Prevention &  Cure', 'The API describes and prescribes the expected behavior (a specification) while the library is an actual implementation of this set of rules. A single API can have multiple implementations (or none, being abstract) in the form of different libraries that share the same programming interface. The separation of the API from its implementation can allow programs written in one language to use a library written in another. For example, because Scala and Java compile to compatible bytecode, Scala developers can take advantage of any Java API.', 'kayleigh-harrington-418544.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `crop_name` varchar(255) NOT NULL,
  `crop_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`crop_name`, `crop_price`) VALUES
('A', 10),
('B', 20),
('C', 30),
('D', 40),
('E', 50);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_user_id` int(11) NOT NULL,
  `cart_prod_id` int(11) NOT NULL,
  `cart_prod_count` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_user_id`, `cart_prod_id`, `cart_prod_count`) VALUES
(1, 6, 1),
(19, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(19, 'Fertilizers'),
(20, 'Tools'),
(21, 'Plant Nutrition'),
(22, 'Seeds'),
(23, 'Plant Protection');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `cat_prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_count` int(11) NOT NULL,
  `prod_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `cat_prod_id`, `prod_name`, `prod_price`, `prod_count`, `prod_image`) VALUES
(5, 21, 'Nutribuild silicon', 265, 5, 'PNnutribuild-silicon.jpg'),
(6, 23, 'Barrix Catch Fly Trap', 452, 5, 'PPbarrix-catch-vegetable-fly-trap_large.jpg'),
(7, 23, 'Barrix Control', 365, 5, 'PPbarrix-control_large.jpg'),
(8, 23, 'Catch Fruit Fly', 125, 5, 'PPcrop-solutions-barrix-catch-fruit-fly-lure-1_large_9a8d8cfa-d26d-46ad-bb28-73c0481904a9_large.jpg'),
(9, 23, 'Dupont Cauliflower', 56, 5, 'SeedsDupont_Pioneer_25p35_Paddy_seeds_grande_485e4959-4264-4b33-b0c5-7f477c5fc1fb_large.jpg'),
(10, 22, 'Sysngenta', 96, 5, 'SeedsSyngenta_1522_Cauliflower_Seeds_74006ff9-d56e-4abe-9078-6b5e9280e289_large.jpg'),
(11, 24, 'njbhjbj', 58, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_number` varchar(10) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_number`, `user_password`, `user_role`) VALUES
(1, 'Yash', 'Bhojgarhia', '9523055670', 'batman', 'user'),
(19, 'Arun', 'Bhojgarhia', '9693831576', 'superman', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`crop_name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

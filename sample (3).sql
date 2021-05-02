-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2021 at 10:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `buy` int(11) NOT NULL DEFAULT 0,
  `done` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cust_name`, `org_name`, `prod_name`, `price`, `quantity`, `cust_email`, `buy`, `done`) VALUES
(1, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'AWESOME BOOK', 0, 2, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(2, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'AWESOME BOOK', 0, 2, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(10, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'A diary of a wimpy kid', 0, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(11, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'A diary of a wimpy kid', 0, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(12, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'A diary of a wimpy kid', 0, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(13, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'A Thousand splendid suns', 500, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(14, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'Why we sleep', 350, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(15, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'A Thousand splendid suns', 1500, 3, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(16, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>96</b><br />\r\n', 'Preeti krishnaveni', 'Sapiens', 300, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 0, 0),
(18, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>98</b><br />\r\n', 0, 0),
(31, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>98</b><br />\r\n', 0, 0),
(32, '<br />\r\n<b>Notice</b>:  Undefined index: cust_name in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>97</b><br />\r\n', 'Pranav', 'Book', 1500, 3, '<br />\r\n<b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/sample/sec.php</b> on line <b>98</b><br />\r\n', 0, 0),
(60, 'adfasfd', 'Pranav', 'Book', 2000, 4, 'lfgjjk@asdf.com', 1, 0),
(83, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 1, 0),
(84, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 1, 0),
(85, 'Pranav', 'Preeti krishnaveni', 'A Thousand splendid suns', 1500, 3, 'bmspr1502@gmail.com', 1, 0),
(86, 'Pranav', 'Preeti krishnaveni', 'AWESOME BOOK', 345, 1, 'bmspr1502@gmail.com', 1, 0),
(87, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 1, 0),
(88, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 0, 0),
(89, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 0, 0),
(90, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 0, 0),
(91, 'Pranav', 'Pranav', 'Book', 500, 1, 'bmspr1502@gmail.com', 0, 0),
(92, 'Pranav', 'Pranav', 'Book', 500, 1, 'bmspr1502@gmail.com', 0, 0),
(93, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 0, 0),
(94, 'Pranav', 'Pranav', 'Book', 500, 1, 'bmspr1502@gmail.com', 0, 0),
(95, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 0, 0),
(96, 'adfasfd', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'lfgjjk@asdf.com', 1, 0),
(98, 'adfasfd', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'lfgjjk@asdf.com', 0, 0),
(99, 'adfasfd', 'Preeti krishnaveni', 'AWESOME BOOK', 345, 1, 'lfgjjk@asdf.com', 0, 0),
(100, 'Pranav', 'Preeti krishnaveni', 'A diary of a wimpy kid', 200, 1, 'bmspr1502@gmail.com', 0, 0),
(101, 'Pranav', 'Preeti krishnaveni', 'Slammed', 300, 1, 'bmspr1502@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `times` timestamp NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `cust_name`, `org_name`, `comment`, `times`, `sender`, `receiver`) VALUES
(54, 'Pranav', 'Preeti krishnaveni', 'Hey, I Want to know more about this book', '2021-05-02 07:50:07', 'Pranav', 'Preeti krishnaveni'),
(55, 'Pranav', 'Preeti krishnaveni', 'Hi, This book is really nice', '2021-05-02 07:50:52', 'Preeti krishnaveni', 'Pranav'),
(56, 'Pranav', 'Preeti krishnaveni', 'Thank You for the information', '2021-05-02 07:51:50', 'Pranav', 'Preeti krishnaveni'),
(57, 'Pranav', 'Preeti krishnaveni', 'Your welcome', '2021-05-02 07:52:18', 'Preeti krishnaveni', 'Pranav'),
(58, 'Pranav', 'Preeti krishnaveni', 'hey', '2021-05-02 07:52:44', 'Pranav', 'Preeti krishnaveni'),
(59, 'Pranav', 'Pranav', 'Hi I would like to have this book', '2021-05-02 07:53:51', 'Pranav', 'Pranav'),
(60, 'Pranav', 'Pranav', 'hey Yeah sure', '2021-05-02 07:57:15', 'Pranav', 'Pranav'),
(61, 'adfasfd', 'Pranav', 'Hi, I would Like to have this book', '2021-05-02 07:57:45', 'adfasfd', 'Pranav');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `cvv` int(11) NOT NULL,
  `choice1` int(11) NOT NULL DEFAULT 0,
  `choice2` int(11) NOT NULL DEFAULT 0,
  `choice3` int(11) NOT NULL DEFAULT 0,
  `choice4` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `email`, `cust_name`, `password`, `account`, `cvv`, `choice1`, `choice2`, `choice3`, `choice4`) VALUES
(1, 'lfgjjk@asdf.com', 'adfasfd', 'dsfasdfsAF', 'ASDFASDFASDF', 233, 1, 2, 0, 0),
(2, 'bmspr1502@gmail.com', 'Pranav', '123456', 'asdf;lkjasdfkljasdf;lkj', 233, 1, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `org_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `months` int(11) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `turnover` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `visibility` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`org_id`, `email`, `org_name`, `password`, `months`, `instagram`, `turnover`, `description`, `visibility`) VALUES
(1, 'bmspr1502@gmail.com', 'Preeti krishnaveni', 'asdf', 3, 'aD', 'between 3000 to 6000 Rupees', 'adfafgfg', 0),
(3, 'yolo@gmail.com', 'Preti krishnaveni', 'asdfsdfa', 3, 'aD', 'between 3000 to 6000 Rupees', 'adfafgfg', 0),
(8, 'preetikrishnaveni19@gmail.com', 'Pranav', '123456', 3, 'www.google.com', 'between 6000 to 10000 Rupees', 'hey ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `org_name`, `price`, `description`, `category`, `image`, `instagram`) VALUES
(36, 'light_yagami19  ', 'Preeti krishnaveni', 123, 'This is an earring ', 1, 'earring.jpg', 'www.google.com'),
(37, 'AWESOME BOOK', 'Preeti krishnaveni', 345, 'this is a second hand book', 4, 'the-immortals-of-meluha-by-amish-tripathi.jpeg', 'www.google.com'),
(38, 'Bubbles', 'Preeti krishnaveni', 300, 'This is a earring', 1, 'ear.jpeg', 'www.google.com'),
(39, 'necklace', 'Preeti krishnaveni', 308, 'This is a type of necklace', 1, 'neck.jpeg', 'www.google.com'),
(40, 'awesome necklace ', 'Preeti krishnaveni', 234, 'this is an awesome necklace', 1, 'neck2.jpeg', 'www.google.com'),
(41, 'Bracelet', 'Preeti krishnaveni', 100, 'This is a bracelet', 1, 'brace.jpeg', 'www.google.com'),
(42, 'Bracelet awesome', 'Preeti krishnaveni', 150, 'This is an awesome bracelet', 1, 'brace2.jpeg', 'www.google.com'),
(43, 'BASKET', 'Preeti krishnaveni', 130, 'Hey this is a basket for sale', 2, 'hand1.jpeg', 'www.google.com'),
(44, 'BASKET AWESOME', 'Preeti krishnaveni', 170, 'This is an AWESOME basket', 2, 'hand2.jpeg', 'www.google.com'),
(45, 'BASKET3', 'Preeti krishnaveni', 300, 'This is a type 3 basket', 2, 'hand3.jpeg', 'www.google.com'),
(46, 'Basket4', 'Preeti krishnaveni', 123, 'This is a type 4 basket', 2, 'hand4.jpeg', 'www.google.com'),
(47, 'BASKET5', 'Preeti krishnaveni', 500, 'This is a type 5 basket', 2, 'hand5.jpeg', 'www.google.com'),
(48, 'BASKET6', 'Preeti krishnaveni', 450, 'This is a type 6 basket', 2, 'hand6.jpeg', 'www.google.com'),
(49, 'A diary of a wimpy kid', 'Preeti krishnaveni', 200, 'THis is an awesome book', 4, 'book2.jpeg', 'www.google.com'),
(50, 'Sapiens', 'Preeti krishnaveni', 300, 'THis is an awesome book', 4, 'book3.jpeg', 'www.google.com'),
(51, 'Why we sleep', 'Preeti krishnaveni', 350, 'This is an awesome book', 4, 'book4.jpeg', 'www.google.com'),
(52, 'A Thousand splendid suns', 'Preeti krishnaveni', 500, 'This is an awesome book do read', 4, 'book5.jpeg', 'www.google.com'),
(53, 'Alchemist', 'Preeti krishnaveni', 450, 'THis is an awesome book', 4, 'book6.jpeg', 'www.google.com'),
(54, 'Book', 'Pranav', 500, 'This is a book', 4, 'book6.jpeg', 'heyy'),
(55, 'sff', 'Pranav', 123, 'this is something', 1, 'ear.jpeg', 'www.google.com'),
(56, 'aklsdg;jg', 'Pranav', 123, 'wqefaasdvfasdfasd', 2, 'earring.jpg', 'www.google.com'),
(57, 'aklsdg;jg', 'Pranav', 123, 'wqefaasdvfasdfasd', 2, 'earring.jpg', 'www.google.com'),
(58, 'aklsdg;jg', 'Pranav', 123, 'wqefaasdvfasdfasd', 2, 'earring.jpg', 'www.google.com'),
(59, 'aklsdg;jg', 'Pranav', 345, 'helloo', 1, 'ear.jpeg', 'www.google.com'),
(60, 'hey', 'Preeti krishnaveni', 234, 'asdfasjdfkl;adsfjas;kldkjsdhfa', 3, 'brace2.jpeg', 'www.google.com'),
(61, 'Slammed', 'Preeti krishnaveni', 300, 'this is a book', 4, 'slammed.jpg', 'www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cust_name` (`cust_name`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`org_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `org_name` (`org_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

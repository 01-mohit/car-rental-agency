-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2022 at 10:12 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15249375_hostmini`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `password`) VALUES
(1, 'Mohit ', 'hmohit05683@gmail.com', 'mohit@dbms'),
(2, 'Mayur', 'mayur@gmail.com', 'mohit@dbms'),
(4, 'abcd', 'asd@gmail.com', 'ahdyfj'),
(17, 'asd', 'php@gmail.com', '741'),
(19, 'mohit', 'hmohit083@gmail.com', 'whe'),
(20, 'Mohit ', 'hmoh83@gmail.com', '754'),
(21, 'Pankaj', 'pankaj@gmail.com', 'p1234'),
(23, 'Unknown', 'xyz@gmail.com', 'xyz'),
(24, 'Abhishek Lale', 'abhisheklale181@gmail.com', '1234'),
(25, 'Vk', 'Vk@gmail.com', '1234'),
(26, 'Gaurav Khungar', 'gaurav@gmail.com', '12345'),
(27, 'Rucha', 'Rucha@gmail.com', 'rucha@1'),
(28, 'psm', 'psm@gmail.com', 'holahola'),
(29, 'abc', 'abc@gmail.com', '147852'),
(30, 'Pooja', 'pooja@gmail.com', '123'),
(31, 'saurabh Solanke', 'saurabh.solanke@gmail.com', 'mohitpass'),
(32, 'rucha', 'ruchali@gmail.com', 'rucha@1'),
(33, 'Rb', 'rb@gma.com', '123456'),
(34, 'uknow', 'uknowme@gmail.com', '12345'),
(35, 'Abhishek', 'abhi@gmail.com', '123456'),
(37, 'Amar', 'amar@gmail.com', 'amar'),
(38, 'Mohit ', 'hmoh803@gmail.com', '803'),
(39, 'Ajay', 'ajaypsoni1509@gmail.com', '123456789'),
(40, 'Hdfc', 'hdfc@gmail.com', 'hdfc'),
(41, 'Qwer', 'varun@gmail.com', '1234'),
(42, 'Pradhuman Pramod kondawar', 'pradhumankondawar45@gmail.com', 'pradhuman123'),
(43, 'Violet Whitaker', 'zejykohak@mailinator.com', 'Pa$$w0rd!'),
(44, 'abc', 'abc@def.com', 'abc'),
(45, 'Ismail shareef ', 'ismailshareef164@gmail.com', '12345'),
(46, 'mohit', 'hargemohit@gmail.com', '1234'),
(47, 'az', 'az@email.com', 'az'),
(48, 'Sopan Avdhutwar', 'avdhutwarvinita123@gmail.com', 'Vinita@27'),
(49, 'Brynn Morton', 'jenypuwu@tor.com', 'Pa$$w0rd!'),
(50, 'Aretha Campbell', '1@gmail.com', '123456'),
(51, 'akshay ', 'Ak@gmail.com`', 'Ak@1123456'),
(52, 'rana', 'rana@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_name` varchar(220) DEFAULT NULL,
  `product_description` varchar(300) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `payment_mode` varchar(220) DEFAULT NULL,
  `order_status` varchar(220) DEFAULT 'Shipped'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_name`, `product_description`, `product_price`, `product_quantity`, `payment_mode`, `order_status`) VALUES
(1, NULL, 'keyboard', 'backlight,numeric', 752, 2, 'on', 'Shipped'),
(2, NULL, 'keyboard', 'backlight,numeric', 752, 2, 'on', 'Shipped'),
(3, NULL, 'SSD', '256gb', 8000, 1, 'on', 'Shipped'),
(4, NULL, 'SSD', '256gb', 8000, 1, 'on', 'Shipped'),
(5, NULL, 'SSD', '256gb', 8000, 1, 'on', 'Shipped'),
(6, NULL, 'SSD', '256gb', 8000, 1, 'on', 'Shipped'),
(7, NULL, 'SSD', '256gb', 8000, 1, 'on', 'Shipped'),
(8, NULL, 'Laptop', '16.5 inch', 75000, 1, 'on', 'Shipped'),
(9, NULL, 'CPU', 'intel i7 10th gen', 64000, 12, 'on', 'Shipped'),
(10, NULL, 'mouse', 'wireless', 800, 1, 'on', 'Shipped'),
(11, NULL, 'mouse', 'wireless', 800, 1, 'on', 'Shipped'),
(12, NULL, 'keyboard', 'backlight,numeric', 450, 11, 'on', 'Shipped'),
(13, NULL, 'charger', '150w', 6000, 1, 'on', 'Shipped'),
(14, 17, 'Laptop', 'intel i7 10th gen', 84000, 4, 'on', 'Shipped'),
(15, 17, 'keyboard', 'backlight,numeric', 574, 1, 'on', 'Shipped'),
(16, 17, 'keyboard', 'backlight,numeric', 574, 1, 'on', 'Shipped'),
(17, 2, 'Laptop', 'intel i7 10th gen', 125000, 1, 'on', 'Shipped'),
(18, 2, 'keyboard', 'logitech bluetooth ', 400, 1, 'on', 'Shipped'),
(19, 1, 'SSD', '256gb', 15000, 1, 'on', 'Shipped'),
(20, 1, 'keyboard', 'backlight,numeric', 1200, 1, 'on', 'Shipped'),
(21, 1, 'mouse', 'wireless', 500, 1, 'on', 'Shipped'),
(22, 1, 'keyboard', 'wireless', 1500, 5, 'on', 'Shipped'),
(23, 1, 'SSD', '256gb', 4678, 2, 'Net Banking', 'Shipped'),
(24, 1, 'Laptop', 'intel i7 10th gen', 84000, 1, 'Debit/Credit Card', 'Shipped'),
(25, 1, 'SSD', '256gb', 4000, 1, 'UPI', 'Shipped'),
(26, 1, 'CPU', 'intel i7 10th gen', 45000, 1, 'Cash on delivary', 'Shipped'),
(27, 1, 'CPU', 'intel i7 10th gen', 45000, 1, 'Cash on delivary', 'Shipped'),
(28, 21, 'Laptop', 'intel i5 8th gen', 54000, 1, 'Net Banking', 'Shipped'),
(29, 1, 'charger', 'type-c,30w', 750, 1, 'UPI', 'Shipped'),
(30, 20, 'Laptop', 'intel i7 10th gen', 95000, 1, 'Debit/Credit Card', 'Shipped'),
(31, 4, 'SSD', '256gb', 4500, 1, 'Net Banking', 'Shipped'),
(32, 4, 'Laptop', 'intel i7 10th gen', 94000, 1, 'Debit/Credit Card', 'Shipped'),
(33, 23, 'keyboard', 'backlight,numeric', 600, 1, 'Cash on delivary', 'Shipped'),
(34, 23, 'charger', 'type-c,30w', 640, 1, 'Net Banking', 'Shipped'),
(35, 24, 'Laptop', 'i5 10th', 12000, 2, 'Debit/Credit Card', 'Shipped'),
(36, 24, 'Laptop', 'i5 10th', 12000, 1, 'Debit/Credit Card', 'Shipped'),
(37, 25, 'Item 1', 'Black colour ', 99, 2, 'Cash on delivary', 'Shipped'),
(38, 28, 'dsfasgf', 'sgfsdf', 12425, 25, 'UPI', 'Shipped'),
(39, 30, 'iphone', '12pro', 52000, 1, 'Cash on delivary', 'Shipped'),
(40, 28, 'new', 'yo', 2346, 1, 'Cash on delivary', 'Shipped'),
(41, 29, 'laptop', 'i5 core', 50000, 1, 'Cash on delivary', 'Shipped'),
(42, 29, 'pen', 'black color', 50, 10, 'UPI', 'Shipped'),
(43, 30, 'iphone', '12', 50000, 2, 'Debit/Credit Card', 'Shipped'),
(44, 26, 'Pen', 'Blue', 20, 2, 'UPI', 'Shipped'),
(45, 31, 'iPhone', 'Apple iPhone 12 Pro , 512 GB, Midnight blue  ', 160000, 1, 'Debit/Credit Card', 'Shipped'),
(46, 26, 'Pencil', 'HB', 5, 10, 'Net Banking', 'Shipped'),
(47, 31, 'iPhone', 'Apple iPhone 12 Pro , 512 GB, Midnight blue  ', 160000, 1, 'Debit/Credit Card', 'Shipped'),
(48, 33, 'Monitor', 'Nonr', 1000, 1, 'Cash on delivary', 'Shipped'),
(49, 33, 'Mac', 'Aal', 4666, 2, 'UPI', 'Shipped'),
(50, 34, '2222', '222', 2222, 22, 'Cash on delivary', 'Shipped'),
(51, 37, 'mouse', 'wireless', 1200, 1, 'Debit/Credit Card', 'Shipped'),
(52, 39, 'Aj', 'Mohit ne double bola isliye', 1, 1, 'Cash on delivary', 'Shipped'),
(53, 39, 'Aj', 'Mohit ne bola isliye', 1, 1, 'Cash on delivary', 'Shipped'),
(54, 40, 'charger', 'wireless', 54, 4, 'Net Banking', 'Shipped'),
(55, 40, 'CPU', 'intel i7 10th gen', 54488, 1, 'Debit/Credit Card', 'Shipped'),
(56, 41, 'CPU', 'type-c,30w', 45415, 1, 'UPI', 'Shipped'),
(57, 41, 'SSD', '256gb', 45, 1, 'Net Banking', 'Shipped'),
(58, 43, 'Kermit Shaffer', 'Dakota Barrett', 262, 32, 'Debit/Credit Card', 'Shipped'),
(59, 43, 'Mara Hart', 'Nita Hester', 426, 505, 'Cash on delivary', 'Shipped'),
(60, 43, 'Alika Durham', 'Devin Mason', 473, 997, 'Debit/Credit Card', 'Shipped'),
(61, 44, 'abc', 'def', 123, 111, 'Net Banking', 'Shipped'),
(62, 45, 'Laptop', '8GB ram', 10, 100, 'Cash on delivary', 'Shipped'),
(63, 45, 'Laptop', '8GB ram', 12, 100, 'Cash on delivary', 'Shipped'),
(64, 45, 'Laptop', '8GB ram', 45, 5, 'Debit/Credit Card', 'Shipped'),
(65, 46, 'af', 'advs', 42, 374, 'Cash on delivary', 'Shipped'),
(66, 46, 'Thane Guzman', 'Kamal Cooper', 94, 454, 'Net Banking', 'Shipped'),
(67, 48, 'Pendrive', 'Pendrive', 500, 500, 'Debit/Credit Card', 'Shipped'),
(68, 43, 'Lester Collins', 'Montana Cobb', 810, 87, 'Debit/Credit Card', 'Shipped'),
(69, 43, 'Fatima Fox', 'Mariam Goodman', 753, 994, 'Cash on delivary', 'Shipped'),
(70, 50, 'Raphael Holloway', 'Brooke Hammond', 13, 706, 'Net Banking', 'Shipped'),
(71, 50, 'Nicholas Kim', 'Shafira Lucas', 205, 191, 'Debit/Credit Card', 'Shipped'),
(72, 52, 'vffvfvfv', 'fff', 12, 9, 'Debit/Credit Card', 'Shipped'),
(73, 52, 'rrr', 'rrrr', 14446, 543, 'Debit/Credit Card', 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE `t1` (
  `names` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`names`, `city`, `mobile_no`) VALUES
('mohit', 'nanded', 9156355901),
('jay', 'pune', 8875499824),
('yash', 'aurangabad', 8875499825),
('yash', 'delhi', 8775499825),
('Mayur Harge', 'NANDED', 9665216382),
('mayur', 'abad', 9096082050),
('abcd', 'purna', 9156355901);

-- --------------------------------------------------------

--
-- Table structure for table `t2`
--

CREATE TABLE `t2` (
  `NAME` varchar(30) DEFAULT NULL,
  `BRANCH` varchar(30) DEFAULT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`NAME`, `BRANCH`, `CITY`, `EMAIL`) VALUES
('Mohit', 'CSE', 'NANDED', 'hmohit05683@gmail.com'),
('Mayur', 'ETC', 'Aurangabad', 'mayur@gmail.com'),
('Jay', 'ETC', 'Pune', 'jay@gmail.com'),
('Nikhil', 'CSE', 'Nanded', 'nik@gmail.com'),
('Pranav', 'Mech', 'Pune', 'pranav@gmail.com'),
('Rahul', 'Civil', 'Mumbai', 'rahul@gmail.com'),
('Yash', 'IT', 'Hydrabad', 'yash@gmail.com'),
('Ajay', 'CSE', 'Nagpur', 'aj@gmail.com'),
('Akshay', 'IT', 'Pune', 'akshay@gmail.com'),
('Akshay', 'IT', 'Pune', 'akshay@gmail.com'),
('Akshay', 'IT', 'Pune', 'akshay@gmail.com'),
('Vinayak', 'CSE', 'Aurangabad', 'vinayak@gmail.com'),
('Shubham', 'Civil', 'Aurangabad', 'shubham@gmail.com'),
('Ram', 'ETC', 'Pune', 'ram@gmail.com'),
('Parag', 'CSE', 'Delhi', 'parag@gmail.com'),
('Om', 'IT', 'Pune', 'on@gmail.com'),
('Virat', 'Mech', 'Mumbai', 'virat@gmil.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

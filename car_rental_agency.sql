-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 11:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_booking`
--

CREATE TABLE `car_booking` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `days_to_rent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_booking`
--

INSERT INTO `car_booking` (`id`, `agency_id`, `user_name`, `user_id`, `vehicle_id`, `start_date`, `days_to_rent`) VALUES
(21, 1, 'Ferris Walters', 2, 43, '2022-03-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `token` varchar(256) NOT NULL,
  `role` int(11) NOT NULL,
  `agency_name` text NOT NULL,
  `signup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `token`, `role`, `agency_name`, `signup_date`) VALUES
(1, 'Nicole', 'Salazar', 'abc@gmail.com', 2147483647, '$2y$10$9VVtfc1LkvF3ShYEsxcHauid/rYSnUqmS0bgUfPpjtWfZh5iMPVcC', '631cca627e93e0a5833c76730f89e846', 1, 'Sed aut ea id anim s', '2022-04-04'),
(2, 'Ferris', 'Walters', 'mh@gmail.com', 2147483647, '$2y$10$O6J9XcIwGmX1FQ1xnRHbXe39yA44UO/aYN8m/yFTEMSEnSGTvonDa', '5be5e5c1c1fd66436ae4c56d9881d663', 0, '', '2022-04-04'),
(3, 'Fletcher', 'Ray', 'winudero@cc.com', 1258458736, '$2y$10$9VYT3wxqh54ZAjR.QD29heRetqrVxN4KUuVUfQ08BehCCRRm/YaoW', '82c053891446cbf6d7b5588a4b30642f', 0, '', '2022-04-04'),
(4, 'Mohit', 'Harge', 'hargemohit@gmail.com', 2147483647, '$2y$10$R.jb87oNZ4bBu0OHXZdn1Ol4h6uQPHGXll07e6S5QoUn//A2suveu', '5f37540fd66a7ee0feb1d5a90553e467', 1, 'Bookyourcar', '2022-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `vehicle_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `vehicle_model` varchar(256) NOT NULL,
  `vehicle_number` varchar(256) NOT NULL,
  `seating_capacity` int(11) NOT NULL,
  `rent_per_day` int(11) NOT NULL,
  `booking_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`vehicle_id`, `users_id`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `booking_status`) VALUES
(33, 4, 'Toyota Innova Crysta', 'MH2608A25', 8, 20000, ''),
(34, 1, 'Mahindra Marazzo', 'MH02785', 6, 18000, ''),
(35, 1, 'Honda City', 'MH268600', 4, 1200, ''),
(36, 4, 'Lexus LX', 'MH0255A', 5, 18000, ''),
(37, 1, 'Tata Punch', 'MH854412', 5, 1400, ''),
(38, 1, 'Maruti Baleno', 'MH6011584', 5, 1450, ''),
(39, 1, 'Hyundai Creta', 'MH062587', 6, 1840, ''),
(40, 1, 'Honda City 4th Generation', 'MH845598', 8, 15400, ''),
(41, 1, 'Hyundai Venue', 'AP02887', 4, 1400, ''),
(42, 1, 'Kia Seltos', 'RJ501556', 8, 25000, ''),
(43, 1, 'Tata Nexon', 'MH265587', 5, 1800, 'booked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_booking`
--
ALTER TABLE `car_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_booking`
--
ALTER TABLE `car_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

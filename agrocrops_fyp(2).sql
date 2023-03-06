-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 05:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrocrops_fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `phone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `image`, `phone`) VALUES
(1, 'admin@gmail.com', '1234', 'akhtar', 'cover_1631874359cover.jpg', '384798327409328743');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `seller_id` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `contact_no` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `category_id` text DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `seller_id`, `name`, `contact_no`, `city`, `location`, `title`, `description`, `image`, `price`, `category_id`, `status`, `date`) VALUES
(6, '16', 'Akhtar', '34567890', 'Sahiwal', 'ef', 'new', ' mbdsajhbdkjbfsc', '2231464-helicopterandplanecrash-1633176891-785-640x480.jpg', '100', '2', 'aprove', 'Sat-11-2022'),
(7, '16', 'Akhtar', '34567890', 'swl', 'Sahiwal', 'new2', ' ,nksndksan', '2230667-giraffesocialx-1632989922-203-640x480.jpg', '400', '2', 'aprove', 'Sat-11-2022'),
(8, '16', 'Akhtar', '34567890', 'Sahiwal1', 'area', 'new product', '  sajbdjasbcjsabckjsa', '2231457-gold-1633175631-443-640x480.jpg', '32', '2', 'aprove', 'Sat-11-2022'),
(9, '16', 'Akhtar', '34567890', 'hkjh', 'nasvdb', 'nhgvg', ' hvjhvjhvhj', '2231464-helicopterandplanecrash-1633176891-785-640x480.jpg', '100', '2', 'aprove', 'Wed-11-2022'),
(10, '16', 'Akhtar', '34567890', 'hkjh', 'nasvdb', 'nhgvg', ' hvjhvjhvhj', '2231464-helicopterandplanecrash-1633176891-785-640x480.jpg', '100', '2', 'aprove', 'Wed-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`, `image`) VALUES
(2, 'product2', 'Sat-11-2022', '2231464-helicopterandplanecrash-1633176891-785-640x480.jpg'),
(4, 'new', 'Thu-01-2023', 'pop.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Akhtar', 'ahmad@gmail.com', '4543535', ' kjb;ikjb;kj'),
(2, 'Akhtar', 'ahmad@gmail.com', '4543535', ' kjb;ikjb;kj'),
(3, 'shahid', 'shahid@gmail.com', '9819283284', ' m b;kj'),
(4, 'shahid', 'shahid@gmail.com', '9819283284', ' m b;kj'),
(5, 'Bilal', 'workwox@gmail.com', '9819283284', ' .kjblkjblkjlkjnblkj'),
(6, 'shahid', 'shahid@gmail.com', '9819283284', ' kjb;kj'),
(7, 'shahid', 'shahid@gmail.com', '9819283284', ' jblkjhbljhblj'),
(8, 'aghane rfsdc hassan', 'shahid@gmail.com', '9819283284', 'mbdmsan cmnsd bcnmds cmns cnmsd cmdsn cnmds cnmds c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(17) NOT NULL,
  `role_as` tinyint(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `city` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `created_at`, `image`, `phone`, `city`) VALUES
(4, 'Liaqat Ali', 'shabeer', 'yasirshabeer915@gmail.com', '1234', 0, '2022-11-05 11:36:03', '2230767-shaikhabdulrehmanalsani-1633015672-813-640x480.jpg', '45678324', 'swl'),
(8, 'Akhtar', 'shabeer', 'ahmad@gmail.com', '1234', 0, '2022-11-05 11:46:45', '2231321-ramizraja-1633154285-433-640x480.jpg', '4543535', 'sahiwal'),
(11, 'MYAHFGHS', 'dfdgfg', 'dhfjdhj@hhh', '1234', 0, '2022-10-21 12:33:20', NULL, NULL, NULL),
(12, 'yasir', 'shabeer', 'yasirshabeer812@gmai.com', '1234', 1, '2022-10-21 15:52:48', NULL, NULL, NULL),
(13, 'it', 'me yasir', 'itsmeyasir@gmail.com', '1234', 0, '2022-10-21 15:43:56', NULL, NULL, NULL),
(14, 'yasir', 'yasir', 'yasir@gmil.com', '1234', 0, '2022-10-21 16:02:44', NULL, NULL, NULL),
(15, 'MYAHFGHS', 'dfdgfg', 'andj@sd', '1234', 0, '2022-10-22 04:36:35', NULL, NULL, NULL),
(16, 'akhtar ak', 'ali  ak', 'akhtarkathia32@gmail.com', '1234', 0, '2022-11-05 11:45:08', '2231321-ramizraja-1633154285-433-640x480.jpg', '324567', 'Sahiwal'),
(17, 'Akhtar', '', 'admin@gmail.com', '', 0, '2022-11-16 16:51:16', '2231321-ramizraja-1633154285-433-640x480.jpg', NULL, NULL),
(18, 'Akhtar', '', 'admin@gmail.com', '', 0, '2022-11-16 13:56:57', NULL, NULL, NULL),
(19, ' ahmad waqas', '', 'ahmadwaqas@gmail.com', '1234', 0, '2023-01-05 14:04:17', NULL, NULL, NULL),
(20, 'aghane rfsdc', 'hassan', 'shahid@gmail.com', '1234', 0, '2023-01-04 12:38:07', NULL, NULL, NULL),
(21, 'aghane rfsdc', 'hassan', 'Akhtar', '1234', 0, '2023-01-05 12:20:17', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

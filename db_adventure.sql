-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 05:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'sokdara', 123, '@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adventure`
--

CREATE TABLE `tbl_adventure` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `point` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `type_product` varchar(50) NOT NULL,
  `des` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_adventure`
--

INSERT INTO `tbl_adventure` (`pro_id`, `pro_name`, `img`, `size`, `point`, `price`, `type_product`, `des`) VALUES
(32, 'shoes', 'shoes4.webp', 'Small (36)', 12, 20, 'Sale', 'This is shoes'),
(40, 'shoes', 'Wide Hiking Boots.webp', 'Large (42)', 120, 20, 'New Product', 'This is shoes'),
(42, 'shoes', 'shoes3.webp', 'Large (42)', 9, 60, 'Discount 10%', 'this is shoes'),
(43, 'shoes', '2b2956a90bf7ccd54d858a70073be9a0553336b1_750x.webp', 'Small (36)', 120, 20, 'New Product', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `pro_id` int(11) NOT NULL,
  `pro_menu` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `point` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`pro_id`, `pro_menu`, `img`, `size`, `price`, `point`) VALUES
(40, '40', 'backpack4.webp', 'Medium (38-40)', 20, 120),
(43, '41', 'backpack1.png', 'Medium (38-40)', 20, 120),
(44, '41', 'backpack.6webp.jpg', 'Small (36)', 20, 10),
(45, '32', 'backpack2.webp', 'Medium (38-40)', 20, 9),
(46, '42', 'Wide Hiking Boots.webp', 'Extra Large (44-46)', 70, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'sokdara', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-11-11 10:07:57'),
(2, 'sokdara', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-11-11 10:08:25'),
(3, 'sokdara', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-11-11 10:08:38'),
(4, 'sokdara', 'user@gmail.com', '698d51a19d8a121ce581499d7b701668', '2023-11-11 10:13:19'),
(5, 'sokma', 'user@gmail.com', '698d51a19d8a121ce581499d7b701668', '2023-11-11 10:48:21'),
(6, 'Akemi_hasar', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-11-11 10:50:21'),
(7, 'sokdara', 'user@gmail.com', '698d51a19d8a121ce581499d7b701668', '2023-11-11 10:59:28'),
(8, 'sokdara', 'mengsokchea031504@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-11-11 11:02:22'),
(9, 'sokdara', 'user@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-11 11:02:57'),
(10, 'sokdara', 'mengsokchea031504@gmail.com', '698d51a19d8a121ce581499d7b701668', '2023-11-11 13:04:10'),
(11, 'Mengsokchea031504@gamil.com', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-12-14 08:16:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_adventure`
--
ALTER TABLE `tbl_adventure`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_adventure`
--
ALTER TABLE `tbl_adventure`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

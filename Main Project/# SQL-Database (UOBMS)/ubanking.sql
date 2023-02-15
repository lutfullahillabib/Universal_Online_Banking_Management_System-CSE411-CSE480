-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 09:28 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aid` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `bid` text NOT NULL,
  `bmail` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `name`, `contact`, `address`, `bid`, `bmail`, `email`, `pass`, `active`) VALUES
(5, 'Sonali Bank', '01521569950', '44 Motijheel Commercial Area, Dhaka-1000', '42346293857693', 'sonalibank@ubbl.com', 'sonalibank@gmail.com', 'b5303027c61e1eeca0547b63786fda35', 1),
(6, 'Rupali Bank', '01521569950', '34 Dilkusha C/A, Dhaka-1000', '93874562389475', 'rupalibank@ubbl.com', 'rupalibank@gmail.com', '5c6b444995b6c3ba32ff36429c3d60e4', 1),
(7, 'Janata Bank', '01345678912', '110 Motijheel Commercial Area, Dhaka 1000', '93745623978456', 'janatabank@ubbl.com', 'janatabank@gmail.com', '154310f0d56c3d6f1484281b0f4dd545', 1),
(8, 'Agrani Bank', '01518641840', '9/D Dilkusha Commercial Area,\r\nDhaka - 1000', '23487239487298', 'agranibank@ubbl.com', 'agranibank@gmail.com', '77bb943c0ecce5a672240c90c1c132f7', 1),
(9, 'Pubali Bank', '01521326125', '26, Dilkusha Commercial Area\r\nDhaka , Dhaka 1000', '49238756384752', 'pubalibank@ubbl.com', 'pubalibank@gmail.com', '56bac6df02d88d54b73de80d367636f9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `admin` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `admin`, `pass`) VALUES
(1, 'super-admin', 'a2aa56ae8d0a2e574474a0a7bbe30cb5');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `acc` text NOT NULL,
  `bank` text NOT NULL,
  `amount` int(11) NOT NULL,
  `type` text NOT NULL,
  `acc2` text DEFAULT NULL,
  `bank2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `name`, `acc`, `bank`, `amount`, `type`, `acc2`, `bank2`) VALUES
(2, 'Shamimatul Shopnil', '1294837799', 'Rupali Bank', 100, 'withdraw', NULL, NULL),
(3, 'Shamimatul Shopnil', '1294837799', 'Rupali Bank', 10000, 'deposit', NULL, NULL),
(5, 'Md. Lutfullahil Labib', '3266747851', 'Rupali Bank', 100000, 'deposit', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `gender` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `nid` text NOT NULL,
  `bank` text NOT NULL,
  `acc` text NOT NULL,
  `balance` int(12) NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL,
  `pass` text NOT NULL,
  `pin` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `gender`, `contact`, `address`, `nid`, `bank`, `acc`, `balance`, `email`, `image`, `pass`, `pin`, `active`) VALUES
(17, 'Md. Lutfullahil Labib', 'Male', '01911302979', 'Madartek, Bashabo', '5535099997', 'Rupali Bank', '3266747851', 105000, 'labib@gmail.com', '3266747851.jpg', 'af1899c421dad48bd05db2ecf7f078ea', '1234', 1),
(18, 'Al-Amin Islam Hridoy', 'Male', '01521326125', 'Madartek, Bashabo', '5535099997', 'Janata Bank', '2342245191', 0, 'hridoy@gmail.com', '2342245191.jpg', '0c76cc3086de205450c6dd45508da08d', '1234', 0),
(19, 'Tanbin Siddique Eidul', 'Male', '01521569950', 'Bashabo, Dhaka', '5535099997', 'Agrani Bank', '4192199557', 0, 'eidul@gmail.com', '4192199557.jpg', '0a26cc832d2461658a20bd22b8f6e657', '1234', 0),
(20, 'Shamimatul Shopnil', 'Female', '01334567890', 'sdfsDf,sDfsDF', '5535099997', 'Rupali Bank', '1294837799', 5200, 'shopnil@gmail.com', '1294837799.jpg', 'eb023fa6f3ad872f4befbb0ac0ef09d4', '1234', 1),
(23, 'Wonder Woman', 'Female', '01345678912', 'abdsdsf', '23452345234523', 'Janata Bank', '1883385667', 0, 'ww@gmail.com', '1883385667.jpg', '00d77e81978562335f99e09f9d8caaf5', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

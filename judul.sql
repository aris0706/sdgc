-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 08:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judul`
--

-- --------------------------------------------------------

--
-- Table structure for table `child01`
--

CREATE TABLE `child01` (
  `id` int(11) NOT NULL,
  `id_list1` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child01`
--

INSERT INTO `child01` (`id`, `id_list1`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'menjaga toilet tetap bersih', '2018-09-09 06:18:41', '2018-09-08 23:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `child02`
--

CREATE TABLE `child02` (
  `id` int(11) NOT NULL,
  `id_child01` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child02`
--

INSERT INTO `child02` (`id`, `id_child01`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'buku', '2018-09-08 22:02:31', '2018-09-08 22:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `child03`
--

CREATE TABLE `child03` (
  `id` int(11) NOT NULL,
  `id_child02` int(11) NOT NULL,
  `title` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child03`
--

INSERT INTO `child03` (`id`, `id_child02`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'buku', '2018-09-08 22:02:31', '2018-09-08 22:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `list1`
--

CREATE TABLE `list1` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list1`
--

INSERT INTO `list1` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'kebersihan', '2018-09-09 06:08:18', '2018-09-08 23:08:18'),
(2, 'pensil', '2018-09-08 22:24:32', '2018-09-08 22:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'aris', 'aris@gmail.com', '$2y$10$oScIcAfgz4arKDE/JJBOX.wavxCRvDM2E5evctKAXdHb/ayx7I4Ta', NULL, '2018-09-08 21:45:28', '2018-09-08 21:45:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child01`
--
ALTER TABLE `child01`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child02`
--
ALTER TABLE `child02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child03`
--
ALTER TABLE `child03`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list1`
--
ALTER TABLE `list1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `child01`
--
ALTER TABLE `child01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child02`
--
ALTER TABLE `child02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child03`
--
ALTER TABLE `child03`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list1`
--
ALTER TABLE `list1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

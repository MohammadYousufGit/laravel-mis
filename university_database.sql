-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 01:08 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_cities`
--

CREATE TABLE `master_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_engtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_fartitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_cities`
--

INSERT INTO `master_cities` (`id`, `city_engtitle`, `city_fartitle`, `district_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'afaf', 'lhl', 4, 1, '2018-04-23 04:42:09', '2018-04-23 04:42:09'),
(3, 'Dehmazang', 'دهمزنگ', 4, 1, '2018-04-23 04:51:34', '2018-04-23 04:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `master_districts`
--

CREATE TABLE `master_districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_engtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_fartitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_districts`
--

INSERT INTO `master_districts` (`id`, `district_engtitle`, `district_fartitle`, `province_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alingar', 'Alingar', 1, 1, '2018-04-22 00:45:51', '2018-04-22 00:45:51'),
(2, 'shakardara', 'شکردره', 4, 1, '2018-04-22 00:46:03', '2018-04-23 00:12:39'),
(3, 'asdf', 'asdf', 9, 1, '2018-04-22 06:29:18', '2018-04-22 06:29:18'),
(4, 'Surobi', 'سروبی', 4, 1, '2018-04-23 00:04:38', '2018-04-23 00:04:38'),
(5, 'Guldara', 'گل دره', 4, 1, '2018-04-23 00:15:18', '2018-04-23 00:15:18'),
(6, 'Kabul city', 'شهر کابل', 4, 1, '2018-04-23 04:52:00', '2018-04-23 04:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_provinces`
--

CREATE TABLE `master_provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `province_engtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_fartitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_provinces`
--

INSERT INTO `master_provinces` (`id`, `province_engtitle`, `province_fartitle`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laghman', 'لغمان', 1, '2018-04-18 02:46:02', '2018-04-21 05:21:50'),
(4, 'Kabul', 'کابل', 1, '2018-04-18 04:56:11', '2018-04-21 05:21:58'),
(5, 'Takhar', 'تخا', 1, '2018-04-18 04:59:09', '2018-04-21 05:22:06'),
(7, 'Kunar', 'کنرها', 1, '2018-04-18 05:20:30', '2018-04-22 23:56:49'),
(9, 'Badakhshan', 'بدخشان', 1, '2018-04-18 05:20:39', '2018-04-22 23:57:31'),
(10, 'Logar', 'لوگر', 1, '2018-04-18 05:20:43', '2018-04-23 00:14:27'),
(11, 'asdf', 'asdf', 0, '2018-04-18 05:20:48', '2018-04-18 05:20:48'),
(15, 'شسیب', 'شسیب', 0, '2018-04-21 02:32:07', '2018-04-21 02:32:07'),
(16, 'ضصثقضص', 'سیبس', 0, '2018-04-21 02:32:11', '2018-04-21 02:32:11'),
(17, 'asdfa', 'jhkjh', 0, '2018-04-21 02:32:40', '2018-04-21 02:32:40'),
(18, 'asdf', 'asdf', 0, '2018-04-21 02:32:48', '2018-04-21 02:32:48'),
(20, 'asdfasd', 'asdfasdf', 0, '2018-04-21 02:32:58', '2018-04-21 02:32:58'),
(21, 'asdf', 'کونر', 0, '2018-04-21 04:59:01', '2018-04-23 00:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_18_042521_create_master_provinces_table', 1),
(2, '2018_04_21_042015_create_master_districts_table', 2),
(3, '2018_04_21_043656_create_master_cities_table', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_cities`
--
ALTER TABLE `master_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_cities_district_id_foreign` (`district_id`);

--
-- Indexes for table `master_districts`
--
ALTER TABLE `master_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_districts_province_id_foreign` (`province_id`);

--
-- Indexes for table `master_provinces`
--
ALTER TABLE `master_provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_cities`
--
ALTER TABLE `master_cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_districts`
--
ALTER TABLE `master_districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_provinces`
--
ALTER TABLE `master_provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_cities`
--
ALTER TABLE `master_cities`
  ADD CONSTRAINT `master_cities_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `master_districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `master_districts`
--
ALTER TABLE `master_districts`
  ADD CONSTRAINT `master_districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `master_provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

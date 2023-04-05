-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 11:23 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moiapplicationoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `first_name`, `last_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'مدیر عمومی', '$2y$10$kz6nQNI4uD5fjf2ZsY7Kj.6SlnsnwXIOjP4VKmRu8BWReE/2Djg3a', NULL, 'محمدی', '15NdBQCpPNsjzFmgAnuimdYt7ctJNv4CuKZqtJWKr0xfDHfD04BUgM4i9YBa', '2018-05-09 08:05:42', '2018-05-09 08:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `application_photos`
--

CREATE TABLE `application_photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `par_app_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_photos`
--

INSERT INTO `application_photos` (`id`, `path`, `par_app_id`, `created_at`, `updated_at`) VALUES
(1, '5b1d76edc1626.jpeg', 1, '2018-06-11 06:07:25', '2018-06-11 06:07:25'),
(2, '5b1d76edcc2b6.jpeg', 1, '2018-06-11 06:07:25', '2018-06-11 06:07:25');

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
(3, '2018_05_01_033031_create_parlements_applications_table', 2),
(4, '2018_05_01_041455_create_application_photos_table', 2),
(13, '2014_05_05_191500_create_user_roles_table', 3),
(14, '2014_10_12_000000_create_users_table', 3),
(15, '2014_10_12_100000_create_password_resets_table', 3),
(16, '2018_05_07_053926_create_admins_table', 3),
(17, '2018_05_19_040727_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0931cc5e-4c59-4a97-af29-e3ed99ba92a0', 'App\\Notifications\\ParlementRequestCreated', 1, 'App\\Admin', '{\"parlement_request\":{\"registration_number\":\"234\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"07999112\",\"application_date\":\"2018\\/6\\/5\",\"application_title\":\"\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\",\"moi_minister_guidings\":\"\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u0634\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u0628\\u06a9\\u0634\\u062a\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"updated_at\":\"2018-06-10 19:07:25\",\"created_at\":\"2018-06-10 19:07:25\",\"id\":1},\"message\":\" \\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0627 \\u0639\\u0646\\u0648\\u0627\\u0646  \\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628 \\u062b\\u0628\\u062a \\u0633\\u06cc\\u0633\\u062a\\u0645 \\u06af\\u0631\\u062f\\u06cc\\u062f\",\"flag\":\"create\"}', NULL, '2018-06-11 06:07:27', '2018-06-11 06:07:27'),
('1031d391-68da-47f1-8257-bbd446c64cf5', 'App\\Notifications\\ParlementRequestUpdated', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":6,\"registration_number\":\"32839\",\"representative_name\":\"\\u06cc\\u0648\\u0646\\u0633\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0627\\u062c\\u0645\\u0644\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"09381902\",\"application_date\":\"2018\\/5\\/23\",\"application_title\":\"\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\",\"moi_minister_guidings\":\"\\u0633\\u0634\\u0634\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06a9\\u06cc\\u0628\\u0634\\u062a\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u062a\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u06a9\\u0633\\u0646\\u06cc\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u062a\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-06-02 19:09:59\",\"updated_at\":\"2018-06-09 19:37:34\"},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 \\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634  \\u062a\\u0635\\u062d\\u06cc\\u062d \\u06af\\u0631\\u062f\\u06cc\\u062f  \",\"flag\":\"update\"}', NULL, '2018-06-10 06:37:36', '2018-06-10 06:37:36'),
('1402bf79-71b3-43c6-a6c4-7afdf094e7a9', 'App\\Notifications\\ParlementRequestUpdated', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":7,\"registration_number\":\"2321\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"079991132\",\"application_date\":\"2018\\/5\\/29\",\"application_title\":\"asdfasdf\",\"moi_minister_guidings\":\"asdfasdf\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-06-09 19:49:06\",\"updated_at\":\"2018-06-09 19:49:32\"},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 asdfasdf  \\u062a\\u0635\\u062d\\u06cc\\u062d \\u06af\\u0631\\u062f\\u06cc\\u062f  \",\"flag\":\"update\"}', NULL, '2018-06-10 06:49:32', '2018-06-10 06:49:32'),
('384d350b-6a7b-4304-a8ee-4ce4e27bf9f1', 'App\\Notifications\\ParlementRequestCreated', 1, 'App\\Admin', '{\"parlement_request\":{\"registration_number\":\"2321\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"079991132\",\"application_date\":\"2018\\/5\\/29\",\"application_title\":\"asdfasdf\",\"moi_minister_guidings\":\"asdfasdf\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"updated_at\":\"2018-06-09 19:49:06\",\"created_at\":\"2018-06-09 19:49:06\",\"id\":7},\"message\":\" \\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0627 \\u0639\\u0646\\u0648\\u0627\\u0646  asdfasdf \\u062b\\u0628\\u062a \\u0633\\u06cc\\u0633\\u062a\\u0645 \\u06af\\u0631\\u062f\\u06cc\\u062f\",\"flag\":\"create\"}', NULL, '2018-06-10 06:49:06', '2018-06-10 06:49:06'),
('4697c37e-2dea-4444-bd11-baaa842b97a6', 'App\\Notifications\\ParlementRequestCreated', 1, 'App\\Admin', '{\"parlement_request\":{\"registration_number\":\"32839\",\"representative_name\":\"\\u06cc\\u0648\\u0646\\u0633\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0627\\u062c\\u0645\\u0644\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"09381902\",\"application_date\":\"2018\\/5\\/23\",\"application_title\":\"\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\",\"moi_minister_guidings\":\"\\u0633\\u0634\\u0634\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06a9\\u06cc\\u0628\\u0634\\u062a\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u062a\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u06a9\\u0633\\u0646\\u06cc\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u062a\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"updated_at\":\"2018-06-02 19:09:59\",\"created_at\":\"2018-06-02 19:09:59\",\"id\":6},\"message\":\" \\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062c\\u062f\\u06cc\\u062f \\u0628\\u0627 \\u0639\\u0646\\u0648\\u0627\\u0646  \\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634 \\u062b\\u0628\\u062a \\u0633\\u06cc\\u0633\\u062a\\u0645 \\u06af\\u0631\\u062f\\u06cc\\u062f\",\"flag\":\"create\"}', NULL, '2018-06-03 06:10:01', '2018-06-03 06:10:01'),
('4eab8d5f-08af-4899-b7c0-4db03992e687', 'App\\Notifications\\ParlementRequestUpdated', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":5,\"registration_number\":\"231\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"07999112\",\"application_date\":\"2018\\/5\\/31\",\"application_title\":\"\\u0634\\u0634\\u06cc\\u0633\\u0628\",\"moi_minister_guidings\":\"\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-05-29 20:38:28\",\"updated_at\":\"2018-06-09 19:45:27\"},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 \\u0634\\u0634\\u06cc\\u0633\\u0628  \\u062a\\u0635\\u062d\\u06cc\\u062d \\u06af\\u0631\\u062f\\u06cc\\u062f  \",\"flag\":\"update\"}', NULL, '2018-06-10 06:45:28', '2018-06-10 06:45:28'),
('6ebfd0c9-e7f5-4b2e-876b-aa968c98826b', 'App\\Notifications\\ParlementRequestUpdated', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":5,\"registration_number\":\"231\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"07999112\",\"application_date\":\"2018\\/5\\/31\",\"application_title\":\"\\u0634\\u0634\\u06cc\\u0633\\u0628\",\"moi_minister_guidings\":\"\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-05-29 20:38:28\",\"updated_at\":\"2018-06-09 19:46:02\"},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 \\u0634\\u0634\\u06cc\\u0633\\u0628  \\u062a\\u0635\\u062d\\u06cc\\u062d \\u06af\\u0631\\u062f\\u06cc\\u062f  \",\"flag\":\"update\"}', NULL, '2018-06-10 06:46:02', '2018-06-10 06:46:02'),
('a61f8be4-c608-4858-9462-33e55c022962', 'App\\Notifications\\ParlementRequestDeleted', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":4,\"registration_number\":\"2232\",\"representative_name\":\"\\u0644\\u0637\\u06cc\\u0641\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"07999122\",\"application_date\":\"2018-05-01\",\"application_title\":\"\\u0634\\u06a9\\u0633\\u06cc\\u0628\",\"moi_minister_guidings\":\"a;ksjdf\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-05-08 01:45:34\",\"updated_at\":\"2018-05-08 22:03:32\",\"application_photos\":[{\"id\":3,\"path\":\"Reference for Mr.Hussain Ali Nazari (1).jpeg\",\"par_app_id\":4,\"created_at\":\"2018-05-08 01:45:35\",\"updated_at\":\"2018-05-08 01:45:35\"}]},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 \\u0634\\u06a9\\u0633\\u06cc\\u0628  \\u0627\\u0632 \\u0633\\u06cc\\u0633\\u062a\\u0645 \\u062d\\u0630\\u0641 \\u06af\\u0631\\u062f\\u06cc\\u062f\",\"flag\":\"delete\"}', NULL, '2018-06-10 07:06:56', '2018-06-10 07:06:56'),
('ae1d8aeb-a5ca-408b-90ac-284ba90f16ee', 'App\\Notifications\\ParlementRequestDeleted', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":7,\"registration_number\":\"2321\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"079991132\",\"application_date\":\"2018-05-29\",\"application_title\":\"asdfasdf\",\"moi_minister_guidings\":\"asdfasdf\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-06-09 19:49:06\",\"updated_at\":\"2018-06-09 19:49:32\",\"application_photos\":[{\"id\":11,\"path\":\"5b1c2f32b6605.jpg\",\"par_app_id\":7,\"created_at\":\"2018-06-09 19:49:06\",\"updated_at\":\"2018-06-09 19:49:06\"},{\"id\":12,\"path\":\"5b1c2f32c560b.jpg\",\"par_app_id\":7,\"created_at\":\"2018-06-09 19:49:06\",\"updated_at\":\"2018-06-09 19:49:06\"},{\"id\":13,\"path\":\"5b1c2f4c1fc3a.jpg\",\"par_app_id\":7,\"created_at\":\"2018-06-09 19:49:32\",\"updated_at\":\"2018-06-09 19:49:32\"}]},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 asdfasdf  \\u0627\\u0632 \\u0633\\u06cc\\u0633\\u062a\\u0645 \\u062d\\u0630\\u0641 \\u06af\\u0631\\u062f\\u06cc\\u062f\",\"flag\":\"delete\"}', NULL, '2018-06-10 07:06:43', '2018-06-10 07:06:43'),
('b1289251-3773-4a2f-8122-2e2c761db3f6', 'App\\Notifications\\ParlementRequestUpdated', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":6,\"registration_number\":\"32839\",\"representative_name\":\"\\u06cc\\u0648\\u0646\\u0633\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0627\\u062c\\u0645\\u0644\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"09381902\",\"application_date\":\"2018\\/5\\/23\",\"application_title\":\"\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\",\"moi_minister_guidings\":\"\\u0633\\u0634\\u0634\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06a9\\u06cc\\u0628\\u0634\\u062a\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u062a\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u06a9\\u0633\\u0646\\u06cc\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0646\\u0628\\u062a\\u0634\\u06a9\\u0633\\u06cc\\u0628\\r\\n\\u0634\\u0633\\u06cc\\u06a9\\u0628\\u0646\\u0634\\u062a\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-06-02 19:09:59\",\"updated_at\":\"2018-06-09 19:36:22\"},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 \\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634  \\u062a\\u0635\\u062d\\u06cc\\u062d \\u06af\\u0631\\u062f\\u06cc\\u062f  \",\"flag\":\"update\"}', NULL, '2018-06-10 06:36:50', '2018-06-10 06:36:50'),
('d484478c-4a34-47e3-8840-87db758199c8', 'App\\Notifications\\ParlementRequestDeleted', 1, 'App\\Admin', '{\"parlement_request\":{\"id\":5,\"registration_number\":\"231\",\"representative_name\":\"\\u062d\\u0628\\u06cc\\u0628\\u0647 \\u062f\\u0627\\u0646\\u0634\",\"applicant_name\":\"\\u06a9\\u0631\\u06cc\\u0645\",\"applicant_fname\":\"\\u0645\\u062d\\u0645\\u062f\\u06cc\",\"applicant_position\":\"\\u0633\\u0645\\u0648\\u0646\\u0645\\u0644\",\"applicant_rank\":\"\\u0633\\u0645\\u0648\\u0646\\u0648\\u0627\\u0644\",\"applicant_phonenumber\":\"07999112\",\"application_date\":\"2018-05-31\",\"application_title\":\"\\u0634\\u0634\\u06cc\\u0633\\u0628\",\"moi_minister_guidings\":\"\\u0628\\u0634\\u0633\\u06cc\\u0628\\u0634\\u0633\\u06cc\\u0628\",\"applicationoffice_performance\":null,\"pizantoon_performance_result\":null,\"status\":0,\"created_at\":\"2018-05-29 20:38:28\",\"updated_at\":\"2018-06-09 19:46:02\",\"application_photos\":[{\"id\":8,\"path\":\"5b1c2e57d493e.jpg\",\"par_app_id\":5,\"created_at\":\"2018-06-09 19:45:27\",\"updated_at\":\"2018-06-09 19:45:27\"},{\"id\":9,\"path\":\"5b1c2e57ee1fc.jpg\",\"par_app_id\":5,\"created_at\":\"2018-06-09 19:45:27\",\"updated_at\":\"2018-06-09 19:45:27\"},{\"id\":10,\"path\":\"5b1c2e7a73f8d.jpg\",\"par_app_id\":5,\"created_at\":\"2018-06-09 19:46:02\",\"updated_at\":\"2018-06-09 19:46:02\"}]},\"message\":\"\\u0639\\u0631\\u06cc\\u0636\\u0647 \\u062a\\u062d\\u062a \\u0639\\u0646\\u0648\\u0627\\u0646 \\u0634\\u0634\\u06cc\\u0633\\u0628  \\u0627\\u0632 \\u0633\\u06cc\\u0633\\u062a\\u0645 \\u062d\\u0630\\u0641 \\u06af\\u0631\\u062f\\u06cc\\u062f\",\"flag\":\"delete\"}', NULL, '2018-06-10 07:06:50', '2018-06-10 07:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `parlements_applications`
--

CREATE TABLE `parlements_applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `registration_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representative_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_rank` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` date NOT NULL,
  `application_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moi_minister_guidings` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicationoffice_performance` text COLLATE utf8mb4_unicode_ci,
  `pizantoon_performance_result` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parlements_applications`
--

INSERT INTO `parlements_applications` (`id`, `registration_number`, `representative_name`, `applicant_name`, `applicant_fname`, `applicant_position`, `applicant_rank`, `applicant_phonenumber`, `application_date`, `application_title`, `moi_minister_guidings`, `applicationoffice_performance`, `pizantoon_performance_result`, `status`, `created_at`, `updated_at`) VALUES
(1, '234', 'حبیبه دانش', 'کریم', 'محمدی', 'سمونمل', 'سمونوال', '07999112', '2018-06-05', 'شسیبشسیب', 'شسیبشسیبشسیبشکسینبشسیب\r\nشسیبکشتسینبتشسیب', NULL, NULL, 0, '2018-06-11 06:07:25', '2018-06-11 06:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `first_name`, `last_name`, `position`, `department`, `user_role_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'اجمل محمدی', '$2y$10$m/S9zBsMTwwzLI/pYpPaJe8NKloEwrYVnRVaA3fwr3uf34N1jCBAW', 'اجمل', 'محمدی', NULL, NULL, 3, '0', 'PnLFHsKFdrb0fFBlO9BEvoT2bT8RRf6GEjLeWR96Yv8mvZyyy4HhwfCWT3RD', '2018-05-09 09:02:57', '2018-05-09 09:02:57'),
(3, 'rahim@gmail.com', '$2y$10$bkD9n.1B/GNGiSoxTm17N.jbPaUH3Cmtg2H7BE4h72bosFB3K.O.y', 'رحیم', 'محمدی', NULL, NULL, 1, '0', 'MV90zsmBLJ0iYopxjAg7Eb0c6jiLjgab8otMO1zO6YXarDdIAIO1HkETneAa', '2018-05-10 07:15:21', '2018-05-10 07:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'بالا', NULL, NULL),
(2, 'متوسط', NULL, NULL),
(3, 'نورمال', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_user_name_unique` (`user_name`);

--
-- Indexes for table `application_photos`
--
ALTER TABLE `application_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_photos_par_app_id_foreign` (`par_app_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `parlements_applications`
--
ALTER TABLE `parlements_applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parlements_applications_registration_number_unique` (`registration_number`),
  ADD UNIQUE KEY `parlements_applications_applicant_phonenumber_unique` (`applicant_phonenumber`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD KEY `users_user_role_id_foreign` (`user_role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `application_photos`
--
ALTER TABLE `application_photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `parlements_applications`
--
ALTER TABLE `parlements_applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_photos`
--
ALTER TABLE `application_photos`
  ADD CONSTRAINT `application_photos_par_app_id_foreign` FOREIGN KEY (`par_app_id`) REFERENCES `parlements_applications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_role_id_foreign` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 09:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_cummunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendances` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_atdns` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `upload_by` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `dept_id`, `batch_id`, `teacher_id`, `subject_name`, `attendances`, `date_of_atdns`, `status`, `upload_by`, `created_at`, `updated_at`) VALUES
(1, 'cse', '38(D)', 5, 'Software Engineering', '6,7', '04/04/2019', 1, '5', '2019-04-04 05:13:39', NULL),
(2, 'CSE', '38(D)', 4, 'Database Management', '1,6,7', '04/15/2019', 1, 'Ayesha Siddika', '2019-04-04 05:40:27', NULL),
(3, 'CSE', '38D', 5, 'software engineering', '1,6,7,8,9,10,11,12,13,14,15,17,18,19,21,22,23', '04/05/2019', 0, 'Pretty Nahar', '2019-04-05 03:28:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_03_24_070735_create_student_infos_table', 2),
(6, '2019_04_03_061920_create_teachers_info_table', 3),
(7, '2019_04_04_060110_create_posts_table', 4),
(8, '2019_04_04_091635_create_attendance_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post`, `upload_by`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '<p>Hi,</p>\r\n\r\n<p><strong>This is Opu..</strong></p>\r\n\r\n<p>Whats up Everybody ?</p>', 'Student', 1, '2019-04-04 01:11:29', NULL),
(2, '<p>Hi,</p>\r\n\r\n<p><strong>This is Opu..</strong></p>\r\n\r\n<p>Whats up Everybody ?</p>', 'Student', 1, '2019-04-04 01:13:33', NULL),
(3, '<h2>Hello Students,</h2>\r\n\r\n<p>Your exam routine....</p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fdac45-1.fna.fbcdn.net/v/t1.15752-9/56120192_2603064263068301_4938049124277682176_n.png?_nc_cat=103&amp;_nc_ht=scontent.fdac45-1.fna&amp;oh=481f62814290ac01c288995d16630110&amp;oe=5D462710\" style=\"height:462px; width:1010px\" /></p>\r\n\r\n<p><strong>Thanks</strong></p>', 'Teacher', 5, '2019-04-04 02:59:30', NULL),
(4, '<p>Hello friends,</p>\r\n\r\n<p>we are complete our project. this project name is stuents community. please registration everybody and communicate with us.</p>\r\n\r\n<p>Thanks all.</p>', 'Student', 17, '2019-04-05 03:25:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `std_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `dept_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_infos`
--

INSERT INTO `student_infos` (`std_id`, `user_id`, `dept_id`, `batch_id`, `roll`, `semester`, `reg_num`, `blood_group`, `profile_pic`, `created_at`, `updated_at`) VALUES
(5, 1, 'CSE', '38(D)', '54321', '1st', '2352435', 'A(-)', 'Opu datta.jpg', '2019-04-05 05:32:20', '2019-04-04 23:32:20'),
(6, 6, 'CSE', '38(D)', '1', '1st', '1', 'A(+)', 'imrul.jpg', '2019-04-03 05:25:54', NULL),
(7, 7, 'CSE', '38(D)', '1', '1st', '1', 'A(+)', 'sumon.jpg', '2019-04-03 05:27:33', NULL),
(8, 8, 'CSE', '38(D)', '1111', '1st', '1111', 'A(+)', 'Abir Hasan.jpg', '2019-04-04 23:08:40', NULL),
(9, 9, 'CSE', '38(D)', '11', '1st', '11', 'A(+)', 'Ashikur Rahman.jpg', '2019-04-04 23:09:54', NULL),
(10, 10, 'CSE', '38(D)', '5', '1st', '3', 'A(+)', 'Benzir Ahmed.jpg', '2019-04-04 23:11:05', NULL),
(11, 11, 'CSE', '38(D)', '234', '1st', '1233', 'A(+)', 'Faisal Hossain.jpg', '2019-04-04 23:12:05', NULL),
(12, 12, 'CSE', '38(D)', '111', '1st', '111', 'A(+)', 'Harun Rashid.jpg', '2019-04-04 23:18:49', NULL),
(13, 13, 'CSE', '38(D)', '111', '1st', '111', 'A(+)', 'Mahbub Zaman.jpg', '2019-04-04 23:19:56', NULL),
(14, 14, 'CSE', '38(D)', '223', '1st', '23', 'A(+)', 'Mahjebin Rahman.jpg', '2019-04-04 23:21:23', NULL),
(15, 15, 'CSE', '38(D)', '111', '1st', '111', 'A(+)', 'Md Aktaruzzaman.jpg', '2019-04-04 23:22:26', NULL),
(16, 16, 'CSE', '38(D)', '222', '1st', '222', 'A(+)', 'Md Main Uddin.jpg', '2019-04-04 23:23:41', NULL),
(17, 17, 'CSE', '38(D)', '2232', '1st', '2232', 'AB(+)', 'Mohammad Shahin.jpg', '2019-04-05 09:21:00', '2019-04-05 03:21:00'),
(18, 18, 'CSE', '38(D)', '2342', '1st', '2435', 'A(+)', 'Musfikur Rahman Howldar.jpg', '2019-04-04 23:25:49', NULL),
(19, 19, 'CSE', '38(D)', '34534', '1st', '3453', 'A(+)', 'Pretty Nahar.jpg', '2019-04-04 23:27:25', NULL),
(20, 20, 'CSE', '38(D)', '34534', '1st', '3453', 'A(+)', 'Rafsan Taher.jpg', '2019-04-04 23:28:37', NULL),
(21, 21, 'CSE', '38(D)', '454', '1st', '456', 'A(+)', 'Raihan Ahmed Ornob.jpg', '2019-04-04 23:29:55', NULL),
(22, 22, 'CSE', '38(D)', '43', '1st', '345', 'A(+)', 'Rifat Hasan Rif.jpg', '2019-04-04 23:30:46', NULL),
(23, 23, 'CSE', '38(D)', '345', '1st', '345', 'A(+)', 'Saiful Islam Lipu.jpg', '2019-04-04 23:31:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

CREATE TABLE `teachers_info` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`teacher_id`, `user_id`, `dept_id`, `designation`, `blood_group`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, '3', 'CSE', 'Advisor', 'A(+)', '3_Prof. Dr. M. Nurul Islam.jpg', '2019-04-03 04:15:20', '2019-04-03 04:15:20'),
(2, '4', 'CSE', 'Head of the Department', 'A(+)', '4_Kazi-Hassan-Robin.jpg', '2019-04-03 04:33:10', '2019-04-03 04:33:10'),
(3, '5', 'CSE', 'Sr. Lecturer', 'A(+)', '5_Ayesha-Siddika.jpg', '2019-04-03 04:37:42', '2019-04-03 04:37:42'),
(4, '24', 'CSE', 'Assistant Professor', 'A(+)', '24_Afzal-Hossain.jpg', '2019-04-04 23:40:02', '2019-04-04 23:40:02'),
(5, '25', 'CSE', 'Sr. Lecturer', 'A(+)', '25_ashraf.JPG', '2019-04-04 23:42:23', '2019-04-04 23:42:23'),
(6, '26', 'CSE', 'Sr. Lecturer', 'A(+)', '26_Mithun Kumar PK.jpg', '2019-04-04 23:43:36', '2019-04-04 23:43:36'),
(7, '27', 'CSE', 'Sr. Lecturer', 'A(+)', '27_Md. Ashiqur Rahman.jpg', '2019-04-04 23:44:41', '2019-04-04 23:44:41'),
(8, '28', 'CSE', 'Sr. Lecturer', 'A(+)', '28_shamsun-mam.jpg', '2019-04-04 23:46:35', '2019-04-04 23:46:35'),
(9, '29', 'CSE', 'Lecturer', 'A(+)', '29_ahsan.jpg', '2019-04-04 23:47:42', '2019-04-04 23:47:42'),
(10, '30', 'CSE', 'Lecturer', 'A(+)', '30_mahbubur.jpg', '2019-04-04 23:49:30', '2019-04-04 23:49:30'),
(11, '31', 'CSE', 'Lecturer', 'A(+)', '31_faizul.jpg', '2019-04-04 23:51:16', '2019-04-04 23:51:16'),
(12, '32', 'CSE', 'Lecturer', 'A(+)', '32_nipu.jpg', '2019-04-04 23:52:10', '2019-04-04 23:52:10'),
(13, '33', 'CSE', 'Lecturer', 'A(+)', '33_Pic_Md_Nazmus_sakib.jpg', '2019-04-04 23:53:32', '2019-04-04 23:53:32'),
(14, '34', 'CSE', 'Lecturer', 'A(+)', '34_mudi.jpg', '2019-04-04 23:54:34', '2019-04-04 23:54:34'),
(15, '35', 'CSE', 'Lecturer', 'A(+)', '35_Y._A_._Joarder_.jpg', '2019-04-04 23:55:48', '2019-04-04 23:55:48'),
(16, '36', 'CSE', 'Lecturer', 'A(+)', '36_aakib.png', '2019-04-04 23:56:48', '2019-04-04 23:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `designation`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Opu Datta', 'Student', 'opudatta@gmail.com', NULL, '$2y$10$oN2OcpCkL8KcpeQyTh95gOUpARSgQXgXH2oObJi4ikrqKuN7keoy2', NULL, '2019-03-20 05:45:58', '2019-03-20 05:45:58'),
(2, 'test 1', 'Student (CR)', 'test@gmail.com', NULL, '$2y$10$t8qn3hcRH7lWsWLki8Xqie9OqjJ7lXpz8OE35w2Ub62cF.WM4FSOe', NULL, '2019-03-23 23:36:20', '2019-03-23 23:36:20'),
(3, 'Prof. Dr. M. Nurul Islam', 'Teacher', 'nurul@gmail.com', NULL, '$2y$10$pd69anbXu0xJlPexQuTuHuIWpxXaqAd75d6wpzAIHw43BY11BxVhm', NULL, '2019-04-03 00:12:37', '2019-04-03 00:12:37'),
(4, 'Kazi Hassan Robin', 'Teacher', 'robin@gmail.com', NULL, '$2y$10$Dzd/hTAOqEr6tH4bRgUnueM4EQR9ZGO4awhpaa.Zj.Ws1VighkJOC', NULL, '2019-04-03 04:30:07', '2019-04-03 04:30:07'),
(5, 'Ayesha Siddika', 'Teacher', 'ayesha@gmail.com', NULL, '$2y$10$lDr5J6vzF/Vf0AVSHtyy/uxZpT51ahWrlUZGU98Cl8J377oAtz.0i', NULL, '2019-04-03 04:36:35', '2019-04-03 04:36:35'),
(6, 'Emrul Hasan Asif', 'Student (CR)', 'imrul@gmail.com', NULL, '$2y$10$UqObU3o58oh8CO0bd9OkDOthv5EMyPUKv68TbReYWGJd5UvhBjfva', NULL, '2019-04-03 05:24:42', '2019-04-03 05:24:42'),
(7, 'Sumon Mondal', 'Student', 'sumon@gmail.com', NULL, '$2y$10$FTX6rNlQRhYNw6fXMRibXOzRhsNiAazsY/nUr5x.i8HfnflUmNjQG', NULL, '2019-04-03 05:26:36', '2019-04-03 05:26:36'),
(8, 'Abir Hasan', 'Student', 'abir@gmail.com', NULL, '$2y$10$bvtJw1/zVgU6/xveuIJlWuBnlP7orXnfXx01aLy7a03GpfxOTcOoi', NULL, '2019-04-04 23:07:51', '2019-04-04 23:07:51'),
(9, 'Ashikur Rahman', 'Student', 'ashikur@gmail.com', NULL, '$2y$10$mUvevc6sdt8ZzP13izuK0OpXzEVBezeH.jcIRn5D9X933LzTxehn.', NULL, '2019-04-04 23:09:28', '2019-04-04 23:09:28'),
(10, 'Benzir Ahmed', 'Student', 'benzir@gmail.com', NULL, '$2y$10$gu0K7cVC8uGY1aCJHvK2Y.YW2frxuKvD58zPvIb2PAW3MwTJhDeqC', NULL, '2019-04-04 23:10:40', '2019-04-04 23:10:40'),
(11, 'Faisal Hossain', 'Student', 'faisal@gmail.com', NULL, '$2y$10$OjxzyNaGLyIalhrvSTJl7.Ap4Za9v/.F7md8tW7yUvQM8BGwzFUfu', NULL, '2019-04-04 23:11:50', '2019-04-04 23:11:50'),
(12, 'Harun Rashid', 'Student', 'harun@gmail.com', NULL, '$2y$10$5gDVH.tFnPI.X1Cjj/Nvp.SV6XNWt6uYWMhwwZKUDXUCCNl8FkRKC', NULL, '2019-04-04 23:18:08', '2019-04-04 23:18:08'),
(13, 'Mahbub Zaman', 'Student', 'mahbub@gmail.com', NULL, '$2y$10$BNDRPerlljewbQeXRzNyyOzv7FF7V7a2u0TeN.Jxmvg9CRP1JxWha', NULL, '2019-04-04 23:19:39', '2019-04-04 23:19:39'),
(14, 'Mahjebin Rahman', 'Student', 'mahjebin@gmail.com', NULL, '$2y$10$9XByCLfsx45PTwjDhoue/.L9CFomRis65JNC96b2hbO3iSvEuRRMW', NULL, '2019-04-04 23:20:51', '2019-04-04 23:20:51'),
(15, 'Md Aktaruzzaman', 'Student', 'aktaruzzaman@gmail.com', NULL, '$2y$10$HoqT08KOebtvVig3MyqVB.4F33pdptv4/iaz66gEbPCgjWWojMyf2', NULL, '2019-04-04 23:22:09', '2019-04-04 23:22:09'),
(16, 'Md Main Uddin', 'Student', 'main@gmail.com', NULL, '$2y$10$9FWk4cNose6IopQ7LcysV.Vz6bB3.iOFCshYeTAlv/5nbZIfG9Cc.', NULL, '2019-04-04 23:23:11', '2019-04-04 23:23:11'),
(17, 'Mohammad Shahin', 'Student', 'shahin@gmail.com', NULL, '$2y$10$HoLLq7AUR1Pt2jYpHAd1su2unmsS2NQDleo7.fGGgznHL0q3KsqYq', NULL, '2019-04-04 23:24:29', '2019-04-04 23:24:29'),
(18, 'Musfikur Rahman Howldar', 'Student', 'musfikur@gmail.com', NULL, '$2y$10$TsOc2CU6M4nHjfRe/AqTDemYtMqovDk2oRG3ILRCWMlvFu6/dkuTO', NULL, '2019-04-04 23:25:26', '2019-04-04 23:25:26'),
(19, 'Pretty Nahar', 'Student', 'nahar@gmail.com', NULL, '$2y$10$ktFcocHNM6.5cfF4guo2UOmwgGo251GK4kfkPGi5WScPLu7tZ6MQK', NULL, '2019-04-04 23:26:42', '2019-04-04 23:26:42'),
(20, 'Rafsan Taher', 'Student', 'rafsan@gmail.com', NULL, '$2y$10$PY7pziKYHx8AgoliR0YNyOrvhroOuRDTaYQOHux..msFE1/kUyxEe', NULL, '2019-04-04 23:28:03', '2019-04-04 23:28:03'),
(21, 'Raihan Ahmed Ornob', 'Student', 'ornob@gmail.com', NULL, '$2y$10$gl75NYR2wMftXxcEGcFdJOJ21Mq2N5xp.GJPdY.8YutnRSyVDk5Hi', NULL, '2019-04-04 23:29:23', '2019-04-04 23:29:23'),
(22, 'Rifat Hasan Rif', 'Student', 'rifat@gmail.com', NULL, '$2y$10$jOdr5Qh3fUg0EfbI1hSVkemRq93D5m0nkWQzk.O0pPd.Da6oXOUXq', NULL, '2019-04-04 23:30:31', '2019-04-04 23:30:31'),
(23, 'Saiful Islam Lipu', 'Student', 'lipu@gmail.com', NULL, '$2y$10$3jx/ReQrM3i.Leenqt94eO3RsrP305EZcboAOBOoL40Qj3Nx9KFDu', NULL, '2019-04-04 23:31:19', '2019-04-04 23:31:19'),
(24, 'Afzal Hossain', 'Teacher', 'afzal@gmail.com', NULL, '$2y$10$Vc/.Ruy09UdSacN1WsAMw.JnbCvpDb2EkZyYpu1XrmnIic.8eFMoy', NULL, '2019-04-04 23:39:35', '2019-04-04 23:39:35'),
(25, 'Md. Ashraf Kamal', 'Teacher', 'ashraf@gmail.com', NULL, '$2y$10$dDuQ8fvrk85k9eQCel3nOuOXXSZFdn28hlUEsAoe4mQIhSzXueL.O', NULL, '2019-04-04 23:40:44', '2019-04-04 23:40:44'),
(26, 'Mithun Kumar PK', 'Teacher', 'mithun@gmail.com', NULL, '$2y$10$3ARviSmj8Yk1EJ7lNfIMbOzTax3be58.gHN29nB.vxJamcwe.fXsG', NULL, '2019-04-04 23:43:03', '2019-04-04 23:43:03'),
(27, 'Md. Ashiqur Rahman', 'Teacher', 'ashiqur@gmail.com', NULL, '$2y$10$aR3wM6ObAg0Tsim0FnBir.F.kJ9mYa/VL6C36dlstfEXQ9iUxDJpW', NULL, '2019-04-04 23:44:16', '2019-04-04 23:44:16'),
(28, 'Shamsun Nahar', 'Teacher', 'shamsun@gmail.com', NULL, '$2y$10$GALfh9O5j.ZtKaDTiIXZ1eydhcdj/Wv614FmzvdPBa9cCo8YWsvzC', NULL, '2019-04-04 23:45:38', '2019-04-04 23:45:38'),
(29, 'Ahsan Ullah', 'Teacher', 'ahsan@gmail.com', NULL, '$2y$10$qIlTJEH2yAfNwxyCgj22au/BtrwNMC6EXGL19X0XY5M5thqFU1uhu', NULL, '2019-04-04 23:47:12', '2019-04-04 23:47:12'),
(30, 'Md. Mahbubur Rahman', 'Teacher', 'mahbubur@gmail.com', NULL, '$2y$10$Kul3U/dPZYePfIH6vBrRa.UDSe7w6Q5mQAR2wXkWpJ4k/nqKbME6e', NULL, '2019-04-04 23:48:18', '2019-04-04 23:48:18'),
(31, 'Md. Faizul Huq Arif', 'Teacher', 'faizul@gmail.com', NULL, '$2y$10$GZI5j7QJzzHIKkp2V9gIs.d6lJjR.DckthTFDr6K1wMNTj/3iZK/m', NULL, '2019-04-04 23:50:08', '2019-04-04 23:50:08'),
(32, 'Md. Al-Amin Nipu', 'Teacher', 'nipu@gmail.com', NULL, '$2y$10$MxDxsSeoOXkaO6sbODvn6Og2UYcPkBhyKNvlj4Qfl.vwwcgnoZXuW', NULL, '2019-04-04 23:51:47', '2019-04-04 23:51:47'),
(33, 'Md. Nazmus Sakib', 'Teacher', 'nazmus@gmail.com', NULL, '$2y$10$lOwT0ZyY934cDPZCK0Q/.u3/ImUxLudwD2S9iTyZYbH/wj1odyZLO', NULL, '2019-04-04 23:53:13', '2019-04-04 23:53:13'),
(34, 'Ratna Mudi', 'Teacher', 'mudi@gmail.com', NULL, '$2y$10$Iw3uTmkIocr..8eqsQySvuFwYMeEN/OYhEWIUQFkS/tN4WndhrZAO', NULL, '2019-04-04 23:54:20', '2019-04-04 23:54:20'),
(35, 'Y. A. Joarder', 'Teacher', 'Joarder@gmail.com', NULL, '$2y$10$LXiu8XJN3ajouJVYp.6OBu3uNui2AvuR4AWGIJiyXLfQvFcfFuFL.', NULL, '2019-04-04 23:55:12', '2019-04-04 23:55:12'),
(36, 'Aakib Bin Nesar', 'Teacher', 'aakib@gmail.com', NULL, '$2y$10$iPQa7F17ww6QxN7yYaJr1OzzKFkYraqctgYt9kTmOZ9OQEd6Eq1ey', NULL, '2019-04-04 23:56:28', '2019-04-04 23:56:28'),
(37, 'others', 'Student', 'others@gmail.com', NULL, '$2y$10$utgXND8Tl3z14jifW2X19Ou9TRzVfgfHMzpXsnQwGvaOpky0ULMYe', NULL, '2019-04-05 03:33:35', '2019-04-05 03:33:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `teachers_info`
--
ALTER TABLE `teachers_info`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `std_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teachers_info`
--
ALTER TABLE `teachers_info`
  MODIFY `teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

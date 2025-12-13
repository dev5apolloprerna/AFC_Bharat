-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2025 at 04:36 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getdemo_afc_bharat`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `iStatus` int(11) DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`country_id`, `country_name`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'USA', 1, 0, '2025-12-12 16:14:51', '2025-12-12 16:29:56'),
(2, 'Brazil', 1, 0, '2025-12-13 14:12:23', '2025-12-13 14:12:23'),
(3, 'Canada', 1, 0, '2025-12-13 14:12:35', '2025-12-13 14:12:35'),
(4, 'France', 1, 0, '2025-12-13 14:13:32', '2025-12-13 14:13:32'),
(5, 'Germany', 1, 0, '2025-12-13 14:13:40', '2025-12-13 14:13:40'),
(6, 'India', 1, 0, '2025-12-13 14:13:52', '2025-12-13 14:13:52'),
(7, 'Israel', 1, 0, '2025-12-13 14:14:01', '2025-12-13 14:14:01'),
(8, 'abcd', 1, 1, '2025-12-13 14:16:03', '2025-12-13 14:17:49'),
(9, 'ksfjlkf', 1, 1, '2025-12-13 14:42:46', '2025-12-13 14:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `courses_master`
--

CREATE TABLE `courses_master` (
  `course_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_price` varchar(100) NOT NULL,
  `description` longtext,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_master`
--

INSERT INTO `courses_master` (`course_id`, `university_id`, `country_id`, `faculty_id`, `course_name`, `course_price`, `description`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'test cource name', '1200', '<p>test abcd</p>', 1, 0, '2025-12-12 16:44:29', '2025-12-12 16:44:29'),
(2, 1, 2, 1, 'Dental care', '60000', '<p>akfjnkjflj</p>', 1, 0, '2025-12-13 14:36:42', '2025-12-13 14:39:21'),
(3, 1, 6, 1, 'Facility and Services Management', '12000', '<p>snkgglgkjgljgkljglgjglj</p>', 1, 0, '2025-12-13 14:38:12', '2025-12-13 14:38:12'),
(4, 1, 2, 1, 'acnbcnc', '522222', NULL, 1, 1, '2025-12-13 14:39:41', '2025-12-13 14:40:14'),
(5, 1, 3, 2, 'test cource name 1', '1200', NULL, 1, 1, '2025-12-13 14:45:18', '2025-12-13 14:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE `faculty_master` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(200) NOT NULL,
  `country_id` int(11) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_master`
--

INSERT INTO `faculty_master` (`faculty_id`, `faculty_name`, `country_id`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Charles A. Cruz', 4, 1, 0, '2025-12-12 16:36:56', '2025-12-13 14:34:06'),
(2, 'Tammana', 6, 1, 0, '2025-12-13 14:34:49', '2025-12-13 14:34:49'),
(3, 'iuwoiuuio', 3, 1, 1, '2025-12-13 14:35:00', '2025-12-13 14:36:09'),
(4, 'm,m,m,,,m', 2, 1, 1, '2025-12-13 14:44:55', '2025-12-13 14:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_master`
--

CREATE TABLE `gallery_master` (
  `gallery_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_master`
--

INSERT INTO `gallery_master` (`gallery_id`, `image`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(2, '20251213144049179.jpg', 1, 0, '2025-12-12 16:09:48', '2025-12-13 14:40:49'),
(3, '20251213144102086.png', 1, 0, '2025-12-13 14:41:02', '2025-12-13 14:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-09-12 04:33:06', '2022-09-12 04:33:06'),
(2, 'Employee', 'web', '2022-09-12 04:33:06', '2022-09-12 04:33:06'),
(3, 'Vendor', 'web', '2022-09-12 04:33:06', '2022-09-12 04:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sendemaildetails`
--

CREATE TABLE `sendemaildetails` (
  `id` int(11) NOT NULL,
  `strSubject` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strTitle` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strFromMail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ToMail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strCC` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `strBCC` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sendemaildetails`
--

INSERT INTO `sendemaildetails` (`id`, `strSubject`, `strTitle`, `strFromMail`, `ToMail`, `strCC`, `strBCC`) VALUES
(4, 'Contact Inquiry', 'Sukti', 'support@sukti.in', NULL, '', ''),
(8, 'Forget Password', 'Sukti', 'support@sukti.in', NULL, NULL, NULL),
(9, 'sign_up', 'Sukti', 'support@sukti.in', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `sitename` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `strIP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `sitename`, `logo`, `email`, `iStatus`, `isDelete`, `created_at`, `updated_at`, `strIP`) VALUES
(1, 'Jewellery crm', '1746446528.png', 'dev5.apolloinfotech@gmail.com', 1, 0, '2025-05-05 12:02:08', NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_mobile` varchar(20) NOT NULL,
  `student_email` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `courses_id` int(11) NOT NULL,
  `registration_status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `paid` int(11) NOT NULL COMMENT '0=paid,1=unpaid',
  `fee` int(11) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `university_master`
--

CREATE TABLE `university_master` (
  `university_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `university_name` varchar(200) NOT NULL,
  `university_logo` varchar(255) NOT NULL,
  `university_address` text,
  `university_city` varchar(100) DEFAULT NULL,
  `university_state` varchar(100) DEFAULT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_master`
--

INSERT INTO `university_master` (`university_id`, `country_id`, `university_name`, `university_logo`, `university_address`, `university_city`, `university_state`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 'abcd', '1765616280.jpg', 'test', 'city', 'state', 1, 0, '2025-12-12 16:22:52', '2025-12-13 14:28:00'),
(2, 6, 'akjgljgljg', '1765616507.png', '3/2, Barnaby Road, Kilpauk,', 'Chennai', 'Tamilnadu', 1, 1, '2025-12-13 14:31:33', '2025-12-13 14:31:51'),
(3, 6, 'DDIT', '1765617233.jpg', 'Collage road , nadiad', 'nadiad', 'gujarat', 1, 0, '2025-12-13 14:43:53', '2025-12-13 14:43:53'),
(4, 6, 'AIIS', '1765617271.jpg', '3/2, Barnaby Road, Kilpauk,', 'Chennai', 'Tamilnadu', 1, 1, '2025-12-13 14:44:31', '2025-12-13 14:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2' COMMENT '1=Admin, 2=TA/TP',
  `otp` int(11) DEFAULT NULL,
  `otpTimeOut` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `email_verified_at`, `password`, `role_id`, `otp`, `otpTimeOut`, `status`, `remember_token`, `device_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'admin', 'admin@admin.com', '9876543210', NULL, '$2y$10$sPrSb4x/ajMNN4OAnT6pLe4jQXOovPn.05aQ9HlpTA5faYqRTUilO', 1, NULL, NULL, 1, NULL, NULL, '2022-09-12 04:33:06', '2025-07-14 09:48:46'),
(3, 'test user', NULL, 'user123@gmail.com', '9874569878', NULL, '$2y$10$RZ.83m0wM81MfbOkP2iZo.sBTQV/ibcZW80ObuuahAfcrIEAj/a8C', 2, NULL, NULL, 1, NULL, NULL, '2024-03-07 12:24:52', '2024-03-13 16:20:41'),
(4, 'sweta panchal', NULL, 'swetapanchal@gmail.com', '6353143092', NULL, '$2y$10$nWG.apkCeb27rHsao9PnWOPhsshV5cp5OVQzdEPLTiSE7SbZlqAXi', 2, 618888, NULL, 1, NULL, NULL, '2024-03-07 13:29:04', '2024-03-12 14:56:44'),
(5, 'abc', NULL, 'abc@gmail.com', '9532355555', NULL, '$2y$10$mWRzBa9NkHc2RsYTtglZBuro0G0IWMUMqzSazlLLI.kUb2u8I//Xm', 2, NULL, NULL, 1, NULL, NULL, '2024-03-07 13:32:41', '2024-03-07 13:32:41'),
(7, 'prerna parekh', NULL, 'angelrathod96@gmail.com', '8888888888', NULL, '$2y$10$yt/eN588jx3TpGIAOVbMaeE9BJmoovlqNv7pP7FMG2RuBAW2UwJuO', 2, 909478, '2024-04-05 16:22:12', 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3N1a3RpLmluL2FwaS9sb2dpbiIsImlhdCI6MTcxMjMxOTM2MCwiZXhwIjoxNzEyMzYyNTYwLCJuYmYiOjE3MTIzMTkzNjAsImp0aSI6ImJZVlZhNVFPcVlDS2xBcUIiLCJzdWIiOiI3IiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.l3W9OibG37GsHysAOeL_R62t_p_GECll24DdvPu1MWk', '2024-03-07 13:32:41', '2024-04-05 17:46:00'),
(10, 'swetarth', NULL, 'swetapanchal.96@gmail.com', '6353143098', NULL, '$2y$10$b1s38zJWzTlo8bf2H5fQA.KyZOfYDPAHuhLqa5V1R.I1avp1Wfb5G', 2, 385334, '2024-04-04 19:02:41', 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3N1a3RpLmluL2FwaS9sb2dpbiIsImlhdCI6MTcxMjMyMDUyOCwiZXhwIjoxNzEyMzYzNzI4LCJuYmYiOjE3MTIzMjA1MjgsImp0aSI6IkNhWm9JVDR4ZmpNSExjZU8iLCJzdWIiOiIxMCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.Hf7nxxJcS0KpoIzNDE1yR-4Jpt8LWGy2YIpHUNdhSm4', '2024-03-12 16:17:25', '2024-04-05 18:05:28'),
(11, 'Tarang Parmar', NULL, 'dev2.apolloinfotech@gmail.com', '9987654321', NULL, '$2y$10$M.RzcoelvicT5EnwUo/koOAWvEipC44sK9lma6qEIsmmfkxZ/NOFm', 2, NULL, NULL, 1, NULL, NULL, '2024-03-14 12:33:18', '2024-03-14 12:33:18'),
(13, 'Ms.Pushti Shah', NULL, 'pushtishah12345@gmail.com', '7896453110', NULL, '$2y$10$1RvHQynWwIiCzC19k8m8tuuEc5pAs4DOI8Nb6K20pEuZj2N2swQDy', 2, NULL, NULL, 1, NULL, NULL, '2024-03-15 14:58:37', '2024-03-26 12:37:24'),
(14, 'Pushti Shah', NULL, 'pushtishah140403@gmail.com', '9328200153', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, '2024-03-18 18:50:39', '2024-03-18 18:50:39'),
(15, 'prerna parekh', NULL, 'angelprathod96@gmail.com', '4564654564', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, '2024-03-18 21:58:57', '2024-03-18 21:58:57'),
(16, 'Pushti Shah', NULL, 'shahpushti12345@gmail.com', '9876541230', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, '2024-03-19 11:11:50', '2024-03-19 11:11:50'),
(17, 'Patel Krushi', NULL, 'patelkrushi242@gmail.com', '6353595756', NULL, '$2y$10$LfRwWwa6DU2o/HBwqfncI.9veFvdConOGX44yqSM.8yr8OQMF8rCO', 2, NULL, NULL, 1, NULL, NULL, '2024-03-20 15:01:04', '2024-03-23 10:33:51'),
(18, 'Bansari Patel', NULL, 'bansaripatel1830@gmail.com', '7866541230', NULL, '$2y$10$6HPDDFe3IIbL2c930mJOweRNlAljYZmWeDUvJQd0SNcK2l.yVAIYy', 2, 842093, '2024-04-05 10:45:31', 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3N1a3RpLmluL2FwaS9sb2dpbiIsImlhdCI6MTcxMjMxNDA5NCwiZXhwIjoxNzEyMzE3Njk0LCJuYmYiOjE3MTIzMTQwOTQsImp0aSI6IllyU3N3a3JNRzFJeUprZU0iLCJzdWIiOiIxOCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.EA8fVKKUKmVqK0yqf38MtFS7VSBsMea3LSTvOXQ1DjQ', '2024-03-26 12:48:34', '2024-04-05 16:18:14'),
(19, 'Pushti Shah', NULL, 'pushtishah1234@gmail.com', '9898289098', NULL, '$2y$10$rQgBL8JCtXELLP.fbn7/TuQ88EUOA3a3gd6grcTKjUe/jPbOrdDle', 2, NULL, NULL, 1, NULL, NULL, '2024-03-26 17:20:38', '2024-03-26 17:20:56'),
(20, 'Sandip Travedi', NULL, 'sahassolutions@gmail.com', '8000498000', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, '2024-03-28 18:04:12', '2024-03-28 18:04:12'),
(21, 'mignesh', NULL, 'migneshpatel202@gmail.com', '9904500629', NULL, '$2y$10$/n/6BWBhXMWY2w3bo2li5eZgLIBqMZuRdhjw4CRFE73gkpr0u6E.S', 2, NULL, NULL, 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3N1a3RpLmluL2FwaS9sb2dpbiIsImlhdCI6MTcxMjI5NTQwNCwiZXhwIjoxNzEyMjk5MDA0LCJuYmYiOjE3MTIyOTU0MDQsImp0aSI6IlhNYURFMmRQU2JSNTg3SE4iLCJzdWIiOiIyMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.PRDAJYAOxqQdoG6kbDjTFtdOhDo1WY9sPI1XOoDk62M', '2024-04-03 12:44:12', '2024-04-05 11:06:44'),
(22, 'pinal', NULL, 'pinal@gmail.com', '9696532854', NULL, '$2y$10$GJBcC4hfKy45573yMUhureyx7PN2V28TSeKvv7TbwLNDxorifKcuO', 2, NULL, NULL, 1, NULL, NULL, '2024-04-05 14:39:13', '2024-04-05 14:39:13'),
(23, 'Ms.Patel', NULL, 'bansipatel4041@gmail.com', '9924509080', NULL, '$2y$10$fn1FLF78yQcX6eVoKwDkI.CfIbJ7nHLNC1Qqegftt.YGCJH2jW0am', 2, 842989, '2024-04-05 17:30:59', 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3N1a3RpLmluL2FwaS9sb2dpbiIsImlhdCI6MTcxMjMxOTM1NCwiZXhwIjoxNzEyMzYyNTU0LCJuYmYiOjE3MTIzMTkzNTQsImp0aSI6ImNBUXJSMTloVGRtd1BpVDkiLCJzdWIiOiIyMyIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.KFnLuFtKkkQ3InJEGjEBlaxuScG1tsAWKs1cT5NZh9c', NULL, '2024-04-05 17:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_Id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `iStatus` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`video_Id`, `name`, `video_link`, `iStatus`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '', 'https://youtu.be/xeXV1KoX034?si=JQNjRKnKzKnWu1ci', 1, 1, '2025-10-06 17:19:25', '2025-10-06 17:19:25'),
(2, '', 'https://youtu.be/1a5nyrMtRsk?si=JbWQEc4tea9nnUEj', 1, 1, '2025-12-13 14:48:24', '2025-12-13 14:48:24'),
(3, 'demo', 'https://youtu.be/wopPRfeeCeQ?si=zhnGDzrxXehxcbgA', 1, 0, '2025-12-13 14:51:57', '2025-12-13 14:51:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `courses_master`
--
ALTER TABLE `courses_master`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `gallery_master`
--
ALTER TABLE `gallery_master`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sendemaildetails`
--
ALTER TABLE `sendemaildetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `university_master`
--
ALTER TABLE `university_master`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses_master`
--
ALTER TABLE `courses_master`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty_master`
--
ALTER TABLE `faculty_master`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_master`
--
ALTER TABLE `gallery_master`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sendemaildetails`
--
ALTER TABLE `sendemaildetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university_master`
--
ALTER TABLE `university_master`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

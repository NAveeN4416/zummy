-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2019 at 09:41 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volive_zido`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title1_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title1_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content1_en` text CHARACTER SET utf8 NOT NULL,
  `content1_ar` text CHARACTER SET utf8 NOT NULL,
  `title2_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title2_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content2_en` text CHARACTER SET utf8 NOT NULL,
  `content2_ar` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title1_en`, `title1_ar`, `content1_en`, `content1_ar`, `title2_en`, `title2_ar`, `content2_en`, `content2_ar`, `image`, `latitude`, `longitude`, `address`) VALUES
(1, 'About', 'About Us ar', '<p><strong>Zido is</strong></p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. لقد كان لوريم إيبسوم النص القياسي المعياري في هذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ودمّعتها لعمل كتاب من نوع العينة. وقد نجا ليس فقط خمسة قرون ، ولكن أيضا قفزة في التنضيد الإلكتروني ، وتبقى في الأساس دون تغيير.</p>\r\n', 'Who we ', 'من نحن', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. لقد كان لوريم إيبسوم النص القياسي المعياري في هذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ودمّعتها لعمل كتاب من نوع العينة. وقد نجا ليس فقط خمسة قرون ، ولكن أيضا قفزة في التنضيد الإلكتروني ، وتبقى في الأساس دون تغيير.</p>\r\n', 'assets/uploads/about_us/about-img.png', 24.8301, 46.6866, 'No. 237, Riyadh Saudi Arabia');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title_en`, `title_ar`, `image`, `status`, `created_at`) VALUES
(8, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', 'assets/uploads/banners/zido1.png', 1, '2018-12-04 09:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `bid_value` int(11) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `acceptance_flag` int(1) NOT NULL DEFAULT '0' COMMENT '1- accept, 0- waiting , 2 - rejected',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `user_id`, `product_id`, `bid_value`, `comments`, `status`, `acceptance_flag`, `created_at`) VALUES
(2, 185, 169, 1100, '', 1, 1, '2019-01-08 06:49:36'),
(4, 185, 62, 300, '', 1, 1, '2019-01-08 07:00:09'),
(7, 314, 46, 1100, '', 1, 0, '2019-01-08 07:24:01'),
(8, 310, 184, 2000, '', 1, 0, '2019-01-08 07:34:18'),
(9, 310, 177, 6000, '', 1, 1, '2019-01-08 07:35:13'),
(10, 314, 45, 800, '', 1, 1, '2019-01-08 07:42:59'),
(11, 314, 57, 2000, '', 1, 0, '2019-01-08 07:44:29'),
(12, 310, 161, 500, '', 1, 0, '2019-01-08 07:57:00'),
(13, 312, 158, 3000, '', 1, 1, '2019-01-08 07:59:34'),
(14, 244, 183, 1000, '', 1, 0, '2019-01-08 08:01:33'),
(15, 244, 175, 6000, '', 1, 0, '2019-01-08 08:03:28'),
(16, 244, 87, 2000, '', 1, 0, '2019-01-08 09:05:51'),
(18, 186, 175, 6000, '', 1, 1, '2019-01-08 09:08:32'),
(19, 194, 176, 1500, '', 1, 1, '2019-01-08 09:12:17'),
(20, 294, 176, 1500, '', 1, 0, '2019-01-08 09:14:34'),
(21, 186, 178, 10000, '', 1, 0, '2019-01-08 09:16:50'),
(23, 194, 178, 10000, '', 1, 0, '2019-01-08 09:17:47'),
(24, 244, 74, 8000, '', 1, 0, '2019-01-08 09:21:26'),
(26, 186, 169, 10000, '', 1, 0, '2019-01-08 09:48:54'),
(27, 244, 184, 1100, '', 1, 1, '2019-01-08 10:02:54'),
(28, 244, 181, 6000, '', 1, 2, '2019-01-08 10:29:36'),
(29, 244, 173, 12000, '', 1, 0, '2019-01-08 10:33:53'),
(30, 306, 46, 1100, '', 1, 0, '2019-01-08 11:41:37'),
(31, 294, 174, 6000, '', 1, 0, '2019-01-08 11:45:13'),
(32, 294, 172, 6000, '', 1, 0, '2019-01-08 11:47:05'),
(33, 294, 173, 11000, '', 1, 0, '2019-01-08 11:48:56'),
(34, 294, 50, 3000, '', 1, 0, '2019-01-08 11:50:04'),
(35, 186, 183, 1000, '', 1, 0, '2019-01-08 11:58:40'),
(36, 186, 182, 600, '', 1, 0, '2019-01-08 12:07:23'),
(37, 186, 180, 6000, '', 1, 0, '2019-01-08 12:09:07'),
(38, 4, 183, 600, '', 1, 0, '2019-01-08 12:42:16'),
(39, 4, 182, 600, '', 1, 2, '2019-01-08 12:42:42'),
(40, 4, 48, 3000, '', 1, 0, '2019-01-08 12:43:51'),
(41, 4, 173, 20000, '', 1, 0, '2019-01-08 12:44:17'),
(42, 236, 183, 600, '', 1, 1, '2019-01-08 12:47:56'),
(43, 236, 182, 600, '', 1, 2, '2019-01-08 12:48:20'),
(44, 236, 171, 6000, '', 1, 0, '2019-01-08 12:51:44'),
(45, 236, 72, 3000, '', 1, 0, '2019-01-08 12:52:29'),
(46, 236, 181, 6000, '', 1, 0, '2019-01-08 12:53:28'),
(47, 236, 180, 6000, '', 1, 0, '2019-01-08 12:53:54'),
(48, 236, 165, 300, '', 1, 2, '2019-01-08 13:03:02'),
(49, 236, 70, 400, '', 1, 0, '2019-01-08 13:05:33'),
(50, 194, 174, 6000, '', 1, 0, '2019-01-08 13:27:12'),
(51, 194, 171, 7000, '', 1, 0, '2019-01-08 13:27:37'),
(52, 294, 57, 2000, '', 1, 0, '2019-01-08 13:53:45'),
(53, 294, 143, 500, '', 1, 0, '2019-01-08 14:05:39'),
(54, 294, 142, 500, '', 1, 0, '2019-01-08 14:06:10'),
(55, 295, 30, 200, '', 1, 0, '2019-01-08 15:12:31'),
(56, 295, 181, 20000, '', 1, 0, '2019-01-08 15:14:57'),
(57, 295, 170, 500, '', 1, 0, '2019-01-08 15:26:11'),
(58, 295, 171, 6000, '', 1, 0, '2019-01-08 15:34:12'),
(59, 280, 181, 5000, '', 1, 0, '2019-01-08 18:47:34'),
(61, 194, 185, 100, '', 1, 1, '2019-01-09 07:05:43'),
(67, 194, 170, 500, '', 1, 0, '2019-01-09 09:38:04'),
(68, 295, 188, 5000, '', 1, 0, '2019-01-09 18:47:06'),
(69, 4, 188, 200, '', 1, 2, '2019-01-10 05:52:06'),
(70, 186, 154, 1000, '', 1, 0, '2019-01-10 10:06:37'),
(71, 244, 187, 200, '', 1, 2, '2019-01-10 10:06:51'),
(72, 244, 187, 500, '', 1, 2, '2019-01-10 10:07:40'),
(74, 312, 197, 6000, '', 1, 2, '2019-01-10 10:08:27'),
(75, 312, 191, 200, '', 1, 2, '2019-01-10 10:12:12'),
(76, 244, 172, 6000, '', 1, 0, '2019-01-10 10:18:43'),
(77, 244, 187, 1000, '', 1, 2, '2019-01-10 10:24:15'),
(80, 295, 187, 50000, '', 1, 2, '2019-01-10 11:11:49'),
(81, 280, 259, 200, '', 1, 0, '2019-01-11 08:35:48'),
(82, 320, 269, 200, '', 1, 0, '2019-01-11 13:28:23'),
(83, 280, 267, 4444, '', 1, 0, '2019-01-11 16:48:51'),
(84, 186, 270, 100, '', 1, 0, '2019-01-12 06:55:10'),
(85, 286, 273, 1000, '', 1, 2, '2019-01-15 18:40:05'),
(86, 186, 275, 200, '', 1, 0, '2019-01-16 14:10:35'),
(87, 185, 275, 200, '', 1, 0, '2019-01-16 14:11:28'),
(88, 306, 275, 200, '', 1, 0, '2019-01-16 14:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `email`, `mobile`, `file`, `comment`) VALUES
(1, 'Naveen', 'naveen@gmail.com', '1234567890', 'assets/uploads/careers/Zido_website.pdf', 'Clarification about job'),
(2, 'Kumar', 'kumar@yopmail.com', '123453142', 'assets/uploads/careers/Android.pdf', 'Applying for the job'),
(3, 'joshi', 'joshibhushit@volivesolutions.com', '+919985033903', 'assets/uploads/careers/My_Discounter_Tickets_Report_091017.pdf', 'carrire');

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `id` int(11) NOT NULL,
  `name_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`id`, `name_en`, `name_ar`, `image`, `status`, `created_at`) VALUES
(1, 'MINI', 'MINI', 'assets/uploads/car_types/audi_(2).png', 1, '2018-12-26 13:36:33'),
(2, 'Sedan', 'Sedan', 'assets/uploads/car_types/9.png', 1, '2018-12-26 13:36:53'),
(3, 'Micro', 'Micro', 'assets/uploads/car_types/10png.png', 1, '2018-12-26 13:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_en` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_ar`, `image`, `status`, `created_at`) VALUES
(1, 'Toyota', 'تويوتا', 'assets/uploads/user_profiles/Mask_Group_87@3x.png', 1, '2018-11-14 13:33:42'),
(2, 'Mercedes Benz', 'مرسيدس بنز', 'assets/uploads/user_profiles/Mask_Group_-1@3x.png', 1, '2018-11-15 05:29:32'),
(3, 'BMW', 'بي إم دبليو', 'assets/uploads/user_profiles/Mask_Group_-2@3x.png', 1, '2018-11-15 05:30:09'),
(4, 'Honda', 'هوندا', 'assets/uploads/user_profiles/Mask_Group_97@3x.png', 1, '2018-11-15 05:31:04'),
(5, 'Ford', 'مخاضة', 'assets/uploads/user_profiles/Mask_Group_88@3x.png', 1, '2018-11-15 05:31:43'),
(6, 'Audi', 'أودي', 'assets/uploads/user_profiles/Mask_Group_93@3x.png', 1, '2018-11-15 05:32:21'),
(7, 'Voxwagon', 'فولكس واجن', 'assets/uploads/user_profiles/Mask_Group_92@3x.png', 1, '2018-11-15 05:33:01'),
(8, 'Porche', 'بورشه', 'assets/uploads/user_profiles/Mask_Group_94@3x.png', 1, '2018-11-15 05:33:44'),
(9, 'Hundai', 'هيونداي', 'assets/uploads/user_profiles/Mask_Group_89@3x.png', 1, '2018-11-15 11:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name_en`, `name_ar`, `status`, `created_at`) VALUES
(1, 191, 'Riyadh ', 'الرياض', 1, '2018-11-22 06:22:56'),
(2, 191, 'Makkah ', 'مكه', 1, '2018-11-22 06:24:02'),
(3, 191, 'Medina ', 'المدينه', 1, '2018-11-22 06:24:19'),
(4, 191, 'Jeddah ', 'جده', 1, '2018-11-22 06:24:36'),
(5, 191, 'Dammam ', 'الدمام', 1, '2018-11-22 06:24:52'),
(6, 191, 'Hail', 'حائل', 1, '2018-11-22 06:25:13'),
(7, 191, 'Tabuk', 'تبوك', 1, '2018-11-22 06:25:32'),
(8, 191, 'Qassim', 'القصيم', 1, '2018-11-22 06:25:48'),
(9, 191, 'Abha ', 'أبها', 1, '2018-11-22 06:26:02'),
(10, 191, 'Baha ', 'الباحة', 1, '2018-11-22 06:26:17'),
(11, 191, 'Jazan ', 'جيزان', 1, '2018-11-22 06:26:31'),
(12, 191, 'Najran ', 'نجران', 1, '2018-11-22 06:27:08'),
(13, 191, 'Rafha ', 'رفحاء', 1, '2018-11-22 06:27:23'),
(14, 191, 'Bisha ', 'بيشه', 1, '2018-11-22 06:27:37'),
(15, 191, 'Arar ', 'عرعر', 1, '2018-11-22 06:27:55'),
(16, 191, 'Taif ', 'الطائف', 1, '2018-11-22 06:28:09'),
(17, 191, 'Hafar Al Batin', 'حفرالباطن', 1, '2018-11-22 06:28:24'),
(18, 191, 'Yanbu ', 'ينبع', 1, '2018-11-22 06:28:39'),
(19, 191, 'Sakaka ', 'سكاكا', 1, '2018-11-22 06:29:19'),
(20, 191, 'Hasa ', 'الاحساء', 1, '2018-11-22 06:31:32'),
(21, 191, 'Kharj ', 'الخرج', 1, '2018-11-22 06:31:46'),
(22, 191, 'Qurayyat ', 'القريات', 1, '2018-11-22 06:32:02'),
(23, 191, 'Jubail ', 'الجبيل', 1, '2018-11-22 06:32:13'),
(24, 191, 'Duwadmi ', 'الدوادمي', 1, '2018-11-22 06:32:28'),
(25, 191, 'Dubai ', 'دبي', 1, '2018-11-22 06:32:43'),
(26, 191, 'Kuwait ', 'الكويت', 1, '2018-11-22 06:32:56'),
(27, 191, 'Bahrain ', 'البحرين', 1, '2018-11-22 06:33:10'),
(28, 191, 'Abu Dhabi', 'ابوظبي', 1, '2018-11-22 06:33:24'),
(29, 191, 'Muscat ', 'مسقط', 1, '2018-11-22 06:33:37'),
(30, 1, 'testcity', 'testcity', 0, '2018-12-01 06:47:27'),
(31, 1, 'Hyderbad', 'Hyderbad', 0, '2018-12-04 09:46:45'),
(32, 1, 'aaa', 'aaa', 0, '2018-12-04 13:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `color_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `color_en`, `color_ar`, `status`, `created_at`) VALUES
(1, 'Green', 'Green', 'Green ar', 1, '2018-11-15 10:09:01'),
(2, 'Voilet', 'Voilet', 'Voilet', 1, '2018-11-15 10:09:01'),
(4, 'White', 'White', 'White ar', 1, '2018-11-15 10:48:46'),
(5, 'Black', 'Black', 'Black ar', 1, '2018-11-15 10:52:25'),
(7, 'Orange', 'Orange', 'Orange', 1, '2018-12-04 09:44:45'),
(8, 'navy blue', 'navy blue', 'navy blue', 1, '2018-12-04 13:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE `contact_list` (
  `id` int(12) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(245) COLLATE latin1_general_ci NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `contact_list`
--

INSERT INTO `contact_list` (`id`, `name`, `subject`, `email`, `mobile`, `comment`, `created_at`) VALUES
(1, 'ASD', 'asfsdfas', 'asdas@fas', '654164', 'dfafdsdfasdfasd', '2018-11-28 05:04:33'),
(2, 'asdf', 'asdf', 'sadf@sdfa', '547867', 'asdfasdfasdf', '2018-11-28 05:08:16'),
(3, 'joshi', 'qurey', 'joshibhushit@volivesolutions.com', '99', 'i have query in my prodcut', '2018-12-01 05:52:42'),
(4, 'anjaneyulu', 'Testing ', 'anjaneyulu228@gmail.com', '432234324', 'This is testing', '2018-12-04 09:27:52'),
(5, 'zido', 'Testing ', 'zido@gmail.com', '56789455', 'Testing ', '2018-12-04 13:12:02'),
(6, 'fsdf', 'sfsd', 'dfgsdfg@dfsdfsdfg', '987854', 'sdafsdf', '2018-12-10 05:32:51'),
(7, 'sdfsdf', 'sdfsdf', 'sdfsdf@dgsdfgdf', '8646589', 'sfsdfsdfs', '2018-12-10 05:34:07'),
(8, 'بدور', 'الرياض', 'bodoor@hotmail.com', '0565123456', 'hi', '2018-12-19 20:03:14'),
(9, 'joshi', 'nice', 'joshibhushit@gmail.com', '9985033903', 'nice', '2018-12-21 07:20:21'),
(10, 'aaaa', '324324', 'aaa@gmail.com', '234324', '324324', '2018-12-21 09:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title_en` text CHARACTER SET utf8 NOT NULL,
  `title_ar` text CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title_en`, `title_ar`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, 'Contact ', 'اتصل بنا', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. كان لوريم إيبسوم النص القياسي المعياري في هذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق وضمتها لعمل كتاب من نوع العينة</p>\r\n', 0, '2018-11-23 07:30:47'),
(2, 'Auction Your Car', 'مزاد سيارتك', '<p>Lorem Ipsum is simply a formative text in the printing and typography industry. Lorem Epsom was the standard standard text in this industry since the 16th century, when an unknown printer took a set of dishes and combined it to make a sample book</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. كان لوريم إيبسوم النص القياسي المعياري في هذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق وضمتها لعمل كتاب من نوع العينة</p>\r\n', 0, '2018-11-23 07:40:08'),
(3, 'Careers', 'التوظيف', '<p>Realistic job previews (RJPs) are designed to give a flavour of a role before a prospect applies for a job, and doesn&rsquo;t usually count towards an official assessment.</p>\r\n\r\n<p>RJPs can be executed in a variety of formats, from simple scenario-based Q&amp;As to interactive videos,&nbsp;like <a href=\"http://ukearlycareers.thalesgroup.com/apprenticeships\" target=\"_blank\">Thales&rsquo;s &#39;The Trip&#39; game</a>, and <a href=\"http://www.nats.aero/careers/trainee-air-traffic-controllers/games/\" target=\"_blank\">NATS&#39; series of mini-games for trainee air traffic controllers</a>.&nbsp;</p>\r\n', '<p>تم تصميم معاينات الوظائف الواقعية (RJPs) لإعطاء نكهة لدور قبل أن ينطبق احتمال على وظيفة ، ولا يتم احتسابها عادةً في تقييم رسمي.</p>\r\n\r\n<p>يمكن تنفيذ RJPs في مجموعة متنوعة من التنسيقات ، بدءًا من الأسئلة والأجوبة البسيطة المستندة إلى السيناريوهات إلى مقاطع الفيديو التفاعلية ، مثل لعبة Thales التي تحمل عنوان &quot;الرحلة&quot; وسلسلة ألعاب مصغرة لـ NATS لمتدربي حركة المرور المتدربين.</p>\r\n', 0, '2018-12-27 04:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `country_flag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `priority`, `country_flag`) VALUES
(1, 'AF', 'Afghanistan', 93, 0, ''),
(2, 'AL', 'Albania', 355, 0, ''),
(3, 'DZ', 'Algeria', 213, 0, ''),
(4, 'AS', 'American Samoa', 1684, 0, ''),
(5, 'AD', 'Andorra', 376, 0, ''),
(6, 'AO', 'Angola', 244, 0, ''),
(7, 'AI', 'Anguilla', 1264, 0, ''),
(8, 'AQ', 'Antarctica', 0, 0, ''),
(9, 'AG', 'Antigua And Barbuda', 1268, 0, ''),
(10, 'AR', 'Argentina', 54, 0, ''),
(11, 'AM', 'Armenia', 374, 0, ''),
(12, 'AW', 'Aruba', 297, 0, ''),
(13, 'AU', 'Australia', 61, 0, ''),
(14, 'AT', 'Austria', 43, 0, ''),
(15, 'AZ', 'Azerbaijan', 994, 0, ''),
(16, 'BS', 'Bahamas The', 1242, 0, ''),
(17, 'BH', 'Bahrain', 973, 1, 'assets/flags/Bahrain.png'),
(18, 'BD', 'Bangladesh', 880, 0, ''),
(19, 'BB', 'Barbados', 1246, 0, ''),
(20, 'BY', 'Belarus', 375, 0, ''),
(21, 'BE', 'Belgium', 32, 0, ''),
(22, 'BZ', 'Belize', 501, 0, ''),
(23, 'BJ', 'Benin', 229, 0, ''),
(24, 'BM', 'Bermuda', 1441, 0, ''),
(25, 'BT', 'Bhutan', 975, 0, ''),
(26, 'BO', 'Bolivia', 591, 0, ''),
(27, 'BA', 'Bosnia and Herzegovina', 387, 0, ''),
(28, 'BW', 'Botswana', 267, 0, ''),
(29, 'BV', 'Bouvet Island', 0, 0, ''),
(30, 'BR', 'Brazil', 55, 0, ''),
(31, 'IO', 'British Indian Ocean Territory', 246, 0, ''),
(32, 'BN', 'Brunei', 673, 0, ''),
(33, 'BG', 'Bulgaria', 359, 0, ''),
(34, 'BF', 'Burkina Faso', 226, 0, ''),
(35, 'BI', 'Burundi', 257, 0, ''),
(36, 'KH', 'Cambodia', 855, 0, ''),
(37, 'CM', 'Cameroon', 237, 0, ''),
(38, 'CA', 'Canada', 1, 0, ''),
(39, 'CV', 'Cape Verde', 238, 0, ''),
(40, 'KY', 'Cayman Islands', 1345, 0, ''),
(41, 'CF', 'Central African Republic', 236, 0, ''),
(42, 'TD', 'Chad', 235, 0, ''),
(43, 'CL', 'Chile', 56, 0, ''),
(44, 'CN', 'China', 86, 0, ''),
(45, 'CX', 'Christmas Island', 61, 0, ''),
(46, 'CC', 'Cocos (Keeling) Islands', 672, 0, ''),
(47, 'CO', 'Colombia', 57, 0, ''),
(48, 'KM', 'Comoros', 269, 0, ''),
(49, 'CG', 'Republic Of The Congo', 242, 0, ''),
(50, 'CD', 'Democratic Republic Of The Congo', 242, 0, ''),
(51, 'CK', 'Cook Islands', 682, 0, ''),
(52, 'CR', 'Costa Rica', 506, 0, ''),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, 0, ''),
(54, 'HR', 'Croatia (Hrvatska)', 385, 0, ''),
(55, 'CU', 'Cuba', 53, 0, ''),
(56, 'CY', 'Cyprus', 357, 0, ''),
(57, 'CZ', 'Czech Republic', 420, 0, ''),
(58, 'DK', 'Denmark', 45, 0, ''),
(59, 'DJ', 'Djibouti', 253, 0, ''),
(60, 'DM', 'Dominica', 1767, 0, ''),
(61, 'DO', 'Dominican Republic', 1809, 0, ''),
(62, 'TP', 'East Timor', 670, 0, ''),
(63, 'EC', 'Ecuador', 593, 0, ''),
(64, 'EG', 'Egypt', 20, 0, ''),
(65, 'SV', 'El Salvador', 503, 0, ''),
(66, 'GQ', 'Equatorial Guinea', 240, 0, ''),
(67, 'ER', 'Eritrea', 291, 0, ''),
(68, 'EE', 'Estonia', 372, 0, ''),
(69, 'ET', 'Ethiopia', 251, 0, ''),
(70, 'XA', 'External Territories of Australia', 61, 0, ''),
(71, 'FK', 'Falkland Islands', 500, 0, ''),
(72, 'FO', 'Faroe Islands', 298, 0, ''),
(73, 'FJ', 'Fiji Islands', 679, 0, ''),
(74, 'FI', 'Finland', 358, 0, ''),
(75, 'FR', 'France', 33, 0, ''),
(76, 'GF', 'French Guiana', 594, 0, ''),
(77, 'PF', 'French Polynesia', 689, 0, ''),
(78, 'TF', 'French Southern Territories', 0, 0, ''),
(79, 'GA', 'Gabon', 241, 0, ''),
(80, 'GM', 'Gambia The', 220, 0, ''),
(81, 'GE', 'Georgia', 995, 0, ''),
(82, 'DE', 'Germany', 49, 0, ''),
(83, 'GH', 'Ghana', 233, 0, ''),
(84, 'GI', 'Gibraltar', 350, 0, ''),
(85, 'GR', 'Greece', 30, 0, ''),
(86, 'GL', 'Greenland', 299, 0, ''),
(87, 'GD', 'Grenada', 1473, 0, ''),
(88, 'GP', 'Guadeloupe', 590, 0, ''),
(89, 'GU', 'Guam', 1671, 0, ''),
(90, 'GT', 'Guatemala', 502, 0, ''),
(91, 'XU', 'Guernsey and Alderney', 44, 0, ''),
(92, 'GN', 'Guinea', 224, 0, ''),
(93, 'GW', 'Guinea-Bissau', 245, 0, ''),
(94, 'GY', 'Guyana', 592, 0, ''),
(95, 'HT', 'Haiti', 509, 0, ''),
(96, 'HM', 'Heard and McDonald Islands', 0, 0, ''),
(97, 'HN', 'Honduras', 504, 0, ''),
(98, 'HK', 'Hong Kong S.A.R.', 852, 0, ''),
(99, 'HU', 'Hungary', 36, 0, ''),
(100, 'IS', 'Iceland', 354, 0, ''),
(101, 'IN', 'India', 91, 0, ''),
(102, 'ID', 'Indonesia', 62, 0, ''),
(103, 'IR', 'Iran', 98, 0, ''),
(104, 'IQ', 'Iraq', 964, 0, 'assets/flags/iraq.png'),
(105, 'IE', 'Ireland', 353, 0, ''),
(106, 'IL', 'Israel', 972, 0, ''),
(107, 'IT', 'Italy', 39, 0, ''),
(108, 'JM', 'Jamaica', 1876, 0, ''),
(109, 'JP', 'Japan', 81, 0, ''),
(110, 'XJ', 'Jersey', 44, 0, ''),
(111, 'JO', 'Jordan', 962, 0, 'assets/flags/jordan.png'),
(112, 'KZ', 'Kazakhstan', 7, 0, ''),
(113, 'KE', 'Kenya', 254, 0, ''),
(114, 'KI', 'Kiribati', 686, 0, ''),
(115, 'KP', 'Korea North', 850, 0, ''),
(116, 'KR', 'Korea South', 82, 0, ''),
(117, 'KW', 'Kuwait', 965, 1, 'assets/flags/Kuwait.png'),
(118, 'KG', 'Kyrgyzstan', 996, 0, ''),
(119, 'LA', 'Laos', 856, 0, ''),
(120, 'LV', 'Latvia', 371, 0, ''),
(121, 'LB', 'Lebanon', 961, 0, ''),
(122, 'LS', 'Lesotho', 266, 0, ''),
(123, 'LR', 'Liberia', 231, 0, ''),
(124, 'LY', 'Libya', 218, 0, ''),
(125, 'LI', 'Liechtenstein', 423, 0, ''),
(126, 'LT', 'Lithuania', 370, 0, ''),
(127, 'LU', 'Luxembourg', 352, 0, ''),
(128, 'MO', 'Macau S.A.R.', 853, 0, ''),
(129, 'MK', 'Macedonia', 389, 0, ''),
(130, 'MG', 'Madagascar', 261, 0, ''),
(131, 'MW', 'Malawi', 265, 0, ''),
(132, 'MY', 'Malaysia', 60, 0, ''),
(133, 'MV', 'Maldives', 960, 0, ''),
(134, 'ML', 'Mali', 223, 0, ''),
(135, 'MT', 'Malta', 356, 0, ''),
(136, 'XM', 'Man (Isle of)', 44, 0, ''),
(137, 'MH', 'Marshall Islands', 692, 0, ''),
(138, 'MQ', 'Martinique', 596, 0, ''),
(139, 'MR', 'Mauritania', 222, 0, ''),
(140, 'MU', 'Mauritius', 230, 0, ''),
(141, 'YT', 'Mayotte', 269, 0, ''),
(142, 'MX', 'Mexico', 52, 0, ''),
(143, 'FM', 'Micronesia', 691, 0, ''),
(144, 'MD', 'Moldova', 373, 0, ''),
(145, 'MC', 'Monaco', 377, 0, ''),
(146, 'MN', 'Mongolia', 976, 0, ''),
(147, 'MS', 'Montserrat', 1664, 0, ''),
(148, 'MA', 'Morocco', 212, 0, ''),
(149, 'MZ', 'Mozambique', 258, 0, ''),
(150, 'MM', 'Myanmar', 95, 0, ''),
(151, 'NA', 'Namibia', 264, 0, ''),
(152, 'NR', 'Nauru', 674, 0, ''),
(153, 'NP', 'Nepal', 977, 0, ''),
(154, 'AN', 'Netherlands Antilles', 599, 0, ''),
(155, 'NL', 'Netherlands The', 31, 0, ''),
(156, 'NC', 'New Caledonia', 687, 0, ''),
(157, 'NZ', 'New Zealand', 64, 0, ''),
(158, 'NI', 'Nicaragua', 505, 0, ''),
(159, 'NE', 'Niger', 227, 0, ''),
(160, 'NG', 'Nigeria', 234, 0, ''),
(161, 'NU', 'Niue', 683, 0, ''),
(162, 'NF', 'Norfolk Island', 672, 0, ''),
(163, 'MP', 'Northern Mariana Islands', 1670, 0, ''),
(164, 'NO', 'Norway', 47, 0, ''),
(165, 'OM', 'Oman', 968, 1, 'assets/flags/oman.png'),
(166, 'PK', 'Pakistan', 92, 0, ''),
(167, 'PW', 'Palau', 680, 0, ''),
(168, 'PS', 'Palestinian Territory Occupied', 970, 0, ''),
(169, 'PA', 'Panama', 507, 0, ''),
(170, 'PG', 'Papua new Guinea', 675, 0, ''),
(171, 'PY', 'Paraguay', 595, 0, ''),
(172, 'PE', 'Peru', 51, 0, ''),
(173, 'PH', 'Philippines', 63, 0, ''),
(174, 'PN', 'Pitcairn Island', 0, 0, ''),
(175, 'PL', 'Poland', 48, 0, ''),
(176, 'PT', 'Portugal', 351, 0, ''),
(177, 'PR', 'Puerto Rico', 1787, 0, ''),
(178, 'QA', 'Qatar', 974, 1, 'assets/flags/Qatar.png'),
(179, 'RE', 'Reunion', 262, 0, ''),
(180, 'RO', 'Romania', 40, 0, ''),
(181, 'RU', 'Russia', 70, 0, ''),
(182, 'RW', 'Rwanda', 250, 0, ''),
(183, 'SH', 'Saint Helena', 290, 0, ''),
(184, 'KN', 'Saint Kitts And Nevis', 1869, 0, ''),
(185, 'LC', 'Saint Lucia', 1758, 0, ''),
(186, 'PM', 'Saint Pierre and Miquelon', 508, 0, ''),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, 0, ''),
(188, 'WS', 'Samoa', 684, 0, ''),
(189, 'SM', 'San Marino', 378, 0, ''),
(190, 'ST', 'Sao Tome and Principe', 239, 0, ''),
(191, 'SA', 'Saudi Arabia', 966, 1, 'assets/flags/saudi.png'),
(192, 'SN', 'Senegal', 221, 0, ''),
(193, 'RS', 'Serbia', 381, 0, ''),
(194, 'SC', 'Seychelles', 248, 0, ''),
(195, 'SL', 'Sierra Leone', 232, 0, ''),
(196, 'SG', 'Singapore', 65, 0, ''),
(197, 'SK', 'Slovakia', 421, 0, ''),
(198, 'SI', 'Slovenia', 386, 0, ''),
(199, 'XG', 'Smaller Territories of the UK', 44, 0, ''),
(200, 'SB', 'Solomon Islands', 677, 0, ''),
(201, 'SO', 'Somalia', 252, 0, ''),
(202, 'ZA', 'South Africa', 27, 0, ''),
(203, 'GS', 'South Georgia', 0, 0, ''),
(204, 'SS', 'South Sudan', 211, 0, ''),
(205, 'ES', 'Spain', 34, 0, ''),
(206, 'LK', 'Sri Lanka', 94, 0, ''),
(207, 'SD', 'Sudan', 249, 0, ''),
(208, 'SR', 'Suriname', 597, 0, ''),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, 0, ''),
(210, 'SZ', 'Swaziland', 268, 0, ''),
(211, 'SE', 'Sweden', 46, 0, ''),
(212, 'CH', 'Switzerland', 41, 0, ''),
(213, 'SY', 'Syria', 963, 0, ''),
(214, 'TW', 'Taiwan', 886, 0, ''),
(215, 'TJ', 'Tajikistan', 992, 0, ''),
(216, 'TZ', 'Tanzania', 255, 0, ''),
(217, 'TH', 'Thailand', 66, 0, ''),
(218, 'TG', 'Togo', 228, 0, ''),
(219, 'TK', 'Tokelau', 690, 0, ''),
(220, 'TO', 'Tonga', 676, 0, ''),
(221, 'TT', 'Trinidad And Tobago', 1868, 0, ''),
(222, 'TN', 'Tunisia', 216, 0, ''),
(223, 'TR', 'Turkey', 90, 0, ''),
(224, 'TM', 'Turkmenistan', 7370, 0, ''),
(225, 'TC', 'Turks And Caicos Islands', 1649, 0, ''),
(226, 'TV', 'Tuvalu', 688, 0, ''),
(227, 'UG', 'Uganda', 256, 0, ''),
(228, 'UA', 'Ukraine', 380, 0, ''),
(229, 'AE', 'United Arab Emirates', 971, 1, 'assets/flags/UAE.png'),
(230, 'GB', 'United Kingdom', 44, 0, ''),
(231, 'US', 'United States', 1, 0, ''),
(232, 'UM', 'United States Minor Outlying Islands', 1, 0, ''),
(233, 'UY', 'Uruguay', 598, 0, ''),
(234, 'UZ', 'Uzbekistan', 998, 0, ''),
(235, 'VU', 'Vanuatu', 678, 0, ''),
(236, 'VA', 'Vatican City State (Holy See)', 39, 0, ''),
(237, 'VE', 'Venezuela', 58, 0, ''),
(238, 'VN', 'Vietnam', 84, 0, ''),
(239, 'VG', 'Virgin Islands (British)', 1284, 0, ''),
(240, 'VI', 'Virgin Islands (US)', 1340, 0, ''),
(241, 'WF', 'Wallis And Futuna Islands', 681, 0, ''),
(242, 'EH', 'Western Sahara', 212, 0, ''),
(243, 'YE', 'Yemen', 967, 0, ''),
(244, 'YU', 'Yugoslavia', 38, 0, ''),
(245, 'ZM', 'Zambia', 260, 0, ''),
(246, 'ZW', 'Zimbabwe', 263, 0, ''),
(247, 'tt', 'test', 22, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Soon</strong></p>\r\n', '<p>كيف تتم عملية الاشتراك؟</p>\r\n\r\n<p>كيف يظهر لدي ان احدهم زاود على سيارتي؟</p>\r\n\r\n<p>كيف&nbsp;</p>\r\n', 'active', '2018-12-21 18:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `product_id`, `status`, `created_at`) VALUES
(6, 1, 2, 1, '2018-11-20 10:12:53'),
(38, 2, 15, 1, '2018-11-22 06:56:46'),
(66, 117, 14, 1, '2018-11-29 07:23:06'),
(68, 117, 30, 1, '2018-11-29 07:39:56'),
(70, 117, 13, 1, '2018-11-29 09:00:48'),
(95, 117, 15, 1, '2018-11-30 10:46:16'),
(98, 117, 11, 1, '2018-11-30 12:52:49'),
(118, 88, 14, 1, '2018-12-03 11:42:18'),
(121, 2, 14, 1, '2018-12-03 13:18:50'),
(125, 185, 49, 1, '2018-12-04 06:55:27'),
(131, 187, 53, 1, '2018-12-04 07:31:44'),
(137, 188, 62, 1, '2018-12-04 09:57:56'),
(140, 188, 53, 1, '2018-12-04 10:05:36'),
(141, 194, 62, 1, '2018-12-04 10:28:11'),
(142, 188, 56, 1, '2018-12-04 10:41:31'),
(144, 210, 61, 1, '2018-12-05 10:14:46'),
(151, 226, 58, 1, '2018-12-06 11:20:26'),
(152, 188, 45, 1, '2018-12-06 11:55:16'),
(153, 188, 61, 1, '2018-12-06 11:55:47'),
(155, 188, 55, 1, '2018-12-06 12:41:05'),
(161, 186, 58, 1, '2018-12-07 17:56:09'),
(162, 188, 68, 1, '2018-12-10 06:41:15'),
(164, 194, 69, 1, '2018-12-11 10:39:48'),
(167, 214, 57, 1, '2018-12-11 11:34:53'),
(170, 245, 74, 1, '2018-12-12 07:02:06'),
(171, 244, 74, 1, '2018-12-12 07:02:23'),
(172, 245, 73, 1, '2018-12-12 07:02:53'),
(173, 244, 75, 1, '2018-12-12 07:41:01'),
(175, 203, 85, 1, '2018-12-13 07:09:47'),
(177, 260, 96, 1, '2018-12-13 11:21:49'),
(178, 188, 81, 1, '2018-12-13 13:02:10'),
(179, 188, 58, 1, '2018-12-13 13:05:40'),
(182, 244, 95, 1, '2018-12-14 07:59:09'),
(184, 236, 70, 1, '2018-12-17 06:51:03'),
(186, 194, 55, 1, '2018-12-17 09:00:30'),
(187, 225, 84, 1, '2018-12-17 11:18:09'),
(188, 225, 95, 1, '2018-12-17 11:31:52'),
(189, 194, 100, 1, '2018-12-17 13:03:59'),
(190, 185, 101, 1, '2018-12-18 07:39:44'),
(191, 273, 100, 1, '2018-12-18 07:55:58'),
(192, 277, 101, 1, '2018-12-18 10:21:55'),
(193, 186, 95, 1, '2018-12-18 10:49:32'),
(195, 281, 104, 1, '2018-12-19 07:25:48'),
(196, 281, 95, 1, '2018-12-19 07:29:39'),
(197, 285, 106, 1, '2018-12-19 10:17:26'),
(198, 285, 108, 1, '2018-12-19 10:17:45'),
(199, 281, 112, 1, '2018-12-19 21:21:16'),
(200, 185, 108, 1, '2018-12-20 07:07:46'),
(201, 262, 111, 1, '2018-12-20 13:12:27'),
(202, 185, 116, 1, '2018-12-21 05:44:16'),
(203, 186, 116, 1, '2018-12-21 13:35:42'),
(204, 186, 113, 1, '2018-12-21 13:35:49'),
(205, 281, 122, 1, '2018-12-21 21:50:50'),
(206, 280, 95, 1, '2018-12-22 09:27:38'),
(207, 185, 126, 1, '2018-12-26 13:24:44'),
(208, 185, 56, 1, '2018-12-27 07:18:02'),
(209, 185, 55, 1, '2018-12-27 07:18:12'),
(211, 291, 127, 1, '2018-12-27 11:36:55'),
(214, 188, 133, 1, '2018-12-28 11:53:56'),
(215, 188, 131, 1, '2018-12-28 12:52:13'),
(216, 188, 130, 1, '2018-12-29 07:24:15'),
(217, 186, 132, 1, '2018-12-29 12:23:46'),
(218, 305, 161, 1, '2019-01-03 10:07:44'),
(219, 186, 151, 1, '2019-01-03 13:45:29'),
(221, 188, 182, 1, '2019-01-07 10:56:33'),
(223, 312, 249, 1, '2019-01-11 05:14:03'),
(224, 188, 243, 1, '2019-01-11 05:17:20'),
(225, 188, 125, 1, '2019-01-11 06:48:51'),
(226, 280, 259, 1, '2019-01-11 08:36:04'),
(227, 306, 46, 1, '2019-01-11 10:09:39'),
(228, 320, 267, 1, '2019-01-11 13:06:38'),
(229, 320, 235, 1, '2019-01-11 13:26:14'),
(230, 320, 269, 1, '2019-01-11 13:28:44'),
(233, 186, 178, 1, '2019-01-12 18:54:23'),
(235, 280, 124, 1, '2019-01-16 13:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. لقد كان لوريم إيبسوم النص القياسي المعياري لهذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ، وهرعت بها لعمل كتاب من نوع العينة. وقد نجا ليس فقط خمسة قرون ، ولكن أيضا قفزة في التنضيد الإلكتروني ، وتبقى في جوهرها دون تغيير. تم تعميمها في الستينيات مع إصدار أوراق Letraset التي تحتوي على ممرات Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.</p>\r\n', 'active', '2018-12-04 10:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_address` text CHARACTER SET utf8 NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_address`, `date_created`) VALUES
(1, '963524', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `email`, `created_at`) VALUES
(1, 'naveen@yopmail.com', '2018-11-28 04:43:53'),
(2, 'anjaneyulu@gmail.com', '2018-12-13 07:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `bid_id` int(11) NOT NULL,
  `bid_value` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `title_en` varchar(500) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(500) CHARACTER SET utf8 NOT NULL,
  `message_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `message_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `accept_reject_flag` int(11) NOT NULL DEFAULT '0',
  `read_flag` int(1) NOT NULL DEFAULT '0' COMMENT '1- read, 0-unread',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `product_id`, `bid_id`, `bid_value`, `from_user`, `to_user`, `title_en`, `title_ar`, `message_en`, `message_ar`, `type`, `accept_reject_flag`, `read_flag`, `created_at`) VALUES
(2, 169, 1, '1000', 306, 185, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Mercedes Benz - M2', 'Mercedes Benz - M2 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-08 06:45:28'),
(3, 169, 2, '1100', 185, 306, 'New Bid by sana', 'sana المزايدة الجديدة', 'New bid 1100 SAR on Mercedes Benz - M2', 'Mercedes Benz - M2 SAR على 1100 محاولة جديدة', '1', 1, 1, '2019-01-08 06:49:36'),
(4, 169, 2, '1100', 306, 185, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Mercedes Benz - M2', 'Mercedes Benz - M2 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 06:53:43'),
(6, 62, 3, '200', 188, 185, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Audi - Q8', 'Audi - Q8 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-08 07:00:01'),
(7, 62, 4, '300', 185, 188, 'New Bid by sana', 'sana المزايدة الجديدة', 'New bid 300 SAR on Audi - Q8', 'Audi - Q8 SAR على 300 محاولة جديدة', '1', 1, 1, '2019-01-08 07:00:09'),
(8, 62, 4, '300', 188, 185, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Audi - Q8', 'Audi - Q8 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 07:00:32'),
(9, 46, 5, '1100', 314, 185, 'New Bid by kiran3', 'kiran3 المزايدة الجديدة', 'New bid 1100 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 1100 محاولة جديدة', '1', 2, 1, '2019-01-08 07:04:52'),
(10, 46, 5, '1100', 185, 314, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Honda - Honda City 1', 'Honda - Honda City 1 Seller Rejected  رهانك ', '2', 2, 0, '2019-01-08 07:22:25'),
(11, 46, 6, '1100', 314, 185, 'New Bid by kiran3', 'kiran3 المزايدة الجديدة', 'New bid 1100 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 1100 محاولة جديدة', '1', 2, 1, '2019-01-08 07:23:26'),
(12, 46, 6, '1100', 185, 314, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Honda - Honda City 1', 'Honda - Honda City 1 Seller Rejected  رهانك ', '2', 2, 0, '2019-01-08 07:23:50'),
(13, 46, 7, '1100', 314, 185, 'New Bid by kiran3', 'kiran3 المزايدة الجديدة', 'New bid 1100 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 1100 محاولة جديدة', '1', 0, 1, '2019-01-08 07:24:01'),
(15, 177, 9, '6000', 310, 244, 'New Bid by sam', 'sam المزايدة الجديدة', 'New bid 6000 SAR on Audi - Q3', 'Audi - Q3 SAR على 6000 محاولة جديدة', '1', 1, 1, '2019-01-08 07:35:14'),
(16, 45, 10, '800', 314, 185, 'New Bid by kiran3', 'kiran3 المزايدة الجديدة', 'New bid 800 SAR on BMW - B1', 'BMW - B1 SAR على 800 محاولة جديدة', '1', 1, 1, '2019-01-08 07:43:00'),
(17, 57, 11, '2000', 314, 185, 'New Bid by kiran3', 'kiran3 المزايدة الجديدة', 'New bid 2000 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 2000 محاولة جديدة', '1', 0, 1, '2019-01-08 07:44:29'),
(18, 161, 12, '500', 310, 304, 'New Bid by sam', 'sam المزايدة الجديدة', 'New bid 500 SAR on BMW - B4', 'BMW - B4 SAR على 500 محاولة جديدة', '1', 0, 0, '2019-01-08 07:57:00'),
(19, 158, 13, '3000', 312, 294, 'New Bid by Jackson', 'Jackson المزايدة الجديدة', 'New bid 3000 SAR on Audi - Q2', 'Audi - Q2 SAR على 3000 محاولة جديدة', '1', 1, 1, '2019-01-08 07:59:35'),
(22, 87, 16, '2000', 244, 188, 'New Bid by zidouser1', 'zidouser1 المزايدة الجديدة', 'New bid 2000 SAR on Voxwagon - polo6', 'Voxwagon - polo6 SAR على 2000 محاولة جديدة', '1', 0, 1, '2019-01-08 09:05:51'),
(24, 175, 17, '5000', 194, 186, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Ford - Ecosport 8', 'Ford - Ecosport 8 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-08 09:07:00'),
(25, 175, 18, '6000', 186, 194, 'New Bid by shiva', 'shiva المزايدة الجديدة', 'New bid 6000 SAR on Ford - Ecosport 8', 'Ford - Ecosport 8 SAR على 6000 محاولة جديدة', '1', 1, 1, '2019-01-08 09:08:32'),
(26, 175, 18, '6000', 194, 186, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Ford - Ecosport 8', 'Ford - Ecosport 8 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 09:09:22'),
(27, 177, 9, '6000', 244, 310, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Audi - Q3', 'Audi - Q3 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 09:11:15'),
(28, 176, 19, '1500', 194, 186, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 1500 SAR on Voxwagon - polo4', 'Voxwagon - polo4 SAR على 1500 محاولة جديدة', '1', 1, 1, '2019-01-08 09:12:17'),
(30, 178, 21, '10000', 186, 244, 'New Bid by shiva', 'shiva المزايدة الجديدة', 'New bid 10000 SAR on Audi - Q3', 'Audi - Q3 SAR على 10000 محاولة جديدة', '1', 0, 1, '2019-01-08 09:16:51'),
(31, 182, 22, '800', 294, 280, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 800 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 800 محاولة جديدة', '1', 2, 1, '2019-01-08 09:17:40'),
(32, 178, 23, '10000', 194, 244, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 10000 SAR on Audi - Q3', 'Audi - Q3 SAR على 10000 محاولة جديدة', '1', 0, 1, '2019-01-08 09:17:48'),
(33, 74, 24, '8000', 244, 222, 'New Bid by zidouser1', 'zidouser1 المزايدة الجديدة', 'New bid 8000 SAR on Toyota - innova 2', 'Toyota - innova 2 SAR على 8000 محاولة جديدة', '1', 0, 0, '2019-01-08 09:21:26'),
(34, 169, 25, '5000', 186, 306, 'New Bid by shiva', 'shiva المزايدة الجديدة', 'New bid 5000 SAR on Mercedes Benz - M2', 'Mercedes Benz - M2 SAR على 5000 محاولة جديدة', '1', 2, 1, '2019-01-08 09:47:11'),
(35, 169, 25, '5000', 306, 186, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Mercedes Benz - M2', 'Mercedes Benz - M2 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-08 09:47:19'),
(36, 169, 26, '10000', 186, 306, 'New Bid by shiva', 'shiva المزايدة الجديدة', 'New bid 10000 SAR on Mercedes Benz - M2', 'Mercedes Benz - M2 SAR على 10000 محاولة جديدة', '1', 0, 1, '2019-01-08 09:48:54'),
(37, 45, 10, '800', 185, 314, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on BMW - B1', 'BMW - B1 Seller Accepted  رهانك ', '2', 1, 0, '2019-01-08 09:57:33'),
(38, 184, 27, '1100', 244, 188, 'New Bid by zidouser1', 'zidouser1 المزايدة الجديدة', 'New bid 1100 SAR on Porche - Porche 2', 'Porche - Porche 2 SAR على 1100 محاولة جديدة', '1', 1, 1, '2019-01-08 10:02:54'),
(39, 181, 28, '6000', 244, 312, 'New Bid by zidouser1', 'zidouser1 المزايدة الجديدة', 'New bid 6000 SAR on Audi - Q6', 'Audi - Q6 SAR على 6000 محاولة جديدة', '1', 2, 1, '2019-01-08 10:29:36'),
(40, 173, 29, '12000', 244, 190, 'New Bid by zidouser1', 'zidouser1 المزايدة الجديدة', 'New bid 12000 SAR on Audi - Q4', 'Audi - Q4 SAR على 12000 محاولة جديدة', '1', 0, 0, '2019-01-08 10:33:53'),
(41, 182, 22, '800', 280, 294, 'Your Bid مرفوض by Seller', 'تاجر  مرفوض رهانك', 'Your Bid مرفوض by Seller on Toyota - Innova 1', 'Toyota - Innova 1 Seller مرفوض  رهانك ', '2', 2, 1, '2019-01-08 10:55:24'),
(42, 184, 27, '1100', 188, 244, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Porche - Porche 2', 'Porche - Porche 2 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 11:20:48'),
(43, 158, 13, '3000', 294, 312, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Audi - Q2', 'Audi - Q2 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 11:21:44'),
(44, 46, 30, '1100', 306, 185, 'New Bid by kiran1', 'kiran1 المزايدة الجديدة', 'New bid 1100 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 1100 محاولة جديدة', '1', 0, 1, '2019-01-08 11:41:37'),
(45, 174, 31, '6000', 294, 190, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 6000 SAR on Honda - Honda City 8', 'Honda - Honda City 8 SAR على 6000 محاولة جديدة', '1', 0, 0, '2019-01-08 11:45:13'),
(46, 172, 32, '6000', 294, 190, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 6000 SAR on Mercedes Benz - M1', 'Mercedes Benz - M1 SAR على 6000 محاولة جديدة', '1', 0, 0, '2019-01-08 11:47:05'),
(47, 173, 33, '11000', 294, 190, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 11000 SAR on Audi - Q4', 'Audi - Q4 SAR على 11000 محاولة جديدة', '1', 0, 0, '2019-01-08 11:48:56'),
(48, 50, 34, '3000', 294, 186, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 3000 SAR on Porche - Porche 1', 'Porche - Porche 1 SAR على 3000 محاولة جديدة', '1', 0, 1, '2019-01-08 11:50:04'),
(50, 182, 36, '600', 186, 280, 'New Bid by shiva', 'shiva المزايدة الجديدة', 'New bid 600 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 600 محاولة جديدة', '1', 0, 1, '2019-01-08 12:07:25'),
(51, 180, 37, '6000', 186, 244, 'New Bid by shiva', 'shiva المزايدة الجديدة', 'New bid 6000 SAR on Porche - polo4', 'Porche - polo4 SAR على 6000 محاولة جديدة', '1', 0, 1, '2019-01-08 12:09:07'),
(53, 182, 39, '600', 4, 280, 'New Bid by s123', 's123 المزايدة الجديدة', 'New bid 600 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 600 محاولة جديدة', '1', 2, 1, '2019-01-08 12:42:42'),
(54, 48, 40, '3000', 4, 186, 'New Bid by s123', 's123 المزايدة الجديدة', 'New bid 3000 SAR on Audi - Q1', 'Audi - Q1 SAR على 3000 محاولة جديدة', '1', 0, 1, '2019-01-08 12:43:51'),
(55, 173, 41, '20000', 4, 190, 'New Bid by s123', 's123 المزايدة الجديدة', 'New bid 20000 SAR on Audi - Q4', 'Audi - Q4 SAR على 20000 محاولة جديدة', '1', 0, 0, '2019-01-08 12:44:17'),
(56, 183, 42, '600', 236, 295, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 600 SAR on Mercedes Benz - M1', 'Mercedes Benz - M1 SAR على 600 محاولة جديدة', '1', 1, 1, '2019-01-08 12:47:57'),
(57, 182, 43, '600', 236, 280, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 600 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 600 محاولة جديدة', '1', 2, 1, '2019-01-08 12:48:20'),
(58, 171, 44, '6000', 236, 190, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 6000 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 6000 محاولة جديدة', '1', 0, 0, '2019-01-08 12:51:44'),
(59, 181, 46, '6000', 236, 312, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 6000 SAR on Audi - Q6', 'Audi - Q6 SAR على 6000 محاولة جديدة', '1', 0, 1, '2019-01-08 12:53:28'),
(60, 180, 47, '6000', 236, 244, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 6000 SAR on Porche - polo4', 'Porche - polo4 SAR على 6000 محاولة جديدة', '1', 0, 1, '2019-01-08 12:53:54'),
(61, 165, 48, '300', 236, 294, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 300 SAR on Audi - Q4', 'Audi - Q4 SAR على 300 محاولة جديدة', '1', 2, 1, '2019-01-08 13:03:02'),
(62, 70, 49, '400', 236, 185, 'New Bid by chiru', 'chiru المزايدة الجديدة', 'New bid 400 SAR on Porche - Porche 2', 'Porche - Porche 2 SAR على 400 محاولة جديدة', '1', 0, 1, '2019-01-08 13:05:33'),
(63, 176, 19, '1500', 186, 194, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Voxwagon - polo4', 'Voxwagon - polo4 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-08 13:25:50'),
(64, 174, 50, '6000', 194, 190, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 6000 SAR on Honda - Honda City 8', 'Honda - Honda City 8 SAR على 6000 محاولة جديدة', '1', 0, 0, '2019-01-08 13:27:12'),
(65, 171, 51, '7000', 194, 190, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 7000 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 7000 محاولة جديدة', '1', 0, 0, '2019-01-08 13:27:37'),
(66, 57, 52, '2000', 294, 185, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 2000 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 2000 محاولة جديدة', '1', 0, 1, '2019-01-08 13:53:45'),
(67, 143, 53, '500', 294, 4, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 500 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 500 محاولة جديدة', '1', 0, 1, '2019-01-08 14:05:39'),
(68, 142, 54, '500', 294, 236, 'New Bid by lucky', 'lucky المزايدة الجديدة', 'New bid 500 SAR on Ford - Ecosport 1', 'Ford - Ecosport 1 SAR على 500 محاولة جديدة', '1', 0, 0, '2019-01-08 14:06:10'),
(69, 181, 56, '20000', 295, 312, 'New Bid by bodoor123', 'bodoor123 المزايدة الجديدة', 'New bid 20000 SAR on Audi - Q6', 'Audi - Q6 SAR على 20000 محاولة جديدة', '1', 0, 1, '2019-01-08 15:14:58'),
(70, 183, 42, '600', 295, 236, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Mercedes Benz - M1', 'Mercedes Benz - M1 Seller Accepted  رهانك ', '2', 1, 0, '2019-01-08 15:21:41'),
(71, 170, 57, '500', 295, 307, 'New Bid by bodoor123', 'bodoor123 المزايدة الجديدة', 'New bid 500 SAR on BMW - B3', 'BMW - B3 SAR على 500 محاولة جديدة', '1', 0, 0, '2019-01-08 15:26:11'),
(72, 171, 58, '6000', 295, 190, 'New Bid by bodoor123', 'bodoor123 المزايدة الجديدة', 'New bid 6000 SAR on Honda - Honda City 1', 'Honda - Honda City 1 SAR على 6000 محاولة جديدة', '1', 0, 0, '2019-01-08 15:34:12'),
(73, 181, 59, '5000', 280, 312, 'New Bid by fedo', 'fedo المزايدة الجديدة', 'New bid 5000 SAR on Audi - Q6', 'Audi - Q6 SAR على 5000 محاولة جديدة', '1', 0, 1, '2019-01-08 18:47:34'),
(75, 185, 60, '100', 295, 194, 'Your Bid مرفوض by Seller', 'تاجر  مرفوض رهانك', 'Your Bid مرفوض by Seller on Toyota - Innova 1', 'Toyota - Innova 1 Seller مرفوض  رهانك ', '2', 2, 1, '2019-01-09 07:00:00'),
(76, 185, 61, '100', 194, 295, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 100 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 100 محاولة جديدة', '1', 1, 1, '2019-01-09 07:05:43'),
(77, 186, 62, '100', 194, 295, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 100 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 100 محاولة جديدة', '1', 2, 1, '2019-01-09 07:06:05'),
(78, 185, 61, '100', 295, 194, 'Your Bid Accepted by Seller', 'تاجر  Accepted رهانك', 'Your Bid Accepted by Seller on Toyota - Innova 1', 'Toyota - Innova 1 Seller Accepted  رهانك ', '2', 1, 1, '2019-01-09 07:06:42'),
(79, 186, 62, '100', 295, 194, 'Your Bid مرفوض by Seller', 'تاجر  مرفوض رهانك', 'Your Bid مرفوض by Seller on Toyota - Innova 1', 'Toyota - Innova 1 Seller مرفوض  رهانك ', '2', 2, 1, '2019-01-09 07:07:29'),
(80, 172, 63, '5000', 194, 190, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 5000 SAR on Mercedes Benz - M1', 'Mercedes Benz - M1 SAR على 5000 محاولة جديدة', '1', 2, 0, '2019-01-09 07:28:38'),
(81, 172, 63, '5000', 190, 194, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Mercedes Benz - M1', 'Mercedes Benz - M1 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-09 07:29:05'),
(82, 172, 64, '6000', 306, 190, 'New Bid by kiran1', 'kiran1 المزايدة الجديدة', 'New bid 6000 SAR on Mercedes Benz - M1', 'Mercedes Benz - M1 SAR على 6000 محاولة جديدة', '1', 2, 0, '2019-01-09 07:30:32'),
(83, 172, 64, '6000', 190, 306, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Mercedes Benz - M1', 'Mercedes Benz - M1 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-09 07:30:40'),
(84, 186, 65, '100', 194, 295, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 100 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 100 محاولة جديدة', '1', 2, 1, '2019-01-09 07:50:22'),
(85, 186, 65, '100', 295, 194, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Toyota - Innova 1', 'Toyota - Innova 1 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-09 07:52:05'),
(86, 188, 66, '100', 295, 194, 'New Bid by bodoor123', 'bodoor123 المزايدة الجديدة', 'New bid 100 SAR on Toyota - Innova 1', 'Toyota - Innova 1 SAR على 100 محاولة جديدة', '1', 2, 1, '2019-01-09 07:55:05'),
(87, 188, 66, '100', 194, 295, 'Your Bid Rejected by Seller', 'تاجر  Rejected رهانك', 'Your Bid Rejected by Seller on Toyota - Innova 1', 'Toyota - Innova 1 Seller Rejected  رهانك ', '2', 2, 1, '2019-01-09 07:55:46'),
(88, 170, 67, '500', 194, 307, 'New Bid by joshi', 'joshi المزايدة الجديدة', 'New bid 500 SAR on BMW - B3', 'BMW - B3 SAR على 500 محاولة جديدة', '1', 0, 0, '2019-01-09 09:38:04'),
(89, 188, 68, '5000', 295, 194, 'New Bid by bodoor123', 'bodoor123مزاودة جديدة بواسطة', 'New bid 5000 SAR on Toyota - Innova 1', 'Toyota - Innova 1ريال سعودي على5000مزاودة جديدة', '1', 0, 1, '2019-01-09 18:47:06'),
(90, 188, 69, '200', 4, 194, 'New Bid by s123', 's123مزاودة جديدة بواسطة', 'New bid 200 SAR on Toyota - Innova 1', 'Toyota - Innova 1ريال سعودي على200مزاودة جديدة', '1', 2, 1, '2019-01-10 05:52:07'),
(91, 165, 48, '300', 294, 236, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Audi - Q4', 'Audi - Q4بواسطة البائع علىRejectedمزاودتك', '2', 2, 0, '2019-01-10 09:58:22'),
(92, 181, 28, '6000', 312, 244, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Audi - Q6', 'Audi - Q6بواسطة البائع علىRejectedمزاودتك', '2', 2, 1, '2019-01-10 09:59:39'),
(93, 154, 70, '1000', 186, 190, 'New Bid by shiva', 'shivaمزاودة جديدة بواسطة', 'New bid 1000 SAR on Toyota - Innova 1', 'Toyota - Innova 1ريال سعودي على1000مزاودة جديدة', '1', 0, 0, '2019-01-10 10:06:37'),
(94, 187, 71, '200', 244, 194, 'New Bid by zidouser1', 'zidouser1مزاودة جديدة بواسطة', 'New bid 200 SAR on Toyota - innova 2', 'Toyota - innova 2ريال سعودي على200مزاودة جديدة', '1', 2, 1, '2019-01-10 10:06:52'),
(95, 187, 71, '200', 194, 244, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Toyota - innova 2', 'Toyota - innova 2بواسطة البائع علىRejectedمزاودتك', '2', 2, 1, '2019-01-10 10:07:05'),
(96, 187, 72, '500', 244, 194, 'New Bid by zidouser1', 'zidouser1مزاودة جديدة بواسطة', 'New bid 500 SAR on Toyota - innova 2', 'Toyota - innova 2ريال سعودي على500مزاودة جديدة', '1', 2, 1, '2019-01-10 10:07:40'),
(97, 187, 72, '500', 194, 244, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Toyota - innova 2', 'Toyota - innova 2بواسطة البائع علىRejectedمزاودتك', '2', 2, 1, '2019-01-10 10:08:08'),
(98, 197, 74, '6000', 312, 244, 'New Bid by Jackson', 'Jacksonمزاودة جديدة بواسطة', 'New bid 6000 SAR on Voxwagon - polo3', 'Voxwagon - polo3ريال سعودي على6000مزاودة جديدة', '1', 2, 1, '2019-01-10 10:08:27'),
(99, 191, 75, '200', 312, 306, 'New Bid by Jackson', 'Jacksonمزاودة جديدة بواسطة', 'New bid 200 SAR on Mercedes Benz - M2', 'Mercedes Benz - M2ريال سعودي على200مزاودة جديدة', '1', 2, 1, '2019-01-10 10:12:13'),
(100, 191, 75, '200', 306, 312, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Mercedes Benz - M2', 'Mercedes Benz - M2بواسطة البائع علىRejectedمزاودتك', '2', 2, 1, '2019-01-10 10:12:32'),
(101, 172, 76, '6000', 244, 190, 'New Bid by zidouser1', 'zidouser1مزاودة جديدة بواسطة', 'New bid 6000 SAR on Mercedes Benz - M1', 'Mercedes Benz - M1ريال سعودي على6000مزاودة جديدة', '1', 0, 0, '2019-01-10 10:18:43'),
(102, 197, 74, '6000', 244, 312, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Voxwagon - polo3', 'Voxwagon - polo3بواسطة البائع علىRejectedمزاودتك', '2', 2, 1, '2019-01-10 10:20:48'),
(103, 187, 77, '1000', 244, 194, 'New Bid by zidouser1', 'zidouser1مزاودة جديدة بواسطة', 'New bid 1000 SAR on Toyota - innova 2', 'Toyota - innova 2ريال سعودي على1000مزاودة جديدة', '1', 2, 1, '2019-01-10 10:24:16'),
(104, 187, 77, '1000', 194, 244, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Toyota - innova 2', 'Toyota - innova 2بواسطة البائع علىRejectedمزاودتك', '2', 2, 1, '2019-01-10 10:24:53'),
(105, 188, 69, '200', 194, 4, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Toyota - Innova 1', 'Toyota - Innova 1بواسطة البائع علىRejectedمزاودتك', '2', 2, 0, '2019-01-10 10:34:31'),
(107, 187, 80, '50000', 295, 194, 'New Bid by bodoor123', 'bodoor123مزاودة جديدة بواسطة', 'New bid 50000 SAR on Toyota - innova 2', 'Toyota - innova 2ريال سعودي على50000مزاودة جديدة', '1', 2, 1, '2019-01-10 11:11:49'),
(108, 187, 80, '50000', 194, 295, 'Your Bid Rejected by Seller', 'بواسطة البائعRejected مزاودتك', 'Your Bid Rejected by Seller on Toyota - innova 2', 'Toyota - innova 2بواسطة البائع علىRejectedمزاودتك', '2', 2, 0, '2019-01-10 11:12:26'),
(109, 259, 81, '200', 280, 318, 'New Bid by fedo', 'fedoمزاودة جديدة بواسطة', 'New bid 200 SAR on Voxwagon - polo4', 'Voxwagon - polo4ريال سعودي على200 مزاودة جديدة', '1', 0, 0, '2019-01-11 08:35:48'),
(110, 182, 43, '600', 280, 236, 'Your Bid رفض by Seller', ' بواسطة البائع رفضمزاودتك', 'Your Bid رفض by Seller on Toyota - Innova 1', 'Toyota - Innova 1بواسطة البائع علىرفضمزاودتك', '2', 2, 0, '2019-01-11 16:06:48'),
(111, 182, 39, '600', 280, 4, 'Your Bid رفض by Seller', ' بواسطة البائع رفضمزاودتك', 'Your Bid رفض by Seller on Toyota - Innova 1', 'Toyota - Innova 1بواسطة البائع علىرفضمزاودتك', '2', 2, 0, '2019-01-11 16:07:22'),
(112, 267, 83, '4444', 280, 319, 'New Bid by fedo', 'fedoمزاودة جديدة بواسطة', 'New bid 4444 SAR on Toyota - Innova  6', 'Toyota - Innova  6ريال سعودي على4444 مزاودة جديدة', '1', 0, 0, '2019-01-11 16:48:51'),
(113, 270, 84, '100', 186, 317, 'New Bid by shiva', 'shivaمزاودة جديدة بواسطة', 'New bid 100 SAR on Toyota - innova 2', 'Toyota - innova 2ريال سعودي على100 مزاودة جديدة', '1', 0, 0, '2019-01-12 06:55:10'),
(114, 273, 85, '1000', 286, 280, 'New Bid by saud', 'saudمزاودة جديدة بواسطة', 'New bid 1000 SAR on Mercedes Benz - M1', 'Mercedes Benz - M1ريال سعودي على1000 مزاودة جديدة', '1', 2, 1, '2019-01-15 18:40:05'),
(115, 275, 86, '200', 186, 190, 'New Bid by shiva', 'shivaمزاودة جديدة بواسطة', 'New bid 200 SAR on Toyota - Innova 1', 'Toyota - Innova 1ريال سعودي على200 مزاودة جديدة', '1', 0, 0, '2019-01-16 14:10:35'),
(116, 275, 87, '200', 185, 190, 'New Bid by sana', 'sanaمزاودة جديدة بواسطة', 'New bid 200 SAR on Toyota - Innova 1', 'Toyota - Innova 1ريال سعودي على200 مزاودة جديدة', '1', 0, 0, '2019-01-16 14:11:28'),
(117, 275, 88, '200', 306, 190, 'New Bid by kiran1', 'kiran1مزاودة جديدة بواسطة', 'New bid 200 SAR on Toyota - Innova 1', 'Toyota - Innova 1ريال سعودي على200 مزاودة جديدة', '1', 0, 0, '2019-01-16 14:12:16'),
(118, 273, 85, '1000', 280, 286, 'Your Bid رفض by Seller', ' بواسطة البائع رفضمزاودتك', 'Your Bid رفض by Seller on Mercedes Benz - M1', 'Mercedes Benz - M1بواسطة البائع علىرفضمزاودتك', '2', 2, 0, '2019-01-16 14:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cars_quantity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bids_quantity` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unlimited',
  `duration` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'in months',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name_en`, `name_ar`, `price`, `image`, `cars_quantity`, `bids_quantity`, `duration`, `status`, `created_at`) VALUES
(1, 'Annually', 'Annually ar', '1900', 'assets/uploads/user_profiles/package1.png', '12', '5000', '12', 1, '2018-11-15 09:00:06'),
(2, 'Free Package', 'حزمة مجانية', '0', 'assets/uploads/user_profiles/free_package.png', '10000', '10000', '10000', 0, '2018-12-29 13:34:51'),
(3, 'New Package', 'New Package ar', '500', 'assets/uploads/user_profiles/package13.png', '12', '1000', '6', 1, '2018-11-15 09:07:06'),
(5, 'Zido special', 'Zido special', '10', 'assets/uploads/user_profiles/package11.png', '1', '20', '2', 0, '2018-12-04 13:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Privacy Policy</strong></p>\r\n\r\n<p><strong>Updated: </strong>November 30, 2018 (Effective as of November 30, 2018)</p>\r\n\r\n<p><strong>Introduction</strong></p>\r\n\r\n<p>Welcome to Zido (the &quot;Zido platform&quot;, &quot;Zido marketplace&quot;, &quot;Zido App&quot;, &quot;Zido.com&quot;, &quot;Zido.com.sa&quot;, &quot;Zido.app&quot;), owned and operated by Zido Inc. By accessing Zido you agree to the following <a name=\"_Hlk531346970\">Product Listing Policies</a>. <a name=\"_Hlk531346695\">These Product Listing Policies </a>are effective as of November 30, 2018.</p>\r\n\r\n<p>Zido Inc. (&quot;us&quot;, &quot;we&quot;, or &quot;our&quot;) operates the www.Zido.app website and the Zido mobile application (the &quot;Service&quot;).</p>\r\n\r\n<p>We use your data to provide and improve Zido platform. By using the <a name=\"_Hlk531392751\">Zido platform</a>, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Information Collection and Use</strong></p>\r\n\r\n<p>We collect several different types of information for various purposes to provide and improve Zido platform to you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Types of Data Collected</strong></p>\r\n\r\n<p>Personal Data</p>\r\n\r\n<p>While using Zido platform, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (&quot;Personal Data&quot;). Personally, identifiable information may include, but is not limited to:</p>\r\n\r\n<ul>\r\n	<li>Email address</li>\r\n	<li>First name and last name</li>\r\n	<li>Phone number</li>\r\n	<li>Address, State, Province, ZIP/Postal code, City</li>\r\n	<li>Cookies and Usage Data</li>\r\n</ul>\r\n\r\n<p>Usage Data</p>\r\n\r\n<p>We may also collect information that your browser sends whenever you visit Zido platform or when you access the Zido platform by or through a mobile device (&quot;Usage Data&quot;).</p>\r\n\r\n<p>This Usage Data may include information such as your computer&#39;s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of Zido platform that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p>When you access Zido platform by or through a mobile device, this Usage Data may include information such as the type of mobile device you use, your mobile device unique ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browser you use, unique device identifiers and other diagnostic data.</p>\r\n\r\n<p>Tracking &amp; Cookies Data</p>\r\n\r\n<p>We use cookies and similar tracking technologies to track the activity on Zido platform and hold certain information.</p>\r\n\r\n<p>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze Zido platform.</p>\r\n\r\n<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of Zido platform.</p>\r\n\r\n<p>Examples of Cookies we use:</p>\r\n\r\n<p>Session Cookies. We use Session Cookies to operate Zido platform.</p>\r\n\r\n<p>Preference Cookies. We use Preference Cookies to remember your preferences and various settings.</p>\r\n\r\n<p>Security Cookies. We use Security Cookies for security purposes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Use of Data</strong></p>\r\n\r\n<p>Zido Inc. uses the collected data for various purposes:</p>\r\n\r\n<ul>\r\n	<li>To provide and maintain Zido platform</li>\r\n	<li>To notify you about changes to Zido platform</li>\r\n	<li>To allow you to participate in interactive features of Zido platform when you choose to do so</li>\r\n	<li>To provide customer care and support</li>\r\n	<li>To provide analysis or valuable information so that we can improve Zido platform</li>\r\n	<li>To monitor the usage of Zido platform</li>\r\n	<li>To detect, prevent and address technical issues</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Transfer of Data</strong></p>\r\n\r\n<p>Your information, including Personal Data, may be transferred to &mdash; and maintained on &mdash; computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>\r\n\r\n<p>If you are located outside Saudi Arabia and choose to provide information to us, please note that we transfer the data, including Personal Data, to Saudi Arabia and process it there.</p>\r\n\r\n<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>\r\n\r\n<p>Zido Inc. will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Disclosure of Data</strong></p>\r\n\r\n<p>Legal Requirements</p>\r\n\r\n<p>Zido Inc. may disclose your Personal Data in the good faith belief that such action is necessary to:</p>\r\n\r\n<ul>\r\n	<li>To comply with a legal obligation</li>\r\n	<li>To protect and defend the rights or property of Zido Inc.</li>\r\n	<li>To prevent or investigate possible wrongdoing in connection with Zido platform</li>\r\n	<li>To protect the personal safety of users of Zido platform or the public</li>\r\n	<li>To protect against legal liability</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Security of Data</strong></p>\r\n\r\n<p>The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Service Providers</strong></p>\r\n\r\n<p>We may employ third party companies and individuals to facilitate Zido platform (&quot;Service Providers&quot;), to provide Zido platform on our behalf, to perform Service-related services or to assist us in analyzing how Zido platform is used.</p>\r\n\r\n<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Analytics</strong></p>\r\n\r\n<p>We may use third-party Service Providers to monitor and analyze the use of Zido platform.</p>\r\n\r\n<ul>\r\n	<li>Google Analytics</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of Zido platform. This data is shared with other Google services. Google may use the collected data to contextualize and personalize the ads of its own advertising network.</p>\r\n\r\n<p>For more information on the privacy practices of Google, please visit the Google Privacy &amp; Terms web page: <a href=\"https://policies.google.com/privacy?hl=en\">https://policies.google.com/privacy?hl=en</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Links to Other Sites</strong></p>\r\n\r\n<p>Zido platform may contain links to other sites that are not operated by us. If you click on a third-party link, you will be directed to that third party&#39;s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>\r\n\r\n<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third-party sites or services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Children&#39;s Privacy</strong></p>\r\n\r\n<p>Zido platform does not address anyone under the age of 18 (&quot;Children&quot;).</p>\r\n\r\n<p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Changes to This Privacy Policy</strong></p>\r\n\r\n<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>We will let you know via email and/or a prominent notice on Zido platform, prior to the change becoming effective and update the &quot;effective date&quot; at the top of this Privacy Policy.</p>\r\n\r\n<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Note:</strong> In the event of inconsistency, ambiguity or conflict of the contents of this Privacy Policy with any other terms of the <a name=\"_Hlk531346826\">Zido </a>platform, or between the English and other language versions of this policy, the English version and the decision of Zido.app exercised in its absolute discretion shall always prevail.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contact Us</strong></p>\r\n\r\n<p>If you have any questions about this Privacy Policy, please contact us:</p>\r\n\r\n<ul>\r\n	<li>By email: privacy@zido.app</li>\r\n	<li>By visiting this page on our website: www.zido.app/privacy</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Product Listing Policies</strong></p>\r\n\r\n<p><strong>Updated: </strong>November 30, 2018 (Effective as of November 30, 2018)</p>\r\n\r\n<p><strong>Introduction</strong></p>\r\n\r\n<p>Welcome to Zido (the &quot;Zido platform&quot;, &quot;Zido marketplace&quot;, &quot;Zido App&quot;, &quot;Zido.com&quot;, &quot;Zido.com.sa&quot;, &quot;Zido.app&quot;), owned and operated by Zido Inc. By accessing Zido you agree to the following <a name=\"_Hlk531346970\">Product Listing Policies</a>. <a name=\"_Hlk531346695\">These Product Listing Policies </a>are effective as of November 30, 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>General Prohibitions</strong></p>\r\n\r\n<p>You may not post or sell any item that is restricted or prohibited by a federal, state or local law in any country or jurisdiction. Please be aware that the Zido (the &quot;Zido platform&quot;, &quot;Zido marketplace&quot;, &quot;Zido App&quot;, &quot;Zido.com&quot;, &quot;Zido.com.sa&quot;, &quot;Zido.app&quot;) function as a global marketplace; thus, the selling or posting of items may be prohibited because of laws outside of the jurisdiction where you reside. Below, we have listed some categories of prohibited or restricted items. HOWEVER, THIS LIST IS NOT INTENDED TO BE EXHAUSTIVE; YOU, AS THE SELLER, ARE RESPONSIBLE FOR ENSURING THAT YOU ARE NOT POSTING AN ITEM THAT IS PROHIBITED BY LAW IN ANY JURISDICTION. Unless otherwise indicated and annotated accordingly below, the list of prohibited or restricted items as listed shall be applicable to Zido.com, Zido.com.sa and Zido app.&nbsp;</p>\r\n\r\n<p>Zido Inc. has chosen to also prohibit the posting of items which may not be restricted or prohibited by law but are nonetheless controversial including:</p>\r\n\r\n<ol>\r\n	<li>Items that encourage illegal activities (e.g. lock pick tools);</li>\r\n	<li>Items that are racially, religiously or ethnically derogatory, or that promote hatred, violence, racial or religious intolerance;</li>\r\n	<li>Pornographic materials or items that are sexual in nature;</li>\r\n	<li>Giveaways, lotteries, raffles, or contests;</li>\r\n	<li>Stocks, bonds, investment interests, and other securities;</li>\r\n	<li>Items that do not offer a physical product or service for sale, such as digital currencies and advertisements solely for the purpose of collecting user information.</li>\r\n</ol>\r\n\r\n<p>Zido Inc., in its sole and exclusive discretion, reserves the right to impose additional restrictions and prohibitions.</p>\r\n\r\n<p>In the event of inconsistency, ambiguity or conflict of the contents of These Product Listing Policies with any other terms of the <a name=\"_Hlk531346826\">Zido </a>platform, or between the English and other language versions of this policy, the English version and the decision of Zido.app exercised in its absolute discretion shall always prevail.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Prohibited and Controlled Items</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Illicit Drugs, Precursors and Drug Paraphernalia</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Zido Inc. expressly forbids any and all listing or sale of narcotics, tranquilizers, psychotropic drugs, natural drugs, synthetic drugs, steroids and other controlled substances. Such activity can result in your account being delisted.</li>\r\n		<li>The listing or sale of all drug precursor chemicals is strictly prohibited.</li>\r\n		<li>Drug paraphernalia, including all items that are primarily intended or designed for use in manufacturing, concealing, or using a controlled substance, are strictly forbidden on Zido platform.</li>\r\n		<li>The listing or sale of packaging materials which may be utilized to contain controlled substances, materials conducive to smuggling, storing, trafficking, transporting and manufacturing illicit drugs, publications and other media providing information related to the production of illicit drugs.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>FLAMMABLE, EXPLOSIVE AND HAZARDOUS CHEMICALS</strong>\r\n\r\n	<ol>\r\n		<li>The posting of explosives and related ignition and detonation equipment is strictly prohibited. Such activity can result in your account being delisted.</li>\r\n		<li>Radioactive substances, toxic and poisonous chemicals are forbidden on the Zido platform.</li>\r\n		<li>The posting, offering for sale, or offering for purchase of hazardous or dangerous materials are forbidden on the Zido platform.</li>\r\n		<li>Ozone depleting substances are not permitted to be listed.</li>\r\n		<li>The posting, offering for sale, or offering for purchase of any products containing harmful substances are forbidden on the Zido platform.</li>\r\n		<li>Listing of fireworks, firecrackers and associated products are forbidden.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Firearms and Ammunitions</strong>\r\n\r\n	<ol>\r\n		<li>Any service, instruction, process, or aid for producing any biological, chemical, or nuclear weapons are prohibited on the Zido platform. Any violation of this policy will result in the notification of government authorities by Zido Inc. and your account being delisted.</li>\r\n		<li>The posting of, offering for sale, or offering for purchase of any arms, munitions, military ordnance, weapons (including explosives), and/or any related parts and components (whether integral or otherwise) is strictly prohibited. Such activity can result in your account being delisted.</li>\r\n		<li>Zido platform does not permit the posting, offering for sale, or offering of purchase of replica, &quot;look-alike&rdquo; or imitation firearms, and/or any related parts and components. This prohibition covers such products as air guns and other weapons that may discharge a projectile.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Weapons</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Zido platform does not permit the posting, offering for sale, or offering of purchase of weapons that can incapacitate or cause serious physical harm to others (e.g. crossbows)</li>\r\n		<li>While listing of most knives and other cutting instruments is permitted, switchblade knives, gravity knifes, knuckledusters (bladed or not), bladed handheld devices, and disguised knives are prohibited.</li>\r\n		<li>Zido platform maintains discretion over what items are appropriate and may cause removal of a listing that it deems as a weapon.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Government, Law Enforcement and Military Issued Items</strong>\r\n\r\n	<ol>\r\n		<li>The following items are not permitted to be listed:\r\n		<ol>\r\n			<li>Articles of clothing or identification that claim to be, or appear similar to, official government uniforms.</li>\r\n			<li>Law enforcement badges or official law enforcement equipment from any public authority, including badges issued by the government of any country.</li>\r\n			<li>Military decorations, medals and awards, in addition to items with substantially similar designs.</li>\r\n		</ol>\r\n		</li>\r\n		<li>Police uniforms, police insignia and police vehicles may not be posted unless they are obsolete and in no way resemble current issue police uniforms, police insignia and police vehicles. This fact must be clearly stated within the posting description.</li>\r\n		<li>There are some police items that may be listed on the Zido platform, provided they observe the following guidelines:\r\n		<ol>\r\n			<li>Authorized general souvenir items, such as hats, mugs, pins, pens, buttons, cuff links, T-shirts, money clips that do not resemble badges, and paperweights that do not contain badges.</li>\r\n			<li>Badges that are clearly not genuine or official (e.g. toy badges).</li>\r\n			<li>Historical badges that do not resemble modern law enforcement badges, provided that the item description clearly states that the badge is a historical piece at least 100 years old or issued by an organization which no longer exists.</li>\r\n		</ol>\r\n		</li>\r\n		<li>The following mass-transit related items are not permitted to be listed:\r\n		<ol>\r\n			<li>Any article of clothing or identification related to transportation industries, including but not limited to, commercial airline pilots, flight attendants, airport service personnel, railway personnel, mass-transit security personnel. Vintage clothing related to commercial airlines or other mass-transit may be listed provided that the description clearly states that the item is at least 10 years old, is no longer in use and does not resemble any current uniform.</li>\r\n			<li>Manuals or other materials related to commercial transportation, including safety manuals published by commercial airlines and entities operating subways, trains or buses. Such items may only be listed if the description clearly states that the material is obsolete and no longer in use.</li>\r\n			<li>Any official, internal, classified or non-public documents.</li>\r\n		</ol>\r\n		</li>\r\n		<li>Listing of police equipment and associated products are forbidden.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Medical Drugs</strong>\r\n\r\n	<ol>\r\n		<li>The posting of prescription drugs, psychotropic drugs and narcotics is strictly prohibited.</li>\r\n		<li>The listing or sale of orally administered or ingested sexual enhancement foods and supplements is prohibited.</li>\r\n		<li>Prescription veterinary drugs may not be listed.</li>\r\n		<li>Members may post OTC (over-the-counter) drugs on the Zido platform Website after provision of appropriate production and sales permits to the Website, while transactions of these products are strictly prohibited to be entered into as a Relevant Online Transaction.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Medical Devices</strong></li>\r\n</ol>\r\n\r\n<p>Zido platform does not permit the posting of unauthorized medical devices. Members may only post authorized medical devices after provision of appropriate production and sales permits.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Adult and Obscene Materials</strong>\r\n\r\n	<ol>\r\n		<li>The posting or sale of pornographic materials is strictly prohibited.</li>\r\n		<li>In determining whether listings or information should be removed from the Zido platform, we consider the overall content of the posting, including images, pictorials, and text.</li>\r\n		<li>Sex toys and related products are strictly prohibited.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Circumvention Devices and Other Equipment Used for Illicit Purposes</strong>\r\n\r\n	<ol>\r\n		<li>Descramblers and other items that can be used to gain unauthorized access to television programming (such as satellite and cable TV), internet access, telephone, data or other protected, restricted, or premium services are prohibited.</li>\r\n		<li>Devices designed to intentionally block, jam or interfere with authorized radio communications, such as cellular and personal communication services, police radar, global positioning systems (GPS) and wireless networking services (Wi-Fi) are prohibited.</li>\r\n		<li>The listing or sale of spy equipment and devices used for interception of wire, oral and electronic communications is not permitted on Zido platform.</li>\r\n		<li>Hidden photographic devices are strictly prohibited.</li>\r\n		<li>Bank card readers and &ldquo;skimmers&rdquo; are prohibited from being listed.</li>\r\n		<li>Any and all unauthorized circumvention devices not included in the above are also strictly prohibited.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Illegal Services</strong>\r\n\r\n	<ol>\r\n		<li>Listings claiming to provide government services and related products are strictly prohibited. Examples include:</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Official government-issued identification documents, such as birth certificates, driving licenses, passports and visas;</li>\r\n	<li>Completed applications for the abovementioned documents.</li>\r\n	<li>Any materials, equipment or processes designed for use in the production of government-issued identification documents (e.g. driving license holograms, passport booklets).</li>\r\n	<li>The offering for sale or purchase of textile quota is prohibited on the Zido platform.\r\n	<ol>\r\n		<li>The listing or sale of any form of invoices or receipts are strictly prohibited on Zido platform.</li>\r\n		<li>Zido platform prohibits listings that offer financial services, including money transfers, issuing bank guarantees and letters of credit, loans, fundraising and funding for person investment purposes, etc.</li>\r\n		<li>Zido platform prohibits listings for the sole purpose of collecting user information or raising money.</li>\r\n		<li>Listings that offer medical or healthcare services, including services for medical treatment, rehabilitation, vaccination, health checks, psychological counseling, dietetics, plastic surgery and massage are prohibited.</li>\r\n		<li>The posting or sale of bulk email or mailing lists that contain personally identifiable information including. Also prohibited are software or other tools which are designed or used to send unsolicited commercial email (i.e. &quot;spam&quot;).</li>\r\n		<li>Job postings from which a factory/company/institute may directly recruit employees are prohibited on Zido platform.</li>\r\n		<li>Zido platform is an online business to business information platform; personal and non-business information is prohibited.</li>\r\n		<li>Non-transferable items may not be posted or sold through the Zido platform.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Collections, Artifacts and Precious Metals</strong>\r\n\r\n	<ol>\r\n		<li>Zido platform strictly forbids the sale and purchase of currency, coins, banknotes, stocks, bonds, money orders, credit and debit cards, investment interest, currency in digital or any intangible form (e.g. crypto-currency), as well as the equipment and materials used to produce such items.</li>\r\n		<li>Counterfeits of the identified articles in 11.1, legal tender and stamps are strictly prohibited.</li>\r\n		<li>Reproductions or replicas of coins as collectible items must be clearly marked with the word &quot;COPY&quot;, &quot;REPRODUCTION&quot; or &quot;REPLICA&quot; and comply with all relevant local laws.</li>\r\n		<li>Listings that offer the sale or buying of gold, silver and other precious metals (not including jewelry) are prohibited.</li>\r\n		<li>Rough diamonds and &ldquo;conflict minerals&rdquo; originating from non-compliant countries may not be listed.</li>\r\n		<li>Artifacts, cultural relics, historical grave markers, and related items are protected under the laws of Saudi Arabia, and other jurisdictions; and may not be posted or sold through the Zido platform.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Human Parts, Human Remains and Protected Flora and Fauna</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>Zido platform prohibits the listing of human body parts and remains.</li>\r\n		<li>The listing or sale of any species protected by the Convention on International Trade in Endangered Species of Wild Fauna and Flora (CITES) or any other local law or regulation is strictly forbidden on the Zido platform.</li>\r\n		<li>The listing or sale of products made with any part of and/or containing any ingredient derived from sharks or marine mammals is prohibited on the Zido platform.</li>\r\n		<li>The listing or sale of products made from cats, dogs and bears, as well as any processing equipment, is prohibited on the Zido platform.</li>\r\n		<li>The listing or sale of poultry, livestock and pets for commercial purposes is permitted on the Zido platform.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Offensive Material and Information Detrimental to National Security</strong>\r\n\r\n	<ol>\r\n		<li>Any and all publications and other media containing state secrets or information detrimental to national security or public order are prohibited. Such activity can result in your account being delisted.</li>\r\n		<li>Any information supporting or advocating infringement of national sovereignty, terrorist organizations or discrimination on grounds of race, sex, or religion is strictly prohibited on the Zido platform. Such activity can result in your account being delisted.</li>\r\n		<li>Postings that are ethnically or racially offensive are prohibited on Zido platform.</li>\r\n		<li>Materials advocating, promoting or otherwise supporting fascism, Nazism and other extreme ideologies are strictly prohibited.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Tobacco Products</strong>\r\n\r\n	<ol>\r\n		<li>The posting of tobacco products, including but not limited to cigars, cigarettes, cigarette tobacco, pipe tobacco, hookah tobacco, chewing tobacco and tobacco leaf is prohibited.</li>\r\n		<li>The posting of electronic cigarettes and accessories is permitted, however nicotine and other liquids (e-liquids) for use in electronic cigarettes is forbidden.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Gambling Equipment</strong></li>\r\n</ol>\r\n\r\n<p>The listing or sale of equipment specifically used for gambling is prohibited. Products which have other legitimate uses (such as dice and playing cards) will generally be permitted.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Sanctioned and Prohibited Items</strong>\r\n\r\n	<ol>\r\n		<li>Products prohibited by laws, regulations, sanctions and trade restrictions in any relevant country or jurisdiction worldwide are strictly forbidden on Zido platform.</li>\r\n		<li>The listing or sale of petroleum, petroleum products and petrochemical products originating in the Islamic Republic of Iran is strictly forbidden.</li>\r\n		<li>The listing or sale of coal, iron, iron ore, gold, titanium ore, vanadium ore and rare earth minerals originating in the Democratic People&rsquo;s Republic of Korea is strictly forbidden.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Other Listing Prohibitions</strong>\r\n\r\n	<ol>\r\n		<li>The posting of any products containing harmful substances (e.g. toys containing lead paint) is forbidden on the Zido platform.</li>\r\n		<li>Automotive airbags are expressly forbidden on the Zido platform due to containing explosive materials.</li>\r\n		<li>The sale and purchase of refurbished mobile phones, laptops and computers is prohibited on the Zido platform Website.</li>\r\n		<li>Used undergarments may not be listed or sold on Zido platform. Other used clothing may be listed, so long as the clothing has been thoroughly cleaned. Postings that contain inappropriate or extraneous descriptions will be removed. The listing or sale of used cosmetics is prohibited on the Zido platform.</li>\r\n		<li>The listing of alcohol is prohibited on the Zido platform.</li>\r\n		<li>The listing of all food and beverages, apart from tea, coffee and dried fruit and nuts, is prohibited on the Zido platform.</li>\r\n		<li>The posting of any chemical products on the Zido platform is prohibited.</li>\r\n		<li>Information or images containing or referring to political figures is strictly prohibited</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Intellectual Property Rights (IPR) Protection Policy</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Faces, Names and Signatures</strong></li>\r\n</ol>\r\n\r\n<p>Items containing the likeness, image, name, or signature of another person are prohibited, unless the products were made or authorized by the person whose likeness, image, name or signature has been used.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Replica and Counterfeit Items</strong>\r\n\r\n	<ol>\r\n		<li>Listing of counterfeits, non-licensed replicas, or unauthorized items, such as counterfeit designer garments, watches, handbags, sunglasses, or other accessories, is strictly prohibited on the Zido platform.</li>\r\n		<li>If the products sold bear the name or logo of a company, but did not originate from or were not endorsed by that company, such products are prohibited from the Zido platform.</li>\r\n		<li>Postings of branded products are permitted if a certificate of authorization has been issued by the brand owner.</li>\r\n		<li>Postings offering to sell or purchase replicas, counterfeits or other unauthorized items shall be subject to removal by Zido platform. Repeated postings of counterfeit or unauthorized items shall result in the immediate suspension of your membership.</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Software</strong>\r\n\r\n	<ol>\r\n		<li>Academic Software\r\n		<ol>\r\n			<li>Academic software is software sold at discounted prices to students, teachers, and employees of accredited learning institutions.</li>\r\n			<li>Do not list any academic software unless you are so authorized. Postings violating Zido platform&#39;s academic software policy may be deleted prior to publication.</li>\r\n			<li>For postings of academic software on behalf of an authorized educational reseller or an educational institution, such licensure must be stated conspicuously in the listings. A certificate of authorization issued by the authorized educational reseller (or the educational institution) must also be provided to Zido platform.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>\r\n	<ol>\r\n		<li>OEM Software\r\n		<ol>\r\n			<li>Do not list &quot;OEM&quot; or &quot;bundled&quot; copies of software on the Zido platform unless you are selling it with computer hardware. Original Equipment Manufacturer (OEM), or bundled software, is software that is obtained as part of the purchase of a new computer. OEM software licenses usually prohibit the purchaser from reselling the software without the computer or, in some cases, without any computer hardware.</li>\r\n		</ol>\r\n		</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li><strong>Unauthorized Copies of Intellectual Property</strong></li>\r\n</ol>\r\n\r\n<p>The listing or sale of unauthorized (pirated, duplicated, backup, bootleg, etc.) copies of software programs, video games, music albums, movies, television programs, photographs or other protected works is forbidden on the Zido platform.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NOTICE</strong>: This list should not be considered exhaustive in nature and shall be updated on a continuous basis. If you are unsure about the product you wish to list with the site in regard to its appropriateness or legality, please contact our customer services department</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p style=\"direction: rtl;\"><strong>سياسة الخصوصية</strong></p>\r\n\r\n<p style=\"direction: rtl;\"><strong>تاريخ اخر تحديث</strong>: 30 نوفمبر، 2018 (يسري اعتبارًا من 30 نوفمبر، 2018)</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>مقدمة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">مرحبًا بكم في زيدو (&quot;منصة زيدو&quot;، &quot;متجر زيدو&quot;، &quot;تطبيق زيدو&quot;، &quot; <span dir=\"LTR\">Zido.com</span>&quot;، &quot; Zido.com.sa&quot;،&quot; Zido.app&quot;)، التي تملكها وتُديرها شركة ريادة الاعمال السعودية للاستثمار. عبر دخولك على زيدو فأنت توافق على سياسات قائمة المنتجات التالية. تعتبر سياسات هذه المنتجات سارية اعتبارًا من 30 نوفمبر 2018.</p>\r\n\r\n<p style=\"direction: rtl;\">تقوم شركة ريادة الاعمال السعودية للاستثمار (&quot;نحن&quot;، &quot;خاصتنا&quot;، أو &quot;لنا&quot;) بتشغيل موقع <a href=\"http://www.Zido.appـ\">www.Zido.appـ</a> وتطبيق الهاتف زيدو (&quot;الخدمة&quot;).</p>\r\n\r\n<p style=\"direction: rtl;\">نوّد أن نحيطكم علمًا بأننا نستخدم البيانات الخاصة بك من أجل تهيئة وتحسين برنامج زيدو. بواسطة استخدام برنامج زيدو، فإنك توافق على جمع المعلومات واستخدامها وفقًا لهذه السياسة. وباستثناء ما يتم تعريفه على خلاف ذلك في سياسة الخصوصية هذه، فإن المصطلحات المستخدمة في سياسة الخصوصية هذه لها نفس المعاني كما في الشروط والأحكام الخاصة بنا.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>جمع المعلومات واستخدامها</strong></p>\r\n\r\n<p style=\"direction: rtl;\">نقوم بجمع عدة أنماط مختلفة من المعلومات لأغراض عدّة بهدف تهيئة وتحسين برنامج زيدو لك.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>أنواع البيانات التي تم جمعها</strong></p>\r\n\r\n<p style=\"direction: rtl;\">البيانات الشخصية</p>\r\n\r\n<p style=\"direction: rtl;\">أثناء استخدامك لبرنامج زيدو، قد نطلب منك تزويدنا بمعلومات معينة تحدد الهوية الشخصية، والتي يمكن استخدامها للتواصل معك أو التعرّف عليك (&quot;بيانات شخصية&quot;). وبصفة شخصية، قد تتضمن المعلومات التي تحدد الهوية الشخصية، على سبيل المثال لا الحصر، ما يلي:&nbsp;</p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li>عنوان البريد الإلكتروني</li>\r\n	<li dir=\"rtl\" style=\"direction: rtl;\">الاسم الأول واسم العائلة</li>\r\n	<li dir=\"rtl\" style=\"direction: rtl;\">رقم الهاتف</li>\r\n	<li dir=\"rtl\" style=\"direction: rtl;\">العنوان، الدولة، المحافظة، الرقم البريدي، المدينة</li>\r\n	<li dir=\"rtl\" style=\"direction: rtl;\">رمز التعريف الشخصي، وبيانات الاستخدام</li>\r\n</ul>\r\n\r\n<p style=\"direction: rtl;\"><strong>بيانات الاستخدام</strong></p>\r\n\r\n<p style=\"direction: rtl;\">قد نقوم أيضًا بجمع المعلومات التي يرسلها المتصفح الخاص بك عندما تزور منصة زيدو أو عندما تدخل على منصة زيدو عبر أو من خلال جهازك المحمول (&quot;بيانات الاستخدام&quot;)</p>\r\n\r\n<p style=\"direction: rtl;\">قد تتضمن بيانات الاستخدام هذه بعض المعلومات مثل عنوان بروتوكول الانترنت الخاص بجهازك الكمبيوتر (مثل: عنوان ال <span dir=\"LTR\">IP</span> (بروتوكول الانترنت)، نوع المتصفح، إصدار المتصفح، صفحات منصة زيدو التي تزورها، وقت وتاريخ زيارتك، الوقت الذي تقضيه في تلك الصفحات، معرّف الجهاز الوحيد، وغيرها من البيانات التشخيصية.</p>\r\n\r\n<p style=\"direction: rtl;\">أثناء دخولك على منصة زيدو عبر أو من خلال جهازك المحمول، قد تتضمن بيانات الاستخدام هذه بعض المعلومات مثل: نوع جهاز الهاتف المحمول الذي تستخدمه، المعرّف الوحيد لجهازك المحمول، عنوان ال <span dir=\"LTR\">IP</span> (بروتوكول الانترنت) الخاص بجهازك المحمول، نظام تشغيل هاتفك المحمول، نوع متصفح الانترنت للمحمول الذي تستخدمه، معرّفات الأجهزة الوحيدة، وغيرها من البيانات التشخيصية.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>التتبع وملفات تعريف الارتباط</strong></p>\r\n\r\n<p style=\"direction: rtl;\">نحن نستخدم ملفات تعريف الارتباط وتقنيات التتبع المماثلة بهدف تتبع النشاط على منصة زيدو مع الاحتفاظ بمعلومات معينة.</p>\r\n\r\n<p style=\"direction: rtl;\">ملفات تعريف الارتباط هي عبارة عن ملفات تحتوي على كمية صغيرة من البيانات التي قد تتضمن معرفًا فريدًا. يتم إرسال ملفات تعريف الارتباط إلى متصفحك من موقع الويب وتخزينها على جهازك. تقنيات التتبع المستخدمة هي منارات وعلامات ونصوص لجمع المعلومات وتتبعها لتحسين منصة زيدو وتحليلها.</p>\r\n\r\n<p style=\"direction: rtl;\">يمكنك إرشاد المتصفح الخاص بك لرفض جميع ملفات الارتباط أو للإشارة إذا تم إرسال ملف تعريف الارتباط. ومع ذلك، إذا لم تقبل ملفات تعريف الارتباط، قد لا تتمكن من استخدام بعض أجزاء من منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>أمثلة على ملفات تعريف الارتباط التي نستخدمها:</strong></p>\r\n\r\n<p style=\"direction: rtl;\">جلسات ملفات تعريف الارتباط: نحن نستخدم جلسات ملفات تعريف الارتباط لتشغيل منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">تفضيلات ملفات تعريف الارتباط: نحن نستخدم تفضيلات ملفات تعريف الارتباط لتذكر تفضيلاتك والاعدادات المختلفة.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;أمن ملفات تعريف الارتباط: نحن نستخدم ملفات تعريف الارتباط الامنة لأغراض أمنية.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>استخدام البيانات </strong></p>\r\n\r\n<p style=\"direction: rtl;\">تستخدم شركة ريادة الاعمال السعودية للاستثمار البيانات التي يتم جمعها لأغراض مختلفة:</p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li>لتوفير وصيانة منصة زيدولإعلامك عن أي تغيرات خاصة بمنصة زيدو</li>\r\n	<li>للسماح لك بالمشاركة في الميزات التفاعلية لمنصة زيدو حين اختيارك القيام بذلك</li>\r\n	<li>لتوفير العناية بالعملاء وتقديم الدعم</li>\r\n	<li>لتقديم التحليلات أو المعلومات القيّمة حتى نتمكن من تحسين منصة زيدو</li>\r\n	<li>لمراقبة (متابعة) استخدام منصة زيدو</li>\r\n	<li>للكشف عن المشكلات الفنية ومنعها ومعالجتها</li>\r\n</ul>\r\n\r\n<p style=\"direction: rtl;\"><strong>نقل البيانات </strong></p>\r\n\r\n<p style=\"direction: rtl;\">قد يتم نقل معلوماتك -بما في ذلك بياناتك الشخصية-إلى أجهزة الكمبيوتر الموجودة خارج الدولة أو المحافظة أو البلد أو الأخرى التي قد تختلف فيها قوانين حماية البيانات عن نطاق اختصاصك القضائية.</p>\r\n\r\n<p style=\"direction: rtl;\">إذا كنت موجودًا خارج المملكة العربية السعودية واخترت تقديم المعلومات لنا، يُرجي ملاحظة أننا نقوم بنقل البيانات، بما في ذلك البيانات الشخصية، إلى المملكة العربية السعودية ونقوم بمعالجتها هناك.</p>\r\n\r\n<p style=\"direction: rtl;\">إن موافقتك على سياسة الخصوصية هذه والتي يتبعها تقديمك لهذه المعلومات تعتبر بمثابة موافقتك على هذا النقل.</p>\r\n\r\n<p style=\"direction: rtl;\">سوف تتخذ شركة ريادة الاعمال السعودية للاستثمار جميع الخطوات اللازمة بشكل معقول لضمان التعامل مع بياناتك بشكل امن ووفقًا لسياسة الخصوصية الخاصة بنا، وأنه لن يتم نقل بياناتك الشخصية إلى أي منظمة أو دولة ما لم تكن هناك ضوابط كافية موجودة هناك بما في ذلك أمن البيانات الخاصة بك والبيانات الشخصية الأخرى.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>الكشف عن البيانات </strong></p>\r\n\r\n<p style=\"direction: rtl;\">المتطلبات القانونية</p>\r\n\r\n<p style=\"direction: rtl;\">قد تُفصح شركة ريادة الاعمال السعودية للاستثمار عن بياناتك الشخصية بحُسن نيّة أن هذا الإجراء ضروري من أجل:</p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li>للامتثال للالتزامات القانونية</li>\r\n	<li>للحماية والدفاع عن حقوق وممتلكات شركة زيدو</li>\r\n	<li>لمنع وقوع أي مخالفات محتملة تتعلق بمنصة زيدو أو التحقيق فيها</li>\r\n	<li>لحماية السلامة الشخصية لمستخدمي منصة زيدو أو الجمهور</li>\r\n	<li>للحماية من المسائلة القانونية</li>\r\n</ul>\r\n\r\n<p style=\"direction: rtl;\"><strong>&nbsp;أمن البيانات </strong></p>\r\n\r\n<p style=\"direction: rtl;\">حماية بياناتك أمر يهمنا، ولكن تذكر انه لا توجد طريقة أمنه 100% للتخزين الالكتروني. بينما نسعى جاهدين لاستخدام وسائل مقبولة تجاريًا لحماية بياناتك الشخصية، لا يمكننا ضمان الأمن المُطلق لها.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>مقدمي الخدمة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">قد نقوم بتوظيف شركات وأفراد من أطراف أخرى لتسهيل منصة زيدو (&quot;مقدمي الخدمة&quot;)، أو لتقديم منصة زيدو نيابًة عنا، أو لأداء الخدمات المتعلقة بهذه الخدمة، أو لمساعدتنا في تحليل كيفية استخدام منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">هذه الأطراف الأخرى لديها الحق في الوصول إلى بياناتك الشخصية فقط من أجل أداء هذه المهام نيابًة عنا، ويكونوا ملزمين بعدم الكشف عنها أو استخدامها لأي غرض أخر.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>التحليل المنطقي </strong></p>\r\n\r\n<p style=\"direction: rtl;\">قد نقوم بتوظيف مقدمي الخدمة من أطراف أخرى لمراقبة وتحليل استخدام منصة زيدو.</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>نظام تحليلات جوجل</strong></p>\r\n\r\n<p style=\"direction: rtl;\">نظام تحليلات جوجل هي عبارة عن تحليلات الويب التي تقدمها جوجل، والتي تتعقب حركة الزيارات لموقع الويب وتعلن عنها. يستخدم جوجل البيانات التي تم جمعها لتتبع ومراقبة استخدام منصة زيدو. تتم مشاركة هذه البيانات مع خدمات جوجل الأخرى. قد يستخدم جوجل البيانات التي تم جمعها لضبط سياق إعلانات الشبكة الخاصة بها وتخصيصها.</p>\r\n\r\n<p style=\"direction: rtl;\">لمزيد من المعلومات حول أساليب الخصوصية الخاصة بجوجل، يُرجى زيارة صفحة الويب الخاصة بسياسة الخصوصية والشروط لجوجل على:</p>\r\n\r\n<p style=\"direction: rtl;\"><a href=\"https://policies.google.com/privacy?hl=en\"><span dir=\"LTR\">https://policies.google.com/privacy?hl=en</span></a></p>\r\n\r\n<p style=\"direction: rtl;\"><strong>روابط لمواقع أخرى </strong></p>\r\n\r\n<p style=\"direction: rtl;\">قد تحتوي خدمتنا على روابط لمواقع أخرى لا يتم تشغيلها من قِبلنا. إذا قمت بالنقر على رابط جهة أخري، فسيتم توجيهك إلى موقع هذه الجهة الأخرى. ننصحك وبشدّة بمراجعة سياسة الخصوصية لكل موقع تقوم بزيارته.</p>\r\n\r\n<p style=\"direction: rtl;\">ليس لدينا أي سيطرة ولا نتحمل أي مسؤولية عن المحتوى أو سياسات الخصوصية أو الممارسات الخاصة بأي مواقع أو خدمات أخرى لطرف أخر.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>خصوصية الأطفال</strong></p>\r\n\r\n<p style=\"direction: rtl;\">لا تتناول منصة زيدو أي شخص دون سن 18 عامًا (&quot;الأطفال&quot;).</p>\r\n\r\n<p style=\"direction: rtl;\">نحن لا نجمع معلومات التعريف الشخصية من أي شخص دون سن 18 عامًا. فإذا كنت أحد الوالدين أو الوصيّ، وكُنت على علم بأن أطفالك قدّموا لنا بيانات شخصية، فيُرجى الاتصال بنا. إذا علمنا أننا جمعنا بيانات شخصية من الأطفال دون التحقق من موافقة الوالدين، فإننا نتخذ الإجراءات اللازمة لحذف تلك المعلومات من خوادمنا.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>التغيرات في سياسة الخصوصية هذه</strong></p>\r\n\r\n<p style=\"direction: rtl;\">يجوز لنا تحديث سياسة الخصوصية الخاصة بنا من وقت لآخر. سوف نخطركم بأي تغييرات عن طريق نشر سياسة الخصوصية الجديدة على هذه الصفحة.</p>\r\n\r\n<p style=\"direction: rtl;\">سوف نحيطك علمًا عبر البريد الإلكتروني و / أو بإشعار بارز في منصة زيدو، قبل أن يصبح التغيير ساريًا وتحديث &ldquo;تاريخ بدء السريان&rdquo; الموجود في أعلى سياسة الخصوصية هذه.</p>\r\n\r\n<p style=\"direction: rtl;\">ننصحك بمراجعة سياسة الخصوصية هذه من حين لأخر لملاحظة أية تغييرات. تسري التغييرات التي تطرأ على سياسة الخصوصية هذه عند نشرها على هذه الصفحة.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>ملاحظة</strong>:</p>\r\n\r\n<p style=\"direction: rtl;\">في حالة وجود تعارض أو غموض أو تضارب في محتويات سياسة الخصوصية هذه مع أي شروط أخرى لمنصة زيدو، أو بين إصدارات اللغة الإنجليزية واللغات الأخرى لهذه السياسية، فتكون الغلبة دومًا للنسخة الإنجليزية وقرار <span dir=\"LTR\">Zido.app</span> المُطبّق في تقديرها المطلق.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>اتصل بنا</strong></p>\r\n\r\n<p style=\"direction: rtl;\">إذا كان لديك أي أسئلة حول سياسة الخصوصية هذه، يُرجى الاتصال بنا:</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\">عبر البريد الالكتروني: <a href=\"mailto:privacy@zido.app\"><span dir=\"LTR\">privacy@zido.app</span></a></p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\">او من خلال زيارة هذه الصفحة على موقعنا على الانترنت: <span dir=\"LTR\">www.zido.app/privacy</span></p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>سياسات إدراج المنتجات</strong></p>\r\n\r\n<p style=\"direction: rtl;\"><strong>تحديث بتاريخ 30 نوفمبر 2018 (تدخل هذه السياسات حيز التنفيذ من 30 نوفمبر 2018)</strong></p>\r\n\r\n<p style=\"direction: rtl;\"><strong>المقدمة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">مرحبًا بك في زيدو (&quot;منصة زيدو&quot;، و&quot;متجر زيدو&quot;، و&quot;تطبيق زيدو&quot;، و&quot;<span dir=\"LTR\">Zido.com</span>&quot;، و&quot;<span dir=\"LTR\">Zido.com.sa</span>&quot;، و&quot; <span dir=\"LTR\">Zido.app</span>&quot;) والتي يملكها ويشغلها شركة ريادة الاعمال السعودية للاستثمار. بانضمامك إلى زيدو، فأنت توافق على شروط الاستخدام التالية. وتعد شروط الاستخدام هذه سارية اعتبارً من 30 نوفمبر 2018.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>المحظورات العامة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">لا يجوز لك نشر أو بيع أي من المواد التي يمنعها أو يحظرها قانونا فيدراليا أو قانون إحدى الدول أو قانونا محليا داخل أي بلد أو ولاية قضائية. يرجى العلم إلى أن زيدو (&quot;منصة زيدو&quot;، و&quot;متجر زيدو&quot;، و&quot;تطبيق زيدو&quot;، و&quot;<span dir=\"LTR\">Zido.com</span>&quot;، و&quot;<span dir=\"LTR\">Zido.com.sa</span>&quot;، و&quot; <span dir=\"LTR\">Zido.app</span>&quot;) تعمل بصفة سوق عالمي. وبالتالي، قد يكون بيع أو نشر أي مواد أمرا محظورًا بموجب القوانين المعمول بها خارج نطاق المنطقة القضائية التي تقيم فيها. أدرجنا أدناه بعض فئات المواد المحظورة أو الممنوعة. ومع ذلك، لا يجب اعتبار أن هذه القائمة شاملة؛ فأنت، بصفتك البائع، تعتبر مسؤولا عن ضمان أنك لا تقوم بإرسال أي منتج محظور بموجب قوانين أي ولاية قضائية. تسري قائمة المواد المحظورة أو المقيدة كما هو وارد على المواقع التالية (<span dir=\"LTR\">Zido.com</span> و <span dir=\"LTR\">Zido.com.sa</span> وتطبيق زيدو)، ما لم يتم الإشارة إلى خلاف ذلك والتعليق على ذلك أدناه.</p>\r\n\r\n<p style=\"direction: rtl;\">اختارت شركة ريادة الاعمال السعودية للاستثمار أيضًا حظر نشر المواد التي قد لا يحظرها أو يمنعها القانون ولكنها مع ذلك مثيرة للجدل ومن ذلك:</p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li>المواد التي تشجع الأنشطة غير القانونية (مثل أدوات فتح الأقفال بدون مفتاح).</li>\r\n	<li>المواد المهينة عرقيا أو دينيا أو أخلاقيا أو التي تشجع الكراهية أو العنف أو التعصب العرقي أو الديني.</li>\r\n	<li>المواد الإباحية أو المواد ذات الطبيعة الجنسية.</li>\r\n	<li>هبات أو اليانصيب أو السحوبات أو المسابقات.</li>\r\n	<li>الأسهم والسندات وفوائد الاستثمار والأوراق المالية الأخرى.</li>\r\n	<li>المواد التي لا تقدم منتجًا ماديًا أو خدمة ما للبيع، مثل العملات الرقمية والإعلانات لغرض جمع معلومات المستخدم فقط.</li>\r\n</ul>\r\n\r\n<p style=\"direction: rtl;\">تحتفظ شركة ريادة الاعمال السعودية للاستثمار ، &nbsp;وفقًا لتقديرها المطلق والحصري، بالحق في فرض قيود ومحظورات إضافية.</p>\r\n\r\n<p style=\"direction: rtl;\">في حالة وجود عدم اتساق محتويات سياسات إدراج المنتجات هذه أو غموضها أو تضاربها مع أي شروط أخرى لمنصة زيدو أو بين إصدارات اللغة الإنجليزية واللغات الأخرى لهذه السياسة، تسود النسخة الإنجليزية وقرار <span dir=\"LTR\">Zido.app</span> وفق تقديرها المطلق دائمًا.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>المواد المحظورة والخاضعة للرقابة</strong></p>\r\n\r\n<p dir=\"rtl\"><strong>1- المخدرات والمركبات الطليعية غير المشروعة وأدوات تعاطي المخدرات غير المشروعة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">1. 1. &nbsp;تحظر شركة ريادة الاعمال السعودية للاستثمار صراحةً إدراج أو بيع المخدرات والمهدئات والمؤثرات العقلية والعقاقير الطبيعية والأدوية الاصطناعية والستيرويدات والمواد الأخرى الخاضعة للرقابة. يمكن أن يؤدي ممارسة هذا النشاط إلى شطب حسابك.</p>\r\n\r\n<p style=\"direction: rtl;\">1. 2. يحظر تماما إدراج أو بيع جميع المواد الكيميائية الطليعة للمخدرات.</p>\r\n\r\n<p style=\"direction: rtl;\">1. 3. يحظر تماما عرض أدوات تعاطي المخدرات، بما في ذلك جميع المواد التي تهدف في المقام الأول أو مصممة للاستخدام في تصنيع مادة خاضعة للرقابة أو إخفائها أو استخدامها، في منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">1. 4. إدراج أو بيع مواد التعبئة والتغليف التي يمكن استخدامها لاحتواء المواد الخاضعة للرقابة والمواد التي تساعد على تهريب المخدرات وتخزينها ونقلها والاتجار بها وتصنيعها، والمنشورات والوسائط الأخرى التي تقدم المعلومات المتعلقة بإنتاج تلك المخدرات غير المشروعة.</p>\r\n\r\n<p dir=\"rtl\"><strong>2- المواد القابلة للاشتعال والانفجار والمواد الكيميائية الخطرة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">2. 1. يحظر نشر المفرقعات وما له صلة بها من معدات الإشعال والتفجير. يمكن أن يؤدي ممارسة هذا النشاط إلى شطب حسابك.</p>\r\n\r\n<p style=\"direction: rtl;\">2 .2. يحظر نشر المواد المشعة والمواد الكيميائية السامة والمسببة للتسمم على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">2 .3. ممنوع نشر مواد خطرة أو خطيرة أو عرضها للبيع للشراء.</p>\r\n\r\n<p style=\"direction: rtl;\">2. 4. لا يُسمح بإدراج المواد المستنفدة للأوزون.</p>\r\n\r\n<p style=\"direction: rtl;\">2. 5. يُحظر نشر أي منتجات تحتوي على مواد ضارة أو عرضها للبيع أو للشراء.</p>\r\n\r\n<p style=\"direction: rtl;\">2. 6. يحظر إدراج الألعاب النارية والمفرقعات والمنتجات المرتبطة بها.</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>3- الأسلحة النارية والذخيرة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">3. 1. يحظر على أي منصة لزيدو أي خدمة لإنتاج أي أسلحة بيولوجية أو كيميائية أو نووية أو تعليمات تتعلق بذلك أو عمليات أو مساعدات لها صلة بهذا الأمر. أي انتهاك لهذه السياسة سيؤدي إلى إخطار السلطات الحكومية من قبل منصة زيدو شطب حسابك.</p>\r\n\r\n<p style=\"direction: rtl;\">3. 2. يُحظر بشدة نشر أو عرض أو عرض أو شراء أي معدات عسكرية أو ذخائر أو ذخائر عسكرية أو أسلحة (بما في ذلك المتفجرات) و / أو أي أجزاء ومكونات ذات صلة (سواء أكانت متكاملة أم لا). يمكن أن يؤدي هذا النشاط إلى شطب حسابك.</p>\r\n\r\n<p style=\"direction: rtl;\">3. 3. لا تسمح منصة زيدو بنشر نسخة مطابقة، أو &quot;تبدو مشابهة&quot; أو أسلحة نارية مقلدة، و / أو أي أجزاء ومكونات ذات صلة أو عرضها للبيع أو للشراء، ويشمل هذا الحظر منتجات مثل بندقية ضغط الهواء وغيرها من الأسلحة التي بإمكانها إطلاق قذيفة.</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>4- الأسلحة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">4. 1. لا تسمح منصة زيدو بنشر أسلحة يمكن أن تؤدي إلى إعاقة جسدية للآخرين أو عرضها للبيع أو للشراء (مثل القوس).</p>\r\n\r\n<p style=\"direction: rtl;\">4. 2. في الوقت الذي يُسمح فيه بإدراج معظم أنواع السكاكين وأدوات القطع الأخرى، يُحظر إدراج المطواة أو سكاكين أوكابي، أو المقابض اليدوية (الحادة وغير الحادة)، أو الأدوات الحادة المحمولة باليد، أو السكاكين غير واضحة المعالم.</p>\r\n\r\n<p style=\"direction: rtl;\">4. 3. تحتفظ منصة &nbsp;زيدو بحقها في تقدير ما هي العناصر المناسبة والمواد التي قد تتسبب في محو المدرجات التي تعتبرها سلاحا.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>5-&nbsp;الحكومة وإنفاذ القانون والبنود العسكرية الصادرة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">5. 1. لا يسمح بإدراج البنود التالية:</p>\r\n\r\n<p style=\"direction: rtl;\">5. 1. أصناف من الملابس أو الهوية التي تدعي أنها أو التي تبدو مشابهة للزي الحكومي الرسمي.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 1. 2. اشارات إنفاذ القانون أو الأجهزة الرسمية لإنفاذ القانون من أي سلطة عامة، بما في ذلك الشارات الصادرة عن حكومة أي بلد.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 1. 3. الأوسمة والميداليات والجوائز العسكرية، بالإضافة إلى المواد ذات التصاميم المتشابهة إلى حد كبير.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 2. لا يجوز نشر ملابس الشرطة وشارات الشرطة ومركبات الشرطة إلا إذا عفا عليها الزمن ولا تشبه بأي حال من الأحوال الزي الرسمي للشرطة وشارات الشرطة ومركبات الشرطة. ويجب أن تكون هذه الحقيقة مبينه بوضوح في وصف النشر.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 3. وهناك بعض عناصر الشرطة التي يمكن إدراجها في منصة زيدو، شريطة مراعاة المبادئ التوجيهية التالية:</p>\r\n\r\n<p style=\"direction: rtl;\">5. 3. 1. عناصر تذكارية عامة مصرح بها، مثل القبعات والأكواب والدبابيس والأقلام والأزرار وأزرار الكفة والقمصان ومقاطع النقود التي لا تشبه الشارات والشعارات الورقية التي لا تحتوي على شارات.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 3. 2. الشارات التي ليس من الواضح أنها حقيقية أو رسمية (مثل شارات اللعب).</p>\r\n\r\n<p style=\"direction: rtl;\">5. 3. 3. شارات تاريخية لا تشبه شارات إنفاذ القانون الحديثة، بشرط أن ينص وصف العنصر بوضوح على أن الشارة هي قطعة تاريخية لا يقل عمرها عن 100 عام أو صادرة عن منظمة لم تعد موجودة.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 4. لا يُسمح بإدراج العناصر ذات الصلة التالية بالنقل الجماعي:</p>\r\n\r\n<p style=\"direction: rtl;\">5. 4. 1. أي صنف من الملابس أو الهوية تتعلق بصناعات النقل، بما في ذلك على سبيل المثال لا الحصر، طياري الخطوط الجوية التجارية ومضيفو الطيران وموظفو خدمة المطار وموظفو السكك الحديدية وموظفو أمن النقل الجماعي. يمكن إدراج الملابس القديمة المتعلقة بشركات الطيران التجارية أو غيرها من وسائل النقل الجماعي بشرط أن ينص الوصف بوضوح على أن العنصر لا يقل عن 10 سنوات، ولم يعد مستخدمًا ولا يشبه أي زي موحد حالي.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 4. 2. الأدلة أو المواد الأخرى المتعلقة بالنقل التجاري، بما في ذلك أدلة السلامة التي تنشرها شركات الطيران والكيانات التجارية التي تعمل في قطارات الأنفاق أو القطارات أو الحافلات. قد يتم سرد هذه العناصر فقط إذا كان الوصف ينص بوضوح على أن العنصر قديم ولم يعد قيد الاستخدام.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 4. 3. أي وثائق رسمية أو داخلية أو مصنفة أو غير علنية.</p>\r\n\r\n<p style=\"direction: rtl;\">5. 5. منوع إدراج معدات الشرطة والمنتجات المرتبطة بها.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>6-&nbsp;الأدوية الطبية</strong></p>\r\n\r\n<p style=\"direction: rtl;\">6. 1. يحظر منعاً باتاً نشر العقاقير الطبية والمؤثرات العقلية والمخدرات.</p>\r\n\r\n<p style=\"direction: rtl;\">6. 2. يحظر إدراج أو بيع الأغذية والمكملات الغذائية والتكميلية التي تدار شفوياً أو التي يتم تناولها عن طريق الفم.</p>\r\n\r\n<p style=\"direction: rtl;\">6. 3. قد لا يتم سرد العقاقير البيطرية الموصوفة.</p>\r\n\r\n<p style=\"direction: rtl;\">6. 4. يمكن للأعضاء إضافة عقاقير أو تي سي (بدون وصفة طبية) على موقع زيدو الرئيسي بعد توفير تصاريح مناسبة للإنتاج والمبيعات إلى موقع الويب، في حين يُحظر تمامًا الدخول في معاملات هذه المنتجات كتداول على الإنترنت ذات صلة.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>7-&nbsp;الأجهزة الطبية</strong></p>\r\n\r\n<p style=\"direction: rtl;\">لا تسمح منصة زيدو بنشر الأجهزة الطبية غير المصرح بها. يجوز للأعضاء فقط نشر أجهزة طبية معتمدة بعد تقديم تصاريح مناسبة للإنتاج والمبيعات.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>8-&nbsp;المحتوى المقدم والفاحش للكبار فقط.</strong></p>\r\n\r\n<p style=\"direction: rtl;\">8. 1. ممنوع منعاً باتاً نشر أو بيع المواد الإباحية.</p>\r\n\r\n<p style=\"direction: rtl;\">8. 2. في تحديد ما إذا كان يجب إزالة القوائم أو المعلومات من منصة زيدو، فإننا ننظر في المحتوى العام للنشر، بما في ذلك الصور والأدوات التصويرية والنصوص.</p>\r\n\r\n<p style=\"direction: rtl;\">8. 3. ممنوع منعاً باتاً ألعاب الجنس والمنتجات ذات الصلة</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>9-&nbsp;أجهزة التحايل وغيرها من المعدات المستخدمة لأغراض غير مشروعة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">9. 1. يحظر استخدام أجهزة استقبال ديسكرامبلرز وغيره من العناصر التي يمكن استخدامها للحصول على الوصول غير المصرح به إلى البرامج التلفزيونية (مثل القمر الصناعي وتلفزيون الكابل) أو الوصول إلى الإنترنت أو الهاتف أو البيانات أو الخدمات الأخرى المحظورة أو المقيدة.</p>\r\n\r\n<p style=\"direction: rtl;\">9. 2. يحظر استخدام الأجهزة المصممة لحظر أو إعاقة أو تشويش الاتصالات اللاسلكية المسموح بها، مثل خدمات الاتصالات الخلوية والشخصية ورادار الشرطة والأنظمة العالمية لتحديد المواقع (<span dir=\"LTR\">GPS</span>) وخدمات الشبكات اللاسلكية (<span dir=\"LTR\">Wi-Fi</span>).</p>\r\n\r\n<p style=\"direction: rtl;\">9. 3. لا يُسمح بإدراج أو بيع معدات وأجهزة التصنت المستخدمة في اعتراض الاتصالات السلكية واللاسلكية والإلكترونية في منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">9. 4. ممنوع منعاً باتاً أجهزة التصوير المخفية.</p>\r\n\r\n<p style=\"direction: rtl;\">9. 5. يحظر إدراج قارئات البطاقات البنكية.</p>\r\n\r\n<p style=\"direction: rtl;\">9. 6. ممنوع منعاً باتاً كافة أجهزة التحايل غير المصرح بها غير المدرجة فيما سبق.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>10- الخدمات الغير شرعية</strong></p>\r\n\r\n<p style=\"direction: rtl;\">10. 1. الإدراج الذي يقدم الخدمات الحكومية والمنتجات ذات الصلة ممنوعة منعاً باتاً. وتشمل الأمثلة ما يلي:</p>\r\n\r\n<p style=\"direction: rtl;\">أ) وثائق الهوية الرسمية الصادرة عن الحكومة مثل شهادات الميلاد ورخص القيادة وجوازات السفر والتأشيرات.</p>\r\n\r\n<p style=\"direction: rtl;\">ب) الطلبات المستوفاة للوثائق المذكورة أعلاه.</p>\r\n\r\n<p style=\"direction: rtl;\">ج) أي مواد أو معدات أو عمليات مصممة للاستخدام في إنتاج وثائق هوية صادرة عن الحكومة (مثل التصوير المجسم لرخصه القيادة وكتيبات جوازات السفر).</p>\r\n\r\n<p style=\"direction: rtl;\">د) يحظر عرض بيع أو شراء حصة المنسوجات على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 2. ممنوع منعاً باتاً إدراج أو بيع أي شكل من أشكال الفواتير أو الإيصالات على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 3. تحظر منصة زيدو الإدراج الذي يقدم الخدمات المالية، بما في ذلك التحويلات المالية وإصدار الضمانات المصرفية وخطابات الاعتماد والقروض وجمع الأموال والتمويل لأغراض الاستثمار الشخصية، إلخ.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 4. تحظر منصة زيدو الإدراج بغرض وحيد هو جمع معلومات المستخدم أو جمع الأموال.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 5. يحظر عرض القوائم التي تقدم الخدمات الطبية أو خدمات الرعاية الصحية، بما في ذلك خدمات العلاج الطبي وإعادة التأهيل والتطعيم والفحوصات الصحية والاستشارة النفسية وعلم التغذية والجراحة التجميلية والمساج.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 6. نشر أو بيع رسائل بريد إلكتروني مجمعة أو قوائم بريدية تحتوي على معلومات شخصية بما في ذلك. كما يحظر أيضًا استخدام البرامج أو الأدوات الأخرى التي تم تصميمها أو استخدامها لإرسال البريد الإلكتروني التجاري غير المرغوب فيه (أي &quot;البريد العشوائي&quot;).</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 7. يحظر على منصة زيدو نشر إعلانات الوظائف التي يمكن من خلالها تعيين مصنع أو شركة أو مؤسسة مباشرة للموظفين.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 8. منصة زيدو هي منصة للأعمال التجارية عبر الإنترنت. المعلومات الشخصية وغير التجارية محظورة.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10. 9. لا يجوز نشر أو بيع العناصر غير القابلة للتحويل من خلال منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>11-&nbsp;المقتنيات والتحف والمعادن الثمينة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. 1. تحظر منصة زيدو بصرامة بيع وشراء العملات والنقود والأسهم والسندات والحوالات النقدية وبطاقات الائتمان والخصم والفائدة الاستثمارية والعملة الرقمية أو أي شكل غير ملموس (مثل العملة المشفرة)، فضلاً عن معدات المواد المستخدمة لإنتاج هذه العناصر.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. 2. يحظر منعاً باتاً تزوير المواد المحددة في 11.1والمناقصات القانونية والطوابع البريدية.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. 3. يجب وضع علامة واضحة على الاستنساخ أو النسخ طبق الأصل للعملات المعدنية على أنها عناصر قابلة للتحصيل مع كلمة &ldquo;نسخ&quot;، &ldquo;الاستنساخ&quot; أو &ldquo;النسخة طبق الأصل&quot; والامتثال لجميع القوانين المحلية ذات الصلة.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. 4. يحظر عرض القوائم التي تعرض بيع أو شراء الذهب والفضة والمعادن النفيسة الأخرى (لا تشمل المجوهرات).</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. 5. قد لا يتم إدراج الماس الخام و &quot;المعادن المؤججة للنزاعات&quot; الناشئة من بلدان غير ملتزمة.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11. 6. التحف والآثار الثقافية وعلامات القبور التاريخية والمواد ذات الصلة محمية بموجب قوانين المملكة العربية السعودية والولايات القضائية المختصة الأخرى ولا يجوز نشرها أو بيعها من خلال منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>12-&nbsp;الأجزاء البشرية، بقايا الإنسان والحيوانات والنباتات المحمية</strong></p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12. 1. تحظر منصة زيدو إدراج أجزاء جسم الإنسان وبقاياه.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12. 2. يحظر منعاً باتاً إدراج أو بيع أي نوع من الأنواع المحمية بموجب اتفاقية الاتجار الدولي بأنواع الكائنات البرية والنباتية المهددة بالانقراض أو أي قانون أو نظام محلي آخر على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12. 3. يحظر على منصة زيدو إدراج أو بيع المنتجات المصنوعة مع أي جزء من أو تحتوي على أي عنصر مشتق من أسماك القرش أو الثدييات البحرية.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12. 4. يحظر على منصة زيدو إدراج أو بيع المنتجات المصنوعة من القطط والكلاب والدببة فضلاً عن أي معدات للتجهيز.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12. 5. يسمح بإدراج أو بيع الدواجن والمواشي والحيوانات الأليفة لأغراض تجارية على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>13-&nbsp;المواد المسيئة والمعلومات الضارة بالأمن القومي</strong></p>\r\n\r\n<p style=\"direction: rtl;\"><strong>13. 1. </strong>يُحظر من جميع المنشورات ووسائل الإعلام الأخرى التي تتضمن أسرار الدولة أو أي معلومات ضارة بالأمن القومي أو النظام العام. ومن الممكن أن يؤدي هذا النشاط إلى شطب الحساب الخاص بك.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>13.</strong> 2. ممنوع منعاً بتاً أي معلومات تدعم أو تدعو إلى انتهاك السيادة الوطنية أو المنظمات الإرهابية أو التمييز على أساس العرق أو الجنس أو الدين على منصة زيدو. ومن الممكن أن يؤدي هذا النشاط إلى شطب الحساب الخاص بك.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>13.</strong> 4. يُمنع منعاً بتاً المواد التي تدافع عن الفاشية والنازية أو تدعمها أو تساندها بأي وسيلة كانت وغيرها من الإيديولوجيات المتطرفة.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>14. منتجات التبغ</strong></p>\r\n\r\n<p style=\"direction: rtl;\">14<strong>. 1. </strong>يحظر نشر منتجات التبغ، بما في ذلك على سبيل المثال لا الحصر السيجار وتبغ السجائر وتدخين السجائر وتبغ الغليون وتبغ النرجيلة وتبغ المضغ وأوراق التبغ<strong>.</strong></p>\r\n\r\n<p style=\"direction: rtl;\">14. 2. يحظر نشر السجائر الإلكترونية ولوازمها، على الرغم من أن النيكوتين والسوائل الأخرى (السوائل الإلكترونية) المستخدمة في السجائر الإلكترونية محظورة.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>15-&nbsp;معدات القمار </strong></p>\r\n\r\n<p style=\"direction: rtl;\">يحظر إدراج أو بيع المعدات المستخدمة خصيصًا للعب القمار. وسيتم السماح بشكل عام بالمنتجات التي لها استخدامات مشروعة أخرى (مثل لعبة النرد ولعبة الورق).</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>16-&nbsp;المواد المحظورة والخاضعة للعقوبات</strong></p>\r\n\r\n<p style=\"direction: rtl;\">16. 1. يُمنع منعاً بتاً في منصة زيدو المنتجات المحظورة بموجب القوانين واللوائح والعقوبات والقيود التجارية في أي دولة أو ولاية ذات صلة في جميع أنحاء العالم.<strong> </strong></p>\r\n\r\n<p style=\"direction: rtl;\">16. 2. يُمنع منعاً بتاً إدراج أو بيع البترول والمنتجات البترولية والمنتجات البتروكيماوية التي تنشأ في جمهورية إيران الإسلامية.</p>\r\n\r\n<p style=\"direction: rtl;\">16. 3. يُمنع منعاً بتاً إدراج أو بيع الفحم والحديد وخام الحديد والذهب وخام التيتانيوم وخام الفاناديوم والمعادن الأرضية النادرة الناشئة في جمهورية كوريا الشعبية الديمقراطية.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>17-&nbsp;محظورات آخرى مدرجة </strong></p>\r\n\r\n<p style=\"direction: rtl;\">17. 1. يُمنع نشر أي من المنتجات التي تحتوي على مواد ضارة (مثل ألعاب تحتوي على طلاء الرصاص) على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 2. يُحظر بشكل صريح من استخدام الأكياس الهوائية الخاصة بالسيارات في منطقة زيدو نظرا لأنها تحتوي على مواد متفجرة.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 3. يُحظر من بيع وشراء الهواتف النقالة المجددة وأجهزة الكمبيوتر وأجهزة الكمبيوتر المحمولة على موقع منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 4. لا يجوز درج الملابس الداخلية المستعملة أو بيعها على منصة زيدو. وقد يتم إدراج الملابس المستعملة الأخرى، طالما تم تنظيف الملابس بصورة كاملة. وستتم إزالة المنشورات التي تحتوي على أوصاف غير مناسبة أو خارجة عن صلب الموضوع. ويحظر من إدراج أو بيع مستحضرات التجميل المستخدمة على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 5. يُحظر من إدراج الكحول على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 6. يُحظر من إدراج جميع الأطعمة والمشروبات، باستثناء الشاي والقهوة والفواكه المجففة والمكسرات على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 7. يُحظر من نشر أي منتجات كيماوية على منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">17. 8. يُمنع منعاً بتاً المعلومات أو الصور التي تحتوي على شخصيات سياسية أو تشير إليها.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>سياسة حماية حقوق الملكية الفكرية</strong></p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>1- الوجوه والأسماء والتوقيعات</strong></p>\r\n\r\n<p style=\"direction: rtl;\">يُحظر من استخدام العناصر التي تحتوي على تشابه أو صورة أو اسم أو توقيع لشخص آخر، إلا إذا كانت المنتجات قد صُنعت أو أُذن بها للشخص الذي اُستخدم صورته أو صورة مشابه له أو اسمه أو توقيعه.</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>2- المواد المطابقة للأصل والأخرى المزيفة</strong></p>\r\n\r\n<p style=\"direction: rtl;\">2. 1. يُحظر تمامًا إدراج المواد المزيفة أو المطابقة الأصل لكن غير مرخصة أو غير المصرح بها، مثل الملابس المزيفة أو الساعات أو الحقائب اليدوية أو النظارات الشمسية أو غيرها من الملحقات.</p>\r\n\r\n<p style=\"direction: rtl;\">2. 2. إذا كانت المنتجات المباعة تحمل اسم شركة أو شعارها، ولكنها لم تصدر من تلك الشركة أو لم تكن قد صادقت على إدراجها على المنصة، فبالتالي يحظر إدراجها على المنصة.</p>\r\n\r\n<p style=\"direction: rtl;\">2. 3. يُسمح بنشر الإعلانات الخاصة بالمنتجات ذات العلامة التجارية إذا تم إصدار شهادة التفويض من مالك العلامة التجارية.</p>\r\n\r\n<p style=\"direction: rtl;\">2. 4. تمحى إعلانات بيع أو شراء المواد المطابقة للأصل أو المزيفة أو غيرها من المواد غير المصرح بها بواسطة منصة زيدو. يؤدي النشر المتكررة للمواد المزيفة أو غير المصرح بها إلى التعليق الفوري لعضويتك.</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>3- البرامج</strong></p>\r\n\r\n<p style=\"direction: rtl;\"><strong>3. 1. البرامج الأكاديمية</strong></p>\r\n\r\n<p style=\"direction: rtl;\">3. 1. 1. البرامج الأكاديمية هي البرمجيات المباعة بأسعار مخفضة للطلاب والمعلمين والموظفين من مؤسسات التعليم المعتمدة.</p>\r\n\r\n<p style=\"direction: rtl;\">3. 1. 2. لا يجب أن تدرج أي برامج أكاديمية إلا إذا كنت مخولاً لذلك. قد تحذف النشرات التي تنتهك السياسة المتبعة في نشر البرامج الأكاديمية لمنصة زيدة قبل نشرها للجمهور.</p>\r\n\r\n<p style=\"direction: rtl;\">3. 1. 3 في حالة نشر برامج أكاديمية نيابة عن أي مقدم محتوى تعليمي أو مؤسسة تعليمية مرخص لها، يجب ذكر هذا الترخيص بشكل واضح في الإدراج. يجب أيضًا تقديم شهادة تفويض صادرة من مقدم المحتوى التعليمي المعتمد (أو المؤسسة التعليمية) إلى منصة زيدو.</p>\r\n\r\n<p style=\"direction: rtl;\">3 .2 برامج الشركات المصنعة للمعدّات الأصلية</p>\r\n\r\n<p style=\"direction: rtl;\">3. 2. 1 عدم إدراج نسخ من برامج الشركات المصنعة للمعدات الأصلية أو البرامج المجمعة على منصة زيدو إلا إذا كنت تقوم ببيعها مع أجهزة الكمبيوتر. إن الشركات المصنعة للمعدات الأصلية، أو البرامج المجمعة، هي برامج يتم الحصول عليها كجزء من عملية شراء كمبيوتر جديد. تحظر تراخيص برامج الشركات المصنعة للمعدات الأصلية عادةً على المشتري إعادة بيع البرنامج بدون الكمبيوتر أو في بعض الحالات دون أي أجهزة كمبيوتر.</p>\r\n\r\n<p dir=\"rtl\" style=\"direction: rtl;\"><strong>4- النسخ غير المصرح بها من الملكية الفكرية</strong></p>\r\n\r\n<p style=\"direction: rtl;\">يحظر على منصة زيدو إدراج نسخ غير مصرح بها (مسروقة أو مكررة أو منسوخة احتياطيا أو مباعة بطريقة غير شرعية أو ما شابه ذلك) من البرامج أو ألعاب الفيديو أو ألبومات الموسيقى أو الأفلام أو البرامج التلفزيونية أو الصور الفوتوغرافية أو الأعمال المحمية الأخرى.</p>\r\n\r\n<p style=\"direction: rtl;\"><strong>إخطار</strong>: لا ينبغي اعتبار هذه القائمة شاملة في طبيعتها ويجب تحديثها بصورة مستمرة. في حال لم تكن متأكدا من المنتج الذي ترغب في إدراجه في الموقع فيما يتعلق بمدى ملاءمته أو قانونيته، فيرجى الاتصال بقسم خدمات العملاء لدينا.</p>\r\n\r\n<p style=\"direction: rtl;\">&nbsp;</p>\r\n', 'active', '2018-12-21 18:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `exterior_color_id` int(11) NOT NULL,
  `interior_color_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `original_price` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `milage` int(10) NOT NULL,
  `inspected` int(1) NOT NULL,
  `warranty` int(1) NOT NULL DEFAULT '0',
  `cylinders` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gears` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gears_text` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sun_roof` int(1) NOT NULL,
  `min_bid` int(10) NOT NULL,
  `serial_num` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `other_info` text CHARACTER SET utf8 NOT NULL,
  `car_type` int(10) NOT NULL,
  `deal_title` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active, 2- bid_accepted',
  `bid_acceptance_flag` int(1) NOT NULL DEFAULT '0',
  `accepted_bid_value` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `sub_category_id`, `exterior_color_id`, `interior_color_id`, `country_id`, `image`, `price`, `original_price`, `year`, `milage`, `inspected`, `warranty`, `cylinders`, `gears`, `gears_text`, `sun_roof`, `min_bid`, `serial_num`, `start_date`, `end_date`, `description`, `other_info`, `car_type`, `deal_title`, `status`, `bid_acceptance_flag`, `accepted_bid_value`, `created_at`) VALUES
(2, 2, 4, 4, 4, 5, 29, 'assets/uploads/product_images/2_image1542348803.png', 2000, 2000, 2015, 16, 1, 1, '6', '4', 'Manual', 1, 1900, 'AP02BG345', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-04 05:13:23'),
(3, 4, 5, 6, 1, 5, 24, 'assets/uploads/product_images/4_image1542349342.png', 3000, 3000, 2011, 16, 1, 1, '6', '4', 'Manual', 0, 2700, 'AP02BG323', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-16 06:22:22'),
(9, 1, 3, 16, 5, 4, 11, 'assets/uploads/product_images/1_image1542603525.png', 25000, 25000, 2017, 12, 1, 1, '6', '1', 'Manual', 1, 24000, 'AP02BG365', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-19 04:58:45'),
(11, 1, 3, 16, 5, 4, 10, 'assets/uploads/product_images/1_image1542603647.png', 25000, 25000, 2017, 12, 1, 1, '6', '4', 'Manual', 1, 24000, 'AP02BG355', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-19 05:00:47'),
(12, 2, 3, 21, 5, 4, 5, 'assets/uploads/product_images/2_image1542623174.png', 1500, 1500, 2018, 18, 1, 0, '6', '4', 'Manual', 1, 1200, 'KW02SD345', '0000-00-00', '0000-00-00', 'Car Description by seller', '', 1, '', 1, 0, 0, '2018-11-19 10:26:14'),
(13, 1, 1, 11, 5, 4, 10, 'assets/uploads/product_images/1_image1542700392.png', 25000, 25000, 2017, 12, 1, 1, '6', '4', 'Manual', 1, 24000, 'AP02BG3759', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-20 07:53:12'),
(14, 2, 1, 11, 5, 4, 5, 'assets/uploads/product_images/2_image1542700425.png', 25000, 25000, 2017, 12, 1, 1, '6', '4', 'Manual', 1, 24000, 'AP02BG3757', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-20 07:53:45'),
(15, 2, 1, 15, 5, 4, 9, 'assets/uploads/product_images/2_image1542700470.png', 25000, 25000, 2017, 12, 1, 1, '6', '4', 'Manual', 1, 24000, 'AP02BG3753', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-20 07:54:30'),
(16, 2, 1, 14, 5, 4, 19, 'assets/uploads/product_images/2_image1542700522.png', 25000, 25000, 2017, 12, 1, 1, '6', '4', 'Manual', 1, 24000, 'AP02BG3754', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-20 07:55:22'),
(19, 66, 1, 14, 5, 4, 22, 'assets/uploads/product_images/66_image1542870871.png', 25000, 25000, 2017, 12, 1, 1, '6', '4', 'Manual', 1, 24000, 'AP02BG3758', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-11-22 07:14:31'),
(30, 117, 8, 50, 1, 4, 2, 'assets/uploads/product_images/117_image1543476674.png', 2200, 2000, 2018, 10, 1, 1, '6', '4', 'Manual', 1, 200, 'KW02SD385', '0000-00-00', '0000-00-00', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', 1, '', 1, 0, 0, '2018-11-29 07:31:14'),
(31, 117, 8, 51, 4, 2, 3, 'assets/uploads/product_images/117_image1543477005.png', 15000, 15000, 2017, 10, 1, 1, '6', '4', 'Manual', 1, 14500, 'KW02SD376', '0000-00-00', '0000-00-00', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '', 1, '', 1, 0, 0, '2018-11-29 07:36:45'),
(45, 185, 3, 7, 4, 4, 3, 'assets/uploads/product_images/185_image1543904024.jpeg', 1700, 900, 2006, 4, 0, 0, '5', '3', 'Manual', 0, 800, 'Apj135', '0000-00-00', '0000-00-00', 'New car', '', 1, '', 2, 1, 800, '2018-12-04 06:13:44'),
(46, 185, 4, 4, 4, 5, 2, 'assets/uploads/product_images/185_image1546083240.jpg', 5900, 1500, 2005, 3, 0, 0, '5', '3', 'Automatic', 0, 1100, 'TS1345D', '0000-00-00', '0000-00-00', 'New car design ', 'sdgdfg', 1, 'zdgdfhgfh', 1, 0, 0, '2018-12-04 06:16:48'),
(47, 185, 5, 6, 2, 1, 3, 'assets/uploads/product_images/185_image1543904546.jpeg', 2000, 2000, 2007, 4, 0, 0, '6', '2', 'Manual', 0, 2100, 'SD134G', '0000-00-00', '0000-00-00', 'Car design is good ', '', 1, '', 1, 0, 0, '2018-12-04 06:22:26'),
(48, 186, 6, 1, 5, 4, 4, 'assets/uploads/product_images/186_image1546517978.jpeg', 12759, 9759, 2006, 5, 0, 0, '6', '4', 'Automatic', 0, 2600, 'SH145788', '0000-00-00', '0000-00-00', 'Good working conditions lol', 'Gigi’s', 1, 'jigging', 1, 0, 0, '2018-12-04 06:25:53'),
(49, 186, 7, 5, 4, 5, 5, 'assets/uploads/product_images/186_image1543904857.jpeg', 7700, 7700, 2007, 6, 0, 0, '6', '5', 'Manual', 0, 2800, 'SH148685', '0000-00-00', '0000-00-00', 'Good working conditions ', '', 1, '', 1, 0, 0, '2018-12-04 06:27:37'),
(50, 186, 8, 50, 1, 2, 6, 'assets/uploads/product_images/186_image1543905004.jpeg', 5700, 5700, 2008, 5, 0, 0, '4', '5', 'Automatic', 0, 2800, 'KG14578', '0000-00-00', '0000-00-00', 'Good working conditions g', 'ghbcc', 1, 'gjbj', 1, 0, 0, '2018-12-04 06:30:04'),
(51, 186, 8, 51, 5, 5, 7, 'assets/uploads/product_images/186_image1543905464.jpeg', 3000, 3000, 2007, 5, 0, 0, '2', '4', 'Manual', 0, 3100, 'IG13445', '0000-00-00', '0000-00-00', 'Good working conditions ', '', 1, '', 1, 0, 0, '2018-12-04 06:37:44'),
(52, 186, 7, 42, 2, 4, 8, 'assets/uploads/product_images/186_image1543905628.jpeg', 2000, 2000, 2008, 4, 0, 0, '5', '3', 'Manual', 0, 2100, 'Lk1234', '0000-00-00', '0000-00-00', 'Perfect condition ', '', 1, '', 1, 0, 0, '2018-12-04 06:40:28'),
(53, 187, 1, 9, 2, 4, 3, 'assets/uploads/product_images/187_image1543905781.jpg', 4500, 4500, 2008, 10, 0, 0, '2', '4', 'Manual', 0, 4200, '133456', '0000-00-00', '0000-00-00', 'Working with good features', '', 1, '', 1, 0, 0, '2018-12-04 06:43:01'),
(54, 186, 6, 3, 4, 5, 9, 'assets/uploads/product_images/186_image1543905949.jpeg', 2400, 2400, 2006, 4, 0, 0, '3', '4', 'Manual', 0, 2300, '14678', '0000-00-00', '0000-00-00', 'Perfect condition ', '', 1, '', 1, 0, 0, '2018-12-04 06:45:49'),
(55, 186, 5, 29, 2, 2, 10, 'assets/uploads/product_images/186_image1543906237.jpeg', 2800, 2800, 2007, 2, 0, 0, '3', '2', 'Manual', 0, 2000, 'KV13577', '0000-00-00', '0000-00-00', 'Perfect condition ', '', 1, '', 1, 0, 0, '2018-12-04 06:50:37'),
(56, 186, 4, 22, 4, 4, 11, 'assets/uploads/product_images/186_image1543906379.jpeg', 3000, 3000, 2006, 3, 0, 0, '3', '2', 'Manual', 0, 2500, 'LG14689', '0000-00-00', '0000-00-00', 'Perfect condition ', '', 1, '', 1, 0, 0, '2018-12-04 06:52:59'),
(57, 185, 1, 2, 2, 4, 12, 'assets/uploads/product_images/185_image1543906670.jpeg', 6100, 2100, 2005, 2, 0, 0, '6', '2', 'Manual', 0, 1900, 'TY1356', '0000-00-00', '0000-00-00', 'New design car', '', 1, '', 1, 0, 0, '2018-12-04 06:57:50'),
(58, 185, 1, 9, 1, 5, 13, 'assets/uploads/product_images/185_image1543906814.jpeg', 1700, 1700, 2006, 3, 0, 0, '6', '4', 'Automatic', 0, 1500, 'LK1456', '0000-00-00', '0000-00-00', 'New design car', 'fgfdh', 1, 'sdgfdgf', 1, 0, 0, '2018-12-04 07:00:14'),
(60, 187, 4, 4, 5, 4, 1, 'assets/uploads/product_images/187_image1543907776.jpg', 6200, 6200, 2013, 20, 0, 0, '2', '4', 'Manual', 0, 6000, 'BH5467', '0000-00-00', '0000-00-00', 'Extraordinary latest features', '', 1, '', 1, 0, 0, '2018-12-04 07:16:16'),
(61, 187, 6, 36, 4, 2, 5, 'assets/uploads/product_images/187_image1543908144.jpg', 6800, 6800, 2014, 24, 0, 0, '2', '4', 'Manual', 0, 6200, 'SP3457', '0000-00-00', '0000-00-00', 'Latest featured technology involved', '', 1, '', 1, 0, 0, '2018-12-04 07:22:24'),
(62, 188, 6, 41, 1, 4, 5, 'assets/uploads/product_images/188_image1543910076.png', 2500, 2000, 2018, 14, 1, 1, '6', '1', 'Manual', 1, 200, 'DM1241', '0000-00-00', '0000-00-00', 'Description', 'fghdfgd', 1, 'fghjgfhjgkhjhj', 2, 1, 300, '2018-12-04 07:54:36'),
(68, 188, 3, 18, 4, 5, 8, 'assets/uploads/product_images/188_image1544091089.png', 5200, 5200, 2018, 1000, 1, 1, '6', '1', 'Manual', 1, 1000, '5123123', '0000-00-00', '0000-00-00', 'dESCRIPTION', '', 1, '', 1, 0, 0, '2018-12-06 10:11:29'),
(69, 185, 4, 22, 8, 7, 4, 'assets/uploads/product_images/185_image1544441251.jpeg', 2000, 2000, 2008, 2500, 0, 0, '8', '1', 'Manual', 0, 300, 'HD1223', '0000-00-00', '0000-00-00', 'Testing testing testing yes testing testing testing testing ', 'gjhgjhgk', 1, 'rgtryhtud', 1, 0, 0, '2018-12-10 11:27:31'),
(70, 185, 8, 51, 7, 4, 3, 'assets/uploads/product_images/185_image1544441475.jpeg', 3400, 3000, 2009, 2500, 0, 0, '8', '0', 'Automatic', 0, 200, 'UY134', '0000-00-00', '0000-00-00', 'Testing ', '', 1, '', 1, 0, 0, '2018-12-10 11:31:15'),
(72, 214, 4, 22, 4, 5, 4, 'assets/uploads/product_images/214_image1544530132.jpeg', 5500, 2500, 2018, 1500, 0, 0, '6', '1', 'Manual', 0, 900, 'TS1234', '0000-00-00', '0000-00-00', 'Good condition with Latest features', '', 1, '', 1, 0, 0, '2018-12-11 12:08:52'),
(73, 229, 4, 23, 4, 4, 5, 'assets/uploads/product_images/229_image1544530551.jpeg', 2500, 2500, 2023, 5, 0, 0, '3', '3', 'Automatic', 0, 100, 'Vdyh', '0000-00-00', '0000-00-00', 'Gfyuj', '', 1, '', 1, 0, 0, '2018-12-11 12:15:51'),
(74, 222, 1, 9, 1, 2, 5, 'assets/uploads/product_images/222_image1544594252.jpg', 16000, 8000, 2015, 1500, 1, 1, '8', '0', 'Automatic', 1, 400, 'vghjj', '0000-00-00', '0000-00-00', 'Bdjjfjfiid', '', 1, '', 1, 0, 0, '2018-12-12 05:57:32'),
(75, 244, 3, 16, 4, 7, 8, 'assets/uploads/product_images/244_image1546252700.jpeg', 7500, 7500, 2018, 1000, 0, 0, '6', '1', 'Manual', 1, 500, 'TS48856', '0000-00-00', '0000-00-00', 'Latest technical features with good condition ', 'asdfvds', 1, 'szvfbbzv', 1, 0, 0, '2018-12-12 07:27:15'),
(76, 245, 4, 23, 4, 2, 3, 'assets/uploads/product_images/245_image1544599641.jpg', 8000, 8000, 2018, 1000, 0, 1, '6', '0', 'Automatic', 1, 300, 'TS1234', '0000-00-00', '0000-00-00', 'Good condition with new features', '', 1, '', 1, 0, 0, '2018-12-12 07:27:21'),
(77, 244, 3, 16, 4, 7, 8, 'assets/uploads/product_images/244_image1546253834.jpeg', 8000, 8000, 2018, 1000, 0, 0, '6', '1', 'Manual', 1, 800, 'TS48856', '0000-00-00', '0000-00-00', 'Latest technical features with good condition ', 'sysotdi', 1, 'ggkxkxfh', 1, 0, 0, '2018-12-12 07:53:42'),
(78, 229, 2, 2, 1, 2, 121, 'assets/uploads/product_images/229_image1544611550.jpeg', 7000, 7000, 2018, 1000, 1, 1, '4', '1', 'Manual', 1, 500, 'HS5463', '0000-00-00', '0000-00-00', 'good Condition', '', 1, '', 1, 0, 0, '2018-12-12 10:45:50'),
(79, 229, 2, 2, 1, 2, 121, 'assets/uploads/product_images/229_image1544611656.jpeg', 7000, 7000, 2018, 1000, 1, 1, '4', '1', 'Manual', 1, 500, 'HS5463', '0000-00-00', '0000-00-00', 'good Condition', '', 1, '', 1, 0, 0, '2018-12-12 10:47:36'),
(80, 253, 1, 14, 5, 4, 10, 'assets/uploads/product_images/253_image1544615400.png', 2500, 2500, 2017, 12, 0, 0, '6', '4', 'Automatic', 0, 24000, 'asdasd', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 1, '', 1, 0, 0, '2018-12-12 11:50:00'),
(81, 188, 6, 36, 4, 4, 13, 'assets/uploads/product_images/188_image1544616016.png', 5000, 5000, 1961, 4500, 1, 1, '12', '0', 'Automatic', 0, 600, '1563452146', '0000-00-00', '0000-00-00', 'sdfsadfasdf', '', 1, '', 1, 0, 0, '2018-12-12 12:00:16'),
(83, 194, 3, 19, 4, 5, 4, 'assets/uploads/resized_images/1940_image1547122969.png', 500, 500, 2017, 1500, 1, 0, '12', '1', 'Manual', 0, 200, '24556', '0000-00-00', '0000-00-00', 'Nice ', 'nice', 1, 'nice', 1, 0, 0, '2018-12-12 12:54:10'),
(84, 188, 3, 19, 5, 8, 10, 'assets/uploads/product_images/188_image1544681593.png', 2000, 2000, 1911, 0, 0, 1, '10', '0', 'Automatic', 1, 500, '784867', '0000-00-00', '0000-00-00', 'Description', '', 1, '', 1, 0, 0, '2018-12-13 06:13:13'),
(85, 202, 1, 9, 1, 1, 9, 'assets/uploads/product_images/202_image1544683603.png', 200, 200, 1908, 4000, 1, 1, '8', '1', 'Manual', 1, 400, '324432432', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '', 1, '', 1, 0, 0, '2018-12-13 06:46:43'),
(86, 188, 3, 18, 4, 7, 12, 'assets/uploads/product_images/188_image1544684031.png', 8200, 8200, 2016, 6500, 1, 0, '8', '0', 'Automatic', 1, 700, '58661', '0000-00-00', '0000-00-00', 'Description', '', 1, '', 1, 0, 0, '2018-12-13 06:53:51'),
(87, 188, 7, 46, 7, 8, 10, 'assets/uploads/product_images/188_image1544684195.png', 9000, 7000, 1970, 1000, 0, 0, '6', '1', 'Manual', 1, 900, '856123', '0000-00-00', '0000-00-00', 'Description', '', 1, '', 1, 0, 0, '2018-12-13 06:56:35'),
(88, 188, 8, 51, 7, 5, 11, 'assets/uploads/product_images/188_image1546077601.png', 7800, 7800, 1982, 0, 0, 1, '12', '1', 'Manual', 1, 900, '896521', '0000-00-00', '0000-00-00', '																																								Description																																													', 'sdgdfhdah', 1, 'adfhajdrt', 1, 0, 0, '2018-12-13 06:58:16'),
(95, 203, 1, 2, 1, 1, 14, 'assets/uploads/product_images/203_image1544698641.png', 200, 200, 1911, 6000, 0, 0, '6', '1', 'Manual', 1, 400, '3243244', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '', 1, '', 1, 0, 0, '2018-12-13 10:57:21'),
(96, 260, 4, 23, 4, 2, 3, 'assets/uploads/product_images/260_image1544699744.jpeg', 1000, 1000, 2007, 2000, 0, 0, '8', '1', 'Manual', 0, 300, '12467', '0000-00-00', '0000-00-00', 'Cjcjvkvkvk', '', 1, '', 1, 0, 0, '2018-12-13 11:15:44'),
(97, 203, 1, 9, 2, 2, 3, 'assets/uploads/product_images/203_image1544705783.jpg', 200, 200, 2012, 5500, 1, 1, '8', '1', 'Manual', 1, 100, '75757757', '0000-00-00', '0000-00-00', 'testttsts', '', 1, '', 1, 0, 0, '2018-12-13 12:56:23'),
(98, 203, 1, 9, 2, 2, 4, 'assets/uploads/product_images/203_image1544706260.png', 200, 200, 1991, 1500, 1, 1, '8', '1', 'Manual', 1, 100, '647477477', '0000-00-00', '0000-00-00', 'good', '', 1, '', 1, 0, 0, '2018-12-13 13:04:20'),
(100, 194, 5, 35, 5, 4, 5, 'assets/uploads/product_images/194_image1545039815.jpg', 900, 900, 2016, 15, 0, 1, '6', '0', 'Automatic', 1, 200, '66373', '0000-00-00', '0000-00-00', 'nice', '', 1, '', 1, 0, 0, '2018-12-17 09:43:35'),
(101, 194, 7, 48, 4, 4, 3, 'assets/uploads/product_images/194_image1545052228.jpeg', 2000, 2000, 2007, 2, 0, 0, '10', '0', 'Automatic', 0, 200, '4455', '0000-00-00', '0000-00-00', 'Yes', '', 1, '', 1, 0, 0, '2018-12-17 13:10:28'),
(102, 273, 8, 51, 5, 7, 12, 'assets/uploads/product_images/273_image1545119881.jpg', 3500, 3500, 2011, 35, 0, 1, '8', '1', 'Manual', 1, 200, '6372', '0000-00-00', '0000-00-00', 'nice.', '', 1, '', 1, 0, 0, '2018-12-18 07:58:01'),
(103, 273, 5, 35, 4, 4, 3, 'assets/uploads/product_images/273_image1545127685.jpeg', 1200, 1200, 2017, 5, 0, 0, '8', '1', 'Manual', 0, 800, '6262', '0000-00-00', '0000-00-00', 'Hajsjsh', '', 1, '', 1, 0, 0, '2018-12-18 10:08:05'),
(104, 277, 4, 27, 5, 4, 4, 'assets/uploads/product_images/277_image1545128440.jpeg', 5300, 5300, 2007, 53, 0, 0, '8', '1', 'Manual', 0, 300, '6363', '0000-00-00', '0000-00-00', 'Nice ', '', 1, '', 1, 0, 0, '2018-12-18 10:20:40'),
(105, 281, 1, 2, 7, 1, 4, 'assets/uploads/product_images/281_image1545204996.jpg', 555, 555, 1990, 0, 1, 0, '6', '0', 'Automatic', 0, 100, '123', '0000-00-00', '0000-00-00', 'yy', '', 1, '', 1, 0, 0, '2018-12-19 07:36:36'),
(106, 281, 1, 9, 1, 2, 1, 'assets/uploads/product_images/281_image1545205142.jpg', 333, 333, 1990, 0, 0, 1, '8', '0', 'Automatic', 0, 100, '123', '0000-00-00', '0000-00-00', 'rr', '', 1, '', 1, 0, 0, '2018-12-19 07:39:02'),
(107, 281, 1, 9, 1, 2, 6, 'assets/uploads/product_images/281_image1545206696.jpg', 369, 369, 1991, 0, 0, 1, '6', '0', 'Automatic', 0, 100, '123', '0000-00-00', '0000-00-00', 'uu', '', 1, '', 1, 0, 0, '2018-12-19 08:04:56'),
(108, 236, 1, 9, 1, 1, 1, 'assets/uploads/product_images/236_image1545208984.jpg', 1000, 1000, 1990, 1000, 0, 0, '4', '0', 'Automatic', 0, 200, '12345', '0000-00-00', '0000-00-00', 'fHjznzjxnnx', '', 1, '', 1, 0, 0, '2018-12-19 08:43:04'),
(109, 285, 1, 10, 4, 5, 3, 'assets/uploads/product_images/285_image1545214529.jpeg', 2000, 2000, 2002, 5856, 0, 0, '8', '1', 'Manual', 0, 300, '1346', '0000-00-00', '0000-00-00', 'Hfcv', '', 1, '', 1, 0, 0, '2018-12-19 10:15:29'),
(110, 285, 1, 10, 4, 5, 3, 'assets/uploads/product_images/285_image1545214551.jpeg', 2000, 2000, 2002, 5856, 0, 0, '8', '1', 'Manual', 0, 300, '1346', '0000-00-00', '0000-00-00', 'Hfcv', '', 1, '', 1, 0, 0, '2018-12-19 10:15:52'),
(111, 285, 1, 10, 4, 5, 3, 'assets/uploads/product_images/285_image1545214562.jpeg', 2000, 2000, 2002, 5856, 0, 0, '8', '1', 'Manual', 0, 300, '1346', '0000-00-00', '0000-00-00', 'Hfcv', '', 1, '', 1, 0, 0, '2018-12-19 10:16:02'),
(112, 285, 1, 10, 4, 5, 3, 'assets/uploads/product_images/285_image1545214575.jpeg', 2000, 2000, 2002, 5856, 0, 0, '8', '1', 'Manual', 0, 300, '1346', '0000-00-00', '0000-00-00', 'Hfcv', '', 1, '', 1, 0, 0, '2018-12-19 10:16:15'),
(113, 285, 1, 10, 4, 5, 3, 'assets/uploads/product_images/285_image1545214584.jpeg', 2000, 2000, 2002, 5856, 0, 0, '8', '1', 'Manual', 0, 300, '1346', '0000-00-00', '0000-00-00', 'Hfcv', '', 1, '', 1, 0, 0, '2018-12-19 10:16:24'),
(114, 285, 1, 10, 4, 5, 3, 'assets/uploads/product_images/285_image1545214589.jpeg', 2000, 2000, 2002, 5856, 0, 0, '8', '1', 'Manual', 0, 300, '1346', '0000-00-00', '0000-00-00', 'Hfcv', '', 1, '', 1, 0, 0, '2018-12-19 10:16:29'),
(115, 284, 1, 10, 2, 4, 4, 'assets/uploads/product_images/284_image1545284429.jpg', 8556, 8556, 1997, 3000, 1, 1, '8', '0', 'Automatic', 1, 300, 'vffhu', '0000-00-00', '0000-00-00', 'Cghhn', '', 1, '', 1, 0, 0, '2018-12-20 05:40:29'),
(116, 244, 2, 55, 4, 1, 3, 'assets/uploads/product_images/244_image1545307586.jpeg', 8000, 8000, 2006, 1000, 1, 0, '8', '1', 'Manual', 1, 300, '6579', '0000-00-00', '0000-00-00', 'Good condition ', 'sdfadsg', 1, 'sdfgsdfg', 1, 0, 0, '2018-12-20 12:06:26'),
(117, 185, 4, 4, 5, 7, 5, 'assets/uploads/product_images/185_image1546086612.jpg', 2000, 2000, 1992, 500, 0, 0, '4', '0', 'Automatic', 0, 100, '53543', '0000-00-00', '0000-00-00', 'this one very lowest price.', 'this is new model in india.', 1, 'this is modern car.', 1, 0, 0, '2018-12-21 06:07:40'),
(118, 194, 3, 54, 5, 8, 5, 'assets/uploads/product_images/194_image1546087027.jpg', 500, 500, 2007, 5, 1, 1, '10', '1', 'Manual', 1, 600, '63673', '0000-00-00', '0000-00-00', 'nice car', 'nice car', 1, 'nice', 1, 0, 0, '2018-12-21 07:12:18'),
(119, 185, 5, 30, 4, 5, 3, 'assets/uploads/product_images/185_image1545378562.jpeg', 4000, 4000, 1991, 2000, 0, 0, '6', '1', 'Manual', 1, 200, '1461', '0000-00-00', '0000-00-00', 'Good condition ', 'good condition ', 1, 'New deal', 1, 0, 0, '2018-12-21 07:49:22'),
(120, 186, 8, 51, 8, 2, 3, 'assets/uploads/product_images/186_image1545385338.jpeg', 2800, 2800, 2012, 200, 0, 0, '10', '1', 'Manual', 0, 200, 'hahaha', '0000-00-00', '0000-00-00', 'Bababsbxbxbbx', 'gays gay', 1, 'yayayyh', 1, 0, 0, '2018-12-21 09:42:18'),
(121, 244, 4, 24, 5, 4, 4, 'assets/uploads/product_images/244_image1545386205.jpeg', 8000, 8000, 2018, 1000, 1, 0, '10', '0', 'Automatic', 1, 800, '6579', '0000-00-00', '0000-00-00', 'Latest technology', 'bchjjk', 1, 'bfhjjj', 1, 0, 0, '2018-12-21 09:56:45'),
(122, 185, 2, 56, 2, 5, 2, 'assets/uploads/product_images/185_image1545389638.jpeg', 500, 500, 1993, 2, 0, 0, '6', '1', 'Manual', 0, 300, '7273', '0000-00-00', '0000-00-00', 'Bsnnznz', 'hash', 1, 'highs', 1, 0, 0, '2018-12-21 10:53:58'),
(123, 244, 4, 25, 4, 7, 3, 'assets/uploads/product_images/244_image1545458951.jpg', 5500, 5500, 2008, 1500, 1, 0, '8', '1', 'Manual', 1, 600, '6389', '0000-00-00', '0000-00-00', 'Gdfvhjiij', 'Cfhhb', 1, 'Cdgg', 1, 0, 0, '2018-12-22 06:09:11'),
(124, 280, 1, 10, 4, 7, 6, 'assets/uploads/product_images/280_image1545466799.jpeg', 2000, 2000, 2017, 240000, 1, 0, '6', '0', 'Automatic', 0, 400, 'ssss', '0000-00-00', '0000-00-00', 'مافيه شي جديد ', 'كاملة الاوصاف', 1, 'سيارة اينوفا للبيع بحالة جيده', 1, 0, 0, '2018-12-22 08:19:59'),
(125, 280, 2, 56, 4, 5, 5, 'assets/uploads/product_images/280_image1545471092.jpeg', 4000, 4000, 2008, 500000, 0, 0, '8', '0', 'Automatic', 0, 400, 'ffgh', '0000-00-00', '0000-00-00', 'اهلا', 'مرحبا', 1, 'بحالة جيدة ', 1, 0, 0, '2018-12-22 09:31:32'),
(126, 262, 4, 24, 8, 4, 5, 'assets/uploads/product_images/262_image1545477521.jpg', 6000, 6000, 2014, 1000, 1, 1, '8', '0', 'Automatic', 1, 500, 'TS4793', '0000-00-00', '0000-00-00', 'Fffhhjjjn', 'Ghlkjhhj', 1, 'Bxnxjjd', 1, 0, 0, '2018-12-22 11:18:41'),
(127, 262, 5, 31, 4, 7, 6, 'assets/uploads/product_images/262_image1545478242.jpg', 7000, 7000, 2015, 1000, 1, 1, '8', '1', 'Manual', 1, 100, 'TS8456', '0000-00-00', '0000-00-00', 'Higufugufyfuguugy', 'Y ft g chug hvhv', 1, 'Ftchvyvjygu', 1, 0, 0, '2018-12-22 11:30:42'),
(128, 280, 2, 55, 4, 5, 1, 'assets/uploads/product_images/280_image1545678858.JPG', 2000, 2000, 2014, 130000, 1, 0, '4', '0', 'Automatic', 1, 1000, '123456', '0000-00-00', '0000-00-00', 'clean car', 'great car', 1, 'amg', 1, 0, 0, '2018-12-24 19:14:18'),
(129, 188, 1, 2, 1, 1, 3, 'assets/uploads/resized_images/1880_image1547183462.jpeg', 1000, 1000, 1990, 10, 0, 0, '4', '0', 'Automatic', 0, 500, '12345', '0000-00-00', '0000-00-00', 'ajzjxjzjznznx ', 'fshshshshs', 1, 'title', 1, 0, 0, '2018-12-28 07:15:06'),
(130, 186, 4, 23, 4, 4, 3, 'assets/uploads/product_images/186_image1545993166.jpeg', 3000, 3000, 1991, 557, 0, 0, '8', '1', 'Manual', 0, 1000, '', '0000-00-00', '0000-00-00', 'Bxbcbxnxnxj', 'ugzgshs', 3, 'gghshs', 1, 0, 0, '2018-12-28 10:32:46'),
(131, 186, 3, 17, 2, 2, 3, 'assets/uploads/product_images/186_image1545996573.jpeg', 4000, 4000, 1993, 34554, 0, 0, '10', '1', 'Manual', 0, 500, 'gush’s', '0000-00-00', '0000-00-00', 'Gshdhdjdjs', 'bhzhxhx', 3, 'gush’s', 1, 0, 0, '2018-12-28 11:29:33'),
(132, 186, 3, 17, 4, 4, 3, 'assets/uploads/product_images/186_image1546085494.jpeg', 500, 500, 1992, 45, 0, 0, '8', '1', 'Manual', 0, 5000, '', '0000-00-00', '0000-00-00', 'Hhh', 'hhh', 3, 'hhh', 1, 0, 0, '2018-12-28 11:44:28'),
(133, 188, 8, 51, 1, 5, 13, 'assets/uploads/product_images/188_image1546087313.png', 3234, 3234, 1943, 23, 1, 1, '8', '0', 'Automatic', 1, 5000, '123', '0000-00-00', '0000-00-00', '																														fghdfghgadfgadfs																																										', 'gadsfgadfg', 1, 'sdfasd', 1, 0, 0, '2018-12-28 11:52:59'),
(134, 188, 1, 9, 1, 2, 7, 'assets/uploads/resized_images/1880_image1547183791.jpeg', 2000, 2000, 1991, 20, 0, 0, '12', '0', 'Automatic', 0, 100, '54365', '0000-00-00', '0000-00-00', 'k;kl;lk;\'l\'', 'hjljkl;k;lk', 1, 'jhlkj;kl;\'l', 1, 0, 0, '2018-12-28 14:15:25'),
(135, 188, 1, 9, 1, 2, 7, 'assets/uploads/resized_images/1880_image1547183717.jpeg', 2000, 2000, 1991, 20, 0, 0, '12', '0', 'Automatic', 0, 100, '54365', '0000-00-00', '0000-00-00', 'ssss', 'lakshmi', 1, 'sri', 1, 0, 0, '2018-12-28 14:17:28'),
(136, 185, 3, 7, 4, 4, 3, 'assets/uploads/product_images/185_image1546079270.jpg', 900, 900, 2006, 4, 0, 0, '5', '3', 'Automatic', 0, 800, 'Apj135', '0000-00-00', '0000-00-00', 'New car', 'dfhgfhgj', 1, 'fhfghgfh', 1, 0, 0, '2018-12-29 10:27:50'),
(137, 185, 4, 4, 4, 5, 2, 'assets/uploads/product_images/185_image1546079348.jpg', 1500, 1500, 2005, 3, 0, 0, '5', '3', 'Automatic', 0, 1100, 'TS1345D', '0000-00-00', '0000-00-00', 'New car design ', 'gjghjhgj', 1, 'hgkhjk', 1, 0, 0, '2018-12-29 10:29:08'),
(138, 185, 4, 4, 4, 5, 2, 'assets/uploads/product_images/185_image1546080798.jpg', 1500, 1500, 2005, 3, 0, 0, '5', '3', 'Automatic', 0, 1100, 'TS1345D', '0000-00-00', '0000-00-00', 'New car design ', 'gjghjhgj', 1, 'hgkhjk', 1, 0, 0, '2018-12-29 10:53:18'),
(139, 185, 1, 9, 2, 4, 7, 'assets/uploads/product_images/185_image1546081134.jpg', 1000, 1000, 1990, 253563, 1, 1, '12', '1', 'Manual', 1, 100, 'rtuytu', '0000-00-00', '0000-00-00', 'dfhfghgf', 'saiii', 1, 'saiii', 1, 0, 0, '2018-12-29 10:58:54'),
(140, 185, 1, 9, 2, 4, 7, 'assets/uploads/product_images/185_image1546081365.jpg', 1000, 1000, 1990, 253563, 1, 1, '12', '1', 'Manual', 1, 100, 'rtuytu', '0000-00-00', '0000-00-00', 'dfhfghgf', 'saiii', 1, 'saiii', 1, 0, 0, '2018-12-29 10:59:43'),
(141, 292, 3, 17, 4, 5, 2, 'assets/uploads/product_images/292_image1546083614.jpeg', 2580, 2580, 1992, 685, 0, 0, '6', '1', 'Manual', 0, 1000, 'haksksk', '0000-00-00', '0000-00-00', 'Bzhdjdj', 'bshdjd', 2, 'bsndjd', 1, 0, 0, '2018-12-29 11:40:14'),
(142, 236, 5, 6, 2, 2, 7, 'assets/uploads/product_images/236_image1546088950.jpg', 6500, 6000, 1991, 50, 1, 1, '10', '1', 'Manual', 1, 100, '2456', '0000-00-00', '0000-00-00', 'dhhbjj', 'kethan new', 2, 'kethan', 1, 0, 0, '2018-12-29 13:09:10'),
(143, 4, 4, 4, 1, 5, 7, 'assets/uploads/product_images/4_image1546092290.jpg', 3500, 3000, 1991, 200, 1, 1, '6', '1', 'Manual', 1, 100, '1356', '0000-00-00', '0000-00-00', 'lakshmii', 'lakshmi new', 2, 'lakshmi added ', 1, 0, 0, '2018-12-29 14:04:50'),
(144, 294, 6, 3, 4, 5, 7, 'assets/uploads/product_images/294_image1546092913.jpg', 200, 200, 1991, 500, 1, 1, '6', '1', 'Manual', 1, 100, '1244', '0000-00-00', '0000-00-00', 'lucky', 'lucky', 2, 'lucky', 1, 0, 0, '2018-12-29 14:15:13'),
(145, 294, 3, 17, 4, 7, 7, 'assets/uploads/product_images/294_image1546093604.jpg', 500, 500, 1992, 5000, 1, 1, '6', '1', 'Manual', 1, 100, '2355', '0000-00-00', '0000-00-00', 'luckynew', 'luckynew', 2, 'luckynew', 1, 0, 0, '2018-12-29 14:26:44'),
(146, 194, 3, 21, 5, 7, 5, 'assets/uploads/product_images/194_image1546096554.jpeg', 1500, 1500, 1994, 5, 1, 0, '8', '1', 'Manual', 1, 500, '', '0000-00-00', '0000-00-00', 'good', 'good', 2, 'nice', 1, 0, 0, '2018-12-29 15:03:08'),
(147, 280, 6, 40, 1, 1, 1, 'assets/uploads/product_images/280_image1546096267.jpg', 5000, 5000, 2018, 10000, 1, 1, '8', '0', 'Automatic', 0, 1000, '12345678', '0000-00-00', '0000-00-00', 'very clean car												', 'Great car', 2, 'S series', 1, 0, 0, '2018-12-29 15:11:07'),
(148, 194, 4, 22, 4, 5, 3, 'assets/uploads/product_images/194_image1546096848.jpeg', 500, 500, 1992, 5, 0, 0, '8', '1', 'Manual', 0, 1000, '', '0000-00-00', '0000-00-00', 'Nice ', 'nice ', 3, 'nice ', 1, 0, 0, '2018-12-29 15:20:48'),
(149, 295, 3, 7, 4, 5, 2, 'assets/uploads/product_images/295_image1546154021.jpg', 1000, 1000, 1991, 200, 0, 0, '4', '0', 'Automatic', 0, 100, '', '0000-00-00', '0000-00-00', 'ttt', 'ttt', 1, 'tt', 1, 0, 0, '2018-12-30 07:13:41'),
(150, 295, 2, 55, 2, 2, 17, 'assets/uploads/product_images/295_image1546156376.JPEG', 800, 800, 1914, 500, 1, 1, '6', '1', 'Manual', 1, 500, '', '0000-00-00', '0000-00-00', '							jjjj												', 'oooo', 2, 'jjj', 1, 0, 0, '2018-12-30 07:52:56'),
(151, 295, 1, 2, 2, 4, 2, 'assets/uploads/product_images/295_image1546202946.jpg', 200, 200, 1990, 200, 0, 1, '10', '1', 'Manual', 0, 100, '', '0000-00-00', '0000-00-00', 'ggggg', 'ggggg', 1, 'gggg', 1, 0, 0, '2018-12-30 20:49:06'),
(152, 186, 3, 16, 2, 2, 2, 'assets/uploads/product_images/186_image1546238070.jpeg', 585, 585, 1991, 369, 0, 0, '6', '1', 'Manual', 1, 500, 'tvdhj', '0000-00-00', '0000-00-00', 'Fhjk', 'fhjk', 2, 'hhh', 1, 0, 0, '2018-12-31 06:34:30'),
(153, 190, 1, 2, 2, 4, 2, 'assets/uploads/product_images/190_image1546241538.jpeg', 2000, 2000, 1991, 60, 1, 0, '6', '1', 'Manual', 0, 100, 'ghjjj', '0000-00-00', '0000-00-00', 'Good condition ', 'I am owner this car', 1, 'Toyota', 1, 0, 0, '2018-12-31 07:32:18'),
(154, 190, 1, 2, 4, 2, 1, 'assets/uploads/product_images/190_image1546247762.jpeg', 7000, 6000, 1992, 88, 0, 0, '6', '1', 'Manual', 0, 500, 'gfs', '0000-00-00', '0000-00-00', 'Gbnnx', 'chhj', 1, 'fhjh', 1, 0, 0, '2018-12-31 09:16:02'),
(155, 244, 3, 17, 4, 5, 4, 'assets/uploads/product_images/244_image1546252523.jpg', 5000, 5000, 1993, 2000, 1, 1, '8', '1', 'Manual', 1, 500, '86780', '0000-00-00', '0000-00-00', 'Hchococho', 'gxx8xt8txxc', 2, 'hguuh', 1, 0, 0, '2018-12-31 10:35:23'),
(156, 295, 3, 16, 2, 2, 2, 'assets/uploads/product_images/295_image1546337210.jpeg', 55, 55, 1991, 500, 0, 0, '6', '1', 'Manual', 0, 500, '', '0000-00-00', '0000-00-00', 'Bbv', 'vvv', 2, 'bbv ', 1, 0, 0, '2019-01-01 10:06:50'),
(157, 295, 3, 17, 5, 4, 3, 'assets/uploads/product_images/295_image1546337310.jpeg', 555, 555, 1992, 55, 0, 0, '8', '1', 'Manual', 0, 5000, 'iggv', '0000-00-00', '0000-00-00', ' Vhuj', 'jvv', 3, 'hhgf', 1, 0, 0, '2019-01-01 10:08:30'),
(158, 294, 6, 3, 2, 7, 7, 'assets/uploads/product_images/294_image1546499554.jpg', 5000, 2000, 1993, 500, 1, 1, '12', '1', 'Manual', 1, 1000, '405235', '0000-00-00', '0000-00-00', 'love', 'love', 1, '  love', 2, 1, 3000, '2019-01-03 07:12:34'),
(159, 190, 3, 7, 2, 4, 2, 'assets/uploads/product_images/190_image1546500958.jpeg', 5000, 5000, 1991, 58, 1, 0, '4', '1', 'Manual', 0, 500, 'vvv', '0000-00-00', '0000-00-00', 'Good condition ', 'first owner', 1, 'BMW202 model', 1, 0, 0, '2019-01-03 07:35:58'),
(161, 304, 3, 17, 4, 4, 2, 'assets/uploads/product_images/304_image1546502309.jpeg', 5500, 5000, 1992, 6845, 0, 0, '6', '0', 'Automatic', 0, 100, 'huff', '0000-00-00', '0000-00-00', 'Chikki', 'First owner', 1, 'BMW 330', 1, 0, 0, '2019-01-03 07:58:29'),
(162, 294, 7, 43, 2, 7, 8, 'assets/uploads/product_images/294_image1546506945.jpg', 500, 500, 1992, 800, 1, 1, '6', '1', 'Manual', 1, 100, '3456', '0000-00-00', '0000-00-00', 'luckyyy', 'luckyy', 2, 'luckyyy', 1, 0, 0, '2019-01-03 09:15:45'),
(163, 294, 5, 29, 5, 7, 7, 'assets/uploads/product_images/294_image1546509257.jpg', 5000, 5000, 1993, 690, 1, 1, '6', '1', 'Manual', 1, 100, '4567', '0000-00-00', '0000-00-00', 'luckyyy', 'lucky want to this ', 2, 'lucky want to sell this car', 1, 0, 0, '2019-01-03 09:54:17'),
(164, 294, 3, 18, 2, 5, 8, 'assets/uploads/product_images/294_image1546510346.jpg', 500, 500, 1992, 600, 1, 1, '6', '1', 'Manual', 1, 100, '1356', '0000-00-00', '0000-00-00', 'run ', 'ehb n', 3, 'tunbb', 1, 0, 0, '2019-01-03 10:12:26'),
(165, 294, 6, 37, 5, 7, 7, 'assets/uploads/product_images/294_image1546510802.jpg', 2500, 2200, 1993, 600, 1, 1, '8', '1', 'Manual', 1, 100, '2366', '0000-00-00', '0000-00-00', '38obvhb', '37999', 3, 'e7ii', 1, 0, 0, '2019-01-03 10:20:02'),
(166, 294, 4, 23, 2, 4, 8, 'assets/uploads/product_images/294_image1546511762.jpg', 500, 500, 1991, 800, 1, 1, '6', '1', 'Manual', 1, 100, '2467', '0000-00-00', '0000-00-00', 'ryhbb', '3679', 3, '2678', 1, 0, 0, '2019-01-03 10:36:02'),
(167, 294, 8, 51, 2, 5, 8, 'assets/uploads/product_images/294_image1546513094.jpg', 900, 900, 1994, 500, 1, 1, '8', '1', 'Manual', 1, 100, '3567', '0000-00-00', '0000-00-00', 'hearttt', 'heart', 2, 'heart', 1, 0, 0, '2019-01-03 10:58:14'),
(168, 305, 4, 24, 5, 4, 5, 'assets/uploads/product_images/305_image1546514393.jpg', 500, 500, 2012, 1500, 1, 1, '8', '0', 'Automatic', 1, 1000, '5789', '0000-00-00', '0000-00-00', 'Hlxgzgxl', 'gxhhlcxhxl', 2, 'dyiddkxgxk', 1, 0, 0, '2019-01-03 11:19:53'),
(169, 306, 2, 56, 2, 4, 2, 'assets/uploads/product_images/306_image1546515573.jpeg', 20152, 952, 1992, 93, 0, 0, '6', '1', 'Manual', 1, 500, '34SDSA3', '0000-00-00', '0000-00-00', 'Fhjkk', 'hhhko', 2, 'hhhhh', 1, 1, 1100, '2019-01-03 11:39:33'),
(170, 307, 3, 16, 4, 2, 2, 'assets/uploads/product_images/307_image1546516057.jpeg', 1580, 580, 1991, 582, 0, 0, '6', '1', 'Manual', 1, 500, '12GHYT', '0000-00-00', '0000-00-00', 'Fhjk', 'ghhj', 2, 'okayyjj', 1, 0, 0, '2019-01-03 11:47:37'),
(171, 190, 4, 4, 4, 2, 6, 'assets/uploads/product_images/190_image1546516172.jpg', 20000, 1000, 2003, 1500, 1, 1, '8', '1', 'Manual', 1, 5000, '4677', '0000-00-00', '0000-00-00', 'FYI dry dtu', 'gjdutdtufdu', 2, 'fjsrydrdrytfdu', 1, 0, 0, '2019-01-03 11:49:32'),
(172, 190, 2, 55, 5, 4, 5, 'assets/uploads/product_images/190_image1546516278.jpeg', 24000, 1000, 2019, 1500, 1, 0, '12', '0', 'Automatic', 1, 5000, '24345', '0000-00-00', '0000-00-00', 'Fgh hcchcjjv', 'ogogxgp', 1, ' hhvuciov', 1, 0, 0, '2019-01-03 11:51:18'),
(173, 190, 6, 37, 8, 5, 4, 'assets/uploads/product_images/190_image1546520154.jpeg', 45000, 2000, 2017, 1500, 1, 0, '6', '1', 'Manual', 1, 10000, '24578', '0000-00-00', '0000-00-00', 'Cjjckkckc', 'jchjcj', 3, 'cjjcjckkj', 1, 0, 0, '2019-01-03 12:55:54'),
(174, 190, 4, 28, 7, 1, 3, 'assets/uploads/product_images/190_image1546521362.jpeg', 13000, 1000, 2014, 1500, 1, 0, '8', '1', 'Manual', 1, 5000, '', '0000-00-00', '0000-00-00', 'Mggshhdjxjcc', 'gmsgmgamg', 3, 'dandnmgs', 1, 0, 0, '2019-01-03 13:16:02'),
(175, 194, 5, 35, 5, 7, 5, 'assets/uploads/product_images/194_image1546523451.jpg', 18000, 1000, 1994, 5, 1, 1, '8', '1', 'Manual', 1, 5000, '', '0000-00-00', '0000-00-00', 'nice', 'nice', 2, 'nice', 2, 1, 6000, '2019-01-03 13:50:51'),
(176, 186, 7, 44, 5, 8, 4, 'assets/uploads/product_images/186_image1546523802.jpeg', 3100, 100, 1993, 5, 0, 0, '8', '1', 'Manual', 0, 1000, '', '0000-00-00', '0000-00-00', 'Good ', 'nice ', 3, 'nice ', 2, 1, 1500, '2019-01-03 13:56:42'),
(177, 244, 6, 36, 4, 8, 3, 'assets/uploads/product_images/244_image1546580885.jpeg', 11000, 5000, 2017, 1500, 1, 0, '8', '0', 'Automatic', 1, 5000, '', '0000-00-00', '0000-00-00', 'Gjjuujjiv', 'ubuubughb', 1, 'ubuubniin', 2, 1, 6000, '2019-01-04 05:48:05'),
(178, 244, 6, 36, 4, 8, 3, 'assets/uploads/product_images/244_image1546581311.jpeg', 25000, 5000, 2017, 1500, 1, 0, '8', '0', 'Automatic', 1, 5000, '', '0000-00-00', '0000-00-00', 'Gjjuujjiv', 'ubuubughb', 1, 'ubuubniin', 1, 0, 0, '2019-01-04 05:55:11'),
(179, 310, 3, 17, 4, 1, 4, 'assets/uploads/product_images/310_image1546584376.jpeg', 5000, 5000, 2017, 1500, 1, 0, '8', '0', 'Automatic', 1, 10000, '', '0000-00-00', '0000-00-00', 'Aerhshth', 'szdfhbgfhsb', 3, 'egtrhrthrt', 1, 0, 0, '2019-01-04 06:46:16'),
(180, 244, 8, 44, 5, 4, 5, 'assets/uploads/product_images/244_image1546584381.jpg', 15000, 3000, 1999, 1500, 1, 1, '8', '1', 'Manual', 1, 5000, '97789', '0000-00-00', '0000-00-00', 'Tixgxfugixig', 'vxngzgxxfifzi', 2, 'lo hodges', 1, 0, 0, '2019-01-04 06:46:21'),
(181, 312, 6, 39, 7, 4, 6, 'assets/uploads/product_images/312_image1546585996.jpg', 40433, 40433, 1999, 1500, 1, 0, '10', '1', 'Manual', 1, 5000, '8876', '0000-00-00', '0000-00-00', 'Good condition with latest technogy', 'guvtvy6yg', 2, 'vyvyycyyf', 1, 0, 0, '2019-01-04 07:13:16'),
(182, 280, 1, 2, 5, 5, 1, 'assets/uploads/product_images/280_image1546617259.jpg', 12600, 10000, 2019, 10000, 0, 0, '6', '0', 'Automatic', 0, 500, '', '0000-00-00', '0000-00-00', 'qq', 'first owner', 2, 'S series', 1, 0, 0, '2019-01-04 15:54:19'),
(183, 295, 2, 55, 4, 4, 17, 'assets/uploads/product_images/295_image1546774950.png', 4000, 800, 1904, 999, 1, 1, '4', '1', 'Manual', 1, 500, '000', '0000-00-00', '0000-00-00', 'نتةةةة', 'مننن', 1, 'نننن', 2, 1, 600, '2019-01-06 11:42:30'),
(184, 188, 8, 51, 4, 8, 7, 'assets/uploads/product_images/188_image1546857271.png', 4300, 1200, 2014, 120, 1, 1, '8', '1', 'Manual', 1, 1000, '46561', '0000-00-00', '0000-00-00', 'Car Description goes here', 'Porche car Information', 2, 'Porche Model 2', 2, 1, 1100, '2019-01-07 10:34:31'),
(185, 295, 1, 2, 2, 4, 5, 'assets/uploads/product_images/295_image1547016807.jpg', 250, 50, 1992, 50, 0, 1, '12', '1', 'Manual', 0, 100, '0000', '0000-00-00', '0000-00-00', 'oo', 'oo', 2, 'oo', 2, 1, 100, '2019-01-09 06:53:27'),
(186, 295, 1, 2, 1, 4, 5, 'assets/uploads/product_images/295_image1547016962.jpg', 250, 50, 1992, 50, 0, 1, '12', '0', 'Automatic', 1, 100, '', '0000-00-00', '0000-00-00', 'oo', 'oooo', 2, 'oo', 1, 0, 0, '2019-01-09 06:56:02'),
(187, 194, 1, 9, 2, 4, 4, 'assets/uploads/product_images/194_image1547019355.jpg', 51900, 200, 1992, 205, 0, 1, '8', '0', 'Automatic', 0, 100, '', '0000-00-00', '0000-00-00', '٠٠', '٠٠', 2, '٠٠', 1, 0, 0, '2019-01-09 07:35:55'),
(188, 194, 1, 2, 1, 4, 5, 'assets/uploads/product_images/194_image1547019778.jpg', 5500, 200, 1992, 50, 0, 1, '8', '0', 'Automatic', 1, 100, '55', '0000-00-00', '0000-00-00', 'ooo', 'ooo', 2, 'oooo', 1, 0, 0, '2019-01-09 07:42:58'),
(189, 317, 1, 2, 1, 2, 5, 'assets/uploads/product_images/317_image1547101950.jpg', 1000, 1000, 1990, 22222, 1, 1, '6', '0', 'Automatic', 0, 100, '5745666', '0000-00-00', '0000-00-00', 'goood', 'gggg', 1, 'ggggg', 1, 0, 0, '2019-01-10 06:32:30'),
(190, 244, 3, 16, 4, 2, 2, 'assets/uploads/product_images/244_image1547103793.jpeg', 200, 200, 1991, 500, 0, 0, '6', '1', 'Manual', 0, 1000, '1577', '0000-00-00', '0000-00-00', 'Rhvvb', 'thvvnn', 2, 'Finn', 1, 0, 0, '2019-01-10 07:03:13'),
(191, 306, 2, 56, 4, 7, 2, 'assets/uploads/resized_images/3060_image1547128687.jpeg', 1200, 1200, 1992, 80, 0, 0, '6', '1', 'Manual', 0, 100, 'giggles', '0000-00-00', '0000-00-00', 'Good condition ', 'first owner12235677', 3, 'Benz new', 1, 0, 0, '2019-01-10 07:22:54'),
(192, 244, 3, 16, 2, 4, 2, 'assets/uploads/product_images/244_image1547105367.jpeg', 200, 200, 1991, 500, 0, 0, '6', '1', 'Manual', 0, 500, '367', '0000-00-00', '0000-00-00', 'Tabby', 'gjv', 2, 'ghhh', 1, 0, 0, '2019-01-10 07:29:27'),
(193, 244, 6, 37, 5, 2, 4, 'assets/uploads/product_images/244_image1547105681.jpeg', 1000, 1000, 1995, 1500, 1, 1, '8', '1', 'Manual', 1, 5000, '4675', '0000-00-00', '0000-00-00', 'Fifjgigi', 'fiogigiig', 2, 'dyfugigog', 1, 0, 0, '2019-01-10 07:34:41'),
(194, 294, 3, 17, 2, 5, 8, 'assets/uploads/product_images/294_image1547106307.jpg', 200, 200, 1991, 200, 1, 1, '4', '1', 'Manual', 1, 100, '256', '0000-00-00', '0000-00-00', 'FHA  ', 'ehbb', 3, 'fhbbb', 1, 0, 0, '2019-01-10 07:45:07'),
(195, 294, 3, 16, 2, 2, 8, 'assets/uploads/product_images/294_image1547106374.jpg', 200, 200, 1991, 200, 1, 1, '6', '1', 'Manual', 1, 100, '467', '0000-00-00', '0000-00-00', 'fjb', 'rhhj', 2, 'etg', 1, 0, 0, '2019-01-10 07:46:14'),
(196, 294, 8, 50, 2, 5, 7, 'assets/uploads/product_images/294_image1547106640.jpg', 200, 200, 1991, 200, 1, 1, '8', '1', 'Manual', 1, 100, '2578', '0000-00-00', '0000-00-00', 'rhbb', 'rhhbb', 2, 'tujbb', 1, 0, 0, '2019-01-10 07:50:40'),
(197, 244, 7, 43, 4, 8, 3, 'assets/uploads/product_images/244_image1547107079.jpeg', 7000, 1000, 2017, 1500, 1, 0, '8', '0', 'Automatic', 1, 5000, '46557', '0000-00-00', '0000-00-00', 'Cjgigigi', 'jvjcfjvjv', 1, 'hchjcjc', 1, 0, 0, '2019-01-10 07:57:59'),
(198, 244, 6, 3, 2, 5, 5, 'assets/uploads/product_images/244_image1547110388.jpg', 500, 500, 1992, 200, 1, 1, '6', '1', 'Manual', 1, 100, '5899', '0000-00-00', '0000-00-00', 'thbvb', 'eyhbhj', 3, 'rubvvv', 1, 0, 0, '2019-01-10 08:53:08'),
(199, 244, 4, 22, 4, 5, 5, 'assets/uploads/product_images/244_image1547110498.jpg', 200, 200, 1992, 500, 1, 1, '6', '0', 'Automatic', 1, 100, '478', '0000-00-00', '0000-00-00', 'eyhb', 'ehbb', 1, 'fikb', 1, 0, 0, '2019-01-10 08:54:58'),
(200, 244, 4, 26, 5, 5, 5, 'assets/uploads/product_images/244_image1547112822.jpg', 200, 200, 1992, 200, 1, 1, '6', '1', 'Manual', 1, 100, '367', '0000-00-00', '0000-00-00', 'ruhvv', 'ryjbhi', 3, 'dyjbui', 1, 0, 0, '2019-01-10 09:33:42'),
(228, 194, 5, 31, 4, 4, 7, 'assets/uploads/resized_images/1940_image1547125230.jpg', 500, 500, 1993, 55, 1, 1, '10', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'hh', 'hh', 2, 'hhh', 1, 0, 0, '2019-01-10 12:54:04'),
(229, 253, 1, 14, 5, 4, 10, 'assets/uploads/resized_images/2530_image1547128115.jpg', 25000, 25000, 2017, 12, 0, 0, '6', '4', 'Automatic', 0, 24000, 'asdasd', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'asdasds', 1, 'asdfasdfads', 1, 0, 0, '2019-01-10 13:48:36'),
(230, 244, 5, 31, 5, 2, 5, 'assets/uploads/resized_images/2440_image1547128291.jpg', 500, 500, 1996, 1500, 1, 1, '8', '1', 'Manual', 1, 5000, '3446', '0000-00-00', '0000-00-00', 'Fufhhf', 'hfyffh', 2, 'yrygyf', 1, 0, 0, '2019-01-10 13:51:31'),
(231, 244, 5, 30, 4, 5, 3, 'assets/uploads/resized_images/2440_image1547128448.jpg', 200, 200, 1991, 200, 1, 1, '6', '1', 'Manual', 1, 100, '22345', '0000-00-00', '0000-00-00', 'lucky lucky', 'lucky lucky', 3, 'lucky lucky', 1, 0, 0, '2019-01-10 13:54:08'),
(232, 244, 7, 42, 4, 8, 3, 'assets/uploads/resized_images/2440_image1547128916.jpeg', 200, 200, 2000, 1500, 1, 0, '8', '0', 'Automatic', 1, 5000, '6767', '0000-00-00', '0000-00-00', 'Jsjsjs', 'jsjsjs', 3, 'nsjkddk', 1, 0, 0, '2019-01-10 14:01:57'),
(233, 194, 1, 2, 1, 2, 6, 'assets/uploads/resized_images/1940_image1547130148.jpg', 200, 200, 1991, 2000, 1, 1, '8', '1', 'Manual', 1, 100, '75885868', '0000-00-00', '0000-00-00', 'hdnfnfn', 'jdhfnfnfn', 1, 'udnfnfn', 1, 0, 0, '2019-01-10 14:22:28'),
(234, 188, 3, 18, 4, 5, 6, 'assets/uploads/resized_images/1880_image1547130235.jpg', 200, 200, 1993, 100, 1, 1, '6', '1', 'Manual', 1, 100, '366', '0000-00-00', '0000-00-00', 'luckyy ', 'luckyy ', 3, 'luckyy', 1, 0, 0, '2019-01-10 14:23:55'),
(235, 312, 4, 23, 1, 4, 4, 'assets/uploads/resized_images/3120_image1547631881.jpeg', 500, 500, 2009, 1500, 1, 0, '8', '0', 'Automatic', 1, 5000, '4679', '0000-00-00', '0000-00-00', 'Gjkkk', 'hjkkkk', 3, 'chjkg', 1, 0, 0, '2019-01-10 14:28:21'),
(236, 253, 1, 14, 5, 4, 10, 'assets/uploads/resized_images/2530_image1547130986.jpg', 25000, 25000, 2017, 12, 0, 0, '6', '4', 'Automatic', 0, 24000, 'asdasd', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'asdasds', 1, 'asdfasdfads', 1, 0, 0, '2019-01-10 14:36:26'),
(237, 318, 1, 14, 5, 4, 10, 'assets/uploads/resized_images/3180_image1547131206.jpg', 25000, 25000, 2017, 12, 0, 0, '6', '4', 'Automatic', 0, 24000, 'asdasd', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'asdasds', 1, 'asdfasdfads', 1, 0, 0, '2019-01-10 14:40:06'),
(238, 188, 3, 18, 5, 7, 5, 'assets/uploads/resized_images/1880_image1547131419.jpg', 100, 100, 1992, 100, 1, 1, '6', '1', 'Manual', 1, 100, '1234', '0000-00-00', '0000-00-00', 'naveen', 'naveen', 2, 'naveen', 1, 0, 0, '2019-01-10 14:43:39'),
(239, 306, 5, 30, 2, 8, 3, 'assets/uploads/resized_images/3060_image1547183200.jpeg', 100, 100, 1993, 85, 1, 0, '8', '1', 'Manual', 0, 100, 'hedge', '0000-00-00', '0000-00-00', 'Bbnnnn ', 'buggy', 3, 'bvhj', 1, 0, 0, '2019-01-10 14:48:20'),
(240, 188, 3, 17, 2, 4, 5, 'assets/uploads/resized_images/1880_image1547183684.jpeg', 200, 200, 1993, 200, 1, 0, '6', '1', 'Manual', 1, 100, '257', '0000-00-00', '0000-00-00', 'ruvv', 'rhbb', 2, 'rubb', 1, 0, 0, '2019-01-10 14:48:34'),
(241, 188, 3, 18, 4, 4, 5, 'assets/uploads/resized_images/1880_image1547132040.jpg', 200, 200, 1992, 100, 1, 1, '6', '1', 'Manual', 1, 100, '378', '0000-00-00', '0000-00-00', 'rjbb', 'dhvb', 2, 'tkbb', 1, 0, 0, '2019-01-10 14:54:00'),
(242, 318, 7, 42, 4, 5, 5, 'assets/uploads/resized_images/3180_image1547132136.jpg', 200, 200, 1991, 200, 1, 1, '6', '1', 'Manual', 1, 100, '267', '0000-00-00', '0000-00-00', 'eyhb', 'eyhb', 2, 'ruhbb', 1, 0, 0, '2019-01-10 14:55:36'),
(243, 306, 5, 34, 4, 5, 4, 'assets/uploads/resized_images/3060_image1547183226.jpeg', 100, 100, 1991, 100, 1, 0, '6', '1', 'Manual', 1, 100, '3556', '0000-00-00', '0000-00-00', 'tjbb', 'fhhh', 2, 'ryhhh', 1, 0, 0, '2019-01-10 14:57:29'),
(244, 318, 3, 20, 5, 7, 5, 'assets/uploads/resized_images/3180_image1547183328.jpeg', 200, 200, 1993, 200, 1, 0, '6', '1', 'Manual', 1, 100, 'ryh', '0000-00-00', '0000-00-00', 'fhbb', 'fhbb', 2, 'rhbb', 1, 0, 0, '2019-01-10 14:58:59'),
(245, 318, 1, 12, 2, 1, 6, 'assets/uploads/resized_images/3180_image1547132409.png', 200, 200, 1990, 200, 1, 1, '6', '1', 'Manual', 1, 100, 'etty', '0000-00-00', '0000-00-00', 'r the v', 'eh b', 3, 'eh vv', 1, 0, 0, '2019-01-10 15:00:10'),
(246, 318, 4, 24, 5, 7, 3, 'assets/uploads/resized_images/3180_image1547183299.jpeg', 200, 200, 1992, 100, 1, 0, '6', '1', 'Manual', 1, 100, '1778', '0000-00-00', '0000-00-00', 'hshshdh', 'hehsbb', 2, 'yeujahs', 1, 0, 0, '2019-01-10 15:09:33'),
(247, 306, 3, 18, 4, 4, 3, 'assets/uploads/resized_images/3060_image1547183253.jpeg', 500, 500, 1992, 7, 0, 0, '8', '1', 'Manual', 0, 100, '', '0000-00-00', '0000-00-00', 'Good ', 'good ', 3, 'good ', 1, 0, 0, '2019-01-10 15:11:22');
INSERT INTO `products` (`id`, `user_id`, `category_id`, `sub_category_id`, `exterior_color_id`, `interior_color_id`, `country_id`, `image`, `price`, `original_price`, `year`, `milage`, `inspected`, `warranty`, `cylinders`, `gears`, `gears_text`, `sun_roof`, `min_bid`, `serial_num`, `start_date`, `end_date`, `description`, `other_info`, `car_type`, `deal_title`, `status`, `bid_acceptance_flag`, `accepted_bid_value`, `created_at`) VALUES
(248, 312, 4, 24, 7, 8, 4, 'assets/uploads/resized_images/3120_image1547633886.jpeg', 500, 500, 1994, 1500, 1, 0, '8', '1', 'Manual', 1, 5000, '13456', '0000-00-00', '0000-00-00', 'Kvjcjvkv', 'jfcjcjc', 3, 'udhxvkv', 1, 0, 0, '2019-01-10 15:20:02'),
(249, 306, 5, 29, 7, 5, 3, 'assets/uploads/resized_images/3060_image1547193443.jpeg', 100, 100, 1994, 554, 0, 0, '10', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'Good condition ', 'first owner', 3, 'Ford', 1, 0, 0, '2019-01-11 05:03:05'),
(250, 318, 1, 14, 5, 4, 10, 'assets/uploads/resized_images/3180_image1547187390.jpg', 25000, 25000, 2017, 12, 0, 0, '6', '4', 'Automatic', 0, 24000, 'asdasd', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'asdasds', 1, 'asdfasdfads', 1, 0, 0, '2019-01-11 06:16:30'),
(251, 306, 1, 9, 4, 5, 3, 'assets/uploads/resized_images/3060_image1547187504.jpeg', 100, 100, 1991, 94, 0, 0, '8', '1', 'Manual', 1, 100, 'gags', '0000-00-00', '0000-00-00', 'Banaba', 'gags', 3, 'vacation ', 1, 0, 0, '2019-01-11 06:17:25'),
(252, 312, 4, 24, 5, 4, 3, 'assets/uploads/resized_images/3120_image1547187589.jpeg', 500, 500, 1999, 1500, 1, 0, '8', '0', 'Automatic', 1, 5000, '7879', '0000-00-00', '0000-00-00', 'Gjkk', 'hhhj', 3, 'hfhji', 1, 0, 0, '2019-01-11 06:19:49'),
(253, 318, 8, 50, 4, 7, 7, 'assets/uploads/resized_images/3180_image1547188287.jpg', 500, 500, 1991, 200, 1, 1, '6', '1', 'Manual', 1, 100, '1345', '0000-00-00', '0000-00-00', 'nice', 'nice', 3, 'nice', 1, 0, 0, '2019-01-11 06:31:27'),
(254, 318, 1, 14, 5, 4, 10, 'assets/uploads/resized_images/3180_image1547188341.jpg', 25000, 25000, 2017, 12, 0, 0, '6', '4', 'Automatic', 0, 24000, 'asdasd', '0000-00-00', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'asdasds', 1, 'asdfasdfads', 1, 0, 0, '2019-01-11 06:32:21'),
(255, 318, 5, 34, 7, 8, 5, 'assets/uploads/resized_images/3180_image1547188423.jpg', 500, 500, 1994, 200, 1, 1, '6', '1', 'Manual', 1, 100, '3567', '0000-00-00', '0000-00-00', 'rubb', 'rhbb', 3, 'ryhbb', 1, 0, 0, '2019-01-11 06:33:44'),
(256, 318, 5, 34, 7, 8, 5, 'assets/uploads/resized_images/3180_image1547188424.jpg', 500, 500, 1994, 200, 1, 1, '6', '1', 'Manual', 1, 100, '3567', '0000-00-00', '0000-00-00', 'rubb', 'rhbb', 3, 'ryhbb', 1, 0, 0, '2019-01-11 06:33:44'),
(257, 318, 6, 38, 7, 8, 4, 'assets/uploads/resized_images/3180_image1547188544.jpg', 500, 500, 1995, 6, 1, 1, '10', '1', 'Manual', 1, 100, 'ttt', '0000-00-00', '0000-00-00', 'bxbjssj', 'hshs', 2, 'hshhs', 1, 0, 0, '2019-01-11 06:35:44'),
(258, 312, 6, 38, 8, 7, 4, 'assets/uploads/resized_images/3120_image1547188730.jpeg', 500, 500, 2007, 1500, 1, 0, '8', '1', 'Manual', 1, 5000, '5768', '0000-00-00', '0000-00-00', 'Hsjsjsj', 'hsjsjsj', 1, 'hsjsjsj', 1, 0, 0, '2019-01-11 06:38:50'),
(259, 318, 7, 44, 5, 8, 5, 'assets/uploads/resized_images/3180_image1547188746.jpg', 400, 200, 1991, 110, 1, 1, '6', '1', 'Manual', 1, 100, 'eyui', '0000-00-00', '0000-00-00', 'ice', 'nice', 3, 'nice', 1, 0, 0, '2019-01-11 06:39:06'),
(260, 318, 4, 25, 2, 5, 4, 'assets/uploads/resized_images/3180_image1547191996.png', 2000, 2000, 2001, 25, 1, 1, '8', '1', 'Manual', 1, 100, 'efh477', '0000-00-00', '0000-00-00', 'descrption', 'otherinfo', 2, 'deal title', 1, 0, 0, '2019-01-11 07:33:16'),
(261, 318, 2, 56, 5, 4, 4, 'assets/uploads/resized_images/3180_image1547197099.jpg', 200, 200, 1992, 200, 1, 1, '6', '1', 'Manual', 1, 100, '4677', '0000-00-00', '0000-00-00', 'fghh', 'fghh', 2, 'fgh', 1, 0, 0, '2019-01-11 08:58:19'),
(262, 185, 2, 56, 5, 8, 2, 'assets/uploads/resized_images/1850_image1547198966.png', 200, 200, 1991, 100, 1, 1, '8', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'srii', 'srii', 2, 'srii', 1, 0, 0, '2019-01-11 09:29:26'),
(263, 318, 4, 26, 7, 8, 7, 'assets/uploads/resized_images/3180_image1547200292.png', 500, 500, 1993, 5, 1, 1, '10', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'nice', 'nice', 2, 'nice', 1, 0, 0, '2019-01-11 09:51:32'),
(264, 317, 1, 9, 2, 2, 8, 'assets/uploads/resized_images/3170_image1547202654.jpg', 200, 200, 1991, 2558, 1, 1, '6', '1', 'Manual', 1, 100, '84858688', '0000-00-00', '0000-00-00', 'Good', 'Good', 2, 'good', 1, 0, 0, '2019-01-11 10:30:54'),
(265, 186, 4, 24, 7, 4, 6, 'assets/uploads/resized_images/1860_image1547209609.png', 500, 500, 1994, 5, 1, 1, '8', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'hello', 'hello', 2, 'hello', 1, 0, 0, '2019-01-11 12:26:49'),
(266, 319, 3, 16, 4, 7, 3, 'assets/uploads/resized_images/3190_image1547210036.jpg', 200, 200, 1993, 200, 1, 1, '6', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'nag', 'nag', 3, 'nag', 1, 0, 0, '2019-01-11 12:33:56'),
(267, 319, 1, 13, 5, 8, 4, 'assets/uploads/resized_images/3190_image1547210166.jpg', 4644, 200, 1992, 200, 1, 1, '6', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'jjjj', 'jjjj', 3, 'jjjj', 1, 0, 0, '2019-01-11 12:36:06'),
(268, 320, 8, 51, 4, 5, 10, 'assets/uploads/product_images/320_image1547212913.png', 1000, 1000, 2006, 42, 1, 1, '8', '1', 'Manual', 1, 100, 'iuiu45', '0000-00-00', '0000-00-00', 'Car Description', 'Porche car info', 2, 'New Class Model', 1, 0, 0, '2019-01-11 12:38:27'),
(269, 319, 4, 24, 5, 7, 6, 'assets/uploads/resized_images/3190_image1547210358.jpg', 700, 500, 1993, 5, 1, 1, '8', '1', 'Manual', 1, 100, '', '0000-00-00', '0000-00-00', 'nice', 'nice', 3, 'nice', 1, 0, 0, '2019-01-11 12:39:18'),
(270, 317, 1, 9, 2, 2, 7, 'assets/uploads/resized_images/3170_image1547211049.jpg', 200, 100, 1991, 55000, 1, 1, '6', '1', 'Manual', 1, 100, '5677', '0000-00-00', '0000-00-00', 'ggg', 'ggg', 2, 'gggg', 1, 0, 0, '2019-01-11 12:50:49'),
(271, 194, 1, 2, 1, 1, 2, 'assets/uploads/resized_images/1940_image1547451975.jpg', 500, 500, 1990, 50, 0, 1, '10', '0', 'Automatic', 0, 100, '', '0000-00-00', '0000-00-00', 'gg', 'gg', 1, 'gggg', 1, 0, 0, '2019-01-14 07:46:15'),
(272, 194, 1, 9, 2, 5, 4, 'assets/uploads/resized_images/1940_image1547452323.jpg', 50000, 50000, 1992, 50, 0, 1, '12', '0', 'Automatic', 0, 100, '', '0000-00-00', '0000-00-00', 'goo', 'goo', 2, 'goo', 1, 0, 0, '2019-01-14 07:52:03'),
(273, 280, 2, 55, 4, 4, 1, 'assets/uploads/product_images/280_image1547577111.jpg', 51000, 50000, 2019, 10000, 0, 0, '8', '0', 'Automatic', 0, 1000, '123456', '0000-00-00', '0000-00-00', 'great car', 'new car', 2, 'amg', 1, 0, 0, '2019-01-15 18:31:51'),
(274, 286, 1, 2, 4, 5, 7, 'assets/uploads/resized_images/2860_image1547646145.jpg', 500, 500, 1993, 5, 1, 1, '6', '1', 'Manual', 1, 500, '66£', '0000-00-00', '0000-00-00', 'nice', 'nice', 2, 'nice', 1, 0, 0, '2019-01-16 13:42:25'),
(275, 190, 1, 2, 4, 1, 2, 'assets/uploads/resized_images/1900_image1547647750.jpeg', 700, 100, 1992, 58, 1, 0, '6', '0', 'Automatic', 1, 100, 'gah', '0000-00-00', '0000-00-00', 'Good condition ', 'first owner', 2, 'Toyota ', 1, 0, 0, '2019-01-16 14:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`) VALUES
(1, 2, 'assets/uploads/product_images/2_image1542348803.png', '2018-11-16 06:13:23'),
(2, 2, 'assets/uploads/product_images/2_image15423488031.png', '2018-11-16 06:13:23'),
(3, 2, 'assets/uploads/product_images/2_image15423488032.png', '2018-11-16 06:13:23'),
(4, 2, 'assets/uploads/product_images/2_image15423488033.png', '2018-11-16 06:13:23'),
(5, 2, 'assets/uploads/product_images/2_image15423488034.png', '2018-11-16 06:13:23'),
(6, 2, 'assets/uploads/product_images/2_image15423488035.png', '2018-11-16 06:13:23'),
(7, 2, 'assets/uploads/product_images/2_image15423488036.png', '2018-11-16 06:13:23'),
(8, 2, 'assets/uploads/product_images/2_image15423488037.png', '2018-11-16 06:13:23'),
(9, 2, 'assets/uploads/product_images/2_image15423488038.png', '2018-11-16 06:13:23'),
(10, 2, 'assets/uploads/product_images/2_image15423488039.png', '2018-11-16 06:13:23'),
(12, 3, 'assets/uploads/product_images/4_image15423493421.png', '2018-11-16 06:22:22'),
(13, 3, 'assets/uploads/product_images/4_image15423493422.png', '2018-11-16 06:22:22'),
(14, 3, 'assets/uploads/product_images/4_image15423493423.png', '2018-11-16 06:22:22'),
(15, 3, 'assets/uploads/product_images/4_image15423493424.png', '2018-11-16 06:22:22'),
(16, 3, 'assets/uploads/product_images/4_image15423493425.png', '2018-11-16 06:22:22'),
(17, 3, 'assets/uploads/product_images/4_image15423493426.png', '2018-11-16 06:22:22'),
(18, 3, 'assets/uploads/product_images/4_image15423493427.png', '2018-11-16 06:22:22'),
(19, 3, 'assets/uploads/product_images/4_image15423493428.png', '2018-11-16 06:22:22'),
(20, 3, 'assets/uploads/product_images/4_image15423493429.png', '2018-11-16 06:22:22'),
(21, 3, 'assets/uploads/product_images/4_image154234934210.png', '2018-11-16 06:22:22'),
(76, 9, 'assets/uploads/product_images/1_image1542603525.png', '2018-11-19 04:58:45'),
(77, 9, 'assets/uploads/product_images/1_image15426035251.png', '2018-11-19 04:58:45'),
(78, 9, 'assets/uploads/product_images/1_image15426035252.png', '2018-11-19 04:58:45'),
(79, 9, 'assets/uploads/product_images/1_image15426035253.png', '2018-11-19 04:58:45'),
(80, 9, 'assets/uploads/product_images/1_image15426035254.png', '2018-11-19 04:58:45'),
(81, 9, 'assets/uploads/product_images/1_image15426035255.png', '2018-11-19 04:58:45'),
(82, 9, 'assets/uploads/product_images/1_image15426035256.png', '2018-11-19 04:58:45'),
(83, 9, 'assets/uploads/product_images/1_image15426035257.png', '2018-11-19 04:58:45'),
(84, 9, 'assets/uploads/product_images/1_image15426035258.png', '2018-11-19 04:58:45'),
(85, 9, 'assets/uploads/product_images/1_image15426035259.png', '2018-11-19 04:58:45'),
(86, 9, 'assets/uploads/product_images/1_image154260352510.png', '2018-11-19 04:58:45'),
(98, 11, 'assets/uploads/product_images/1_image1542603647.png', '2018-11-19 05:00:47'),
(99, 11, 'assets/uploads/product_images/1_image15426036471.png', '2018-11-19 05:00:47'),
(100, 11, 'assets/uploads/product_images/1_image15426036472.png', '2018-11-19 05:00:47'),
(101, 11, 'assets/uploads/product_images/1_image15426036473.png', '2018-11-19 05:00:47'),
(102, 11, 'assets/uploads/product_images/1_image15426036474.png', '2018-11-19 05:00:47'),
(103, 11, 'assets/uploads/product_images/1_image15426036475.png', '2018-11-19 05:00:47'),
(104, 11, 'assets/uploads/product_images/1_image15426036476.png', '2018-11-19 05:00:47'),
(105, 11, 'assets/uploads/product_images/1_image15426036477.png', '2018-11-19 05:00:47'),
(106, 11, 'assets/uploads/product_images/1_image15426036478.png', '2018-11-19 05:00:47'),
(107, 11, 'assets/uploads/product_images/1_image15426036479.png', '2018-11-19 05:00:47'),
(108, 11, 'assets/uploads/product_images/1_image154260364710.png', '2018-11-19 05:00:47'),
(109, 12, 'assets/uploads/product_images/2_image1542623174.png', '2018-11-19 10:26:14'),
(110, 12, 'assets/uploads/product_images/2_image15426231741.png', '2018-11-19 10:26:14'),
(111, 12, 'assets/uploads/product_images/2_image15426231742.png', '2018-11-19 10:26:14'),
(112, 12, 'assets/uploads/product_images/2_image15426231743.png', '2018-11-19 10:26:14'),
(113, 12, 'assets/uploads/product_images/2_image15426231744.png', '2018-11-19 10:26:14'),
(114, 12, 'assets/uploads/product_images/2_image15426231745.png', '2018-11-19 10:26:14'),
(115, 12, 'assets/uploads/product_images/2_image15426231746.png', '2018-11-19 10:26:14'),
(116, 12, 'assets/uploads/product_images/2_image15426231747.png', '2018-11-19 10:26:14'),
(117, 12, 'assets/uploads/product_images/2_image15426231748.png', '2018-11-19 10:26:14'),
(118, 12, 'assets/uploads/product_images/2_image15426231749.png', '2018-11-19 10:26:14'),
(119, 13, 'assets/uploads/product_images/1_image1542700392.png', '2018-11-20 07:53:12'),
(121, 13, 'assets/uploads/product_images/1_image15427003922.png', '2018-11-20 07:53:12'),
(122, 13, 'assets/uploads/product_images/1_image15427003923.png', '2018-11-20 07:53:12'),
(123, 13, 'assets/uploads/product_images/1_image15427003924.png', '2018-11-20 07:53:12'),
(124, 13, 'assets/uploads/product_images/1_image15427003925.png', '2018-11-20 07:53:12'),
(125, 13, 'assets/uploads/product_images/1_image15427003926.png', '2018-11-20 07:53:12'),
(126, 13, 'assets/uploads/product_images/1_image15427003927.png', '2018-11-20 07:53:12'),
(128, 13, 'assets/uploads/product_images/1_image15427003929.png', '2018-11-20 07:53:12'),
(129, 14, 'assets/uploads/product_images/2_image1542700425.png', '2018-11-20 07:53:45'),
(130, 14, 'assets/uploads/product_images/2_image15427004251.png', '2018-11-20 07:53:45'),
(131, 14, 'assets/uploads/product_images/2_image15427004252.png', '2018-11-20 07:53:45'),
(132, 14, 'assets/uploads/product_images/2_image15427004253.png', '2018-11-20 07:53:45'),
(133, 14, 'assets/uploads/product_images/2_image15427004254.png', '2018-11-20 07:53:45'),
(134, 14, 'assets/uploads/product_images/2_image15427004255.png', '2018-11-20 07:53:45'),
(135, 14, 'assets/uploads/product_images/2_image15427004256.png', '2018-11-20 07:53:45'),
(136, 14, 'assets/uploads/product_images/2_image15427004257.png', '2018-11-20 07:53:45'),
(137, 14, 'assets/uploads/product_images/2_image15427004258.png', '2018-11-20 07:53:45'),
(138, 14, 'assets/uploads/product_images/2_image15427004259.png', '2018-11-20 07:53:45'),
(139, 15, 'assets/uploads/product_images/2_image1542700470.png', '2018-11-20 07:54:30'),
(140, 15, 'assets/uploads/product_images/2_image15427004701.png', '2018-11-20 07:54:30'),
(141, 15, 'assets/uploads/product_images/2_image15427004702.png', '2018-11-20 07:54:30'),
(142, 15, 'assets/uploads/product_images/2_image15427004703.png', '2018-11-20 07:54:30'),
(143, 15, 'assets/uploads/product_images/2_image15427004704.png', '2018-11-20 07:54:30'),
(144, 15, 'assets/uploads/product_images/2_image15427004705.png', '2018-11-20 07:54:30'),
(145, 15, 'assets/uploads/product_images/2_image15427004706.png', '2018-11-20 07:54:30'),
(146, 15, 'assets/uploads/product_images/2_image15427004707.png', '2018-11-20 07:54:30'),
(147, 15, 'assets/uploads/product_images/2_image15427004708.png', '2018-11-20 07:54:30'),
(148, 15, 'assets/uploads/product_images/2_image15427004709.png', '2018-11-20 07:54:30'),
(149, 16, 'assets/uploads/product_images/2_image1542700522.png', '2018-11-20 07:55:22'),
(150, 16, 'assets/uploads/product_images/2_image15427005221.png', '2018-11-20 07:55:22'),
(151, 16, 'assets/uploads/product_images/2_image15427005222.png', '2018-11-20 07:55:22'),
(152, 16, 'assets/uploads/product_images/2_image15427005223.png', '2018-11-20 07:55:22'),
(153, 16, 'assets/uploads/product_images/2_image15427005224.png', '2018-11-20 07:55:22'),
(154, 16, 'assets/uploads/product_images/2_image15427005225.png', '2018-11-20 07:55:22'),
(155, 16, 'assets/uploads/product_images/2_image15427005226.png', '2018-11-20 07:55:22'),
(156, 16, 'assets/uploads/product_images/2_image15427005227.png', '2018-11-20 07:55:22'),
(157, 16, 'assets/uploads/product_images/2_image15427005228.png', '2018-11-20 07:55:22'),
(158, 16, 'assets/uploads/product_images/2_image15427005229.png', '2018-11-20 07:55:22'),
(180, 19, 'assets/uploads/product_images/66_image1542870871.png', '2018-11-22 07:14:31'),
(181, 19, 'assets/uploads/product_images/66_image15428708711.png', '2018-11-22 07:14:31'),
(182, 19, 'assets/uploads/product_images/66_image15428708712.png', '2018-11-22 07:14:31'),
(183, 19, 'assets/uploads/product_images/66_image15428708713.png', '2018-11-22 07:14:31'),
(184, 19, 'assets/uploads/product_images/66_image15428708714.png', '2018-11-22 07:14:31'),
(185, 19, 'assets/uploads/product_images/66_image15428708715.png', '2018-11-22 07:14:31'),
(186, 19, 'assets/uploads/product_images/66_image15428708716.png', '2018-11-22 07:14:31'),
(187, 19, 'assets/uploads/product_images/66_image15428708717.png', '2018-11-22 07:14:31'),
(188, 19, 'assets/uploads/product_images/66_image15428708718.png', '2018-11-22 07:14:31'),
(189, 19, 'assets/uploads/product_images/66_image15428708719.png', '2018-11-22 07:14:31'),
(290, 30, 'assets/uploads/product_images/117_image1543476674.png', '2018-11-29 07:31:14'),
(291, 30, 'assets/uploads/product_images/117_image15434766741.png', '2018-11-29 07:31:14'),
(292, 30, 'assets/uploads/product_images/117_image15434766742.png', '2018-11-29 07:31:14'),
(293, 30, 'assets/uploads/product_images/117_image15434766743.png', '2018-11-29 07:31:14'),
(294, 30, 'assets/uploads/product_images/117_image15434766744.png', '2018-11-29 07:31:14'),
(295, 30, 'assets/uploads/product_images/117_image15434766745.png', '2018-11-29 07:31:14'),
(296, 30, 'assets/uploads/product_images/117_image15434766746.png', '2018-11-29 07:31:14'),
(297, 30, 'assets/uploads/product_images/117_image15434766747.png', '2018-11-29 07:31:14'),
(298, 30, 'assets/uploads/product_images/117_image15434766748.png', '2018-11-29 07:31:14'),
(299, 30, 'assets/uploads/product_images/117_image15434766749.png', '2018-11-29 07:31:14'),
(300, 30, 'assets/uploads/product_images/117_image154347667410.png', '2018-11-29 07:31:14'),
(301, 31, 'assets/uploads/product_images/117_image1543477005.png', '2018-11-29 07:36:45'),
(302, 31, 'assets/uploads/product_images/117_image15434770051.png', '2018-11-29 07:36:45'),
(303, 31, 'assets/uploads/product_images/117_image15434770052.png', '2018-11-29 07:36:45'),
(304, 31, 'assets/uploads/product_images/117_image15434770053.png', '2018-11-29 07:36:45'),
(305, 31, 'assets/uploads/product_images/117_image15434770054.png', '2018-11-29 07:36:45'),
(306, 31, 'assets/uploads/product_images/117_image15434770055.png', '2018-11-29 07:36:45'),
(307, 31, 'assets/uploads/product_images/117_image15434770056.png', '2018-11-29 07:36:45'),
(308, 31, 'assets/uploads/product_images/117_image15434770057.png', '2018-11-29 07:36:45'),
(309, 31, 'assets/uploads/product_images/117_image15434770058.png', '2018-11-29 07:36:45'),
(310, 31, 'assets/uploads/product_images/117_image15434770059.png', '2018-11-29 07:36:45'),
(311, 31, 'assets/uploads/product_images/117_image154347700510.png', '2018-11-29 07:36:45'),
(452, 46, 'assets/uploads/product_images/185_image1543904208.jpeg', '2018-12-04 06:16:48'),
(453, 46, 'assets/uploads/product_images/185_image15439042081.jpeg', '2018-12-04 06:16:48'),
(454, 46, 'assets/uploads/product_images/185_image15439042082.jpeg', '2018-12-04 06:16:48'),
(455, 46, 'assets/uploads/product_images/185_image15439042083.jpeg', '2018-12-04 06:16:48'),
(456, 46, 'assets/uploads/product_images/185_image15439042084.jpeg', '2018-12-04 06:16:48'),
(462, 47, 'assets/uploads/product_images/185_image1543904546.jpeg', '2018-12-04 06:22:26'),
(463, 47, 'assets/uploads/product_images/185_image15439045461.jpeg', '2018-12-04 06:22:26'),
(464, 47, 'assets/uploads/product_images/185_image15439045462.jpeg', '2018-12-04 06:22:26'),
(465, 47, 'assets/uploads/product_images/185_image15439045463.jpeg', '2018-12-04 06:22:26'),
(466, 47, 'assets/uploads/product_images/185_image15439045464.jpeg', '2018-12-04 06:22:26'),
(467, 47, 'assets/uploads/product_images/185_image15439045465.jpeg', '2018-12-04 06:22:26'),
(468, 47, 'assets/uploads/product_images/185_image15439045466.jpeg', '2018-12-04 06:22:26'),
(469, 47, 'assets/uploads/product_images/185_image15439045467.jpeg', '2018-12-04 06:22:26'),
(470, 47, 'assets/uploads/product_images/185_image15439045468.jpeg', '2018-12-04 06:22:26'),
(471, 47, 'assets/uploads/product_images/185_image15439045469.jpeg', '2018-12-04 06:22:26'),
(472, 48, 'assets/uploads/product_images/186_image1543904753.jpeg', '2018-12-04 06:25:53'),
(473, 48, 'assets/uploads/product_images/186_image15439047531.jpeg', '2018-12-04 06:25:53'),
(475, 48, 'assets/uploads/product_images/186_image15439047533.jpeg', '2018-12-04 06:25:53'),
(476, 48, 'assets/uploads/product_images/186_image15439047534.jpeg', '2018-12-04 06:25:53'),
(478, 48, 'assets/uploads/product_images/186_image15439047536.jpeg', '2018-12-04 06:25:53'),
(482, 49, 'assets/uploads/product_images/186_image1543904857.jpeg', '2018-12-04 06:27:37'),
(483, 49, 'assets/uploads/product_images/186_image15439048571.jpeg', '2018-12-04 06:27:37'),
(484, 49, 'assets/uploads/product_images/186_image15439048572.jpeg', '2018-12-04 06:27:37'),
(485, 49, 'assets/uploads/product_images/186_image15439048573.jpeg', '2018-12-04 06:27:37'),
(486, 49, 'assets/uploads/product_images/186_image15439048574.jpeg', '2018-12-04 06:27:37'),
(487, 49, 'assets/uploads/product_images/186_image15439048575.jpeg', '2018-12-04 06:27:37'),
(492, 50, 'assets/uploads/product_images/186_image1543905004.jpeg', '2018-12-04 06:30:04'),
(493, 50, 'assets/uploads/product_images/186_image15439050041.jpeg', '2018-12-04 06:30:04'),
(494, 50, 'assets/uploads/product_images/186_image15439050042.jpeg', '2018-12-04 06:30:04'),
(495, 50, 'assets/uploads/product_images/186_image15439050043.jpeg', '2018-12-04 06:30:04'),
(496, 50, 'assets/uploads/product_images/186_image15439050044.jpeg', '2018-12-04 06:30:04'),
(497, 50, 'assets/uploads/product_images/186_image15439050045.jpeg', '2018-12-04 06:30:04'),
(498, 50, 'assets/uploads/product_images/186_image15439050046.jpeg', '2018-12-04 06:30:04'),
(499, 50, 'assets/uploads/product_images/186_image15439050047.jpeg', '2018-12-04 06:30:04'),
(500, 50, 'assets/uploads/product_images/186_image15439050048.jpeg', '2018-12-04 06:30:04'),
(502, 51, 'assets/uploads/product_images/186_image1543905464.jpeg', '2018-12-04 06:37:44'),
(503, 51, 'assets/uploads/product_images/186_image15439054641.jpeg', '2018-12-04 06:37:44'),
(504, 51, 'assets/uploads/product_images/186_image15439054642.jpeg', '2018-12-04 06:37:44'),
(505, 51, 'assets/uploads/product_images/186_image15439054643.jpeg', '2018-12-04 06:37:44'),
(506, 51, 'assets/uploads/product_images/186_image15439054644.jpeg', '2018-12-04 06:37:44'),
(507, 51, 'assets/uploads/product_images/186_image15439054645.jpeg', '2018-12-04 06:37:44'),
(508, 51, 'assets/uploads/product_images/186_image15439054646.jpeg', '2018-12-04 06:37:44'),
(509, 51, 'assets/uploads/product_images/186_image15439054647.jpeg', '2018-12-04 06:37:44'),
(510, 51, 'assets/uploads/product_images/186_image15439054648.jpeg', '2018-12-04 06:37:44'),
(512, 52, 'assets/uploads/product_images/186_image1543905628.jpeg', '2018-12-04 06:40:28'),
(513, 52, 'assets/uploads/product_images/186_image15439056281.jpeg', '2018-12-04 06:40:28'),
(514, 52, 'assets/uploads/product_images/186_image15439056282.jpeg', '2018-12-04 06:40:28'),
(515, 52, 'assets/uploads/product_images/186_image15439056283.jpeg', '2018-12-04 06:40:28'),
(516, 52, 'assets/uploads/product_images/186_image15439056284.jpeg', '2018-12-04 06:40:28'),
(517, 52, 'assets/uploads/product_images/186_image15439056285.jpeg', '2018-12-04 06:40:28'),
(518, 52, 'assets/uploads/product_images/186_image15439056286.jpeg', '2018-12-04 06:40:28'),
(519, 52, 'assets/uploads/product_images/186_image15439056287.jpeg', '2018-12-04 06:40:28'),
(520, 52, 'assets/uploads/product_images/186_image15439056288.jpeg', '2018-12-04 06:40:28'),
(521, 52, 'assets/uploads/product_images/186_image15439056289.jpeg', '2018-12-04 06:40:28'),
(522, 53, 'assets/uploads/product_images/187_image1543905781.jpg', '2018-12-04 06:43:01'),
(523, 53, 'assets/uploads/product_images/187_image15439057811.jpg', '2018-12-04 06:43:01'),
(524, 53, 'assets/uploads/product_images/187_image15439057812.jpg', '2018-12-04 06:43:01'),
(525, 53, 'assets/uploads/product_images/187_image15439057813.jpg', '2018-12-04 06:43:01'),
(526, 53, 'assets/uploads/product_images/187_image15439057814.jpg', '2018-12-04 06:43:01'),
(527, 53, 'assets/uploads/product_images/187_image15439057815.jpg', '2018-12-04 06:43:01'),
(528, 53, 'assets/uploads/product_images/187_image15439057816.jpg', '2018-12-04 06:43:01'),
(529, 53, 'assets/uploads/product_images/187_image15439057817.jpg', '2018-12-04 06:43:01'),
(530, 53, 'assets/uploads/product_images/187_image15439057818.jpg', '2018-12-04 06:43:01'),
(531, 53, 'assets/uploads/product_images/187_image15439057819.jpg', '2018-12-04 06:43:01'),
(532, 54, 'assets/uploads/product_images/186_image1543905949.jpeg', '2018-12-04 06:45:49'),
(533, 54, 'assets/uploads/product_images/186_image15439059491.jpeg', '2018-12-04 06:45:49'),
(534, 54, 'assets/uploads/product_images/186_image15439059492.jpeg', '2018-12-04 06:45:49'),
(535, 54, 'assets/uploads/product_images/186_image15439059493.jpeg', '2018-12-04 06:45:49'),
(536, 54, 'assets/uploads/product_images/186_image15439059494.jpeg', '2018-12-04 06:45:49'),
(537, 54, 'assets/uploads/product_images/186_image15439059495.jpeg', '2018-12-04 06:45:49'),
(538, 54, 'assets/uploads/product_images/186_image15439059496.jpeg', '2018-12-04 06:45:49'),
(539, 54, 'assets/uploads/product_images/186_image15439059497.jpeg', '2018-12-04 06:45:49'),
(541, 54, 'assets/uploads/product_images/186_image15439059499.jpeg', '2018-12-04 06:45:49'),
(542, 55, 'assets/uploads/product_images/186_image1543906237.jpeg', '2018-12-04 06:50:37'),
(543, 55, 'assets/uploads/product_images/186_image15439062371.jpeg', '2018-12-04 06:50:37'),
(544, 55, 'assets/uploads/product_images/186_image15439062372.jpeg', '2018-12-04 06:50:37'),
(545, 55, 'assets/uploads/product_images/186_image15439062373.jpeg', '2018-12-04 06:50:37'),
(546, 55, 'assets/uploads/product_images/186_image15439062374.jpeg', '2018-12-04 06:50:37'),
(547, 55, 'assets/uploads/product_images/186_image15439062375.jpeg', '2018-12-04 06:50:37'),
(548, 55, 'assets/uploads/product_images/186_image15439062376.jpeg', '2018-12-04 06:50:37'),
(549, 55, 'assets/uploads/product_images/186_image15439062377.jpeg', '2018-12-04 06:50:37'),
(550, 55, 'assets/uploads/product_images/186_image15439062378.jpeg', '2018-12-04 06:50:37'),
(551, 55, 'assets/uploads/product_images/186_image15439062379.jpeg', '2018-12-04 06:50:37'),
(552, 56, 'assets/uploads/product_images/186_image1543906379.jpeg', '2018-12-04 06:52:59'),
(553, 56, 'assets/uploads/product_images/186_image15439063791.jpeg', '2018-12-04 06:52:59'),
(554, 56, 'assets/uploads/product_images/186_image15439063792.jpeg', '2018-12-04 06:52:59'),
(555, 56, 'assets/uploads/product_images/186_image15439063793.jpeg', '2018-12-04 06:52:59'),
(556, 56, 'assets/uploads/product_images/186_image15439063794.jpeg', '2018-12-04 06:52:59'),
(557, 56, 'assets/uploads/product_images/186_image15439063795.jpeg', '2018-12-04 06:52:59'),
(558, 56, 'assets/uploads/product_images/186_image15439063796.jpeg', '2018-12-04 06:52:59'),
(559, 56, 'assets/uploads/product_images/186_image15439063797.jpeg', '2018-12-04 06:52:59'),
(560, 56, 'assets/uploads/product_images/186_image15439063798.jpeg', '2018-12-04 06:52:59'),
(561, 56, 'assets/uploads/product_images/186_image15439063799.jpeg', '2018-12-04 06:52:59'),
(562, 57, 'assets/uploads/product_images/185_image1543906670.jpeg', '2018-12-04 06:57:50'),
(563, 57, 'assets/uploads/product_images/185_image15439066701.jpeg', '2018-12-04 06:57:50'),
(564, 57, 'assets/uploads/product_images/185_image15439066702.jpeg', '2018-12-04 06:57:50'),
(565, 57, 'assets/uploads/product_images/185_image15439066703.jpeg', '2018-12-04 06:57:50'),
(566, 57, 'assets/uploads/product_images/185_image15439066704.jpeg', '2018-12-04 06:57:50'),
(567, 57, 'assets/uploads/product_images/185_image15439066705.jpeg', '2018-12-04 06:57:50'),
(568, 57, 'assets/uploads/product_images/185_image15439066706.jpeg', '2018-12-04 06:57:50'),
(569, 57, 'assets/uploads/product_images/185_image15439066707.jpeg', '2018-12-04 06:57:50'),
(570, 57, 'assets/uploads/product_images/185_image15439066708.jpeg', '2018-12-04 06:57:50'),
(571, 57, 'assets/uploads/product_images/185_image15439066709.jpeg', '2018-12-04 06:57:50'),
(572, 58, 'assets/uploads/product_images/185_image1543906814.jpeg', '2018-12-04 07:00:14'),
(573, 58, 'assets/uploads/product_images/185_image15439068141.jpeg', '2018-12-04 07:00:14'),
(574, 58, 'assets/uploads/product_images/185_image15439068142.jpeg', '2018-12-04 07:00:14'),
(575, 58, 'assets/uploads/product_images/185_image15439068143.jpeg', '2018-12-04 07:00:14'),
(576, 58, 'assets/uploads/product_images/185_image15439068144.jpeg', '2018-12-04 07:00:14'),
(577, 58, 'assets/uploads/product_images/185_image15439068145.jpeg', '2018-12-04 07:00:14'),
(578, 58, 'assets/uploads/product_images/185_image15439068146.jpeg', '2018-12-04 07:00:14'),
(579, 58, 'assets/uploads/product_images/185_image15439068147.jpeg', '2018-12-04 07:00:14'),
(580, 58, 'assets/uploads/product_images/185_image15439068148.jpeg', '2018-12-04 07:00:14'),
(581, 58, 'assets/uploads/product_images/185_image15439068149.jpeg', '2018-12-04 07:00:14'),
(592, 60, 'assets/uploads/product_images/187_image1543907776.jpg', '2018-12-04 07:16:16'),
(593, 60, 'assets/uploads/product_images/187_image15439077761.jpg', '2018-12-04 07:16:16'),
(594, 60, 'assets/uploads/product_images/187_image1543907776.jpeg', '2018-12-04 07:16:16'),
(595, 60, 'assets/uploads/product_images/187_image15439077762.jpg', '2018-12-04 07:16:16'),
(596, 60, 'assets/uploads/product_images/187_image15439077763.jpg', '2018-12-04 07:16:16'),
(597, 60, 'assets/uploads/product_images/187_image15439077764.jpg', '2018-12-04 07:16:16'),
(598, 60, 'assets/uploads/product_images/187_image15439077765.jpg', '2018-12-04 07:16:16'),
(599, 60, 'assets/uploads/product_images/187_image15439077766.jpg', '2018-12-04 07:16:16'),
(600, 60, 'assets/uploads/product_images/187_image15439077767.jpg', '2018-12-04 07:16:16'),
(601, 60, 'assets/uploads/product_images/187_image15439077768.jpg', '2018-12-04 07:16:16'),
(602, 61, 'assets/uploads/product_images/187_image1543908144.jpg', '2018-12-04 07:22:24'),
(603, 61, 'assets/uploads/product_images/187_image15439081441.jpg', '2018-12-04 07:22:24'),
(604, 61, 'assets/uploads/product_images/187_image15439081442.jpg', '2018-12-04 07:22:24'),
(605, 61, 'assets/uploads/product_images/187_image15439081443.jpg', '2018-12-04 07:22:24'),
(606, 61, 'assets/uploads/product_images/187_image15439081444.jpg', '2018-12-04 07:22:24'),
(607, 61, 'assets/uploads/product_images/187_image15439081445.jpg', '2018-12-04 07:22:24'),
(608, 61, 'assets/uploads/product_images/187_image15439081446.jpg', '2018-12-04 07:22:24'),
(609, 61, 'assets/uploads/product_images/187_image15439081447.jpg', '2018-12-04 07:22:24'),
(610, 61, 'assets/uploads/product_images/187_image15439081448.jpg', '2018-12-04 07:22:24'),
(611, 61, 'assets/uploads/product_images/187_image15439081449.jpg', '2018-12-04 07:22:24'),
(612, 62, 'assets/uploads/product_images/188_image1543910076.png', '2018-12-04 07:54:36'),
(613, 62, 'assets/uploads/product_images/188_image15439100761.png', '2018-12-04 07:54:36'),
(614, 62, 'assets/uploads/product_images/188_image15439100762.png', '2018-12-04 07:54:36'),
(615, 62, 'assets/uploads/product_images/188_image15439100763.png', '2018-12-04 07:54:36'),
(616, 62, 'assets/uploads/product_images/188_image15439100764.png', '2018-12-04 07:54:36'),
(617, 62, 'assets/uploads/product_images/188_image15439100765.png', '2018-12-04 07:54:36'),
(618, 62, 'assets/uploads/product_images/188_image15439100766.png', '2018-12-04 07:54:36'),
(672, 68, 'assets/uploads/product_images/188_image1544091089.png', '2018-12-06 10:11:29'),
(673, 68, 'assets/uploads/product_images/188_image15440910891.png', '2018-12-06 10:11:29'),
(674, 68, 'assets/uploads/product_images/188_image15440910892.png', '2018-12-06 10:11:29'),
(677, 68, 'assets/uploads/product_images/188_image15440910895.png', '2018-12-06 10:11:29'),
(678, 68, 'assets/uploads/product_images/188_image15440910896.png', '2018-12-06 10:11:29'),
(679, 68, 'assets/uploads/product_images/188_image15440910897.png', '2018-12-06 10:11:29'),
(680, 68, 'assets/uploads/product_images/188_image15440910898.png', '2018-12-06 10:11:29'),
(682, 69, 'assets/uploads/product_images/185_image1544441251.jpeg', '2018-12-10 11:27:31'),
(683, 69, 'assets/uploads/product_images/185_image15444412511.jpeg', '2018-12-10 11:27:31'),
(684, 69, 'assets/uploads/product_images/185_image15444412512.jpeg', '2018-12-10 11:27:31'),
(685, 69, 'assets/uploads/product_images/185_image15444412513.jpeg', '2018-12-10 11:27:31'),
(686, 69, 'assets/uploads/product_images/185_image15444412514.jpeg', '2018-12-10 11:27:31'),
(687, 69, 'assets/uploads/product_images/185_image15444412515.jpeg', '2018-12-10 11:27:31'),
(688, 69, 'assets/uploads/product_images/185_image15444412516.jpeg', '2018-12-10 11:27:31'),
(689, 69, 'assets/uploads/product_images/185_image15444412517.jpeg', '2018-12-10 11:27:31'),
(690, 69, 'assets/uploads/product_images/185_image15444412518.jpeg', '2018-12-10 11:27:31'),
(691, 69, 'assets/uploads/product_images/185_image15444412519.jpeg', '2018-12-10 11:27:31'),
(692, 70, 'assets/uploads/product_images/185_image1544441475.jpeg', '2018-12-10 11:31:15'),
(693, 70, 'assets/uploads/product_images/185_image15444414751.jpeg', '2018-12-10 11:31:15'),
(695, 72, 'assets/uploads/product_images/214_image1544530132.jpeg', '2018-12-11 12:08:52'),
(696, 72, 'assets/uploads/product_images/214_image15445301321.jpeg', '2018-12-11 12:08:52'),
(697, 72, 'assets/uploads/product_images/214_image15445301322.jpeg', '2018-12-11 12:08:52'),
(698, 72, 'assets/uploads/product_images/214_image15445301323.jpeg', '2018-12-11 12:08:52'),
(699, 73, 'assets/uploads/product_images/229_image1544530551.jpeg', '2018-12-11 12:15:51'),
(700, 73, 'assets/uploads/product_images/229_image1544530551.jpg', '2018-12-11 12:15:51'),
(701, 73, 'assets/uploads/product_images/229_image15445305511.jpg', '2018-12-11 12:15:51'),
(702, 73, 'assets/uploads/product_images/229_image15445305512.jpg', '2018-12-11 12:15:51'),
(703, 73, 'assets/uploads/product_images/229_image15445305511.jpeg', '2018-12-11 12:15:51'),
(704, 73, 'assets/uploads/product_images/229_image15445305513.jpg', '2018-12-11 12:15:51'),
(705, 73, 'assets/uploads/product_images/229_image15445305514.jpg', '2018-12-11 12:15:51'),
(706, 73, 'assets/uploads/product_images/229_image15445305515.jpg', '2018-12-11 12:15:51'),
(707, 73, 'assets/uploads/product_images/229_image15445305516.jpg', '2018-12-11 12:15:51'),
(708, 73, 'assets/uploads/product_images/229_image15445305517.jpg', '2018-12-11 12:15:51'),
(709, 74, 'assets/uploads/product_images/222_image1544594252.jpg', '2018-12-12 05:57:32'),
(713, 76, 'assets/uploads/product_images/245_image1544599641.jpg', '2018-12-12 07:27:21'),
(714, 76, 'assets/uploads/product_images/245_image15445996411.jpg', '2018-12-12 07:27:21'),
(715, 76, 'assets/uploads/product_images/245_image15445996412.jpg', '2018-12-12 07:27:21'),
(716, 77, 'assets/uploads/product_images/244_image1544601222.jpeg', '2018-12-12 07:53:42'),
(719, 78, 'assets/uploads/product_images/229_image1544611550.jpeg', '2018-12-12 10:45:50'),
(720, 79, 'assets/uploads/product_images/229_image1544611656.jpeg', '2018-12-12 10:47:36'),
(721, 79, 'assets/uploads/product_images/229_image1544611656.jpg', '2018-12-12 10:47:36'),
(722, 80, 'assets/uploads/product_images/253_image1544615400.png', '2018-12-12 11:50:00'),
(723, 80, 'assets/uploads/product_images/253_image15446154001.png', '2018-12-12 11:50:00'),
(724, 80, 'assets/uploads/product_images/253_image15446154002.png', '2018-12-12 11:50:00'),
(725, 80, 'assets/uploads/product_images/253_image15446154003.png', '2018-12-12 11:50:00'),
(726, 80, 'assets/uploads/product_images/253_image15446154004.png', '2018-12-12 11:50:00'),
(727, 80, 'assets/uploads/product_images/253_image15446154005.png', '2018-12-12 11:50:00'),
(728, 80, 'assets/uploads/product_images/253_image15446154006.png', '2018-12-12 11:50:00'),
(729, 80, 'assets/uploads/product_images/253_image15446154007.png', '2018-12-12 11:50:00'),
(730, 81, 'assets/uploads/product_images/188_image1544616016.png', '2018-12-12 12:00:16'),
(731, 81, 'assets/uploads/product_images/188_image15446160161.png', '2018-12-12 12:00:16'),
(732, 81, 'assets/uploads/product_images/188_image15446160162.png', '2018-12-12 12:00:16'),
(738, 84, 'assets/uploads/product_images/188_image1544681593.png', '2018-12-13 06:13:13'),
(739, 85, 'assets/uploads/product_images/202_image1544683603.png', '2018-12-13 06:46:43'),
(740, 86, 'assets/uploads/product_images/188_image1544684031.png', '2018-12-13 06:53:51'),
(741, 86, 'assets/uploads/product_images/188_image15446840311.png', '2018-12-13 06:53:51'),
(742, 86, 'assets/uploads/product_images/188_image15446840312.png', '2018-12-13 06:53:51'),
(743, 86, 'assets/uploads/product_images/188_image15446840313.png', '2018-12-13 06:53:51'),
(744, 86, 'assets/uploads/product_images/188_image15446840314.png', '2018-12-13 06:53:51'),
(745, 87, 'assets/uploads/product_images/188_image1544684195.png', '2018-12-13 06:56:35'),
(746, 87, 'assets/uploads/product_images/188_image15446841951.png', '2018-12-13 06:56:35'),
(747, 87, 'assets/uploads/product_images/188_image15446841952.png', '2018-12-13 06:56:35'),
(748, 87, 'assets/uploads/product_images/188_image15446841953.png', '2018-12-13 06:56:35'),
(749, 88, 'assets/uploads/product_images/188_image1544684296.png', '2018-12-13 06:58:16'),
(750, 88, 'assets/uploads/product_images/188_image15446842961.png', '2018-12-13 06:58:16'),
(751, 88, 'assets/uploads/product_images/188_image15446842962.png', '2018-12-13 06:58:16'),
(752, 88, 'assets/uploads/product_images/188_image15446842963.png', '2018-12-13 06:58:16'),
(761, 95, 'assets/uploads/product_images/203_image1544698641.png', '2018-12-13 10:57:21'),
(762, 96, 'assets/uploads/product_images/260_image1544699744.jpeg', '2018-12-13 11:15:44'),
(763, 96, 'assets/uploads/product_images/260_image15446997441.jpeg', '2018-12-13 11:15:44'),
(764, 96, 'assets/uploads/product_images/260_image15446997442.jpeg', '2018-12-13 11:15:44'),
(765, 97, 'assets/uploads/product_images/203_image1544705783.jpg', '2018-12-13 12:56:23'),
(766, 98, 'assets/uploads/product_images/203_image1544706260.png', '2018-12-13 13:04:20'),
(771, 102, 'assets/uploads/product_images/273_image1545119881.jpg', '2018-12-18 07:58:01'),
(772, 103, 'assets/uploads/product_images/273_image1545127685.jpeg', '2018-12-18 10:08:05'),
(773, 104, 'assets/uploads/product_images/277_image1545128440.jpeg', '2018-12-18 10:20:40'),
(774, 104, 'assets/uploads/product_images/277_image15451284401.jpeg', '2018-12-18 10:20:40'),
(775, 105, 'assets/uploads/product_images/281_image1545204996.jpg', '2018-12-19 07:36:36'),
(776, 106, 'assets/uploads/product_images/281_image1545205142.jpg', '2018-12-19 07:39:02'),
(777, 107, 'assets/uploads/product_images/281_image1545206696.jpg', '2018-12-19 08:04:56'),
(781, 109, 'assets/uploads/product_images/285_image1545214529.jpeg', '2018-12-19 10:15:29'),
(782, 110, 'assets/uploads/product_images/285_image1545214551.jpeg', '2018-12-19 10:15:52'),
(783, 111, 'assets/uploads/product_images/285_image1545214562.jpeg', '2018-12-19 10:16:02'),
(784, 112, 'assets/uploads/product_images/285_image1545214575.jpeg', '2018-12-19 10:16:15'),
(785, 113, 'assets/uploads/product_images/285_image1545214584.jpeg', '2018-12-19 10:16:24'),
(786, 114, 'assets/uploads/product_images/285_image1545214589.jpeg', '2018-12-19 10:16:29'),
(787, 115, 'assets/uploads/product_images/284_image1545284429.jpg', '2018-12-20 05:40:29'),
(788, 116, 'assets/uploads/product_images/244_image1545307586.jpeg', '2018-12-20 12:06:26'),
(789, 116, 'assets/uploads/product_images/244_image15453075861.jpeg', '2018-12-20 12:06:26'),
(790, 117, 'assets/uploads/product_images/185_image1545372460.jpg', '2018-12-21 06:07:40'),
(791, 117, 'assets/uploads/product_images/185_image15453724601.jpg', '2018-12-21 06:07:40'),
(792, 117, 'assets/uploads/product_images/185_image15453724602.jpg', '2018-12-21 06:07:40'),
(793, 118, 'assets/uploads/product_images/194_image1545376338.png', '2018-12-21 07:12:18'),
(794, 119, 'assets/uploads/product_images/185_image1545378562.jpeg', '2018-12-21 07:49:22'),
(795, 119, 'assets/uploads/product_images/185_image15453785621.jpeg', '2018-12-21 07:49:22'),
(796, 120, 'assets/uploads/product_images/186_image1545385338.jpeg', '2018-12-21 09:42:18'),
(797, 120, 'assets/uploads/product_images/186_image15453853381.jpeg', '2018-12-21 09:42:18'),
(798, 120, 'assets/uploads/product_images/186_image15453853382.jpeg', '2018-12-21 09:42:18'),
(799, 121, 'assets/uploads/product_images/244_image1545386205.jpeg', '2018-12-21 09:56:45'),
(800, 122, 'assets/uploads/product_images/185_image1545389638.jpeg', '2018-12-21 10:53:58'),
(801, 123, 'assets/uploads/product_images/244_image1545458951.jpg', '2018-12-22 06:09:11'),
(803, 124, 'assets/uploads/product_images/280_image1545466799.jpeg', '2018-12-22 08:19:59'),
(804, 125, 'assets/uploads/product_images/280_image1545471092.jpeg', '2018-12-22 09:31:32'),
(808, 126, 'assets/uploads/product_images/262_image15454775213.jpg', '2018-12-22 11:18:41'),
(810, 127, 'assets/uploads/product_images/262_image1545478242.jpeg', '2018-12-22 11:30:42'),
(811, 127, 'assets/uploads/product_images/262_image15454782421.jpg', '2018-12-22 11:30:42'),
(824, 128, 'assets/uploads/product_images/280_image1545678858.JPG', '2018-12-24 19:14:18'),
(825, 129, 'assets/uploads/product_images/188_image1545981306.jpg', '2018-12-28 07:15:06'),
(827, 126, 'assets/uploads/product_images/188_image1545983389.png', '2018-12-28 07:49:49'),
(832, 130, 'assets/uploads/product_images/186_image1545993166.jpeg', '2018-12-28 10:32:46'),
(836, 131, 'assets/uploads/product_images/186_image1545996573.jpeg', '2018-12-28 11:29:33'),
(839, 132, 'assets/uploads/product_images/186_image1545997468.jpeg', '2018-12-28 11:44:28'),
(840, 132, 'assets/uploads/product_images/186_image15459974681.jpeg', '2018-12-28 11:44:28'),
(841, 133, 'assets/uploads/product_images/188_image1545997979.jpeg', '2018-12-28 11:52:59'),
(842, 133, 'assets/uploads/product_images/188_image15459979791.jpeg', '2018-12-28 11:52:59'),
(843, 81, 'assets/uploads/product_images/188_image1546003991.png', '2018-12-28 13:33:11'),
(848, 133, 'assets/uploads/product_images/188_image1546070192.png', '2018-12-29 07:56:32'),
(849, 133, 'assets/uploads/product_images/188_image1546075186.png', '2018-12-29 09:19:46'),
(850, 88, 'assets/uploads/product_images/188_image1546076694.png', '2018-12-29 09:44:54'),
(851, 88, 'assets/uploads/product_images/188_image1546077601.png', '2018-12-29 10:00:01'),
(852, 136, 'assets/uploads/product_images/185_image1546079270.jpg', '2018-12-29 10:27:50'),
(853, 136, 'assets/uploads/product_images/185_image15460792701.jpg', '2018-12-29 10:27:50'),
(854, 137, 'assets/uploads/product_images/185_image1546079348.jpg', '2018-12-29 10:29:08'),
(855, 138, 'assets/uploads/product_images/185_image1546080798.jpg', '2018-12-29 10:53:18'),
(856, 138, 'assets/uploads/product_images/185_image15460807981.jpg', '2018-12-29 10:53:18'),
(857, 138, 'assets/uploads/product_images/185_image15460807982.jpg', '2018-12-29 10:53:18'),
(858, 138, 'assets/uploads/product_images/185_image15460807983.jpg', '2018-12-29 10:53:18'),
(859, 139, 'assets/uploads/product_images/185_image1546081134.jpg', '2018-12-29 10:58:54'),
(860, 139, 'assets/uploads/product_images/185_image15460811341.jpg', '2018-12-29 10:58:54'),
(861, 140, 'assets/uploads/product_images/185_image1546081183.jpg', '2018-12-29 10:59:43'),
(862, 140, 'assets/uploads/product_images/185_image1546081365.jpg', '2018-12-29 11:02:45'),
(863, 140, 'assets/uploads/product_images/185_image15460813651.jpg', '2018-12-29 11:02:45'),
(865, 141, 'assets/uploads/product_images/292_image1546083614.jpeg', '2018-12-29 11:40:14'),
(869, 132, 'assets/uploads/product_images/186_image1546085494.jpeg', '2018-12-29 12:11:34'),
(870, 117, 'assets/uploads/product_images/185_image1546086612.jpg', '2018-12-29 12:30:12'),
(871, 117, 'assets/uploads/product_images/185_image15460866121.jpg', '2018-12-29 12:30:12'),
(872, 118, 'assets/uploads/product_images/194_image1546087027.jpg', '2018-12-29 12:37:07'),
(873, 133, 'assets/uploads/product_images/188_image1546087278.png', '2018-12-29 12:41:18'),
(874, 133, 'assets/uploads/product_images/188_image1546087313.png', '2018-12-29 12:41:53'),
(875, 142, 'assets/uploads/product_images/236_image1546088950.jpg', '2018-12-29 13:09:10'),
(876, 142, 'assets/uploads/product_images/236_image15460889501.jpg', '2018-12-29 13:09:10'),
(877, 143, 'assets/uploads/product_images/4_image1546092290.jpg', '2018-12-29 14:04:50'),
(878, 143, 'assets/uploads/product_images/4_image15460922901.jpg', '2018-12-29 14:04:50'),
(879, 143, 'assets/uploads/product_images/4_image15460922902.jpg', '2018-12-29 14:04:50'),
(880, 144, 'assets/uploads/product_images/294_image1546092913.jpg', '2018-12-29 14:15:13'),
(881, 144, 'assets/uploads/product_images/294_image15460929131.jpg', '2018-12-29 14:15:13'),
(882, 145, 'assets/uploads/product_images/294_image1546093604.jpg', '2018-12-29 14:26:44'),
(883, 145, 'assets/uploads/product_images/294_image15460936041.jpg', '2018-12-29 14:26:44'),
(884, 146, 'assets/uploads/product_images/194_image1546095788.jpg', '2018-12-29 15:03:08'),
(885, 146, 'assets/uploads/product_images/194_image15460957881.jpg', '2018-12-29 15:03:08'),
(886, 146, 'assets/uploads/product_images/194_image1546095788.png', '2018-12-29 15:03:08'),
(887, 146, 'assets/uploads/product_images/194_image1546096088.png', '2018-12-29 15:08:08'),
(888, 147, 'assets/uploads/product_images/280_image1546096267.jpg', '2018-12-29 15:11:07'),
(889, 146, 'assets/uploads/product_images/194_image1546096554.jpeg', '2018-12-29 15:15:54'),
(890, 148, 'assets/uploads/product_images/194_image1546096848.jpeg', '2018-12-29 15:20:48'),
(891, 148, 'assets/uploads/product_images/194_image15460968481.jpeg', '2018-12-29 15:20:48'),
(892, 148, 'assets/uploads/product_images/194_image15460968482.jpeg', '2018-12-29 15:20:48'),
(893, 149, 'assets/uploads/product_images/295_image1546154021.jpg', '2018-12-30 07:13:41'),
(894, 150, 'assets/uploads/product_images/295_image1546156376.JPEG', '2018-12-30 07:52:56'),
(895, 151, 'assets/uploads/product_images/295_image1546202946.jpg', '2018-12-30 20:49:06'),
(896, 152, 'assets/uploads/product_images/186_image1546238070.jpeg', '2018-12-31 06:34:30'),
(897, 153, 'assets/uploads/product_images/190_image1546241538.jpeg', '2018-12-31 07:32:18'),
(898, 153, 'assets/uploads/product_images/190_image15462415381.jpeg', '2018-12-31 07:32:18'),
(899, 154, 'assets/uploads/product_images/190_image1546247762.jpeg', '2018-12-31 09:16:02'),
(900, 154, 'assets/uploads/product_images/190_image15462477621.jpeg', '2018-12-31 09:16:02'),
(901, 155, 'assets/uploads/product_images/244_image1546252523.jpg', '2018-12-31 10:35:23'),
(902, 155, 'assets/uploads/product_images/244_image15462525231.jpg', '2018-12-31 10:35:23'),
(903, 75, 'assets/uploads/product_images/244_image1546252577.jpg', '2018-12-31 10:36:17'),
(905, 77, 'assets/uploads/product_images/244_image1546253834.jpeg', '2018-12-31 10:57:14'),
(906, 156, 'assets/uploads/product_images/295_image1546337210.jpeg', '2019-01-01 10:06:50'),
(907, 157, 'assets/uploads/product_images/295_image1546337310.jpeg', '2019-01-01 10:08:30'),
(908, 158, 'assets/uploads/product_images/294_image1546499554.jpg', '2019-01-03 07:12:34'),
(909, 159, 'assets/uploads/product_images/190_image1546500958.jpeg', '2019-01-03 07:35:58'),
(910, 159, 'assets/uploads/product_images/190_image15465009581.jpeg', '2019-01-03 07:35:58'),
(913, 161, 'assets/uploads/product_images/304_image1546502309.jpeg', '2019-01-03 07:58:29'),
(914, 162, 'assets/uploads/product_images/294_image1546506945.jpg', '2019-01-03 09:15:45'),
(915, 163, 'assets/uploads/product_images/294_image1546509257.jpg', '2019-01-03 09:54:17'),
(916, 163, 'assets/uploads/product_images/294_image15465092571.jpg', '2019-01-03 09:54:17'),
(917, 164, 'assets/uploads/product_images/294_image1546510346.jpg', '2019-01-03 10:12:26'),
(918, 165, 'assets/uploads/product_images/294_image1546510802.jpg', '2019-01-03 10:20:02'),
(919, 165, 'assets/uploads/product_images/294_image15465108021.jpg', '2019-01-03 10:20:02'),
(920, 166, 'assets/uploads/product_images/294_image1546511762.jpg', '2019-01-03 10:36:02'),
(921, 167, 'assets/uploads/product_images/294_image1546513094.jpg', '2019-01-03 10:58:14'),
(922, 167, 'assets/uploads/product_images/294_image15465130941.jpg', '2019-01-03 10:58:14'),
(923, 168, 'assets/uploads/product_images/305_image1546514393.jpg', '2019-01-03 11:19:53'),
(924, 168, 'assets/uploads/product_images/305_image15465143931.jpg', '2019-01-03 11:19:53'),
(925, 169, 'assets/uploads/product_images/306_image1546515573.jpeg', '2019-01-03 11:39:33'),
(926, 170, 'assets/uploads/product_images/307_image1546516057.jpeg', '2019-01-03 11:47:37'),
(927, 171, 'assets/uploads/product_images/190_image1546516172.jpg', '2019-01-03 11:49:32'),
(928, 171, 'assets/uploads/product_images/190_image15465161721.jpg', '2019-01-03 11:49:32'),
(929, 172, 'assets/uploads/product_images/190_image1546516278.jpeg', '2019-01-03 11:51:18'),
(930, 172, 'assets/uploads/product_images/190_image15465162781.jpeg', '2019-01-03 11:51:18'),
(931, 48, 'assets/uploads/product_images/186_image1546517978.jpeg', '2019-01-03 12:19:39'),
(932, 173, 'assets/uploads/product_images/190_image1546520154.jpeg', '2019-01-03 12:55:54'),
(933, 173, 'assets/uploads/product_images/190_image15465201541.jpeg', '2019-01-03 12:55:54'),
(934, 173, 'assets/uploads/product_images/190_image15465201542.jpeg', '2019-01-03 12:55:54'),
(935, 174, 'assets/uploads/product_images/190_image1546521362.jpeg', '2019-01-03 13:16:02'),
(936, 174, 'assets/uploads/product_images/190_image15465213621.jpeg', '2019-01-03 13:16:02'),
(937, 174, 'assets/uploads/product_images/190_image15465213622.jpeg', '2019-01-03 13:16:02'),
(938, 175, 'assets/uploads/product_images/194_image1546523451.jpg', '2019-01-03 13:50:51'),
(939, 176, 'assets/uploads/product_images/186_image1546523802.jpeg', '2019-01-03 13:56:42'),
(940, 177, 'assets/uploads/product_images/244_image1546580885.jpeg', '2019-01-04 05:48:05'),
(941, 177, 'assets/uploads/product_images/244_image15465808851.jpeg', '2019-01-04 05:48:05'),
(942, 177, 'assets/uploads/product_images/244_image15465808852.jpeg', '2019-01-04 05:48:05'),
(943, 177, 'assets/uploads/product_images/244_image15465808853.jpeg', '2019-01-04 05:48:05'),
(944, 177, 'assets/uploads/product_images/244_image15465808854.jpeg', '2019-01-04 05:48:05'),
(945, 177, 'assets/uploads/product_images/244_image15465808855.jpeg', '2019-01-04 05:48:05'),
(946, 178, 'assets/uploads/product_images/244_image1546581311.jpeg', '2019-01-04 05:55:11'),
(947, 178, 'assets/uploads/product_images/244_image15465813111.jpeg', '2019-01-04 05:55:11'),
(948, 178, 'assets/uploads/product_images/244_image15465813112.jpeg', '2019-01-04 05:55:11'),
(949, 178, 'assets/uploads/product_images/244_image15465813113.jpeg', '2019-01-04 05:55:11'),
(950, 178, 'assets/uploads/product_images/244_image15465813114.jpeg', '2019-01-04 05:55:11'),
(951, 178, 'assets/uploads/product_images/244_image15465813115.jpeg', '2019-01-04 05:55:11'),
(952, 179, 'assets/uploads/product_images/310_image1546584376.jpeg', '2019-01-04 06:46:16'),
(953, 179, 'assets/uploads/product_images/310_image15465843761.jpeg', '2019-01-04 06:46:16'),
(954, 179, 'assets/uploads/product_images/310_image15465843762.jpeg', '2019-01-04 06:46:16'),
(955, 179, 'assets/uploads/product_images/310_image15465843763.jpeg', '2019-01-04 06:46:16'),
(956, 180, 'assets/uploads/product_images/244_image1546584381.jpg', '2019-01-04 06:46:21'),
(957, 180, 'assets/uploads/product_images/244_image15465843811.jpg', '2019-01-04 06:46:21'),
(958, 180, 'assets/uploads/product_images/244_image15465843812.jpg', '2019-01-04 06:46:21'),
(961, 181, 'assets/uploads/product_images/312_image1546585996.jpeg', '2019-01-04 07:13:16'),
(963, 182, 'assets/uploads/product_images/280_image1546617259.jpg', '2019-01-04 15:54:19'),
(964, 183, 'assets/uploads/product_images/295_image1546774950.png', '2019-01-06 11:42:30'),
(965, 184, 'assets/uploads/product_images/188_image1546857271.png', '2019-01-07 10:34:31'),
(966, 184, 'assets/uploads/product_images/188_image15468572711.png', '2019-01-07 10:34:31'),
(967, 184, 'assets/uploads/product_images/188_image15468572712.png', '2019-01-07 10:34:31'),
(968, 185, 'assets/uploads/product_images/295_image1547016807.jpg', '2019-01-09 06:53:27'),
(969, 186, 'assets/uploads/product_images/295_image1547016962.jpg', '2019-01-09 06:56:02'),
(970, 187, 'assets/uploads/product_images/194_image1547019355.jpg', '2019-01-09 07:35:55'),
(971, 188, 'assets/uploads/product_images/194_image1547019778.jpg', '2019-01-09 07:42:58'),
(972, 189, 'assets/uploads/product_images/317_image1547101950.jpg', '2019-01-10 06:32:30'),
(973, 190, 'assets/uploads/product_images/244_image1547103793.jpeg', '2019-01-10 07:03:13'),
(974, 190, 'assets/uploads/product_images/244_image15471037931.jpeg', '2019-01-10 07:03:13'),
(975, 191, 'assets/uploads/product_images/306_image1547104974.jpeg', '2019-01-10 07:22:54'),
(976, 192, 'assets/uploads/product_images/244_image1547105367.jpeg', '2019-01-10 07:29:27'),
(977, 192, 'assets/uploads/product_images/244_image15471053671.jpeg', '2019-01-10 07:29:27'),
(978, 193, 'assets/uploads/product_images/244_image1547105681.jpeg', '2019-01-10 07:34:41'),
(979, 193, 'assets/uploads/product_images/244_image1547105681.jpg', '2019-01-10 07:34:41'),
(980, 194, 'assets/uploads/product_images/294_image1547106307.jpg', '2019-01-10 07:45:07'),
(981, 195, 'assets/uploads/product_images/294_image1547106374.jpg', '2019-01-10 07:46:14'),
(982, 196, 'assets/uploads/product_images/294_image1547106640.jpg', '2019-01-10 07:50:40'),
(983, 196, 'assets/uploads/product_images/294_image15471066401.jpg', '2019-01-10 07:50:40'),
(984, 197, 'assets/uploads/product_images/244_image1547107079.jpeg', '2019-01-10 07:57:59'),
(985, 197, 'assets/uploads/product_images/244_image15471070791.jpeg', '2019-01-10 07:57:59'),
(986, 197, 'assets/uploads/product_images/244_image15471070792.jpeg', '2019-01-10 07:57:59'),
(987, 198, 'assets/uploads/product_images/244_image1547110388.jpg', '2019-01-10 08:53:08'),
(988, 198, 'assets/uploads/product_images/244_image15471103881.jpg', '2019-01-10 08:53:08'),
(989, 199, 'assets/uploads/product_images/244_image1547110498.jpg', '2019-01-10 08:54:58'),
(990, 200, 'assets/uploads/product_images/244_image1547112822.jpg', '2019-01-10 09:33:42'),
(991, 200, 'assets/uploads/product_images/244_image15471128221.jpg', '2019-01-10 09:33:42'),
(992, 200, 'assets/uploads/product_images/244_image15471128222.jpg', '2019-01-10 09:33:42'),
(1031, 83, 'assets/uploads/resized_images/1940_image1547122522.png', '2019-01-10 12:15:22'),
(1033, 83, 'assets/uploads/resized_images/1940_image1547122969.png', '2019-01-10 12:22:49'),
(1048, 228, 'assets/uploads/resized_images/1940_image1547124844.jpg', '2019-01-10 12:54:04'),
(1049, 228, 'assets/uploads/resized_images/1940_image1547125230.jpg', '2019-01-10 13:00:30'),
(1050, 229, 'assets/uploads/resized_images/2530_image1547128115.jpg', '2019-01-10 13:48:36'),
(1051, 229, 'assets/uploads/resized_images/2531_image1547128115.png', '2019-01-10 13:48:36'),
(1052, 230, 'assets/uploads/resized_images/2440_image1547128291.jpg', '2019-01-10 13:51:31'),
(1053, 231, 'assets/uploads/resized_images/2440_image1547128448.jpg', '2019-01-10 13:54:08'),
(1054, 231, 'assets/uploads/resized_images/2441_image1547128448.jpg', '2019-01-10 13:54:08'),
(1055, 191, 'assets/uploads/resized_images/3060_image1547128687.jpeg', '2019-01-10 13:58:07'),
(1056, 232, 'assets/uploads/resized_images/2440_image1547128916.jpeg', '2019-01-10 14:01:57'),
(1057, 233, 'assets/uploads/resized_images/1940_image1547130148.jpg', '2019-01-10 14:22:28'),
(1058, 234, 'assets/uploads/resized_images/1880_image1547130235.jpg', '2019-01-10 14:23:55'),
(1059, 234, 'assets/uploads/resized_images/1881_image1547130235.jpg', '2019-01-10 14:23:55'),
(1060, 235, 'assets/uploads/resized_images/3120_image1547130501.jpeg', '2019-01-10 14:28:21'),
(1061, 236, 'assets/uploads/resized_images/2530_image1547130986.jpg', '2019-01-10 14:36:26'),
(1062, 236, 'assets/uploads/resized_images/2531_image1547130986.png', '2019-01-10 14:36:26'),
(1063, 237, 'assets/uploads/resized_images/3180_image1547131206.jpg', '2019-01-10 14:40:06'),
(1064, 237, 'assets/uploads/resized_images/3181_image1547131206.png', '2019-01-10 14:40:06'),
(1065, 238, 'assets/uploads/resized_images/1880_image1547131419.jpg', '2019-01-10 14:43:39'),
(1066, 239, 'assets/uploads/resized_images/3060_image1547131699.jpeg', '2019-01-10 14:48:20'),
(1067, 240, 'assets/uploads/resized_images/1880_image1547131714.jpg', '2019-01-10 14:48:34'),
(1068, 241, 'assets/uploads/resized_images/1880_image1547132040.jpg', '2019-01-10 14:54:00'),
(1069, 242, 'assets/uploads/resized_images/3180_image1547132136.jpg', '2019-01-10 14:55:36'),
(1070, 243, 'assets/uploads/resized_images/3060_image1547132249.jpg', '2019-01-10 14:57:29'),
(1071, 244, 'assets/uploads/resized_images/3180_image1547132339.jpg', '2019-01-10 14:58:59'),
(1072, 245, 'assets/uploads/resized_images/3180_image1547132409.png', '2019-01-10 15:00:10'),
(1073, 246, 'assets/uploads/resized_images/3180_image1547132972.jpg', '2019-01-10 15:09:33'),
(1074, 246, 'assets/uploads/resized_images/3181_image1547132972.jpg', '2019-01-10 15:09:33'),
(1075, 247, 'assets/uploads/resized_images/3060_image1547133081.jpeg', '2019-01-10 15:11:22'),
(1076, 248, 'assets/uploads/resized_images/3120_image1547133602.jpeg', '2019-01-10 15:20:02'),
(1077, 249, 'assets/uploads/resized_images/3060_image1547182985.jpeg', '2019-01-11 05:03:05'),
(1078, 249, 'assets/uploads/resized_images/3061_image1547182985.jpeg', '2019-01-11 05:03:05'),
(1079, 249, 'assets/uploads/resized_images/3060_image1547183067.jpeg', '2019-01-11 05:04:27'),
(1080, 239, 'assets/uploads/resized_images/3060_image1547183200.jpeg', '2019-01-11 05:06:40'),
(1081, 243, 'assets/uploads/resized_images/3060_image1547183226.jpeg', '2019-01-11 05:07:06'),
(1082, 247, 'assets/uploads/resized_images/3060_image1547183253.jpeg', '2019-01-11 05:07:33'),
(1083, 246, 'assets/uploads/resized_images/3180_image1547183299.jpeg', '2019-01-11 05:08:19'),
(1084, 244, 'assets/uploads/resized_images/3180_image1547183328.jpeg', '2019-01-11 05:08:48'),
(1085, 129, 'assets/uploads/resized_images/1880_image1547183462.jpeg', '2019-01-11 05:11:03'),
(1086, 240, 'assets/uploads/resized_images/1880_image1547183684.jpeg', '2019-01-11 05:14:44');
INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`) VALUES
(1087, 135, 'assets/uploads/resized_images/1880_image1547183717.jpeg', '2019-01-11 05:15:17'),
(1088, 135, 'assets/uploads/resized_images/1881_image1547183717.jpeg', '2019-01-11 05:15:17'),
(1089, 134, 'assets/uploads/resized_images/1880_image1547183791.jpeg', '2019-01-11 05:16:31'),
(1090, 134, 'assets/uploads/resized_images/1881_image1547183791.jpeg', '2019-01-11 05:16:31'),
(1091, 250, 'assets/uploads/resized_images/3180_image1547187390.jpg', '2019-01-11 06:16:30'),
(1092, 250, 'assets/uploads/resized_images/3181_image1547187390.jpg', '2019-01-11 06:16:30'),
(1093, 251, 'assets/uploads/resized_images/3060_image1547187445.jpeg', '2019-01-11 06:17:25'),
(1094, 251, 'assets/uploads/resized_images/3060_image1547187504.jpeg', '2019-01-11 06:18:24'),
(1095, 252, 'assets/uploads/resized_images/3120_image1547187589.jpeg', '2019-01-11 06:19:49'),
(1096, 253, 'assets/uploads/resized_images/3180_image1547188287.jpg', '2019-01-11 06:31:27'),
(1097, 253, 'assets/uploads/resized_images/3181_image1547188287.jpg', '2019-01-11 06:31:27'),
(1098, 254, 'assets/uploads/resized_images/3180_image1547188341.jpg', '2019-01-11 06:32:21'),
(1099, 254, 'assets/uploads/resized_images/3181_image1547188341.jpg', '2019-01-11 06:32:21'),
(1100, 255, 'assets/uploads/resized_images/3180_image1547188423.jpg', '2019-01-11 06:33:44'),
(1101, 255, 'assets/uploads/resized_images/3181_image1547188423.jpg', '2019-01-11 06:33:44'),
(1102, 256, 'assets/uploads/resized_images/3180_image1547188424.jpg', '2019-01-11 06:33:44'),
(1103, 256, 'assets/uploads/resized_images/3181_image1547188424.jpg', '2019-01-11 06:33:44'),
(1104, 257, 'assets/uploads/resized_images/3180_image1547188544.jpg', '2019-01-11 06:35:44'),
(1105, 257, 'assets/uploads/resized_images/3181_image1547188544.jpg', '2019-01-11 06:35:44'),
(1106, 258, 'assets/uploads/resized_images/3120_image1547188730.jpeg', '2019-01-11 06:38:50'),
(1107, 258, 'assets/uploads/resized_images/3121_image1547188730.jpeg', '2019-01-11 06:38:50'),
(1108, 259, 'assets/uploads/resized_images/3180_image1547188746.jpg', '2019-01-11 06:39:06'),
(1109, 259, 'assets/uploads/resized_images/3181_image1547188746.jpg', '2019-01-11 06:39:06'),
(1110, 260, 'assets/uploads/resized_images/3180_image1547191996.png', '2019-01-11 07:33:16'),
(1111, 260, 'assets/uploads/resized_images/3181_image1547191996.jpg', '2019-01-11 07:33:16'),
(1113, 249, 'assets/uploads/resized_images/3060_image1547193443.jpeg', '2019-01-11 07:57:23'),
(1114, 261, 'assets/uploads/resized_images/3180_image1547197099.jpg', '2019-01-11 08:58:19'),
(1115, 261, 'assets/uploads/resized_images/3181_image1547197099.jpg', '2019-01-11 08:58:19'),
(1116, 262, 'assets/uploads/resized_images/1850_image1547198966.png', '2019-01-11 09:29:26'),
(1117, 262, 'assets/uploads/resized_images/1851_image1547198966.jpg', '2019-01-11 09:29:26'),
(1118, 263, 'assets/uploads/resized_images/3180_image1547200292.png', '2019-01-11 09:51:32'),
(1119, 264, 'assets/uploads/resized_images/3170_image1547202654.jpg', '2019-01-11 10:30:54'),
(1120, 265, 'assets/uploads/resized_images/1860_image1547209609.png', '2019-01-11 12:26:49'),
(1121, 265, 'assets/uploads/resized_images/1861_image1547209609.png', '2019-01-11 12:26:49'),
(1122, 266, 'assets/uploads/resized_images/3190_image1547210036.jpg', '2019-01-11 12:33:56'),
(1123, 266, 'assets/uploads/resized_images/3191_image1547210036.jpg', '2019-01-11 12:33:56'),
(1124, 267, 'assets/uploads/resized_images/3190_image1547210166.jpg', '2019-01-11 12:36:06'),
(1125, 267, 'assets/uploads/resized_images/3191_image1547210166.jpg', '2019-01-11 12:36:06'),
(1126, 268, 'assets/uploads/product_images/320_image1547210307.png', '2019-01-11 12:38:27'),
(1127, 268, 'assets/uploads/product_images/320_image15472103071.png', '2019-01-11 12:38:27'),
(1128, 268, 'assets/uploads/product_images/320_image15472103072.png', '2019-01-11 12:38:27'),
(1129, 268, 'assets/uploads/product_images/320_image15472103073.png', '2019-01-11 12:38:27'),
(1130, 268, 'assets/uploads/product_images/320_image15472103074.png', '2019-01-11 12:38:27'),
(1132, 269, 'assets/uploads/resized_images/3190_image1547210358.jpg', '2019-01-11 12:39:18'),
(1133, 268, 'assets/uploads/product_images/320_image1547210499.png', '2019-01-11 12:41:39'),
(1134, 270, 'assets/uploads/resized_images/3170_image1547211049.jpg', '2019-01-11 12:50:49'),
(1135, 268, 'assets/uploads/product_images/320_image1547212913.png', '2019-01-11 13:21:53'),
(1136, 271, 'assets/uploads/resized_images/1940_image1547451975.jpg', '2019-01-14 07:46:15'),
(1137, 272, 'assets/uploads/resized_images/1940_image1547452323.jpg', '2019-01-14 07:52:03'),
(1138, 273, 'assets/uploads/product_images/280_image1547577111.jpg', '2019-01-15 18:31:51'),
(1139, 235, 'assets/uploads/resized_images/3120_image1547631881.jpeg', '2019-01-16 09:44:42'),
(1140, 248, 'assets/uploads/resized_images/3120_image1547633886.jpeg', '2019-01-16 10:18:06'),
(1141, 274, 'assets/uploads/resized_images/2860_image1547646145.jpg', '2019-01-16 13:42:25'),
(1142, 275, 'assets/uploads/resized_images/1900_image1547647750.jpeg', '2019-01-16 14:09:11'),
(1143, 275, 'assets/uploads/resized_images/1901_image1547647750.jpeg', '2019-01-16 14:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `latitude` int(10) NOT NULL,
  `longitude` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `link`, `latitude`, `longitude`, `status`, `created_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/zidoapp', 0, 0, 1, '2018-11-23 09:30:35'),
(2, 'twitter', 'https://twitter.com/zidoapp', 0, 0, 1, '2018-11-23 09:32:57'),
(3, 'google plus', 'https://plus.google.com', 0, 0, 1, '2018-11-23 09:33:27'),
(4, 'youtube', 'https://www.youtube.com/', 0, 0, 0, '2018-11-23 09:33:48'),
(5, 'instagram', 'https://www.instagram.com/zidoapp', 0, 0, 1, '2018-11-23 09:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `total_items` int(10) NOT NULL,
  `items_left` int(10) NOT NULL,
  `bids_limit` int(10) NOT NULL,
  `bids_left` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `package_id`, `start_date`, `end_date`, `total_items`, `items_left`, `bids_limit`, `bids_left`, `status`, `created_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 0, 0, 1, '2018-11-16 09:08:11'),
(4, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 8, 0, 0, 1, '2018-11-19 10:17:27'),
(6, 66, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 0, 0, 1, '2018-11-22 07:14:20'),
(7, 79, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 5, 0, 0, 1, '2018-11-22 11:26:06'),
(10, 85, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 0, '2018-11-22 12:52:46'),
(11, 87, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 5, 0, 0, 1, '2018-11-22 13:13:02'),
(13, 90, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 0, '2018-11-23 04:43:54'),
(21, 116, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-11-29 05:12:19'),
(25, 117, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10, 0, 0, 1, '2018-11-29 07:22:14'),
(71, 88, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-03 11:41:25'),
(78, 177, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 0, 0, 0, 0, '2018-12-03 13:31:52'),
(85, 185, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 8, 500, 489, 1, '2018-12-04 06:11:12'),
(87, 187, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 8, 0, 0, 1, '2018-12-04 06:28:49'),
(88, 188, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 5, 500, 479, 1, '2018-12-04 06:32:33'),
(90, 190, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 7, 500, 486, 1, '2018-12-04 07:06:22'),
(91, 191, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-04 07:16:15'),
(92, 193, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-04 07:33:50'),
(93, 202, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10, 0, 0, 1, '2018-12-04 09:51:11'),
(95, 205, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-04 12:52:50'),
(98, 210, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 0, 0, 0, '2018-12-05 10:04:28'),
(100, 213, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-05 11:58:02'),
(101, 214, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 0, 0, 1, '2018-12-06 05:38:56'),
(105, 221, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-06 07:31:27'),
(106, 222, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 0, 0, 1, '2018-12-06 09:11:27'),
(108, 224, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-06 10:21:07'),
(109, 225, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-06 10:26:46'),
(110, 226, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-06 10:41:50'),
(111, 228, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-06 11:57:16'),
(112, 227, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-06 12:20:07'),
(113, 229, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 0, 0, 1, '2018-12-06 12:30:07'),
(114, 232, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-11 06:24:12'),
(115, 233, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 0, 0, '2018-12-11 09:05:13'),
(116, 234, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 1, '2018-12-11 10:23:54'),
(119, 236, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10, 5000, 0, 1, '2018-12-11 10:41:00'),
(121, 237, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 1000, 0, 1, '2018-12-11 10:52:40'),
(123, 241, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 1000, 999, 1, '2018-12-11 14:49:59'),
(125, 245, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4998, 1, '2018-12-12 07:05:14'),
(127, 246, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 20, 20, 1, '2018-12-12 07:58:51'),
(128, 247, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-12 08:00:24'),
(129, 253, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 2, 5000, 5000, 1, '2018-12-12 11:16:32'),
(130, 251, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 0, 0, 0, '2018-12-12 12:41:17'),
(131, 256, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-12 13:13:42'),
(132, 203, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 8, 0, 0, 1, '2018-12-13 06:48:47'),
(133, 259, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 1000, 998, 1, '2018-12-13 06:53:32'),
(134, 260, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4999, 1, '2018-12-13 11:14:05'),
(135, 261, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-13 11:31:41'),
(136, 265, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-17 11:13:37'),
(137, 267, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 1000, 1000, 1, '2018-12-17 11:16:45'),
(138, 273, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10, 1000, 998, 1, '2018-12-18 07:49:15'),
(139, 262, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 5000, 4997, 1, '2018-12-18 09:56:38'),
(140, 264, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-18 09:58:41'),
(141, 277, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 1000, 999, 1, '2018-12-18 10:16:50'),
(142, 278, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 20, 19, 1, '2018-12-18 10:28:58'),
(143, 281, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 5000, 4990, 1, '2018-12-19 07:16:46'),
(144, 285, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 6, 1000, 997, 1, '2018-12-19 10:08:54'),
(145, 284, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 5000, 1, '2018-12-19 12:07:11'),
(146, 286, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4998, 1, '2018-12-19 17:00:28'),
(147, 280, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 6, 5000, 4995, 1, '2018-12-22 08:14:44'),
(148, 291, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4999, 1, '2018-12-26 12:39:22'),
(150, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4736, 1, '2018-12-26 13:08:35'),
(169, 292, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4921, 1, '2018-12-28 08:57:22'),
(170, 186, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 5000, 4950, 1, '2018-12-29 06:43:03'),
(172, 283, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-29 12:13:58'),
(176, 293, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4993, 1, '2018-12-29 14:13:22'),
(178, 290, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10000, 10000, 10000, 9997, 1, '2018-12-29 15:37:45'),
(179, 295, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 3, 5000, 4958, 1, '2018-12-30 06:52:04'),
(182, 298, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4981, 1, '2018-12-31 07:15:07'),
(184, 299, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2018-12-31 10:07:16'),
(185, 300, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2019-01-03 07:41:40'),
(186, 301, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4989, 1, '2019-01-03 07:42:25'),
(187, 302, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4998, 1, '2019-01-03 07:46:58'),
(188, 304, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10, 5000, 5000, 1, '2019-01-03 07:50:17'),
(189, 305, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4998, 1, '2019-01-03 10:12:30'),
(190, 306, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 4, 5000, 4989, 1, '2019-01-03 11:37:04'),
(191, 307, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 4999, 1, '2019-01-03 11:38:42'),
(194, 308, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2019-01-03 14:02:20'),
(195, 244, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 0, 5000, 4987, 0, '2019-01-04 05:52:22'),
(196, 310, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 1000, 994, 1, '2019-01-04 06:29:47'),
(197, 313, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 1000, 1000, 1, '2019-01-04 06:56:00'),
(198, 312, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 7, 5000, 4994, 1, '2019-01-04 07:06:25'),
(199, 314, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4994, 1, '2019-01-04 11:02:05'),
(200, 282, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 4999, 1, '2019-01-07 11:57:53'),
(201, 316, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2019-01-08 05:49:39'),
(202, 317, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 5000, 5000, 1, '2019-01-10 06:28:47'),
(203, 294, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 20, 20, 1, '2019-01-10 14:28:47'),
(204, 318, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 5000, 5000, 1, '2019-01-10 14:35:06'),
(205, 319, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 9, 5000, 5000, 1, '2019-01-11 12:30:08'),
(206, 320, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 0, 0, 1, '2019-01-11 12:36:11'),
(207, 194, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 11, 5000, 5000, 1, '2019-01-14 07:50:45'),
(208, 321, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 12, 5000, 5000, 1, '2019-01-15 18:43:22'),
(209, 322, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10000, 10000, 0, 0, 1, '2019-01-15 18:47:32'),
(210, 323, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10000, 10000, 0, 0, 1, '2019-01-16 13:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name_en`, `name_ar`, `image`, `status`, `created_at`) VALUES
(1, 6, 'Q1', 'Q1', 'assets/uploads/user_profiles/audi_(2).png', 1, '2018-11-15 07:42:15'),
(2, 1, 'Innova 1', 'Innova 1', 'assets/uploads/user_profiles/22.png', 1, '2018-11-15 11:30:01'),
(3, 6, 'Q2', 'Q2', 'assets/uploads/user_profiles/audi_(2)1.png', 1, '2018-11-15 11:30:50'),
(4, 4, 'Honda City 1', 'Honda City 1', 'assets/uploads/user_profiles/23.png', 1, '2018-11-15 11:35:54'),
(5, 7, 'polo1', 'polo1', 'assets/uploads/user_profiles/audi_(2)2.png', 1, '2018-11-15 11:36:59'),
(6, 5, 'Ecosport 1', 'Ecosport 1', 'assets/uploads/user_profiles/24.png', 1, '2018-11-15 11:37:14'),
(7, 3, 'B1', 'B1', 'assets/uploads/user_profiles/audi_(2)3.png', 1, '2018-11-15 11:37:46'),
(9, 1, 'innova 2', 'innova 2', 'assets/uploads/user_profiles/audi_(2)5.png', 1, '2018-11-16 07:36:58'),
(10, 1, 'Innova  3', 'Innova  3', 'assets/uploads/user_profiles/audi_(2)6.png', 1, '2018-11-16 07:38:01'),
(11, 1, 'Innova  4', 'Innova  4', 'assets/uploads/user_profiles/audi_(2)7.png', 1, '2018-11-16 07:38:16'),
(12, 1, 'Innova  5', 'Innova  5', 'assets/uploads/user_profiles/audi_(2)8.png', 1, '2018-11-16 07:38:45'),
(13, 1, 'Innova  6', 'Innova  6', 'assets/uploads/user_profiles/audi_(2)9.png', 1, '2018-11-16 07:39:00'),
(14, 1, 'Innova  7', 'Innova  7', 'assets/uploads/user_profiles/audi_(2)10.png', 1, '2018-11-16 07:39:30'),
(15, 1, 'Innova  8', 'Innova  8', 'assets/uploads/user_profiles/audi_(2)11.png', 1, '2018-11-16 07:39:46'),
(16, 3, 'B3', 'B3', 'assets/uploads/user_profiles/audi_(2)12.png', 1, '2018-11-16 07:40:35'),
(17, 3, 'B4', 'B4', 'assets/uploads/user_profiles/25.png', 1, '2018-11-16 07:40:56'),
(18, 3, 'B5', 'B5', 'assets/uploads/user_profiles/26.png', 1, '2018-11-16 07:41:19'),
(19, 3, 'B6', 'B6', 'assets/uploads/user_profiles/27.png', 1, '2018-11-16 07:41:39'),
(20, 3, 'B7', 'B7', 'assets/uploads/user_profiles/28.png', 1, '2018-11-16 07:41:58'),
(21, 3, 'B8', 'B8', 'assets/uploads/user_profiles/audi_(2)13.png', 1, '2018-11-16 07:42:17'),
(22, 4, 'Honda City 2', 'Honda City 2', 'assets/uploads/user_profiles/audi_(2)14.png', 1, '2018-11-16 07:43:09'),
(23, 4, 'Honda City 3', 'Honda City 3', 'assets/uploads/user_profiles/audi_(2)15.png', 1, '2018-11-16 07:43:47'),
(24, 4, 'Honda City 4', 'Honda City 4', 'assets/uploads/user_profiles/29.png', 1, '2018-11-16 07:44:09'),
(25, 4, 'Honda City 5', 'Honda City 5', 'assets/uploads/user_profiles/210.png', 1, '2018-11-16 07:44:34'),
(26, 4, 'Honda City 6', 'Honda City 6', 'assets/uploads/user_profiles/211.png', 1, '2018-11-16 07:44:53'),
(27, 4, 'Honda City 7', 'Honda City 7', 'assets/uploads/user_profiles/audi_(2)16.png', 1, '2018-11-16 07:45:12'),
(28, 4, 'Honda City 8', 'Honda City 8', 'assets/uploads/user_profiles/audi_(2)17.png', 1, '2018-11-16 07:45:28'),
(29, 5, 'Ecosport 2', 'Ecosport 2', 'assets/uploads/user_profiles/212.png', 1, '2018-11-16 07:46:18'),
(30, 5, 'Ecosport 3', 'Ecosport 3', 'assets/uploads/user_profiles/audi_(2)18.png', 1, '2018-11-16 07:46:33'),
(31, 5, 'Ecosport 4', 'Ecosport 4', 'assets/uploads/user_profiles/audi_(2)19.png', 1, '2018-11-16 07:47:00'),
(32, 5, 'Ecosport 5', 'Ecosport 5', 'assets/uploads/user_profiles/213.png', 1, '2018-11-16 07:47:22'),
(33, 5, 'Ecosport 6', 'Ecosport 6', 'assets/uploads/user_profiles/audi_(2)20.png', 1, '2018-11-16 07:47:43'),
(34, 5, 'Ecosport 7', 'Ecosport 7', 'assets/uploads/user_profiles/214.png', 1, '2018-11-16 07:47:59'),
(35, 5, 'Ecosport 8', 'Ecosport 8', 'assets/uploads/user_profiles/audi_(2)21.png', 1, '2018-11-16 07:48:27'),
(36, 6, 'Q3', 'Q3', 'assets/uploads/user_profiles/audi_(2)22.png', 1, '2018-11-16 07:49:24'),
(37, 6, 'Q4', 'Q4', 'assets/uploads/user_profiles/audi_(2)23.png', 1, '2018-11-16 07:49:56'),
(38, 6, 'Q5', 'Q5', 'assets/uploads/user_profiles/audi_(2)24.png', 1, '2018-11-16 07:50:08'),
(39, 6, 'Q6', 'Q6', 'assets/uploads/user_profiles/audi_(2)25.png', 1, '2018-11-16 07:50:24'),
(40, 6, 'Q7', 'Q7', 'assets/uploads/user_profiles/audi_(2)26.png', 1, '2018-11-16 07:50:43'),
(41, 6, 'Q8', 'Q8', 'assets/uploads/user_profiles/audi_(2)27.png', 1, '2018-11-16 07:50:56'),
(42, 7, 'polo2', 'بلو', 'assets/uploads/user_profiles/215.png', 1, '2018-11-16 07:51:36'),
(43, 7, 'polo3', 'polo3', 'assets/uploads/user_profiles/216.png', 1, '2018-11-16 07:51:53'),
(44, 7, 'polo4', 'polo4', 'assets/uploads/user_profiles/audi_(2)28.png', 1, '2018-11-16 07:52:07'),
(45, 7, 'polo5', 'polo5', 'assets/uploads/user_profiles/217.png', 1, '2018-11-16 07:52:22'),
(46, 7, 'polo6', 'polo6', 'assets/uploads/user_profiles/audi_(2)29.png', 1, '2018-11-16 07:52:39'),
(47, 7, 'polo7', 'polo7', 'assets/uploads/user_profiles/audi_(2)30.png', 1, '2018-11-16 07:53:01'),
(48, 7, 'polo8', 'polo8', 'assets/uploads/user_profiles/audi_(2)31.png', 1, '2018-11-16 07:53:19'),
(50, 8, 'Porche 1', 'Porche 1', 'assets/uploads/sub_categories/2.png', 1, '2018-11-29 07:26:56'),
(51, 8, 'Porche 2', 'Porche 2', 'assets/uploads/sub_categories/audi_(2).png', 1, '2018-11-29 07:35:24'),
(53, 3, 'BWM1', 'BWM1', 'assets/uploads/sub_categories/Mask_Group_87@3x.png', 1, '2018-12-04 09:49:56'),
(54, 3, 'ZIDO', 'ZIDO', 'assets/uploads/sub_categories/1_image1542700392_-_Copy_(5).png', 1, '2018-12-04 13:30:31'),
(55, 2, 'M1', 'M1 ARABIC', 'assets/uploads/sub_categories/6.png', 1, '2018-12-20 06:20:37'),
(56, 2, 'M2', 'M2 Arabic', 'assets/uploads/sub_categories/audi_(2)1.png', 1, '2018-12-20 06:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Terms of Use</strong></p>\r\n\r\n<p><strong>Updated: </strong>November 30, 2018 (Effective as of November 30, 2018)</p>\r\n\r\n<p><strong>Introduction</strong></p>\r\n\r\n<p>Welcome to Zido (the &quot;Zido platform&quot;, &quot;Zido marketplace&quot;, &quot;Zido App&quot;, &quot;Zido.com&quot;, &quot;Zido.com.sa&quot;, &quot;Zido.app&quot;), owned and operated by Zido Inc. By accessing Zido you agree to the following Terms of Use. <a name=\"_Hlk531346695\">These Terms of Use </a>are effective as of November 30, 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>General</strong></p>\r\n\r\n<p>These Terms and the other policies published on Zido platform constitute the entire agreement between Zido platform and you. This agreement is governed by the laws of Saudi Arabia as it applies to contracts that are concluded in Saudi Arabia that are fully concluded between Saudi Arabian residents, without regard to conflict of law rules. You agree that any claims or disputes you may have against Zido Inc. must be settled by a court in Riyadh, Saudi Arabia. If we do not enforce any specific provision, we will not waive our right to do so later. If a court meets one of these conditions, the remaining provisions are retained. We may, at our sole discretion, automatically assign this Agreement in accordance with the terms below. All legal notices will be sent to us by the national registered representative of Zido Inc., except for the reporting of policy violations and intellectual property infringements. We will send you notifications via the e-mail address provided by you or by registered letter to the address given by you. Notifications sent by registered e-mail will be considered received 5 days after the date of shipment. We may update these terms at any time, with the updates effective 30 days after they are first published on the Site. Other changes to these terms and conditions will only be effective if signed in writing by the users and us.</p>\r\n\r\n<p><strong>Note:</strong> In the event of inconsistency, ambiguity or conflict of the contents of These Terms of Use with any other terms of the <a name=\"_Hlk531346826\">Zido </a>platform, or between the English and other language versions of this policy, the English version and the decision of Zido.app exercised in its absolute discretion shall always prevail.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Using Zido platform</strong></p>\r\n\r\n<p>As a user, you accept Zido platform &quot;as-is&quot; and choose to use it at your own risk. Despite the prohibitions below, Zido platform may contain inaccurate, inappropriate or possibly offensive material, and we assume no responsibility or liability for such material.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Abusing Zido platform</strong></p>\r\n\r\n<p>We may restrict or terminate our service, remove hosted content, and take technical and legal steps to keep users away from the Zido platform if we believe they cause problems or are inconsistent with the letter or spirit of our policies. Please report any issues, inappropriate content, and policy violations by emailing abuse@Zido.app.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Liability</strong></p>\r\n\r\n<p>To the extent permitted by law, we expressly disclaim all warranties, representations, and conditions, whether express or implied, including, but not limited to, quality, merchantability, merchantability, fitness for a particular purpose, and law. We are not liable for any loss, whether in money (including profit), goodwill or reputation, or any special, indirect, or consequential damages arising out of your use of Zido platform, even if you advise us or we could reasonably foresee the possibility of any such damage occurring.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Indemnity</strong></p>\r\n\r\n<p>You will indemnify and hold us (and our officers, directors, agents, subsidiaries, joint ventures, and employees) harmless from any claim or demand, including reasonable attorneys&#39; fees, made by any third party due to or arising out of your breach of this Agreement, or your violation of any law or the rights of a third party.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Personal Information</strong></p>\r\n\r\n<p>By using Zido platform, you agree to the collection, transfer, storage and use of your personal information by Zido Inc. on servers located in the United States, as further described in our <strong>privacy policy</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>شروط الاستخدام</strong></p>\r\n\r\n<p><strong>محدّث: </strong>30 نوفمبر 2018 (نافذًا اعتبارً من 30 نوفمبر 2018)</p>\r\n\r\n<p><strong>المقدمة</strong></p>\r\n\r\n<p>مرحبًا بك في زيدو (&quot;منصة زيدو&quot;، و&quot;متجر زيدو&quot;، و&quot;تطبيق زيدو&quot;، و&quot;<span dir=\"LTR\">Zido.com</span>&quot;، و&quot;<span dir=\"LTR\">Zido.com.sa</span>&quot;، و&quot;<span dir=\"LTR\"> Zido.app</span>&quot;) والتي يمتلكها ويشغلها شركة ريادة الاعمال السعودية للاستثمار. بانضمامك إلى زيدو، فأنت توافق على شروط الاستخدام التالية. وتعد شروط الاستخدام هذه سارية اعتبارً من 30 نوفمبر 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>عام</strong></p>\r\n\r\n<p>تشكل هذه الشروط والسياسات الأخرى المنشورة على منصة زيدو الاتفاق الكامل بين منصة زيدو وبينك. تخضع هذه الاتفاقية لقوانين المملكة العربية السعودية لأنها تطبق على العقود المبرمة في المملكة العربية السعودية. تبرم بالكامل بين المقيمين في المملكة العربية السعودية، دون الأخذ بعين الاعتبار لقواعد تنازع القوانين. وأنت توافق على أن أي مطالبات أو نزاعات قد تكون لديك ضد شركة ريادة الاعمال السعودية للاستثمار يجب تسويتها في أي محكمة من محاكم الرياض، المملكة العربية السعودية. إذا لم نفرض أي حكم محدد، فإننا لن نتنازل عن حقنا في القيام بذلك في وقت لاحق. وإذا استوفت المحكمة أحد هذه الشروط، فيتم الاحتفاظ بالأحكام المتبقية. ويجوز لنا، وفقًا لتقديرنا الخاص، تخصيص هذه الاتفاقية تلقائيًا وفقًا للشروط الواردة أدناه. ويرسل الممثل الوطني المسجل لشركة ريادة الاعمال السعودية للاستثمار جميع الإشعارات القانونية إلينا، باستثناء البلاغات عن انتهاكات السياسة والملكية الفكرية. ويتم إرسال إخطارً لك عبر عنوان البريد الإلكتروني المتاح من خلالك أو عن طريق خطاب مسجل إلى العنوان الذي قدمته. ويتم اعتبار الإخطارات المرسلة بالبريد الإلكتروني المسجل مستلمة بعد 5 أيام من تاريخ الشحن. يجوز لنا تحديث هذه الشروط في أي وقت، مع تفعيل التحديثات بعد 30 يومًا من نشرها لأول مرة على الموقع. لن تكون التغييرات الأخرى على هذه الشروط والأحكام فعالة إلا إذا وقعها المستخدمين ونحن كتابةً.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>ملاحظة: </strong>في حال وجود مواطن تضارب أو غموض أو تناقض في محتويات شروط الاستخدام هذه مع أي شروط أخرى لمنصة زيدو أو بين إصدارات اللغة الإنجليزية واللغات الأخرى لهذه السياسة، فإن النسخة الإنجليزية وقرار <span dir=\"LTR\">Zido.app</span> &nbsp;الممارس بما له من صلاحية تقديرية مطلقة يكون هو المرجع لهذا.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>استخدام منصة زيدو</strong></p>\r\n\r\n<p>بصفتك مستخدم، فأنت تقبل منصة زيدو &quot;كما هي&quot; وتختار استخدامها على مسؤوليتك الخاصة. وعلى الرغم من المحظورات أدناه، قد تحتوي منصة زيدو على مواد غير دقيقة أو غير مناسبة أو ربما مسيئة، ولا نتحمل أي تبعة أو مسؤولية عن مثل هذه المواد.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>إساءة استخدام منصة زيدو</strong></p>\r\n\r\n<p>يجوز لنا تقييد أو إنهاء خدمتنا، وإزالة المحتوى المستضاف، واتخاذ خطوات تقنية وقانونية لحذف المستخدمين من منصة زيدو إذا كنا نعتقد أنهم يسببون مشكلات أو لا يتفقون مع نص سياساتنا أو روحها. يرجى الإبلاغ عن أية مشكلات أو محتويات غير لائقة أو انتهاكات لسياسة المنصة عبر إرسال بريد إلكتروني إلى <span dir=\"LTR\">abuse@zido.app</span>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>المسؤولية</strong></p>\r\n\r\n<p>نخلي مسؤوليتنا صراحة من جميع الضمانات، والتعهدات، والشروط، بالقدر الذي يسمح به القانون، سواء أكانت صريحة أم ضمنية، وتشمل على سبيل المثال لا الحصر، الجودة، والصلاحية، والملائمة لغرض معين، والقانونية. ولسنا مسؤولين عن أية خسارة، سواء في المال (بما في ذلك الربح)، أم النية الحسنة أم السمعة، أو أي أضرار خاصة أو غير مباشرة أو تبعية تنشأ عن استخدامك لمنصة زيدو حتى وإن أخطرتنا أو كان بإمكاننا توقع احتمالية حدوث أي ضرر.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>التعويضات</strong></p>\r\n\r\n<p>يوافق المستخدم على تعويضنا وحمايتنا (مسؤولينا، ومدراءنا، وعملاءنا، وتوابعنا، وشركاءنا وموظفينا) من أي دعاوى أو مطالبات بما في ذلك أتعاب المحاماة التي يقوم بها أي طرف أخر ناتجة عن أو مترتبة على إخلاله أو إخلالها بهذه الاتفاقية، أو انتهاكك لأي قانون أو حق من حقوق الطرف الأخر.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>المعلومات الشخصية</strong></p>\r\n\r\n<p>باستخدامك لمنصة زيدو، فإنك تعطي الموافقة لشركة ريادة الاعمال السعودية للاستثمار بجمع ونقل وتخزين واستخدام معلوماتك الشخصية من على الخوادم الموجودة في المملكة العربية السعودية، كما هو موضح بإسهاب في <strong>سياسة الخصوصية</strong> الخاصة بنا.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'active', '2018-12-21 15:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `phone_code` varchar(10) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `otp_verif_flag` int(1) NOT NULL DEFAULT '0',
  `notification_flag` int(1) NOT NULL DEFAULT '1',
  `image` varchar(500) NOT NULL,
  `gender` int(2) NOT NULL,
  `country_id` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `auth_level` tinyint(3) UNSIGNED NOT NULL COMMENT 'admin-9,',
  `auth_id` varchar(245) NOT NULL,
  `device_type` varchar(100) NOT NULL,
  `device_token` varchar(1000) NOT NULL,
  `role` varchar(10) NOT NULL,
  `package_selected` int(10) NOT NULL DEFAULT '0',
  `user_rating` int(1) NOT NULL,
  `banned` int(1) NOT NULL DEFAULT '0',
  `password` varchar(60) NOT NULL,
  `approval_status` int(2) NOT NULL DEFAULT '0',
  `free_access_flag` int(1) NOT NULL DEFAULT '0',
  `passwd_recovery_code` varchar(100) NOT NULL,
  `passwd_recovery_date` datetime NOT NULL,
  `passwd_modified_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `register_through` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comission` int(10) NOT NULL,
  `type` int(10) NOT NULL COMMENT '1=> Percentage, 2=>Amount'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone_number`, `country_code`, `phone_code`, `otp`, `otp_verif_flag`, `notification_flag`, `image`, `gender`, `country_id`, `address`, `auth_level`, `auth_id`, `device_type`, `device_token`, `role`, `package_selected`, `user_rating`, `banned`, `password`, `approval_status`, `free_access_flag`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `register_through`, `created_at`, `modified_at`, `comission`, `type`) VALUES
(1, 'admin', '', 'admin@gmail.com', '99519295', 'AF', '966', '1234', 1, 1, 'assets/uploads/user_profiles/profile1.png', 1, 1, 'Riyadh', 9, '', '', '', 'admin', 0, 0, 0, 'MTIzNDU2', 1, 0, 'KtHYqTICgPtuVyOSRj40hGMlJHqJL1P1YdU0UbXyLkIX69AUOQ', '2018-08-24 07:27:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-06-07 13:15:17', '2018-12-15 11:34:49', 0, 0),
(2, 'S12', 'S12', 's12@yopmail.com', '1243', 'AF', '93', '1234', 0, 1, 'assets/uploads/user_profile_images/2_1542866680.png', 1, 0, 'Address 1234', 1, '', 'asdf', 'asdasd', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '0vxwCO9WHv8U7cvexrA43MpXb3eS60ycqFwLJ2zDmSSJFM3ccY', '2018-11-22 10:09:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-15 06:23:48', '2018-12-26 12:45:31', 0, 0),
(4, 's123', 'S123', 's123@gmail.com', '54641684', 'AF', '93', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'dzPV9xN0oR8:APA91bFlsPm7-j_k26v5khEREObxNYHl51ItPJlo3-yCY_p4feZmgD1sEVkQ5BFxdB-2X8V3DklcUy8zu4dvKW1vDOedK6TvS8VW1ATNo13ukh2S5VcuFwcsQ-KwE5_WDvjzSCCHXI5j', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 1, 'zwlCekazeHIBow0oO1lOcbqrMmdO7ybo16v3vXkHWXJk8iLYjR', '2018-11-22 09:20:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-15 07:15:50', '2019-01-08 07:36:52', 0, 0),
(66, 's1211', 's1211', 's1211@gmail.com', '124531', 'KW', '965', '1234', 0, 1, 'assets/uploads/user_profile_images/66_1543579640.png', 1, 0, 'Address', 1, '', 'asdf', 'asdasd', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-22 06:59:00', '2018-12-26 12:37:48', 0, 0),
(79, 'S212', 'S212', 's212@yopmail.com', '21345', 'QA', '974', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 2, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-22 11:26:06', '2018-12-26 12:37:47', 0, 0),
(85, 's145', 'S145', 's145@yopmail.com', '231445', 'QA', '974', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, 'Address', 1, '', '', '', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-22 12:52:46', '2018-12-26 12:37:47', 0, 0),
(87, 'S11', 'S11', 's11@yopmail.com', '451278', 'SA', '966', '1234', 0, 1, 'assets/uploads/user_profiles/management-icon7.png', 0, 0, 'Hyderabad', 1, '', '', '', 'customer', 2, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-22 13:12:24', '2018-12-05 12:01:50', 0, 0),
(88, 'S10', 'S10', 's10@yopmail.com', '23541', 'KW', '965', '1234', 0, 1, 'assets/uploads/user_profiles/management-icon8.png', 1, 0, 'Hyderabad', 1, '', '', '', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-22 13:25:04', '2018-12-05 12:01:50', 0, 0),
(90, 'S21', 'S21', 's21@yopmail.com', '4132', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-23 04:42:40', '2018-12-05 12:01:50', 0, 0),
(116, 'S321', 'S321', 's321@yopmail.com', '52364115', 'QA', '974', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 1, 0, 'Banglore', 1, '', '', '', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-29 05:12:19', '2018-12-05 12:01:50', 0, 0),
(117, 's322', 's322', 's322@yopmail.com', '4567852', 'QA', '974', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 3, 0, 0, 'MTIzNDU=', 1, 0, '7vEIsDw5RjRNREhcH07Sl3QzjXIqWu4hqP0yE5dFChWnYbkU2f', '2018-11-29 01:25:57', '2018-11-29 11:11:56', '0000-00-00 00:00:00', 1, '2018-11-29 07:02:54', '2018-12-05 12:01:50', 0, 0),
(127, 'Maha', 'Mahalaxmi', 'maha@gmail.com', '9502896977', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '123654', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-11-30 13:03:09', '2018-12-05 12:01:50', 0, 0),
(177, 'newuser1', 'newuser1', 'newuser1@yopmail.com', '7697854', 'BH', '973', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-03 13:31:00', '2018-12-05 12:01:50', 0, 0),
(185, 'sana', 'sana test ios', 'sanaa@gmail.com', '985984', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/doctor.png', 0, 0, '', 1, '', 'iOS', 'D01D42AA5D47ABA288C43F1B990015AB9957C01F5F8931DBDC55CCD779226957', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 06:11:12', '2019-01-16 14:11:08', 0, 0),
(186, 'shiva', 'shiva123', 'shiva@gmail.com', '9494512587', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profile_images/186_1546954217.jpg', 0, 0, '', 1, '', 'iOS', 'D01D42AA5D47ABA288C43F1B990015AB9957C01F5F8931DBDC55CCD779226957', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 06:23:19', '2019-01-16 14:10:21', 0, 0),
(187, 'bhagyalaxmi22', 'bhagyalaxmi22', 'bhagyalaxmi@gmail.com', '8142001377', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/187_1544533971.jpg', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 06:26:18', '2018-12-12 09:39:47', 0, 0),
(188, 'S144', 'S144', 'S144@yopmail.com', '12541242', 'BH', '973', '1234', 1, 1, 'assets/uploads/user_profiles/management-icon14.png', 1, 0, 'Address', 1, '', 'iOS', 'E525A2AEEDA1D08F9E7FC338182D71ACF45E210892F14D46686FFC4AB49E70C5', 'customer', 1, 1, 0, '', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 06:32:33', '2019-01-11 06:51:48', 0, 0),
(190, 'gopi', 'gopi', 'gopi@gmail.com', '98566984', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/190_1543908386.jpg', 0, 0, '', 1, '', 'iOS', '0AB9533F5E820007DFA3EBB18E95173A1BBEE47901B67E4FC5D3124560BD829C', 'customer', 2, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 07:06:22', '2019-01-16 14:10:53', 0, 0),
(191, 'shiva2', 'dghjk', 'shiva2@gmail.com', '8536885', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 07:16:15', '2018-12-05 12:01:50', 0, 0),
(192, 'sony', 'sony', 'sony@gmail.com', '8855996633', 'SA', '966', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Ios', '36883', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 07:27:13', '2018-12-05 12:01:50', 0, 0),
(193, 'gopi2', 'gopi2', 'gopi2@gmail.com', '848484', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 07:33:10', '2018-12-05 12:01:50', 0, 0),
(194, 'joshi', 'joshi', 'joshi12@gmail.com', '9985033903', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/194_1545052817.jpg', 0, 0, '', 1, '', 'Android', 'cSpecOd3r5E:APA91bEo2j5MZrtmTgDU_XQXpQjU1CBRQtRzPZT_jD0AsqmPUN0j63n6485Vs41XLnUqYMILuL8B6aBcfdWBFM0sLyZ8DrJ0d85nU6IFX5S0aCfNPSSN3dSnObDqkY26PLpL9ieKIY5R', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 07:48:03', '2019-01-14 07:50:45', 0, 0),
(202, 'volive', 'volive', 'volive@gmail.com', '9553306689', 'BH', '973', '1234', 1, 1, 'assets/uploads/user_profiles/Penguins.jpg', 1, 0, 'Hyderbad', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 09:37:05', '2018-12-13 10:59:47', 0, 0),
(203, 'gea', 'geahdhrhrhhr', 'gea@gmail.com', '9553306673', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/203_1545387337.jpg', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 10:01:38', '2018-12-21 10:15:37', 0, 0),
(205, 'bhushit', 'bhushit', 'bhushit@gmail.com', '5699856', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 3, 0, 0, 'MTIzNA==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-04 12:51:16', '2018-12-05 12:01:50', 0, 0),
(206, 'bhushitnew', 'Joshi', 'joshibhushit@volivesolutions.com', '576648766', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '2018-12-04 01:00:03', '2018-12-04 01:00:58', '0000-00-00 00:00:00', 1, '2018-12-04 12:56:05', '2018-12-05 12:01:50', 0, 0),
(209, 'aaa', 'aaa', 'aaa@gmail.com', '213213', 'BH', '973', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-05 05:02:57', '2018-12-05 12:01:50', 0, 0),
(210, 'newuser2', 'Newuser1', 'newuser2@yopmail.com', '12346543', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/management-icon13.png', 0, 0, '', 1, '', '', '', 'customer', 5, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-05 10:03:46', '2018-12-05 12:01:50', 0, 0),
(211, 'shivatest1', 'iostesting 1', 'shivatest1@gmail.com', '85164848', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, 'U63JB0cAq96L13eALuDengEn7agwohtm1nF1Qq73Oht2QkEmXi', '2018-12-18 01:05:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-05 10:57:29', '2018-12-18 13:05:13', 0, 0),
(212, 'shivatest2', 'ios testing2', 'shivatest2@gmail.com', '86466478', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-05 10:59:00', '2018-12-05 12:01:50', 0, 0),
(213, 'shivatest3', 'dhkll', 'shivatest3@gmail.com', '98559', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 4, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-05 11:58:02', '2018-12-06 10:41:37', 0, 0),
(214, 'shivatest4', 'shivatest435', 'shivatest4@gmail.com', '99669696', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profile_images/214_1544529563.jpg', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 05:38:00', '2018-12-11 13:46:17', 0, 0),
(215, 'user2', 'user2', 'newuser22@yopmail.com', '1512311', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-12-06 06:08:33', '2018-12-06 06:08:33', 0, 0),
(216, 'user3', 'user3', 'user3@yopmail.com', '545135413', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 0, 0, 0, 'MTIz', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-12-06 06:08:57', '2018-12-06 06:08:57', 0, 0),
(217, 'sdfsadf', 'asdfasdf', 'asdfas@sdfasd.com', '3452345', 'BH', '973', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 0, 0, 0, 'MTI=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-12-06 06:12:13', '2018-12-06 06:12:13', 0, 0),
(221, 'Monu', 'Monica', 'monu@gmil.com', '8596741239', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 07:27:46', '2018-12-06 08:57:56', 0, 0),
(222, 'Bhanu', 'Bhanu', 'bhanu@gmail.com', '9856412369', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/222_1544535179.jpg', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 07:48:37', '2018-12-11 13:32:59', 0, 0),
(224, 'User1', 'User1', 'user1@gmail.com', '5242688569', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 10:15:35', '2018-12-06 10:39:11', 0, 0),
(225, 'Zidouser', 'Zidouser', 'zido@gmail.com', '4125369809', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/225_1545045312.jpg', 0, 0, '', 1, '', 'iOS', 'C840504832C094422290D81903D637858D0D41F199F94C8A3152DA692B810AFD', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 10:24:56', '2018-12-31 14:45:06', 0, 0),
(226, 'Shyam', 'Shyam', 'shyam@gmail.com', '5243698560', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 10:36:03', '2018-12-26 12:32:00', 0, 0),
(227, 'Zid', 'Zid', 'zid@gmail.com', '9865325869', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU3', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 10:47:19', '2018-12-26 12:32:54', 0, 0),
(228, 'Sakshi', 'Sakshi', 'sakshi@gmail.com', '7458968523', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 11:56:30', '2018-12-06 11:57:16', 0, 0),
(229, 'Ricky', 'Ricky', 'ricky@gmail.com', '8574698542', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/229_1544531727.jpg', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-06 12:18:59', '2018-12-11 12:35:27', 0, 0),
(230, 'charan', 'charan', 'charan@gmail.com', '1234567890', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-10 09:36:34', '2018-12-10 09:37:18', 0, 0),
(231, 'chitti', 'chitti', 'chitti@gmail.com', '6546545', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 05:34:03', '2018-12-11 05:34:07', 0, 0),
(232, 'valuva', 'shiva kumar ', 'valuvashiva@gmail.com', '985669441', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 06:24:12', '2018-12-11 06:26:28', 0, 0),
(233, 'user', 'user', 'user@gmail.com', '564641321', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 09:03:54', '2018-12-11 09:05:13', 0, 0),
(234, 'shivatest5', 'shivatest ios 5', 'shivatest5@gmail.com', '994845464', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 10:23:54', '2018-12-11 13:49:58', 0, 0),
(235, 'shivatest6 ', 'shivahjk', 'shivatest6@gmail.com', '8', 'KW', '965', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 10:26:09', '2018-12-11 10:26:09', 0, 0),
(236, 'chiru', 'chiru', 'chiru@gmail.com', '8096741478', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/236_1545029841.jpg', 0, 0, '', 1, '', 'Android', 'fKiLqP5XbUs:APA91bE2F0356Ob6Di0aNrAdC7EoHG2ZFoqfcE-1Ae7sd4R9tLBdCbCCuI_kMi9dNaJ7EzZpONBtmrdbdmEYohl3Xf_qh1vTU6vhKpbiBYIt77zSvOmPIXDCf_uScWABOD3V9zg_5SUj', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 10:34:25', '2019-01-08 06:03:58', 0, 0),
(237, 'app', 'app', 'app@gmail.com', '1234567809', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 10:47:30', '2018-12-11 10:48:25', 0, 0),
(238, 'naveen', 'naveen', 'naveen@gmail.com', '798789787', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/apple1.jpg', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-12-11 10:48:05', '2018-12-12 13:52:48', 0, 0),
(239, 'Bhanupriya', 'Bhanu', 'bhanuPriya@gmail.com', '754895589', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 13:29:19', '2018-12-11 13:29:30', 0, 0),
(240, 'harish1', 'vxvxbx', 'harish1@gmail.com', '94949', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 13:56:00', '2018-12-11 13:56:06', 0, 0),
(241, 'bhushitjoshi', 'bhushit joshi', 'bhushitjoshi@gmail.com', '67676676', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-11 14:47:47', '2018-12-11 14:49:59', 0, 0),
(242, 'newuser', 'newuser', 'newuser@gmail.com', '5654636', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 05:17:16', '2018-12-12 05:17:20', 0, 0),
(243, 'newuser3', 'newuser3', 'newuser3@gmail.com', '1264800', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 05:23:33', '2018-12-12 05:23:33', 0, 0),
(244, 'zidouser1', 'zidouser2', 'zidouser1@gmail.com', '8523698458', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profile_images/244_1544601332.jpg', 0, 0, '', 1, '', 'Android', 'fkk_wUcufBQ:APA91bFsiy8q1-9XuuRCbqC6-JPTHAM-kY6YncCzb6Tyrv281X1IHPD_4s8EkYBlAfcaPYTwFo5_UMq1sr7-GZzfdJiSE_H5RWyjjK-TmILSRFFklDZQWWLHQCcnWovWn2auE5wUqeMy', 'customer', 0, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 06:44:16', '2019-01-11 13:54:56', 0, 0),
(245, 'Manu', 'Manu', 'manu@gmail.com', '5846985236', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/245_1544597771.jpg', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 06:46:19', '2018-12-12 07:39:35', 0, 0),
(246, 'Manish', 'manish', 'manish@gmail.com', '5558854698', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 5, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 07:58:51', '2018-12-12 08:02:07', 0, 0),
(247, 'Bhggg', 'Bhai', 'bhhh@gmail.com', '8858', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 08:00:24', '2018-12-12 08:00:24', 0, 0),
(248, 'Vgujhu', 'Cggfc', 'vghhh@gg.chh', '858468', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 08:01:18', '2018-12-12 08:01:18', 0, 0),
(249, 'test123', 'gjmj', 'test123@gmail.com', '88668852', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profile_images/249_1544608186.jpg', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 0, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 09:00:38', '2018-12-12 14:05:03', 0, 0),
(250, 'naveen1', 'naveen1', 'naveen1@yopmail.com', '567875', 'BH', '973', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-12-12 09:50:40', '2018-12-12 09:50:40', 0, 0),
(251, 'newuser123', 'newuser123', 'newuser123@yopmail.com', '78789', 'BH', '973', '1234', 1, 0, 'assets/uploads/user_profiles/football1.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 3, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2018-12-12 10:03:20', '2018-12-12 13:01:32', 0, 0),
(252, 'chiru11', 'ggagshs', 'chiru11@gmail.com', '94848', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 11:04:37', '2018-12-12 11:05:07', 0, 0),
(253, 's124123', 's124', 's1241231@gmail.com', '546168112314', 'AF', '93', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'asdf', 'asdf', 'customer', 0, 0, 0, 'MTIzNDU=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 11:16:32', '2019-01-10 11:20:34', 0, 0),
(254, 'test124', 'dhjcxgb', 'test124@gmail.com', '8412698', 'KW', '965', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'c2hpdmF2ODQ=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 11:18:02', '2018-12-12 11:18:02', 0, 0),
(255, 'mouni', 'mouni', 'mouni@gmail.com', '16888', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'bGFrc2htaTEyMw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 11:18:02', '2018-12-12 11:18:02', 0, 0),
(256, 'user123', 'user123', 'user123@gmail.com', '65456', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, 'quxkxdb2jIJfUFXhcI2aczlO8LdV4wx7Kgij6cldm7ExSQoBQW', '2018-12-13 06:48:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 13:09:22', '2018-12-13 06:48:35', 0, 0),
(257, 'test', 'test123456', 'test@gmail.com', '158800', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 13:30:34', '2018-12-12 13:31:04', 0, 0),
(258, 'user34', 'user34', 'user34@gmail.com', '54684', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-12 13:54:02', '2018-12-12 13:54:07', 0, 0),
(259, 'kethan', 'kethan', 'kethan@gmail.com', '2542332', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'dzPV9xN0oR8:APA91bFlsPm7-j_k26v5khEREObxNYHl51ItPJlo3-yCY_p4feZmgD1sEVkQ5BFxdB-2X8V3DklcUy8zu4dvKW1vDOedK6TvS8VW1ATNo13ukh2S5VcuFwcsQ-KwE5_WDvjzSCCHXI5j', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-13 06:50:31', '2019-01-03 12:08:49', 0, 0),
(260, 'test125 ', 'test125579', 'test125@gmail.com', '98556988', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-13 11:13:04', '2018-12-13 11:14:05', 0, 0),
(261, 'testing1', 'Testingzido', 'testing1@gmail.com', '9912203457', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profile_images/261_1544700528.jpg', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-13 11:13:43', '2018-12-13 11:31:41', 0, 0),
(262, 'jack', 'jackle', 'jack@gmail.com', '8528529634', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 08:12:02', '2018-12-27 07:46:24', 0, 0),
(263, 'Rami', 'Ram', 'rami12345@gmail.com', '89632589', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 10:43:01', '2018-12-17 10:43:09', 0, 0),
(264, 'honey', 'HoneyWell', 'honey@gmail.com', '6523458632', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:09:05', '2018-12-18 09:58:41', 0, 0),
(265, 'myZido', 'ZidoUser', 'zido123@gmail.com', '63041523523', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 1, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:13:37', '2018-12-17 11:13:44', 0, 0),
(266, 'Mac', 'Maickle', 'Mac@gmail.com', '9658325642', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:16:14', '2018-12-17 11:16:14', 0, 0),
(267, 'B.B. new', 'sdf', 'vnbvbn@gmail.com', '2580*7*', 'BH', '973', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:16:45', '2018-12-17 11:16:54', 0, 0),
(268, 'Goff', 'Goff', 'goff@gmail.com', '8546235486', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:21:36', '2018-12-17 11:22:00', 0, 0),
(269, 'jam', 'jamble', 'jam@gmail.com', '8524632541', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:28:07', '2018-12-17 11:28:25', 0, 0),
(270, 'ddfhg', 'shd', 'dhdg@gmail.com', '8754521', 'QA', '974', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:32:41', '2018-12-17 11:33:08', 0, 0),
(271, 'fight', 'ddshgf', 'jkjkb@gmail.com', '6578463789', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:38:34', '2018-12-17 11:38:55', 0, 0),
(272, 'Jhgtg', 'Off3', 'cfffgg@gmail.com', '5468854858', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-17 11:45:53', '2018-12-17 11:46:01', 0, 0),
(273, 'zido', 'zido', 'zido12@gmail.com', '55464664', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/273_1545119310.jpg', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 3, 0, 0, 'MTIzNDU2Nw==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 07:44:56', '2018-12-18 10:03:16', 0, 0),
(274, 'guru', 'guru', 'guru@gmail.com', '1688888', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 07:47:07', '2018-12-18 07:47:26', 0, 0),
(275, 'test9', 'testbchh', 'test9@gmail.com', '98568742', 'KW', '965', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456888', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 09:17:02', '2018-12-18 09:17:02', 0, 0),
(276, 'test10', 'bcghh', 'test10@gmail.com', '8555884', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profile_images/276_1545125149.jpg', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 09:23:15', '2018-12-18 09:25:49', 0, 0),
(277, 'test12', 'test12', 'test12@gmail.com', '545546464', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profile_images/277_1545128041.jpg', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 10:13:10', '2018-12-18 10:16:50', 0, 0),
(278, 'test13', 'test13', 'test13@gmail.com', '5464646', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 5, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 10:28:58', '2018-12-18 10:29:16', 0, 0),
(279, 'ram', 'ram', 'ram@gmail.com', '132135456465', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 12:25:05', '2018-12-18 12:25:05', 0, 0),
(280, 'fedo', 'ayyad', 'ddd@g.b', '05444', 'SA', '966', '1234', 1, 1, 'assets/uploads/user_profile_images/280_1545466111.jpg', 0, 0, '', 1, '', 'iOS', '3032226B2D655C14F55D425C98727DE93EF7610775DA4FA2D6CD4EF1D85F90A4', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-18 14:18:36', '2019-01-04 10:24:31', 0, 0),
(281, 'bodoor', 'bodoor', 'bodoor@hotmail.com', '0565123974', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'Ym9kb29y', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-19 07:16:46', '2018-12-21 21:52:07', 0, 0),
(282, 'bodoor1', 'bodoor', 'bodoor@gmail.com', '0565123973', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'dvcfXl6EdCw:APA91bFjCurRQSq42k3ILHIwzLvnTW7CuD1s8e_-rImQlcQPpFebn-7ZA83v5kZTB_5Z8uZcNUcFf8wEu-quSgQFltGlU7I3AeQ5NDD8DVkQORsOflu1Vod9WAcGCl31EF2b7qHRbBwB', 'customer', 1, 0, 0, 'Ym9kb29y', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-19 07:18:15', '2019-01-07 11:57:53', 0, 0),
(283, 'yeswanth', 'yes', 'yes@gmail.com', '6459599595', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-19 07:18:33', '2018-12-29 12:13:58', 0, 0),
(284, 'Harry', 'Harry', 'harry@gmail.com', '8547695284', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-19 09:13:13', '2018-12-19 12:07:11', 0, 0),
(285, 'haneen', 'haneen', 'haneen@hotmail.com', '0852963741', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 3, 0, 0, 'aGFuZWVu', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-19 10:08:54', '2018-12-19 10:09:27', 0, 0),
(286, 'saud', 'saud', 'saud04@hotmail.com', '551212275', 'SA', '966', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'cSpecOd3r5E:APA91bEo2j5MZrtmTgDU_XQXpQjU1CBRQtRzPZT_jD0AsqmPUN0j63n6485Vs41XLnUqYMILuL8B6aBcfdWBFM0sLyZ8DrJ0d85nU6IFX5S0aCfNPSSN3dSnObDqkY26PLpL9ieKIY5R', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '2019-01-15 06:37:48', '2019-01-15 06:38:19', '0000-00-00 00:00:00', 1, '2018-12-19 17:00:28', '2019-01-16 13:41:17', 0, 0),
(287, 'ayyad', 'ayyad', 'ayyad@gmail.com', '0535789652', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fddtrr', 'customer', 0, 0, 0, 'YXl5YWQxMjM=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-22 08:15:32', '2018-12-22 08:15:42', 0, 0),
(288, 'bhishma', 'bhishmaRaj', 'bhishma@gmail.com', '856962263', 'QA', '974', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '123654', 'customer', 0, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-24 13:23:32', '2018-12-27 12:39:51', 0, 0),
(289, 'bhishma1', 'bhishmaRaj1', 'bhishma1@gmail.com', '856962264', 'QA', '974', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '123456', 'customer', 0, 0, 0, 'MTIzNDU2Nzg=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-24 13:24:38', '2018-12-24 13:31:03', 0, 0),
(290, 'rani', 'rani test', 'rani123@gmail.com', '88484', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', 'E39A96F959FA8437C718A39E77D6078BD9B402AF91BB13939C0D36A14031A1F9', 'customer', 2, 0, 0, 'MTIzNDU2', 1, 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-26 11:05:39', '2018-12-31 09:23:59', 0, 0),
(291, 'harishios1', 'harish', 'gharish@gmail.com', '95332211332', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'IOS', '123456', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-26 12:38:12', '2018-12-26 12:39:22', 0, 0),
(292, 'laxma', 'laxa redddy', 'laxma@gmail.com', '9493111694', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'cF4S7J3NAkw:APA91bFxcp4RJGj2W4JgNJCTHVjdZlMG9ZRWFsbqN9Im5_dIKbTPNhwadbQ9Z33tv3Muj5MnoDX27YZrYjsR58TWzIskrCjJ-F6TqLJoGtKf6HHTBv0hdqeBXg2tvwgNGo84-y4TU3Yr', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-28 08:57:22', '2019-01-03 13:20:45', 0, 0),
(293, 'rock', 'rocks', 'rock@gmail.com', '23456781', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'f4qSOpzKMww:APA91bHDq-Z0FP4BsV5ug0wlrwvyJWuD7gq_2BacovsyBOqfQ2Ia-liGsLsufUZWMpbiYVX2VsvxR-8hM4Nh-OsWfVvadq5HmVsFBXBZDJli-Xe-HnQ52mieLIEtQN8rwlv3MDwYl3WO', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-29 14:13:22', '2019-01-03 10:38:07', 0, 0),
(294, 'lucky', 'lucky', 'lucky@gmail.com', '505600', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/294_1546268250.jpg', 0, 0, '', 1, '', 'Android', 'd0vaJ2J1mWM:APA91bGPK2Ka21q5bqljNiGz2I99ffgUcmVLB5gf03fGetmBWFhA9gTy0xBK86NO_x56iDhN3DQ8xZJvYAeYQfWCYVgoHKc-gMcTxM71JJuw96CZWkXZgXumWTVjg8JJwFWjLerrH6B2', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-29 14:13:27', '2019-01-10 14:29:56', 0, 0),
(295, 'bodoor123', 'bodoor123', 'bodoor321', '586935743', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'd_LHtS9CWWQ:APA91bGf9lcveGKS2DpSj7WOCCHQ5iW9wCyl2m2CfliOr6-qjLHdy3ifC10LgzwgUeXci4pNOllY0Hm3M57rewT6M8Dk9bCGcrrD4hGFQsGMDOIpvzykQ69Deph2DYW2FGX09mdXm3by', 'customer', 1, 0, 0, 'Ym9kb29yMTIz', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-30 06:51:07', '2019-01-13 08:35:01', 0, 0),
(296, 'shiva484', 'sgobxf', 'shiva484@gmail.com', '6852985', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '4CE7386C1CEC7CEB0F1E3D52891F5963A082B25E9FF7D99F86A1D7B7FD2CB916', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-30 08:57:30', '2018-12-31 10:05:17', 0, 0),
(297, 'saleh', 'saleh', 's@gmail.com', '512345678', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'cOmgJnLQEG0:APA91bHkoUrzq5ITwKKbglsmqTmyCKeeHgKX3zUOuMoPRwKSRt_3KwNMe1yzoTrYRbjLX9MXOQmr_-Pu5zbaplvOmzMVFe4RUejpUvln5fAyC58ywGqjfFZTkCqsT1HTbGvMdDZrY9Wj', 'customer', 0, 0, 0, 'c2FsZWhxMjM=', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-31 05:52:40', '2018-12-31 05:52:40', 0, 0),
(298, 'ramireddy1', 'vzvsh', 'ramireddy1@gmail.com', '99784', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'edmSfMkFmtE:APA91bHhn88f-ZtDKmcA3VejBHXSoBOJV1VG3NRie9L8pRm-D1pc4t3K1tC4FW2u8-4YaU3DRphT_s1lY0LvRslyDIafAsW6f2gJhH_93UY5M1UMFQBbKztYpnq0kafUsKYqM3lKWnnu', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-31 07:15:07', '2018-12-31 07:36:57', 0, 0),
(299, 'rani2', 'rani', 'rani@gmail.com', '88484554', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '12345', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2018-12-31 09:25:38', '2018-12-31 10:07:16', 0, 0),
(300, 'hari', 'hari', 'hari@gmail.com', '8096741470', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fYcHtdPc8rI:APA91bH6WO9Ll7LMYkSBPXjM6f6nqk96m0qohuAZtihV4XU4YmGbeFsJAjnWHh3_IOfg3LLzh05pejIfeFwP2NpwpWdgbhE95cnyQePcbkDLbGHtcTK5fYs4aXH9QofSGKofKn3cg5j9', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 07:41:40', '2019-01-03 07:41:40', 0, 0),
(301, 'giri', 'giri', 'giri@gmail.com', '1234561230', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'f4qSOpzKMww:APA91bHDq-Z0FP4BsV5ug0wlrwvyJWuD7gq_2BacovsyBOqfQ2Ia-liGsLsufUZWMpbiYVX2VsvxR-8hM4Nh-OsWfVvadq5HmVsFBXBZDJli-Xe-HnQ52mieLIEtQN8rwlv3MDwYl3WO', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 07:42:25', '2019-01-03 07:48:15', 0, 0),
(302, 'buntu', 'buntu', 'buntu@gmail.com', '50909090', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fKiLqP5XbUs:APA91bE2F0356Ob6Di0aNrAdC7EoHG2ZFoqfcE-1Ae7sd4R9tLBdCbCCuI_kMi9dNaJ7EzZpONBtmrdbdmEYohl3Xf_qh1vTU6vhKpbiBYIt77zSvOmPIXDCf_uScWABOD3V9zg_5SUj', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 07:46:58', '2019-01-08 06:12:05', 0, 0),
(303, 'donkey', 'donkey', 'donkey@gmail.com', '000000000', 'AE', '971', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'f4qSOpzKMww:APA91bHDq-Z0FP4BsV5ug0wlrwvyJWuD7gq_2BacovsyBOqfQ2Ia-liGsLsufUZWMpbiYVX2VsvxR-8hM4Nh-OsWfVvadq5HmVsFBXBZDJli-Xe-HnQ52mieLIEtQN8rwlv3MDwYl3WO', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 07:47:53', '2019-01-03 07:47:53', 0, 0),
(304, 'ravi', 'ravikumar', 'ravi@gmail.com', '98266844', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', 'C840504832C094422290D81903D637858D0D41F199F94C8A3152DA692B810AFD', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 07:50:17', '2019-01-03 07:50:22', 0, 0),
(305, 'akshay', 'akshay', 'akshay@gmail.com', '9865321452', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'd3CLtW89F94:APA91bFLE_LXn3xClWE_BmM2zkjz3zI6Ndqx_0GRW7O0Xaf3GKCi7W4XAEcK9iuainjq154YnNexSk-Rd70A1lj6ncupu02cxCoPpFMjGceT8_RKUyBkMC3NazBgQxLbpzpicWOBCLYn', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 10:06:08', '2019-01-03 11:14:55', 0, 0),
(306, 'kiran1', 'kiraniostest1', 'kiran1@gmail.com', '9856844', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profile_images/306_1547201349.jpg', 0, 0, '', 1, '', 'iOS', 'D01D42AA5D47ABA288C43F1B990015AB9957C01F5F8931DBDC55CCD779226957', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 11:37:04', '2019-01-16 14:11:54', 0, 0),
(307, 'kiran2', 'kiran', 'kiran2@gmail.com', '9845454', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', 'ED04F4BC38249EE038B047FD91DCF6F1A0DF6AFEFE6356EB1BAEF49EF1B20BF0', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 11:38:42', '2019-01-07 12:53:18', 0, 0),
(308, 'test21', 'test21', 'test212@gmail.com', '545548484', 'KW', '965', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', 'D888E0CF07EC175443E03836F81B01A17BAA78029A745CB672B517359891E745', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-03 14:01:45', '2019-01-03 14:03:47', 0, 0),
(309, 'Vishu', 'vishnavi', 'vishu@gmail.com', '2536987458', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '1FC7B469A9C5F79D5C76836C5E8BE5AFD9B3AE93A338B1ED3D9A8CBC3BEBB097', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 06:18:21', '2019-01-04 06:18:21', 0, 0),
(310, 'sam', 'sam', 'sam@gmail.com', '2345678905', 'OM', '968', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'e_MTvniiMMg:APA91bELyzxYIcxUwY760VXtGx0KFJlj8bJ-XVZONL2hbQ3nBDkC_0Zh0ui98gjrt0hiK3szFWGp5QuoQyULtep7kN9HAxd3NydfHdp-2MChgif2S8rB_NQOQ8VIzPYYXzBxsRsLpvo5', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 06:26:01', '2019-01-08 07:55:12', 0, 0),
(311, 'Hasin', 'Hasin', 'hasin@gmail.com', '8555669854', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fTwBUeuPwzg:APA91bFcqxNY6zVu_6DiZ3ujA29pdW3loQXP7_9L4bbOfgSnCF1h_zUyUyEQNKWUm42miUSxdt2uKtNseamuFBTGaRXMxLpi5tqtN1qWHzYHvuRed_55yV6bKgZHvO5dSuB2Grx7fwSX', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 06:49:16', '2019-01-04 06:49:35', 0, 0),
(312, 'Jackson', 'Jackson', 'jackson@gmail.com', '45632456', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profile_images/312_1546585745.jpg', 0, 0, '', 1, '', 'iOS', '82E334FB0B811F2CA24BF5A6360D033246D427FC13E653E06A67912A2DAD7C27', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 06:53:25', '2019-01-16 10:17:23', 0, 0),
(313, 'Mac1', 'Mac1', 'mac1@gmail.com', '765789889987', 'SA', '966', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '12345', 'customer', 3, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 06:56:00', '2019-01-04 06:58:34', 0, 0),
(314, 'kiran3', 'kiran', 'kiran3@gmail.com', '979454', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'c1LxnGViQ3M:APA91bEsxVyueyH5BdAT1XASJxf-x84SrJiEpaHcPnPPsL2HE1fQPeiGm9cc5YdUy55ai0u22f3fKuAK4yp07U8vlepq3TFkOoTpyeclpGgcp-UYKAyKM9tPki4UK0UdKvtkcYOEV6aA', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 11:02:05', '2019-01-08 06:15:47', 0, 0),
(315, 'Hancy', 'Hancy', 'hancy@gmail.com', '2543685964', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'fMY9FoXXzWs:APA91bENH-3P4YtzW3FDEMq1BaQHmI1RZlnGVWbU0q4KyGA-chGoV0kk-OR6rr7irnCjqpPpXBxDAk3-qrmTC78DuIC2giVsbakkBBwZd1RyYyHq4nG6Y6RHtxsS12AuT2tLxmCI7Pwf', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-04 11:09:39', '2019-01-04 11:10:15', 0, 0),
(316, 'kiran4', 'kiranfhhg', 'kiran4@gmail.com', '98445985', 'KW', '965', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', 'F7B8D422D3CD8908533E388903C8656CC0A394465F46C994DD4F55255FCC5C2B', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-08 05:49:39', '2019-01-08 05:49:39', 0, 0),
(317, 'anjaneyulu', 'anji', 'ag@gmail.com', '9553306672', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'dAf2Wegn-uU:APA91bFQfeZIflGAIdKUklMqvyN5Sm3Y4qky8I293nfUJm4oGvAuTkfmNpg8cRtulZQvW6mRPlL_xWaLV8Iug4_H8uhP_Sg3s_vVAdl-WHwWbWJelddnc3slHODoSGu4jYXV5nHBY02k', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-10 06:28:47', '2019-01-11 12:49:40', 0, 0),
(318, 'testnew', 'test New', 'testnew@gmail.com', '568566977', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'c-kUcVj3Pms:APA91bFJRalNJt2JipafqdgssW6QM1HKSwM0ia6907yinIIXRTOSL3wziMsP6sCTABFmk7dznA2C-M_sFm5o83oXpv2Zlq3kXxqf41GHLim-FFdOIxCjBdc8oYD51HsXB6cXEYvQ1rFj', 'customer', 0, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-10 14:33:25', '2019-01-11 06:39:06', 0, 0),
(319, 'bhushit12', 'bhushit', 'bhushit12@gmail.com', '546646', 'AE', '971', '1234', 1, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'Android', 'e1FOIFlwxFs:APA91bFoBSW9_o1yT5Sa2hd_IjLuyvBk8Ol9jq2GNCvUI4vTIXUiXHax51IwkzQRFhLpvh89m--FGiVjmgoQ3EyaxaMq_ODIooREDhNcWbYqtg_3ZayBeySdJWgIijWfZ9PXI5a-uxPC', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-11 12:29:39', '2019-01-11 12:32:47', 0, 0);
INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone_number`, `country_code`, `phone_code`, `otp`, `otp_verif_flag`, `notification_flag`, `image`, `gender`, `country_id`, `address`, `auth_level`, `auth_id`, `device_type`, `device_token`, `role`, `package_selected`, `user_rating`, `banned`, `password`, `approval_status`, `free_access_flag`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `register_through`, `created_at`, `modified_at`, `comission`, `type`) VALUES
(320, 's1444', 'S1444', 's1444@gmail.com', '7896325410', 'OM', '968', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 1, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2019-01-11 12:33:36', '2019-01-11 13:26:26', 0, 0),
(321, 'saudalbegami', 'saud albegami', 'saudalbegami@gmail.com', '544666872', 'SA', '966', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', 'iOS', '57B39262AAC5E2A907D8BD0F3AC5F7128C93CF555CB266274407634D525F571A', 'customer', 1, 0, 0, 'bWluN2FiZWViaQ==', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2019-01-15 18:43:22', '2019-01-15 18:43:22', 0, 0),
(322, 'rayg90', 'Saud Albegami', 'rayg90@hotmail.com', '550000000', 'SA', '966', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 2, 0, 0, 'MTIzNDU2', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2019-01-15 18:47:32', '2019-01-15 18:47:32', 0, 0),
(323, 'saud123', 'Saud76', 'saud004@hotmal.com', '500000000', 'SA', '966', '1234', 0, 1, 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'customer', 2, 0, 0, 'MTIzNDY1', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2019-01-16 13:26:39', '2019-01-16 13:26:39', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `from_user` (`from_user`),
  ADD KEY `to_user` (`to_user`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1144;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

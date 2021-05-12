-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 04:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT 0,
  `permission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ga_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Google Authenticator Code',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT 1 COMMENT '1: Male, 0: Female',
  `others` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 4 COMMENT '0: Deleted, 1: Draft, 2: Confirm, 3: Disable, 4: Enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `language_id`, `role_id`, `permission`, `ga_code`, `mobile`, `avatar`, `birthday`, `address`, `gender`, `others`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Letha Kutch DDS', 'admin1@gmail.com', NULL, '$2y$10$NztiwFpmgKHlue9HCJi4gOvbLGb5PkO7vOa0TKqOQTqZxR7G/Ib9S', 'BbAjEPq7pFOb9Z8jObfz1PaJP1YnYDAfygpmWEhvPHbn1SoKzfgQBSN4GNUd', NULL, -1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, '2019-09-25 04:32:25', '2019-09-25 04:32:25'),
(2, 'Maria Lebsack', 'admin2@gmail.com', NULL, '$2y$10$KQkgNEYWU7L/3siHqGZ4PebDMm7Q0MB77C0.7mOzvQnmgIUabdTV2', NULL, NULL, -1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, '2019-09-25 04:32:25', '2019-09-25 04:32:25'),
(3, 'Allan Hammes Sr.', 'admin3@gmail.com', NULL, '$2y$10$DnSaSMtpUD2RhxhG5D3T2eLQDaBGkZFpUS3O.IgyGKHCwRERgLrkq', NULL, NULL, -1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, '2019-09-25 04:32:26', '2019-09-25 04:32:26'),
(4, 'Krystina Ritchie', 'admin4@gmail.com', NULL, '$2y$10$XUg1lWAFjwJ/rtJaHmHLSOJsPJDrqcjx6MW.hal9/6ao2EHqtxw0m', NULL, NULL, -1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, '2019-09-25 04:32:26', '2019-09-25 04:32:26'),
(5, 'Maybelle McGlynn', 'admin5@gmail.com', NULL, '$2y$10$ZLtGntUrKg6yjFsw.gMzJ.qJALLdoi2UGdds12ARmizQqDz1bGaVi', NULL, NULL, 0, 'admin.contest,admin.contest.contest,admin.contest.contest.view,admin.contest,admin.contest.contest,admin.contest.contest.create,admin.contest,admin.contest.contest,admin.contest.contest.edit,admin.contest,admin.contest.contest,admin.contest.contest.update,admin.contest,admin.contest.contest,admin.contest.contest.delete,admin.contest,admin.contest.contest,admin.contest.contest.publish,admin.contest,admin.contest.category,admin.contest.category.view,admin.contest,admin.contest.category,admin.contest.category.create,admin.contest,admin.contest.category,admin.contest.category.edit,admin.contest,admin.contest.category,admin.contest.category.update,admin.contest,admin.contest.category,admin.contest.category.delete,admin.contest,admin.contest.category,admin.contest.category.publish,admin.contest,admin.contest.logs,admin.contest.logs.view,admin.contest,admin.contest.statistic,admin.contest.statistic.view,admin.contest,admin.contest.config,admin.contest.config.view,admin.contest,admin.contest.config,admin.contest.config.edit', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 4, '2019-09-25 04:32:26', '2020-02-06 04:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mine_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 3 COMMENT '0: Deleted, 1: Draft, 2: Confirm, 3: Disable, 4: Enable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `language_id`, `title`, `mine_type`, `size`, `url`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'anh-dep-1', 'image', '37232', 'media/2019-10/05/anhdep1-091340.jpg', NULL, NULL, 3, '2019-10-05 02:13:40', '2019-10-05 02:13:40'),
(2, NULL, 'hinh-anh-dep-56_044134752', 'image', '1404059', 'media/2019-10/05/hinhanhdep5604413475-092920.jpg', NULL, NULL, 3, '2019-10-05 02:29:21', '2019-10-05 02:29:21'),
(3, NULL, 'download (1)', 'image', '10515', 'media/2019-10/05/download-1-093646.jpg', NULL, NULL, 3, '2019-10-05 02:36:46', '2019-10-05 02:36:46'),
(4, NULL, 'banner1', 'image', '39020', 'media/2020-02/14/banner1-095437.png', NULL, NULL, 3, '2020-02-14 02:54:38', '2020-02-14 02:54:38'),
(5, NULL, 'banner', 'image', '85921', 'media/2020-02/14/banner-095714.png', NULL, NULL, 3, '2020-02-14 02:57:14', '2020-02-14 02:57:14'),
(6, NULL, 'lich', 'image', '52655', 'media/2020-02/14/lich-095753.png', NULL, NULL, 3, '2020-02-14 02:57:53', '2020-02-14 02:57:53'),
(7, NULL, 'banner2', 'image', '99175', 'media/2020-02/14/banner2-095837.png', NULL, NULL, 3, '2020-02-14 02:58:37', '2020-02-14 02:58:37'),
(8, NULL, 'banner3', 'image', '124785', 'media/2020-02/14/banner3-095919.png', NULL, NULL, 3, '2020-02-14 02:59:19', '2020-02-14 02:59:19'),
(9, NULL, 'favicon', 'image', '4286', 'media/2020-02/19/favicon-174338.ico', NULL, NULL, 3, '2020-02-19 10:43:38', '2020-02-19 10:43:38'),
(10, NULL, 'logo', 'image', '2585', 'media/2020-02/19/logo-180046.png', NULL, NULL, 3, '2020-02-19 11:00:46', '2020-02-19 11:00:46'),
(11, NULL, '227296_218644538147969_1766585_n copy', 'image', '5629', 'media/2020-02/27/22729621864453814796-114808.jpg', NULL, NULL, 3, '2020-02-27 04:48:09', '2020-02-27 04:48:09'),
(12, NULL, 'dam-cuoi-lang-man-cua-mc-hong-phuong-quoc-co', 'image', '203053', 'media/2020-03/02/damcuoilangmancuamch-142232.jpg', NULL, NULL, 3, '2020-03-02 07:22:32', '2020-03-02 07:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `shop_brand`
--

CREATE TABLE `shop_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introtext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fulltext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 4 COMMENT '0: Deleted, 1: Draft, 2: Pending, 3: Disable, 4: Enable',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shop_brand`
--

INSERT INTO `shop_brand` (`id`, `title`, `slug`, `image`, `introtext`, `fulltext`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sam sung', NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL),
(2, 'Sony', NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL),
(3, 'Apple', NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_cart`
--

CREATE TABLE `shop_cart` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_cart`
--

INSERT INTO `shop_cart` (`id`, `user_id`, `product_id`, `quality`, `total_price`, `created_at`, `updated_at`) VALUES
(36, 11, 3, 1, 123123123, '2021-05-10 18:38:59', '2021-05-10 18:38:59'),
(50, 12, 2, 1, 1000000, '2021-05-11 02:41:52', '2021-05-11 02:41:52'),
(51, 1, 2, 2, 2000000, '2021-05-11 07:35:16', '2021-05-11 07:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE `shop_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introtext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fulltext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT 1,
  `status` tinyint(4) DEFAULT 4 COMMENT '0: Deleted, 1: Draft, 2: Pending, 3: Disable, 4: Enable',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`id`, `parent_id`, `title`, `slug`, `image`, `banner`, `banner_link`, `introtext`, `fulltext`, `ordering`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'Điện thoại', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL),
(2, 0, 'Phụ kiện', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL),
(3, 0, 'Tablet', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL),
(4, 0, 'Đồ cũ', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL),
(5, 0, 'Khác', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL),
(6, 2, 'Tai nghe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL),
(7, 2, 'Sạc', NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE `shop_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `is_delete` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shop_order`
--

INSERT INTO `shop_order` (`id`, `grand_total`, `user_id`, `user_name`, `user_email`, `user_mobile`, `user_address`, `user_note`, `admin_note`, `status`, `is_delete`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(37, 2000000, 1, 'hggh', 'user1@gmail.com', '234343', 'fwsf', NULL, NULL, 1, NULL, NULL, NULL, '2021-05-11 18:54:29', '2021-05-11 18:54:29'),
(38, 2000000, 1, 'hggh', 'user1@gmail.com', '234343', 'fwsf', NULL, NULL, 0, NULL, NULL, NULL, '2021-05-11 18:54:30', '2021-05-11 18:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `shop_order_details`
--

CREATE TABLE `shop_order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `product_total` int(11) DEFAULT NULL,
  `product_attr` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 2 COMMENT '0: đã hủy, 1: chờ duyệt, 2: đã duyệt, 3: Đang giao, 4: Đã nhận',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=FIXED;

--
-- Dumping data for table `shop_order_details`
--

INSERT INTO `shop_order_details` (`id`, `order_id`, `product_id`, `product_price`, `product_qty`, `product_total`, `product_attr`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(46, 38, 2, 1000000, 2, 2000000, NULL, 2, NULL, NULL, '2021-05-11 18:54:30', '2021-05-11 18:54:30'),
(45, 37, 2, 1000000, 2, 2000000, NULL, 2, NULL, NULL, '2021-05-11 18:54:29', '2021-05-11 18:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product`
--

CREATE TABLE `shop_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT 0,
  `brand_id` int(11) DEFAULT 0,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_old` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `promotion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introtext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fulltext` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_sale` tinyint(4) DEFAULT 0,
  `is_hot` tinyint(4) DEFAULT 0,
  `is_new` tinyint(4) DEFAULT 0,
  `views` int(11) DEFAULT 1,
  `rating` int(11) DEFAULT 3,
  `status` tinyint(4) DEFAULT 4 COMMENT '0: Deleted, 1: Draft, 2: Pending, 3: Disable, 4: Enable',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shop_product`
--

INSERT INTO `shop_product` (`id`, `category_id`, `brand_id`, `title`, `image`, `gallery`, `price`, `price_old`, `quantity`, `promotion`, `introtext`, `fulltext`, `is_sale`, `is_hot`, `is_new`, `views`, `rating`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Sam sung', 'storage/banner.png', NULL, 1000000, 10000000, 3, NULL, NULL, NULL, 1, 0, 1, 1, 3, 4, NULL, NULL, NULL, NULL),
(3, 1, 2, 'Nony', 'storage/banner.png', NULL, 123123123, NULL, 2, NULL, NULL, NULL, 0, 0, 0, 1, 3, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT 0,
  `gender` tinyint(4) DEFAULT 1 COMMENT '1: Male, 0: Female',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `id_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 2 COMMENT '0: Deleted, 1: Draft, 2: Confirm, 3: Disable, 4: Enable'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `language_id`, `type`, `gender`, `mobile`, `avatar`, `birthday`, `id_number`, `province_id`, `district_id`, `ward_id`, `facebook_id`, `address`, `others`, `created_by`, `updated_by`, `status`) VALUES
(1, 'Eldridge Muller IV', 'user1@gmail.com', NULL, '$2y$10$tvL6AdIoqhkLjO6GyZmdnO0LpKEiLhcz39Ud2hEryfvwtNAJwNrIO', NULL, '2019-09-25 04:32:25', '2021-05-11 03:06:14', NULL, 0, 1, '0123123123', 'media/2019-10/02/download-1-121011.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'HN', NULL, NULL, NULL, 4),
(2, 'Barbara Weber', 'user2@gmail.com', NULL, '$2y$10$doO9dcvGh7ns2iC0lpGywuQaSLbhON1zTj.FgEE8rMsSFmY7iCePi', NULL, '2019-09-25 04:32:25', '2019-09-25 04:36:43', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(3, 'Dr. Dusty Rempel', 'user3@gmail.com', NULL, '$2y$10$x1GCjSsD.D8m01lVbc/IBuBcuz0zrHZ39evdtNgBgBRS6yyJoF/FO', NULL, '2019-09-25 04:32:25', '2019-09-25 04:36:41', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(4, 'Lucious Legros', 'user4@gmail.com', NULL, '$2y$10$6/OaMT/vR6clqQEie46wieKRnzBeRDA9EGsfjGy/XeM70SLlx4.Kq', NULL, '2019-09-25 04:32:25', '2019-09-25 04:32:34', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(5, 'Maryam Doyle', 'user5@gmail.com', NULL, '$2y$10$utRFq5X2K48pXZNoebcdzODofwz6tWwMrj3/7Pi28osADJSIZR4pu', NULL, '2019-09-25 04:32:25', '2019-09-25 04:32:32', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(6, 'Tuấn Bin', 'tuanbinn96@gmail.com', NULL, '', 'Jmw9ggkPEa8gYqqgnaZqGrytbMEuH4Ii4CrDvri5SjJXN1Wb0i0vvL00XR0h', '2020-02-19 10:29:52', '2020-02-19 10:29:52', NULL, 0, 1, NULL, 'media/2020-02/19/1582108191316193.jpg', NULL, NULL, NULL, NULL, NULL, '2422090181398227', NULL, NULL, NULL, NULL, 2),
(7, 'Chung Nguyễn', '1872952162850153@facebook.com', NULL, '', 'O9FshB1ZHcE763ChqhbTvr1LNt5J4zqyC3A6EddVqrwHfojp3wGQCmFAZ11I', '2020-02-19 12:19:53', '2020-02-19 12:19:53', NULL, 0, 1, NULL, 'media/2020-02/19/1582114793738153.jpg', NULL, NULL, NULL, NULL, NULL, '1872952162850153', NULL, NULL, NULL, NULL, 2),
(8, 'Nguyễn Đức Nhân', 'nguyenducnhan159@gmail.com', NULL, '$2y$10$fDoReyf5b5rhnv.yWekZqu05N0MTamT8lSXDeUKGVKZ77.bL6ELk2', NULL, '2021-05-09 21:01:19', '2021-05-09 21:01:19', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(9, 'ádasdasd', 'asdas@ádas', NULL, '$2y$10$RwzweRwdjpInK.6RiZyoOO9d.bVkLPAiS//gqtmsdvs6/rHUNJOdi', NULL, '2021-05-09 21:08:17', '2021-05-09 21:08:17', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(10, 'Nguyễn Văn A', 'aaa@aaa', NULL, '$2y$10$dF1NaT7h/duuu8Tztee44OE9i/YhXPgf/pRt0XJMfGdZlCprAiHaG', NULL, '2021-05-09 21:12:01', '2021-05-09 21:12:01', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(11, 'Nhân', 'abc@abc', NULL, '$2y$10$nSP31BXkUf7xttINe1q8weG6QMHZYGr4PPSO4UV3zV5RSC0FS8/FG', NULL, '2021-05-10 17:16:37', '2021-05-10 17:16:37', NULL, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(12, 'Nguyễn Đức Nhân', 'nhan@gmail.com', NULL, '$2y$10$JEvOHUpgDKtsH.S34gJCyuGZA9LOTNkI4531zk0273m3ZQFvBSzrK', NULL, '2021-05-10 22:29:21', '2021-05-11 01:50:28', NULL, 0, 1, '0123123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HN', NULL, NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `admins_email_unique` (`email`) USING BTREE;

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shop_brand`
--
ALTER TABLE `shop_brand`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shop_cart`
--
ALTER TABLE `shop_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shop_order`
--
ALTER TABLE `shop_order`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shop_order_details`
--
ALTER TABLE `shop_order_details`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shop_product`
--
ALTER TABLE `shop_product`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shop_brand`
--
ALTER TABLE `shop_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop_cart`
--
ALTER TABLE `shop_cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shop_order`
--
ALTER TABLE `shop_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `shop_order_details`
--
ALTER TABLE `shop_order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shop_product`
--
ALTER TABLE `shop_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

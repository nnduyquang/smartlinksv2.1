-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 10:20 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartlinksv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_TD` tinyint(1) NOT NULL DEFAULT '1',
  `account_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `campaign_is_pause` tinyint(1) NOT NULL DEFAULT '0',
  `account_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2017-08-26 05:56:05', '2017-08-26 05:56:05'),
(2, 'User', '2017-08-26 05:56:05', '2017-08-26 05:56:05'),
(3, 'Tin Tức', '2017-08-26 06:06:08', '2017-08-26 06:06:08'),
(4, 'Nhân Viên', '2017-08-26 18:21:15', '2017-08-26 18:21:15'),
(5, 'Cấu Hình', '2017-08-27 04:06:10', '2017-08-27 04:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'email-receive', 'trangnh.sml@gmail.com', 'Cấu Hình Email Nhận Báo Giá', 1, 1, '2017-08-26 06:53:20', '2017-08-26 07:20:54'),
(2, 'email-sender-subject', 'Re:Công Ty TNHH Truyền Thông Và Đầu Tư Smartlinks', 'Cấu Hình Subject Gửi Khách Hàng', 2, 1, '2017-08-26 06:53:20', '2017-08-26 07:20:55'),
(3, 'email-sender-from', 'Smartlinks', 'Cấu Hình From Gửi Khách Hàng', 3, 1, '2017-08-26 06:53:21', '2017-08-26 07:20:55'),
(4, 'email-receive-subject', 'BÁO GIÁ MỚI TỪ KHÁCH HÀNG', 'Cấu Hình Subject Nhận Báo Giá', 4, 1, '2017-08-26 06:53:21', '2017-08-26 07:20:55'),
(5, 'email-receive-from', 'Smartlinks', 'Cấu Hình From Nhận Báo Giá', 5, 1, '2017-08-26 06:53:21', '2017-08-26 07:20:55'),
(6, 'email-signatures', '<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">-- </span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">__________________________________________________________________</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;"> </span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">V&otilde; Thị Ngọc Yến</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">Nh&acirc;n Vi&ecirc;n Kinh Doanh</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">__________________________________________________________________</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;"> </span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">C&ocirc;ng Ty TNHH Truyền Th&ocirc;ng V&agrave; Đầu Tư Smartlinks</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">Địa chỉ: 20/13 Nguyễn Trường Tộ, P.12, Quận 4, TPHCM</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">Mobile: (+84) 911.177.131</span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">Email: <a href="mailto:yenvtn.sml@gmail.com" style="color:blue; text-decoration:underline" target="_blank">yenvtn.sml@gmail.com</a></span></span></pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n\r\n&nbsp;</pre>\r\n\r\n<pre style="margin-left:0cm; margin-right:0cm">\r\n<span style="font-size:10pt"><span style="font-family:&quot;Courier New&quot;">Website: <a href="http://smartlinks.vn" style="color:blue; text-decoration:underline" target="_blank">http://smartlinks.vn</a></span></span></pre>', 'Cấu Hình Chữ Ký', 7, 1, '2017-08-26 06:53:21', '2017-08-26 07:20:55'),
(7, 'email-sender-content', '<h1 style="margin-left:0cm; margin-right:0cm"><span style="font-size:24pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ch&uacute;ng T&ocirc;i Đ&atilde; Nhận Được Mail, Xin Ch&acirc;n Th&agrave;nh Cảm Ơn</span></span></h1>', 'Cấu Hình Nội Dung Gửi Khách Hàng', 6, 1, '2017-08-26 06:53:21', '2017-08-26 07:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_skype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_duty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_note` longtext COLLATE utf8mb4_unicode_ci,
  `emp_order` int(11) NOT NULL DEFAULT '1',
  `emp_is_work` tinyint(1) NOT NULL DEFAULT '1',
  `emp_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `emp_name`, `emp_phone`, `emp_email`, `emp_skype`, `emp_duty`, `emp_note`, `emp_order`, `emp_is_work`, `emp_image`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Quang', '0907468264', 'nnduyquang@gmail.com', 'nnduyquang', 'Chuyên Viên Kỹ Thuật', '<p>Đẹp Trai</p>', 4, 1, 'images/uploads/images/Emps/16601688_10206450883149807_3202604677948432802_o.jpg', '2017-08-27 03:09:40', '2017-08-30 02:26:55'),
(2, 'Ms. Thư', '0914348131', 'athunguyen.dn@gmail.com', 'athunguyen.dn', 'Chuyên Viên Kinh Doanh', '<p>Đẹp l&agrave; được</p>', 3, 1, 'images/uploads/images/Emps/20746243_10211678195704646_1083256869000324251_o.jpg', '2017-08-27 03:12:42', '2017-08-30 02:26:40'),
(3, 'Ms. Yến', '0911177131', 'yenvtn.sml@gmail.com', 'sale02_slm', 'Chuyên Viên Kinh Doanh', NULL, 1, 1, 'images/uploads/images/Emps/team_04.png', '2017-08-30 02:23:01', '2017-08-30 02:49:02'),
(4, 'Ms. Trang', '(028)66 83 00 91', 'trangnh.sml@gmail.com', 'sale01_slm', 'Chuyên Viên CSKH', NULL, 2, 1, 'images/uploads/images/Emps/team_04.png', '2017-08-30 02:26:25', '2017-08-30 08:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_final` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_End` tinyint(1) NOT NULL DEFAULT '0',
  `campaign_id` int(10) UNSIGNED NOT NULL,
  `keyword_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_26_112215_create_entrust_setup_tables', 1),
(5, '2017_08_26_131015_create_configs_table', 3),
(8, '2017_08_27_011825_create_employees_table', 4),
(9, '2017_08_27_105513_create_sliders_table', 5),
(10, '2017_09_28_080614_create_category_posts_table', 6),
(11, '2017_08_26_130321_create_news_table', 7),
(12, '2017_08_26_130321_create_posts_table', 8),
(14, '2017_10_18_083008_create_accounts_table', 9),
(15, '2017_10_18_083200_create_campaigns_table', 9),
(16, '2017_10_18_083648_create_keywords_table', 9),
(17, '2017_10_18_085841_create_histories_table', 9),
(18, '2017_12_12_143147_create_menus_table', 10),
(19, '2017_12_12_143904_edit_posts_table', 11);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2017-08-26 05:57:45', '2017-08-26 05:57:45'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2017-08-26 05:57:45', '2017-08-26 05:57:45'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2017-08-26 05:57:45', '2017-08-26 05:57:45'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2017-08-26 05:57:45', '2017-08-26 05:57:45'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2017-08-26 05:57:45', '2017-08-26 05:57:45'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2017-08-26 05:57:45', '2017-08-26 05:57:45'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2017-08-26 05:57:46', '2017-08-26 05:57:46'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2017-08-26 05:57:46', '2017-08-26 05:57:46'),
(9, 'posts-list', 'Xem Toàn Bộ Tin Tức', 'Được Xem Toàn Bộ Tin Tức', 3, '2017-08-26 06:06:44', '2017-08-26 06:06:44'),
(10, 'posts-create', 'Tạo Tin Tức Mới', 'Được Tin Tức Mới', 3, '2017-08-26 06:06:44', '2017-08-26 06:06:44'),
(11, 'posts-edit', 'Cập Nhật Tin Tức', 'Được Cập Nhật Tin Tức', 3, '2017-08-26 06:06:44', '2017-08-26 06:06:44'),
(12, 'posts-delete', 'Xóa Tin Tức', 'Được Xóa Tin Tức', 3, '2017-08-26 06:06:44', '2017-08-26 06:06:44'),
(13, 'emp-list', 'Xem Toàn Bộ Nhân Viên', 'Được Xem Toàn Bộ Nhân Viên', 4, '2017-08-26 18:23:46', '2017-08-26 18:23:46'),
(14, 'emp-create', 'Thêm Mới Nhân Viên', 'Được Thêm Mới Nhân Viên', 4, '2017-08-26 18:23:46', '2017-08-26 18:23:46'),
(15, 'emp-edit', 'Cập Nhật Thông Tin Nhân VIên', 'Được Cập Nhật Thông Tin Nhân VIên', 4, '2017-08-26 18:23:46', '2017-08-26 18:23:46'),
(16, 'emp-delete', 'Xóa Nhân Viên', 'Được Xóa Nhân Viên', 4, '2017-08-26 18:23:46', '2017-08-26 18:23:46'),
(17, 'config-list', 'Toàn Quyền Cấu Hình', 'Được Toàn Quyền Cấu Hình', 5, '2017-08-27 04:06:43', '2017-08-27 04:06:43'),
(18, 'config-create', 'Thêm Mới Cấu Hình', 'Được Thêm Mới Cấu Hình', 5, '2017-08-27 04:06:43', '2017-08-27 04:06:43'),
(19, 'config-edit', 'Cập Nhật Cấu Hình', 'Được Cập Nhật Cấu Hình', 5, '2017-08-27 04:06:44', '2017-08-27 04:06:44'),
(20, 'config-delete', 'Xóa Cấu Hình', 'Được Xóa Cấu Hình', 5, '2017-08-27 04:06:44', '2017-08-27 04:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
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
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isPost` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `menu_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2017-08-26 05:40:43', '2017-08-26 05:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_order` int(11) NOT NULL DEFAULT '1',
  `slider_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_order`, `slider_is_active`, `slider_image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'images/uploads/images/Slider/googleadwords.jpg', '2017-08-27 04:25:46', '2017-08-30 02:18:29'),
(2, 2, 1, 'images/uploads/images/Slider/google_adwords_html5_picture1.png', '2017-08-27 04:38:07', '2017-08-30 02:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$uM5fRQBa7zKsDAHP/Vaid.P7LihKYXlRZu.4QZeOou5.5HXrMglOW', NULL, '2017-08-26 05:22:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_account_id_foreign` (`account_id`);

--
-- Indexes for table `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `histories_campaign_id_foreign` (`campaign_id`),
  ADD KEY `histories_keyword_id_foreign` (`keyword_id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_campaign_id_foreign` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `histories_keyword_id_foreign` FOREIGN KEY (`keyword_id`) REFERENCES `keywords` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

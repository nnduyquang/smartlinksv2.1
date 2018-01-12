-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 12:49 PM
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
(5, 'Cấu Hình', '2017-08-27 04:06:10', '2017-08-27 04:06:10'),
(6, 'Menu', '2017-12-12 12:50:20', '2017-12-12 12:50:20'),
(7, 'Page', '2018-01-12 02:04:40', '2018-01-12 02:04:40'),
(8, 'Post', '2018-01-12 02:04:40', '2018-01-12 02:04:40');

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
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `path`, `level`, `order`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Thiết Kế Website', 'thiet-ke-website', 0, 3, 0, '2017-12-13 14:34:47', '2017-12-18 06:41:07'),
(2, 'Giới Thiệu', 'gioi-thieu', 0, 1, 0, '2017-12-14 00:26:27', '2017-12-18 06:37:48'),
(3, 'Google Adwords', 'google-adwords', 0, 2, 0, '2017-12-14 01:26:18', '2017-12-18 06:40:52'),
(4, 'Dịch Vụ', 'dich-vu', 0, 3, 0, '2017-12-14 01:36:03', '2017-12-18 07:33:41'),
(5, 'Dịch Vụ Phụ 1', 'dich-vu-phu-1', 1, 2, 4, '2017-12-14 01:36:55', '2017-12-18 06:41:18'),
(6, 'Dịch Vụ Phụ 2', 'dich-vu-phu-2', 1, 1, 4, '2017-12-14 01:37:12', '2017-12-14 01:37:12'),
(7, 'Hỏi Đáp Website', 'hoi-dap-website', 1, 1, 1, '2017-12-14 01:38:45', '2017-12-18 07:29:43'),
(8, 'Dịch Vụ Cơ Bản', 'dich-vu-co-ban', 2, 1, 6, '2017-12-14 09:35:02', '2017-12-18 07:41:45'),
(9, 'Liên Hệ', 'lien-he', 0, 4, 0, '2017-12-18 06:41:45', '2017-12-18 07:31:31'),
(10, 'Hỏi Đáp Google Adwords', 'hoi-dap-google-adwords', 1, 1, 3, '2017-12-18 07:34:19', '2017-12-18 07:34:19'),
(11, 'Liên Hệ 2', 'lien-he-2', 0, 5, 0, '2017-12-18 07:35:56', '2017-12-18 07:36:06'),
(12, 'Liên Hệ 3', 'lien-he-3', 0, 6, NULL, '2017-12-18 07:36:30', '2017-12-18 07:36:30');

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
(20, 'config-delete', 'Xóa Cấu Hình', 'Được Xóa Cấu Hình', 5, '2017-08-27 04:06:44', '2017-08-27 04:06:44'),
(21, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 6, '2017-12-12 12:51:48', '2017-12-12 12:51:48'),
(22, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 6, '2017-12-12 12:51:48', '2017-12-12 12:51:48'),
(23, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 6, '2017-12-12 12:51:48', '2017-12-12 12:51:48'),
(24, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 6, '2017-12-12 12:51:48', '2017-12-12 12:51:48'),
(25, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 7, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(26, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 7, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(27, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 7, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(28, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 7, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(29, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Viết', 8, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(30, 'post-create', 'Thêm Mới Viết', 'Được Thêm Mới Viết', 8, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(31, 'post-edit', 'Cập Nhật Viết', 'Được Cập Nhật Viết', 8, '2018-01-12 02:06:44', '2018-01-12 02:06:44'),
(32, 'post-delete', 'Xóa Viết', 'Được Xóa Viết', 8, '2018-01-12 02:06:44', '2018-01-12 02:06:44');

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
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `seo_title`, `seo_description`, `post_type`, `isActive`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Youtube Ads', 'youtube-ads', '<p>Youtube Ads</p>', '<p>Theo số liệu thống k&ecirc; th&igrave; mỗi th&aacute;ng c&oacute; hơn 1 tỷ người dung, d&agrave;nh ra 6 tỷ giờ để xem video tr&ecirc;n Youtube. Thu h&uacute;t h&agrave;ng triệu lượt xem n&ecirc;n Youtube đ&atilde; trở th&agrave;nh một trong những thị trường hấp dẫn của c&aacute;c nh&agrave; đầu tư quảng c&aacute;o v&agrave; c&aacute;c doanh nghiệp muốn tăng thị phần của m&igrave;nh bằng c&aacute;ch đăng quảng c&aacute;o tr&ecirc;n youtube. Ngo&agrave;i ra, hơn một nửa số lượt xem video tr&ecirc;n Youtube l&agrave; đến từ c&aacute;c thiết bị di động. Điều n&agrave;y cho thấy c&oacute; rất nhiều kh&aacute;ch h&agrave;ng tiềm năng đối với c&aacute;c doanh nghiệp.<br />\r\nV&agrave; Youtube l&agrave; một mạng x&atilde; hội video trực tuyến lớn nhất thế giới v&agrave; l&agrave; trang t&igrave;m kiếm lớn thứ 2 sau Google.</p>\r\n\r\n<p><strong>Lợi &iacute;ch của&nbsp;quảng c&aacute;o tr&ecirc;n Youtube trong kinh doanh.</strong></p>\r\n\r\n<p>-Quảng c&aacute;o tr&ecirc;n youtube ch&iacute;nh l&agrave; cầu nối giữa nh&agrave; quảng c&aacute;o, doanh nghiệp v&agrave; người xem.</p>\r\n\r\n<p>-Gi&uacute;p kết nối với kh&aacute;ch h&agrave;ng tiềm năng theo c&aacute;ch độc đ&aacute;o v&agrave; đa dạng.</p>\r\n\r\n<p>-Doanh nghiệp c&oacute; thể chia sẻ th&ocirc;ng tin, lợi &iacute;ch của sản phẩm hoặc dịch vụ mang lại.</p>\r\n\r\n<p>-Tạo chiến dịch tr&ecirc;n quảng c&aacute;o youtube chỉ trong &iacute;t ph&uacute;t.</p>\r\n\r\n<p>-Tiếp cận đ&uacute;ng đối tượng, tiết kiệm v&agrave; hiệu quả.</p>\r\n\r\n<p><strong><em>Youtube Video Ads (Qu</em></strong><strong><em>ả</em></strong><strong><em>ng c&aacute;o trong video c</em></strong><strong><em>ủ</em></strong><strong><em>a Youtube)</em></strong><em>&nbsp;</em><strong>bao g</strong><strong>ồ</strong><strong>m:</strong></p>\r\n\r\n<p><strong>1. YouTube Homepage (Quảng c&aacute;o hiển thị tr&ecirc;n trang chủ YouTube)</strong></p>\r\n\r\n<p>Quảng c&aacute;o xuất hiện ngay trang chủ Youtube rất bắt mắt v&agrave; thu h&uacute;t người xem, c&oacute; t&iacute;nh tương t&aacute;c cao trong 24h. Người xem dễ nh&igrave;n thấy quảng c&aacute;o n&ecirc;n c&oacute; lượt xem, tỉ lệ nhấp chuột cao v&agrave; t&ugrave;y chọn điều chỉnh kh&ocirc;ng giới hạn đồng thời c&oacute; thể tiếp thị lại.</p>\r\n\r\n<p><img alt="YouTube_Homepage1" src="http://smartlinks.vn/wp-content/uploads/2016/01/YouTube_Homepage1.png" style="height:576px; width:1114px" /></p>\r\n\r\n<p><strong>2. YouTube Video Ads (Quảng c&aacute;o trong video của YouTube)</strong></p>\r\n\r\n<p>Định dạng&nbsp;<strong>Trueview In-Stream,</strong>&nbsp;quảng c&aacute;o được ph&aacute;t trước gi&uacute;p bạn tiếp cận người d&ugrave;ng khi họ xem video nhưng người d&ugrave;ng chỉ c&oacute; thể bỏ qua sau 5 gi&acirc;y quảng c&aacute;o. Nh&agrave; quảng c&aacute;o chỉ phải trả tiền sau 30 gi&acirc;y hoặc khi kết th&uacute;c video.</p>\r\n\r\n<p><img alt="Trueview_In_Stream2" src="http://smartlinks.vn/wp-content/uploads/2016/01/Trueview_In_Stream2.png" style="height:579px; width:786px" /></p>\r\n\r\n<p><strong>In-Stream Non-skippable(kh&ocirc;ng thể bỏ qua)</strong>&nbsp;l&agrave; dạng quảng c&aacute;o xuất hiện tr&ecirc;n c&aacute;c trang YouTube v&agrave; c&aacute;c wesbstie thuộc hệ thống Display của Google c&oacute; hỗ trợ quảng c&aacute;o video.&nbsp;Người d&ugrave;ng kh&ocirc;ng thể bỏ qua quảng c&aacute;o.</p>\r\n\r\n<p><img alt="In_Stream_Non_skippable_2" src="http://smartlinks.vn/wp-content/uploads/2016/01/In_Stream_Non_skippable_2.png" style="height:663px; width:877px" /></p>\r\n\r\n<p><strong>In-Stream Preroll Ads</strong>&nbsp;l&agrave; h&igrave;nh thức quảng c&aacute;o xuất hiện kh&ocirc;ng chỉ tr&ecirc;n YouTube m&agrave; c&ograve;n những trang embed(nh&uacute;ng) video từ YouTube. Người d&ugrave;ng kh&ocirc;ng thể bỏ qua quảng c&aacute;o cho đến hết thời gian mặc định.</p>\r\n\r\n<p><img alt="In_Stream_Preroll_Ads_2" src="http://smartlinks.vn/wp-content/uploads/2016/01/In_Stream_Preroll_Ads_2.png" style="height:652px; width:873px" /></p>\r\n\r\n<p><strong>In-Stream Select(lựa chọn)</strong>&nbsp;l&agrave; dạng Quảng c&aacute;o xuất hiện tr&ecirc;n YouTube v&agrave; c&aacute;c website nh&uacute;ng link video từ YouTube, trong đ&oacute; người d&ugrave;ng c&oacute; thể bỏ qua quảng c&aacute;o.</p>\r\n\r\n<p><img alt="instream3" src="http://smartlinks.vn/wp-content/uploads/2016/01/instream3.png" style="height:653px; width:1022px" /></p>\r\n\r\n<p><strong>3. YouTube Display Ads (Quảng c&aacute;o hiển thị tr&ecirc;n YouTube)</strong></p>\r\n\r\n<p><strong><em>TrueView In-Display on&nbsp;Watch page&nbsp;</em></strong>l&agrave; dạng&nbsp;<strong>quảng c&aacute;o YouTube</strong>&nbsp;xuất hiện b&ecirc;n cạnh một video khi bạn xem. Nh&agrave; quảng c&aacute;o phải trả tiền khi người d&ugrave;ng ấn v&agrave;o v&agrave; xem video.</p>\r\n\r\n<p><img alt="instream4" src="http://smartlinks.vn/wp-content/uploads/2016/01/instream4.png" style="height:337px; width:584px" /></p>\r\n\r\n<p>C&ograve;n<em>&nbsp;</em><em><strong>TrueView In-Display on Search Page</strong></em><strong>&nbsp;</strong>th&igrave; xuất hiện khi người d&ugrave;ng t&igrave;m kiếm, nh&agrave; quảng c&aacute;o phải trả tiền khi người d&ugrave;ng ấn v&agrave;o v&agrave; xem video.</p>\r\n\r\n<p><img alt="instream5" src="http://smartlinks.vn/wp-content/uploads/2016/01/instream5.PNG" style="height:482px; width:966px" /></p>\r\n\r\n<p><strong>Standard Display</strong>&nbsp; xuất hiện b&ecirc;n cạnh một video khi bạn xem hoặc t&igrave;m kiếm tr&ecirc;n YouTube. Nh&agrave; quảng c&aacute;o phải trả tiền khi người d&ugrave;ng ấn v&agrave;o banner quảng c&aacute;o, link đ&iacute;ch c&oacute; thể l&agrave; YouTube channel, video hoặc website của bạn.</p>\r\n\r\n<p><img alt="Standard_Display" src="http://smartlinks.vn/wp-content/uploads/2016/01/Standard_Display.png" style="height:580px; width:1075px" /></p>\r\n\r\n<p><strong>In-Video (Overlay)</strong>&nbsp;xuất hiện trong luồng khi bạn xem một video. Nh&agrave; quảng c&aacute;o phải trả tiền khi người d&ugrave;ng ấn v&agrave;o banner quảng c&aacute;o, link đ&iacute;ch c&oacute; thể l&agrave; YouTube channel, video hoặc website của bạn.</p>\r\n\r\n<p><img alt="instream6" src="http://smartlinks.vn/wp-content/uploads/2016/01/instream6.png" style="height:657px; width:894px" /><strong>4.YouTube Brand Channel&nbsp;</strong>l&agrave; mạng x&atilde; hội gi&uacute;p doanh nghiệp lưu trữ v&agrave; truyền tải video đến đ&ocirc;ng đảo kh&aacute;ch h&agrave;ng, với giao diện t&ugrave;y chỉnh một c&aacute;ch chuy&ecirc;n nghiệp v&agrave; đẳng cấp tạo n&eacute;t c&aacute; t&iacute;nh ri&ecirc;ng. Quảng c&aacute;o n&agrave;y c&oacute; chi ph&iacute; rất cao.</p>\r\n\r\n<p><img alt="instream7" src="http://smartlinks.vn/wp-content/uploads/2016/01/instream7.png" style="height:292px; width:595px" /></p>\r\n\r\n<p><strong>5. Quảng b&aacute; với GDN</strong></p>\r\n\r\n<p><strong>Hover to Play</strong>&nbsp;l&agrave; hệ&nbsp;thống&nbsp;trang&nbsp;xuất&nbsp;hiện tr&ecirc;n GDN&nbsp;network (Bao gồm YouTube v&agrave; xuất hiện dạng banner).</p>\r\n\r\n<p><img alt="instream8" src="http://smartlinks.vn/wp-content/uploads/2016/01/instream8.png" style="height:529px; width:625px" /></p>\r\n\r\n<p><strong>Hover to Expand</strong>&nbsp;xuất hiện tại c&aacute;c vị tr&iacute; cho ph&eacute;p đặt quảng c&aacute;o của c&aacute;c trang thuộc GDN, với thời lượng tối đa 4 ph&uacute;t (tốt nhất trong 30 gi&acirc;y).</p>\r\n\r\n<p><strong>Click to Expand</strong>&nbsp;c&oacute; vị&nbsp;tr&iacute;&nbsp;xuất&nbsp;hiện banner xuất hiện tại c&aacute;c vị tr&iacute; cho ph&eacute;p đặt quảng c&aacute;o của c&aacute;c trang thuộc GDN, cũng c&oacute; thời lượng tối đa 4 ph&uacute;t (tốt nhất trong 30 gi&acirc;y). &nbsp; &nbsp;</p>\r\n\r\n<p><em>Để được tư vấn s&acirc;u hơn, cụ thể hơn, bạn c&oacute; thể li&ecirc;n lạc với ch&uacute;ng t&ocirc;i.</em></p>', '0', 'Youtube Ads', '<p>Youtube Ads</p>', 0, 1, 1, '2018-01-12 03:27:27', '2018-01-12 03:27:27');

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
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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

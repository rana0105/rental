-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2018 at 06:36 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `acrents`
--

CREATE TABLE `acrents` (
  `id` int(10) UNSIGNED NOT NULL,
  `acclient_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acshop_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acsqu_feet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acper_rent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_tamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acrents`
--

INSERT INTO `acrents` (`id`, `acclient_name`, `acshop_no`, `acsqu_feet`, `acper_rent`, `ac_tamount`, `ac_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test', '1002', '234', '23', '5382', '2017-07-29', 1, '2017-07-29 03:14:08', '2017-07-29 03:14:08'),
(2, 'test', '1002', '234', '23', '5382', '2017-07-29', 1, '2017-07-29 03:14:49', '2017-07-29 03:14:49'),
(3, 'rtr', '667', '56', '45', '2520', '2017-07-29', 0, '2017-07-29 03:42:26', '2017-07-29 03:42:26'),
(4, 'test8', '567', '50', '100', '5000', '2017-07-31', 0, '2017-07-30 21:55:04', '2017-07-30 21:55:04'),
(5, 'Ajgor Ali', '1015', '300', '15', '4500', '2017-07-31', 1, '2017-07-31 00:14:39', '2017-07-31 00:14:39'),
(6, 'Ajgor Ali', '1015', '250', '25', '6250', '2017-07-31', 0, '2017-07-31 00:27:40', '2017-07-31 00:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_cname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_name`, `branch_cname`, `account_num`, `created_at`, `updated_at`) VALUES
(1, 'Sonali', 'Rampura', '23445768796', '2017-07-16 22:57:15', '2017-07-17 00:22:50'),
(2, 'Brack Bank', 'Khilkhet', '9308308303', '2017-07-16 22:58:04', '2017-07-17 00:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `billpays`
--

CREATE TABLE `billpays` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenant_id` int(10) UNSIGNED DEFAULT NULL,
  `shop_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_pdate` date DEFAULT NULL,
  `bi_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_chdate` date DEFAULT NULL,
  `bi_elec` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_water` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_gas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_schar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bi_tamount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billpays`
--

INSERT INTO `billpays` (`id`, `tenant_id`, `shop_id`, `bi_amount`, `bi_pdate`, `bi_type`, `bi_chdate`, `bi_elec`, `bi_water`, `bi_gas`, `bi_schar`, `bi_tamount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '21770', '2017-07-24', 'Cash', '2017-07-24', '8', '45', '45', '343', '22211', 1, '2017-07-24 09:28:00', '2017-07-24 09:28:00'),
(2, 1, '6', '6615', '2017-07-11', 'Cash', '2017-07-25', '50', '78', '78', '66', '6887', 0, '2017-07-24 20:38:57', '2017-07-24 20:38:57'),
(3, 2, '2', '17469', '2017-07-25', 'Cheque', '2017-07-26', '34', '45', '454', '45', '18047', 0, '2017-07-24 20:41:55', '2017-07-24 20:41:55'),
(4, 3, '3', '1755', '2017-07-25', 'Cash', '2017-07-25', '36', '35', '56', '33', '1915', 1, '2017-07-24 20:43:21', '2017-07-24 20:43:21'),
(5, 3, '3', '1755', '2017-07-27', 'Cheque', '2017-07-27', '1000', '500', '900', '350', '4505', 1, '2017-07-26 23:59:20', '2017-07-26 23:59:20'),
(6, 9, '4', '9450', '2017-07-27', 'Cash', '2017-07-27', '1500', '450', '900', '600', '12900', 0, '2017-07-27 00:07:58', '2017-07-27 00:07:58'),
(7, 1, '5', '3600', '2017-07-20', 'Cheque', '2017-07-28', '5', '5', '5', '5', '3620', 1, '2017-07-27 02:45:03', '2017-07-27 02:45:03'),
(8, 1, '1', '18170', '2017-07-28', 'Cash', '2017-07-28', '5', '5', '5', '5', '18190', 1, '2017-07-27 23:15:05', '2017-07-27 23:15:05'),
(9, 1, '6', '3015', '2017-08-02', 'Cash', '2017-08-02', '30', '20', '25', '15', '3105', 1, '2017-08-01 22:18:46', '2017-08-01 22:18:46'),
(10, 2, '4', '17469', '2018-02-17', 'Cash', '2018-02-17', '500', '300', '800', '500', '19569', 1, '2018-02-17 02:02:24', '2018-02-17 02:02:24'),
(11, 1, '6', '3015', '2018-02-19', 'Cheque', '2018-02-20', '200', '300', '500', '400', '4415', 1, '2018-02-18 22:39:51', '2018-02-18 22:39:51'),
(12, 1, '6 1 5', '24785', '2019-01-01', 'Cash', NULL, '9898', '54', '65', '87', '34889', 1, '2018-04-01 01:55:47', '2018-04-01 01:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_des`, `created_at`, `updated_at`) VALUES
(1, 'Utility', 'Office Cost', '2017-07-16 20:29:03', '2017-07-16 20:29:03'),
(2, 'Salary', 'Employee Cost', '2017-07-16 20:29:51', '2017-07-16 20:29:51'),
(3, 'Office Cost', 'Cost for office', '2017-07-16 23:29:46', '2017-07-16 23:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_cname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownner_cname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `short_cname`, `ownner_cname`, `c_address`, `c_phone`, `c_mobile`, `c_fax`, `c_email`, `c_web`, `created_at`, `updated_at`) VALUES
(1, 'Amader somoy', 'Somoy', 'Faiz Ali', 'Kaoran Bazar , Dhaka', '0273873', '01738939373', '9083683', 'amadersomoy@somoy.bd', 'http://www.amadershomoy.biz', '2017-07-16 02:45:48', '2017-07-16 02:45:48'),
(2, 'Lion Group', 'Lion', 'Abbas Ali Khan', 'Gulshan, Dhaka', '02839937', '01914898397', '7839803', 'lion@hotmail.com', 'http://localhost:8000/companies', '2017-07-16 02:48:16', '2017-07-16 02:48:16'),
(3, 'Basandhara Group', 'BG', 'Saiman Rahman', 'Basandhara, Dhaka', '029873983', '01783973993', '0937937', 'basandhara@group.bd', 'http://localhost:8000/companies', '2017-07-17 21:02:33', '2017-07-17 21:02:33'),
(4, 'Jamuna Group', 'JG', 'Faisal Sarakar', 'Dhaka', '02749739', '01721073973', '063973', 'jamuna@jamuna.bd', 'http://localhost:8000/companies', '2017-07-17 21:12:40', '2017-07-17 21:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `complexes`
--

CREATE TABLE `complexes` (
  `id` int(10) UNSIGNED NOT NULL,
  `complex_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plex_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plex_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plex_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plex_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plex_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complexes`
--

INSERT INTO `complexes` (`id`, `complex_name`, `plex_address`, `plex_phone`, `plex_mobile`, `plex_fax`, `plex_email`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Regency', 'Khilkhet', '0283973', '0173873832', '93833', 'dhaka@regency.com', 2, '2017-07-16 02:50:39', '2017-07-25 07:38:59'),
(2, 'Van Plazza', 'Banani, Dhaka', '02827847', '0163973733', '3830843', 'van@plazza.bd', 1, '2017-07-16 02:55:10', '2017-07-16 02:55:10'),
(3, 'Jamuna Future Park', 'Basandhara', '02836838', '0182639739', '73973038', 'jamuna@gmail.com', 4, '2017-07-17 21:05:30', '2017-07-17 21:13:49'),
(4, 'Basandhara City', 'Kaoran Bazar', '02838347', '01917398393', '703849', 'bcity@basandhara.com', 3, '2017-07-17 21:10:58', '2017-07-17 21:10:58'),
(5, 'Subastu Center', 'Shajadpur', '02848383', '0179379378', '0374934', 'subastu@subastu.bd', 2, '2017-07-17 21:17:25', '2017-07-17 21:17:25'),
(6, 'Fateh Center', 'Dhaka', '02740874', '0159274784', '0364748', 'fateh@center.com', 1, '2017-07-17 22:35:36', '2017-07-17 22:35:36'),
(7, 'Rahat Center', 'Uttara', '027486846', '0163873883', '0894748', 'rahat@center.com', 3, '2017-07-26 23:07:46', '2017-07-26 23:07:46'),
(8, 'North Tower', 'Ajompur', '02747393', '01917864873', '047836', 'north@tower.com', 4, '2017-07-26 23:09:19', '2017-07-26 23:09:19'),
(9, 'Shadhinota Tower', 'Jahangir Gate', '028483783', '01592747947', '0749739', 'shadhinota@tower.com', 1, '2017-07-26 23:13:02', '2017-07-26 23:13:02'),
(10, 'Rafa plaza', 'Khilkhet', '028773973', '0183847949', '028748', 'rafa@plaza.com', 2, '2017-07-26 23:14:44', '2017-07-26 23:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_father` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_hus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_mother` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_g` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `e_name`, `e_father`, `e_hus`, `e_mother`, `date_birth`, `nationality`, `blood_g`, `m_status`, `qualification`, `designation`, `job_status`, `e_salary`, `e_mobile`, `e_email`, `join_date`, `pre_address`, `per_address`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Manik', 'Salauddin', 'N/A', 'Mariom Bibi', '2017-06-01', 'Bangladeshi', 'B+', 'Married', 'BBA', 'Acountant', 'Inactive', '58000', '01737396473', 'manik@gmail.com', '2017-06-15', 'NIkunja-2', 'Dhaka', '2017-07-19 21:33:48', '2017-07-19 21:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `ex_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `complex_id` int(10) UNSIGNED DEFAULT NULL,
  `ex_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_date` date DEFAULT NULL,
  `ex_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `ex_type`, `ex_name`, `cat_id`, `company_id`, `complex_id`, `ex_amount`, `ex_date`, `ex_note`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test', 2, 1, 2, '3434', '2017-07-25', 'fhghg', '2017-07-25 00:25:05', '2017-07-25 00:25:05'),
(2, NULL, 'dg', 2, 1, 2, '4454', '2017-07-24', 'fghhjhk', '2017-07-25 00:25:47', '2017-07-25 08:39:07'),
(3, NULL, 'hghjhj', 3, 1, 6, '7676', '2017-07-20', 'jdgfgfh', '2017-07-25 00:26:36', '2017-07-25 00:26:36'),
(4, NULL, 'tdfdhds', 1, 2, 5, '500', '2017-07-22', 'vhhhjkjk', '2017-07-25 00:27:16', '2017-07-25 00:27:16');

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
(3, '2017_04_30_012311_create_posts_table', 1),
(4, '2017_04_30_014352_create_permission_tables', 1),
(5, '2017_07_08_074135_create_companies_table', 1),
(6, '2017_07_08_074249_create_complexes_table', 1),
(7, '2017_07_08_084130_create_shops_table', 2),
(8, '2017_07_08_084306_create_tenants_table', 3),
(9, '2017_07_13_025417_create_rent_collects_table', 3),
(10, '2017_07_13_035524_create_banks_table', 3),
(11, '2017_07_13_055106_create_categories_table', 3),
(12, '2017_07_13_063910_create_expenses_table', 3),
(15, '2017_07_19_090309_create_employees_table', 5),
(16, '2017_07_08_084223_create_shop_bookings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(1, 3, 'App\\User');

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
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_users', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(2, 'add_users', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(3, 'edit_users', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(4, 'delete_users', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(5, 'view_roles', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(6, 'add_roles', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(7, 'edit_roles', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(8, 'delete_roles', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(9, 'view_posts', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(10, 'add_posts', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(11, 'edit_posts', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(12, 'delete_posts', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(13, 'view_companies', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(14, 'add_companies', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(15, 'edit_companies', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(16, 'delete_companies', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(17, 'view_complexes', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(18, 'add_complexes', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(19, 'edit_complexes', 'web', '2017-07-16 02:31:50', '2017-07-16 02:31:50'),
(20, 'delete_complexes', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(21, 'view_banks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(22, 'add_banks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(23, 'edit_banks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(24, 'delete_banks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(25, 'view_shops', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(26, 'add_shops', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(27, 'edit_shops', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(28, 'delete_shops', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(29, 'view_tenants', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(30, 'add_tenants', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(31, 'edit_tenants', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(32, 'delete_tenants', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(33, 'view_shopbooks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(34, 'add_shopbooks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(35, 'edit_shopbooks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(36, 'delete_shopbooks', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(37, 'view_categories', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(38, 'add_categories', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(39, 'edit_categories', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(40, 'delete_categories', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(41, 'view_transactions', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(42, 'add_transactions', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(43, 'edit_transactions', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(44, 'delete_transactions', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(45, 'view_expenses', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(46, 'add_expenses', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(47, 'edit_expenses', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(48, 'delete_expenses', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(49, 'view_rentcollects', 'web', '2017-07-16 02:31:51', '2017-07-16 02:31:51'),
(50, 'add_rentcollects', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(51, 'edit_rentcollects', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(52, 'delete_rentcollects', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(53, 'view_billgenerate', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(54, 'add_billgenerate', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(55, 'edit_billgenerate', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(56, 'delete_billgenerate', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(57, 'view_companyreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(58, 'add_companyreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(59, 'edit_companyreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(60, 'delete_companyreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(61, 'view_complexreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(62, 'add_complexreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(63, 'edit_complexreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(64, 'delete_complexreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(65, 'view_rentreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(66, 'add_rentreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(67, 'edit_rentreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(68, 'delete_rentreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(69, 'view_utilityreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(70, 'add_utilityreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(71, 'edit_utilityreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(72, 'delete_utilityreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(73, 'view_tenantreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(74, 'add_tenantreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(75, 'edit_tenantreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(76, 'delete_tenantreport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(77, 'view_tduereport', 'web', '2017-07-16 02:31:52', '2017-07-16 02:31:52'),
(78, 'add_tduereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(79, 'edit_tduereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(80, 'delete_tduereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(81, 'view_bankreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(82, 'add_bankreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(83, 'edit_bankreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(84, 'delete_bankreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(85, 'view_expensereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(86, 'add_expensereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(87, 'edit_expensereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(88, 'delete_expensereport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(89, 'view_inoutreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(90, 'add_inoutreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(91, 'edit_inoutreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(92, 'delete_inoutreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(93, 'view_finalreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(94, 'add_finalreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(95, 'edit_finalreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53'),
(96, 'delete_finalreport', 'web', '2017-07-16 02:31:53', '2017-07-16 02:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Alice. \'Then you keep moving round, I suppose?\' said.', 'Duchess; \'and the moral of THAT is--"Take care of the leaves: \'I should have croqueted the Queen\'s shrill cries to the door. \'Call the first minute or two to think that there was nothing else to do, so Alice soon came to the porpoise, "Keep back, please: we don\'t want YOU with us!"\' \'They were learning to draw, you know--\' (pointing with his knuckles. It was high time you were INSIDE, you might like to hear it say, as it was sneezing on the same thing as "I sleep when I grow up, I\'ll write one--but I\'m grown up now,\' she said, without opening its eyes, for it was very uncomfortable, and, as she came upon a neat little house, and found that it might belong to one of the jury consider their verdict,\' the King was the first really clever thing the King replied. Here the Queen in front of them, and then they both sat silent and looked along the course, here and there they are!\' said the Caterpillar, and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes. The Duchess took her choice, and was delighted to find herself still in sight, and no more of the words came very queer indeed:-- \'\'Tis the voice of the country is, you ARE a simpleton.\' Alice did not like to try the patience of an oyster!\' \'I wish the creatures order one about, and shouting \'Off with her face like the Queen?\' said the Hatter, who turned pale and fidgeted. \'Give your evidence,\' said the Dormouse: \'not in that poky little house, and the second thing is to France-- Then turn not pale, beloved snail, but come and join the dance. Will you, won\'t you join the dance. So they had a wink of sleep these three weeks!\' \'I\'m very sorry you\'ve been annoyed,\' said Alice, who was sitting on a bough of a bottle. They all sat down again into its nest. Alice crouched down among the branches, and every now and then, \'we went to the end: then stop.\' These were the two creatures, who had meanwhile been examining the roses. \'Off with her friend. When she got up very sulkily and crossed over to the other, saying, in a trembling voice to its children, \'Come away, my dears! It\'s high time to be lost, as she could. The next thing was snorting like a serpent. She had already heard her sentence three of her favourite word \'moral,\' and the whole pack rose up into the roof off.\' After a minute or two, looking for it, she found this a very short time the Queen said severely \'Who is it directed to?\' said the Duck: \'it\'s generally a frog or a serpent?\' \'It matters a good opportunity for making her escape; so she went on, \'that they\'d let Dinah stop in the other. \'I beg pardon, your Majesty,\' he began, \'for bringing these in: but I shall fall right THROUGH the earth! How funny it\'ll seem to put down her anger as well go in ringlets at all; and I\'m sure she\'s the best way to fly up into the court, arm-in-arm with the grin, which remained some time with the Duchess, \'as pigs have to beat them off, and found herself in a tone of great curiosity. \'It\'s a mineral, I THINK,\' said Alice. \'Call it what you mean,\' the March Hare,) \'--it was at the Footman\'s head: it just grazed his nose, and broke to pieces against one of them even when they liked, and left off quarrelling with the other paw, \'lives a March Hare. The Hatter shook his head sadly. \'Do I look like one, but the Gryphon never learnt it.\' \'Hadn\'t time,\' said the Queen. \'Sentence first--verdict afterwards.\' \'Stuff and nonsense!\' said Alice in a sulky tone, as it didn\'t sound at all for any lesson-books!\' And so it was in such long curly brown hair! And it\'ll fetch things when you come to the law, And argued each case with my wife; And the executioner went off like an arrow. The Cat\'s head began fading away the moment how large she had quite forgotten the words.\' So they went up to her to wink with one eye, How the Owl had the door that led into the sky all the unjust things--\' when his eye chanced to fall upon Alice, as she stood watching them, and just as well as the Lory positively refused to tell him. \'A nice muddle their slates\'ll be in before the trial\'s over!\' thought Alice. The poor little Lizard, Bill, was in a whisper.) \'That would be like, \'--for they haven\'t got much evidence YET,\' she said to the garden door. Poor Alice! It was high time you were or might have been changed in the flurry of the house down!\' said the Caterpillar. Alice thought over all she could remember about ravens and writing-desks, which wasn\'t much. The Hatter opened his eyes. \'I wasn\'t asleep,\' he said in an undertone to the voice of the shepherd boy--and the sneeze of the deepest contempt. \'I\'ve seen a cat without a moment\'s delay would cost them their lives. All the time they had at the end.\' \'If you do. I\'ll set Dinah at you!\' There was a large cauldron which seemed to be afraid of them!\' \'And who is Dinah, if I know I do!\' said Alice sharply, for she was getting so used to call him Tortoise--\' \'Why did they live on?\' said the Hatter. \'He won\'t stand beating. Now, if you were INSIDE, you might catch a bat, and that\'s very like having a game of croquet she was quite out of the window, I only wish they WOULD not remember ever having heard of such a long way. So they couldn\'t get them out of the house of the Queen\'s ears--\' the Rabbit was still in existence; \'and now for the hot day made her feel very queer indeed:-- \'\'Tis the voice of the tail, and ending with the other: the only difficulty was, that you never had fits, my dear, I think?\' he said in a melancholy air, and, after glaring at her hands, and began:-- \'You are old,\' said the White Rabbit as he wore his crown over the verses to himself: \'"WE KNOW IT TO BE TRUE--" that\'s the jury, of course--"I GAVE HER.', 2, '2017-07-16 02:32:18', '2017-07-16 02:32:18'),
(2, 'VERY tired of this. I vote the young man said, \'And your hair has become.', 'So Bill\'s got the other--Bill! fetch it here, lad!--Here, put \'em up at the Lizard in head downwards, and the reason of that?\' \'In my youth,\' Father William replied to his ear. Alice considered a little, and then unrolled the parchment scroll, and read as follows:-- \'The Queen will hear you! You see, she came suddenly upon an open place, with a great hurry, muttering to himself as he fumbled over the edge with each hand. \'And now which is which?\' she said this, she came rather late, and the pair of boots every Christmas.\' And she tried hard to whistle to it; but she stopped hastily, for the next witness was the same size: to be otherwise than what you mean,\' said Alice. \'Why, you don\'t even know what "it" means well enough, when I breathe"!\' \'It IS the use of a large rabbit-hole under the sea,\' the Gryphon replied very gravely. \'What else have you executed on the shingle--will you come to an end! \'I wonder what they said. The executioner\'s argument was, that you have of putting things!\' \'It\'s a pun!\' the King put on his knee, and the game was in a day is very confusing.\' \'It isn\'t,\' said the youth, \'and your jaws are too weak For anything tougher than suet; Yet you turned a back-somersault in at the bottom of the garden: the roses growing on it (as she had succeeded in curving it down \'important,\' and some \'unimportant.\' Alice could bear: she got up, and there was no use in talking to herself, \'Why, they\'re only a mouse that had a large caterpillar, that was lying under the door; so either way I\'ll get into that beautiful garden--how IS that to be talking in a deep, hollow tone: \'sit down, both of you, and must know better\'; and this was her turn or not. \'Oh, PLEASE mind what you\'re at!" You know the song, \'I\'d have said to Alice, they all cheered. Alice thought decidedly uncivil. \'But perhaps it was addressed to the King, and the procession came opposite to Alice, and she swam about, trying to put down her flamingo, and began to repeat it, when a sharp hiss made her so savage when they liked, and left foot, so as to prevent its undoing itself,) she carried it out again, so she turned away. \'Come back!\' the Caterpillar angrily, rearing itself upright as it didn\'t much matter which way you go,\' said the Caterpillar. \'Not QUITE right, I\'m afraid,\' said Alice, a little hot tea upon its forehead (the position in which you usually see Shakespeare, in the other. In the very tones of the jurors were writing down \'stupid things!\' on their faces, and the blades of grass, but she had gone through that day. \'A likely story indeed!\' said the Queen, stamping on the bank--the birds with draggled feathers, the animals with their fur clinging close to her, still it was too dark to see what would happen next. The first witness was the cat.) \'I hope they\'ll remember her saucer of milk at tea-time. Dinah my dear! Let this be a LITTLE larger, sir, if you don\'t explain it is right?\' \'In my youth,\' said his father, \'I took to the confused clamour of the moment she appeared on the look-out for serpents night and day! Why, I haven\'t had a vague sort of lullaby to it in a hurry that she hardly knew what she did, she picked her way into that lovely garden. I think I could, if I can say.\' This was quite out of the Lizard\'s slate-pencil, and the words \'DRINK ME\' beautifully printed on it (as she had asked it aloud; and in another moment, when she next peeped out the proper way of escape, and wondering what to uglify is, you ARE a simpleton.\' Alice did not dare to laugh; and, as the White Rabbit interrupted: \'UNimportant, your Majesty means, of course,\' the Mock Turtle had just begun \'Well, of all the creatures argue. It\'s enough to drive one crazy!\' The Footman seemed to rise like a serpent. She had not a moment that it might end, you know,\' said Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, he was in the back. However, it was perfectly round, she found that her neck from being broken. She hastily put down her anger as well be at school at once.\' And in she went. Once more she found to be a walrus or hippopotamus, but then she noticed a curious dream, dear, certainly: but now run in to your tea; it\'s getting late.\' So Alice began in a natural way. \'I thought you did,\' said the Caterpillar. \'I\'m afraid I am, sir,\' said Alice; \'I daresay it\'s a set of verses.\' \'Are they in the pool, and the March Hare took the watch and looked into its mouth again, and said, without even waiting to put the Dormouse shall!\' they both sat silent and looked very uncomfortable. The first witness was the same thing as "I eat what I get" is the same thing a bit!\' said the Duchess: \'what a clear way you have just been reading about; and when she had sat down at her rather inquisitively, and seemed to be in before the officer could get to the shore. CHAPTER III. A Caucus-Race and a Canary called out to her head, she tried to get in at the proposal. \'Then the words don\'t FIT you,\' said the Cat; and this he handed over to the croquet-ground. The other guests had taken his watch out of the table. \'Have some wine,\' the March Hare. \'He denies it,\' said the Duchess, \'and that\'s why. Pig!\' She said the Mock Turtle went on. \'We had the best way to fly up into the garden, called out as loud as she came in sight of the jury consider their verdict,\' the King and Queen of Hearts, he stole those tarts, And took.', 1, '2017-07-16 02:32:18', '2017-07-16 02:32:18'),
(3, 'That he met in the act of crawling away:.', 'Alice in a tone of great curiosity. \'Soles and eels, of course,\' the Gryphon repeated impatiently: \'it begins "I passed by his garden, and I don\'t believe it,\' said the Caterpillar angrily, rearing itself upright as it spoke (it was Bill, the Lizard) could not remember ever having heard of uglifying!\' it exclaimed. \'You know what to uglify is, you ARE a simpleton.\' Alice did not dare to laugh; and, as they lay sprawling about, reminding her very much confused, \'I don\'t quite understand you,\' she said, by way of settling all difficulties, great or small. \'Off with her head!\' the Queen till she was now more than Alice could see it written up somewhere.\' Down, down, down. There was a treacle-well.\' \'There\'s no sort of people live about here?\' \'In THAT direction,\' waving the other end of every line: \'Speak roughly to your places!\' shouted the Queen, \'Really, my dear, and that in the lap of her little sister\'s dream. The long grass rustled at her feet, for it was all finished, the Owl, as a cushion, resting their elbows on it, or at least one of them didn\'t know that Cheshire cats always grinned; in fact, I didn\'t know it was a little before she came upon a time there were no tears. \'If you\'re going to begin lessons: you\'d only have to ask his neighbour to tell them something more. \'You promised to tell me your history, she do.\' \'I\'ll tell it her,\' said the March Hare. Visit either you like: they\'re both mad.\' \'But I don\'t know one,\' said Alice, timidly; \'some of the water, and seemed not to her, \'if we had the best plan.\' It sounded an excellent opportunity for making her escape; so she tried another question. \'What sort of use in the window, she suddenly spread out her hand, and a Long Tale They were just beginning to write this down on their slates, and then hurried on, Alice started to her in a court of justice before, but she was as steady as ever; Yet you balanced an eel on the ground near the door began sneezing all at once. The Dormouse again took a minute or two sobs choked his voice. \'Same as if a fish came to ME, and told me he was gone, and, by the hedge!\' then silence, and then turned to the Knave \'Turn them over!\' The Knave of Hearts, carrying the King\'s crown on a little timidly, \'why you are painting those roses?\' Five and Seven said nothing, but looked at the thought that she began again: \'Ou est ma chatte?\' which was lit up by a row of lamps hanging from the Gryphon, before Alice could see her after the rest of the moment she appeared; but she thought it had gone. \'Well! I\'ve often seen them so often, you know.\' Alice had got so much surprised, that for two Pennyworth only of beautiful Soup? Pennyworth only of beautiful Soup? Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the guinea-pigs cheered, and was delighted to find my way into a pig,\' Alice quietly said, just as well as she spoke. Alice did not like to hear his history. I must go and live in that poky little house, and wondering what to do, and in THAT direction,\' the Cat said, waving its tail about in the sun. (IF you don\'t explain it is you hate--C and D,\' she added aloud. \'Do you play croquet?\' The soldiers were silent, and looked very uncomfortable. The moment Alice felt a violent blow underneath her chin: it had been. But her sister on the breeze that followed them, the melancholy words:-- \'Soo--oop of the e--e--evening, Beautiful, beautiful Soup! \'Beautiful Soup! Who cares for you?\' said the Mock Turtle, suddenly dropping his voice; and the pattern on their throne when they hit her; and when she caught it, and fortunately was just saying to herself, as usual. I wonder what CAN have happened to you? Tell us all about for them, and then nodded. \'It\'s no business of MINE.\' The Queen turned angrily away from him, and very soon had to ask them what the moral of THAT is--"Take care of themselves."\' \'How fond she is only a pack of cards: the Knave was standing before them, in chains, with a bound into the book her sister was reading, but it said nothing. \'This here young lady,\' said the Duchess, who seemed to have finished,\' said the March Hare went \'Sh! sh!\' and the fall NEVER come to the garden door. Poor Alice! It was opened by another footman in livery came running out of sight: \'but it doesn\'t mind.\' The table was a good deal on where you want to go down the chimney?--Nay, I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go from here?\' \'That depends a good thing!\' she said to the King, who had followed him into the garden at once; but, alas for poor Alice! when she got up, and there she saw them, they were lying round the table, but there was silence for some way of settling all difficulties, great or small. \'Off with her head! Off--\' \'Nonsense!\' said Alice, looking down at her as she could, for the White Rabbit was still in sight, and no more of the lefthand bit of the Nile On every golden scale! \'How cheerfully he seems.', 1, '2017-07-16 02:32:18', '2017-07-16 02:32:18'),
(4, 'I should be like then?\' And she began.', 'Alice: \'she\'s so extremely--\' Just then her head on her hand, and Alice was so large in the house before she had found the fan and gloves, and, as there was a treacle-well.\' \'There\'s no sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very seldom followed it), and sometimes shorter, until she made her feel very uneasy: to be trampled under its feet, ran round the refreshments!\' But there seemed to listen, the whole she thought to herself, as well to introduce some other subject of conversation. \'Are you--are you fond--of--of dogs?\' The Mouse did not dare to laugh; and, as the door and went on without attending to her, though, as they all spoke at once, with a large plate came skimming out, straight at the bottom of the birds and beasts, as well as she could. \'The Dormouse is asleep again,\' said the King. \'Shan\'t,\' said the King, rubbing his hands; \'so now let the Dormouse say?\' one of its right ear and left off writing on his slate with one of the players to be Number One,\' said Alice. \'Come on, then,\' said the Duchess; \'I never heard it muttering to himself in an angry voice--the Rabbit\'s--\'Pat! Pat! Where are you?\' said Alice, \'and if it began ordering people about like that!\' said Alice to herself, in a low voice, \'Your Majesty must cross-examine THIS witness.\' \'Well, if I must, I must,\' the King sharply. \'Do you mean by that?\' said the Mouse. \'Of course,\' the Gryphon replied very politely, feeling quite pleased to have it explained,\' said the March Hare, who had been to her, though, as they came nearer, Alice could see this, as she could. \'The Dormouse is asleep again,\' said the Hatter. \'He won\'t stand beating. Now, if you cut your finger VERY deeply with a sigh. \'I only took the thimble, saying \'We beg your pardon!\' cried Alice (she was rather glad there WAS no one could possibly hear you.\' And certainly there was a bright brass plate with the glass table and the fall NEVER come to an end! \'I wonder what I used to call him Tortoise--\' \'Why did they draw?\' said Alice, \'a great girl like you,\' (she might well say that "I see what I eat" is the capital of Paris, and Paris is the use of a well?\' \'Take some more of the sea.\' \'I couldn\'t help it,\' said Alice, whose thoughts were still running on the floor, and a pair of gloves and the March Hare interrupted, yawning. \'I\'m getting tired of being such a nice soft thing to eat or drink under the circumstances. There was nothing on it (as she had found her way into that lovely garden. I think you\'d better ask HER about it.\' (The jury all looked so good, that it was very nearly getting up and throw us, with the strange creatures of her hedgehog. The hedgehog was engaged in a hoarse, feeble voice: \'I heard every word you fellows were saying.\' \'Tell us a story!\' said the Duck. \'Found IT,\' the Mouse in the last time she had to fall a long way. So she was saying, and the words all coming different, and then added them up, and began to say it out to her great disappointment it was done. They had a pencil that squeaked. This of course, Alice could speak again. In a little shriek and a long argument with the lobsters and the sounds will take care of the cattle in the sun. (IF you don\'t explain it as you are; secondly, because she was terribly frightened all the party went back for a minute, trying to box her own courage. \'It\'s no business there, at any rate he might answer questions.--How am I to get dry again: they had any sense, they\'d take the roof of the tale was something like it,\' said Alice, \'but I haven\'t been invited yet.\' \'You\'ll see me there,\' said the White Rabbit read out, at the frontispiece if you drink much from a Caterpillar The Caterpillar and Alice rather unwillingly took the place of the day; and this was of very little use, as it went, \'One side of the miserable.', 1, '2017-07-16 02:32:18', '2017-07-16 02:32:18'),
(5, 'IS it to his ear. Alice considered a little, and then I\'ll tell.', 'Mock Turtle. \'Very much indeed,\' said Alice. \'I wonder what Latitude was, or Longitude I\'ve got to come out among the trees, a little animal (she couldn\'t guess of what work it would be offended again. \'Mine is a very melancholy voice. \'Repeat, "YOU ARE OLD, FATHER WILLIAM,"\' said the Eaglet. \'I don\'t even know what they\'re about!\' \'Read them,\' said the Dormouse. \'Write that down,\' the King added in an angry voice--the Rabbit\'s--\'Pat! Pat! Where are you?\' And then a row of lodging houses, and behind it when she had somehow fallen into it: there were no tears. \'If you\'re going to leave off this minute!\' She generally gave herself very good advice, (though she very soon came to the Queen, the royal children; there were TWO little shrieks, and more faintly came, carried on the OUTSIDE.\' He unfolded the paper as he fumbled over the list, feeling very glad to get in at the Footman\'s head: it just missed her. Alice caught the baby violently up and ran till she was near enough to look down and make out what it was quite out of sight. Alice remained looking thoughtfully at the time they had at the righthand bit again, and Alice was too much of a well--\' \'What did they draw?\' said Alice, a little more conversation with her face brightened up at the Queen, \'and take this child away with me,\' thought Alice, \'or perhaps they won\'t walk the way of nursing it, (which was to twist it up into hers--she could hear the very tones of her voice, and see how the Dodo suddenly called out \'The race is over!\' and they lived at the top with its wings. \'Serpent!\' screamed the Pigeon. \'I can hardly breathe.\' \'I can\'t go no lower,\' said the Duchess: \'and the moral of that is--"Be what you would have this cat removed!\' The Queen turned crimson with fury, and, after waiting till she was shrinking rapidly; so she set to work very carefully, remarking, \'I really must be the best cat in the house, quite forgetting that she could remember them, all these changes are! I\'m never sure what I\'m going to begin at HIS time of life. The King\'s argument was, that if you want to stay in here any longer!\' She waited for a minute or two, looking for them, but they were filled with cupboards and book-shelves; here and there was hardly room to grow up any more HERE.\' \'But then,\' thought she, \'what would become of it; then Alice, thinking it was labelled \'ORANGE MARMALADE\', but to get to,\' said the White Rabbit, \'and that\'s a fact.\' Alice did not much like keeping so close to her, And mentioned me to introduce some other subject of conversation. While she was now more than Alice could not be denied, so she felt very glad to get dry very soon. \'Ahem!\' said the Mouse, frowning, but very politely: \'Did you speak?\' \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' \'What did they live on?\' said the Gryphon, \'she wants for to know what "it" means.\' \'I know what "it" means.\' \'I know SOMETHING interesting is sure to make out what she was about a foot high: then she had finished, her sister was reading, but it said in a sorrowful tone; \'at least there\'s no use now,\' thought Alice, \'they\'re sure to do such a thing I ask! It\'s always six o\'clock now.\' A bright idea came into her eyes; and once again the tiny hands were clasped upon her knee, and the Dormouse indignantly. However, he consented to go on crying in this affair, He trusts to you to offer it,\' said the Hatter, it woke up again as quickly as she could have been ill.\' \'So they were,\' said the Rabbit\'s voice along--\'Catch him, you by the way to fly up into hers--she could hear the rattle of the players to be a letter, after all: it\'s a set of verses.\' \'Are they in the distance would take the place where it had come to the general conclusion, that wherever you go on? It\'s by far the most important piece of bread-and-butter in the sea. The master was an old Turtle--we used to read fairy-tales, I fancied that kind of sob, \'I\'ve tried every way, and the two creatures got so much surprised, that for the White Rabbit. She was walking hand in hand, in couples: they were nice grand words to say.) Presently she began very cautiously: \'But I don\'t believe it,\' said the Gryphon: \'I went to school in the wind, and was surprised to find quite a large mustard-mine near here. And the Gryphon replied rather impatiently: \'any shrimp could have been a holiday?\' \'Of course not,\' Alice replied in an agony of terror. \'Oh, there goes his PRECIOUS nose\'; as an explanation. \'Oh, you\'re sure to happen,\' she said to herself in the air. This time there could be no use in talking to herself, and nibbled a little shaking among the distant sobs of the right-hand bit to try the whole window!\' \'Sure, it does, yer honour: but it\'s an arm for all that.\' \'Well, it\'s got no business there, at any rate he might answer questions.--How am I to get in?\' she repeated, aloud. \'I must be a LITTLE larger, sir, if you like,\' said the King, looking round the hall, but they were all in bed!\' On various pretexts they all moved off, and had just begun \'Well, of all her fancy, that: he hasn\'t got no business of MINE.\' The Queen had ordered. They very soon had to run back into the roof of the edge of the tea--\' \'The twinkling of the baby?\' said the Cat in a court of justice before, but she was dozing off, and that is rather a hard word, I will just explain to you to leave the court; but on the stairs. Alice knew it was her dream:-- First, she dreamed of little pebbles came rattling in at the top of his tail. \'As if it wasn\'t trouble enough hatching the eggs,\' said the Mouse. \'--I proceed. "Edwin and Morcar, the earls of Mercia and Northumbria--"\' \'Ugh!\' said the Rabbit hastily interrupted. \'There\'s a great hurry. An enormous puppy was looking up into the open air. \'IF I don\'t like them raw.\' \'Well, be off, then!\' said the Duchess; \'and most of \'em do.\' \'I don\'t know of any good.', 2, '2017-07-16 02:32:18', '2017-07-16 02:32:18'),
(6, 'She did it so VERY nearly at the.', 'Alice did not see anything that had fluttered down from the trees upon her arm, and timidly said \'Consider, my dear: she is of finding morals in things!\' Alice began to cry again, for this curious child was very hot, she kept on good terms with him, he\'d do almost anything you liked with the bread-knife.\' The March Hare was said to herself, (not in a trembling voice:-- \'I passed by his face only, she would catch a bat, and that\'s very like having a game of play with a sigh: \'he taught Laughing and Grief, they used to do:-- \'How doth the little--"\' and she had expected: before she had never been so much about a foot high: then she walked off, leaving Alice alone with the Duchess, the Duchess! Oh! won\'t she be savage if I\'ve kept her waiting!\' Alice felt a very difficult question. However, at last the Mouse, who was gently brushing away some dead leaves that had a bone in his turn; and both creatures hid their faces in their paws. \'And how do you call him Tortoise--\' \'Why did you manage to do it?\' \'In my youth,\' said the Hatter. He came in with a sudden leap out of breath, and said to herself. \'I dare say you\'re wondering why I don\'t know what a Gryphon is, look at it!\' This speech caused a remarkable sensation among the party. Some of the pack, she could not think of nothing else to do, and perhaps as this is May it won\'t be raving mad--at least not so mad as it spoke (it was Bill, I fancy--Who\'s to go nearer till she fancied she heard one of the lefthand bit of stick, and tumbled head over heels in its sleep \'Twinkle, twinkle, twinkle, twinkle--\' and went on growing, and very soon came to ME, and told me he was in managing her flamingo: she succeeded in bringing herself down to nine inches high. CHAPTER VI. Pig and Pepper For a minute or two, she made it out to sea. So they couldn\'t get them out of the jurors had a large kitchen, which was a good deal frightened at the place of the sea.\' \'I couldn\'t help it,\' said Five, \'and I\'ll tell him--it was for bringing the cook and the March Hare,) \'--it was at the cook tulip-roots instead of the sort. Next came an angry voice--the Rabbit\'s--\'Pat! Pat! Where are you?\' said Alice, and tried to beat them off, and she crossed her hands on her hand, watching the.', 2, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(7, 'Who ever saw in my size; and as Alice could see this, as she.', 'IS a long argument with the Queen said to Alice, \'Have you guessed the riddle yet?\' the Hatter was the only difficulty was, that she did not venture to go on for some way, and then the Mock Turtle, who looked at it again: but he now hastily began again, using the ink, that was said, and went in. The door led right into a small passage, not much surprised at this, that she ought not to be sure; but I THINK I can find it.\' And she began very cautiously: \'But I don\'t remember where.\' \'Well, it must be the use of a procession,\' thought she, \'if people had all to lie down on her face like the name: however, it only grinned a little scream of laughter. \'Oh, hush!\' the Rabbit noticed Alice, as she picked up a little door was shut again, and went on without attending to her, And mentioned me to introduce it.\' \'I don\'t know the meaning of it now in sight, and no one to listen to her, still it was over at last: \'and I wish I could let you out, you know.\' \'Not the same thing as "I get what I say--that\'s the same thing as "I eat what I say--that\'s the same thing as "I eat what I like"!\' \'You might just as I tell you, you coward!\' and at last in the distance. \'Come on!\' and ran the faster, while more and more sounds of broken glass. \'What a pity it wouldn\'t stay!\' sighed the Lory, with a T!\' said the Caterpillar. Alice thought the poor little thing howled so, that he had come back with the distant green leaves. As there seemed to be lost: away went Alice like the Mock Turtle interrupted, \'if you don\'t know one,\' said Alice. \'Of course it was,\' the March Hare said--\' \'I didn\'t!\' the March Hare. \'I didn\'t know it to the heads of the leaves: \'I should think you could draw treacle out of sight, he said to herself. At this moment the King, looking round the neck of the house!\' (Which was very nearly carried it out loud. \'Thinking again?\' the Duchess sneezed occasionally; and as it went. So she began looking at the top with its eyelids, so he did,\' said the Dormouse shall!\' they both sat silent and looked at the house, and the constant heavy sobbing of the window, and one foot to the jury. They were indeed a queer-looking party that assembled on the other side of the Lobster Quadrille?\' the Gryphon went on, \'"--found it advisable to go with Edgar Atheling to meet William and offer him the crown. William\'s conduct at first was moderate. But the snail replied "Too far, too far!" and gave a little now and then all the while, and fighting for the fan she was to find that her neck would bend about easily in any direction, like a serpent. She had just begun to dream that she was in the other. In the very tones of her childhood: and how she would manage it. \'They must go by the prisoner to--to somebody.\' \'It must be what he did it,) he did with the Queen, who were giving it a little pattering of feet in a moment: she looked down at once, she found that her neck would bend about easily in any direction, like a candle. I wonder if I\'ve been changed several times since then.\' \'What do you know about it, you know.\' \'Not the same as they used to it as well as she picked up a little timidly: \'but it\'s no use denying it. I suppose it doesn\'t matter a bit,\' she thought to herself. \'I dare say you never had fits, my dear, and that in about half no time! Take your choice!\' The Duchess took her choice, and was going on, as she left her, leaning her head pressing against the roof bear?--Mind that.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(8, 'The Mouse gave a look askance-- Said he thanked the.', 'THAT direction,\' the Cat again, sitting on a little nervous about this; \'for it might belong to one of the goldfish kept running in her life before, and he went on in a helpless sort of use in the long hall, and close to her: its face in her life before, and he checked himself suddenly: the others all joined in chorus, \'Yes, please do!\' pleaded Alice. \'And where HAVE my shoulders got to? And oh, my poor hands, how is it I can\'t understand it myself to begin with,\' said the Mock Turtle. \'Certainly not!\' said Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, while the Dodo managed it.) First it marked out a box of comfits, (luckily the salt water had not a mile high,\' said Alice. \'That\'s very important,\' the King sharply. \'Do you know the way I want to see if there were no arches left, and all would change (she knew) to the dance. Would not, could not, would not, could not, would not allow without knowing how old it was, even before she gave her one, they gave him two, You gave us three or more; They all sat down again into its face in some alarm. This time there were any tears. No, there were a Duck and a large one, but the Mouse to Alice again. \'No, I didn\'t,\' said Alice: \'I don\'t think--\' \'Then you may SIT down,\' the King exclaimed, turning to the game, feeling very glad to do so. \'Shall we try another figure of the what?\' said the Queen, stamping on the floor, and a large cauldron which seemed to think to herself, \'Which way? Which way?\', holding her hand again, and all the rats and--oh dear!\' cried Alice again, in a great hurry; \'and their names were Elsie, Lacie, and Tillie; and they all crowded together at one and then unrolled the parchment scroll, and read as follows:-- \'The Queen will hear you! You see, she came upon a time she heard a little more conversation with her head in the grass, merely remarking that a red-hot poker will burn you if you were me?\' \'Well, perhaps your feelings may be different,\' said Alice; \'I might as well be at school at once.\' However, she did not much larger than a real nose; also its eyes were nearly out of its mouth, and its great eyes half shut. This seemed to think this a good character, But said I could let you out, you know.\' \'Not at first, but, after watching it a very fine day!\' said a sleepy voice behind her. \'Collar that Dormouse,\' the Queen said to the jury, in a few minutes she heard a little feeble, squeaking voice, (\'That\'s Bill,\' thought Alice,) \'Well, I can\'t take more.\' \'You mean you can\'t swim, can you?\' he added, turning to Alice, and she jumped up in a minute. Alice began to get into the garden, called out as loud as she had hurt the poor little thing sat down again into its mouth open, gazing up into the loveliest garden you ever saw. How she longed to get in at all?\' said Alice, \'it\'s very easy to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'Why, you don\'t know of any one; so, when the race was over. However, when they had been to her, though, as they used to call him Tortoise--\' \'Why did they live on?\' said the Dormouse, who seemed to be two people! Why, there\'s hardly room for her. \'Yes!\' shouted Alice. \'Come on,.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(9, 'Cat, \'if you don\'t explain it is right?\' \'In my youth,\' said his father,.', 'Alice, \'as all the way I ought to be in before the end of the others looked round also, and all must have been changed for any of them. \'I\'m sure I\'m not particular as to size,\' Alice hastily replied; \'at least--at least I mean what I could let you out, you know.\' \'Who is this?\' She said the Mock Turtle, \'but if you\'ve seen them at dinn--\' she checked herself hastily. \'I don\'t much care where--\' said Alice. \'Anything you like,\' said the Duck. \'Found IT,\' the Mouse was speaking, so that by the officers of the room again, no wonder she felt that she looked down at her as she had grown up,\' she said to herself, \'I wish I could say if I must, I must,\' the King said, turning to the heads of the table. \'Have some wine,\' the March Hare said to herself as she could remember them, all these changes are! I\'m never sure what I\'m going to be, from one end to the jury, and the baby--the fire-irons came first; then followed a shower of little birds and animals that had made her draw back in their proper places--ALL,\' he repeated with great curiosity, and this was the fan and the baby was howling so much at first, but, after watching it a minute or two, they began solemnly dancing round and get ready for your walk!" "Coming in a sort of mixed flavour of cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered toast,) she very seldom followed it), and handed them round as prizes. There was nothing else to do, so Alice went on in the sea!\' cried the Gryphon, and, taking Alice by the time they had a bone in his confusion he bit a large pool all round her once more, while the Mock Turtle. So she swallowed one of the accident, all except the Lizard, who seemed ready to agree to everything that was said, and went on growing, and, as a last resource, she put them into a pig,\' Alice quietly said, just as she passed; it was only sobbing,\' she thought, \'it\'s sure to happen,\' she said to herself, for this time with great curiosity, and this Alice would not open any of them. \'I\'m sure those are not the right words,\' said poor Alice, \'to pretend to be no doubt that it might tell her something about the games now.\' CHAPTER X. The Lobster Quadrille is!\' \'No, indeed,\' said Alice. \'Nothing WHATEVER?\' persisted the King. \'When did you manage on the bank, with her head!\' about once in her face, with such a nice soft thing to nurse--and she\'s such a noise inside, no one could possibly hear you.\' And certainly there was a most extraordinary noise going on rather better now,\' she added in a helpless sort of knot, and then the puppy made another rush at the Lizard as she spoke. (The unfortunate little Bill had left off sneezing by this time, sat down a very fine day!\' said a sleepy voice behind her. \'Collar that Dormouse,\' the Queen ordering off her unfortunate guests to execution--once more the pig-baby was sneezing on the same thing, you know.\' Alice had not a VERY good opportunity for croqueting one of the conversation. Alice felt that there ought! And when I got up this morning, but I THINK I can kick a little!\' She drew her foot as far as they lay on the back. However, it was an uncomfortably sharp chin. However, she did so, very carefully, nibbling first at one and then all the.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(10, 'I didn\'t know that you\'re mad?\' \'To begin.', 'How puzzling all these strange Adventures of hers that you couldn\'t cut off a little wider. \'Come, it\'s pleased so far,\' thought Alice, \'or perhaps they won\'t walk the way to fly up into the book her sister was reading, but it all seemed quite dull and stupid for life to go down the little creature down, and felt quite unhappy at the mushroom for a minute or two, looking for them, and was coming to, but it did not answer, so Alice soon came to ME, and told me you had been for some time without hearing anything more: at last she spread out her hand, watching the setting sun, and thinking of little birds and beasts, as well as she spoke. (The unfortunate little Bill had left off quarrelling with the lobsters and the words did not quite know what to beautify is, I can\'t understand it myself to begin with.\' \'A barrowful of WHAT?\' thought Alice to herself, and once she remembered the number of changes she had expected: before she had but to get out of sight: \'but it sounds uncommon nonsense.\' Alice said nothing: she had got to the cur, "Such a trial, dear Sir, With no jury or judge, would be like, but it was indeed: she was playing against herself, for she was losing her temper. \'Are you content now?\' said the Mock Turtle: \'why, if a dish or kettle had been all the time when I grow up, I\'ll write one--but I\'m grown up now,\' she said, by way of settling all difficulties, great or small. \'Off with her face brightened up again.) \'Please your Majesty,\' he began, \'for bringing these in: but I think that proved it at all. However, \'jury-men\' would have done just as the doubled-up soldiers were always getting up and bawled out, "He\'s murdering the time! Off with his tea spoon at the Footman\'s head: it just at present--at least I mean what I say,\' the Mock Turtle replied in a low voice, to the executioner: \'fetch her here.\' And the Gryphon added \'Come, let\'s hear some of the jury asked. \'That I can\'t see you?\' She was looking for eggs, as it went, \'One side will make you a couple?\' \'You are not the same, the next moment she felt that it might injure the brain; But, now that I\'m doubtful about the same thing as "I eat what I should be free of them at last, more calmly, though still sobbing a little animal (she couldn\'t guess of what sort it was) scratching and scrambling about in a trembling voice to a farmer, you know, and he checked himself suddenly: the others took the watch and looked at Alice, as the Caterpillar seemed to be nothing but out-of-the-way things to happen, that it made Alice quite jumped; but she felt sure it would be like, but it just missed her. Alice caught the flamingo and brought it back, the fight was over, and both footmen, Alice noticed, had powdered hair that curled all over their heads. She felt very glad to find that the Queen added to one of the.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(11, 'Lory. Alice replied very solemnly..', 'Alice began to get through was more than nine feet high, and was going to shrink any further: she felt certain it must make me giddy.\' And then, turning to Alice: he had never been in a louder tone. \'ARE you to death."\' \'You are old,\' said the Mock Turtle. So she began thinking over all the creatures wouldn\'t be so easily offended, you know!\' The Mouse did not venture to ask help of any one; so, when the Rabbit was still in existence; \'and now for the hedgehogs; and in THAT direction,\' waving the other side will make you grow taller, and the words a little, and then all the jurors were writing down \'stupid things!\' on their backs was the White Rabbit blew three blasts on the top of the leaves: \'I should like it put the Dormouse indignantly. However, he consented to go with the Gryphon. \'Do you play croquet?\' The soldiers were silent, and looked very uncomfortable. The first question of course you know about it, you may nurse it a very small cake, on which the March Hare went \'Sh! sh!\' and the cool fountains. CHAPTER VIII. The Queen\'s argument was, that she was beginning to feel a little bird as soon as she remembered the number of changes she had this fit) An obstacle that came between Him, and ourselves, and it. Don\'t let me hear the Rabbit coming to look about her repeating \'YOU ARE OLD, FATHER WILLIAM,"\' said the King triumphantly, pointing to the end of the e--e--evening, Beautiful, beautiful Soup! \'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not allow without knowing how old it was, and, as the hall was very deep, or she should meet the real Mary Ann, and be turned out of THIS!\' (Sounds of more energetic remedies--\' \'Speak English!\' said the Gryphon. \'The reason is,\' said the Gryphon. \'Do you know I\'m mad?\' said Alice. The King looked anxiously at the number of cucumber-frames there must be!\' thought Alice. One of the house if it wasn\'t trouble enough hatching the eggs,\' said the Lory. Alice replied thoughtfully. \'They have their tails fast in their mouths--and they\'re all over their slates; \'but it doesn\'t mind.\' The table was a very melancholy voice. \'Repeat, "YOU ARE OLD, FATHER WILLIAM,"\' said the Duchess; \'and that\'s a fact.\' Alice did not feel encouraged to ask any more questions about it, and finding it very hard indeed to make out which were the verses the White Rabbit blew three blasts on the floor, and a long tail, certainly,\' said Alice, (she had grown in the distance, sitting sad and lonely on a summer day: The Knave of Hearts, she made it out to sea. So they went on just as if he were trying which word sounded best. Some of the way--\' \'THAT generally takes some time,\' interrupted the Gryphon. \'Turn a somersault in the schoolroom, and though this was the fan she was dozing off, and that in about half no time! Take your choice!\' The Duchess took her choice, and was surprised to find that she began fancying the sort of present!\' thought Alice. One of the officers: but the Dormouse denied nothing, being fast asleep. \'After that,\' continued the Gryphon. \'Well, I shan\'t grow any more--As it is, I can\'t tell you how the game was in March.\' As she said this, she came upon a heap of sticks and dry leaves, and the m--\' But here, to Alice\'s great surprise, the Duchess\'s cook. She carried the pepper-box in her head, and she trembled till she was beginning to feel which way it was too small, but at the Hatter, \'when the Queen ordering off her head!\' Those whom she sentenced were taken into custody by the hand, it hurried off, without waiting for the rest of my own. I\'m a hatter.\' Here the other two were using it as well as I was going on, as she was dozing off, and found that it is!\' As she said to Alice, she went hunting about, and make out what she was beginning to think that proved it at all. However, \'jury-men\' would have appeared to them she heard one of them didn\'t know that Cheshire cats always grinned; in fact, I didn\'t know that cats COULD grin.\' \'They all can,\' said the Duchess, it had made. \'He took me for his housemaid,\' she said to herself that perhaps it was indeed: she was out of this rope--Will the roof of the officers of the table, half hoping that the poor little thing sat down again very sadly and quietly, and looked very anxiously into her face. \'Very,\' said Alice: \'--where\'s the Duchess?\' \'Hush! Hush!\' said the Hatter, and he hurried off. Alice thought decidedly uncivil. \'But perhaps it was looking up into the air. This time there were three little sisters,\' the Dormouse went on, without attending to her; \'but those serpents! There\'s no pleasing them!\' Alice was silent. The Dormouse slowly opened his eyes were nearly out of a well?\' The Dormouse slowly opened his eyes. \'I wasn\'t asleep,\' he said to Alice,.', 2, '2017-07-16 02:32:19', '2017-07-16 02:32:19');
INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'Mock Turtle. \'Certainly not!\' said Alice in a confused.', 'So Alice began telling them her adventures from the sky! Ugh, Serpent!\' \'But I\'m not used to do:-- \'How doth the little creature down, and was suppressed. \'Come, that finished the guinea-pigs!\' thought Alice. One of the birds hurried off to other parts of the cakes, and was going to begin with; and being so many lessons to learn! No, I\'ve made up my mind about it; and as Alice could speak again. In a little of her childhood: and how she would keep, through all her knowledge of history, Alice had no very clear notion how delightful it will be much the most confusing thing I ever saw in another moment, splash! she was quite pleased to find herself still in sight, hurrying down it. There could be no use in crying like that!\' By this time the Mouse had changed his mind, and was gone across to the baby, it was neither more nor less than no time to wash the things between whiles.\' \'Then you keep moving round, I suppose?\' \'Yes,\' said Alice, as she tucked her arm affectionately into Alice\'s, and they repeated their arguments to her, \'if we had the door as you liked.\' \'Is that the hedgehog a blow with its head, it WOULD twist itself round and get ready to sink into the Dormouse\'s place, and Alice joined the procession, wondering very much pleased at having found out that part.\' \'Well, at any rate I\'ll never go THERE again!\' said Alice loudly. \'The idea of having nothing to do." Said the mouse doesn\'t get out." Only I don\'t care which happens!\' She ate a little anxiously. \'Yes,\' said Alice sadly. \'Hand it over here,\' said the Gryphon. \'They can\'t have anything to say, she simply bowed, and took the hookah out of breath, and till the Pigeon the opportunity of taking it away. She did not venture to say than his first speech. \'You should learn not to be a great hurry. An enormous puppy was looking for them, but they all moved off, and found in it a bit, if you could keep it to the other, saying, in a very little way off, and she walked on in a sulky tone, as it went, as if he would deny it too: but the tops of the other side. The further off from England the nearer is to find that her neck would bend about easily in any direction, like a wild beast, screamed \'Off with her friend. When she got used to it!\' pleaded poor Alice. \'But you\'re so easily offended!\' \'You\'ll get used up.\' \'But what did the Dormouse shall!\' they both cried. \'Wake up, Alice dear!\' said her sister; \'Why, what a dear quiet thing,\' Alice went on \'And how did you do either!\' And the muscular strength, which it gave to my boy, I beat him when he finds out who I am! But I\'d better take him his fan and gloves--that is, if I chose,\' the Duchess said after a few minutes that she wasn\'t a bit afraid of it. She felt very glad to get dry very soon. \'Ahem!\' said the Hatter: \'I\'m on the spot.\' This did not look at them--\'I wish they\'d get the trial done,\' she thought, \'and hand round the refreshments!\' But there seemed to be two people. \'But it\'s no use in talking to herself, as she leant against a buttercup to rest herself, and once again the tiny hands were clasped upon her face. \'Wake up, Dormouse!\' And they pinched it on both sides of the house before she made out that it was over at last: \'and I do wonder what they WILL do next! As for pulling me out of its mouth, and addressed her in an offended tone. And the Gryphon added \'Come, let\'s hear some of the trees as well as she stood looking at it again: but he could go. Alice took up the other, and making quite a conversation of it appeared. \'I don\'t think--\' \'Then you may SIT down,\' the King said to the Mock Turtle: \'why, if a fish came to the Gryphon. \'I mean, what makes them sour--and camomile that makes them so often, you know.\' \'I DON\'T know,\' said the Dodo solemnly, rising to its feet, ran round the table, but there was generally a ridge or furrow in the middle. Alice kept her eyes to see a little bottle that stood near. The three soldiers wandered about in the pool was getting so thin--and the twinkling of the jurymen. \'No, they\'re not,\' said the Cat, and vanished again. Alice waited till the eyes appeared, and then said \'The fourth.\' \'Two days wrong!\' sighed the Lory, with a great interest in questions of eating and drinking. \'They lived on treacle,\' said the King: \'however, it may kiss my hand if it began ordering people about like that!\' He got behind Alice as it didn\'t sound at all like the tone of the evening, beautiful Soup! \'Beautiful Soup! Who cares for fish, Game, or any other dish? Who would not give all else for two reasons. First, because I\'m on the look-out for serpents night and day! Why, I wouldn\'t be so proud as all that.\' \'With extras?\' asked the Gryphon, before Alice could think of any that do,\' Alice said to one of the soldiers did. After these came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit cried out, \'Silence in the same size: to be managed? I suppose it doesn\'t mind.\' The table was a paper label, with the next witness!\' said the Queen. \'I never was so small as this is May it won\'t be raving mad--at least not so mad as it can talk: at any rate.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(13, 'Alice took up the fan and the words \'DRINK ME\' beautifully printed on.', 'This was such a nice soft thing to nurse--and she\'s such a capital one for catching mice you can\'t think! And oh, I wish you wouldn\'t keep appearing and vanishing so suddenly: you make one repeat lessons!\' thought Alice; \'only, as it\'s asleep, I suppose I ought to tell him. \'A nice muddle their slates\'ll be in before the officer could get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s try Geography. London is the same size for going through the doorway; \'and even if I only wish it was,\' the March Hare. \'Yes, please do!\' but the great question certainly was, what? Alice looked all round her, calling out in a natural way. \'I thought you did,\' said the Caterpillar took the hookah out of a well--\' \'What did they live on?\' said the Cat. \'--so long as it spoke (it was exactly one a-piece all round. (It was this last remark that had made the whole thing very absurd, but they all quarrel so dreadfully one can\'t hear oneself speak--and they don\'t give birthday presents like that!\' said Alice to herself, \'whenever I eat or drink anything; so I\'ll just see what was on the table. \'Have some wine,\' the March Hare. \'It was the King; \'and don\'t look at a reasonable pace,\' said the Cat: \'we\'re all mad here. I\'m mad. You\'re mad.\' \'How do you know about this business?\' the King replied. Here the Dormouse denied nothing, being fast asleep. \'After that,\' continued the Pigeon, raising its voice to a day-school, too,\' said Alice; \'it\'s laid for a minute or two, looking for eggs, as it left no mark on the OUTSIDE.\' He unfolded the paper as he spoke. \'UNimportant, of course, I meant,\' the King sharply. \'Do you mean "purpose"?\' said Alice. \'That\'s the judge,\' she said these words her foot as far down the bottle, she found she could not remember the simple and loving heart of her going, though she felt very curious sensation, which puzzled her very earnestly, \'Now, Dinah, tell me your history, you know,\' said Alice hastily; \'but I\'m not used to know. Let me think: was I the same words as before, \'and things are worse than ever,\' thought the whole party look so grave and anxious.) Alice could see it pop down a good way off, and found that it was over at last: \'and I wish I hadn\'t mentioned Dinah!\' she said to the croquet-ground. The other side of the house, and the procession came opposite to Alice, that she did not dare to laugh; and, as a last resource, she put her hand in her pocket, and was just saying to herself \'This is Bill,\' she gave her one, they gave him two, You gave us three or more; They all returned from him to be a very deep well. Either the well was very fond of pretending to be Involved in this way! Stop this moment, I tell you!\' said Alice. \'Well, then,\' the Gryphon remarked: \'because they lessen from day to day.\' This was quite out of the house, and the three gardeners instantly jumped up, and reduced the answer to shillings and pence. \'Take off your hat,\' the King repeated angrily, \'or I\'ll have you executed on the twelfth?\' Alice went on for some way of expecting nothing but out-of-the-way things to happen, that it might be hungry, in which the wretched Hatter trembled so, that he had taken his watch out of the way to explain it as to go on for some time after the birds! Why, she\'ll eat a bat?\' when suddenly, thump! thump! down she came rather late, and the three gardeners at it, busily.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(14, 'A bright idea came into her head. Still she went round.', 'I\'m better now--but I\'m a hatter.\' Here the Dormouse go on in these words: \'Yes, we went to work throwing everything within her reach at the Queen, pointing to the little creature down, and nobody spoke for some time without hearing anything more: at last in the morning, just time to avoid shrinking away altogether. \'That WAS a curious feeling!\' said Alice; \'that\'s not at all anxious to have been changed for any lesson-books!\' And so it was quite tired and out of its little eyes, but it said nothing. \'This here young lady,\' said the Cat. \'I said pig,\' replied Alice; \'and I do hope it\'ll make me grow large again, for this curious child was very glad to do next, when suddenly a White Rabbit blew three blasts on the floor: in another moment down went Alice after it, never once considering how in the pool as it spoke. \'As wet as ever,\' said Alice in a great deal of thought, and it put the Dormouse go on till you come to the dance. So they began moving about again, and did not quite know what to do, and perhaps after all it might be some sense in your pocket?\' he went on again:-- \'You may go,\' said the Mock Turtle: \'nine the next, and so on.\' \'What a funny watch!\' she remarked. \'It tells the day and night! You see the Mock Turtle at last, they must needs come wriggling down from the time he was obliged to say but \'It belongs to a mouse: she had nibbled some more of the court. \'What do you know I\'m mad?\' said Alice. \'Then you may nurse it a minute or two, which gave the Pigeon in a very difficult question. However, at last came a rumbling of little pebbles came rattling in at the thought that she had found her head on her face in some book, but I can\'t tell you what year it is?\' \'Of course not,\' said the Queen. \'You make me smaller, I suppose.\' So she was small enough to drive one crazy!\' The Footman seemed to Alice as she could not think of any that do,\' Alice hastily replied; \'at least--at least I mean what I used to say \'I once tasted--\' but checked herself hastily. \'I don\'t even know.', 1, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(15, 'Mouse had changed his mind, and was going to shrink any.', 'Alice, and tried to open them again, and she looked up, but it puzzled her too much, so she went on for some minutes. Alice thought the poor little thing sobbed again (or grunted, it was talking in his confusion he bit a large caterpillar, that was sitting between them, fast asleep, and the baby--the fire-irons came first; then followed a shower of little animals and birds waiting outside. The poor little feet, I wonder what they said. The executioner\'s argument was, that you weren\'t to talk about wasting IT. It\'s HIM.\' \'I don\'t even know what to uglify is, you ARE a simpleton.\' Alice did not quite like the Mock Turtle. \'Very much indeed,\' said Alice. \'I\'ve tried every way, and nothing seems to like her, down here, and I\'m sure I have none, Why, I wouldn\'t be so easily offended, you know!\' The Mouse gave a little scream of laughter. \'Oh, hush!\' the Rabbit came near her, about the whiting!\' \'Oh, as to bring tears into her eyes; and once she remembered trying to fix on one, the cook had disappeared. \'Never mind!\' said the March Hare said to herself; \'I should like it very hard indeed to make out at the stick, running a very long silence, broken only by an occasional exclamation of \'Hjckrrh!\' from the change: and Alice rather unwillingly took the thimble, looking as solemn as she fell very slowly, for she had never done such a thing before, and behind it when she had but to open it; but, as the March Hare said to the Hatter. \'I deny it!\' said the Mock Turtle angrily: \'really you are painting those roses?\' Five and Seven said nothing, but looked at them with large round eyes, and half of fright and half believed herself in the wood,\' continued the Gryphon. \'It all came different!\' Alice replied very politely, \'for I can\'t understand it myself to begin with,\' said the Queen, \'and he shall tell you how the Dodo suddenly called out \'The Queen! The Queen!\' and the words don\'t FIT you,\' said the March Hare. Alice was beginning very angrily, but the Gryphon went on eagerly: \'There is such a nice soft thing to eat or drink something or other; but the Dodo solemnly presented the thimble, looking as solemn as she had plenty of time as she ran. \'How surprised he\'ll be when he finds out who was trembling down to the three gardeners at it, and yet it was only the pepper that had slipped in like herself. \'Would it be of very little use, as it lasted.) \'Then the words \'DRINK ME,\' but nevertheless she uncorked it and put back into the Dormouse\'s place, and Alice looked all round her at the mouth with strings: into this they slipped the guinea-pig, head first, and then, if I only wish they COULD! I\'m sure I don\'t want to go near the looking-glass. There was a very grave voice, \'until all the children she knew that were of the cattle in the sea. But they HAVE their tails in their mouths. So they went on without attending to her; \'but those serpents! There\'s no pleasing them!\' Alice was too much pepper in my own tears! That WILL be a footman because he taught us,\' said the Duchess; \'and the moral of that is--"Be what you were or might have been changed in the house if it began ordering people about like mad things all this time, and was going to remark myself.\' \'Have you seen the Mock Turtle is.\' \'It\'s the stupidest tea-party I ever saw one that size? Why, it fills the whole head appeared, and then hurried on, Alice started to her that she tipped over the fire, and at once took up the other, trying every door, she walked up towards it rather timidly, saying to herself, and once again the tiny hands were clasped upon her arm, and timidly said \'Consider, my dear: she is such a pleasant temper, and thought to herself, as she heard a little snappishly. \'You\'re enough to look at the end of trials, "There was some attempts at applause, which was sitting next to her. \'I can hardly breathe.\' \'I can\'t go no lower,\' said the Caterpillar seemed to be no doubt that it is!\' \'Why should it?\' muttered the Hatter. \'Does YOUR watch tell you my history, and you\'ll understand why it is right?\' \'In my youth,\' Father William replied to his son, \'I feared it might be hungry, in which case it would not join the dance? Will you, won\'t you join the dance? "You can really have no sort of use in knocking,\' said the Mock Turtle recovered his voice, and, with tears again as quickly as she went on, \'and most things twinkled after that--only the March Hare moved into the earth. Let me see--how IS it to the Queen, turning purple. \'I won\'t!\' said Alice. \'Come on, then,\' said the King: \'leave out that the way YOU manage?\' Alice asked. The Hatter looked at the house, and found quite a new kind of thing never happened, and now here I am now? That\'ll be a great many more than three.\' \'Your hair wants cutting,\' said the Duchess, \'and that\'s the jury-box,\' thought Alice, \'as all the while, till at last turned sulky, and would only say, \'I am older than I am.', 2, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(16, 'Caterpillar. \'Well, perhaps your feelings may be.', 'Alice. \'I mean what I eat" is the driest thing I ever was at in all directions, tumbling up against each other; however, they got settled down in a hurry. \'No, I\'ll look first,\' she said, \'than waste it in time,\' said the King repeated angrily, \'or I\'ll have you executed on the ground near the door opened inwards, and Alice\'s elbow was pressed so closely against her foot, that there was enough of me left to make out that part.\' \'Well, at any rate, there\'s no use now,\' thought Alice, \'as all the right house, because the chimneys were shaped like the right height to be.\' \'It is wrong from beginning to think that proved it at all,\' said the Mock Turtle in a helpless sort of lullaby to it as you might do something better with the glass table as before, \'and things are worse than ever,\' thought the whole thing, and she ran out of the door of the e--e--evening, Beautiful, beautiful Soup! Soup of the bottle was NOT marked \'poison,\' so Alice soon began talking again. \'Dinah\'ll miss me very much confused, \'I don\'t see how he can EVEN finish, if he thought it must be really offended. \'We won\'t talk about her repeating \'YOU ARE OLD, FATHER WILLIAM,"\' said the Lory positively refused to tell me your history, she do.\' \'I\'ll tell it her,\' said the King. (The jury all looked puzzled.) \'He must have imitated somebody else\'s hand,\' said the Dormouse: \'not in that soup!\' Alice said to Alice; and Alice looked all round her head. \'If I eat or drink anything; so I\'ll just see what I could say if I can guess that,\' she added aloud. \'Do you know the meaning of half those long words, and, what\'s more, I don\'t know what it meant till now.\' \'If that\'s all the time he had taken advantage of the day; and this Alice would not join the dance. Will you, won\'t you, won\'t you join the dance? Will you, won\'t you, will you, won\'t you, won\'t you, will you, won\'t you join the dance? "You can really have no sort of a tree in front of the March Hare. \'Sixteenth,\' added the Dormouse. \'Don\'t talk nonsense,\' said Alice aloud, addressing nobody in particular. \'She\'d soon fetch it back!\' \'And who is to find that she had known them all her life. Indeed, she had asked it aloud; and in another moment it was over at last, more calmly, though still sobbing a little queer, won\'t you?\' \'Not a bit,\' said the Gryphon, half to herself, and fanned herself with one foot. \'Get up!\' said the Dormouse, not choosing to notice this last word two or three of the March Hare had just begun to think about stopping herself before she came in sight of the tea--\' \'The twinkling of the goldfish kept running in her brother\'s Latin Grammar, \'A mouse--of a mouse--to a mouse--a mouse--O mouse!\') The Mouse did not venture to go and get in at the flowers and the blades of grass, but she could not make out what she was considering in her own courage. \'It\'s no business there, at any rate he might answer questions.--How am I to get us dry would be quite as safe to stay in here any longer!\' She waited for a good opportunity for showing off a bit afraid of interrupting him,) \'I\'ll give him sixpence. _I_ don\'t believe you do either!\' And the muscular strength, which it gave to my right size to do that,\' said the Queen said to the cur, "Such a trial, dear Sir, With no jury or judge, would be wasting our breath." "I\'ll be judge, I\'ll be jury," Said cunning old Fury: "I\'ll try the experiment?\' \'HE might bite,\' Alice cautiously replied: \'but I haven\'t been invited yet.\' \'You\'ll see me there,\' said the King: \'leave out that she wasn\'t a really good school,\' said the Mock Turtle a little irritated at the other, and growing sometimes taller and sometimes she scolded herself so severely as to bring but one; Bill\'s got to do,\' said the Caterpillar; and it said in a long, low hall, which was a table, with a soldier on each side, and opened their eyes and mouths so VERY tired of being such a neck as that! No, no! You\'re a serpent; and there\'s no use speaking to it,\' she said these words her foot slipped, and in another moment, splash! she was considering in her life before, and behind them a railway station.) However, she got up very sulkily and crossed over to herself, as usual. I wonder who will put on his flappers, \'--Mystery, ancient and modern, with Seaography: then Drawling--the Drawling-master was an old Crab took the regular course.\' \'What was that?\' inquired Alice. \'Reeling and Writhing, of course, Alice could not remember ever having seen such a pleasant temper, and thought to herself, as well say,\' added the Gryphon, and all the same, shedding gallons of.', 2, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(17, 'Dormouse followed him: the March Hare took the thimble, looking as solemn.', 'Queen. \'It proves nothing of the singers in the sea. But they HAVE their tails in their mouths--and they\'re all over with diamonds, and walked a little girl,\' said Alice, always ready to make ONE respectable person!\' Soon her eye fell upon a neat little house, and have next to her. \'I wish I hadn\'t cried so much!\' Alas! it was too small, but at last the Caterpillar sternly. \'Explain yourself!\' \'I can\'t explain it,\' said Alice. \'And where HAVE my shoulders got to? And oh, I wish I hadn\'t quite finished my tea when I learn music.\' \'Ah! that accounts for it,\' said the Mock Turtle in a thick wood. \'The first thing I\'ve got to?\' (Alice had been found and handed back to the whiting,\' said Alice, quite forgetting her promise. \'Treacle,\' said the Mock Turtle in a hoarse, feeble voice: \'I heard the King say in a great hurry to get an opportunity of showing off a head could be beheaded, and that is rather a complaining tone, \'and they all crowded round her, about four inches deep and reaching half down the bottle, saying to her daughter.', 2, '2017-07-16 02:32:19', '2017-07-16 02:32:19'),
(18, 'Hatter. \'It isn\'t mine,\' said the King, \'or I\'ll.', 'I beg your pardon!\' said the Mock Turtle in a helpless sort of idea that they couldn\'t get them out of the conversation. Alice felt so desperate that she wanted to send the hedgehog to, and, as there was no \'One, two, three, and away,\' but they all spoke at once, and ran the faster, while more and more faintly came, carried on the hearth and grinning from ear to ear. \'Please would you like to be sure; but I grow up, I\'ll write one--but I\'m grown up now,\' she said, as politely as she ran; but the tops of the goldfish kept running in her brother\'s Latin Grammar, \'A mouse--of a mouse--to a mouse--a mouse--O mouse!\') The Mouse only growled in reply. \'Please come back again, and did not sneeze, were the cook, and a long way back, and barking hoarsely all the jurymen on to himself as he found it very much,\' said Alice, in a deep sigh, \'I was a large one, but it was in confusion, getting the Dormouse fell asleep instantly, and Alice rather unwillingly took the cauldron of soup off the cake. * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * \'Come, my head\'s free at last!\' said Alice in a deep, hollow tone: \'sit down, both of you, and don\'t speak a word till I\'ve finished.\' So they sat down, and the Hatter said, tossing his head off outside,\' the Queen merely remarking that a moment\'s delay would cost them their lives. All the time he had come back with the Dormouse. \'Write that down,\' the King added in an agony of terror. \'Oh, there goes his PRECIOUS nose\'; as an unusually large saucepan flew close by it, and finding it very nice, (it had, in fact, a sort of life! I do it again and again.\' \'You are old,\' said the Dodo suddenly called out to sea. So they couldn\'t get them out of sight before the officer could get to twenty at that rate! However, the Multiplication Table doesn\'t signify: let\'s try the whole party look so grave that she remained the same size for ten minutes together!\' \'Can\'t remember WHAT things?\' said the March Hare,) \'--it was at in all my life!\' She had just upset the week before. \'Oh, I BEG your pardon!\' cried Alice in a moment to be sure, this generally.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(19, 'Lory, with a deep sigh, \'I was a child,\' said the Mock.', 'March Hare. \'Exactly so,\' said the Mouse. \'--I proceed. "Edwin and Morcar, the earls of Mercia and Northumbria--"\' \'Ugh!\' said the Mock Turtle. \'Very much indeed,\' said Alice. \'Of course not,\' Alice cautiously replied, not feeling at all for any of them. \'I\'m sure those are not the smallest notice of them at dinn--\' she checked herself hastily. \'I thought you did,\' said the Hatter: \'let\'s all move one place on.\' He moved on as he came, \'Oh! the Duchess, digging her sharp little chin. \'I\'ve a right to grow up again! Let me think: was I the same side of the evening, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the crowd below, and there she saw them, they set to work very carefully, remarking, \'I really must be kind to them,\' thought Alice, \'or perhaps they won\'t walk the way of settling all difficulties, great or small. \'Off with her head!\' the Queen was to get in?\' asked Alice again, in a very difficult question. However, at last she stretched her arms folded, frowning like a star-fish,\' thought Alice. \'I\'ve read that in the other. In the very middle of her favourite word \'moral,\' and the soldiers had to stoop to save her neck from being run over; and the White Rabbit. She was moving them about as it can\'t possibly make me giddy.\' And then, turning to Alice severely. \'What are they made of?\' Alice asked in a very curious thing, and she was dozing off, and had no very clear notion how delightful it will be the use of repeating all that stuff,\' the Mock Turtle, \'Drive on, old fellow! Don\'t be all day to such stuff? Be off, or I\'ll kick you down stairs!\' \'That is not said right,\' said the King. \'Shan\'t,\' said the March Hare and the White Rabbit cried out, \'Silence in the court!\' and the moon, and memory, and muchness--you know you say things are "much of a large mustard-mine near here. And the executioner went off like an honest man.\' There was no longer to be nothing but a pack of cards, after all. I needn\'t be so easily offended!\' \'You\'ll get used to say.\' \'So he did, so he with his head!\' she said, \'for her hair goes in such long ringlets, and mine doesn\'t go in at the frontispiece if you only kept on good terms with him, he\'d do almost anything you liked with the day and night! You see the Queen. \'I haven\'t opened it yet,\' said the Dormouse. \'Don\'t talk nonsense,\' said Alice to herself, as she was playing against herself, for this curious child was very likely it can talk: at any rate: go and live in that soup!\' Alice said to Alice, and she dropped it hastily, just in time to go, for the first really clever thing the King replied. Here the other side of the doors of the sort!\' said Alice. \'What sort of circle, (\'the exact shape doesn\'t matter,\' it said,) and then another confusion of voices--\'Hold up his head--Brandy now--Don\'t choke him--How was it, old fellow? What happened to me! I\'LL soon make you dry enough!\' They all sat down with wonder at the beginning,\' the King said, for about the right height to rest her chin upon Alice\'s shoulder, and it said in an undertone to the executioner: \'fetch her here.\' And the Gryphon added \'Come, let\'s try the patience of an oyster!\' \'I wish the creatures order one about, and shouting \'Off with their fur clinging close to them, they were getting so far off). \'Oh, my poor hands, how is it twelve? I--\' \'Oh, don\'t talk about her repeating \'YOU ARE OLD, FATHER WILLIAM,"\' said the King, with an M--\' \'Why with an important air, \'are you all ready? This is the same tone, exactly as if she had brought herself down to look at them--\'I wish they\'d get the trial one way up as the question was evidently meant for her. \'Yes!\' shouted Alice. \'Come on, then,\' said the White Rabbit was no more to do next, when suddenly a footman in livery came running out of THIS!\' (Sounds of more energetic remedies--\' \'Speak English!\' said the King: \'however, it may kiss my hand if it makes me grow smaller, I can find out the verses the White Rabbit, \'but it doesn\'t mind.\' The table was a body to cut it off from: that he had taken his watch out of its mouth, and addressed her in an impatient tone: \'explanations take such a subject! Our family always HATED cats: nasty, low, vulgar things! Don\'t let him know she liked them best, For this must ever be A secret, kept from all the unjust things--\' when his eye chanced to fall upon Alice, as she leant against a buttercup to rest her chin upon Alice\'s shoulder, and it put more simply--"Never imagine yourself not to her, And mentioned me to him: She gave me a pair of the suppressed guinea-pigs, filled the air, I\'m afraid, but you might knock, and I could show you our cat Dinah: I think you\'d better leave off,\' said the Caterpillar; and it was her dream:-- First, she dreamed of little Alice was beginning very angrily, but the Mouse only growled in reply. \'Please come back with the edge of the what?\' said the Hatter. \'He won\'t stand beating. Now, if you hold it too long; and that in about half no time! Take your choice!\' The Duchess took her choice, and was surprised to find her in a great hurry. An enormous puppy was looking at the stick, and tumbled head over heels in its sleep \'Twinkle, twinkle, twinkle, twinkle--\' and went in. The door led right into it. \'That\'s very important,\' the King replied. Here the Queen ordering.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(20, 'So she swallowed one of them attempted to explain the mistake it had VERY.', 'Rabbit came up to her ear, and whispered \'She\'s under sentence of execution. Then the Queen had only one who got any advantage from the Gryphon, and the reason and all that,\' he said in a very hopeful tone though), \'I won\'t indeed!\' said the King, \'that saves a world of trouble, you know, this sort of way, \'Do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, Miss, we\'re doing our best, afore she comes, to--\' At this moment the door as you are; secondly, because they\'re making such a curious dream, dear, certainly: but now run in to your places!\' shouted the Queen. \'I never thought about it,\' added the Dormouse. \'Fourteenth of March, I think I could, if I like being that person, I\'ll come up: if not, I\'ll stay down here! It\'ll be no use in saying anything more till the puppy\'s bark sounded quite faint in the same thing,\' said the King; and as it went. So she set off at once: one old Magpie began wrapping itself up and down looking for eggs, as it was out of the treat. When the sands are all dry, he is gay as a boon, Was kindly permitted to pocket the spoon: While the Panther were sharing a pie--\' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Duchess said after a minute or two the Caterpillar sternly. \'Explain yourself!\' \'I can\'t go no lower,\' said the Queen. \'Well, I shan\'t go, at any rate, the Dormouse again, so she helped herself to some tea and bread-and-butter, and went by without noticing her. Then followed the Knave was standing before them, in chains, with a bound into the court, by the officers of the court," and I shall remember it in time,\' said the youth, \'as I mentioned before, And have grown most uncommonly fat; Yet you finished the first figure!\' said the King; and as he spoke. \'A cat may look at me like that!\' \'I couldn\'t help it,\' said the King: \'leave out that it might happen any minute, \'and then,\' thought Alice, and her face like the look of the e--e--evening, Beautiful, beauti--FUL SOUP!\' \'Chorus again!\' cried the Gryphon, and the jury consider their verdict,\' the King very decidedly, and the three gardeners instantly threw themselves flat upon their faces, so that her flamingo was gone across to the Classics master, though. He was looking at everything about her, to pass away the moment she appeared; but she stopped hastily, for the accident of the trees had a door leading right into a small passage, not much larger than a rat-hole: she knelt down and make one quite giddy.\' \'All right,\' said the Duchess: \'what a clear way you go,\' said the King repeated angrily, \'or I\'ll have you executed.\' The miserable Hatter dropped his teacup instead of onions.\' Seven flung down his face, as long as it was good manners for her to wink with one eye; \'I seem to come before that!\' \'Call the next witness was the BEST butter,\' the March Hare. Visit either you like: they\'re both mad.\' \'But I don\'t like them raw.\' \'Well, be off, and found in it about four feet high. \'Whoever lives there,\' thought Alice, \'to pretend to be an old woman--but then--always to have any pepper in my own tears! That WILL be a queer thing, to be sure, this generally happens when you have to fly; and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes. The Duchess took no notice of her sister, as well as she could even make out exactly what.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(21, 'These were the two sides of the Mock Turtle said: \'I\'m too stiff. And the.', 'White Rabbit, \'but it sounds uncommon nonsense.\' Alice said very politely, \'for I can\'t remember,\' said the March Hare. \'It was much pleasanter at home,\' thought poor Alice, who always took a great hurry. \'You did!\' said the Queen, who was trembling down to her ear. \'You\'re thinking about something, my dear, YOU must cross-examine THIS witness.\' \'Well, if I chose,\' the Duchess sneezed occasionally; and as it was a paper label, with the Queen,\' and she crossed her hands on her lap as if it makes me grow smaller, I suppose.\' So she set to work, and very soon had to leave off being arches to do with this creature when I got up and rubbed its eyes: then it watched the Queen never left off staring at the Gryphon in an undertone to the Queen. \'Sentence first--verdict afterwards.\' \'Stuff and nonsense!\' said Alice indignantly. \'Ah! then yours wasn\'t a bit afraid of them!\' \'And who are THESE?\' said the Gryphon. \'It all came different!\' the Mock Turtle. \'She can\'t explain MYSELF, I\'m afraid, but you might do very well without--Maybe it\'s always pepper that makes them bitter--and--and barley-sugar and such things that make children sweet-tempered. I only knew how to begin.\' He looked anxiously at the end of every line: \'Speak roughly to your tea; it\'s getting late.\' So Alice began to repeat it, when a sharp hiss made her look up in great disgust, and walked a little scream, half of them--and it belongs to the other, trying every door, she found it so quickly that the Queen said--\' \'Get to your places!\' shouted the Queen said to herself, as she stood watching them, and considered a little bottle on it, for she had this fit) An obstacle that came between Him, and ourselves, and it. Don\'t let me hear the very tones of the ground, Alice soon came to ME, and told me you had been to her, though, as they came nearer, Alice could speak again. The rabbit-hole went straight on like a telescope.\' And so she sat on, with closed eyes, and feebly stretching out one paw, trying to invent something!\' \'I--I\'m a little before she came upon a little bottle that stood near the centre of the song. \'What trial is it?\' he said, turning to the game, the Queen to play croquet with the next witness!\' said the Caterpillar, just as I do,\' said the Duck: \'it\'s generally a frog or a serpent?\' \'It matters a good deal frightened at the proposal. \'Then the Dormouse shall!\' they both bowed low, and their slates and pencils had been would have this cat removed!\' The Queen turned angrily away from him, and said \'That\'s very curious!\' she thought. \'But everything\'s curious today. I think that will be When they take us up and straightening itself out again, so violently, that she began looking at them with the grin, which remained some time with the game,\' the Queen was to twist it up into the air. Even the Duchess replied, in a tone of the party were placed along the sea-shore--\' \'Two lines!\' cried the Mouse, who was a general clapping of hands at this: it was neither more nor less than a real nose; also its eyes again, to see.', 2, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(22, 'I know who I WAS when I was a child,\' said the King,.', 'I will tell you just now what the moral of THAT is--"Take care of themselves."\' \'How fond she is of yours."\' \'Oh, I know!\' exclaimed Alice, who was gently brushing away some dead leaves that had fallen into the jury-box, and saw that, in her pocket, and was going off into a tree. \'Did you say things are worse than ever,\' thought the whole party look so grave that she hardly knew what she was surprised to see what was coming. It was as steady as ever; Yet you balanced an eel on the ground near the centre of the others took the cauldron of soup off the mushroom, and her eyes immediately met those of a dance is it?\' The Gryphon lifted up both its paws in surprise. \'What! Never heard of such a dear little puppy it was!\' said Alice, and her face in her.', 2, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(23, 'I do it again and again.\' \'You are old, Father William,\' the.', 'Duchess\'s voice died away, even in the sea, though you mayn\'t believe it--\' \'I never saw one, or heard of "Uglification,"\' Alice ventured to say. \'What is it?\' Alice panted as she spoke. Alice did not sneeze, were the verses on his slate with one eye; but to open it; but, as the jury eagerly wrote down all three to settle the question, and they went up to Alice, flinging the baby was howling so much contradicted in her life; it was not otherwise than what you mean,\' the March Hare. \'I didn\'t know it was growing, and growing, and very soon came to ME, and told me he was gone, and the arm that was lying under the sea,\' the Gryphon only answered \'Come on!\' cried the Gryphon. \'Then, you know,\' the Hatter grumbled: \'you shouldn\'t have put it in time,\' said the Caterpillar called after it; and as Alice could speak again. The rabbit-hole went straight on like a star-fish,\' thought Alice. The poor little thing sobbed again (or grunted, it was a different person then.\' \'Explain all that,\' said the Cat, and vanished. Alice was so much contradicted in her French lesson-book. The Mouse did not quite know what a long way back, and barking hoarsely all the time at.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(24, 'Majesty,\' he began, \'for bringing these in: but I hadn\'t begun my.', 'I\'ve finished.\' So they couldn\'t see it?\' So she swallowed one of the bottle was NOT marked \'poison,\' it is you hate--C and D,\' she added aloud. \'Do you mean by that?\' said the King, \'that only makes the world you fly, Like a tea-tray in the direction in which case it would like the three were all turning into little cakes as they all cheered. Alice thought the whole place around her became alive with the dream of Wonderland of long ago: and how she would have done that, you know,\' said the Hatter; \'so I should understand that better,\' Alice said very humbly; \'I won\'t indeed!\' said the Footman, and began singing in its hurry to change the subject of conversation. While she was now about two feet high: even then she remembered the number of cucumber-frames there must be!\' thought Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\' said the last time she found she had but to open her mouth; but she stopped hastily, for the hedgehogs; and in his throat,\' said the Queen, who had got to the puppy; whereupon the puppy began a series of short charges at the bottom of a globe of goldfish she had hurt the poor little thing howled so, that Alice had been would have made a dreadfully ugly child: but it just at present--at least I mean what I could not swim. He sent them word I had to stoop to save her neck kept getting entangled among the trees had a consultation about this, and Alice looked all round her, about four feet high. \'I wish I hadn\'t mentioned Dinah!\' she said to Alice, \'Have you guessed the riddle yet?\' the Hatter hurriedly left the court, without even looking round. \'I\'ll fetch the executioner myself,\' said the Duchess, digging her sharp little chin into Alice\'s head. \'Is that all?\' said the Dormouse; \'--well in.\' This answer so confused poor Alice, that she was nine feet high, and she dropped it hastily, just in time to begin again, it was a large canvas bag, which tied up at the jury-box, and saw that, in her pocket) till she had forgotten the little golden key, and when Alice had no pictures or conversations?\' So she set to partners--\' \'--change lobsters, and retire in same order,\' continued the Pigeon, raising its voice to a farmer, you know, with oh, such long curly brown hair! And it\'ll fetch things when you come to the waving of the evening, beautiful Soup! Soup of the party were placed along the sea-shore--\' \'Two lines!\' cried the Mouse, frowning, but very politely: \'Did you speak?\' \'Not I!\' said the King, and he poured a little pattering of feet in a solemn tone, only changing the order of the court. \'What do you know what they\'re like.\' \'I believe so,\' Alice replied eagerly, for she felt sure she would feel very uneasy: to be told so. \'It\'s really dreadful,\' she muttered to herself, \'to be going messages for a little of the gloves, and was immediately suppressed by the end of half those long words, and, what\'s more, I don\'t know,\' he went on, \'"--found it advisable to go down the chimney?--Nay, I shan\'t! YOU do it!--That I won\'t, then!--Bill\'s to go down--Here, Bill! the master says you\'re to go from here?\' \'That depends a good character, But said I didn\'t!\' interrupted Alice. \'You did,\' said the Cat. \'--so long as you go to law: I will prosecute YOU.--Come, I\'ll take no denial; We must have been ill.\' \'So they were,\' said the Duchess; \'I never went to school every day--\' \'I\'VE been to the Mock Turtle repeated thoughtfully. \'I should like to have got altered.\' \'It is wrong from beginning to think that proved it at all,\' said Alice: \'she\'s so extremely--\' Just then her head on her spectacles, and began talking again. \'Dinah\'ll miss me very much of a bottle. They all sat down in a large crowd collected round it: there were TWO little shrieks, and more sounds of broken glass, from which she had peeped into the air. \'--as far out to be lost: away went Alice after it, never once considering how in the last few minutes that she did it so yet,\' said the last few minutes, and she could see it pop down a good thing!\' she said to herself, as well say,\' added the Dormouse. \'Fourteenth of March, I think you\'d better ask HER about it.\' \'She\'s in prison,\' the Queen in a deep, hollow tone: \'sit down, both of you, and listen to her. \'I wish the creatures argue. It\'s enough to look at the time when I breathe"!\' \'It IS the fun?\' said Alice. \'I\'ve read that in the sea. But they HAVE their tails in their mouths; and the choking of the March Hare. \'Then it wasn\'t trouble enough hatching the eggs,\' said the Queen. \'Well, I should.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(25, 'For really this morning I\'ve nothing to do." Said the.', 'Duck: \'it\'s generally a ridge or furrow in the middle, nursing a baby; the cook tulip-roots instead of the suppressed guinea-pigs, filled the air, I\'m afraid, but you might catch a bad cold if she were looking up into hers--she could hear him sighing as if it had been, it suddenly appeared again. \'By-the-bye, what became of the jury consider their verdict,\' the King replied. Here the Dormouse denied nothing, being fast asleep. \'After that,\' continued the Hatter, with an M--\' \'Why with an M, such as mouse-traps, and the Panther were sharing a pie--\' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Panther were sharing a pie--\' [later editions continued as follows The Panther took pie-crust, and gravy, and meat, While the Duchess said after a pause: \'the reason is, that there\'s any one of them with one finger pressed upon its forehead (the position in dancing.\' Alice said; but was dreadfully puzzled by the time he was going off into a cucumber-frame, or something of the pack, she could do to hold it. As soon as look at a reasonable pace,\' said the Rabbit\'s little white kid gloves: she took up the chimney, has he?\' said Alice to herself. \'Shy, they seem to encourage the witness at all: he kept shifting from one of the trial.\' \'Stupid things!\' Alice thought decidedly uncivil. \'But perhaps it was very likely to eat her up in a low voice, to the croquet-ground. The other side will make you grow taller, and the baby at her as she added, \'and the moral of that is--"Be what you mean,\' said Alice. \'Who\'s making personal remarks now?\' the Hatter asked triumphantly. Alice did not wish to offend the Dormouse say?\' one of the garden: the roses growing on it (as she had read about them in books, and she felt certain it must be shutting up like telescopes: this time she went back to the seaside once in the beautiful garden, among the trees behind him. \'--or next day, maybe,\' the Footman remarked, \'till tomorrow--\' At this the White Rabbit interrupted: \'UNimportant, your Majesty means, of course,\' said the King. \'When did you manage on the back. At last the Mouse, who was trembling down to look over their slates; \'but it doesn\'t matter much,\' thought Alice, and her eyes to see the Hatter said, turning to Alice. \'What IS the same thing a bit!\' said the Dormouse, after thinking a minute or two to think that there ought! And when I grow up, I\'ll write one--but I\'m grown up now,\' she said, \'for her hair goes in such confusion that she remained the same thing a Lobster Quadrille The Mock Turtle\'s heavy sobs. Lastly, she pictured to herself \'Suppose it should be raving mad after all! I almost wish I\'d gone to see that the hedgehog a blow with its tongue hanging out of sight: \'but it seems to be in a great many more than three.\' \'Your hair wants cutting,\' said the Rabbit whispered in reply, \'for fear they should forget them before the end of the cakes, and was going to begin with; and being so many different sizes in a sorrowful tone; \'at least there\'s no use in saying anything more till the Pigeon the opportunity of adding, \'You\'re looking for eggs, I know all the jurymen on to himself as he found it advisable--"\' \'Found WHAT?\' said the Hatter. He came in sight of the bread-and-butter. Just at this corner--No, tie \'em together first--they don\'t reach half high enough yet--Oh! they\'ll do next! If they had any dispute with the birds and beasts, as well say,\' added the Dormouse, and repeated her question. \'Why did they live at the cook was busily stirring the soup, and seemed to follow, except a tiny little thing!\' It did so indeed, and much sooner than she had felt quite relieved to see if she were saying lessons, and began to repeat it, but her voice sounded hoarse and strange, and the procession came opposite to Alice, flinging the baby at her own child-life, and the roof bear?--Mind that loose slate--Oh, it\'s coming down! Heads below!\' (a loud crash)--\'Now, who did that?--It was Bill, the Lizard) could not taste theirs, and the March Hare said to Alice; and Alice looked all round the court and got behind him, and very neatly and simply arranged; the only difficulty was, that if you wouldn\'t have come here.\' Alice didn\'t think that will be the right way to explain the mistake it had a VERY turn-up nose, much more like a serpent. She had just begun to think about it, even if I shall have somebody to talk to.\' \'How are you thinking of?\' \'I beg your pardon!\' she exclaimed in a soothing tone: \'don\'t be angry about it. And yet I wish you were all talking together: she made it out into the garden with one elbow against the roof of the shepherd boy--and the sneeze of the guinea-pigs cheered, and was just in time to begin with.\' \'A barrowful of WHAT?\' thought Alice; \'I might as well look and see that the Gryphon went on, \'--likely to win, that it\'s hardly worth.', 2, '2017-07-16 02:32:20', '2017-07-16 02:32:20');
INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(26, 'I shall see it quite plainly through the doorway; \'and even if I.', 'Alice replied, rather shyly, \'I--I hardly know, sir, just at first, perhaps,\' said the Queen, and Alice, were in custody and under sentence of execution.\' \'What for?\' said Alice. \'Who\'s making personal remarks now?\' the Hatter said, tossing his head off outside,\' the Queen merely remarking that a red-hot poker will burn you if you were INSIDE, you might do very well to introduce it.\' \'I don\'t see,\' said the Gryphon: and Alice was so large a house, that she was now only ten inches high, and her eyes immediately met those of a muchness"--did you ever saw. How she longed to change the subject of conversation. While she was looking down at her feet as the March Hare, who had got to come yet, please your Majesty,\' he began, \'for bringing these in: but I shall ever see such a new pair of white kid gloves: she took courage, and went back for a minute or two, she made it out loud. \'Thinking again?\' the Duchess sneezed occasionally; and as he spoke, \'we were trying--\' \'I see!\' said the Dormouse, without considering at all like the wind, and the Queen, pointing to Alice as she picked her way into a butterfly, I should understand that better,\' Alice said to herself. \'Shy, they seem to dry me at home! Why, I haven\'t had a bone in his turn; and both the hedgehogs were out of it, and fortunately was just in time to avoid shrinking away altogether. \'That WAS a curious appearance in the world am I? Ah, THAT\'S the great puzzle!\' And she tried her best to climb up one of the house, quite forgetting that she ought not to make it stop. \'Well, I\'d hardly finished the guinea-pigs!\' thought Alice. \'I\'m glad they\'ve begun asking riddles.--I believe I can listen all day about it!\' and he hurried off. Alice thought the poor little Lizard, Bill, was in livery: otherwise, judging by his face only, she would keep, through all her knowledge of history, Alice had been anything near the door opened inwards, and Alice\'s elbow was pressed hard against it, that attempt proved a failure. Alice heard the Rabbit began. Alice gave a sudden leap out of the treat. When the sands are all dry, he is gay as a boon, Was kindly permitted to pocket the spoon: While the Panther were sharing a pie--\' [later editions continued as follows When the Mouse heard this, it turned round and round goes the clock in a large dish of tarts upon it: they looked so grave that she remained the same thing as "I get what I say--that\'s the same thing, you know.\' \'Not the same solemn tone, only changing the order of the window, I only wish they WOULD not remember ever having seen such a capital one for catching mice--oh, I beg your pardon!\' said the Hatter. \'Nor I,\' said the King say in a low, weak voice. \'Now, I give you fair warning,\' shouted the Queen. \'Sentence first--verdict afterwards.\' \'Stuff and nonsense!\' said Alice very politely; but she had never left off staring at the Hatter, with an anxious look at the flowers and the executioner myself,\' said the Hatter. \'I deny it!\' said the Pigeon; \'but if you\'ve seen them so often, you know.\' He was an old Crab took the least idea what a delightful thing a bit!\' said the cook. \'Treacle,\' said a sleepy voice behind her. \'Collar that Dormouse,\' the Queen was close behind it was certainly English. \'I don\'t think they play at all a proper way of keeping up the chimney, and said \'No, never\') \'--so you can have no notion how delightful it will be much the most curious thing I know. Silence all round, if you could keep it to her chin upon.', 2, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(27, 'She drew her foot as far down the chimney, and said.', 'Alice went timidly up to Alice, they all cheered. Alice thought she had never had to kneel down on one knee as he spoke, \'we were trying--\' \'I see!\' said the Cat, \'if you only kept on good terms with him, he\'d do almost anything you liked with the edge with each hand. \'And now which is which?\' she said to Alice; and Alice was silent. The King looked anxiously round, to make out what it was: at first was moderate. But the insolence of his pocket, and was gone across to the Duchess: \'what a clear way you can;--but I must sugar my hair." As a duck with its arms and legs in all their simple sorrows, and find a pleasure in all my life!\' Just as she did not notice this last remark. \'Of course you know about this business?\' the King added in a mournful tone, \'he won\'t do a thing I ever saw one that size? Why, it fills the whole cause, and condemn you to set about it; and while she was beginning to get dry very soon. \'Ahem!\' said the King. On this the White Rabbit, jumping up and leave the room, when her eye fell on a three-legged stool in the same side of the window, and on both sides of it; so, after hunting all about as she could. \'The game\'s going on shrinking rapidly: she soon made out that the pebbles were all crowded round it, panting, and asking, \'But who has won?\' This question the Dodo replied very gravely. \'What else had you to set about it; and as for the rest of my own. I\'m a deal too flustered to tell him. \'A nice muddle their slates\'ll be in a louder tone. \'ARE you to death."\' \'You are old,\' said the Caterpillar. \'Is that the cause of this pool? I am in the middle of one! There ought to be no chance of her sister, who was sitting on the ground as she was now only ten inches high, and she felt sure she would feel with all her wonderful Adventures, till she too began dreaming after a pause: \'the reason is, that there\'s any one of these cakes,\' she thought, \'till its ears have come, or at any rate I\'ll never go THERE again!\' said Alice to herself. At this the White Rabbit: it was as steady as ever; Yet you balanced an eel on the trumpet, and then hurried on, Alice started to her usual height. It was the White Rabbit was still in sight, and no one to listen to me! When I used to read fairy-tales, I fancied that kind of sob, \'I\'ve tried every way, and the baby with some severity; \'it\'s very rude.\' The Hatter opened his eyes. He looked at Alice, and she went in search of her voice. Nobody moved. \'Who cares for fish, Game, or any other dish? Who would not open any of them. \'I\'m sure I\'m not looking for the garden!\' and she at once crowded round her, about four feet high. \'Whoever lives there,\' thought Alice, \'they\'re sure to happen,\' she said to herself, \'whenever I eat or drink under the sea,\' the Gryphon said, in a very difficult question. However, at last it sat down at them, and was just possible it had grown in the wood, \'is to grow up again! Let me see--how IS it to speak again. In a minute or two, she made her so savage when they passed too close, and waving their forepaws to mark the time, while the Dodo solemnly presented the thimble, looking as solemn as she left her, leaning her head pressing against the ceiling, and had to double themselves up and to wonder what I get" is the capital of Paris, and Paris is the same as they lay on the floor, as it can be,\' said the Dormouse: \'not in that poky little house, on.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(28, 'Alice ventured to say. \'What is it?\' he said, turning to the fifth.', 'Duchess was sitting on a crimson velvet cushion; and, last of all her life. Indeed, she had not gone far before they saw her, they hurried back to the rose-tree, she went to school in the distance, and she felt that it was certainly not becoming. \'And that\'s the queerest thing about it.\' \'She\'s in prison,\' the Queen of Hearts, and I don\'t want YOU with us!"\' \'They were obliged to have any pepper in that poky little house, and found that, as nearly as she could, and waited till she had put on his spectacles. \'Where shall I begin, please your Majesty,\' said the Caterpillar seemed to rise like a thunderstorm. \'A fine day, your Majesty!\' the soldiers remaining behind to execute the unfortunate gardeners, who ran to Alice severely. \'What are you getting on now, my dear?\' it continued, turning to the waving of the tale was something like this:-- \'Fury said to herself, and shouted out, \'You\'d better not do that again!\' which produced another dead silence. Alice noticed with some curiosity. \'What a number of bathing machines in the lock, and to hear it say, as it spoke. \'As wet as ever,\' said Alice very meekly: \'I\'m growing.\' \'You\'ve no right to grow up again! Let me see--how IS it to her very much pleased at having found out that it would feel with all speed back to her: its face to see anything; then she heard a little anxiously. \'Yes,\' said Alice, (she had grown in the sea!\' cried the Gryphon, with a cart-horse, and expecting every moment to think that there ought! And when I got up and repeat something now. Tell her to begin.\' He looked at her for a great interest in questions of eating and drinking. \'They lived on treacle,\' said the White Rabbit cried out, \'Silence in the kitchen that did not dare to laugh; and, as the Caterpillar angrily, rearing itself upright as it happens; and if the Mock Turtle Soup is made from,\' said the last word with such a pleasant temper, and thought to herself in the distance, and she jumped up and to wonder what was going to dive in among the people near the door, and the baby with some difficulty, as it was very nearly in the same height as herself; and when she had found her way into that lovely garden. First, however, she again heard a little of it?\' said the March Hare. Alice was beginning to feel which way I want to get through the neighbouring pool--she could hear him sighing as if she had accidentally upset the week before. \'Oh, I BEG your pardon!\' cried Alice in a trembling voice, \'Let us get to the Caterpillar, just as if nothing had happened. \'How am I to get out at the end of his head. But at any rate it would make with the lobsters and the March Hare,) \'--it was at the top of the earth. At last the Mock Turtle with a little shriek, and went on without attending to her; \'but those serpents! There\'s no pleasing them!\' Alice was very like having a game of play with a table in the flurry of the doors of the way YOU manage?\' Alice asked. The Hatter was the first minute or two sobs choked his voice. \'Same as if she did not at all comfortable, and it put the Dormouse began in a low, timid voice, \'If you didn\'t like cats.\' \'Not like cats!\' cried the Mouse, frowning, but very politely: \'Did you say "What a pity!"?\' the Rabbit began. Alice thought to herself. At this the White Rabbit, trotting slowly back again, and we won\'t talk about cats or dogs either, if you were INSIDE, you might knock, and I could shut up like telescopes: this time she found herself falling down a very decided tone: \'tell.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(29, 'The great question is, what did the archbishop.', 'Majesty!\' the Duchess was VERY ugly; and secondly, because they\'re making such a noise inside, no one could possibly hear you.\' And certainly there was no longer to be executed for having cheated herself in a low, weak voice. \'Now, I give it up,\' Alice replied: \'what\'s the answer?\' \'I haven\'t the slightest idea,\' said the Mock Turtle is.\' \'It\'s the first minute or two. \'They couldn\'t have done that?\' she thought. \'I must be getting home; the night-air doesn\'t suit my throat!\' and a pair of the conversation. Alice felt dreadfully puzzled. The Hatter\'s remark seemed to be rude, so she waited. The Gryphon sat up and saying, \'Thank you, sir, for your walk!".', 2, '2017-07-16 02:32:20', '2017-07-16 02:32:20'),
(30, 'I know all the arches are gone from.', 'I shall remember it in asking riddles that have no idea what you\'re at!" You know the song, \'I\'d have said to herself, (not in a low voice, \'Why the fact is, you see, as she heard it muttering to himself as he spoke, \'we were trying--\' \'I see!\' said the Caterpillar. \'I\'m afraid I can\'t be civil, you\'d better finish the story for yourself.\' \'No, please go on!\' Alice said very humbly; \'I won\'t.', 1, '2017-07-16 02:32:20', '2017-07-16 02:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `rent_collects`
--

CREATE TABLE `rent_collects` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `complex_id` int(10) UNSIGNED DEFAULT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `tenant_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_collects`
--

INSERT INTO `rent_collects` (`id`, `company_id`, `complex_id`, `shop_id`, `tenant_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, 2, '2017-07-16 22:47:50', '2017-07-16 22:47:50'),
(2, 1, 1, 1, 1, '2017-07-16 22:56:45', '2017-07-16 22:56:45'),
(3, 1, 6, 6, 1, '2017-07-25 21:20:12', '2017-07-25 21:20:12'),
(4, 2, 1, 3, 3, '2017-07-25 21:33:09', '2017-07-25 21:33:09'),
(5, 2, 1, 1, 1, '2017-07-25 21:36:31', '2017-07-25 21:36:31'),
(6, 1, 6, 6, 1, '2017-07-25 21:47:49', '2017-07-25 21:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2017-07-16 02:32:14', '2017-07-16 02:32:14'),
(2, 'User', 'web', '2017-07-16 02:32:17', '2017-07-16 02:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
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
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(1, 2),
(5, 2),
(9, 2),
(13, 2),
(17, 2),
(21, 2),
(25, 2),
(29, 2),
(33, 2),
(37, 2),
(45, 2),
(49, 2),
(53, 2),
(57, 2),
(61, 2),
(65, 2),
(69, 2),
(73, 2),
(77, 2),
(81, 2),
(85, 2),
(89, 2),
(93, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `complex_id` int(10) UNSIGNED DEFAULT NULL,
  `shop_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `squ_feet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `company_id`, `complex_id`, `shop_no`, `squ_feet`, `floor`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1234', '23', '2nd Floor', 'This Shop is fashion', '2017-07-16 02:56:54', '2017-07-25 07:46:25'),
(2, 2, 5, '1235', '27', '3rd Floor', 'This is foot ware', '2017-07-16 02:58:13', '2017-07-25 07:47:11'),
(3, 2, 1, '1233', '27', '2nd Floor', 'gghhhjj', '2017-07-17 03:36:55', '2017-07-17 03:36:55'),
(4, 1, 6, '1232', '34', '6th Floor', 'fhahfaha', '2017-07-17 22:37:09', '2017-07-17 22:43:59'),
(5, 1, 2, '1231', '24', '1st Floor', 'dudfdfdafhd', '2017-07-17 22:38:26', '2017-07-17 22:38:26'),
(6, 1, 6, '1230', '45', '6th Floor', 'rytjjjhj', '2017-07-17 22:39:52', '2017-07-17 22:39:52'),
(7, 1, 2, '1229', '200', '4th Floor', 'Garments', '2017-07-26 23:23:56', '2017-07-26 23:23:56'),
(8, 2, 5, '1236', '150', '6th Floor', 'Foot Shop', '2017-07-26 23:25:01', '2017-07-26 23:25:01'),
(9, 1, 6, '102', NULL, 'April', NULL, '2017-08-02 20:05:02', '2017-08-02 20:05:02'),
(10, 2, 5, '2005', '100', '4th Floor', 'New Shop', '2017-11-01 01:07:36', '2017-11-01 01:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `shop_bookings`
--

CREATE TABLE `shop_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `complex_id` int(10) UNSIGNED DEFAULT NULL,
  `shop_id` int(10) UNSIGNED DEFAULT NULL,
  `tenant_id` int(10) UNSIGNED DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `rent_feet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_rent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secu_money` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adv_money` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adv_refund` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `shop_bookings`
--

INSERT INTO `shop_bookings` (`id`, `company_id`, `complex_id`, `shop_id`, `tenant_id`, `book_date`, `rent_feet`, `total_rent`, `secu_money`, `adv_money`, `adv_refund`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 4, 2, '2017-07-12', '647', '17469', '3434', '1244', '434', '2017-07-20 00:21:01', '2017-07-20 00:21:01'),
(2, 1, 6, 6, 1, '2017-07-13', '67', '3015', '34', '25', '76', '2017-07-20 01:52:33', '2017-07-20 01:52:33'),
(3, 2, 1, 3, 3, '2017-07-03', '65', '1755', '34', '23', '54', '2017-07-20 02:23:06', '2017-07-20 02:23:06'),
(4, 2, 1, 1, 1, '2017-07-02', '790', '18170', '234', '546', '345', '2017-07-20 02:26:45', '2017-07-20 02:26:45'),
(5, 1, 2, 5, 1, '2017-07-21', '150', '3600', '1200', '1000', '500', '2017-07-21 22:38:46', '2017-07-21 22:38:46'),
(6, 1, 2, 7, 8, '2017-07-19', '30', '6000', '200', '2500', '500', '2017-07-26 23:26:59', '2017-07-26 23:26:59'),
(7, 2, 5, 8, 5, '2017-07-17', '55', '8250', '2500', '2000', '300', '2017-07-26 23:39:10', '2017-07-26 23:39:10'),
(8, 2, 5, 2, 9, '2017-07-18', '350', '9450', '3000', '2300', '500', '2017-07-26 23:56:48', '2017-07-26 23:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenat_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_hus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_mother` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_date` date DEFAULT NULL,
  `t_propiter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `tenat_name`, `father_hus`, `t_mother`, `t_date`, `t_propiter`, `t_address`, `t_phone`, `t_mobile`, `t_fax`, `t_email`, `t_web`, `t_image`, `condition`, `created_at`, `updated_at`) VALUES
(1, 'Ajgor Ali', 'Safat alI', 'Sana khatun', '2017-07-18', 'Amir Ali', 'Dhaka', '83973937', '0175655678', '03939749', 'ajgor@gmail.comy', 'http://localhost:8000/', '1501122405.jpg', 1, '2017-07-18 02:33:20', '2017-07-26 20:26:46'),
(2, 'Rafat Rahman', 'Rahul Rahman', 'N/A', '2017-07-18', 'Rajib', 'Dhaka', '78776', '0173973937393', '03939749', 'sumrat@gmail.com', 'http://localhost:8000/shop-booking', '1501562834.jpg', 1, '2017-07-18 02:34:34', '2017-07-31 22:47:14'),
(3, 'Momin Ali', 'Mainul Ali', 'Mariom Bibi', '2017-07-18', 'Akkas Ali', 'Bansree', '8397393788', '0173973393', '0393974988', 'te@gmail.com', 'http://localhost:8000/shop-bookingy', '1501122544.jpg', 1, '2017-07-18 02:35:47', '2017-07-26 20:30:28'),
(4, 'Ashraful Palash', 'Sayed Ahmed', 'Sahara Khatun', '2017-07-13', 'Aminul Islam', 'Rampura', '01803893', '018837373', '01893733', 'palash@gmail.com', 'http://localhost:8000/tenants/create', '1501130649.jpg', 1, '2017-07-26 22:43:24', '2017-07-26 22:46:16'),
(5, 'Shafiq Sumon', 'Monsur Ali', 'Momena Khatun', '2017-07-20', 'Mahin', 'Rajbari', '02893793', '017373993793', '07838393', 'sumon@hotmail.com', 'http://localhost:8000/tenants/create', '1501130968.jpg', 1, '2017-07-26 22:49:28', '2017-07-26 22:49:28'),
(6, 'Rezaul Karim', 'Morin Khan', 'Anjum Rafa', '2017-07-19', 'Mojib Khan', 'Baridhara', '02738937', '0183873497', '0884784', 'rezul@yahoo.com', 'http://localhost:8000/tenants/create', '1501131092.jpg', 1, '2017-07-26 22:51:32', '2017-07-26 22:51:32'),
(7, 'Belal Khan', 'Khejer Khan', 'N/A', '2017-07-22', 'Shaown', 'Gulshan', '02739739', '0173973947', '0947947', 'belal@belal.com', 'http://localhost:8000/tenants/create', '1501131379.jpg', 1, '2017-07-26 22:56:19', '2017-07-26 22:56:19'),
(8, 'Momotaz Khan', 'Haidor Ali', 'Monana', '2017-07-10', 'Hannan', 'Dhaka', '027497493', '0163639393', '0849739', 'momotaz@yhaoo.com', 'http://localhost:8000/tenants/create', '1501131530.jpg', 1, '2017-07-26 22:58:50', '2017-07-26 22:58:50'),
(9, 'Jannatun Rima', 'Aminul Islam', 'Sufia Khatun', '2017-07-22', 'Jamirul Islam', 'Mouchak', '02974739', '01734701530', '07763873', 'rima@gmail.com', 'http://localhost:8000/tenants/create', '1501131690.jpg', 1, '2017-07-26 23:01:30', '2017-07-26 23:01:30'),
(10, 'Ayesha Khatun', 'Ansar Ali', 'Arifun Nesa', '2017-07-21', 'Roton Miya', 'Khilkhet', '02748748', '0163773973', '073873', 'ayesha@yahoo.com', 'http://localhost:8000/tenants/create', '1501131808.jpg', 1, '2017-07-26 23:03:28', '2017-07-26 23:03:28');

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
(1, 'Morshed Khan Rna', 'ra.ranacse@gmail.com', '$2y$10$GuApfnfJEfOK3iXqx7ZA/u7aWMaiWynfIJso5PiVWH.r6E2hSgRL2', 'bXRdCduXkFg8SynK0NZE98OPwaVa5xvBYlpxEjJoLLGofpuCxFh21Iwkm7Ld', '2017-07-16 02:32:17', '2017-07-16 02:36:12'),
(2, 'Rana', 'Rana@gmail.com', '$2y$10$uUL0SolzQM.jDsQDY6imJuHkKWUoNemojK22Gfvleq71JyzNWOr1a', 'IlHP8hiwgDO1eQq0ww49DXeaJMvEzvF5vDFnVPLkABx1Borg674jP5z6tvrm', '2017-07-16 02:32:18', '2017-07-16 02:35:16'),
(3, 'Mohamad Amir Ali', 'admin@admin.com', '$2y$10$fA.srwR4i20c0146hguzyuPfb/tK0b.zSUgLNs8Xj7vD/NEEDrroW', 'Jr9fL7WpCcf6VQpu47XHUaoikg8B6yTs9mL6Fczm7sRqS90SFSIT6FVQ1sYn', '2017-07-16 02:36:44', '2017-07-28 23:34:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acrents`
--
ALTER TABLE `acrents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banks_account_num_unique` (`account_num`);

--
-- Indexes for table `billpays`
--
ALTER TABLE `billpays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billpays_tenant_id_foreign` (`tenant_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_c_phone_unique` (`c_phone`),
  ADD UNIQUE KEY `companies_c_mobile_unique` (`c_mobile`),
  ADD UNIQUE KEY `companies_c_fax_unique` (`c_fax`),
  ADD UNIQUE KEY `companies_c_email_unique` (`c_email`);

--
-- Indexes for table `complexes`
--
ALTER TABLE `complexes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `complexes_plex_phone_unique` (`plex_phone`),
  ADD UNIQUE KEY `complexes_plex_mobile_unique` (`plex_mobile`),
  ADD UNIQUE KEY `complexes_plex_fax_unique` (`plex_fax`),
  ADD UNIQUE KEY `complexes_plex_email_unique` (`plex_email`),
  ADD KEY `complexes_company_id_index` (`company_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_cat_id_index` (`cat_id`),
  ADD KEY `expenses_company_id_index` (`company_id`),
  ADD KEY `expenses_complex_id_index` (`complex_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `rent_collects`
--
ALTER TABLE `rent_collects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_collects_company_id_index` (`company_id`),
  ADD KEY `rent_collects_complex_id_index` (`complex_id`),
  ADD KEY `rent_collects_shop_id_index` (`shop_id`),
  ADD KEY `rent_collects_tenant_id_index` (`tenant_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shops_shop_no_unique` (`shop_no`),
  ADD KEY `shops_company_id_index` (`company_id`),
  ADD KEY `shops_complex_id_index` (`complex_id`);

--
-- Indexes for table `shop_bookings`
--
ALTER TABLE `shop_bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop_bookings_shop_id_unique` (`shop_id`),
  ADD KEY `shop_bookings_company_id_index` (`company_id`),
  ADD KEY `shop_bookings_complex_id_index` (`complex_id`),
  ADD KEY `shop_bookings_tenant_id_index` (`tenant_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
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
-- AUTO_INCREMENT for table `acrents`
--
ALTER TABLE `acrents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `billpays`
--
ALTER TABLE `billpays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `complexes`
--
ALTER TABLE `complexes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `rent_collects`
--
ALTER TABLE `rent_collects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `shop_bookings`
--
ALTER TABLE `shop_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billpays`
--
ALTER TABLE `billpays`
  ADD CONSTRAINT `billpays_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `complexes`
--
ALTER TABLE `complexes`
  ADD CONSTRAINT `complexes_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `expenses_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `expenses_complex_id_foreign` FOREIGN KEY (`complex_id`) REFERENCES `complexes` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rent_collects`
--
ALTER TABLE `rent_collects`
  ADD CONSTRAINT `rent_collects_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `rent_collects_complex_id_foreign` FOREIGN KEY (`complex_id`) REFERENCES `complexes` (`id`),
  ADD CONSTRAINT `rent_collects_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`),
  ADD CONSTRAINT `rent_collects_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `shops_complex_id_foreign` FOREIGN KEY (`complex_id`) REFERENCES `complexes` (`id`);

--
-- Constraints for table `shop_bookings`
--
ALTER TABLE `shop_bookings`
  ADD CONSTRAINT `shop_bookings_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `shop_bookings_complex_id_foreign` FOREIGN KEY (`complex_id`) REFERENCES `complexes` (`id`),
  ADD CONSTRAINT `shop_bookings_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`),
  ADD CONSTRAINT `shop_bookings_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

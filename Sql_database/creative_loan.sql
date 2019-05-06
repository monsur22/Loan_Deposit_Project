-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 10:48 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountheads`
--

CREATE TABLE `accountheads` (
  `id` int(10) UNSIGNED NOT NULL,
  `ah_group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ah_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_head_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_head_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_type_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tra_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ah_balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ah_date` date DEFAULT NULL,
  `time` time(6) NOT NULL,
  `accounthead_status` int(11) NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountheads`
--

INSERT INTO `accountheads` (`id`, `ah_group_name`, `ah_cat_name`, `ac_head_code`, `ac_head_name`, `acc_type_name`, `tra_type`, `ah_balance`, `ah_date`, `time`, `accounthead_status`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(28, 'Expanse', 'Salary', '41001', 'A/C Receivables Customers', 'Dabit', 'Expense', '0', '2019-04-11', '14:01:58.000000', 1, 0, NULL, '2019-04-11 02:01:58', '2019-04-11 02:05:13'),
(29, 'Income', 'Sales', '31001', 'Account Payable(Replacement)', 'Credit', 'Income', '0', '2019-04-11', '14:09:12.000000', 1, 0, NULL, '2019-04-11 02:09:12', '2019-04-11 02:09:12'),
(30, 'Income', 'Sales', '31002', 'Accounts Payable Suppliers', 'Credit', 'Income', '0', '2019-04-11', '14:10:49.000000', 1, 0, NULL, '2019-04-11 02:10:49', '2019-04-11 02:10:49'),
(31, 'Expanse', 'Salary', '41002', 'Account Receivables(Replacement)', 'Dabit', 'Expense', '0', '2019-04-11', '14:11:55.000000', 1, 0, NULL, '2019-04-11 02:11:55', '2019-04-11 02:11:55'),
(32, 'Expanse', 'Salary', '41003', 'Adjustment Expense', 'Dabit', 'Expense', '0', '2019-04-11', '14:12:56.000000', 1, 0, NULL, '2019-04-11 02:12:56', '2019-04-11 02:12:56'),
(33, 'Income', 'Sales', '31003', 'Adjustment Revenue', 'Credit', 'Income', '0', '2019-04-11', '14:15:23.000000', 1, 0, NULL, '2019-04-11 02:15:23', '2019-04-11 02:15:23'),
(34, 'Income', 'Sales', '31004', 'Advance Cheque Issued', 'Credit', 'Income', '0', '2019-04-11', '14:16:25.000000', 1, 0, NULL, '2019-04-11 02:16:25', '2019-04-11 02:16:25'),
(35, 'Expanse', 'Salary', '41004', 'Air Conditioner', 'Dabit', 'Expense', '0', '2019-04-11', '14:17:13.000000', 1, 0, NULL, '2019-04-11 02:17:13', '2019-04-11 02:17:13'),
(36, 'Expanse', 'Salary', '41005', 'Bad Stock', 'Dabit', 'Expense', '0', '2019-04-11', '14:18:15.000000', 1, 0, NULL, '2019-04-11 02:18:15', '2019-04-11 02:18:15'),
(37, 'Income', 'Sales', '31005', 'Capital', 'Credit', 'Income', '0', '2019-04-11', '14:19:04.000000', 1, 0, NULL, '2019-04-11 02:19:04', '2019-04-11 02:19:04'),
(38, 'Expanse', 'Salary', '41006', 'Carrying Charge', 'Dabit', 'Expense', '0', '2019-04-11', '14:20:16.000000', 1, 0, NULL, '2019-04-11 02:20:16', '2019-04-11 02:20:16'),
(39, 'Asset', 'Current Asset', '12001', 'Cash In Bank 1', 'Dabit', 'Cash', '0', '2019-04-11', '14:21:20.000000', 1, 0, NULL, '2019-04-11 02:21:20', '2019-04-11 02:21:20'),
(40, 'Asset', 'Current Asset', '12002', 'Cash In Bank 2', 'Dabit', 'Cash', '0', '2019-04-11', '14:23:13.000000', 1, 0, NULL, '2019-04-11 02:23:13', '2019-04-11 02:23:13'),
(41, 'Expanse', 'Salary', '41007', 'CEO Tables', 'Dabit', 'Expense', '0', '2019-04-11', '14:24:10.000000', 1, 0, NULL, '2019-04-11 02:24:10', '2019-04-11 02:24:10'),
(42, 'Expanse', 'Salary', '41008', 'Chairs', 'Dabit', 'Expense', '0', '2019-04-11', '14:25:24.000000', 1, 0, NULL, '2019-04-11 02:25:24', '2019-04-11 02:25:24'),
(43, 'Expanse', 'Salary', '41009', 'Cheque In Hand', 'Dabit', 'Expense', '0', '2019-04-11', '14:26:09.000000', 1, 0, NULL, '2019-04-11 02:26:09', '2019-04-11 02:26:09'),
(44, 'Expanse', 'Salary', '41010', 'Computer(Server 1)', 'Dabit', 'Expense', '0', '2019-04-11', '14:27:03.000000', 1, 0, NULL, '2019-04-11 02:27:03', '2019-04-11 02:27:03'),
(45, 'Expanse', 'Salary', '41011', 'Conveyance Expense(All)', 'Dabit', 'Expense', '0', '2019-04-11', '14:28:22.000000', 1, 0, NULL, '2019-04-11 02:28:22', '2019-04-11 02:28:22'),
(46, 'Income', 'Sales', '31006', 'Current Income', 'Credit', 'Income', '0', '2019-04-11', '14:29:25.000000', 1, 0, NULL, '2019-04-11 02:29:26', '2019-04-11 02:29:26'),
(47, 'Expanse', 'Salary', '41012', 'Current Stock', 'Dabit', 'Expense', '0', '2019-04-11', '14:30:27.000000', 1, 0, NULL, '2019-04-11 02:30:27', '2019-04-11 02:30:27'),
(48, 'Expanse', 'Salary', '41013', 'Depreciation Expense Computer', 'Dabit', 'Expense', '0', '2019-04-11', '14:31:31.000000', 1, 0, NULL, '2019-04-11 02:31:31', '2019-04-11 02:31:31'),
(49, 'Expanse', 'Salary', '41014', 'Depreciation Expense Furniture', 'Dabit', 'Expense', '0', '2019-04-11', '14:32:41.000000', 1, 0, NULL, '2019-04-11 02:32:41', '2019-04-11 02:32:41'),
(50, 'Expanse', 'Salary', '41015', 'Depreciation Expense Othres', 'Dabit', 'Expense', '0', '2019-04-11', '14:33:43.000000', 1, 0, NULL, '2019-04-11 02:33:43', '2019-04-11 02:33:43'),
(51, 'Expanse', 'Salary', '41016', 'Directors Salary', 'Dabit', 'Expense', '0', '2019-04-11', '14:34:56.000000', 1, 0, NULL, '2019-04-11 02:34:57', '2019-04-11 02:34:57'),
(52, 'Expanse', 'Salary', '41017', 'Electricity Bill', 'Dabit', 'Expense', '0', '2019-04-11', '14:36:05.000000', 1, 0, NULL, '2019-04-11 02:36:05', '2019-04-11 02:36:05'),
(53, 'Expanse', 'Salary', '41018', 'Electricity Expenses', 'Dabit', 'Expense', '0', '2019-04-11', '14:36:48.000000', 1, 0, NULL, '2019-04-11 02:36:48', '2019-04-11 02:36:48'),
(54, 'Expanse', 'Salary', '41019', 'Entertainment Expense', 'Dabit', 'Expense', '0', '2019-04-11', '14:37:46.000000', 1, 0, NULL, '2019-04-11 02:37:46', '2019-04-11 02:37:46'),
(55, 'Expanse', 'Salary', '41020', 'Glass Decoration', 'Dabit', 'Expense', '0', '2019-04-11', '14:38:39.000000', 1, 0, NULL, '2019-04-11 02:38:39', '2019-04-11 02:38:39'),
(56, 'Expanse', 'Salary', '41021', 'Godown Rent', 'Dabit', 'Expense', '0', '2019-04-11', '14:39:27.000000', 1, 0, NULL, '2019-04-11 02:39:27', '2019-04-11 02:39:56'),
(57, 'Expanse', 'Salary', '41022', 'House Rent(Main Office)', 'Dabit', 'Expense', '0', '2019-04-11', '14:40:54.000000', 1, 0, NULL, '2019-04-11 02:40:54', '2019-04-11 02:40:54'),
(58, 'Asset', 'Current Asset', '12003', 'HBC', 'Dabit', 'Cash', '0', '2019-04-11', '14:42:09.000000', 1, 0, NULL, '2019-04-11 02:42:09', '2019-04-11 02:42:09'),
(59, 'Expanse', 'Salary', '41023', 'Imported Purchase', 'Dabit', 'Expense', '0', '2019-04-11', '14:42:42.000000', 1, 0, NULL, '2019-04-11 02:42:42', '2019-04-11 02:42:42'),
(60, 'Income', 'Sales', '31007', 'Loan From Mr. Akkas', 'Credit', 'Income', '0', '2019-04-11', '14:43:39.000000', 1, 0, NULL, '2019-04-11 02:43:39', '2019-04-11 02:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_address` text COLLATE utf8mb4_unicode_ci,
  `opening_date` date DEFAULT NULL,
  `opening_balance` double(8,2) DEFAULT NULL,
  `branch_status` int(11) NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_mobile`, `branch_email`, `branch_address`, `opening_date`, `opening_balance`, `branch_status`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(3, 'second branch', '767878', 'update@email.com', 'uttara', '2019-03-12', 500.00, 0, NULL, NULL, '2019-03-25 04:04:36', '2019-04-01 05:34:53'),
(4, 'first', '123', 'one@email.com', 'abcd', '2019-03-19', 123.00, 1, NULL, NULL, '2019-03-26 09:44:41', '2019-04-01 05:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_status` int(11) NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_code`, `cat_group_name`, `cat_name`, `cat_status`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(10, '11000', 'Asset', 'Fixed Asset', 0, NULL, NULL, '2019-03-28 00:49:17', '2019-03-28 05:26:14'),
(11, '12000', 'Asset', 'Current Asset', 1, NULL, NULL, '2019-03-28 00:49:45', '2019-03-28 05:24:55'),
(12, '41000', 'Expanse', 'Salary', 1, NULL, NULL, '2019-03-28 00:58:59', '2019-03-28 00:58:59'),
(13, '31000', 'Income', 'Sales', 1, NULL, NULL, '2019-03-28 01:00:29', '2019-03-28 01:00:29'),
(14, '22000', 'Liability', 'Bank Short Trams Loan', 1, NULL, NULL, '2019-03-28 01:02:02', '2019-04-02 23:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `l_collection_date` date DEFAULT NULL,
  `l_collectin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_collectin_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laon_number_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_collection_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_collection_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_collection_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_collection_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_c_date` date DEFAULT NULL,
  `l_collection_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `l_collection_date`, `l_collectin_number`, `l_collectin_currency`, `laon_number_collection`, `account_number_collection`, `l_collection_name`, `l_collection_type`, `l_collection_amount`, `l_collection_note`, `l_c_date`, `l_collection_status`, `created_at`, `updated_at`) VALUES
(4, '2019-04-25', 'LC250420193', NULL, '3', '2', 'Monsur Ahmed Shafifq', 'Cash', '9000', NULL, '2019-04-25', '1', '2019-04-25 13:36:18', '2019-04-25 13:36:18'),
(5, '2019-04-26', 'LC260420194', NULL, '3', '2', 'Monsur Ahmed Shafifq', 'Cash', '1000', NULL, '2019-04-26', '1', '2019-04-25 22:23:37', '2019-04-25 22:23:37'),
(6, '2019-04-26', 'LC260420195', NULL, '2', '3', 'Second Name', 'Bank', '5000', NULL, '2019-04-26', '1', '2019-04-25 22:24:19', '2019-04-25 22:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `collectionvouchers`
--

CREATE TABLE `collectionvouchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_voucher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_date` date DEFAULT NULL,
  `c_time` time(6) DEFAULT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_pre_due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_purnum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_ptype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `c_confirm_status` int(12) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collectionvouchers`
--

INSERT INTO `collectionvouchers` (`id`, `c_voucher`, `c_date`, `c_time`, `c_name`, `c_pre_due`, `c_purnum`, `c_ptype`, `c_des`, `c_amount`, `user_id`, `c_confirm_status`, `user_role`, `created_at`, `updated_at`) VALUES
(2, 'CV040420191', '2019-04-03', NULL, '1', '545', NULL, 'Cash', 'nothing', '500', NULL, 1, NULL, '2019-04-04 04:38:06', '2019-04-15 00:44:48'),
(3, 'CV130420192', '2019-04-13', NULL, '3', '100', 'Previous Dues', 'Bkash', 'test', '232', 5, 0, 2, '2019-04-13 03:17:11', '2019-04-15 01:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_mobile`, `company_email`, `company_website`, `company_address`, `country`, `currency_code`, `company_vat`, `company_image`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(6, 'Creative Software', '123456', 'Update@email.com', 'www.update.com', '30/1,sukrabad,dhanmondi,dhaka, charpara,karimgonj,kishoregonj', 'AX', 'BRL', '001', 'public/image/WFP.jpg', NULL, NULL, '2019-03-26 12:36:41', '2019-04-02 23:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

CREATE TABLE `company_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_users`
--

INSERT INTO `company_users` (`id`, `first_name`, `last_name`, `email`, `user_mobile`, `user_password`, `user_role`, `branch_id`, `user_status`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Monsur Ahmed', 'Shafiq', 'monsurahmedshafiq@gmail.com', '12345678', '$2y$10$PJSU4mz72D2izwSt7fo/dOZqS.GIE7bvffYhRcT9wvDdINnaGDCY2', 2, 3, 1, NULL, '2019-04-03 23:37:21', '2019-04-15 02:14:21'),
(6, 'Abdul', 'Kalam', 'a@email.com', '1234', '$2y$10$TYX.kmO6oOFrGlO3DHRNdOgjOz7Grq9NOJzfft4TiTZuC/d26l2dq', 2, 4, 1, NULL, '2019-04-15 00:18:13', '2019-04-15 05:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `custormers`
--

CREATE TABLE `custormers` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci,
  `copaning_balance` double(8,2) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custormers`
--

INSERT INTO `custormers` (`id`, `customer_cat`, `customer_name`, `customer_mobile`, `customer_email`, `customer_address`, `copaning_balance`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Silver', 'Monsur Ahmed Shafiq', '1234567890', 'monsurahmedshafiq@gmail.com', '30/1,sukrabad,dhanmondi,dhaka, charpara,karimgonj,kishoregonj', 545.00, NULL, NULL, '2019-03-25 04:24:57', '2019-04-11 03:42:39'),
(3, 'Normal', 'Third  Customer', '123456789', 'update@email.com', 'update', 100.00, NULL, NULL, '2019-03-25 06:56:06', '2019-04-11 03:42:25'),
(4, 'Gold', 'second customer name', '3423434', 'a@email.com', 'uttara', 999.00, NULL, NULL, '2019-04-04 04:22:57', '2019-04-04 04:22:57'),
(9, 'Normal', 'Sayed', '1345678', 'sayed@email.com', 'mirpur-14,Dhaka', 500.00, 5, 2, '2019-04-13 02:57:11', '2019-04-13 02:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `depositcollections`
--

CREATE TABLE `depositcollections` (
  `id` int(10) UNSIGNED NOT NULL,
  `d_collection_date` date DEFAULT NULL,
  `d_collectin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_collectin_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_number_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_collection_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_collection_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_collection_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_collection_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_c_date` date DEFAULT NULL,
  `d_collection_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depositcollections`
--

INSERT INTO `depositcollections` (`id`, `d_collection_date`, `d_collectin_number`, `d_collectin_currency`, `deposit_number_collection`, `account_number_collection`, `d_collection_name`, `d_collection_type`, `d_collection_amount`, `d_collection_note`, `d_c_date`, `d_collection_status`, `created_at`, `updated_at`) VALUES
(4, '2019-04-26', 'DC260420190', NULL, '5', '2', 'Monsur Ahmed Shafifq', 'Cash', '10000', NULL, '2019-04-26', '0', '2019-04-26 00:42:57', '2019-04-26 00:42:57'),
(5, '2019-04-28', 'DC280420194', NULL, '5', '2', 'Monsur Ahmed Shafifq', 'Bank', '900', NULL, '2019-04-28', '0', '2019-04-28 00:04:10', '2019-04-28 00:04:10'),
(6, '2019-04-30', 'DC280420195', NULL, '6', '3', 'dfghjkl', 'Cash', '500', NULL, '2019-03-28', '0', '2019-04-28 00:04:30', '2019-04-28 00:04:30'),
(7, '2018-06-12', 'DC280420196', NULL, '6', '3', 'dfghjkl', 'Cash', '600', NULL, '2019-04-28', '0', '2019-04-28 00:05:00', '2019-04-28 00:05:00'),
(8, '2019-04-28', 'DC280420197', NULL, '6', '3', 'dfghjkl', 'Bank', '900', NULL, '2019-04-28', '0', '2019-04-28 00:05:15', '2019-04-28 00:05:15'),
(9, '2019-04-28', 'DC280420198', NULL, '5', '2', 'Monsur Ahmed Shafifq', 'Cash', '100', NULL, '2019-04-28', '0', '2019-04-28 00:05:29', '2019-04-28 00:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `depositors`
--

CREATE TABLE `depositors` (
  `id` int(10) UNSIGNED NOT NULL,
  `d_acc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `d_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_closing_date` date DEFAULT NULL,
  `d_pakage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_active_status` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depositors`
--

INSERT INTO `depositors` (`id`, `d_acc`, `d_number`, `d_date`, `d_name`, `d_father_name`, `d_phone_number`, `d_closing_date`, `d_pakage`, `d_active_status`, `created_at`, `updated_at`) VALUES
(5, '2', 'DEP250420190', '2019-04-25', 'Monsur Ahmed Shafifq', 'sdfgh', '3456', '2019-04-25', 'first javascript', 1, '2019-04-25 06:24:30', '2019-04-25 06:24:30'),
(6, '3', 'DEP250420195', '2019-04-25', 'dfghjkl', 'fghjk', 'dfg', '2019-04-25', 'first javascript', 1, '2019-04-25 13:41:49', '2019-04-25 13:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `depositpakages`
--

CREATE TABLE `depositpakages` (
  `id` int(10) UNSIGNED NOT NULL,
  `d_pakage_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_Interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_number_install` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_per_ins_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_ins_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_fine_p_ins` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_date` date DEFAULT NULL,
  `active_status` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depositpakages`
--

INSERT INTO `depositpakages` (`id`, `d_pakage_name`, `d_currency`, `d_amount`, `d_Interest`, `d_total_amount`, `d_number_install`, `d_per_ins_amount`, `d_ins_type`, `d_fine_p_ins`, `d_date`, `active_status`, `created_at`, `updated_at`) VALUES
(4, 'fghj', 'BDT', '300', '5', '315', '5', '63', 'Monthly - 30 Day', '98', '2019-04-17', 1, '2019-04-17 05:52:16', '2019-04-18 05:11:44'),
(5, 'first javascript', 'BDT', '100', '10', '110', '110', '1', 'Weekly - 7 Day', '500', '2019-04-18', 1, '2019-04-18 00:03:58', '2019-04-20 06:06:57'),
(6, 'first javascript', 'BDT', '5000', '20', '6000', '10', '600', 'Bi-monthly - 15 Day', '500', '2019-04-20', NULL, '2019-04-20 04:59:57', '2019-04-20 04:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `dipositwithdraws`
--

CREATE TABLE `dipositwithdraws` (
  `id` int(10) UNSIGNED NOT NULL,
  `d_withdraw_date` date DEFAULT NULL,
  `d_withdraw_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_withdraw_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_number_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_withdraw_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_withdraw_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_withdraw_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_withdraw_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_w_date` date DEFAULT NULL,
  `d_withdraw_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dipositwithdraws`
--

INSERT INTO `dipositwithdraws` (`id`, `d_withdraw_date`, `d_withdraw_number`, `d_withdraw_currency`, `deposit_number_withdraw`, `account_number_withdraw`, `d_withdraw_name`, `d_withdraw_type`, `d_withdraw_amount`, `d_withdraw_note`, `d_w_date`, `d_withdraw_status`, `created_at`, `updated_at`) VALUES
(5, '2019-04-26', 'DW260420194', NULL, '6', '3', 'dfghjkl', 'Cash', '9000', NULL, '2019-04-26', '0', '2019-04-26 02:24:37', '2019-04-26 02:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `expencevouchers`
--

CREATE TABLE `expencevouchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_voucher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_date` date DEFAULT NULL,
  `e_time` time(6) DEFAULT NULL,
  `e_debit_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_debit_belence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_credit_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_credit_belence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_id` int(12) DEFAULT NULL,
  `user_id` int(12) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expencevouchers`
--

INSERT INTO `expencevouchers` (`id`, `e_voucher`, `e_date`, `e_time`, `e_debit_head`, `e_debit_belence`, `e_credit_head`, `e_credit_belence`, `e_des`, `e_amount`, `confirm_id`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(7, 'EV110420196', '2019-04-11', '15:36:20.000000', '28', '0', '40', '0', 'first expense', '100', 0, NULL, NULL, '2019-04-11 03:36:20', '2019-04-13 00:53:29'),
(8, 'EV110420197', '2019-04-11', '16:00:41.000000', '35', '0', '58', '0', 'second expense', '100', NULL, NULL, NULL, '2019-04-11 04:00:41', '2019-04-11 04:00:41'),
(9, 'EV120420198', '2019-04-12', '22:35:43.000000', '38', '0', '58', '0', 'ghgh', '20', NULL, NULL, NULL, '2019-04-12 10:35:43', '2019-04-12 10:35:43'),
(11, 'EV150420199', '2019-04-15', '12:58:46.000000', '32', '0', '40', '0', 'des', '100', 0, 5, 2, '2019-04-15 00:58:46', '2019-04-15 01:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_status` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `group_code`, `group_status`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(8, 'Asset', '10000', 1, NULL, NULL, '2019-03-28 00:46:26', '2019-04-09 06:36:44'),
(9, 'Liability', '20000', 1, NULL, NULL, '2019-03-28 00:47:01', '2019-03-28 05:24:47'),
(10, 'Income', '30000', 1, NULL, NULL, '2019-03-28 00:47:14', '2019-03-28 00:47:14'),
(11, 'Expanse', '40000', 1, NULL, NULL, '2019-03-28 00:47:40', '2019-03-28 00:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `incomevouchers`
--

CREATE TABLE `incomevouchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `i_voucher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_date` date DEFAULT NULL,
  `i_time` time(6) DEFAULT NULL,
  `i_debit_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_debit_belence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_credit_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_credit_belence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_id` int(12) DEFAULT NULL,
  `user_id` int(12) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomevouchers`
--

INSERT INTO `incomevouchers` (`id`, `i_voucher`, `i_date`, `i_time`, `i_debit_head`, `i_debit_belence`, `i_credit_head`, `i_credit_belence`, `i_des`, `i_amount`, `confirm_id`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(5, 'IV110420194', '2019-04-11', '14:51:08.000000', '39', '0', '33', '0', 'first  Income Voucher', '12', 1, NULL, NULL, '2019-04-11 02:51:08', '2019-04-13 03:21:53'),
(6, 'IV130420195', '2019-04-13', '15:18:39.000000', '40', '0', '37', '0', 'test', '123', 0, 5, 2, '2019-04-13 03:18:39', '2019-04-13 03:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `itemproducts`
--

CREATE TABLE `itemproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_code` text COLLATE utf8mb4_unicode_ci,
  `barcode_code` text COLLATE utf8mb4_unicode_ci,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itemproducts`
--

INSERT INTO `itemproducts` (`id`, `item_code`, `barcode_code`, `category_name`, `product_name`, `brand_name`, `color`, `size`, `unit_type`, `sales_price`, `vat`, `profit`, `supplier_name`, `stock`, `cost_price`, `rack`, `floor`, `product_image`, `created_at`, `updated_at`) VALUES
(1, '0001', '123', 'first category', 'First Brand update 4 yello', 'First Brand update', 'yello', '4', 'PCS', '21', NULL, '5', 'Brothers Knite', '1000', '20', '3', '1st Floor', 'public/Item/2019/uAbEK-101140-cYz.png', '2019-04-29 04:11:22', '2019-04-29 04:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `loanpakages`
--

CREATE TABLE `loanpakages` (
  `id` int(10) UNSIGNED NOT NULL,
  `l_pakage_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_Interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_number_install` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_per_ins_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_ins_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_fine_p_ins` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_date` date DEFAULT NULL,
  `active_status` int(12) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loanpakages`
--

INSERT INTO `loanpakages` (`id`, `l_pakage_name`, `l_currency`, `l_amount`, `l_Interest`, `l_total_amount`, `l_number_install`, `l_per_ins_amount`, `l_ins_type`, `l_fine_p_ins`, `l_date`, `active_status`, `created_at`, `updated_at`) VALUES
(1, 'First Package update', 'USD', '100', '10', '110', '2', '55', 'Abid Rahman - 30 Day', '90', '2019-04-17', 0, '2019-04-17 04:59:20', '2019-04-18 05:11:26'),
(2, 'javascript', 'BDT', '100', '10', '110', '5', '22', 'Test - 4 Day', '20', '2019-04-18', 1, '2019-04-18 04:02:55', '2019-04-20 06:12:31'),
(3, 'Second Pakage', 'BDT', '5000', '10', '5500', '5', '1100', 'Weekly - 7 Day', '20', '2019-04-19', 1, '2019-04-19 02:43:49', '2019-04-19 02:44:52'),
(4, 'First Package', 'BDT', '10000', '15', '11500', '5', '2300', 'Monthly - 30 Day', '500', '2019-04-20', NULL, '2019-04-20 04:59:03', '2019-04-20 04:59:03'),
(5, 'test111111', 'BDT', '100', '10', '110', '10', '11', 'Weekly - 7 Day', '400', '2019-04-23', NULL, '2019-04-23 06:52:03', '2019-04-23 06:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `l_reg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_acc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_date` date DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_closing_date` date DEFAULT NULL,
  `l_pakage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_active_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `l_reg`, `l_acc`, `l_number`, `l_date`, `l_name`, `l_father_name`, `l_phone_number`, `l_closing_date`, `l_pakage`, `l_active_status`, `created_at`, `updated_at`) VALUES
(2, 'RN180420192', '3', 'LON220420191', '2019-04-22', 'Second Name', 'testing', '123456', '2019-04-22', 'Second Pakage', '1', '2019-04-22 07:20:21', '2019-04-25 12:59:56'),
(3, 'RN180420193', '2', 'LON240420192', '2019-04-24', 'Monsur Ahmed Shafifq', 'sdfgh', '3456', '2019-04-24', 'Second Pakage', '1', '2019-04-24 00:03:52', '2019-04-25 13:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `localpurches`
--

CREATE TABLE `localpurches` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `purchase_no` text COLLATE utf8mb4_unicode_ci,
  `supplier_invoiceno` text COLLATE utf8mb4_unicode_ci,
  `unit_type` text COLLATE utf8mb4_unicode_ci,
  `supplier_code` text COLLATE utf8mb4_unicode_ci,
  `stock_id` text COLLATE utf8mb4_unicode_ci,
  `quantity` text COLLATE utf8mb4_unicode_ci,
  `margin` text COLLATE utf8mb4_unicode_ci,
  `sale_price` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `localpurches`
--

INSERT INTO `localpurches` (`id`, `purchase_date`, `sid`, `purchase_no`, `supplier_invoiceno`, `unit_type`, `supplier_code`, `stock_id`, `quantity`, `margin`, `sale_price`, `created_at`, `updated_at`) VALUES
(38, '2019-05-02', 4, 'PO20520192', '234567', 'PCS', '654', '020520192', '2', '10', '110', NULL, NULL),
(39, '2019-05-02', 7, 'PO20520192', '45678', 'PCS', '654', '020520192', '100', '10', '110', NULL, NULL),
(40, '2019-05-03', 1, 'PO30520193', '45678', 'PCS', '123', '030520191', '2', '10', '616', NULL, NULL),
(41, '2019-05-04', 4, 'PO40520194', '45678', 'PCS', '123', '040520192', '10', '10', '616', NULL, NULL),
(42, '2019-05-05', 7, 'PO50520195', '45678', 'PCS', '123', '050520193', '2', '3', '576.8', NULL, NULL),
(43, '2019-05-05', 4, 'PO50520196', '45678', 'PCS', '123', '050520194', '2', '10', '110', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `local_parches_items`
--

CREATE TABLE `local_parches_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `stock_id` text COLLATE utf8mb4_unicode_ci,
  `purchase_no` text COLLATE utf8mb4_unicode_ci,
  `sid` int(12) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `quantity` text COLLATE utf8mb4_unicode_ci,
  `cost` text COLLATE utf8mb4_unicode_ci,
  `total_cost` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `local_parches_items`
--

INSERT INTO `local_parches_items` (`id`, `stock_id`, `purchase_no`, `sid`, `description`, `quantity`, `cost`, `total_cost`, `created_at`, `updated_at`) VALUES
(37, '020520192', 'PO20520192', 4, 'yello First Brand update second  category', '2', '100', '200', NULL, NULL),
(38, '020520192', 'PO20520192', 7, 'yello First Brand update first category', '100', '100', '10000', NULL, NULL),
(39, '030520191', 'PO30520193', 1, 'yello First Brand update second  category', '2', '560', '1120', NULL, NULL),
(40, '040520192', 'PO40520194', 4, 'yello First Brand update first category', '10', '560', '5600', NULL, NULL),
(41, '050520193', 'PO50520195', 7, 'yello First Brand update first category', '2', '560', '1120', NULL, NULL),
(42, '050520194', 'PO50520196', 4, 'yello First Brand update', '2', '100', '200', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_24_193233_create_verify_tokens_table', 1),
(4, '2019_03_25_060543_create_companies_table', 2),
(5, '2019_03_25_081800_create_companies_table', 3),
(6, '2019_03_25_093258_create_branches_table', 4),
(7, '2019_03_25_101142_create_custormers_table', 5),
(8, '2019_03_25_102732_create_suppliers_table', 6),
(9, '2019_03_26_120029_create_company_users_table', 7),
(10, '2019_03_27_050006_create_groups_table', 8),
(11, '2019_03_27_053824_create_categories_table', 9),
(12, '2019_03_27_092214_create_accountheads_table', 10),
(13, '2019_03_30_105844_create_transvouchers_table', 11),
(14, '2019_03_30_111633_create_paymentvouchers_table', 11),
(15, '2019_03_30_111722_create_collectionvouchers_table', 11),
(16, '2019_04_08_070029_create_expencevouchers_table', 12),
(17, '2019_04_08_091449_create_incomevouchers_table', 13),
(18, '2019_04_13_111314_create_userinoutrecords_table', 14),
(19, '2019_04_16_073035_create_regimembers_table', 15),
(20, '2019_04_16_104009_create_loanpakages_table', 15),
(21, '2019_04_17_065933_create_depositpakages_table', 15),
(22, '2019_04_20_050604_create_dipositors_table', 16),
(23, '2019_04_20_053231_create_loans_table', 16),
(24, '2019_04_20_063142_create_depositors_table', 17),
(25, '2019_04_20_063156_create_loans_table', 17),
(26, '2019_04_21_050635_create_collections_table', 18),
(27, '2019_04_21_055840_create_sharecollections_table', 19),
(28, '2019_04_21_055856_create_depositcollections_table', 19),
(29, '2019_04_23_091950_create_sharewithdraws_table', 20),
(30, '2019_04_23_094435_create_dipositwithdraws_table', 20),
(31, '2019_04_28_094143_create_sharepakages_table', 21),
(32, '2019_04_28_101517_create_shareholders_table', 22),
(33, '2019_04_29_074841_create_localpurches_table', 23),
(34, '2019_04_29_080216_create_product_mnange_categories_table', 24),
(35, '2019_04_29_081441_create_pro_man_categoys_table', 24),
(36, '2019_04_29_085235_create_productbrands_table', 25),
(37, '2019_04_29_090753_create_productcolors_table', 26),
(38, '2019_04_29_092529_create_productsizes_table', 27),
(39, '2019_04_29_093854_create_itemproducts_table', 28),
(40, '2019_04_29_104347_create_stock_reports_table', 29),
(41, '2019_04_29_113811_create_local_parches_items_table', 30),
(42, '2019_04_29_123435_create_purchase_return_invoices_table', 31),
(43, '2019_04_30_104000_create_stock_reports_table', 32),
(44, '2019_05_02_070407_create_purchase_return_items_table', 33),
(45, '2019_05_02_100237_create_sale_invoices_table', 34),
(46, '2019_05_02_101035_create_sale_items_table', 35);

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
-- Table structure for table `paymentvouchers`
--

CREATE TABLE `paymentvouchers` (
  `id` int(10) UNSIGNED NOT NULL,
  `pv_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_date` date DEFAULT NULL,
  `p_time` time(6) DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parches_n` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pconfirm_status` int(12) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymentvouchers`
--

INSERT INTO `paymentvouchers` (`id`, `pv_number`, `p_date`, `p_time`, `s_name`, `pre_due`, `parches_n`, `p_type`, `p_des`, `p_amount`, `pconfirm_status`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(3, 'PV040420191', '2019-04-04', '16:11:24.000000', '3', '500', 'Previous Dues', 'Bkash', 'Nothing for now', '100', 0, NULL, NULL, '2019-04-04 04:11:24', '2019-04-13 00:33:56'),
(4, 'PV130420193', '2019-04-13', '15:16:16.000000', '1', '99', 'Previous Dues', 'Bkash', 'testing', '10', 1, 5, 2, '2019-04-13 03:16:16', '2019-04-15 01:40:18'),
(9, 'PV130420194', '2019-04-13', '16:11:45.000000', '5', '100', 'Previous Dues', 'Bkash', 'Nothing for now', '343', 0, 1, 1, '2019-04-13 04:11:45', '2019-04-15 01:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `productbrands`
--

CREATE TABLE `productbrands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productbrands`
--

INSERT INTO `productbrands` (`id`, `brand_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'First Brand update', 0, '2019-04-29 03:04:20', '2019-04-29 03:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `productcolors`
--

CREATE TABLE `productcolors` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productcolors`
--

INSERT INTO `productcolors` (`id`, `group_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'yello', 1, '2019-04-29 03:21:35', '2019-04-29 03:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `productsizes`
--

CREATE TABLE `productsizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productsizes`
--

INSERT INTO `productsizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 0, '2019-04-29 03:33:25', '2019-04-29 03:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `pro_man_categoys`
--

CREATE TABLE `pro_man_categoys` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_man_categoys`
--

INSERT INTO `pro_man_categoys` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'first category', 'public/Category/2019/QcAHe-083836-tMD.png', 1, '2019-04-29 02:38:36', '2019-04-29 02:38:36'),
(2, 'second  category', 'public/Category/2019/fvCY5-083853-JXS.png', 0, '2019-04-29 02:38:53', '2019-04-29 02:41:06');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_invoices`
--

CREATE TABLE `purchase_return_invoices` (
  `purchaseReturnInvoice_id` int(10) UNSIGNED NOT NULL,
  `PurchaseReturnDate` date DEFAULT NULL,
  `PurchaseReturnNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StockId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseReturn_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseReturn_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_return_invoices`
--

INSERT INTO `purchase_return_invoices` (`purchaseReturnInvoice_id`, `PurchaseReturnDate`, `PurchaseReturnNo`, `StockId`, `purchaseReturn_qty`, `purchaseReturn_total`, `created_at`, `updated_at`) VALUES
(8, '2019-05-05', 'PR050520191', NULL, '2', '200.00', '2019-05-05 00:01:33', '2019-05-05 00:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return_items`
--

CREATE TABLE `purchase_return_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `PurchaseReturnDate` date DEFAULT NULL,
  `PurchaseReturnNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StockId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseReturnItem_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseReturn_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseReturnItem_unitPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseReturn_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_return_items`
--

INSERT INTO `purchase_return_items` (`id`, `PurchaseReturnDate`, `PurchaseReturnNo`, `StockId`, `purchaseReturnItem_description`, `purchaseReturn_qty`, `purchaseReturnItem_unitPrice`, `purchaseReturn_total`, `created_at`, `updated_at`) VALUES
(4, '2019-05-05', 'PR050520191', '020520192', 'yello First Brand update second  category', '2', '100', '200', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regimembers`
--

CREATE TABLE `regimembers` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_father_oco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_mother_occo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_birth_date` date DEFAULT NULL,
  `reg_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_pre_adress` text COLLATE utf8mb4_unicode_ci,
  `reg_per_adress` text COLLATE utf8mb4_unicode_ci,
  `em_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `em_adress` text COLLATE utf8mb4_unicode_ci,
  `no_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_adress` text COLLATE utf8mb4_unicode_ci,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `member_activation` int(13) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regimembers`
--

INSERT INTO `regimembers` (`id`, `reg_number`, `ac_number`, `reg_name`, `reg_nid`, `reg_father_name`, `reg_father_oco`, `reg_mother_name`, `reg_mother_occo`, `reg_birth_date`, `reg_profession`, `reg_phone`, `reg_pre_adress`, `reg_per_adress`, `em_name`, `em_relation`, `em_phone`, `em_adress`, `no_name`, `no_relation`, `no_phone`, `no_nid`, `no_adress`, `user_photo`, `user_nid`, `reg_date`, `member_activation`, `created_at`, `updated_at`) VALUES
(2, 'RN170420191', 'AC170420192', 'Monsur Ahmed Shafifq', '12345678', 'sdfgh', NULL, 'Monsur Ahmed Shafifq', NULL, '2019-04-01', 'Job Holder', '3456', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'Monsur Ahmed Shafifq', 'fghjkl;', 'ghjkl', 'sdfg', 'Monsur Ahmed Shafifq', 'hjkl;', 'fghjk', NULL, 'hjkl;\'', 'public/image/IMG_20160518_173415.jpg', 'public/image/IMG_20160518_173415.jpg', '2019-04-17', 1, '2019-04-17 03:42:46', '2019-04-24 01:38:31'),
(3, 'RN180420192', 'AC180420193', 'dfghjkl', NULL, 'fghjk', NULL, 'dfghjk', NULL, '2019-04-01', 'Business', 'dfg', '30/1,sukrabad,dhanmondi,dhaka', 'charpara,karimgonj,kishoregonj', 'Monsur Ahmed Shafifq', 'fghjkl;\'', 'dfg', '30/1,sukrabad,dhanmondi,dhaka', 'Monsur Ahmed Shafifq', 'hjkl;', 'fghjk', NULL, 'l\'gh', 'public/image/IMG_20160518_173415.jpg', 'public/image/Natianal Id card scan copy - Copy.png', '2019-04-18', 1, '2019-04-18 11:11:57', '2019-04-20 05:44:29'),
(4, 'RN180420193', 'AC180420194', 'Monsur Ahmed Shafifq', NULL, 'ghjkl', NULL, 'Monsur Ahmed Shafifq', NULL, '2019-04-02', 'Business', 'dfg', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'Monsur Ahmed Shafifq', 'sdfg', 'ghjkl', 'erfg', 'Monsur Ahmed Shafifq', 'dfghjk', 'fghjk', NULL, 'hjkl;\'', 'public/image/Natianal Id card scan copy - Copy.png', 'public/image/Rakul-Preet-Singh-Beautiful-Photo.jpg', '2019-04-18', 1, '2019-04-18 11:17:33', '2019-04-20 05:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `sales_men`
--

CREATE TABLE `sales_men` (
  `salesMan_id` int(10) UNSIGNED NOT NULL,
  `salesMan_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesMan_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesMan_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesMan_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_men`
--

INSERT INTO `sales_men` (`salesMan_id`, `salesMan_name`, `salesMan_mobile`, `salesMan_address`, `salesMan_status`, `created_at`, `updated_at`) VALUES
(1, 'Me', '0124357689', 'nai', '1', '2019-04-27 01:06:24', '2019-04-27 05:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `sales_return_invoices`
--

CREATE TABLE `sales_return_invoices` (
  `salesReturnInvoice_id` int(10) UNSIGNED NOT NULL,
  `salesReturnInvoice_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnInvoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnInvoice_stockId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnInvoice_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnInvoice_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_return_invoices`
--

INSERT INTO `sales_return_invoices` (`salesReturnInvoice_id`, `salesReturnInvoice_date`, `salesReturnInvoice_no`, `salesReturnInvoice_stockId`, `salesReturnInvoice_qty`, `salesReturnInvoice_total`, `created_at`, `updated_at`) VALUES
(2, '2019-05-04', 'SR040520191', '2', '2', '1,232.00', '2019-05-04 00:12:29', '2019-05-04 00:12:29'),
(3, '2019-05-04', 'SR040520192', '3', '1', '600.00', '2019-05-04 00:19:43', '2019-05-04 00:19:43'),
(4, '2019-05-04', 'SR040520193', '3', '2', '1,232.00', '2019-05-04 05:28:12', '2019-05-04 05:28:12'),
(5, '2019-05-04', 'SR040520194', '2', '1', '616.00', '2019-05-04 05:29:50', '2019-05-04 05:29:50'),
(6, '2019-05-04', 'SR040520194', '2', '1', '616.00', '2019-05-04 05:30:26', '2019-05-04 05:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `sales_return_items`
--

CREATE TABLE `sales_return_items` (
  `salesReturnItem_id` int(10) UNSIGNED NOT NULL,
  `salesReturnItem_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnItem_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnItem_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnItem_unitPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesReturnItem_itemTotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_return_items`
--

INSERT INTO `sales_return_items` (`salesReturnItem_id`, `salesReturnItem_no`, `salesReturnItem_description`, `salesReturnItem_qty`, `salesReturnItem_unitPrice`, `salesReturnItem_itemTotal`, `created_at`, `updated_at`) VALUES
(2, 'SR040520194', 'yello First Brand update second  category', '1', '616', '616', '2019-05-04 05:29:50', '2019-05-04 05:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `sale_invoices`
--

CREATE TABLE `sale_invoices` (
  `saleInvoice_id` int(10) UNSIGNED NOT NULL,
  `saleInvoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_customerName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_customerMobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_previousDue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_date` date DEFAULT NULL,
  `saleInvoice_subTotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_totalCost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_discountType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_discountAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_vatAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_totalPayable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_paidAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_returnAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_dueAmount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_transactionStatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_collectionType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_salesMan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_invoices`
--

INSERT INTO `sale_invoices` (`saleInvoice_id`, `saleInvoice_no`, `saleInvoice_customerName`, `saleInvoice_customerMobile`, `saleInvoice_previousDue`, `saleInvoice_date`, `saleInvoice_subTotal`, `saleInvoice_totalCost`, `saleInvoice_discountType`, `saleInvoice_discountAmount`, `saleInvoice_vatAmount`, `saleInvoice_totalPayable`, `saleInvoice_paidAmount`, `saleInvoice_returnAmount`, `saleInvoice_dueAmount`, `saleInvoice_transactionStatus`, `saleInvoice_collectionType`, `saleInvoice_salesMan`, `created_at`, `updated_at`) VALUES
(1, 'INV201905021', 'Cash', NULL, NULL, '2019-05-02', '0', '0', 'tk', NULL, '0', '0', '789', '-789', '0', 'Paid', 'Cash', 'Cash', '2019-05-02 04:45:10', '2019-05-02 04:45:10'),
(2, 'INV201905032', 'Cash', NULL, NULL, '2019-05-03', '616', '1120', 'tk', NULL, '6.16', '622', '622', '0', '0', 'Paid', 'Cash', 'Me', '2019-05-03 07:59:03', '2019-05-03 07:59:03'),
(3, 'INV201905033', 'Cash', NULL, NULL, '2019-05-03', '616', '560', 'tk', NULL, '6.16', '622', '622', '0', '0', 'Paid', 'Cash', 'Cash', '2019-05-03 08:03:51', '2019-05-03 08:03:51'),
(4, 'INV201905034', 'Cash', NULL, NULL, '2019-05-03', '616', '560', 'tk', NULL, '6.16', '622', '622', '0', '0', 'Paid', 'Cash', 'Cash', '2019-05-03 08:09:29', '2019-05-03 08:09:29'),
(5, 'INV201905045', 'Cash', NULL, NULL, '2019-05-04', '616', '560', 'tk', NULL, '6.16', '622', '622', '0', '0', 'Paid', 'Cash', 'Cash', '2019-05-04 06:05:41', '2019-05-04 06:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `sale_items`
--

CREATE TABLE `sale_items` (
  `saleItem_id` int(10) UNSIGNED NOT NULL,
  `report_stock_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleItem_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleItem_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleItem_unite_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleItem_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleItem_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saleInvoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_items`
--

INSERT INTO `sale_items` (`saleItem_id`, `report_stock_id`, `saleItem_description`, `saleItem_quantity`, `saleItem_unite_price`, `saleItem_discount`, `saleItem_total`, `saleInvoice_no`, `created_at`, `updated_at`) VALUES
(1, '030520191', 'yello First Brand update second  category', '1', '616', NULL, '616', 'INV201905032', NULL, NULL),
(2, '030520191', 'yello First Brand update second  category', '1', '616', NULL, '616', 'INV201905033', NULL, NULL),
(3, '030520191', 'yello First Brand update second  category', '1', '616', NULL, '616', 'INV201905034', NULL, NULL),
(4, '040520192', 'yello First Brand update first category', '1', '616', NULL, '616', 'INV201905045', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sharecollections`
--

CREATE TABLE `sharecollections` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_collection_date` date DEFAULT NULL,
  `s_collectin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_collectin_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_number_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number_collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_collection_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_collection_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_collection_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_collection_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_c_date` date DEFAULT NULL,
  `s_collection_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sharecollections`
--

INSERT INTO `sharecollections` (`id`, `s_collection_date`, `s_collectin_number`, `s_collectin_currency`, `reg_number_collection`, `account_number_collection`, `s_collection_name`, `s_collection_type`, `s_collection_amount`, `s_collection_note`, `s_c_date`, `s_collection_status`, `created_at`, `updated_at`) VALUES
(4, '2019-04-28', 'SC280420193', NULL, '4', 'AC180420194', 'Monsur Ahmed Shafifq', 'Cash', '900', NULL, '2019-04-28', '1', '2019-04-28 05:12:03', '2019-04-28 05:20:13'),
(5, '2019-04-28', 'SC280420194', NULL, '4', 'AC180420194', 'Monsur Ahmed Shafifq', 'Cash', '500', NULL, '2019-04-28', '1', '2019-04-28 05:13:17', '2019-04-28 05:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `shareholders`
--

CREATE TABLE `shareholders` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_reg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_acc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_closing_date` date DEFAULT NULL,
  `s_pakage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_active_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shareholders`
--

INSERT INTO `shareholders` (`id`, `s_reg`, `s_acc`, `s_number`, `s_date`, `s_name`, `s_father_name`, `s_phone_number`, `s_closing_date`, `s_pakage`, `s_active_status`, `created_at`, `updated_at`) VALUES
(1, NULL, '3', 'SHE280420190', '2019-04-28', 'dfghjkl', 'fghjk', 'dfg', '2019-04-28', 'First Pakage', '1', '2019-04-28 04:54:05', '2019-04-28 04:54:05'),
(3, NULL, '4', 'SHE280420191', '2019-04-28', 'Monsur Ahmed Shafifq', 'ghjkl', 'dfg', '2019-04-28', 'First Pakage', '1', '2019-04-28 05:11:22', '2019-04-28 05:11:22'),
(4, NULL, '2', 'SHE280420193', '2019-04-28', 'Monsur Ahmed Shafifq', 'sdfgh', '3456', '2019-04-28', 'First Pakage', '1', '2019-04-28 05:12:52', '2019-04-28 05:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `sharepakages`
--

CREATE TABLE `sharepakages` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_pakage_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_Interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_total_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_number_install` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_per_ins_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_ins_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_fine_p_ins` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_status` int(12) DEFAULT NULL,
  `s_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sharepakages`
--

INSERT INTO `sharepakages` (`id`, `s_pakage_name`, `s_currency`, `s_amount`, `s_Interest`, `s_total_amount`, `s_number_install`, `s_per_ins_amount`, `s_ins_type`, `s_fine_p_ins`, `active_status`, `s_date`, `created_at`, `updated_at`) VALUES
(1, 'First Pakage', NULL, '2000', '10', '2200', '5', '220', 'Weekly - 7 Day', '50', 1, '2019-04-28', '2019-04-28 04:09:22', '2019-04-28 04:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `sharewithdraws`
--

CREATE TABLE `sharewithdraws` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_withdraw_date` date DEFAULT NULL,
  `s_withdraw_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_withdraw_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_number_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_withdraw_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_withdraw_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_withdraw_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_withdraw_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_w_date` date DEFAULT NULL,
  `s_withdraw_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sharewithdraws`
--

INSERT INTO `sharewithdraws` (`id`, `s_withdraw_date`, `s_withdraw_number`, `s_withdraw_currency`, `reg_number_withdraw`, `account_number_withdraw`, `s_withdraw_name`, `s_withdraw_type`, `s_withdraw_amount`, `s_withdraw_note`, `s_w_date`, `s_withdraw_status`, `created_at`, `updated_at`) VALUES
(3, '2019-04-28', 'SW280420192', NULL, '4', 'AC180420194', 'Monsur Ahmed Shafifq', 'Cash', '600', NULL, '2019-04-28', '0', '2019-04-28 06:11:46', '2019-04-28 06:11:46'),
(4, '2019-04-28', 'SW280420193', NULL, '3', 'AC180420193', 'dfghjkl', 'Cash', '5000', NULL, '2019-04-28', '0', '2019-04-28 06:12:06', '2019-04-28 06:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `stock_reports`
--

CREATE TABLE `stock_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `stockreport_date` date DEFAULT NULL,
  `report_supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_purchaseno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_stock_id` text COLLATE utf8mb4_unicode_ci,
  `report_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_quantity` int(11) DEFAULT NULL,
  `report_cost` int(11) DEFAULT NULL,
  `report_margin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report_sales_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_reports`
--

INSERT INTO `stock_reports` (`id`, `stockreport_date`, `report_supplier_id`, `report_purchaseno`, `report_stock_id`, `report_group`, `report_brand`, `report_category`, `report_description`, `report_quantity`, `report_cost`, `report_margin`, `report_sales_price`, `created_at`, `updated_at`) VALUES
(29, '2019-05-03', '1', 'PO30520193', '030520191', 'Meter', 'First Brand update', 'yello', 'yello First Brand update second  category', 4, 560, '10', 616, NULL, NULL),
(30, '2019-05-04', '4', 'PO40520194', '040520192', 'Meter', 'First Brand update', 'yello', 'yello First Brand update first category', 9, 560, '10', 616, NULL, NULL),
(31, '2019-05-05', '7', 'PO50520195', '050520193', 'Meter', 'First Brand update', 'yello', 'yello First Brand update first category', 2, 560, '3', 577, NULL, NULL),
(32, '2019-05-05', '4', 'PO50520196', '050520194', 'Meter', 'First Brand update', 'yello', 'yello First Brand update', 2, 100, '10', 110, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_address` text COLLATE utf8mb4_unicode_ci,
  `sopaning_balance` double(8,2) DEFAULT NULL,
  `supplier_date` date DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_cat`, `supplier_name`, `supplier_mobile`, `supplier_email`, `supplier_address`, `sopaning_balance`, `supplier_date`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Advance', 'Ahmed Traders', '54454', 'monsurahmedshafiq@gmail.com', 'Dhaka', 99.00, NULL, NULL, NULL, '2019-03-25 04:54:42', '2019-04-02 23:24:34'),
(3, 'Cash', 'Brothers Knite', '4333434', 'edtfyg@yfdfdg.com', 'Gazipur', 500.00, NULL, NULL, NULL, '2019-03-25 07:00:02', '2019-04-02 23:25:20'),
(4, 'After Sale', 'Khan Iron', '898989', 'a@gamil.com', 'Chitagonj', 100.00, NULL, NULL, NULL, '2019-03-27 02:26:55', '2019-04-13 00:20:16'),
(7, 'Cash', 'Pran Dairy', '098765', 'pran@email.com', 'dhaka', 900.00, '2019-04-30', NULL, NULL, '2019-04-30 02:41:44', '2019-04-30 02:41:44'),
(8, 'Cash', 'Beximco', '12345', 'bexim@email.com', 'Naringanj', 100.00, '2019-04-30', NULL, NULL, '2019-04-30 02:42:33', '2019-04-30 02:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `userinoutrecords`
--

CREATE TABLE `userinoutrecords` (
  `id` int(10) UNSIGNED NOT NULL,
  `login_time` datetime(6) DEFAULT NULL,
  `logout_time` datetime(6) DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_rule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userinoutrecords`
--

INSERT INTO `userinoutrecords` (`id`, `login_time`, `logout_time`, `user_id`, `user_rule`, `created_at`, `updated_at`) VALUES
(30, NULL, '2019-04-15 10:56:26.000000', '5', '2', '2019-04-15 04:56:26', '2019-04-15 04:56:26'),
(31, '2019-04-15 10:56:57.000000', NULL, '5', '2', '2019-04-15 04:56:57', '2019-04-15 04:56:57'),
(32, NULL, '2019-04-15 11:16:53.000000', '5', '2', '2019-04-15 05:16:54', '2019-04-15 05:16:54'),
(33, '2019-04-15 11:17:03.000000', NULL, '6', '2', '2019-04-15 05:17:03', '2019-04-15 05:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_role` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `user_status`, `user_id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$4VhcF/dxtD664bk0QiyYQ.cbAJr6SAZps/zuUFDULW/fQEvmbLDjG', NULL, 0, NULL, 1, '2019-03-24 01:19:30', '2019-03-24 02:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `verify_tokens`
--

CREATE TABLE `verify_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_tokens`
--

INSERT INTO `verify_tokens` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(14, 'monsurahmedshafiq@gmail.com', '1864988427', '2019-04-15 02:13:50', '2019-04-15 02:13:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountheads`
--
ALTER TABLE `accountheads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectionvouchers`
--
ALTER TABLE `collectionvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custormers`
--
ALTER TABLE `custormers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depositcollections`
--
ALTER TABLE `depositcollections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depositors`
--
ALTER TABLE `depositors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depositpakages`
--
ALTER TABLE `depositpakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dipositwithdraws`
--
ALTER TABLE `dipositwithdraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expencevouchers`
--
ALTER TABLE `expencevouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomevouchers`
--
ALTER TABLE `incomevouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemproducts`
--
ALTER TABLE `itemproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loanpakages`
--
ALTER TABLE `loanpakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localpurches`
--
ALTER TABLE `localpurches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_parches_items`
--
ALTER TABLE `local_parches_items`
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
-- Indexes for table `paymentvouchers`
--
ALTER TABLE `paymentvouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productbrands`
--
ALTER TABLE `productbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcolors`
--
ALTER TABLE `productcolors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productsizes`
--
ALTER TABLE `productsizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_man_categoys`
--
ALTER TABLE `pro_man_categoys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return_invoices`
--
ALTER TABLE `purchase_return_invoices`
  ADD PRIMARY KEY (`purchaseReturnInvoice_id`);

--
-- Indexes for table `purchase_return_items`
--
ALTER TABLE `purchase_return_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regimembers`
--
ALTER TABLE `regimembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_men`
--
ALTER TABLE `sales_men`
  ADD PRIMARY KEY (`salesMan_id`);

--
-- Indexes for table `sales_return_invoices`
--
ALTER TABLE `sales_return_invoices`
  ADD PRIMARY KEY (`salesReturnInvoice_id`);

--
-- Indexes for table `sales_return_items`
--
ALTER TABLE `sales_return_items`
  ADD PRIMARY KEY (`salesReturnItem_id`);

--
-- Indexes for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  ADD PRIMARY KEY (`saleInvoice_id`);

--
-- Indexes for table `sale_items`
--
ALTER TABLE `sale_items`
  ADD PRIMARY KEY (`saleItem_id`);

--
-- Indexes for table `sharecollections`
--
ALTER TABLE `sharecollections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shareholders`
--
ALTER TABLE `shareholders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sharepakages`
--
ALTER TABLE `sharepakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sharewithdraws`
--
ALTER TABLE `sharewithdraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_reports`
--
ALTER TABLE `stock_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinoutrecords`
--
ALTER TABLE `userinoutrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_tokens`
--
ALTER TABLE `verify_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountheads`
--
ALTER TABLE `accountheads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `collectionvouchers`
--
ALTER TABLE `collectionvouchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `custormers`
--
ALTER TABLE `custormers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `depositcollections`
--
ALTER TABLE `depositcollections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `depositors`
--
ALTER TABLE `depositors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `depositpakages`
--
ALTER TABLE `depositpakages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dipositwithdraws`
--
ALTER TABLE `dipositwithdraws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expencevouchers`
--
ALTER TABLE `expencevouchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `incomevouchers`
--
ALTER TABLE `incomevouchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `itemproducts`
--
ALTER TABLE `itemproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loanpakages`
--
ALTER TABLE `loanpakages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `localpurches`
--
ALTER TABLE `localpurches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `local_parches_items`
--
ALTER TABLE `local_parches_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `paymentvouchers`
--
ALTER TABLE `paymentvouchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `productbrands`
--
ALTER TABLE `productbrands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productcolors`
--
ALTER TABLE `productcolors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productsizes`
--
ALTER TABLE `productsizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_man_categoys`
--
ALTER TABLE `pro_man_categoys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_return_invoices`
--
ALTER TABLE `purchase_return_invoices`
  MODIFY `purchaseReturnInvoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_return_items`
--
ALTER TABLE `purchase_return_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regimembers`
--
ALTER TABLE `regimembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_men`
--
ALTER TABLE `sales_men`
  MODIFY `salesMan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_return_invoices`
--
ALTER TABLE `sales_return_invoices`
  MODIFY `salesReturnInvoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_return_items`
--
ALTER TABLE `sales_return_items`
  MODIFY `salesReturnItem_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale_invoices`
--
ALTER TABLE `sale_invoices`
  MODIFY `saleInvoice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sale_items`
--
ALTER TABLE `sale_items`
  MODIFY `saleItem_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sharecollections`
--
ALTER TABLE `sharecollections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shareholders`
--
ALTER TABLE `shareholders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sharepakages`
--
ALTER TABLE `sharepakages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sharewithdraws`
--
ALTER TABLE `sharewithdraws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_reports`
--
ALTER TABLE `stock_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userinoutrecords`
--
ALTER TABLE `userinoutrecords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verify_tokens`
--
ALTER TABLE `verify_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

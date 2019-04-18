-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 01:59 PM
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
-- Database: `creative_ac`
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
(18, '2019_04_13_111314_create_userinoutrecords_table', 14);

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
(5, 'After Sale', 'testing', '43434', 'a@gamil.com', 'Chitagonj', 100.00, NULL, 5, 2, '2019-04-13 03:12:32', '2019-04-13 03:12:32'),
(6, 'After Sale', 'Khan Iron', '43434', 'a@gamil.com', 'Chitagonj', 100.00, '2019-04-13', 5, 2, '2019-04-13 03:36:25', '2019-04-13 03:36:25');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `paymentvouchers`
--
ALTER TABLE `paymentvouchers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

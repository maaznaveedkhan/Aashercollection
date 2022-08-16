-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 01:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aasher_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sneakers', 'Men\'s Sneakers', '1660215091.jpg', '2022-08-11 05:51:31', '2022-08-11 05:51:31'),
(2, 'Men\'s', 'Men\'s Men\'s Men\'s', '1660297515.jpg', '2022-08-12 04:45:15', '2022-08-12 04:45:15'),
(3, 'Women\'s', 'Women\'s Shoes', '1660297536.jpg', '2022-08-12 04:45:36', '2022-08-12 04:45:36'),
(4, 'Kids', 'Kids Shoes', '1660297573.jpg', '2022-08-12 04:46:13', '2022-08-12 04:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_07_054218_create_user_infos_table', 2),
(12, '2022_08_07_063329_add_role_to_users_table', 3),
(13, '2022_08_07_092140_create_user_infos_table', 3),
(14, '2022_08_07_093610_create_categories_table', 4),
(15, '2022_08_07_104757_create_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discounted_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `short_description`, `long_description`, `price`, `discounted_price`, `product_thumbnail`, `gender`, `product_images`, `size`, `color`, `delivery_charges`, `created_at`, `updated_at`) VALUES
(1, '1', 'Adidas Sneakers', 'Adidas Sneakers', 'Adidas Sneakers Adidas Sneakers Adidas Sneakers', '5500', '5000', '1660215146.jpg', NULL, '[\"13676571f753b91768bc8b5e0fb29cbe.jpg\",\"bird-g30ac245bb_1280.png\"]', '9', 'White', '250', '2022-08-11 05:52:26', '2022-08-11 05:52:26'),
(2, '3', 'Women\'s Sneakers', 'Women\'s Sneakers', 'Women\'s Sneakers Women\'s SneakersWomen\'s Sneakers', '6600', '6400', '1660298241.jpg', NULL, '[\"womens-shoes-500x500-1.jpg\"]', '7', 'Pink', '500', '2022-08-12 04:57:21', '2022-08-12 04:57:21'),
(3, '2', 'Formal Shoes', 'Formal Shoes', 'Formal Shoes', '10000', '9500', '1660298314.jpg', NULL, '[\"istockphoto-187310279-612x612.jpg\"]', '10', 'Brown', '500', '2022-08-12 04:58:34', '2022-08-12 04:58:34'),
(4, '4', 'Kid\'s Shoes', 'Kid\'s Shoes', 'Kid\'s Shoes', '2000', '1500', '1660298428.jpg', NULL, '[\"istockphoto-522628236-612x612.jpg\"]', '4', 'Purple', '250', '2022-08-12 05:00:28', '2022-08-12 05:00:28'),
(5, '2', 'Camouflage Sneaker', 'Camouflage Sneaker', 'Camouflage Sneaker', '25000', '22000', '1660300590.jpg', NULL, '[\"best-men-sneakers-balanciaga-triple-s-luxe-digital-780x520.jpg\"]', '10', 'Camouflage', '500', '2022-08-12 05:36:30', '2022-08-12 05:36:30'),
(6, '2', 'Formal Shirt', 'Men\'s Formal Shirt', 'Men\'s Formal Shirt Men\'s Formal Shirt', '2500', '2300', '1660301166.jpg', 'male', '[\"download.jpg\"]', 'L', 'Blue', '300', '2022-08-12 05:46:06', '2022-08-12 05:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Test Admin', 'admin@gmail.com', '03000960070', NULL, '$2y$10$0gb..BPP.JrXqJFP0koFFOpLvhPNAMHGR4NF1PpXA9w.niqn5IsY6', NULL, '2022-08-07 00:24:14', '2022-08-07 00:24:14', '1'),
(2, 'Test User 1', 'user1@gmail.com', NULL, NULL, '$2y$10$6N3KEBdPGlgx7bcVLOUAkeOLJot8RXcugRuKHlSeiTdp1xsHDC9EC', NULL, '2022-08-07 01:07:07', '2022-08-07 01:07:07', '0'),
(3, 'User 3', 'user3@gmail.com', NULL, NULL, '$2y$10$pgjJLhXH0591S1cqrTcca.dGf3GhmI9N.xw7ppB7F2eaPEV3eeqz2', NULL, '2022-08-07 01:36:42', '2022-08-07 01:36:42', '0'),
(4, 'User 4', 'user4@gmail.com', NULL, NULL, '$2y$10$7JtmroHDoJkMgANlyhtKQuUnUa.1tNsWIi.WTYaCpapHmJ3LNht0a', NULL, '2022-08-07 01:44:01', '2022-08-07 01:44:01', '0'),
(5, 'User 5', 'user5@gmail.com', NULL, NULL, '$2y$10$LxWrpB9U76o295ZMD8cZTOGpisrkCQ7oAhORme6m3M3fuS7j1o22i', NULL, '2022-08-07 01:46:06', '2022-08-07 01:46:06', '0'),
(6, 'Test User 6', 'user6@gmail.com', NULL, NULL, '$2y$10$x/wqYWSHzivJUMz3fWcRF.xL027GWSbvv2l2kxTKoiXt796cXA9YO', NULL, '2022-08-07 01:48:41', '2022-08-07 01:48:41', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `user_id`, `name`, `phone`, `email`, `profile_picture`, `address`, `postal_code`, `city`, `created_at`, `updated_at`) VALUES
(1, '2', 'Test User 1', '03123456789', 'user1@gmail.com', '1660213608.png', 'People Colony', '66000', 'Multan', '2022-08-11 05:26:48', '2022-08-11 05:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

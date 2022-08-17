-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 01:15 PM
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
(15, '2022_08_07_104757_create_products_table', 5),
(17, '2022_08_11_091943_create_orders_table', 6),
(20, '2022_08_15_045105_create_order_items_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','processing','ondelivery','delivered','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping` decimal(20,2) DEFAULT 0.00,
  `discount` decimal(20,2) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `item_count` int(10) UNSIGNED DEFAULT NULL,
  `payment_status` tinyint(1) DEFAULT 0,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `status`, `shipping`, `discount`, `total`, `item_count`, `payment_status`, `payment_method`, `name`, `province`, `city`, `area`, `address`, `email`, `phone_number`, `notes`, `created_at`, `updated_at`) VALUES
(11, '62fa2192', 2, 'delivered', '0.00', NULL, NULL, NULL, 0, NULL, 'Test User', NULL, 'Multan', NULL, 'Multan', 'user1@gmail.com', '03012345678', NULL, '2022-08-15 05:36:02', '2022-08-17 04:38:53'),
(12, '62fa2604', 2, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-15 05:55:00', '2022-08-15 05:55:00'),
(13, '62fa261a', 2, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-15 05:55:22', '2022-08-15 05:55:22'),
(14, '62fa2642', 2, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-15 05:56:02', '2022-08-15 05:56:02'),
(15, '62fa27e1', 2, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Test', 'worker@mail.com', '03008949530', NULL, '2022-08-15 06:02:57', '2022-08-15 06:02:57'),
(16, '62fb1e87', 3, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-15 23:35:19', '2022-08-15 23:35:19'),
(17, '62fb6dae', 3, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 05:13:02', '2022-08-16 05:13:02'),
(18, '62fb6e25', 3, 'processing', '0.00', NULL, '39600.00', NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 05:15:01', '2022-08-17 04:41:52'),
(19, '62fb6ee4', 3, 'pending', '0.00', NULL, '49600.00', 5, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 05:18:12', '2022-08-16 05:18:12'),
(20, '62fb70a6', 4, 'pending', '0.00', NULL, '40500.00', 3, 0, NULL, 'User 4', NULL, 'Multan', NULL, 'Mumtazabad', 'user4@gmail.com', '03009602707', NULL, '2022-08-16 05:25:42', '2022-08-16 05:25:42'),
(21, '62fc6d5d', 3, 'pending', '0.00', NULL, '170100.00', 13, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 23:23:57', '2022-08-16 23:23:57'),
(22, '62fc6dd4', 3, 'pending', '0.00', NULL, '12000.00', NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 23:25:56', '2022-08-16 23:25:56'),
(23, '62fc6e4d', 3, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 23:27:57', '2022-08-16 23:27:57'),
(24, '62fc6e5b', 3, 'pending', '0.00', NULL, NULL, NULL, 0, NULL, 'Test Admin', NULL, 'Multan', NULL, 'Mumtazabad', 'user2@gmail.com', '030008949530', NULL, '2022-08-16 23:28:11', '2022-08-16 23:28:11'),
(25, '62fc82a0', 5, 'pending', '0.00', NULL, '9100.00', 2, 0, NULL, 'User 5', NULL, 'Multan', NULL, 'Peoples Colony', 'user5@gmail.com', '03000960070', NULL, '2022-08-17 00:54:40', '2022-08-17 00:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 3, '62fb1e87', 2, 1, '6600.00', NULL, NULL),
(2, 3, '62fb1e87', 4, 1, '2000.00', NULL, NULL),
(3, 3, '62fb6e25', 1, 1, '5500.00', NULL, NULL),
(4, 3, '62fb6e25', 5, 1, '25000.00', NULL, NULL),
(5, 3, '62fb6e25', 6, 1, '2500.00', NULL, NULL),
(6, 3, '62fb6e25', 2, 1, '6600.00', NULL, NULL),
(7, 3, '62fb6ee4', 1, 1, '5500.00', NULL, NULL),
(8, 3, '62fb6ee4', 3, 1, '10000.00', NULL, NULL),
(9, 3, '62fb6ee4', 5, 1, '25000.00', NULL, NULL),
(10, 3, '62fb6ee4', 6, 1, '2500.00', NULL, NULL),
(11, 3, '62fb6ee4', 2, 1, '6600.00', NULL, NULL),
(12, 4, '62fb70a6', 1, 1, '5500.00', NULL, NULL),
(13, 4, '62fb70a6', 3, 1, '10000.00', NULL, NULL),
(14, 4, '62fb70a6', 5, 1, '25000.00', NULL, NULL),
(15, 3, '62fc6d5d', 1, 2, '11000.00', NULL, NULL),
(16, 3, '62fc6d5d', 3, 5, '50000.00', NULL, NULL),
(17, 3, '62fc6d5d', 5, 4, '100000.00', NULL, NULL),
(18, 3, '62fc6d5d', 6, 1, '2500.00', NULL, NULL),
(19, 3, '62fc6d5d', 2, 1, '6600.00', NULL, NULL),
(20, 3, '62fc6dd4', 3, 1, '10000.00', NULL, NULL),
(21, 3, '62fc6dd4', 4, 1, '2000.00', NULL, NULL),
(22, 3, '62fc6e5b', 1, 1, '5500.00', NULL, NULL),
(23, 3, '62fc6e5b', 3, 1, '10000.00', NULL, NULL),
(24, 3, '62fc6e5b', 5, 1, '25000.00', NULL, NULL),
(25, 5, '62fc82a0', 6, 1, '2500.00', NULL, NULL),
(26, 5, '62fc82a0', 2, 1, '6600.00', NULL, NULL);

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
(6, '2', 'Formal Shirt', 'Men\'s Formal Shirt', 'Men\'s Formal Shirt Men\'s Formal Shirt', '2500', '2300', '1660301166.jpg', 'male', '[\"download.jpg\"]', 'L', 'Blue', '300', '2022-08-12 05:46:06', '2022-08-12 05:46:06'),
(7, '1', 'Test Product 1', 'Test Product 1 Test Product 1', 'Test Product 1 Test Product 1 Test Product 1 Test Product 1', '55000', '50000', '1660729653.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\",\"best-men-sneakers-balanciaga-triple-s-luxe-digital-780x520.jpg\"]', '10', 'Multi', '500', '2022-08-17 04:47:33', '2022-08-17 04:47:33'),
(8, '1', 'Test Product 2', 'Test Product 2 Test Product 2', 'Test Product 2 Test Product 2 Test Product 2', '55250', '25410', '1660729699.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\",\"best-men-sneakers-balanciaga-triple-s-luxe-digital-780x520.jpg\"]', '10', 'Multi', '250', '2022-08-17 04:48:19', '2022-08-17 04:48:19'),
(9, '1', 'Test Product 3', 'Test Product 3', 'Test Product 3 Test Product 3 Test Product 3', '6600', '2300', '1660729768.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Camouflage', '250', '2022-08-17 04:49:28', '2022-08-17 04:49:28'),
(10, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Test Product 1 Test Product 1 Test Product 1 Test Product 1', '10000', '9500', '1660729812.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Pink', '250', '2022-08-17 04:50:12', '2022-08-17 04:50:12'),
(11, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Formal Shoes', '250000', '22000', '1660729840.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Camouflage', '500', '2022-08-17 04:50:40', '2022-08-17 04:50:40'),
(12, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Women\'s Sneakers Women\'s SneakersWomen\'s Sneakers', '10000', '2300', '1660729866.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Blue', '250', '2022-08-17 04:51:06', '2022-08-17 04:51:06'),
(13, '1', 'Test Client', 'Men\'s Formal Shirt', 'Test Product 1 Test Product 1 Test Product 1 Test Product 1', '10000', '2300', '1660729930.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Blue', '250', '2022-08-17 04:52:10', '2022-08-17 04:52:10'),
(14, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Formal Shoes', '250000', '6400', '1660730033.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Pink', '500', '2022-08-17 04:53:53', '2022-08-17 04:53:53'),
(15, '1', 'Test Worker', 'Kid\'s Shoes', 'Camouflage Sneaker', '10000', '2300', '1660730083.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Purple', '500', '2022-08-17 04:54:43', '2022-08-17 04:54:43'),
(16, '1', 'Test Client', 'Kid\'s Shoes', 'Kid\'s Shoes', '10000', '22000', '1660730111.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Pink', '250', '2022-08-17 04:55:11', '2022-08-17 04:55:11'),
(17, '1', 'Test Worker', 'Women\'s Sneakers', 'Women\'s Sneakers Women\'s SneakersWomen\'s Sneakers', '250000', '22000', '1660730136.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Camouflage', '250', '2022-08-17 04:55:36', '2022-08-17 04:55:36'),
(118, '2', 'Prof. Dewayne Stiedemann II', 'Possimus at dicta illo quidem provident modi. Consequatur aspernatur non numquam qui laboriosam.', 'Iste reiciendis voluptate explicabo qui ut eos. Eos cum nobis aspernatur quis dolores. Consequatur numquam eveniet maxime voluptas amet eius. Dolores labore consequuntur exercitationem voluptatem est rerum numquam mollitia. Aut voluptatum et fuga veritatis non et similique eos. Doloribus est accusamus ab delectus possimus accusantium. In enim corrupti consequuntur dolorem voluptas. Animi beatae quo beatae quibusdam nesciunt quia asperiores. Dolores natus et tempore tempore consequatur numquam sit. Voluptas reprehenderit atque voluptates vero. Cumque quis explicabo repellendus.', '1606', '5129', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '337', '2022-08-17 05:48:09', '2022-08-17 05:48:09'),
(119, '2', 'Prof. Lavinia Lesch III', 'In corrupti dolor error laudantium aliquid velit quibusdam. Harum omnis dolores nostrum ut sed ut repellendus.', 'Fuga ipsa quo dolor a delectus molestias. Quis quia perferendis saepe quidem amet magni voluptates suscipit. Et vel dolorum repellat. Ratione dolores dolorem magni sed laborum recusandae. Aut et et numquam veritatis exercitationem facilis. Dolorem excepturi recusandae voluptatem aperiam voluptatem et. Molestias ullam aperiam similique pariatur adipisci doloribus. Non repellendus rerum sed dolorum omnis eveniet et. Numquam quisquam et atque qui non voluptatem. Maiores tempore earum placeat laborum fuga rerum. Quo illo illo est laudantium amet nobis corrupti. Saepe quo sed molestias veritatis impedit quo sunt.', '729', '2361', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '499', '2022-08-17 05:48:09', '2022-08-17 05:48:09'),
(120, '2', 'Cali Hoppe Jr.', 'Nihil et aut sunt officia est. Est reprehenderit voluptates harum ut cum eligendi. Omnis quam dolorum blanditiis voluptatibus amet corrupti.', 'Impedit sit qui quod labore. Sunt aut labore omnis et provident nesciunt natus temporibus. Alias quis iure cupiditate voluptatem. Similique consequatur quis sint minima repellat sapiente et reiciendis. Nesciunt dolorum fugiat rerum. Voluptatibus dolorem natus praesentium iste saepe ullam debitis. Eum blanditiis accusantium laboriosam et non aut. Ab illo atque officiis officiis earum repudiandae. Quia ipsa corporis sit officiis ut. Ut eum autem perspiciatis ullam similique modi qui.', '5935', '798', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '269', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(121, '2', 'Addie Nolan', 'Ad dolorem consequatur sit consequatur harum aut dolor est. Laudantium similique consequatur consequatur sit.', 'Exercitationem quidem architecto nostrum est dolore. Consequatur facere ut quas sunt ipsam. Hic ex nostrum maxime repellendus libero. Iste aut possimus architecto voluptates illum sit. Vel numquam et amet. Quia id quis necessitatibus ex repellendus quasi placeat et. Sunt dolor totam fugiat eos optio eligendi.', '4689', '5274', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '214', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(122, '2', 'Julia Schinner', 'Corporis quia ratione dolorem ut nemo. Voluptas debitis molestias vel et quae et quia. Quaerat mollitia atque blanditiis quo.', 'Ut et voluptatibus voluptatibus et nesciunt. Harum error eum provident ut sequi impedit. Non iusto deserunt suscipit quia voluptatem ratione. Ad occaecati harum sunt eius in ducimus adipisci. Maxime nihil ratione dolor impedit. Quod voluptatem voluptatem perspiciatis incidunt id. Est expedita quia quas voluptates dolor autem. Sit quia quia impedit voluptate nam.', '7414', '1189', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '157', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(123, '2', 'Dr. Elise Cole', 'Optio nam voluptatem quo dolores laboriosam. Architecto molestiae neque quis laudantium rerum ut.', 'Eos occaecati officiis facilis labore. Temporibus ab voluptas atque ipsam. Itaque hic ut ab voluptate. Eveniet sit voluptatum porro officia qui. Ipsum fugit soluta voluptas qui ea. Repellat aspernatur incidunt aliquam rem. Amet facilis ducimus ipsam quis. Saepe in perspiciatis nostrum et quas. Nam est dolores a odio fugiat id. Vitae nostrum mollitia non ut dolorem. Cumque est rerum molestias nobis.', '1389', '5423', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '381', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(124, '2', 'Freeda Sawayn', 'Quo neque sit magni tenetur eos aspernatur commodi excepturi. A eveniet porro quas consequatur.', 'Sed reiciendis qui quasi temporibus perspiciatis. Excepturi sit assumenda sunt quam tempore. Suscipit non sint necessitatibus veritatis repellat. Quam quam laboriosam et sit inventore sunt necessitatibus. Id magni laudantium reiciendis assumenda molestiae vel. Repellat sit voluptatibus veritatis occaecati asperiores vitae quos.', '2687', '3256', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '361', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(125, '2', 'Santos Stracke', 'Enim in quibusdam aut ea consequuntur. Quo autem fuga tenetur quis ratione omnis est. Reprehenderit impedit nostrum voluptatem dolorem at voluptatem occaecati ipsum.', 'Dolorem et quia soluta omnis corporis possimus aliquid. Non aut nobis in modi. Sed fugit in omnis illo. Placeat nobis placeat reprehenderit quo. Illum ut deserunt consequatur aut inventore est. Magnam maxime tempore officiis rerum. Ad exercitationem voluptas vel modi cum eius odio. Quasi dicta aut ad vitae consequuntur ut in. Ut ab sapiente eum. Et natus commodi commodi dolorum exercitationem debitis.', '5312', '4319', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '299', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(126, '2', 'Alberto Bailey', 'Molestiae est omnis illo laudantium. Perspiciatis deleniti nesciunt sapiente libero eos. Nobis doloremque qui dolor quaerat.', 'Ex omnis beatae libero maxime necessitatibus. Aut quibusdam quo cum aliquid ea facere. Earum est consectetur reprehenderit amet soluta sunt. Fugiat illo nulla qui. Veritatis ut ea voluptas et. Suscipit quia aut voluptatem inventore. Voluptates dolores autem architecto esse. Dolores magnam ut recusandae quidem. Est reprehenderit et et eum ipsum nihil.', '1303', '1851', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '458', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(127, '2', 'Berry Grant', 'Rerum sed voluptatem delectus consequatur quis a. Voluptatibus voluptatem consequatur quo voluptas sed nostrum. Non voluptates ipsa neque enim.', 'Officiis cumque pariatur veritatis necessitatibus repudiandae. Aliquid amet alias qui similique dolores reiciendis alias. Nulla ab pariatur sit accusantium. Delectus quis itaque quidem architecto a exercitationem voluptatem. Eos fuga aut qui doloremque consequatur tenetur. Enim in ab nobis et modi sed maiores. Voluptas quia quibusdam necessitatibus minus qui sunt nulla. Quia tenetur sit qui aut.', '5648', '6640', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '272', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(128, '2', 'Justice Deckow', 'Voluptates placeat quod porro aut molestias consequatur. Dicta velit harum consequatur officia modi autem. Consequatur distinctio nemo magnam ut nulla corrupti.', 'Dicta eos sunt rerum molestiae ut. Facilis ad sunt voluptate cum magni impedit explicabo. Illo alias fugit error a tempore quia dolor. Et voluptatem et architecto hic et nihil blanditiis. Repellendus corporis et voluptate vel quos. Rerum maxime vel enim ex quia facilis. Quisquam id esse culpa sed. Minima et atque doloremque omnis autem sint quasi. Expedita vitae repellat consequuntur necessitatibus est voluptatem tempore.', '7023', '1570', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '436', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(129, '2', 'Cecile Satterfield Jr.', 'Dignissimos assumenda praesentium est ad minima nam debitis quae. Sit accusamus consequatur incidunt laudantium suscipit. Et maxime quasi totam id magni est in.', 'Ab cumque ad modi accusamus quisquam non voluptate. Nisi et neque natus officiis exercitationem. Voluptatem illo laboriosam earum et. Eos culpa ea ut occaecati odit. Et sit error corrupti quos expedita. Voluptas sit consequatur quaerat eos inventore. Facilis illum deserunt natus fugit consequatur. Corporis quod enim voluptatum qui qui et quisquam. Est sit sed consequuntur voluptatem molestiae voluptates.', '1181', '3511', 'test.jpg', '', '[\"test.jpg\"]', '1977', '1977', '491', '2022-08-17 05:48:42', '2022-08-17 05:48:42'),
(130, '4', 'Miss Genoveva Price', 'Facilis qui est eaque repudiandae perspiciatis. Quia suscipit minus quam magni ut provident aut animi.', 'Sit praesentium nemo dolores quia dolores dolores asperiores sunt. Sed similique aliquam est recusandae voluptatem dolores sit. Doloremque dolores quia amet esse ut itaque minus. Aut et inventore fuga sunt voluptas quaerat molestiae. Distinctio illo numquam et odio repudiandae totam nemo. Veritatis magnam distinctio soluta sed. Dolore quam atque numquam illum officiis. Corporis facere aut dolor et. Tempora consectetur veniam cumque est natus est. Aut provident aut neque non reprehenderit quis. Aut at ullam quas ut nulla. Est eius veniam voluptate.', '695', '1332', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '224', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(131, '4', 'Nola Walsh', 'Cupiditate ad aut libero quaerat sit. Ut rerum sint fugiat ea amet.', 'Nam eligendi quisquam consectetur est. Rerum veniam officia incidunt maxime suscipit. Necessitatibus neque magni dolor ullam qui veritatis magnam. Laudantium repudiandae quae consequatur consequatur expedita ut. Quod ullam et consequatur consequatur aut aut. Repellat nam perferendis vel fugit maiores et quis tenetur. Omnis ut quia consequatur accusamus at sit. Optio officia neque praesentium amet labore vero nesciunt. Est illo autem fuga consequatur. Vero rem dolorem quae quae error cupiditate molestiae ullam.', '2847', '904', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '171', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(132, '4', 'Ernesto Mraz', 'Laborum id incidunt omnis illum. Perspiciatis suscipit voluptates sed hic quibusdam eos excepturi.', 'Eius velit eaque quis impedit explicabo alias tenetur. Occaecati sint vitae sunt rerum. Asperiores est aliquam rerum natus minus laborum dolor voluptatum. Quas mollitia debitis autem. Nobis quasi quia velit natus qui voluptatem. Perferendis id alias quibusdam sunt itaque. Aut est consequatur recusandae natus.', '1663', '1686', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '172', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(133, '4', 'Maxime Ledner', 'Voluptas blanditiis non totam recusandae. Dolores voluptatem sint quia molestiae esse accusantium sed.', 'Eos inventore molestiae quo voluptas sequi omnis tempore. Nostrum hic porro accusamus consequuntur dignissimos et. Porro qui magni nihil molestiae illum aut. Consequuntur dolorem velit et dolores. Officia dicta voluptatem eos sequi quaerat ipsum in. Et doloribus eos deserunt ratione ad exercitationem. Sunt consectetur ratione deleniti ducimus. Mollitia sit fugiat quia dolorum numquam numquam.', '2613', '998', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '353', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(134, '4', 'Meagan Emard II', 'Est est sed aut aut molestiae. Est aliquid ea fugit.', 'Et autem ullam veritatis repellat. Officia quia repellat perferendis sed accusantium necessitatibus inventore. Consequuntur minima vitae et ratione autem. Velit accusantium molestiae minima suscipit. Qui architecto accusantium optio aut reiciendis recusandae. Sunt nisi sit est dicta eum sit qui. Ex sed eum quia non quasi voluptates. Quia ut est enim dicta in delectus ab. Aliquam amet nihil ut dolores.', '2732', '673', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '303', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(135, '4', 'Jarrett Kunze', 'Quidem aliquam aut odit officia. Mollitia earum eius officia vero eum dolorem voluptas porro.', 'Voluptatem et voluptatem corrupti voluptatem ut. Exercitationem quam non quia repellendus dolorem quae. Quia error sint quis quo corrupti sapiente mollitia. Ullam soluta iure aperiam ducimus. Nisi praesentium blanditiis vel eveniet pariatur. Consequatur fuga vero atque ea excepturi nisi blanditiis. Fuga repellat sed fugit quo dignissimos. Vel consequatur iste et nobis similique et qui. Sequi nobis repellat consequuntur quae in voluptatibus quo animi. Praesentium nostrum molestias qui rerum aut eum molestias. Doloribus aut est ut dolores fuga. Et enim tempora dolorum dolorum aut.', '2616', '1956', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '298', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(136, '4', 'Dayne Murphy V', 'Est quasi qui voluptatem vel. Earum qui sit deleniti delectus est. Inventore occaecati alias molestiae quae delectus tempore.', 'Id sed perspiciatis enim molestiae. Eligendi culpa quas sed tenetur dolorum labore aut. Officiis asperiores commodi at rerum. Voluptatem officia ea est consectetur non optio. Veritatis ea deleniti reprehenderit. Magni dolores ipsa libero ducimus distinctio. Nihil quo sed ut velit.', '1271', '1121', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '227', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(137, '4', 'Ms. Shemar Ziemann', 'Hic omnis tenetur rerum. Aliquam non iure voluptatem nemo voluptatem eveniet consequuntur. Ullam omnis voluptatem ducimus molestiae facere itaque.', 'Soluta ullam voluptatem adipisci amet voluptates aperiam. Cupiditate ea corporis commodi dolorem consequatur. Et et enim non non. Rem perspiciatis error culpa nihil rerum in. Debitis reiciendis aperiam maiores. Ut quisquam eveniet ullam.', '783', '1398', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '475', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(138, '4', 'Fritz D\'Amore', 'Maiores magnam ea necessitatibus qui assumenda. Ea laborum corrupti sed aperiam et. Praesentium repellendus reprehenderit voluptates.', 'Rerum sapiente ut cum ipsum dolor esse sapiente. Quo dolorem rem unde asperiores placeat. Delectus est quis est dicta officia voluptatibus et. Sint nobis voluptate perferendis quaerat consequatur sed minus voluptates. Ex unde rerum dolorum est architecto. Atque est aperiam adipisci quas velit quasi laboriosam.', '2969', '1384', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '361', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(139, '4', 'Catalina Wiza IV', 'Dolores delectus minus nulla esse quisquam. Non occaecati quis officiis natus id voluptatibus impedit.', 'Debitis ut soluta dolore aut vitae fuga nihil. Est temporibus magnam occaecati. Enim cupiditate sit autem sed voluptatem. Consequatur nihil quo beatae in corrupti. Rerum autem tenetur perferendis optio excepturi qui architecto. Placeat qui temporibus sunt occaecati dolorum. Aperiam accusamus voluptatem ea modi aut doloremque eveniet excepturi. Dolores consequatur possimus voluptatem molestias sequi sequi aut sint. Deserunt et ratione ducimus iusto sequi voluptatem reiciendis. Voluptatem architecto qui autem architecto laudantium. Quam et et maiores aut non quam.', '2003', '1440', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '388', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(140, '4', 'Brayan Ward Jr.', 'Ad dolorem facere omnis doloribus fugit. Excepturi ut dolor voluptates.', 'Quae rerum recusandae quisquam aliquid non. Porro numquam qui tempore. Dolorem dignissimos cupiditate voluptatum quia. Laboriosam sed voluptatem nam sunt et sit quia. Hic voluptatibus quo autem delectus inventore autem. Aliquam accusamus officia deleniti quo nam qui voluptatem. Animi ipsam esse quis explicabo quidem dicta. Aspernatur et numquam deserunt nam placeat id qui vel. Magni corporis totam esse eum ea. Hic quia qui ad voluptate doloremque facere.', '2621', '1883', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '170', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(141, '4', 'Pierce Mayer', 'Iusto nostrum velit ut qui voluptates. Dolor repellat delectus id voluptate eaque.', 'Neque consequatur cum qui assumenda voluptas. Quia consequatur ad quo sit veritatis molestiae voluptatem dolorem. Quos ipsam eaque pariatur laboriosam omnis labore. Temporibus qui qui molestias quia sit. Quae nesciunt sint minima sit. Officia suscipit nihil assumenda aperiam. Tempora dolore fugit et est quisquam. Veritatis voluptates laborum quia voluptas.', '2004', '1007', 'childtest.jpg', '', '[\"childtest.jpg\"]', '5', 'purple', '254', '2022-08-17 05:52:18', '2022-08-17 05:52:18'),
(142, '3', 'Prof. Ransom Jast', 'Quibusdam maiores aperiam deleniti quae ipsam occaecati. Aut alias et ipsum qui consequatur pariatur harum. Quisquam dolorum architecto nobis officiis non.', 'Laborum consequuntur ut et unde voluptas. Praesentium consequatur qui pariatur illo voluptatem. Molestiae fugiat labore tempora nulla eum soluta dignissimos nobis. Sed qui veniam vitae. Iste dolorem sit quasi voluptatem. Doloremque voluptas eius doloribus ea est. Ipsa recusandae omnis enim voluptate sit. Cupiditate aut qui explicabo. Assumenda eum corrupti ipsum. Deleniti vitae cum voluptatem quisquam modi.', '923', '725', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '416', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(143, '3', 'Vesta Zieme', 'Libero natus aut praesentium et laudantium suscipit non. Aut repudiandae voluptates non voluptates omnis atque. Minus sint culpa itaque autem qui iste.', 'Animi quia expedita ab illum qui quo inventore. Sint qui consequatur necessitatibus sint. Officiis repellendus recusandae commodi molestiae dolorem. Dolore cumque nisi quod voluptatibus et sed. Quis sint ad officiis temporibus. Voluptatem iusto sunt beatae labore iure sit illum. Voluptatum culpa cum at autem. Nobis voluptates fugit tenetur repudiandae ut itaque tempora. Consectetur et architecto reiciendis earum dolorem vero facilis voluptatem. Eos at optio rerum impedit molestias odit. Sunt eaque facilis voluptas quos. Voluptates enim occaecati beatae dignissimos praesentium et reprehenderit.', '508', '743', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '474', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(144, '3', 'Ms. Amiya Marks', 'Illo maxime omnis laboriosam nam provident sit vel et. Sequi nam eveniet ut est neque optio non.', 'Aspernatur vel aperiam recusandae. Veritatis quasi rem doloremque corporis. Dolore autem earum dolor. Neque laboriosam odio sint incidunt iste est nihil. Voluptatem at aut nulla debitis rem. Dolores vitae modi nulla voluptatibus. Et iusto tempora vero ipsam.', '1279', '1306', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '214', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(145, '3', 'Nathanael Boehm', 'Quia eum modi aperiam quas inventore ullam. Doloribus nihil nostrum tempora deleniti nesciunt ullam.', 'Odit unde dolores et maxime nam. Aut earum illum sed aut dolore ipsa maiores. Velit consequatur qui voluptatem omnis itaque. Hic accusamus itaque praesentium ab. Laborum recusandae modi perferendis doloremque earum doloremque ut aut. Unde architecto expedita qui vel temporibus quam ea.', '1670', '702', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '360', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(146, '3', 'Prof. Brock Stamm V', 'Esse tenetur praesentium deserunt officia ducimus. Maiores sed laudantium quaerat consequatur.', 'Enim magnam quo quos sit sed. Sunt atque et quo. Quidem accusamus neque rerum quam sint. Sapiente et voluptatem maxime fugiat eius eius ullam esse. In vitae veniam voluptatem. Dolores eaque quia consequatur eaque. Ad accusamus ea explicabo inventore fuga qui quae. Quasi animi enim officiis id. Minus est debitis adipisci ut cumque aliquid. Esse aut eos quos ut dolores et.', '1785', '1299', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '263', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(147, '3', 'Sandra Harvey', 'Ullam aperiam dicta in. Ut quidem velit doloremque laudantium consequatur. Aut qui quaerat eum dicta sapiente.', 'Eum at fugiat doloribus sit. Non quaerat sit incidunt asperiores optio quibusdam illum. Assumenda quia est impedit sint et. Dolorem accusantium adipisci harum saepe quod vero rerum. Ipsam rem delectus magnam ut qui reiciendis corporis. Quis tenetur mollitia atque ducimus deserunt harum. Reiciendis numquam ut velit itaque voluptas repudiandae. Ea consectetur aliquam cum id fuga.', '1161', '1482', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '446', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(148, '3', 'Louisa Feest', 'Odit cupiditate eum velit ipsam est quas eos. Quis consequatur libero cupiditate odit.', 'Culpa necessitatibus dolores omnis recusandae ipsa. Ad enim accusamus consequatur aut. Nesciunt rerum beatae voluptatem corporis quae possimus. Vel ut libero ipsam fugit. Dolorem provident at quos corrupti ut doloremque provident. Ut at delectus voluptatem. Dignissimos recusandae perspiciatis pariatur et et et explicabo. Aut maxime animi accusantium asperiores sint nemo et est. Rerum sed omnis omnis et rerum omnis enim.', '1351', '1885', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '451', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(149, '3', 'Cathryn Stiedemann III', 'Tempora esse dolor voluptatibus sunt magnam cum. Doloremque officiis quia asperiores tenetur.', 'Officia error harum aperiam. Quasi ad expedita incidunt ducimus qui ipsum. Dolorem maxime aut nam aut. Earum debitis est maiores aut ex. Sed porro qui distinctio ut reprehenderit voluptas dicta. Aperiam deserunt facilis maxime officia est. Enim vel nihil est dolor iste. Non quam et voluptas hic. Et omnis quia enim. Deleniti culpa fugiat rerum hic officia sunt fugit.', '1369', '693', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '356', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(150, '3', 'Mrs. Marlee Rau', 'Fugiat autem velit minima hic delectus officia accusantium. Recusandae iusto deleniti consequatur est qui et voluptates. Accusamus nisi consequatur nisi nihil.', 'Doloribus aperiam harum deleniti consequatur veniam. Et ratione nisi voluptas aperiam. Velit illum incidunt quis eaque totam praesentium ullam quia. Perferendis illum omnis architecto ut cumque ut laudantium. Voluptate voluptate aliquid quibusdam omnis asperiores. Temporibus adipisci quod ut in eveniet omnis dolores. Adipisci qui consequatur sequi. Et aspernatur minus exercitationem architecto est nihil et atque. Nemo et magnam deserunt debitis eveniet. Eos rerum corporis sed qui quaerat placeat. Facere enim quia quod et in sunt.', '1848', '1792', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '410', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(151, '3', 'Margaret Beahan', 'Molestias vero facere accusamus sapiente. Dicta est recusandae est ea nihil eum.', 'Ut quis dolorem suscipit voluptas. Quibusdam possimus non corporis molestiae dolorem rerum deserunt unde. Quidem veritatis voluptate odio qui voluptates. Perferendis voluptatibus cum nulla ea. Amet ex voluptatem est distinctio soluta aut sit. Voluptatum quis in et. Ratione eveniet assumenda doloribus ducimus sit praesentium molestias. Ut quae nihil sunt tempora reiciendis. Odit aut error molestiae numquam dolor maxime consequatur dicta.', '2322', '1108', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '252', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(152, '3', 'Mrs. Amber Reinger', 'Quod vitae voluptas esse inventore alias libero impedit. Aspernatur non nostrum eos ullam perferendis. Recusandae saepe tempora qui eaque commodi dolorem voluptates.', 'A ut adipisci provident molestiae. Numquam fugiat fugit quis quis et beatae saepe. Eos labore corrupti quia saepe. Dolorem omnis non suscipit dolorem. Reprehenderit sint voluptatem voluptates. Soluta eligendi minus voluptatum omnis minima aspernatur. Voluptas deleniti quam ut eligendi quam nemo optio itaque. Accusantium ea quo ut ut aspernatur nemo quo. Commodi unde est recusandae. Quisquam assumenda aut sit molestiae sed deleniti. Ipsa ad fugit quia sit adipisci ducimus autem. Enim ea totam illum nesciunt voluptas consequatur officia.', '2138', '1338', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '487', '2022-08-17 05:54:00', '2022-08-17 05:54:00'),
(153, '3', 'Casper Nikolaus', 'Qui quia doloribus nobis aut ut. Voluptatem ad aspernatur vitae ut eum voluptas quae incidunt.', 'Debitis eum fuga blanditiis necessitatibus fugit voluptas voluptas quae. Impedit enim quis consectetur in quo. Libero velit possimus quos commodi cumque sint doloribus. Quibusdam suscipit autem corrupti molestiae quia laudantium sed. Quibusdam et laudantium voluptas fugit eos. Necessitatibus nihil enim rerum sunt. Expedita praesentium dolorem dolores temporibus officiis et deleniti. Molestiae saepe eius aut qui deserunt. Aut iure aut doloremque aut tenetur sed inventore. Eum molestiae laborum excepturi deleniti magnam veritatis at. Quam minima facilis tenetur aperiam nihil. Rerum accusantium quos commodi tenetur veritatis.', '2784', '1722', 'womentest.jpg', '', '[\"womentest.jpg\"]', '8', 'purple', '329', '2022-08-17 05:54:00', '2022-08-17 05:54:00');

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
(1, '2', 'Test User 1', '03123456789', 'user1@gmail.com', '1660213608.png', 'People Colony', '66000', 'Multan', '2022-08-11 05:26:48', '2022-08-11 05:26:48'),
(2, '3', 'Test Admin', '030008949530', 'user2@gmail.com', NULL, 'Mumtazabad', '6500', 'Multan', '2022-08-15 05:55:00', NULL),
(3, '4', 'User 4', '03009602707', 'user4@gmail.com', '1660645531.jpg', 'Mumtazabad', '66000', 'Multan', '2022-08-16 05:25:31', '2022-08-16 05:25:31'),
(4, '5', 'User 5', '03000960070', 'user5@gmail.com', '1660715669.jpg', 'Peoples Colony', '66000', 'Multan', '2022-08-17 00:54:29', '2022-08-17 00:54:29');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_user_id_foreign` (`user_id`),
  ADD KEY `order_items_order_id_index` (`order_id`),
  ADD KEY `order_items_product_id_index` (`product_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_number`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 29, 2022 at 07:19 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatiqgvh_aasher_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to Reid Store!', '<p>Lorem ipsum dolor sit amet. Id temporibus iusto id odit eius&nbsp;<strong>Eos exercitationem hic molestiae molestias aut incidunt sunt hic quos excepturi</strong>. Et officia vitae ut sint repellendus&nbsp;<a href=\"https://www.loremipzum.com/\" target=\"_blank\">Ex sint sed error maxime</a>&nbsp;eos minus porro et praesentium voluptas est eaque doloremque! Id modi dolor sit voluptas voluptatibus&nbsp;<em>Qui rerum in labore voluptates sit sequi internos a consequatur quia</em>.</p>\r\n\r\n<h2>Eos eveniet tempore eos nostrum quod.</h2>\r\n\r\n<p>Non aperiam vitae&nbsp;<em>Ut expedita est minus quos et porro neque 33 recusandae molestiae</em>&nbsp;ut neque ipsa ea ipsam eius. Non labore dolorem in eveniet cupiditate cum blanditiis placeat qui nulla totam a natus ipsum.</p>\r\n\r\n<ul>\r\n	<li>Qui reprehenderit provident aut nihil autem rem maiores magnam ad molestias quisquam.</li>\r\n	<li>Ex iusto amet in perspiciatis deserunt eum consequuntur minima.</li>\r\n	<li>Est iste veritatis qui consectetur enim 33 pariatur accusantium.</li>\r\n	<li>Aut corporis molestias et velit autem ut enim molestias hic neque nemo!</li>\r\n	<li>Aut laboriosam dolore aut quasi repudiandae.</li>\r\n	<li>Ut ipsum molestiae non sint sequi.</li>\r\n</ul>\r\n\r\n<h3>Et aperiam porro et praesentium enim et magnam illo.</h3>\r\n\r\n<p>In distinctio ducimus&nbsp;<em>Ut dolorem aut voluptatem cumque et expedita magnam aut dolores aspernatur</em>? Hic aliquid voluptatum et harum reiciendis&nbsp;<strong>Ut velit et perspiciatis quos aut perspiciatis molestiae</strong>.</p>\r\n\r\n<ol>\r\n	<li>Eos nemo explicabo est tempore velit.</li>\r\n	<li>Aut distinctio Quis aut corrupti assumenda ut aperiam repudiandae hic doloribus animi.</li>\r\n</ol>', '1660808886.png', '2022-08-18 02:48:06', '2022-08-18 02:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Test Blog 1', '\n<p>Lorem ipsum dolor sit amet. Sed nihil tempore <em>Aut possimus ut consequatur consequuntur sed soluta natus</em> et accusamus modi. Eum nemo enim <strong>Ut odit</strong> quo quia cupiditate ut dicta aliquam.</p>\n\n<ul>\n	<li>Ab eaque minus ea minus possimus id nihil nobis.</li>\n	<li>Ut corrupti odit ea numquam accusantium.</li>\n</ul>\n\n<p>Et earum aperiam.</p>\n\n<p>Ea assumenda fuga ut omnis neque in consequuntur similique a expedita quasi.</p>\n\n<p>Sit velit voluptas!</p>\n\n<p>Ex esse quasi sed dolorum repellat.</p>\n\n<p>Et reprehenderit sunt.</p>\n\n<p>Et aliquid magnam ut nemo voluptatem.</p>\n\n<p>33 illo odio ut voluptatum quaerat.</p>\n\n<p>In galisum praesentium hic Quis consequatur ut obcaecati aperiam aut aliquam vero.</p>\n\n<blockquote>Et expedita similique vel ducimus animi et ullam excepturi aut quis quasi est error natus.</blockquote>\n\n<pre>\n<code>&lt;!-- Sit veritatis  ab possimus molestiae et distinctio velit? --&gt;\n&lt;praesentium&gt;Et distinctio consequatur.&lt;/praesentium&gt;\n&lt;itaque&gt;Nam eaque rerum.&lt;/itaque&gt;\n&lt;alias&gt;In assumenda adipisci?&lt;/alias&gt;\n</code></pre>\n\n<h2>Aut quaerat accusantium ad corporis mollitia ea delectus voluptates?</h2>\n\n<p>Cum delectus sapiente eum aliquid iure eum doloremque dolorum deserunt ipsam hic repellat voluptatem qui voluptatem velit ea voluptatibus quae. Et quia necessitatibus <em>Sit molestiae vel neque molestiae aut aliquid ratione</em>. Eveniet consequatur <strong>Est nemo vel numquam reprehenderit ut enim enim</strong>. Eum Quis dolorem aut sequi dignissimos aut debitis doloribus ex blanditiis obcaecati aut modi dolorum qui dolor expedita labore fugit.</p>\n\n<ol>\n	<li>At dolorum harum est commodi vero et repellat consequuntur.</li>\n	<li>Ut veniam voluptas aut enim aliquid.</li>\n	<li>Ad accusantium labore sed voluptatibus cupiditate At autem eveniet qui molestiae sint.</li>\n</ol>\n\n<h3>Vel sint odio et enim reiciendis nam quia accusamus.</h3>\n\n<p>At minima corporis <em>Et doloribus ex commodi minima est quisquam illo est assumenda commodi</em> vel cupiditate voluptatum non itaque reprehenderit? Id sint dolor et dignissimos impedit in modi omnis eos ducimus quae qui nulla nobis ut veritatis aperiam ab voluptatibus omnis. Et officiis consequuntur quo quaerat repellat est odio quasi sed quia sunt hic galisum quia. Sit porro aspernatur non incidunt aperiam hic perferendis saepe.</p>', '1660889360.jpg', '1', '2022-08-19 01:09:20', '2022-08-19 01:09:20'),
(2, 'Test Blog 2', '<p>Lorem ipsum dolor sit amet. Cum amet veritatis <strong>Eos soluta aut praesentium tempora eos dolorem voluptas</strong>. Qui beatae obcaecati et nihil minima <em>33 voluptatem qui velit distinctio et molestiae sequi ad autem possimus</em> in quia commodi. In sapiente dignissimos <a href=\"https://www.loremipzum.com\" target=\"_blank\">Ex voluptatem aut alias eaque At voluptates galisum</a> sed consequatur nihil eos dolor voluptatibus id rerum veniam. Et expedita eaque aut quia aliquid aut deserunt galisum.</p>\r\n\r\n<ol>\r\n	<li>A odio voluptatem id totam nostrum eos perferendis eveniet qui ducimus atque.</li>\r\n	<li>Ex magnam provident in porro voluptatum.</li>\r\n	<li>Non rerum dolor ex repellat omnis ex recusandae similique et reiciendis asperiores.</li>\r\n</ol>\r\n\r\n<blockquote>Ex tempore sequi rem maxime nostrum ea odit architecto ut adipisci libero At voluptatum suscipit a eius doloribus.</blockquote>\r\n\r\n<pre>\r\n<code>&lt;!-- Sed quas voluptatem. --&gt;\r\n&lt;a&gt;Ut earum incidunt sed maxime laudantium.&lt;/a&gt;\r\n&lt;amet&gt;Nam possimus iusto.&lt;/amet&gt;\r\n&lt;aut&gt;Ad excepturi eligendi quo voluptatibus maxime!&lt;/aut&gt;\r\n&lt;ratione&gt;Sit veniam numquam.&lt;/ratione&gt;\r\n</code></pre>\r\n\r\n<p>In aliquid doloribus <em>Aut pariatur hic nulla illo sed ratione possimus</em> qui placeat maiores eos quidem dolorem At eligendi harum! Ut facilis dolorum eum aliquam enim 33 sapiente enim et laudantium expedita et suscipit omnis odit temporibus ut consequuntur corrupti. Ab modi quidem et voluptatem voluptas eum galisum autem id autem quia ab veniam tempora. Non molestiae voluptatum est velit repudiandae et excepturi dolore ut accusamus voluptas sed nihil nostrum ea doloremque possimus et repellat rerum.</p>\r\n\r\n<ul>\r\n	<li>Et dignissimos similique sed beatae totam.</li>\r\n	<li>Qui dolorem aliquid quo sint quisquam qui internos voluptatem.</li>\r\n	<li>In consequuntur possimus est possimus officia nihil galisum a asperiores laborum.</li>\r\n	<li>Quo quia laudantium est quibusdam facilis et debitis odit.</li>\r\n</ul>\r\n\r\n<p>Rem facere nobis <strong>In quia est consequatur libero quo voluptatem amet</strong>! Ut galisum ipsam <a href=\"https://www.loremipzum.com\" target=\"_blank\">Id enim sit amet impedit eos illum accusantium id voluptas sint</a>. Sit veniam enim et necessitatibus amet <em>Nam deserunt vel voluptatem nesciunt a nemo </em>. Ea recusandae doloribus ut ipsa ipsum sit dignissimos perspiciatis.</p>\r\n\r\n<p>Et provident autem qui internos inventore.</p>\r\n\r\n<p>Id repellendus sunt et sunt distinctio a deserunt quam et rerum quod.</p>\r\n\r\n<p>Non praesentium esse.</p>\r\n\r\n<p>In rerum fugiat et explicabo reiciendis.</p>', '1660889748.jpg', '2', '2022-08-19 01:15:48', '2022-08-19 01:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `blog_types`
--

CREATE TABLE `blog_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_types`
--

INSERT INTO `blog_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', '2022-08-19 02:55:11', '2022-08-19 02:55:11'),
(2, 'Creative', '2022-08-19 02:55:56', '2022-08-19 02:55:56'),
(3, 'Wordpress', '2022-08-19 02:56:23', '2022-08-19 02:56:23');

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
(1, 'Sneakers', 'Men\'s Sneakers', 'accessories.jpg', '2022-08-11 05:51:31', '2022-08-11 05:51:31'),
(2, 'Men\'s', 'Men\'s Men\'s Men\'s', 'mens.jpg', '2022-08-12 04:45:15', '2022-08-12 04:45:15'),
(3, 'Women\'s', 'Women\'s Shoes', 'women.jpg', '2022-08-12 04:45:36', '2022-08-12 04:45:36'),
(4, 'Kids', 'Kids Shoes', '1660297573.jpg', '2022-08-12 04:46:13', '2022-08-12 04:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','responded') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test Admin', '03000960070', 'admin@mail.com', 'testing', 'tetyrdgdfd', 'pending', '2022-08-18 04:18:49', '2022-08-18 04:18:49'),
(2, 'Crytoinomainoma', '89036770034', 'kendreabecoats@yahoo.com', 'Non tamen nummorum? Reficere nunc!', 'Adipiscing diam Bot nunc ut satus promerendae. http://go.tazalus.com/096s', 'pending', '2022-08-23 14:08:30', '2022-08-23 14:08:30'),
(3, 'Crytoinomainoma', '89035699816', 'devilfish_inside@yahoo.com', 'Financial Robot operatur in vobis, etiam cum tu somnum.', 'Iungere societatis prospere populo, qui pecuniam hic. http://go.tazalus.com/096s', 'pending', '2022-08-23 16:38:47', '2022-08-23 16:38:47'),
(4, 'Crytoinomainoma', '89036291175', 'orapuna@hotmail.com', 'Financial robot tenet, deferentes ad vos pecunias, dum somnum.', 'Omnis qui necessitatibus pecuniam, ut hanc Robot ex. http://go.tazalus.com/096s', 'pending', '2022-08-23 19:14:16', '2022-08-23 19:14:16'),
(5, 'Crytoinomainoma', '89032848233', 'wllsrh@gmail.com', 'Planto vestri pecunia opus est tibi tota die.', 'In ieiunas modo, ut vos peram crassus est hic. http://go.tazalus.com/096s', 'pending', '2022-08-23 21:49:32', '2022-08-23 21:49:32'),
(6, 'Crytoinomainoma', '89039970968', 'viswasgaradi@hotmail.com', 'Pretium non habetis? Quisque online.', 'Online referte sunt facillimus via financial libertatem. http://go.tazalus.com/096s', 'pending', '2022-08-24 00:21:02', '2022-08-24 00:21:02'),
(7, 'Crytoinomainoma', '89030898402', 'myekamocha@yahoo.com', 'Online reditus est clavem ad successus.', 'Quomodo Robot facit $1000 de $1 dignissim. http://go.tazalus.com/096s', 'pending', '2022-08-24 02:49:54', '2022-08-24 02:49:54'),
(8, 'Crytoinomainoma', '89033741366', 'dedunn2@cox.net', 'Etiam sciat puer ad pecuniam. Hoc robot quod opus est!', 'Optimus via pro omnibus, qui procurrit, pro financial libertatem. http://go.tazalus.com/096s', 'pending', '2022-08-24 05:22:18', '2022-08-24 05:22:18'),
(9, 'Crytoinomainoma', '89034621537', 'bimbersu@yahoo.com', 'Vultus pro an securus via ad pecuniam? Reprehendo sicco financial robot.', 'Online officium et adducam vos a fantastic utilitatem. http://go.tazalus.com/096s', 'pending', '2022-08-24 07:52:13', '2022-08-24 07:52:13'),
(10, 'Crytoinomainoma', '89033902251', 'judymaui@hawaiiantel.net', 'Vultus pro alia pecunia? Experiri optimum interdum instrumentum.', 'Financial Robot operatur in vobis, etiam cum tu somnum. http://go.tazalus.com/096s', 'pending', '2022-08-24 10:34:23', '2022-08-24 10:34:23'),
(11, 'Crytoinomainoma', '89033295121', 'Ryahxoxo@yahoo.com', 'Faciens pecuniam in rete facilius est nunc.', 'Scimus quomodo fieri dives, et tu? http://go.tazalus.com/096s', 'pending', '2022-08-24 13:10:59', '2022-08-24 13:10:59');

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
-- Table structure for table `instagram_posts`
--

CREATE TABLE `instagram_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instagram_posts`
--

INSERT INTO `instagram_posts` (`id`, `title`, `post_link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Post 1', 'https://www.instagram.com/', '1660888704.webp', '0', '2022-08-19 00:58:24', '2022-08-19 00:58:24'),
(2, 'Post 2', 'https://www.instagram.com/', '1660888741.jpg', '0', '2022-08-19 00:59:01', '2022-08-19 00:59:01'),
(3, 'Post 3', 'https://www.instagram.com/', '1660888760.jpg', '0', '2022-08-19 00:59:20', '2022-08-19 00:59:20'),
(4, 'Post 4', 'https://www.instagram.com/', '1660888808.jpg', '0', '2022-08-19 01:00:08', '2022-08-19 01:00:08'),
(5, 'Post 5', 'https://www.instagram.com/', '1660888847.jpg', '0', '2022-08-19 01:00:47', '2022-08-19 01:00:47');

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
(20, '2022_08_15_045105_create_order_items_table', 7),
(21, '2022_08_18_064704_create_abouts_table', 8),
(23, '2022_08_18_085331_create_contacts_table', 9),
(26, '2022_08_18_112336_create_instagram_posts_table', 10),
(28, '2022_08_18_115114_create_blogs_table', 11),
(29, '2022_08_19_072020_create_attributes_table', 12),
(30, '2022_08_19_074144_create_blog_types_table', 12),
(33, '2022_08_23_054643_add_attribute_name_to_products_table', 13),
(34, '2022_08_23_054802_add_attribute_values_to_products_table', 13);

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$Q4CZ1dlBlHIeNGMecp6Dq.mkjrovRdjgo90/QuMWgpiSV5l5DXaRC', '2022-08-18 05:40:06'),
('admin@gmail.com', '$2y$10$Q4CZ1dlBlHIeNGMecp6Dq.mkjrovRdjgo90/QuMWgpiSV5l5DXaRC', '2022-08-18 05:40:06'),
('admin@gmail.com', '$2y$10$Q4CZ1dlBlHIeNGMecp6Dq.mkjrovRdjgo90/QuMWgpiSV5l5DXaRC', '2022-08-18 05:40:06');

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
  `datasheet` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discounted_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_in_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_charges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attribute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `short_description`, `long_description`, `datasheet`, `price`, `discounted_price`, `discount_in_percentage`, `product_thumbnail`, `gender`, `product_images`, `size`, `color`, `delivery_charges`, `created_at`, `updated_at`, `attribute_name`, `attribute_values`) VALUES
(1, '1', 'Adidas Sneakers', 'Adidas Sneakers', 'Adidas Sneakers Adidas Sneakers Adidas Sneakers', NULL, '5500', '5000', NULL, '1660215146.jpg', NULL, '[\"13676571f753b91768bc8b5e0fb29cbe.jpg\",\"bird-g30ac245bb_1280.png\"]', '9', 'White', '250', '2022-08-11 05:52:26', '2022-08-11 05:52:26', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(2, '3', 'Women\'s Sneakers', 'Women\'s Sneakers', 'Women\'s Sneakers Women\'s SneakersWomen\'s Sneakers', NULL, '6600', '6400', NULL, '1660298241.jpg', NULL, '[\"womens-shoes-500x500-1.jpg\"]', '7', 'Pink', '500', '2022-08-12 04:57:21', '2022-08-12 04:57:21', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(3, '2', 'Formal Shoes', 'Formal Shoes', 'Formal Shoes', NULL, '10000', '9500', NULL, '1660298314.jpg', NULL, '[\"istockphoto-187310279-612x612.jpg\"]', '10', 'Brown', '500', '2022-08-12 04:58:34', '2022-08-12 04:58:34', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(4, '4', 'Kid\'s Shoes', 'Kid\'s Shoes', 'Kid\'s Shoes', NULL, '2000', '1500', NULL, '1660298428.jpg', NULL, '[\"istockphoto-522628236-612x612.jpg\"]', '4', 'Purple', '250', '2022-08-12 05:00:28', '2022-08-12 05:00:28', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(5, '2', 'Camouflage Sneaker', 'Camouflage Sneaker', 'Camouflage Sneaker', NULL, '25000', '22000', NULL, '1660300590.jpg', NULL, '[\"best-men-sneakers-balanciaga-triple-s-luxe-digital-780x520.jpg\"]', '10', 'Camouflage', '500', '2022-08-12 05:36:30', '2022-08-12 05:36:30', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Sm...'),
(6, '2', 'Formal Shirt', 'Men\'s Formal Shirt', 'Men\'s Formal Shirt Men\'s Formal Shirt', NULL, '2500', '2300', NULL, '1660301166.jpg', 'male', '[\"download.jpg\"]', 'L', 'Blue', '300', '2022-08-12 05:46:06', '2022-08-12 05:46:06', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(7, '1', 'Test Product 1', 'Test Product 1 Test Product 1', 'Test Product 1 Test Product 1 Test Product 1 Test Product 1', NULL, '55000', '50000', NULL, '1660729653.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\",\"best-men-sneakers-balanciaga-triple-s-luxe-digital-780x520.jpg\"]', '10', 'Multi', '500', '2022-08-17 04:47:33', '2022-08-17 04:47:33', NULL, NULL),
(8, '1', 'Test Product 2', 'Test Product 2 Test Product 2', 'Test Product 2 Test Product 2 Test Product 2', NULL, '55250', '25410', NULL, '1660729699.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\",\"best-men-sneakers-balanciaga-triple-s-luxe-digital-780x520.jpg\"]', '10', 'Multi', '250', '2022-08-17 04:48:19', '2022-08-17 04:48:19', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(9, '1', 'Test Product 3', 'Test Product 3', 'Test Product 3 Test Product 3 Test Product 3', NULL, '6600', '2300', NULL, '1660729768.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Camouflage', '250', '2022-08-17 04:49:28', '2022-08-17 04:49:28', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Sm...'),
(10, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Test Product 1 Test Product 1 Test Product 1 Test Product 1', NULL, '10000', '9500', NULL, '1660729812.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Pink', '250', '2022-08-17 04:50:12', '2022-08-17 04:50:12', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(11, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Formal Shoes', NULL, '250000', '22000', NULL, '1660729840.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Camouflage', '500', '2022-08-17 04:50:40', '2022-08-17 04:50:40', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Sm...'),
(12, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Women\'s Sneakers Women\'s SneakersWomen\'s Sneakers', NULL, '10000', '2300', NULL, '1660729866.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Blue', '250', '2022-08-17 04:51:06', '2022-08-17 04:51:06', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(13, '1', 'Test Client', 'Men\'s Formal Shirt', 'Test Product 1 Test Product 1 Test Product 1 Test Product 1', NULL, '10000', '2300', NULL, '1660729930.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Blue', '250', '2022-08-17 04:52:10', '2022-08-17 04:52:10', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(14, '1', 'Test Admin', 'Men\'s Formal Shirt', 'Formal Shoes', NULL, '250000', '6400', NULL, '1660730033.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Pink', '500', '2022-08-17 04:53:53', '2022-08-17 04:53:53', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(15, '1', 'Test Worker', 'Kid\'s Shoes', 'Camouflage Sneaker', NULL, '10000', '2300', NULL, '1660730083.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Purple', '500', '2022-08-17 04:54:43', '2022-08-17 04:54:43', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(16, '1', 'Test Client', 'Kid\'s Shoes', 'Kid\'s Shoes', NULL, '10000', '22000', NULL, '1660730111.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Pink', '250', '2022-08-17 04:55:11', '2022-08-17 04:55:11', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(17, '1', 'Test Worker', 'Women\'s Sneakers', 'Women\'s Sneakers Women\'s SneakersWomen\'s Sneakers', NULL, '250000', '22000', NULL, '1660730136.jpg', 'male', '[\"55a966f3371d22c6178b62ed.jpg\"]', '10', 'Camouflage', '250', '2022-08-17 04:55:36', '2022-08-17 04:55:36', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(158, '3', 'Test Admin', 'Women\'s Sneakers', '<p>dsdsadsad</p>', NULL, '10000', '50000', '-400', '1661234996.jpg', 'female', '[\"intagram2.jpg\",\"women.jpg\"]', '10', 'Brown', '250', '2022-08-23 01:09:56', '2022-08-23 01:09:56', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(159, '3', 'Test Admin', 'Women\'s Sneakers', '<p>dsdsadsad</p>', NULL, '10000', '50000', '-400', '1661235056.jpg', 'female', '[\"intagram2.jpg\",\"women.jpg\"]', '10', 'Brown', '250', '2022-08-23 01:10:56', '2022-08-23 01:10:56', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(160, '1', 'Test Product', 'Camouflage Sneaker', '<p>Camouflage Sneakerfsffdsfdsfdsfdsfds ffdsfdsf</p>', NULL, '250000', '22000', '91.2', '1660215146.jpg', 'male', '[\"intagramjpg.webp\",\"mens.jpg\"]', '10', 'Camouflage', '250', '2022-08-23 01:54:45', '2022-08-23 01:54:45', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(161, '1', 'Test Product', 'Camouflage Sneaker', '<p>Camouflage Sneakerfsffdsfdsfdsfdsfds ffdsfdsf</p>', NULL, '250000', '22000', '91.2', '1660215146.jpg', 'male', '[\"intagramjpg.webp\",\"mens.jpg\"]', '10', 'Camouflage', '250', '2022-08-23 01:54:59', '2022-08-23 01:54:59', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(162, '1', 'Test Product', 'Camouflage Sneaker', '<p>Camouflage Sneakerfsffdsfdsfdsfdsfds ffdsfdsf</p>', NULL, '250000', '22000', '91.2', '1660215146.jpg', 'male', '[\"intagramjpg.webp\",\"mens.jpg\"]', '10', 'Camouflage', '250', '2022-08-23 01:55:07', '2022-08-23 01:55:07', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}'),
(163, '2', 'T-Shirt', 'T-Shirt', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', NULL, '1200', '1000', '16.666666666667', '1661598529.jpg', 'male', '[\"Multiple-Colour-Fashion-Velour-T-Shirt-Men-Summer-Men-s-Short-Sleeve-O-neck-Velvet-Fabric.jpg_Q90.jpg\",\"images.jpg\"]', 'wq', 'White', '150', '2022-08-27 15:08:49', '2022-08-27 15:08:49', 'a:2:{i:0;s:5:\"Color\";i:1;s:4:\"Size\";}', 'a:2:{i:0;s:21:\"White,Black,Brown,Red\";i:1;s:25:\"Small,Medium,Large,XLarge\";}');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `name`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'xowehem@mailinator.com', NULL, 'Vel ipsam voluptas s', '2022-08-25 06:01:29', '2022-08-25 06:01:29'),
(2, 2, 1, 'tykegyfu@mailinator.com', NULL, 'Dolorum non ipsum mo', '2022-08-25 06:02:30', '2022-08-25 06:02:30'),
(3, 2, 1, 'Madeline Alston', 'xigyz@mailinator.com', 'Esse sed quo est do', '2022-08-25 06:03:26', '2022-08-25 06:03:26');

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
(5, 'User 5', 'user5@gmail.com', NULL, NULL, '$2y$10$LxWrpB9U76o295ZMD8cZTOGpisrkCQ7oAhORme6m3M3fuS7j1o22i', 'iaspSFvtqaqjLLibsoJQtmeAyrPTiDjaFVeagAp23t5Eh2vFAuAup7zIkEC0', '2022-08-07 01:46:06', '2022-08-07 01:46:06', '0'),
(6, 'Test User 6', 'user6@gmail.com', NULL, NULL, '$2y$10$x/wqYWSHzivJUMz3fWcRF.xL027GWSbvv2l2kxTKoiXt796cXA9YO', NULL, '2022-08-07 01:48:41', '2022-08-07 01:48:41', '0'),
(7, 'New User', 'user7@gmail.com', NULL, NULL, '$2y$10$XoY7tuwIyQ5tcqnuutYuWu28dQBKDfd2AlK4JZW0TFpj4wHjeTeKe', NULL, '2022-08-18 06:03:44', '2022-08-18 06:03:44', '0');

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
(4, '5', 'User 5', '03000960070', 'user5@gmail.com', '1660715669.jpg', 'Peoples Colony', '66000', 'Multan', '2022-08-17 00:54:29', '2022-08-17 00:54:29'),
(5, '7', 'New User', '03000960070', 'user7@gmail.com', '1660820791.jpg', 'Cantt', '6600', 'Multan', '2022-08-18 06:06:31', '2022-08-18 06:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 161, 'true', '2022-08-24 05:58:04', '2022-08-24 05:58:04'),
(3, 5, 1, 'true', '2022-08-24 16:01:50', '2022-08-24 16:01:50'),
(4, 1, 1, 'true', '2022-08-27 17:25:13', '2022-08-27 17:25:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_types`
--
ALTER TABLE `blog_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instagram_posts`
--
ALTER TABLE `instagram_posts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_types`
--
ALTER TABLE `blog_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instagram_posts`
--
ALTER TABLE `instagram_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
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

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

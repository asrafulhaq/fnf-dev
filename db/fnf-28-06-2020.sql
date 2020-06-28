-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 06:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fnf`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_ip`, `product_photo`, `product_name`, `product_price`, `product_quantity`, `product_amount`, `created_at`, `updated_at`) VALUES
(27, '::1', 'c90eb7c93f0b74d59d37c589ed640c64.jpg', 'Pabda Fish', 1700, 4, 6800, '2020-06-25 05:26:34', '2020-06-25 05:26:38'),
(28, '::1', 'c800c1178692702cace047968c50677f.jpg', 'Boal Fish', 300, 1, 300, '2020-06-25 06:39:32', '2020-06-25 06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `sub_cat`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Drinks & Beverage', 'drinks-beverage', '', 'ti-cup', 'Published', '2020-06-24 22:43:53', '2020-06-24 22:43:53'),
(2, 'Featured', 'featured', '', 'fas fa-cloud-meatball', 'Published', '2020-06-24 22:44:13', '2020-06-24 22:44:13'),
(3, 'Ready Meals', 'ready-meals', '', 'fas fa-carrot', 'Published', '2020-06-24 22:44:20', '2020-06-24 22:44:20'),
(4, 'Finger Foods', 'finger-foods', '', 'fas fa-pepper-hot', 'Published', '2020-06-24 22:44:30', '2020-06-24 22:44:30'),
(5, 'Freshwater Fish', 'freshwater-fish', '', 'fas fa-cloud-meatball', 'Published', '2020-06-25 00:10:23', '2020-06-25 00:10:23'),
(6, 'Sea Food', 'sea-food', '', 'fas fa-lemon', 'Published', '2020-06-25 00:10:40', '2020-06-25 00:10:40'),
(7, 'Our Special Cut Fishes', 'our-special-cut-fishes', '', 'fas fa-brain', 'Published', '2020-06-25 00:11:08', '2020-06-25 00:11:08'),
(8, 'Dried Fish', 'dried-fish', '', 'fas fa-carrot', 'Published', '2020-06-25 00:11:36', '2020-06-25 00:11:36'),
(9, 'Dairy & Spreads', 'dairy-spreads', '', 'ti-cup', 'Published', '2020-06-25 00:11:47', '2020-06-25 00:11:47'),
(10, 'Oils & Extracts', 'oils-extracts', '', 'fas fa-pepper-hot', 'Published', '2020-06-25 00:11:59', '2020-06-25 00:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 21, 2, NULL, NULL),
(10, 21, 3, NULL, NULL),
(11, 21, 6, NULL, NULL),
(12, 21, 8, NULL, NULL),
(13, 22, 2, NULL, NULL),
(14, 22, 3, NULL, NULL),
(15, 22, 4, NULL, NULL),
(16, 22, 9, NULL, NULL),
(17, 23, 2, NULL, NULL),
(18, 23, 3, NULL, NULL),
(19, 23, 6, NULL, NULL),
(20, 23, 10, NULL, NULL),
(21, 24, 4, NULL, NULL),
(22, 24, 5, NULL, NULL),
(23, 24, 6, NULL, NULL),
(24, 24, 9, NULL, NULL),
(29, 26, 2, NULL, NULL),
(30, 26, 4, NULL, NULL),
(31, 26, 6, NULL, NULL),
(32, 26, 8, NULL, NULL),
(33, 26, 10, NULL, NULL),
(44, 28, 2, NULL, NULL),
(45, 28, 5, NULL, NULL),
(46, 28, 6, NULL, NULL),
(47, 28, 10, NULL, NULL),
(48, 27, 1, NULL, NULL),
(49, 27, 2, NULL, NULL),
(50, 27, 3, NULL, NULL),
(51, 27, 5, NULL, NULL),
(52, 27, 9, NULL, NULL),
(53, 27, 10, NULL, NULL),
(54, 25, 1, NULL, NULL),
(55, 25, 3, NULL, NULL),
(56, 25, 5, NULL, NULL),
(57, 25, 8, NULL, NULL),
(58, 25, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_banner_switch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newsletter_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_banner` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `contact_title`, `contact_num`, `logo`, `top_banner`, `top_banner_switch`, `facebook`, `twitter`, `linkedin`, `google_plus`, `instagram`, `footer_text`, `newsletter_title`, `newsletter_desc`, `newsletter_bg`, `page_banner`, `created_at`, `updated_at`) VALUES
(1, 'Call us Today !', '01717777777', 'a9516e081ed6afbed8682d01c34f5bf1.png', '4a2c456888a40c2e81982126504d08e5.png', '', 'https://facebook.com/freelanc47', 'https://facebook.com/freelanc47', NULL, NULL, 'https://facebook.com/freelanc47', '© 2020 Fish n Food . All rights reserved to server.', 'Send Us your Cell No', 'Be the first to learn about our latest trends and get exclusive offers', '5988634d7338ea68e6bee8c89de7d17a.jpg', 'f7ef56d63fe9b2280fb79bf94ccf217b.png', NULL, '2020-06-25 07:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(4, 'App\\Model\\Product', 5, 'product_featured_image', '73008289_10215899975952062_1524400012086214656_n (1)', '73008289_10215899975952062_1524400012086214656_n-(1).jpg', 'image/jpeg', 'public', 41451, '[]', '[]', '[]', 1, '2020-06-13 05:55:04', '2020-06-13 05:55:04'),
(5, 'App\\Model\\Product', 6, 'product_featured_image', '992801_10200309905810052_51161978_n', '992801_10200309905810052_51161978_n.jpg', 'image/jpeg', 'public', 17650, '[]', '[]', '[]', 2, '2020-06-13 06:37:17', '2020-06-13 06:37:17'),
(6, 'App\\Model\\Post', 1, 'blog_post', 'healthiestvegetables', 'healthiestvegetables.jpg', 'image/jpeg', 'public', 56245, '[]', '[]', '[]', 3, '2020-06-15 02:04:07', '2020-06-15 02:04:07');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_04_21_051219_create_post_tags_table', 1),
(8, '2020_04_21_051248_create_product_brands_table', 1),
(9, '2020_04_21_051257_create_product_tags_table', 1),
(10, '2020_05_13_105858_create_media_table', 1),
(14, '2020_04_21_051231_create_products_table', 3),
(15, '2020_06_14_084023_create_sliders_table', 4),
(16, '2020_06_14_195035_create_offers_table', 5),
(17, '2020_06_14_205859_create_partners_table', 6),
(18, '2020_06_15_005127_create_home_pages_table', 7),
(19, '2020_06_15_044459_create_subscribes_table', 8),
(20, '2014_10_12_100000_create_password_resets_table', 9),
(24, '2020_04_21_051157_create_posts_table', 10),
(25, '2020_06_16_111524_create_carts_table', 11),
(29, '2020_06_25_040823_create_product_product_cat_table', 13),
(30, '2020_04_21_051239_create_product_cats_table', 14),
(31, '2020_06_25_043756_create_categories_table', 15),
(32, '2020_06_25_043838_create_category_product_table', 15),
(33, '2020_06_16_112330_create_orders_table', 16),
(34, '2020_04_21_051208_create_post_cats_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_img`, `status`, `created_at`, `updated_at`) VALUES
(7, '651f71623c7f52618db794b2a85bf974.jpg', 'Published', '2020-06-24 21:30:39', '2020-06-24 21:30:39'),
(8, '027d7bdd5c684f81e8dc3277a1b77a09.jpg', 'Published', '2020-06-24 21:30:46', '2020-06-24 21:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `cell`, `email`, `dist`, `address`, `payment_system`, `order_status`, `cart_id`, `total_amount`, `customer_ip`, `created_at`, `updated_at`) VALUES
(2, 'Asraful Haque', '01717700811', NULL, NULL, NULL, 'Cash on delivery', 'Pending', '', '7100', '::1', '2020-06-25 07:56:17', '2020-06-25 08:00:51'),
(3, 'SK Rony', '01710000000', NULL, NULL, NULL, 'Cash on delivery', 'Pending', '', '7100', '::1', '2020-06-25 08:00:30', '2020-06-25 08:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_img`, `status`, `created_at`, `updated_at`) VALUES
(3, '0ce4878b66dd5be3e9d28810a3f74972.png', 'Published', '2020-06-14 15:27:41', '2020-06-14 15:27:41'),
(4, '423944dbb615d1f0864b88b4a3520398.png', 'Published', '2020-06-14 15:27:46', '2020-06-14 15:27:46'),
(5, '32f8ab934386a7185237b7971af19650.png', 'Published', '2020-06-14 15:27:54', '2020-06-14 15:27:54'),
(6, '3515261b6e7f1c09c01c17ba69b56884.png', 'Published', '2020-06-14 15:28:00', '2020-06-14 15:28:00'),
(7, '6270abdf38e7855fc9e1c13a4fc4b5b2.png', 'Published', '2020-06-14 15:28:06', '2020-06-14 15:28:06'),
(8, '4340dfee6737127ecc207a03414894f2.png', 'Published', '2020-06-14 15:28:15', '2020-06-14 15:28:15');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` int(11) NOT NULL DEFAULT 1,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `featured_image`, `content`, `author`, `status`, `created_at`, `updated_at`) VALUES
(1, 'The central advisory committee to tackle coronavirus', 'the-central-advisory-committee-to-tackle-coronavirus', '38693cca0d87e45490c84af4d676d680.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, fugiat reiciendis impedit incidunt. Aspernatur saepe quidem reiciendis autem voluptatibus doloribus officia beatae magni pariatur quis quisquam, aut accusantium. Numquam deserunt mollitia eveniet debitis dignissimos accusamus dolorum. Unde error, amet iusto tenetur a, consectetur impedit sed est necessitatibus, aperiam nostrum pariatur.</p>', 1, 'Published', '2020-06-24 10:02:48', '2020-06-24 10:02:48'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit', '4972a08eda932ef46ec46502b63c70dd.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptas quas quibusdam voluptatem tempora porro sequi unde aliquid temporibus beatae!</p>', 1, 'Published', '2020-06-25 14:07:38', '2020-06-25 14:07:38'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit', 'f0ddf8b1635fa04b859b585afa1dbb5d.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptas quas quibusdam voluptatem tempora porro sequi unde aliquid temporibus beataeLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae voluptas quas quibusdam voluptatem tempora porro sequi unde aliquid temporibus beatae</p>', 1, 'Published', '2020-06-25 14:08:25', '2020-06-25 14:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `post_cats`
--

CREATE TABLE `post_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_cats`
--

INSERT INTO `post_cats` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'bangladesh', 'Published', '2020-06-25 08:24:56', '2020-06-25 08:24:56'),
(2, 'Food Helth', 'food-helth', 'Published', '2020-06-25 08:25:07', '2020-06-25 08:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` int(11) NOT NULL,
  `sale_price` int(11) DEFAULT 0,
  `shiping_cost` int(11) DEFAULT 0,
  `stock` int(11) DEFAULT 0,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `regular_price`, `sale_price`, `shiping_cost`, `stock`, `desc`, `status`, `product_image`, `product_gallery`, `created_at`, `updated_at`) VALUES
(21, 'Ilish Fish', 'ilish-fish', 1500, 1200, NULL, 200, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', 'dc2ba74a3912d8ca0e4e7cd561df9f1e.jpg', '', '2020-06-25 00:13:31', '2020-06-25 00:13:31'),
(22, 'Cow meat fresh', 'cow-meat-fresh', 600, 570, 30, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', 'f5d25901987681cf199fe491ad2ba4e5.jpg', '', '2020-06-25 00:14:34', '2020-06-25 00:14:34'),
(23, 'Rui Fish Larg Size', 'rui-fish-larg-size', 2000, NULL, NULL, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', '09277357e94c0bbd64fd411c1d80ea43.jpg', '', '2020-06-25 00:18:14', '2020-06-25 00:18:14'),
(24, 'Boal Fish', 'boal-fish', 300, NULL, NULL, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', 'c800c1178692702cace047968c50677f.jpg', '', '2020-06-25 00:18:57', '2020-06-25 00:18:57'),
(25, 'Koi Fish Fry', 'koi-fish-fry', 500, 460, NULL, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', 'e2edd33d1bdd208622d272f2e4386d3c.jpg', '', '2020-06-25 00:20:01', '2020-06-25 00:20:01'),
(26, 'Pabda Fish', 'pabda-fish', 1700, NULL, NULL, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', 'c90eb7c93f0b74d59d37c589ed640c64.jpg', '', '2020-06-25 00:22:03', '2020-06-25 00:22:03'),
(27, 'Meat of hean', 'meat-of-hean', 300, 250, NULL, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', '0b7c39931e980428e35a98acaf35ed83.jpg', '', '2020-06-25 00:23:25', '2020-06-25 00:23:25'),
(28, 'Khilsha Fish Food', 'khilsha-fish', 900, NULL, NULL, NULL, '<p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Published', '5266de2d20d07b4947af4c982c4e0777.jpg', '', '2020-06-25 00:24:43', '2020-06-25 00:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_cats`
--

CREATE TABLE `product_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_cats`
--

INSERT INTO `product_cats` (`id`, `name`, `slug`, `sub_cat`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Featured', 'featured', '', 'fas fa-fish', 'Published', '2020-06-24 21:08:53', '2020-06-24 21:08:53'),
(13, 'Freshwater Fish', 'freshwater-fish', '', 'fas fa-cloud-meatball', 'Published', '2020-06-24 21:10:07', '2020-06-24 21:10:07'),
(14, 'Sea Food', 'sea-food', '', 'fas fa-utensils', 'Published', '2020-06-24 21:10:31', '2020-06-24 21:10:31'),
(15, 'Our Special Cut Fishes', 'our-special-cut-fishes', '', 'fas fa-hamburger', 'Published', '2020-06-24 21:10:57', '2020-06-24 21:10:57'),
(16, 'Dried Fish', 'dried-fish', '', 'fas fa-pizza-slice', 'Published', '2020-06-24 21:11:49', '2020-06-24 21:11:49'),
(17, 'Dairy & Spreads', 'dairy-spreads', '', 'fas fa-pepper-hot', 'Published', '2020-06-24 21:12:13', '2020-06-24 21:12:13'),
(18, 'Grains', 'grains', '', 'fas fa-carrot', 'Published', '2020-06-24 21:12:42', '2020-06-24 21:12:42'),
(19, 'Oils & Extracts', 'oils-extracts', '', 'fas fa-brain', 'Published', '2020-06-24 21:13:07', '2020-06-24 21:13:07'),
(20, 'Nuts & Seeds', 'nuts-seeds', '', 'fas fa-stroopwafel', 'Published', '2020-06-24 21:13:58', '2020-06-24 21:13:58'),
(21, 'Condiments', 'condiments', '', 'fas fa-ice-cream', 'Published', '2020-06-24 21:14:25', '2020-06-24 21:14:25'),
(22, 'Drinks & Beverage', 'drinks-beverage', '', 'fas fa-drumstick-bite', 'Published', '2020-06-24 21:15:18', '2020-06-24 21:43:27'),
(23, 'Finger Foods', 'finger-foods', '', 'fas fa-seedling', 'Published', '2020-06-24 21:15:41', '2020-06-24 21:15:41'),
(24, 'Global Kiosk', 'global-kiosk', '', 'fas fa-lemon', 'Published', '2020-06-24 21:16:02', '2020-06-24 21:16:02'),
(25, 'Poultry & Meat', 'poultry-meat', '', 'fas fa-cookie-bite', 'Published', '2020-06-24 21:16:31', '2020-06-24 21:16:31'),
(26, 'Special Items', 'special-items', '', 'fas fa-egg', 'Published', '2020-06-24 21:17:11', '2020-06-24 21:17:11'),
(27, 'Ready Meals', 'ready-meals', '', 'fas fa-hotdog', 'Published', '2020-06-24 21:17:43', '2020-06-24 21:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slide_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slide_img`, `status`, `created_at`, `updated_at`) VALUES
(9, '334149dd491f08f9aad897d8e5d4515a.jpg', 'Published', '2020-06-24 20:50:48', '2020-06-24 20:50:48'),
(10, '0d8f7707775b9692ff239b45d35022e5.jpg', 'Published', '2020-06-24 20:51:00', '2020-06-24 20:51:00'),
(11, '94ada6c9fcfe96a88a2a158a276b29fd.jpg', 'Published', '2020-06-24 20:51:09', '2020-06-24 20:51:09'),
(12, '561c19dc8fd66ca34f88081e5c494026.jpg', 'Published', '2020-06-24 20:51:19', '2020-06-24 20:51:19'),
(13, 'e86c526ba5fd64ab097bd023caa75d04.jpg', 'Published', '2020-06-24 20:51:32', '2020-06-24 20:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'haq@gmail.com', '2020-06-14 22:52:43', '2020-06-14 22:52:43'),
(3, 'sk@gmail.com', '2020-06-15 01:50:36', '2020-06-15 01:50:36'),
(4, 'haq@gmail.com', '2020-06-15 04:23:43', '2020-06-15 04:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fish n Food', 'fnf@gmail.com', NULL, '$2y$10$UYOE4vnxu554PSeThLasO.fr2ELFaVXTFte6Iywb6b8gb00omRyee', NULL, '2020-06-15 01:26:38', '2020-06-15 01:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_cats`
--
ALTER TABLE `post_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_brands_slug_unique` (`slug`);

--
-- Indexes for table `product_cats`
--
ALTER TABLE `product_cats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_cats_slug_unique` (`slug`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_tags_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_cats`
--
ALTER TABLE `post_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_cats`
--
ALTER TABLE `product_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
